@extends('layouts.app')

@section('content')

{{-- ============================================================
     1. LIGHT EXECUTIVE HERO BANNER
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
            <span class="text-blue-700 font-semibold">Our Team</span>
        </nav>

        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200/80 text-[#0f2147] text-xs font-bold tracking-wider uppercase mb-4 shadow-2xs">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                Executive Leadership & Management
            </div>
            <h1 class="font-heading text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0f2147] tracking-tight leading-tight mb-4">
                हमारा नेतृत्व मंडल <span class="text-slate-400 font-light text-2xl sm:text-3xl block sm:inline">| Leadership Team</span>
            </h1>
            <p class="text-base sm:text-lg text-slate-600 hindi leading-relaxed m-0">
                15+ वर्षों से समस्तीपुर एवं समस्त बिहार में विश्वास, सुरक्षा और समर्पित सेवा का प्रतीक। अनुभवी नेतृत्व एवं समर्पित युवा प्रबंधन का सुदृढ़ संयोजन।
            </p>
        </div>

        {{-- Micro Trust Metrics --}}
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 mt-8 pt-8 border-t border-slate-200/80">
            <div class="bg-white/90 backdrop-blur-xs p-3.5 rounded-xl border border-slate-200 shadow-2xs">
                <div class="font-heading font-extrabold text-xl sm:text-2xl text-[#0f2147]">15+ Years</div>
                <div class="text-xs text-slate-500 hindi font-medium mt-0.5">व्यावसायिक विश्वसनीयता</div>
            </div>
            <div class="bg-white/90 backdrop-blur-xs p-3.5 rounded-xl border border-slate-200 shadow-2xs">
                <div class="font-heading font-extrabold text-xl sm:text-2xl text-blue-700">6 Verticals</div>
                <div class="text-xs text-slate-500 hindi font-medium mt-0.5">सक्रिय व्यवसाय प्रभाग</div>
            </div>
            <div class="bg-white/90 backdrop-blur-xs p-3.5 rounded-xl border border-slate-200 shadow-2xs">
                <div class="font-heading font-extrabold text-xl sm:text-2xl text-emerald-700">100%</div>
                <div class="text-xs text-slate-500 hindi font-medium mt-0.5">पारदर्शी व निष्पक्ष सेवा</div>
            </div>
            <div class="bg-white/90 backdrop-blur-xs p-3.5 rounded-xl border border-slate-200 shadow-2xs">
                <div class="font-heading font-extrabold text-xl sm:text-2xl text-amber-600">24×7</div>
                <div class="text-xs text-slate-500 hindi font-medium mt-0.5">फील्ड सपोर्ट एवं मार्गदर्शन</div>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================
     2. CHAIRMAN SPOTLIGHT SECTION (Sanjeev Kumar Suman)
     ============================================================ --}}
@php $chairman = collect($team)->firstWhere('is_chairman', true) ?? collect($team)->firstWhere('name', 'Sanjeev Kumar Suman'); @endphp
@if($chairman)
<section class="py-12 sm:py-20 bg-white border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-gradient-to-br from-slate-50 via-white to-blue-50/20 rounded-3xl p-6 sm:p-10 md:p-12 border border-slate-200 shadow-[0_15px_40px_rgba(15,33,71,0.06)]">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                {{-- Chairman Photo Card --}}
                <div class="lg:col-span-5">
                    <div class="relative mx-auto max-w-sm lg:max-w-none">
                        {{-- Photo Frame --}}
                        <div class="relative rounded-2xl overflow-hidden border-2 border-amber-400/40 shadow-xl bg-slate-900 group">
                            <img src="{{ $chairman['image'] }}" 
                                 alt="{{ $chairman['name'] }} – Chairman, Trade of Anand" 
                                 class="w-full aspect-[4/5] object-cover group-hover:scale-103 transition-transform duration-500" 
                                 width="420" height="525" 
                                 loading="eager"
                                 onerror="this.src='/images/hero/hero-main.jpg'; this.onerror=null;">
                            
                            {{-- Photo Bottom Gradient Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>

                            {{-- Corner Brand Stamp --}}
                            <div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#0f2147]/90 backdrop-blur-md border border-amber-400/40 text-amber-300 text-xs font-bold shadow-lg">
                                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                                Chairman & Founder
                            </div>

                            {{-- Bottom Name Plate on Photo --}}
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <div class="font-heading text-xl font-extrabold tracking-tight">{{ $chairman['name'] }}</div>
                                <div class="text-xs text-amber-300 font-semibold">Samastipur, Bihar · Decades of Service</div>
                            </div>
                        </div>

                        {{-- Decorative Shadow Elements --}}
                        <div class="absolute -bottom-3 -right-3 w-full h-full rounded-2xl border-2 border-dashed border-[#0f2147]/20 -z-10 hidden sm:block"></div>
                    </div>
                </div>

                {{-- Chairman Leadership Bio & Credentials --}}
                <div class="lg:col-span-7">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-amber-50 border border-amber-300/80 text-amber-800 text-xs font-bold tracking-wider uppercase mb-3">
                        <span class="text-amber-600 font-extrabold">★</span>
                        संस्थापक एवं चेयरमैन
                    </div>

                    <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-[#0f2147] tracking-tight mb-1">
                        {{ $chairman['name'] }}
                    </h2>
                    <p class="text-blue-700 font-semibold text-base mb-6">
                        {{ $chairman['designation'] }}
                    </p>

                    {{-- Chairman's Quote --}}
                    <div class="relative bg-white rounded-2xl p-5 sm:p-6 border-l-4 border-amber-500 border-t border-r border-b border-slate-200/90 shadow-sm mb-6">
                        <svg class="w-8 h-8 text-amber-300/60 absolute top-4 right-4 pointer-events-none" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <p class="text-sm sm:text-base text-slate-700 italic hindi leading-relaxed m-0 font-medium">
                            "M/S Sanjeev Kumar Suman के नाम से शुरू किए गए इस सफर को आज हमने TRADE OF ANAND के रूप में एक संपूर्ण व्यावसायिक मंच बनाया है। हमारा संकल्प हमेशा हर ग्राहक को सही सलाह, पारदर्शी दर और भरोसेमंद सेवा उपलब्ध कराना रहा है।"
                        </p>
                    </div>

                    <p class="text-sm sm:text-base text-slate-600 hindi leading-relaxed mb-6">
                        {{ $chairman['bio'] }}
                    </p>

                    {{-- Official Industry Leadership Positions --}}
                    @if(!empty($chairman['associations']))
                    <div class="mb-8">
                        <div class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-3 flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-700"></span>
                            प्रमुख आधिकारिक पद एवं उत्तरदायित्व:
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            @foreach($chairman['associations'] as $assoc)
                            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200/90 shadow-2xs">
                                <div class="w-6 h-6 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <span class="text-xs sm:text-sm font-semibold text-slate-800 leading-snug">{{ $assoc }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    {{-- Chairman Direct Contact Stack --}}
                    <div class="flex flex-wrap items-center gap-3 pt-4 border-t border-slate-200/80">
                        <a href="tel:+91{{ $chairman['phone'] }}" 
                           class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-[#0f2147] hover:bg-blue-900 text-white font-heading font-bold text-sm shadow-md transition-all transform hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-amber-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <span>Call {{ $chairman['name'] }}</span>
                        </a>

                        <a href="https://wa.me/91{{ $chairman['phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-[#16a34a] hover:bg-[#15803d] text-white font-heading font-bold text-sm shadow-md transition-all transform hover:-translate-y-0.5">
                            <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                            </svg>
                            <span>WhatsApp</span>
                        </a>

                        @if(!empty($chairman['email']))
                        <a href="mailto:{{ $chairman['email'] }}" 
                           class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-heading font-semibold text-sm transition-colors border border-slate-200">
                            <svg class="w-4 h-4 text-slate-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <span>Email</span>
                        </a>
                        @endif
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>
@endif

{{-- ============================================================
     3. EXECUTIVE DIRECTORS & OPERATIONAL HEADS
     ============================================================ --}}
@php $directors = collect($team)->where('is_chairman', false)->values(); @endphp
@if($directors->count())
<section class="py-16 sm:py-24 bg-slate-50/70 border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-200/80 text-blue-800 text-xs font-bold tracking-wider uppercase mb-3">
                <span class="w-1.5 h-1.5 rounded-full bg-blue-700"></span>
                Executive Leadership Team
            </div>
            <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-[#0f2147] tracking-tight">
                प्रमुख प्रबंध निदेशक एवं प्रभाग प्रमुख
            </h2>
            <p class="text-sm sm:text-base text-slate-600 hindi mt-2">
                विभिन्न व्यावसायिक प्रभागों के सुचारू संचालन और त्वरित ग्राहक सेवा हेतु समर्पित हमारी कोर टीम।
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($directors as $member)
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col group">
                
                {{-- Member Photo Container --}}
                <div class="relative aspect-[4/5] overflow-hidden bg-slate-900">
                    <img src="{{ $member['image'] }}" 
                         alt="{{ $member['name'] }} – {{ $member['designation'] }}, Trade of Anand" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                         width="400" height="500" 
                         loading="lazy"
                         onerror="this.src='/images/hero/hero-main.jpg'; this.onerror=null;">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>

                    {{-- Role Floating Pill --}}
                    <div class="absolute top-3 left-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#0f2147]/90 backdrop-blur-md border border-white/20 text-white text-xs font-bold shadow-md">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                            {{ $member['designation'] }}
                        </span>
                    </div>

                    {{-- Bottom Overlay Tag on Photo --}}
                    <div class="absolute bottom-3 left-4 right-4 text-white">
                        <div class="font-heading text-xl font-bold tracking-tight leading-tight">{{ $member['name'] }}</div>
                        <div class="text-xs text-amber-300/90 font-medium mt-0.5">Trade of Anand · Bihar</div>
                    </div>
                </div>

                {{-- Member Body Details --}}
                <div class="p-5 sm:p-6 flex-1 flex flex-col justify-between">
                    <div>
                        {{-- Dedicated Division Assignment --}}
                        <div class="mb-3">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-blue-50 border border-blue-100 text-blue-800 text-[0.72rem] font-bold">
                                🎯 @if(str_contains($member['name'], 'Abhinav'))
                                    Insurance, Medicine Wholesale & Operations
                                   @elseif(str_contains($member['name'], 'Keshav'))
                                    Business Growth, Fleet Logistics & Rental
                                   @else
                                    Field Operations & Govt PUC Testing Center
                                   @endif
                            </span>
                        </div>

                        <p class="text-xs sm:text-sm text-slate-600 hindi leading-relaxed mb-4">
                            {{ $member['bio'] }}
                        </p>
                    </div>

                    {{-- Quick Action Stack --}}
                    <div class="pt-4 border-t border-slate-100 flex items-center gap-2">
                        <a href="tel:+91{{ $member['phone'] }}" 
                           class="flex-1 inline-flex items-center justify-center gap-2 py-2.5 px-3 rounded-xl bg-[#0f2147] hover:bg-blue-900 text-white font-heading font-bold text-xs shadow-xs transition-colors">
                            <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span>Call</span>
                        </a>

                        <a href="https://wa.me/91{{ $member['phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="flex-1 inline-flex items-center justify-center gap-2 py-2.5 px-3 rounded-xl bg-[#16a34a] hover:bg-[#15803d] text-white font-heading font-bold text-xs shadow-xs transition-colors">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/></svg>
                            <span>WhatsApp</span>
                        </a>

                        @if(!empty($member['email']))
                        <a href="mailto:{{ $member['email'] }}" 
                           class="p-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition-colors border border-slate-200" 
                           title="Send Email">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </a>
                        @endif
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>
@endif

{{-- ============================================================
     4. BUSINESS JOURNEY / MILESTONE TIMELINE
     ============================================================ --}}
@if(!empty($journey))
<section class="py-16 sm:py-24 bg-white border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-amber-50 border border-amber-300 text-amber-800 text-xs font-bold tracking-wider uppercase mb-3">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                Our Growth Story
            </div>
            <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-[#0f2147] tracking-tight">
                विकास का सफरनामा : 2011 से 2026 तक
            </h2>
            <p class="text-sm sm:text-base text-slate-600 hindi mt-2">
                एक छोटे कदम से शुरू होकर आज समस्तीपुर व बिहार के प्रतिष्ठित बहु-सेवा संस्थान बनने तक का हमारा सफर।
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($journey as $item)
            <div class="relative bg-slate-50 rounded-2xl p-6 border border-slate-200 hover:border-blue-400 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                <div>
                    {{-- Year Badge --}}
                    <div class="flex items-center justify-between mb-4">
                        <span class="font-heading text-2xl font-extrabold text-[#0f2147] group-hover:text-blue-700 transition-colors">
                            {{ $item['year'] }}
                        </span>
                        <span class="w-8 h-8 rounded-full bg-blue-100/70 text-blue-800 flex items-center justify-center text-xs font-bold group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            #0{{ $loop->iteration }}
                        </span>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900 mb-2">
                        {{ $item['name'] }}
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 hindi leading-relaxed m-0">
                        {{ $item['desc'] }}
                    </p>
                </div>

                <div class="mt-4 pt-3 border-t border-slate-200/80 flex items-center gap-2 text-xs font-semibold text-emerald-700">
                    <span>✓</span>
                    <span>सफलतापूर्वक स्थापित एवं निरंतर सेवारत</span>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif

{{-- ============================================================
     5. POULTRY FLEET & COMMERCIAL INTEGRATION CLIENTS
     ============================================================ --}}
@if(!empty($poultry))
<section class="py-16 sm:py-20 bg-slate-50/70 border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold tracking-wider uppercase mb-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    Verified Corporate Integrations
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#0f2147] tracking-tight">
                    पोल्ट्री फीड लॉजिस्टिक्स पार्टनर नेटवर्क
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 hindi mt-1 m-0">
                    वर्ष 2016 से निरंतर बिहार भर की अग्रणी पोल्ट्री कंपनियों के लिए सुरक्षित व समयबद्ध फीड परिवहन।
                </p>
            </div>

            <div class="text-xs font-semibold text-slate-500">
                ⭐ 100% On-Time Delivery Record
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($poultry as $client)
            <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-2xs hover:border-emerald-400 hover:shadow-md transition-all">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-[0.7rem] font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-md">
                        {{ $client['year'] }}
                    </span>
                    <span class="text-emerald-600 font-bold text-xs">✓ Active</span>
                </div>
                <div class="font-heading font-bold text-sm text-[#0f2147]">
                    {{ $client['company'] }}
                </div>
                <div class="text-[0.72rem] text-slate-500 hindi mt-1">
                    सुरक्षित फीड व कार्गो परिवहन
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif

{{-- ============================================================
     6. CORE PHILOSOPHY & COMMITMENTS
     ============================================================ --}}
<section class="py-14 sm:py-20 bg-white border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#0f2147] tracking-tight">
                हमारा व्यावसायिक संकल्प एवं मूल्य
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 hindi mt-2">
                जिस आधार पर हमने 15 वर्षों का विश्वास अर्जित किया है।
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-300 transition-colors">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-lg mb-4">
                    1
                </div>
                <h3 class="font-heading font-bold text-base text-slate-900 mb-2">अटूट विश्वसनीयता</h3>
                <p class="text-xs sm:text-sm text-slate-600 hindi leading-relaxed m-0">
                    हर सौदे और बातचीत में पूर्ण पारदर्शिता एवं निष्ठा। कभी कोई छिपा हुआ खर्च या भ्रामक वादे नहीं।
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-300 transition-colors">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg mb-4">
                    2
                </div>
                <h3 class="font-heading font-bold text-base text-slate-900 mb-2">समयबद्ध निष्पादन</h3>
                <p class="text-xs sm:text-sm text-slate-600 hindi leading-relaxed m-0">
                    लॉजिस्टिक्स, इंश्योरेंस या मेडिसिन सप्लाई — हर कार्य को निर्धारित समय-सीमा के भीतर पूरा करना।
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-300 transition-colors">
                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-lg mb-4">
                    3
                </div>
                <h3 class="font-heading font-bold text-base text-slate-900 mb-2">उचित व प्रतिस्पर्धी दरें</h3>
                <p class="text-xs sm:text-sm text-slate-600 hindi leading-relaxed m-0">
                    ग्राहकों के हित को प्राथमिकता देते हुए बाजार में सबसे उचित और व्यावहारिक मूल्य निर्धारण।
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-300 transition-colors">
                <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-lg mb-4">
                    4
                </div>
                <h3 class="font-heading font-bold text-base text-slate-900 mb-2">24×7 प्रत्यक्ष सहायता</h3>
                <p class="text-xs sm:text-sm text-slate-600 hindi leading-relaxed m-0">
                    किसी भी आपातकालीन आवश्यकता या पूछताछ में नेतृत्व टीम द्वारा सीधे फोन व व्हाट्सएप पर मार्गदर्शन।
                </p>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     7. DIRECT CONSULTATION INVITATION BANNER
     ============================================================ --}}
<section class="py-14 sm:py-20 bg-slate-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-[#0f2147] to-[#18356f] rounded-3xl p-8 sm:p-12 text-white shadow-xl text-center relative overflow-hidden">
            <div class="relative z-10">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 text-amber-400 text-xs font-bold uppercase tracking-wider mb-4 border border-white/15">
                    Direct Leadership Access
                </span>
                <h2 class="font-heading text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-tight mb-3">
                    हमारे निदेशकों से सीधे संपर्क करें
                </h2>
                <p class="text-sm sm:text-base text-slate-200 hindi max-w-2xl mx-auto leading-relaxed mb-8">
                    परिवहन, बीमा, थोक औषधि अथवा व्यावसायिक स्थान संबंधी किसी भी परामर्श के लिए हमारी टीम सदैव आपकी सेवा में उपलब्ध है।
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="tel:+91{{ config('site.phone_primary') }}" 
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-slate-950 font-heading font-bold text-sm shadow-lg transition-all transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <span>चेयरमैन से बात करें (+91 {{ config('site.phone_primary') }})</span>
                    </a>

                    <a href="{{ route('contact.show') }}" 
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 text-white font-heading font-semibold text-sm transition-all border border-white/20">
                        <span>कार्यालय पता एवं पूछताछ फॉर्म →</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection