const scrollToTopButton = document.getElementById('scrollToTop');

// Hiển thị nút khi cuộn xuống 100px
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        scrollToTopButton.classList.add('show');
    } else {
        scrollToTopButton.classList.remove('show');
    }
});

// Cuộn lên đầu trang khi bấm vào nút
scrollToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
