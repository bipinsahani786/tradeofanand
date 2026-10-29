@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════════════════════════
     1. HERO SECTION — Full-Width Navy Gradient + Geometric
═══════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-gradient-to-br from-[#0a1628] via-[#0d1f3c] to-[#091320] min-h-[92vh] flex flex-col justify-center">

    {{-- Geometric SVG Pattern Overlay --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <svg class="absolute inset-0 w-full h-full opacity-[0.04]" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="hero-grid" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 60" fill="none" stroke="#ffffff" stroke-width="0.8"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#hero-grid)"/>
        </svg>
        {{-- Ambient glows --}}
        <div class="absolute -top-40 -left-40 w-[600px] h-[600px] rounded-full bg-[var(--color-primary)]/20 blur-[120px]"></div>
        <div class="absolute -bottom-40 -right-20 w-[500px] h-[500px] rounded-full bg-[var(--color-accent)]/15 blur-[100px]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] rounded-full bg-blue-900/20 blur-[80px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 pt-14 pb-8 lg:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            {{-- ── Left Text Column (7 cols) ── --}}
            <div class="lg:col-span-7">

                {{-- Since 2011 Trust Pill --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-sm mb-8 reveal">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-400"></span>
                    </span>
                    <span class="text-xs font-bold tracking-widest uppercase text-white/90">Since 2011</span>
                    <span class="text-white/30">·</span>
                    <span class="text-xs font-semibold text-emerald-300">Trusted by 1000+ Customers</span>
                </div>

                {{-- Main Headline --}}
                <h1 class="font-heading text-4xl sm:text-5xl lg:text-[3.6rem] xl:text-[4rem] font-extrabold text-white leading-[1.07] tracking-tight mb-5 reveal delay-1">
                    विश्वास और सेवा का<br class="hidden sm:inline">
                    <span class="bg-gradient-to-r from-[var(--color-accent)] via-amber-300 to-[var(--color-accent-light)] bg-clip-text text-transparent">
                        विश्वसनीय समूह
                    </span>
                </h1>

                <p class="text-lg sm:text-xl font-semibold text-amber-300 mb-4 hindi reveal delay-2">
                    {{ config('site.tagline_hindi') }}
                </p>

                <p class="text-base sm:text-lg text-slate-300 mb-8 max-w-xl hindi leading-relaxed reveal delay-3">
                    {{ config('site.description') }}
                </p>

                {{-- Action Buttons --}}
                <div class="flex flex-wrap items-center gap-4 mb-10 reveal delay-4">
                    <a href="tel:+91{{ config('site.phone_primary') }}"
                       class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-[var(--color-accent)] hover:bg-amber-500 text-[var(--color-ink)] font-bold text-sm shadow-lg shadow-amber-500/30 transition-all duration-200 hover:-translate-y-0.5"
                       id="hero-call">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        तुरंत कॉल करें
                    </a>
                    <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}"
                       class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-white font-bold text-sm shadow-lg shadow-emerald-500/30 transition-all duration-200 hover:-translate-y-0.5"
                       target="_blank" rel="noopener noreferrer" id="hero-wa">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/></svg>
                        WhatsApp करें
                    </a>
                    <a href="{{ route('services.index') }}"
                       class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl border border-white/30 text-white hover:bg-white/10 font-bold text-sm backdrop-blur-sm transition-all duration-200 hover:-translate-y-0.5"
                       id="hero-services">
                        Explore Services →
                    </a>
                </div>

                {{-- Bottom 3-col mini stat strip --}}
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-white/10 reveal delay-5">
                    <div>
                        <div class="text-[0.65rem] uppercase tracking-widest text-slate-400 font-bold mb-1">Location</div>
                        <div class="text-sm font-semibold text-white">Mushrigharari, Samastipur</div>
                    </div>
                    <div>
                        <div class="text-[0.65rem] uppercase tracking-widest text-slate-400 font-bold mb-1">Network</div>
                        <div class="text-sm font-semibold text-white">All Bihar &amp; Inter-District</div>
                    </div>
                    <div>
                        <div class="text-[0.65rem] uppercase tracking-widest text-slate-400 font-bold mb-1">Services</div>
                        <div class="text-sm font-semibold text-white">6 Specialized Verticals</div>
                    </div>
                </div>
            </div>

            {{-- ── Right Visual Column (5 cols) ── --}}
            <div class="lg:col-span-5 relative reveal">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    {{-- Glow frame --}}
                    <div class="absolute -inset-4 bg-gradient-to-tr from-[var(--color-accent)] to-[var(--color-primary)] rounded-3xl opacity-25 blur-2xl"></div>

                    {{-- Image container --}}
                    <div class="relative rounded-2xl overflow-hidden border border-white/15 shadow-2xl bg-slate-900 group">
                        <img
                            src="/images/hero/hero-main.jpg"
                            alt="Trade of Anand – Multi Sector Enterprise in Samastipur Bihar"
                            class="w-full aspect-[4/3] object-cover transition-transform duration-700 group-hover:scale-105"
                            width="600" height="450"
                            loading="eager"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628]/80 via-transparent to-transparent"></div>

                        {{-- Floating badge: bottom verified strip --}}
                        <div class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-[var(--color-accent)] flex items-center justify-center font-bold text-[var(--color-ink)] text-base shrink-0">★</div>
                                <div>
                                    <div class="text-xs font-bold text-white">ISO / Govt Authorized Standards</div>
                                    <div class="text-[0.7rem] text-slate-300 hindi">विश्वसनीयता और समयबद्ध सेवा</div>
                                </div>
                            </div>
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-emerald-500/20 border border-emerald-400/40 text-emerald-300 text-[0.65rem] font-bold uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>Verified
                            </span>
                        </div>
                    </div>

                    {{-- Floating Stat Badges --}}
                    <div class="absolute -top-5 -right-5 bg-white rounded-2xl shadow-2xl p-4 min-w-[110px] text-center border border-slate-100 hidden sm:block animate-float">
                        <div class="font-heading text-2xl font-extrabold text-[var(--color-primary)]">15+</div>
                        <div class="text-[0.65rem] text-slate-500 font-bold uppercase tracking-wide">Years</div>
                    </div>
                    <div class="absolute -bottom-5 -left-5 bg-white rounded-2xl shadow-2xl p-4 min-w-[110px] text-center border border-slate-100 hidden sm:block animate-float" style="animation-delay:0.4s">
                        <div class="font-heading text-2xl font-extrabold text-[var(--color-accent)]">6</div>
                        <div class="text-[0.65rem] text-slate-500 font-bold uppercase tracking-wide">Services</div>
                    </div>
                    <div class="absolute top-1/2 -left-10 -translate-y-1/2 bg-white rounded-2xl shadow-2xl p-4 min-w-[110px] text-center border border-slate-100 hidden lg:block animate-float" style="animation-delay:0.8s">
                        <div class="font-heading text-2xl font-extrabold text-emerald-600">Bihar</div>
                        <div class="text-[0.65rem] text-slate-500 font-bold uppercase tracking-wide">All Bihar</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     NEW: PARTNER / AUTHORIZED PARTNER STRIP
═══════════════════════════════════════════════════════════ --}}
<div class="bg-white border-b border-slate-100 py-4 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-8">
            <span class="shrink-0 text-[0.65rem] font-extrabold tracking-widest uppercase text-slate-400 whitespace-nowrap">Authorized Partner Of</span>
            <div class="flex flex-wrap items-center gap-x-8 gap-y-2 justify-center sm:justify-start">
                <span class="flex items-center gap-2 text-sm font-bold text-slate-700">
                    <span class="w-2 h-2 rounded-full bg-amber-400 shrink-0"></span>Apollo Tyres
                </span>
                <span class="flex items-center gap-2 text-sm font-bold text-slate-700">
                    <span class="w-2 h-2 rounded-full bg-blue-400 shrink-0"></span>Star Health Insurance
                </span>
                <span class="flex items-center gap-2 text-sm font-bold text-slate-700">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 shrink-0"></span>Govt. PUC Authority
                </span>
                <span class="flex items-center gap-2 text-sm font-bold text-slate-700">
                    <span class="w-2 h-2 rounded-full bg-purple-400 shrink-0"></span>Bihar Transport Dept.
                </span>
                <span class="flex items-center gap-2 text-sm font-bold text-slate-700">
                    <span class="w-2 h-2 rounded-full bg-rose-400 shrink-0"></span>IRDAI Registered
                </span>
            </div>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════
     2. KEY METRICS STRIP (Float above next section)
═══════════════════════════════════════════════════════════ --}}
<div class="relative z-20 -mt-0 py-6 bg-[var(--color-bg-soft)] border-b border-slate-100">
    <div class="max-w-6xl mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-2xl border border-slate-100 overflow-hidden grid grid-cols-2 lg:grid-cols-4 divide-y lg:divide-y-0 lg:divide-x divide-slate-100 -mt-16">
            @foreach($stats as $i => $stat)
            <div class="relative text-center p-6 sm:p-8 group reveal delay-{{ $i + 1 }} overflow-hidden">
                {{-- Gradient top border --}}
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-accent)] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <span class="count-up block font-heading text-4xl sm:text-5xl font-extrabold text-[var(--color-primary)] leading-none mb-1">
                    {{ $stat['value'] }}
                </span>
                <span class="block text-sm font-bold text-[var(--color-ink)] hindi">{{ $stat['label'] }}</span>
                @if(!empty($stat['sublabel']))
                <span class="block text-xs text-slate-400 mt-1">{{ $stat['sublabel'] }}</span>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════
     3. SERVICES OVERVIEW (Interactive Grid with Dot Pattern)
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 relative overflow-hidden" style="background-color: var(--color-bg-soft);">
    {{-- Dot pattern --}}
    <div class="absolute inset-0 pointer-events-none opacity-30" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="dots" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.2" fill="#c7d2e8"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#dots)"/>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="badge-gold mb-3">Our Comprehensive Portfolio</span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-[var(--color-ink)] mt-2">
                    हमारी प्रमुख सेवाएँ <span class="text-[var(--color-primary)]">/ Vertical Services</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mt-3 text-base sm:text-lg hindi leading-relaxed">
                    एक छत के नीचे Transport, Insurance, Medicine Wholesale, Commercial Space Rental, Apollo Tyres, और Govt Authorized PUC Testing की सम्पूर्ण सुविधा।
                </p>
            </div>
            <a href="{{ route('services.index') }}" class="btn-outline shrink-0 self-start md:self-auto">
                View All Services →
            </a>
        </div>

        {{-- 6 Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $idx => $srv)
            <div class="group flex flex-col h-full bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal delay-{{ ($idx % 3) + 1 }}">
                {{-- Top Image --}}
                <div class="relative aspect-video overflow-hidden bg-slate-900">
                    <img
                        src="{{ $srv['image'] }}"
                        alt="{{ $srv['name'] }} – Trade of Anand"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-ink)]/70 via-[var(--color-ink)]/20 to-transparent opacity-70 group-hover:opacity-50 transition-opacity"></div>

                    {{-- Service Number Tag --}}
                    <div class="absolute top-4 left-4 px-3 py-1.5 rounded-lg bg-white/95 backdrop-blur-md shadow-sm">
                        <span class="font-heading font-extrabold text-[var(--color-primary)] text-sm tracking-wide">{{ str_pad($idx + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>

                    {{-- Colored top-border animation on hover --}}
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-accent)] transform -translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>

                    {{-- Tagline pill --}}
                    <div class="absolute bottom-4 left-4 right-4">
                        <span class="inline-block text-xs font-semibold text-[var(--color-accent-light)] hindi bg-[var(--color-ink)]/70 backdrop-blur-md px-3 py-1 rounded-full border border-white/10">
                            {{ $srv['tagline'] }}
                        </span>
                    </div>
                </div>

                {{-- Card Content --}}
                <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-[var(--color-ink)] mb-3 group-hover:text-[var(--color-primary)] transition-colors">
                            {{ $srv['name'] }}
                        </h3>
                        <p class="text-sm text-slate-600 hindi leading-relaxed mb-6">
                            {{ $srv['short_desc'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-[var(--color-primary)] group-hover:text-[var(--color-accent)] transition-colors flex items-center gap-1.5">
                            Learn More <span class="transition-transform group-hover:translate-x-1 inline-block">→</span>
                        </span>
                        <a href="{{ route('services.show', $srv['slug']) }}" class="stretched-link" aria-label="View {{ $srv['name'] }}"></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     4. ABOUT / WHO WE ARE (Split Layout with Badges)
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 bg-white relative overflow-hidden">
    {{-- Subtle background shape --}}
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-slate-50 to-transparent pointer-events-none" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            {{-- Image Left (5 cols) --}}
            <div class="lg:col-span-5 relative reveal">
                <div class="relative mx-auto rounded-2xl overflow-hidden border border-slate-200 shadow-2xl">
                    <img
                        src="/images/services/about-team.jpg"
                        alt="Trade of Anand Leadership & Operations"
                        class="w-full aspect-[4/3] object-cover"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-tr from-[var(--color-primary)]/20 to-transparent"></div>
                </div>

                {{-- Floating Experience Badge --}}
                <div class="absolute -bottom-8 -right-4 sm:-right-8 bg-white p-5 rounded-2xl shadow-2xl border border-slate-100 max-w-xs hidden sm:flex items-center gap-4 animate-float">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[var(--color-accent)] to-amber-500 text-[var(--color-ink)] flex items-center justify-center font-heading font-extrabold text-2xl shrink-0 shadow-lg">15+</div>
                    <div>
                        <div class="text-sm font-bold text-[var(--color-ink)]">Years of Trust</div>
                        <div class="text-xs text-slate-500">Established in 2011</div>
                    </div>
                </div>

                {{-- Floating Top-Left Badge --}}
                <div class="absolute -top-5 -left-4 sm:-left-8 bg-[var(--color-primary)] text-white p-4 rounded-2xl shadow-2xl hidden sm:block animate-float" style="animation-delay:0.5s">
                    <div class="text-xl font-extrabold font-heading">6</div>
                    <div class="text-[0.6rem] font-bold uppercase tracking-wider opacity-80">Sectors</div>
                </div>
            </div>

            {{-- Text Right (7 cols) --}}
            <div class="lg:col-span-7">
                <span class="badge-gold mb-3">Legacy of Excellence</span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-[var(--color-ink)] mt-2 mb-5 leading-tight">
                    एक समूह – अनेक सेवाएँ<br>
                    <span class="text-[var(--color-primary)]">समर्पित नेतृत्व और पारदर्शी कार्यशैली</span>
                </h2>

                {{-- Mission Blockquote --}}
                <blockquote class="relative pl-6 border-l-4 border-[var(--color-accent)] bg-amber-50/60 rounded-r-xl py-4 pr-4 mb-6">
                    <p class="text-base font-semibold text-slate-700 hindi leading-relaxed italic m-0">
                        "हमारा उद्देश्य है — प्रत्येक ग्राहक को सर्वोत्तम सेवा, न्यायसंगत मूल्य और दीर्घकालिक विश्वास प्रदान करना।"
                    </p>
                    <cite class="block text-xs text-slate-400 mt-2 not-italic font-bold">— Trade of Anand, Vision Statement</cite>
                </blockquote>

                <p class="text-base sm:text-lg text-slate-700 mb-5 hindi leading-relaxed">
                    <strong>{{ config('site.formerly') }}</strong> के नाम से शुरू हुई यह प्रतिष्ठित यात्रा आज <strong>{{ config('site.name') }}</strong> के रूप में पूरे बिहार में विश्वसनीयता का प्रतीक बन चुकी है।
                </p>

                {{-- 4 Checkmark Features --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 font-bold text-xs mt-0.5">✓</div>
                        <span class="text-sm font-semibold text-slate-800 hindi">24×7 समर्पित ग्राहक सेवा और परामर्श</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 font-bold text-xs mt-0.5">✓</div>
                        <span class="text-sm font-semibold text-slate-800 hindi">सरकार एवं एसोसिएशन द्वारा मान्यता प्राप्त</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 font-bold text-xs mt-0.5">✓</div>
                        <span class="text-sm font-semibold text-slate-800 hindi">आधुनिक तकनीकी समाधान व त्वरित बिलिंग</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 font-bold text-xs mt-0.5">✓</div>
                        <span class="text-sm font-semibold text-slate-800 hindi">पारदर्शी एवं उचित मूल्य नीति</span>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('team.show') }}" class="btn-primary" id="about-team-btn">
                        हमारी Team से मिलें →
                    </a>
                    <a href="{{ route('contact.show') }}" class="btn-outline">
                        कार्यालय का पता व संपर्क
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     NEW: HOW WE WORK — 4-Step Process Section
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-[var(--color-bg-soft)] relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none opacity-20" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="process-dots" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1" fill="#b8c8e0"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#process-dots)"/>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-14">
            <span class="badge-navy mb-3">Simple & Transparent</span>
            <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-[var(--color-ink)] mt-2 mb-3">
                How We Work
            </h2>
            <p class="text-slate-500 text-base sm:text-lg max-w-xl mx-auto hindi">
                हमारी सेवा प्रक्रिया सरल, पारदर्शी और ग्राहक-केंद्रित है।
            </p>
        </div>

        {{-- Desktop: Horizontal Stepper | Mobile: Vertical --}}
        <div class="relative">
            {{-- Dotted connector line (desktop only) --}}
            <div class="hidden lg:block absolute top-10 left-[12.5%] right-[12.5%] h-0 border-t-2 border-dashed border-[var(--color-primary)]/30 z-0"></div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 lg:gap-6 relative z-10">

                {{-- Step 1: Enquire --}}
                <div class="flex lg:flex-col items-start lg:items-center gap-6 lg:gap-0 reveal delay-1">
                    <div class="lg:mb-6 shrink-0">
                        <div class="w-20 h-20 rounded-2xl bg-[var(--color-primary)] text-white flex items-center justify-center shadow-lg shadow-[var(--color-primary)]/30 relative">
                            <svg class="w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-3 3-3-3z"/></svg>
                            <span class="absolute -top-3 -right-3 w-7 h-7 rounded-full bg-[var(--color-accent)] text-[var(--color-ink)] font-heading font-extrabold text-xs flex items-center justify-center shadow">01</span>
                        </div>
                    </div>
                    <div class="lg:text-center">
                        <h4 class="font-heading text-lg font-bold text-[var(--color-ink)] mb-2">Enquire</h4>
                        <p class="text-sm text-slate-500 hindi leading-relaxed">कॉल, WhatsApp, या ऑनलाइन फॉर्म के जरिए हमसे सम्पर्क करें।</p>
                    </div>
                </div>

                {{-- Step 2: Consultation --}}
                <div class="flex lg:flex-col items-start lg:items-center gap-6 lg:gap-0 reveal delay-2">
                    <div class="lg:mb-6 shrink-0">
                        <div class="w-20 h-20 rounded-2xl bg-[var(--color-accent)] text-[var(--color-ink)] flex items-center justify-center shadow-lg shadow-amber-400/30 relative">
                            <svg class="w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
                            <span class="absolute -top-3 -right-3 w-7 h-7 rounded-full bg-[var(--color-primary)] text-white font-heading font-extrabold text-xs flex items-center justify-center shadow">02</span>
                        </div>
                    </div>
                    <div class="lg:text-center">
                        <h4 class="font-heading text-lg font-bold text-[var(--color-ink)] mb-2">Consultation</h4>
                        <p class="text-sm text-slate-500 hindi leading-relaxed">हमारे विशेषज्ञ आपकी आवश्यकता का विश्लेषण कर सर्वोत्तम समाधान प्रस्तुत करते हैं।</p>
                    </div>
                </div>

                {{-- Step 3: Service Delivery --}}
                <div class="flex lg:flex-col items-start lg:items-center gap-6 lg:gap-0 reveal delay-3">
                    <div class="lg:mb-6 shrink-0">
                        <div class="w-20 h-20 rounded-2xl bg-emerald-600 text-white flex items-center justify-center shadow-lg shadow-emerald-600/30 relative">
                            <svg class="w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span class="absolute -top-3 -right-3 w-7 h-7 rounded-full bg-[var(--color-accent)] text-[var(--color-ink)] font-heading font-extrabold text-xs flex items-center justify-center shadow">03</span>
                        </div>
                    </div>
                    <div class="lg:text-center">
                        <h4 class="font-heading text-lg font-bold text-[var(--color-ink)] mb-2">Service Delivery</h4>
                        <p class="text-sm text-slate-500 hindi leading-relaxed">समयबद्ध, पारदर्शी और उच्च गुणवत्ता के साथ सेवा का निष्पादन।</p>
                    </div>
                </div>

                {{-- Step 4: After-Support --}}
                <div class="flex lg:flex-col items-start lg:items-center gap-6 lg:gap-0 reveal delay-4">
                    <div class="lg:mb-6 shrink-0">
                        <div class="w-20 h-20 rounded-2xl bg-violet-600 text-white flex items-center justify-center shadow-lg shadow-violet-600/30 relative">
                            <svg class="w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            <span class="absolute -top-3 -right-3 w-7 h-7 rounded-full bg-[var(--color-accent)] text-[var(--color-ink)] font-heading font-extrabold text-xs flex items-center justify-center shadow">04</span>
                        </div>
                    </div>
                    <div class="lg:text-center">
                        <h4 class="font-heading text-lg font-bold text-[var(--color-ink)] mb-2">After-Support</h4>
                        <p class="text-sm text-slate-500 hindi leading-relaxed">सेवा के बाद भी हम आपके साथ हैं — फॉलो-अप, रिन्यूअल और निरंतर सहायता।</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     5. POULTRY & LOGISTICS INTEGRATION (Dark Mesh Section)
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 bg-mesh-dark text-white relative overflow-hidden">
    {{-- Geometric overlay --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <svg class="absolute inset-0 w-full h-full opacity-[0.05]" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="dark-grid" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 60" fill="none" stroke="#ffffff" stroke-width="0.8"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#dark-grid)"/>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

        {{-- Marquee Ticker --}}
        <div class="mb-14 overflow-hidden border-y border-white/10 py-3">
            <div class="marquee-track flex gap-12 whitespace-nowrap text-xs font-bold uppercase tracking-widest text-white/40">
                @foreach($poultry as $client)
                @if($client['confirmed'])
                <span class="shrink-0">{{ $client['company'] }}</span>
                <span class="shrink-0 text-[var(--color-accent)]">·</span>
                @endif
                @endforeach
                {{-- Duplicate for seamless loop --}}
                @foreach($poultry as $client)
                @if($client['confirmed'])
                <span class="shrink-0">{{ $client['company'] }}</span>
                <span class="shrink-0 text-[var(--color-accent)]">·</span>
                @endif
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

            {{-- Left: Headline + stats + CTA --}}
            <div class="lg:col-span-5 reveal">
                <span class="badge-gold mb-3">Industry Leadership</span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-white mt-2 mb-6 leading-tight">
                    Poultry Integration Feed Delivery में<br>
                    <span class="text-[var(--color-accent)]">विश्वसनीय अनुभव</span>
                </h2>
                <p class="text-slate-300 text-base sm:text-lg mb-8 hindi leading-relaxed">
                    2016 से निरंतर Bihar के प्रमुख पोल्ट्री कंपनियों और किसानों के साथ निर्बाध फीड डिलीवरी, हाई-स्पीड कार्गो मूवमेंट और सुरक्षित फ्रेट प्रबंधन।
                </p>

                {{-- Stats Highlight Box --}}
                <div class="p-6 rounded-xl bg-white/5 border border-white/10 backdrop-blur-md mb-8 space-y-4">
                    <div>
                        <div class="font-heading text-3xl font-bold text-[var(--color-accent-light)]">100%</div>
                        <div class="text-xs text-slate-400 font-bold uppercase tracking-wide mt-0.5">On-Time Delivery Record</div>
                    </div>
                    <div class="border-t border-white/10 pt-4">
                        <p class="text-xs text-slate-400 hindi leading-relaxed">सख्त समय-सारणी, जीपीएस ट्रैक्ड फ्लीट और प्रशिक्षित ड्राइवर्स के साथ सुरक्षित परिवहन।</p>
                    </div>
                </div>

                <a href="{{ route('contact.show') }}" class="btn-accent" id="poultry-team-btn">
                    लॉजिस्टिक्स साझेदारी हेतु संपर्क करें →
                </a>
            </div>

            {{-- Right: Client cards grid --}}
            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($poultry as $client)
                    @if($client['confirmed'])
                    <div class="card-premium-dark p-6 reveal">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-bold text-[var(--color-accent)] uppercase tracking-wider">{{ $client['year'] }}</span>
                            <span class="flex items-center gap-1.5 text-[0.65rem] font-bold text-emerald-400 uppercase tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>Active
                            </span>
                        </div>
                        <h4 class="font-heading text-xl font-bold text-white mb-2">{{ $client['company'] }}</h4>
                        <p class="text-xs text-slate-400 hindi leading-relaxed">Integration Feed Transport &amp; Distribution Network across Bihar</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     6. WHY CHOOSE US (SVG Icons + Trust Bar)
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 bg-[var(--color-bg-soft)]">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="badge-navy mb-3">Why Partner With Us</span>
            <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-[var(--color-ink)] mt-2 mb-4">
                ग्राहकों की पहली पसंद क्यों है Trade of Anand?
            </h2>
            <p class="text-slate-600 text-base sm:text-lg hindi">
                Samastipur, Bihar में 15+ वर्षों से सत्यनिष्ठा, व्यक्तिगत मार्गदर्शन और समयबद्ध डिलीवरी।
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($why_choose as $index => $item)
            <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group reveal delay-{{ ($index % 3) + 1 }}">
                {{-- SVG Icon wrapper --}}
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[var(--color-primary)] to-[#0d1726] text-white flex items-center justify-center shadow-md mb-6 group-hover:scale-110 transition-transform duration-300">
                    @if($index === 0)
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    @elseif($index === 1)
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    @elseif($index === 2)
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    @elseif($index === 3)
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                    @elseif($index === 4)
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    @else
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                    @endif
                </div>
                <h3 class="font-heading text-xl font-bold text-[var(--color-ink)] mb-3 hindi">{{ $item['title'] }}</h3>
                <p class="text-sm text-slate-600 hindi leading-relaxed">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- Trust Bar --}}
        <div class="mt-16 p-6 bg-white rounded-2xl border border-slate-100 shadow-sm">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="text-center sm:text-left">
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Verified &amp; Certified</p>
                    <p class="text-sm font-semibold text-slate-700 hindi">सरकारी और संस्थागत प्रमाणन के साथ सुरक्षित सेवाएँ</p>
                </div>
                <div class="flex flex-wrap items-center gap-4 justify-center">
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-100">
                        <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-xs font-bold text-blue-700">Govt. Authorized</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 border border-amber-100">
                        <svg class="w-4 h-4 text-amber-600" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <span class="text-xs font-bold text-amber-700">Apollo Authorized</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 border border-emerald-100">
                        <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-xs font-bold text-emerald-700">IRDAI Registered</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-violet-50 border border-violet-100">
                        <svg class="w-4 h-4 text-violet-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zm11-1a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd"/></svg>
                        <span class="text-xs font-bold text-violet-700">PUC Certified</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     7. LEADERSHIP SPOTLIGHT (Team Cards with Expertise Tags)
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="badge-gold mb-3">Leadership &amp; Vision</span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-[var(--color-ink)] mt-2">
                    हमारा नेतृत्व मंडल <span class="text-[var(--color-primary)]">/ Executive Team</span>
                </h2>
                <p class="text-slate-600 text-base sm:text-lg mt-3 hindi">
                    अनुभवी नेतृत्व के मार्गदर्शन में प्रत्येक व्यवसाय क्षेत्र में उत्कृष्टता और विश्वसनीयता।
                </p>
            </div>
            <a href="{{ route('team.show') }}" class="btn-outline shrink-0">
                View Full Team Profiles →
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($team as $idx => $member)
            <div class="group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal delay-{{ $idx + 1 }}">
                <div class="aspect-[4/5] overflow-hidden bg-slate-900 relative">
                    <img
                        src="{{ $member['image'] }}"
                        alt="{{ $member['name'] }} – {{ $member['designation'] }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-ink)] via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>

                    <div class="absolute bottom-4 left-4 right-4">
                        <span class="badge-gold text-[0.65rem] py-0.5 px-2 bg-white/95">
                            {{ $member['designation'] }}
                        </span>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-[var(--color-ink)] mb-1">
                        {{ $member['name'] }}
                    </h3>
                    <p class="text-xs text-slate-500 mb-3">{{ $member['designation'] }}</p>

                    {{-- Expertise Tags --}}
                    <div class="flex flex-wrap gap-1.5 mb-4">
                        @if($idx === 0)
                        <span class="px-2 py-0.5 rounded-full bg-blue-50 text-blue-700 text-[0.6rem] font-bold border border-blue-100">Transport</span>
                        <span class="px-2 py-0.5 rounded-full bg-amber-50 text-amber-700 text-[0.6rem] font-bold border border-amber-100">Logistics</span>
                        @elseif($idx === 1)
                        <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-[0.6rem] font-bold border border-emerald-100">Insurance</span>
                        <span class="px-2 py-0.5 rounded-full bg-violet-50 text-violet-700 text-[0.6rem] font-bold border border-violet-100">Health</span>
                        @elseif($idx === 2)
                        <span class="px-2 py-0.5 rounded-full bg-rose-50 text-rose-700 text-[0.6rem] font-bold border border-rose-100">Tyres</span>
                        <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-700 text-[0.6rem] font-bold border border-slate-200">Sales</span>
                        @else
                        <span class="px-2 py-0.5 rounded-full bg-blue-50 text-blue-700 text-[0.6rem] font-bold border border-blue-100">Medicine</span>
                        <span class="px-2 py-0.5 rounded-full bg-green-50 text-green-700 text-[0.6rem] font-bold border border-green-100">Wholesale</span>
                        @endif
                    </div>

                    <div class="pt-3 border-t border-slate-100 flex items-center gap-2">
                        <a href="tel:+91{{ $member['phone'] }}" class="btn-primary text-xs py-2 px-3 flex-1">
                            Call
                        </a>
                        <a href="https://wa.me/91{{ $member['phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="btn-whatsapp text-xs py-2 px-3 flex-1" target="_blank">
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     8. GALLERY SHOWCASE (Masonry-style Grid)
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 bg-[var(--color-bg-soft)]">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="badge-navy mb-3">Visual Highlights</span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-[var(--color-ink)] mt-2">
                    हमारी झलकियाँ <span class="text-[var(--color-primary)]">/ Gallery</span>
                </h2>
                <p class="text-slate-600 text-base sm:text-lg mt-3 hindi">
                    हमारे कार्यालय, ट्रांसपोर्ट फ्लीट, अपोलो टायर शोरूम और मेडिकल स्टोर की वास्तविक तस्वीरें।
                </p>
            </div>
            <a href="{{ route('gallery.show') }}" class="btn-outline shrink-0">
                Explore All 12 Photos →
            </a>
        </div>

        {{-- Masonry-style: 3 cols desktop, 2 tablet, 1 mobile --}}
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-5 space-y-5">
            @foreach(array_slice($gallery, 0, 6) as $idx => $img)
            <div class="group relative overflow-hidden rounded-2xl cursor-pointer break-inside-avoid bg-slate-900 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 reveal delay-{{ ($idx % 3) + 1 }}">
                <img
                    src="{{ $img['src'] }}"
                    alt="{{ $img['alt'] }}"
                    class="w-full object-cover transition-transform duration-700 group-hover:scale-110 {{ $idx % 3 === 1 ? 'aspect-[4/5]' : 'aspect-[4/3]' }}"
                    loading="lazy"
                >
                {{-- Caption overlay on hover --}}
                <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-ink)]/90 via-[var(--color-ink)]/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-5">
                    <span class="text-white text-sm font-semibold leading-tight hindi mb-1">{{ $img['caption'] }}</span>
                    <span class="text-[var(--color-accent-light)] text-[0.65rem] uppercase font-bold tracking-widest">View Photo →</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     9. FAQ (Refined Accordion)
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

            {{-- Left sidebar --}}
            <div class="lg:col-span-4 reveal">
                <span class="badge-gold mb-3">Clear Answers</span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-[var(--color-ink)] mt-2 mb-4 leading-tight">
                    अक्सर पूछे जाने वाले सवाल
                </h2>
                <p class="text-slate-600 text-base hindi mb-8 leading-relaxed">
                    Trade of Anand की विभिन्न सेवाओं, दरों एवं संपर्क प्रक्रियाओं से संबंधित सामान्य प्रश्न।
                </p>

                <div class="p-6 rounded-2xl bg-gradient-to-br from-[var(--color-primary)] to-[#0d1f3c] text-white">
                    <div class="w-10 h-10 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-3 3-3-3z"/></svg>
                    </div>
                    <h4 class="font-heading text-lg font-bold mb-2 hindi">कोई अन्य सवाल है?</h4>
                    <p class="text-xs text-white/70 hindi mb-5 leading-relaxed">हमारी टीम आपकी सहायता के लिए हमेशा उपलब्ध है।</p>
                    <a href="tel:+91{{ config('site.phone_primary') }}" class="inline-flex items-center gap-2 w-full justify-center px-4 py-3 rounded-xl bg-white text-[var(--color-primary)] font-bold text-sm hover:bg-amber-50 transition-colors">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        सीधे बात करें
                    </a>
                </div>
            </div>

            {{-- FAQ Accordion --}}
            <div class="lg:col-span-8 space-y-3" itemscope itemtype="https://schema.org/FAQPage">
                @foreach($faqs as $index => $faq)
                <div class="faq-item bg-white rounded-2xl border border-slate-200 overflow-hidden transition-all hover:border-[var(--color-primary)]/30 hover:shadow-md" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="w-full flex justify-between items-center text-left px-6 py-5 font-semibold text-[var(--color-ink)] bg-transparent border-0 cursor-pointer gap-4 group" aria-expanded="false" id="faq-q-{{ $index }}">
                        <span itemprop="name" class="font-heading text-base sm:text-lg font-bold group-hover:text-[var(--color-primary)] transition-colors hindi">{{ $faq['q'] }}</span>
                        <div class="w-9 h-9 rounded-xl bg-slate-100 flex items-center justify-center shrink-0 group-hover:bg-[var(--color-primary)]/10 transition-colors">
                            <svg class="faq-icon w-4 h-4 text-[var(--color-accent)] transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </button>
                    <div class="faq-answer hidden px-6 pb-5 text-sm sm:text-base text-slate-600 leading-relaxed hindi border-t border-slate-100" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0 pt-4">{{ $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- Marquee CSS + Count-up + FAQ JS --}}
<style>
    @keyframes marquee {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }
    .marquee-track {
        animation: marquee 30s linear infinite;
        will-change: transform;
    }
    .marquee-track:hover {
        animation-play-state: paused;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50%       { transform: translateY(-8px); }
    }
    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {

    /* ── FAQ Accordion ── */
    document.querySelectorAll('.faq-item button').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item   = this.closest('.faq-item');
            var answer = item.querySelector('.faq-answer');
            var icon   = item.querySelector('.faq-icon');
            var isOpen = !answer.classList.contains('hidden');

            // close all
            document.querySelectorAll('.faq-item').forEach(function(el) {
                el.querySelector('.faq-answer').classList.add('hidden');
                el.querySelector('button').setAttribute('aria-expanded', 'false');
                var ic = el.querySelector('.faq-icon');
                ic.style.transform = 'rotate(0deg)';
            });

            if (!isOpen) {
                answer.classList.remove('hidden');
                this.setAttribute('aria-expanded', 'true');
                icon.style.transform = 'rotate(45deg)';
            }
        });
    });

    /* ── Count-Up Animation ── */
    var counters = document.querySelectorAll('.count-up');
    var observed = false;
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !observed) {
                    observed = true;
                    counters.forEach(function(el) {
                        var text   = el.textContent.trim();
                        var suffix = text.replace(/[\d,\.]/g, '');
                        var num    = parseFloat(text.replace(/[^\d\.]/g, ''));
                        if (isNaN(num)) return;
                        var start    = 0;
                        var duration = 1600;
                        var startTime = null;
                        function step(ts) {
                            if (!startTime) startTime = ts;
                            var progress = Math.min((ts - startTime) / duration, 1);
                            var val = Math.floor(progress * num);
                            el.textContent = val + suffix;
                            if (progress < 1) requestAnimationFrame(step);
                            else el.textContent = text;
                        }
                        requestAnimationFrame(step);
                    });
                }
            });
        }, { threshold: 0.3 });
        if (counters.length) observer.observe(counters[0].closest('div'));
    }

});
</script>

@endsection

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": ["Organization", "LocalBusiness"],
    "name": "{{ config('site.name') }}",
    "alternateName": "{{ config('site.formerly') }}",
    "url": "{{ url('/') }}",
    "logo": "{{ url(config('site.og_image')) }}",
    "image": "{{ url(config('site.og_image')) }}",
    "description": "{{ addslashes(config('site.description')) }}",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Mushrigharari",
        "addressLocality": "Samastipur",
        "addressRegion": "Bihar",
        "addressCountry": "IN"
    },
    "telephone": "+91{{ config('site.phone_primary') }}",
    "email": "{{ config('site.email_primary') }}",
    "areaServed": "Samastipur, Bihar, India",
    "openingHours": "Mo-Sa 09:00-19:00"
}
</script>
@endpush
