<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [PageController::class, 'home'])->name('home');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])
    ->name('contact.submit')
    ->middleware('throttle:5,1');

// Static pages
Route::get('/team', [PageController::class, 'team'])->name('team.show');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery.show');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

// SEO
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [SitemapController::class, 'robots'])->name('robots');
