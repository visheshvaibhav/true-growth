@extends('layouts.app')

@section('content')
<!-- Unique Geometric Background Pattern -->
<div class="fixed inset-0 -z-10 opacity-[0.02]">
    <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 32px 32px;"></div>
</div>

<div class="min-h-screen bg-gradient-to-b from-white to-indigo-50/50 pt-24 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-indigo-600 transition-colors">
                        <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        Products
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="ml-1 text-gray-500 md:ml-2">{{ $product->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 lg:items-start">
            <!-- Product Hero Image -->
            <div class="flex flex-col">
                @if($product->thumbnail_path)
                    <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-white p-4 shadow-lg ring-1 ring-black/5">
                        <img src="{{ asset('storage/' . $product->thumbnail_path) }}" 
                             alt="{{ $product->name }}" 
                             class="w-full h-full object-contain rounded-xl">
                        <div class="absolute inset-0 ring-1 ring-inset ring-black/10 rounded-xl"></div>
                    </div>
                @else
                    <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-gray-100 p-4 shadow-lg ring-1 ring-black/5 flex items-center justify-center">
                        <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                @endif
            </div>

            <!-- Product Info -->
            <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl blur opacity-20"></div>
                    <div class="relative bg-white rounded-2xl p-8 shadow-xl ring-1 ring-black/5">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900 font-poppins">{{ $product->name }}</h1>
                        
                        <div class="mt-6">
                            <div class="flex items-center">
                                @if($product->sale_is_active)
                                    <p class="text-4xl font-bold text-indigo-600">₹{{ number_format($product->sale_price, 2) }}</p>
                                    <p class="ml-3 text-2xl text-gray-500 line-through">₹{{ number_format($product->original_price, 2) }}</p>
                                    <div class="ml-4 inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                        Save {{ $product->discount_percentage }}%
                                    </div>
                                @else
                                    <p class="text-4xl font-bold text-indigo-600">₹{{ number_format($product->original_price, 2) }}</p>
                                @endif
                            </div>

                            @if($product->sale_ends_at)
                                <div class="mt-4">
                                    <div class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Limited Time Offer - Ends in <span class="ml-1 font-bold countdown" data-ends="{{ $product->sale_ends_at->toIso8601String() }}">
                                            {{ $product->sale_ends_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="mt-6">
                            <div class="text-base text-gray-700 space-y-6">
                                {!! $product->description !!}
                            </div>
                        </div>

                        <div class="mt-8 space-y-6">
                            <div class="bg-indigo-50 rounded-xl p-6">
                                <h3 class="text-lg font-semibold text-indigo-900 mb-4">What's Included:</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-center text-gray-700">
                                        <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Instant Digital Download
                                    </li>
                                    <li class="flex items-center text-gray-700">
                                        <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Lifetime Access
                                    </li>
                                    <li class="flex items-center text-gray-700">
                                        <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Regular Updates
                                    </li>
                                </ul>
                            </div>

                            <button onclick="window.location.href='{{ route('checkout.show', $product) }}'" 
                                    class="w-full flex items-center justify-center px-8 py-4 text-lg font-medium rounded-xl text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300 transform hover:scale-[1.02]">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                Buy Now - ₹{{ number_format($product->current_price, 2) }}
                            </button>

                            <div class="flex items-center justify-center space-x-6 text-sm text-gray-500">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    Secure Payment
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                                    </svg>
                                    Instant Download
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                    Money-back Guarantee
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded');

    // Countdown timer
    const countdowns = document.querySelectorAll('.countdown');
    function updateCountdown() {
        countdowns.forEach(el => {
            const endsAt = new Date(el.dataset.ends);
            const now = new Date();
            const diff = endsAt - now;

            if (diff <= 0) {
                el.textContent = 'Sale ended';
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            let text = '';
            if (days > 0) text += `${days}d `;
            if (hours > 0) text += `${hours}h `;
            text += `${minutes}m ${seconds}s`;

            el.textContent = text;
        });
    }

    if (countdowns.length > 0) {
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }

    // Create notification element for non-blocking messages
    const createNotification = (message, type = 'error') => {
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

    // Payment form
    const form = document.getElementById('payment-form');
    const buyButton = document.getElementById('buy-now-button');
    
    console.log('Form element:', form);
    console.log('Buy button element:', buyButton);

    if (!form || !buyButton) {
        console.error('Required elements not found');
        return;
    }

    const originalButtonText = buyButton.innerHTML;

    buyButton.addEventListener('click', async function(e) {
        console.log('Buy button clicked');

        // Validate form
        if (!form.checkValidity()) {
            console.log('Form validation failed');
            form.reportValidity();
            return;
        }

        // Disable the buy button and show loading state
        buyButton.disabled = true;
        buyButton.innerHTML = `
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Processing...
        `;

        try {
            console.log('Creating Razorpay order...');
            // Create Razorpay order
            const orderResponse = await fetch('{{ route('razorpay.order') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    product_id: {{ $product->id }},
                    name: form.name?.value || '',
                    email: form.email?.value || '',
                    phone: form.phone?.value || form.email?.value || ''
                })
            });

            const orderData = await orderResponse.json();
            console.log('Order creation response:', orderData);

            if (!orderData.success) {
                // Handle validation errors specifically
                if (orderData.errors) {
                    const errorMessages = [];
                    for (const field in orderData.errors) {
                        errorMessages.push(orderData.errors[field].join(' '));
                    }
                    throw new Error(errorMessages.join('<br>') || orderData.message || 'Failed to create order');
                } else {
                    throw new Error(orderData.message || 'Failed to create order');
                }
            }

            console.log('Initializing Razorpay...');
            // Initialize Razorpay payment
            const options = {
                key: '{{ env('RAZORPAY_KEY') }}',
                amount: orderData.amount, // Amount in paise
                currency: 'INR',
                name: '{{ config('app.name') }}',
                description: '{{ $product->name }}',
                order_id: orderData.order_id,
                image: '{{ asset('images/logo.png') }}',
                handler: async function(response) {
                    console.log('Payment successful, verifying...');
                    try {
                        const res = await fetch('{{ route('razorpay.verify') }}', {
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

                        const data = await res.json();
                        console.log('Order verification response:', data);

                        if (data.success) {
                            window.location.href = '{{ route('thank-you', ['order_number' => '']) }}' + data.order.order_number;
                        } else {
                            // Handle validation errors specifically
                            if (data.errors) {
                                const errorMessages = [];
                                for (const field in data.errors) {
                                    errorMessages.push(data.errors[field].join(' '));
                                }
                                throw new Error(errorMessages.join('<br>') || data.message || 'Payment verification failed');
                            } else {
                                throw new Error(data.message || 'Payment verification failed');
                            }
                        }
                    } catch (error) {
                        console.error('Payment verification error:', error);
                        createNotification('Payment verification failed. Please contact support if the amount was deducted.');
                        buyButton.disabled = false;
                        buyButton.innerHTML = originalButtonText;
                    }
                },
                prefill: {
                    name: form.name?.value || '',
                    email: form.email?.value || '',
                    contact: form.phone?.value || form.email?.value || ''
                },
                theme: {
                    color: '#4F46E5'
                },
                modal: {
                    ondismiss: function() {
                        console.log('Razorpay modal dismissed');
                        buyButton.disabled = false;
                        buyButton.innerHTML = originalButtonText;
                    }
                }
            };

            const rzp = new Razorpay(options);
            console.log('Opening Razorpay modal...');
            rzp.open();

        } catch (error) {
            console.error('Error:', error);
            createNotification(error.message || 'An error occurred. Please try again.');
            buyButton.disabled = false;
            buyButton.innerHTML = originalButtonText;
        }
    });
});
</script>
@endpush
@endsection 