<?php

use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Frontend/Welcome', [
//         'layout' => 'Frontend.app',
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
    
// });

// route group for pagecontroller
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'homepage');
    Route::get('/homepage', 'homepage')->name('homepage');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/contact', 'contact')->name('contact');
});


// BACKEND
Route::get('/menu-links', [MenuController::class, 'menuLinks'])->name('menu.menuLinks');

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    Route::get('/menu', [MenuController::class, 'index'])->name('menu.edit');
    Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
    Route::put('/menu', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/menu', [MenuController::class, 'destroy'])->name('menu.destroy');
    // Route::get('/menu-links', [MenuController::class, 'menuLinks'])->name('menu.menuLinks');

    Route::controller(LanguageController::class)->group(function () {
        Route::get('/language', 'index')->name('language.edit');
        Route::post('/language', 'store')->name('language.store');
        Route::put('/language', 'update')->name('language.update');
        Route::delete('/language', 'destroy')->name('language.destroy');
    });

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('admin.dashboard');
});

require __DIR__.'/auth.php';
