@extends('layouts.app')

@section('title', $job->title . ' - Careers at The True Growth Co.')

@section('content')
<div class="bg-white">
    <!-- Job Header -->
    <div class="relative bg-gradient-to-r from-indigo-600 to-purple-600">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl lg:text-6xl">{{ $job->title }}</h1>
                <div class="mt-6 flex justify-center space-x-6 text-xl text-indigo-100">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        {{ Str::title($job->type) }}
                    </div>
                    <div class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        {{ $job->location }}
                    </div>
                    <div class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $job->salary_range }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <!-- Job Description -->
            <div class="lg:col-span-8">
                <div class="prose prose-lg max-w-none">
                    {!! $job->description !!}
                </div>
            </div>

            <!-- Application Form -->
            <div class="mt-12 lg:mt-0 lg:col-span-4">
                <div class="bg-white sm:rounded-lg border border-gray-200">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Apply for this position</h3>
                        
                        @if (session('success'))
                            <div class="mt-4 p-4 rounded-md bg-green-50 border border-green-200">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-green-800">
                                            {{ session('success') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="mt-4 p-4 rounded-md bg-red-50 border border-red-200">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-red-800">Please fix the following errors:</h3>
                                        <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="mt-4 max-w-xl text-sm text-gray-500">
                            <p>Please fill out the form below to apply for this position.</p>
                        </div>
                        <form action="{{ route('careers.apply', $job) }}" method="POST" enctype="multipart/form-data" class="mt-5">
                            @csrf
                            <div class="space-y-6">
                                <!-- Full Name -->
                                <div>
                                    <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                    <div class="mt-1">
                                        <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <div class="mt-1">
                                        <input type="email" name="email" id="email" value="{{ old('email') }}" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                    <div class="mt-1">
                                        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Resume Upload -->
                                <div>
                                    <label for="resume" class="block text-sm font-medium text-gray-700">Resume/CV</label>
                                    <div class="mt-1">
                                        <input type="file" name="resume" id="resume" required accept=".pdf,.doc,.docx" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                                        <p class="mt-1 text-xs text-gray-500">PDF, DOC, or DOCX (max 5MB)</p>
                                    </div>
                                </div>

                                <!-- Cover Letter -->
                                <div>
                                    <label for="cover_letter" class="block text-sm font-medium text-gray-700">Cover Letter</label>
                                    <div class="mt-1">
                                        <textarea name="cover_letter" id="cover_letter" rows="4" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ old('cover_letter') }}</textarea>
                                    </div>
                                </div>

                                <!-- LinkedIn Profile -->
                                <div>
                                    <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn Profile</label>
                                    <div class="mt-1">
                                        <input type="url" name="linkedin" id="linkedin" value="{{ old('linkedin') }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Portfolio/GitHub -->
                                <div>
                                    <label for="portfolio" class="block text-sm font-medium text-gray-700">Portfolio/GitHub URL</label>
                                    <div class="mt-1">
                                        <input type="url" name="portfolio" id="portfolio" value="{{ old('portfolio') }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Submit Application
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Similar Positions -->
    @if($similarJobs->isNotEmpty())
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900">Similar Positions</h2>
            <div class="mt-8 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($similarJobs as $similarJob)
                <a href="{{ route('careers.show', $similarJob) }}" class="bg-white rounded-lg shadow-sm p-6 hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $similarJob->title }}</h3>
                    <p class="mt-2 text-sm text-gray-500">{{ Str::title($similarJob->type) }} · {{ $similarJob->location }}</p>
                    <p class="mt-4 text-base text-gray-600">{{ Str::limit($similarJob->short_description, 100) }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection 