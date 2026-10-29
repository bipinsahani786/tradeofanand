{{-- Footer – Redesigned with newsletter teaser, trust marks, hover animations, CSS vars --}}
<style>
    /* ── Footer CSS custom properties ───────────────────────── */
    :root {
        --footer-bg:          #0d1117;          /* near-black navy */
        --footer-bg-alt:      #111827;          /* slightly lighter navy */
        --footer-border:      rgba(255,255,255,.08);
        --footer-text:        rgba(255,255,255,.65);
        --footer-text-muted:  rgba(255,255,255,.38);
        --footer-text-bright: #ffffff;
        --footer-accent:      var(--color-accent, #c9a84c);
        --footer-accent-soft: rgba(201,168,76,.15);
        --footer-link-line:   var(--color-accent, #c9a84c);
        --footer-heading-gap: 1.25rem;
        --footer-col-gap:     2.5rem;
    }

    /* ── Slide-up underline link animation ──────────────────── */
    .footer-link {
        position: relative;
        display: inline-block;
        color: var(--footer-text);
        font-size: .875rem;
        text-decoration: none;
        transition: color .22s ease;
        padding-bottom: 2px;
    }
    .footer-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 1.5px;
        background: var(--footer-link-line);
        transform: scaleX(0);
        transform-origin: left center;
        transition: transform .25s cubic-bezier(.4,0,.2,1);
    }
    .footer-link:hover {
        color: var(--footer-text-bright);
    }
    .footer-link:hover::after {
        transform: scaleX(1);
    }

    /* ── Newsletter teaser band ──────────────────────────────── */
    .footer-enquiry-band {
        background: linear-gradient(135deg, var(--footer-accent-soft) 0%, rgba(255,255,255,.03) 100%);
        border: 1px solid rgba(201,168,76,.2);
        border-radius: .75rem;
    }

    /* ── Trust / cert badge chips ────────────────────────────── */
    .trust-badge {
        display: inline-flex;
        align-items: center;
        gap: .4rem;
        padding: .35rem .75rem;
        border: 1px solid var(--footer-border);
        border-radius: 999px;
        font-size: .7rem;
        color: var(--footer-text-muted);
        letter-spacing: .05em;
        transition: border-color .2s, color .2s;
    }
    .trust-badge:hover {
        border-color: rgba(201,168,76,.4);
        color: var(--footer-text);
    }

    /* ── Section heading label ───────────────────────────────── */
    .footer-section-label {
        font-size: .7rem;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--footer-accent);
        margin-bottom: var(--footer-heading-gap);
    }

    /* ── Social icon circle ──────────────────────────────────── */
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 2.1rem;
        height: 2.1rem;
        border-radius: 50%;
        border: 1px solid var(--footer-border);
        color: var(--footer-text-muted);
        transition: background .2s, border-color .2s, color .2s, transform .2s;
    }
    .social-icon:hover {
        background: var(--footer-accent-soft);
        border-color: rgba(201,168,76,.5);
        color: var(--footer-accent);
        transform: translateY(-2px);
    }

    /* ── Enquiry button in footer teaser ─────────────────────── */
    .footer-enquiry-btn {
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        padding: .65rem 1.5rem;
        background: var(--footer-accent);
        color: #000;
        font-size: .875rem;
        font-weight: 700;
        letter-spacing: .04em;
        border-radius: .375rem;
        text-decoration: none;
        transition: opacity .2s, transform .2s;
        white-space: nowrap;
    }
    .footer-enquiry-btn:hover {
        opacity: .88;
        transform: translateY(-1px);
    }
</style>

<footer style="background:var(--footer-bg);color:var(--footer-text);" role="contentinfo">

    {{-- ══════════════════════════════════════════════════════
         ENQUIRY TEASER BAND (full-width, above columns)
    ══════════════════════════════════════════════════════ --}}
    <div class="max-w-6xl mx-auto px-6 pt-12">
        <div class="footer-enquiry-band flex flex-col sm:flex-row items-center justify-between gap-5 px-7 py-6">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color:var(--footer-accent);">Quick Enquiry</p>
                <h3 class="text-white font-heading text-lg sm:text-xl font-bold leading-snug m-0 hindi">
                    कोई भी सेवा चाहिए? – एक मैसेज करें,<br class="hidden sm:inline">
                    <span style="color:var(--footer-accent);">हम तुरंत जवाब देंगे।</span>
                </h3>
            </div>
            <a href="{{ route('contact.show') }}" class="footer-enquiry-btn shrink-0">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
                Send Enquiry
            </a>
        </div>
    </div>

    {{-- ══════════════════════════════════════════════════════
         MAIN 4-COLUMN GRID
    ══════════════════════════════════════════════════════ --}}
    <div class="max-w-6xl mx-auto px-6 pt-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12" style="border-bottom:1px solid var(--footer-border);">

            {{-- ── Col 1: Brand ────────────────────────────────── --}}
            <div>
                {{-- Logo / wordmark --}}
                <div class="font-heading text-xl font-extrabold tracking-widest mb-0.5" style="color:var(--footer-text-bright);">
                    {{ config('site.name') }}
                </div>
                <div class="text-xs mb-4" style="color:var(--footer-text-muted);">
                    Formerly known as {{ config('site.formerly') }}
                </div>

                {{-- Taglines --}}
                <p class="text-sm leading-relaxed mb-2 hindi" style="color:var(--footer-text);">{{ config('site.tagline_hindi') }}</p>
                <p class="text-sm leading-relaxed mb-5 hindi" style="color:var(--footer-text-muted);">{{ config('site.closing_line') }}</p>

                {{-- Social proof pills --}}
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="trust-badge">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        Est. 2011
                    </span>
                    <span class="trust-badge">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v1h-3zM4.75 14.094A5.973 5.973 0 004 17v1H1v-1a3 3 0 013.75-2.906z"/></svg>
                        1000+ Served
                    </span>
                </div>

                {{-- Social icons --}}
                <div class="flex gap-2.5">
                    {{-- Facebook --}}
                    <a href="#" aria-label="Facebook" class="social-icon">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="#" aria-label="Instagram" class="social-icon">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    {{-- WhatsApp --}}
                    <a href="https://wa.me/{{ config('site.whatsapp_number') }}" aria-label="WhatsApp" class="social-icon" target="_blank" rel="noopener noreferrer">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.976 0C5.374 0 0 5.374 0 11.976c0 2.107.549 4.092 1.508 5.818L0 24l6.348-1.484A11.93 11.93 0 0 0 11.976 24c6.602 0 11.976-5.374 11.976-11.976S18.578 0 11.976 0zm0 21.818a9.808 9.808 0 0 1-4.999-1.369l-.358-.213-3.767.881.896-3.656-.234-.378A9.8 9.8 0 0 1 2.182 11.976c0-5.405 4.399-9.794 9.794-9.794 5.405 0 9.794 4.389 9.794 9.794 0 5.395-4.389 9.842-9.794 9.842z"/></svg>
                    </a>
                </div>
            </div>

            {{-- ── Col 2: Quick Links ───────────────────────────── --}}
            <div>
                <div class="footer-section-label">Quick Links</div>
                <ul class="flex flex-col gap-2.5">
                    <li><a href="{{ route('home') }}" class="footer-link">Home</a></li>
                    <li><a href="{{ route('services.index') }}" class="footer-link">Our Services</a></li>
                    <li><a href="{{ route('contact.show') }}" class="footer-link">Contact Us</a></li>
                    <li><a href="{{ route('team.show') }}" class="footer-link">Our Team</a></li>
                    <li><a href="{{ route('gallery.show') }}" class="footer-link">Gallery</a></li>
                    <li><a href="{{ route('privacy') }}" class="footer-link">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="footer-link">Terms &amp; Conditions</a></li>
                </ul>
            </div>

            {{-- ── Col 3: Services ─────────────────────────────── --}}
            <div>
                <div class="footer-section-label">Our Services</div>
                <ul class="flex flex-col gap-2.5">
                    @foreach(config('site.services') as $srv)
                    <li>
                        <a href="{{ route('services.show', $srv['slug']) }}" class="footer-link">
                            {{ $srv['name'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- ── Col 4: Contact ──────────────────────────────── --}}
            <div>
                <div class="footer-section-label">Contact</div>
                <div class="space-y-3">
                    {{-- Address --}}
                    <div class="flex items-start gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0 mt-0.5" style="color:var(--footer-accent);opacity:.8;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span style="color:var(--footer-text);">{{ config('site.address') }}</span>
                    </div>

                    {{-- Primary phone --}}
                    <div class="flex items-center gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0" style="color:var(--footer-accent);opacity:.8;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <a href="tel:+91{{ config('site.phone_primary') }}" class="footer-link">+91&nbsp;{{ config('site.phone_primary') }}</a>
                    </div>

                    {{-- Secondary phone --}}
                    <div class="flex items-center gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0" style="color:var(--footer-accent);opacity:.8;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.92 1.22h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <a href="tel:+91{{ config('site.phone_abhinav') }}" class="footer-link">+91&nbsp;{{ config('site.phone_abhinav') }}</a>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-center gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0" style="color:var(--footer-accent);opacity:.8;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <a href="mailto:{{ config('site.email_primary') }}" class="footer-link">{{ config('site.email_primary') }}</a>
                    </div>

                    {{-- Business hours --}}
                    <div class="flex items-center gap-2.5 text-sm">
                        <svg class="w-4 h-4 shrink-0" style="color:var(--footer-accent);opacity:.8;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <span style="color:var(--footer-text);">{{ config('site.business_hours') }}</span>
                    </div>
                </div>
            </div>

        </div>{{-- /grid --}}

        {{-- ══════════════════════════════════════════════════════
             CERTIFICATION / TRUST MARKS ROW
        ══════════════════════════════════════════════════════ --}}
        <div class="py-5 flex flex-wrap items-center justify-center gap-3" style="border-bottom:1px solid var(--footer-border);">
            <span class="trust-badge">
                <svg class="w-3 h-3" style="color:var(--footer-accent);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                GST Registered
            </span>
            <span class="trust-badge">
                <svg class="w-3 h-3" style="color:var(--footer-accent);" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Licensed &amp; Insured
            </span>
            <span class="trust-badge">
                <svg class="w-3 h-3" style="color:var(--footer-accent);" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v1h-3zM4.75 14.094A5.973 5.973 0 004 17v1H1v-1a3 3 0 013.75-2.906z"/></svg>
                1000+ Happy Clients
            </span>
            <span class="trust-badge">
                <svg class="w-3 h-3" style="color:var(--footer-accent);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l3-3z" clip-rule="evenodd"/></svg>
                Trusted Since 2011
            </span>
            <span class="trust-badge">
                <svg class="w-3 h-3" style="color:var(--footer-accent);" fill="currentColor" viewBox="0 0 20 20"><path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/><path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/></svg>
                Free Consultation
            </span>
        </div>

        {{-- ══════════════════════════════════════════════════════
             BOTTOM BAR
        ══════════════════════════════════════════════════════ --}}
        <div class="py-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs" style="color:var(--footer-text-muted);">
            {{-- Copyright --}}
            <span>&copy; {{ date('Y') }} {{ config('site.name') }}. All rights reserved.</span>

            {{-- Middle: bottom links --}}
            <div class="flex gap-5">
                <a href="{{ route('privacy') }}" class="footer-link" style="font-size:.75rem;">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="footer-link" style="font-size:.75rem;">Terms</a>
                <a href="{{ route('sitemap') }}" class="footer-link" style="font-size:.75rem;">Sitemap</a>
            </div>

            {{-- Made in Bihar --}}
            <span style="color:var(--footer-text-muted);">
                Made in Bihar with&nbsp;<span style="color:#e25555;" aria-label="love">♥</span>
            </span>
        </div>

    </div>{{-- /max-w-6xl --}}
</footer>
