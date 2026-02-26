document.addEventListener('DOMContentLoaded', function () {
    const nav = document.getElementById('site-navigation');
    const siteTitle = document.querySelector('.site-title');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const iconMenu = document.getElementById('icon-menu');
    const iconClose = document.getElementById('icon-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    // Scroll Effect
    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            nav.classList.remove('bg-transparent', 'py-6');
            nav.classList.add('bg-white/95', 'backdrop-blur-sm', 'shadow-sm', 'py-4');

            siteTitle.classList.remove('text-white');
            siteTitle.classList.add('text-gray-900');

            navLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-gray-700');
            });

            mobileMenuButton.classList.remove('text-white');
            mobileMenuButton.classList.add('text-gray-900');

            mobileNavLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-gray-700');
            });

        } else {
            nav.classList.add('bg-transparent', 'py-6');
            nav.classList.remove('bg-white/95', 'backdrop-blur-sm', 'shadow-sm', 'py-4');

            siteTitle.classList.add('text-white');
            siteTitle.classList.remove('text-gray-900');

            navLinks.forEach(link => {
                link.classList.add('text-white');
                link.classList.remove('text-gray-700');
            });

            mobileMenuButton.classList.add('text-white');
            mobileMenuButton.classList.remove('text-gray-900');

            mobileNavLinks.forEach(link => {
                link.classList.add('text-white');
                link.classList.remove('text-gray-700');
            });
        }
    });

    // Mobile Menu Toggle
    mobileMenuButton.addEventListener('click', function () {
        const isHidden = mobileMenu.classList.contains('hidden');
        if (isHidden) {
            mobileMenu.classList.remove('hidden');
            iconMenu.classList.add('hidden');
            iconClose.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
            iconMenu.classList.remove('hidden');
            iconClose.classList.add('hidden');
        }
    });

    // Close mobile menu on click
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', function () {
            mobileMenu.classList.add('hidden');
            iconMenu.classList.remove('hidden');
            iconClose.classList.add('hidden');
        });
    });

    // Animation Observer
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.getAttribute('data-delay') || 0;
                setTimeout(() => {
                    entry.target.classList.add('is-visible');
                }, delay);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const animatedElements = document.querySelectorAll('.fade-up, .grow-y');
    animatedElements.forEach(el => observer.observe(el));
});

// Developer Signature (moved from PHP inline script for CSP compliance)
console.log('%cDesigned & Developed by', 'color: #6b7280; font-size: 12px; font-weight: bold;');
console.log('%cBotarhythm Studio', 'color: #111827; font-size: 24px; font-weight: 900; letter-spacing: -0.05em; padding: 4px 0;');
