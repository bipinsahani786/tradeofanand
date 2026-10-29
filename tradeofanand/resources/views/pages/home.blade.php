@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════════════════════════
     1. HERO
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 border-b border-[var(--color-line)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-semibold tracking-widest uppercase text-[var(--color-muted)] mb-3">
                    Formerly known as {{ config('site.formerly') }}
                </p>
                <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl font-bold text-[var(--color-ink)] leading-tight mb-4">
                    {{ config('site.name') }}
                </h1>
                <p class="text-xl font-semibold text-[var(--color-accent)] mb-4 hindi">
                    {{ config('site.tagline_hindi') }}
                </p>
                <p class="text-base text-[var(--color-text)] mb-8 hindi leading-relaxed">
                    {{ config('site.description') }}
                </p>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="tel:+91{{ config('site.phone_primary') }}" class="btn-primary" id="hero-call">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        Call Now
                    </a>
                    <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="btn-whatsapp" target="_blank" rel="noopener noreferrer" id="hero-wa">
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/></svg>
                        WhatsApp करें
                    </a>
                    <a href="{{ route('services.index') }}" class="btn-outline" id="hero-services">
                        Our Services →
                    </a>
                </div>
            </div>
            <div class="relative reveal">
                <img
                    src="/images/hero/hero-main.jpg"
                    alt="Trade of Anand – Transport & Logistics, Insurance, Medicine in Samastipur Bihar"
                    class="w-full aspect-[4/3] object-cover border border-[var(--color-line)] shadow-sm"
                    width="600" height="450"
                    loading="eager"
                >
                <div class="absolute -top-4 -right-4 bottom-4 left-4 border-2 border-[var(--color-accent)] -z-10 hidden lg:block" aria-hidden="true"></div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     2. STATS STRIP
═══════════════════════════════════════════════════════════ --}}
<div class="border-t border-b border-[var(--color-line)] py-10">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4">
            @foreach($stats as $i => $stat)
            <div class="py-4 px-6 text-center {{ $i < count($stats)-1 ? 'border-r border-[var(--color-line)]' : '' }} reveal">
                <span class="block font-heading text-4xl md:text-5xl font-bold text-[var(--color-primary)] leading-none mb-1">{{ $stat['value'] }}</span>
                <span class="block text-sm font-semibold text-[var(--color-ink)] hindi">{{ $stat['label'] }}</span>
                @if(!empty($stat['sublabel']))
                <span class="block text-xs text-[var(--color-muted)] mt-0.5">{{ $stat['sublabel'] }}</span>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════
     3. SERVICES OVERVIEW
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-12">
            <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">ANAND GROUP</span>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-[var(--color-ink)] mt-2 mb-3">हमारी सेवाएँ / Our Services</h2>
            <p class="text-[var(--color-muted)] max-w-xl hindi">एक समूह – अनेक सेवाएँ। Transport से लेकर Insurance, Medicine, Rental, Tyres और Pollution Testing तक।</p>
        </div>

        {{-- Featured first service --}}
        @php $featured = $services[0]; @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 border border-[var(--color-line)] mb-0.5 reveal">
            <div class="overflow-hidden">
                <img src="{{ $featured['image'] }}" alt="{{ $featured['name'] }}" class="w-full h-full min-h-[280px] object-cover img-placeholder" width="600" height="450" loading="lazy">
            </div>
            <div class="p-10 flex flex-col justify-center">
                <span class="font-heading text-5xl font-bold text-[var(--color-line)] leading-none mb-4">01</span>
                <h3 class="font-heading text-2xl font-bold text-[var(--color-ink)] mb-2">{{ $featured['name'] }}</h3>
                <p class="text-sm font-semibold text-[var(--color-accent)] mb-3 hindi">{{ $featured['tagline'] }}</p>
                <p class="text-sm text-[var(--color-text)] mb-6 hindi">{{ $featured['short_desc'] }}</p>
                <a href="{{ route('services.show', $featured['slug']) }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-white bg-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[#152d4a] transition-colors self-start" id="featured-service-link">
                    View Details →
                </a>
            </div>
        </div>

        {{-- Other 5 services --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 border border-[var(--color-line)] border-t-0">
            @foreach(array_slice($services, 1) as $index => $srv)
            <a href="{{ route('services.show', $srv['slug']) }}" class="block p-6 {{ $index < 4 ? 'border-r border-[var(--color-line)]' : '' }} border-t border-[var(--color-line)] sm:border-t-0 hover:bg-[var(--color-bg-soft)] transition-colors group reveal">
                <div class="font-heading text-3xl font-bold text-[var(--color-line)] leading-none mb-3">0{{ $index + 2 }}</div>
                <div class="font-heading text-base font-bold text-[var(--color-ink)] mb-1.5 group-hover:text-[var(--color-primary)] transition-colors hindi">{{ $srv['name'] }}</div>
                <p class="text-xs text-[var(--color-muted)] mb-3 leading-relaxed hindi">{{ $srv['short_desc'] }}</p>
                <span class="text-xs font-semibold text-[var(--color-primary)] group-hover:text-[var(--color-accent)] transition-colors">Learn more →</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     4. ABOUT / WHO WE ARE
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-[var(--color-bg-soft)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <img src="/images/services/about-team.jpg" alt="Trade of Anand – Team in Samastipur" class="w-full aspect-[4/3] object-cover border border-[var(--color-line)] shadow-sm min-h-[280px]" width="600" height="450" loading="lazy">
            </div>
            <div>
                <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Who We Are</span>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-[var(--color-ink)] mt-2 mb-5">एक समूह – अनेक सेवाएँ</h2>
                <p class="text-[var(--color-text)] mb-4 hindi">{{ config('site.formerly') }} के नाम से शुरू हुई यह व्यापारिक यात्रा आज <strong>{{ config('site.name') }}</strong> के नाम से जानी जाती है। {{ config('site.group_name') }} के अंतर्गत Samastipur, Bihar में विभिन्न क्षेत्रों में विश्वसनीय सेवाएँ प्रदान की जा रही हैं।</p>
                <p class="text-[var(--color-text)] mb-4 hindi">2011 में Saurav Tyre Agency की स्थापना से शुरू हुई इस यात्रा में Transport, Insurance, Medicine, Rental और Pollution Testing Centre जोड़े गए हैं।</p>
                <p class="font-semibold text-[var(--color-accent)] mb-6 hindi">{{ config('site.tagline_hindi') }}</p>
                <a href="{{ route('team.show') }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-white bg-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[#152d4a] transition-colors" id="about-team-btn">
                    हमारी Team से मिलें →
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     5. POULTRY EXPERIENCE (dark)
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-[var(--color-ink)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <div>
                <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Experience</span>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-white mt-2 mb-4">
                    Poultry Sector में Integration Feed Delivery का अनुभव
                </h2>
                <p class="text-white/70 mb-8 hindi">2016 से अब तक Bihar के प्रमुख Poultry Companies के साथ Integration Feed Delivery का अनुभव।</p>
                <a href="{{ route('team.show') }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-white bg-[var(--color-accent)] border border-[var(--color-accent)] hover:bg-[#a86c10] transition-colors" id="poultry-team-btn">
                    हमारी Journey देखें →
                </a>
            </div>
            <div>
                <div class="relative pl-8 border-l-2 border-[var(--color-accent)]/40">
                    @foreach($poultry as $client)
                    @if($client['confirmed'])
                    <div class="relative pb-8 last:pb-0 reveal">
                        <div class="absolute -left-[29px] top-1.5 w-2.5 h-2.5 bg-[var(--color-accent)]"></div>
                        <div class="text-xs font-semibold tracking-widest text-[var(--color-accent)] uppercase mb-1">{{ $client['year'] }}</div>
                        <div class="font-heading text-lg font-bold text-white">{{ $client['company'] }}</div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     6. WHY CHOOSE US
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <div>
                <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Why Us</span>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-[var(--color-ink)] mt-2 mb-6">हमें क्यों चुनें?</h2>
                <p class="text-[var(--color-muted)] mb-8 hindi">Samastipur, Bihar में एक ही जगह से सभी ज़रूरी सेवाएँ।</p>
                <a href="{{ route('contact.show') }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-white bg-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[#152d4a] transition-colors" id="why-contact-btn">
                    हमसे संपर्क करें →
                </a>
            </div>
            <div class="flex flex-col gap-3">
                @foreach($why_choose as $index => $item)
                <div class="grid grid-cols-[44px_1fr] gap-4 p-5 border border-[var(--color-line)] hover:border-[var(--color-primary)] transition-colors reveal">
                    <div class="font-heading text-2xl font-bold text-[var(--color-accent)] leading-none">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <div>
                        <div class="font-semibold text-[var(--color-ink)] mb-1 hindi">{{ $item['title'] }}</div>
                        <p class="text-sm text-[var(--color-muted)] m-0 hindi">{{ $item['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     7. BUSINESS SUPPORT STRIP
═══════════════════════════════════════════════════════════ --}}
<section class="py-16 bg-[var(--color-bg-soft)] border-t border-b border-[var(--color-line)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div>
                <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">For Businesses</span>
                <h2 class="font-heading text-3xl font-bold text-[var(--color-ink)] mt-1 mb-2 hindi">व्यापार के लिए सेवाएँ</h2>
                <p class="text-[var(--color-muted)] hindi">Transport · Insurance · Medicine Supply · व्यवसायिक मार्गदर्शन · अन्य सेवाएँ</p>
            </div>
            <div class="flex gap-3 flex-wrap shrink-0">
                <a href="{{ route('services.index') }}" class="btn-primary" id="biz-services-btn">All Services</a>
                <a href="tel:+91{{ config('site.phone_primary') }}" class="btn-outline" id="biz-call-btn">Call Now</a>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     8. LEADERSHIP PREVIEW
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-12">
            <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Leadership</span>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-[var(--color-ink)] mt-2">हमारी Team</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
            @foreach($team as $member)
            <div class="border border-[var(--color-line)] overflow-hidden hover:border-[var(--color-primary)] transition-colors group reveal">
                <div class="aspect-[4/5] overflow-hidden">
                    <img src="{{ $member['image'] }}" alt="{{ $member['name'] }} – {{ $member['designation'] }}, Trade of Anand" class="w-full h-full object-cover img-placeholder group-hover:scale-105 transition-transform duration-300" width="300" height="375" loading="lazy" style="min-height:200px;">
                </div>
                <div class="p-4">
                    <div class="font-semibold text-sm text-[var(--color-ink)]">{{ $member['name'] }}</div>
                    <div class="text-xs text-[var(--color-muted)] mt-0.5 mb-2">{{ $member['designation'] }}</div>
                    <div class="flex gap-3">
                        <a href="tel:+91{{ $member['phone'] }}" class="text-xs font-semibold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors">Call</a>
                        <a href="https://wa.me/91{{ $member['phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="text-xs font-semibold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors" target="_blank">WhatsApp</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('team.show') }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-[var(--color-primary)] bg-transparent border border-[var(--color-primary)] hover:bg-[var(--color-primary)] hover:text-white transition-colors" id="home-team-link">
                Meet the Full Team →
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     9. GALLERY PREVIEW
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-[var(--color-bg-soft)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-12">
            <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Gallery</span>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-[var(--color-ink)] mt-2">हमारी झलकियाँ</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
            @foreach($gallery as $img)
            <div class="relative overflow-hidden border border-[var(--color-line)] group cursor-pointer">
                <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" class="w-full aspect-square object-cover img-placeholder group-hover:scale-105 transition-transform duration-300 min-h-[180px]" width="400" height="400" loading="lazy">
                <div class="absolute inset-0 bg-[var(--color-ink)]/0 group-hover:bg-[var(--color-ink)]/50 transition-colors flex items-end p-3">
                    <span class="text-white text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">{{ $img['caption'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('gallery.show') }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-white bg-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[#152d4a] transition-colors" id="home-gallery-link">
                View Full Gallery →
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     10. HOW IT WORKS
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-12">
            <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Simple Process</span>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-[var(--color-ink)] mt-2">कैसे काम करता है?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
            @foreach([
                ['num'=>'01','title'=>'संपर्क करें','desc'=>'Call, WhatsApp या हमारे Contact Form के ज़रिए संपर्क करें।'],
                ['num'=>'02','title'=>'ज़रूरत बताएँ','desc'=>'अपनी आवश्यकता विस्तार से बताएँ – हम सही सेवा का सुझाव देंगे।'],
                ['num'=>'03','title'=>'समाधान / सेवा पाएँ','desc'=>'उचित दर पर, विश्वसनीय सेवा और व्यक्तिगत मार्गदर्शन प्राप्त करें।'],
            ] as $step)
            <div class="p-8 border border-[var(--color-line)] reveal">
                <div class="font-heading text-5xl font-bold text-[var(--color-line)] leading-none mb-4">{{ $step['num'] }}</div>
                <h3 class="font-heading text-xl font-bold text-[var(--color-ink)] mb-2 hindi">{{ $step['title'] }}</h3>
                <p class="text-sm text-[var(--color-muted)] m-0 hindi">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     11. FAQ
═══════════════════════════════════════════════════════════ --}}
<section class="py-20 md:py-28 bg-[var(--color-bg-soft)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 items-start">
            <div>
                <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">FAQ</span>
                <h2 class="font-heading text-4xl font-bold text-[var(--color-ink)] mt-2 mb-3">अक्सर पूछे जाने वाले सवाल</h2>
                <p class="text-sm text-[var(--color-muted)] hindi">Trade of Anand की सेवाओं के बारे में सामान्य जानकारी।</p>
            </div>
            <div class="lg:col-span-2" itemscope itemtype="https://schema.org/FAQPage">
                @foreach($faqs as $index => $faq)
                <div class="faq-item border-b border-[var(--color-line)] first:border-t first:border-[var(--color-line)]" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="w-full flex justify-between items-center py-4 text-left font-semibold text-[var(--color-ink)] bg-transparent border-0 cursor-pointer hover:text-[var(--color-primary)] transition-colors gap-4" aria-expanded="false" id="faq-q-{{ $index }}">
                        <span itemprop="name" class="hindi text-base">{{ $faq['q'] }}</span>
                        <svg class="faq-icon w-5 h-5 shrink-0 text-[var(--color-accent)]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </button>
                    <div class="faq-answer pb-4 text-sm text-[var(--color-text)] leading-relaxed" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="hindi m-0">{{ $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

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
