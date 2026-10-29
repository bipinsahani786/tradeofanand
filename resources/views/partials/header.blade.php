@php $cr = Route::currentRouteName(); @endphp

{{-- ============================================================
     TRADE OF ANAND — REDESIGNED HEADER
     Sections: Announcement Bar · Main Header · Mobile Menu
     ============================================================ --}}

<style>
/* ── Announcement bar ── */
#announcement-bar {
    background: linear-gradient(90deg, var(--color-primary) 0%, #1e4a8a 50%, var(--color-primary) 100%);
    background-size: 200% 100%;
    animation: shimmer-bar 6s linear infinite;
}
@keyframes shimmer-bar {
    0%   { background-position: 200% center; }
    100% { background-position: -200% center; }
}

/* ── Header scroll compact ── */
#site-header { transition: box-shadow .25s ease, background .25s ease; }
#site-header.is-compact {
    box-shadow: 0 4px 24px rgba(0,0,0,.10);
    background: rgba(255,255,255,.98);
}

/* ── Nav link hover underline ── */
.nav-link {
    position: relative;
    padding-bottom: 2px;
}
.nav-link::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 50%;
    right: 50%;
    height: 2px;
    background: var(--color-accent);
    border-radius: 9999px;
    transition: left .25s ease, right .25s ease;
}
.nav-link:hover::after,
.nav-link.is-active::after {
    left: 0;
    right: 0;
}
.nav-link.is-active {
    color: var(--color-primary);
    font-weight: 700;
}

/* ── Logo monogram ring ── */
.logo-ring {
    background: linear-gradient(135deg, #1b365d 0%, #0d1726 60%, #1b365d 100%);
    box-shadow: 0 0 0 3px rgba(255,255,255,.15), 0 0 0 6px rgba(var(--color-accent-rgb, 245,166,35),.20), 0 8px 24px rgba(13,23,38,.35);
    transition: transform .25s ease, box-shadow .25s ease;
}
.logo-ring:hover,
a:hover .logo-ring {
    transform: scale(1.06) rotate(-3deg);
    box-shadow: 0 0 0 3px rgba(255,255,255,.25), 0 0 0 8px rgba(var(--color-accent-rgb, 245,166,35),.30), 0 12px 32px rgba(13,23,38,.40);
}

/* ── Mega dropdown ── */
.mega-dropdown {
    opacity: 0;
    visibility: hidden;
    transform: translateY(8px);
    transition: opacity .2s ease, transform .2s ease, visibility .2s;
}
.services-trigger:hover .mega-dropdown,
.services-trigger:focus-within .mega-dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}
.service-card {
    transition: background .18s ease, transform .18s ease;
}
.service-card:hover {
    background: var(--color-bg-soft, #f8f9fb);
    transform: translateX(3px);
}

/* ── Hamburger animated icon ── */
.ham-line {
    display: block;
    width: 22px;
    height: 2px;
    background: var(--color-ink);
    border-radius: 9999px;
    transition: transform .3s ease, opacity .3s ease, width .3s ease;
    transform-origin: center;
}
#hamburger-btn.is-open .ham-line:nth-child(1) { transform: translateY(7px) rotate(45deg); }
#hamburger-btn.is-open .ham-line:nth-child(2) { opacity: 0; width: 0; }
#hamburger-btn.is-open .ham-line:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* ── Mobile menu slide ── */
#mobile-menu {
    max-height: 0;
    overflow: hidden;
    transition: max-height .38s cubic-bezier(.4,0,.2,1), opacity .3s ease;
    opacity: 0;
}
#mobile-menu.is-open {
    max-height: 90vh;
    opacity: 1;
    overflow-y: auto;
}

/* ── Mobile services accordion ── */
#mobile-services-panel {
    max-height: 0;
    overflow: hidden;
    transition: max-height .3s ease;
}
#mobile-services-panel.is-open {
    max-height: 500px;
}
</style>

{{-- ══════════════════════════════════════════════
     TOP ANNOUNCEMENT BAR  (desktop only)
     ══════════════════════════════════════════════ --}}
<div id="announcement-bar" class="hidden lg:block text-white text-xs py-2 px-4">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
        {{-- Left: business hours --}}
        <div class="flex items-center gap-1.5 opacity-90">
            <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
            </svg>
            <span>Mon – Sat: 9:00 AM – 7:00 PM &nbsp;|&nbsp; Sun: Closed</span>
        </div>

        {{-- Centre: trust badges --}}
        <div class="flex items-center gap-4">
            <span class="flex items-center gap-1 opacity-85">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Est. 2011
            </span>
            <span class="opacity-40">|</span>
            <span class="flex items-center gap-1 opacity-85">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                GST Registered
            </span>
            <span class="opacity-40">|</span>
            <span class="flex items-center gap-1 opacity-85">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                Samastipur, Bihar
            </span>
        </div>

        {{-- Right: quick contact --}}
        <div class="flex items-center gap-4 shrink-0">
            <a href="tel:+91{{ config('site.phone_primary') }}" class="flex items-center gap-1.5 hover:text-[var(--color-accent)] transition-colors">
                <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.99 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.92 1.22h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                </svg>
                +91 {{ config('site.phone_primary') }}
            </a>
            @if(config('site.email_primary'))
            <a href="mailto:{{ config('site.email_primary') }}" class="flex items-center gap-1.5 hover:text-[var(--color-accent)] transition-colors opacity-90">
                <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                {{ config('site.email_primary') }}
            </a>
            @endif
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════════
     MAIN HEADER
     ══════════════════════════════════════════════ --}}
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-[var(--color-line)]" id="site-header">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <div class="flex items-center justify-between h-20 gap-6">

            {{-- ── Brand Logo ── --}}
            <a href="{{ route('home') }}"
               class="shrink-0 group flex items-center gap-4"
               aria-label="{{ config('site.name') }} Home">

                {{-- Monogram with multi-ring glow --}}
                <div class="logo-ring w-14 h-14 rounded-xl flex items-center justify-center relative">
                    <span class="font-heading text-3xl font-extrabold text-[var(--color-accent)] drop-shadow-sm leading-none select-none">A</span>
                    {{-- Inner shine --}}
                    <span class="absolute top-1 right-1 w-2.5 h-2.5 rounded-full bg-white/10"></span>
                </div>

                <div class="flex flex-col">
                    <span class="font-heading text-xl sm:text-2xl font-extrabold text-[var(--color-ink)] tracking-tight leading-none group-hover:text-[var(--color-primary)] transition-colors">
                        TRADE OF ANAND
                    </span>
                    <span class="text-[0.67rem] text-slate-500 font-medium tracking-wide mt-1 leading-none flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-[var(--color-accent)] animate-pulse shrink-0"></span>
                        Multi-Sector Enterprise &middot; Est.&nbsp;2011
                    </span>
                </div>
            </a>

            {{-- ── Desktop Navigation ── --}}
            <nav class="hidden lg:flex items-center gap-0.5 flex-1 justify-center" aria-label="Primary Navigation">

                {{-- Home --}}
                <a href="{{ route('home') }}"
                   class="nav-link {{ $cr === 'home' ? 'is-active' : '' }} px-4 py-2 text-sm font-semibold text-[var(--color-ink)] hover:text-[var(--color-primary)] transition-colors rounded-md">
                    Home
                </a>

                {{-- Services mega-dropdown --}}
                <div class="relative services-trigger">
                    <a href="{{ route('services.index') }}"
                       class="nav-link {{ str_starts_with($cr ?? '', 'services') ? 'is-active' : '' }} flex items-center gap-1 px-4 py-2 text-sm font-semibold text-[var(--color-ink)] hover:text-[var(--color-primary)] transition-colors rounded-md">
                        Services
                        <svg class="w-3.5 h-3.5 text-slate-400 services-trigger:hover:text-[var(--color-primary)] transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </a>

                    {{-- ── Mega Dropdown ── --}}
                    <div class="mega-dropdown absolute top-[calc(100%+10px)] left-1/2 -translate-x-1/2 w-[640px] bg-white rounded-2xl border border-[var(--color-line)] shadow-2xl z-50">
                        {{-- Header strip --}}
                        <div class="flex items-center justify-between px-5 py-3.5 border-b border-slate-100 bg-slate-50/80 rounded-t-2xl">
                            <div>
                                <p class="text-[0.72rem] font-bold uppercase tracking-widest text-slate-400">Our Business Verticals</p>
                                <p class="text-sm font-semibold text-[var(--color-ink)] mt-0.5">6 Trusted Service Divisions</p>
                            </div>
                            <a href="{{ route('services.index') }}" class="text-xs font-bold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors flex items-center gap-1 border border-[var(--color-primary)]/30 rounded-full px-3 py-1.5 hover:bg-[var(--color-primary)]/5">
                                View All
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                            </a>
                        </div>

                        {{-- Service grid --}}
                        <div class="grid grid-cols-2 gap-1 p-3">
                            @php
                                $serviceIcons = [
                                    'transport'       => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>',
                                    'insurance'       => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>',
                                    'medicine'        => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path d="M10 8H6a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2v-1"/><path d="M15 3h6v6"/><path d="M10 14h4"/><path d="M12 12v4"/><path d="M21 3l-6 6"/></svg>',
                                    'commercial'      => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
                                    'tyres'           => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><line x1="12" y1="3" x2="12" y2="9"/><line x1="12" y1="15" x2="12" y2="21"/><line x1="3" y1="12" x2="9" y2="12"/><line x1="15" y1="12" x2="21" y2="12"/></svg>',
                                    'puc'             => '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/></svg>',
                                ];
                                $serviceDescriptions = [
                                    'transport'  => 'Goods & passenger transport across Bihar',
                                    'insurance'  => 'Vehicle, health & life insurance plans',
                                    'medicine'   => 'Wholesale pharma supply & distribution',
                                    'commercial' => 'Premium rental spaces for businesses',
                                    'tyres'      => 'Authorised Apollo Tyres dealer & fitment',
                                    'puc'        => 'Govt. certified PUC emission testing centre',
                                ];
                                $colorMap = [
                                    'transport'  => 'text-blue-600 bg-blue-50',
                                    'insurance'  => 'text-emerald-600 bg-emerald-50',
                                    'medicine'   => 'text-rose-600 bg-rose-50',
                                    'commercial' => 'text-violet-600 bg-violet-50',
                                    'tyres'      => 'text-amber-600 bg-amber-50',
                                    'puc'        => 'text-teal-600 bg-teal-50',
                                ];
                            @endphp

                            @foreach(config('site.services') as $srv)
                            @php
                                $slug = $srv['slug'] ?? '';
                                $iconHtml = $serviceIcons[$slug] ?? $serviceIcons['puc'];
                                $desc = $serviceDescriptions[$slug] ?? '';
                                $colors = $colorMap[$slug] ?? 'text-slate-600 bg-slate-50';
                            @endphp
                            <a href="{{ route('services.show', $srv['slug']) }}"
                               class="service-card flex items-start gap-3.5 p-3.5 rounded-xl group/card">
                                <div class="shrink-0 w-10 h-10 rounded-lg flex items-center justify-center {{ $colors }}">
                                    {!! $iconHtml !!}
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-semibold text-[var(--color-ink)] group-hover/card:text-[var(--color-primary)] transition-colors leading-snug">{{ $srv['name'] }}</p>
                                    <p class="text-xs text-slate-500 mt-0.5 leading-snug">{{ $desc }}</p>
                                </div>
                                <svg class="w-4 h-4 text-slate-300 group-hover/card:text-[var(--color-primary)] group-hover/card:translate-x-0.5 transition-all shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                            </a>
                            @endforeach
                        </div>

                        {{-- Bottom footer strip --}}
                        <div class="px-5 py-3 border-t border-slate-100 bg-slate-50/50 rounded-b-2xl flex items-center justify-between">
                            <span class="text-xs text-slate-400">📍 Samastipur, Bihar &nbsp;·&nbsp; Serving since 2011</span>
                            <a href="{{ route('contact.show') }}" class="text-xs font-semibold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors flex items-center gap-1">
                                Get a Quote
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Contact --}}
                <a href="{{ route('contact.show') }}"
                   class="nav-link {{ $cr === 'contact.show' ? 'is-active' : '' }} px-4 py-2 text-sm font-semibold text-[var(--color-ink)] hover:text-[var(--color-primary)] transition-colors rounded-md">
                    Contact
                </a>

                {{-- Our Team --}}
                <a href="{{ route('team.show') }}"
                   class="nav-link {{ $cr === 'team.show' ? 'is-active' : '' }} px-4 py-2 text-sm font-semibold text-[var(--color-ink)] hover:text-[var(--color-primary)] transition-colors rounded-md">
                    Our Team
                </a>

                {{-- Gallery --}}
                <a href="{{ route('gallery.show') }}"
                   class="nav-link {{ $cr === 'gallery.show' ? 'is-active' : '' }} px-4 py-2 text-sm font-semibold text-[var(--color-ink)] hover:text-[var(--color-primary)] transition-colors rounded-md">
                    Gallery
                </a>
            </nav>

            {{-- ── Desktop CTA Area ── --}}
            <div class="hidden lg:flex items-center gap-3 shrink-0">
                {{-- Phone number text link --}}
                <a href="tel:+91{{ config('site.phone_primary') }}"
                   class="flex items-center gap-2 text-sm font-semibold text-[var(--color-ink)] hover:text-[var(--color-primary)] transition-colors group/phone">
                    <span class="w-8 h-8 rounded-full bg-[var(--color-primary)]/10 flex items-center justify-center group-hover/phone:bg-[var(--color-primary)]/20 transition-colors">
                        <svg class="w-3.5 h-3.5 text-[var(--color-primary)]" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.99 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.92 1.22h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                        </svg>
                    </span>
                    <span class="leading-none">+91 {{ config('site.phone_primary') }}</span>
                </a>

                {{-- Call CTA --}}
                <a href="tel:+91{{ config('site.phone_primary') }}"
                   class="btn-primary text-sm flex items-center gap-1.5"
                   id="header-call-btn">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.99 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.92 1.22h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    Call Now
                </a>

                {{-- WhatsApp CTA --}}
                <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}"
                   class="btn-whatsapp text-sm flex items-center gap-1.5"
                   target="_blank" rel="noopener noreferrer"
                   id="header-wa-btn">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0011.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 01-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 012.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                    </svg>
                    WhatsApp
                </a>
            </div>

            {{-- ── Animated Hamburger Button ── --}}
            <button class="lg:hidden flex flex-col justify-center items-center gap-[5px] w-10 h-10 rounded-lg border border-[var(--color-line)] bg-slate-50 hover:bg-slate-100 transition-colors cursor-pointer"
                    id="hamburger-btn"
                    aria-label="Toggle navigation menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu">
                <span class="ham-line"></span>
                <span class="ham-line w-[14px] self-end mr-1.5"></span>
                <span class="ham-line"></span>
            </button>

        </div>
    </div>

    {{-- ══════════════════════════════════════════════
         MOBILE MENU — slide-down panel
         ══════════════════════════════════════════════ --}}
    <div id="mobile-menu"
         class="border-t border-[var(--color-line)] bg-white/98 backdrop-blur-xl"
         role="navigation"
         aria-label="Mobile Navigation">
        <div class="px-5 py-4">

            {{-- Main links --}}
            <div class="space-y-1 mb-3">
                <a href="{{ route('home') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold transition-colors {{ $cr === 'home' ? 'text-[var(--color-primary)] bg-[var(--color-bg-soft)]' : 'text-[var(--color-ink)] hover:bg-slate-50' }}">
                    <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Home
                </a>

                {{-- Mobile Services accordion trigger --}}
                <div>
                    <button id="mobile-services-btn"
                            class="w-full flex items-center justify-between gap-3 px-4 py-3 rounded-xl text-base font-semibold text-[var(--color-ink)] hover:bg-slate-50 transition-colors"
                            aria-expanded="false"
                            aria-controls="mobile-services-panel">
                        <span class="flex items-center gap-3">
                            <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="3" width="6" height="6" rx="1"/><rect x="2" y="13" width="6" height="6" rx="1"/><rect x="12" y="3" width="6" height="6" rx="1"/><rect x="12" y="13" width="6" height="6" rx="1"/></svg>
                            Services
                        </span>
                        <svg id="mobile-services-chevron" class="w-4 h-4 text-slate-400 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>

                    {{-- Accordion panel --}}
                    <div id="mobile-services-panel" class="overflow-hidden">
                        <div class="mt-1 ml-4 pl-4 border-l-2 border-[var(--color-accent)]/30 space-y-0.5 pb-1">
                            @foreach(config('site.services') as $srv)
                            <a href="{{ route('services.show', $srv['slug']) }}"
                               class="flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium text-[var(--color-text)] hover:text-[var(--color-primary)] hover:bg-[var(--color-bg-soft)] transition-colors group/msrv">
                                <span>{{ $srv['name'] }}</span>
                                <svg class="w-3.5 h-3.5 text-slate-300 group-hover/msrv:text-[var(--color-primary)] transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                            </a>
                            @endforeach
                            <a href="{{ route('services.index') }}" class="block px-3 py-2 text-xs font-bold text-[var(--color-primary)] hover:underline">
                                → View All Services
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact.show') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold transition-colors {{ $cr === 'contact.show' ? 'text-[var(--color-primary)] bg-[var(--color-bg-soft)]' : 'text-[var(--color-ink)] hover:bg-slate-50' }}">
                    <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.99 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.92 1.22h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    Contact Us
                </a>

                <a href="{{ route('team.show') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold transition-colors {{ $cr === 'team.show' ? 'text-[var(--color-primary)] bg-[var(--color-bg-soft)]' : 'text-[var(--color-ink)] hover:bg-slate-50' }}">
                    <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    Our Team
                </a>

                <a href="{{ route('gallery.show') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-base font-semibold transition-colors {{ $cr === 'gallery.show' ? 'text-[var(--color-primary)] bg-[var(--color-bg-soft)]' : 'text-[var(--color-ink)] hover:bg-slate-50' }}">
                    <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    Gallery
                </a>
            </div>

            {{-- Divider --}}
            <div class="border-t border-slate-100 my-3"></div>

            {{-- Contact info strip --}}
            <div class="flex flex-wrap gap-3 text-sm text-slate-500 mb-4 px-1">
                <span class="flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-[var(--color-accent)]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    Mon–Sat: 9 AM – 7 PM
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-[var(--color-accent)]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                    Samastipur, Bihar
                </span>
            </div>

            {{-- CTA Buttons --}}
            <div class="flex gap-3 pb-2">
                <a href="tel:+91{{ config('site.phone_primary') }}"
                   class="btn-primary flex-1 flex items-center justify-center gap-2 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.99 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.92 1.22h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    Call Now
                </a>
                <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}"
                   class="btn-whatsapp flex-1 flex items-center justify-center gap-2 text-sm"
                   target="_blank" rel="noopener noreferrer">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0011.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 01-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 012.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                    </svg>
                    WhatsApp
                </a>
            </div>
        </div>
    </div>

</header>

{{-- ══════════════════════════════════════════════
     HEADER JAVASCRIPT
     ══════════════════════════════════════════════ --}}
<script>
(function () {
    'use strict';

    /* ── Scroll compact mode ── */
    const header = document.getElementById('site-header');
    let ticking = false;
    window.addEventListener('scroll', function () {
        if (!ticking) {
            requestAnimationFrame(function () {
                if (window.scrollY > 60) {
                    header.classList.add('is-compact');
                } else {
                    header.classList.remove('is-compact');
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    /* ── Hamburger toggle ── */
    const hamburger  = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburger.addEventListener('click', function () {
        const isOpen = mobileMenu.classList.contains('is-open');
        mobileMenu.classList.toggle('is-open', !isOpen);
        hamburger.classList.toggle('is-open', !isOpen);
        hamburger.setAttribute('aria-expanded', String(!isOpen));
        // prevent body scroll when menu open
        document.body.style.overflow = isOpen ? '' : 'hidden';
    });

    /* ── Mobile services accordion ── */
    const mobileServicesBtn     = document.getElementById('mobile-services-btn');
    const mobileServicesPanel   = document.getElementById('mobile-services-panel');
    const mobileServicesChevron = document.getElementById('mobile-services-chevron');

    if (mobileServicesBtn) {
        mobileServicesBtn.addEventListener('click', function () {
            const isOpen = mobileServicesPanel.classList.contains('is-open');
            mobileServicesPanel.classList.toggle('is-open', !isOpen);
            mobileServicesChevron.style.transform = isOpen ? '' : 'rotate(180deg)';
            mobileServicesBtn.setAttribute('aria-expanded', String(!isOpen));
        });
    }

    /* ── Close menu on resize to desktop ── */
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1024) {
            mobileMenu.classList.remove('is-open');
            hamburger.classList.remove('is-open');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    });

    /* ── Close menu when a mobile nav link is clicked ── */
    mobileMenu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            mobileMenu.classList.remove('is-open');
            hamburger.classList.remove('is-open');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        });
    });
})();
</script>
