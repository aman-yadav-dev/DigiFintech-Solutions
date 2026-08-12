/**
 * Global JavaScript Foundation
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle & Accessibility
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    if (menuToggle && mobileNav) {
        const toggleMenu = (forceClose = false) => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            
            if (forceClose && !isExpanded) return;
            
            const newState = forceClose ? false : !isExpanded;
            
            menuToggle.setAttribute('aria-expanded', newState);
            
            if (newState) {
                mobileNav.removeAttribute('hidden');
                mobileNav.setAttribute('aria-hidden', 'false');
                mobileNav.classList.add('is-open');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            } else {
                mobileNav.classList.remove('is-open');
                mobileNav.setAttribute('aria-hidden', 'true');
                mobileNav.setAttribute('hidden', 'true');
                document.body.style.overflow = '';
            }
        };

        menuToggle.addEventListener('click', () => toggleMenu());

        // Close on ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') toggleMenu(true);
        });

        // Close on link click
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => toggleMenu(true));
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
