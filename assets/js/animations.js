/**
 * Animations & Reveal System Foundation
 * Uses IntersectionObserver for performant scroll-triggered animations.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Check if user prefers reduced motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReducedMotion) {
        // Automatically make all reveals visible without animation
        document.querySelectorAll('.reveal').forEach(el => {
            el.classList.add('is-visible');
        });
        return;
    }

    // Intersection Observer callback
    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                
                if (target.classList.contains('reveal-stagger')) {
                    // Stagger children
                    Array.from(target.children).forEach((child, index) => {
                        child.classList.add('reveal');
                        child.style.transitionDelay = `${index * 0.1}s`;
                        // Trigger reflow
                        void child.offsetWidth;
                        child.classList.add('is-visible');
                    });
                } else {
                    target.classList.add('is-visible');
                }
                
                // Unobserve once revealed
                observer.unobserve(target);
            }
        });
    };

    // Observer options
    const revealOptions = {
        root: null, // viewport
        rootMargin: '0px 0px -50px 0px', // trigger slightly before bottom
        threshold: 0.1 // 10% of element visible
    };

    const revealObserver = new IntersectionObserver(revealCallback, revealOptions);

    // Select and observe all reveal elements
    document.querySelectorAll('.reveal, .reveal-stagger, .section-header, .hero-content, .hero-visual').forEach(el => {
        if (el.classList.contains('section-header') || el.classList.contains('hero-content') || el.classList.contains('hero-visual')) {
            el.classList.add('reveal');
        }
        revealObserver.observe(el);
    });
});
