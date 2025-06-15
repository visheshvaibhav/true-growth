<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show(DigitalProduct $product)
    {
        return view('products.checkout', compact('product'));
    }
} 