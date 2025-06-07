<!-- Dynamic Navigation -->
<nav x-data="{ isOpen: false }" class="fixed w-full z-50 bg-white/80 backdrop-blur-lg border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
                    The True Growth Co.
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ request()->is('/') ? '#services' : '/services' }}" 
                   class="text-gray-700 hover:text-indigo-600 transition-colors {{ request()->is('services*') ? 'text-indigo-600' : '' }}">
                    Services
                </a>
                <a href="{{ request()->is('/') ? '#work' : '/work' }}" 
                   class="text-gray-700 hover:text-indigo-600 transition-colors {{ request()->is('work*') ? 'text-indigo-600' : '' }}">
                    Our Work
                </a>
                <a href="/about" 
                   class="text-gray-700 hover:text-indigo-600 transition-colors {{ request()->is('about*') ? 'text-indigo-600' : '' }}">
                    About
                </a>
                <a href="{{ request()->is('/') ? '#contact' : '/contact' }}" 
                   class="px-6 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition-colors">
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
    <div x-show="isOpen" class="md:hidden bg-white border-b border-gray-100">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ request()->is('/') ? '#services' : '/services' }}" 
               class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors {{ request()->is('services*') ? 'text-indigo-600' : '' }}">
                Services
            </a>
            <a href="{{ request()->is('/') ? '#work' : '/work' }}" 
               class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors {{ request()->is('work*') ? 'text-indigo-600' : '' }}">
                Our Work
            </a>
            <a href="/about" 
               class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors {{ request()->is('about*') ? 'text-indigo-600' : '' }}">
                About
            </a>
            <a href="{{ request()->is('/') ? '#contact' : '/contact' }}" 
               class="block px-3 py-2 text-indigo-600 font-medium">
                Let's Talk
            </a>
        </div>
    </div>
</nav> 