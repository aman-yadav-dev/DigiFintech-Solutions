/**
 * Global JavaScript Foundation
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.getElementById('mobile-nav');

    if (menuToggle && mobileNav) {
        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            
            // Toggle state
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            
            if (!isExpanded) {
                mobileNav.removeAttribute('hidden');
                // Optional: add class for animation
                mobileNav.classList.add('is-open');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            } else {
                // Optional: add class for animation closing
                mobileNav.classList.remove('is-open');
                mobileNav.setAttribute('hidden', 'true');
                document.body.style.overflow = '';
            }
        });
    }

    // 2. Sticky Header Scroll Effect
    const header = document.getElementById('header');
    
    if (header) {
        const handleScroll = () => {
            if (window.scrollY > 50) {
                header.classList.add('is-scrolled');
                // Could adjust CSS variable for background opacity here
            } else {
                header.classList.remove('is-scrolled');
            }
        };

        // Initial check
        handleScroll();

        // Listen for scroll with passive true for better performance
        window.addEventListener('scroll', handleScroll, { passive: true });
    }
});
