<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Bita — Backend Developer')</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <style>
        @font-face {
            font-family: 'IRANYekan';
            src: url('{{ asset('fonts/iranyekan/IRANYekanWebRegular.woff2') }}') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'IRANYekan';
            src: url('{{ asset('fonts/iranyekan/IRANYekanWebMedium.woff2') }}') format('woff2');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'IRANYekan';
            src: url('{{ asset('fonts/iranyekan/IRANYekanWebBold.woff2') }}') format('woff2');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'IRANYekan';
            src: url('{{ asset('fonts/iranyekan/IRANYekanWebExtraBold.woff2') }}') format('woff2');
            font-weight: 800;
            font-style: normal;
            font-display: swap;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

<nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur bg-base-bg/60 border-b border-transparent">
    <div class="flex justify-between items-center px-6 md:px-16 py-5">
        <a href="{{ route('home') }}" class="font-mono font-bold text-lg">
            Bita<span class="text-accent">D</span>ev
        </a>

        <div class="hidden md:flex gap-9 text-sm text-gray-400">
            <a href="{{ route('projects.index') }}" class="hover:text-white transition">
                {{ __('nav.projects') }}
            </a>
            <a href="{{ route('home') }}#skills" class="hover:text-white transition">
                {{ __('nav.skills') }}
            </a>
            <a href="{{ route('home') }}#about" class="hover:text-white transition">
                {{ __('nav.about') }}
            </a>
            <a href="{{ route('cv') }}" class="hover:text-white transition">
                {{ __('nav.cv') }}
            </a>
            <a href="{{ route('home') }}#contact" class="hover:text-white transition">
                {{ __('nav.contact') }}
            </a>
        </div>

        {{-- سوییچ زبان --}}
        <div class="flex gap-2 font-mono text-xs">
            <a href="{{ route('locale.switch', 'fa') }}"
               class="px-3 py-1.5 rounded-full border {{ app()->getLocale() === 'fa' ? 'border-accent text-accent' : 'border-base-line text-gray-400' }}">
                FA
            </a>
            <a href="{{ route('locale.switch', 'en') }}"
               class="px-3 py-1.5 rounded-full border {{ app()->getLocale() === 'en' ? 'border-accent text-accent' : 'border-base-line text-gray-400' }}">
                EN
            </a>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="text-center py-10 text-gray-600 font-mono text-xs">
    &copy; {{ date('Y') }} bitadev.pro
</footer>

@stack('scripts')

</body>
</html>
