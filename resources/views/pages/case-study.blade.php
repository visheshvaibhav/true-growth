@extends('layouts.app')

@section('title', $caseStudy->title . ' - The True Growth Co. Case Study')

@section('content')
    <!-- Unique Geometric Background Pattern -->
    <div class="fixed inset-0 -z-10 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Project Category Badge -->
            <div class="text-center">
                <span class="inline-block px-4 py-2 bg-indigo-100 text-indigo-600 rounded-full text-sm font-medium mb-6">
                    {{ $caseStudy->category }}
                </span>
            </div>

            <!-- Project Title -->
            <h1 class="text-4xl md:text-6xl font-bold font-poppins text-center leading-tight">
                {{ $caseStudy->title }}
            </h1>

            <!-- Quick Stats -->
            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl font-bold text-indigo-600">{{ $caseStudy->timeframe }}</div>
                    <div class="text-gray-600 mt-1">Project Duration</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-600">{{ $caseStudy->roi }}</div>
                    <div class="text-gray-600 mt-1">ROI Generated</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-pink-600">{{ $caseStudy->team_size }}</div>
                    <div class="text-gray-600 mt-1">Team Members</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-indigo-600">{{ $caseStudy->completion_date }}</div>
                    <div class="text-gray-600 mt-1">Completion Date</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Overview -->
    <section class="py-20 bg-gradient-to-b from-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-start">
                <!-- Overview Content -->
                <div>
                    <h2 class="text-3xl font-bold mb-6">Project Overview</h2>
                    <div class="prose prose-lg text-gray-600">
                        {!! $caseStudy->overview !!}
                    </div>
                    
                    <!-- Client Info -->
                    <div class="mt-10 bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold mb-4">About the Client</h3>
                        <div class="prose text-gray-600">
                            {!! $caseStudy->client_description !!}
                        </div>
                    </div>
                </div>

                <!-- Challenge & Solution Summary -->
                <div class="mt-10 lg:mt-0">
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold mb-6">The Challenge</h3>
                        <div class="prose text-gray-600">
                            {!! $caseStudy->challenge !!}
                        </div>
                    </div>
                    
                    <div class="mt-8 bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold mb-6">Our Solution</h3>
                        <div class="prose text-gray-600">
                            {!! $caseStudy->solution !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process & Implementation -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12">Our Approach</h2>
            
            <!-- Process Timeline -->
            <div class="relative">
                @foreach($caseStudy->process_steps as $step)
                <div class="relative pl-8 pb-12 border-l-2 border-indigo-200 last:border-0">
                    <div class="absolute left-0 transform -translate-x-1/2 w-4 h-4 bg-indigo-600 rounded-full"></div>
                    <div class="ml-8">
                        <h3 class="text-xl font-bold mb-4">{{ $step->title }}</h3>
                        <div class="prose text-gray-600">
                            {!! $step->description !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Technologies Used -->
    <section class="py-20 bg-gradient-to-b from-indigo-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12">Technologies & Tools</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach($caseStudy->technologies as $tech)
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                    <div class="relative bg-white rounded-xl p-6 text-center">
                        <div class="w-16 h-16 mx-auto mb-4">
                            <img src="{{ $tech->icon }}" alt="{{ $tech->name }}" class="w-full h-full object-contain">
                        </div>
                        <h3 class="font-semibold">{{ $tech->name }}</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $tech->purpose }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Results & Impact -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12">Results & Impact</h2>

            <!-- Key Metrics -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                @foreach($caseStudy->key_metrics as $metric)
                <div class="relative group">
                    <div class="absolute inset-0.5 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-25"></div>
                    <div class="relative bg-white rounded-2xl p-8 text-center">
                        <div class="text-4xl font-bold text-indigo-600 mb-2">{{ $metric->value }}</div>
                        <div class="text-gray-600">{{ $metric->label }}</div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Detailed Results -->
            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <div class="prose prose-lg max-w-none">
                    {!! $caseStudy->detailed_results !!}
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonial -->
    @if($caseStudy->testimonial)
    <section class="py-20 bg-gradient-to-b from-indigo-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <div class="absolute -inset-4">
                    <div class="w-full h-full mx-auto opacity-30 blur-lg filter" style="background: linear-gradient(90deg, #6366f1 0%, #a855f7 100%);"></div>
                </div>
                <div class="relative bg-white rounded-2xl p-12 shadow-sm">
                    <div class="flex items-center mb-8">
                        @if($caseStudy->testimonial->avatar)
                        <img src="{{ $caseStudy->testimonial->avatar }}" alt="{{ $caseStudy->testimonial->name }}" class="w-16 h-16 rounded-full">
                        @endif
                        <div class="ml-4">
                            <div class="font-bold text-xl">{{ $caseStudy->testimonial->name }}</div>
                            <div class="text-gray-600">{{ $caseStudy->testimonial->position }}</div>
                        </div>
                    </div>
                    <blockquote class="text-xl text-gray-600 italic">
                        "{{ $caseStudy->testimonial->quote }}"
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Related Projects -->
    @if(count($caseStudy->related_projects) > 0)
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12">Related Projects</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($caseStudy->related_projects as $project)
                <a href="{{ route('case-study', $project->slug) }}" class="group">
                    <div class="relative aspect-[4/3] rounded-2xl overflow-hidden">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <span class="inline-block px-3 py-1 bg-indigo-600 text-white text-sm rounded-full mb-3">{{ $project->category }}</span>
                                <h3 class="text-xl font-bold text-white">{{ $project->title }}</h3>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Start Your Project CTA -->
    <section class="py-20 bg-gradient-to-b from-indigo-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
                <p class="text-xl text-gray-600 mb-10">Let's discuss how we can achieve similar results for your organization</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-indigo-600 rounded-full hover:bg-indigo-700 transition-colors duration-300">
                        Start Your Project
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="/work" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-indigo-600 bg-indigo-50 rounded-full hover:bg-indigo-100 transition-colors duration-300">
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
            gsap.from(section.querySelectorAll('h2, .animate-on-scroll'), {
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

        // Animate process timeline
        gsap.utils.toArray('.process-step').forEach(step => {
            gsap.from(step, {
                x: -50,
                opacity: 0,
                duration: 1,
                scrollTrigger: {
                    trigger: step,
                    start: 'top 80%',
                    end: 'top 20%',
                    toggleActions: 'play none none reverse'
                }
            });
        });
    </script>
@endsection 