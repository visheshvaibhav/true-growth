<!-- Dynamic Navigation -->
<nav x-data="{ isOpen: false }" class="fixed w-full z-50 bg-white/80 backdrop-blur-lg border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo/tg-logo.png') }}" alt="True Growth Logo" style="height: 10rem;" class="w-auto">
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('services.index') }}" class="text-gray-700 hover:text-indigo-600 transition-colors">Services</a>
                <a href="{{ route('work') }}" class="text-gray-700 hover:text-indigo-600 transition-colors">Our Work</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-indigo-600 transition-colors">About</a>
                <a href="{{ route('careers') }}" class="text-gray-700 hover:text-indigo-600 transition-colors">Careers</a>
                <a href="{{ route('contact') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition-colors">
                    Let's Talk
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="isOpen = !isOpen" class="text-gray-700">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="isOpen" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden bg-white border-b border-gray-100">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('services.index') }}" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">Services</a>
            <a href="{{ route('portfolio') }}" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">Our Work</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">About</a>
            <a href="{{ route('careers') }}" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">Careers</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 text-indigo-600 font-medium">Let's Talk</a>
        </div>
    </div>
</nav>

<!-- Add scroll behavior script -->
<script>
    // Navigation background on scroll
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('bg-white/95');
            nav.classList.add('shadow-sm');
        } else {
            nav.classList.remove('bg-white/95');
            nav.classList.remove('shadow-sm');
        }
    });
</script> 