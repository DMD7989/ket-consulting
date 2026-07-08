<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');

        Route::post('/contact', function (Request $request, $locale) {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'type' => 'required|in:contact,devis',
                'service' => 'nullable|string|max:255',
                'message' => 'required|string|min:10',
            ]);

            DB::table('leads')->insert([
                'name' => $data['name'],
                'email' => $data['email'],
                'type' => $data['type'],
                'service' => $data['service'],
                'message' => $data['message'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return back()->with(
                'success',
                $locale === 'en'
                    ? 'Form submitted successfully!'
                    : 'Formulaire soumis avec succès !'
            );
        })->name('contact.submit');
    });
