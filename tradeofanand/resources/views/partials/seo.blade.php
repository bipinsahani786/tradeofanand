<title>{{ $seo['title'] ?? config('site.name') }}</title>
<meta name="description" content="{{ $seo['description'] ?? '' }}">
<link rel="canonical" href="{{ $seo['canonical'] ?? url()->current() }}">

{{-- Open Graph --}}
<meta property="og:title" content="{{ $seo['title'] ?? config('site.name') }}">
<meta property="og:description" content="{{ $seo['description'] ?? '' }}">
<meta property="og:url" content="{{ $seo['canonical'] ?? url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ url(config('site.og_image')) }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="hi_IN">
<meta property="og:site_name" content="{{ config('site.name') }}">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seo['title'] ?? config('site.name') }}">
<meta name="twitter:description" content="{{ $seo['description'] ?? '' }}">
<meta name="twitter:image" content="{{ url(config('site.og_image')) }}">
