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
Route::view('/thank-you', 'products.thank-you')->name('products.thank-you');

// Orders & Downloads
Route::post('/orders/{product:slug}/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders/{product:slug}', [OrderController::class, 'store'])->name('orders.store');
Route::get('/download/{order:order_number}', [DownloadController::class, 'show'])
    ->name('download.product')
    ->middleware('signed');

// Payment Webhooks
Route::post('/webhooks/razorpay', [WebhookController::class, 'handleRazorpay'])
    ->name('webhooks.razorpay');

// Coupon Routes
Route::post('/coupons/validate', [CouponController::class, 'validate'])->name('coupons.validate');

Route::get('/thank-you/{order}', [OrderController::class, 'showThankYou'])->name('thank-you');
Route::get('/download/{order}', [OrderController::class, 'download'])->name('products.download');

// Product File Routes
Route::middleware(['auth'])->group(function () {
    Route::post('/products/{product}/upload', [ProductFileController::class, 'upload'])->name('products.upload');
});

// Secure download route with signed URLs
Route::get('/orders/{order}/download', [ProductFileController::class, 'download'])
    ->name('products.download')
    ->middleware('signed');
