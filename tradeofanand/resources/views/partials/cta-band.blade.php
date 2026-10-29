{{-- CTA Band – Redesigned: dramatic gradient, decorative elements, prominent phone, reassurance line --}}
<style>
    /* ── CTA Band CSS custom properties ─────────────────────── */
    :root {
        --cta-bg-from:       #0b0f1a;          /* deep navy */
        --cta-bg-to:         #141d2e;          /* slightly lighter navy */
        --cta-grid-line:     rgba(255,255,255,.04);
        --cta-orb-color:     rgba(201,168,76,.18);
        --cta-accent:        var(--color-accent, #c9a84c);
        --cta-accent-light:  var(--color-accent-light, #e8c96c);
        --cta-green:         #25D366;
        --cta-green-hover:   #1ebe5a;
    }

    /* ── Gradient background ─────────────────────────────────── */
    .cta-band-bg {
        background: linear-gradient(135deg, var(--cta-bg-from) 0%, var(--cta-bg-to) 60%, #0d1a30 100%);
    }

    /* ── Subtle CSS grid-line overlay ───────────────────────── */
    .cta-grid-overlay {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(var(--cta-grid-line) 1px, transparent 1px),
            linear-gradient(90deg, var(--cta-grid-line) 1px, transparent 1px);
        background-size: 48px 48px;
        pointer-events: none;
    }

    /* ── Glowing orb ─────────────────────────────────────────── */
    .cta-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        pointer-events: none;
    }
    .cta-orb-1 {
        width: 500px;
        height: 500px;
        background: var(--cta-orb-color);
        top: -160px;
        right: -80px;
        opacity: .65;
    }
    .cta-orb-2 {
        width: 300px;
        height: 300px;
        background: rgba(30, 120, 255, .07);
        bottom: -100px;
        left: 5%;
        opacity: .8;
    }

    /* ── Phone number display ────────────────────────────────── */
    .cta-phone-display {
        display: inline-flex;
        align-items: center;
        gap: .6rem;
        font-size: 1.5rem;
        font-weight: 800;
        letter-spacing: .02em;
        color: #fff;
        text-decoration: none;
        transition: color .2s;
    }
    .cta-phone-display:hover {
        color: var(--cta-accent-light);
    }
    .cta-phone-display .phone-icon-wrap {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 2.4rem;
        height: 2.4rem;
        border-radius: 50%;
        background: rgba(201,168,76,.18);
        border: 1px solid rgba(201,168,76,.35);
        flex-shrink: 0;
        transition: background .2s;
    }
    .cta-phone-display:hover .phone-icon-wrap {
        background: rgba(201,168,76,.28);
    }

    /* ── Action buttons ──────────────────────────────────────── */

    /* Call – white outline */
    .cta-btn-call {
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        padding: .75rem 1.6rem;
        border: 2px solid rgba(255,255,255,.8);
        border-radius: .4rem;
        color: #fff;
        font-size: .9rem;
        font-weight: 700;
        letter-spacing: .04em;
        text-decoration: none;
        background: transparent;
        transition: background .2s, border-color .2s, color .2s, transform .2s;
        white-space: nowrap;
    }
    .cta-btn-call:hover {
        background: rgba(255,255,255,.1);
        border-color: #fff;
        transform: translateY(-2px);
    }

    /* WhatsApp – green */
    .cta-btn-wa {
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        padding: .75rem 1.6rem;
        border-radius: .4rem;
        background: var(--cta-green);
        color: #fff;
        font-size: .9rem;
        font-weight: 700;
        letter-spacing: .04em;
        text-decoration: none;
        border: 2px solid var(--cta-green);
        transition: background .2s, transform .2s;
        white-space: nowrap;
    }
    .cta-btn-wa:hover {
        background: var(--cta-green-hover);
        border-color: var(--cta-green-hover);
        transform: translateY(-2px);
    }

    /* Online Enquiry – gold/accent */
    .cta-btn-enquiry {
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        padding: .75rem 1.6rem;
        border-radius: .4rem;
        background: var(--cta-accent);
        color: #000;
        font-size: .9rem;
        font-weight: 700;
        letter-spacing: .04em;
        text-decoration: none;
        border: 2px solid var(--cta-accent);
        transition: opacity .2s, transform .2s;
        white-space: nowrap;
    }
    .cta-btn-enquiry:hover {
        opacity: .85;
        transform: translateY(-2px);
    }

    /* ── Reassurance chips row ───────────────────────────────── */
    .cta-reassurance {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: .25rem 1.25rem;
        font-size: .78rem;
        color: rgba(255,255,255,.5);
        margin-top: 1.25rem;
    }
    .cta-reassurance span {
        display: inline-flex;
        align-items: center;
        gap: .3rem;
    }
    .cta-reassurance .check {
        color: #4ade80;
        font-weight: 700;
    }
</style>

{{-- CTA Band – dramatic gradient, grid-line overlay, glowing orb --}}
<section class="cta-band-bg relative overflow-hidden border-t border-slate-800/60 py-20 sm:py-24" aria-label="Call to Action">

    {{-- Decorative: subtle grid overlay --}}
    <div class="cta-grid-overlay" aria-hidden="true"></div>

    {{-- Decorative: glowing orbs --}}
    <div class="cta-orb cta-orb-1" aria-hidden="true"></div>
    <div class="cta-orb cta-orb-2" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-12">

            {{-- ── Left: headline block ───────────────────────────── --}}
            <div class="max-w-2xl">
                {{-- Badge --}}
                <span class="badge-gold mb-4 inline-block">Direct Support &amp; Guidance</span>

                {{-- Hindi headline --}}
                <h2 class="text-white font-heading text-3xl sm:text-5xl font-extrabold mt-2 mb-4 hindi leading-tight">
                    अपनी आवश्यकता बताइए,<br class="hidden sm:inline">
                    <span style="color:var(--cta-accent-light);">हम करेंगे सम्पूर्ण मार्गदर्शन</span>
                </h2>

                {{-- Sub-headline in Hindi --}}
                <p class="text-slate-300 text-base sm:text-lg hindi leading-relaxed mb-6">
                    {{ config('site.name') }} – Transport, Insurance, Medicine Wholesale, Rentals, Tyres व PUC के लिए Samastipur का भरोसेमंद प्रतिष्ठान।
                </p>

                {{-- Prominent phone number --}}
                <a href="tel:+91{{ config('site.phone_primary') }}" class="cta-phone-display" aria-label="Call us">
                    <span class="phone-icon-wrap" aria-hidden="true">
                        <svg class="w-4 h-4" style="color:var(--cta-accent);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </span>
                    +91&nbsp;{{ config('site.phone_primary') }}
                </a>
            </div>

            {{-- ── Right: action buttons ───────────────────────────── --}}
            <div class="shrink-0 flex flex-col items-start lg:items-center gap-4">

                {{-- Buttons row --}}
                <div class="flex flex-wrap gap-4">
                    {{-- Call --}}
                    <a href="tel:+91{{ config('site.phone_primary') }}" class="cta-btn-call" id="cta-call">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        Call Now
                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode(config('site.whatsapp_message')) }}"
                       class="cta-btn-wa"
                       target="_blank" rel="noopener noreferrer"
                       id="cta-wa">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/>
                        </svg>
                        WhatsApp करें
                    </a>

                    {{-- Online Enquiry --}}
                    <a href="{{ route('contact.show') }}" class="cta-btn-enquiry" id="cta-enquiry">
                        ऑनलाइन Enquiry भेजें
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                </div>

                {{-- Reassurance line --}}
                <div class="cta-reassurance">
                    <span><span class="check" aria-hidden="true">✓</span> No spam</span>
                    <span><span class="check" aria-hidden="true">✓</span> Free consultation</span>
                    <span><span class="check" aria-hidden="true">✓</span> Response within 2 hours</span>
                </div>
            </div>

        </div>
    </div>
</section>
