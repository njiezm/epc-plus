<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\LogoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [PagesController::class, 'submitContact'])->name('contact.submit');

// Pages légales
Route::get('/mentions-legales', function () {
    return view('pages.legal');
})->name('legal');

Route::get('/politique-confidentialite', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/cgv', function () {
    return view('pages.cgv');
})->name('cgv');

// Page de remerciement après envoi du formulaire
Route::get('/merci', function () {
    return view('pages.thank-you');
})->name('thank-you');


Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Page utilitaire pour le logo (protégée par mot de passe simple)
Route::get('/logo', [LogoController::class, 'index'])->name('logo.downloader');
Route::post('/logo-downloader/generate', [LogoController::class, 'generate'])->name('logo.generate');

Route::post('/logo-downloader/logout', function () {
    session()->forget('logo_access');
    return redirect()->route('logo.downloader');
})->name('logo.logout');

Route::post('/logo-downloader/login', [LogoController::class, 'login'])->name('logo.login');