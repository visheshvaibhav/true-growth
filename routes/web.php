<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ServiceInquiryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\DigitalProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductFileController;
use App\Http\Controllers\PaymentController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

// Careers Routes
Route::get('/careers', [CareersController::class, 'index'])->name('careers');
Route::get('/careers/{slug}', [CareersController::class, 'show'])->name('careers.show');
Route::post('/careers/{slug}/apply', [CareersController::class, 'apply'])->name('careers.apply');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Legal Routes
Route::get('/privacy-policy', [LegalController::class, 'privacy'])->name('privacy');
Route::get('/terms-of-service', [LegalController::class, 'terms'])->name('terms');

// Work Portfolio Routes
Route::get('/work', [WorkController::class, 'index'])->name('work');
Route::get('/case-studies/{slug}', [WorkController::class, 'show'])->name('case-study');

// Service Inquiry Routes
Route::post('/service-inquiry/submit', [ServiceInquiryController::class, 'submit'])->name('service-inquiry.submit');

// Newsletter Routes
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Digital Products
Route::get('/products', [DigitalProductController::class, 'index'])->name('products.index');
Route::get('/products/{product:slug}', [DigitalProductController::class, 'show'])->name('products.show');
Route::get('/products/{product:slug}/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
Route::get('/thank-you', function() {
    // Get the order number from the request
    $orderNumber = request('order');
    
    if (!$orderNumber) {
        return redirect()->route('home');
    }
    
    // Find the order and eager load the digital product
    $order = \App\Models\Order::with('digitalProduct')
        ->where('order_number', $orderNumber)
        ->firstOrFail();
    
    // Generate a signed download URL that expires in 24 hours
    $downloadUrl = \Illuminate\Support\Facades\URL::temporarySignedRoute(
        'products.signed-download',
        now()->addHours(24),
        ['order' => $order->order_number]
    );
    
    return view('products.thank-you', compact('order', 'downloadUrl'));
})->name('products.thank-you');

// Orders & Downloads
Route::post('/orders/{product:slug}/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders/{product:slug}', [OrderController::class, 'store'])->name('orders.store');

// Razorpay Payment Routes
Route::post('/razorpay/order', [PaymentController::class, 'createOrder'])->name('razorpay.order');
Route::post('/razorpay/verify', [PaymentController::class, 'verifyPayment'])->name('razorpay.verify');

// Payment Webhooks
Route::post('/webhooks/razorpay', [WebhookController::class, 'handleRazorpay'])
    ->name('webhooks.razorpay');

// Coupon Routes
Route::post('/coupons/validate', [CouponController::class, 'validate'])->name('coupons.validate');

Route::get('/thank-you/{order}', [OrderController::class, 'showThankYou'])->name('thank-you');

// Product File Routes
Route::middleware(['auth'])->group(function () {
    Route::post('/products/{product}/upload', [ProductFileController::class, 'upload'])->name('products.upload');
});

// Secure download route with signed URLs
Route::get('/orders/{order}/download', [ProductFileController::class, 'download'])
    ->name('products.signed-download')
    ->middleware('signed');

// Test download route
Route::get('/test-download', function() {
    \Log::info('Test download route accessed');
    
    if (Storage::exists('test-download.txt')) {
        \Log::info('Test file exists, attempting download');
        return Storage::download('test-download.txt', 'test.txt', ['Content-Type' => 'text/plain']);
    }
    
    \Log::error('Test file does not exist');
    return response('Test file not found', 404);
})->name('test.download');

// Direct product download test route
Route::get('/direct-download/{product_id}', function($product_id) {
    \Log::info('Direct download route accessed', ['product_id' => $product_id]);
    
    $product = \App\Models\DigitalProduct::find($product_id);
    
    if (!$product) {
        \Log::error('Product not found', ['product_id' => $product_id]);
        return response('Product not found', 404);
    }
    
    \Log::info('Product found', [
        'product_id' => $product->id,
        'file_path' => $product->file_path,
        'file_exists' => Storage::exists($product->file_path)
    ]);
    
    if (!$product->file_path || !Storage::exists($product->file_path)) {
        \Log::error('File not found', ['file_path' => $product->file_path]);
        return response('File not found', 404);
    }
    
    return Storage::download(
        $product->file_path,
        $product->original_filename ?? 'download.pdf',
        ['Content-Type' => $product->mime_type ?? 'application/pdf']
    );
})->name('direct.download');
