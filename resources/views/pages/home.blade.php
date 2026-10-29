@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════════════════════════
     1. HERO SECTION — Clean, Elegant Executive Light Theme
     Inspired by skinfrareal.com & Modern Corporate Portals
═══════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-gradient-to-b from-slate-50 via-white to-slate-50/80 py-16 sm:py-20 lg:py-24 border-b border-slate-200">

    {{-- Subtle Ambient Glows (Light & Airy - Desktop only to protect mobile viewport) --}}
    <div class="hidden sm:block absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/40 rounded-full blur-[120px] pointer-events-none" aria-hidden="true"></div>
    <div class="hidden sm:block absolute bottom-0 left-0 w-[500px] h-[500px] bg-amber-100/40 rounded-full blur-[120px] pointer-events-none" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center">

            {{-- ── Left Content Column (7 cols) ── --}}
            <div class="lg:col-span-7">

                {{-- Trust Pill --}}
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-[#0f2147] mb-5 shadow-sm max-w-full">
                    <span class="relative flex h-2 w-2 shrink-0">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-500 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="text-[0.68rem] sm:text-xs font-extrabold tracking-wider uppercase text-blue-900 shrink-0">Estd. 2011</span>
                    <span class="text-slate-300">|</span>
                    <span class="text-[0.68rem] sm:text-xs font-semibold text-slate-700 truncate">Samastipur's Premier Group</span>
                </div>

                {{-- Bold High-Contrast Heading --}}
                <h1 class="font-heading text-3xl sm:text-5xl lg:text-[3.6rem] font-extrabold text-slate-900 leading-[1.16] tracking-tight mb-4 sm:mb-5">
                    विश्वास, सुरक्षा और सेवा का <br class="hidden sm:inline">
                    <span class="bg-gradient-to-r from-blue-700 via-indigo-800 to-amber-600 bg-clip-text text-transparent">
                        विश्वसनीय संस्थान
                    </span>
                </h1>

                <p class="text-base sm:text-xl font-bold text-amber-700 mb-3 sm:mb-4 hindi">
                    {{ config('site.tagline_hindi') }}
                </p>

                <p class="text-sm sm:text-lg text-slate-600 mb-6 sm:mb-8 max-w-2xl hindi leading-relaxed">
                    {{ config('site.description') }}
                </p>

                {{-- High-Conversion CTAs --}}
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4 mb-10">
                    <a href="tel:+91{{ config('site.phone_primary') }}"
                       class="inline-flex items-center justify-center gap-2 px-5 sm:px-6 py-3.5 rounded-xl bg-[#0f2147] hover:bg-[#1a3875] text-white font-heading font-bold text-sm tracking-wide shadow-lg shadow-blue-950/20 transition-all transform hover:-translate-y-0.5 text-center w-full sm:w-auto"
                       id="hero-call">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span>तुरंत कॉल करें (+91 {{ config('site.phone_primary') }})</span>
                    </a>

                    <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}"
                       class="inline-flex items-center justify-center gap-2 px-5 sm:px-6 py-3.5 rounded-xl bg-[#16a34a] hover:bg-[#15803d] text-white font-heading font-bold text-sm tracking-wide shadow-lg shadow-emerald-600/20 transition-all transform hover:-translate-y-0.5 text-center w-full sm:w-auto"
                       target="_blank" rel="noopener noreferrer" id="hero-wa">
                        <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                        </svg>
                        <span>WhatsApp करें</span>
                    </a>

                    <a href="{{ route('services.index') }}"
                       class="inline-flex items-center justify-center gap-1.5 px-5 sm:px-6 py-3.5 rounded-xl bg-white border-2 border-slate-300 hover:border-blue-700 text-slate-800 hover:text-blue-700 font-heading font-bold text-sm shadow-sm transition-all text-center w-full sm:w-auto"
                       id="hero-services">
                        <span>6 प्रमुख सेवाएँ देखें →</span>
                    </a>
                </div>

                {{-- Micro Highlights (Responsive Stack on Mobile, 3-col on sm+) --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4 pt-6 border-t border-slate-200">
                    <div class="p-3 sm:p-0 rounded-xl sm:rounded-none bg-slate-50/80 sm:bg-transparent border sm:border-0 border-slate-100">
                        <div class="text-[0.68rem] uppercase tracking-wider text-slate-400 font-bold mb-0.5">Location</div>
                        <div class="text-sm font-bold text-slate-800 truncate">Mushrigharari, Samastipur</div>
                    </div>
                    <div class="p-3 sm:p-0 rounded-xl sm:rounded-none bg-slate-50/80 sm:bg-transparent border sm:border-0 border-slate-100">
                        <div class="text-[0.68rem] uppercase tracking-wider text-slate-400 font-bold mb-0.5">Network</div>
                        <div class="text-sm font-bold text-slate-800 truncate">All Bihar & Inter-District</div>
                    </div>
                    <div class="p-3 sm:p-0 rounded-xl sm:rounded-none bg-slate-50/80 sm:bg-transparent border sm:border-0 border-slate-100">
                        <div class="text-[0.68rem] uppercase tracking-wider text-slate-400 font-bold mb-0.5">Services</div>
                        <div class="text-sm font-bold text-slate-800 truncate">6 Specialized Verticals</div>
                    </div>
                </div>

            </div>

            {{-- ── Right Visual Column (5 cols) ── --}}
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    
                    {{-- Clean Shadow Backdrop --}}
                    <div class="absolute -inset-2 bg-gradient-to-tr from-blue-600/10 via-amber-500/10 to-indigo-600/10 rounded-3xl blur-xl"></div>

                    {{-- Image Card Container --}}
                    <div class="relative rounded-2xl overflow-hidden border border-slate-200/90 shadow-2xl bg-white p-2 group">
                        <div class="rounded-xl overflow-hidden aspect-[4/3] relative bg-slate-100">
                            <img
                                src="/images/services/about-team.jpg"
                                alt="Trade of Anand – Multi Sector Enterprise in Samastipur Bihar"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                width="600" height="450"
                                loading="eager"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>

                            {{-- Bottom Verified Card on Image --}}
                            <div class="absolute bottom-3 left-3 right-3 p-3.5 rounded-xl bg-white/95 backdrop-blur-md border border-white/80 shadow-lg flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-[#0f2147] text-amber-400 flex items-center justify-center font-bold text-base shadow-sm shrink-0">
                                        ★
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900">Govt Authorized & ISO Standards</div>
                                        <div class="text-[0.7rem] text-slate-500 hindi">पारदर्शिता और समयबद्ध विश्वसनीयता</div>
                                    </div>
                                </div>
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-700 text-[0.65rem] font-bold uppercase shrink-0">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Verified
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Floating Stat Badges (Clean White Glass) --}}
                    <div class="absolute -top-4 -right-4 bg-white text-slate-900 rounded-2xl shadow-xl p-3.5 min-w-[110px] text-center border border-slate-200/80 hidden sm:block animate-float">
                        <div class="font-heading text-2xl font-extrabold text-[#0f2147]">15+</div>
                        <div class="text-[0.65rem] text-slate-500 font-bold uppercase tracking-wide">Years Trust</div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 bg-white text-slate-900 rounded-2xl shadow-xl p-3.5 min-w-[110px] text-center border border-slate-200/80 hidden sm:block animate-float" style="animation-delay:0.5s">
                        <div class="font-heading text-2xl font-extrabold text-blue-700">6</div>
                        <div class="text-[0.65rem] text-slate-500 font-bold uppercase tracking-wide">Key Verticals</div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     2. CONTINUOUS PARTNER & CREDIBILITY TICKER (Light Theme)
═══════════════════════════════════════════════════════════ --}}
<div class="w-full max-w-full overflow-hidden bg-slate-100/90 border-b border-slate-200 py-2.5 sm:py-3.5 select-none" style="overflow: hidden; contain: paint layout; width: 100%;">
    <div class="marquee-track flex gap-6 sm:gap-12 whitespace-nowrap text-[0.7rem] sm:text-xs font-bold uppercase tracking-wider sm:tracking-widest text-slate-700">
        <span class="inline-flex items-center gap-2"><span class="text-amber-600">★</span> Apollo Tyres Authorized Partner</span>
        <span class="text-slate-400">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-emerald-600">★</span> All Bihar Poultry Integration Logistics</span>
        <span class="text-slate-400">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-blue-600">★</span> Govt Authorized Vehicle PUC Centre</span>
        <span class="text-slate-400">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-amber-600">★</span> Anand Bhavan Prime Commercial Rental</span>
        <span class="text-slate-400">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-indigo-600">★</span> Anand Medicine Wholesale Pharmacy</span>
        <span class="text-slate-400">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-emerald-600">★</span> Complete Health & Motor Insurance Advisory</span>
        <span class="text-slate-400">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-amber-600">★</span> 15+ Years of Dedicated Service in Samastipur</span>
        <span class="text-slate-400">·</span>
        {{-- Duplicate for seamless loop --}}
        <span class="inline-flex items-center gap-2"><span class="text-amber-600">★</span> Apollo Tyres Authorized Partner</span>
        <span class="text-slate-400">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-emerald-600">★</span> All Bihar Poultry Integration Logistics</span>
        <span class="text-slate-400">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-blue-600">★</span> Govt Authorized Vehicle PUC Centre</span>
        <span class="text-slate-400">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-amber-600">★</span> Anand Bhavan Prime Commercial Rental</span>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════
     3. KEY METRICS STRIP (Stat Counters with Clean White Card)
═══════════════════════════════════════════════════════════ --}}
<div class="relative z-20 py-6 sm:py-10 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-3 sm:px-6">
        <div class="bg-slate-50/90 rounded-2xl border border-slate-200/90 p-3 sm:p-6 md:p-8 grid grid-cols-2 lg:grid-cols-4 gap-2.5 sm:gap-6 shadow-sm">
            @foreach($stats as $i => $stat)
            <div class="text-center p-2.5 sm:p-4 rounded-xl bg-white border border-slate-100 sm:border-0 sm:bg-transparent shadow-xs sm:shadow-none group overflow-hidden">
                <span class="count-up block font-heading text-2xl sm:text-4xl md:text-5xl font-extrabold text-[#0f2147] group-hover:text-blue-700 transition-colors leading-none mb-1 truncate">
                    {{ $stat['value'] }}
                </span>
                <span class="block text-[0.72rem] sm:text-sm font-bold text-slate-900 hindi leading-tight">
                    {{ $stat['label'] }}
                </span>
                @if(!empty($stat['sublabel']))
                <span class="block text-[0.62rem] sm:text-xs text-slate-500 mt-1 truncate">
                    {{ $stat['sublabel'] }}
                </span>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════
     4. SERVICES OVERVIEW (The Direct Advantage Grid)
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-[#f8fafc] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-6">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-800 text-xs font-bold tracking-widest uppercase mb-3">
                    Our Business Verticals
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2">
                    हमारी प्रमुख सेवाएँ <span class="text-[#0f2147]">/ Core Divisions</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mt-3 text-base sm:text-lg hindi leading-relaxed">
                    एक छत के नीचे Transport, Insurance, Medicine Wholesale, Commercial Space Rental, Apollo Tyres, और Govt Authorized PUC Testing की सम्पूर्ण सुविधा।
                </p>
            </div>
            <a href="{{ route('services.index') }}" class="btn-outline shrink-0 self-start md:self-auto">
                All 6 Services Details →
            </a>
        </div>

        {{-- 6 Services Modern Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $idx => $srv)
            <div class="group flex flex-col h-full bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 relative">
                
                {{-- Card Visual Header --}}
                <div class="relative aspect-[16/10] overflow-hidden bg-slate-900">
                    <img 
                        src="{{ $srv['image'] }}" 
                        alt="{{ $srv['name'] }} – Trade of Anand" 
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-108"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent opacity-70 group-hover:opacity-50 transition-opacity"></div>
                    
                    {{-- Index Number Tag --}}
                    <div class="absolute top-4 left-4 px-3 py-1 rounded-md bg-white/95 backdrop-blur-md text-[#0f2147] font-heading font-extrabold text-xs shadow-sm">
                        0{{ $idx + 1 }}
                    </div>

                    {{-- Tagline Pill on bottom --}}
                    <div class="absolute bottom-4 left-4 right-4">
                        <span class="inline-block text-xs font-semibold text-amber-300 hindi bg-slate-900/80 backdrop-blur-md px-3 py-1 rounded-full border border-white/10">
                            {{ $srv['tagline'] }}
                        </span>
                    </div>
                </div>

                {{-- Card Content --}}
                <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition-colors">
                            {{ $srv['name'] }}
                        </h3>
                        <p class="text-sm text-slate-600 hindi leading-relaxed mb-6">
                            {{ $srv['short_desc'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#0f2147] group-hover:text-blue-700 transition-colors flex items-center gap-1.5">
                            विवरण देखें / View Details
                            <span class="transition-transform group-hover:translate-x-1">→</span>
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
     5. HOW WE WORK — 4-Step Process Section (Clean Light Theme)
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-white relative overflow-hidden border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-800 text-xs font-bold tracking-widest uppercase mb-3">
                Simple & Transparent
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2 mb-3">
                हमारी कार्यप्रणाली <span class="text-[#0f2147]">/ How We Work</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg max-w-xl mx-auto hindi">
                ग्राहक की आवश्यकता से लेकर समयबद्ध समाधान तक — 4 सरल चरणों में सुरक्षित सेवा।
            </p>
        </div>

        {{-- Process Steps Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            {{-- Step 1 --}}
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-500 hover:shadow-lg transition-all group">
                <div class="w-14 h-14 rounded-xl bg-[#0f2147] text-amber-400 font-heading font-extrabold text-xl flex items-center justify-center mb-5 shadow-md">
                    01
                </div>
                <h4 class="font-heading text-lg font-bold text-slate-900 mb-2 hindi">आवश्यकता परामर्श</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wide font-bold mb-2">Step 1: Direct Enquiry</p>
                <p class="text-sm text-slate-600 hindi leading-relaxed m-0">कॉल, WhatsApp या कार्यालय आकर अपनी आवश्यकता साझा करें।</p>
            </div>

            {{-- Step 2 --}}
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-500 hover:shadow-lg transition-all group">
                <div class="w-14 h-14 rounded-xl bg-[#0f2147] text-amber-400 font-heading font-extrabold text-xl flex items-center justify-center mb-5 shadow-md">
                    02
                </div>
                <h4 class="font-heading text-lg font-bold text-slate-900 mb-2 hindi">पारदर्शी दर व योजना</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wide font-bold mb-2">Step 2: Custom Quotation</p>
                <p class="text-sm text-slate-600 hindi leading-relaxed m-0">सटीक मूल्य निर्धारण, उपलब्धता व स्पष्ट नियम-शर्तें तय की जाती हैं।</p>
            </div>

            {{-- Step 3 --}}
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-500 hover:shadow-lg transition-all group">
                <div class="w-14 h-14 rounded-xl bg-[#0f2147] text-amber-400 font-heading font-extrabold text-xl flex items-center justify-center mb-5 shadow-md">
                    03
                </div>
                <h4 class="font-heading text-lg font-bold text-slate-900 mb-2 hindi">समयबद्ध निष्पादन</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wide font-bold mb-2">Step 3: Fast Execution</p>
                <p class="text-sm text-slate-600 hindi leading-relaxed m-0">सख्त समय-सारणी, प्रमाणित गुणवत्ता और तत्परता के साथ कार्य पूर्ण।</p>
            </div>

            {{-- Step 4 --}}
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-500 hover:shadow-lg transition-all group">
                <div class="w-14 h-14 rounded-xl bg-[#0f2147] text-amber-400 font-heading font-extrabold text-xl flex items-center justify-center mb-5 shadow-md">
                    04
                </div>
                <h4 class="font-heading text-lg font-bold text-slate-900 mb-2 hindi">निरंतर सहायता</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wide font-bold mb-2">Step 4: Lifelong Support</p>
                <p class="text-sm text-slate-600 hindi leading-relaxed m-0">सेवा के बाद भी नियमित फॉलो-अप, रिन्यूअल और सहायता उपलब्ध।</p>
            </div>

        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     6. ABOUT / WHO WE ARE (Deep Storytelling & Heritage)
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-[#f8fafc] relative overflow-hidden border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            {{-- Image with Modern Floating Badges (5 cols) --}}
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto rounded-2xl overflow-hidden border border-slate-200 shadow-xl bg-white p-2">
                    <img 
                        src="/images/services/about-team.jpg" 
                        alt="Trade of Anand Leadership & Operations" 
                        class="w-full aspect-[4/3] object-cover rounded-xl"
                        loading="lazy"
                    >
                </div>

                {{-- Floating Experience Card --}}
                <div class="absolute -bottom-6 -right-4 sm:-right-6 bg-white p-4 sm:p-5 rounded-2xl shadow-xl border border-slate-200 max-w-xs hidden sm:block animate-float">
                    <div class="flex items-center gap-3.5">
                        <div class="w-12 h-12 rounded-xl bg-[#0f2147] text-amber-400 flex items-center justify-center font-heading font-extrabold text-2xl shadow-md">
                            15+
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900">Years of Trust</div>
                            <div class="text-xs text-slate-500">Established in 2011</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Text & Vision (7 cols) --}}
            <div class="lg:col-span-7">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 border border-amber-200 text-amber-800 text-xs font-bold tracking-widest uppercase mb-3">
                    Legacy of Excellence
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2 mb-6 leading-tight">
                    एक समूह – अनेक सेवाएँ <br>
                    <span class="text-[#0f2147]">समर्पित नेतृत्व और पारदर्शी कार्यशैली</span>
                </h2>

                <p class="text-base sm:text-lg text-slate-700 mb-5 hindi leading-relaxed">
                    <strong>{{ config('site.formerly') }}</strong> के नाम से शुरू हुई यह प्रतिष्ठित यात्रा आज <strong>{{ config('site.name') }}</strong> के रूप में पूरे बिहार में विश्वसनीयता का प्रतीक बन चुकी है। Samastipur, Bihar में व्यावसायिक उत्कृष्टता, समयबद्ध लॉजिस्टिक्स और जन-जन तक स्वास्थ्य व बीमा सुरक्षा पहुँचाने का संकल्प ही हमारा आधार है।
                </p>

                <p class="text-sm sm:text-base text-slate-600 mb-8 hindi leading-relaxed">
                    2011 में Saurav Tyre Agency की स्थापना से लेकर आज Transport & Logistics, Anand Medicine Wholesale, Anand Bhavan Rental, और Vehicle Pollution Testing तक—हर क्षेत्र में हमने उच्च गुणवत्ता और निष्पक्षता को प्राथमिकता दी है।
                </p>

                {{-- Quick bullet points --}}
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
     7. POULTRY & LOGISTICS INTEGRATION (Clean Executive Slate)
     (User requested NO heavy dark themes, so clean corporate styling)
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <div class="lg:col-span-5">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 border border-amber-200 text-amber-800 text-xs font-bold tracking-widest uppercase mb-3">
                    Industry Leadership
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2 mb-6 leading-tight">
                    Poultry Integration Feed Delivery में <br>
                    <span class="text-blue-700">विश्वसनीय अनुभव</span>
                </h2>
                <p class="text-slate-600 text-base sm:text-lg mb-8 hindi leading-relaxed">
                    2016 से निरंतर Bihar के प्रमुख पोल्ट्री कंपनियों और किसानों के साथ निर्बाध फीड डिलीवरी, हाई-स्पीड कार्गो मूवमेंट और सुरक्षित फ्रेट प्रबंधन।
                </p>
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 shadow-sm mb-8">
                    <div class="font-heading text-3xl font-extrabold text-emerald-600 mb-1">100% On-Time Record</div>
                    <p class="text-xs text-slate-500 hindi m-0 leading-relaxed">सख्त समय-सारणी, जीपीएस ट्रैक्ड फ्लीट और प्रशिक्षित ड्राइवर्स के साथ सुरक्षित परिवहन।</p>
                </div>
                <a href="{{ route('contact.show') }}" class="btn-primary" id="poultry-team-btn">
                    लॉजिस्टिक्स साझेदारी हेतु संपर्क करें →
                </a>
            </div>

            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($poultry as $client)
                    @if($client['confirmed'])
                    <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-500 hover:shadow-md transition-all">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-bold text-blue-700 uppercase tracking-wider">{{ $client['year'] }}</span>
                            <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-bold text-emerald-700 uppercase bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Active
                            </span>
                        </div>
                        <h4 class="font-heading text-lg font-bold text-slate-900 mb-2">{{ $client['company'] }}</h4>
                        <p class="text-xs text-slate-500 hindi leading-relaxed m-0">Integration Feed Transport & Distribution Network across Bihar</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     8. WHY CHOOSE US (Feature Value Proposition)
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-[#f8fafc] border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-800 text-xs font-bold tracking-widest uppercase mb-3">
                Why Partner With Us
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2 mb-4">
                ग्राहकों की पहली पसंद क्यों है Trade of Anand?
            </h2>
            <p class="text-slate-600 text-base sm:text-lg hindi">
                Samastipur, Bihar में 15+ वर्षों से सत्यनिष्ठा, व्यक्तिगत मार्गदर्शन और समयबद्ध डिलीवरी।
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($why_choose as $index => $item)
            <div class="p-8 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-blue-500 transition-all duration-300">
                <div class="w-14 h-14 rounded-xl bg-[#0f2147] text-amber-400 flex items-center justify-center font-heading font-extrabold text-2xl shadow-md mb-6">
                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                </div>
                <h3 class="font-heading text-xl font-bold text-slate-900 mb-3 hindi">{{ $item['title'] }}</h3>
                <p class="text-sm text-slate-600 hindi leading-relaxed m-0">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     9. LEADERSHIP SPOTLIGHT (Executive Profile Cards)
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-800 text-xs font-bold tracking-widest uppercase mb-3">
                    Leadership & Vision
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2">
                    हमारा नेतृत्व मंडल <span class="text-[#0f2147]">/ Executive Team</span>
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
            <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300">
                <div class="aspect-[4/5] overflow-hidden bg-slate-100 relative">
                    <img 
                        src="{{ $member['image'] }}" 
                        alt="{{ $member['name'] }} – {{ $member['designation'] }}" 
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                    
                    <div class="absolute bottom-4 left-4 right-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-white/95 text-slate-900 text-xs font-bold shadow-md">
                            {{ $member['designation'] }}
                        </span>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-slate-900 mb-1">
                        {{ $member['name'] }}
                    </h3>
                    <p class="text-xs text-slate-500 mb-4">{{ $member['designation'] }}</p>

                    <div class="pt-3 border-t border-slate-100 flex items-center gap-2">
                        <a href="tel:+91{{ $member['phone'] }}" class="btn-primary text-xs py-2 px-3 flex-1 text-center">
                            Call
                        </a>
                        <a href="https://wa.me/91{{ $member['phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="btn-whatsapp text-xs py-2 px-3 flex-1 text-center" target="_blank">
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
     10. GALLERY SHOWCASE (Masonry Grid with Hover Zoom)
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-[#f8fafc] border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-800 text-xs font-bold tracking-widest uppercase mb-3">
                    Visual Highlights
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2">
                    हमारी झलकियाँ <span class="text-[#0f2147]">/ Gallery</span>
                </h2>
                <p class="text-slate-600 text-base sm:text-lg mt-3 hindi">
                    हमारे कार्यालय, ट्रांसपोर्ट फ्लीट, अपोलो टायर शोरूम और मेडिकल स्टोर की वास्तविक तस्वीरें।
                </p>
            </div>
            <a href="{{ route('gallery.show') }}" class="btn-outline shrink-0">
                Explore All 12 Photos →
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach(array_slice($gallery, 0, 6) as $idx => $img)
            <div class="group cursor-pointer overflow-hidden aspect-square rounded-2xl relative shadow-sm hover:shadow-xl transition-all border border-slate-200 bg-white">
                <img 
                    src="{{ $img['src'] }}" 
                    alt="{{ $img['alt'] }}" 
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    loading="lazy"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent opacity-0 group-hover:opacity-100 transition-all flex flex-col justify-end p-4">
                    <span class="text-white text-xs font-semibold leading-tight hindi">{{ $img['caption'] }}</span>
                    <span class="text-amber-300 text-[0.65rem] uppercase font-bold mt-1">Click to view</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     11. FREQUENTLY ASKED QUESTIONS (Modern Accordion)
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <div class="lg:col-span-4">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-800 text-xs font-bold tracking-widest uppercase mb-3">
                    Clear Answers
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2 mb-4 leading-tight">
                    अक्सर पूछे जाने वाले सवाल
                </h2>
                <p class="text-slate-600 text-base hindi mb-8 leading-relaxed">
                    Trade of Anand की विभिन्न सेवाओं, दरों एवं संपर्क प्रक्रियाओं से संबंधित सामान्य प्रश्न।
                </p>
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 shadow-sm">
                    <h4 class="font-heading text-lg font-bold text-slate-900 mb-2 hindi">कोई अन्य सवाल है?</h4>
                    <p class="text-xs text-slate-500 hindi mb-4">हमारी टीम आपकी सहायता के लिए हमेशा उपलब्ध है।</p>
                    <a href="tel:+91{{ config('site.phone_primary') }}" class="btn-primary text-xs w-full text-center">
                        सीधे बात करें
                    </a>
                </div>
            </div>

            <div class="lg:col-span-8 space-y-4" itemscope itemtype="https://schema.org/FAQPage">
                @foreach($faqs as $index => $faq)
                <div class="faq-item bg-[#f8fafc] rounded-2xl border border-slate-200 p-6 shadow-sm transition-all hover:border-blue-500" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="w-full flex justify-between items-center text-left font-semibold text-slate-900 bg-transparent border-0 cursor-pointer gap-4 group" aria-expanded="false" id="faq-q-{{ $index }}">
                        <span itemprop="name" class="font-heading text-lg sm:text-xl font-bold group-hover:text-blue-700 transition-colors hindi">{{ $faq['q'] }}</span>
                        <div class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center shrink-0 group-hover:bg-blue-50 transition-colors">
                            <svg class="faq-icon w-4 h-4 text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </button>
                    <div class="faq-answer pt-4 text-sm sm:text-base text-slate-600 leading-relaxed hindi border-t border-slate-200/80 mt-4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0">{{ $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- Marquee Continuous CSS --}}
<style>
    @keyframes marqueeScroll {
        0% { transform: translate3d(0, 0, 0); }
        100% { transform: translate3d(-50%, 0, 0); }
    }
    .marquee-track {
        display: flex;
        width: max-content;
        will-change: transform;
        animation: marqueeScroll 25s linear infinite;
    }
    .marquee-track:hover {
        animation-play-state: paused;
    }
</style>

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
