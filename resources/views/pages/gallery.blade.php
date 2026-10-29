@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<div class="bg-[var(--color-ink)] border-b-4 border-[var(--color-accent)] py-16">
    <div class="max-w-6xl mx-auto px-6">
        <nav class="flex items-center gap-2 text-xs text-white/60 mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a>
            <span>/</span>
            <span>Gallery</span>
        </nav>
        <h1 class="font-heading text-5xl md:text-6xl font-bold text-white mb-2">हमारी Gallery</h1>
        <p class="text-white/75">Trade of Anand – Transport, Insurance, Medicine, Tyres की झलकियाँ</p>
    </div>
</div>

<section class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Filter tabs --}}
        @php
        $cats = ['All', ...array_unique(array_column($gallery, 'category'))];
        @endphp
        <div class="flex gap-0 border border-[var(--color-line)] overflow-x-auto mb-10" role="tablist" aria-label="Gallery filter">
            @foreach($cats as $cat)
            <button
                class="filter-tab shrink-0 px-5 py-2.5 text-sm font-semibold border-r border-[var(--color-line)] last:border-r-0 bg-transparent transition-colors cursor-pointer {{ $loop->first ? 'bg-[var(--color-primary)] text-white' : 'text-[var(--color-text)] hover:bg-[var(--color-bg-soft)]' }}"
                data-filter="{{ $cat === 'All' ? 'all' : Str::slug($cat) }}"
                role="tab"
            >
                {{ $cat }}
            </button>
            @endforeach
        </div>

        {{-- Gallery Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2" id="gallery-grid">
            @foreach($gallery as $img)
            <div
                class="gallery-item relative overflow-hidden border border-[var(--color-line)] cursor-pointer group"
                data-category="{{ Str::slug($img['category']) }}"
                data-src="{{ $img['src'] }}"
                data-caption="{{ $img['caption'] }}"
            >
                <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" class="w-full aspect-square object-cover img-placeholder group-hover:scale-105 transition-transform duration-300 min-h-[180px]" width="400" height="400" loading="lazy">
                <div class="absolute inset-0 bg-[var(--color-ink)]/0 group-hover:bg-[var(--color-ink)]/50 transition-colors flex items-end p-3">
                    <span class="text-white text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">{{ $img['caption'] }}</span>
                </div>
            </div>
            @endforeach
        </div>

        {{-- No results --}}
        <div id="gallery-no-results" class="hidden text-center py-16 text-[var(--color-muted)]">
            इस category में कोई फ़ोटो नहीं है।
        </div>

    </div>
</section>

{{-- Lightbox --}}
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Image lightbox">
    <button class="absolute top-4 right-6 text-white text-3xl bg-transparent border-0 cursor-pointer z-10 leading-none hover:text-[var(--color-accent)]" id="lightbox-close" aria-label="Close lightbox">&times;</button>
    <button class="fixed left-4 top-1/2 -translate-y-1/2 bg-white/10 border border-white/20 text-white px-4 py-3 cursor-pointer hover:bg-white/20 z-10" id="lightbox-prev" aria-label="Previous">&#8592;</button>
    <div class="relative max-w-[90vw] max-h-[90vh]">
        <img src="" alt="" id="lightbox-img" class="max-w-[90vw] max-h-[80vh] object-contain border border-white/10">
        <p id="lightbox-caption" class="text-white/75 text-sm py-2 text-center"></p>
    </div>
    <button class="fixed right-4 top-1/2 -translate-y-1/2 bg-white/10 border border-white/20 text-white px-4 py-3 cursor-pointer hover:bg-white/20 z-10" id="lightbox-next" aria-label="Next">&#8594;</button>
</div>

@endsection
