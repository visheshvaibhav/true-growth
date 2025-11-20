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
    public function upload(Request $request, DigitalProduct $product)
    {
        $request->validate([
            'file' => 'required|file|max:102400' // 100MB max
        ]);

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::uuid() . '.' . $extension;

        // Store the file
        $path = $file->storeAs('products/files', $filename, 'local');

        \Log::info('File uploaded', [
            'product_id' => $product->id,
            'original_name' => $originalName,
            'stored_path' => $path,
            'size' => $file->getSize(),
            'mime_type' => $file->getMimeType()
        ]);

        // Update product with file information
        $product->update([
            'file_path' => $path,
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
        // Log the request for debugging
        \Log::info('Download requested', [
            'order_number' => $order->order_number,
            'status' => $order->status,
            'product_id' => $order->digital_product_id,
            'customer_email' => $order->customer_email,
            'request_url' => request()->fullUrl()
        ]);

        // Verify the order exists and payment is completed
        if (!$order) {
            \Log::error('Order not found');
            abort(404, 'Order not found');
        }

        if (strtolower($order->status) !== 'completed') {
            \Log::error('Order not completed', [
                'status' => $order->status,
                'order_number' => $order->order_number
            ]);
            abort(403, 'Order payment not completed');
        }

        // Get the digital product directly from the relationship
        $product = $order->digitalProduct;

        // Check if product exists and has a valid file
        if (!$product) {
            \Log::error('Product not found', [
                'order_id' => $order->id,
                'digital_product_id' => $order->digital_product_id
            ]);
            abort(404, 'Product not found');
        }

        \Log::info('Product found', [
            'product_id' => $product->id,
            'file_path' => $product->file_path,
            'original_filename' => $product->original_filename,
            'file_size' => $product->file_size,
            'storage_disks' => config('filesystems.disks')
        ]);

        if (!$product->file_path) {
            \Log::error('No file path', [
                'product_id' => $product->id,
                'product_name' => $product->name
            ]);
            abort(404, 'Product file not found');
        }

        // Debug storage configuration
        \Log::info('Storage configuration', [
            'default_disk' => config('filesystems.default'),
            'disks' => array_keys(config('filesystems.disks')),
            'local_root' => config('filesystems.disks.local.root'),
            'absolute_path' => Storage::path($product->file_path),
            'file_exists' => Storage::exists($product->file_path),
            'file_size' => Storage::exists($product->file_path) ? Storage::size($product->file_path) : 'N/A'
        ]);

        // Check if file exists in storage
        if (!Storage::exists($product->file_path)) {
            \Log::error('File does not exist in storage', [
                'path' => $product->file_path,
                'product_id' => $product->id,
                'storage_path' => Storage::path($product->file_path),
                'disk' => config('filesystems.default'),
                'storage_exists' => Storage::exists($product->file_path)
            ]);
            
            // Check in public disk as well
            if (Storage::disk('public')->exists($product->file_path)) {
                \Log::info('File found in public disk', [
                    'path' => $product->file_path
                ]);
                
                // Update the download_at timestamp
                $order->update([
                    'downloaded_at' => now()
                ]);
                
                return Storage::disk('public')->download(
                    $product->file_path,
                    $product->original_filename ?? Str::afterLast($product->file_path, '/'),
                    ['Content-Type' => $product->mime_type ?? Storage::disk('public')->mimeType($product->file_path)]
                );
            }

            // Create a test file to see if we can download anything
            $testFilePath = 'test-download.txt';
            Storage::put($testFilePath, 'This is a test file for download');
            
            \Log::info('Created test file', [
                'test_path' => $testFilePath,
                'exists' => Storage::exists($testFilePath)
            ]);
            
            if (Storage::exists($testFilePath)) {
                \Log::info('Attempting to download test file');
                return Storage::download($testFilePath, 'test-download.txt', ['Content-Type' => 'text/plain']);
            }
            
            abort(404, 'Product file not found on server');
        }

        // Log the successful checks
        \Log::info("Product download authorized", [
            'order_id' => $order->id,
            'product_id' => $product->id,
            'customer_email' => $order->customer_email,
            'file_path' => $product->file_path,
            'file_size' => $product->file_size
        ]);

        // Update downloaded_at timestamp
        $order->update([
            'downloaded_at' => now()
        ]);

        // Get the file from storage and return it as a download
        try {
            \Log::info('Attempting to download file', [
                'file_path' => $product->file_path,
                'original_filename' => $product->original_filename,
                'mime_type' => $product->mime_type
            ]);
            
            return Storage::download(
                $product->file_path,
                $product->original_filename ?? Str::afterLast($product->file_path, '/'),
                ['Content-Type' => $product->mime_type ?? Storage::mimeType($product->file_path)]
            );
        } catch (\Exception $e) {
            \Log::error('Failed to download file', [
                'error' => $e->getMessage(),
                'file_path' => $product->file_path,
                'product_id' => $product->id,
                'trace' => $e->getTraceAsString()
            ]);
            abort(500, 'Failed to download file: ' . $e->getMessage());
        }
    }
} 