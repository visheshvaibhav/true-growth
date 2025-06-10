@extends('layouts.app')

@section('content')
    <!-- Unique Geometric Background Pattern -->
    <div class="fixed inset-0 -z-10 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <!-- Hero Section -->
    <section class="relative min-h-[70vh] flex items-center pt-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative z-10">
                <!-- Breadcrumb -->
                <nav class="flex mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/" class="text-gray-500 hover:text-indigo-600">Home</a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="/work" class="text-gray-500 hover:text-indigo-600">Our Work</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-pink-600">Enterprise Workflow Automation</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Project Overview -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span class="inline-block px-3 py-1 bg-pink-100 text-pink-600 rounded-full text-sm font-medium mb-4">
                            Automation + AI Integration
                        </span>
                        <h1 class="text-4xl md:text-5xl font-bold font-poppins leading-tight mb-6">
                            Enterprise Workflow Automation
                        </h1>
                        <p class="text-xl text-gray-600 leading-relaxed mb-8">
                            Transforming a very well known company's manual processes through intelligent automation, resulting in 75% reduction in processing time and $200K annual cost savings through streamlined operations.
                        </p>
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <div class="text-4xl font-bold text-pink-600">75%</div>
                                <div class="text-gray-600">Faster Processing</div>
                            </div>
                            <div>
                                <div class="text-4xl font-bold text-pink-600">$200K</div>
                                <div class="text-gray-600">Annual Savings</div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500 to-purple-500 rounded-2xl opacity-10 blur-2xl"></div>
                        <img src="https://placehold.co/800x600" alt="Workflow Automation Dashboard" class="relative rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenge Section -->
    <section class="py-20 bg-gradient-to-b from-white to-pink-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold mb-6">The Challenge</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Our client, a very well known manufacturing company, faced several operational challenges:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-pink-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Manual, time-consuming approval processes across departments</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-pink-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Disconnected systems leading to data silos and inefficiencies</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-pink-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">High error rates in document processing and data entry</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-pink-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Limited visibility into process bottlenecks and performance metrics</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Our Solution</h2>
                    <div class="prose prose-lg text-gray-600">
                        <p>
                            We developed a comprehensive intelligent automation platform that seamlessly integrated with their existing systems while introducing cutting-edge AI capabilities.
                        </p>
                        <h3 class="text-xl font-semibold mt-8 mb-4">Key Features</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-pink-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                AI-powered document processing and data extraction
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-pink-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Smart workflow routing and approval automation
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-pink-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Real-time analytics and performance dashboards
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-pink-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Integration with existing ERP and CRM systems
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0">
                    <div class="relative aspect-video rounded-2xl overflow-hidden">
                        <img src="https://placehold.co/800x450" alt="Automation Dashboard" class="object-cover w-full h-full">
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="relative aspect-square rounded-xl overflow-hidden">
                            <img src="https://placehold.co/400x400" alt="Process Flow" class="object-cover w-full h-full">
                        </div>
                        <div class="relative aspect-square rounded-xl overflow-hidden">
                            <img src="https://placehold.co/400x400" alt="Analytics Dashboard" class="object-cover w-full h-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="py-20 bg-gradient-to-b from-pink-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-center">Impact & Results</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-pink-600 mb-4">75%</div>
                        <h3 class="text-xl font-semibold mb-2">Faster Processing</h3>
                        <p class="text-gray-600">Dramatic reduction in process cycle times through automation</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-purple-600 mb-4">90%</div>
                        <h3 class="text-xl font-semibold mb-2">Error Reduction</h3>
                        <p class="text-gray-600">Significant decrease in manual data entry errors</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-blue-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-indigo-600 mb-4">$200K</div>
                        <h3 class="text-xl font-semibold mb-2">Annual Savings</h3>
                        <p class="text-gray-600">Cost reduction through improved efficiency</p>
                    </div>
                </div>
            </div>

            <!-- Additional Results -->
            <div class="mt-16 grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-xl font-semibold mb-4">Operational Improvements</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-pink-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            50% reduction in manual intervention
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-pink-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            24/7 process execution capability
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-pink-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            100% compliance adherence
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-xl font-semibold mb-4">Business Impact</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-pink-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            85% improvement in employee satisfaction
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-pink-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            60% faster time-to-market
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-pink-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            30% increase in process capacity
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Used Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-center">Technologies Used</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-pink-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">UiPath</h3>
                    <p class="text-gray-600 text-center text-sm">RPA Platform</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-pink-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                    </svg>
                    <h3 class="font-semibold mb-2">Azure AI</h3>
                    <p class="text-gray-600 text-center text-sm">AI Services</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-pink-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">Power BI</h3>
                    <p class="text-gray-600 text-center text-sm">Analytics</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-pink-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">SAP Integration</h3>
                    <p class="text-gray-600 text-center text-sm">ERP Connection</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-b from-white to-pink-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Ready to Automate Your Enterprise Workflows?</h2>
                <p class="text-xl text-gray-600 mb-8">
                    Let's discuss how we can help your organization achieve similar results with our automation expertise.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-pink-600 rounded-full hover:bg-pink-700 transition-colors">
                        Start Your Project
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="/work" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-pink-600 bg-pink-50 rounded-full hover:bg-pink-100 transition-colors">
                        View More Case Studies
                    </a>
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
            gsap.from(section.querySelectorAll('h2, p, .animate-on-scroll'), {
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
    </script>
@endsection 