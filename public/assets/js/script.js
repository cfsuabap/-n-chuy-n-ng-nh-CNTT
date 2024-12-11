document.addEventListener('DOMContentLoaded', function() {
    const bannerContainer = document.querySelector('.banner-container');
    const banners = document.querySelectorAll('.banner');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentIndex = 0;
    const totalBanners = banners.length;

    function showBanner(index) {
        bannerContainer.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextBanner() {
        currentIndex = (currentIndex + 1) % totalBanners;
        showBanner(currentIndex);
    }

    function prevBanner() {
        currentIndex = (currentIndex - 1 + totalBanners) % totalBanners;
        showBanner(currentIndex);
    }

    nextBtn.addEventListener('click', nextBanner);
    prevBtn.addEventListener('click', prevBanner);

    // Tự động chuyển banner sau mỗi 5 giây
    setInterval(nextBanner, 5000);
});

// Testimonial Slider
const testimonialContainer = document.querySelector('.testimonial-container');
const testimonials = document.querySelectorAll('.testimonial');
const prevBtn = document.querySelector('.testimonial-slider .prev-btn');
const nextBtn = document.querySelector('.testimonial-slider .next-btn');

let currentIndex = 0;
const totalTestimonials = testimonials.length;

function showTestimonial(index) {
    testimonialContainer.style.transform = `translateX(-${index * 100}%)`;
}

function nextTestimonial() {
    currentIndex = (currentIndex + 1) % totalTestimonials;
    showTestimonial(currentIndex);
}

function prevTestimonial() {
    currentIndex = (currentIndex - 1 + totalTestimonials) % totalTestimonials;
    showTestimonial(currentIndex);
}

// Auto slide every 1.5 seconds
setInterval(nextTestimonial, 5000);




