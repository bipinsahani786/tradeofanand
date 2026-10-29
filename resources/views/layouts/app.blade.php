<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,600;0,700;0,800;1,700&family=Inter:wght@300;400;500;600;700&family=Mukta:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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

    {{-- Header (includes top announcement bar) --}}
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
