document.addEventListener('DOMContentLoaded', function () {
    const revealEls = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in');
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -15% 0px', // نقطه‌ی فعال‌سازی رو ۱۵٪ از پایین صفحه بالاتر می‌بره
    });

    revealEls.forEach((el) => observer.observe(el));
});
