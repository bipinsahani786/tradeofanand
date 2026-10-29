@extends('layouts.app')

@section('content')

{{-- ============================================================
     1. LIGHT EXECUTIVE SERVICE HERO
     ============================================================ --}}
<div class="relative bg-gradient-to-b from-slate-50 via-white to-slate-50/80 border-b border-slate-200/90 py-12 sm:py-16 overflow-hidden">
    {{-- Subtle Ambient Glows --}}
    <div class="hidden sm:block absolute top-0 left-1/3 w-[500px] h-[250px] bg-blue-100/40 rounded-full blur-[100px] pointer-events-none" aria-hidden="true"></div>
    <div class="hidden sm:block absolute bottom-0 right-1/4 w-[400px] h-[200px] bg-amber-100/40 rounded-full blur-[100px] pointer-events-none" aria-hidden="true"></div>
    <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-35 pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-xs text-slate-500 font-medium mb-4" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition-colors">Home</a>
            <span class="text-slate-300">/</span>
            <a href="{{ route('services.index') }}" class="hover:text-blue-700 transition-colors">Services</a>
            <span class="text-slate-300">/</span>
            <span class="text-blue-700 font-semibold">{{ $service['name'] }}</span>
        </nav>

        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200/80 text-[#0f2147] text-xs font-bold tracking-wider uppercase mb-3 shadow-2xs">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                Trade of Anand · Business Vertical
            </div>
            <h1 class="font-heading text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0f2147] tracking-tight leading-tight mb-3">
                {{ $service['name'] }}
            </h1>
            <p class="text-base sm:text-lg text-blue-700 font-bold hindi leading-relaxed m-0 mb-6">
                {{ $service['tagline'] }}
            </p>

            {{-- Hero Quick Actions --}}
            <div class="flex flex-wrap items-center gap-3">
                <a href="tel:+91{{ $service['contact_phone'] }}" 
                   class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-[#0f2147] hover:bg-blue-900 text-white font-heading font-bold text-sm shadow-md transition-all transform hover:-translate-y-0.5">
                    <svg class="w-4 h-4 text-amber-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <span>कॉल करें (+91 {{ $service['contact_phone'] }})</span>
                </a>

                <a href="https://wa.me/91{{ $service['contact_phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" 
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-[#16a34a] hover:bg-[#15803d] text-white font-heading font-bold text-sm shadow-md transition-all transform hover:-translate-y-0.5">
                    <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                    </svg>
                    <span>WhatsApp परामर्श</span>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================
     2. MAIN SERVICE DETAILS & PROFESSIONAL FAQS
     ============================================================ --}}
<section class="py-12 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">

            {{-- ── Left Main Column (8 cols) ── --}}
            <div class="lg:col-span-8 space-y-10">

                {{-- Service Main Hero Image --}}
                <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-md bg-slate-900 group">
                    <img src="{{ $service['image'] }}" 
                         alt="{{ $service['name'] }} – Trade of Anand Samastipur" 
                         class="w-full aspect-[16/8] sm:aspect-[16/7] object-cover group-hover:scale-103 transition-transform duration-500" 
                         width="800" height="350" 
                         loading="eager"
                         onerror="this.src='/images/hero/hero-main.jpg'; this.onerror=null;">
                </div>

                {{-- Overview & Description --}}
                <div class="bg-slate-50/70 rounded-2xl p-6 sm:p-8 border border-slate-200/90 shadow-2xs">
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700 mb-2 block">Service Overview</span>
                    <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#0f2147] mb-3">
                        परिचय एवं कार्यक्षेत्र
                    </h2>
                    <p class="text-slate-700 hindi leading-relaxed text-sm sm:text-base m-0">
                        {{ $service['description'] }}
                    </p>
                </div>

                {{-- What We Offer --}}
                @if(!empty($service['offerings']))
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-blue-700"></span>
                        <h2 class="font-heading text-2xl font-extrabold text-[#0f2147] tracking-tight">
                            हम क्या सुविधाएँ प्रदान करते हैं (What We Offer)
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach($service['offerings'] as $off)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-white border border-slate-200/90 shadow-2xs hover:border-blue-400 hover:shadow-sm transition-all group">
                            <div class="w-6 h-6 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center shrink-0 group-hover:bg-[#0f2147] group-hover:text-white transition-colors">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <span class="text-sm font-semibold text-slate-800 hindi leading-snug">{{ $off }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Who It's For --}}
                @if(!empty($service['who_for']))
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                        <h2 class="font-heading text-2xl font-extrabold text-[#0f2147] tracking-tight">
                            यह सेवा किसके लिए उपयुक्त है (Target Clients)
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach($service['who_for'] as $wf)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-emerald-50/40 border border-emerald-200/70 text-slate-800 shadow-2xs">
                            <span class="w-6 h-6 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center shrink-0 font-bold text-xs">✓</span>
                            <span class="text-sm font-semibold hindi leading-snug">{{ $wf }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Why Choose Us --}}
                @if(!empty($service['why_choose']))
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                        <h2 class="font-heading text-2xl font-extrabold text-[#0f2147] tracking-tight">
                            हमें क्यों चुनें (Why Choose Us)
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach($service['why_choose'] as $why)
                        <div class="flex items-start gap-3 p-4 rounded-xl bg-amber-50/40 border border-amber-200/80 shadow-2xs">
                            <span class="w-5 h-5 rounded-full bg-amber-200/80 text-amber-900 flex items-center justify-center shrink-0 font-bold text-xs mt-0.5">★</span>
                            <span class="text-sm font-semibold text-slate-800 hindi leading-relaxed">{{ $why }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Process --}}
                @if(!empty($service['process']))
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-[#0f2147]"></span>
                        <h2 class="font-heading text-2xl font-extrabold text-[#0f2147] tracking-tight">
                            कार्य प्रक्रिया (Step-by-Step Process)
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        @foreach($service['process'] as $step)
                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-2xs hover:border-blue-300 transition-all">
                            <div class="w-10 h-10 rounded-xl bg-[#0f2147] text-amber-400 flex items-center justify-center font-heading font-extrabold text-base mb-3 shadow-xs">
                                0{{ $step['step'] }}
                            </div>
                            <div class="font-heading font-bold text-base text-slate-900 mb-1 hindi">{{ $step['title'] }}</div>
                            <p class="text-xs text-slate-600 hindi leading-relaxed m-0">{{ $step['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- ══════════════════════════════════════════════════════════
                     PRO FAQ ACCORDION SECTION (Ultra-Clean Executive)
                     ══════════════════════════════════════════════════════════ --}}
                @if(!empty($service['faqs']))
                <div class="pt-8 mt-10 border-t border-slate-200">
                    <div class="mb-6">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-800 text-xs font-bold uppercase tracking-wider mb-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                            Clear Guidance · FAQ
                        </span>
                        <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#0f2147] tracking-tight">
                            अक्सर पूछे जाने वाले सवाल <span class="text-slate-400 font-light text-xl sm:text-2xl block sm:inline">| Frequently Asked Questions</span>
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600 hindi mt-1">
                            {{ $service['name'] }} से संबंधित सामान्य प्रश्न एवं स्पष्ट उत्तर।
                        </p>
                    </div>

                    <div class="space-y-3.5" itemscope itemtype="https://schema.org/FAQPage">
                        @foreach($service['faqs'] as $i => $faq)
                        <div class="faq-item rounded-2xl border border-slate-200 bg-white overflow-hidden shadow-2xs hover:border-blue-300 hover:shadow-sm transition-all duration-200" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <button class="w-full flex items-center justify-between gap-4 px-5 sm:px-6 py-4 sm:py-5 text-left bg-transparent border-0 cursor-pointer group" aria-expanded="false" id="sfaq-q-{{ $i }}">
                                <div class="flex items-center gap-3.5 min-w-0">
                                    <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-xl bg-blue-50 text-blue-800 font-heading font-extrabold text-xs sm:text-sm flex items-center justify-center shrink-0 group-hover:bg-[#0f2147] group-hover:text-amber-400 transition-colors shadow-2xs">
                                        Q{{ $i + 1 }}
                                    </span>
                                    <span itemprop="name" class="font-heading font-bold text-slate-900 group-hover:text-blue-700 transition-colors text-sm sm:text-base leading-snug hindi">
                                        {{ $faq['q'] }}
                                    </span>
                                </div>
                                <div class="faq-toggle-icon w-8 h-8 rounded-full bg-slate-100 group-hover:bg-blue-50 text-slate-500 group-hover:text-blue-700 flex items-center justify-center shrink-0 transition-all duration-300 shadow-2xs">
                                    <svg class="faq-icon w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                                    </svg>
                                </div>
                            </button>
                            <div class="faq-answer px-5 sm:px-6 text-sm text-slate-600 leading-relaxed" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <div class="pt-3 pb-5 border-t border-slate-100 flex items-start gap-3">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-800 font-bold text-[0.7rem] uppercase shrink-0 mt-0.5">
                                        उत्तर
                                    </span>
                                    <p itemprop="text" class="hindi m-0 text-slate-700 text-sm sm:text-base leading-relaxed">
                                        {{ $faq['a'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Direct Help Sub-card --}}
                    <div class="mt-6 p-4 sm:p-5 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div>
                            <div class="font-heading font-bold text-sm text-slate-900 mb-0.5 hindi">
                                क्या आपका सवाल यहाँ नहीं मिला?
                            </div>
                            <div class="text-xs text-slate-500 hindi">
                                सीधे संपर्क करें — हमारी टीम तुरंत सहायता करेगी।
                            </div>
                        </div>
                        <div class="flex items-center gap-2 w-full sm:w-auto">
                            <a href="tel:+91{{ $service['contact_phone'] }}" class="inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-xl bg-[#0f2147] text-white text-xs font-bold hover:bg-blue-900 shadow-xs flex-1 sm:flex-none">
                                <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                <span>कॉल करें</span>
                            </a>
                            <a href="https://wa.me/91{{ $service['contact_phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-xl bg-[#16a34a] text-white text-xs font-bold hover:bg-emerald-700 shadow-xs flex-1 sm:flex-none">
                                <span>WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Embedded FAQ Style Block to guarantee instant rendering --}}
                <style>
                    .faq-item--open {
                        border-color: #2563eb !important;
                        box-shadow: 0 10px 25px -5px rgba(37, 99, 235, 0.08) !important;
                    }
                    .faq-item--open .faq-toggle-icon {
                        background-color: #0f2147 !important;
                        color: #f59e0b !important;
                    }
                    .faq-item--open .faq-icon {
                        transform: rotate(45deg);
                        color: #f59e0b !important;
                    }
                    .faq-answer {
                        max-height: 0;
                        overflow: hidden;
                        opacity: 0;
                        transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.25s ease;
                    }
                    .faq-item--open .faq-answer {
                        max-height: 800px;
                        opacity: 1;
                    }
                </style>
                @endif

            </div>

            {{-- ── Right Sticky Sidebar (4 cols) ── --}}
            <div class="lg:col-span-4 lg:sticky lg:top-24 space-y-6">

                {{-- Contact & Booking Card --}}
                <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                    <div class="flex items-center gap-3 pb-4 mb-4 border-b border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold text-lg">
                            📞
                        </div>
                        <div>
                            <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">Direct Helpdesk</div>
                            <div class="font-heading font-extrabold text-base text-[#0f2147]">सीधे संपर्क करें</div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="text-xs text-slate-400 font-semibold mb-0.5">प्रभाग प्रबंधक / In-Charge:</div>
                        <div class="font-heading font-bold text-slate-900 text-base">{{ $service['contact_name'] }}</div>
                    </div>

                    <div class="space-y-3 pt-3 border-t border-slate-100 mb-6 text-xs text-slate-600">
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400">फोन नंबर:</span>
                            <a href="tel:+91{{ $service['contact_phone'] }}" class="font-bold text-[#0f2147] hover:text-blue-700">
                                +91 {{ $service['contact_phone'] }}
                            </a>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400">स्थान:</span>
                            <span class="font-semibold text-slate-700">{{ config('site.address') }}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400">कार्य समय:</span>
                            <span class="font-semibold text-emerald-700">{{ config('site.business_hours') }}</span>
                        </div>
                    </div>

                    <div class="space-y-2.5">
                        <a href="tel:+91{{ $service['contact_phone'] }}" 
                           class="w-full inline-flex items-center justify-center gap-2 py-3 rounded-xl bg-[#0f2147] hover:bg-blue-900 text-white font-heading font-bold text-xs shadow-md transition-all">
                            <svg class="w-4 h-4 text-amber-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span>Call Now (+91 {{ $service['contact_phone'] }})</span>
                        </a>

                        <a href="https://wa.me/91{{ $service['contact_phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center gap-2 py-3 rounded-xl bg-[#16a34a] hover:bg-[#15803d] text-white font-heading font-bold text-xs shadow-md transition-all">
                            <span>WhatsApp करें</span>
                        </a>

                        <a href="{{ route('contact.show') }}" 
                           class="w-full inline-flex items-center justify-center gap-2 py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-heading font-semibold text-xs border border-slate-200 transition-all">
                            <span>ऑनलाइन पूछताछ फॉर्म →</span>
                        </a>
                    </div>
                </div>

                {{-- Other 5 Verticals Navigation --}}
                <div class="bg-slate-50 rounded-2xl border border-slate-200 p-6 shadow-2xs">
                    <h4 class="font-heading text-sm font-extrabold text-[#0f2147] mb-3 pb-2 border-b border-slate-200 uppercase tracking-wide">
                        अन्य 5 व्यावसायिक प्रभाग
                    </h4>
                    <div class="space-y-1">
                        @foreach($otherServices as $other)
                        <a href="{{ route('services.show', $other['slug']) }}" 
                           class="flex items-center justify-between p-2.5 rounded-xl text-xs font-semibold text-slate-700 hover:text-blue-700 hover:bg-white transition-all group">
                            <span>{{ $other['name'] }}</span>
                            <span class="text-slate-400 group-hover:text-blue-700 group-hover:translate-x-1 transition-transform">→</span>
                        </a>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "{{ $service['name'] }}",
    "description": "{{ addslashes($service['description']) }}",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "{{ config('site.name') }}",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Samastipur",
            "addressRegion": "Bihar",
            "addressCountry": "IN"
        },
        "telephone": "+91{{ config('site.phone_primary') }}"
    },
    "areaServed": "Samastipur, Bihar"
}
</script>
@endpush