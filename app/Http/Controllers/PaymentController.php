<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use App\Models\Order;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    protected $razorpay;

    public function __construct()
    {
        $this->razorpay = new Api(
            env('RAZORPAY_KEY'),
            env('RAZORPAY_SECRET')
        );
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
            $request->validate([
                'product_id' => 'required|exists:digital_products,id',
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'coupon_code' => 'nullable|string|max:50'
            ]);

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
                'amount' => $amount * 100, // Convert to paisa
                'currency' => 'INR',
                'notes' => [
                    'product_id' => $product->id,
                    'customer_name' => $request->name,
                    'customer_email' => $request->email,
                    'coupon_code' => $request->coupon_code
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

            return response()->json([
                'success' => true,
                'order_id' => $order->id,
                'amount' => $amount * 100,
                'temp_order_id' => $tempOrder->id
            ]);
        } catch (\Exception $e) {
            Log::error('Razorpay order creation failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to create order. Please try again.'
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
            $request->validate([
                'razorpay_payment_id' => 'required|string',
                'razorpay_order_id' => 'required|string',
                'razorpay_signature' => 'required|string',
                'temp_order_id' => 'required|exists:orders,id'
            ]);

            $signature = $request->razorpay_signature;
            $paymentId = $request->razorpay_payment_id;
            $orderId = $request->razorpay_order_id;

            // Generate signature and verify
            $generated_signature = hash_hmac('sha256', $orderId . "|" . $paymentId, env('RAZORPAY_SECRET'));

            if ($generated_signature !== $signature) {
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

            return response()->json([
                'success' => true,
                'order' => $order,
                'message' => 'Payment successful!'
            ]);
        } catch (\Exception $e) {
            Log::error('Razorpay payment verification failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Payment verification failed. Please contact support.'
            ], 500);
        }
    }
} 