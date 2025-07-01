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