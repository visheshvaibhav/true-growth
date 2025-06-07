import './bootstrap';
import Alpine from 'alpinejs';
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import LocomotiveScroll from 'locomotive-scroll';

window.Alpine = Alpine;
Alpine.start();

// Initialize Locomotive Scroll
const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
    smartphone: {
        smooth: true
    },
    tablet: {
        smooth: true
    }
});

// Register GSAP ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// Update ScrollTrigger when Locomotive Scroll updates
scroll.on('scroll', ScrollTrigger.update);

// Update Locomotive Scroll when window is resized
ScrollTrigger.addEventListener('refresh', () => scroll.update());

// Refresh ScrollTrigger after Locomotive Scroll is initialized
ScrollTrigger.refresh();

// Global animations
document.addEventListener('DOMContentLoaded', () => {
    // Fade in elements with data-scroll attribute
    const fadeInElements = document.querySelectorAll('[data-scroll]');
    fadeInElements.forEach(element => {
        gsap.from(element, {
            opacity: 0,
            y: 30,
            duration: 1,
            scrollTrigger: {
                trigger: element,
                start: 'top bottom-=100',
                toggleActions: 'play none none reverse'
            }
        });
    });

    // Stagger animations for grid items
    const gridContainers = document.querySelectorAll('.grid');
    gridContainers.forEach(container => {
        const items = container.children;
        gsap.from(items, {
            opacity: 0,
            y: 50,
            duration: 0.8,
            stagger: 0.2,
            scrollTrigger: {
                trigger: container,
                start: 'top bottom-=100',
                toggleActions: 'play none none reverse'
            }
        });
    });
});
