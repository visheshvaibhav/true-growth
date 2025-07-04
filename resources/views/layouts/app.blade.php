<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The True Growth Co.') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Poppins:wght@100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-inter antialiased">
    <!-- Include the unified header -->
    @include('partials.header')

    <!-- Main Content -->
    <main class="pt-24">
        @yield('content')
    </main>

     <!-- Footer Section -->
     <footer class="bg-white border-t border-gray-100">
        <!-- Main Footer -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-6 lg:gap-8">
                <!-- Company Info -->
                <div class="space-y-6 sm:col-span-2 lg:col-span-1">
                    <a href="/" class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent inline-block">
                        The True Growth Co.
                    </a>
                    <p class="text-gray-600 max-w-xs">
                        Empowering businesses with cutting-edge AI solutions and digital innovation for sustainable growth.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="sm:col-span-1">
                    <h3 class="text-lg font-semibold mb-4 sm:mb-6">Quick Links</h3>
                    <ul class="space-y-3 sm:space-y-4">
                        <li>
                            <a href="/about" class="text-gray-600 hover:text-indigo-600 transition-colors">About Us</a>
                        </li>
                        <li>
                            <a href="/services" class="text-gray-600 hover:text-indigo-600 transition-colors">Services</a>
                        </li>
                        <li>
                            <a href="/portfolio" class="text-gray-600 hover:text-indigo-600 transition-colors">Portfolio</a>
                        </li>
                        <li>
                            <a href="/careers" class="text-gray-600 hover:text-indigo-600 transition-colors">Careers</a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="sm:col-span-1">
                    <h3 class="text-lg font-semibold mb-4 sm:mb-6">Services</h3>
                    <ul class="space-y-3 sm:space-y-4">
                        <li>
                            <a href="/services/enterprise-ai" class="text-gray-600 hover:text-indigo-600 transition-colors">Enterprise AI Solutions</a>
                        </li>
                        <li>
                            <a href="/services/web-development" class="text-gray-600 hover:text-indigo-600 transition-colors">Web Development</a>
                        </li>
                        <li>
                            <a href="/services/digital-marketing" class="text-gray-600 hover:text-indigo-600 transition-colors">Digital Marketing</a>
                        </li>
                        <li>
                            <a href="/services/cloud-infrastructure" class="text-gray-600 hover:text-indigo-600 transition-colors">Cloud Services</a>
                        </li>
                        <li>
                            <a href="/services/ai-growth" class="text-gray-600 hover:text-indigo-600 transition-colors">AI-Powered Growth</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="sm:col-span-2 lg:col-span-1">
                    <h3 class="text-lg font-semibold mb-4 sm:mb-6">Contact Us</h3>
                    <ul class="space-y-3 sm:space-y-4">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-gray-600">
                           178 Robie St, Truro, NS B2N 1L1
                            </span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:info@thetruegrowth.com" class="text-gray-600 hover:text-indigo-600 transition-colors">info@thetruegrowth.com</a>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:+1-289-272-4063" class="text-gray-600 hover:text-indigo-600 transition-colors">+1 (289) 272-4063</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="border-t border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
                <div class="grid sm:grid-cols-2 gap-6 sm:gap-8 items-center">
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Stay Updated</h3>
                        <p class="text-gray-600">Subscribe to our newsletter for the latest updates and insights.</p>
                    </div>
                    <form class="flex flex-col sm:flex-row gap-3 sm:gap-2">
                        <input type="email" placeholder="Enter your email" class="w-full flex-1 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                        <button type="submit" class="w-full sm:w-auto px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-100 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <div class="text-sm text-gray-600 text-center sm:text-left">
                        © 2025 The True Growth Co. All rights reserved.
                    </div>
                    <div class="mt-4 sm:mt-0">
                        <ul class="flex flex-wrap justify-center sm:justify-end gap-4 sm:gap-6 text-sm text-gray-600">
                            <li>
                                <a href="/privacy" class="hover:text-indigo-600 transition-colors">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="/terms" class="hover:text-indigo-600 transition-colors">Terms of Service</a>
                            </li>
                            <li>
                                <a href="/cookies" class="hover:text-indigo-600 transition-colors">Cookie Policy</a>
                            </li>
                            <li>
                                <a href="/sitemap" class="hover:text-indigo-600 transition-colors">Sitemap</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html> 