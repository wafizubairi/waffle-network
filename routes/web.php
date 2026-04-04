<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/portfolio', [PageController::class, 'portfolio']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/lang/{locale}', [LanguageController::class, 'swap'])->name('lang.swap');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');