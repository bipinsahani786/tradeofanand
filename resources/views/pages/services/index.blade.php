@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<div class="bg-[var(--color-ink)] border-b-4 border-[var(--color-accent)] py-16">
    <div class="max-w-6xl mx-auto px-6">
        <nav class="flex items-center gap-2 text-xs text-white/60 mb-4" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
            <span>/</span>
            <span>Services</span>
        </nav>
        <h1 class="font-heading text-5xl md:text-6xl font-bold text-white mb-2">हमारी सेवाएँ / Our Services</h1>
        <p class="text-white/75">ANAND GROUP के अंतर्गत विभिन्न क्षेत्रों में विश्वसनीय सेवाएँ</p>
    </div>
</div>

{{-- Intro --}}
<section class="py-14 border-b border-[var(--color-line)]">
    <div class="max-w-6xl mx-auto px-6">
        <p class="text-lg text-[var(--color-text)] max-w-3xl hindi leading-relaxed">
            ANAND GROUP के अंतर्गत विभिन्न क्षेत्रों में विश्वसनीय एवं गुणवत्तापूर्ण सेवाएँ उपलब्ध हैं। आपकी ज़रूरत, हमारी सेवा।
        </p>
    </div>
</section>

{{-- Service Blocks (alternating) --}}
<section class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-6 flex flex-col gap-1">
        @foreach($services as $index => $srv)
        @php $isReverse = $index % 2 !== 0; @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 border border-[var(--color-line)] reveal" id="service-{{ $srv['slug'] }}">
            {{-- Image --}}
            <div class="{{ $isReverse ? 'md:order-2' : '' }} overflow-hidden">
                <img src="{{ $srv['image'] }}" alt="{{ $srv['name'] }} – Trade of Anand Samastipur" class="w-full h-full min-h-[280px] object-cover img-placeholder" width="600" height="450" loading="lazy">
            </div>
            {{-- Content --}}
            <div class="{{ $isReverse ? 'md:order-1' : '' }} p-8 md:p-10 flex flex-col justify-center gap-4">
                <div class="font-heading text-4xl font-bold text-[var(--color-line)] leading-none">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                <div>
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-[var(--color-ink)] mb-1">{{ $srv['name'] }}</h2>
                    <p class="text-sm font-semibold text-[var(--color-accent)] hindi">{{ $srv['tagline'] }}</p>
                </div>
                <p class="text-sm text-[var(--color-text)] hindi">{{ $srv['description'] }}</p>
                <div class="pl-4 border-l-2 border-[var(--color-line)] flex flex-col gap-1.5">
                    @foreach(array_slice($srv['offerings'], 0, 5) as $off)
                    <span class="text-sm text-[var(--color-text)] hindi">{{ $off }}</span>
                    @endforeach
                    @if(count($srv['offerings']) > 5)
                    <span class="text-xs text-[var(--color-muted)]">+ {{ count($srv['offerings']) - 5 }} more…</span>
                    @endif
                </div>
                <p class="text-sm text-[var(--color-muted)] m-0">
                    Contact: <a href="tel:+91{{ $srv['contact_phone'] }}" class="font-semibold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors">{{ $srv['contact_name'] }} – {{ $srv['contact_phone'] }}</a>
                </p>
                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('services.show', $srv['slug']) }}" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[#152d4a] transition-colors">View Details</a>
                    <a href="tel:+91{{ $srv['contact_phone'] }}" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-[var(--color-primary)] bg-transparent border border-[var(--color-primary)] hover:bg-[var(--color-primary)] hover:text-white transition-colors">Call</a>
                    <a href="https://wa.me/91{{ $srv['contact_phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-[var(--color-whatsapp)] border border-[var(--color-whatsapp)] hover:bg-[#178a45] transition-colors" target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- Quick Comparison Table --}}
<section class="py-16 bg-[var(--color-bg-soft)] border-t border-[var(--color-line)]">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="font-heading text-3xl font-bold text-[var(--color-ink)] mb-8">Quick Reference</h2>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-[var(--color-ink)] text-white">
                        <th class="px-5 py-4 text-left text-sm font-semibold border border-[var(--color-ink)]">Service</th>
                        <th class="px-5 py-4 text-left text-sm font-semibold border border-[var(--color-ink)]">Best For</th>
                        <th class="px-5 py-4 text-left text-sm font-semibold border border-[var(--color-ink)]">Contact</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $srv)
                    <tr class="odd:bg-white even:bg-[var(--color-bg-soft)] hover:bg-[#e8e4dc] transition-colors">
                        <td class="px-5 py-3.5 text-sm font-semibold text-[var(--color-ink)] border border-[var(--color-line)]">
                            <a href="{{ route('services.show', $srv['slug']) }}" class="hover:text-[var(--color-primary)] transition-colors">{{ $srv['name'] }}</a>
                        </td>
                        <td class="px-5 py-3.5 text-sm text-[var(--color-text)] border border-[var(--color-line)] hindi">{{ implode(', ', array_slice($srv['who_for'] ?? [], 0, 2)) }}</td>
                        <td class="px-5 py-3.5 text-sm border border-[var(--color-line)]">
                            <a href="tel:+91{{ $srv['contact_phone'] }}" class="font-semibold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors">{{ $srv['contact_phone'] }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
