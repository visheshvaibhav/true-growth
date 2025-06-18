<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use App\Models\Order;
use App\Models\Coupon;
use App\Mail\OrderConfirmation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Razorpay\Api\Api;

class OrderController extends Controller
{
    protected $razorpay;

    public function __construct()
    {
        $this->razorpay = new Api(
            config('services.razorpay.key'),
            config('services.razorpay.secret')
        );
    }

    public function create(Request $request, DigitalProduct $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'coupon_code' => 'nullable|string|max:50'
        ]);

        $amount = $product->current_price;
        $coupon = null;

        if ($request->coupon_code) {
            $coupon = Coupon::where('code', $request->coupon_code)->first();
            if ($coupon && $coupon->isValid()) {
                $discount = $coupon->calculateDiscount($amount);
                $amount = $amount - $discount;
            }
        }

        try {
            $order = $this->razorpay->order->create([
                'amount' => $amount * 100,
                'currency' => 'INR',
                'notes' => [
                    'product_id' => $product->id,
                    'customer_name' => $request->name,
                    'customer_email' => $request->email,
                    'coupon_code' => $request->coupon_code
                ]
            ]);

            return response()->json([
                'success' => true,
                'order_id' => $order->id,
                'amount' => $amount * 100
            ]);
        } catch (\Exception $e) {
            \Log::error('Failed to create Razorpay order: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to initialize payment. Please try again.'
            ], 500);
        }
    }

    public function store(Request $request, DigitalProduct $product): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'razorpay_payment_id' => 'required|string',
            'razorpay_order_id' => 'required|string',
            'razorpay_signature' => 'required|string',
            'coupon_code' => 'nullable|string|max:50'
        ]);

        // Verify Razorpay signature
        try {
            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ];
            
            $this->razorpay->utility->verifyPaymentSignature($attributes);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Payment verification failed'
            ], 400);
        }

        $amount = $product->current_price;
        $coupon = null;
        $discount = 0;

        if ($request->coupon_code) {
            $coupon = Coupon::where('code', $request->coupon_code)->first();
            if ($coupon && $coupon->isValid()) {
                $discount = $coupon->calculateDiscount($amount);
                $amount = $amount - $discount;
                $coupon->incrementUsage();
            }
        }

        // Create order
        $order = Order::create([
            'order_number' => 'ORD-' . strtoupper(uniqid()),
            'digital_product_id' => $product->id,
            'customer_name' => $request->name,
            'customer_email' => $request->email,
            'customer_phone' => $request->phone,
            'amount' => $amount,
            'original_amount' => $product->current_price,
            'discount_amount' => $discount,
            'coupon_code' => $request->coupon_code,
            'razorpay_order_id' => $request->razorpay_order_id,
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'status' => 'completed'
        ]);

        // Generate signed download URL
        $downloadUrl = URL::signedRoute('download.product', ['order' => $order->order_number]);

        // Send confirmation email
        Mail::to($order->customer_email)
            ->send(new OrderConfirmation($order, $downloadUrl));

        return response()->json([
            'success' => true,
            'order' => $order,
            'message' => 'Order completed successfully'
        ]);
    }

    public function handlePayment(Request $request)
    {
        $input = $request->all();
        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if($payment->status === 'captured') {
            // Create order
            $order = Order::create([
                'order_number' => 'ORD-' . strtoupper(uniqid()),
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'amount' => $payment->amount / 100,
                'payment_id' => $payment->id,
                'product_id' => $request->product_id,
                'status' => 'completed'
            ]);

            // Generate a signed download URL that expires in 24 hours
            $downloadUrl = URL::temporarySignedRoute(
                'products.download',
                now()->addHours(24),
                ['order' => $order->id]
            );

            // Send confirmation email
            try {
                Mail::to($order->customer_email)->send(new OrderConfirmation($order));
            } catch (\Exception $e) {
                // Log the error but don't stop the process
                \Log::error('Failed to send order confirmation email: ' . $e->getMessage());
            }

            return redirect()->route('thank-you', ['order' => $order->id])
                           ->with('success', 'Payment successful! Check your email for download instructions.');
        }

        return redirect()->back()->with('error', 'Payment failed. Please try again.');
    }

    public function showThankYou($orderNumber)
    {
        // Find the order by order_number
        $order = Order::where('order_number', $orderNumber)->firstOrFail();
        
        // Ensure the order exists and is completed
        if (!$order || $order->status !== 'completed') {
            abort(404);
        }

        // Generate a signed download URL that expires in 24 hours
        $downloadUrl = URL::temporarySignedRoute(
            'products.download',
            now()->addHours(24),
            ['order' => $order->id]
        );

        return view('products.thank-you', compact('order', 'downloadUrl'));
    }

    public function download(Order $order)
    {
        // Ensure the order exists and belongs to the customer
        if (!$order || $order->status !== 'completed') {
            abort(404);
        }

        // Get the product file path
        $filePath = storage_path('app/products/' . $order->product->file_path);

        // Check if file exists
        if (!file_exists($filePath)) {
            return back()->with('error', 'Product file not found. Please contact support.');
        }

        // Return the file download
        return response()->download($filePath, $order->product->original_filename);
    }
} 