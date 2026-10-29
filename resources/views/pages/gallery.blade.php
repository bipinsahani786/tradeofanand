@extends('layouts.app')

@section('content')

{{-- ============================================================
     1. LIGHT EXECUTIVE HERO BANNER
     ============================================================ --}}
<div class="relative bg-gradient-to-b from-slate-50 via-white to-slate-50/80 border-b border-slate-200/90 py-12 sm:py-16 overflow-hidden">
    {{-- Subtle Ambient Glows --}}
    <div class="hidden sm:block absolute top-0 left-1/4 w-[500px] h-[250px] bg-blue-100/40 rounded-full blur-[100px] pointer-events-none" aria-hidden="true"></div>
    <div class="hidden sm:block absolute bottom-0 right-1/4 w-[400px] h-[200px] bg-amber-100/40 rounded-full blur-[100px] pointer-events-none" aria-hidden="true"></div>
    <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-35 pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-xs text-slate-500 font-medium mb-4" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-blue-700 transition-colors">Home</a>
            <span class="text-slate-300">/</span>
            <span class="text-blue-700 font-semibold">Gallery</span>
        </nav>

        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200/80 text-[#0f2147] text-xs font-bold tracking-wider uppercase mb-4 shadow-2xs">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                100% Real Operational Facilities
            </div>
            <h1 class="font-heading text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0f2147] tracking-tight leading-tight mb-4">
                हमारी झलकियाँ <span class="text-slate-400 font-light text-2xl sm:text-3xl block sm:inline">| Operational Gallery</span>
            </h1>
            <p class="text-base sm:text-lg text-slate-600 hindi leading-relaxed m-0">
                Trade of Anand के मुसरीघरारी (समस्तीपुर) स्थित व्यावसायिक प्रतिष्ठान, ट्रांसपोर्ट फ्लीट, अपोलो टायर एजेंसी, आनंद मेडिसिन, आनंद भवन एवं अधिकृत प्रदूषण जांच केंद्र की वास्तविक तस्वीरें।
            </p>
        </div>

        {{-- Verification Micro Pills --}}
        <div class="flex flex-wrap items-center gap-3 mt-6 pt-6 border-t border-slate-200/80 text-xs text-slate-600">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-white border border-slate-200 shadow-2xs font-semibold">
                📍 मुसरीघरारी, समस्तीपुर (बिहार)
            </span>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-white border border-slate-200 shadow-2xs font-semibold text-blue-700">
                ✓ 6 सक्रिय व्यावसायिक प्रभाग
            </span>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-white border border-slate-200 shadow-2xs font-semibold text-emerald-700">
                ★ वास्तविक ऑन-ग्राउंड इन्फ्रास्ट्रक्चर
            </span>
        </div>
    </div>
</div>

{{-- ============================================================
     2. INTERACTIVE GALLERY & FILTER TABS
     ============================================================ --}}
<section class="py-12 sm:py-20 bg-slate-50/60 min-h-[600px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Category Label Mapping --}}
        @php
            $categoryNames = [
                'all'               => 'सभी तस्वीरें (All)',
                'transport'         => 'ट्रांसपोर्ट व लॉजिस्टिक्स',
                'insurance'         => 'बीमा सेवाएँ (Insurance)',
                'medicine'          => 'आनंद मेडिसिन (Wholesale)',
                'bhavan'            => 'आनंद भवन (Rental)',
                'tyre'              => 'अपोलो टायर एजेंसी',
                'pollution-testing' => 'प्रदूषण जांच केंद्र',
                'team'              => 'नेतृत्व व कार्यालय (HQ)',
            ];
            $availableCats = array_unique(array_column($gallery, 'category'));
        @endphp

        {{-- Filter Pills Scrollable Row --}}
        <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-8 sm:mb-12 no-scrollbar" role="tablist" aria-label="Gallery category filter">
            <button class="filter-tab shrink-0 px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold transition-all shadow-xs cursor-pointer border bg-[#0f2147] text-white border-[#0f2147] filter-tab--active"
                    data-filter="all"
                    role="tab">
                {{ $categoryNames['all'] }}
            </button>

            @foreach($availableCats as $catSlug)
            <button class="filter-tab shrink-0 px-5 py-2.5 rounded-full text-xs sm:text-sm font-semibold transition-all shadow-xs cursor-pointer border bg-white text-slate-700 border-slate-200 hover:bg-slate-50 hover:border-slate-300"
                    data-filter="{{ $catSlug }}"
                    role="tab">
                {{ $categoryNames[$catSlug] ?? ucfirst($catSlug) }}
            </button>
            @endforeach
        </div>

        {{-- Gallery Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8" id="gallery-grid">
            @foreach($gallery as $img)
            @php
                $catKey = $img['category'];
                $catBadge = $categoryNames[$catKey] ?? ucfirst($catKey);
            @endphp
            <div class="gallery-item group relative bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 cursor-pointer flex flex-col justify-between"
                 data-category="{{ $catKey }}"
                 data-src="{{ $img['src'] }}"
                 data-caption="{{ $img['caption'] }} – Trade of Anand Samastipur"
                 role="button"
                 tabindex="0"
                 aria-label="View {{ $img['caption'] }}">
                
                {{-- Image Frame --}}
                <div class="relative aspect-[4/3] overflow-hidden bg-slate-900">
                    <img src="{{ $img['src'] }}" 
                         alt="{{ $img['alt'] }}" 
                         class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-500" 
                         width="480" height="360" 
                         loading="lazy"
                         onerror="this.src='/images/hero/hero-main.jpg'; this.onerror=null;">
                    
                    {{-- Ambient gradient on hover --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>

                    {{-- Category Tag Pill --}}
                    <div class="absolute top-3.5 left-3.5">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#0f2147]/90 backdrop-blur-md text-amber-300 text-[0.72rem] font-bold shadow-md border border-white/15">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                            {{ $catBadge }}
                        </span>
                    </div>

                    {{-- Zoom Trigger Floating Icon --}}
                    <div class="absolute top-3.5 right-3.5 w-9 h-9 rounded-full bg-white/95 text-[#0f2147] flex items-center justify-center shadow-lg opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-90 group-hover:scale-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                        </svg>
                    </div>
                </div>

                {{-- Card Meta & Caption --}}
                <div class="p-5 flex-1 flex flex-col justify-between bg-white">
                    <div>
                        <div class="flex items-center justify-between gap-2 mb-1">
                            <span class="text-[0.7rem] font-bold uppercase tracking-wider text-slate-400">
                                Trade of Anand · Facility
                            </span>
                            <span class="text-xs font-semibold text-emerald-600 flex items-center gap-1">
                                <span>●</span> Verified
                            </span>
                        </div>
                        <h3 class="font-heading text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors leading-snug">
                            {{ $img['caption'] }}
                        </h3>
                    </div>

                    <div class="pt-3 mt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-medium">समस्तीपुर, बिहार</span>
                        <span class="text-blue-700 font-bold group-hover:translate-x-1 transition-transform inline-flex items-center gap-1">
                            View Fullscreen <span>→</span>
                        </span>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        {{-- No Results State --}}
        <div id="gallery-no-results" class="hidden text-center py-16 bg-white rounded-2xl border border-slate-200 shadow-sm mt-8">
            <div class="w-12 h-12 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/><line x1="8" y1="12" x2="16" y2="12"/>
                </svg>
            </div>
            <h4 class="font-heading text-lg font-bold text-slate-800 mb-1">इस श्रेणी में कोई तस्वीर नहीं मिली</h4>
            <p class="text-xs text-slate-500 hindi mb-4">कृपया अन्य श्रेणी चुनें अथवा सभी तस्वीरें देखें।</p>
            <button onclick="document.querySelector('.filter-tab[data-filter=\'all\']').click()" 
                    class="px-4 py-2 rounded-xl bg-[#0f2147] text-white text-xs font-bold hover:bg-blue-900 transition-colors">
                सभी तस्वीरें देखें (Reset)
            </button>
        </div>

    </div>
</section>

{{-- ============================================================
     3. ON-SITE VISIT INVITATION & VERIFICATION BANNER
     ============================================================ --}}
<section class="py-14 sm:py-20 bg-white border-t border-slate-200/90">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-blue-50/60 via-slate-50 to-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <div class="lg:col-span-8">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-slate-200 text-slate-800 text-xs font-bold mb-3 shadow-2xs">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        On-Site Facility Visit Welcome
                    </div>
                    <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#0f2147] tracking-tight mb-2">
                        हमारे मुसरीघरारी (समस्तीपुर) मुख्य कार्यालय में पधारें
                    </h2>
                    <p class="text-sm text-slate-600 hindi leading-relaxed m-0 mb-4">
                        हमारी सभी सुविधाएँ — ट्रांसपोर्ट यार्ड, अपोलो टायर शोरूम, आनंद मेडिसिन थोक स्टोर, आनंद भवन एवं अधिकृत PUC केंद्र एक ही मुख्य परिसर में संचालित हैं। व्यक्तिगत रूप से मिलकर सेवा की गुणवत्ता का अनुभव करें।
                    </p>
                    <div class="flex flex-wrap items-center gap-4 text-xs font-semibold text-slate-700">
                        <div class="flex items-center gap-1.5">
                            <span class="text-blue-700 font-bold">📍 पता:</span>
                            <span>{{ config('site.address') }}</span>
                        </div>
                        <span class="text-slate-300">|</span>
                        <div class="flex items-center gap-1.5">
                            <span class="text-amber-600 font-bold">⏰ समय:</span>
                            <span>{{ config('site.business_hours') }}</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3">
                    <a href="https://maps.google.com/?q=Mushrigharari+Samastipur+Bihar" 
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-[#0f2147] hover:bg-blue-900 text-white font-heading font-bold text-sm shadow-md transition-all text-center">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>Google Map पर लोकेशन देखें</span>
                    </a>

                    <a href="tel:+91{{ config('site.phone_primary') }}" 
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white hover:bg-slate-100 text-slate-800 font-heading font-bold text-sm shadow-xs border border-slate-200 transition-all text-center">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <span>कॉल करें (+91 {{ config('site.phone_primary') }})</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     4. ULTRA-MODERN LIGHTBOX MODAL
     ============================================================ --}}
<div class="lightbox fixed inset-0 z-[9999] bg-slate-950/90 backdrop-blur-md flex items-center justify-center p-4 sm:p-6" 
     id="lightbox" 
     role="dialog" 
     aria-modal="true" 
     aria-label="Image Lightbox Viewer">
    
    {{-- Close Button --}}
    <button class="fixed top-5 right-5 sm:top-6 sm:right-6 w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center cursor-pointer transition-all border border-white/20 z-50 backdrop-blur-md" 
            id="lightbox-close" 
            aria-label="Close Lightbox">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
    </button>

    {{-- Previous Button --}}
    <button class="fixed left-3 sm:left-6 top-1/2 -translate-y-1/2 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/10 hover:bg-white/25 text-white flex items-center justify-center cursor-pointer transition-all border border-white/20 z-50 backdrop-blur-md" 
            id="lightbox-prev" 
            aria-label="Previous Image">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <polyline points="15 18 9 12 15 6"/>
        </svg>
    </button>

    {{-- Next Button --}}
    <button class="fixed right-3 sm:right-6 top-1/2 -translate-y-1/2 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/10 hover:bg-white/25 text-white flex items-center justify-center cursor-pointer transition-all border border-white/20 z-50 backdrop-blur-md" 
            id="lightbox-next" 
            aria-label="Next Image">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"/>
        </svg>
    </button>

    {{-- Center Image & Caption Container --}}
    <div class="relative max-w-4xl max-h-[90vh] flex flex-col items-center z-10" onclick="event.stopPropagation()">
        
        {{-- Counter Badge --}}
        <div class="mb-3">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 backdrop-blur-md text-amber-300 text-xs font-bold border border-white/20" 
                  id="lightbox-counter">
                1 / 12
            </span>
        </div>

        {{-- Main Lightbox Photo --}}
        <div class="relative rounded-2xl overflow-hidden border border-white/20 shadow-2xl bg-black">
            <img src="" 
                 alt="" 
                 id="lightbox-img" 
                 class="max-w-[88vw] sm:max-w-[80vw] max-h-[68vh] sm:max-h-[72vh] object-contain">
        </div>

        {{-- Bottom Caption Bar --}}
        <div class="mt-4 px-4 py-2 text-center max-w-2xl">
            <p id="lightbox-caption" class="text-white font-heading font-bold text-sm sm:text-base m-0 tracking-wide"></p>
            <p class="text-slate-400 text-xs mt-1 m-0 hindi">TRADE OF ANAND · मुसरीघरारी (समस्तीपुर, बिहार)</p>
        </div>

    </div>
</div>

@endsection