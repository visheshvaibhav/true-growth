@extends('layouts.app')

@section('title', 'Our Portfolio - True Growth')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gray-800">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ asset('images/portfolio/hero-bg.jpg') }}" alt="Portfolio Hero">
            <div class="absolute inset-0 bg-gray-800 opacity-75"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Our Portfolio</h1>
            <p class="mt-6 text-xl text-gray-300 max-w-3xl">
                Discover how we've helped businesses transform and grow through our innovative solutions and strategic approach.
            </p>
        </div>
    </div>

    <!-- Portfolio Filter -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="px-4 py-2 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    All Projects
                </button>
                <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-indigo-600 hover:bg-indigo-50 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Digital Transformation
                </button>
                <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-indigo-600 hover:bg-indigo-50 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Business Strategy
                </button>
                <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-indigo-600 hover:bg-indigo-50 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Marketing
                </button>
            </div>
        </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Project 1 -->
            <div class="group relative bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="relative h-80 w-full overflow-hidden">
                    <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/portfolio/project1.jpg') }}" alt="Project 1">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">E-Commerce Transformation</h3>
                    <p class="mt-2 text-sm text-gray-500">Digital Transformation</p>
                    <p class="mt-3 text-base text-gray-500">Helped a traditional retailer achieve 200% growth through digital transformation and e-commerce implementation.</p>
                    <div class="mt-4">
                        <a href="#" class="text-base font-medium text-indigo-600 hover:text-indigo-500">
                            View Case Study <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group relative bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="relative h-80 w-full overflow-hidden">
                    <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/portfolio/project2.jpg') }}" alt="Project 2">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">Market Expansion Strategy</h3>
                    <p class="mt-2 text-sm text-gray-500">Business Strategy</p>
                    <p class="mt-3 text-base text-gray-500">Developed and executed a market expansion strategy that helped our client enter 3 new markets successfully.</p>
                    <div class="mt-4">
                        <a href="#" class="text-base font-medium text-indigo-600 hover:text-indigo-500">
                            View Case Study <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group relative bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="relative h-80 w-full overflow-hidden">
                    <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/portfolio/project3.jpg') }}" alt="Project 3">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">Digital Marketing Campaign</h3>
                    <p class="mt-2 text-sm text-gray-500">Marketing</p>
                    <p class="mt-3 text-base text-gray-500">Increased client's online presence and lead generation by 150% through targeted digital marketing strategies.</p>
                    <div class="mt-4">
                        <a href="#" class="text-base font-medium text-indigo-600 hover:text-indigo-500">
                            View Case Study <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="group relative bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="relative h-80 w-full overflow-hidden">
                    <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/portfolio/project4.jpg') }}" alt="Project 4">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">Process Automation</h3>
                    <p class="mt-2 text-sm text-gray-500">Digital Transformation</p>
                    <p class="mt-3 text-base text-gray-500">Automated key business processes resulting in 40% reduction in operational costs and improved efficiency.</p>
                    <div class="mt-4">
                        <a href="#" class="text-base font-medium text-indigo-600 hover:text-indigo-500">
                            View Case Study <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="group relative bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="relative h-80 w-full overflow-hidden">
                    <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/portfolio/project5.jpg') }}" alt="Project 5">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">Brand Repositioning</h3>
                    <p class="mt-2 text-sm text-gray-500">Marketing</p>
                    <p class="mt-3 text-base text-gray-500">Successfully repositioned a legacy brand to appeal to a younger demographic while retaining existing customers.</p>
                    <div class="mt-4">
                        <a href="#" class="text-base font-medium text-indigo-600 hover:text-indigo-500">
                            View Case Study <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="group relative bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="relative h-80 w-full overflow-hidden">
                    <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/portfolio/project6.jpg') }}" alt="Project 6">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">Growth Strategy</h3>
                    <p class="mt-2 text-sm text-gray-500">Business Strategy</p>
                    <p class="mt-3 text-base text-gray-500">Developed a comprehensive growth strategy that resulted in 75% revenue increase within 12 months.</p>
                    <div class="mt-4">
                        <a href="#" class="text-base font-medium text-indigo-600 hover:text-indigo-500">
                            View Case Study <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Ready to Start Your Success Story?</h2>
                <p class="mt-4 text-lg text-gray-500">
                    Join our growing list of successful clients and transform your business with True Growth.
                </p>
                <div class="mt-8 flex justify-center">
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            Get Started
                        </a>
                    </div>
                    <div class="ml-3 inline-flex">
                        <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 