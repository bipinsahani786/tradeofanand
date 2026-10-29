@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<div class="bg-[var(--color-ink)] border-b-4 border-[var(--color-accent)] py-16">
    <div class="max-w-6xl mx-auto px-6">
        <nav class="flex items-center gap-2 text-xs text-white/60 mb-4" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
            <span>/</span>
            <span class="text-[var(--color-accent)] font-medium">Privacy Policy</span>
        </nav>
        <span class="inline-block text-[var(--color-accent)] text-xs font-semibold uppercase tracking-wider mb-2">Legal & Privacy</span>
        <h1 class="text-3xl md:text-5xl font-bold text-white tracking-tight">गोपनीयता नीति / Privacy Policy</h1>
        <p class="text-white/80 text-base md:text-lg mt-3 max-w-3xl leading-relaxed">
            Trade of Anand (ANAND GROUP) आपकी व्यक्तिगत जानकारी की सुरक्षा एवं गोपनीयता के प्रति पूर्णतः प्रतिबद्ध है।
        </p>
    </div>
</div>

{{-- Main Content --}}
<div class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-6 text-[var(--color-text)]">
        <div class="border border-[var(--color-line)] p-8 md:p-12 space-y-10">

            {{-- Effective Date --}}
            <div class="pb-6 border-b border-[var(--color-line)]">
                <p class="text-xs text-[var(--color-muted)]">
                    अंतिम अद्यतन (Last Updated): <strong>{{ date('d F, Y') }}</strong>
                </p>
            </div>

            {{-- 1. Intro --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">1. परिचय / Introduction</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    यह गोपनीयता नीति <strong>TRADE OF ANAND</strong> (पूर्व में <strong>M/S Sanjeev Kumar Suman</strong>), निवासी मुसरीघरारी, समस्तीपुर, बिहार द्वारा संचालित वेबसाइट और प्रदान की जाने वाली विभिन्न सेवाओं (Transport, Insurance, Anand Medicine, Anand Bhavan, Apollo Tyre Agency, Vehicle Pollution Testing Centre) पर लागू होती है।
                </p>
                <p class="text-sm md:text-base leading-relaxed">
                    जब आप हमारी वेबसाइट पर आते हैं या संपर्क फ़ॉर्म, कॉल या WhatsApp के माध्यम से अपनी जानकारी साझा करते हैं, तो हम आपकी जानकारी को पूर्ण सुरक्षा और ज़िम्मेदारी के साथ संभालते हैं।
                </p>
            </section>

            {{-- 2. Information We Collect --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">2. हम कौन सी जानकारी एकत्र करते हैं / Information We Collect</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    हम केवल वही जानकारी एकत्र करते हैं जो आपकी पूछताछ और सेवा प्रदान करने के लिए आवश्यक हो:
                </p>
                <ul class="list-disc list-inside space-y-2 text-sm md:text-base pl-2">
                    <li><strong>संपर्क जानकारी:</strong> आपका नाम, मोबाइल फ़ोन नंबर, ईमेल पता (यदि प्रदान किया गया हो)।</li>
                    <li><strong>पूछताछ विवरण:</strong> आप जिस सेवा में रुचि रखते हैं (जैसे ट्रांसपोर्ट, इंश्योरेंस, दवा, टायर, रेंटल आदि) तथा आपके द्वारा भेजा गया संदेश।</li>
                    <li><strong>तकनीकी डेटा:</strong> सुरक्षा और स्पैम रोकथाम के उद्देश्य से आपके डिवाइस का IP एड्रेस और ब्राउज़र प्रकार (लॉग फ़ाइलों के माध्यम से)।</li>
                </ul>
            </section>

            {{-- 3. How We Use Information --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">3. जानकारी का उपयोग / How We Use Your Information</h2>
                <ul class="list-disc list-inside space-y-2 text-sm md:text-base pl-2">
                    <li>आपकी व्यावसायिक पूछताछ का उत्तर देने और आवश्यक मार्गदर्शन प्रदान करने के लिए।</li>
                    <li>परिवहन सेवा, बीमा पॉलिसी सहायता, दवा आपूर्ति या टायर की उपलब्धता के संबंध में समन्वय स्थापित करने के लिए।</li>
                    <li>ग्राहक सेवा में सुधार और धोखाधड़ी या स्पैम गतिविधियों की रोकथाम के लिए।</li>
                    <li>किसी भी प्रकार के अनचाहे मार्केटिंग या तृतीय-पक्ष (third-party) को डेटा बेचने का कार्य हम <strong>कदापि नहीं</strong> करते।</li>
                </ul>
            </section>

            {{-- 4. Data Sharing & Disclosure --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">4. डेटा साझाकरण / Information Sharing</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    Trade of Anand आपकी व्यक्तिगत जानकारी किसी भी बाहरी कंपनी या विज्ञापनदाता को नहीं बेचता और न ही किराए पर देता है। आपकी जानकारी केवल हमारी अधिकृत टीम तक सीमित रहती है। कानूनी प्रक्रिया या सरकारी आदेश के तहत यदि कोई जानकारी मांगी जाती है, तभी कानून के अनुरूप सहयोग किया जाता है।
                </p>
            </section>

            {{-- 5. Data Security --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">5. डेटा सुरक्षा / Data Security</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    हम आपके व्यक्तिगत डेटा की अनधिकृत पहुँच, परिवर्तन या प्रकटीकरण से सुरक्षा के लिए उचित तकनीकी और संगठनात्मक सुरक्षा उपाय लागू करते हैं। हमारी वेबसाइट पर स्पैम सुरक्षा (हनीपॉट व दर सीमा) सक्रिय है।
                </p>
            </section>

            {{-- 6. Cookies --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">6. कुकीज़ नीति / Cookies Policy</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    हमारी वेबसाइट केवल आवश्यक तकनीकी कुकीज़ (सत्र प्रबंधन, सुरक्षा CSRF टोकन) का उपयोग करती है ताकि वेबसाइट ठीक से काम कर सके। यदि Google Analytics सक्रिय है, तो वह केवल अज्ञात ट्रैफ़िक विश्लेषण के लिए कुकी का उपयोग करता है।
                </p>
            </section>

            {{-- 7. Contact for Privacy Inquiries --}}
            <section class="pt-6 border-t border-[var(--color-line)] space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">7. संपर्क एवं प्रश्न / Contact Us</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    यदि इस गोपनीयता नीति या आपके डेटा के संबंध में आपका कोई प्रश्न या चिंता है, तो कृपया हमसे सीधे संपर्क करें:
                </p>
                <div class="bg-[var(--color-bg-soft)] p-4 border border-[var(--color-line)] text-sm space-y-1">
                    <p><strong>TRADE OF ANAND (ANAND GROUP)</strong></p>
                    <p>पता: {{ config('site.address') }}</p>
                    <p>फ़ोन: <a href="tel:+91{{ config('site.phone_primary') }}" class="text-[var(--color-primary)] font-bold">+91 {{ config('site.phone_primary') }}</a> / <a href="tel:+91{{ config('site.phone_abhinav') }}" class="text-[var(--color-primary)] font-bold">+91 {{ config('site.phone_abhinav') }}</a></p>
                    <p>ईमेल: <a href="mailto:{{ config('site.email_primary') }}" class="text-[var(--color-primary)]">{{ config('site.email_primary') }}</a></p>
                </div>
            </section>

        </div>
    </div>
</div>

@endsection
