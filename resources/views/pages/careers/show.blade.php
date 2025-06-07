@extends('layouts.app')

@section('title', 'Senior Software Engineer - Careers at The True Growth Co.')

@section('content')
<div class="bg-white">
    <!-- Job Header -->
    <div class="relative bg-blue-700">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl lg:text-6xl">Senior Software Engineer</h1>
                <div class="mt-6 flex justify-center space-x-6 text-xl text-blue-100">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Full-time
                    </div>
                    <div class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Remote
                    </div>
                    <div class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        $120k - $180k
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <!-- Job Description -->
            <div class="lg:col-span-8">
                <div class="prose prose-blue prose-lg">
                    <h2>About the Role</h2>
                    <p>
                        We're looking for a Senior Software Engineer to join our growing engineering team. In this role, 
                        you'll be responsible for designing, developing, and maintaining our core platform services while 
                        mentoring junior developers and contributing to our technical strategy.
                    </p>

                    <h3>Key Responsibilities</h3>
                    <ul>
                        <li>Design and implement scalable solutions for complex technical challenges</li>
                        <li>Lead technical projects and mentor junior developers</li>
                        <li>Collaborate with product and design teams to deliver high-quality features</li>
                        <li>Contribute to system architecture decisions and technical strategy</li>
                        <li>Write clean, maintainable, and well-tested code</li>
                        <li>Participate in code reviews and provide constructive feedback</li>
                        <li>Help improve our development processes and engineering practices</li>
                    </ul>

                    <h3>Requirements</h3>
                    <ul>
                        <li>7+ years of professional software development experience</li>
                        <li>Strong experience with modern web technologies and frameworks</li>
                        <li>Experience with cloud platforms (AWS, GCP, or Azure)</li>
                        <li>Strong understanding of software design patterns and principles</li>
                        <li>Experience with agile development methodologies</li>
                        <li>Excellent problem-solving and analytical skills</li>
                        <li>Strong communication and collaboration abilities</li>
                    </ul>

                    <h3>Nice to Have</h3>
                    <ul>
                        <li>Experience with microservices architecture</li>
                        <li>Contributions to open-source projects</li>
                        <li>Experience with DevOps practices and tools</li>
                        <li>Knowledge of machine learning or AI technologies</li>
                    </ul>

                    <h3>Benefits</h3>
                    <ul>
                        <li>Competitive salary and equity package</li>
                        <li>Comprehensive health, dental, and vision coverage</li>
                        <li>Flexible working hours and remote work options</li>
                        <li>Professional development budget</li>
                        <li>Home office setup allowance</li>
                        <li>Regular team events and meetups</li>
                        <li>Generous paid time off</li>
                    </ul>
                </div>
            </div>

            <!-- Application Form -->
            <div class="mt-12 lg:mt-0 lg:col-span-4">
                <div class="bg-white sm:rounded-lg border border-gray-200">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Apply for this position</h3>
                        <div class="mt-2 max-w-xl text-sm text-gray-500">
                            <p>Please fill out the form below to apply for this position.</p>
                        </div>
                        <form action="{{ route('careers.apply', ['job' => 'senior-software-engineer']) }}" method="POST" enctype="multipart/form-data" class="mt-5">
                            @csrf
                            <div class="space-y-6">
                                <!-- Full Name -->
                                <div>
                                    <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                    <div class="mt-1">
                                        <input type="text" name="full_name" id="full_name" required class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <div class="mt-1">
                                        <input type="email" name="email" id="email" required class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                    <div class="mt-1">
                                        <input type="tel" name="phone" id="phone" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Resume Upload -->
                                <div>
                                    <label for="resume" class="block text-sm font-medium text-gray-700">Resume/CV</label>
                                    <div class="mt-1">
                                        <input type="file" name="resume" id="resume" required accept=".pdf,.doc,.docx" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300">
                                        <p class="mt-1 text-xs text-gray-500">PDF, DOC, or DOCX (max 5MB)</p>
                                    </div>
                                </div>

                                <!-- Cover Letter -->
                                <div>
                                    <label for="cover_letter" class="block text-sm font-medium text-gray-700">Cover Letter</label>
                                    <div class="mt-1">
                                        <textarea name="cover_letter" id="cover_letter" rows="4" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                    </div>
                                </div>

                                <!-- LinkedIn Profile -->
                                <div>
                                    <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn Profile</label>
                                    <div class="mt-1">
                                        <input type="url" name="linkedin" id="linkedin" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Portfolio/GitHub -->
                                <div>
                                    <label for="portfolio" class="block text-sm font-medium text-gray-700">Portfolio/GitHub URL</label>
                                    <div class="mt-1">
                                        <input type="url" name="portfolio" id="portfolio" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
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
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900">Similar Positions</h2>
            <div class="mt-8 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Position 1 -->
                <a href="{{ route('careers.show', ['job' => 'frontend-developer']) }}" class="bg-white rounded-lg shadow-sm p-6 hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-lg font-semibold text-gray-900">Frontend Developer</h3>
                    <p class="mt-2 text-sm text-gray-500">Full-time · Hybrid</p>
                    <p class="mt-4 text-base text-gray-600">Join our frontend team and build beautiful, responsive user interfaces...</p>
                </a>

                <!-- Position 2 -->
                <a href="{{ route('careers.show', ['job' => 'backend-developer']) }}" class="bg-white rounded-lg shadow-sm p-6 hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-lg font-semibold text-gray-900">Backend Developer</h3>
                    <p class="mt-2 text-sm text-gray-500">Full-time · Remote</p>
                    <p class="mt-4 text-base text-gray-600">Build scalable backend services and APIs that power our platform...</p>
                </a>

                <!-- Position 3 -->
                <a href="{{ route('careers.show', ['job' => 'devops-engineer']) }}" class="bg-white rounded-lg shadow-sm p-6 hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-lg font-semibold text-gray-900">DevOps Engineer</h3>
                    <p class="mt-2 text-sm text-gray-500">Full-time · Remote</p>
                    <p class="mt-4 text-base text-gray-600">Help us build and maintain our cloud infrastructure and deployment pipelines...</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 