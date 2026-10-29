<footer class="bg-[var(--color-ink)] text-white/75" role="contentinfo">
    <div class="max-w-6xl mx-auto px-6 pt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-16 border-b border-white/10">

            {{-- Brand --}}
            <div>
                <div class="font-heading text-xl font-bold text-white tracking-widest mb-1">{{ config('site.name') }}</div>
                <div class="text-xs text-white/50 mb-4">Formerly known as {{ config('site.formerly') }}</div>
                <p class="text-sm leading-relaxed mb-3 hindi">{{ config('site.tagline_hindi') }}</p>
                <p class="text-sm leading-relaxed hindi">{{ config('site.closing_line') }}</p>
            </div>

            {{-- Quick Links --}}
            <div>
                <div class="text-xs font-semibold uppercase tracking-widest text-white/50 mb-4">Quick Links</div>
                <ul class="flex flex-col gap-2.5">
                    <li><a href="{{ route('home') }}" class="text-sm text-white/70 hover:text-white transition-colors">Home</a></li>
                    <li><a href="{{ route('services.index') }}" class="text-sm text-white/70 hover:text-white transition-colors">Our Services</a></li>
                    <li><a href="{{ route('contact.show') }}" class="text-sm text-white/70 hover:text-white transition-colors">Contact Us</a></li>
                    <li><a href="{{ route('team.show') }}" class="text-sm text-white/70 hover:text-white transition-colors">Our Team</a></li>
                    <li><a href="{{ route('gallery.show') }}" class="text-sm text-white/70 hover:text-white transition-colors">Gallery</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-sm text-white/70 hover:text-white transition-colors">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="text-sm text-white/70 hover:text-white transition-colors">Terms</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <div class="text-xs font-semibold uppercase tracking-widest text-white/50 mb-4">Our Services</div>
                <ul class="flex flex-col gap-2.5">
                    @foreach(config('site.services') as $srv)
                    <li><a href="{{ route('services.show', $srv['slug']) }}" class="text-sm text-white/70 hover:text-white transition-colors">{{ $srv['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <div class="text-xs font-semibold uppercase tracking-widest text-white/50 mb-4">Contact</div>
                <div class="space-y-2.5">
                    <div class="flex items-start gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>{{ config('site.address') }}</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:+91{{ config('site.phone_primary') }}" class="hover:text-white transition-colors">+91 {{ config('site.phone_primary') }}</a>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:+91{{ config('site.phone_abhinav') }}" class="hover:text-white transition-colors">+91 {{ config('site.phone_abhinav') }}</a>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <a href="mailto:{{ config('site.email_primary') }}" class="hover:text-white transition-colors">{{ config('site.email_primary') }}</a>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>{{ config('site.business_hours') }}</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="py-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-white/50">
            <span>&copy; {{ date('Y') }} {{ config('site.name') }}. All rights reserved.</span>
            <div class="flex gap-5">
                <a href="{{ route('privacy') }}" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="hover:text-white transition-colors">Terms</a>
                <a href="{{ route('sitemap') }}" class="hover:text-white transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
