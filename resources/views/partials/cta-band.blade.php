{{-- ============================================================
     CTA BAND — CLEAN EXECUTIVE CALL TO ACTION
     High contrast royal navy banner connecting seamlessly with light theme
     ============================================================ --}}

<section class="relative py-16 sm:py-20 bg-gradient-to-r from-[#0f2147] via-[#1a3875] to-[#0f2147] overflow-hidden border-t border-slate-200" aria-label="Call to Action">
    
    {{-- Soft Ambient Lighting (Desktop only) --}}
    <div class="hidden sm:block absolute -top-32 -left-32 w-96 h-96 rounded-full bg-blue-400/15 blur-3xl pointer-events-none" aria-hidden="true"></div>
    <div class="hidden sm:block absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-amber-400/15 blur-3xl pointer-events-none" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-10">
            
            {{-- Left Content Column --}}
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-amber-300 text-xs font-bold tracking-wide uppercase mb-4">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    Direct Support & Free Consultation
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-white tracking-tight leading-tight hindi mb-4">
                    अपनी आवश्यकता बताइए, <br class="hidden sm:inline">
                    <span class="text-amber-300">
                        हम करेंगे सम्पूर्ण मार्गदर्शन
                    </span>
                </h2>

                <p class="text-base sm:text-lg text-slate-200 hindi leading-relaxed mb-6">
                    {{ config('site.name') }} — Transport Fleet, Complete Insurance, Wholesale Medicine, Anand Bhavan Commercial Space, Apollo Tyres एवं Govt Authorized PUC Testing का Samastipur में सबसे भरोसेमंद प्रतिष्ठान।
                </p>

                {{-- Reassurance Points --}}
                <div class="flex flex-wrap items-center gap-6 text-xs sm:text-sm text-slate-200">
                    <div class="flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-emerald-500/25 text-emerald-400 flex items-center justify-center font-bold text-xs">✓</span>
                        <span>Zero Spam Guarantee</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-emerald-500/25 text-emerald-400 flex items-center justify-center font-bold text-xs">✓</span>
                        <span>निःशुल्क व्यावसायिक परामर्श</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-emerald-500/25 text-emerald-400 flex items-center justify-center font-bold text-xs">✓</span>
                        <span>त्वरित 2 घंटे में प्रत्युत्तर</span>
                    </div>
                </div>
            </div>

            {{-- Right Action Buttons --}}
            <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row items-stretch sm:items-center gap-3 sm:gap-4 shrink-0 w-full lg:w-auto">
                <a href="tel:+91{{ config('site.phone_primary') }}" 
                   class="inline-flex items-center justify-center gap-2.5 px-5 sm:px-7 py-3.5 sm:py-4 rounded-xl bg-white hover:bg-slate-100 text-[#0f2147] font-heading font-bold text-sm tracking-wide shadow-xl transition-all transform hover:-translate-y-0.5 text-center w-full sm:w-auto"
                   id="cta-call">
                    <svg class="w-4 h-4 text-[#0f2147] shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <span>कॉल करें: +91 {{ config('site.phone_primary') }}</span>
                </a>

                <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}" 
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center justify-center gap-2.5 px-5 sm:px-7 py-3.5 sm:py-4 rounded-xl bg-[#16a34a] hover:bg-[#15803d] text-white font-heading font-bold text-sm tracking-wide shadow-xl transition-all transform hover:-translate-y-0.5 text-center w-full sm:w-auto"
                   id="cta-wa">
                    <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                    </svg>
                    <span>WhatsApp करें</span>
                </a>

                <a href="{{ route('contact.show') }}" 
                   class="inline-flex items-center justify-center gap-2 px-5 sm:px-7 py-3.5 sm:py-4 rounded-xl bg-amber-400 hover:bg-amber-300 text-slate-950 font-heading font-bold text-sm tracking-wide shadow-xl transition-all transform hover:-translate-y-0.5 text-center w-full sm:w-auto"
                   id="cta-enquiry">
                    <span>ऑनलाइन Enquiry भेजें →</span>
                </a>
            </div>

        </div>
    </div>
</section>
