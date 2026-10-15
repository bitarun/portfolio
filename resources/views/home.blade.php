@extends('layouts.app')

@section('title', __('home.meta_title'))

@section('content')

    {{-- ===================== HERO ===================== --}}
    <section class="min-h-screen grid md:grid-cols-[1.15fr_0.85fr] items-center gap-10 px-6 md:px-20 pt-32">
        <div class="reveal">
            <div dir="ltr"
                class="font-mono text-sm max-w-md mb-8 bg-base-raise border border-base-line rounded-lg overflow-hidden">
                <div class="flex items-center gap-2 px-3.5 py-2.5 bg-[#1a1c22] border-b border-base-line">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-yellow-500"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-green-500"></span>
                    <span class="text-gray-500 text-xs ms-2">bita@server: ~</span>
                </div>
                <div class="px-5 py-4 text-left">
                    <div class="text-gray-400"><span class="text-accent">$</span> whoami</div>
                    <div class="terminal-typed">{{ __('home.whoami') }}</div>
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
                   class="group reveal project-card grid md:grid-cols-2 bg-base-card border border-base-line rounded-2xl overflow-hidden hover:border-accent-dim transition">

                    <svg class="card-border-track" preserveAspectRatio="none">
                        <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" rx="16" ry="16" />
                    </svg>

                    <div class="relative overflow-hidden bg-gradient-to-br from-[#10241d] to-[#0a0b0e] border-e border-base-line min-h-[220px]">
                        @if($project->cover_shot)
                            <img src="{{ asset('images/projects/' . $project->cover_shot) }}"
                                 alt="{{ $project->title }}"
                                 loading="lazy"
                                 class="absolute inset-0 w-full h-full object-cover object-top opacity-75 transition duration-500 group-hover:scale-105 group-hover:opacity-100">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0b0e] via-[#0a0b0e]/25 to-transparent"></div>
                        @endif
                        @if($project->code_snippet)
                            <span class="absolute bottom-4 start-4 font-mono text-xs text-accent bg-[#0a0b0e]/85 border border-accent-dim/70 rounded-md px-3 py-1.5"
                                  dir="ltr">{{ $project->code_snippet }}</span>
                        @endif
                    </div>

                    <div class="p-8">
                        <span class="text-xs text-accent border border-accent-dim rounded-full px-3 py-1">
                            {{ __('projects.category.' . $project->category) }}
                        </span>
                        <h3 class="text-2xl font-extrabold mt-4 mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-300 text-sm mb-4">{{ $project->summary }}</p>
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

    {{-- ===================== SKILLS ===================== --}}
    <section id="skills" class="px-6 md:px-16 py-24">
        <div class="text-sm text-accent flex items-center gap-2.5 mb-4">
            <span class="w-6 h-px bg-accent"></span> {{ __('home.skills_eyebrow') }}
        </div>
        <h2 class="reveal text-3xl md:text-4xl font-extrabold mb-12 max-w-xl">{{ __('home.skills_title') }}</h2>

        @foreach($skills as $category => $items)
            @php($isCore = $category === 'core')
            <div class="mb-9">
                <h3 class="text-sm mb-4 uppercase {{ $isCore ? 'text-accent' : 'text-gray-400' }}">{{ __('skills.category.' . $category) }}</h3>

                <div class="grid gap-3 {{ $isCore ? 'grid-cols-2 lg:grid-cols-4' : 'grid-cols-2 sm:grid-cols-3 lg:grid-cols-4' }}">
                    @foreach($items as $skill)
                        <div class="skill-card rounded-xl bg-base-card border {{ $isCore ? 'border-accent-dim p-4' : 'border-base-line px-3.5 py-3' }}">
                            @if($isCore)
                                <span class="w-11 h-11 rounded-lg bg-base-raise flex items-center justify-center mb-3">
                                    @include('partials.skill-icon', ['name' => $skill->name_en, 'class' => 'w-6 h-6'])
                                </span>
                                <span class="block font-semibold text-base">{{ $skill->name }}</span>
                                @if($skill->note)
                                    <span class="block text-xs leading-snug text-gray-400 mt-1">{{ $skill->note }}</span>
                                @endif
                            @else
                                <div class="flex items-center gap-2.5">
                                    @include('partials.skill-icon', ['name' => $skill->name_en, 'class' => 'w-5 h-5 shrink-0'])
                                    <span class="font-medium text-sm leading-tight">{{ $skill->name }}</span>
                                </div>
                                @if($skill->note)
                                    <span class="hidden sm:block text-xs leading-snug text-gray-500 mt-1.5">{{ $skill->note }}</span>
                                @endif
                            @endif
                            @if($skill->url)
                                <a href="{{ $skill->url }}" target="_blank" rel="noopener" class="block text-xs text-accent mt-1.5 hover:underline">
                                    {{ __('projects.view_details') }} <span class="inline-block ltr:rotate-180">←</span>
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
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
                    alt="{{ __('home.photo_alt') }}"
                    loading="lazy"
                    class="w-full h-full object-cover object-center"
                >
                <svg class="card-border-track" preserveAspectRatio="none">
                    <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" rx="14" ry="14" />
                </svg>
            </div>
            <div class="bio-card bg-base-card border border-base-line rounded-2xl p-8 text-gray-300 leading-loose">
                {!! __('home.bio') !!}
            </div>
        </div>
    </section>

    {{-- ===================== CONTACT ===================== --}}
    <section id="contact" class="scroll-mt-16 px-6 md:px-16 py-24">
        <div class="text-sm text-accent flex items-center gap-2.5 mb-4">
            <span class="w-6 h-px bg-accent"></span> {{ __('home.contact_eyebrow') }}
        </div>
        <h2 class="text-3xl md:text-4xl font-extrabold mb-12 max-w-xl">{{ __('home.contact_title') }}</h2>

        <div class="grid md:grid-cols-2 gap-8 items-stretch">

            <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="reveal grid gap-4 content-start" novalidate>
                @csrf

                {{-- Honeypot (hidden from real visitors) --}}
                <input type="text" name="website" value="" tabindex="-1" autocomplete="off" aria-hidden="true"
                       class="hidden">

                <div>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('home.contact_name') }}"
                           autocomplete="name" aria-label="{{ __('home.contact_name') }}"
                           class="w-full bg-base-card border {{ $errors->has('name') ? 'border-[#ff6a4d]' : 'border-base-line' }} rounded-lg px-4 py-3 focus:outline-none focus:border-accent">
                    @error('name')<p class="text-[#ff6a4d] text-sm mt-1.5">{{ $message }}</p>@enderror
                </div>

                <div>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('home.contact_email') }}"
                           autocomplete="email" aria-label="{{ __('home.contact_email') }}"
                           class="w-full bg-base-card border {{ $errors->has('email') ? 'border-[#ff6a4d]' : 'border-base-line' }} rounded-lg px-4 py-3 focus:outline-none focus:border-accent">
                    @error('email')<p class="text-[#ff6a4d] text-sm mt-1.5">{{ $message }}</p>@enderror
                </div>

                <div>
                    <textarea name="message" rows="4" placeholder="{{ __('home.contact_message') }}"
                              aria-label="{{ __('home.contact_message') }}"
                              class="w-full bg-base-card border {{ $errors->has('message') ? 'border-[#ff6a4d]' : 'border-base-line' }} rounded-lg px-4 py-3 focus:outline-none focus:border-accent">{{ old('message') }}</textarea>
                    @error('message')<p class="text-[#ff6a4d] text-sm mt-1.5">{{ $message }}</p>@enderror
                </div>

                <button type="submit"
                        class="btn-accent-lift cursor-pointer px-7 py-3.5 rounded-lg font-semibold bg-accent text-[#08110d] hover:bg-[#4ff2c9] transition w-fit">
                    {{ __('home.contact_send') }}
                </button>

                @if(session('contact_sent'))
                    <p class="text-accent text-sm" role="status">{{ __('home.contact_success') }}</p>
                @endif

                @if(session('contact_failed'))
                    <p class="text-[#ff6a4d] text-sm" role="alert">{{ __('home.contact_error') }}</p>
                @endif

                @if(session('contact_throttled'))
                    <p class="text-[#ff6a4d] text-sm" role="alert">{{ __('home.contact_throttled') }}</p>
                @endif
            </form>

            <div class="reveal bg-base-card border border-[#ff6a4d]/40 rounded-2xl p-8 flex flex-col gap-6">

                <span class="text-xs text-[#ff6a4d] border border-[#ff6a4d] rounded-full px-3 py-1 w-fit">
                    {{ __('home.contact_direct') }}
                </span>

                <div class="grid gap-4">
                    <a href="mailto:{{ config('portfolio.contact_email') }}" class="flex items-center gap-3 hover:text-[#ff6a4d] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0 text-[#ff6a4d]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15A2.25 2.25 0 012.25 17.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span dir="ltr" class="break-all">{{ config('portfolio.contact_email') }}</span>
                    </a>

                    <a href="{{ config('portfolio.github') }}" target="_blank" rel="noopener" class="flex items-center gap-3 hover:text-[#ff6a4d] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.39 7.86 10.91.58.1.79-.25.79-.56v-2c-3.2.7-3.88-1.54-3.88-1.54-.52-1.33-1.28-1.69-1.28-1.69-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.03 1.76 2.69 1.25 3.35.96.1-.74.4-1.25.73-1.54-2.55-.29-5.24-1.28-5.24-5.69 0-1.26.45-2.28 1.18-3.09-.12-.29-.51-1.46.11-3.05 0 0 .97-.31 3.17 1.18a11 11 0 015.77 0c2.2-1.49 3.17-1.18 3.17-1.18.62 1.59.23 2.76.11 3.05.74.81 1.18 1.83 1.18 3.09 0 4.42-2.69 5.39-5.25 5.68.41.36.78 1.06.78 2.14v3.17c0 .31.21.67.8.56A11.51 11.51 0 0023.5 12C23.5 5.65 18.35.5 12 .5z"/>
                        </svg>
                        <span dir="ltr">{{ config('portfolio.github_label') }}</span>
                    </a>

                    <a href="{{ config('portfolio.linkedin') }}" target="_blank" rel="noopener" class="flex items-center gap-3 hover:text-[#ff6a4d] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24" fill="#0A66C2" aria-hidden="true">
                            <path d="M20.45 20.45h-3.55v-5.57c0-1.33-.02-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 110-4.12 2.06 2.06 0 010 4.12zM7.12 20.45H3.56V9h3.56v11.45z"/>
                        </svg>
                        <span dir="ltr">{{ config('portfolio.linkedin_label') }}</span>
                    </a>
                </div>

                <p class="text-gray-400 text-sm leading-relaxed">{{ __('home.contact_availability') }}</p>

            </div>

        </div>
    </section>

@endsection
