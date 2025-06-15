<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use Illuminate\View\View;

class DigitalProductController extends Controller
{
    public function index(): View
    {
        $products = DigitalProduct::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('products.index', compact('products'));
    }

    public function show(DigitalProduct $product): View
    {
        abort_if(!$product->is_active, 404);

        return view('products.show', compact('product'));
    }
} 