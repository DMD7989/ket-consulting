<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::redirect('/', '/fr');

Route::prefix('{locale}')
    ->where(['locale' => 'fr|en'])
    ->group(function () {

        Route::get('/', function () {
            return view('welcome');
        })->name('home');

        Route::get('/a-propos', function () {
            return view('about');
        })->name('about');

        Route::get('/services', function () {
            return view('services');
        })->name('services');

        Route::get('/partnership', function () {
            return view('partnership');
        })->name('partnership');

        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');

        Route::post('/contact', [ContactController::class, 'submit'])
            ->name('contact.submit');
    });
