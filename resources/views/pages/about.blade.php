<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - True Growth | Digital Innovation & AI-Powered Growth</title>
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

    <!-- Dynamic Navigation (Same as Homepage) -->
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
                    <a href="/#work" class="text-gray-700 hover:text-indigo-600 transition-colors">Our Work</a>
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
                <a href="/#work" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">Our Work</a>
                <a href="/about" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">About</a>
                <a href="/#contact" class="block px-3 py-2 text-indigo-600 font-medium">Let's Talk</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Side-by-Side Layout -->
    <section class="relative min-h-[80vh] flex items-center pt-20 overflow-hidden">
        <!-- Animated Background Elements - More Subtle -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-2xl opacity-50 animate-blob"></div>
            <div class="absolute bottom-1/4 left-1/4 w-96 h-96 bg-purple-100 rounded-full mix-blend-multiply filter blur-2xl opacity-50 animate-blob animation-delay-2000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg blur opacity-25"></div>
                        <div class="relative bg-white rounded-lg p-8">
                            <h1 class="text-4xl md:text-5xl font-bold font-poppins leading-tight">
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                                    Transforming Business
                                </span>
                                <span class="block mt-2">
                                    Through AI Innovation
                                </span>
                            </h1>
                            <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                                Since 2020, we've been at the forefront of digital transformation, helping businesses harness the power of AI and innovative technology to achieve unprecedented growth.
                            </p>
                            <div class="mt-8 flex flex-wrap gap-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                        </svg>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">200+</div>
                                        <div class="text-gray-500">Projects Delivered</div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">50+</div>
                                        <div class="text-gray-500">Expert Team Members</div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-12 h-12 rounded-full bg-pink-100 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">98%</div>
                                        <div class="text-gray-500">Client Satisfaction</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative w-full h-[500px] rounded-2xl overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-600 opacity-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <!-- 3D Floating Elements -->
                            <div class="relative w-80 h-80">
                                <!-- AI/Tech themed floating elements -->
                                <div class="absolute top-0 left-0 w-40 h-40 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-2xl transform rotate-12 animate-float"></div>
                                <div class="absolute bottom-0 right-0 w-40 h-40 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full transform -rotate-12 animate-float-delay"></div>
                                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-white/90 backdrop-blur-lg rounded-2xl rotate-45 flex items-center justify-center">
                                    <div class="transform -rotate-45">
                                        <svg class="w-24 h-24 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-20 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Mission -->
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl blur opacity-25"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold font-poppins mb-6">Our Mission</h2>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            To democratize AI and digital innovation, making cutting-edge technology accessible and actionable for businesses of all sizes. We're committed to driving meaningful transformation that creates lasting value.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Empowering Digital Transformation</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Driving Innovation Through AI</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Creating Sustainable Growth</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Vision -->
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl blur opacity-25"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-16 h-16 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold font-poppins mb-6">Our Vision</h2>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            To be the catalyst for a future where every business can harness the power of AI and digital innovation to achieve extraordinary growth and create positive impact in their industries.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Leading AI Innovation</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Global Digital Excellence</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Sustainable Technology Solutions</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Journey & Expertise Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold font-poppins">Our Journey & Expertise</h2>
                <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
                    From our founding to today, we've been driven by innovation and a commitment to excellence in AI and digital transformation.
                </p>
            </div>

            <!-- Timeline -->
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-indigo-600 to-purple-600"></div>
                
                <!-- 2020 -->
                <div class="relative mb-16">
                    <div class="flex items-center justify-center mb-8">
                        <div class="w-12 h-12 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold">
                            2020
                        </div>
                    </div>
                    <div class="relative bg-white rounded-2xl p-8 shadow-lg max-w-2xl mx-auto">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl blur opacity-25"></div>
                        <div class="relative">
                            <h3 class="text-2xl font-bold mb-4">Foundation & Vision</h3>
                            <p class="text-gray-600">
                                True Growth was founded with a vision to democratize AI and digital innovation. We started with a small team of experts passionate about making advanced technology accessible to businesses of all sizes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 2021 -->
                <div class="relative mb-16">
                    <div class="flex items-center justify-center mb-8">
                        <div class="w-12 h-12 rounded-full bg-purple-600 flex items-center justify-center text-white font-bold">
                            2021
                        </div>
                    </div>
                    <div class="relative bg-white rounded-2xl p-8 shadow-lg max-w-2xl mx-auto">
                        <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl blur opacity-25"></div>
                        <div class="relative">
                            <h3 class="text-2xl font-bold mb-4">Rapid Growth & Innovation</h3>
                            <p class="text-gray-600">
                                Expanded our services to include comprehensive AI solutions, custom web development, and digital marketing. Launched our proprietary AI-powered analytics platform.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 2022 -->
                <div class="relative mb-16">
                    <div class="flex items-center justify-center mb-8">
                        <div class="w-12 h-12 rounded-full bg-pink-600 flex items-center justify-center text-white font-bold">
                            2022
                        </div>
                    </div>
                    <div class="relative bg-white rounded-2xl p-8 shadow-lg max-w-2xl mx-auto">
                        <div class="absolute -inset-1 bg-gradient-to-r from-pink-600 to-red-600 rounded-2xl blur opacity-25"></div>
                        <div class="relative">
                            <h3 class="text-2xl font-bold mb-4">Global Expansion</h3>
                            <p class="text-gray-600">
                                Established international presence with offices in key tech hubs. Formed strategic partnerships with leading AI research institutions and tech companies.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="relative">
                    <div class="flex items-center justify-center mb-8">
                        <div class="w-12 h-12 rounded-full bg-red-600 flex items-center justify-center text-white font-bold">
                            2023
                        </div>
                    </div>
                    <div class="relative bg-white rounded-2xl p-8 shadow-lg max-w-2xl mx-auto">
                        <div class="absolute -inset-1 bg-gradient-to-r from-red-600 to-orange-600 rounded-2xl blur opacity-25"></div>
                        <div class="relative">
                            <h3 class="text-2xl font-bold mb-4">Industry Leadership</h3>
                            <p class="text-gray-600">
                                Recognized as an industry leader in AI implementation and digital transformation. Launched our AI Innovation Lab to develop cutting-edge solutions for emerging business challenges.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise Grid -->
            <div class="mt-32">
                <h3 class="text-3xl font-bold text-center mb-16">Our Core Expertise</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Enterprise AI Solutions -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8">
                            <div class="w-14 h-14 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold mb-4">Enterprise AI Solutions</h4>
                            <p class="text-gray-600 mb-6">Strategic AI solutions to optimize your operations, automate processes, and drive data-driven decisions.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-gray-600">Private LLM Solutions for Enterprises</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-gray-600">Process Automation</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-gray-600">AI Integration</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Web & App Development -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8">
                            <div class="w-14 h-14 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold mb-4">Web & App Development</h4>
                            <p class="text-gray-600 mb-6">Custom web and mobile solutions built with cutting-edge technologies.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-gray-600">Responsive Websites</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-gray-600">Mobile Applications</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-gray-600">Custom Solutions</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Digital Marketing -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-pink-600 to-red-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8">
                            <div class="w-14 h-14 bg-pink-600 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold mb-4">Digital Marketing</h4>
                            <p class="text-gray-600 mb-6">Data-driven marketing strategies to boost your online presence.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-gray-600">SEO Optimization</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-gray-600">Social Media Marketing</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-gray-600">Content Strategy</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-bold font-poppins">Our Values</h2>
                <p class="mt-4 text-xl text-gray-600">
                    The principles that guide our work and relationships
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Innovation First</h3>
                        <p class="text-gray-600">We constantly push boundaries and embrace new technologies to deliver cutting-edge solutions that drive real results.</p>
                    </div>
                </div>

                <!-- Value 2 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Client Partnership</h3>
                        <p class="text-gray-600">We believe in building lasting relationships and treating our clients' success as our own.</p>
                    </div>
                </div>

                <!-- Value 3 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-pink-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Quality & Security</h3>
                        <p class="text-gray-600">We maintain the highest standards of quality and security in every solution we deliver.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gradient-to-b from-indigo-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-bold font-poppins">Our Team</h2>
                <p class="mt-4 text-xl text-gray-600">
                    Meet the innovators behind True Growth
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-24 h-24 rounded-full bg-gradient-to-br from-indigo-500 to-purple-500 mx-auto mb-6"></div>
                        <div class="text-center">
                            <h3 class="text-xl font-bold">Alex Thompson</h3>
                            <p class="text-indigo-600 mb-4">CEO & Founder</p>
                            <p class="text-gray-600">AI and Digital Innovation Expert with 15+ years of experience in transforming businesses.</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-24 h-24 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 mx-auto mb-6"></div>
                        <div class="text-center">
                            <h3 class="text-xl font-bold">Sarah Chen</h3>
                            <p class="text-purple-600 mb-4">CTO</p>
                            <p class="text-gray-600">AI Research Specialist and Tech Innovation Leader with a focus on scalable solutions.</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-24 h-24 rounded-full bg-gradient-to-br from-pink-500 to-red-500 mx-auto mb-6"></div>
                        <div class="text-center">
                            <h3 class="text-xl font-bold">Michael Rodriguez</h3>
                            <p class="text-pink-600 mb-4">Head of Design</p>
                            <p class="text-gray-600">Creative Director with expertise in UX/UI and brand development.</p>
                        </div>
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
                    <h2 class="text-4xl md:text-5xl font-bold font-poppins mb-6">Ready to Start Your Digital Journey?</h2>
                    <p class="text-xl mb-10 max-w-2xl mx-auto">Join us in creating innovative solutions that drive real business growth. Let's build something extraordinary together.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium bg-white text-indigo-600 rounded-full hover:bg-indigo-50 transition-colors duration-300">
                            Get Started
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="/#services" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium border-2 border-white text-white rounded-full hover:bg-white hover:text-indigo-600 transition-colors duration-300">
                            Our Services
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
    </style>

    <script>
        // Initialize GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Animate sections on scroll
        gsap.utils.toArray('section').forEach(section => {
            gsap.from(section.querySelectorAll('h2, p, .grid > div'), {
                scrollTrigger: {
                    trigger: section,
                    start: 'top bottom-=100',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                y: 50,
                duration: 0.8,
                stagger: 0.2
            });
        });
    </script>
</body>
</html>
