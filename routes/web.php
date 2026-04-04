<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/portfolio', [PageController::class, 'portfolio']);
Route::get('/about', [PageController::class, 'about']);
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');