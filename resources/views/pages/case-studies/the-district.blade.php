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
                                <span class="text-purple-600">The District</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Project Overview -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-medium mb-4">
                            Digital Marketing + Web Development + Paid Advertising
                        </span>
                        <h1 class="text-4xl md:text-5xl font-bold font-poppins leading-tight mb-6">
                            The District - Tapas + Bar Hamilton
                        </h1>
                        <p class="text-xl text-gray-600 leading-relaxed mb-8">
                            Transforming a local tapas restaurant into a digital success story through strategic marketing, paid advertising, and a modern web presence, resulting in a 180% increase in online reservations and 250% growth in social media engagement.
                        </p>
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <div class="text-4xl font-bold text-purple-600">180%</div>
                                <div class="text-gray-600">Reservation Growth</div>
                            </div>
                            <div>
                                <div class="text-4xl font-bold text-purple-600">250%</div>
                                <div class="text-gray-600">Social Engagement</div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl opacity-10 blur-2xl"></div>
                        <img src="https://placehold.co/800x600" alt="The District Tapas + Bar" class="relative rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenge Section -->
    <section class="py-20 bg-gradient-to-b from-white to-purple-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold mb-6">The Challenge</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    The District - Tapas + Bar, a vibrant Spanish restaurant in Hamilton, faced several challenges in establishing their digital presence and attracting their target audience:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">No cohesive digital marketing strategy to reach their target demographic of young professionals and food enthusiasts</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Basic website lacking visual appeal and modern functionality, resulting in poor user experience and low conversion rates</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Ineffective paid advertising campaigns with high cost per acquisition and low return on ad spend</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Limited social media presence and engagement, missing opportunities to showcase their unique tapas offerings and vibrant atmosphere</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Disconnected reservation system causing booking confusion and lost revenue opportunities</span>
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
                            We developed a comprehensive digital transformation strategy that combined stunning web design, targeted advertising, and strategic marketing to elevate The District's brand and drive measurable results.
                        </p>
                        <h3 class="text-xl font-semibold mt-8 mb-4">Key Features</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Modern, responsive website with immersive food photography and atmosphere galleries
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Targeted Meta and Google Ads campaigns with custom audience segmentation
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Seamless OpenTable integration with direct booking capabilities
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Comprehensive social media strategy and content calendar
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Email marketing automation for events and promotions
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Local SEO optimization for improved visibility
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0">
                    <div class="relative aspect-video rounded-2xl overflow-hidden">
                        <img src="https://placehold.co/800x450" alt="The District Website" class="object-cover w-full h-full">
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="relative aspect-square rounded-xl overflow-hidden">
                            <img src="https://placehold.co/400x400" alt="Social Media Content" class="object-cover w-full h-full">
                        </div>
                        <div class="relative aspect-square rounded-xl overflow-hidden">
                            <img src="https://placehold.co/400x400" alt="Ad Campaign Dashboard" class="object-cover w-full h-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="py-20 bg-gradient-to-b from-purple-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-center">Impact & Results</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-purple-600 mb-4">180%</div>
                        <h3 class="text-xl font-semibold mb-2">Reservation Growth</h3>
                        <p class="text-gray-600">Significant increase in online reservations through optimized booking system</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-pink-600 mb-4">250%</div>
                        <h3 class="text-xl font-semibold mb-2">Social Engagement</h3>
                        <p class="text-gray-600">Dramatic increase in social media engagement and follower growth</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-red-600 mb-4">65%</div>
                        <h3 class="text-xl font-semibold mb-2">ROAS Improvement</h3>
                        <p class="text-gray-600">Return on ad spend increased through optimized campaigns</p>
                    </div>
                </div>
            </div>

            <!-- Additional Results -->
            <div class="mt-16 grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-xl font-semibold mb-4">Digital Advertising Performance</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Reduced cost per acquisition by 40%
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Click-through rate increased by 85%
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            300% increase in ad-driven reservations
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-xl font-semibold mb-4">Overall Business Impact</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            55% increase in average table size
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Email subscriber list grew by 400%
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            35% increase in average order value
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
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">Next.js</h3>
                    <p class="text-gray-600 text-center text-sm">Website Framework</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                    </svg>
                    <h3 class="font-semibold mb-2">Meta Ads</h3>
                    <p class="text-gray-600 text-center text-sm">Social Advertising</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">Google Ads</h3>
                    <p class="text-gray-600 text-center text-sm">Search Marketing</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">OpenTable</h3>
                    <p class="text-gray-600 text-center text-sm">Reservation System</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-b from-white to-purple-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Restaurant's Digital Presence?</h2>
                <p class="text-xl text-gray-600 mb-8">
                    Let's discuss how we can help your restaurant achieve similar results with our comprehensive digital marketing and advertising expertise.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-purple-600 rounded-full hover:bg-purple-700 transition-colors">
                        Start Your Project
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="/work" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-purple-600 bg-purple-50 rounded-full hover:bg-purple-100 transition-colors">
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