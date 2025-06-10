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
                                <span class="text-purple-600">Pisa Pizza</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Project Overview -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-medium mb-4">
                            Digital Marketing + Web Development
                        </span>
                        <h1 class="text-4xl md:text-5xl font-bold font-poppins leading-tight mb-6">
                            Pisa Pizza
                        </h1>
                        <p class="text-xl text-gray-600 leading-relaxed mb-8">
                            Transforming a local Hamilton pizzeria into a digital-first business through modern web development and strategic marketing, resulting in a 180% increase in online orders and 250% growth in customer engagement.
                        </p>
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <div class="text-4xl font-bold text-purple-600">180%</div>
                                <div class="text-gray-600">Online Order Growth</div>
                            </div>
                            <div>
                                <div class="text-4xl font-bold text-purple-600">250%</div>
                                <div class="text-gray-600">Customer Engagement</div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl opacity-10 blur-2xl"></div>
                        <img src="https://placehold.co/800x600" alt="Pisa Pizza Restaurant" class="relative rounded-2xl shadow-2xl">
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
                    Pisa Pizza, a beloved local pizzeria in Hamilton, faced several challenges in adapting to the modern digital landscape:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Basic website with no online ordering capabilities, losing business to delivery apps</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Heavy reliance on phone orders leading to errors and missed opportunities</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Limited social media presence and no digital marketing strategy</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">No customer loyalty program or data-driven decision making</span>
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
                            We developed a comprehensive digital transformation strategy that modernized Pisa Pizza's operations and enhanced their customer experience.
                        </p>
                        <h3 class="text-xl font-semibold mt-8 mb-4">Key Features</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Custom online ordering system with real-time kitchen integration
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Mobile-first website with menu customization
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Digital loyalty program with points system
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Automated social media marketing campaigns
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0">
                    <div class="relative aspect-video rounded-2xl overflow-hidden">
                        <img src="https://placehold.co/800x450" alt="Pisa Pizza Online Ordering System" class="object-cover w-full h-full">
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="relative aspect-square rounded-xl overflow-hidden">
                            <img src="https://placehold.co/400x400" alt="Mobile App Interface" class="object-cover w-full h-full">
                        </div>
                        <div class="relative aspect-square rounded-xl overflow-hidden">
                            <img src="https://placehold.co/400x400" alt="Social Media Content" class="object-cover w-full h-full">
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
                        <h3 class="text-xl font-semibold mb-2">Online Orders</h3>
                        <p class="text-gray-600">Significant increase in direct online orders through the new platform</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-pink-600 mb-4">250%</div>
                        <h3 class="text-xl font-semibold mb-2">Customer Engagement</h3>
                        <p class="text-gray-600">Growth in social media followers and engagement</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-red-600 mb-4">35%</div>
                        <h3 class="text-xl font-semibold mb-2">Revenue Growth</h3>
                        <p class="text-gray-600">Year-over-year revenue increase through digital channels</p>
                    </div>
                </div>
            </div>

            <!-- Additional Results -->
            <div class="mt-16 grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-xl font-semibold mb-4">Digital Performance</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            75% reduction in order processing time
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            90% decrease in order errors
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            65% of orders now coming through website
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-xl font-semibold mb-4">Customer Success</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            5,000+ loyalty program members
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            4.8/5 average customer rating
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            40% increase in repeat customers
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
                    <h3 class="font-semibold mb-2">React.js</h3>
                    <p class="text-gray-600 text-center text-sm">Frontend Framework</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                    </svg>
                    <h3 class="font-semibold mb-2">Node.js</h3>
                    <p class="text-gray-600 text-center text-sm">Backend Platform</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">Stripe</h3>
                    <p class="text-gray-600 text-center text-sm">Payment Processing</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">Firebase</h3>
                    <p class="text-gray-600 text-center text-sm">Real-time Database</p>
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
                    Let's discuss how we can help your restaurant achieve similar results with our digital marketing and web development expertise.
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