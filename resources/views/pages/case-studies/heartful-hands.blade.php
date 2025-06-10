@extends('layouts.app')

@section('content')
    <!-- Unique Geometric Background Pattern -->
    <div class="fixed inset-0 -z-10 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <!-- Navigation (Same as other pages) -->
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
                    <a href="/#services" class="text-gray-700 hover:text-indigo-600 transition-colors">Services</a>
                    <a href="/work" class="text-gray-700 hover:text-indigo-600 transition-colors">Our Work</a>
                    <a href="/about" class="text-gray-700 hover:text-indigo-600 transition-colors">About</a>
                    <a href="/#contact" class="px-6 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition-colors">
                        Let's Talk
                    </a>
                </div> -->

                <!-- Mobile menu button -->
                <!-- <div class="md:hidden flex items-center">
                    <button @click="isOpen = !isOpen" class="text-gray-700">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Mobile Navigation -->
        <!-- <div x-show="isOpen" class="md:hidden bg-white border-b border-gray-100">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/#services" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">Services</a>
                <a href="/work" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">Our Work</a>
                <a href="/about" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 transition-colors">About</a>
                <a href="/#contact" class="block px-3 py-2 text-indigo-600 font-medium">Let's Talk</a>
            </div>
        </div>
    </nav> -->

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden">
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
                                <span class="text-purple-600">Heartful Hands</span>
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
                            Heartful Hands - Senior Home Care Services
                        </h1>
                        <p class="text-xl text-gray-600 leading-relaxed mb-8">
                            Transforming a local senior home care agency's digital presence through strategic marketing and modern web development, resulting in a 145% increase in client inquiries and 200% growth in organic search traffic.
                        </p>
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <div class="text-4xl font-bold text-purple-600">145%</div>
                                <div class="text-gray-600">Client Inquiries</div>
                            </div>
                            <div>
                                <div class="text-4xl font-bold text-purple-600">200%</div>
                                <div class="text-gray-600">Organic Traffic</div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl opacity-10 blur-2xl"></div>
                        <img src="https://placehold.co/800x600" alt="Heartful Hands Senior Care" class="relative rounded-2xl shadow-2xl">
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
                    Heartful Hands, a compassionate senior home care agency in Truro, NS, faced several challenges in establishing their digital presence and reaching families in need of their services:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Outdated website with poor user experience, making it difficult for families to find essential information about care services</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Limited online visibility in local search results, causing potential clients to choose competitors instead</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Inefficient lead capture system resulting in missed opportunities and delayed responses to urgent care requests</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">No content strategy to showcase their expertise in senior care and build trust with potential clients</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <span class="ml-4">Absence of digital marketing strategies to reach and engage with adult children looking for care solutions for their aging parents</span>
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
                            We developed a comprehensive digital transformation strategy that combined modern web design, local SEO optimization, and targeted content marketing to establish Heartful Hands as the trusted senior care provider in their region.
                        </p>
                        <h3 class="text-xl font-semibold mt-8 mb-4">Key Features</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Modern, responsive website with intuitive service navigation and care information
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Advanced lead capture system with 24/7 emergency contact options
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Comprehensive local SEO strategy targeting Truro and surrounding areas
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Educational content hub with senior care resources and guides
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Automated email nurture campaigns for prospective clients
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-purple-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Integration with care management and scheduling software
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0">
                    <div class="relative aspect-video rounded-2xl overflow-hidden">
                        <img src="https://placehold.co/800x450" alt="Heartful Hands Website" class="object-cover w-full h-full">
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="relative aspect-square rounded-xl overflow-hidden">
                            <img src="https://placehold.co/400x400" alt="Care Resources Hub" class="object-cover w-full h-full">
                        </div>
                        <div class="relative aspect-square rounded-xl overflow-hidden">
                            <img src="https://placehold.co/400x400" alt="Mobile App Interface" class="object-cover w-full h-full">
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
                        <div class="text-4xl font-bold text-purple-600 mb-4">145%</div>
                        <h3 class="text-xl font-semibold mb-2">Inquiry Growth</h3>
                        <p class="text-gray-600">Increase in qualified care service inquiries through optimized lead capture</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-pink-600 mb-4">200%</div>
                        <h3 class="text-xl font-semibold mb-2">Organic Traffic</h3>
                        <p class="text-gray-600">Growth in organic search traffic through local SEO optimization</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="text-4xl font-bold text-red-600 mb-4">85%</div>
                        <h3 class="text-xl font-semibold mb-2">Conversion Rate</h3>
                        <p class="text-gray-600">Improvement in website visitor to inquiry conversion rate</p>
                    </div>
                </div>
            </div>

            <!-- Additional Results -->
            <div class="mt-16 grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-xl font-semibold mb-4">Digital Marketing Performance</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            50% reduction in cost per lead acquisition
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            300% increase in email newsletter subscribers
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            90% improvement in local search rankings
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-xl font-semibold mb-4">Business Impact</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            40% increase in client retention rate
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            25% growth in service area coverage
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            60% increase in referral partnerships
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
                    <h3 class="font-semibold mb-2">WordPress</h3>
                    <p class="text-gray-600 text-center text-sm">CMS Platform</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                    </svg>
                    <h3 class="font-semibold mb-2">HubSpot</h3>
                    <p class="text-gray-600 text-center text-sm">CRM & Marketing</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">Google Business</h3>
                    <p class="text-gray-600 text-center text-sm">Local SEO</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl">
                    <svg class="w-12 h-12 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                    <h3 class="font-semibold mb-2">AlayaCare</h3>
                    <p class="text-gray-600 text-center text-sm">Care Management</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-b from-white to-purple-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Healthcare Organization's Digital Presence?</h2>
                <p class="text-xl text-gray-600 mb-8">
                    Let's discuss how we can help your healthcare business achieve similar results with our comprehensive digital marketing and development expertise.
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