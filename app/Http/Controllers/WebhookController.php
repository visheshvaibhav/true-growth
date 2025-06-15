<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    public function handleRazorpay(Request $request)
    {
        $payload = $request->all();
        $signature = $request->header('x-razorpay-signature');

        try {
            // Verify webhook signature
            $expectedSignature = hash_hmac('sha256', json_encode($payload), config('services.razorpay.webhook_secret'));
            
            if ($signature !== $expectedSignature) {
                Log::error('Razorpay webhook signature verification failed');
                return response()->json(['message' => 'Invalid signature'], 400);
            }

            // Handle different event types
            switch ($payload['event']) {
                case 'payment.failed':
                    $order = Order::where('razorpay_payment_id', $payload['payload']['payment']['entity']['id'])->first();
                    if ($order) {
                        $order->update(['status' => 'failed']);
                    }
                    break;

                case 'payment.captured':
                    $order = Order::where('razorpay_payment_id', $payload['payload']['payment']['entity']['id'])->first();
                    if ($order) {
                        $order->update(['status' => 'completed']);
                    }
                    break;

                case 'refund.processed':
                    $order = Order::where('razorpay_payment_id', $payload['payload']['payment']['entity']['id'])->first();
                    if ($order) {
                        $order->update(['status' => 'refunded']);
                    }
                    break;
            }

            return response()->json(['message' => 'Webhook processed successfully']);

        } catch (\Exception $e) {
            Log::error('Razorpay webhook processing failed: ' . $e->getMessage());
            return response()->json(['message' => 'Webhook processing failed'], 500);
        }
    }
} 