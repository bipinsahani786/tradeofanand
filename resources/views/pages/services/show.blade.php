@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<div class="bg-[var(--color-ink)] border-b-4 border-[var(--color-accent)] py-16">
    <div class="max-w-6xl mx-auto px-6">
        <nav class="flex items-center gap-2 text-xs text-white/60 mb-4" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
            <span>/</span>
            <a href="{{ route('services.index') }}" class="hover:text-white transition-colors">Services</a>
            <span>/</span>
            <span>{{ $service['name'] }}</span>
        </nav>
        <h1 class="font-heading text-5xl md:text-6xl font-bold text-white mb-2">{{ $service['name'] }}</h1>
        <p class="text-[var(--color-accent)] font-semibold hindi">{{ $service['tagline'] }}</p>
        <div class="flex flex-wrap gap-3 mt-6">
            <a href="tel:+91{{ $service['contact_phone'] }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-white bg-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[#152d4a] transition-colors">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                Call Now
            </a>
            <a href="https://wa.me/91{{ $service['contact_phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-white bg-[var(--color-whatsapp)] border border-[var(--color-whatsapp)] hover:bg-[#178a45] transition-colors" target="_blank" rel="noopener noreferrer">
                WhatsApp करें
            </a>
        </div>
    </div>
</div>

{{-- Main Content --}}
<section class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

            {{-- Left: Main Content --}}
            <div class="lg:col-span-2">

                {{-- Hero image --}}
                <img src="{{ $service['image'] }}" alt="{{ $service['name'] }} – Trade of Anand Samastipur" class="w-full aspect-[16/7] object-cover border border-[var(--color-line)] mb-10 img-placeholder" width="800" height="350" loading="eager">

                {{-- What we offer --}}
                <h2 class="font-heading text-3xl font-bold text-[var(--color-ink)] mb-6">What We Offer</h2>
                <div class="flex flex-col gap-2 mb-10">
                    @foreach($service['offerings'] as $off)
                    <div class="flex items-start gap-3 px-4 py-3 bg-[var(--color-bg-soft)] border-l-4 border-[var(--color-primary)]">
                        <svg class="w-4 h-4 shrink-0 mt-0.5 text-[var(--color-primary)]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span class="text-sm text-[var(--color-text)] hindi">{{ $off }}</span>
                    </div>
                    @endforeach
                </div>

                {{-- Who it's for --}}
                @if(!empty($service['who_for']))
                <h2 class="font-heading text-3xl font-bold text-[var(--color-ink)] mb-5">Who It's For</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-10">
                    @foreach($service['who_for'] as $wf)
                    <div class="flex items-center gap-3 p-4 border border-[var(--color-line)] text-sm text-[var(--color-text)] hindi">
                        <svg class="w-4 h-4 shrink-0 text-[var(--color-accent)]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        {{ $wf }}
                    </div>
                    @endforeach
                </div>
                @endif

                {{-- Why Choose Us --}}
                @if(!empty($service['why_choose']))
                <h2 class="font-heading text-3xl font-bold text-[var(--color-ink)] mb-5">Why Choose Us</h2>
                <div class="flex flex-col gap-2 mb-10">
                    @foreach($service['why_choose'] as $why)
                    <div class="p-4 border-l-4 border-[var(--color-accent)] bg-[var(--color-bg-soft)] text-sm text-[var(--color-text)] hindi">{{ $why }}</div>
                    @endforeach
                </div>
                @endif

                {{-- Process --}}
                @if(!empty($service['process']))
                <h2 class="font-heading text-3xl font-bold text-[var(--color-ink)] mb-5">Process</h2>
                <div class="flex flex-col gap-4 mb-10">
                    @foreach($service['process'] as $step)
                    <div class="grid grid-cols-[56px_1fr] gap-4 items-start">
                        <div class="w-14 h-14 bg-[var(--color-primary)] text-white flex items-center justify-center font-heading text-xl font-bold shrink-0">
                            {{ $step['step'] }}
                        </div>
                        <div class="pt-1">
                            <div class="font-semibold text-[var(--color-ink)] mb-1 hindi">{{ $step['title'] }}</div>
                            <p class="text-sm text-[var(--color-muted)] m-0 hindi">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                {{-- FAQs --}}
                @if(!empty($service['faqs']))
                <h2 class="font-heading text-3xl font-bold text-[var(--color-ink)] mb-5">Frequently Asked Questions</h2>
                <div itemscope itemtype="https://schema.org/FAQPage">
                    @foreach($service['faqs'] as $i => $faq)
                    <div class="faq-item border-b border-[var(--color-line)] first:border-t" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button class="w-full flex justify-between items-center py-4 text-left font-semibold text-[var(--color-ink)] bg-transparent border-0 cursor-pointer hover:text-[var(--color-primary)] transition-colors gap-4" aria-expanded="false" id="sfaq-q-{{ $i }}">
                            <span itemprop="name" class="hindi text-sm">{{ $faq['q'] }}</span>
                            <svg class="faq-icon w-5 h-5 shrink-0 text-[var(--color-accent)]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </button>
                        <div class="faq-answer pb-4 text-sm text-[var(--color-text)] leading-relaxed" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text" class="hindi m-0">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

            </div>

            {{-- Right: Sidebar --}}
            <div class="lg:sticky lg:top-24 space-y-5">

                {{-- Contact Box --}}
                <div class="border border-[var(--color-line)] p-6">
                    <h4 class="font-heading text-lg font-bold text-[var(--color-ink)] mb-4 pb-3 border-b border-[var(--color-line)]">Get in Touch</h4>
                    <p class="font-semibold text-sm text-[var(--color-ink)] mb-1">{{ $service['contact_name'] }}</p>
                    <div class="flex items-center gap-2 text-sm mb-2">
                        <svg class="w-4 h-4 text-[var(--color-primary)]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:+91{{ $service['contact_phone'] }}" class="font-semibold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors">+91 {{ $service['contact_phone'] }}</a>
                    </div>
                    <div class="flex items-start gap-2 text-sm mb-5">
                        <svg class="w-4 h-4 shrink-0 mt-0.5 text-[var(--color-primary)]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>{{ config('site.address') }}</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <a href="tel:+91{{ $service['contact_phone'] }}" class="flex justify-center items-center gap-2 py-3 text-sm font-semibold text-white bg-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[#152d4a] transition-colors">Call Now</a>
                        <a href="https://wa.me/91{{ $service['contact_phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="flex justify-center items-center gap-2 py-3 text-sm font-semibold text-white bg-[var(--color-whatsapp)] border border-[var(--color-whatsapp)] hover:bg-[#178a45] transition-colors" target="_blank">WhatsApp करें</a>
                        <a href="{{ route('contact.show') }}" class="flex justify-center items-center gap-2 py-3 text-sm font-semibold text-[var(--color-primary)] bg-transparent border border-[var(--color-primary)] hover:bg-[var(--color-primary)] hover:text-white transition-colors">Enquiry Form</a>
                    </div>
                </div>

                {{-- Other Services --}}
                <div class="border border-[var(--color-line)] p-6">
                    <h4 class="font-heading text-base font-bold text-[var(--color-ink)] mb-3 pb-2 border-b border-[var(--color-line)]">Other Services</h4>
                    @foreach($otherServices as $other)
                    <a href="{{ route('services.show', $other['slug']) }}" class="block py-2.5 border-b border-[var(--color-line)] last:border-b-0 text-sm text-[var(--color-text)] hover:text-[var(--color-primary)] hover:pl-2 transition-all">
                        {{ $other['name'] }} →
                    </a>
                    @endforeach
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
