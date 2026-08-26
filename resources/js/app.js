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

document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    if (menuBtn && menu) {
        menuBtn.addEventListener('click', function () {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const tapTargets = document.querySelectorAll('.skill-card, .bio-card');

    tapTargets.forEach(function (el) {
        el.addEventListener('click', function () {
            el.classList.add('is-tapped');
            setTimeout(function () {
                el.classList.remove('is-tapped');
            }, 1500);
        });
    });
});
