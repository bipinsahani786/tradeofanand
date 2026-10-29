@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<div class="bg-[var(--color-ink)] border-b-4 border-[var(--color-accent)] py-16">
    <div class="max-w-6xl mx-auto px-6">
        <nav class="flex items-center gap-2 text-xs text-white/60 mb-4" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
            <span>/</span>
            <span class="text-[var(--color-accent)] font-medium">Terms & Conditions</span>
        </nav>
        <span class="inline-block text-[var(--color-accent)] text-xs font-semibold uppercase tracking-wider mb-2">Legal Agreements</span>
        <h1 class="text-3xl md:text-5xl font-bold text-white tracking-tight">नियम एवं शर्तें / Terms & Conditions</h1>
        <p class="text-white/80 text-base md:text-lg mt-3 max-w-3xl leading-relaxed">
            Trade of Anand की वेबसाइट और व्यावसायिक सेवाओं का उपयोग करने से पूर्व कृपया इन नियमों को ध्यानपूर्वक पढ़ें।
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

            {{-- 1. Acceptance --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">1. स्वीकृति / Acceptance of Terms</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    इस वेबसाइट का उपयोग करके या हमारी किसी भी सेवा (Transport, Insurance Guidance, Medicine Supply, Rental, Tyres, Pollution Testing) के लिए पूछताछ करके आप इन नियमों एवं शर्तों से बाध्य होने की सहमति देते हैं। यदि आप इन शर्तों से असहमत हैं, तो कृपया सेवाओं का उपयोग न करें।
                </p>
            </section>

            {{-- 2. Nature of Services --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">2. सेवाओं का स्वरूप / Nature of Services</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    TRADE OF ANAND एक बहु-सेवा व्यावसायिक प्रतिष्ठान है जिसके अंतर्गत विभिन्न सेवा प्रभाग संचालित हैं:
                </p>
                <div class="space-y-3 pl-2 text-sm md:text-base">
                    <p>
                        <strong>(क) Transport & Logistics:</strong> माल ढुलाई एवं पोल्ट्री फीड ट्रांसपोर्ट सेवा स्थानीय व राज्य स्तर के नियमों और सहमति के अनुसार संचालित होती है। माल की बुकिंग, लोडिंग एवं डिलीवरी के समय जारी बिल्टी/दस्तावेज़ की शर्तें मान्य होंगी।
                    </p>
                    <p>
                        <strong>(ख) Anand Insurance Services:</strong> हम ग्राहकों को मोटर, कमर्शियल वाहन, लाइफ एवं हेल्थ इंश्योरेंस के चयन एवं नवीनीकरण में स्वतंत्र मार्गदर्शन एवं सुविधा प्रदान करते हैं। अंतिम बीमा पॉलिसी जारी करना एवं दावों का निपटान संबंधित अधिकृत बीमा कंपनी के नियमों के अधीन है।
                    </p>
                    <p>
                        <strong>(ग) Anand Medicine:</strong> यह केवल अधिकृत मेडिकल स्टोर्स, अस्पतालों और स्वास्थ्य सेवा संस्थाओं के लिए थोक (wholesale) आपूर्ति सेवा है। खुदरा बिक्री या गैर-लाइसेंसी व्यक्तियों को दवा आपूर्ति नहीं की जाती।
                    </p>
                    <p>
                        <strong>(घ) Anand Bhavan (Rental):</strong> आवासीय एवं व्यावसायिक परिसरों का किराया अनुबंध आपसी कानूनी एग्रीमेंट (Rent Agreement) के तहत निष्पादित किया जाता है।
                    </p>
                    <p>
                        <strong>(ङ) Saurav Tyre Agency:</strong> Apollo Tyres के अधिकृत डीलर के रूप में वास्तविक टायर आपूर्ति की जाती है। टायर की वारंटी नीति सीधे निर्माता कंपनी (Apollo Tyres) के दिशा-निर्देशों के अनुरूप लागू होती है।
                    </p>
                    <p>
                        <strong>(च) Vehicle Pollution Testing Centre:</strong> सरकारी परिवहन विभाग के अधिकृत मानकों एवं सर्वर कनेक्टिविटी के आधार पर PUC प्रमाण पत्र जारी किया जाता है।
                    </p>
                </div>
            </section>

            {{-- 3. Quotations & Pricing --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">3. दर एवं कोटेशन / Rates & Quotations</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    वेबसाइट पर प्रदर्शित सामग्री सामान्य सूचना के लिए है। किसी भी सेवा (ट्रांसपोर्ट भाड़ा, रेंटल, टायर मूल्य, दवा थोक दर) की अंतिम दर वस्तुस्थिति, मात्रा, दूरी और बाजार परिस्थितियों के आधार पर व्यक्तिगत बातचीत के पश्चात तय की जाती है।
                </p>
            </section>

            {{-- 4. User Responsibilities --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">4. उपयोगकर्ता की ज़िम्मेदारी / User Obligations</h2>
                <ul class="list-disc list-inside space-y-2 text-sm md:text-base pl-2">
                    <li>संपर्क फ़ॉर्म में केवल सही, प्रामाणिक और वर्तमान संपर्क जानकारी (नाम, मोबाइल नंबर) ही भरें।</li>
                    <li>वेबसाइट पर किसी प्रकार का स्पैम, दुर्भावनापूर्ण कोड या अवांछित सामग्री प्रसारित न करें।</li>
                    <li>व्यावसायिक लेन-देन के समय आवश्यक वैधानिक दस्तावेज़ (जैसे GST नंबर, ड्रग लाइसेंस, वाहन RC आदि) उपलब्ध कराना अनिवार्य है।</li>
                </ul>
            </section>

            {{-- 5. Limitation of Liability --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">5. देयता की सीमा / Limitation of Liability</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    प्राकृतिक आपदा, अप्रत्याशित सड़क बाधा, सर्वर डाउनटाइम, या सरकारी नीतिगत परिवर्तनों के कारण होने वाले किसी भी अप्रत्यक्ष विलंब या नुकसान के लिए Trade of Anand उत्तरदायी नहीं होगा। हमारा सतत प्रयास उच्चतम विश्वसनीयता बनाए रखने का है।
                </p>
            </section>

            {{-- 6. Jurisdiction --}}
            <section class="space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">6. क्षेत्राधिकार / Governing Law & Jurisdiction</h2>
                <p class="text-sm md:text-base leading-relaxed">
                    इन नियमों एवं शर्तों से उत्पन्न होने वाले किसी भी विवाद का निपटारा समस्तीपुर (बिहार) न्यायालय के क्षेत्राधिकार के अंतर्गत होगा।
                </p>
            </section>

            {{-- 7. Contact Details --}}
            <section class="pt-6 border-t border-[var(--color-line)] space-y-3">
                <h2 class="text-2xl font-bold text-[var(--color-ink)]">7. संपर्क सूत्र / Contact Information</h2>
                <div class="bg-[var(--color-bg-soft)] p-4 border border-[var(--color-line)] text-sm space-y-1">
                    <p><strong>TRADE OF ANAND</strong> (Formerly M/S Sanjeev Kumar Suman)</p>
                    <p>मुसरीघरारी, समस्तीपुर, बिहार - 848101</p>
                    <p>फ़ोन: <a href="tel:+91{{ config('site.phone_primary') }}" class="text-[var(--color-primary)] font-bold">+91 {{ config('site.phone_primary') }}</a></p>
                    <p>ईमेल: <a href="mailto:{{ config('site.email_primary') }}" class="text-[var(--color-primary)]">{{ config('site.email_primary') }}</a></p>
                </div>
            </section>

        </div>
    </div>
</div>

@endsection
