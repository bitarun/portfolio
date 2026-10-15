<?php

return [
    'name' => 'بیتا بدرخانی',
    'title' => 'توسعه‌دهنده بک‌اند | PHP / Laravel',
    'print' => 'چاپ رزومه',

    'site_notice' => 'این یک رزومه‌ی خلاصه است. برای جزئیات کامل پروژه‌ها، دمو و نمونه‌کدها لطفاً به سایت من سر بزنید: <a href="https://bitadev.pro" class="ltr-text">bitadev.pro</a>',
    'contact_location' => 'موقعیت',
    'location_value' => 'قم، ایران',

    'summary_heading' => 'درباره',
    'summary_text' => 'توسعه‌دهنده‌ی بک‌اند با تمرکز روی Laravel، معماری تمیز، Redis و Docker. سیستم‌های کامل Laravel رو تنهایی ساختم، با جریان پرداخت، صف، چت لحظه‌ای و REST API، و دنبال اولین موقعیت حرفه‌ای‌م توی بک‌اند هستم: حضوری توی قم، دورکاری از تهران، یا دورکاری با تیم‌های خارجی.',

    'projects_heading' => 'پروژه‌های منتخب',
    'projects' => [
        ['title' => 'VideoShare', 'stack' => 'Laravel, Redis, Laravel Echo, Pusher, FFMpeg', 'text' => 'چت لحظه‌ای، Redis (Hash، Sorted Set، Rate Limiting) و سه الگوی طراحی: Decorator، Chain of Responsibility و Strategy.'],
        ['title' => 'Eduport', 'stack' => 'Laravel, Service Layer, DTO, Policy', 'text' => 'معماری لایه‌ای با جریان پرداخت زیبال که داخل تراکنش دیتابیس انجام می‌شود.'],
        ['title' => 'BlogZine', 'stack' => 'Laravel, Repository Pattern, Queue, Socialite', 'text' => 'الگوی Repository با اینترفیس؛ ایمیل async با زنجیره‌ی Event → Listener → Job.'],
        ['title' => 'Shoppino', 'stack' => 'Laravel, Laravel Modules, Scout, Meilisearch', 'text' => 'فروشگاه ماژولار با جستجو و Gate های پویای نقش/دسترسی.'],
        ['title' => 'RESTful API', 'stack' => 'Laravel, API Resources, Policy, PHPUnit', 'text' => 'API نسخه‌بندی‌شده با لینک‌های سبک HATEOAS، احراز هویت Sanctum و ۱۵ تست Feature.'],
        ['title' => 'Laravel Notification Service', 'stack' => 'PHP, Composer', 'text' => 'پکیج اعلان ایمیل/پیامک منتشرشده روی Packagist.'],
    ],
    'projects_note' => 'پروژه‌های بیشتر و کد منبع: <span class="ltr-text">github.com/bitarun</span> · تصاویر و جزئیات: <span class="ltr-text">bitadev.pro</span>',

    'skills_heading' => 'مهارت‌ها',

    'path_heading' => 'مسیر یادگیری',
    'path' => [
        ['year' => '۲۰۱۹', 'text' => 'یادگرفتن PHP و ساخت یک فروشگاه با MVC دست‌ساز (روتر، کنترلر، مدل، پنل ادمین) و گذراندن دوره‌ی PHP MVC.'],
        ['year' => '۲۰۲۳', 'text' => 'بازگشت به برنامه‌نویسی و رفتن به Laravel: Service، DTO، Repository، Event و Queue، Policy و REST API.'],
        ['year' => null, 'text' => 'عمیق‌تر شدن در بک‌اند: Redis، درگاه‌های پرداخت، چت لحظه‌ای، جستجو، Docker، تست‌نویسی و انتشار یک پکیج Laravel.'],
    ],

    'goal_heading' => 'دنبال چه هستم',
    'goal_text' => 'می‌خوام توی یه تیم رشد کنم: از توسعه‌دهنده‌های باتجربه یاد بگیرم، کدریویو بدم و بگیرم و مسئولیت واقعی فیچرهایی رو بپذیرم که آدم‌ها ازشون استفاده می‌کنن. دوست دارم یه ایده‌ی مبهم رو به کد بک‌اند تمیز و کارا تبدیل کنم و سریع یاد می‌گیرم. دنبال تیمی‌ام که به مهندسی دقیق اهمیت می‌ده، جایی که بتونم زود شروع به کمک کنم و هم‌زمان بهتر بشم.',

    'courses_heading' => 'گواهی و دوره‌ها',
    'certificate' => [
        'title' => 'PHP MVC — دوره‌ی پایه‌ی برنامه‌نویسی',
        'provider' => 'کلیک‌سایت؛ گواهی بین‌المللی (وابسته به دانشگاه آکسفورد)، ۲۰۱۹',
        'url' => '/images/certificates/php-mvc-oxford.jpeg',
    ],
    'courses' => [
        ['title' => 'Laravel', 'provider' => 'راکت، سون‌لرن، LinkedIn Learning'],
        ['title' => 'Docker', 'provider' => 'Udemy'],
        ['title' => 'RESTful API', 'provider' => 'Udemy'],
        ['title' => 'Redis', 'provider' => 'LinkedIn Learning'],
        ['title' => 'Git & GitHub', 'provider' => 'Udemy، Pierian Training، Pluralsight'],
        ['title' => 'SQL for Data Analytics (365 Careers)', 'provider' => 'Udemy'],
        ['title' => 'تست‌نویسی (PHPUnit / Pest)', 'provider' => 'YouTube'],
    ],
];
