/**
 * Trade of Anand – Main JavaScript Application
 * Minimal vanilla JS for mobile menu, FAQ accordion, gallery filter, lightbox, and scroll reveal.
 */

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initFaqAccordion();
    initGallery();
    initScrollReveal();
    initContactForm();
});

/* ── 1. Mobile Menu ────────────────────────────────────────────────────────── */
function initMobileMenu() {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (!hamburgerBtn || !mobileMenu) return;

    function toggleMenu(open) {
        const isOpen = typeof open === 'boolean' ? open : !mobileMenu.classList.contains('mobile-menu--open');
        mobileMenu.classList.toggle('mobile-menu--open', isOpen);
        hamburgerBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    }

    hamburgerBtn.addEventListener('click', () => toggleMenu());

    // Close when clicking outside or clicking a nav link
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => toggleMenu(false));
    });

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

            // Close other items in the same container for clean accordion UX
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

            // Toggle clicked item
            item.classList.toggle('faq-item--open', !isCurrentlyOpen);
            btn.setAttribute('aria-expanded', !isCurrentlyOpen ? 'true' : 'false');
        });
    });
}

/* ── 3. Gallery Filtering & Lightbox ───────────────────────────────────────── */
function initGallery() {
    const filterTabs = document.querySelectorAll('.filter-tab');
    const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
    const noResults = document.getElementById('gallery-no-results');

    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');

    // Filter functionality
    if (filterTabs.length > 0 && galleryItems.length > 0) {
        filterTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetFilter = tab.getAttribute('data-filter');

                // Active tab class styling
                filterTabs.forEach(t => {
                    t.classList.remove('bg-[var(--color-primary)]', 'text-white');
                    t.classList.add('text-[var(--color-text)]');
                });
                tab.classList.add('bg-[var(--color-primary)]', 'text-white');
                tab.classList.remove('text-[var(--color-text)]');

                let visibleCount = 0;
                galleryItems.forEach(item => {
                    const itemCat = item.getAttribute('data-category');
                    const isVisible = targetFilter === 'all' || itemCat === targetFilter;

                    if (isVisible) {
                        item.classList.remove('gallery-item--hidden');
                        visibleCount++;
                    } else {
                        item.classList.add('gallery-item--hidden');
                    }
                });

                if (noResults) {
                    noResults.classList.toggle('hidden', visibleCount > 0);
                }
            });
        });
    }

    // Lightbox functionality
    if (lightbox && lightboxImg && galleryItems.length > 0) {
        let currentVisibleItems = [];
        let currentIndex = 0;

        function getVisibleGalleryItems() {
            return galleryItems.filter(item => !item.classList.contains('gallery-item--hidden'));
        }

        function showLightboxImage(index) {
            currentVisibleItems = getVisibleGalleryItems();
            if (currentVisibleItems.length === 0) return;

            if (index < 0) index = currentVisibleItems.length - 1;
            if (index >= currentVisibleItems.length) index = 0;

            currentIndex = index;
            const currentItem = currentVisibleItems[currentIndex];
            const src = currentItem.getAttribute('data-src') || currentItem.querySelector('img')?.src;
            const caption = currentItem.getAttribute('data-caption') || currentItem.querySelector('img')?.alt || '';

            lightboxImg.src = src;
            lightboxImg.alt = caption;
            if (lightboxCaption) {
                lightboxCaption.textContent = caption;
            }
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

        // Attach click to gallery items
        galleryItems.forEach(item => {
            item.addEventListener('click', () => openLightbox(item));
        });

        // Close handlers
        lightboxClose?.addEventListener('click', closeLightbox);

        // Backdrop click to close
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Prev / Next
        lightboxPrev?.addEventListener('click', (e) => {
            e.stopPropagation();
            showLightboxImage(currentIndex - 1);
        });

        lightboxNext?.addEventListener('click', (e) => {
            e.stopPropagation();
            showLightboxImage(currentIndex + 1);
        });

        // Keyboard controls
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('lightbox--open')) return;

            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowLeft') {
                showLightboxImage(currentIndex - 1);
            } else if (e.key === 'ArrowRight') {
                showLightboxImage(currentIndex + 1);
            }
        });
    }
}

/* ── 4. Scroll Reveal (IntersectionObserver) ───────────────────────────────── */
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal');
    if (revealElements.length === 0) return;

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal--visible');
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => observer.observe(el));
    } else {
        // Fallback for older browsers
        revealElements.forEach(el => el.classList.add('reveal--visible'));
    }
}

/* ── 5. Contact Form UX ────────────────────────────────────────────────────── */
function initContactForm() {
    const contactForm = document.querySelector('form[action*="contact"]');
    if (!contactForm) return;

    contactForm.addEventListener('submit', (e) => {
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        if (submitBtn && !submitBtn.disabled) {
            submitBtn.disabled = true;
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'भेजा जा रहा है / Submitting...';

            // Re-enable after 10s if response is delayed
            setTimeout(() => {
                if (submitBtn.disabled) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }
            }, 10000);
        }
    });
}
