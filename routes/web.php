<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;

Route::get('/lang/{locale}', [LanguageController::class, 'swap'])->name('lang.swap');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/', function () {
    App::setLocale(session('app_locale', config('app.locale')));
    return view('home');
});