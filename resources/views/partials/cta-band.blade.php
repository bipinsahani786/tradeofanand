{{-- ============================================================
     CTA BAND — HIGH CONVERSION EXECUTIVE BANNER
     Inspired by smartindiadetective.in & skinfrareal.com
     ============================================================ --}}

<section class="relative py-20 bg-gradient-to-br from-[#091124] via-[#0f1d3b] to-[#070c18] overflow-hidden border-t border-slate-800" aria-label="Call to Action">
    
    {{-- Ambient Decorative Elements --}}
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-blue-500/10 blur-3xl pointer-events-none" aria-hidden="true"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-amber-500/15 blur-3xl pointer-events-none" aria-hidden="true"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-10">
            
            {{-- Left Text Column --}}
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-400/10 border border-amber-400/25 text-amber-300 text-xs font-bold tracking-wide uppercase mb-4">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
                    Direct Support & Free Consultation
                </div>

                <h2 class="text-3xl sm:text-5xl font-heading font-extrabold text-white tracking-tight leading-tight hindi mb-4">
                    अपनी आवश्यकता बताइए, <br class="hidden sm:inline">
                    <span class="bg-gradient-to-r from-amber-400 via-amber-200 to-amber-500 bg-clip-text text-transparent">
                        हम करेंगे सम्पूर्ण मार्गदर्शन
                    </span>
                </h2>

                <p class="text-base sm:text-lg text-slate-300 hindi leading-relaxed mb-6">
                    {{ config('site.name') }} — Transport Fleet, Complete Insurance, Wholesale Medicine, Anand Bhavan Commercial Space, Apollo Tyres एवं Govt Authorized PUC Testing का Samastipur में सबसे विश्वसनीय प्रतिष्ठान।
                </p>

                {{-- Reassurance Points --}}
                <div class="flex flex-wrap items-center gap-6 text-xs sm:text-sm text-slate-300">
                    <div class="flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-xs">✓</span>
                        <span>Zero Spam Guarantee</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-xs">✓</span>
                        <span>निःशुल्क व्यावसायिक परामर्श</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-xs">✓</span>
                        <span>त्वरित 2 घंटे में प्रत्युत्तर</span>
                    </div>
                </div>
            </div>

            {{-- Right Action Buttons --}}
            <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-4 shrink-0 w-full lg:w-auto">
                <a href="tel:+91{{ config('site.phone_primary') }}" 
                   class="inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-xl bg-white hover:bg-slate-100 text-slate-900 font-heading font-bold text-sm tracking-wide shadow-2xl transition-all transform hover:-translate-y-0.5"
                   id="cta-call">
                    <svg class="w-4 h-4 text-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    कॉल करें: +91 {{ config('site.phone_primary') }}
                </a>

                <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}" 
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-xl bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-500 hover:to-emerald-600 text-white font-heading font-bold text-sm tracking-wide shadow-[0_0_25px_rgba(16,185,129,0.35)] transition-all transform hover:-translate-y-0.5"
                   id="cta-wa">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                    </svg>
                    WhatsApp करें
                </a>

                <a href="{{ route('contact.show') }}" 
                   class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-heading font-bold text-sm tracking-wide shadow-[0_0_25px_rgba(245,158,11,0.35)] transition-all transform hover:-translate-y-0.5"
                   id="cta-enquiry">
                    ऑनलाइन Enquiry भेजें →
                </a>
            </div>

        </div>
    </div>
</section>
