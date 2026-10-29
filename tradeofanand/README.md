# TRADE OF ANAND (ANAND GROUP)
> **Formerly known as M/S Sanjeev Kumar Suman**  
> *भरोसेमंद सेवा • उचित दर • बेहतर मार्गदर्शन*  
> Mushrigharari, Samastipur, Bihar

A production-ready, SEO-optimized business website built with **Laravel 12, Blade, Tailwind CSS, and Vanilla JavaScript**.

---

## 📋 Table of Contents
1. [Overview](#-overview)
2. [Tech Stack](#-tech-stack)
3. [Features & Architecture](#-features--architecture)
4. [Installation & Setup](#-installation--setup)
5. [Configuration & Content Editing](#-configuration--content-editing)
6. [Routes & SEO](#-routes--seo)
7. [Contact Form & Email Notifications](#-contact-form--email-notifications)
8. [Asset & Photography Requirements](#-asset--photography-requirements)
9. [Deployment & Production Tips](#-deployment--production-tips)

---

## 🏢 Overview

Trade of Anand is a multi-service business platform operating in Samastipur, Bihar:
- **Transport & Logistics:** Specialized in Poultry Feed Integration Delivery, commercial transport, and mini-truck services.
- **Anand Insurance Services:** Life, health, motor, commercial vehicle insurance planning, and policy renewal.
- **Anand Medicine:** Wholesale distributor supplying ethical and generic medicines to medical stores and hospitals.
- **Anand Bhavan Rental:** Residential, commercial spaces, shops, and offices for rent in Samastipur.
- **Saurav Tyre Agency:** Authorized Apollo Tyres dealer (serving since 2011).
- **Vehicle Pollution Testing Centre:** Government-authorized computer PUC emission certification center (since 2018).

---

## 🛠 Tech Stack

- **Backend:** Laravel 12.x (PHP 8.2+)
- **Templating:** Laravel Blade with modular layouts and partials
- **Frontend / Styling:** Tailwind CSS via Vite (design token system with solid colors, zero gradients, maximum 4px radius)
- **Scripting:** Pure Vanilla JS (mobile navigation, FAQ accordion, gallery filter tabs, modal lightbox, scroll reveal)
- **Database:** MySQL / SQLite for contact enquiries table (`enquiries`)
- **Typography:** Barlow Condensed (Headings), Mukta & Noto Sans Devanagari (Body / Hindi support)

---

## 🚀 Installation & Setup

### 1. Prerequisites
- PHP 8.2 or higher (with `pdo`, `mbstring`, `gd`, `openssl`, `xml` extensions enabled)
- Composer
- Node.js (v18+) and npm
- MySQL Server (or SQLite)

### 2. Clone & Install Dependencies
```bash
# Navigate to project folder
cd tradeofanand

# Install PHP dependencies
composer install

# Install NPM packages
npm install
```

### 3. Environment Setup
```bash
# Copy example env if not present
cp .env.example .env

# Generate application key
php artisan key:generate
```

Configure `.env` database parameters:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tradeofanand
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Database Migration
```bash
php artisan migrate
```

### 5. Build Assets
```bash
# Compile for production
npm run build

# Or run Vite dev server for hot reload
npm run dev
```

### 6. Serve Locally
```bash
php artisan serve
```
Visit: [http://localhost:8000](http://localhost:8000)

---

## ⚙ Configuration & Content Editing

All business data (phone numbers, addresses, emails, team members, services, timeline, FAQs, gallery entries) is cleanly centralized in a single configuration file:

📁 **`config/site.php`**

To update business details:
- **Phone / Email / Address:** Update `phone_primary`, `phone_abhinav`, `email_primary`, `address` in `config/site.php`.
- **Services:** Modify text, bullet points, processes, or FAQs inside the `'services'` array.
- **Team Members:** Add or edit bios, phone numbers, or designations under `'team'`.
- **Poultry Clients Experience:** Add confirmed poultry integration delivery partners under `'poultry_clients'`.
- **Gallery Items:** Add new photo paths and categories under `'gallery'`.

Changes made to `config/site.php` reflect instantly across all pages without touching Blade template code.

---

## 🌐 Routes & SEO

| Route Name | URL | Description |
|---|---|---|
| `home` | `/` | Brand hero, stats strip, services overview, about, poultry timeline, why choose us, team, gallery, FAQs |
| `services.index` | `/services` | Overview of all 6 Anand Group business divisions |
| `services.show` | `/services/{slug}` | Individual dedicated landing page for each of the 6 services with custom FAQs and Schema |
| `contact.show` | `/contact` | Contact details, phone directory, Google Maps embed, and enquiry form |
| `team.show` | `/team` | Chairman Sanjeev Kumar Suman feature, leadership cards, associations, business journey timeline |
| `gallery.show` | `/gallery` | Filterable photo gallery (by category) + accessible lightbox modal |
| `privacy` | `/privacy-policy` | Comprehensive bilingual Privacy Policy |
| `terms` | `/terms` | Commercial terms and conditions |
| `sitemap` | `/sitemap.xml` | Dynamic XML sitemap for Google Search Console |
| `robots` | `/robots.txt` | Crawler directives allowing indexation and linking sitemap |

### SEO Features Implemented:
- Unique page `<title>` (≤ 60 chars) and meta description (≤ 155 chars)
- Canonical URLs on every page
- Open Graph and Twitter Card tags
- Comprehensive JSON-LD Structured Data:
  - `Organization` & `LocalBusiness` on Homepage
  - `Service` & `FAQPage` on Service detail pages
  - `Person` schema on Team page
- Breadcrumb navigation with schema
- Proper heading hierarchy (`h1` -> `h2` -> `h3`)
- Mobile viewport optimization with sticky Call / WhatsApp CTAs

---

## 📬 Contact Form & Email Notifications

1. **Spam Protection:** Built-in honeypot field (`honeypot`) silently filters bot submissions.
2. **Rate Limiting:** Throttled to 5 requests per minute per IP via Laravel's `throttle:5,1` middleware.
3. **Database Storage:** Stored in the `enquiries` table with name, phone, email, service, message, IP, and status.
4. **Email Notification:** Automatically triggers `App\Mail\EnquiryNotification` to `config('site.email_primary')` with quick action buttons to Call or WhatsApp the lead directly from the email.
5. **Graceful Degradation:** If email sending fails or SMTP credentials are not yet configured in `.env`, the form logs the exception silently and presents the user with a confirmation message so customer inquiries are never lost.

To configure production email sending, update `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="sanjeevksuman7@gmail.com"
MAIL_FROM_NAME="Trade of Anand"
```

---

## 📸 Asset & Photography Requirements

Placeholders are currently rendered in `public/images/`. Refer to [public/images/README.md](public/images/README.md) for detailed image dimensions and specifications:
- **Chairman Portrait:** `public/images/team/sanjeev-kumar-suman.jpg` (4:5)
- **Leadership Team:** `public/images/team/` (Abhinav Anand, Keshav Anand, Anmol Anand)
- **Service Photos:** `public/images/services/` (6 photos)
- **Gallery Images:** `public/images/gallery/` (12 photos)
- **Social Sharing Banner:** `public/images/og/og-image.jpg` (1200×630)

---

## 🚀 Deployment & Production Tips

1. **Optimize Laravel:**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
2. **Build Production Assets:**
   ```bash
   npm run build
   ```
3. **Web Server Configuration (Nginx / Apache):**
   - Ensure document root points to `tradeofanand/public`
   - Enable gzip / brotli compression for static assets
   - Force HTTPS and redirect `www` to non-`www` (or vice versa)

---

© Trade of Anand. All Rights Reserved.
