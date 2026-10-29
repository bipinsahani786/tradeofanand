@extends('layouts.app')

@section('content')
<div class="py-24 bg-[var(--color-bg-soft)] min-h-[60vh] flex items-center">
    <div class="max-w-3xl mx-auto px-6 text-center">
        <div class="inline-block bg-[var(--color-ink)] text-[var(--color-accent)] font-mono text-sm px-3 py-1 font-bold uppercase tracking-wider mb-6">
            Error 404 • Page Not Found
        </div>
        <h1 class="text-4xl md:text-6xl font-bold text-[var(--color-ink)] mb-4 tracking-tight">
            पृष्ठ नहीं मिला / Page Not Found
        </h1>
        <p class="text-base md:text-lg text-[var(--color-muted)] max-w-xl mx-auto mb-8 leading-relaxed">
            क्षमा करें, जिस पृष्ठ की आप तलाश कर रहे हैं वह उपलब्ध नहीं है अथवा उसका पता बदल गया है। कृपया नीचे दिए गए लिंक्स से मुख्य पृष्ठों पर जाएँ।
        </p>

        {{-- Quick Links --}}
        <div class="flex flex-wrap items-center justify-center gap-3 mb-10">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-[var(--color-primary)] text-white text-sm font-semibold rounded-[var(--radius-btn)] hover:bg-[var(--color-ink)] transition-colors">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                मुख्य पृष्ठ / Home
            </a>
            <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-[var(--color-line)] text-[var(--color-ink)] text-sm font-semibold rounded-[var(--radius-btn)] hover:border-[var(--color-primary)] hover:text-[var(--color-primary)] transition-colors">
                हमारी सेवाएँ / Services
            </a>
            <a href="{{ route('contact.show') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-[var(--color-line)] text-[var(--color-ink)] text-sm font-semibold rounded-[var(--radius-btn)] hover:border-[var(--color-primary)] hover:text-[var(--color-primary)] transition-colors">
                संपर्क करें / Contact Us
            </a>
        </div>

        {{-- Support Helpline --}}
        <div class="inline-flex items-center gap-2 text-sm text-[var(--color-muted)] bg-white border border-[var(--color-line)] px-4 py-2">
            <span>सहायता के लिए सीधे कॉल करें:</span>
            <a href="tel:+91{{ config('site.phone_primary') }}" class="text-[var(--color-primary)] font-bold hover:underline">
                +91 {{ config('site.phone_primary') }}
            </a>
        </div>
    </div>
</div>
@endsection
