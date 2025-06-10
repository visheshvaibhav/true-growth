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
                        </svg>
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
                <a href="/contact" class="block px-3 py-2 text-indigo-600 font-medium">Contact</a>
            </div>
        </div>
    </nav> -->

    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center pt-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold font-poppins leading-tight">
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
                        Let's Create Something
                    </span>
                    <span class="block mt-1">
                        Extraordinary Together
                    </span>
                </h1>
                <p class="mt-6 text-xl text-gray-600 leading-relaxed">
                    Whether you're looking to transform your digital presence, implement AI solutions, or scale your business, we're here to help you achieve your goals.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Options Section -->
    <section class="py-16 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Quick Contact -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Call Us</h3>
                        <p class="text-gray-600 mb-4">Speak directly with our team</p>
                        <a href="tel:+1-555-123-4567" class="text-indigo-600 hover:text-indigo-700 font-medium">+1 (555) 123-4567</a>
                    </div>
                </div>

                <!-- Email Contact -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Email Us</h3>
                        <p class="text-gray-600 mb-4">Get in touch via email</p>
                        <a href="mailto:contact@truegrowth.ai" class="text-purple-600 hover:text-purple-700 font-medium">contact@truegrowth.ai</a>
                    </div>
                </div>

                <!-- Office Visit -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                        <div class="w-14 h-14 bg-pink-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Visit Us</h3>
                        <p class="text-gray-600 mb-4">Come to our office</p>
                        <address class="text-pink-600 not-italic">
                            Hamilton, ON L8H 2K4<br>
                            Canada
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Contact Form Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 -z-10 opacity-[0.03]">
            <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 24px 24px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Form Section -->
                <div class="relative">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-3xl blur opacity-75"></div>
                    <div class="relative bg-white rounded-3xl p-8 sm:p-12">
                        <h2 class="text-3xl font-bold mb-8">Tell Us About Your Project</h2>
                        <form action="/contact/submit" method="POST" class="space-y-6">
                            @csrf
                            <!-- Basic Information -->
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                                </div>
                            </div>

                            <!-- Company Information -->
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                    <input type="text" id="company" name="company"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                                </div>
                            </div>

                            <!-- Project Details -->
                            <div>
                                <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
                                <select id="service" name="service" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                                    <option value="">Select a service</option>
                                    <option value="ai-solutions">AI-Powered Growth</option>
                                    <option value="enterprise-ai">Enterprise AI & Automation</option>
                                    <option value="web-development">Web & App Development</option>
                                    <option value="cloud-services">Cloud & IT Infrastructure</option>
                                    <option value="digital-marketing">Digital Marketing</option>
                                    <option value="creative-branding">Creative & Branding</option>
                                </select>
                            </div>

                            <div>
                                <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">Project Budget</label>
                                <select id="budget" name="budget" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                                    <option value="">Select budget range</option>
                                    <option value="5k-10k">$5,000 - $10,000</option>
                                    <option value="10k-25k">$10,000 - $25,000</option>
                                    <option value="25k-50k">$25,000 - $50,000</option>
                                    <option value="50k-100k">$50,000 - $100,000</option>
                                    <option value="100k+">$100,000+</option>
                                </select>
                            </div>

                            <div>
                                <label for="timeline" class="block text-sm font-medium text-gray-700 mb-2">Project Timeline</label>
                                <select id="timeline" name="timeline" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                                    <option value="">Select timeline</option>
                                    <option value="immediate">Immediate Start</option>
                                    <option value="1-3-months">1-3 Months</option>
                                    <option value="3-6-months">3-6 Months</option>
                                    <option value="6-plus-months">6+ Months</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Project Details</label>
                                <textarea id="message" name="message" rows="6" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent"
                                    placeholder="Tell us about your project goals, challenges, and requirements..."></textarea>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="newsletter" name="newsletter" type="checkbox"
                                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                </div>
                                <div class="ml-3">
                                    <label for="newsletter" class="text-sm text-gray-600">
                                        Subscribe to our newsletter for industry insights and updates
                                    </label>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-[1.02]">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Information Section -->
                <div class="lg:pl-12 flex flex-col justify-center">
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-2xl font-bold mb-4">Why Work With Us?</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-indigo-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span class="ml-3 text-gray-600">Industry-leading AI expertise and innovative solutions</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-indigo-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span class="ml-3 text-gray-600">Proven track record of successful digital transformations</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-indigo-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span class="ml-3 text-gray-600">Dedicated team of experts available 24/7</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-indigo-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span class="ml-3 text-gray-600">Customized solutions tailored to your business needs</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold mb-4">What Happens Next?</h3>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="w-8 h-8 rounded-full bg-indigo-600 text-white flex items-center justify-center flex-shrink-0">
                                        1
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold">Initial Consultation</h4>
                                        <p class="text-gray-600">We'll review your project details and schedule a call within 24 hours</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-8 h-8 rounded-full bg-purple-600 text-white flex items-center justify-center flex-shrink-0">
                                        2
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold">Strategy Session</h4>
                                        <p class="text-gray-600">Deep dive into your goals and develop a tailored solution</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-8 h-8 rounded-full bg-pink-600 text-white flex items-center justify-center flex-shrink-0">
                                        3
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold">Proposal & Timeline</h4>
                                        <p class="text-gray-600">Receive a detailed proposal with project scope and timeline</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gradient-to-b from-white to-indigo-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 -z-10 opacity-[0.03]">
            <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 24px 24px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold font-poppins mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Get answers to common questions about working with us
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <h3 class="text-xl font-bold mb-4">How do you ensure data security and privacy?</h3>
                        <p class="text-gray-600">
                            We implement industry-leading security measures, including end-to-end encryption, secure cloud infrastructure, and strict data handling protocols. All our solutions comply with GDPR, HIPAA, and other relevant regulations.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <h3 class="text-xl font-bold mb-4">What is your typical project timeline?</h3>
                        <p class="text-gray-600">
                            Project timelines vary based on scope and complexity. Simple implementations might take 4-6 weeks, while complex enterprise solutions can take 3-6 months. We'll provide a detailed timeline during our initial consultation.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <h3 class="text-xl font-bold mb-4">Do you provide ongoing support and maintenance?</h3>
                        <p class="text-gray-600">
                            Yes, we offer comprehensive support and maintenance packages. This includes 24/7 technical support, regular updates, performance monitoring, and continuous optimization of your solutions.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <h3 class="text-xl font-bold mb-4">How do you handle project communication?</h3>
                        <p class="text-gray-600">
                            We maintain transparent communication through regular updates, scheduled meetings, and a dedicated project management platform. You'll have a dedicated project manager as your main point of contact.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-orange-600 to-yellow-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <h3 class="text-xl font-bold mb-4">What makes your AI solutions different?</h3>
                        <p class="text-gray-600">
                            Our AI solutions are custom-built for your specific needs, using cutting-edge technology and industry best practices. We focus on practical applications that deliver measurable ROI and scalable growth.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-yellow-600 to-green-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <h3 class="text-xl font-bold mb-4">Do you offer flexible payment terms?</h3>
                        <p class="text-gray-600">
                            Yes, we offer flexible payment structures including milestone-based payments, monthly retainers, and custom payment plans based on your project needs and budget constraints.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Additional Questions CTA -->
            <div class="text-center mt-16">
                <p class="text-xl text-gray-600 mb-8">Still have questions? We're here to help!</p>
                <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-indigo-600 rounded-full hover:bg-indigo-700 transition-colors duration-300">
                    Get in Touch
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Add required styles for animations -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .animate-blob {
            animation: float 7s infinite;
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

        // Animate sections on scroll
        gsap.utils.toArray('section').forEach(section => {
            gsap.from(section.querySelectorAll('.animate-on-scroll'), {
                scrollTrigger: {
                    trigger: section,
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                y: 50,
                duration: 1,
                stagger: 0.2
            });
        });
    </script>
@endsection 