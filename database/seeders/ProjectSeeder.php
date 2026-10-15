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
                'description_fa' => 'پلتفرمی مشابه سرویس‌های اشتراک ویدیو با آپلود ویدیو (استخراج تصویر بندانگشتی و مدت‌زمان با FFMpeg، و آپلود و فهرست ویدیوها از طریق یکپارچگی با آپارات)، چت لحظه‌ای با Laravel Echo، Pusher و Vue.js، جریان پرداخت آنلاین، و سیستم نقش/دسترسی سفارشی. نقطه‌ی قوت اصلی پروژه، استفاده‌ی عملی از سه الگوی طراحی شیءگراست: Decorator برای محاسبه‌ی لایه‌به‌لایه‌ی هزینه‌ی سبد خرید (پک، تخفیف، هزینه‌ی ارسال)، Chain of Responsibility که دو بار به‌کار رفته (اعتبارسنجی کوپن تخفیف و سیستم امتیاز و بج کاربران)، و Strategy برای درگاه‌های پرداخت. یک GatewayInterface قرارداد درگاه‌ها را تعریف می‌کند: درگاه سامان پیاده‌سازی شده است (هدایت به بانک و فراخوانی SOAP برای تأیید، با یک میان‌بُر برای حالت تست)، و پاسارگاد یک نمونه‌ی خالی است که نشان می‌دهد درگاه دوم کجا اضافه می‌شود. افزودن درگاه جدید یعنی نوشتن یک کلاس که این اینترفیس را پیاده کند و ثبت آن در یک factory. Redis برای کش، سبد خرید (Hash)، شمارنده‌ی بازدید (Sorted Set)، محدودسازی نرخ ورود و صف استفاده شده. سیستم ورود هم شامل Magic Login (بدون رمز)، احراز هویت دومرحله‌ای و ورود با گوگل است.',
                'description_en' => 'A video-sharing platform with video upload (thumbnail and duration extraction with FFMpeg, plus upload and listing through an Aparat integration), real-time chat with Laravel Echo, Pusher and Vue.js, an online payment flow, and a custom role/permission system. Its core is the hands-on use of three object-oriented design patterns: Decorator for layered cart cost calculation (packs, discounts, shipping), Chain of Responsibility used twice (coupon validation and a user XP/badge system), and Strategy for payment gateways. A GatewayInterface defines the contract: the Saman gateway is implemented (redirect to the bank and a SOAP verification call, with a shortcut for test mode), and Pasargad is a placeholder that shows where a second gateway plugs in. Adding a gateway means writing one class that implements the interface and registering it in a single factory. Redis powers caching, the cart (Hash), view counters (Sorted Set), login rate limiting and queues. Authentication covers passwordless Magic Login, two-factor auth and Google OAuth.',
                'category' => 'main',
                'tech_stack' => ['Laravel', 'Redis', 'Laravel Echo', 'Pusher', 'FFMpeg', 'MySQL', 'jQuery'],
                'highlights_fa' => [
                    'الگوی Decorator برای محاسبه‌ی لایه‌ای هزینه (پک، تخفیف، ارسال)',
                    'الگوی Chain of Responsibility دو بار: کوپن تخفیف و سیستم بج',
                    'الگوی Strategy و GatewayInterface: سامان پیاده‌سازی شده، پاسارگاد نمونه‌ی توسعه',
                    'درگاه جدید = یک کلاس جدید + یک خط در factory',
                    'چت لحظه‌ای با Laravel Echo، Pusher و Vue.js',
                    'Redis: Hash (سبد خرید)، Sorted Set (شمارنده‌ی بازدید)، Rate Limiting، صف — <a href="https://github.com/bitarun/video-share/commit/f11be8eb1042a41c8f328bbf4ccf0ef3369b59fe" target="_blank" class="text-[#ff6a4d] underline">(مشاهده کامیت)</a>',
                    'سیستم Role/Permission سفارشی (Trait، Gate، Middleware)',
                    'ورود: Magic Login، احراز هویت دومرحله‌ای، ورود با گوگل',
                    'API نسخه‌بندی‌شده (v1 با Sanctum، v2 با JWT)',
                ],
                'highlights_en' => [
                    'Decorator pattern for layered cost calculation (packs, discounts, shipping)',
                    'Chain of Responsibility used twice: coupon validation and a badge system',
                    'Strategy pattern with a GatewayInterface: Saman implemented, Pasargad as an extension example',
                    'A new gateway = one new class + one line in the factory',
                    'Real-time chat with Laravel Echo, Pusher and Vue.js',
                    'Redis: Hash (cart), Sorted Set (view counters), rate limiting, queues — <a href="https://github.com/bitarun/video-share/commit/f11be8eb1042a41c8f328bbf4ccf0ef3369b59fe" target="_blank" class="text-[#ff6a4d] underline">(view commit)</a>',
                    'Custom Role/Permission system (traits, gates, middleware)',
                    'Auth: Magic Login, two-factor authentication, Google OAuth',
                    'Versioned API (v1 with Sanctum, v2 with JWT)',
                ],
                'github_url' => 'https://github.com/bitarun/video-share',
                'demo_url' => null,
                'video_url_en' => null,
                'video_url_fa' => null,
                'code_snippet' => '$ php artisan serve',
                'screenshots' => [
                    'videoshare-1.jpg', 'videoshare-2.jpg', 'videoshare-3.jpg',
                    'videoshare-4.jpg', 'videoshare-5.jpg', 'videoshare-6.jpg', 'videoshare-7.jpg',
                    'videoshare-8.jpg', 'videoshare-9.jpg', 'videoshare-10.jpg'
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
                'description_fa' => 'پلتفرمی برای فروش و مدیریت دوره‌های آموزشی آنلاین با معماری لایه‌بندی‌شده: Service ها برای منطق سبد خرید، سفارش و پرداخت، DTO ها برای انتقال امن داده بین لایه‌ها، و یک Policy (ReviewPolicy) برای کنترل دسترسی به نظرات. سایت پنل ادمین و بخش کاربری جدا دارد و درگاه پرداخت زیبال یکپارچه شده است؛ ثبت پرداخت و بازگشت از درگاه داخل تراکنش دیتابیس انجام می‌شود. تمام درخواست‌های AJAX سمت کلاینت و منطق بک‌اند را خودم پیاده‌سازی کردم. سیدرهایی با محتوای واقعی فارسی (دسته‌بندی، فصل، درس، سؤالات متداول) و فکتوری‌هایی برای کاربر، سفارش، پرداخت و نظر هم نوشته شده است.',
                'description_en' => 'A platform for selling and managing online courses, built with a layered architecture: Service classes for cart, order and payment logic, DTOs for safe data transfer between layers, and a Policy (ReviewPolicy) for access control on reviews. It has a separate admin panel and user area and integrates the Zibal payment gateway; creating the payment and handling the gateway callback run inside database transactions. All client-side AJAX requests and the backend logic were implemented by me. It also includes seeders with realistic Persian content (categories, chapters, lessons, FAQs) and factories for users, orders, payments and reviews.',
                'category' => 'main',
                'tech_stack' => ['Laravel', 'Service Layer', 'DTO', 'Policy', 'MySQL', 'jQuery'],
                'highlights_fa' => [
                    'معماری لایه‌ای: Service / DTO / Policy',
                    'درگاه پرداخت زیبال، با تراکنش دیتابیس برای ثبت و تأیید پرداخت',
                    'پنل ادمین + بخش کاربری جدا',
                    'تمام درخواست‌های AJAX با jQuery، دست‌نویس',
                    'سیدر و فکتوری با محتوای واقعی فارسی (نه داده‌ی الکی)',
                ],
                'highlights_en' => [
                    'Layered architecture: Service / DTO / Policy',
                    'Zibal payment gateway, with database transactions for creating and verifying payments',
                    'Admin panel + separate user area',
                    'All AJAX requests written by hand with jQuery',
                    'Seeders and factories with realistic Persian content (not placeholder data)',
                ],
                'github_url' => 'https://github.com/bitarun/eduport',
                'demo_url' => null,
                'video_url_en' => null,
                'video_url_fa' => null,
                'code_snippet' => 'OrderService::checkout($cart)',
                'screenshots' => [
                    'eduport-1.jpg', 'eduport-2.jpg', 'eduport-3.jpg', 'eduport-4.jpg',
                    'eduport-5.jpg', 'eduport-6.jpg', 'eduport-7.jpg', 'eduport-8.jpg',
                    'eduport-9.jpg', 'eduport-10.jpg', 'eduport-11.jpg'
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
                'description_fa' => 'یک پلتفرم وبلاگ‌نویسی و ساختارمندترین پروژه‌ی من: جریان‌های مقاله و کاربر از الگوی Repository با اینترفیس جدا استفاده می‌کنند (Service ← Repository)، پس لایه‌ی دیتابیس از Eloquent جدا شده است. ایمیل خوش‌آمدگویی از طریق زنجیره‌ی Event → Listener → Job روی صف و به‌صورت async ارسال می‌شود. ورود با شبکه‌های اجتماعی (Socialite)، ردیابی منبع ورود کاربر (Referral)، آمار ترافیک روزانه و کامنت‌های تودرتو هم دارد.',
                'description_en' => 'A blogging platform and the most structured of my projects: the article and user flows use the Repository pattern behind separate interfaces (Service → Repository), so the data layer is abstracted from Eloquent. Welcome emails are sent asynchronously through an Event → Listener → Job chain on the queue. It also includes social login (Socialite), referral source tracking, daily traffic statistics and nested comments.',
                'category' => 'main',
                'tech_stack' => ['Laravel', 'Repository Pattern', 'Queue', 'Socialite', 'MySQL', 'jQuery'],
                'highlights_fa' => [
                    'Repository Pattern با Interface جدا برای جریان‌های مقاله و کاربر',
                    'زنجیره‌ی Event → Listener → Job برای ایمیل async',
                    'ورود اجتماعی (Socialite) و ردیابی Referral',
                    'آمار ترافیک روزانه (ثبت با Middleware)',
                    'کامنت‌های تودرتو با ساختار parent_id',
                    'فکتوری‌هایی با تاریخ‌های منطقی',
                ],
                'highlights_en' => [
                    'Repository Pattern with separate interfaces for the article and user flows',
                    'Event → Listener → Job chain for async email',
                    'Social login (Socialite) & referral tracking',
                    'Daily traffic statistics (recorded via middleware)',
                    'Nested comments via parent_id structure',
                    'Factories with logical dates',
                ],
                'github_url' => 'https://github.com/bitarun/blogzine',
                'demo_url' => null,
                'video_url_en' => null,
                'video_url_fa' => null,
                'code_snippet' => 'event(new PostPublished($post))',
                'screenshots' => [
                    'blogzine-1.jpg', 'blogzine-2.jpg', 'blogzine-3.jpg',
                    'blogzine-4.jpg', 'blogzine-5.jpg', 'blogzine-6.jpg'
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
                'description_fa' => 'یک فروشگاه اینترنتی با معماری ماژولار (پکیج nwidart/laravel-modules) که سبد خرید و تخفیف را در قالب ماژول‌های جدا پیاده کرده است. شامل سیستم نقش و دسترسی با Gate پویا، علاقه‌مندی‌ها (با پوشه‌بندی)، پرسش‌وپاسخ محصول، و جستجوی پیشرفته با Laravel Scout و Meilisearch (Algolia هم پیکربندی شده). ورود با گوگل هم دارد. جریان پرداخت روی یک پکیج چنددرگاهی (Shetab) و درگاه شبیه‌ساز آن ساخته شده و مسیرهای بازگشت موفق و ناموفق را دارد.',
                'description_en' => 'An e-commerce store with a modular architecture (nwidart/laravel-modules), where the cart and discounts are separate modules. It includes role-based access with dynamic Gates, favorites with folders, product Q&A, and advanced search with Laravel Scout and Meilisearch (Algolia is also configured). It also features Google OAuth login. The payment flow is built on a multi-gateway package (Shetab) using its simulated gateway, with success and failure callback paths.',
                'category' => 'main',
                'tech_stack' => ['Laravel', 'Laravel Modules', 'Laravel Scout', 'Meilisearch', 'MySQL', 'jQuery', 'HTML', 'CSS'],
                'highlights_fa' => [
                    'معماری ماژولار (nwidart/laravel-modules)',
                    'جستجوی پیشرفته با Laravel Scout و Meilisearch',
                    'سیستم نقش/دسترسی با Gate پویا',
                    'علاقه‌مندی‌ها و پرسش‌وپاسخ محصول',
                    'ورود با گوگل',
                    'جریان پرداخت با پکیج Shetab و درگاه شبیه‌ساز (مسیر موفق و ناموفق)',
                ],
                'highlights_en' => [
                    'Modular architecture (nwidart/laravel-modules)',
                    'Advanced search with Laravel Scout and Meilisearch',
                    'Role/permission system with dynamic Gates',
                    'Favorites and product Q&A',
                    'Google OAuth login',
                    'Payment flow with the Shetab package and its simulated gateway (success and failure paths)',
                ],
                'github_url' => 'https://github.com/bitarun/shoppino',
                'demo_url' => null,
                'video_url_en' => null,
                'video_url_fa' => null,
                'code_snippet' => "Product::search('...')->get()",
                'screenshots' => [
                    'shoppino-1.jpg', 'shoppino-2.jpg', 'shoppino-3.jpg', 'shoppino-4.jpg',
                    'shoppino-5.jpg', 'shoppino-6.jpg', 'shoppino-7.jpg',
                ],
                'order' => 4,
                'is_featured' => false,
            ],

            // ============ 5. laravel-advanced ============
            [
                'slug' => 'gym-booking',
                'title_fa' => 'رزرو کلاس ورزشی',
                'title_en' => 'Gym Class Booking',
                'summary_fa' => 'سیستم رزرو کلاس با Queue، Event و دستور زمان‌بندی‌شده',
                'summary_en' => 'A class booking system built around Queues, Events, and scheduled commands',
                'description_fa' => 'یه سیستم رزرو کلاس ورزشی که تمرکزش روی مفاهیم پیشرفته‌ی لاراوله، نه گستردگی فیچر. وقتی کلاسی لغو میشه، یه زنجیره‌ی Event → Listener → Job به‌صورت async به اعضا اطلاع‌رسانی می‌کنه. یه دستور آرتیزان سفارشی هم هست که هر روز به‌صورت خودکار زمان‌بندی شده و به اعضایی که کلاس رزرو نکردن یادآوری می‌فرسته. کنترل دسترسی با یک Policy (مدیریت کلاس‌ها) و Gate (رزرو) انجام شده است.',
                'description_en' => 'A gym class booking system focused on advanced Laravel concepts rather than feature breadth. When a class is canceled, a full Event → Listener → Job chain notifies members asynchronously. A custom Artisan command runs on a daily schedule to remind members who haven\'t booked a class. Access control uses a Policy (class management) and Gates (booking).',
                'category' => 'specialized',
                'tech_stack' => ['Laravel', 'Queue', 'Task Scheduling', 'Policy'],
                'highlights_fa' => [
                    'زنجیره‌ی Event → Listener → Job',
                    'دستور آرتیزان زمان‌بندی‌شده (Task Scheduling)',
                    'کنترل دسترسی با Policy و Gate',
                ],
                'highlights_en' => [
                    'Event → Listener → Job chain',
                    'Scheduled Artisan command (Task Scheduling)',
                    'Access control with a Policy and Gates',
                ],
                'github_url' => 'https://github.com/bitarun/booking-gym',
                'demo_url' => null,
                'video_url_en' => null,
                'video_url_fa' => null,
                'screenshots' => [
                    'gym-1.jpg', 'gym-2.jpg', 'gym-3.jpg', 'gym-4.jpg',
                ],
                'order' => 5,
                'is_featured' => false,
            ],

            // ============ 6. laravel-api ============
            [
                'slug' => 'laravel-api',
                'title_fa' => 'RESTful API',
                'title_en' => 'RESTful API',
                'summary_fa' => 'API نسخه‌بندی‌شده با لینک‌های HATEOAS، Policy و تست‌های Feature',
                'summary_en' => 'A versioned API with HATEOAS links, Policies, and Feature tests',
                'description_fa' => 'یک API ریستفول با نسخه‌بندی (v1)، لینک‌های سبک HATEOAS داخل API Resource ها، و کنترل دسترسی با Policy، FormRequest و API Resource برای مدل‌های User و Product. احراز هویت با توکن (Sanctum) انجام می‌شود و روی مسیرهای ورود و ثبت‌نام محدودسازی نرخ درخواست (۶ درخواست در دقیقه) اعمال شده است. ۱۵ تست Feature، مسیرهای موفق، جریان احراز هویت (شامل ابطال توکن) و خطاهای دسترسی (۴۰۳) برای کاربر غیرمالک را پوشش می‌دهند.',
                'description_en' => 'A RESTful API with versioning (v1), HATEOAS-style links in its API Resources, and access control through Policies, FormRequests and API Resources for the User and Product models. Authentication is token-based (Sanctum), with rate limiting on the login and registration endpoints (6 requests per minute). 15 Feature tests cover the success paths, the authentication flow (including token revocation) and authorization failures (403) for non-owners.',
                'category' => 'specialized',
                'tech_stack' => ['Laravel', 'RESTful API', 'API Resources', 'Policy', 'PHPUnit'],
                'highlights_fa' => [
                    'آدرس‌های مبتنی بر منبع، متدهای HTTP و کدهای وضعیت درست',
                    'نسخه‌بندی API (v1) و لینک‌های سبک HATEOAS',
                    'Policy، FormRequest و API Resource',
                    'احراز هویت با Sanctum و Rate Limiting روی ورود و ثبت‌نام (۶ درخواست در دقیقه)',
                    '۱۵ تست Feature: مسیرهای موفق، جریان احراز هویت و خطاهای دسترسی (۴۰۳)',
                ],
                'highlights_en' => [
                    'Resource-based URLs, HTTP methods and status codes',
                    'API versioning (v1) & HATEOAS-style links',
                    'Policies, FormRequests and API Resources',
                    'Sanctum auth and rate limiting on login and registration (6 requests/minute)',
                    '15 Feature tests: success paths, the auth flow and authorization failures (403)',
                ],
                'github_url' => 'https://github.com/bitarun/laravel-restful-api',
                'demo_url' => null,
                'video_url_en' => null,
                'video_url_fa' => null,
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
                'video_url_en' => null,
                'video_url_fa' => null,
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
                'description_fa' => 'اولین پروژه‌ی کاملم، یه فروشگاه اینترنتی با PHP خام و بدون فریم‌ورک، جایی که خودم هسته‌ی MVC (روتر، کنترلر پایه، مدل پایه) رو از صفر طراحی کردم. شامل پنل ادمین کامل (مدیریت محصول، دسته‌بندی، اسلایدر، سفارش)، سیستم کامنت، سبدخرید، و پرداخت زرین‌پال از طریق SOAP (NuSOAP). این پروژه نشون میده قبل از یادگیری لاراول، چطور خود مفهوم MVC رو از پایه فهمیدم و پیاده‌سازی کردم.',
                'description_en' => 'My very first complete project: an e-commerce store built in vanilla PHP with no framework, where I designed the MVC core (router, base controller, base model) entirely from scratch. Includes a full admin panel (products, categories, sliders, orders), a comment system, a shopping cart, and Zarinpal payment over SOAP (NuSOAP). This project shows how I understood and built the MVC concept itself before ever learning Laravel.',
                'category' => 'practice',
                'tech_stack' => ['PHP', 'MVC (custom)', 'MySQL', 'jQuery', 'HTML', 'CSS'],
                'highlights_fa' => [
                    'هسته‌ی MVC کاملاً دست‌ساز (بدون فریم‌ورک)',
                    'پنل ادمین کامل',
                    'پرداخت زرین‌پال با SOAP (NuSOAP): درخواست پرداخت و تأیید (verify)',
                    'نقطه‌ی شروع مسیر یادگیری (۲۰۱۹)',
                ],
                'highlights_en' => [
                    'Fully hand-built MVC core (no framework)',
                    'Complete admin panel',
                    'Zarinpal payment over SOAP (NuSOAP): payment request and verification',
                    'The starting point of the journey (2019)',
                ],
                'github_url' => 'https://github.com/bitarun/php-mvc-shop',
                'demo_url' => null,
                'video_url_en' => null,
                'video_url_fa' => null,
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
                'description_fa' => 'یه پکیج مستقل و قابل‌نصب که رو Packagist منتشر شده. با استفاده از متد جادویی `__call`، Providerهای مختلف (ایمیل، پیامک) رو به‌صورت پویا resolve می‌کنه، از ارسال هم‌زمان (`now()`) و صف‌بندی‌شده (`queue()`) پشتیبانی می‌کنه، و با یه Contract (`Provider` interface) طراحی شده که اضافه‌کردن یه Provider جدید رو ممکن می‌کنه.',
                'description_en' => 'An independent, installable package published on Packagist. It uses the magic `__call` method to dynamically resolve different Providers (email, SMS), supports both immediate (`now()`) and queued (`queue()`) dispatch, and is designed around a `Provider` contract that lets new providers be added.',
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
                'video_url_en' => null,
                'video_url_fa' => null,
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
