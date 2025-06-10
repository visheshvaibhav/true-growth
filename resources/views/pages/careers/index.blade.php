@extends('layouts.app')

@section('title', 'Careers - The True Growth Co.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-gradient-to-b from-indigo-50 to-white overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-6">Join Our Team</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Be part of a team that's revolutionizing digital growth through AI innovation and creative excellence.
                </p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">4.8/5</div>
                    <div class="text-gray-600">Employee Rating</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2">92%</div>
                    <div class="text-gray-600">Job Satisfaction</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-pink-600 mb-2">15+</div>
                    <div class="text-gray-600">Countries</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">100%</div>
                    <div class="text-gray-600">Remote Friendly</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold font-poppins mb-4">Why Join True Growth?</h2>
                <p class="text-xl text-gray-600">We offer more than just a job - we offer a career with purpose.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Innovation First</h3>
                        <p class="text-gray-600">Work with cutting-edge AI technology and shape the future of digital growth.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Flexible Work</h3>
                        <p class="text-gray-600">Remote-first culture with flexible hours and work-life balance.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-pink-600 to-red-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-12 h-12 bg-pink-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Growth & Learning</h3>
                        <p class="text-gray-600">Continuous learning opportunities and career development support.</p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-12 h-12 bg-red-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Competitive Pay</h3>
                        <p class="text-gray-600">Industry-leading compensation and comprehensive benefits package.</p>
                    </div>
                </div>

                <!-- Benefit 5 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-orange-600 to-yellow-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-12 h-12 bg-orange-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Great Team</h3>
                        <p class="text-gray-600">Work with talented, diverse, and passionate professionals worldwide.</p>
                    </div>
                </div>

                <!-- Benefit 6 -->
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-yellow-600 to-green-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-8">
                        <div class="w-12 h-12 bg-yellow-600 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Make an Impact</h3>
                        <p class="text-gray-600">Contribute to projects that transform businesses and drive innovation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold font-poppins mb-4">Open Positions</h2>
                <p class="text-xl text-gray-600">Find your next opportunity with us</p>
            </div>

            <!-- Department Filter -->
            <div class="mb-12">
                <div class="flex flex-wrap justify-center gap-4">
                    @foreach($departments as $dept)
                        <button 
                            class="px-6 py-2 rounded-full text-sm font-medium transition-colors duration-300
                                {{ request('department') === $dept ? 'bg-indigo-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}"
                            onclick="window.location.href='{{ request('department') === $dept ? '/careers' : '/careers?department=' . $dept }}'"
                        >
                            {{ $dept }}
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Jobs Grid -->
            <div class="grid gap-8">
                @forelse($jobs as $job)
                    <div class="relative group">
                        <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative bg-white rounded-2xl p-8 hover:transform hover:-translate-y-1 transition duration-300">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                <div>
                                    <h3 class="text-xl font-bold mb-2">{{ $job->title }}</h3>
                                    <div class="flex flex-wrap gap-4 text-sm">
                                        <span class="flex items-center text-gray-600">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                            {{ $job->department }}
                                        </span>
                                        <span class="flex items-center text-gray-600">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                            {{ $job->location }}
                                        </span>
                                        <span class="flex items-center text-gray-600">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            {{ Str::title($job->type) }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="text-indigo-600 font-medium">{{ $job->salary_range }}</span>
                                    <a href="{{ route('careers.show', $job->slug) }}" class="inline-flex items-center justify-center px-6 py-2 text-sm font-medium text-white bg-indigo-600 rounded-full hover:bg-indigo-700 transition-colors duration-300">
                                        View Position
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600">{{ $job->short_description }}</p>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12">
                        <h3 class="text-xl font-medium text-gray-600">No open positions in this department at the moment.</h3>
                        <p class="mt-2 text-gray-500">Please check back later or explore other departments.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($jobs->hasPages())
                <div class="mt-12">
                    {{ $jobs->links() }}
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-90"></div>
                <div class="relative px-8 py-16 md:px-16 md:py-20 text-center text-white">
                    <h2 class="text-3xl md:text-4xl font-bold font-poppins mb-6">Don't See the Right Fit?</h2>
                    <p class="text-xl mb-10 max-w-2xl mx-auto">
                        We're always looking for talented individuals to join our team. Send us your resume and we'll keep you in mind for future opportunities.
                    </p>
                    <a href="mailto:careers@truegrowth.ai" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium bg-white text-indigo-600 rounded-full hover:bg-indigo-50 transition-colors duration-300">
                        Contact Our Recruiting Team
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection 