@extends('layouts.app')

@section('title', 'Blog - True Growth')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-purple-600 to-indigo-600">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl lg:text-6xl">Insights & Resources</h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-purple-100">
                    Expert insights, industry trends, and strategic advice to help your business grow.
                </p>
            </div>
        </div>
    </div>

    <!-- Category Filter -->
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#" class="px-4 py-2 text-sm font-medium text-purple-600 bg-purple-50 rounded-md hover:bg-purple-100">
                All Posts
            </a>
            <a href="#" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-purple-600 hover:bg-purple-50 rounded-md">
                Business Strategy
            </a>
            <a href="#" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-purple-600 hover:bg-purple-50 rounded-md">
                Digital Transformation
            </a>
            <a href="#" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-purple-600 hover:bg-purple-50 rounded-md">
                Marketing
            </a>
            <a href="#" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-purple-600 hover:bg-purple-50 rounded-md">
                Industry Insights
            </a>
        </div>
    </div>

    <!-- Featured Post -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="lg:grid lg:grid-cols-2">
                <div class="relative h-64 sm:h-72 md:h-96 lg:h-full">
                    <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('images/blog/featured-post.jpg') }}" alt="Featured blog post">
                </div>
                <div class="p-8 lg:p-12">
                    <div class="text-sm text-purple-600 font-semibold">
                        Featured Post
                    </div>
                    <a href="{{ route('blog.show', ['post' => 'digital-transformation-2024']) }}" class="mt-2 block">
                        <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
                            Digital Transformation in 2024: Key Trends and Strategies
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            Explore the latest digital transformation trends and learn how successful businesses are leveraging technology to stay ahead in 2024.
                        </p>
                    </a>
                    <div class="mt-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="{{ asset('images/team/author1.jpg') }}" alt="Author">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Sarah Johnson</p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2024-03-16">Mar 16, 2024</time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>8 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Grid -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Blog Post 1 -->
            <article class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ asset('images/blog/post1.jpg') }}" alt="Blog post image">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-purple-600">
                            Business Strategy
                        </p>
                        <a href="{{ route('blog.show', ['post' => 'scaling-business-2024']) }}" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900">Scaling Your Business in 2024: A Comprehensive Guide</p>
                            <p class="mt-3 text-base text-gray-500">Learn the key strategies and best practices for scaling your business effectively in today's competitive market.</p>
                        </a>
                    </div>
                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="{{ asset('images/team/author2.jpg') }}" alt="Author">
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">John Smith</p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2024-03-10">Mar 10, 2024</time>
                                <span aria-hidden="true">&middot;</span>
                                <span>6 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Blog Post 2 -->
            <article class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ asset('images/blog/post2.jpg') }}" alt="Blog post image">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-purple-600">
                            Marketing
                        </p>
                        <a href="{{ route('blog.show', ['post' => 'ai-marketing-strategies']) }}" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900">AI-Powered Marketing Strategies for 2024</p>
                            <p class="mt-3 text-base text-gray-500">Discover how artificial intelligence is revolutionizing marketing and how you can leverage it for your business.</p>
                        </a>
                    </div>
                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="{{ asset('images/team/author3.jpg') }}" alt="Author">
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Emily Chen</p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2024-03-08">Mar 8, 2024</time>
                                <span aria-hidden="true">&middot;</span>
                                <span>5 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Blog Post 3 -->
            <article class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ asset('images/blog/post3.jpg') }}" alt="Blog post image">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-purple-600">
                            Industry Insights
                        </p>
                        <a href="{{ route('blog.show', ['post' => 'future-of-work']) }}" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900">The Future of Work: Trends and Adaptations</p>
                            <p class="mt-3 text-base text-gray-500">Explore how the workplace is evolving and what businesses need to do to stay competitive in the new normal.</p>
                        </a>
                    </div>
                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="{{ asset('images/team/author4.jpg') }}" alt="Author">
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Michael Brown</p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2024-03-05">Mar 5, 2024</time>
                                <span aria-hidden="true">&middot;</span>
                                <span>7 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            <nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0">
                <div class="-mt-px flex w-0 flex-1">
                    <a href="#" class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                        <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
                        </svg>
                        Previous
                    </a>
                </div>
                <div class="hidden md:-mt-px md:flex">
                    <a href="#" class="inline-flex items-center border-t-2 border-purple-500 px-4 pt-4 text-sm font-medium text-purple-600">1</a>
                    <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">2</a>
                    <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">3</a>
                </div>
                <div class="-mt-px flex w-0 flex-1 justify-end">
                    <a href="#" class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                        Next
                        <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-purple-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Stay Updated</h2>
                <p class="mt-4 text-lg text-gray-500">
                    Subscribe to our newsletter for the latest insights and industry trends.
                </p>
                <div class="mt-8 flex justify-center">
                    <form class="sm:flex">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="w-full px-5 py-3 border border-gray-300 shadow-sm placeholder-gray-400 focus:ring-1 focus:ring-purple-500 focus:border-purple-500 sm:max-w-xs rounded-md" placeholder="Enter your email">
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                            <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 