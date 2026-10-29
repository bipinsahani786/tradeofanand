<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Brand & Identity
    |--------------------------------------------------------------------------
    */
    'name'           => 'TRADE OF ANAND',
    'group_name'     => 'ANAND GROUP',
    'formerly'       => 'M/S Sanjeev Kumar Suman',
    'tagline_hindi'  => 'भरोसेमंद सेवा • उचित दर • बेहतर मार्गदर्शन',
    'tagline_en'     => 'Trusted Service • Fair Price • Better Guidance',
    'description'    => 'TRADE OF ANAND एक बहु-सेवा व्यवसायिक प्लेटफॉर्म है, जहाँ ग्राहकों को बीमा, परिवहन एवं लॉजिस्टिक्स, दवा तथा अन्य व्यावसायिक सेवाओं से संबंधित सुविधाएँ और मार्गदर्शन एक ही स्थान पर उपलब्ध कराने का प्रयास किया जाता है।',
    'closing_line'   => 'आपकी आवश्यकता, हमारा प्रयास। भरोसा बनाए रखें, ANAND GROUP से जुड़े रहें।',

    /*
    |--------------------------------------------------------------------------
    | Contact Information
    |--------------------------------------------------------------------------
    */
    'address'          => 'Mushrigharari, Samastipur, Bihar',
    'city'             => 'Samastipur',
    'state'            => 'Bihar',
    'pincode'          => '848101', // CONFIRM WITH CLIENT
    'phone_primary'    => '9973974722',      // Sanjeev Kumar Suman
    'phone_abhinav'    => '9708746043',      // Abhinav Anand
    'phone_keshav'     => '7050411767',      // Keshav Anand
    'phone_anmol'      => '6201668813',      // Anmol Anand
    'email_primary'    => 'sanjeevksuman7@gmail.com',
    'email_abhinav'    => 'sscabhinav11@gmail.com',
    'whatsapp_number'  => '919973974722',
    'whatsapp_message' => 'नमस्ते, मुझे Trade of Anand की सेवा के बारे में जानकारी चाहिए.',
    'business_hours'   => 'सोम–शनि: सुबह 9:00 – शाम 7:00 बजे', // CONFIRM WITH CLIENT
    'map_embed_url'    => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.0!2d85.7797!3d25.8654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sMushrigharari%2C+Samastipur%2C+Bihar!5e0!3m2!1sen!2sin!4v1698000000000!5m2!1sen!2sin', // CONFIRM WITH CLIENT – update with actual embed URL

    /*
    |--------------------------------------------------------------------------
    | Social / SEO Placeholders
    |--------------------------------------------------------------------------
    */
    'google_analytics_id'       => env('GOOGLE_ANALYTICS_ID', ''),
    'google_search_console_key' => env('GOOGLE_SEARCH_CONSOLE_KEY', ''),
    'og_image'                  => '/images/og/og-image.jpg', // 1200×630 — client must supply

    /*
    |--------------------------------------------------------------------------
    | Stats Strip (Home page)
    |--------------------------------------------------------------------------
    */
    'stats' => [
        ['value' => '15+',  'label' => 'वर्षों का व्यावसायिक अनुभव', 'sublabel' => 'Established Since 2011'],
        ['value' => '6',    'label' => 'Business Verticals',       'sublabel' => 'Complete Solutions'],
        ['value' => '6+',   'label' => 'Poultry Companies Served', 'sublabel' => 'Integration Logistics'],
        ['value' => '100%', 'label' => 'समस्त बिहार नेटवर्क',     'sublabel' => 'HQ: Samastipur, Bihar'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    */
    'services' => [
        [
            'slug'        => 'transport-logistics',
            'name'        => 'Transport & Logistics',
            'name_hindi'  => 'परिवहन एवं लॉजिस्टिक्स',
            'tagline'     => 'भरोसेमंद परिवहन • समय पर डिलीवरी • बेहतर सेवा',
            'tagline_en'  => 'Reliable Transport · On-time Delivery · Better Service',
            'short_desc'  => 'Poultry Feed से लेकर Commercial Cargo तक – सुरक्षित, समयबद्ध एवं विश्वसनीय परिवहन सेवा।',
            'description' => 'हमारा प्रयास है कि माल को सुरक्षित, समय पर और उचित व्यवस्था के साथ गंतव्य तक पहुँचाया जाए। Samastipur एवं Bihar में विभिन्न व्यवसायों के लिए Transport Solutions उपलब्ध हैं।',
            'seo_title'   => 'Transport & Logistics in Samastipur | Trade of Anand',
            'seo_desc'    => 'Truck transport, poultry feed delivery & commercial logistics in Samastipur, Bihar. भरोसेमंद परिवहन सेवा। Call Trade of Anand.',
            'icon'        => 'truck',
            'image'       => '/images/services/transport-logistics.jpg',
            'color_accent'=> '#1F3A5F',
            'offerings' => [
                'Poultry Feed Transportation',
                'Commercial Vehicle Transport',
                'Pickup / Mini Truck / Truck Services',
                'माल ढुलाई एवं डिलीवरी',
                'Transport Coordination',
                'Delivery & Logistics Support',
                'Business Logistics Support',
                'नियमित एवं आवश्यकता आधारित परिवहन सेवा',
                'व्यवसायों के लिए Transport Solutions',
            ],
            'who_for' => [
                'Poultry Companies needing Feed Delivery',
                'Businesses requiring Cargo Transport',
                'Commercial Vehicle Owners',
                'माल भेजने वाले व्यवसाय',
            ],
            'why_choose' => [
                'Poultry Sector में 10+ वर्षों का अनुभव',
                'समय पर डिलीवरी सुनिश्चित',
                'विभिन्न वाहन विकल्प उपलब्ध',
                'पारदर्शी एवं उचित दर',
            ],
            'process' => [
                ['step' => '1', 'title' => 'संपर्क करें', 'desc' => 'Call या WhatsApp पर अपनी ज़रूरत बताएँ।'],
                ['step' => '2', 'title' => 'व्यवस्था', 'desc' => 'वाहन एवं समय की व्यवस्था की जाएगी।'],
                ['step' => '3', 'title' => 'डिलीवरी', 'desc' => 'माल सुरक्षित गंतव्य तक पहुँचाया जाएगा।'],
            ],
            'faqs' => [
                ['q' => 'Transport booking कैसे करें?', 'a' => '9973974722 पर Call या WhatsApp करें। आपकी ज़रूरत के अनुसार वाहन व्यवस्था की जाएगी।'],
                ['q' => 'क्या Poultry Feed transport के लिए special service है?', 'a' => 'हाँ, हमारे पास Poultry Feed Integration Delivery का वर्षों का अनुभव है। हम प्रमुख Poultry Companies के साथ काम कर चुके हैं।'],
                ['q' => 'सेवा क्षेत्र क्या है?', 'a' => 'Samastipur एवं Bihar के आस-पास के जिलों में सेवा उपलब्ध है।'],
            ],
            'contact_name'  => 'Sanjeev Kumar Suman',
            'contact_phone' => '9973974722',
        ],
        [
            'slug'        => 'insurance-services',
            'name'        => 'Insurance Services',
            'name_hindi'  => 'बीमा सेवाएँ',
            'tagline'     => 'आपकी सुरक्षा, हमारा मार्गदर्शन',
            'tagline_en'  => 'Your Protection, Our Guidance',
            'short_desc'  => 'Life, Health, Motor और Commercial Vehicle Insurance – सभी के लिए सही Plan चुनने में मार्गदर्शन।',
            'description' => 'Anand Insurance Services के अंतर्गत Life, Health, Motor एवं अन्य बीमा योजनाओं के बारे में जानकारी एवं मार्गदर्शन। आपकी आवश्यकता के अनुसार सही Insurance Plan चुनने में सहायता।',
            'seo_title'   => 'Insurance Services in Samastipur | Anand Insurance Services',
            'seo_desc'    => 'Life, health, motor & vehicle insurance guidance in Samastipur. Renewal, new policy, insurance planning. Contact Abhinav Anand 9708746043.',
            'icon'        => 'shield',
            'image'       => '/images/services/insurance-services.jpg',
            'color_accent'=> '#1F3A5F',
            'offerings' => [
                'Life Insurance',
                'Health Insurance',
                'Motor Insurance',
                'Commercial Vehicle Insurance',
                'Private Vehicle Insurance',
                'Non-Motor Insurance',
                'New Vehicle Insurance',
                'Old Vehicle Insurance',
                'Policy Renewal',
                'Insurance Planning & Guidance',
            ],
            'who_for' => [
                'Vehicle Owners (Private & Commercial)',
                'Families seeking Life/Health Insurance',
                'व्यवसायों के लिए Commercial Insurance',
                'Policy Renewal की ज़रूरत वाले',
            ],
            'why_choose' => [
                'आपकी आवश्यकता के अनुसार Plan की जानकारी',
                'Insurance संबंधी आसान मार्गदर्शन',
                'Vehicle Insurance के लिए विशेष सहायता',
                'Renewal एवं Policy संबंधी पूर्ण सहायता',
            ],
            'process' => [
                ['step' => '1', 'title' => 'संपर्क करें', 'desc' => 'अभिनव आनंद से Call या WhatsApp करें।'],
                ['step' => '2', 'title' => 'ज़रूरत बताएँ', 'desc' => 'आपकी बीमा ज़रूरत के बारे में चर्चा।'],
                ['step' => '3', 'title' => 'Plan चुनें', 'desc' => 'सही Plan की जानकारी एवं आगे की प्रक्रिया।'],
            ],
            'faqs' => [
                ['q' => 'क्या Vehicle Insurance करा सकते हैं?', 'a' => 'हाँ, Private एवं Commercial Vehicle दोनों के लिए Insurance Guidance उपलब्ध है।'],
                ['q' => 'Policy Renewal कैसे होती है?', 'a' => 'हम Policy Renewal प्रक्रिया में पूरी सहायता करते हैं। अभिनव आनंद से 9708746043 पर संपर्क करें।'],
            ],
            'contact_name'  => 'Abhinav Anand',
            'contact_phone' => '9708746043',
        ],
        [
            'slug'        => 'anand-medicine',
            'name'        => 'Anand Medicine',
            'name_hindi'  => 'आनंद मेडिसिन',
            'tagline'     => 'गुणवत्तापूर्ण दवाइयों की विश्वसनीय आपूर्ति',
            'tagline_en'  => 'Reliable Supply of Quality Medicines',
            'short_desc'  => 'Mushrigharari, Samastipur में Medicine Wholesaler – Medical Stores एवं Hospitals के लिए Ethical व Generic दवाइयाँ।',
            'description' => 'Anand Medicine, Mushrigharari Samastipur में एक विश्वसनीय Medicine Wholesale व्यवसाय है। Medical Stores, Hospitals एवं Healthcare Businesses के लिए Ethical एवं Generic Medicines की आपूर्ति की जाती है। (Note: कीमत की जानकारी के लिए सीधे संपर्क करें।)',
            'seo_title'   => 'Medicine Wholesaler in Samastipur | Anand Medicine',
            'seo_desc'    => 'Medicine wholesale for medical stores & hospitals in Samastipur. Ethical & generic medicines. Anand Medicine – Contact 9708746043.',
            'icon'        => 'pill',
            'image'       => '/images/services/anand-medicine.jpg',
            'color_accent'=> '#1F3A5F',
            'offerings' => [
                'Medicine Wholesale',
                'Ethical Medicines',
                'Generic Medicines',
                'Pharmaceutical Products',
                'Healthcare Product Supply',
                'Hospital Supply',
                'Medical Store Supply',
                'Albert David Saline एवं अन्य Products की आपूर्ति के लिए संपर्क करें',
            ],
            'who_for' => [
                'Medical Stores',
                'Hospitals',
                'Healthcare Businesses',
                'Pharmaceutical Distributors',
            ],
            'why_choose' => [
                'उचित दर पर गुणवत्तापूर्ण दवाइयाँ',
                'बेहतर उपलब्धता एवं नियमित आपूर्ति',
                'भरोसेमंद Wholesale सेवा',
                'Samastipur क्षेत्र में सुविधाजनक स्थान',
            ],
            'process' => [
                ['step' => '1', 'title' => 'संपर्क करें', 'desc' => '9708746043 पर Call करें।'],
                ['step' => '2', 'title' => 'ज़रूरत बताएँ', 'desc' => 'आवश्यक दवाइयों की सूची बताएँ।'],
                ['step' => '3', 'title' => 'आपूर्ति', 'desc' => 'उचित दर पर नियमित आपूर्ति की व्यवस्था।'],
            ],
            'faqs' => [
                ['q' => 'क्या Individual Retail customers को दवाइयाँ मिलती हैं?', 'a' => 'Anand Medicine मुख्यतः Medical Stores, Hospitals एवं Healthcare Businesses को Wholesale में आपूर्ति करती है।'],
                ['q' => 'Albert David Saline कहाँ से मिलती है?', 'a' => 'Albert David Saline एवं अन्य उत्पादों की उपलब्धता के लिए 9708746043 पर संपर्क करें।'],
            ],
            'contact_name'  => 'Abhinav Anand',
            'contact_phone' => '9708746043',
            'note'          => 'Wholesale supply only for medical stores, hospitals and healthcare businesses. Prices not published online.',
        ],
        [
            'slug'        => 'anand-bhavan-rental',
            'name'        => 'Anand Bhavan Rental',
            'name_hindi'  => 'आनंद भवन – किराया सेवाएँ',
            'tagline'     => 'रहने, कार्यालय एवं व्यवसाय के लिए स्थान',
            'tagline_en'  => 'Space for Living, Office & Business',
            'short_desc'  => 'Residential, Commercial एवं Office Space Rental – Samastipur में उपयुक्त स्थान, उचित दर, पारदर्शी बातचीत।',
            'description' => 'Anand Bhavan के अंतर्गत Residential एवं Commercial Rental Space उपलब्ध है। परिवारों के लिए आवासीय स्थान, व्यवसायों के लिए Office एवं Shop Space। पारदर्शी एवं उचित किराया।',
            'seo_title'   => 'Rental Property in Samastipur | Anand Bhavan Rental Services',
            'seo_desc'    => 'Residential & commercial space for rent in Samastipur. Office, shop, family accommodation. Anand Bhavan – Contact Trade of Anand.',
            'icon'        => 'building',
            'image'       => '/images/services/anand-bhavan-rental.jpg',
            'color_accent'=> '#1F3A5F',
            'offerings' => [
                'Residential Rental',
                'Commercial Space',
                'Office Space',
                'Shop / Business Space',
                'Family Accommodation',
                'Long-Term Rental Options',
            ],
            'who_for' => [
                'Families seeking Residential Space',
                'Businesses needing Office/Shop Space',
                'Long-term Tenants',
                'Samastipur में काम करने वाले लोग',
            ],
            'why_choose' => [
                'उपयुक्त स्थान एवं सुविधाजनक लोकेशन',
                'पारदर्शी बातचीत एवं उचित किराया',
                'Residential एवं Commercial दोनों विकल्प',
                'Long-term Rental के लिए उपयुक्त',
            ],
            'process' => [
                ['step' => '1', 'title' => 'संपर्क करें', 'desc' => 'उपलब्ध Space की जानकारी लें।'],
                ['step' => '2', 'title' => 'Visit करें', 'desc' => 'Space देखें और ज़रूरत के अनुसार चुनें।'],
                ['step' => '3', 'title' => 'Finalize करें', 'desc' => 'पारदर्शी बातचीत के बाद किराया तय करें।'],
            ],
            'faqs' => [
                ['q' => 'उपलब्ध Space के बारे में जानकारी कैसे लें?', 'a' => 'संपर्क नंबर पर Call या WhatsApp करें। वर्तमान में उपलब्ध Room, Flat, Shop एवं Commercial Space की जानकारी दी जाएगी।'],
                ['q' => 'Long-term Rental उपलब्ध है?', 'a' => 'हाँ, Long-term Rental Options उपलब्ध हैं।'],
            ],
            'contact_name'  => 'Sanjeev Kumar Suman',
            'contact_phone' => '9973974722',
        ],
        [
            'slug'        => 'saurav-tyre-agency',
            'name'        => 'Saurav Tyre Agency',
            'name_hindi'  => 'सौरव टायर एजेंसी',
            'tagline'     => 'Authorized Apollo Tyres Dealer – Samastipur',
            'tagline_en'  => 'Apollo Tyres Dealer for All Vehicles',
            'short_desc'  => 'Apollo Tyres की Authorized Agency – Passenger से Commercial Vehicles तक सभी प्रकार के Tyres।',
            'description' => 'Saurav Tyre Agency, Apollo Tyres की एक विश्वसनीय Agency है। 2011 से Samastipur में Private एवं Commercial Vehicles के लिए उचित दर पर Tyres उपलब्ध कराए जा रहे हैं। वाहन के अनुसार सही Tyre का मार्गदर्शन भी दिया जाता है।',
            'seo_title'   => 'Apollo Tyres Dealer in Samastipur | Saurav Tyre Agency',
            'seo_desc'    => 'Authorized Apollo Tyres dealer in Samastipur since 2011. Car, truck, bus & commercial vehicle tyres. Saurav Tyre Agency – Trade of Anand.',
            'icon'        => 'circle',
            'image'       => '/images/services/saurav-tyre-agency.jpg',
            'color_accent'=> '#1F3A5F',
            'offerings' => [
                'Apollo Tyres',
                'Passenger Vehicle Tyres',
                'Commercial Vehicle Tyres',
                'Truck & Bus Tyres',
                'Tyre Replacement',
                'Tyre Selection Guidance',
            ],
            'who_for' => [
                'Private Vehicle Owners',
                'Commercial Vehicle Owners',
                'Truck & Bus Operators',
                'Fleet Owners',
            ],
            'why_choose' => [
                'भरोसेमंद Apollo Tyre Brand',
                'वाहन के अनुसार Tyre की जानकारी',
                'उचित विकल्प एवं मार्गदर्शन',
                '2011 से स्थापित – 15+ वर्षों का अनुभव',
            ],
            'process' => [
                ['step' => '1', 'title' => 'संपर्क करें', 'desc' => 'Tyre की उपलब्धता एवं कीमत पूछें।'],
                ['step' => '2', 'title' => 'Tyre चुनें', 'desc' => 'वाहन के अनुसार सही Tyre का चुनाव।'],
                ['step' => '3', 'title' => 'Delivery/Pickup', 'desc' => 'Tyre प्राप्त करें।'],
            ],
            'faqs' => [
                ['q' => 'Apollo Tyres कितने समय से उपलब्ध हैं?', 'a' => 'Saurav Tyre Agency 2011 से Apollo Tyres की Authorized Agency है।'],
                ['q' => 'Tyre की कीमत कैसे जानें?', 'a' => 'Tyre की उपलब्धता एवं कीमत के लिए संपर्क करें। कीमत वाहन एवं Tyre के प्रकार पर निर्भर करती है।'],
            ],
            'contact_name'  => 'Sanjeev Kumar Suman',
            'contact_phone' => '9973974722',
        ],
        [
            'slug'        => 'vehicle-pollution-testing-centre',
            'name'        => 'Vehicle Pollution Testing Centre',
            'name_hindi'  => 'वाहन प्रदूषण परीक्षण केंद्र',
            'tagline'     => 'वाहन प्रदूषण प्रमाणपत्र की सुविधा',
            'tagline_en'  => 'PUC Certificate – Fast & Reliable',
            'short_desc'  => 'Two-Wheeler, Car एवं Commercial Vehicle के लिए PUC Pollution Certificate – जल्दी एवं आसानी से।',
            'description' => 'हमारे Vehicle Pollution Testing Centre में Two-Wheeler, Car एवं Commercial Vehicle सभी के लिए Pollution Under Control (PUC) Certificate बनवाई जा सकती है। 2018 से Samastipur में विश्वसनीय सेवा।',
            'seo_title'   => 'PUC Certificate in Samastipur | Vehicle Pollution Testing Centre',
            'seo_desc'    => 'Get PUC pollution certificate for two-wheeler, car & commercial vehicle in Samastipur. Fast & reliable. Trade of Anand – 9973974722.',
            'icon'        => 'zap',
            'image'       => '/images/services/vehicle-pollution-testing.jpg',
            'color_accent'=> '#1F3A5F',
            'offerings' => [
                'Vehicle Pollution Testing',
                'PUC Certificate',
                'Two-Wheeler Pollution Test',
                'Car Pollution Test',
                'Commercial Vehicle Testing',
                'Pollution Certificate Renewal',
            ],
            'who_for' => [
                'Two-Wheeler Owners',
                'Car Owners',
                'Commercial Vehicle Operators',
                'PUC Certificate Renewal की ज़रूरत वाले',
            ],
            'why_choose' => [
                'त्वरित एवं आसान प्रक्रिया',
                '2018 से विश्वसनीय सेवा',
                'सभी प्रकार के वाहनों के लिए',
                'उचित शुल्क',
            ],
            'process' => [
                ['step' => '1', 'title' => 'वाहन लाएँ', 'desc' => 'अपना वाहन Centre पर लाएँ।'],
                ['step' => '2', 'title' => 'Test कराएँ', 'desc' => 'Pollution Test किया जाएगा।'],
                ['step' => '3', 'title' => 'Certificate पाएँ', 'desc' => 'PUC Certificate तुरंत प्राप्त करें।'],
            ],
            'faqs' => [
                ['q' => 'PUC Certificate क्यों ज़रूरी है?', 'a' => 'PUC Certificate कानूनी रूप से अनिवार्य है। बिना Valid PUC के वाहन चलाने पर जुर्माना हो सकता है।'],
                ['q' => 'कितने समय में Certificate मिलती है?', 'a' => 'Test के तुरंत बाद Certificate मिलती है।'],
                ['q' => 'Renewal कब करानी चाहिए?', 'a' => 'PUC Certificate की समय-सीमा समाप्त होने से पहले Renewal करा लें।'],
            ],
            'contact_name'  => 'Sanjeev Kumar Suman',
            'contact_phone' => '9973974722',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Team Members
    |--------------------------------------------------------------------------
    */
    'team' => [
        [
            'name'        => 'Sanjeev Kumar Suman',
            'designation' => 'Chairman, Trade of Anand',
            'bio'         => 'M/S Sanjeev Kumar Suman के नाम से शुरू किए गए व्यवसाय को आज TRADE OF ANAND के रूप में आगे बढ़ाया जा रहा है। Samastipur जिले में परिवहन एवं व्यवसाय के क्षेत्र में दशकों का अनुभव। District Transport Association, Samastipur के General Secretary एवं Bihar Truck Owners Association के Spokesperson।',
            'phone'       => '9973974722',
            'email'       => 'sanjeevksuman7@gmail.com',
            'image'       => '/images/team/sanjeev-kumar-suman.jpg',
            'is_chairman' => true,
            'associations' => [
                'General Secretary – District Transport Association, Samastipur',
                'Spokesperson – Bihar Truck Owners Association, Bihar',
            ],
        ],
        [
            'name'        => 'Abhinav Anand',
            'designation' => 'Operational Head',
            'bio'         => 'Operations एवं Insurance Services के प्रमुख। Anand Insurance Services एवं Anand Medicine का संचालन।',
            'phone'       => '9708746043',
            'email'       => 'sscabhinav11@gmail.com',
            'image'       => '/images/team/abhinav-anand.jpg',
            'is_chairman' => false,
            'associations' => [],
        ],
        [
            'name'        => 'Keshav Anand',
            'designation' => 'Managing Director',
            'bio'         => 'व्यवसाय के प्रबंधन एवं विस्तार में महत्वपूर्ण भूमिका।',
            'phone'       => '7050411767',
            'email'       => '',
            'image'       => '/images/team/keshav-anand.jpg',
            'is_chairman' => false,
            'associations' => [],
        ],
        [
            'name'        => 'Anmol Anand',
            'designation' => 'Director',
            'bio'         => 'व्यवसाय के विभिन्न क्षेत्रों में सक्रिय भागीदारी।',
            'phone'       => '6201668813',
            'email'       => '',
            'image'       => '/images/team/anmol-anand.jpg',
            'is_chairman' => false,
            'associations' => [],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Business Journey Timeline
    |--------------------------------------------------------------------------
    */
    'journey' => [
        ['year' => '2011', 'name' => 'Saurav Tyre Agency', 'desc' => 'Apollo Tyres की Authorized Agency की स्थापना।'],
        ['year' => '2015', 'name' => 'Anand Bhavan Rental', 'desc' => 'Residential एवं Commercial Rental Services की शुरुआत।'],
        ['year' => '2016', 'name' => 'Poultry Transport – Hanom Feeds', 'desc' => 'Poultry Sector में Integration Feed Delivery की शुरुआत।'],
        ['year' => '2018', 'name' => 'Pollution Testing Centre', 'desc' => 'Vehicle Pollution Testing Centre की स्थापना।'],
        ['year' => '2023', 'name' => 'Anand Medicine', 'desc' => 'Medicine Wholesale व्यवसाय की स्थापना।'],
        ['year' => '2024', 'name' => 'Anand Insurance Services', 'desc' => 'Insurance Services की शुरुआत।'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Poultry Sector Timeline (Home & Team pages)
    |--------------------------------------------------------------------------
    */
    'poultry_clients' => [
        ['year' => '2016 से', 'company' => 'Hanom Feeds Pvt Ltd',                    'confirmed' => true],
        ['year' => '2018 से', 'company' => 'ABIS Export India Pvt Ltd',               'confirmed' => true],  // CONFIRM WITH CLIENT – "2B" detail unclear
        ['year' => '2021 से', 'company' => 'Aaroki Breeding Farms & Foods Pvt Ltd',   'confirmed' => true],  // CONFIRM spelling with client
        ['year' => '2024–2026', 'company' => 'Happy Poultry and Feeds',               'confirmed' => true],
        ['year' => '2025 से', 'company' => 'Gigabyte Poultry Farm Pvt Ltd',           'confirmed' => true],
        ['year' => '2026 से', 'company' => 'Om Shakti Integrators and Proteins LLP', 'confirmed' => true],  // CONFIRM dates (Aug/Sept)
        ['year' => 'Aug 2026 से', 'company' => 'J and J Agrovet Pvt Ltd',            'confirmed' => true],
        // TODO: Global Poultry Group (2018–2020) and Nexus Group (years unclear) – HIDE until confirmed with client
        // ['year' => '2018–2020', 'company' => 'Global Poultry Group', 'confirmed' => false],
        // ['year' => 'TODO', 'company' => 'Nexus Group', 'confirmed' => false],
    ],

    /*
    |--------------------------------------------------------------------------
    | Gallery Images (load from config for easy client editing)
    |--------------------------------------------------------------------------
    | PLACEHOLDERS – client must supply actual photos
    | Add real photo filenames here when supplied
    */
    'gallery' => [
        ['src' => '/images/gallery/transport-01.jpg', 'category' => 'transport',         'alt' => 'Truck for Poultry Feed Transport – Trade of Anand',       'caption' => 'Poultry Feed Transport'],
        ['src' => '/images/gallery/transport-02.jpg', 'category' => 'transport',         'alt' => 'Commercial Transport Vehicle – Samastipur',                'caption' => 'Commercial Transport'],
        ['src' => '/images/gallery/insurance-01.jpg', 'category' => 'insurance',         'alt' => 'Anand Insurance Services – Samastipur',                    'caption' => 'Insurance Services'],
        ['src' => '/images/gallery/medicine-01.jpg',  'category' => 'medicine',          'alt' => 'Anand Medicine Wholesale – Mushrigharari Samastipur',      'caption' => 'Anand Medicine'],
        ['src' => '/images/gallery/medicine-02.jpg',  'category' => 'medicine',          'alt' => 'Medicine Supply – Anand Medicine',                         'caption' => 'Medicine Supply'],
        ['src' => '/images/gallery/bhavan-01.jpg',    'category' => 'bhavan',            'alt' => 'Anand Bhavan – Rental Property Samastipur',               'caption' => 'Anand Bhavan'],
        ['src' => '/images/gallery/tyre-01.jpg',      'category' => 'tyre',              'alt' => 'Saurav Tyre Agency – Apollo Tyres Samastipur',             'caption' => 'Apollo Tyres'],
        ['src' => '/images/gallery/tyre-02.jpg',      'category' => 'tyre',              'alt' => 'Apollo Tyre Selection – Saurav Tyre Agency',               'caption' => 'Tyre Selection'],
        ['src' => '/images/gallery/pollution-01.jpg', 'category' => 'pollution-testing', 'alt' => 'Vehicle Pollution Testing Centre – Samastipur',            'caption' => 'Pollution Testing'],
        ['src' => '/images/gallery/team-01.jpg',      'category' => 'team',              'alt' => 'Trade of Anand Leadership Team',                           'caption' => 'Our Team'],
        ['src' => '/images/gallery/team-02.jpg',      'category' => 'team',              'alt' => 'Sanjeev Kumar Suman – Chairman, Trade of Anand',           'caption' => 'Chairman'],
        ['src' => '/images/gallery/office-01.jpg',    'category' => 'team',              'alt' => 'Trade of Anand Office – Mushrigharari Samastipur',         'caption' => 'Our Office'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Home FAQ
    |--------------------------------------------------------------------------
    */
    'faqs' => [
        [
            'q' => 'Trade of Anand कौन-कौन सी सेवाएँ प्रदान करती है?',
            'a' => 'Trade of Anand के अंतर्गत 6 सेवाएँ उपलब्ध हैं: Transport & Logistics, Insurance Services, Anand Medicine (Wholesale), Anand Bhavan Rental, Saurav Tyre Agency (Apollo Tyres) और Vehicle Pollution Testing Centre।',
        ],
        [
            'q' => 'Insurance के लिए कैसे संपर्क करें?',
            'a' => 'Anand Insurance Services के लिए अभिनव आनंद से 9708746043 पर Call या WhatsApp करें। Life, Health, Motor एवं Vehicle Insurance की जानकारी उपलब्ध है।',
        ],
        [
            'q' => 'क्या Medicine Wholesale की सुविधा है?',
            'a' => 'हाँ, Anand Medicine Medical Stores एवं Hospitals के लिए Ethical एवं Generic Medicines की Wholesale आपूर्ति करती है। 9708746043 पर संपर्क करें।',
        ],
        [
            'q' => 'Transport Booking कैसे करें?',
            'a' => '9973974722 पर Call या WhatsApp करें। Pickup, Mini Truck एवं Truck सभी के लिए व्यवस्था की जा सकती है।',
        ],
        [
            'q' => 'Apollo Tyres की उपलब्धता कैसे जानें?',
            'a' => 'Saurav Tyre Agency से Tyre की उपलब्धता एवं कीमत के लिए 9973974722 पर संपर्क करें।',
        ],
        [
            'q' => 'PUC Certificate बनवाने की प्रक्रिया क्या है?',
            'a' => 'वाहन लाएँ → Pollution Test → Certificate प्राप्त करें। पूरी प्रक्रिया त्वरित एवं आसान है।',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Why Choose Us Points (Home)
    |--------------------------------------------------------------------------
    */
    'why_choose' => [
        ['title' => 'एक ही जगह अनेक सेवाएँ', 'desc' => 'Transport, Insurance, Medicine, Rental, Tyre एवं Pollution Testing – सभी एक ही व्यवसायिक समूह के अंतर्गत।'],
        ['title' => 'उचित एवं प्रतिस्पर्धी दर', 'desc' => 'बिना किसी छुपे शुल्क के, ग्राहक की ज़रूरत के अनुसार उचित मूल्य।'],
        ['title' => 'व्यक्तिगत मार्गदर्शन', 'desc' => 'हर सेवा में व्यक्तिगत ध्यान एवं सही जानकारी देना हमारी प्राथमिकता है।'],
        ['title' => 'स्थानीय क्षेत्र में सेवा', 'desc' => 'Samastipur एवं Bihar के स्थानीय क्षेत्र में गहरी पहचान एवं व्यापक अनुभव।'],
        ['title' => 'भरोसेमंद एवं आसान संपर्क', 'desc' => 'Call, WhatsApp या Direct Visit – जिस तरह सुविधा हो, उस तरह संपर्क करें।'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Nav items (order matters)
    |--------------------------------------------------------------------------
    */
    'nav' => [
        ['label' => 'Home',       'route' => 'home'],
        ['label' => 'Services',   'route' => 'services.index'],
        ['label' => 'Contact Us', 'route' => 'contact.show'],
        ['label' => 'Our Team',   'route' => 'team.show'],
        ['label' => 'Gallery',    'route' => 'gallery.show'],
    ],

];
