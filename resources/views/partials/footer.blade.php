{{-- ============================================================
     TRADE OF ANAND — PRISTINE LIGHT EXECUTIVE FOOTER
     Inspired by smartindiadetective.in & skinfrareal.com
     Features: Light Modern Theme, VIP Consultation Teaser, 4-Col Grid, Trust Badges, Live Status
     ============================================================ --}}

<footer class="relative bg-slate-50 text-slate-700 overflow-hidden border-t border-slate-200/90 font-body" role="contentinfo">

    {{-- Subtle Ambient Light Patterns --}}
    <div class="hidden sm:block absolute top-0 left-1/4 w-[600px] h-[300px] bg-gradient-to-b from-blue-100/40 to-transparent blur-[120px] pointer-events-none" aria-hidden="true"></div>
    <div class="hidden sm:block absolute bottom-0 right-10 w-[500px] h-[300px] bg-gradient-to-t from-amber-100/40 to-transparent blur-[120px] pointer-events-none" aria-hidden="true"></div>
    <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-40 pointer-events-none"></div>

    {{-- ══════════════════════════════════════════════════════════════
         1. FLOATING VIP CONSULTATION CARD (Light Executive Teaser)
    ══════════════════════════════════════════════════════════════ --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 sm:pt-12 pb-6">
        <div class="relative rounded-2xl p-6 sm:p-8 md:p-10 overflow-hidden bg-white border border-slate-200 shadow-[0_15px_40px_rgba(15,33,71,0.06)]">
            
            {{-- Decorative Accent Top Line --}}
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-[#0f2147] via-amber-400 to-[#0f2147]"></div>

            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold mb-3">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Live Helpdesk Active · Direct Priority Support</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-heading font-extrabold text-[#0f2147] tracking-tight leading-tight hindi mb-2">
                        व्यावसायिक परामर्श या तत्काल सेवा सहायता चाहिए?
                    </h3>
                    <p class="text-sm sm:text-base text-slate-600 hindi leading-relaxed m-0">
                        Transport, Insurance, Medicine Wholesale, Anand Bhavan Rental, Tyres या Pollution Testing — हमारी टीम त्वरित समाधान हेतु 24×7 तत्पर है।
                    </p>
                </div>

                {{-- Action Buttons --}}
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 shrink-0 w-full lg:w-auto">
                    <a href="tel:+91{{ config('site.phone_primary') }}" 
                       class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-[#0f2147] hover:bg-[#18356f] text-white font-heading font-bold text-sm tracking-wide shadow-md transition-all transform hover:-translate-y-0.5 text-center w-full sm:w-auto"
                       id="footer-call-btn">
                        <svg class="w-4 h-4 shrink-0 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span>+91 {{ config('site.phone_primary') }}</span>
                    </a>

                    <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}" 
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-[#16a34a] hover:bg-[#15803d] text-white font-heading font-bold text-sm tracking-wide shadow-md transition-all transform hover:-translate-y-0.5 text-center w-full sm:w-auto"
                       id="footer-wa-btn">
                        <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                        </svg>
                        <span>WhatsApp करें</span>
                    </a>

                    <a href="{{ route('contact.show') }}" 
                       class="inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl bg-slate-100 hover:bg-slate-200 border border-slate-300 text-slate-800 font-heading font-semibold text-sm transition-all text-center w-full sm:w-auto">
                        <span>ऑनलाइन Enquiry →</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- ══════════════════════════════════════════════════════════════
         2. MAIN 4-COLUMN CORPORATE STRUCTURE (Light Theme)
    ══════════════════════════════════════════════════════════════ --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 sm:pt-14 pb-12 sm:pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 sm:gap-10 pb-10 sm:pb-16 border-b border-slate-200">

            {{-- ── Col 1: Brand Identity & Compliance (4 cols) ── --}}
            <div class="lg:col-span-4">
                {{-- Monogram Brand Heading --}}
                <div class="flex items-center gap-3.5 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-[#0f2147] flex items-center justify-center text-amber-400 font-heading font-extrabold text-2xl shadow-md border border-amber-400/30">
                        A
                    </div>
                    <div>
                        <div class="font-heading text-xl font-extrabold text-[#0f2147] tracking-wider leading-none">
                            {{ config('site.name') }}
                        </div>
                        <div class="text-[0.7rem] text-blue-800 font-bold tracking-widest uppercase mt-1">
                            Formerly {{ config('site.formerly') }} · Est. 2011
                        </div>
                    </div>
                </div>

                <p class="text-sm text-slate-600 leading-relaxed hindi mb-3">
                    {{ config('site.tagline_hindi') }}
                </p>
                <p class="text-xs text-slate-500 leading-relaxed mb-6 hindi">
                    {{ config('site.closing_line') }}
                </p>

                {{-- Compliance & Credentials Pills (Light Badges) --}}
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-white border border-slate-200 shadow-2xs text-[0.72rem] text-slate-800 font-semibold">
                        <svg class="w-3.5 h-3.5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        GST Registered
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-white border border-slate-200 shadow-2xs text-[0.72rem] text-blue-800 font-semibold">
                        <svg class="w-3.5 h-3.5 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a10.978 10.978 0 00-.25 2.57c0 4.148 2.57 7.72 6.36 9.17a1 1 0 00.73 0C15.88 18.34 18.45 14.77 18.45 10.62a10.978 10.978 0 00-.25-2.57l2.644-1.13a1 1 0 000-1.84l-7-3z"/></svg>
                        Govt Authorized PUC
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-white border border-slate-200 shadow-2xs text-[0.72rem] text-emerald-800 font-semibold">
                        <span class="text-amber-500 font-bold">★</span> Apollo Tyres Dealer
                    </span>
                </div>

                {{-- Social & Connect Badges --}}
                <div class="flex items-center gap-3">
                    <a href="https://wa.me/{{ config('site.whatsapp_number') }}" target="_blank" rel="noopener noreferrer" 
                       aria-label="WhatsApp" 
                       class="w-9 h-9 rounded-xl bg-white border border-slate-200 hover:border-emerald-500 hover:bg-emerald-50 text-slate-700 hover:text-emerald-600 flex items-center justify-center transition-all shadow-2xs">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/></svg>
                    </a>
                    <a href="https://maps.google.com/?q=Mushrigharari+Samastipur+Bihar" target="_blank" rel="noopener noreferrer" 
                       aria-label="Google Maps Location" 
                       class="w-9 h-9 rounded-xl bg-white border border-slate-200 hover:border-blue-500 hover:bg-blue-50 text-slate-700 hover:text-blue-600 flex items-center justify-center transition-all shadow-2xs">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </a>
                    <a href="mailto:{{ config('site.email_primary') }}" 
                       aria-label="Email" 
                       class="w-9 h-9 rounded-xl bg-white border border-slate-200 hover:border-amber-500 hover:bg-amber-50 text-slate-700 hover:text-amber-600 flex items-center justify-center transition-all shadow-2xs">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </a>
                </div>
            </div>

            {{-- ── Col 2: Quick Links (2 cols) ── --}}
            <div class="lg:col-span-2">
                <div class="text-xs font-bold uppercase tracking-widest text-[#0f2147] mb-5 flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    Quick Links
                </div>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="group flex items-center gap-2 text-slate-600 hover:text-blue-700 font-medium transition-colors">
                            <span class="text-slate-400 group-hover:text-blue-700 transition-colors">›</span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="group flex items-center gap-2 text-slate-600 hover:text-blue-700 font-medium transition-colors">
                            <span class="text-slate-400 group-hover:text-blue-700 transition-colors">›</span>
                            Our Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('team.show') }}" class="group flex items-center gap-2 text-slate-600 hover:text-blue-700 font-medium transition-colors">
                            <span class="text-slate-400 group-hover:text-blue-700 transition-colors">›</span>
                            Leadership Team
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery.show') }}" class="group flex items-center gap-2 text-slate-600 hover:text-blue-700 font-medium transition-colors">
                            <span class="text-slate-400 group-hover:text-blue-700 transition-colors">›</span>
                            Photo Gallery
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact.show') }}" class="group flex items-center gap-2 text-slate-600 hover:text-blue-700 font-medium transition-colors">
                            <span class="text-slate-400 group-hover:text-blue-700 transition-colors">›</span>
                            Contact & Office
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('privacy') }}" class="group flex items-center gap-2 text-slate-600 hover:text-blue-700 font-medium transition-colors">
                            <span class="text-slate-400 group-hover:text-blue-700 transition-colors">›</span>
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}" class="group flex items-center gap-2 text-slate-600 hover:text-blue-700 font-medium transition-colors">
                            <span class="text-slate-400 group-hover:text-blue-700 transition-colors">›</span>
                            Terms of Service
                        </a>
                    </li>
                </ul>
            </div>

            {{-- ── Col 3: 6 Verticals (3 cols) ── --}}
            <div class="lg:col-span-3">
                <div class="text-xs font-bold uppercase tracking-widest text-[#0f2147] mb-5 flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    Our 6 Verticals
                </div>
                <ul class="space-y-3.5 text-sm">
                    @foreach(config('site.services') as $srv)
                    <li>
                        <a href="{{ route('services.show', $srv['slug']) }}" class="group block">
                            <div class="text-slate-800 group-hover:text-blue-700 font-semibold transition-colors flex items-center justify-between">
                                <span>{{ $srv['name'] }}</span>
                                <span class="text-xs text-slate-400 group-hover:text-blue-700 group-hover:translate-x-1 transition-transform">→</span>
                            </div>
                            <div class="text-[0.72rem] text-slate-500 hindi truncate mt-0.5">
                                {{ $srv['tagline'] }}
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- ── Col 4: Executive Headquarters (3 cols) ── --}}
            <div class="lg:col-span-3">
                <div class="text-xs font-bold uppercase tracking-widest text-[#0f2147] mb-5 flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    Headquarters
                </div>

                {{-- Interactive Address Card (Light styling) --}}
                <div class="rounded-2xl p-5 bg-white border border-slate-200 shadow-sm mb-4">
                    <div class="flex items-start gap-3 mb-3">
                        <div class="w-8 h-8 rounded-xl bg-blue-50 border border-blue-100 text-blue-700 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-[#0f2147] uppercase tracking-wide">Main Office & Hub</div>
                            <p class="text-xs text-slate-600 leading-relaxed m-0 mt-1">
                                {{ config('site.address') }}
                            </p>
                        </div>
                    </div>

                    <div class="space-y-2 pt-3 border-t border-slate-100">
                        <div class="flex items-center gap-2.5 text-xs">
                            <span class="text-slate-400 w-16">Primary:</span>
                            <a href="tel:+91{{ config('site.phone_primary') }}" class="font-bold text-[#0f2147] hover:text-blue-700">
                                +91 {{ config('site.phone_primary') }}
                            </a>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs">
                            <span class="text-slate-400 w-16">Director:</span>
                            <a href="tel:+91{{ config('site.phone_abhinav') }}" class="font-semibold text-slate-700 hover:text-blue-700">
                                +91 {{ config('site.phone_abhinav') }}
                            </a>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs">
                            <span class="text-slate-400 w-16">Email:</span>
                            <a href="mailto:{{ config('site.email_primary') }}" class="text-slate-700 hover:text-blue-700 truncate">
                                {{ config('site.email_primary') }}
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Working Hours Pill --}}
                <div class="flex items-center justify-between px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-xs shadow-2xs">
                    <span class="text-slate-600 flex items-center gap-1.5 font-medium">
                        <svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        Hours:
                    </span>
                    <span class="font-semibold text-emerald-700">{{ config('site.business_hours') }}</span>
                </div>
            </div>

        </div>

        {{-- ══════════════════════════════════════════════════════════════
             3. TRUST & ACCREDITATION STRIP (Light Theme)
        ══════════════════════════════════════════════════════════════ --}}
        <div class="py-6 flex flex-wrap items-center justify-center gap-4 sm:gap-8 border-b border-slate-200 text-xs text-slate-600 font-medium">
            <div class="flex items-center gap-2">
                <span class="text-emerald-600 font-bold">✓</span>
                <span>100% Transparency</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-emerald-600 font-bold">✓</span>
                <span>Govt Authorized Testing</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-emerald-600 font-bold">✓</span>
                <span>All Bihar Logistics Reach</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-emerald-600 font-bold">✓</span>
                <span>Direct Executive Support</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-emerald-600 font-bold">✓</span>
                <span>Established Since 2011</span>
            </div>
        </div>

        {{-- ══════════════════════════════════════════════════════════════
             4. BOTTOM BAR: COPYRIGHT & SYSTEM STATUS (Light Theme)
        ══════════════════════════════════════════════════════════════ --}}
        <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 font-medium text-[0.68rem]">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    All Services Operational
                </span>
                <span>&copy; {{ date('Y') }} {{ config('site.name') }}. All rights reserved.</span>
            </div>

            <div class="flex items-center gap-6">
                <a href="{{ route('privacy') }}" class="hover:text-blue-700 transition-colors">Privacy</a>
                <a href="{{ route('terms') }}" class="hover:text-blue-700 transition-colors">Terms</a>
                <a href="{{ route('sitemap') }}" class="hover:text-blue-700 transition-colors">Sitemap</a>
                <span class="text-slate-300">|</span>
                <span class="text-slate-600 flex items-center gap-1 font-medium">
                    Serving Bihar with Pride <span class="text-red-500">♥</span>
                </span>
            </div>
        </div>

    </div>

</footer>