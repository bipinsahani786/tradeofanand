<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $services = config('site.services');

        return response()
            ->view('sitemap', ['services' => $services])
            ->header('Content-Type', 'application/xml');
    }

    public function robots(): Response
    {
        $sitemapUrl = route('sitemap');

        return response(
            "User-agent: *\nAllow: /\nDisallow: /contact/thank-you\nDisallow: /admin\nSitemap: {$sitemapUrl}\n",
            200,
            ['Content-Type' => 'text/plain']
        );
    }
}
