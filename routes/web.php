<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return Inertia::render('Homepage',
    [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]
);
});

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/homepage', function () {
    return Inertia::render('Homepage');
})->name('homepage');

Route::get('/services', function () {
    return Inertia::render('services');
})->name('services');

Route::get('/portfolio', function () {
    return Inertia::render('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return Inertia::render('contact');
})->name('contact');

// BACKEND

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Dashboard');
    });
});

Route::get('admin/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
