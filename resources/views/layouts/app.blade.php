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
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>
<body class="font-body antialiased bg-primary text-text">
    <!-- Navigation -->
    <nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50">
        <div class="container">
            <div class="flex items-center justify-between h-24">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center group">
                    <span class="text-2xl font-heading font-bold text-gradient magnetic">The True Growth Co.</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-12">
                    <a href="{{ route('about') }}" class="text-text/80 hover:text-accent transition-colors magnetic">About</a>
                    <a href="{{ route('services.index') }}" class="text-text/80 hover:text-accent transition-colors magnetic">Services</a>
                    <a href="{{ route('portfolio') }}" class="text-text/80 hover:text-accent transition-colors magnetic">Work</a>
                    <a href="{{ route('blog') }}" class="text-text/80 hover:text-accent transition-colors magnetic">Blog</a>
                    <a href="{{ route('careers') }}" class="text-text/80 hover:text-accent transition-colors magnetic">Careers</a>
                    <a href="{{ route('contact') }}" class="btn btn-primary magnetic">Let's Talk</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button @click="open = !open" class="text-text hover:text-accent">
                        <div class="w-8 h-6 relative">
                            <span class="absolute h-0.5 w-full bg-current transform transition-all duration-300" :class="{'rotate-45 translate-y-2.5': open, 'translate-y-0': !open}"></span>
                            <span class="absolute h-0.5 w-full bg-current transform transition-all duration-300" :class="{'opacity-0': open, 'translate-y-2.5': !open}"></span>
                            <span class="absolute h-0.5 w-full bg-current transform transition-all duration-300" :class="{'-rotate-45 translate-y-2.5': open, 'translate-y-5': !open}"></span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div x-show="open" 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                class="absolute inset-x-0 top-24 p-4 bg-secondary border border-white/10 backdrop-blur-lg rounded-2xl shadow-2xl md:hidden"
                style="display: none;">
                <div class="grid gap-4">
                    <a href="{{ route('about') }}" class="block px-4 py-3 text-lg text-text/80 hover:text-accent transition-colors">About</a>
                    <a href="{{ route('services.index') }}" class="block px-4 py-3 text-lg text-text/80 hover:text-accent transition-colors">Services</a>
                    <a href="{{ route('portfolio') }}" class="block px-4 py-3 text-lg text-text/80 hover:text-accent transition-colors">Work</a>
                    <a href="{{ route('blog') }}" class="block px-4 py-3 text-lg text-text/80 hover:text-accent transition-colors">Blog</a>
                    <a href="{{ route('careers') }}" class="block px-4 py-3 text-lg text-text/80 hover:text-accent transition-colors">Careers</a>
                    <a href="{{ route('contact') }}" class="block px-4 py-3 text-lg text-accent hover:text-accent/80 transition-colors">Let's Talk →</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-32 border-t border-white/10">
        <div class="container py-20">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="space-y-6">
                    <h3 class="text-2xl font-heading font-bold text-gradient">The True Growth Co.</h3>
                    <p class="text-text/60">Crafting exceptional digital experiences that drive growth and innovation.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-text/40 hover:text-accent transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-text/40 hover:text-accent transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-text/40 hover:text-accent transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-text/40 hover:text-accent transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-heading font-bold mb-6">Navigation</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('about') }}" class="text-text/60 hover:text-accent transition-colors">About</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-text/60 hover:text-accent transition-colors">Services</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-text/60 hover:text-accent transition-colors">Work</a></li>
                        <li><a href="{{ route('blog') }}" class="text-text/60 hover:text-accent transition-colors">Blog</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-heading font-bold mb-6">Legal</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('privacy') }}" class="text-text/60 hover:text-accent transition-colors">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}" class="text-text/60 hover:text-accent transition-colors">Terms of Service</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-heading font-bold mb-6">Contact</h4>
                    <ul class="space-y-4">
                        <li class="text-text/60">hello@truegrowth.com</li>
                        <li class="text-text/60">+1 (555) 123-4567</li>
                        <li class="text-text/60">123 Growth Street<br>San Francisco, CA 94105</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 mt-16 pt-8">
                <p class="text-center text-text/40">&copy; {{ date('Y') }} The True Growth Co.. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Locomotive Scroll -->
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>

    <script>
        // Initialize Locomotive Scroll
        const scroll = new LocomotiveScroll({
            el: document.querySelector('[data-scroll-container]'),
            smooth: true,
            lerp: 0.1
        });

        // GSAP ScrollTrigger integration
        gsap.registerPlugin(ScrollTrigger);

        // Navigation background on scroll
        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('backdrop-blur-xl', 'bg-primary/80', 'border-b', 'border-white/10');
            } else {
                nav.classList.remove('backdrop-blur-xl', 'bg-primary/80', 'border-b', 'border-white/10');
            }
        });

        // Magnetic effect for navigation items
        document.querySelectorAll('.magnetic').forEach(button => {
            button.addEventListener('mousemove', (e) => {
                const rect = button.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                button.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
            });

            button.addEventListener('mouseleave', () => {
                button.style.transform = 'translate(0, 0)';
            });
        });
    </script>

    @stack('scripts')
</body>
</html> 