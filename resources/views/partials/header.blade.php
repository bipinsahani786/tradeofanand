@php $cr = Route::currentRouteName(); @endphp

{{-- ============================================================
     TRADE OF ANAND — PRISTINE LIGHT EXECUTIVE HEADER
     Features: Top Announcement Bar · Guaranteed White Navbar · No-Wrap Links · Fully Responsive Mobile Drawer
     ============================================================ --}}

{{-- 1. TOP ANNOUNCEMENT BAR (Desktop) --}}
<div class="hidden lg:block bg-[#0f2147] text-white text-xs py-2 px-6 border-b border-white/10">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
        {{-- Left: Business Hours & Address --}}
        <div class="flex items-center gap-5 text-slate-300">
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-amber-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                </svg>
                <span>{{ config('site.business_hours') }}</span>
            </span>
            <span class="text-white/20">|</span>
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-amber-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                </svg>
                <span>{{ config('site.address') }}</span>
            </span>
        </div>

        {{-- Center: Trust Badge --}}
        <div class="flex items-center gap-3 text-slate-300">
            <span class="flex items-center gap-1.5 text-amber-300 font-semibold">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                Estd. 2011 · GST Registered & Compliant
            </span>
        </div>

        {{-- Right: Direct Phone & Email --}}
        <div class="flex items-center gap-5 text-slate-300">
            <a href="tel:+91{{ config('site.phone_primary') }}" class="flex items-center gap-1.5 text-white hover:text-amber-300 font-semibold transition-colors">
                <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                +91 {{ config('site.phone_primary') }}
            </a>
            @if(config('site.email_primary'))
            <a href="mailto:{{ config('site.email_primary') }}" class="flex items-center gap-1.5 hover:text-white transition-colors">
                <svg class="w-3.5 h-3.5 text-amber-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                </svg>
                {{ config('site.email_primary') }}
            </a>
            @endif
        </div>
    </div>
</div>

{{-- 2. MAIN LIGHT NAVBAR (Pristine White Background Always) --}}
<header class="sticky top-0 z-50 bg-white border-b border-slate-200 shadow-sm transition-all duration-200" id="site-header" style="background-color: #ffffff !important;">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20 gap-2.5 sm:gap-4">

            {{-- Brand Logo --}}
            <a href="{{ route('home') }}" class="min-w-0 flex items-center gap-2.5 sm:gap-3 group shrink" aria-label="{{ config('site.name') }} Home">
                <div class="w-9 h-9 sm:w-11 sm:h-11 rounded-xl bg-[#0f2147] flex items-center justify-center text-amber-400 font-heading font-extrabold text-lg sm:text-2xl shadow-md border border-amber-400/30 group-hover:scale-105 transition-transform shrink-0">
                    A
                </div>
                <div class="flex flex-col min-w-0">
                    <span class="font-heading text-base sm:text-2xl font-extrabold text-[#0f2147] tracking-tight leading-none group-hover:text-blue-700 transition-colors truncate">
                        TRADE OF ANAND
                    </span>
                    <span class="text-[0.6rem] sm:text-[0.67rem] font-semibold text-slate-500 tracking-wider uppercase mt-0.5 sm:mt-1 flex items-center gap-1 sm:gap-1.5 truncate">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 shrink-0"></span>
                        <span class="truncate">Multi-Sector Enterprise · Est. 2011</span>
                    </span>
                </div>
            </a>

            {{-- Desktop Navigation (Guaranteed 1-Line with whitespace-nowrap) --}}
            <nav class="hidden lg:flex items-center gap-1 xl:gap-2" aria-label="Primary Navigation">
                
                {{-- Home --}}
                <a href="{{ route('home') }}" 
                   class="whitespace-nowrap px-3.5 py-2 text-sm font-semibold rounded-lg transition-colors {{ $cr === 'home' ? 'text-blue-700 bg-blue-50/80 font-bold' : 'text-slate-800 hover:text-blue-700 hover:bg-slate-50' }}">
                    Home
                </a>

                {{-- Services Dropdown --}}
                <div class="relative group">
                    <a href="{{ route('services.index') }}" 
                       class="whitespace-nowrap flex items-center gap-1.5 px-3.5 py-2 text-sm font-semibold rounded-lg transition-colors {{ str_starts_with($cr ?? '', 'services') ? 'text-blue-700 bg-blue-50/80 font-bold' : 'text-slate-800 hover:text-blue-700 hover:bg-slate-50' }}">
                        <span>Services</span>
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-blue-700 group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </a>

                    {{-- Dropdown Menu --}}
                    <div class="absolute top-full left-0 w-80 bg-white rounded-2xl border border-slate-200 shadow-2xl p-2.5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 mt-1">
                        <div class="px-3 py-2 text-[0.7rem] font-bold uppercase tracking-wider text-slate-400 border-b border-slate-100">
                            Our 6 Business Verticals
                        </div>
                        <div class="py-1">
                            @foreach(config('site.services') as $srv)
                            <a href="{{ route('services.show', $srv['slug']) }}" 
                               class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-800 hover:bg-blue-50/80 hover:text-blue-700 transition-colors group/item">
                                <span class="truncate">{{ $srv['name'] }}</span>
                                <span class="text-xs text-blue-600 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-x-1 transition-all">→</span>
                            </a>
                            @endforeach
                        </div>
                        <div class="p-2 bg-slate-50 rounded-xl border-t border-slate-100">
                            <a href="{{ route('services.index') }}" class="text-xs font-bold text-blue-700 hover:text-blue-800 flex items-center justify-center gap-1 py-1">
                                View All 6 Services →
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Our Team (Always 1 line) --}}
                <a href="{{ route('team.show') }}" 
                   class="whitespace-nowrap px-3.5 py-2 text-sm font-semibold rounded-lg transition-colors {{ $cr === 'team.show' ? 'text-blue-700 bg-blue-50/80 font-bold' : 'text-slate-800 hover:text-blue-700 hover:bg-slate-50' }}">
                    Our Team
                </a>

                {{-- Gallery --}}
                <a href="{{ route('gallery.show') }}" 
                   class="whitespace-nowrap px-3.5 py-2 text-sm font-semibold rounded-lg transition-colors {{ $cr === 'gallery.show' ? 'text-blue-700 bg-blue-50/80 font-bold' : 'text-slate-800 hover:text-blue-700 hover:bg-slate-50' }}">
                    Gallery
                </a>

                {{-- Contact Us --}}
                <a href="{{ route('contact.show') }}" 
                   class="whitespace-nowrap px-3.5 py-2 text-sm font-semibold rounded-lg transition-colors {{ $cr === 'contact.show' ? 'text-blue-700 bg-blue-50/80 font-bold' : 'text-slate-800 hover:text-blue-700 hover:bg-slate-50' }}">
                    Contact Us
                </a>

            </nav>

            {{-- Desktop Action Buttons --}}
            <div class="hidden lg:flex items-center gap-3 shrink-0">
                <a href="tel:+91{{ config('site.phone_primary') }}" 
                   class="whitespace-nowrap inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-[#0f2147] hover:bg-[#1a3875] text-white font-heading font-bold text-sm shadow-md transition-all transform hover:-translate-y-0.5"
                   id="header-call-btn">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    Call Now
                </a>

                <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}" 
                   target="_blank" rel="noopener noreferrer"
                   class="whitespace-nowrap inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-[#16a34a] hover:bg-[#15803d] text-white font-heading font-bold text-sm shadow-md transition-all transform hover:-translate-y-0.5"
                   id="header-wa-btn">
                    <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                    </svg>
                    WhatsApp
                </a>
            </div>

            {{-- 3-Bar Animated Hamburger (Mobile) --}}
            <button class="lg:hidden flex flex-col justify-center items-center gap-1.5 w-10 h-10 rounded-xl border border-slate-200 bg-slate-50 text-slate-800 hover:bg-slate-100 transition-colors cursor-pointer shrink-0" 
                    id="hamburger-btn" 
                    aria-label="Toggle mobile menu" 
                    aria-expanded="false">
                <span class="block w-5 h-0.5 bg-slate-800 transition-all duration-300 pointer-events-none"></span>
                <span class="block w-5 h-0.5 bg-slate-800 transition-all duration-300 pointer-events-none"></span>
                <span class="block w-5 h-0.5 bg-slate-800 transition-all duration-300 pointer-events-none"></span>
            </button>

        </div>
    </div>

    {{-- 3. MOBILE MENU PANEL (Slide-down drawer) --}}
    <div class="mobile-menu lg:hidden border-t border-slate-200 bg-white shadow-xl" id="mobile-menu">
        <div class="px-4 py-3.5 space-y-1">
            <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-50">Home</a>
            <a href="{{ route('services.index') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-50">All 6 Services</a>
            <div class="pl-4 pr-2 py-1.5 space-y-1 bg-slate-50 rounded-xl my-1">
                @foreach(config('site.services') as $srv)
                <a href="{{ route('services.show', $srv['slug']) }}" class="block px-3 py-1.5 text-sm text-slate-700 hover:text-blue-700 font-medium">
                    {{ $srv['name'] }}
                </a>
                @endforeach
            </div>
            <a href="{{ route('team.show') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-50">Our Team</a>
            <a href="{{ route('gallery.show') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-50">Gallery</a>
            <a href="{{ route('contact.show') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-50">Contact Us</a>
            
            <div class="flex gap-3 pt-4 border-t border-slate-100 mt-2">
                <a href="tel:+91{{ config('site.phone_primary') }}" class="btn-primary flex-1 py-3 text-center text-sm">
                    Call Now
                </a>
                <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="btn-whatsapp flex-1 py-3 text-center text-sm" target="_blank">
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</header>
