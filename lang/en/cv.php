<?php

return [
    'name' => 'Bita Badrkhani',
    'title' => 'Backend Developer | PHP / Laravel',
    'legal_name_label' => 'Legal name',
    'legal_name' => 'Fatemeh Badrkhani',
    'print' => 'Print Resume',

    'site_notice' => 'This is a short summary CV. For full project details, live demos and code samples, please visit <a href="https://bitadev.pro" class="ltr-text">bitadev.pro</a>',
    'contact_location' => 'Location',
    'location_value' => 'Qom, Iran',

    'summary_heading' => 'Summary',
    'summary_text' => 'Backend developer focused on Laravel, clean architecture, Redis and Docker. I have built full Laravel systems on my own, with payment flows, queues, real-time chat and REST APIs, and I\'m looking for my first professional backend role: on-site in Qom, remote from Tehran, or remote with international teams.',

    'projects_heading' => 'Selected Projects',
    'projects' => [
        ['title' => 'VideoShare', 'stack' => 'Laravel, Redis, Laravel Echo, Pusher, FFMpeg', 'text' => 'Real-time chat, Redis (Hash, Sorted Set, rate limiting) and three design patterns: Decorator, Chain of Responsibility, Strategy.'],
        ['title' => 'Eduport', 'stack' => 'Laravel, Service Layer, DTO, Policy', 'text' => 'Layered architecture with a Zibal payment flow handled inside database transactions.'],
        ['title' => 'BlogZine', 'stack' => 'Laravel, Repository Pattern, Queue, Socialite', 'text' => 'Repository pattern with interfaces; async email through an Event → Listener → Job chain.'],
        ['title' => 'Shoppino', 'stack' => 'Laravel, Laravel Modules, Scout, Meilisearch', 'text' => 'Modular store with search and dynamic role-based Gates.'],
        ['title' => 'RESTful API', 'stack' => 'Laravel, API Resources, Policy, PHPUnit', 'text' => 'Versioned API with HATEOAS-style links, Sanctum auth and 15 Feature tests.'],
        ['title' => 'Laravel Notification Service', 'stack' => 'PHP, Composer', 'text' => 'Email/SMS package published on Packagist.'],
    ],
    'projects_note' => 'More projects and source code: <span class="ltr-text">github.com/bitarun</span> · Screenshots and details: <span class="ltr-text">bitadev.pro</span>',

    'skills_heading' => 'Skills',

    'path_heading' => 'Learning Path',
    'path' => [
        ['year' => '2019', 'text' => 'Learned PHP and built a framework-free MVC store (router, controllers, models, admin panel); completed a PHP MVC course.'],
        ['year' => '2023', 'text' => 'Returned to programming and moved to Laravel: services, DTOs, repositories, events and queues, policies and REST APIs.'],
        ['year' => '2026', 'text' => 'Went deeper on backend topics: Redis, payment gateways, real-time chat, search, Docker, testing, and a published Laravel package.'],
    ],

    'goal_heading' => 'What I\'m Looking For',
    'goal_text' => 'I want to grow inside a team: learning from experienced developers, giving and receiving code reviews, and taking real responsibility for features that people use. I enjoy turning a vague idea into clean, working backend code, and I learn quickly. I\'m looking for a team that values careful engineering, where I can contribute early and keep improving.',

    'courses_heading' => 'Certificate & Courses',
    'certificate' => [
        'title' => 'PHP MVC — Foundational Programming Course',
        'provider' => 'ClickSite; International Certificate (affiliated with University of Oxford), 2019',
        'url' => '/images/certificates/php-mvc-oxford.jpeg',
    ],
    'courses' => [
        ['title' => 'Laravel', 'provider' => 'Roocket, Seven Learn, LinkedIn Learning'],
        ['title' => 'Docker', 'provider' => 'Udemy'],
        ['title' => 'RESTful API', 'provider' => 'Udemy'],
        ['title' => 'Redis', 'provider' => 'LinkedIn Learning'],
        ['title' => 'Git & GitHub', 'provider' => 'Udemy, Pierian Training, Pluralsight'],
        ['title' => 'SQL for Data Analytics (365 Careers)', 'provider' => 'Udemy'],
        ['title' => 'Testing (PHPUnit / Pest)', 'provider' => 'YouTube'],
    ],
];
