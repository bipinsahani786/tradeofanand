/**
 * Trade of Anand – Main JavaScript Application
 * Enhanced vanilla JS: mobile menu, FAQ accordion, gallery filter & lightbox,
 * scroll reveal (left/right/up), count-up animation, ticker/marquee,
 * smooth scroll, active nav highlighting, WhatsApp pulse, and enhanced contact form.
 *
 * No external dependencies. Production-ready.
 */

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initFaqAccordion();
    initGallery();
    initScrollReveal();
    initContactForm();
    initHeaderScroll();
    initCountUp();
    initTicker();
    initWhatsAppPulse();
    initSmoothScroll();
    initActiveNav();
});

/* ── 1. Mobile Menu ────────────────────────────────────────────────────────── */
function initMobileMenu() {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mobileMenu   = document.getElementById('mobile-menu');

    if (!hamburgerBtn || !mobileMenu) return;

    // Span elements inside the hamburger button for the animated icon
    const spans = hamburgerBtn.querySelectorAll('span');

    /**
     * Animate the hamburger icon spans.
     * Open  → top span rotates  45°, middle span disappears, bottom span rotates -45°
     * Close → all spans return to natural position
     */
    function animateHamburger(isOpen) {
        if (spans.length < 3) return;

        if (isOpen) {
            spans[0].style.transform        = 'translateY(7px) rotate(45deg)';
            spans[1].style.opacity          = '0';
            spans[1].style.transform        = 'scaleX(0)';
            spans[2].style.transform        = 'translateY(-7px) rotate(-45deg)';
        } else {
            spans[0].style.transform        = '';
            spans[1].style.opacity          = '';
            spans[1].style.transform        = '';
            spans[2].style.transform        = '';
        }
    }

    function toggleMenu(open) {
        const isOpen = typeof open === 'boolean'
            ? open
            : !mobileMenu.classList.contains('mobile-menu--open');

        mobileMenu.classList.toggle('mobile-menu--open', isOpen);
        hamburgerBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        animateHamburger(isOpen);
    }

    hamburgerBtn.addEventListener('click', () => toggleMenu());

    // Close when clicking any nav link inside the mobile menu
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => toggleMenu(false));
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu.classList.contains('mobile-menu--open')) {
            toggleMenu(false);
            hamburgerBtn.focus();
        }
    });
}

/* ── 2. FAQ Accordion ──────────────────────────────────────────────────────── */
function initFaqAccordion() {
    const faqButtons = document.querySelectorAll('.faq-item button');

    faqButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.faq-item');
            if (!item) return;

            const isCurrentlyOpen = item.classList.contains('faq-item--open');

            // Close all sibling items for clean accordion behaviour
            const container = item.parentElement;
            if (container) {
                container.querySelectorAll('.faq-item--open').forEach(openItem => {
                    if (openItem !== item) {
                        openItem.classList.remove('faq-item--open');
                        const otherBtn = openItem.querySelector('button');
                        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                    }
                });
            }

            // Toggle the clicked item
            item.classList.toggle('faq-item--open', !isCurrentlyOpen);
            btn.setAttribute('aria-expanded', !isCurrentlyOpen ? 'true' : 'false');
        });
    });
}

/* ── 3. Gallery – Filtering, Lightbox & Touch Swipe ────────────────────────── */
function initGallery() {
    const filterTabs    = document.querySelectorAll('.filter-tab');
    const galleryItems  = Array.from(document.querySelectorAll('.gallery-item'));
    const noResults     = document.getElementById('gallery-no-results');

    const lightbox        = document.getElementById('lightbox');
    const lightboxImg     = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const lightboxCounter = document.getElementById('lightbox-counter');
    const lightboxClose   = document.getElementById('lightbox-close');
    const lightboxPrev    = document.getElementById('lightbox-prev');
    const lightboxNext    = document.getElementById('lightbox-next');

    /* ── 3a. Filter Tabs ─────────────────────────────────────────────────── */
    if (filterTabs.length > 0 && galleryItems.length > 0) {
        filterTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetFilter = tab.getAttribute('data-filter');

                // Update active tab styles
                filterTabs.forEach(t => {
                    t.classList.remove('bg-[var(--color-primary)]', 'text-white', 'bg-[#0f2147]', 'border-[#0f2147]', 'filter-tab--active');
                    t.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
                });
                tab.classList.add('bg-[#0f2147]', 'text-white', 'border-[#0f2147]', 'filter-tab--active');
                tab.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');

                let visibleCount = 0;
                galleryItems.forEach(item => {
                    const itemCat   = item.getAttribute('data-category');
                    const isVisible = targetFilter === 'all' || itemCat === targetFilter;

                    item.classList.toggle('gallery-item--hidden', !isVisible);
                    if (isVisible) visibleCount++;
                });

                if (noResults) {
                    noResults.classList.toggle('hidden', visibleCount > 0);
                }
            });
        });
    }

    /* ── 3b. Lightbox ────────────────────────────────────────────────────── */
    if (lightbox && lightboxImg && galleryItems.length > 0) {
        let currentVisibleItems = [];
        let currentIndex        = 0;

        // Touch/swipe tracking state
        let touchStartX = 0;
        let touchEndX   = 0;
        const SWIPE_THRESHOLD = 50; // px minimum for a swipe to register

        function getVisibleGalleryItems() {
            return galleryItems.filter(item => !item.classList.contains('gallery-item--hidden'));
        }

        function showLightboxImage(index) {
            currentVisibleItems = getVisibleGalleryItems();
            if (currentVisibleItems.length === 0) return;

            // Wrap around
            if (index < 0) index = currentVisibleItems.length - 1;
            if (index >= currentVisibleItems.length) index = 0;

            currentIndex = index;
            const currentItem = currentVisibleItems[currentIndex];
            const src     = currentItem.getAttribute('data-src') || currentItem.querySelector('img')?.src;
            const caption = currentItem.getAttribute('data-caption') || currentItem.querySelector('img')?.alt || '';

            lightboxImg.src = src;
            lightboxImg.alt = caption;
            if (lightboxCaption) lightboxCaption.textContent = caption;
            if (lightboxCounter) lightboxCounter.textContent = `${currentIndex + 1} / ${currentVisibleItems.length}`;
        }

        function openLightbox(item) {
            currentVisibleItems = getVisibleGalleryItems();
            currentIndex = currentVisibleItems.indexOf(item);
            if (currentIndex === -1) currentIndex = 0;

            showLightboxImage(currentIndex);
            lightbox.classList.add('lightbox--open');
            document.body.style.overflow = 'hidden';
            lightboxClose?.focus();
        }

        function closeLightbox() {
            lightbox.classList.remove('lightbox--open');
            document.body.style.overflow = '';
            if (lightboxImg) lightboxImg.src = '';
        }

        // Open lightbox on gallery item click
        galleryItems.forEach(item => {
            item.addEventListener('click', () => openLightbox(item));
        });

        // Close handlers
        lightboxClose?.addEventListener('click', closeLightbox);

        // Close on backdrop click
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });

        // Prev / Next buttons
        lightboxPrev?.addEventListener('click', (e) => {
            e.stopPropagation();
            showLightboxImage(currentIndex - 1);
        });

        lightboxNext?.addEventListener('click', (e) => {
            e.stopPropagation();
            showLightboxImage(currentIndex + 1);
        });

        // Keyboard navigation (Arrow keys + Escape)
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('lightbox--open')) return;

            if      (e.key === 'Escape')      closeLightbox();
            else if (e.key === 'ArrowLeft')   showLightboxImage(currentIndex - 1);
            else if (e.key === 'ArrowRight')  showLightboxImage(currentIndex + 1);
        });

        /* ── 3c. Touch / Swipe Support ───────────────────────────────────── */
        lightbox.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        lightbox.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            const delta = touchStartX - touchEndX;

            if (Math.abs(delta) > SWIPE_THRESHOLD) {
                if (delta > 0) {
                    // Swiped left → next image
                    showLightboxImage(currentIndex + 1);
                } else {
                    // Swiped right → previous image
                    showLightboxImage(currentIndex - 1);
                }
            }
        }, { passive: true });
    }
}

/* ── 4. Scroll Reveal – up / left / right (IntersectionObserver) ───────────── */
/**
 * Observes elements with .reveal, .reveal-left, or .reveal-right.
 * CSS is expected to set initial transforms; this function adds the
 * .reveal--visible class to trigger the transition into view.
 *
 * Suggested CSS additions (if not already present):
 *   .reveal         { opacity:0; transform:translateY(30px);   transition: opacity .6s ease, transform .6s ease; }
 *   .reveal-left    { opacity:0; transform:translateX(-30px);  transition: opacity .6s ease, transform .6s ease; }
 *   .reveal-right   { opacity:0; transform:translateX(30px);   transition: opacity .6s ease, transform .6s ease; }
 *   .reveal--visible{ opacity:1; transform:translate(0,0); }
 */
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    if (revealElements.length === 0) return;

    if (!('IntersectionObserver' in window)) {
        // Fallback: show everything immediately for older browsers
        revealElements.forEach(el => el.classList.add('reveal--visible'));
        return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal--visible');
                obs.unobserve(entry.target);
            }
        });
    }, {
        threshold:  0.1,
        rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(el => observer.observe(el));
}

/* ── 5. Contact Form – Real-time Validation + Loading State ────────────────── */
function initContactForm() {
    const contactForm = document.querySelector('form[action*="contact"]');
    if (!contactForm) return;

    const submitBtn    = contactForm.querySelector('button[type="submit"]');
    const successMsg   = contactForm.querySelector('.form-success') || document.getElementById('form-success');

    /* ── 5a. Real-time validation helpers ───────────────────────────────── */
    function showError(field, message) {
        field.classList.add('border-red-500');
        field.classList.remove('border-green-500');

        let errorEl = field.parentElement.querySelector('.field-error');
        if (!errorEl) {
            errorEl = document.createElement('p');
            errorEl.className = 'field-error text-red-500 text-xs mt-1';
            field.parentElement.appendChild(errorEl);
        }
        errorEl.textContent = message;
    }

    function clearError(field) {
        field.classList.remove('border-red-500');
        field.classList.add('border-green-500');

        const errorEl = field.parentElement.querySelector('.field-error');
        if (errorEl) errorEl.textContent = '';
    }

    function validateField(field) {
        const value = field.value.trim();

        if (field.hasAttribute('required') && value === '') {
            showError(field, 'यह क्षेत्र आवश्यक है / This field is required.');
            return false;
        }

        if (field.type === 'email' && value !== '') {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                showError(field, 'कृपया वैध ईमेल दर्ज करें / Please enter a valid email.');
                return false;
            }
        }

        clearError(field);
        return true;
    }

    // Attach blur validation to all required fields
    const requiredFields = contactForm.querySelectorAll('input[required], textarea[required], select[required]');
    requiredFields.forEach(field => {
        field.addEventListener('blur', () => validateField(field));
        field.addEventListener('input', () => {
            // Clear error on user input so feedback isn't annoying
            if (field.classList.contains('border-red-500')) validateField(field);
        });
    });

    /* ── 5b. Submit handler ─────────────────────────────────────────────── */
    contactForm.addEventListener('submit', (e) => {
        // Run validation on all required fields before submit
        let formIsValid = true;
        requiredFields.forEach(field => {
            if (!validateField(field)) formIsValid = false;
        });

        if (!formIsValid) {
            e.preventDefault();
            // Scroll to first error
            const firstError = contactForm.querySelector('.border-red-500');
            if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }

        if (submitBtn && !submitBtn.disabled) {
            submitBtn.disabled = true;
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'भेजा जा रहा है… / Submitting…';

            // Re-enable after 10 s if server does not redirect
            setTimeout(() => {
                if (submitBtn.disabled) {
                    submitBtn.disabled  = false;
                    submitBtn.textContent = originalText;
                }
            }, 10000);
        }

        // Show inline success message if the element exists and the form uses AJAX
        if (successMsg) {
            successMsg.classList.remove('hidden');
            setTimeout(() => successMsg.classList.add('hidden'), 5000);
        }
    });
}

/* ── 6. Header Scroll Effect ───────────────────────────────────────────────── */
/**
 * Adds `nav-scrolled` to #site-header once the user scrolls past 50 px.
 * Expected CSS:
 *   #site-header.nav-scrolled { box-shadow: 0 2px 12px rgba(0,0,0,.15); backdrop-filter: blur(6px); }
 */
function initHeaderScroll() {
    const header = document.getElementById('site-header');
    if (!header) return;

    function onScroll() {
        header.classList.toggle('nav-scrolled', window.scrollY > 50);
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // Run once on load to handle hard-refresh mid-page
}

/* ── 7. Count-Up Animation ─────────────────────────────────────────────────── */
/**
 * Finds all `.count-up` elements with a `data-target` attribute and animates
 * the number from 0 to target when the element scrolls into view.
 *
 * Attributes:
 *   data-target   – numeric end value  (e.g. "500")
 *   data-suffix   – optional suffix    (e.g. "+" or "%")
 *   data-duration – optional duration in ms (default 2000)
 */
function initCountUp() {
    const countEls = document.querySelectorAll('.count-up[data-target]');
    if (countEls.length === 0) return;

    if (!('IntersectionObserver' in window)) {
        // Fallback: set final values immediately
        countEls.forEach(el => {
            const target = parseFloat(el.getAttribute('data-target')) || 0;
            const suffix = el.getAttribute('data-suffix') || '';
            el.textContent = target + suffix;
        });
        return;
    }

    /**
     * Easing function – easeOutQuart.
     * @param {number} t – progress 0..1
     */
    function easeOut(t) {
        return 1 - Math.pow(1 - t, 4);
    }

    function animateCount(el) {
        const target   = parseFloat(el.getAttribute('data-target'))  || 0;
        const suffix   = el.getAttribute('data-suffix')  || '';
        const duration = parseInt(el.getAttribute('data-duration'), 10) || 2000;
        const isFloat  = String(target).includes('.');
        const decimals = isFloat ? (String(target).split('.')[1] || '').length : 0;

        let startTime = null;

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            const elapsed  = timestamp - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const value    = easeOut(progress) * target;

            el.textContent = (isFloat ? value.toFixed(decimals) : Math.floor(value)) + suffix;

            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                el.textContent = (isFloat ? target.toFixed(decimals) : target) + suffix;
            }
        }

        requestAnimationFrame(step);
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCount(entry.target);
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    countEls.forEach(el => observer.observe(el));
}

/* ── 8. Ticker / Marquee ───────────────────────────────────────────────────── */
/**
 * Finds `.ticker-track` elements, clones their content for a seamless infinite
 * loop, and pauses the CSS animation on hover.
 *
 * Required CSS (add to app.css):
 *   .ticker-track            { display:flex; width:max-content; animation: ticker-scroll 20s linear infinite; }
 *   @keyframes ticker-scroll { from { transform:translateX(0); } to { transform:translateX(-50%); } }
 *   .ticker-track.paused     { animation-play-state: paused; }
 */
function initTicker() {
    const tracks = document.querySelectorAll('.ticker-track');
    if (tracks.length === 0) return;

    tracks.forEach(track => {
        // Clone the existing content so the loop is seamless
        const originalContent = track.innerHTML;
        track.innerHTML = originalContent + originalContent;

        // Pause on hover; resume on mouse leave
        track.addEventListener('mouseenter', () => track.classList.add('paused'));
        track.addEventListener('mouseleave', () => track.classList.remove('paused'));
    });
}

/* ── 9. WhatsApp Sticky CTA Pulse ──────────────────────────────────────────── */
/**
 * Every 5 seconds adds the class `.wa-pulse` to the desktop WhatsApp button
 * for 1 second, then removes it.
 *
 * Required CSS:
 *   @keyframes wa-pulse { 0%,100%{ transform:scale(1);box-shadow:0 0 0 0 rgba(37,211,102,.7); }
 *                         50%    { transform:scale(1.1);box-shadow:0 0 0 12px rgba(37,211,102,0); } }
 *   .wa-pulse { animation: wa-pulse 1s ease; }
 */
function initWhatsAppPulse() {
    // Targets either a dedicated id or the common floating WhatsApp button
    const waBtn = document.getElementById('wa-sticky')
               || document.querySelector('.wa-float')
               || document.querySelector('a[href*="wa.me"]');

    if (!waBtn) return;

    setInterval(() => {
        waBtn.classList.add('wa-pulse');
        setTimeout(() => waBtn.classList.remove('wa-pulse'), 1000);
    }, 5000);
}

/* ── 10. Smooth Scroll ──────────────────────────────────────────────────────── */
/**
 * Intercepts clicks on anchor links (`href="#section"`) and smoothly scrolls
 * to the target element, accounting for the sticky header height.
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const href = anchor.getAttribute('href');
            if (!href || href === '#') return;

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();

            const header = document.getElementById('site-header');
            const offset = header ? header.offsetHeight + 8 : 80;
            const top    = target.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({ top, behavior: 'smooth' });
        });
    });
}

/* ── 11. Active Navigation Highlighting on Scroll ──────────────────────────── */
/**
 * Watches page sections and highlights the matching nav link when that
 * section is in the upper half of the viewport.
 *
 * Expects:
 *   - Page sections with an `id` attribute
 *   - Desktop nav links inside `#site-header nav` that have an `href="#sectionId"`
 */
function initActiveNav() {
    const header   = document.getElementById('site-header');
    const navLinks = header ? Array.from(header.querySelectorAll('nav a[href^="#"]')) : [];
    if (navLinks.length === 0) return;

    // Collect the sections referenced by nav links
    const sections = navLinks
        .map(link => {
            const id = link.getAttribute('href').slice(1);
            return document.getElementById(id);
        })
        .filter(Boolean);

    if (sections.length === 0) return;

    const ACTIVE_CLASS = 'nav-link--active';

    function setActiveLink(activeId) {
        navLinks.forEach(link => {
            const isActive = link.getAttribute('href') === '#' + activeId;
            link.classList.toggle(ACTIVE_CLASS, isActive);
        });
    }

    function onScroll() {
        const headerH   = header ? header.offsetHeight : 0;
        const midpoint  = window.scrollY + headerH + window.innerHeight * 0.35;
        let activeSection = sections[0];

        sections.forEach(section => {
            if (section.offsetTop <= midpoint) {
                activeSection = section;
            }
        });

        if (activeSection) setActiveLink(activeSection.id);
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // Initialise on load
}
