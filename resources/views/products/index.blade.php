@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900">Digital Products</h1>
            <p class="mt-4 text-xl text-gray-600">Browse our collection of digital resources</p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($products as $product)
            <div class="group relative bg-white rounded-2xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                @if($product->thumbnail_path)
                    <div class="aspect-video w-full overflow-hidden">
                        <img src="{{ Storage::url($product->thumbnail_path) }}" 
                             alt="{{ $product->name }}" 
                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                    </div>
                @endif

                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900">{{ $product->name }}</h3>
                    <p class="mt-2 text-gray-600 line-clamp-3">{{ $product->short_description }}</p>

                    <div class="mt-4 flex items-center">
                        @if($product->sale_is_active)
                            <span class="text-2xl font-bold text-indigo-600">₹{{ number_format($product->sale_price, 2) }}</span>
                            <span class="ml-2 text-lg text-gray-500 line-through">₹{{ number_format($product->original_price, 2) }}</span>
                            <span class="ml-2 text-sm font-medium text-green-600">
                                Save {{ $product->discount_percentage }}%
                            </span>
                        @else
                            <span class="text-2xl font-bold text-indigo-600">₹{{ number_format($product->original_price, 2) }}</span>
                        @endif
                    </div>

                    @if($product->sale_ends_at)
                        <div class="mt-2 text-sm text-red-600">
                            Sale ends in <span class="font-medium countdown" data-ends="{{ $product->sale_ends_at->toIso8601String() }}">
                                {{ $product->sale_ends_at->diffForHumans() }}
                            </span>
                        </div>
                    @endif

                    <div class="mt-6">
                        <a href="{{ route('products.show', $product) }}" 
                           class="block w-full text-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
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
});
</script>
@endpush
@endsection 