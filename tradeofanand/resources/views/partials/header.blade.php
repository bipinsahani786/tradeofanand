@php $cr = Route::currentRouteName(); @endphp

<header class="sticky top-0 z-50 bg-white border-b border-[var(--color-line)] shadow-xs" id="site-header">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex items-center justify-between h-[74px] gap-6">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="shrink-0 group flex flex-col" aria-label="{{ config('site.name') }} Home">
                <span class="font-heading text-2xl font-bold text-[var(--color-ink)] tracking-wider leading-none group-hover:text-[var(--color-primary)] transition-colors">
                    {{ config('site.name') }}
                </span>
                <span class="text-[0.65rem] text-[var(--color-accent)] font-semibold tracking-wider mt-1">
                    Formerly {{ config('site.formerly') }}
                </span>
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden lg:flex items-center gap-6" aria-label="Primary Navigation">
                <a href="{{ route('home') }}" class="py-2 text-sm font-semibold border-b-2 transition-colors {{ $cr === 'home' ? 'text-[var(--color-primary)] border-[var(--color-accent)]' : 'text-[var(--color-ink)] border-transparent hover:text-[var(--color-primary)] hover:border-[var(--color-accent)]' }}">
                    Home
                </a>

                {{-- Services Dropdown --}}
                <div class="relative group">
                    <a href="{{ route('services.index') }}" class="flex items-center gap-1.5 py-2 text-sm font-semibold border-b-2 transition-colors {{ str_starts_with($cr ?? '', 'services') ? 'text-[var(--color-primary)] border-[var(--color-accent)]' : 'text-[var(--color-ink)] border-transparent hover:text-[var(--color-primary)] hover:border-[var(--color-accent)]' }}">
                        Services
                        <svg class="w-3.5 h-3.5 text-[var(--color-muted)] group-hover:text-[var(--color-primary)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </a>
                    <div class="absolute top-full left-0 min-w-[260px] bg-white border border-[var(--color-line)] shadow-lg hidden group-hover:block z-50 py-1">
                        @foreach(config('site.services') as $srv)
                        <a href="{{ route('services.show', $srv['slug']) }}" class="block px-4 py-2.5 text-sm text-[var(--color-text)] border-b border-[var(--color-line)]/50 last:border-b-0 hover:bg-[var(--color-bg-soft)] hover:text-[var(--color-primary)] transition-colors">
                            {{ $srv['name'] }}
                        </a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('contact.show') }}" class="py-2 text-sm font-semibold border-b-2 transition-colors {{ $cr === 'contact.show' ? 'text-[var(--color-primary)] border-[var(--color-accent)]' : 'text-[var(--color-ink)] border-transparent hover:text-[var(--color-primary)] hover:border-[var(--color-accent)]' }}">
                    Contact Us
                </a>
                <a href="{{ route('team.show') }}" class="py-2 text-sm font-semibold border-b-2 transition-colors {{ $cr === 'team.show' ? 'text-[var(--color-primary)] border-[var(--color-accent)]' : 'text-[var(--color-ink)] border-transparent hover:text-[var(--color-primary)] hover:border-[var(--color-accent)]' }}">
                    Our Team
                </a>
                <a href="{{ route('gallery.show') }}" class="py-2 text-sm font-semibold border-b-2 transition-colors {{ $cr === 'gallery.show' ? 'text-[var(--color-primary)] border-[var(--color-accent)]' : 'text-[var(--color-ink)] border-transparent hover:text-[var(--color-primary)] hover:border-[var(--color-accent)]' }}">
                    Gallery
                </a>
            </nav>

            {{-- Desktop CTAs --}}
            <div class="hidden lg:flex items-center gap-3 shrink-0">
                <a href="tel:+91{{ config('site.phone_primary') }}" class="btn-primary" id="header-call-btn">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    Call Now
                </a>
                <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="btn-whatsapp" target="_blank" rel="noopener noreferrer" id="header-wa-btn">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/></svg>
                    WhatsApp
                </a>
            </div>

            {{-- Hamburger --}}
            <button class="lg:hidden flex flex-col gap-1.5 p-2 bg-transparent border border-[var(--color-line)] cursor-pointer" id="hamburger-btn" aria-label="Toggle menu" aria-expanded="false">
                <span class="block w-6 h-0.5 bg-[var(--color-ink)]"></span>
                <span class="block w-6 h-0.5 bg-[var(--color-ink)]"></span>
                <span class="block w-6 h-0.5 bg-[var(--color-ink)]"></span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div class="mobile-menu border-t border-[var(--color-line)] bg-white" id="mobile-menu" role="navigation">
        <a href="{{ route('home') }}" class="block px-6 py-3.5 text-base font-semibold text-[var(--color-ink)] border-b border-[var(--color-line)] hover:text-[var(--color-primary)]">Home</a>
        <a href="{{ route('services.index') }}" class="block px-6 py-3.5 text-base font-semibold text-[var(--color-ink)] border-b border-[var(--color-line)] hover:text-[var(--color-primary)]">Services</a>
        <div class="bg-[var(--color-bg-soft)]">
            @foreach(config('site.services') as $srv)
            <a href="{{ route('services.show', $srv['slug']) }}" class="block px-10 py-2.5 text-sm text-[var(--color-text)] border-b border-[var(--color-line)] last:border-b-0 hover:text-[var(--color-primary)]">{{ $srv['name'] }}</a>
            @endforeach
        </div>
        <a href="{{ route('contact.show') }}" class="block px-6 py-3.5 text-base font-semibold text-[var(--color-ink)] border-b border-[var(--color-line)] hover:text-[var(--color-primary)]">Contact Us</a>
        <a href="{{ route('team.show') }}" class="block px-6 py-3.5 text-base font-semibold text-[var(--color-ink)] border-b border-[var(--color-line)] hover:text-[var(--color-primary)]">Our Team</a>
        <a href="{{ route('gallery.show') }}" class="block px-6 py-3.5 text-base font-semibold text-[var(--color-ink)] border-b border-[var(--color-line)] hover:text-[var(--color-primary)]">Gallery</a>
        <div class="flex gap-3 p-4">
            <a href="tel:+91{{ config('site.phone_primary') }}" class="btn-primary flex-1">Call Now</a>
            <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="btn-whatsapp flex-1" target="_blank">WhatsApp</a>
        </div>
    </div>
</header>
