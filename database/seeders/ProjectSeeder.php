<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [

            // ============ 1. VideoShare ============
            [
                'slug' => 'videoshare',
                'title_fa' => 'اشتراک ویدئو',
                'title_en' => 'VideoShare',
                'summary_fa' => 'پلتفرم اشتراک ویدیو با چت لحظه‌ای، پرداخت آنلاین و سه الگوی طراحی',
                'summary_en' => 'A video-sharing platform with real-time chat, payments, and three design patterns',
                'description_fa' => 'پلتفرمی مشابه سرویس‌های اشتراک ویدیو که در کنار آپلود و پخش ویدیو (با پردازش FFMpeg و یکپارچگی با آپارات)، سیستم چت لحظه‌ای با Laravel Echo و Vue.js، درگاه پرداخت، و یک سیستم نقش/دسترسی سفارشی داره. نقطه‌ی قوت اصلی این پروژه، پیاده‌سازی واقعی و کاربردیِ سه الگوی طراحی شیءگراست: الگوی Decorator برای محاسبه‌ی لایه‌به‌لایه‌ی هزینه‌ی سبد خرید (پک، تخفیف، هزینه‌ی ارسال)، الگوی Chain of Responsibility که دوبار به‌کار رفته (یکی برای اعتبارسنجی کوپن تخفیف، یکی برای سیستم امتیاز و بج کاربران)، و الگوی Strategy برای درگاه‌های پرداخت (سامان و پاسارگاد) که امکان اضافه‌کردن درگاه جدید را بدون تغییر کد قبلی فراهم می‌کند. Redis برای کش، شمارنده‌ی بازدید (Sorted Set)، محدودسازی نرخ درخواست (Rate Limiting) و صف استفاده شده. سیستم ورود هم شامل ورود بدون رمز (Magic Login)، احراز هویت دومرحله‌ای، و ورود با گوگل است.',
                'description_en' => 'A video-sharing platform combining video upload/streaming (with FFMpeg processing and Aparat integration), real-time chat via Laravel Echo and Vue.js, a payment gateway, and a custom role/permission system. The project\'s core strength is its genuine, practical implementation of three object-oriented design patterns: the Decorator pattern for layered cart cost calculation (packs, discounts, shipping), the Chain of Responsibility pattern used twice (coupon validation and a user XP/badge system), and the Strategy pattern for payment gateways (Saman and Pasargad), allowing new gateways to be added without touching existing code. Redis powers caching, view counters (Sorted Set), rate limiting, and queues. Authentication includes passwordless Magic Login, two-factor auth, and Google OAuth.',
                'category' => 'main',
                'tech_stack' => ['Laravel', 'Redis', 'Laravel Echo', 'Pusher', 'FFMpeg', 'MySQL', 'jQuery'],
                'highlights_fa' => [
                    'الگوی Decorator برای محاسبه‌ی لایه‌ای هزینه',
                    'الگوی Chain of Responsibility (کوپن و سیستم بج)',
                    'الگوی Strategy برای درگاه‌های پرداخت',
                    'چت لحظه‌ای با Laravel Echo و Vue.js',
                    'Redis: کش، Sorted Set، Rate Limiting، صف',
                    'سیستم Role/Permission سفارشی',
                    'ورژن‌بندی API',
                    'رعایت تمامی اصول RESTful',
                    'احراز هویت API با Sanctum و JWT',
                    'Magic Login و احراز هویت دومرحله‌ای',
                    'Redis: کش، Sorted Set، Rate Limiting، صف — <a href="https://github.com/bitarun/video-share/commit/f11be8eb1042a41c8f328bbf4ccf0ef3369b59fe" target="_blank" class="text-[#ff6a4d] underline">(مشاهده کامیت)</a>'
                ],
                'highlights_en' => [
                    'Decorator pattern for layered cost calculation',
                    'Chain of Responsibility (coupons & badge system)',
                    'Strategy pattern for payment gateways',
                    'Real-time chat with Laravel Echo & Vue.js',
                    'Redis: caching, Sorted Sets, rate limiting, queues',
                    'Custom Role/Permission system',
                    'API versioning',
                    'Following all RESTful principles',
                    'API Authentication with Sanctum and JWT',
                    'Magic Login & two-factor authentication',
                    'Redis: caching, Sorted Sets, rate limiting, queues — <a href="https://github.com/bitarun/video-share/commit/f11be8eb1042a41c8f328bbf4ccf0ef3369b59fe" target="_blank" class="text-[#ff6a4d] underline">(view commit)</a>'
                ],
                'github_url' => 'https://github.com/bitarun/video-share',
                'demo_url' => null,
                'code_snippet' => '$ php artisan serve',
                'screenshots' => [
                    'videoshare-1.png', 'videoshare-2.png', 'videoshare-3.png',
                    'videoshare-4.png', 'videoshare-5.png', 'videoshare-6.png', 'videoshare-7.png',
                    'videoshare-8.png', 'videoshare-9.png', 'videoshare-10.png'
                ],
                'order' => 1,
                'is_featured' => true,
            ],

            // ============ 2. Eduport ============
            [
                'slug' => 'eduport',
                'title_fa' => 'ادوپورت',
                'title_en' => 'Eduport',
                'summary_fa' => 'پلتفرم فروش دوره‌ی آموزشی با معماری لایه‌ای و پرداخت آنلاین',
                'summary_en' => 'An online course platform with a clean layered architecture and payment integration',
                'description_fa' => 'پلتفرمی برای فروش و مدیریت دوره‌های آموزشی آنلاین، با معماری تمیز و لایه‌بندی‌شده: Service ها (برای منطق سبدخرید، سفارش و پرداخت)، DTO ها برای انتقال داده‌ی امن بین لایه‌ها، و Policy ها برای کنترل دسترسی. سایت شامل پنل ادمین و بخش کاربری جداست، درگاه پرداخت زیبال یکپارچه شده، و از همون ابتدا ساختار دوزبانه (فارسی/انگلیسی) داشته. تمامی درخواست‌های AJAX سمت کلاینت و منطق بک‌اند رو خودم پیاده‌سازی کردم.',
                'description_en' => 'A platform for selling and managing online courses, built with a clean, layered architecture: Service classes for cart/order/payment logic, DTOs for safe data transfer between layers, and Policies for access control. The site has separate admin and user-facing sections, integrates the Zibal payment gateway, and was structured for bilingual (Persian/English) support from the start. All client-side AJAX requests and backend logic were implemented by me.',
                'category' => 'main',
                'tech_stack' => ['Laravel', 'Service Layer', 'DTO', 'Policy', 'MySQL', 'jQuery'],
                'highlights_fa' => [
                    'معماری لایه‌ای: Service / DTO / Policy',
                    'درگاه پرداخت زیبال',
                    'پنل ادمین کامل + بخش کاربری جدا',
                    'ساختار چندزبانه از پایه',
                    'تمام درخواست‌های AJAX دست‌نویس',
                    'سیدرهای واقعی با محتوای کامل فارسی (نه داده‌ی الکی)',
                ],
                'highlights_en' => [
                    'Layered architecture: Service / DTO / Policy',
                    'Zibal payment gateway integration',
                    'Full admin panel + separate user area',
                    'Bilingual structure from the ground up',
                    'Hand-written AJAX layer throughout',
                    'Realistic seeders with full Persian content (not placeholder data)',
                ],
                'github_url' => 'https://github.com/bitarun/eduport',
                'demo_url' => null,
                'code_snippet' => 'OrderService::checkout($cart)',
                'screenshots' => [
                    'eduport-1.png', 'eduport-2.png', 'eduport-3.png', 'eduport-4.png',
                    'eduport-5.png', 'eduport-6.png', 'eduport-7.png', 'eduport-8.png',
                    'eduport-9.png', 'eduport-10.png', 'eduport-11.png'
                ],
                'order' => 2,
                'is_featured' => true,
            ],

            // ============ 3. blogWebApp ============
            [
                'slug' => 'blogzine',
                'title_fa' => 'بلاگ‌زین',
                'title_en' => 'BlogZine',
                'summary_fa' => 'وبلاگ با Repository Pattern و پردازش رویداد async',
                'summary_en' => 'A blog platform using the Repository pattern and async event processing',
                'description_fa' => 'یه پلتفرم وبلاگ‌نویسی با تمیزترین معماری بین پروژه‌هام: از Repository Pattern (با اینترفیس جدا) برای انتزاع لایه‌ی دیتابیس استفاده شده، به‌جای کوئری مستقیم تو کنترلر. ایمیل خوش‌آمدگویی از طریق زنجیره‌ی Event → Listener → Job به‌صورت async و صف‌بندی‌شده ارسال میشه. شامل ورود با شبکه‌های اجتماعی (Socialite)، ردیابی منبع ورود کاربر (Referral tracking)، و آمار ترافیک روزانه هم هست.',
                'description_en' => 'A blogging platform with the cleanest architecture among my projects: it uses the Repository pattern (with a separate interface) to abstract the database layer instead of querying directly in controllers. Welcome emails are sent asynchronously through a full Event → Listener → Job chain via the queue. It also includes social login (Socialite), referral source tracking, and daily traffic analytics.',
                'category' => 'main',
                'tech_stack' => ['Laravel', 'Repository Pattern', 'Queue', 'Socialite', 'MySQL', 'jQuery'],
                'highlights_fa' => [
                    'Repository Pattern با Interface جدا',
                    'زنجیره‌ی Event → Listener → Job برای ایمیل async',
                    'ورود اجتماعی (Socialite) و ردیابی Referral',
                    'آمار ترافیک روزانه',
                    'کامنت‌های تودرتو با ساختار parent_id',
                    'فکتوری‌های واقع‌گرایانه (تاریخ منطقی، ساختار تصاویر چندسایزی)',
                ],
                'highlights_en' => [
                    'Repository Pattern with separate interface',
                    'Event → Listener → Job chain for async email',
                    'Social login (Socialite) & referral tracking',
                    'Daily traffic analytics',
                    'Nested comments via parent_id structure',
                    'Realistic factories (logical dates, multi-size image structure)',
                ],
                'github_url' => 'https://github.com/bitarun/blogzine',
                'demo_url' => null,
                'code_snippet' => 'event(new PostPublished($post))',
                'screenshots' => [
                    'blogzine-1.png', 'blogzine-2.png', 'blogzine-3.png',
                    'blogzine-4.png', 'blogzine-5.png', 'blogzine-6.png'
                ],
                'order' => 3,
                'is_featured' => true,
            ],

            // ============ 4. shoppino ============
            [
                'slug' => 'shoppino',
                'title_fa' => 'شاپینو',
                'title_en' => 'Shoppino',
                'summary_fa' => 'فروشگاه اینترنتی ماژولار با نقش/دسترسی و جستجوی حرفه‌ای',
                'summary_en' => 'A modular e-commerce store with role-based access and advanced search',
                'description_fa' => 'یه فروشگاه اینترنتی کامل با معماری ماژولار (با پکیج nwidart/laravel-modules)، که فیچرهایی مثل سبدخرید و تخفیف رو در قالب ماژول‌های جدا پیاده‌سازی کرده. شامل سیستم نقش و دسترسی، علاقه‌مندی‌ها، پرسش‌وپاسخ محصول، پیام‌رسانی داخلی، و جستجوی حرفه‌ای با Algolia/Meilisearch از طریق Laravel Scout. ورود با گوگل و پرداخت با زرین‌پال هم پیاده‌سازی شده.',
                'description_en' => 'A full e-commerce store built with a modular architecture (using nwidart/laravel-modules), where features like cart and discounts are implemented as separate modules. Includes role-based access control, wishlists, product Q&A, internal messaging, and advanced search powered by Algolia/Meilisearch via Laravel Scout. Also features Google OAuth login and Zarinpal payment integration.',
                'category' => 'main',
                'tech_stack' => ['Laravel', 'Laravel Modules', 'Laravel Scout', 'Algolia', 'MySQL', 'jQuery', 'HTML', 'CSS'],
                'highlights_fa' => [
                    'معماری ماژولار (nwidart/laravel-modules)',
                    'جستجوی حرفه‌ای با Algolia/Meilisearch',
                    'سیستم نقش/دسترسی، پرسش‌وپاسخ، پیام‌رسانی',
                    'پرداخت با زرین‌پال، ورود با گوگل',
                    'احراز هویت دومرحله‌ای با پیامک <a href="https://github.com/bitarun/laravel-project/blob/main/app/Http/Controllers/TwoFactorAuthController.php" target="_blank" class="text-[#ff6a4d] underline">(در نسخه‌ی خواهر پروژه)</a>',
                ],
                'highlights_en' => [
                    'Modular architecture (nwidart/laravel-modules)',
                    'Advanced search with Algolia/Meilisearch',
                    'Roles/permissions, product Q&A, messaging',
                    'Zarinpal payment, Google OAuth login',
                    'SMS-based 2FA <a href="https://github.com/bitarun/laravel-project/blob/main/app/Http/Controllers/TwoFactorAuthController.php" target="_blank" class="text-[#ff6a4d] underline">(in a companion iteration)</a>',
                ],
                'github_url' => 'https://github.com/bitarun/shoppino',
                'demo_url' => null,
                'code_snippet' => "Product::search('...')->get()",
                'screenshots' => [
                    'shoppino-1.png', 'shoppino-2.png', 'shoppino-3.png', 'shoppino-4.png',
                    'shoppino-5.png', 'shoppino-6.png', 'shoppino-7.png',
                ],
                'order' => 4,
                'is_featured' => true,
            ],

            // ============ 5. laravel-advanced ============
            [
                'slug' => 'gym-booking',
                'title_fa' => 'رزرو کلاس ورزشی',
                'title_en' => 'Gym Class Booking',
                'summary_fa' => 'سیستم رزرو کلاس با Queue، Event و دستور زمان‌بندی‌شده',
                'summary_en' => 'A class booking system built around Queues, Events, and scheduled commands',
                'description_fa' => 'یه سیستم رزرو کلاس ورزشی که تمرکزش روی مفاهیم پیشرفته‌ی لاراوله، نه گستردگی فیچر. وقتی کلاسی لغو میشه، یه زنجیره‌ی Event → Listener → Job به‌صورت async به اعضا اطلاع‌رسانی می‌کنه. یه دستور آرتیزان سفارشی هم هست که هر روز به‌صورت خودکار زمان‌بندی شده و به اعضایی که کلاس رزرو نکردن یادآوری می‌فرسته. کنترل دسترسی رزرو هم با Policy پیاده شده.',
                'description_en' => 'A gym class booking system focused on advanced Laravel concepts rather than feature breadth. When a class is canceled, a full Event → Listener → Job chain notifies members asynchronously. A custom Artisan command runs on a daily schedule to remind members who haven\'t booked a class. Booking access is controlled via Policies.',
                'category' => 'specialized',
                'tech_stack' => ['Laravel', 'Queue', 'Task Scheduling', 'Policy'],
                'highlights_fa' => [
                    'زنجیره‌ی Event → Listener → Job',
                    'دستور آرتیزان زمان‌بندی‌شده (Task Scheduling)',
                    'کنترل دسترسی با Policy',
                ],
                'highlights_en' => [
                    'Event → Listener → Job chain',
                    'Scheduled Artisan command (Task Scheduling)',
                    'Policy-based access control',
                ],
                'github_url' => 'https://github.com/bitarun/booking-gym',
                'demo_url' => null,
                'screenshots' => [
                    'gym-1.png', 'gym-2.png', 'gym-3.png', 'gym-4.png',
                ],
                'order' => 5,
                'is_featured' => false,
            ],

            // ============ 6. laravel-api ============
            [
                'slug' => 'laravel-api',
                'title_fa' => 'RESTful API',
                'title_en' => 'RESTful API',
                'summary_fa' => 'API استاندارد با ورژن‌بندی، HATEOAS و پوشش تست کامل',
                'summary_en' => 'A standards-compliant API with versioning, HATEOAS, and full test coverage',
                'description_fa' => 'یه API کاملاً استاندارد و امن با ورژن‌بندی، پیاده‌سازی HATEOAS، و کنترل دسترسی با Policy، FormRequest و API Resource برای هر مدل. امنیت هم جدی گرفته شده: محدودسازی نرخ درخواست، رفع آسیب‌پذیری User Enumeration، و رفع مشکل N+1 Query. تست‌های Feature با پوشش کامل هم برای مسیرهای موفق هم برای خطاهای اعتبارسنجی نوشته شده.',
                'description_en' => 'A fully standards-compliant, secure API featuring versioning, HATEOAS implementation, and access control via Policies, FormRequests, and API Resources for every model. Security was taken seriously: rate limiting, fixing a user-enumeration vulnerability, and resolving N+1 query issues. Feature tests cover both success paths and validation errors.',
                'category' => 'specialized',
                'tech_stack' => ['Laravel', 'RESTful API', 'API Resources', 'Policy', 'PHPUnit'],
                'highlights_fa' => [
                    'رعایت تمامی اصول RESTful',
                    'Stateless, Resource based URL, HTTP Methods, Status Codes, Uniform Interface',
                    'ورژن‌بندی API و پیاده‌سازی HATEOAS',
                    'رفع آسیب‌پذیری User Enumeration',
                    'حل مشکل N+1 Query',
                    'Rate Limiting',
                    'تست Feature کامل برای مسیر موفق و خطا',
                ],
                'highlights_en' => [
                    'Following all RESTful principles',
                    'Stateless, Resource based URL, HTTP Methods, Status Codes, Uniform Interface',
                    'API versioning & HATEOAS implementation',
                    'Fixed user-enumeration vulnerability',
                    'Resolved N+1 query issues',
                    'Rate limiting',
                    'Full Feature test coverage (success & validation)',
                ],
                'github_url' => 'https://github.com/bitarun/laravel-restful-api',
                'demo_url' => null,
                'order' => 6,
                'is_featured' => false,
            ],

            // ============ 7. laravel-testing ============
            [
                'slug' => 'laravel-testing',
                'title_fa' => 'آشنایی با تست‌نویسی در لاراول',
                'title_en' => 'Getting Started with Laravel Testing',
                'summary_fa' => 'تمرین تست‌نویسی با PHPUnit و Pest',
                'summary_en' => 'Practicing tests with PHPUnit and Pest',
                'description_fa' => 'پروژه‌ای تمرینی که در کنار گذروندن یه دوره‌ی تست‌نویسی ساختم تا مبانی PHPUnit و Pest رو عملی تجربه کنم. سناریوهای تست فراتر از CRUD ساده رفتن؛ مواردی مثل نمایش شرطی بر اساس نقش کاربر، صحت صفحه‌بندی، و مسیر خطاهای اعتبارسنجی رو هم پوشش دادن.',
                'description_en' => 'A practice project built alongside a testing course to get hands-on with the basics of PHPUnit and Pest. Test scenarios went a bit beyond simple CRUD, covering cases like role-based conditional UI, pagination correctness, and validation error flows.',
                'category' => 'practice',
                'tech_stack' => ['Laravel', 'PHPUnit', 'Pest'],
                'highlights_fa' => [
                    'آشنایی با هر دو سبک PHPUnit و Pest',
                    'تمرین تست دسترسی شرطی بر اساس نقش',
                    'تمرین تست صفحه‌بندی و اعتبارسنجی',
                ],
                'highlights_en' => [
                    'Familiarity with both PHPUnit and Pest',
                    'Practiced role-based access tests',
                    'Practiced pagination and validation tests',
                ],
                'github_url' => 'https://github.com/bitarun/laravel-testing',
                'demo_url' => null,
                'order' => 7,
                'is_featured' => false,
            ],

            // ============ 8. php-mvc-shop ============
            [
                'slug' => 'phpmvcshop',
                'title_fa' => 'MVC دستی با PHP خام',
                'title_en' => 'Hand-Built MVC in Vanilla PHP',
                'summary_fa' => 'نقطه‌ی شروع مسیر برنامه‌نویسی؛ فروشگاهی با MVC دست‌ساز',
                'summary_en' => 'Where the journey began: a store built on a hand-rolled MVC core',
                'description_fa' => 'اولین پروژه‌ی کاملم، یه فروشگاه اینترنتی با PHP خام و بدون فریم‌ورک، جایی که خودم هسته‌ی MVC (روتر، کنترلر پایه، مدل پایه) رو از صفر طراحی کردم. شامل پنل ادمین کامل (مدیریت محصول، دسته‌بندی، اسلایدر، سفارش)، سیستم کامنت، و سبدخرید. این پروژه نشون میده قبل از یادگیری لاراول، چطور خود مفهوم MVC رو از پایه فهمیدم و پیاده‌سازی کردم.',
                'description_en' => 'My very first complete project—an e-commerce store built in vanilla PHP with no framework, where I designed the MVC core (router, base controller, base model) entirely from scratch. Includes a full admin panel (products, categories, sliders, orders), a comment system, and a shopping cart. This project shows how I understood and built the MVC concept itself before ever learning Laravel.',
                'category' => 'practice',
                'tech_stack' => ['PHP', 'MVC (custom)', 'MySQL', 'jQuery', 'HTML', 'CSS'],
                'highlights_fa' => [
                    'هسته‌ی MVC فرانت‌‌اند و بک‌انذد کاملاً دست‌ساز (بدون فریم‌ورک)',
                    'پنل ادمین کامل',
                    'نقطه‌ی شروع مسیر یادگیری (۲۰۱۹)',
                ],
                'highlights_en' => [
                    'FrontEnd & BackEnd Fully hand-built MVC core (no framework)',
                    'Complete admin panel',
                    'The starting point of the journey (2019)',
                ],
                'github_url' => 'https://github.com/bitarun/php-mvc-shop',
                'demo_url' => null,
                'order' => 8,
                'is_featured' => false,
            ],

            // ============ 9. notification-service (package) ============
            [
                'slug' => 'laravel-notification-service',
                'title_fa' => 'پکیج اعلان‌رسانی لاراول',
                'title_en' => 'Laravel Notification Service',
                'summary_fa' => 'پکیج منتشرشده روی Packagist برای ارسال اعلان ایمیل/پیامک',
                'summary_en' => 'A published Packagist package for email/SMS notifications',
                'description_fa' => 'یه پکیج مستقل و قابل‌نصب که رو Packagist منتشر شده. با استفاده از متد جادویی `__call`، Providerهای مختلف (ایمیل، پیامک) رو به‌صورت پویا resolve می‌کنه، از ارسال هم‌زمان (`now()`) و صف‌بندی‌شده (`queue()`) پشتیبانی می‌کنه، و با یه Contract (`Provider` interface) طراحی شده که اضافه‌کردن یه Provider جدید رو بدون تغییر کد قبلی ممکن می‌کنه.',
                'description_en' => 'An independent, installable package published on Packagist. It uses the magic `__call` method to dynamically resolve different Providers (email, SMS), supports both immediate (`now()`) and queued (`queue()`) dispatch, and is designed around a `Provider` contract that lets new providers be added without touching existing code.',
                'category' => 'package',
                'tech_stack' => ['PHP', 'Laravel Package', 'Composer'],
                'highlights_fa' => [
                    'منتشرشده روی Packagist',
                    'Resolve پویا با متد جادویی __call',
                    'پشتیبانی از ارسال آنی و صف‌بندی‌شده',
                    'طراحی extensible با Provider Contract',
                ],
                'highlights_en' => [
                    'Published on Packagist',
                    'Dynamic resolution via magic __call',
                    'Supports both immediate and queued dispatch',
                    'Extensible design via Provider contract',
                ],
                'github_url' => 'https://github.com/bitarun/laravel-notification-service',
                'demo_url' => 'https://packagist.org/packages/bitarun/laravel-notification-service',
                'order' => 9,
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}
