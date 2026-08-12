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
                // Add visible class to trigger CSS transition
                entry.target.classList.add('is-visible');
                // Unobserve once revealed to improve performance
                observer.unobserve(entry.target);
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
    document.querySelectorAll('.reveal').forEach(el => {
        revealObserver.observe(el);
    });
});
