<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use App\Models\Order;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;

class PaymentController extends Controller
{
    protected $razorpay;

    public function __construct()
    {
        try {
            $key = Config::get('services.razorpay.key');
            $secret = Config::get('services.razorpay.secret');
            
            // Fallback to env if config is not set
            if (empty($key) || empty($secret)) {
                $key = env('RAZORPAY_KEY');
                $secret = env('RAZORPAY_SECRET');
                
                // Log this fallback for debugging
                Log::info('Using env variables for Razorpay keys instead of config');
            }
            
            // Log the key being used (first 4 chars only for security)
            Log::info('Initializing Razorpay with key: ' . substr($key, 0, 4) . '...');
            
            $this->razorpay = new Api($key, $secret);
        } catch (\Exception $e) {
            Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
            // Continue execution, the error will be caught when API is used
        }
    }

    /**
     * Create a Razorpay order
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function createOrder(Request $request): JsonResponse
    {
        try {
            // Log the incoming request data for debugging
            Log::info('Razorpay order creation request raw data:', [
                'request_all' => $request->all(),
                'content_type' => $request->header('Content-Type'),
                'input' => $request->getContent(),
            ]);
            
            // Validate request data
            $validator = Validator::make($request->all(), [
                'product_id' => 'required|exists:digital_products,id',
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'coupon_code' => 'nullable|string|max:50'
            ]);

            if ($validator->fails()) {
                Log::warning('Razorpay order validation failed:', [
                    'errors' => $validator->errors()->toArray(),
                    'request_data' => $request->all()
                ]);
                
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()->toArray()
                ], 422);
            }

            $product = DigitalProduct::findOrFail($request->product_id);
            $amount = $product->current_price;
            $coupon = null;

            if ($request->coupon_code) {
                $coupon = Coupon::where('code', $request->coupon_code)->first();
                if ($coupon && $coupon->isValid()) {
                    $discount = $coupon->calculateDiscount($amount);
                    $amount = $amount - $discount;
                }
            }

            // Create Razorpay Order
            $order = $this->razorpay->order->create([
                'receipt' => 'ORDER_' . uniqid(),
                'amount' => round($amount * 100), // Convert to paisa
                'currency' => 'INR',
                'notes' => [
                    'product_id' => $product->id,
                    'customer_name' => $request->name,
                    'customer_email' => $request->email,
                    'coupon_code' => $request->coupon_code ?? ''
                ]
            ]);

            // Store temporary order in database
            $tempOrder = Order::create([
                'order_number' => 'ORD-' . strtoupper(uniqid()),
                'digital_product_id' => $product->id,
                'customer_name' => $request->name,
                'customer_email' => $request->email,
                'customer_phone' => $request->phone,
                'amount' => $amount,
                'original_amount' => $product->current_price,
                'discount_amount' => $request->coupon_code ? ($product->current_price - $amount) : 0,
                'coupon_code' => $request->coupon_code,
                'razorpay_order_id' => $order->id,
                'status' => 'pending'
            ]);

            Log::info('Razorpay order created successfully', [
                'order_id' => $order->id,
                'temp_order_id' => $tempOrder->id
            ]);

            return response()->json([
                'success' => true,
                'order_id' => $order->id,
                'amount' => round($amount * 100),
                'temp_order_id' => $tempOrder->id
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Razorpay order validation failed: ' . $e->getMessage(), [
                'errors' => $e->errors(),
                'request_data' => $request->all()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Razorpay order creation failed: ' . $e->getMessage(), [
                'request' => $request->all(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to create order: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Verify Razorpay payment
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function verifyPayment(Request $request): JsonResponse
    {
        try {
            // Log the incoming request data for debugging
            Log::info('Razorpay payment verification request:', $request->all());
            
            $validator = Validator::make($request->all(), [
                'razorpay_payment_id' => 'required|string',
                'razorpay_order_id' => 'required|string',
                'razorpay_signature' => 'required|string',
                'temp_order_id' => 'required|exists:orders,id'
            ]);

            if ($validator->fails()) {
                Log::warning('Razorpay payment validation failed:', $validator->errors()->toArray());
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()->toArray()
                ], 422);
            }

            $signature = $request->razorpay_signature;
            $paymentId = $request->razorpay_payment_id;
            $orderId = $request->razorpay_order_id;

            // Get the Razorpay secret from config
            $secret = Config::get('services.razorpay.secret');
            if (empty($secret)) {
                $secret = env('RAZORPAY_SECRET');
            }

            // Generate signature and verify
            $generated_signature = hash_hmac('sha256', $orderId . "|" . $paymentId, $secret);

            if ($generated_signature !== $signature) {
                Log::warning('Razorpay signature verification failed', [
                    'expected' => $generated_signature,
                    'received' => $signature
                ]);
                
                return response()->json([
                    'success' => false,
                    'message' => 'Payment verification failed. Invalid signature.'
                ], 400);
            }

            // Update order status
            $order = Order::findOrFail($request->temp_order_id);
            $order->update([
                'razorpay_payment_id' => $paymentId,
                'razorpay_signature' => $signature,
                'status' => 'completed'
            ]);

            Log::info('Razorpay payment verified successfully', [
                'order_id' => $order->id,
                'payment_id' => $paymentId
            ]);

            return response()->json([
                'success' => true,
                'order' => $order,
                'message' => 'Payment successful!'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Razorpay payment validation failed: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Razorpay payment verification failed: ' . $e->getMessage(), [
                'request' => $request->all()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Payment verification failed: ' . $e->getMessage()
            ], 500);
        }
    }
} 