@extends('layouts.app')

@section('content')
    <!-- Unique Geometric Background Pattern -->
    <div class="fixed inset-0 -z-10 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <!-- Services Hero Section - Different from homepage but maintaining aesthetic -->
    <section class="relative min-h-[70vh] flex items-center pt-20 overflow-hidden">
        <!-- Animated Background Elements - Different pattern from homepage -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/3 right-1/3 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute bottom-1/3 left-1/3 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute top-1/2 left-1/2 w-96 h-96 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="relative z-10 text-center max-w-3xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold font-poppins leading-tight mb-6">
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
                        Comprehensive Digital
                    </span>
                    <span class="block mt-1">
                        Solutions for Growth
                    </span>
                </h1>
                <p class="text-xl text-gray-600 leading-relaxed mb-8">
                    We combine cutting-edge technology with creative expertise to deliver transformative digital solutions that drive real business growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#explore-services" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-indigo-600 rounded-full hover:bg-indigo-700 transition-colors duration-300">
                        Explore Our Services
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-indigo-600 bg-indigo-50 rounded-full hover:bg-indigo-100 transition-colors duration-300">
                        Schedule a Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services Section -->
    <section id="explore-services" class="py-20 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Service Categories -->
            <div class="grid lg:grid-cols-2 gap-12 mb-20">
                <div>
                    <h2 class="text-4xl font-bold font-poppins mb-6">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                            Transform Your Business
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Our comprehensive suite of services is designed to help businesses navigate the digital landscape, leverage cutting-edge technology, and achieve sustainable growth.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="text-3xl font-bold text-indigo-600 mb-2">25+</div>
                        <p class="text-gray-600">Specialized Services</p>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="text-3xl font-bold text-purple-600 mb-2">98%</div>
                        <p class="text-gray-600">Client Satisfaction</p>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="text-3xl font-bold text-pink-600 mb-2">15+</div>
                        <p class="text-gray-600">Industries Served</p>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="text-3xl font-bold text-indigo-600 mb-2">24/7</div>
                        <p class="text-gray-600">Expert Support</p>
                    </div>
                </div>
            </div>

            <!-- Detailed Service Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- AI-Powered Growth -->
                <div class="group relative">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-14 h-14 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">AI-Powered Growth</h3>
                        <p class="text-gray-600 mb-6">Leverage cutting-edge AI solutions to optimize your business operations and drive data-driven growth.</p>
                        <ul class="space-y-3 text-gray-600 mb-8">
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
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Machine Learning Integration
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                AI-Driven Customer Insights
                            </li>
                        </ul>
                        <a href="/services/ai-growth" class="inline-flex items-center text-indigo-600 hover:text-indigo-700 transition-colors">
                            Learn More
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Enterprise AI & Automation -->
                <div class="group relative">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-14 h-14 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Enterprise AI & Automation</h3>
                        <p class="text-gray-600 mb-6">Custom AI solutions and automation strategies tailored for enterprise-level operations.</p>
                        <ul class="space-y-3 text-gray-600 mb-8">
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
                                Process Automation
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Custom AI Integration
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Enterprise Workflow Optimization
                            </li>
                        </ul>
                        <a href="/services/enterprise-ai" class="inline-flex items-center text-purple-600 hover:text-purple-700 transition-colors">
                            Learn More
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Web & App Development -->
                <div class="group relative">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-14 h-14 bg-pink-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Web & App Development</h3>
                        <p class="text-gray-600 mb-6">Custom web and mobile solutions built with cutting-edge technologies.</p>
                        <ul class="space-y-3 text-gray-600 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Custom Web Applications
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Mobile App Development
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                E-commerce Solutions
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Progressive Web Apps
                            </li>
                        </ul>
                        <a href="/services/web-development" class="inline-flex items-center text-pink-600 hover:text-pink-700 transition-colors">
                            Learn More
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Services -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <!-- Cloud & IT Infrastructure -->
                <div class="group relative">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-14 h-14 bg-red-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Cloud & IT Infrastructure</h3>
                        <p class="text-gray-600 mb-6">Build and maintain robust, scalable cloud infrastructure for your business.</p>
                        <ul class="space-y-3 text-gray-600 mb-8">
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
                                DevOps Implementation
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Security & Compliance
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                24/7 Monitoring
                            </li>
                        </ul>
                        <a href="/services/cloud-infrastructure" class="inline-flex items-center text-red-600 hover:text-red-700 transition-colors">
                            Learn More
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="group relative">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-orange-600 to-yellow-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-14 h-14 bg-orange-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Digital Marketing</h3>
                        <p class="text-gray-600 mb-6">Data-driven marketing strategies to boost your online presence and ROI.</p>
                        <ul class="space-y-3 text-gray-600 mb-8">
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
                                PPC Campaigns
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Social Media Marketing
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Content Strategy
                            </li>
                        </ul>
                        <a href="/services/digital-marketing" class="inline-flex items-center text-orange-600 hover:text-orange-700 transition-colors">
                            Learn More
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Creative & Branding -->
                <div class="group relative">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-yellow-600 to-green-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-14 h-14 bg-yellow-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Creative & Branding</h3>
                        <p class="text-gray-600 mb-6">Strategic brand development and creative design solutions for lasting impact.</p>
                        <ul class="space-y-3 text-gray-600 mb-8">
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
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                UI/UX Design
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Marketing Collateral
                            </li>
                        </ul>
                        <a href="/services/branding" class="inline-flex items-center text-yellow-600 hover:text-yellow-700 transition-colors">
                            Learn More
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Our Approach Section -->
            <div class="mt-32">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-4xl font-bold font-poppins mb-6">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                            Our Approach to Excellence
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600">
                        We combine innovative technology with proven methodologies to deliver exceptional results for our clients.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Left Column: Process Steps -->
                    <div class="space-y-8">
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0 w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl">1</div>
                            <h3 class="text-xl font-bold mb-2">Discovery & Analysis</h3>
                            <p class="text-gray-600">We begin by understanding your business goals, challenges, and unique requirements through in-depth consultation.</p>
                        </div>
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0 w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl">2</div>
                            <h3 class="text-xl font-bold mb-2">Strategic Planning</h3>
                            <p class="text-gray-600">Our team develops a comprehensive strategy tailored to your specific needs and objectives.</p>
                        </div>
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0 w-12 h-12 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold text-xl">3</div>
                            <h3 class="text-xl font-bold mb-2">Agile Implementation</h3>
                            <p class="text-gray-600">We execute the strategy using agile methodologies, ensuring flexibility and continuous improvement.</p>
                        </div>
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0 w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-xl">4</div>
                            <h3 class="text-xl font-bold mb-2">Continuous Optimization</h3>
                            <p class="text-gray-600">Regular monitoring and optimization ensure your solution evolves with your business needs.</p>
                        </div>
                    </div>

                    <!-- Right Column: Key Differentiators -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-full -mr-32 -mt-32 opacity-50"></div>
                        <div class="relative">
                            <h3 class="text-2xl font-bold mb-6">Why Choose The True Growth Co.?</h3>
                            <ul class="space-y-6">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 mr-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Cutting-edge Technology</h4>
                                        <p class="text-gray-600">We leverage the latest AI and technology innovations to give you a competitive edge.</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mr-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Customized Solutions</h4>
                                        <p class="text-gray-600">Every solution is tailored to your specific business needs and goals.</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center text-pink-600 mr-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Expert Team</h4>
                                        <p class="text-gray-600">Our team of specialists brings years of industry experience and expertise.</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-red-100 rounded-full flex items-center justify-center text-red-600 mr-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Proven Results</h4>
                                        <p class="text-gray-600">Our track record speaks for itself with measurable results and satisfied clients.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-gradient-to-b from-indigo-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl overflow-hidden">
                <div class="absolute inset-0">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-90"></div>
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                <div class="relative px-8 py-16 md:px-16 md:py-20 text-center text-white">
                    <h2 class="text-4xl md:text-5xl font-bold font-poppins mb-6">Ready to Transform Your Business?</h2>
                    <p class="text-xl mb-10 max-w-2xl mx-auto">Let's discuss how our services can help you achieve your business goals and drive sustainable growth.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium bg-white text-indigo-600 rounded-full hover:bg-indigo-50 transition-colors duration-300">
                            Schedule a Consultation
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="/case-studies" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium border-2 border-white text-white rounded-full hover:bg-white hover:text-indigo-600 transition-colors duration-300">
                            View Case Studies
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
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
    </style>

    <script>
        // Initialize GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Animate service cards on scroll
        gsap.utils.toArray('.group').forEach((card, i) => {
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

        // Animate approach steps
        gsap.utils.toArray('.relative.pl-16').forEach((step, i) => {
            gsap.from(step, {
                scrollTrigger: {
                    trigger: step,
                    start: 'top bottom-=100',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                x: -50,
                duration: 0.6,
                delay: i * 0.2
            });
        });
    </script>
@endsection
