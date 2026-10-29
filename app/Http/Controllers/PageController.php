<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'services'      => config('site.services'),
            'stats'         => config('site.stats'),
            'team'          => config('site.team'),
            'gallery'       => array_slice(config('site.gallery'), 0, 6),
            'faqs'          => config('site.faqs'),
            'why_choose'    => config('site.why_choose'),
            'poultry'       => config('site.poultry_clients'),
            'seo' => [
                'title'       => 'TRADE OF ANAND – Transport, Insurance, Medicine, Tyres & More | Samastipur, Bihar',
                'description' => 'TRADE OF ANAND – Samastipur, Bihar में Transport & Logistics, Insurance, Medicine Wholesale, Rental, Apollo Tyres Dealer और PUC Certificate। भरोसेमंद सेवा, उचित दर।',
                'canonical'   => route('home'),
            ],
        ]);
    }

    public function team(): View
    {
        return view('pages.team', [
            'team'    => config('site.team'),
            'journey' => config('site.journey'),
            'poultry' => config('site.poultry_clients'),
            'seo' => [
                'title'       => 'Our Team – Trade of Anand | Samastipur, Bihar',
                'description' => 'Trade of Anand की Leadership Team से मिलें। Sanjeev Kumar Suman (Chairman), Abhinav Anand, Keshav Anand, Anmol Anand। Samastipur, Bihar।',
                'canonical'   => route('team.show'),
            ],
        ]);
    }

    public function gallery(): View
    {
        return view('pages.gallery', [
            'gallery' => config('site.gallery'),
            'seo' => [
                'title'       => 'Gallery – Trade of Anand | Transport, Insurance, Tyres, Medicine',
                'description' => 'Trade of Anand की Gallery – Transport, Insurance Services, Anand Medicine, Saurav Tyre Agency, Pollution Testing Centre की झलकियाँ। Samastipur, Bihar।',
                'canonical'   => route('gallery.show'),
            ],
        ]);
    }

    public function privacy(): View
    {
        return view('pages.privacy', [
            'seo' => [
                'title'       => 'Privacy Policy – Trade of Anand',
                'description' => 'Trade of Anand की Privacy Policy पढ़ें। हम आपकी जानकारी को सुरक्षित रखते हैं।',
                'canonical'   => route('privacy'),
            ],
        ]);
    }

    public function terms(): View
    {
        return view('pages.terms', [
            'seo' => [
                'title'       => 'Terms & Conditions – Trade of Anand',
                'description' => 'Trade of Anand की Terms & Conditions पढ़ें।',
                'canonical'   => route('terms'),
            ],
        ]);
    }
}
