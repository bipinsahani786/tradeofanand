@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<div class="bg-[var(--color-ink)] border-b-4 border-[var(--color-accent)] py-16">
    <div class="max-w-6xl mx-auto px-6">
        <nav class="flex items-center gap-2 text-xs text-white/60 mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a>
            <span>/</span>
            <span>Our Team</span>
        </nav>
        <h1 class="font-heading text-5xl md:text-6xl font-bold text-white mb-2">हमारी Team</h1>
        <p class="text-white/75">Trade of Anand के अनुभवी नेतृत्व से मिलें</p>
    </div>
</div>

{{-- ═══ CHAIRMAN SECTION ═══ --}}
@php $chairman = collect($team)->firstWhere('role', 'chairman'); @endphp
@if($chairman)
<section class="py-20 border-b border-[var(--color-line)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-[320px_1fr] gap-16 items-center">
            <div>
                <img src="{{ $chairman['image'] }}" alt="{{ $chairman['name'] }} – Chairman, Trade of Anand Samastipur" class="w-full aspect-[3/4] object-cover border border-[var(--color-line)] img-placeholder" width="320" height="427" loading="eager">
            </div>
            <div>
                <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Chairman & Founder</span>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-[var(--color-ink)] mt-2 mb-1">{{ $chairman['name'] }}</h2>
                <p class="text-[var(--color-muted)] text-lg mb-6">{{ $chairman['designation'] }}</p>
                <p class="text-[var(--color-text)] mb-4 hindi leading-relaxed">{{ $chairman['bio'] }}</p>

                {{-- Associations --}}
                @if(!empty($chairman['associations']))
                <div class="flex flex-col gap-2 mb-6">
                    @foreach($chairman['associations'] as $assoc)
                    <div class="flex items-start gap-3 px-4 py-3 border-l-4 border-[var(--color-accent)] bg-[var(--color-bg-soft)] text-sm text-[var(--color-text)] hindi">
                        <svg class="w-4 h-4 shrink-0 mt-0.5 text-[var(--color-accent)]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        {{ $assoc }}
                    </div>
                    @endforeach
                </div>
                @endif

                <div class="flex flex-wrap gap-3">
                    <a href="tel:+91{{ $chairman['phone'] }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-white bg-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[#152d4a] transition-colors">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        Call {{ $chairman['name'] }}
                    </a>
                    <a href="https://wa.me/91{{ $chairman['phone'] }}?text={{ urlencode(config('site.whatsapp_message')) }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold text-white bg-[var(--color-whatsapp)] border border-[var(--color-whatsapp)] hover:bg-[#178a45] transition-colors" target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- ═══ CREDIBILITY STRIP ═══ --}}
<section class="py-14 bg-[var(--color-primary)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach(config('site.credibility', []) as $item)
            <div class="flex items-start gap-4 p-5 bg-white/[0.08] border border-white/15">
                <svg class="w-6 h-6 shrink-0 text-[var(--color-accent)] mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <div>
                    <div class="font-semibold text-white text-sm mb-1">{{ $item['title'] }}</div>
                    <p class="text-white/70 text-xs m-0 hindi">{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ DIRECTORS ═══ --}}
@php $directors = collect($team)->where('role', '!=', 'chairman')->values(); @endphp
@if($directors->count())
<section class="py-20 md:py-28 border-b border-[var(--color-line)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-12">
            <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Directors</span>
            <h2 class="font-heading text-4xl font-bold text-[var(--color-ink)] mt-2">मुख्य टीम</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($directors as $member)
            <div class="border border-[var(--color-line)] overflow-hidden hover:border-[var(--color-primary)] transition-colors group">
                <div class="aspect-[4/5] overflow-hidden">
                    <img src="{{ $member['image'] }}" alt="{{ $member['name'] }} – {{ $member['designation'] }}, Trade of Anand" class="w-full h-full object-cover img-placeholder group-hover:scale-105 transition-transform duration-300" width="400" height="500" loading="lazy">
                </div>
                <div class="p-5">
                    <div class="font-semibold text-base text-[var(--color-ink)] mb-0.5">{{ $member['name'] }}</div>
                    <div class="text-xs text-[var(--color-muted)] mb-1">{{ $member['designation'] }}</div>
                    @if(!empty($member['responsibility']))
                    <div class="text-xs text-[var(--color-primary)] font-semibold mb-3">{{ $member['responsibility'] }}</div>
                    @endif
                    @if(!empty($member['bio_short']))
                    <p class="text-xs text-[var(--color-muted)] mb-3 hindi">{{ $member['bio_short'] }}</p>
                    @endif
                    <div class="flex gap-3">
                        <a href="tel:+91{{ $member['phone'] }}" class="text-xs font-semibold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors">
                            Call: {{ $member['phone'] }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ═══ BUSINESS JOURNEY TIMELINE ═══ --}}
<section class="py-20 md:py-28 bg-[var(--color-bg-soft)]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-10">
            <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Our Journey</span>
            <h2 class="font-heading text-4xl font-bold text-[var(--color-ink)] mt-2">हमारी व्यापारिक यात्रा</h2>
        </div>
        <div class="flex overflow-x-auto pb-4 gap-0 border border-[var(--color-line)]">
            @foreach($journey as $item)
            <div class="shrink-0 w-52 p-6 border-r border-[var(--color-line)] last:border-r-0">
                <div class="font-heading text-3xl font-bold text-[var(--color-primary)] leading-none mb-3">{{ $item['year'] }}</div>
                <div class="font-semibold text-sm text-[var(--color-ink)] mb-1">{{ $item['name'] }}</div>
                <p class="text-xs text-[var(--color-muted)] m-0">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ VALUES ═══ --}}
<section class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-10">
            <span class="text-xs font-semibold tracking-widest uppercase text-[var(--color-accent)]">Values</span>
            <h2 class="font-heading text-4xl font-bold text-[var(--color-ink)] mt-2">हमारे मूल्य</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['title'=>'विश्वसनीयता','desc'=>'हर वादे पर खरे उतरना – यही हमारी पहचान है।'],
                ['title'=>'पारदर्शिता','desc'=>'Rates, Process और Terms में पूरी स्पष्टता।'],
                ['title'=>'सेवा भाव','desc'=>'ग्राहक की ज़रूरत को सर्वोच्च प्राथमिकता।'],
                ['title'=>'समुदाय','desc'=>'Samastipur के विकास में योगदान।'],
            ] as $val)
            <div class="p-8 border border-[var(--color-line)] text-center hover:border-[var(--color-primary)] transition-colors">
                <div class="font-heading text-xl font-bold text-[var(--color-ink)] mb-2 hindi">{{ $val['title'] }}</div>
                <p class="text-sm text-[var(--color-muted)] m-0 hindi">{{ $val['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "itemListElement": [
        @foreach($team as $idx => $m)
        {
            "@@type": "Person",
            "position": {{ $idx + 1 }},
            "name": "{{ $m['name'] }}",
            "jobTitle": "{{ $m['designation'] }}",
            "worksFor": {
                "@@type": "Organization",
                "name": "{{ config('site.name') }}"
            },
            "telephone": "+91{{ $m['phone'] }}"
            @if(!empty($m['email'])),
            "email": "{{ $m['email'] }}"
            @endif
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
    ]
}
</script>
@endpush
