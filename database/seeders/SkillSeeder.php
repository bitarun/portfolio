<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [

            // ================= Backend =================
            ['name_fa' => 'Laravel', 'name_en' => 'Laravel', 'category' => 'backend', 'note_fa' => 'Service Container، Facade، چرخه‌ی درخواست', 'note_en' => 'Service Container, Facades, request lifecycle', 'order' => 1],
            ['name_fa' => 'طراحی RESTful API', 'name_en' => 'RESTful API Design', 'category' => 'backend', 'note_fa' => 'ورژن‌بندی، HATEOAS، API Resource', 'note_en' => 'Versioning, HATEOAS, API Resources', 'order' => 2],
            ['name_fa' => 'Queue / Event / Job', 'name_en' => 'Queue / Event / Job', 'category' => 'backend', 'note_fa' => 'پردازش async و Task Scheduling', 'note_en' => 'Async processing & task scheduling', 'order' => 3],
            ['name_fa' => 'ساخت و انتشار پکیج', 'name_en' => 'Package Development', 'category' => 'backend', 'note_fa' => 'انتشار روی Packagist', 'note_en' => 'Published on Packagist', 'order' => 4],
            ['name_fa' => 'احراز هویت پیشرفته', 'name_en' => 'Advanced Authentication', 'category' => 'backend', 'note_fa' => 'OAuth، 2FA، Magic Login، RBAC سفارشی', 'note_en' => 'OAuth, 2FA, Magic Login, custom RBAC', 'order' => 5],
            ['name_fa' => 'درگاه‌های پرداخت', 'name_en' => 'Payment Gateways', 'category' => 'backend', 'note_fa' => 'سامان، پاسارگاد، زرین‌پال، زیبال (REST و SOAP)', 'note_en' => 'Saman, Pasargad, Zarinpal, Zibal (REST & SOAP)', 'order' => 6],
            ['name_fa' => 'Design Patterns', 'name_en' => 'Design Patterns', 'category' => 'backend', 'note_fa' => 'Decorator، Chain of Responsibility، Strategy، Repository', 'note_en' => 'Decorator, Chain of Responsibility, Strategy, Repository', 'order' => 7],

            // ================= Database =================
            ['name_fa' => 'MySQL', 'name_en' => 'MySQL', 'category' => 'database', 'note_fa' => 'طراحی اسکیما، رفع N+1 Query', 'note_en' => 'Schema design, N+1 query resolution', 'order' => 1],
            ['name_fa' => 'SQL for Data Analytics', 'name_en' => 'SQL for Data Analytics', 'category' => 'database', 'note_fa' => 'دوره‌ی کامل 365 Careers با تمرینات کامل', 'note_en' => 'Completed 365 Careers course with full exercises', 'order' => 2],
            ['name_fa' => 'جستجوی حرفه‌ای', 'name_en' => 'Advanced Search', 'category' => 'database', 'note_fa' => 'Laravel Scout با Algolia/Meilisearch', 'note_en' => 'Laravel Scout with Algolia/Meilisearch', 'order' => 3],

            // ================= Cache / Redis =================
            ['name_fa' => 'Redis', 'name_en' => 'Redis', 'category' => 'cache', 'note_fa' => 'Hash، Sorted Set، Rate Limiting، صف', 'note_en' => 'Hash, Sorted Set, rate limiting, queues', 'order' => 1],
            ['name_fa' => 'Laravel Cache', 'name_en' => 'Laravel Cache', 'category' => 'cache', 'note_fa' => 'تسلط عمیق به مستندات و متدهای Cache API', 'note_en' => 'Deep familiarity with Cache API documentation', 'order' => 2],

            // ================= DevOps =================
            ['name_fa' => 'Docker', 'name_en' => 'Docker', 'category' => 'devops', 'note_fa' => 'محیط dev و prod، Multi-stage build، شبکه‌بندی', 'note_en' => 'Dev & prod environments, multi-stage builds, networking', 'url' => 'https://github.com/bitarun/laravel-with-docker', 'order' => 1],
            ['name_fa' => 'Laravel Sail', 'name_en' => 'Laravel Sail', 'category' => 'devops', 'note_fa' => null, 'note_en' => null, 'order' => 2],
            ['name_fa' => 'Nginx', 'name_en' => 'Nginx', 'category' => 'devops', 'note_fa' => 'پیکربندی reverse proxy', 'note_en' => 'Reverse proxy configuration', 'order' => 3],
            ['name_fa' => 'WSL2', 'name_en' => 'WSL2', 'category' => 'devops', 'note_fa' => null, 'note_en' => null, 'order' => 4],

            // ================= Testing =================
            ['name_fa' => 'PHPUnit', 'name_en' => 'PHPUnit', 'category' => 'testing', 'note_fa' => null, 'note_en' => null, 'order' => 1],
            ['name_fa' => 'Pest', 'name_en' => 'Pest', 'category' => 'testing', 'note_fa' => null, 'note_en' => null, 'order' => 2],

            // ================= Tools =================
            ['name_fa' => 'Git', 'name_en' => 'Git', 'category' => 'tools', 'note_fa' => 'commit و push روی شاخه‌ی اصلی، branching هم به‌صورت تمرینی؛ چون هنوز تجربه‌ی کار گروهی نداشتم، در محیط واقعی به‌سرعت یاد می‌گیرم', 'note_en' => 'Commit & push on main, branching practiced in exercises; without real team experience yet, but a fast learner in a live workflow', 'order' => 1],
            ['name_fa' => 'PhpStorm', 'name_en' => 'PhpStorm', 'category' => 'tools', 'note_fa' => null, 'note_en' => null, 'order' => 2],
            ['name_fa' => 'Composer', 'name_en' => 'Composer', 'category' => 'tools', 'note_fa' => null, 'note_en' => null, 'order' => 3],

            // ================= Frontend (supporting) =================
            ['name_fa' => 'Tailwind CSS', 'name_en' => 'Tailwind CSS', 'category' => 'frontend', 'note_fa' => 'آشنایی اولیه، در حد استفاده‌ی محدود', 'note_en' => 'Basic familiarity, limited hands-on use', 'order' => 1],
            ['name_fa' => 'jQuery', 'name_en' => 'jQuery', 'category' => 'frontend', 'note_fa' => 'AJAX و تعامل سمت کلاینت در چند پروژه', 'note_en' => 'AJAX & client-side interaction across multiple projects', 'order' => 2],
            ['name_fa' => 'Bootstrap 5 RTL', 'name_en' => 'Bootstrap 5 RTL', 'category' => 'frontend', 'note_fa' => 'تجربه‌ی عملی در چند پروژه', 'note_en' => 'Practical experience across multiple projects', 'order' => 3],
            ['name_fa' => 'Vue.js', 'name_en' => 'Vue.js', 'category' => 'frontend', 'note_fa' => 'در حد استفاده‌ی عملی (چت لحظه‌ای VideoShare)', 'note_en' => 'Practical usage level (VideoShare real-time chat)', 'order' => 4],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(
                ['name_en' => $skill['name_en'], 'category' => $skill['category']],
                $skill
            );
        }
    }
}
