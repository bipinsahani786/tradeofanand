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
            <span class="text-blue-700 font-semibold">Our Services</span>
        </nav>

        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200/80 text-[#0f2147] text-xs font-bold tracking-wider uppercase mb-3 shadow-2xs">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                6 Integrated Business Verticals
            </div>
            <h1 class="font-heading text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0f2147] tracking-tight leading-tight mb-3">
                हमारी सेवाएँ <span class="text-slate-400 font-light text-2xl sm:text-3xl block sm:inline">| All 6 Business Verticals</span>
            </h1>
            <p class="text-base sm:text-lg text-slate-600 hindi leading-relaxed m-0">
                TRADE OF ANAND के अंतर्गत मुसरीघरारी (समस्तीपुर) में लॉजिस्टिक्स, बीमा परामर्श, थोक औषधि आपूर्ति, कमर्शियल स्पेस रेंटल, अपोलो टायर एजेंसी एवं सरकारी अधिकृत प्रदूषण जांच केंद्र।
            </p>
        </div>
    </div>
</div>

{{-- ============================================================
     2. 6 BUSINESS VERTICALS DETAILED SHOWCASE
     ============================================================ --}}
<section class="py-12 sm:py-20 bg-slate-50/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 sm:space-y-12">
        @foreach($services as $index => $srv)
        @php $isReverse = $index % 2 !== 0; @endphp
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 grid grid-cols-1 lg:grid-cols-12 items-center group relative" id="service-{{ $srv['slug'] }}">
            
            {{-- Service Photo Frame (5 cols) --}}
            <div class="lg:col-span-5 {{ $isReverse ? 'lg:order-2' : '' }} relative h-full min-h-[260px] sm:min-h-[340px] bg-slate-900 overflow-hidden">
                <img src="{{ $srv['image'] }}" 
                     alt="{{ $srv['name'] }} – Trade of Anand Samastipur" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" 
                     width="600" height="450" 
                     loading="lazy"
                     onerror="this.src='/images/hero/hero-main.jpg'; this.onerror=null;">
                
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>

                {{-- Index Pill --}}
                <div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#0f2147]/90 backdrop-blur-md text-amber-400 text-xs font-bold border border-white/20 shadow-md">
                    Vertical 0{{ $index + 1 }}
                </div>

                {{-- Tagline --}}
                <div class="absolute bottom-4 left-4 right-4 text-white">
                    <span class="inline-block text-xs font-semibold text-amber-300 hindi bg-slate-900/80 backdrop-blur-md px-3 py-1 rounded-full border border-white/10 truncate max-w-full">
                        {{ $srv['tagline'] }}
                    </span>
                </div>
            </div>

            {{-- Service Text Details (7 cols) --}}
            <div class="lg:col-span-7 {{ $isReverse ? 'lg:order-1' : '' }} p-6 sm:p-10 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-blue-700">
                            Trade of Anand Division
                        </span>
                        <span class="text-xs font-semibold text-emerald-600 flex items-center gap-1">
                            ● Active Operational
                        </span>
                    </div>

                    <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#0f2147] group-hover:text-blue-700 transition-colors mb-2">
                        <a href="{{ route('services.show', $srv['slug']) }}">
                            {{ $srv['name'] }}
                        </a>
                    </h2>

                    <p class="text-sm text-slate-600 hindi leading-relaxed mb-6">
                        {{ $srv['description'] }}
                    </p>

                    {{-- Offerings Pills --}}
                    <div class="mb-6">
                        <div class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">
                            मुख्य सेवाएँ एवं सुविधाएँ:
                        </div>
                        <div class="flex flex-wrap gap-2">
                            @foreach(array_slice($srv['offerings'], 0, 4) as $off)
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-lg bg-slate-100 text-slate-700 text-xs font-medium hindi">
                                <span class="text-blue-600 font-bold">✓</span> {{ $off }}
                            </span>
                            @endforeach
                            @if(count($srv['offerings']) > 4)
                            <span class="inline-flex items-center px-2 py-1 rounded-lg bg-blue-50 text-blue-700 text-xs font-semibold">
                                +{{ count($srv['offerings']) - 4 }} more
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Action Row --}}
                <div class="pt-5 border-t border-slate-100 flex flex-wrap items-center justify-between gap-3">
                    <div class="text-xs text-slate-500">
                        प्रभारी: <span class="font-bold text-slate-800">{{ $srv['contact_name'] }}</span>
                    </div>

                    <div class="flex items-center gap-2">
                        <a href="{{ route('services.show', $srv['slug']) }}" 
                           class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-[#0f2147] hover:bg-blue-900 text-white font-heading font-bold text-xs shadow-xs transition-colors">
                            <span>विस्तृत विवरण देखें</span>
                            <span>→</span>
                        </a>

                        <a href="tel:+91{{ $srv['contact_phone'] }}" 
                           class="inline-flex items-center gap-1.5 px-3.5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-heading font-bold text-xs transition-colors border border-slate-200"
                           title="Call In-Charge">
                            <svg class="w-3.5 h-3.5 text-blue-700" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span>कॉल</span>
                        </a>

                        <a href="https://wa.me/91{{ $srv['contact_phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-1.5 px-3.5 py-2.5 rounded-xl bg-[#16a34a] hover:bg-[#15803d] text-white font-heading font-bold text-xs transition-colors shadow-xs"
                           title="WhatsApp">
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        @endforeach
    </div>
</section>

{{-- ============================================================
     3. QUICK REFERENCE DIRECTORY TABLE
     ============================================================ --}}
<section class="py-14 sm:py-20 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-100 text-slate-800 text-xs font-bold uppercase tracking-wider mb-2">
                Quick Directory
            </span>
            <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#0f2147] tracking-tight">
                सेवा संदर्भ एवं संपर्क तालिका
            </h2>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-slate-200 shadow-sm">
            <table class="w-full border-collapse bg-white text-left text-sm">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-xs font-bold uppercase tracking-wider text-[#0f2147]">
                        <th class="px-6 py-4">सेवा / Business Vertical</th>
                        <th class="px-6 py-4">उपयुक्तता / Best For</th>
                        <th class="px-6 py-4">प्रभारी / Contact In-Charge</th>
                        <th class="px-6 py-4 text-right">कार्यवाही / Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($services as $srv)
                    <tr class="hover:bg-blue-50/40 transition-colors">
                        <td class="px-6 py-4 font-heading font-bold text-slate-900">
                            <a href="{{ route('services.show', $srv['slug']) }}" class="hover:text-blue-700 transition-colors flex items-center gap-2">
                                <span>{{ $srv['name'] }}</span>
                                <span class="text-xs text-blue-600">↗</span>
                            </a>
                        </td>
                        <td class="px-6 py-4 text-slate-600 hindi">
                            {{ implode(', ', array_slice($srv['who_for'] ?? [], 0, 2)) }}
                        </td>
                        <td class="px-6 py-4 text-slate-700">
                            <div class="font-semibold">{{ $srv['contact_name'] }}</div>
                            <a href="tel:+91{{ $srv['contact_phone'] }}" class="text-xs text-blue-700 font-bold hover:underline">
                                +91 {{ $srv['contact_phone'] }}
                            </a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('services.show', $srv['slug']) }}" class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-[#0f2147] text-white text-xs font-bold hover:bg-blue-900 transition-colors">
                                विवरण →
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection