@extends('layouts.app')

@section('content')
    <!-- Unique Geometric Background Pattern -->
    <div class="fixed inset-0 -z-10 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <!-- Hero Section -->
    <section class="relative min-h-[70vh] flex items-center pt-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 -z-10">
            <!-- Code Animation Background -->
            <div class="absolute inset-0 opacity-10">
                <div class="code-animation"></div>
            </div>
            
            <!-- Gradient Orbs -->
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative z-10">
                    <div class="inline-block">
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-emerald-600/10 to-blue-600/10 text-emerald-600">
                            Development Solutions
                        </span>
                    </div>
                    <h1 class="mt-6 text-5xl md:text-6xl font-bold font-poppins leading-tight">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-blue-600">
                            Web & App
                        </span>
                        <span class="block mt-1">
                            Development
                        </span>
                    </h1>
                    <p class="mt-6 text-xl text-gray-600 leading-relaxed max-w-2xl">
                        Transform your digital presence with cutting-edge web and mobile applications. We create beautiful, scalable, and high-performance solutions that drive business growth and user engagement.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-emerald-600 rounded-full hover:bg-emerald-700 transition-colors duration-300">
                            Start Your Project
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-emerald-600 bg-emerald-50 rounded-full hover:bg-emerald-100 transition-colors duration-300">
                            View Services
                        </a>
                    </div>
                </div>

                <!-- Hero Visual Element - Code Editor Visualization -->
                <div class="relative z-10 hidden lg:block">
                    <div class="relative w-full h-[600px] perspective-1000">
                        <!-- Modern Code Editor Visualization -->
                        <div class="absolute inset-0 code-editor">
                            <!-- Code editor elements will be added via JavaScript -->
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
                    Our Development Services
                </h2>
                <p class="mt-4 text-xl text-gray-600">
                    End-to-end web and mobile development solutions
                </p>
            </div>

            <!-- Services Flow -->
            <div class="relative">
                <!-- Connecting Lines SVG -->
                <svg class="absolute inset-0 w-full h-full -z-10 hidden lg:block" viewBox="0 0 1200 800">
                    <path class="flow-path" d="M200,200 C400,100 800,700 1000,600" stroke="url(#gradient)" stroke-width="2" fill="none"/>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color: #059669"/>
                        <stop offset="100%" style="stop-color: #2563eb"/>
                    </linearGradient>
                </svg>

                <div class="grid lg:grid-cols-2 gap-12 relative">
                    <!-- Custom Web Development -->
                    <div class="service-block relative group" data-position="1">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-emerald-600 to-blue-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-emerald-600 to-blue-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Custom Web Development</h3>
                            <p class="text-gray-600 mb-6">Scalable, responsive web applications built with modern technologies and best practices for optimal performance.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Full-Stack Development
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Responsive Design
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Mobile App Development -->
                    <div class="service-block relative group lg:mt-32" data-position="2">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Mobile App Development</h3>
                            <p class="text-gray-600 mb-6">Native and cross-platform mobile applications that deliver exceptional user experiences across all devices.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    iOS & Android Apps
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Cross-Platform Solutions
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- E-commerce Solutions -->
                    <div class="service-block relative group" data-position="3">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">E-commerce Solutions</h3>
                            <p class="text-gray-600 mb-6">Custom online stores and marketplaces built for scalability, security, and seamless transactions.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Payment Integration
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Inventory Management
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- UI/UX Design -->
                    <div class="service-block relative group lg:mt-32" data-position="4">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-violet-600 to-purple-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-violet-600 to-purple-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">UI/UX Design</h3>
                            <p class="text-gray-600 mb-6">User-centered design solutions that create engaging, intuitive, and memorable digital experiences.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    User Research
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Interactive Prototypes
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-gradient-to-b from-white to-emerald-50/50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 24px 24px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold font-poppins">How We Work</h2>
                <p class="mt-4 text-xl text-gray-600">Our proven development process for digital success</p>
            </div>

            <!-- Process Steps -->
            <div class="relative">
                <!-- Process Connection Lines -->
                <div class="absolute left-0 right-0 top-1/2 transform -translate-y-1/2 h-1 bg-gradient-to-r from-emerald-200 via-blue-200 to-indigo-200 hidden lg:block"></div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Discovery & Planning -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-emerald-600 to-blue-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-emerald-600 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">1</div>
                            <h3 class="text-xl font-bold mb-4">Discovery & Planning</h3>
                            <p class="text-gray-600">Understanding your vision, requirements, and business goals to create a comprehensive development strategy.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Requirements Analysis
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Project Scoping
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Design & Prototyping -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">2</div>
                            <h3 class="text-xl font-bold mb-4">Design & Prototyping</h3>
                            <p class="text-gray-600">Creating intuitive interfaces and interactive prototypes that align with your brand and user needs.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    UI/UX Design
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Interactive Mockups
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Development & Testing -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">3</div>
                            <h3 class="text-xl font-bold mb-4">Development & Testing</h3>
                            <p class="text-gray-600">Building your solution with clean, efficient code and rigorous testing for quality assurance.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Agile Development
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Quality Assurance
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Launch & Support -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-violet-600 to-purple-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-violet-600 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">4</div>
                            <h3 class="text-xl font-bold mb-4">Launch & Support</h3>
                            <p class="text-gray-600">Seamless deployment and ongoing maintenance to ensure your solution performs optimally.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Deployment
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Ongoing Support
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
                <p class="mt-4 text-xl text-gray-600">Real results that drive digital growth</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Enhanced User Experience -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-600/10 to-blue-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-600 to-blue-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Enhanced UX</h3>
                        <p class="text-gray-600">Intuitive interfaces that delight users and increase engagement by up to 200%.</p>
                        <div class="mt-6">
                            <div class="flex items-center text-emerald-600 font-medium">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Increased Conversions -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-indigo-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Higher Conversions</h3>
                        <p class="text-gray-600">Optimized user journeys that increase conversion rates by up to 150%.</p>
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

                <!-- Mobile Optimization -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/10 to-violet-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Mobile-First</h3>
                        <p class="text-gray-600">Responsive solutions that perform flawlessly across all devices and platforms.</p>
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

                <!-- Performance Optimization -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-violet-600/10 to-purple-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-violet-600 to-purple-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Lightning Fast</h3>
                        <p class="text-gray-600">Optimized performance that reduces load times and improves SEO rankings.</p>
                        <div class="mt-6">
                            <div class="flex items-center text-violet-600 font-medium">
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
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-blue-600 transform skew-y-3 rounded-3xl -rotate-1"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 transform -skew-y-3 rounded-3xl rotate-1 opacity-75"></div>
                
                <div class="relative bg-white rounded-3xl p-8 md:p-12 lg:p-16 shadow-xl">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-4xl md:text-5xl font-bold font-poppins leading-tight">
                                Ready to Build Your Digital Future?
                            </h2>
                            <p class="mt-6 text-xl text-gray-600">
                                Let's discuss how our web and app development solutions can transform your business and drive growth.
                            </p>
                            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                                <a href="#contact-form" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-gradient-to-r from-emerald-600 to-blue-600 rounded-full hover:from-emerald-700 hover:to-blue-700 transform hover:-translate-y-1 transition-all duration-300">
                                    Start Your Project
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                                <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-emerald-600 bg-emerald-50 rounded-full hover:bg-emerald-100 transform hover:-translate-y-1 transition-all duration-300">
                                    View Portfolio
                                </a>
                            </div>
                            <div class="mt-10 grid grid-cols-3 gap-8">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-emerald-600">500+</div>
                                    <div class="text-gray-600 mt-1">Projects Delivered</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-600">98%</div>
                                    <div class="text-gray-600 mt-1">Client Satisfaction</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-indigo-600">24/7</div>
                                    <div class="text-gray-600 mt-1">Support</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Contact Form -->
                        <div id="contact-form" class="relative">
                            <div class="absolute inset-0.5 bg-gradient-to-br from-emerald-600 to-blue-600 rounded-2xl blur opacity-25"></div>
                            <div class="relative bg-white rounded-2xl p-8">
                                <form action="{{ route('service-inquiry.submit') }}" method="POST" class="space-y-6">
                                    @csrf
                                    <input type="hidden" name="service" value="Web Development">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Name</label>
                                        <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-600 focus:border-transparent transition duration-200" placeholder="Your name">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Email</label>
                                        <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-600 focus:border-transparent transition duration-200" placeholder="your@email.com">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Company</label>
                                        <input type="text" name="company" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-600 focus:border-transparent transition duration-200" placeholder="Your company">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Phone</label>
                                        <input type="tel" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-600 focus:border-transparent transition duration-200" placeholder="Your phone number">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Message</label>
                                        <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-600 focus:border-transparent transition duration-200" placeholder="Tell us about your project..."></textarea>
                                    </div>
                                    <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-emerald-600 to-blue-600 text-white font-medium rounded-lg hover:from-emerald-700 hover:to-blue-700 transition duration-200">
                                        Send Inquiry
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

        .code-editor {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            background: #1a1a1a;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .code-editor::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2rem;
            background: #2a2a2a;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }
    </style>

    <script>
        // Code Editor Animation
        class CodeEditor {
            constructor() {
                this.canvas = document.createElement('canvas');
                this.ctx = this.canvas.getContext('2d');
                this.lines = [];
                
                this.init();
            }

            init() {
                // Initialize code editor visualization
                // This will be implemented with animated code snippets
            }
        }

        // Initialize animations when the page loads
        document.addEventListener('DOMContentLoaded', () => {
            const codeEditor = new CodeEditor();
            
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
@endsection 