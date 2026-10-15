<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('cv.name') }} — CV</title>

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    @vite(['resources/css/app.css'])

    <style>
        @font-face { font-family: 'IRANYekan'; src: url('{{ asset('fonts/iranyekan/IRANYekanWebRegular.woff2') }}') format('woff2'); font-weight: 400; font-display: swap; }
        @font-face { font-family: 'IRANYekan'; src: url('{{ asset('fonts/iranyekan/IRANYekanWebMedium.woff2') }}') format('woff2'); font-weight: 500; font-display: swap; }
        @font-face { font-family: 'IRANYekan'; src: url('{{ asset('fonts/iranyekan/IRANYekanWebBold.woff2') }}') format('woff2'); font-weight: 700; font-display: swap; }
        @font-face { font-family: 'Inter'; src: url('{{ asset('fonts/inter/inter-v20-latin-regular.woff2') }}') format('woff2'); font-weight: 400; font-display: swap; }
        @font-face { font-family: 'Inter'; src: url('{{ asset('fonts/inter/inter-v20-latin-500.woff2') }}') format('woff2'); font-weight: 500; font-display: swap; }
        @font-face { font-family: 'Inter'; src: url('{{ asset('fonts/inter/inter-v20-latin-600.woff2') }}') format('woff2'); font-weight: 600; font-display: swap; }
        @font-face { font-family: 'Inter'; src: url('{{ asset('fonts/inter/inter-v20-latin-700.woff2') }}') format('woff2'); font-weight: 700; font-display: swap; }

        @page { size: A4; margin: 0; }

        :root {
            --cv-ink: #111111;
            --cv-muted: #555555;
            --cv-soft: #777777;
            --cv-green: #0b7a5e;
        }

        body.cv-page {
            background: #f3f4f1;
            color: var(--cv-ink);
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .ltr-text { direction: ltr; unicode-bidi: isolate; display: inline-block; }

        .cv-sheet {
            background: #ffffff;
            width: 210mm;
            min-height: 297mm;
            margin: 24px auto 40px;
            padding: 13mm 15mm;
            font-size: 11.5px;
            line-height: 1.5;
            box-shadow: 0 20px 60px -20px rgba(0, 0, 0, 0.15);
            box-sizing: border-box;
        }

        /* The website notice is only for the PDF / printed version. */
        .cv-notice { display: none; background: #fff4ef; border: 1px solid #ff6a4d; border-radius: 6px; color: #8a2f18; font-size: 11.5px; font-weight: 600; text-align: center; padding: 6px 10px; margin-bottom: 12px; }
        .cv-notice a { color: #c2410c; text-decoration: underline; }

        .cv-header { display: flex; justify-content: space-between; align-items: flex-start; gap: 16px; border-bottom: 2px solid #000; padding-bottom: 10px; margin-bottom: 12px; }
        .cv-name { font-size: 26px; font-weight: 700; line-height: 1.2; margin: 0; }
        .cv-title { color: var(--cv-green); font-size: 13px; font-weight: 600; margin: 4px 0 0; }
        .cv-contact { font-size: 11px; color: var(--cv-muted); line-height: 1.7; text-align: end; }
        .cv-contact a { color: inherit; text-decoration: none; }

        .cv-section { margin-bottom: 11px; }
        .cv-h2 { font-size: 10.5px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: var(--cv-green); border-bottom: 1px solid #d9d9d9; padding-bottom: 2px; margin: 0 0 5px; }
        .cv-text { color: #222; margin: 0; }

        .cv-project { margin-bottom: 5px; }
        .cv-project-head { display: flex; flex-wrap: wrap; align-items: baseline; gap: 4px 8px; }
        .cv-project-name { font-weight: 700; }
        .cv-project-stack { color: var(--cv-soft); font-size: 10.5px; }
        .cv-project-text { color: #333; margin: 0; }
        .cv-note { color: var(--cv-soft); font-size: 10.5px; margin: 4px 0 0; }
        .cv-note a { color: inherit; text-decoration: underline; }

        .cv-skill { margin: 0 0 2px; }
        .cv-skill b { font-weight: 700; }
        .cv-skill span { color: #333; }

        .cv-path { list-style: none; padding: 0; margin: 0; }
        .cv-path li { display: flex; gap: 10px; margin-bottom: 3px; }
        .cv-path-year { flex: 0 0 38px; font-weight: 700; color: var(--cv-green); }

        .cv-cert { margin: 0 0 4px; }
        .cv-cert a { color: inherit; text-decoration: underline; text-decoration-style: dotted; font-weight: 600; }
        .cv-cert .prov { color: var(--cv-soft); }
        .cv-courses { color: #333; margin: 0; }
        .cv-courses .prov { color: var(--cv-soft); }

        @media print {
            .cv-notice { display: block; }
            body.cv-page { background: #fff; }
            .no-print { display: none !important; }
            .cv-sheet { box-shadow: none; margin: 0; width: 210mm; height: 297mm; overflow: hidden; }
        }
    </style>
</head>
<body class="cv-page">

@php
    $isFa = app()->getLocale() === 'fa';
    $sep = $isFa ? '، ' : ', ';
@endphp

<div class="no-print flex justify-between items-center px-6 py-4 mx-auto" style="max-width: 210mm;">
    <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-gray-900">
        <span class="inline-block rtl:rotate-180">←</span> {{ __('nav.home') }}
    </a>
    <div class="flex gap-3">
        <a href="{{ route('locale.switch', 'fa') }}"
           class="text-xs px-3 py-1.5 rounded-full border {{ $isFa ? 'border-gray-900 text-gray-900' : 'border-gray-300 text-gray-400' }}">FA</a>
        <a href="{{ route('locale.switch', 'en') }}"
           class="text-xs px-3 py-1.5 rounded-full border {{ ! $isFa ? 'border-gray-900 text-gray-900' : 'border-gray-300 text-gray-400' }}">EN</a>
        <button onclick="window.print()" class="text-xs px-4 py-1.5 rounded-full bg-gray-900 text-white cursor-pointer">
            {{ __('cv.print') }}
        </button>
    </div>
</div>

<div class="cv-sheet">

    {{-- ===== SITE NOTICE ===== --}}
    <div class="cv-notice">{!! __('cv.site_notice') !!}</div>

    {{-- ===== HEADER ===== --}}
    <header class="cv-header">
        <div>
            <h1 class="cv-name">{{ __('cv.name') }}</h1>
            <p class="cv-title">{{ __('cv.title') }}</p>
        </div>

        <div class="cv-contact">
            <div><a href="mailto:{{ config('portfolio.contact_email') }}" class="ltr-text">{{ config('portfolio.contact_email') }}</a></div>
            <div><a href="{{ config('portfolio.github') }}" target="_blank" rel="noopener" class="ltr-text">{{ config('portfolio.github_label') }}</a></div>
            <div><a href="{{ config('portfolio.linkedin') }}" target="_blank" rel="noopener" class="ltr-text">{{ config('portfolio.linkedin_label') }}</a></div>
            <div><a href="{{ url('/') }}" target="_blank" rel="noopener" class="ltr-text">{{ config('portfolio.website_label') }}</a></div>
            <div>{{ __('cv.location_value') }}</div>
        </div>
    </header>

    {{-- ===== SUMMARY ===== --}}
    <section class="cv-section">
        <h2 class="cv-h2">{{ __('cv.summary_heading') }}</h2>
        <p class="cv-text">{{ __('cv.summary_text') }}</p>
    </section>

    {{-- ===== SELECTED PROJECTS ===== --}}
    <section class="cv-section">
        <h2 class="cv-h2">{{ __('cv.projects_heading') }}</h2>
        @foreach(__('cv.projects') as $project)
            <div class="cv-project">
                <div class="cv-project-head">
                    <span class="cv-project-name">{{ $project['title'] }}</span>
                    <span class="cv-project-stack ltr-text">{{ $project['stack'] }}</span>
                </div>
                <p class="cv-project-text">{{ $project['text'] }}</p>
            </div>
        @endforeach
        <p class="cv-note">{!! __('cv.projects_note') !!}</p>
    </section>

    {{-- ===== SKILLS ===== --}}
    <section class="cv-section">
        <h2 class="cv-h2">{{ __('cv.skills_heading') }}</h2>
        @foreach($skills as $category => $items)
            <p class="cv-skill">
                <b>{{ __('skills.category.' . $category) }}:</b>
                <span>{{ $items->pluck('name')->implode($sep) }}</span>
            </p>
        @endforeach
    </section>

    {{-- ===== LEARNING PATH ===== --}}
    <section class="cv-section">
        <h2 class="cv-h2">{{ __('cv.path_heading') }}</h2>
        <ul class="cv-path">
            @foreach(__('cv.path') as $step)
                <li>
                    <span class="cv-path-year">{{ $step['year'] ?? '•' }}</span>
                    <span>{{ $step['text'] }}</span>
                </li>
            @endforeach
        </ul>
    </section>

    {{-- ===== CERTIFICATE & COURSES ===== --}}
    <section class="cv-section">
        <h2 class="cv-h2">{{ __('cv.courses_heading') }}</h2>
        @php($certificate = __('cv.certificate'))
        <p class="cv-cert">
            <a href="{{ asset(ltrim($certificate['url'], '/')) }}" target="_blank" rel="noopener">{{ $certificate['title'] }}</a>
            <span class="prov">— {{ $certificate['provider'] }}</span>
        </p>
        <p class="cv-courses">
            @foreach(__('cv.courses') as $course)
                {{ $course['title'] }} <span class="prov">({{ $course['provider'] }})</span>@if(! $loop->last) · @endif
            @endforeach
        </p>
    </section>

    {{-- ===== WHAT I'M LOOKING FOR ===== --}}
    <section class="cv-section" style="margin-bottom: 0;">
        <h2 class="cv-h2">{{ __('cv.goal_heading') }}</h2>
        <p class="cv-text">{{ __('cv.goal_text') }}</p>
    </section>

</div>

</body>
</html>
