<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('cv.name') }} — CV</title>
    @vite(['resources/css/app.css'])

    <style>
        body.cv-page {
            background: #f3f4f1;
            color: #1a1a1a;
        }

        .cv-sheet {
            background: #ffffff;
            max-width: 210mm;
            margin: 40px auto;
            box-shadow: 0 20px 60px -20px rgba(0, 0, 0, 0.15);
        }

        @media print {
            body.cv-page { background: #fff; }
            .no-print { display: none !important; }
            .cv-sheet { box-shadow: none; margin: 0; max-width: 100%; }
        }
    </style>
</head>
<body class="cv-page font-sans">

<div class="no-print flex justify-between items-center px-6 py-4 max-w-[210mm] mx-auto">
    <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-gray-900">
        <span class="inline-block rtl:rotate-180">←</span> {{ __('nav.home') }}
    </a>
    <div class="flex gap-3">
        <a href="{{ route('locale.switch', 'fa') }}"
           class="text-xs px-3 py-1.5 rounded-full border {{ app()->getLocale() === 'fa' ? 'border-gray-900 text-gray-900' : 'border-gray-300 text-gray-400' }}">FA</a>
        <a href="{{ route('locale.switch', 'en') }}"
           class="text-xs px-3 py-1.5 rounded-full border {{ app()->getLocale() === 'en' ? 'border-gray-900 text-gray-900' : 'border-gray-300 text-gray-400' }}">EN</a>
        <button onclick="window.print()" class="text-xs px-4 py-1.5 rounded-full bg-gray-900 text-white">
            {{ __('cv.print') }}
        </button>
    </div>
</div>

{{-- padding و فونت‌ها به‌طور کلی کوچیک‌تر شدن نسبت به قبل --}}
<div class="cv-sheet px-10 py-10 text-[13px] leading-snug">

    {{-- ===== HEADER ===== --}}
    <div class="flex justify-between items-start border-b-2 border-gray-900 pb-3 mb-4">
        <div>
            <h1 class="text-2xl font-extrabold leading-tight">{{ __('cv.name') }}</h1>
            <p class="text-gray-500 text-sm mt-0.5">{{ __('cv.title') }}</p>
            <p class="text-gray-400 text-[11px] mt-1">{{ __('cv.legal_name_note') }}</p>
        </div>

        <div class="flex flex-col items-end gap-1 text-xs text-gray-600">
            <a href="mailto:{{ config('mail.from.address') }}" class="flex items-center gap-1.5 hover:text-gray-900">
                <span>{{ config('mail.from.address') }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
            </a>

            <a href="tel:+989192454610" class="flex items-center gap-1.5 hover:text-gray-900">
                <span dir="ltr">+98 919 245 46 10</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h1.5a2.25 2.25 0 002.25-2.25v-1.372a1 1 0 00-.757-.97l-4.348-1.086a1 1 0 00-1.019.259l-1.05 1.05a11.25 11.25 0 01-5.51-5.51l1.05-1.05a1 1 0 00.26-1.02L8.7 4.507a1 1 0 00-.97-.757H6.36A2.25 2.25 0 004.11 6a2.25 2.25 0 00-1.86.75z" />
                </svg>
            </a>

            <a href="https://github.com/bitarun" target="_blank" class="flex items-center gap-1.5 hover:text-gray-900">
                <span>github.com/bitarun</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.39 7.86 10.91.57.1.78-.25.78-.55 0-.27-.01-1.17-.02-2.12-3.2.7-3.88-1.36-3.88-1.36-.52-1.33-1.28-1.68-1.28-1.68-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.03 1.76 2.7 1.25 3.36.96.1-.75.4-1.25.72-1.54-2.56-.29-5.26-1.28-5.26-5.7 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.46.11-3.04 0 0 .97-.31 3.18 1.18a11 11 0 015.79 0c2.2-1.49 3.17-1.18 3.17-1.18.63 1.58.24 2.75.12 3.04.74.81 1.18 1.84 1.18 3.1 0 4.43-2.7 5.41-5.28 5.7.42.36.78 1.07.78 2.17 0 1.56-.01 2.82-.01 3.2 0 .3.2.66.79.55A10.52 10.52 0 0023.5 12c0-6.35-5.15-11.5-11.5-11.5z"/>
                </svg>
            </a>

            <a href="https://www.linkedin.com/in/bita-badrkhani/" target="_blank" class="flex items-center gap-1.5 hover:text-gray-900">
                <span>linkedin.com/in/bita-badrkhani</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20.45 20.45h-3.55v-5.57c0-1.33-.02-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 110-4.12 2.06 2.06 0 010 4.12zM7.12 20.45H3.56V9h3.56v11.45z"/>
                </svg>
            </a>

            <div class="flex items-center gap-1.5">
                <span>{{ __('cv.contact_location') }}: {{ __('cv.location_value') }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
            </div>
        </div>
    </div>

    {{-- ===== SUMMARY ===== --}}
    <div class="mb-4">
        <h2 class="text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">{{ __('cv.summary_heading') }}</h2>
        <p class="text-gray-700 leading-snug">{{ __('cv.summary_text') }}</p>
    </div>

    {{-- ===== PROJECTS — خلاصه‌شده، یک خط برای هر پروژه ===== --}}
    <div class="mb-4">
        <div class="flex items-baseline justify-between mb-1">
            <h2 class="text-[10px] font-bold uppercase tracking-wider text-gray-400">{{ __('cv.experience_heading') }}</h2>
            <span class="text-[10px] text-gray-400">{!! __('cv.projects_note') !!}</span>
        </div>
        <div class="space-y-1.5">
            @foreach($projects as $project)
                <div class="flex items-baseline gap-2">
                    <span class="font-semibold whitespace-nowrap">{{ $project->title }}</span>
                    <span class="text-gray-400">—</span>
                    <span class="text-gray-600 text-[12px]">{{ implode(', ', $project->tech_stack) }}</span>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ===== SKILLS ===== --}}
    <div class="mb-4">
        <h2 class="text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">{{ __('cv.skills_heading') }}</h2>
        <div class="grid grid-cols-2 gap-x-6 gap-y-1 text-[12px]">
            @foreach($skills as $category => $items)
                <div>
                    <span class="font-semibold">{{ __('skills.category.' . $category) }}: </span>
                    <span class="text-gray-600">{{ $items->pluck('name')->implode('، ') }}</span>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ===== EDUCATION / COURSES ===== --}}
    <div>
        <h2 class="text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">{{ __('cv.education_heading') }}</h2>
        <div class="space-y-0.5">
            @foreach(__('cv.courses') as $course)
                <div class="flex justify-between text-[12px]">
                    <span class="text-gray-700">
                        @if(!empty($course['url']))
                            <a href="{{ $course['url'] }}" target="_blank" class="underline decoration-dotted">{{ $course['title'] }}</a>
                        @else
                            {{ $course['title'] }}
                        @endif
                    </span>
                    <span class="text-gray-400">{{ $course['provider'] }}</span>
                </div>
            @endforeach
        </div>
    </div>

</div>

</body>
</html>
