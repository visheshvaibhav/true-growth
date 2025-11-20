<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductFileController extends Controller
{
    /**
     * Upload a file for a product.
     */
    public function upload(Request $request, Product $product)
    {
        $request->validate([
            'file' => 'required|file|max:102400' // 100MB max
        ]);

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::uuid() . '.' . $extension;

        // Store the file
        $path = $file->storeAs('products', $filename, 'local');

        // Update product with file information
        $product->update([
            'file_path' => $filename,
            'original_filename' => $originalName,
            'file_size' => $file->getSize(),
            'mime_type' => $file->getMimeType()
        ]);

        return response()->json([
            'message' => 'File uploaded successfully',
            'filename' => $originalName
        ]);
    }

    /**
     * Download a product file.
     */
    public function download(Order $order)
    {
        // Verify the order is valid and completed
        if (!$order || $order->status !== 'completed') {
            abort(404, 'Order not found or incomplete');
        }

        $product = $order->product;

        // Check if product has a valid file
        if (!$product->file_path || !Storage::exists($product->file_path)) {
            return back()->with('error', 'Product file not available. Please contact support.');
        }

        // Log the download
        \Log::info("Product downloaded", [
            'order_id' => $order->id,
            'product_id' => $product->id,
            'customer_email' => $order->customer_email
        ]);

        // Get the file from storage and return it as a download
        return Storage::download(
            $product->file_path,
            Str::afterLast($product->file_path, '/'), // Use the original filename from storage
            ['Content-Type' => Storage::mimeType($product->file_path)]
        );
    }
} 