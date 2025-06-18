<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function show(DigitalProduct $product)
    {
        // Get Razorpay key from config or env
        $razorpayKey = Config::get('services.razorpay.key');
        
        // Fallback to env if config is not set
        if (empty($razorpayKey)) {
            $razorpayKey = env('RAZORPAY_KEY');
            Log::info('Using env variable for Razorpay key in checkout page');
        }
        
        // Log that we're rendering the checkout page with the key
        Log::info('Rendering checkout page with Razorpay key: ' . substr($razorpayKey, 0, 6) . '...');
        
        return view('products.checkout', compact('product', 'razorpayKey'));
    }
} 