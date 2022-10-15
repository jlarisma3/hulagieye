<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::get('/', [\App\Http\Controllers\Live\MainController::class, 'index'])
    ->name('home');

Route::get('/bio', [\App\Http\Controllers\Live\MainController::class, 'bio'])
     ->name('bio');

Route::get('/contact-info', [\App\Http\Controllers\Live\MainController::class, 'index'])
     ->name('contact-info');

Route::prefix('gallery')->group(function() {
    Route::get('/', [\App\Http\Controllers\Live\GalleryController::class, 'index'])
         ->name('gallery');

    Route::get('album/{slug}', [\App\Http\Controllers\Live\GalleryController::class, 'album'])
         ->name('gallery.album');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
