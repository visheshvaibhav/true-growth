<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI-Powered Growth - True Growth</title>
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

    <!-- Dynamic Navigation -->
    @include('components.navigation')

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 -z-10">
            <!-- Code Network Animation Background -->
            <div class="absolute inset-0 opacity-10">
                <div class="code-network"></div>
            </div>
            
            <!-- Gradient Orbs -->
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative z-10">
                    <div class="inline-block">
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-purple-600/10 to-indigo-600/10 text-purple-600">
                            Growth Solutions
                        </span>
                    </div>
                    <h1 class="mt-6 text-5xl md:text-6xl font-bold font-poppins leading-tight">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600">
                          AI-Powered 
                        </span>
                        <span class="block mt-1">
                            Business Operations
                        </span>
                    </h1>
                    <p class="mt-6 text-xl text-gray-600 leading-relaxed max-w-2xl">
                        Transform your business operations with AI-powered solutions. We create intelligent, scalable solutions that drive growth and deliver exceptional user experiences.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-purple-600 rounded-full hover:bg-purple-700 transition-colors duration-300">
                            Start Your Project
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-purple-600 bg-purple-50 rounded-full hover:bg-purple-100 transition-colors duration-300">
                            Explore Services
                        </a>
                    </div>
                </div>

                <!-- Hero Visual Element -->
                <div class="relative z-10 hidden lg:block">
                    <div class="relative w-full h-[600px] perspective-1000">
                        <!-- 3D Code Visualization -->
                        <div class="absolute inset-0 code-visualization">
                            <!-- Code elements will be added via JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Visual Flow -->
    <section id="services" class="py-20 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 24px 24px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold font-poppins">
                    Our Development Solutions
                </h2>
                <p class="mt-4 text-xl text-gray-600">
                    Comprehensive web and app development powered by AI
                </p>
            </div>

            <!-- Services Flow -->
            <div class="relative">
                <!-- Connecting Lines SVG -->
                <svg class="absolute inset-0 w-full h-full -z-10 hidden lg:block" viewBox="0 0 1200 800">
                    <path class="flow-path" d="M200,200 C400,100 800,700 1000,600" stroke="url(#gradient)" stroke-width="2" fill="none"/>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color: #6366f1"/>
                        <stop offset="100%" style="stop-color: #a855f7"/>
                    </linearGradient>
                </svg>

                <div class="grid lg:grid-cols-2 gap-12 relative">
                    <!-- Web Development -->
                    <div class="service-block relative group" data-position="1">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">AI-Powered Web Development</h3>
                            <p class="text-gray-600 mb-6">Intelligent web solutions that adapt to user behavior and deliver personalized experiences through AI-driven development.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Smart UI/UX Design
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Adaptive Performance
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- App Development -->
                    <div class="service-block relative group lg:mt-32" data-position="2">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-blue-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-blue-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Intelligent App Solutions</h3>
                            <p class="text-gray-600 mb-6">Cross-platform mobile applications with AI capabilities, delivering seamless experiences across all devices.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Native Performance
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Cross-Platform Support
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- AI Digital Marketing -->
                    <div class="service-block relative group" data-position="3">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-blue-600 to-cyan-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-cyan-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">AI-Driven Digital Marketing</h3>
                            <p class="text-gray-600 mb-6">Smart marketing solutions that leverage AI to optimize campaigns, analyze user behavior, and maximize ROI.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Predictive Analytics
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Automated Campaigns
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Growth Analytics -->
                    <div class="service-block relative group lg:mt-32" data-position="4">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-cyan-600 to-teal-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-cyan-600 to-teal-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Growth Analytics Platform</h3>
                            <p class="text-gray-600 mb-6">Comprehensive analytics and insights platform to track, measure, and optimize your digital growth journey.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Real-time Monitoring
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Performance Insights
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-gradient-to-b from-white to-indigo-50/50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 24px 24px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold font-poppins">How We Work</h2>
                <p class="mt-4 text-xl text-gray-600">Our proven process for digital transformation</p>
            </div>

            <!-- Process Steps -->
            <div class="relative">
                <!-- Process Connection Lines -->
                <div class="absolute left-0 right-0 top-1/2 transform -translate-y-1/2 h-1 bg-gradient-to-r from-purple-200 via-indigo-200 to-blue-200 hidden lg:block"></div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Discovery & Planning -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">1</div>
                            <h3 class="text-xl font-bold mb-4">Discovery & Planning</h3>
                            <p class="text-gray-600">Understanding your goals and creating a comprehensive development strategy.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Requirements Analysis
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Strategy Development
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Design & Development -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-indigo-600 to-blue-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-600 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">2</div>
                            <h3 class="text-xl font-bold mb-4">Design & Development</h3>
                            <p class="text-gray-600">Creating intuitive interfaces and robust functionality with AI integration.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    UI/UX Design
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    AI Integration
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testing & Optimization -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-blue-600 to-cyan-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-cyan-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">3</div>
                            <h3 class="text-xl font-bold mb-4">Testing & Optimization</h3>
                            <p class="text-gray-600">Rigorous testing and performance optimization for flawless execution.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Quality Assurance
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Performance Testing
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Launch & Growth -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-cyan-600 to-teal-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-600 to-teal-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">4</div>
                            <h3 class="text-xl font-bold mb-4">Launch & Growth</h3>
                            <p class="text-gray-600">Successful deployment and continuous improvement for sustainable growth.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Deployment
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Growth Monitoring
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Outcomes Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 24px 24px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold font-poppins">Business Outcomes</h2>
                <p class="mt-4 text-xl text-gray-600">Real results that drive digital success</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Enhanced User Experience -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600/10 to-indigo-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Enhanced UX</h3>
                        <p class="text-gray-600">Boost user satisfaction by up to 85% with AI-driven personalization and intuitive design.</p>
                        <div class="mt-6">
                            <div class="flex items-center text-purple-600 font-medium">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Increased Conversion -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/10 to-blue-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-blue-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Higher Conversion</h3>
                        <p class="text-gray-600">Achieve up to 40% increase in conversion rates through AI-optimized user journeys.</p>
                        <div class="mt-6">
                            <div class="flex items-center text-indigo-600 font-medium">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Marketing Performance -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-cyan-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-cyan-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Marketing ROI</h3>
                        <p class="text-gray-600">Improve marketing ROI by 65% with AI-driven targeting and automation.</p>
                        <div class="mt-6">
                            <div class="flex items-center text-blue-600 font-medium">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scalable Growth -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/10 to-teal-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-cyan-600 to-teal-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Scalable Growth</h3>
                        <p class="text-gray-600">Build systems that scale seamlessly with your business growth and user demands.</p>
                        <div class="mt-6">
                            <div class="flex items-center text-cyan-600 font-medium">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section id="contact" class="py-20 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 transform skew-y-3 rounded-3xl -rotate-1"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-blue-600 transform -skew-y-3 rounded-3xl rotate-1 opacity-75"></div>
                
                <div class="relative bg-white rounded-3xl p-8 md:p-12 lg:p-16 shadow-xl">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-4xl md:text-5xl font-bold font-poppins leading-tight">
                                Ready to Transform Your Digital Presence?
                            </h2>
                            <p class="mt-6 text-xl text-gray-600">
                                Let's discuss how our AI-powered web and app solutions can accelerate your business growth.
                            </p>
                            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                                <a href="#contact-form" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-gradient-to-r from-purple-600 to-indigo-600 rounded-full hover:from-purple-700 hover:to-indigo-700 transform hover:-translate-y-1 transition-all duration-300">
                                    Start Your Project
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                                <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-purple-600 bg-purple-50 rounded-full hover:bg-purple-100 transform hover:-translate-y-1 transition-all duration-300">
                                    View Portfolio
                                </a>
                            </div>
                            <div class="mt-10 grid grid-cols-3 gap-8">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-purple-600">200+</div>
                                    <div class="text-gray-600 mt-1">Projects Delivered</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-indigo-600">98%</div>
                                    <div class="text-gray-600 mt-1">Client Satisfaction</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-600">24/7</div>
                                    <div class="text-gray-600 mt-1">Support</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Contact Form -->
                        <div id="contact-form" class="relative">
                            <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-2xl blur opacity-25"></div>
                            <div class="relative bg-white rounded-2xl p-8">
                                <form class="space-y-6">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Name</label>
                                        <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-200" placeholder="Your name">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Email</label>
                                        <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-200" placeholder="your@email.com">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Project Type</label>
                                        <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-200">
                                            <option>Web Development</option>
                                            <option>App Development</option>
                                            <option>Digital Marketing</option>
                                            <option>Full Growth Solution</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Message</label>
                                        <textarea class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-200 h-32" placeholder="Tell us about your project"></textarea>
                                    </div>
                                    <button type="submit" class="w-full inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-gradient-to-r from-purple-600 to-indigo-600 rounded-full hover:from-purple-700 hover:to-indigo-700 transform hover:-translate-y-1 transition-all duration-300">
                                        Send Message
                                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .perspective-1000 {
            perspective: 1000px;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .animate-blob {
            animation: float 6s ease-in-out infinite;
        }
        
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        
        .animation-delay-4000 {
            animation-delay: 4s;
        }

        .flow-path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw 2s ease forwards;
        }

        @keyframes draw {
            to {
                stroke-dashoffset: 0;
            }
        }

        .service-block {
            opacity: 0;
            transform: translateY(50px);
        }

        .process-step {
            opacity: 0;
            transform: translateY(50px);
        }

        .outcome-card {
            opacity: 0;
            transform: translateY(50px);
        }
    </style>

    <script>
        // Code Network Animation
        class CodeNetwork {
            constructor() {
                this.canvas = document.createElement('canvas');
                this.ctx = this.canvas.getContext('2d');
                this.nodes = [];
                this.connections = [];
                
                this.init();
            }

            init() {
                // Initialize code network visualization
                // This will be implemented in the next section
            }
        }

        // Initialize animations when the page loads
        document.addEventListener('DOMContentLoaded', () => {
            const codeNetwork = new CodeNetwork();
            
            // GSAP Animations
            gsap.from('.hero-content', {
                opacity: 0,
                y: 100,
                duration: 1,
                ease: 'power4.out'
            });
        });

        // Animate service blocks on scroll
        gsap.utils.toArray('.service-block').forEach((block, i) => {
            gsap.to(block, {
                scrollTrigger: {
                    trigger: block,
                    start: 'top bottom-=100',
                    end: 'bottom top+=100',
                    toggleActions: 'play none none reverse'
                },
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out',
                delay: i * 0.2
            });
        });

        // Animate process steps on scroll
        gsap.utils.toArray('.process-step').forEach((step, i) => {
            gsap.to(step, {
                scrollTrigger: {
                    trigger: step,
                    start: 'top bottom-=100',
                    end: 'bottom top+=100',
                    toggleActions: 'play none none reverse'
                },
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out',
                delay: i * 0.2
            });
        });

        // Animate outcome cards on scroll
        gsap.utils.toArray('.outcome-card').forEach((card, i) => {
            gsap.to(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom-=100',
                    end: 'bottom top+=100',
                    toggleActions: 'play none none reverse'
                },
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out',
                delay: i * 0.2
            });
        });
    </script>
</body>
</html> 