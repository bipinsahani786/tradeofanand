@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════════════════════════
     1. HERO SECTION — Ultra-Modern Dark Luxury / Tech Prestige
     Inspired by smartindiadetective.in & skinfrareal.com
═══════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-gradient-to-br from-[#040814] via-[#091224] to-[#040711] min-h-[92vh] flex flex-col justify-center text-white border-b border-slate-800/80">

    {{-- Cyber Grid & Ambient Glowing Orbs --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        {{-- Vector Grid --}}
        <svg class="absolute inset-0 w-full h-full opacity-[0.05]" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="hero-cyber-grid" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse">
                    <path d="M 50 0 L 0 0 0 50" fill="none" stroke="#ffffff" stroke-width="0.8"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#hero-cyber-grid)"/>
        </svg>

        {{-- Glowing Orbs --}}
        <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full bg-blue-600/15 blur-[140px]"></div>
        <div class="absolute -bottom-40 -right-20 w-[550px] h-[550px] rounded-full bg-amber-500/15 blur-[130px]"></div>
        <div class="absolute top-1/2 left-1/3 -translate-y-1/2 w-[700px] h-[350px] rounded-full bg-cyan-600/10 blur-[120px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 pt-16 pb-12 lg:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            {{-- ── Left Content Column (7 cols) ── --}}
            <div class="lg:col-span-7">

                {{-- Live Radar Trust Pill --}}
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-gradient-to-r from-white/10 to-white/5 border border-amber-400/30 backdrop-blur-md mb-6 shadow-[0_0_20px_rgba(245,158,11,0.15)]">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-amber-400"></span>
                    </span>
                    <span class="text-xs font-extrabold tracking-wider uppercase text-amber-300">ESTD. 2011</span>
                    <span class="text-white/30">|</span>
                    <span class="text-xs font-semibold text-slate-200">Samastipur's Premier Business Group</span>
                </div>

                {{-- Bold High-Impact Headline --}}
                <h1 class="font-heading text-4xl sm:text-6xl lg:text-[4rem] font-extrabold text-white leading-[1.08] tracking-tight mb-5">
                    विश्वास, सुरक्षा और सेवा का <br class="hidden sm:inline">
                    <span class="bg-gradient-to-r from-amber-300 via-yellow-200 to-amber-500 bg-clip-text text-transparent drop-shadow-sm">
                        विश्वसनीय संस्थान
                    </span>
                </h1>

                <p class="text-lg sm:text-xl font-semibold text-amber-300/95 mb-4 hindi">
                    {{ config('site.tagline_hindi') }}
                </p>

                <p class="text-base sm:text-lg text-slate-300 mb-8 max-w-2xl hindi leading-relaxed">
                    {{ config('site.description') }}
                </p>

                {{-- Action Buttons (High-Conversion CTAs) --}}
                <div class="flex flex-wrap items-center gap-4 mb-10">
                    <a href="tel:+91{{ config('site.phone_primary') }}"
                       class="inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-heading font-extrabold text-sm tracking-wide shadow-[0_0_25px_rgba(245,158,11,0.35)] transition-all transform hover:-translate-y-0.5"
                       id="hero-call">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        तुरंत कॉल करें (+91 {{ config('site.phone_primary') }})
                    </a>

                    <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}"
                       class="inline-flex items-center justify-center gap-2.5 px-6 py-4 rounded-xl bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-500 hover:to-emerald-600 text-white font-heading font-bold text-sm tracking-wide shadow-[0_0_25px_rgba(16,185,129,0.3)] transition-all transform hover:-translate-y-0.5"
                       target="_blank" rel="noopener noreferrer" id="hero-wa">
                        <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                        </svg>
                        WhatsApp करें
                    </a>

                    <a href="{{ route('services.index') }}"
                       class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl border border-white/20 hover:border-amber-400 text-white hover:text-amber-300 font-heading font-semibold text-sm backdrop-blur-md transition-all hover:bg-white/5"
                       id="hero-services">
                        6 प्रमुख सेवाएँ देखें →
                    </a>
                </div>

                {{-- Fast Micro Highlights --}}
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-slate-800/80">
                    <div>
                        <div class="text-[0.68rem] uppercase tracking-wider text-slate-400 font-bold">Location</div>
                        <div class="text-sm font-semibold text-white">Mushrigharari, Samastipur</div>
                    </div>
                    <div>
                        <div class="text-[0.68rem] uppercase tracking-wider text-slate-400 font-bold">Network</div>
                        <div class="text-sm font-semibold text-white">All Bihar & Inter-District</div>
                    </div>
                    <div>
                        <div class="text-[0.68rem] uppercase tracking-wider text-slate-400 font-bold">Services</div>
                        <div class="text-sm font-semibold text-white">6 Specialized Verticals</div>
                    </div>
                </div>

            </div>

            {{-- ── Right Visual Column (5 cols) ── --}}
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    
                    {{-- Ambient Glow Backdrop --}}
                    <div class="absolute -inset-3 bg-gradient-to-tr from-amber-500/20 via-blue-600/25 to-cyan-400/20 rounded-3xl blur-2xl"></div>

                    {{-- Image Container Card --}}
                    <div class="relative rounded-2xl overflow-hidden border border-white/20 shadow-[0_20px_50px_rgba(0,0,0,0.6)] bg-slate-900 group">
                        <img
                            src="/images/hero/hero-main.jpg"
                            alt="Trade of Anand – Multi Sector Enterprise in Samastipur Bihar"
                            class="w-full aspect-[4/3] object-cover transition-transform duration-700 group-hover:scale-105"
                            width="600" height="450"
                            loading="eager"
                        >
                        {{-- Dark Gradient Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-[#040814]/90 via-transparent to-transparent opacity-80"></div>

                        {{-- Floating Verified Badge Strip on Image --}}
                        <div class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-[#091224]/85 backdrop-blur-xl border border-white/20 shadow-xl flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-amber-400 to-amber-600 text-slate-950 flex items-center justify-center font-bold text-lg shadow-md">
                                    ★
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-white">Govt Authorized & ISO Standard</div>
                                    <div class="text-[0.72rem] text-slate-300 hindi">पारदर्शिता और समयबद्ध विश्वसनीयता</div>
                                </div>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-[0.68rem] font-bold uppercase">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Verified
                            </span>
                        </div>
                    </div>

                    {{-- Floating Modern Stat Badges --}}
                    <div class="absolute -top-5 -right-5 bg-[#091224]/95 text-white rounded-2xl shadow-2xl p-4 min-w-[120px] text-center border border-amber-500/30 backdrop-blur-xl hidden sm:block animate-float">
                        <div class="font-heading text-2xl font-extrabold text-amber-400">15+</div>
                        <div class="text-[0.65rem] text-slate-300 font-bold uppercase tracking-wide">Years Trust</div>
                    </div>

                    <div class="absolute -bottom-5 -left-5 bg-[#091224]/95 text-white rounded-2xl shadow-2xl p-4 min-w-[120px] text-center border border-blue-500/30 backdrop-blur-xl hidden sm:block animate-float" style="animation-delay:0.5s">
                        <div class="font-heading text-2xl font-extrabold text-blue-400">6</div>
                        <div class="text-[0.65rem] text-slate-300 font-bold uppercase tracking-wide">Key Verticals</div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     2. CONTINUOUS PARTNER & CREDIBILITY TICKER STRIP
═══════════════════════════════════════════════════════════ --}}
<div class="bg-[#0b1325] border-y border-slate-800 py-3.5 overflow-hidden">
    <div class="marquee-track flex gap-12 whitespace-nowrap text-xs font-bold uppercase tracking-widest text-slate-300">
        <span class="inline-flex items-center gap-2"><span class="text-amber-400">★</span> Apollo Tyres Authorized Partner</span>
        <span class="text-slate-600">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-emerald-400">★</span> All Bihar Poultry Integration Logistics</span>
        <span class="text-slate-600">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-blue-400">★</span> Govt Authorized Vehicle PUC Centre</span>
        <span class="text-slate-600">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-amber-400">★</span> Anand Bhavan Prime Commercial Rental</span>
        <span class="text-slate-600">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-cyan-400">★</span> Anand Medicine Wholesale Pharmacy</span>
        <span class="text-slate-600">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-emerald-400">★</span> Complete Health & Motor Insurance Advisory</span>
        <span class="text-slate-600">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-amber-400">★</span> 15+ Years of Proven Business Excellence</span>
        <span class="text-slate-600">·</span>
        {{-- Duplicate for seamless loop --}}
        <span class="inline-flex items-center gap-2"><span class="text-amber-400">★</span> Apollo Tyres Authorized Partner</span>
        <span class="text-slate-600">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-emerald-400">★</span> All Bihar Poultry Integration Logistics</span>
        <span class="text-slate-600">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-blue-400">★</span> Govt Authorized Vehicle PUC Centre</span>
        <span class="text-slate-600">·</span>
        <span class="inline-flex items-center gap-2"><span class="text-amber-400">★</span> Anand Bhavan Prime Commercial Rental</span>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════
     3. KEY METRICS STRIP (Stat Counters with Elevation)
═══════════════════════════════════════════════════════════ --}}
<div class="relative z-20 py-8 bg-[#f8fafc] border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-xl border border-slate-200/80 p-6 md:p-8 grid grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 divide-y lg:divide-y-0 lg:divide-x divide-slate-100">
            @foreach($stats as $i => $stat)
            <div class="text-center pt-4 lg:pt-0 relative group">
                <span class="count-up block font-heading text-4xl sm:text-5xl font-extrabold text-[#0f2147] group-hover:text-amber-500 transition-colors leading-none mb-1">
                    {{ $stat['value'] }}
                </span>
                <span class="block text-sm font-bold text-slate-900 hindi">{{ $stat['label'] }}</span>
                @if(!empty($stat['sublabel']))
                <span class="block text-xs text-slate-500 mt-1">{{ $stat['sublabel'] }}</span>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════
     4. SERVICES OVERVIEW (The Direct Advantage Grid)
     Inspired by skinfrareal.com & smartindiadetective.in
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 bg-[#f8fafc] relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/25 text-amber-600 text-xs font-bold tracking-widest uppercase mb-3">
                    Our Comprehensive Portfolio
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2">
                    हमारी प्रमुख सेवाएँ <span class="text-[#0f2147]">/ Business Verticals</span>
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
            <div class="group flex flex-col h-full bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-2xl hover:-translate-y-2 hover:border-amber-400/50 transition-all duration-300 relative">
                
                {{-- Card Visual Header --}}
                <div class="relative aspect-[16/10] overflow-hidden bg-slate-900">
                    <img 
                        src="{{ $srv['image'] }}" 
                        alt="{{ $srv['name'] }} – Trade of Anand" 
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-108"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent opacity-75 group-hover:opacity-50 transition-opacity"></div>
                    
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
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-slate-900 mb-3 group-hover:text-[#0f2147] transition-colors">
                            {{ $srv['name'] }}
                        </h3>
                        <p class="text-sm text-slate-600 hindi leading-relaxed mb-6">
                            {{ $srv['short_desc'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#0f2147] group-hover:text-amber-600 transition-colors flex items-center gap-1.5">
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
     5. NEW: HOW WE WORK — 4-Step Process Section
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-white relative overflow-hidden border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/25 text-blue-700 text-xs font-bold tracking-widest uppercase mb-3">
                Transparent Execution
            </span>
            <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2 mb-3">
                हमारी कार्यप्रणाली <span class="text-[#0f2147]">/ How We Work</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg max-w-xl mx-auto hindi">
                ग्राहक की आवश्यकता से लेकर समयबद्ध समाधान तक — 4 सरल चरणों में सुरक्षित सेवा।
            </p>
        </div>

        {{-- Process Steps --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            {{-- Step 1 --}}
            <div class="p-6 rounded-2xl bg-[#f8fafc] border border-slate-200 hover:border-amber-400 transition-all hover:shadow-lg group">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[#0f2147] to-[#1a3567] text-amber-400 font-heading font-extrabold text-xl flex items-center justify-center mb-5 shadow-md">
                    01
                </div>
                <h4 class="font-heading text-lg font-bold text-slate-900 mb-2 hindi">आवश्यकता परामर्श</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wide font-bold mb-2">Step 1: Direct Enquiry</p>
                <p class="text-sm text-slate-600 hindi leading-relaxed m-0">कॉल, WhatsApp या कार्यालय आकर अपनी आवश्यकता साझा करें।</p>
            </div>

            {{-- Step 2 --}}
            <div class="p-6 rounded-2xl bg-[#f8fafc] border border-slate-200 hover:border-amber-400 transition-all hover:shadow-lg group">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[#0f2147] to-[#1a3567] text-amber-400 font-heading font-extrabold text-xl flex items-center justify-center mb-5 shadow-md">
                    02
                </div>
                <h4 class="font-heading text-lg font-bold text-slate-900 mb-2 hindi">पारदर्शी दर व योजना</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wide font-bold mb-2">Step 2: Custom Quotation</p>
                <p class="text-sm text-slate-600 hindi leading-relaxed m-0">सटीक मूल्य निर्धारण, उपलब्धता व स्पष्ट नियम-शर्तें तय की जाती हैं।</p>
            </div>

            {{-- Step 3 --}}
            <div class="p-6 rounded-2xl bg-[#f8fafc] border border-slate-200 hover:border-amber-400 transition-all hover:shadow-lg group">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[#0f2147] to-[#1a3567] text-amber-400 font-heading font-extrabold text-xl flex items-center justify-center mb-5 shadow-md">
                    03
                </div>
                <h4 class="font-heading text-lg font-bold text-slate-900 mb-2 hindi">समयबद्ध निष्पादन</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wide font-bold mb-2">Step 3: Fast Execution</p>
                <p class="text-sm text-slate-600 hindi leading-relaxed m-0">सख्त समय-सारणी, प्रमाणित गुणवत्ता और तत्परता के साथ कार्य पूर्ण।</p>
            </div>

            {{-- Step 4 --}}
            <div class="p-6 rounded-2xl bg-[#f8fafc] border border-slate-200 hover:border-amber-400 transition-all hover:shadow-lg group">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[#0f2147] to-[#1a3567] text-amber-400 font-heading font-extrabold text-xl flex items-center justify-center mb-5 shadow-md">
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
     6. ABOUT / WHO WE ARE (Deep Storytelling & Prestige)
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 bg-[#f8fafc] relative overflow-hidden border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            {{-- Image with Modern Floating Badges (5 cols) --}}
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto rounded-2xl overflow-hidden border border-slate-200 shadow-2xl">
                    <img 
                        src="/images/services/about-team.jpg" 
                        alt="Trade of Anand Leadership & Operations" 
                        class="w-full aspect-[4/3] object-cover"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#0f2147]/20 to-transparent"></div>
                </div>

                {{-- Floating Experience Card --}}
                <div class="absolute -bottom-8 -right-4 sm:-right-8 bg-white p-5 rounded-2xl shadow-2xl border border-slate-100 max-w-xs hidden sm:block animate-float">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 text-slate-950 flex items-center justify-center font-heading font-extrabold text-2xl shadow-md">
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
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/25 text-amber-600 text-xs font-bold tracking-widest uppercase mb-3">
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
     7. POULTRY & LOGISTICS INTEGRATION (Dark Mesh Section)
     Inspired by smartindiadetective.in High-Tech UI
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 md:py-32 bg-[#050a16] text-white relative overflow-hidden border-t border-slate-800">
    {{-- Ambient Neon Orbs --}}
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-blue-600/15 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-amber-500/15 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <div class="lg:col-span-5">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-400/10 border border-amber-400/25 text-amber-300 text-xs font-bold tracking-widest uppercase mb-3">
                    Industry Leadership
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-white mt-2 mb-6 leading-tight">
                    Poultry Integration Feed Delivery में <br>
                    <span class="text-amber-400">विश्वसनीय अनुभव</span>
                </h2>
                <p class="text-slate-300 text-base sm:text-lg mb-8 hindi leading-relaxed">
                    2016 से निरंतर Bihar के प्रमुख पोल्ट्री कंपनियों और किसानों के साथ निर्बाध फीड डिलीवरी, हाई-स्पीड कार्गो मूवमेंट और सुरक्षित फ्रेट प्रबंधन।
                </p>
                <div class="p-6 rounded-2xl bg-[#0d162b] border border-slate-700/80 shadow-xl mb-8">
                    <div class="font-heading text-3xl font-extrabold text-emerald-400 mb-1">100% On-Time Record</div>
                    <p class="text-xs text-slate-400 hindi m-0 leading-relaxed">सख्त समय-सारणी, जीपीएस ट्रैक्ड फ्लीट और प्रशिक्षित ड्राइवर्स के साथ सुरक्षित परिवहन।</p>
                </div>
                <a href="{{ route('contact.show') }}" class="btn-accent" id="poultry-team-btn">
                    लॉजिस्टिक्स साझेदारी हेतु संपर्क करें →
                </a>
            </div>

            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($poultry as $client)
                    @if($client['confirmed'])
                    <div class="p-6 rounded-2xl bg-[#0b1324] border border-slate-800 hover:border-amber-400/40 transition-all hover:-translate-y-1 shadow-lg">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-bold text-amber-400 uppercase tracking-wider">{{ $client['year'] }}</span>
                            <span class="inline-flex items-center gap-1.5 text-[0.65rem] font-bold text-emerald-400 uppercase">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Active
                            </span>
                        </div>
                        <h4 class="font-heading text-xl font-bold text-white mb-2">{{ $client['company'] }}</h4>
                        <p class="text-xs text-slate-400 hindi leading-relaxed m-0">Integration Feed Transport & Distribution Network across Bihar</p>
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
<section class="py-24 md:py-32 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/25 text-blue-700 text-xs font-bold tracking-widest uppercase mb-3">
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
            <div class="p-8 rounded-2xl bg-[#f8fafc] border border-slate-200 hover:border-amber-400 hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[#0f2147] to-[#040814] text-amber-400 flex items-center justify-center font-heading font-extrabold text-2xl shadow-md mb-6">
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
<section class="py-24 md:py-32 bg-[#f8fafc] border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/25 text-amber-600 text-xs font-bold tracking-widest uppercase mb-3">
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
            <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="aspect-[4/5] overflow-hidden bg-slate-900 relative">
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
                        <a href="tel:+91{{ $member['phone'] }}" class="btn-primary text-xs py-2 px-3 flex-1">
                            Call
                        </a>
                        <a href="https://wa.me/91{{ $member['phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="btn-whatsapp text-xs py-2 px-3 flex-1" target="_blank">
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
<section class="py-24 md:py-32 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/25 text-blue-700 text-xs font-bold tracking-widest uppercase mb-3">
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
            <div class="group cursor-pointer overflow-hidden aspect-square rounded-2xl relative shadow-sm hover:shadow-xl transition-all">
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
<section class="py-24 md:py-32 bg-[#f8fafc] border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <div class="lg:col-span-4">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/25 text-amber-600 text-xs font-bold tracking-widest uppercase mb-3">
                    Clear Answers
                </span>
                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-slate-900 mt-2 mb-4 leading-tight">
                    अक्सर पूछे जाने वाले सवाल
                </h2>
                <p class="text-slate-600 text-base hindi mb-8 leading-relaxed">
                    Trade of Anand की विभिन्न सेवाओं, दरों एवं संपर्क प्रक्रियाओं से संबंधित सामान्य प्रश्न।
                </p>
                <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                    <h4 class="font-heading text-lg font-bold text-slate-900 mb-2 hindi">कोई अन्य सवाल है?</h4>
                    <p class="text-xs text-slate-500 hindi mb-4">हमारी टीम आपकी सहायता के लिए हमेशा उपलब्ध है।</p>
                    <a href="tel:+91{{ config('site.phone_primary') }}" class="btn-primary text-xs w-full">
                        सीधे बात करें
                    </a>
                </div>
            </div>

            <div class="lg:col-span-8 space-y-4" itemscope itemtype="https://schema.org/FAQPage">
                @foreach($faqs as $index => $faq)
                <div class="faq-item bg-white rounded-2xl border border-slate-200 p-6 shadow-sm transition-all hover:border-amber-400" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="w-full flex justify-between items-center text-left font-semibold text-slate-900 bg-transparent border-0 cursor-pointer gap-4 group" aria-expanded="false" id="faq-q-{{ $index }}">
                        <span itemprop="name" class="font-heading text-lg sm:text-xl font-bold group-hover:text-[#0f2147] transition-colors hindi">{{ $faq['q'] }}</span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0 group-hover:bg-amber-100 transition-colors">
                            <svg class="faq-icon w-4 h-4 text-amber-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </button>
                    <div class="faq-answer pt-4 text-sm sm:text-base text-slate-600 leading-relaxed hindi border-t border-slate-100 mt-4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
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
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .marquee-track {
        display: flex;
        width: max-content;
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
