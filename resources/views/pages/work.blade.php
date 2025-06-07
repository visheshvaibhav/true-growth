<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Work - True Growth | Digital Innovation & AI Solutions</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/gsap@3.12.0/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3.12.0/dist/ScrollTrigger.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white font-inter antialiased">
    <!-- Unique Geometric Background Pattern -->
    <div class="fixed inset-0 -z-10 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <!-- Dynamic Navigation (Same as homepage for consistency) -->
    <nav x-data="{ isOpen: false }" class="fixed w-full z-50 bg-white/80 backdrop-blur-lg border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
                        True Growth
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/#services" class="text-gray-700 hover:text-indigo-600 transition-colors">Services</a>
                    <a href="/work" class="text-indigo-600 font-medium">Our Work</a>
                    <a href="/about" class="text-gray-700 hover:text-indigo-600 transition-colors">About</a>
                    <a href="/#contact" class="px-6 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition-colors">
                        Let's Talk
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button @click="isOpen = !isOpen" class="text-gray-700">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </button>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="isOpen" class="md:hidden bg-white border-b border-gray-100">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/#services" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">Services</a>
                <a href="/work" class="block px-3 py-2 text-indigo-600 font-medium">Our Work</a>
                <a href="/about" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">About</a>
                <a href="/#contact" class="block px-3 py-2 text-indigo-600 font-medium">Let's Talk</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Dynamic Elements -->
    <section class="relative min-h-[70vh] flex items-center pt-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="relative z-10 text-center max-w-3xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold font-poppins leading-tight">
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
                        Our Portfolio
                    </span>
                    <span class="block mt-1 text-3xl md:text-4xl text-gray-900">
                        Transforming Ideas into Digital Reality
                    </span>
                </h1>
                <p class="mt-6 text-xl text-gray-600 leading-relaxed">
                    Explore our collection of successful projects where we've helped businesses achieve digital excellence through AI innovation, stunning design, and strategic growth solutions.
                </p>
                <div class="mt-10 flex flex-wrap justify-center gap-4">
                    <a href="#featured-work" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-indigo-600 rounded-full hover:bg-indigo-700 transition-colors duration-300">
                        View Projects
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <a href="#case-studies" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-indigo-600 bg-indigo-50 rounded-full hover:bg-indigo-100 transition-colors duration-300">
                        Case Studies
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Add required styles for animations -->
    <style>
        @keyframes blob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(20px, -20px) scale(1.1); }
            50% { transform: translate(-20px, 20px) scale(0.9); }
            75% { transform: translate(20px, 20px) scale(1.05); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>

    <!-- Featured Work Section with Filtering -->
    <section id="featured-work" class="py-20 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-4xl font-bold font-poppins">Featured Projects</h2>
                <p class="mt-4 text-xl text-gray-600">
                    Discover how we've helped businesses across industries achieve their digital transformation goals
                </p>
            </div>

            <!-- Filter Categories -->
            <div x-data="{ activeFilter: 'all' }" class="mt-12">
                <div class="flex flex-wrap justify-center gap-4">
                    <button 
                        @click="activeFilter = 'all'" 
                        :class="{ 'bg-indigo-600 text-white': activeFilter === 'all', 'bg-white text-gray-600 hover:text-indigo-600': activeFilter !== 'all' }"
                        class="px-6 py-2 rounded-full border border-indigo-200 transition-colors duration-300">
                        All Projects
                    </button>
                    <button 
                        @click="activeFilter = 'ai'" 
                        :class="{ 'bg-indigo-600 text-white': activeFilter === 'ai', 'bg-white text-gray-600 hover:text-indigo-600': activeFilter !== 'ai' }"
                        class="px-6 py-2 rounded-full border border-indigo-200 transition-colors duration-300">
                        AI Solutions
                    </button>
                    <button 
                        @click="activeFilter = 'web'" 
                        :class="{ 'bg-indigo-600 text-white': activeFilter === 'web', 'bg-white text-gray-600 hover:text-indigo-600': activeFilter !== 'web' }"
                        class="px-6 py-2 rounded-full border border-indigo-200 transition-colors duration-300">
                        Web Development
                    </button>
                    <button 
                        @click="activeFilter = 'automation'" 
                        :class="{ 'bg-indigo-600 text-white': activeFilter === 'automation', 'bg-white text-gray-600 hover:text-indigo-600': activeFilter !== 'automation' }"
                        class="px-6 py-2 rounded-full border border-indigo-200 transition-colors duration-300">
                        Automation
                    </button>
                    <button 
                        @click="activeFilter = 'marketing'" 
                        :class="{ 'bg-indigo-600 text-white': activeFilter === 'marketing', 'bg-white text-gray-600 hover:text-indigo-600': activeFilter !== 'marketing' }"
                        class="px-6 py-2 rounded-full border border-indigo-200 transition-colors duration-300">
                        Digital Marketing
                    </button>
                </div>

                <!-- Project Grid -->
                <div class="mt-12 grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project Card 1 - AI Solutions -->
                    <div x-show="activeFilter === 'all' || activeFilter === 'ai'" class="group relative">
                        <div class="relative aspect-[4/3] overflow-hidden rounded-2xl">
                            <img src="https://placehold.co/800x600" alt="AI Analytics Dashboard" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                                    <span class="inline-block px-3 py-1 bg-indigo-600 text-white text-sm rounded-full mb-3">AI Solutions</span>
                                    <h3 class="text-xl font-bold text-white mb-2">Predictive Analytics Platform</h3>
                                    <p class="text-gray-200 text-sm mb-4">Advanced AI-powered analytics solution for enterprise decision-making</p>
                                    <a href="/case-study/predictive-analytics" class="inline-flex items-center text-white hover:text-indigo-200 transition-colors">
                                        View Case Study
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 2 - Web Development -->
                    <div x-show="activeFilter === 'all' || activeFilter === 'web'" class="group relative">
                        <div class="relative aspect-[4/3] overflow-hidden rounded-2xl">
                            <img src="https://placehold.co/800x600" alt="E-commerce Platform" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                                    <span class="inline-block px-3 py-1 bg-purple-600 text-white text-sm rounded-full mb-3">Web Development</span>
                                    <h3 class="text-xl font-bold text-white mb-2">Next-Gen E-commerce Platform</h3>
                                    <p class="text-gray-200 text-sm mb-4">Modern e-commerce solution with AI-powered recommendations</p>
                                    <a href="/case-study/ecommerce-platform" class="inline-flex items-center text-white hover:text-purple-200 transition-colors">
                                        View Case Study
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 3 - Automation -->
                    <div x-show="activeFilter === 'all' || activeFilter === 'automation'" class="group relative">
                        <div class="relative aspect-[4/3] overflow-hidden rounded-2xl">
                            <img src="https://placehold.co/800x600" alt="Workflow Automation" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                                    <span class="inline-block px-3 py-1 bg-pink-600 text-white text-sm rounded-full mb-3">Automation</span>
                                    <h3 class="text-xl font-bold text-white mb-2">Enterprise Workflow Automation</h3>
                                    <p class="text-gray-200 text-sm mb-4">Automated business processes with AI-driven optimization</p>
                                    <a href="/case-study/workflow-automation" class="inline-flex items-center text-white hover:text-pink-200 transition-colors">
                                        View Case Study
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section id="case-studies" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-4xl font-bold font-poppins">Case Studies</h2>
                <p class="mt-4 text-xl text-gray-600">
                    Deep dive into our most impactful digital transformation projects
                </p>
            </div>

            <div class="mt-20 space-y-20">
                <!-- Case Study 1 -->
                <div class="relative">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                        <!-- Image Side -->
                        <div class="relative">
                            <div class="absolute -inset-4">
                                <div class="w-full h-full mx-auto opacity-30 blur-lg filter" style="background: linear-gradient(90deg, #6366f1 0%, #a855f7 100%);"></div>
                            </div>
                            <div class="relative aspect-[4/3] rounded-2xl overflow-hidden">
                                <img src="https://placehold.co/800x600" alt="AI Platform Dashboard" class="object-cover w-full h-full">
                            </div>
                        </div>
                        
                        <!-- Content Side -->
                        <div class="mt-10 lg:mt-0">
                            <div class="space-y-6">
                                <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm font-medium">
                                    Enterprise AI Solution
                                </span>
                                <h3 class="text-3xl font-bold">Global Financial Institution AI Transformation</h3>
                                <div class="prose prose-lg text-gray-600">
                                    <p>
                                        Revolutionized data analysis and decision-making processes for a leading financial institution through advanced AI implementation.
                                    </p>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-semibold">85% Faster Processing</h4>
                                            <p class="text-gray-600">Reduced data processing time significantly</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-semibold">$2.5M Cost Savings</h4>
                                            <p class="text-gray-600">Annual reduction in operational costs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-6">
                                    <a href="/case-study/financial-ai" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-white bg-indigo-600 hover:bg-indigo-700 transition-colors">
                                        Read Full Case Study
                                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="relative">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                        <!-- Content Side -->
                        <div class="lg:order-2">
                            <div class="space-y-6">
                                <span class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-medium">
                                    E-commerce Solution
                                </span>
                                <h3 class="text-3xl font-bold">AI-Powered E-commerce Transformation</h3>
                                <div class="prose prose-lg text-gray-600">
                                    <p>
                                        Implemented an AI-driven recommendation engine and automated inventory management system for a major retail chain.
                                    </p>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-semibold">40% Increase in Sales</h4>
                                            <p class="text-gray-600">Through personalized recommendations</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-semibold">60% Better Inventory Accuracy</h4>
                                            <p class="text-gray-600">Through AI-powered forecasting</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-6">
                                    <a href="/case-study/ecommerce-ai" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-white bg-purple-600 hover:bg-purple-700 transition-colors">
                                        Read Full Case Study
                                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Image Side -->
                        <div class="relative mt-10 lg:mt-0 lg:order-1">
                            <div class="absolute -inset-4">
                                <div class="w-full h-full mx-auto opacity-30 blur-lg filter" style="background: linear-gradient(90deg, #a855f7 0%, #ec4899 100%);"></div>
                            </div>
                            <div class="relative aspect-[4/3] rounded-2xl overflow-hidden">
                                <img src="https://placehold.co/800x600" alt="E-commerce Platform" class="object-cover w-full h-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack Section -->
    <section class="py-20 bg-gradient-to-b from-indigo-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-4xl font-bold font-poppins">Our Technology Stack</h2>
                <p class="mt-4 text-xl text-gray-600">
                    We leverage cutting-edge technologies to deliver exceptional results
                </p>
            </div>

            <div class="mt-20">
                <!-- Tech Categories Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- AI & Machine Learning -->
                    <div class="relative group">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8">
                            <div class="w-14 h-14 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-4">AI & Machine Learning</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    TensorFlow
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    PyTorch
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    OpenAI GPT
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Cloud & Infrastructure -->
                    <div class="relative group">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8">
                            <div class="w-14 h-14 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-4">Cloud & Infrastructure</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    AWS
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Google Cloud
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Azure
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Web Technologies -->
                    <div class="relative group">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8">
                            <div class="w-14 h-14 bg-pink-600 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-4">Web Technologies</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    React & Next.js
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Node.js
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Laravel
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Data & Analytics -->
                    <div class="relative group">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8">
                            <div class="w-14 h-14 bg-red-600 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-4">Data & Analytics</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    PostgreSQL
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Elasticsearch
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Apache Kafka
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Technology Partners -->
                <div class="mt-20">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold mb-8">Technology Partners</h3>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                        <!-- Partner logos would go here -->
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-xl">
                            <div class="w-32 h-12 bg-gray-200 rounded flex items-center justify-center text-gray-400">Partner 1</div>
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-xl">
                            <div class="w-32 h-12 bg-gray-200 rounded flex items-center justify-center text-gray-400">Partner 2</div>
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-xl">
                            <div class="w-32 h-12 bg-gray-200 rounded flex items-center justify-center text-gray-400">Partner 3</div>
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-xl">
                            <div class="w-32 h-12 bg-gray-200 rounded flex items-center justify-center text-gray-400">Partner 4</div>
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-xl">
                            <div class="w-32 h-12 bg-gray-200 rounded flex items-center justify-center text-gray-400">Partner 5</div>
                        </div>
                        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-xl">
                            <div class="w-32 h-12 bg-gray-200 rounded flex items-center justify-center text-gray-400">Partner 6</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project CTA Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                    <!-- Content Side -->
                    <div class="relative z-10">
                        <h2 class="text-4xl font-bold font-poppins leading-tight">
                            Ready to Transform Your 
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
                                Digital Future?
                            </span>
                        </h2>
                        <p class="mt-6 text-xl text-gray-600 leading-relaxed">
                            Let's discuss how our AI-powered solutions and digital expertise can help your business achieve its goals.
                        </p>
                        <div class="mt-10 space-y-4 sm:space-y-0 sm:flex sm:space-x-4">
                            <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-indigo-600 rounded-full hover:bg-indigo-700 transition-colors duration-300 w-full sm:w-auto">
                                Start Your Project
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                            <a href="tel:+1234567890" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-indigo-600 bg-indigo-50 rounded-full hover:bg-indigo-100 transition-colors duration-300 w-full sm:w-auto">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                Schedule a Call
                            </a>
                        </div>
                        <div class="mt-10 grid grid-cols-2 gap-8">
                            <div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold">Quick Response</h4>
                                        <p class="text-gray-600">Within 24 hours</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold">Secure Process</h4>
                                        <p class="text-gray-600">End-to-end encryption</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Visual Side -->
                    <div class="mt-12 lg:mt-0 relative">
                        <div class="relative aspect-square rounded-2xl overflow-hidden bg-gradient-to-br from-indigo-100 to-purple-100 p-8">
                            <!-- Decorative Elements -->
                            <div class="absolute top-0 left-0 w-40 h-40 bg-indigo-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                            <div class="absolute bottom-0 right-0 w-40 h-40 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
                            
                            <!-- Content -->
                            <div class="relative z-10 h-full flex flex-col items-center justify-center text-center space-y-4">
                                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Start Your Digital Journey</h3>
                                <p class="text-gray-600">Transform your business with our expertise in AI and digital innovation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add GSAP animations -->
    <script>
        // Initialize GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Animate sections on scroll
        gsap.utils.toArray('section').forEach(section => {
            gsap.from(section.querySelectorAll('.animate-on-scroll'), {
                y: 60,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                scrollTrigger: {
                    trigger: section,
                    start: 'top 80%',
                    end: 'top 20%',
                    toggleActions: 'play none none reverse'
                }
            });
        });

        // Animate project cards on hover
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    y: -10,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    y: 0,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });
    </script>
</body>
</html> 