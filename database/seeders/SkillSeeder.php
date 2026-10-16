<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [

            // ================= Core =================
            ['name_fa' => 'PHP', 'name_en' => 'PHP', 'category' => 'core', 'note_fa' => 'شیءگرایی و الگوهای طراحی؛ هسته‌ی MVC بدون فریم‌ورک که از صفر ساختم', 'note_en' => 'OOP and design patterns; a framework-free MVC core built from scratch', 'order' => 1],
            ['name_fa' => 'Laravel', 'name_en' => 'Laravel', 'category' => 'core', 'note_fa' => 'Service Container، Facade، Eloquent، Event و Queue، Policy', 'note_en' => 'Service Container, Facades, Eloquent, Events & Queues, Policies', 'order' => 2],
            ['name_fa' => 'طراحی RESTful API', 'name_en' => 'RESTful API Design', 'category' => 'core', 'note_fa' => 'ورژن‌بندی، API Resource، لینک‌های سبک HATEOAS، احراز هویت با Sanctum / JWT', 'note_en' => 'Versioning, API Resources, HATEOAS-style links, Sanctum / JWT auth', 'order' => 3],
            ['name_fa' => 'MySQL', 'name_en' => 'MySQL', 'category' => 'core', 'note_fa' => 'طراحی اسکیما، ارتباط‌های Eloquent، Eager Loading', 'note_en' => 'Schema design, Eloquent relations, eager loading', 'order' => 4],

            // ================= Supporting =================
            ['name_fa' => 'Redis', 'name_en' => 'Redis', 'category' => 'supporting', 'note_fa' => 'Hash (سبد خرید)، Sorted Set (شمارنده‌ی بازدید)، Rate Limiting، صف', 'note_en' => 'Hash (cart), Sorted Set (view counters), rate limiting, queues', 'order' => 5],
            ['name_fa' => 'Queue / Event / Job', 'name_en' => 'Queue / Event / Job', 'category' => 'supporting', 'note_fa' => 'ایمیل و اعلان async، دستورهای زمان‌بندی‌شده', 'note_en' => 'Async emails and notifications, scheduled commands', 'order' => 6],
            ['name_fa' => 'PHPUnit / Pest', 'name_en' => 'PHPUnit / Pest', 'category' => 'supporting', 'note_fa' => 'تست‌های Feature برای API و پروژه‌ی تمرینی', 'note_en' => 'Feature tests for the API and a practice project', 'order' => 7],
            ['name_fa' => 'Docker', 'name_en' => 'Docker', 'category' => 'supporting', 'note_fa' => 'محیط dev و prod، Multi-stage build، شبکه‌بندی', 'note_en' => 'Dev & prod environments, multi-stage builds, networking', 'url' => 'https://github.com/bitarun/laravel-with-docker', 'order' => 8],
            ['name_fa' => 'Design Patterns', 'name_en' => 'Design Patterns', 'category' => 'supporting', 'note_fa' => 'Decorator، Chain of Responsibility، Strategy، Repository', 'note_en' => 'Decorator, Chain of Responsibility, Strategy, Repository', 'order' => 9],

            // ================= Also worked with =================
            ['name_fa' => 'احراز هویت', 'name_en' => 'Authentication', 'category' => 'more', 'note_fa' => 'OAuth، 2FA، Magic Login، RBAC سفارشی', 'note_en' => 'OAuth, 2FA, Magic Login, custom RBAC', 'order' => 10],
            ['name_fa' => 'درگاه‌های پرداخت', 'name_en' => 'Payment Gateways', 'category' => 'more', 'note_fa' => 'سامان (SOAP)، زیبال (REST)، زرین‌پال (SOAP)', 'note_en' => 'Saman (SOAP), Zibal (REST), Zarinpal (SOAP)', 'order' => 11],
            ['name_fa' => 'جستجوی پیشرفته', 'name_en' => 'Advanced Search', 'category' => 'more', 'note_fa' => 'Laravel Scout با Meilisearch (Algolia هم پیکربندی شده)', 'note_en' => 'Laravel Scout with Meilisearch (Algolia also configured)', 'order' => 12],
            ['name_fa' => 'ساخت و انتشار پکیج', 'name_en' => 'Package Development', 'category' => 'more', 'note_fa' => 'انتشار روی Packagist', 'note_en' => 'Published on Packagist', 'order' => 13],
            ['name_fa' => 'Git', 'name_en' => 'Git', 'category' => 'more', 'note_fa' => 'کنترل نسخه در همه‌ی پروژه‌ها؛ branching و merge در تمرین‌ها', 'note_en' => 'Version control across all projects; branching and merging practiced in exercises', 'order' => 14],
            ['name_fa' => 'Nginx', 'name_en' => 'Nginx', 'category' => 'more', 'note_fa' => 'پیکربندی reverse proxy', 'note_en' => 'Reverse proxy configuration', 'order' => 15],
            ['name_fa' => 'فرانت‌اند', 'name_en' => 'Frontend', 'category' => 'more', 'note_fa' => 'jQuery و Bootstrap 5 RTL در پروژه‌ها، Tailwind CSS ؛ و Vue.js فقط در حد بخش چت لحظه‌ای.', 'note_en' => 'jQuery and Bootstrap 5 RTL in my projects, Tailwind CSS; Vue.js only at a basic level, for the real-time chat.', 'order' => 16],
        ];

        // دسته‌بندی عوض شده، پس ردیف‌های قدیمی (که فقط داده‌ی seed هستند) اول پاک می‌شوند.
        Skill::query()->delete();

        foreach ($skills as $skill) {
            Skill::updateOrCreate(
                ['name_en' => $skill['name_en'], 'category' => $skill['category']],
                $skill
            );
        }
    }
}
