@extends('layouts.app')

@section('content')
    <!-- Unique Geometric Background Pattern -->
    <div class="fixed inset-0 -z-10 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <!-- Dynamic Navigation -->
    <!-- <nav x-data="{ isOpen: false }" class="fixed w-full z-50 bg-white/80 backdrop-blur-lg border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
                        The True Growth Co.
                    </a>
                </div> -->
                
                <!-- Desktop Navigation -->
                <!-- <div class="hidden md:flex items-center space-x-8">
                    <a href="/services" class="text-gray-700 hover:text-indigo-600 transition-colors">Services</a>
                    <a href="/work" class="text-gray-700 hover:text-indigo-600 transition-colors">Our Work</a>
                    <a href="/about" class="text-gray-700 hover:text-indigo-600 transition-colors">About</a>
                    <a href="/contact" class="px-6 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition-colors">
                        Let's Talk
                    </a>
                </div> -->

                <!-- Mobile menu button -->
                <!-- <div class="md:hidden flex items-center">
                    <button @click="isOpen = !isOpen" class="text-gray-700">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </button>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Mobile Navigation -->
        <!-- <div x-show="isOpen" class="md:hidden bg-white border-b border-gray-100">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/services" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">Services</a>
                <a href="/work" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">Our Work</a>
                <a href="/about" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">About</a>
                <a href="/contact" class="block px-3 py-2 text-indigo-600 font-medium">Let's Talk</a>
            </div>
        </div>
    </nav> -->

    <!-- Hero Section with Dynamic Elements -->
    <section class="relative min-h-screen flex items-center overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative z-10">
                    <h1 class="text-5xl md:text-7xl font-bold font-poppins leading-tight">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
                            Innovate
                        </span>
                        <span class="block mt-1">
                            Scale & Grow
                        </span>
                    </h1>
                    <p class="mt-6 text-xl text-gray-600 leading-relaxed">
                        We combine cutting-edge AI, stunning web design, and strategic digital marketing to transform your digital presence and accelerate growth.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-indigo-600 rounded-full hover:bg-indigo-700 transition-colors duration-300">
                            Start Your Journey
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="/work" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-indigo-600 bg-indigo-50 rounded-full hover:bg-indigo-100 transition-colors duration-300">
                            View Our Work
                        </a>
                    </div>
                </div>

                <!-- Hero Visual Element -->
                <div class="relative z-10 hidden lg:block">
                    <!-- 3D Geometric Shapes -->
                    <div class="relative w-full h-[600px]">
                        <!-- Main floating sphere -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <div class="w-64 h-64 rounded-full bg-gradient-to-br from-indigo-400 to-purple-500 opacity-90 blur-sm animate-float"></div>
                            <div class="absolute inset-0 w-64 h-64 rounded-full bg-gradient-to-br from-purple-400 to-pink-500 opacity-80 mix-blend-multiply blur-sm animate-float-delay"></div>
                        </div>

                        <!-- Orbiting elements -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <!-- Tech icons orbiting -->
                            <div class="relative w-96 h-96 animate-spin-slow">
                                <!-- AI Icon -->
                                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-white p-4 rounded-2xl shadow-xl">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <!-- Web Icon -->
                                <div class="absolute top-1/2 -right-8 transform -translate-y-1/2 bg-white p-4 rounded-2xl shadow-xl">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <!-- Marketing Icon -->
                                <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-white p-4 rounded-2xl shadow-xl">
                                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z" />
                                    </svg>
                                </div>
                                <!-- Cloud Icon -->
                                <div class="absolute top-1/2 -left-8 transform -translate-y-1/2 bg-white p-4 rounded-2xl shadow-xl">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Floating geometric shapes -->
                        <div class="shape absolute top-1/4 right-1/4 w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-lg transform rotate-45 animate-float-delay-2 transition-transform duration-300 ease-out"></div>
                        <div class="shape absolute bottom-1/4 left-1/4 w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full animate-float-delay-3 transition-transform duration-300 ease-out"></div>
                        <div class="shape absolute top-1/3 left-1/3 w-12 h-12 bg-gradient-to-br from-pink-500 to-red-500 rounded-lg transform -rotate-12 animate-float-delay-4 transition-transform duration-300 ease-out"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section with Floating Cards -->
    <section id="services" class="relative py-20 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold font-poppins">
                    Our Services
                </h2>
                <p class="mt-4 text-xl text-gray-600">
                    Comprehensive digital solutions for modern businesses
                </p>
            </div>

            <div class="mt-20 grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- AI-Powered Growth Card -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">AI-Powered Growth</h3>
                        <p class="text-gray-600">Strategic AI solutions to optimize your marketing, automate processes, and drive data-driven decisions.</p>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Predictive Analytics
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                AI Marketing Automation
                            </li>
                        </ul>
                        <a href="/services/ai-growth" class="inline-block mt-6 px-6 py-2 text-sm font-medium text-indigo-600 border border-indigo-600 rounded-full hover:bg-indigo-600 hover:text-white transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Enterprise AI & Automation -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Enterprise AI & Automation</h3>
                        <p class="text-gray-600">Custom AI solutions and automation strategies for enterprise-level operations.</p>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Private LLM Solutions
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                AI Integration
                            </li>
                        </ul>
                        <a href="/services/enterprise-ai" class="inline-block mt-6 px-6 py-2 text-sm font-medium text-purple-600 border border-purple-600 rounded-full hover:bg-purple-600 hover:text-white transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Web & App Development -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-pink-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Web & App Development</h3>
                        <p class="text-gray-600">Custom web and mobile solutions built with cutting-edge technologies.</p>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Responsive Websites
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Mobile Applications
                            </li>
                        </ul>
                        <a href="/services/web-development" class="inline-block mt-6 px-6 py-2 text-sm font-medium text-pink-600 border border-pink-600 rounded-full hover:bg-pink-600 hover:text-white transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Cloud & IT Infrastructure -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-red-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Cloud & IT Infrastructure</h3>
                        <p class="text-gray-600">Scalable cloud solutions and robust IT infrastructure services.</p>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Cloud Migration
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Infrastructure Setup
                            </li>
                        </ul>
                        <a href="/services/cloud-infrastructure" class="inline-block mt-6 px-6 py-2 text-sm font-medium text-red-600 border border-red-600 rounded-full hover:bg-red-600 hover:text-white transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-orange-600 to-yellow-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-orange-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Digital Marketing</h3>
                        <p class="text-gray-600">Data-driven marketing strategies to boost your online presence.</p>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                SEO Optimization
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Social Media Marketing
                            </li>
                        </ul>
                        <a href="/services/digital-marketing" class="inline-block mt-6 px-6 py-2 text-sm font-medium text-orange-600 border border-orange-600 rounded-full hover:bg-orange-600 hover:text-white transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Creative and Branding -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-yellow-600 to-green-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-yellow-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Creative & Branding</h3>
                        <p class="text-gray-600">Strategic brand development and creative design solutions.</p>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Brand Strategy
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Visual Identity
                            </li>
                        </ul>
                        <a href="/services/branding" class="inline-block mt-6 px-6 py-2 text-sm font-medium text-yellow-600 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Showcase Section -->
    <section id="work" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold font-poppins">
                    Featured Work
                </h2>
                <p class="mt-4 text-xl text-gray-600">
                    Transforming ideas into digital excellence
                </p>
            </div>

            <div class="mt-20 grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div class="group relative overflow-hidden rounded-2xl">
                    <div class="relative aspect-video overflow-hidden rounded-2xl">
                        <img src="/images/homepage/BN.png" alt="Project 1" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-xl font-bold">Berkeley North</h3>
                            <p class="mt-2 text-sm text-gray-300">A Michelin Restaurant in Hamilton, Ontario</p>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="group relative overflow-hidden rounded-2xl">
                    <div class="relative aspect-video overflow-hidden rounded-2xl">
                        <img src="/images/homepage/pisa.png" alt="Project 2" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-xl font-bold">Pisa Pizza</h3>
                            <p class="mt-2 text-sm text-gray-300">A Pizza Store in Hamilton, Ontario</p>
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="group relative overflow-hidden rounded-2xl">
                    <div class="relative aspect-video overflow-hidden rounded-2xl">
                        <img src="/images/homepage/district.png" alt="Project 3" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-xl font-bold">The District - Tapas + Bar</h3>
                            <p class="mt-2 text-sm text-gray-300">A tapas and bar in Hamilton, Ontario</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="/work" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-indigo-600 rounded-full hover:bg-indigo-700 transition-colors duration-300">
                    View All Projects
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold font-poppins">How We Work</h2>
                <p class="mt-4 text-xl text-gray-600">Our proven process for delivering excellence</p>
            </div>

            <div class="mt-20 grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center mb-6 text-white font-bold text-xl">1</div>
                        <h3 class="text-xl font-bold mb-4">Discovery</h3>
                        <p class="text-gray-600">Understanding your goals, challenges, and vision for success.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mb-6 text-white font-bold text-xl">2</div>
                        <h3 class="text-xl font-bold mb-4">Strategy</h3>
                        <p class="text-gray-600">Crafting a comprehensive plan tailored to your needs.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-12 h-12 bg-pink-600 rounded-full flex items-center justify-center mb-6 text-white font-bold text-xl">3</div>
                        <h3 class="text-xl font-bold mb-4">Creation</h3>
                        <p class="text-gray-600">Bringing your vision to life with cutting-edge technology.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center mb-6 text-white font-bold text-xl">4</div>
                        <h3 class="text-xl font-bold mb-4">Launch & Scale</h3>
                        <p class="text-gray-600">Deploying and optimizing for continuous growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients Section -->
    <section class="py-20 bg-gradient-to-b from-indigo-50 to-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 -z-10 opacity-[0.03]">
            <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 24px 24px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold font-poppins">Trusted by Industry Leaders</h2>
                <p class="mt-4 text-xl text-gray-600">Partnering with forward-thinking companies worldwide</p>
            </div>

            <!-- Featured Clients Grid -->
            <div class="mt-16">
                <!-- Enterprise Tier -->
                <div class="relative">
                    <div class="absolute left-0 right-0 text-center -top-8">
                        <span class="inline-block px-4 py-1 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-full text-white text-sm font-medium">
                            Enterprise Partners
                        </span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                        <!-- Client 1 -->
                        <div class="group relative bg-white rounded-2xl p-6 hover:shadow-xl transition duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl transform group-hover:scale-105 transition duration-300"></div>
                            <div class="relative flex items-center justify-center h-24">
                                <img src="{{ asset('images/clients/enterprise-1-logo.png') }}" alt="Enterprise Partner 1" class="max-w-[160px] max-h-[60px] object-contain">
                            </div>
                        </div>
                        <!-- Client 2 -->
                        <div class="group relative bg-white rounded-2xl p-6 hover:shadow-xl transition duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl transform group-hover:scale-105 transition duration-300"></div>
                            <div class="relative flex items-center justify-center h-24">
                                <img src="{{ asset('images/clients/enterprise-2-logo.webp') }}" alt="Enterprise Partner 2" class="max-w-[160px] max-h-[100px] object-contain">
                            </div>
                        </div>
                        <!-- Client 3 -->
                        <div class="group relative bg-white rounded-2xl p-6 hover:shadow-xl transition duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl transform group-hover:scale-105 transition duration-300"></div>
                            <div class="relative flex items-center justify-center h-24">
                                <img src="{{ asset('images/clients/enterprise-3-logo.webp') }}" alt="Enterprise Partner 3" class="max-w-[160px] max-h-[48px] object-contain">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Growth Tier -->
                <div class="relative mt-20">
                    <div class="absolute left-0 right-0 text-center -top-8">
                        <span class="inline-block px-4 py-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full text-white text-sm font-medium">
                            Growth Partners
                        </span>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                        <!-- Growth Partner 1 -->
                        <div class="group relative bg-white rounded-xl p-4 hover:shadow-lg transition duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl transform group-hover:scale-105 transition duration-300"></div>
                            <div class="relative flex items-center justify-center h-16">
                                <img src="{{ asset('images/clients/growth-1-logo.png') }}" alt="Growth Partner 1" class="max-w-[200px] max-h-[100px] object-contain">
                            </div>
                        </div>
                        <!-- Growth Partner 2 -->
                        <div class="group relative bg-white rounded-xxl p-4 hover:shadow-lg transition duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl transform group-hover:scale-105 transition duration-300"></div>
                            <div class="relative flex items-center justify-center h-16">
                                <img src="{{ asset('images/clients/growth-2-logo.png') }}" alt="Growth Partner 2" class="max-w-[300px] max-h-[100px] object-contain">
                            </div>
                        </div>
                        <!-- Growth Partner 3 -->
                        <div class="group relative bg-white rounded-xl p-4 hover:shadow-lg transition duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl transform group-hover:scale-105 transition duration-300"></div>
                            <div class="relative flex items-center justify-center h-16">
                                <img src="{{ asset('images/clients/growth-3-logo.png') }}" alt="Growth Partner 3" class="max-w-[800px] max-h-[200px] object-contain">
                            </div>
                        </div>
                        <!-- Growth Partner 4 -->
                        <div class="group relative bg-white rounded-xl p-4 hover:shadow-lg transition duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl transform group-hover:scale-105 transition duration-300"></div>
                            <div class="relative flex items-center justify-center h-16">
                                <img src="{{ asset('images/clients/growth-4-logo.png') }}" alt="Growth Partner 4" class="max-w-[300px] max-h-[100px] object-contain">
                            </div>
                        </div>
                        <!-- Growth Partner 5 -->
                        <div class="group relative bg-white rounded-xl p-4 hover:shadow-lg transition duration-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl transform group-hover:scale-105 transition duration-300"></div>
                            <div class="relative flex items-center justify-center h-16">
                                <img src="{{ asset('images/clients/growth-5-logo.png') }}" alt="Growth Partner 5" class="max-w-[400px] max-h-[100px] object-contain">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Client Stats -->
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">5+</div>
                    <div class="text-gray-600">Enterprise Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2">20+</div>
                    <div class="text-gray-600">Growth Partners</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-pink-600 mb-2">3+</div>
                    <div class="text-gray-600">Countries</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">5+ Years</div>
                    <div class="text-gray-600">Average Partnership</div>
                </div>
            </div>

            <!-- Trust Badges -->
            <div class="mt-16 flex flex-wrap justify-center gap-8">
                <div class="flex items-center space-x-2 text-gray-600">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <span>4.9/5 Client Rating</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold font-poppins">Client Success Stories</h2>
                <p class="mt-4 text-xl text-gray-600">What our clients say about working with us</p>
            </div>

            <div class="mt-20 grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl blur opacity-25"></div>
                    <div class="relative bg-white rounded-2xl p-8 shadow-xl">
                        <div class="flex items-center mb-6">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500"></div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold">Sarah Johnson</h4>
                                <p class="text-gray-600">CEO, TechStart</p>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"The True Growth Co. transformed our digital presence completely. Their AI-powered solutions helped us increase conversions by 150%."</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl blur opacity-25"></div>
                    <div class="relative bg-white rounded-2xl p-8 shadow-xl">
                        <div class="flex items-center mb-6">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500"></div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold">Michael Chen</h4>
                                <p class="text-gray-600">Founder, GrowthLabs</p>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"The team's expertise in both design and AI technology created a perfect synergy for our brand's digital transformation."</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-pink-600 to-red-600 rounded-2xl blur opacity-25"></div>
                    <div class="relative bg-white rounded-2xl p-8 shadow-xl">
                        <div class="flex items-center mb-6">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-red-500"></div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold">Emily Rodriguez</h4>
                                <p class="text-gray-600">Marketing Director, InnovateCo</p>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"Their strategic approach to digital marketing and web design helped us achieve record-breaking growth in just months."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-b from-indigo-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Stat 1 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75"></div>
                    <div class="relative bg-white rounded-2xl p-8 text-center">
                        <h3 class="text-4xl font-bold text-indigo-600 mb-2">50+</h3>
                        <p class="text-gray-600">Projects Completed</p>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-75"></div>
                    <div class="relative bg-white rounded-2xl p-8 text-center">
                        <h3 class="text-4xl font-bold text-purple-600 mb-2">95%</h3>
                        <p class="text-gray-600">Client Satisfaction</p>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-75"></div>
                    <div class="relative bg-white rounded-2xl p-8 text-center">
                        <h3 class="text-4xl font-bold text-pink-600 mb-2">10x</h3>
                        <p class="text-gray-600">Average ROI</p>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-75"></div>
                    <div class="relative bg-white rounded-2xl p-8 text-center">
                        <h3 class="text-4xl font-bold text-red-600 mb-2">24/7</h3>
                        <p class="text-gray-600">Support Available</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced CTA Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-90"></div>
                <div class="relative px-8 py-16 md:px-16 md:py-20 text-center text-white">
                    <h2 class="text-4xl md:text-5xl font-bold font-poppins mb-6">Ready to Transform Your Digital Presence?</h2>
                    <p class="text-xl mb-10 max-w-2xl mx-auto">Let's create something extraordinary together. Our team of experts is ready to help you achieve your digital goals.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium bg-white text-indigo-600 rounded-full hover:bg-indigo-50 transition-colors duration-300">
                            Start Your Project
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="/about" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium border-2 border-white text-white rounded-full hover:bg-white hover:text-indigo-600 transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add required styles for animations -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .animate-float-delay {
            animation: float 6s ease-in-out infinite;
            animation-delay: 1s;
        }
        .animate-float-delay-2 {
            animation: float 7s ease-in-out infinite;
            animation-delay: 2s;
        }
        .animate-float-delay-3 {
            animation: float 8s ease-in-out infinite;
            animation-delay: 3s;
        }
        .animate-float-delay-4 {
            animation: float 9s ease-in-out infinite;
            animation-delay: 4s;
        }
        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }

        /* Mouse interaction styles */
        .shape {
            will-change: transform;
        }
    </style>

    <script>
        // Initialize GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Animate hero section
        gsap.from('.hero-content', {
            opacity: 0,
            y: 100,
            duration: 1,
            ease: 'power4.out'
        });

        // Animate service cards on scroll
        gsap.utils.toArray('.service-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom-=100',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                y: 50,
                duration: 0.6,
                delay: i * 0.2
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const shapes = document.querySelectorAll('.shape');
            const container = document.querySelector('.hero-visual');

            document.addEventListener('mousemove', function(e) {
                shapes.forEach(shape => {
                    const rect = shape.getBoundingClientRect();
                    const shapeX = rect.left + rect.width / 2;
                    const shapeY = rect.top + rect.height / 2;

                    // Calculate distance between mouse and shape center
                    const deltaX = e.clientX - shapeX;
                    const deltaY = e.clientY - shapeY;
                    const distance = Math.sqrt(deltaX * deltaX + deltaY * deltaY);

                    // Maximum distance for the effect (in pixels)
                    const maxDistance = 300;
                    
                    if (distance < maxDistance) {
                        // Calculate repulsion strength (stronger when closer)
                        const strength = (1 - distance / maxDistance) * 100;
                        
                        // Calculate repulsion direction
                        const moveX = (deltaX / distance) * -strength;
                        const moveY = (deltaY / distance) * -strength;

                        // Apply transform with smooth transition
                        shape.style.transform = `translate(${moveX}px, ${moveY}px) ${shape.dataset.originalTransform || ''}`;
                    } else {
                        // Return to original position
                        shape.style.transform = shape.dataset.originalTransform || '';
                    }
                });
            });

            // Store original transforms
            shapes.forEach(shape => {
                const computedStyle = window.getComputedStyle(shape);
                shape.dataset.originalTransform = computedStyle.transform;
            });
        });
    </script>

@endsection 