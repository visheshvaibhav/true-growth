@extends('layouts.app')

@section('title', 'Careers - True Growth')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-indigo-600">
        <div class="max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl lg:text-6xl">Join Our Team</h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-100">
                    Be part of a team that's shaping the future of business growth and digital transformation.
                </p>
            </div>
        </div>
    </div>

    <!-- Why Join Us Section -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Why Join True Growth?</h2>
            <p class="mt-4 text-lg text-gray-500">
                We offer more than just a job – we offer a career where you can make a real impact.
            </p>
        </div>

        <div class="mt-16">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Benefit 1 -->
                <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Innovation & Growth</h3>
                            <p class="mt-5 text-base text-gray-500">
                                Work on cutting-edge projects and continuously develop your skills with our learning and development programs.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Competitive Benefits</h3>
                            <p class="mt-5 text-base text-gray-500">
                                Enjoy comprehensive health coverage, competitive salary, and performance bonuses.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Work-Life Balance</h3>
                            <p class="mt-5 text-base text-gray-500">
                                Flexible working hours, remote work options, and generous paid time off.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Open Positions -->
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Open Positions</h2>
                <p class="mt-4 text-lg text-gray-500">
                    Find your next opportunity and join our growing team.
                </p>
            </div>

            <!-- Job Categories -->
            <div class="mt-12 max-w-lg mx-auto grid gap-8 lg:grid-cols-3 lg:max-w-none">
                <!-- Engineering -->
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-blue-600">Engineering</p>
                            <div class="mt-4 space-y-4">
                                <a href="{{ route('careers.show', ['job' => 'senior-software-engineer']) }}" class="block">
                                    <div class="group">
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">Senior Software Engineer</h3>
                                        <p class="mt-1 text-sm text-gray-500">Full-time · Remote</p>
                                    </div>
                                </a>
                                <a href="{{ route('careers.show', ['job' => 'frontend-developer']) }}" class="block">
                                    <div class="group">
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">Frontend Developer</h3>
                                        <p class="mt-1 text-sm text-gray-500">Full-time · Hybrid</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product & Design -->
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-blue-600">Product & Design</p>
                            <div class="mt-4 space-y-4">
                                <a href="{{ route('careers.show', ['job' => 'product-manager']) }}" class="block">
                                    <div class="group">
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">Product Manager</h3>
                                        <p class="mt-1 text-sm text-gray-500">Full-time · On-site</p>
                                    </div>
                                </a>
                                <a href="{{ route('careers.show', ['job' => 'ui-ux-designer']) }}" class="block">
                                    <div class="group">
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">UI/UX Designer</h3>
                                        <p class="mt-1 text-sm text-gray-500">Full-time · Remote</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Marketing & Sales -->
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-blue-600">Marketing & Sales</p>
                            <div class="mt-4 space-y-4">
                                <a href="{{ route('careers.show', ['job' => 'digital-marketing-manager']) }}" class="block">
                                    <div class="group">
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">Digital Marketing Manager</h3>
                                        <p class="mt-1 text-sm text-gray-500">Full-time · Hybrid</p>
                                    </div>
                                </a>
                                <a href="{{ route('careers.show', ['job' => 'sales-executive']) }}" class="block">
                                    <div class="group">
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">Sales Executive</h3>
                                        <p class="mt-1 text-sm text-gray-500">Full-time · On-site</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Culture Section -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Our Culture & Values
                </h2>
                <p class="mt-3 max-w-3xl text-lg text-gray-500">
                    At True Growth, we believe in fostering a culture of innovation, collaboration, and continuous learning.
                </p>
                <div class="mt-8 space-y-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Innovation First</h3>
                            <p class="mt-2 text-base text-gray-500">
                                We encourage creative thinking and embrace new ideas to solve complex challenges.
                            </p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Collaborative Spirit</h3>
                            <p class="mt-2 text-base text-gray-500">
                                We work together across teams to achieve common goals and deliver exceptional results.
                            </p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Growth Mindset</h3>
                            <p class="mt-2 text-base text-gray-500">
                                We invest in our people's development and celebrate continuous learning.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 lg:mt-0">
                <div class="aspect-w-16 aspect-h-9">
                    <img class="rounded-lg object-cover" src="{{ asset('images/careers/culture.jpg') }}" alt="Team culture">
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-700">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Ready to make an impact?</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-blue-200">
                Join our team and help shape the future of business growth.
            </p>
            <a href="#open-positions" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 sm:w-auto">
                View Open Positions
            </a>
        </div>
    </div>
</div>
@endsection 