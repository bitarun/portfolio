@extends('layouts.app')

@section('title', 'Bita — Backend Developer')

@section('content')

    {{-- ===================== HERO ===================== --}}
    <section class="min-h-screen grid md:grid-cols-[1.15fr_0.85fr] items-center gap-10 px-6 md:px-20 pt-32">
        <div class="reveal">
            <div
                class="font-mono text-sm max-w-md mb-8 bg-base-raise border border-base-line rounded-lg overflow-hidden">
                <div class="flex items-center gap-2 px-3.5 py-2.5 bg-[#1a1c22] border-b border-base-line">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-yellow-500"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-green-500"></span>
                    <span class="text-gray-500 text-xs ms-2">bita@server: ~</span>
                </div>
                <div class="px-5 py-4 text-left" dir="ltr">
                    <div class="text-gray-400"><span class="text-accent">$</span> whoami</div>
                    <div class="terminal-typed">bita — laravel developer</div>
                </div>
            </div>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight max-w-2xl mb-5">
                {!! __('home.hero_title') !!}
            </h1>
            <p class="text-lg text-gray-400 max-w-md mb-9">{{ __('home.hero_subtitle') }}</p>

            <div class="flex gap-4">
                <a href="{{ route('projects.index') }}"
                   class="btn-accent-lift px-7 py-3.5 rounded-lg font-semibold bg-accent text-[#08110d] hover:bg-[#4ff2c9] transition">
                    {{ __('home.cta_projects') }}
                </a>
                <a href="#contact"
                   class="px-7 py-3.5 rounded-lg font-semibold border border-base-line hover:bg-base-raise transition">
                    {{ __('home.cta_contact') }}
                </a>
            </div>
        </div>

        <div class="relative flex items-center justify-center h-96">
            <div class="relative w-full max-w-xs mx-auto">
                @if(file_exists(public_path('images/me.webp')))
                    <img src="{{ asset('images/me.webp') }}" alt="Bita" class="w-full h-auto object-contain">
                @else
                    <div class="w-64 h-64 rounded-3xl flex items-center justify-center text-center text-gray-600 text-xs shadow-2xl">
                        <span class="p-4">[ {{ __('home.photo_placeholder') }} ]</span>
                    </div>
                @endif
            </div>

            <div
                class="floating-code font-mono text-xs bg-base-card border border-base-line rounded-lg px-3 py-2 text-[#ff6a4d]"
                style="top:0; left:-4%; animation-delay: 0.9s, 1.6s; direction: ltr;">
                Route::apiResource(...)
            </div>
            <div
                class="floating-code font-mono text-xs bg-base-card border border-base-line rounded-lg px-3 py-2 text-accent"
                style="bottom:10%; left:2%; animation-delay: 1.1s, 2s; direction: ltr;">
                Cache::remember(...)
            </div>
            <div
                class="floating-code font-mono text-xs bg-base-card border border-base-line rounded-lg px-3 py-2 text-accent"
                style="top:12%; right:-4%; animation-delay: 1.3s, 1.2s; direction: ltr;">
                $job->onQueue('high')
            </div>
            <div
                class="floating-code font-mono text-xs bg-base-card border border-base-line rounded-lg px-3 py-2 text-[#ff6a4d]"
                style="bottom:-2%; right:10%; animation-delay: 1.5s, 2.4s; direction: ltr;">
                Redis::zadd(...)
            </div>
        </div>
    </section>

    {{-- ===================== SKILLS ===================== --}}
    <section id="skills" class="px-6 md:px-16 py-24">
        <div class="text-sm text-accent flex items-center gap-2.5 mb-4">
            <span class="w-6 h-px bg-accent"></span> {{ __('home.skills_eyebrow') }}
        </div>
        <h2 class="reveal text-3xl md:text-4xl font-extrabold mb-12 max-w-xl">{{ __('home.skills_title') }}</h2>

        @foreach($skills as $category => $items)
            <div class="mb-10">
                <h3 class="text-sm text-gray-400 mb-4 uppercase">{{ __('skills.category.' . $category) }}</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach($items as $skill)
                        <div class="skill-card px-4 py-2.5 rounded-lg bg-base-card border border-base-line">
                            <span class="font-medium">{{ $skill->name }}</span>
                            @if($skill->note)
                                <span class="block text-xs text-gray-500 mt-0.5">{{ $skill->note }}</span>
                            @endif
                            @if($skill->url)
                                <a href="{{ $skill->url }}" target="_blank" class="block text-xs text-accent mt-1 hover:underline">
                                    {{ __('projects.view_details') }} <span class="inline-block ltr:rotate-180">←</span>
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>

    {{-- ===================== FEATURED PROJECTS ===================== --}}
    <section id="projects" class="px-6 md:px-16 py-24">
        <div class="text-sm text-accent flex items-center gap-2.5 mb-4">
            <span class="w-6 h-px bg-accent"></span> {{ __('home.projects_eyebrow') }}
        </div>
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold">{{ __('home.projects_title') }}</h2>
            <a href="{{ route('projects.index') }}"
               class="view-all-btn group inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-[#ff6a4d]/50 text-[#ff6a4d] text-sm font-medium hover:bg-[#ff6a4d]/10 transition ms-4 whitespace-nowrap">
                {{ __('home.view_all_projects') }}
                <span class="inline-block ltr:rotate-180 transition-transform group-hover:-translate-x-1 rtl:group-hover:translate-x-1">←</span>
            </a>
        </div>

        <div class="grid gap-6">
            @foreach($featuredProjects as $project)
                <a href="{{ route('projects.index') }}#{{ $project->slug }}"
                   class="reveal project-card grid md:grid-cols-2 bg-base-card border border-base-line rounded-2xl overflow-hidden hover:border-accent-dim transition">

                    <svg class="card-border-track" preserveAspectRatio="none">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" rx="16" ry="16" />
                    </svg>

                    <div class="bg-gradient-to-br from-[#10241d] to-[#0a0b0e] flex items-center justify-center p-8 border-e border-base-line min-h-[180px]">
                        @if($project->code_snippet)
                            <span class="font-mono text-sm text-accent-dim"
                                  dir="ltr">{{ $project->code_snippet }}</span>
                        @endif
                    </div>

                    <div class="p-8">
                        <span class="text-xs text-accent border border-accent-dim rounded-full px-3 py-1">
                            {{ __('projects.category.' . $project->category) }}
                        </span>
                        <h3 class="text-2xl font-extrabold mt-4 mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-400 text-sm mb-4">{{ $project->summary }}</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach($project->tech_stack as $tech)
                                <span
                                    class="text-xs text-gray-400 border border-base-line rounded px-2 py-1">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    {{-- ===================== ABOUT / BIO ===================== --}}
    <section id="about" class="px-6 md:px-16 py-24">
        <div class="text-sm text-accent flex items-center gap-2.5 mb-4">
            <span class="w-6 h-px bg-accent"></span> {{ __('home.about_eyebrow') }}
        </div>
        <h2 class="text-3xl md:text-4xl font-extrabold mb-12 max-w-xl">{{ __('home.about_title') }}</h2>

        <div class="reveal grid md:grid-cols-[0.5fr_1.5fr] gap-12 items-center">
            <div class="photo-frame w-full aspect-[3/5] rounded-2xl overflow-hidden">
                <img
                    src="{{ asset('images/profile-photo.jpg') }}"
                    alt="{{ __('home.photo_placeholder') }}"
                    class="w-full h-full object-cover object-center"
                >
                <svg class="card-border-track" preserveAspectRatio="none">
                    <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" rx="14" ry="14" />
                </svg>
            </div>
            <div class="bio-card bg-base-card border border-base-line rounded-2xl p-8 text-gray-300 leading-loose">
                {!! __('home.bio_placeholder') !!}
            </div>
        </div>
    </section>

    {{-- ===================== CONTACT ===================== --}}
    <section id="contact" class="px-6 md:px-16 py-24">
        <div class="text-sm text-accent flex items-center gap-2.5 mb-4">
            <span class="w-6 h-px bg-accent"></span> {{ __('home.contact_eyebrow') }}
        </div>
        <h2 class="text-3xl md:text-4xl font-extrabold mb-12 max-w-xl">{{ __('home.contact_title') }}</h2>

        <div class="grid md:grid-cols-2 gap-8 items-stretch">

            <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="reveal grid gap-4 content-start">
                @csrf
                <input type="text" name="name" placeholder="{{ __('home.contact_name') }}"
                       class="bg-base-card border border-base-line rounded-lg px-4 py-3 focus:outline-none focus:border-accent">
                <input type="email" name="email" placeholder="{{ __('home.contact_email') }}"
                       class="bg-base-card border border-base-line rounded-lg px-4 py-3 focus:outline-none focus:border-accent">
                <textarea name="message" rows="4" placeholder="{{ __('home.contact_message') }}"
                          class="bg-base-card border border-base-line rounded-lg px-4 py-3 focus:outline-none focus:border-accent"></textarea>
                <button type="submit"
                        class="btn-accent-lift cursor-pointer px-7 py-3.5 rounded-lg font-semibold bg-accent text-[#08110d] hover:bg-[#4ff2c9] transition w-fit">
                    {{ __('home.contact_send') }}
                </button>

                @if(session('contact_sent'))
                    <p class="text-accent text-sm">{{ __('home.contact_success') }}</p>
                @endif
            </form>

            <div class="reveal bg-base-card border border-[#ff6a4d]/40 rounded-2xl p-8 flex flex-col md:flex-row md:items-center md:justify-between gap-8">

                <div>
                <span class="text-xs text-[#ff6a4d] border border-[#ff6a4d] rounded-full px-3 py-1 w-fit mb-6 inline-block">
                    {{ __('home.contact_phone_label') }}
                </span>

                    <div class="flex items-center gap-3 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#ff6a4d]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h1.5a2.25 2.25 0 002.25-2.25v-1.372a1 1 0 00-.757-.97l-4.348-1.086a1 1 0 00-1.019.259l-1.05 1.05a11.25 11.25 0 01-5.51-5.51l1.05-1.05a1 1 0 00.26-1.02L8.7 4.507a1 1 0 00-.97-.757H6.36A2.25 2.25 0 004.11 6a2.25 2.25 0 00-1.86.75z" />
                        </svg>
                        <a href="tel:+989192454610" dir="ltr" class="text-2xl md:text-3xl font-mono font-bold hover:text-[#ff6a4d] transition">
                            +98 919 245 46 10
                        </a>
                    </div>

                    <p class="text-gray-400 text-sm">{{ __('home.contact_phone_note') }}</p>
                </div>

                <div class="flex flex-col items-start md:items-center">
                <span class="text-xs text-[#ff6a4d] border border-[#ff6a4d] rounded-full px-3 py-1 w-fit mb-4">
                    LinkedIn
                </span>
                    <a href="https://www.linkedin.com/in/bita-badrkhani/" target="_blank" class="hover:opacity-75 transition" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="#0A66C2">
                            <path d="M20.45 20.45h-3.55v-5.57c0-1.33-.02-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 110-4.12 2.06 2.06 0 010 4.12zM7.12 20.45H3.56V9h3.56v11.45z"/>
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </section>

@endsection
