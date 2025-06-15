<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function show(Request $request, Order $order): StreamedResponse
    {
        abort_if(!$request->hasValidSignature(), 403, 'Invalid or expired download link');
        
        $product = $order->digitalProduct;
        $filePath = $product->file_path;
        
        abort_if(!Storage::exists($filePath), 404, 'Product file not found');

        $order->update(['downloaded_at' => now()]);

        return Storage::download($filePath, $product->name . '.' . pathinfo($filePath, PATHINFO_EXTENSION));
    }
} 