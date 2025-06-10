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
            <!-- Cloud Animation Background -->
            <div class="absolute inset-0 opacity-10">
                <div class="cloud-animation"></div>
            </div>
            
            <!-- Gradient Orbs -->
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative z-10">
                    <div class="inline-block">
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-blue-600/10 to-indigo-600/10 text-blue-600">
                            Infrastructure Solutions
                        </span>
                    </div>
                    <h1 class="mt-6 text-5xl md:text-6xl font-bold font-poppins leading-tight">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">
                            Cloud & IT
                        </span>
                        <span class="block mt-1">
                            Infrastructure
                        </span>
                    </h1>
                    <p class="mt-6 text-xl text-gray-600 leading-relaxed max-w-2xl">
                        Build and maintain robust, scalable cloud infrastructure that powers your business growth. Our expert solutions ensure security, performance, and reliability at every level.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-blue-600 rounded-full hover:bg-blue-700 transition-colors duration-300">
                            Transform Your Infrastructure
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-blue-600 bg-blue-50 rounded-full hover:bg-blue-100 transition-colors duration-300">
                            View Services
                        </a>
                    </div>
                </div>

                <!-- Hero Visual Element - Cloud Infrastructure Visualization -->
                <div class="relative z-10 hidden lg:block">
                    <div class="relative w-full h-[600px] perspective-1000">
                        <!-- Modern Infrastructure Visualization -->
                        <div class="absolute inset-0 infrastructure-visual">
                            <!-- Infrastructure visualization elements will be added via JavaScript -->
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
                    Our Infrastructure Services
                </h2>
                <p class="mt-4 text-xl text-gray-600">
                    Comprehensive cloud and IT infrastructure solutions
                </p>
            </div>

            <!-- Services Flow -->
            <div class="relative">
                <!-- Connecting Lines SVG -->
                <svg class="absolute inset-0 w-full h-full -z-10 hidden lg:block" viewBox="0 0 1200 800">
                    <path class="flow-path" d="M200,200 C400,100 800,700 1000,600" stroke="url(#gradient)" stroke-width="2" fill="none"/>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color: #2563eb"/>
                        <stop offset="100%" style="stop-color: #4f46e5"/>
                    </linearGradient>
                </svg>

                <div class="grid lg:grid-cols-2 gap-12 relative">
                    <!-- Cloud Migration -->
                    <div class="service-block relative group" data-position="1">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Cloud Migration</h3>
                            <p class="text-gray-600 mb-6">Seamless transition of your infrastructure to the cloud with minimal disruption and maximum security.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Assessment & Planning
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Data Migration
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- DevOps Implementation -->
                    <div class="service-block relative group lg:mt-32" data-position="2">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">DevOps Implementation</h3>
                            <p class="text-gray-600 mb-6">Streamline your development and operations with automated workflows and continuous integration/deployment.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    CI/CD Pipeline Setup
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Infrastructure as Code
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Security & Compliance -->
                    <div class="service-block relative group" data-position="3">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-violet-600 to-purple-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-violet-600 to-purple-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Security & Compliance</h3>
                            <p class="text-gray-600 mb-6">Protect your infrastructure with enterprise-grade security measures and ensure regulatory compliance.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Security Audits
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Compliance Management
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- 24/7 Monitoring -->
                    <div class="service-block relative group lg:mt-32" data-position="4">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-3xl p-8 lg:p-12 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="service-icon mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">24/7 Monitoring</h3>
                            <p class="text-gray-600 mb-6">Continuous monitoring and proactive management of your infrastructure to ensure optimal performance.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Real-time Alerts
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Performance Analytics
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-gradient-to-b from-white to-blue-50/50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 24px 24px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold font-poppins">How We Work</h2>
                <p class="mt-4 text-xl text-gray-600">Our proven infrastructure implementation process</p>
            </div>

            <!-- Process Steps -->
            <div class="relative">
                <!-- Process Connection Lines -->
                <div class="absolute left-0 right-0 top-1/2 transform -translate-y-1/2 h-1 bg-gradient-to-r from-blue-200 via-indigo-200 to-violet-200 hidden lg:block"></div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Assessment & Strategy -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">1</div>
                            <h3 class="text-xl font-bold mb-4">Assessment & Strategy</h3>
                            <p class="text-gray-600">Analyzing your current infrastructure and designing a comprehensive migration strategy.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Infrastructure Audit
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Requirements Analysis
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Architecture Design -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">2</div>
                            <h3 class="text-xl font-bold mb-4">Architecture Design</h3>
                            <p class="text-gray-600">Creating a scalable and secure cloud infrastructure blueprint tailored to your needs.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Solution Design
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Security Planning
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Implementation -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-violet-600 to-purple-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-violet-600 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">3</div>
                            <h3 class="text-xl font-bold mb-4">Implementation</h3>
                            <p class="text-gray-600">Executing the migration plan with minimal disruption to your business operations.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Phased Migration
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Testing & Validation
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Optimization & Support -->
                    <div class="process-step relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-50 group-hover:opacity-75 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-6">4</div>
                            <h3 class="text-xl font-bold mb-4">Optimization & Support</h3>
                            <p class="text-gray-600">Continuous monitoring and optimization of your cloud infrastructure for peak performance.</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Performance Tuning
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    24/7 Monitoring
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
                <p class="mt-4 text-xl text-gray-600">Transformative results through cloud infrastructure</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Scalability -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-indigo-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Infinite Scalability</h3>
                        <p class="text-gray-600">Scale your infrastructure instantly to meet growing business demands without hardware limitations.</p>
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

                <!-- Cost Optimization -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/10 to-violet-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-violet-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Cost Efficiency</h3>
                        <p class="text-gray-600">Reduce infrastructure costs by up to 60% through optimized resource allocation and pay-as-you-go pricing.</p>
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

                <!-- Enhanced Security -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-violet-600/10 to-purple-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-violet-600 to-purple-600 rounded-2xl flex items-center justify-center transform rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Enterprise Security</h3>
                        <p class="text-gray-600">Military-grade security protocols and compliance measures to protect your business data.</p>
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

                <!-- High Availability -->
                <div class="outcome-card relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600/10 to-pink-600/10 rounded-3xl transform group-hover:scale-105 transition-transform duration-300"></div>
                    <div class="relative p-8">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl flex items-center justify-center transform -rotate-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">99.99% Uptime</h3>
                        <p class="text-gray-600">Ensure business continuity with redundant systems and automatic failover capabilities.</p>
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
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section id="contact" class="py-20 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-violet-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 transform skew-y-3 rounded-3xl -rotate-1"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-violet-600 transform -skew-y-3 rounded-3xl rotate-1 opacity-75"></div>
                
                <div class="relative bg-white rounded-3xl p-8 md:p-12 lg:p-16 shadow-xl">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-4xl md:text-5xl font-bold font-poppins leading-tight">
                                Ready to Transform Your Infrastructure?
                            </h2>
                            <p class="mt-6 text-xl text-gray-600">
                                Let's discuss how our cloud and IT infrastructure solutions can enhance your business operations and drive growth.
                            </p>
                            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                                <a href="#contact-form" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full hover:from-blue-700 hover:to-indigo-700 transform hover:-translate-y-1 transition-all duration-300">
                                    Start Your Cloud Journey
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                                <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-blue-600 bg-blue-50 rounded-full hover:bg-blue-100 transform hover:-translate-y-1 transition-all duration-300">
                                    View Case Studies
                                </a>
                            </div>
                            <div class="mt-10 grid grid-cols-3 gap-8">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-600">100+</div>
                                    <div class="text-gray-600 mt-1">Cloud Migrations</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-indigo-600">99.99%</div>
                                    <div class="text-gray-600 mt-1">Uptime SLA</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-violet-600">24/7</div>
                                    <div class="text-gray-600 mt-1">Expert Support</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Contact Form -->
                        <div id="contact-form" class="relative">
                            <div class="absolute inset-0.5 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl blur opacity-25"></div>
                            <div class="relative bg-white rounded-2xl p-8">
                                <form action="{{ route('service-inquiry.submit') }}" method="POST" class="space-y-6">
                                    @csrf
                                    <input type="hidden" name="service" value="Cloud Infrastructure">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Name</label>
                                        <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition duration-200" placeholder="Your name">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Email</label>
                                        <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition duration-200" placeholder="your@email.com">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Company</label>
                                        <input type="text" name="company" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition duration-200" placeholder="Your company">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Phone</label>
                                        <input type="tel" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition duration-200" placeholder="Your phone number">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Message</label>
                                        <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent transition duration-200" placeholder="Tell us about your project..."></textarea>
                                    </div>
                                    <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-lg hover:from-blue-700 hover:to-indigo-700 transition duration-200">
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

        .infrastructure-visual {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            background: #1a1a1a;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .infrastructure-visual::before {
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
        // Infrastructure Visualization Animation
        class InfrastructureVisual {
            constructor() {
                this.canvas = document.createElement('canvas');
                this.ctx = this.canvas.getContext('2d');
                this.nodes = [];
                
                this.init();
            }

            init() {
                // Initialize infrastructure visualization
                // This will be implemented with animated infrastructure elements
            }
        }

        // Initialize animations when the page loads
        document.addEventListener('DOMContentLoaded', () => {
            const infrastructureVisual = new InfrastructureVisual();
            
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