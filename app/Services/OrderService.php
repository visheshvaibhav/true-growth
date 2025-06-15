<?php

namespace App\Services;

use App\Models\DigitalProduct;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;

class OrderService
{
    public function createOrder(DigitalProduct $product, array $data): Order
    {
        $order = Order::create([
            'digital_product_id' => $product->id,
            'customer_email' => $data['email'],
            'customer_name' => $data['name'],
            'amount_paid' => $product->current_price,
            'currency' => 'USD', // You can make this dynamic later
            'payment_gateway' => $data['payment_gateway'],
            'payment_id' => $data['payment_id'],
            'status' => 'completed',
        ]);

        // Send confirmation email with download link
        Mail::to($order->customer_email)
            ->send(new OrderConfirmation($order));

        return $order;
    }

    public function validateDownloadAccess(Order $order, string $token): bool
    {
        return $order->download_token === $token && $order->status === 'completed';
    }
} 