<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;

Route::redirect('/', '/fr');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::redirect('/', '/admin/projects');
        Route::resource('projects', AdminProjectController::class)->except(['show']);
    });
});

Route::prefix('{locale}')
    ->where(['locale' => 'fr|en'])
    ->group(function () {

        Route::get('/', function () {
            return view('welcome');
        })->name('home');

        Route::get('/a-propos', function () {
            return view('about');
        })->name('about');

        Route::get('/services', [ServiceController::class, 'index'])
            ->name('services');

        Route::get('/services/{slug}', [ServiceController::class, 'show'])
            ->name('services.show');

        Route::get('/realisations', [ProjectController::class, 'index'])
            ->name('realisations');

        Route::get('/blog', function () {
            return view('blog');
        })->name('blog');

        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');

        Route::post('/contact', [ContactController::class, 'submit'])
            ->name('contact.submit');
    });
