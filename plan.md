# PROMPT: Trade of Anand – Professional Multi-Service Business Website (Laravel Blade)

You are a senior Laravel + frontend engineer and UI designer. Build a complete, production-ready, SEO-friendly business website for **TRADE OF ANAND** using **Laravel (latest stable) + Blade templates**. Follow every section of this document. Do not skip pages, sections, or CTAs. Do not invent facts that are not given here; use clearly marked placeholders where data is missing.

---

## 1. PROJECT SUMMARY

- **Brand:** TRADE OF ANAND (also operates under the umbrella name **ANAND GROUP**)
- **Formerly known as:** M/S SANJEEV KUMAR SUMAN
- **Tagline (Hindi):** भरोसेमंद सेवा • उचित दर • बेहतर मार्गदर्शन
- **Location:** Mushrigharari, Samastipur, Bihar
- **Type:** Multi-service business platform (Transport & Logistics, Insurance, Medicine Wholesale, Rental, Tyre Agency, Pollution Testing)
- **Primary audience:** Local customers and businesses in Samastipur / Bihar (poultry companies, transporters, vehicle owners, medical stores, hospitals, people looking for insurance or rentals)
- **Primary goals:** Generate calls, WhatsApp enquiries and contact form leads. Build trust through experience, team and gallery.
- **Languages:** Bilingual content (Hindi primary + English for service names/terms). Hindi text must render properly (Devanagari font).

---

## 2. DESIGN DIRECTION (VERY IMPORTANT – MUST NOT LOOK AI-GENERATED)

The site must look like it was designed by a human agency for a real, established Indian business. Clean, sharp, trustworthy, corporate.

### Strict DON'Ts
- ❌ NO gradients anywhere (backgrounds, buttons, text, borders, overlays)
- ❌ NO large border radius. Max `border-radius: 4px` on buttons/inputs/cards. Many elements should be `0`. No pill buttons, no circles except tiny avatar/icon dots if truly needed
- ❌ NO glassmorphism, blur effects, neon glow, heavy drop shadows, floating blob shapes
- ❌ NO purple/blue-violet "AI startup" palette
- ❌ NO generic emoji-as-icons in the UI (use a consistent SVG icon set such as Lucide/Heroicons inline SVG, thin line style)
- ❌ NO cookie-cutter "3 identical cards with icon on top" repeated on every section. Vary layouts: split sections, numbered lists, tables, timelines, full-bleed image bands, stat strips
- ❌ NO lorem ipsum, no "Welcome to our website", no buzzword filler copy
- ❌ NO excessive animation. Only subtle fade/slide on scroll (opacity + 12px translate, 300ms) and simple hover color changes

### DOs
- ✅ Flat solid colors, strong typographic hierarchy, generous whitespace, thin 1px borders, grid-based layout, editorial feel
- ✅ Real photography feel (use `<img>` slots with proper aspect ratios; placeholders until client supplies photos)
- ✅ Smooth, calm experience: smooth scroll, sticky header, consistent spacing scale (4/8/16/24/32/48/64/96)
- ✅ Fully responsive (mobile first). Test at 360px, 768px, 1024px, 1440px
- ✅ Accessible: contrast AA, focus states, semantic HTML, alt text, keyboard-friendly menu

### Color palette (flat, define as CSS variables)
- `--ink: #12202F` (deep navy-charcoal, headings, footer)
- `--primary: #1F3A5F` (trust blue, buttons, links)
- `--accent: #C8861A` (amber/saffron, CTA highlights, small accents only)
- `--bg: #FFFFFF`
- `--bg-soft: #F4F2EE` (warm off-white section bg)
- `--line: #DAD6CE` (borders)
- `--text: #2B3440`, `--muted: #6B7280`
- `--whatsapp: #1FA855` (only for WhatsApp button)

### Typography
- Headings: **"Barlow Condensed"** or **"Archivo"** (700/600) for a strong corporate look, tight letter-spacing
- Body: **"Mukta"** (supports Devanagari + Latin) 400/500/600
- Hindi fallback: `"Noto Sans Devanagari", sans-serif`
- Base size 16–17px, line-height 1.65. Hindi text slightly larger line-height (1.8)
- Self-host fonts or use `font-display: swap`; preload critical font

### Buttons
- Primary: solid `--primary`, white text, radius 2–4px, uppercase small label optional, hover darkens
- Secondary: 1px border `--primary`, transparent bg
- Call button and WhatsApp button always visible (see sticky CTAs)

---

## 3. TECH STACK & ARCHITECTURE

- Laravel (latest stable), PHP 8.2+
- Blade templates only (no SPA). Use Blade components + layouts + partials
- CSS: Tailwind CSS via Vite **or** clean custom CSS (SCSS) – whichever, but keep the design rules above. If using Tailwind, override default `rounded-*` so nothing exceeds 4px
- JS: minimal vanilla JS (mobile menu, gallery lightbox, filter tabs, scroll reveal, form UX). No heavy libraries
- Database: MySQL. Store contact enquiries in a table
- Images: lazy loading (`loading="lazy"`), `width`/`height` attributes to avoid layout shift, WebP preferred

### Suggested structure
```
resources/views/
  layouts/app.blade.php
  partials/ (header, footer, sticky-cta, seo, breadcrumbs, page-hero, cta-band)
  components/ (service-card, team-card, section-heading, stat, timeline-item, gallery-item)
  pages/
    home.blade.php
    services/index.blade.php
    services/show.blade.php      (one template for each service detail)
    team.blade.php
    gallery.blade.php
    contact.blade.php
    privacy.blade.php
    terms.blade.php
    404.blade.php
app/Http/Controllers/ (PageController, ServiceController, ContactController, SitemapController)
app/Models/ (Enquiry)
config/site.php   (ALL business data lives here: name, phones, email, address, services, team, timeline, gallery list)
routes/web.php
```
**Important:** Keep all content (services, team, experience, contact info) in `config/site.php` (or a seeded DB) so the client can edit easily and Blade loops render them. No hard-coded duplicated data across views.

### Routes
```
/                      → Home
/services              → Services overview
/services/{slug}       → Individual service detail (SEO landing page per service)
/team                  → Team
/gallery               → Gallery
/contact               → Contact (GET form, POST submit with throttle)
/privacy-policy, /terms
/sitemap.xml, /robots.txt
```
Service slugs: `transport-logistics`, `insurance-services`, `anand-medicine`, `anand-bhavan-rental`, `saurav-tyre-agency`, `vehicle-pollution-testing-centre`

---

## 4. GLOBAL COMPONENTS

### Header / Navbar (sticky)
- Left: Logo (text logo "TRADE OF ANAND" with small line "Formerly M/S Sanjeev Kumar Suman" – placeholder for logo image file)
- Nav links exactly in this order: **Home, Services, Contact Us, Teams, Gallery**
  - (Use label "Our Team" or "Teams" as the client wrote "teams"; keep URL `/team`)
- Right: "Call Now" button (tel link) + "WhatsApp" button on desktop
- Services link has a simple dropdown listing the 6 services (flat, square, 1px border)
- Active link state, mobile hamburger → full-width slide-down menu with big tap targets
- Top thin bar above header (desktop): phone, email, location text

### Sticky CTAs
- Mobile: bottom fixed bar with two equal buttons: **Call** | **WhatsApp**
- Desktop: small fixed WhatsApp button at bottom-right (square-ish, radius ≤ 4px)

### Footer
- Column 1: Brand, short description, "Formerly known as M/S Sanjeev Kumar Suman"
- Column 2: Quick links (nav pages)
- Column 3: All services (links to detail pages)
- Column 4: Contact (address, phones, email, hours placeholder)
- Bottom bar: © year Trade of Anand. All rights reserved. | Privacy | Terms
- Dark `--ink` background, flat

### Reusable CTA band
Full-width solid `--primary` band: "अपनी ज़रूरत बताइए, हम मार्गदर्शन करेंगे" + buttons [Call Now] [WhatsApp] [Send Enquiry]. Use on the bottom of every page before the footer.

---

## 5. PAGES & SECTIONS (build ALL)

### 5.1 HOME (`/`)
1. **Hero** – Two-column. Left: small label "Formerly known as M/S Sanjeev Kumar Suman", H1 **"TRADE OF ANAND"**, subheading Hindi: *भरोसेमंद सेवा • उचित दर • बेहतर मार्गदर्शन*, 2–3 line intro (below), CTAs: [Call Now] [WhatsApp] [Our Services]. Right: strong real-photo slot (truck/office/team) with a thin offset border frame (no radius).
   - Intro text: "TRADE OF ANAND एक बहु-सेवा व्यवसायिक प्लेटफॉर्म है, जहाँ ग्राहकों को बीमा, परिवहन एवं लॉजिस्टिक्स, दवा तथा अन्य व्यावसायिक सेवाओं से संबंधित सुविधाएँ और मार्गदर्शन एक ही स्थान पर उपलब्ध कराने का प्रयास किया जाता है।"
2. **Stats strip** – flat 4-column strip with divider lines: "15+ वर्षों का व्यावसायिक अनुभव (Tyre Agency since 2011)", "6 Business Services", "6+ Poultry Companies Served" , "Samastipur, Bihar". (Numbers derived from section 7 data only; make easy to edit.)
3. **Services overview** – 6 services as a mixed layout (first service large featured, others in a list grid with number 01–06, name, 1-line description, "Learn more →" link). Not identical icon cards.
4. **About / Who we are** – split layout: image left, text right: brand story, "Formerly M/S Sanjeev Kumar Suman → Trade of Anand", group approach "एक समूह – अनेक सेवाएँ". Link to Team.
5. **Poultry Transport Experience (highlight)** – dark section showcasing Poultry Feed Integration Delivery experience as a **timeline** of companies (see section 7). Heading: "Poultry Sector में Integration Feed Delivery का अनुभव".
6. **Why Choose Us** – numbered list (not cards): एक ही जगह अनेक सेवाएँ · उचित एवं प्रतिस्पर्धी दर · व्यक्तिगत मार्गदर्शन · स्थानीय क्षेत्र में सेवा · भरोसेमंद एवं आसान संपर्क. Each with a short supporting line.
7. **Business Services strip** – व्यापार के लिए Transport Support · Insurance Support · Medicine Supply · व्यवसायिक मार्गदर्शन · अन्य आवश्यक सेवाओं के लिए संपर्क (as a clean horizontal list with a CTA).
8. **Leadership preview** – Chairman/leaders: 4 small photo+name+designation (link to /team).
9. **Gallery preview** – 6-image masonry/grid + "View full gallery" button.
10. **How it works** – 3 steps: संपर्क करें → ज़रूरत बताएँ → समाधान/सेवा पाएँ.
11. **FAQ** – 5–6 questions (accordion, flat, with FAQPage JSON-LD): e.g. services offered, how to get insurance guidance, medicine wholesale for medical stores, transport booking, tyre availability, pollution certificate process.
12. **CTA band**

### 5.2 SERVICES (`/services`)
1. Page hero with breadcrumb, H1 "हमारी सेवाएँ / Our Services"
2. Intro paragraph: "ANAND GROUP के अंतर्गत विभिन्न क्षेत्रों में विश्वसनीय एवं गुणवत्तापूर्ण सेवाएँ… आपकी ज़रूरत, हमारी सेवा."
3. **Six service blocks**, alternating image/text rows, each with: number, title, tagline, short description, bullet list of offerings, small contact line, buttons [View Details] [Call] [WhatsApp]
4. Comparison/quick-links table: Service | Best for | Contact
5. CTA band

### 5.3 SERVICE DETAIL (`/services/{slug}`) – one template, 6 pages
Each has: hero with breadcrumb + H1 + 1-line tagline + CTAs → "What we offer" list → "Who it's for" → "Why choose us" (3–4 points) → process steps → related FAQs (2–3, with schema) → contact box (name, phone, address) → "Other services" links → CTA band. Unique title/meta description per service.

Content (use from section 6 below, expand with honest, non-exaggerated copy).

### 5.4 TEAM (`/team`)
- **TOP OF PAGE: Large professional portrait banner of the Chairman – Sanjeev Kumar Suman** – wide section: big portrait image (4:5 or 3:4) on one side, on the other: name, designation(s), short bio, phone, email, [Call] [WhatsApp] [Email]. This is the first thing under page title. Use placeholder `/images/team/sanjeev-kumar-suman.jpg` (client must supply).
- Below: "Leadership Team" grid with professional portrait cards (square corners, photo on top with consistent aspect ratio 4:5, name, designation, phone, small call/WhatsApp links):
  - Abhinav Anand – Operational Head
  - Keshav Anand – Managing Director
  - Anmol Anand – Director
- Section: "Associations & Positions" – Sanjeev Kumar Suman is General Secretary (District Transport Association, Samastipur) and Spokesperson (Bihar Truck Owners Association, Bihar) – display as a credibility strip.
- Section: "Our Journey" timeline of business units with start years (section 7)
- Section: "Our Values" (भरोसा, पारदर्शिता, समय पर सेवा, स्थानीय सहयोग) – short, not generic
- CTA band
- Person schema (JSON-LD) for each member.

### 5.5 GALLERY (`/gallery`)
- Page hero + breadcrumb
- Filter tabs (vanilla JS, no reload): All | Transport | Insurance | Medicine | Bhavan | Tyre | Pollution Testing | Team & Events
- Grid (uniform aspect ratios, square corners) with lightbox (keyboard accessible: Esc, ←, →), captions, `alt` text
- Optional video section placeholder (YouTube embed lazy loaded via facade)
- Pagination or "Load more"
- Load images from `config/site.php` array so client can add photos easily; provide at least 12 placeholder entries
- CTA band

### 5.6 CONTACT US (`/contact`)
- Page hero + breadcrumb
- Two-column: Left – contact details blocks; Right – enquiry form
- **Contact details:**
  - **Sanjeev Kumar Suman** – General Secretary, District Transport Association, Samastipur; Spokesperson, Bihar Truck Owners Association – 📞 9973974722 – ✉ sanjeevksuman7@gmail.com *(client wrote "gamil" – confirm and use correct gmail.com)*
  - **Abhinav Anand** – Operational Head – 📞 9708746043 – ✉ sscabhinav11@gmail.com
  - **Keshav Anand** – Managing Director – 📞 +91 70504 11767
  - **Anmol Anand** – Director – 📞 6201668813
  - Address: Mushrigharari, Samastipur, Bihar
  - Business hours placeholder
- **Form fields:** Name, Phone, Email (optional), Service interested in (select with 6 services + Other), Message, consent text. Server-side validation (Form Request), CSRF, honeypot field, rate limit (`throttle:5,1`), store in `enquiries` table, send notification mail to admin, success flash message, preserved old input, Hindi + English error messages.
- Buttons: Call, WhatsApp (prefilled message: "नमस्ते, मुझे Trade of Anand की सेवा के बारे में जानकारी चाहिए."), Get Directions
- **Google Map embed** (Mushrigharari, Samastipur) lazy loaded
- Per-service quick contact: Anand Medicine – 9708746043; Insurance – Abhinav Anand 9708746043
- CTA band

### 5.7 Other
- Privacy Policy, Terms (simple, accurate, editable)
- Custom 404 page with links to main pages
- Thank-you state after form submit (same page flash or `/contact/thank-you` with noindex)

---

## 6. SERVICE CONTENT (use as-is, expand carefully, no false claims)

**01. Transport & Logistics** – भरोसेमंद परिवहन • समय पर डिलीवरी • बेहतर सेवा
Poultry Feed Transportation · Commercial Vehicle Transport · Pickup / Mini Truck / Truck Services · माल ढुलाई एवं डिलीवरी · Transport Coordination · Delivery & Logistics Support · Business Logistics Support · नियमित एवं आवश्यकता आधारित परिवहन सेवा · व्यवसायों के लिए Transport Solutions.
Line: "हमारा प्रयास है कि माल को सुरक्षित, समय पर और उचित व्यवस्था के साथ गंतव्य तक पहुँचाया जाए।"

**02. Insurance Services (Anand Insurance Services)** – आपकी सुरक्षा, हमारा मार्गदर्शन
Life · Health · Motor · Commercial Vehicle · Private Vehicle · Non-Motor · New Vehicle · Old Vehicle · Policy Renewal · Insurance Planning & Guidance.
Why: आपकी आवश्यकता के अनुसार योजना की जानकारी · Insurance संबंधी आसान मार्गदर्शन · Vehicle Insurance के लिए सहायता · Renewal एवं Policy संबंधी सहायता. Contact: अभिनव आनंद 9708746043.

**03. Anand Medicine** – गुणवत्तापूर्ण दवाइयों की विश्वसनीय आपूर्ति
Medicine Wholesaler, Mushrigharari, Samastipur. Medicine Wholesale · Ethical Medicine · Generic Medicine · Pharmaceutical Products / Healthcare Product Supply · Hospital & Medical Store Supply · Albert David Saline आदि की उपलब्धता/आपूर्ति के लिए संपर्क. Highlights: उचित दर • बेहतर उपलब्धता • भरोसेमंद सप्लाई. Contact: 9708746043. *(Add a note: wholesale supply for medical stores, hospitals and healthcare businesses; do not publish prices.)*

**04. Anand Bhavan – Rental Services** – रहने, कार्यालय एवं व्यवसाय के लिए स्थान
Residential Rental · Commercial Space · Office Space · Shop / Business Space · Family Accommodation · Long-Term Rental Options. Highlights: उपयुक्त स्थान • सुविधाजनक लोकेशन • पारदर्शी बातचीत. CTA: उपलब्ध कमरों/फ्लैट/दुकान/व्यावसायिक स्थान की जानकारी के लिए संपर्क करें.

**05. Saurav Tyre Agency** – Authorized Apollo Tyres Dealer / Agency (Powered by Apollo Tyres)
Apollo Tyres · Tyre Sales · Passenger Vehicle Tyres · Commercial Vehicle Tyres · Truck & Bus Tyres · Tyre Replacement · Tyre Selection Guidance. Why: भरोसेमंद Tyre Brand · वाहन के अनुसार Tyre की जानकारी · उचित विकल्प एवं मार्गदर्शन · निजी एवं Commercial Vehicles के लिए Tyres. CTA: Tyre की उपलब्धता एवं कीमत के लिए संपर्क करें.

**06. Vehicle Pollution Testing Centre** – वाहन प्रदूषण प्रमाणपत्र की सुविधा
Vehicle Pollution Testing · PUC Certificate · Two-Wheeler · Car · Commercial Vehicle Testing · Pollution Certificate Renewal. Process: वाहन लाएँ → Pollution Test कराएँ → Certificate प्राप्त करें.

**Closing line (footer/CTA):** "आपकी आवश्यकता, हमारा प्रयास। भरोसा बनाए रखें, ANAND GROUP से जुड़े रहें।"

---

## 7. EXPERIENCE & BUSINESS HISTORY (from client's handwritten notes)

### 7.1 Poultry Sector – Integration Feed Delivery experience (M/S Sanjeev Kumar Suman → Trade of Anand)
Show as a vertical timeline / table on Home and Team page:

| Year | Company |
|---|---|
| 2016 से | Hanom Feeds Pvt Ltd |
| 2018 से | ABIS Export India Pvt Ltd (2B) |
| 2021 से | Aaroki Breeding Farms & Foods Pvt Ltd |
| 2025 से | Gigabyte Poultry Farm Pvt Ltd |
| 2026 (Aug/Sept) से | Om Shakti Integrators and Proteins LLP |
| Aug 2026 से | J and J Agrovet Pvt Ltd |

Also worked with: **Happy Poultry and Feeds (2024–2026)**, **Global Poultry Group (2018–2020)**, **Nexus Group (years unclear in note – confirm with client before publishing; keep as `TODO` in config and hide until confirmed)**.

> ⚠️ The handwriting is hard to read for a few entries (e.g., "ABIS Export India Pvt Ltd (2B)", "Aaroki", "Nexus Group" years, the Om Shakti line dates). Put all of these in `config/site.php`, add a `// CONFIRM WITH CLIENT` comment, and do not publish uncertain data unverified. Do not use any company logos without permission – use text names only.

### 7.2 Business units timeline (start year)
- Saurav Tyre Agency – 2011
- Anand Bhavan Rental Services – 2015 से
- Vehicle Pollution Testing Centre – 2018 से
- Anand Medicine – 2023
- Anand Insurance Services – 2024

Show as a horizontal/vertical timeline on Team page ("Our Journey") and as stats on Home.

---

## 8. SEO REQUIREMENTS (MUST IMPLEMENT)

- Unique `<title>` (≤ 60 chars) and `<meta name="description">` (≤ 155 chars) per page, passed from controller/config into a `partials/seo.blade.php`
- One `<h1>` per page; logical h2/h3 hierarchy
- `<html lang="hi">` (use `lang="en"` on English-only snippets where relevant)
- Canonical URL on every page, Open Graph + Twitter card tags, OG image (1200×630 placeholder)
- **JSON-LD structured data:**
  - Home: `Organization` + `LocalBusiness` (name, alternateName "M/S Sanjeev Kumar Suman", address Mushrigharari Samastipur Bihar IN, telephone, email, areaServed, sameAs placeholders, openingHours placeholder)
  - Service pages: `Service` + `BreadcrumbList` + `FAQPage`
  - Team: `Person` entries
  - Anand Medicine: `Store`/`MedicalBusiness`-appropriate type; Tyre agency: `AutoPartsStore`/`TireShop`
- Breadcrumbs (visible + schema) on all inner pages
- `/sitemap.xml` generated dynamically (home, services, each service, team, gallery, contact) with lastmod
- `/robots.txt` allowing all, linking sitemap, disallowing admin/thank-you
- Clean, keyword-rich Hindi + English URLs and headings (e.g., "Truck Transport Service in Samastipur", "Apollo Tyres Dealer in Samastipur", "Insurance Services in Samastipur", "Medicine Wholesaler in Samastipur", "PUC Certificate Samastipur")
- Image `alt` text meaningful, filenames descriptive, WebP, lazy loading
- Performance: Core Web Vitals focus – minified/versioned assets via Vite, preconnect for fonts, no render-blocking scripts, defer JS, gzip/brotli ready
- Internal linking between services, team, contact
- `tel:` and `mailto:` links properly formatted (`tel:+919973974722`)
- Google Analytics / Search Console placeholders via `.env` flags (loaded only if set)
- 301 handling for `www`/non-www and trailing slash (document in README)

---

## 9. CTA RULES

Every page must have: hero CTA, at least one mid-page CTA, the bottom CTA band, sticky call/WhatsApp. Standard CTA labels: **Call Now**, **WhatsApp करें**, **Enquiry भेजें**, **Contact Us**. WhatsApp link format: `https://wa.me/919973974722?text=` + URL-encoded message (make number configurable per service).

---

## 10. DATA & PLACEHOLDERS

- Put every number, email, name, address in `config/site.php`
- Images: create `public/images/` folders (`hero`, `team`, `services`, `gallery`, `og`) with clearly named placeholder files; add `README` listing which real photos the client must provide (Chairman portrait, 3 team portraits, 6 service photos, 12+ gallery photos, logo, favicon)
- Team photos should be professional portraits, consistent crop and background; enforce `object-fit: cover` with fixed aspect ratio
- Do not fabricate testimonials, client logos, awards, certifications, prices or statistics

---

## 11. QUALITY CHECKLIST (verify before finishing)

- [ ] Nav order: Home, Services, Contact Us, Teams, Gallery
- [ ] No gradients, no radius above 4px, no glass/blur, no emoji icons in UI
- [ ] Team page starts with large Chairman (Sanjeev Kumar Suman) portrait section
- [ ] All 6 service detail pages work with unique SEO meta + schema
- [ ] Contact form validated, saved to DB, mail sent, throttled, honeypot
- [ ] Gallery filter + lightbox work with keyboard
- [ ] Sitemap + robots + canonical + OG + JSON-LD present
- [ ] Mobile sticky Call/WhatsApp bar works; menu usable at 360px
- [ ] Lighthouse targets: Performance ≥ 90, SEO 100, Accessibility ≥ 95
- [ ] Hindi text renders correctly everywhere; no broken characters
- [ ] No lorem ipsum; unverified data flagged with TODO comments

---

## 12. DELIVERABLES

1. Complete Laravel project code (routes, controllers, models, migration, form request, mail class, Blade views/components, assets)
2. `config/site.php` fully populated with the data above
3. Seeder/migration for `enquiries`
4. `README.md` with setup steps (`composer install`, `.env`, `php artisan migrate`, `npm run build`, mail config), content-edit guide, and list of images to supply

Build step by step: first layout + design tokens + header/footer, then Home, Services (+ detail), Team, Gallery, Contact, SEO + sitemap, then polish and QA against the checklist.