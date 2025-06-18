@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-6 sm:py-12" x-data="checkoutData()" x-init="init()">
    <!-- Progress Bar - Hidden on mobile, shown on tablet and up -->
    <div class="hidden sm:block max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <div class="relative">
            <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-full h-1 bg-gray-200"></div>
            <div class="absolute left-0 top-1/2 transform -translate-y-1/2 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 transition-all duration-500" :style="{ width: (step / 3) * 100 + '%' }"></div>
            <div class="relative flex justify-between">
                <div class="step-indicator">
                    <div class="w-10 h-10 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-full flex items-center justify-center text-white font-semibold">1</div>
                    <div class="mt-2 text-sm font-medium" :class="{ 'text-indigo-600': step >= 1, 'text-gray-500': step < 1 }">Information</div>
                </div>
                <div class="step-indicator">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold" :class="{ 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white': step >= 2, 'bg-gray-200 text-gray-400': step < 2 }">2</div>
                    <div class="mt-2 text-sm font-medium" :class="{ 'text-indigo-600': step >= 2, 'text-gray-500': step < 2 }">Payment</div>
                </div>
                <div class="step-indicator">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold" :class="{ 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white': step >= 3, 'bg-gray-200 text-gray-400': step < 3 }">3</div>
                    <div class="mt-2 text-sm font-medium" :class="{ 'text-indigo-600': step >= 3, 'text-gray-500': step < 3 }">Confirmation</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Progress Indicator -->
    <div class="sm:hidden mb-6">
        <div class="px-4">
            <div class="text-center">
                <p class="text-sm text-gray-500">Step <span x-text="step"></span> of 3</p>
                <h2 class="mt-2 text-lg font-medium text-gray-900" x-text="step === 1 ? 'Customer Information' : step === 2 ? 'Payment Details' : 'Order Confirmation'"></h2>
            </div>
            <div class="mt-4 bg-gray-200 rounded-full overflow-hidden">
                <div 
                    class="h-2 bg-gradient-to-r from-indigo-600 to-purple-600 transition-all duration-500" 
                    :style="{ width: (step / 3) * 100 + '%' }"
                ></div>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="lg:grid lg:grid-cols-3 lg:gap-0">
                <!-- Left Panel - Form Steps -->
                <div class="lg:col-span-2 p-4 sm:p-6 md:p-8 border-b lg:border-b-0 lg:border-r border-gray-200">
                    <!-- Step 1: Customer Information -->
                    <div x-show="step === 1" class="space-y-6">
                        <div class="border-b border-gray-200 pb-4">
                            <h2 class="text-xl sm:text-2xl font-bold text-gray-900 hidden sm:block">Customer Information</h2>
                            <p class="mt-1 text-sm text-gray-500 hidden sm:block">Please fill in your details to continue</p>
                        </div>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    x-model="formData.name"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-base sm:text-sm"
                                    :class="{'border-red-300': errors.name}"
                                >
                                <p x-show="errors.name" x-text="errors.name" class="mt-1 text-sm text-red-600"></p>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    x-model="formData.email"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-base sm:text-sm"
                                    :class="{'border-red-300': errors.email}"
                                >
                                <p x-show="errors.email" x-text="errors.email" class="mt-1 text-sm text-red-600"></p>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    x-model="formData.phone"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-base sm:text-sm"
                                    :class="{'border-red-300': errors.phone}"
                                >
                                <p x-show="errors.phone" x-text="errors.phone" class="mt-1 text-sm text-red-600"></p>
                            </div>

                            <div class="pt-4">
                                <button 
                                    @click="if(validateStep1()) { console.log('Step 1 validated, data:', formData); step = 2; }"
                                    class="w-full flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 text-base sm:text-lg font-medium rounded-xl text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300 transform hover:scale-[1.02]"
                                    :class="{ 'opacity-75 cursor-not-allowed': loading }"
                                    :disabled="loading"
                                >
                                    <span x-show="!loading">Continue to Payment</span>
                                    <span x-show="loading" class="flex items-center">
                                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        Processing...
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Payment -->
                    <div x-show="step === 2" class="space-y-6">
                        <div class="border-b border-gray-200 pb-4">
                            <h2 class="text-xl sm:text-2xl font-bold text-gray-900 hidden sm:block">Payment Details</h2>
                            <p class="mt-1 text-sm text-gray-500 hidden sm:block">Secure payment via Razorpay</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 sm:p-6 border border-gray-200">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 space-y-4 sm:space-y-0">
                                <img src="https://razorpay.com/assets/razorpay-logo.svg" alt="Razorpay" class="h-6 sm:h-8">
                                <div class="flex space-x-2">
                                    <img src="https://razorpay.com/assets/payment-methods/visa.svg" alt="Visa" class="h-6">
                                    <img src="https://razorpay.com/assets/payment-methods/mastercard.svg" alt="Mastercard" class="h-6">
                                    <img src="https://razorpay.com/assets/payment-methods/rupay.svg" alt="RuPay" class="h-6">
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button 
                                    @click="initializePayment()"
                                    class="w-full flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 text-base sm:text-lg font-medium rounded-xl text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300 transform hover:scale-[1.02]"
                                    :class="{ 'opacity-75 cursor-not-allowed': loading }"
                                    :disabled="loading"
                                >
                                    <span x-show="!loading">Pay ₹{{ number_format($product->current_price, 2) }}</span>
                                    <span x-show="loading" class="flex items-center">
                                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        Processing...
                                    </span>
                                </button>
                            </div>

                            <div class="mt-6 space-y-4">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    <span class="text-sm text-gray-600">Secure 256-bit encryption</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                    <span class="text-sm text-gray-600">100% secure payment</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between pt-4">
                            <button 
                                @click="step = 1; console.log('Going back to step 1, preserving data:', formData);" 
                                class="flex items-center text-sm text-indigo-600 hover:text-indigo-500 transition-colors duration-200"
                            >
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                                Back to Information
                            </button>
                        </div>
                    </div>

                    <!-- Step 3: Confirmation -->
                    <div x-show="step === 3" class="text-center py-6 sm:py-8">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-2">Thank You for Your Purchase!</h2>
                        <p class="text-gray-600 mb-8">Your order has been confirmed and will be delivered instantly.</p>
                        <div class="animate-pulse">
                            <p class="text-sm text-gray-500">Redirecting you to the download page...</p>
                        </div>
                    </div>
                </div>

                <!-- Right Panel - Order Summary -->
                <div class="bg-gray-50 p-4 sm:p-6 md:p-8 lg:rounded-r-2xl">
                    <div class="lg:sticky lg:top-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-6">Order Summary</h3>
                        
                        <div class="flex items-start space-x-4 mb-6">
                            <div class="flex-shrink-0 w-20 h-20 bg-gray-200 rounded-lg overflow-hidden">
                                @if($product->image)
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                                @endif
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-sm font-medium text-gray-900 truncate">{{ $product->name }}</h4>
                                <p class="mt-1 text-sm text-gray-500">Digital Product</p>
                            </div>
                        </div>

                        <!-- Coupon Code Section -->
                        <div x-data="{ 
                            showCouponInput: false,
                            couponCode: '',
                            couponLoading: false,
                            couponError: '',
                            appliedCoupon: null,
                            async applyCoupon() {
                                this.couponLoading = true;
                                this.couponError = '';
                                try {
                                    const response = await fetch('{{ route('coupons.validate') }}', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        },
                                        body: JSON.stringify({
                                            code: this.couponCode,
                                            amount: {{ $product->current_price }}
                                        })
                                    });
                                    const data = await response.json();
                                    if (data.success) {
                                        this.appliedCoupon = data.coupon;
                                        this.showCouponInput = false;
                                    } else {
                                        this.couponError = data.message;
                                    }
                                } catch (error) {
                                    this.couponError = 'Failed to apply coupon';
                                }
                                this.couponLoading = false;
                            }
                        }" class="space-y-3 mb-6">
                            <div x-show="!showCouponInput && !appliedCoupon" class="flex items-center justify-between">
                                <button 
                                    @click="showCouponInput = true"
                                    class="text-sm text-indigo-600 hover:text-indigo-500 flex items-center"
                                >
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                    </svg>
                                    Have a coupon code?
                                </button>
                            </div>

                            <div x-show="showCouponInput" class="space-y-2">
                                <div class="flex space-x-2">
                                    <input 
                                        type="text" 
                                        x-model="couponCode"
                                        placeholder="Enter coupon code"
                                        class="flex-1 rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
                                        :class="{'border-red-300': couponError}"
                                    >
                                    <button 
                                        @click="applyCoupon()"
                                        class="px-4 py-2 text-sm font-medium rounded-lg text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        :class="{ 'opacity-75 cursor-not-allowed': couponLoading }"
                                        :disabled="couponLoading || !couponCode"
                                    >
                                        <span x-show="!couponLoading">Apply</span>
                                        <svg x-show="couponLoading" class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <p x-show="couponError" x-text="couponError" class="text-sm text-red-600"></p>
                            </div>

                            <div x-show="appliedCoupon" class="bg-green-50 rounded-lg p-3">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-sm text-green-700" x-text="'Coupon ' + appliedCoupon.code + ' applied'"></span>
                                    </div>
                                    <button 
                                        @click="appliedCoupon = null; couponCode = ''"
                                        class="text-sm text-green-600 hover:text-green-500"
                                    >
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Price Breakdown -->
                        <div class="border-t border-gray-200 pt-4 space-y-4">
                            <div class="flex justify-between">
                                <p class="text-sm text-gray-600">Subtotal</p>
                                <p class="text-sm font-medium text-gray-900">₹{{ number_format($product->current_price, 2) }}</p>
                            </div>

                            <template x-if="appliedCoupon">
                                <div class="flex justify-between text-green-600">
                                    <p class="text-sm">Discount</p>
                                    <p class="text-sm font-medium" x-text="'- ₹' + appliedCoupon.discount.toFixed(2)"></p>
                                </div>
                            </template>

                            <div class="flex justify-between border-t border-gray-200 pt-4">
                                <p class="text-base font-medium text-gray-900">Total</p>
                                <p class="text-base font-medium text-gray-900" x-text="appliedCoupon ? '₹' + appliedCoupon.final_amount.toFixed(2) : '₹{{ number_format($product->current_price, 2) }}'"></p>
                            </div>
                        </div>

                        <!-- What's Included -->
                        <div class="mt-8">
                            <div class="rounded-lg bg-white p-4 border border-gray-200">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">What's included:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-center text-sm text-gray-600">
                                        <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Instant digital delivery</span>
                                    </li>
                                    <li class="flex items-center text-sm text-gray-600">
                                        <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Secure payment via Razorpay</span>
                                    </li>
                                    <li class="flex items-center text-sm text-gray-600">
                                        <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>24/7 customer support</span>
                                    </li>
                                    <li class="flex items-center text-sm text-gray-600">
                                        <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>100% satisfaction guarantee</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    // Create a notification function outside of Alpine.js
    window.createNotification = function(message, type = 'error') {
        // Ensure message is a string
        const safeMessage = typeof message === 'string' ? message : 'An error occurred';
        
        const notificationDiv = document.createElement('div');
        notificationDiv.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-opacity duration-500 ${
            type === 'error' ? 'bg-red-50 text-red-700 border border-red-200' : 
            type === 'success' ? 'bg-green-50 text-green-700 border border-green-200' : 
            'bg-blue-50 text-blue-700 border border-blue-200'
        }`;
        
        notificationDiv.innerHTML = `
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    ${type === 'error' ? 
                        '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>' : 
                        '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>'
                    }
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium">${safeMessage}</p>
                </div>
                <div class="ml-auto pl-3">
                    <button class="inline-flex text-gray-400 hover:text-gray-500">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        `;
        
        document.body.appendChild(notificationDiv);
        
        // Add click event to close button
        notificationDiv.querySelector('button').addEventListener('click', () => {
            notificationDiv.remove();
        });
        
        // Auto-remove after 5 seconds
        setTimeout(() => {
            notificationDiv.style.opacity = '0';
            setTimeout(() => {
                notificationDiv.remove();
            }, 500);
        }, 5000);
        
        return notificationDiv;
    };

    function checkoutData() {
        return {
            step: 1,
            formData: {
                name: '',
                email: '',
                phone: '',
                address: '',
            },
            errors: {},
            loading: false,
            validateStep1() {
                this.errors = {};
                if (!this.formData.name) this.errors.name = 'Name is required';
                if (!this.formData.email) this.errors.email = 'Email is required';
                else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.formData.email)) this.errors.email = 'Please enter a valid email';
                if (!this.formData.phone) this.errors.phone = 'Phone number is required';
                
                // Debug validation
                console.log('Validating step 1:', this.formData, 'Errors:', this.errors);
                
                return Object.keys(this.errors).length === 0;
            },
            init() {
                // Debug Alpine.js data changes
                this.$watch('formData', (value) => {
                    console.log('formData changed:', value);
                    
                    // Store in local storage for persistence
                    localStorage.setItem('checkout_form_data', JSON.stringify(value));
                });
                
                // Try to restore from local storage
                const savedData = localStorage.getItem('checkout_form_data');
                if (savedData) {
                    try {
                        const parsedData = JSON.parse(savedData);
                        this.formData = {...this.formData, ...parsedData};
                        console.log('Restored form data from storage:', this.formData);
                    } catch (e) {
                        console.error('Failed to parse saved form data:', e);
                    }
                }
            },
            initializePayment() {
                this.loading = true;
                
                // Debug Alpine.js data
                console.log('Starting payment with formData:', this.formData);
                
                // Check if formData exists and is properly initialized
                if (!this.formData || !this.formData.name || !this.formData.email || !this.formData.phone) {
                    console.error('Missing required form data:', this.formData);
                    window.createNotification('Please fill in all required fields');
                    this.loading = false;
                    
                    // If we're on step 2 but form data is missing, go back to step 1
                    if (this.step === 2) {
                        this.step = 1;
                    }
                    return;
                }
                
                this.processPayment();
            },
            async processPayment() {
                try {
                    // Create the payload with explicit values to ensure they're included
                    const payload = {
                        product_id: {{ $product->id }},
                        name: this.formData.name,
                        email: this.formData.email,
                        phone: this.formData.phone,
                        coupon_code: this.appliedCoupon?.code
                    };
                    
                    console.log('Sending payload:', payload);
                    
                    // Create Razorpay order
                    const orderResponse = await fetch('{{ route('razorpay.order') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(payload)
                    });

                    const orderData = await orderResponse.json();
                    console.log('Order creation response:', orderData);
                    
                    if (!orderData.success) {
                        // Handle validation errors specifically
                        if (orderData.errors) {
                            const errorMessages = [];
                            for (const field in orderData.errors) {
                                errorMessages.push(orderData.errors[field].join(' '));
                                
                                // Update Alpine.js form errors
                                if (this.formData && field in this.formData) {
                                    this.errors[field] = orderData.errors[field][0];
                                }
                            }
                            throw new Error(errorMessages.join('<br>') || orderData.message || 'Failed to create order');
                        } else {
                            throw new Error(orderData.message || 'Failed to create order');
                        }
                    }

                    // Initialize Razorpay payment
                    const options = {
                        key: '{{ env('RAZORPAY_KEY') }}',
                        amount: orderData.amount,
                        currency: 'INR',
                        name: '{{ config('app.name') }}',
                        description: '{{ $product->name }}',
                        order_id: orderData.order_id,
                        handler: async (response) => {
                            try {
                                // Verify payment with backend
                                const verifyResponse = await fetch('{{ route('razorpay.verify') }}', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                    body: JSON.stringify({
                                        temp_order_id: orderData.temp_order_id,
                                        razorpay_payment_id: response.razorpay_payment_id,
                                        razorpay_order_id: response.razorpay_order_id,
                                        razorpay_signature: response.razorpay_signature
                                    })
                                });

                                const verifyData = await verifyResponse.json();
                                console.log('Payment verification response:', verifyData);

                                if (verifyData.success) {
                                    this.step = 3;
                                    setTimeout(() => {
                                        window.location.href = '{{ route('products.thank-you') }}?order=' + verifyData.order.order_number;
                                    }, 2000);
                                } else {
                                    // Handle validation errors specifically
                                    if (verifyData.errors) {
                                        const errorMessages = [];
                                        for (const field in verifyData.errors) {
                                            errorMessages.push(verifyData.errors[field].join(' '));
                                        }
                                        throw new Error(errorMessages.join('<br>') || verifyData.message || 'Payment verification failed');
                                    } else {
                                        throw new Error(verifyData.message || 'Payment verification failed');
                                    }
                                }
                            } catch (error) {
                                console.error('Payment verification error:', error);
                                window.createNotification(error.message || 'Payment verification failed. Please contact support if the amount was deducted.');
                            } finally {
                                this.loading = false;
                            }
                        },
                        modal: {
                            ondismiss: () => {
                                this.loading = false;
                            }
                        },
                        prefill: {
                            name: this.formData.name,
                            email: this.formData.email,
                            contact: this.formData.phone
                        },
                        theme: {
                            color: '#4F46E5'
                        }
                    };

                    const rzp = new Razorpay(options);
                    rzp.open();
                } catch (error) {
                    console.error('Payment initialization error:', error);
                    window.createNotification(error.message || 'Failed to initialize payment. Please try again.');
                    this.loading = false;
                }
            }
        };
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Add a global event listener for Alpine initialization
        document.addEventListener('alpine:initialized', function() {
            console.log('Alpine.js initialized successfully');
        });

        window.Alpine = window.Alpine || {};
    });
</script>
@endpush 