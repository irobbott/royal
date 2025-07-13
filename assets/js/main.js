// Shrink navbar on scroll
document.addEventListener('DOMContentLoaded', function () {
    const nav = document.querySelector('nav');

    if (nav) {
        window.addEventListener('scroll', function () {
            if (window.scrollY >= 520) {
                nav.classList.add('shrink');
            } else {
                nav.classList.remove('shrink');
            }
        });
    }
});

// Mobile nav toggle
document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.getElementById('mobile-nav-toggle');
    const navClose = document.getElementById('mobile-nav-close');
    const mobileNav = document.getElementById('mobileNav');
    const body = document.body;

    if (navToggle && navClose && mobileNav) {
        navToggle.addEventListener('click', () => {
        mobileNav.classList.remove('closing'); // ensure clean open
        mobileNav.classList.add('active');
        body.classList.add('no-scroll');
        });

        navClose.addEventListener('click', () => {
        mobileNav.classList.add('closing'); // start fade-out

        // Wait for animation to finish before fully hiding
        setTimeout(() => {
            mobileNav.classList.remove('active', 'closing');
            body.classList.remove('no-scroll');
        }, 300); // match the CSS transition duration (0.3s)
        });
    }
});

// Animate background images on hero section
document.addEventListener("DOMContentLoaded", () => {
    const bgImage = document.querySelector('.bg-image');

    if (!bgImage) return; // Exit if bg-image is not on this page

    const images = [
        "./assets/images/hero-img-1.jpg",
        "./assets/images/hero-img-2.jpg",
        "./assets/images/hero-img-3.jpg"
    ];
    let currentIndex = 0;

    setInterval(() => {
        currentIndex = (currentIndex + 1) % images.length;

        bgImage.classList.add('flash');

        setTimeout(() => {
            bgImage.style.backgroundImage = `url('${images[currentIndex]}')`;
        }, 150);

        setTimeout(() => {
            bgImage.classList.remove('flash');
        }, 300);
    }, 5000);
});

// Core services image change
document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.core-blocks .abg-2');
    const rightCore = document.querySelector('.right-core');

    // Only proceed if both elements exist
    if (links.length > 0 && rightCore) {
        links.forEach(link => {
            link.addEventListener('mouseenter', () => {
                rightCore.style.background = "url('./assets/images/img-02.jpg') no-repeat center center / cover";
            });

            link.addEventListener('mouseleave', () => {
                rightCore.style.background = ''; // Reset or set to original if needed
            });
        });
    }
});

// Core services image change
document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.core-blocks .abg-3');
    const rightCore = document.querySelector('.right-core');

    // Only proceed if both elements exist
    if (links.length > 0 && rightCore) {
        links.forEach(link => {
            link.addEventListener('mouseenter', () => {
                rightCore.style.background = "url('./assets/images/img-03.jpg') no-repeat center center / cover";
            });

            link.addEventListener('mouseleave', () => {
                rightCore.style.background = ''; // Reset or set to original if needed
            });
        });
    }
});

// Testimonials
document.addEventListener('DOMContentLoaded', function () {
    const sliderElement = document.querySelector('.testimonial-slider');
    if (sliderElement) {
        new Swiper('.testimonial-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
            slidesPerView: 2,
            },
            992: {
            slidesPerView: 3,
            }
        }
        });
    }
});