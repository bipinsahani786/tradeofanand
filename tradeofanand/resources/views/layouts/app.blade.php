<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @php
        $manifestPath = public_path('build/manifest.json');
        $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : null;
        $compiledCss = $manifest['resources/css/app.css']['file'] ?? null;
        $compiledJs = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp

    @if($compiledCss)
        <link rel="stylesheet" href="{{ asset('build/' . $compiledCss) }}">
    @endif
    @if($compiledJs)
        <script type="module" src="{{ asset('build/' . $compiledJs) }}"></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="font-body text-[var(--color-text)] bg-white antialiased">

    {{-- Top bar (desktop only) --}}
    <div class="hidden md:block bg-[var(--color-ink)] text-white/85 text-xs border-b border-white/10">
        <div class="max-w-6xl mx-auto px-6 py-1.5 flex items-center justify-between gap-4">
            <div class="flex items-center gap-6">
                <a href="tel:+91{{ config('site.phone_primary') }}" class="flex items-center gap-1.5 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    +91 {{ config('site.phone_primary') }}
                </a>
                <a href="mailto:{{ config('site.email_primary') }}" class="flex items-center gap-1.5 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    {{ config('site.email_primary') }}
                </a>
                <span class="flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    {{ config('site.address') }}
                </span>
            </div>
            <span>{{ config('site.business_hours') }}</span>
        </div>
    </div>

    {{-- Header --}}
    @include('partials.header')

    {{-- Main content --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- CTA Band --}}
    @include('partials.cta-band')

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Sticky CTAs --}}
    @include('partials.sticky-cta')

    {{-- JSON-LD Schema --}}
    @stack('schema')

    @if(config('site.google_analytics_id'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('site.google_analytics_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ config('site.google_analytics_id') }}');
    </script>
    @endif

</body>
</html>
