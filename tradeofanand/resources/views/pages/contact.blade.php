@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<div class="bg-[var(--color-ink)] border-b-4 border-[var(--color-accent)] py-16">
    <div class="max-w-6xl mx-auto px-6">
        <nav class="flex items-center gap-2 text-xs text-white/60 mb-4">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
            <span>/</span>
            <span>Contact Us</span>
        </nav>
        <h1 class="font-heading text-5xl md:text-6xl font-bold text-white mb-2">संपर्क करें / Contact Us</h1>
        <p class="text-white/75">Trade of Anand – Samastipur, Bihar</p>
    </div>
</div>

<section class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Success message --}}
        @if(session('success'))
        <div class="bg-green-50 border border-green-200 border-l-4 border-l-[var(--color-whatsapp)] p-5 mb-8 font-semibold text-[var(--color-ink)]">
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            {{-- Left: Contact info --}}
            <div>
                <h2 class="font-heading text-3xl font-bold text-[var(--color-ink)] mb-6">Direct Contacts</h2>

                {{-- Team contacts --}}
                @foreach(config('site.team') as $member)
                <div class="border border-[var(--color-line)] p-5 mb-4">
                    <div class="font-semibold text-[var(--color-ink)] mb-0.5">{{ $member['name'] }}</div>
                    <div class="text-xs text-[var(--color-muted)] mb-3">{{ $member['designation'] }}</div>
                    <div class="flex items-center gap-2 text-sm mb-1.5">
                        <svg class="w-4 h-4 text-[var(--color-primary)] shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:+91{{ $member['phone'] }}" class="font-semibold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors">+91 {{ $member['phone'] }}</a>
                    </div>
                    @if(!empty($member['email']))
                    <div class="flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4 text-[var(--color-primary)] shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <a href="mailto:{{ $member['email'] }}" class="font-semibold text-[var(--color-primary)] hover:text-[var(--color-accent)] transition-colors">{{ $member['email'] }}</a>
                    </div>
                    @endif
                </div>
                @endforeach

                {{-- Address --}}
                <div class="border border-[var(--color-line)] p-5 mb-4">
                    <div class="text-xs font-semibold uppercase tracking-widest text-[var(--color-muted)] mb-3">Office Address</div>
                    <p class="text-sm text-[var(--color-text)] mb-4 hindi">{{ config('site.address_full') }}</p>
                    <div class="flex flex-wrap gap-2">
                        <a href="{{ config('site.google_maps_url') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-xs font-semibold text-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[var(--color-primary)] hover:text-white transition-colors">
                            Open in Google Maps
                        </a>
                        <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode('Please share the exact location.') }}" target="_blank" class="inline-flex items-center px-4 py-2 text-xs font-semibold text-white bg-[var(--color-whatsapp)] border border-[var(--color-whatsapp)] hover:bg-[#178a45] transition-colors">
                            WhatsApp Location
                        </a>
                    </div>
                </div>

                {{-- Business Hours --}}
                <div class="border border-[var(--color-line)] p-5">
                    <div class="text-xs font-semibold uppercase tracking-widest text-[var(--color-muted)] mb-3">Business Hours</div>
                    <p class="text-sm font-semibold text-[var(--color-ink)]">{{ config('site.business_hours') }}</p>
                </div>

                {{-- Google Maps embed --}}
                <div class="mt-5 border border-[var(--color-line)] overflow-hidden" style="height:260px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.39!2d85.778!3d25.8681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sMushrigharari%2C+Samastipur%2C+Bihar!5e0!3m2!1sen!2sin!4v1"
                        width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Trade of Anand Location – Mushrigharari, Samastipur Bihar">
                    </iframe>
                </div>
            </div>

            {{-- Right: Form --}}
            <div class="border border-[var(--color-line)] p-8">
                <h2 class="font-heading text-3xl font-bold text-[var(--color-ink)] mb-2">Enquiry Form</h2>
                <p class="text-sm text-[var(--color-muted)] mb-6 hindi">अपनी जानकारी भरें, हम जल्द ही संपर्क करेंगे।</p>

                <form action="{{ route('contact.submit') }}" method="POST" novalidate>
                    @csrf

                    {{-- Honeypot --}}
                    <div class="hidden" aria-hidden="true">
                        <label for="honeypot">Leave blank</label>
                        <input type="text" name="honeypot" id="honeypot" tabindex="-1" autocomplete="off">
                    </div>

                    {{-- Name --}}
                    <div class="mb-5">
                        <label for="name" class="block text-sm font-semibold text-[var(--color-ink)] mb-2">नाम / Name <span class="text-red-600">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            class="w-full px-4 py-3 border border-[var(--color-line)] bg-white text-[var(--color-text)] text-sm outline-none focus:border-[var(--color-primary)] transition-colors {{ $errors->has('name') ? 'border-red-500' : '' }}"
                            placeholder="आपका पूरा नाम">
                        @error('name') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                    </div>

                    {{-- Phone --}}
                    <div class="mb-5">
                        <label for="phone" class="block text-sm font-semibold text-[var(--color-ink)] mb-2">फ़ोन / Phone <span class="text-red-600">*</span></label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required
                            class="w-full px-4 py-3 border border-[var(--color-line)] bg-white text-[var(--color-text)] text-sm outline-none focus:border-[var(--color-primary)] transition-colors {{ $errors->has('phone') ? 'border-red-500' : '' }}"
                            placeholder="10-digit mobile number">
                        @error('phone') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-5">
                        <label for="email" class="block text-sm font-semibold text-[var(--color-ink)] mb-2">Email (optional)</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="w-full px-4 py-3 border border-[var(--color-line)] bg-white text-[var(--color-text)] text-sm outline-none focus:border-[var(--color-primary)] transition-colors"
                            placeholder="yourname@email.com">
                        @error('email') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                    </div>

                    {{-- Service --}}
                    <div class="mb-5">
                        <label for="service" class="block text-sm font-semibold text-[var(--color-ink)] mb-2">सेवा / Service</label>
                        <select id="service" name="service" class="w-full px-4 py-3 border border-[var(--color-line)] bg-white text-[var(--color-text)] text-sm outline-none focus:border-[var(--color-primary)] transition-colors">
                            <option value="">-- Select a Service --</option>
                            @foreach($services as $srv)
                            <option value="{{ $srv['name'] }}" {{ old('service') == $srv['name'] ? 'selected' : '' }}>{{ $srv['name'] }}</option>
                            @endforeach
                            <option value="Other">Other / अन्य</option>
                        </select>
                    </div>

                    {{-- Message --}}
                    <div class="mb-5">
                        <label for="message" class="block text-sm font-semibold text-[var(--color-ink)] mb-2">संदेश / Message <span class="text-red-600">*</span></label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 border border-[var(--color-line)] bg-white text-[var(--color-text)] text-sm outline-none focus:border-[var(--color-primary)] transition-colors resize-y {{ $errors->has('message') ? 'border-red-500' : '' }}"
                            placeholder="अपनी ज़रूरत विस्तार से बताएँ...">{{ old('message') }}</textarea>
                        @error('message') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                    </div>

                    <p class="text-xs text-[var(--color-muted)] mb-5 hindi">
                        आपकी जानकारी सुरक्षित है। हम कभी spam नहीं करते। <a href="{{ route('privacy') }}" class="text-[var(--color-primary)] underline underline-offset-2">Privacy Policy</a>
                    </p>

                    <button type="submit" id="contact-submit-btn" class="w-full py-3.5 text-sm font-semibold text-white bg-[var(--color-primary)] border border-[var(--color-primary)] hover:bg-[#152d4a] transition-colors">
                        Enquiry Submit करें
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
