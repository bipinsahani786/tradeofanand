<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('pages.services.index', [
            'services' => config('site.services'),
            'seo' => [
                'title'       => 'Our Services – Trade of Anand | Samastipur, Bihar',
                'description' => 'ANAND GROUP की 6 सेवाएँ: Transport, Insurance, Medicine Wholesale, Rental, Apollo Tyres, PUC Certificate। Samastipur, Bihar में उपलब्ध। संपर्क करें।',
                'canonical'   => route('services.index'),
            ],
        ]);
    }

    public function show(string $slug): View|RedirectResponse
    {
        $services = config('site.services');
        $service = collect($services)->firstWhere('slug', $slug);

        if (! $service) {
            abort(404);
        }

        $otherServices = collect($services)->filter(fn ($s) => $s['slug'] !== $slug)->values()->all();

        return view('pages.services.show', [
            'service'       => $service,
            'otherServices' => $otherServices,
            'seo' => [
                'title'       => $service['seo_title'],
                'description' => $service['seo_desc'],
                'canonical'   => route('services.show', $slug),
            ],
        ]);
    }
}
