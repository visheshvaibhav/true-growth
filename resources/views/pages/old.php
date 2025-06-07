@extends('layouts.app')

@section('content')
<div data-scroll-container class="bg-primary text-white">
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center overflow-hidden" data-scroll-section>
        <!-- Animated background -->
        <div class="absolute inset-0 z-0">
            <!-- Enhanced gradient background -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary via-secondary to-primary opacity-90"></div>
            <div class="absolute inset-0">
                <!-- Multiple gradient overlays for depth -->
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(255,51,102,0.15),transparent_70%)]"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(255,107,61,0.1),transparent_50%)]"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_80%,rgba(255,51,102,0.1),transparent_50%)]"></div>
            </div>
            <!-- Enhanced animated grid -->
            <div class="absolute inset-0" id="grid"></div>
            <!-- Floating elements -->
            <div class="absolute inset-0 overflow-hidden" id="floating-elements"></div>
        </div>
        
        <div class="container relative z-10">
            <div class="max-w-5xl mx-auto text-center" data-scroll data-scroll-speed="1">
                <!-- Enhanced hero content -->
                <div class="relative mb-6 inline-block">
                    <span class="text-sm uppercase tracking-[0.3em] text-accent/80 glitch-sm" data-text="Welcome to">Welcome to</span>
                </div>
                <h1 class="glitch text-7xl md:text-9xl font-heading font-bold leading-tight mb-8 text-white" data-text="The True Growth Co.">
                    <span class="text-gradient relative inline-block">
                        The True Growth Co.
                        <span class="absolute inset-0 text-gradient-2 opacity-0 hover:opacity-100 transition-opacity duration-500">The True Growth Co.</span>
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-white/80 mb-12 reveal max-w-2xl mx-auto leading-relaxed">
                    We craft <span class="text-accent">digital masterpieces</span> that defy expectations and drive 
                    <span class="text-gradient">exceptional growth</span> for forward-thinking brands.
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="{{ route('contact') }}" class="btn btn-primary magnetic group">
                        <span class="relative z-10">Start Your Journey</span>
                        <span class="absolute inset-0 bg-gradient-primary transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                    </a>
                    <a href="{{ route('portfolio') }}" class="btn btn-secondary magnetic group relative overflow-hidden">
                        <span class="relative z-10">Explore Our Work</span>
                        <span class="absolute inset-0 bg-accent/20 transform -translate-x-full group-hover:translate-x-0 transition-transform"></span>
                    </a>
                </div>
                <!-- Achievement stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-20 reveal">
                    <div class="stat-item" data-scroll data-scroll-speed="0.5">
                        <div class="text-4xl font-bold text-gradient mb-2 counter" data-target="150">0</div>
                        <p class="text-sm text-white/60 uppercase tracking-wider">Projects Delivered</p>
                    </div>
                    <div class="stat-item" data-scroll data-scroll-speed="0.7">
                        <div class="text-4xl font-bold text-gradient mb-2 counter" data-target="95">0</div>
                        <p class="text-sm text-white/60 uppercase tracking-wider">Happy Clients</p>
                    </div>
                    <div class="stat-item" data-scroll data-scroll-speed="0.9">
                        <div class="text-4xl font-bold text-gradient mb-2 counter" data-target="10">0</div>
                        <p class="text-sm text-white/60 uppercase tracking-wider">Years Experience</p>
                    </div>
                    <div class="stat-item" data-scroll data-scroll-speed="1.1">
                        <div class="text-4xl font-bold text-gradient mb-2 counter" data-target="25">0</div>
                        <p class="text-sm text-white/60 uppercase tracking-wider">Team Members</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex flex-col items-center">
            <span class="text-sm text-white/60 mb-4 tracking-wider uppercase reveal">Scroll to explore</span>
            <div class="w-6 h-24 border-2 border-white/20 rounded-full flex items-start p-1">
                <div class="w-1 h-3 bg-accent rounded-full animate-scroll"></div>
            </div>
        </div>

        <!-- Corner elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    </section>

    <!-- Services Section -->
    <section class="py-20 relative overflow-hidden bg-primary" data-scroll-section>
        <!-- Background elements -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-primary via-secondary to-primary opacity-90"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(255,51,102,0.1),transparent_50%)]"></div>
            <div class="absolute right-0 top-0 w-1/2 h-full bg-noise opacity-5"></div>
        </div>

        <div class="container relative z-10">
            <!-- Section header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-accent text-sm uppercase tracking-[0.3em] mb-4 inline-block reveal">Our Services</span>
                <h2 class="text-6xl font-heading font-bold mb-6 reveal">
                    <span class="text-gradient">Digital Excellence</span>
                    <br class="hidden md:block"/>Delivered
                </h2>
                <p class="text-xl text-text/90 reveal leading-relaxed">
                    Transforming visions into digital masterpieces through innovation and strategic excellence
                </p>
            </div>

            <!-- Service cards grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Web Design -->
                <div class="service-card group" data-scroll data-scroll-speed="0.2">
                    <div class="relative overflow-hidden rounded-2xl bg-secondary/50 backdrop-blur-sm border border-white/5 hover:border-accent/50 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-br from-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="p-8 relative">
                            <!-- Service icon -->
                            <div class="relative w-14 h-14 mb-6 rounded-xl bg-accent/10 flex items-center justify-center">
                                <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-20 transition-opacity duration-500 rounded-xl"></div>
                                <svg class="w-7 h-7 text-accent transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>

                            <!-- Service content -->
                            <h3 class="text-2xl font-heading font-bold mb-4 text-white group-hover:text-gradient transition-all">Web Design & Development</h3>
                            <ul class="space-y-3 text-base text-text/80 mb-6">
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent mr-2"></span>
                                    Responsive & Mobile-First Design
                                </li>
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent mr-2"></span>
                                    Custom Web Applications
                                </li>
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent mr-2"></span>
                                    E-commerce Solutions
                                </li>
                            </ul>
                            <a href="{{ route('services') }}" class="inline-flex items-center text-accent group/link">
                                <span class="mr-2 group-hover/link:mr-4 transition-all">Explore Service</span>
                                <span class="transform group-hover/link:translate-x-2 transition-transform">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- AI Marketing -->
                <div class="service-card group" data-scroll data-scroll-speed="0.3">
                    <div class="relative overflow-hidden rounded-2xl bg-secondary/50 backdrop-blur-sm border border-white/5 hover:border-accent/50 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-br from-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="p-8 relative">
                            <!-- Service icon -->
                            <div class="relative w-14 h-14 mb-6 rounded-xl bg-accent/10 flex items-center justify-center">
                                <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-20 transition-opacity duration-500 rounded-xl"></div>
                                <svg class="w-7 h-7 text-accent transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>

                            <!-- Service content -->
                            <h3 class="text-2xl font-heading font-bold mb-4 text-white group-hover:text-gradient transition-all">AI-Powered Marketing</h3>
                            <ul class="space-y-3 text-base text-text/80 mb-6">
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent mr-2"></span>
                                    Predictive Analytics
                                </li>
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent mr-2"></span>
                                    Automated Campaigns
                                </li>
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent mr-2"></span>
                                    Performance Optimization
                                </li>
                            </ul>
                            <a href="{{ route('services') }}" class="inline-flex items-center text-accent group/link">
                                <span class="mr-2 group-hover/link:mr-4 transition-all">Explore Service</span>
                                <span class="transform group-hover/link:translate-x-2 transition-transform">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Digital Strategy -->
                <div class="service-card group" data-scroll data-scroll-speed="0.4">
                    <div class="relative overflow-hidden rounded-2xl bg-secondary/50 backdrop-blur-sm border border-white/5 hover:border-accent/50 transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-br from-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="p-8 relative">
                            <!-- Service icon -->
                            <div class="relative w-14 h-14 mb-6 rounded-xl bg-accent/10 flex items-center justify-center">
                                <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-20 transition-opacity duration-500 rounded-xl"></div>
                                <svg class="w-7 h-7 text-accent transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>

                            <!-- Service content -->
                            <h3 class="text-2xl font-heading font-bold mb-4 text-white group-hover:text-gradient transition-all">Digital Strategy</h3>
                            <ul class="space-y-3 text-base text-text/80 mb-6">
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent mr-2"></span>
                                    Market Analysis
                                </li>
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent mr-2"></span>
                                    Growth Planning
                                </li>
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent mr-2"></span>
                                    ROI Optimization
                                </li>
                            </ul>
                            <a href="{{ route('services') }}" class="inline-flex items-center text-accent group/link">
                                <span class="mr-2 group-hover/link:mr-4 transition-all">Explore Service</span>
                                <span class="transform group-hover/link:translate-x-2 transition-transform">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service highlights -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                <div class="bg-secondary/30 backdrop-blur-sm rounded-xl p-6 text-center reveal border border-white/5" data-scroll data-scroll-speed="0.2">
                    <div class="text-3xl font-bold text-gradient mb-2">24/7</div>
                    <p class="text-sm text-text/70">Support & Maintenance</p>
                </div>
                <div class="bg-secondary/30 backdrop-blur-sm rounded-xl p-6 text-center reveal border border-white/5" data-scroll data-scroll-speed="0.3">
                    <div class="text-3xl font-bold text-gradient mb-2">100%</div>
                    <p class="text-sm text-text/70">Client Satisfaction</p>
                </div>
                <div class="bg-secondary/30 backdrop-blur-sm rounded-xl p-6 text-center reveal border border-white/5" data-scroll data-scroll-speed="0.4">
                    <div class="text-3xl font-bold text-gradient mb-2">50+</div>
                    <p class="text-sm text-text/70">Technologies</p>
                </div>
                <div class="bg-secondary/30 backdrop-blur-sm rounded-xl p-6 text-center reveal border border-white/5" data-scroll data-scroll-speed="0.5">
                    <div class="text-3xl font-bold text-gradient mb-2">15+</div>
                    <p class="text-sm text-text/70">Industries Served</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Work Section -->
    <section class="py-32 relative overflow-hidden bg-primary" data-scroll-section>
        <!-- Background elements -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-primary via-secondary to-primary opacity-90"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(255,51,102,0.1),transparent_50%)]"></div>
            <div class="absolute right-0 top-0 w-1/2 h-full bg-noise opacity-5"></div>
        </div>

        <div class="container relative z-10">
            <!-- Enhanced section header -->
            <div class="flex justify-between items-end mb-20">
                <div class="max-w-2xl" data-scroll data-scroll-speed="1">
                    <span class="text-accent text-sm uppercase tracking-[0.3em] mb-4 inline-block reveal">Our Portfolio</span>
                    <h2 class="text-5xl font-heading font-bold mb-6 reveal text-white">Featured <span class="text-gradient">Projects</span></h2>
                    <p class="text-xl text-white/80 reveal leading-relaxed">Discover how we've helped businesses transform their digital presence.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="hidden md:inline-flex btn btn-secondary magnetic group">
                    <span class="relative z-10">View All Work</span>
                    <span class="absolute inset-0 bg-accent/20 transform -translate-x-full group-hover:translate-x-0 transition-transform"></span>
                </a>
            </div>

            <!-- Enhanced project grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 3; $i++)
                <div class="project-card" data-scroll data-scroll-speed="{{ 0.2 * $i }}">
                    <div class="relative overflow-hidden rounded-2xl bg-secondary/50 backdrop-blur-sm border border-white/5 hover:border-accent/50 transition-all duration-500 group">
                        <div class="aspect-w-16 aspect-h-9 mb-6 relative">
                            <!-- Project thumbnail with gradient overlay -->
                            <div class="absolute inset-0 bg-gradient-to-br from-accent/20 to-primary/50 opacity-90 group-hover:opacity-95 transition-opacity"></div>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="text-white text-lg font-medium">View Project</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-heading font-bold mb-2 text-white group-hover:text-gradient transition-all">Project Title {{ $i }}</h3>
                            <p class="text-white/60 mb-6">Web Design • Branding</p>
                            <a href="#" class="inline-flex items-center text-accent group/link">
                                <span class="mr-2 group-hover/link:mr-4 transition-all">View Case Study</span>
                                <span class="transform group-hover/link:translate-x-2 transition-transform">→</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Enhanced CTA Section -->
    <section class="py-32 bg-primary" data-scroll-section>
        <div class="container">
            <div class="relative rounded-3xl overflow-hidden">
                <!-- Enhanced background -->
                <div class="absolute inset-0">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/20 to-primary opacity-90"></div>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(255,255,255,0.1),transparent_70%)]"></div>
                    <div class="absolute inset-0 bg-grid opacity-10"></div>
                </div>
                <div class="relative px-8 py-20 md:p-20">
                    <div class="max-w-3xl mx-auto text-center" data-scroll data-scroll-speed="1">
                        <span class="text-white/80 text-sm uppercase tracking-[0.3em] mb-4 inline-block reveal">Get Started</span>
                        <h2 class="text-5xl font-heading font-bold mb-8 reveal text-white">Ready to <span class="text-gradient-light">Stand Out</span>?</h2>
                        <p class="text-xl text-white/90 mb-12 reveal leading-relaxed">Let's create something extraordinary together. Your digital success story starts here.</p>
                        <a href="{{ route('contact') }}" class="btn bg-white text-accent hover:bg-white/90 magnetic group relative overflow-hidden">
                            <span class="relative z-10">Start a Project</span>
                            <span class="absolute inset-0 bg-accent/10 transform -translate-x-full group-hover:translate-x-0 transition-transform"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    // Custom cursor
    const cursor = document.createElement('div');
    cursor.classList.add('custom-cursor');
    document.body.appendChild(cursor);

    document.addEventListener('mousemove', (e) => {
        cursor.style.transform = `translate(${e.clientX - 10}px, ${e.clientY - 10}px)`;
    });

    // Enhanced magnetic effect
    document.querySelectorAll('.magnetic').forEach(button => {
        button.addEventListener('mousemove', (e) => {
            const rect = button.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            button.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
            button.style.transition = 'transform 0.15s cubic-bezier(0.33, 1, 0.68, 1)';
        });

        button.addEventListener('mouseleave', () => {
            button.style.transform = 'translate(0, 0)';
            button.style.transition = 'transform 0.3s cubic-bezier(0.33, 1, 0.68, 1)';
        });
    });

    // Enhanced animated grid background
    const grid = document.getElementById('grid');
    const gridSize = 30; // Increased number of dots
    const delay = 0.05; // Faster animation

    for (let i = 0; i < gridSize; i++) {
        for (let j = 0; j < gridSize; j++) {
            const dot = document.createElement('div');
            dot.classList.add('absolute', 'w-1', 'h-1', 'bg-accent/20');
            dot.style.left = `${(j / gridSize) * 100}%`;
            dot.style.top = `${(i / gridSize) * 100}%`;
            dot.style.animation = `pulse 4s infinite ${i * delay + j * delay}s`;
            grid.appendChild(dot);
        }
    }

    // Add floating elements
    const floatingElements = document.getElementById('floating-elements');
    const numElements = 20;

    for (let i = 0; i < numElements; i++) {
        const element = document.createElement('div');
        element.classList.add('absolute', 'bg-accent/5', 'rounded-full', 'blur-xl');
        
        const size = Math.random() * 200 + 100;
        element.style.width = `${size}px`;
        element.style.height = `${size}px`;
        
        element.style.left = `${Math.random() * 100}%`;
        element.style.top = `${Math.random() * 100}%`;
        
        element.style.animation = `float ${Math.random() * 10 + 10}s infinite ${Math.random() * 5}s`;
        
        floatingElements.appendChild(element);
    }

    // Counter animation
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const step = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.textContent = Math.round(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        // Start counter animation when element is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCounter();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(counter);
    });

    // GSAP Animations
    gsap.registerPlugin(ScrollTrigger);

    // Enhanced reveal animations
    document.querySelectorAll('.reveal').forEach(element => {
        gsap.from(element, {
            opacity: 0,
            y: 50,
            duration: 1.2,
            ease: "power4.out",
            scrollTrigger: {
                trigger: element,
                start: 'top bottom-=100',
                toggleActions: 'play none none reverse'
            }
        });
    });

    // Enhanced glitch effect
    const glitchText = document.querySelector('.glitch');
    const glitchInterval = setInterval(() => {
        glitchText.classList.add('animate-glitch');
        setTimeout(() => {
            glitchText.classList.remove('animate-glitch');
        }, 200);
    }, 5000);
</script>

<style>
/* Base theme colors */
:root {
    --color-primary: #0F0F0F;
    --color-secondary: #1A1A1A;
    --color-accent: #FF3366;
    --color-text: #FFFFFF;
}

/* Animation keyframes */
@keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 0.2; }
    50% { transform: scale(2); opacity: 0.5; }
}

@keyframes scroll {
    0% { transform: translateY(0); }
    50% { transform: translateY(100%); }
    100% { transform: translateY(0); }
}

@keyframes float {
    0%, 100% { transform: translate(0, 0); }
    25% { transform: translate(10%, 15%); }
    50% { transform: translate(-5%, -10%); }
    75% { transform: translate(-15%, 5%); }
}

/* Utility classes */
.bg-primary {
    background-color: var(--color-primary);
}

.bg-secondary {
    background-color: var(--color-secondary);
}

.text-gradient {
    background: linear-gradient(135deg, var(--color-accent) 0%, #FF6B3D 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.text-gradient-light {
    background: linear-gradient(135deg, #FFFFFF 0%, rgba(255, 255, 255, 0.8) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.text-gradient-2 {
    background: linear-gradient(135deg, #FF6B3D 0%, var(--color-accent) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.bg-gradient-primary {
    background: linear-gradient(135deg, var(--color-accent) 0%, #FF6B3D 100%);
}

/* Button styles */
.btn {
    @apply px-8 py-4 rounded-full font-medium transition-all duration-300;
}

.btn-primary {
    @apply bg-accent text-white hover:bg-accent/90;
}

.btn-secondary {
    @apply bg-white/10 text-white backdrop-blur-sm hover:bg-white/20 border border-white/10;
}

/* Card styles */
.card {
    @apply p-8 bg-secondary/50 backdrop-blur-sm border border-white/5 rounded-2xl transition-all duration-500;
}

/* Animation classes */
.animate-scroll {
    animation: scroll 2.5s cubic-bezier(0.76, 0, 0.24, 1) infinite;
}

.animate-glitch {
    animation: glitch 0.2s infinite;
}

@keyframes glitch {
    0% { transform: translate(0); }
    20% { transform: translate(-2px, 2px); }
    40% { transform: translate(-2px, -2px); }
    60% { transform: translate(2px, 2px); }
    80% { transform: translate(2px, -2px); }
    100% { transform: translate(0); }
}

/* Grid background */
.bg-grid {
    background-image: linear-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
    background-size: 20px 20px;
}

/* Custom cursor */
.custom-cursor {
    width: 20px;
    height: 20px;
    background: var(--color-accent);
    border-radius: 50%;
    position: fixed;
    pointer-events: none;
    mix-blend-mode: difference;
    z-index: 9999;
    transition: transform 0.15s cubic-bezier(0.33, 1, 0.68, 1);
}

/* Service card hover effects */
.service-card {
    transition: transform 0.5s cubic-bezier(0.33, 1, 0.68, 1);
}

.service-card:hover {
    transform: translateY(-10px);
}

/* Project card hover effects */
.project-card {
    transition: transform 0.5s cubic-bezier(0.33, 1, 0.68, 1);
}

.project-card:hover {
    transform: translateY(-10px);
}

/* Stats counter animation */
.stat-item {
    position: relative;
}

.stat-item::after {
    content: '+';
    position: absolute;
    top: 0;
    right: -15px;
    font-size: 2rem;
    font-weight: bold;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Noise texture */
.bg-noise {
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%' height='100%' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
    opacity: 0.5;
}

/* Reveal animation */
.reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.33, 1, 0.68, 1);
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

/* Magnetic effect */
.magnetic {
    transition: transform 0.3s cubic-bezier(0.33, 1, 0.68, 1);
}

.magnetic:hover {
    transform: scale(1.05);
}
</style>
@endpush 