<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::prefix('/')->name('front.')->group(function () {
    Route::view('/', 'front.index')->name('index');
    Route::view('/about', 'front.about')->name('about');
    Route::view('/contact', 'front.contact')->name('contact');
    Route::view('/services', 'front.services')->name('services');
    Route::view('/project', 'front.project')->name('project');
    Route::view('/team', 'front.team')->name('team');
    Route::view('/testimonial', 'front.testimonial')->name('testimonial');
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::view('/', 'admin.index')->name('index');
        Route::view('/setting', 'admin.settings.index')->name('setting');
        Route::view('/skill', 'admin.skills.index')->name('skill');
        Route::view('/subscriber', 'admin.subscribers.index')->name('subscriber');
        Route::view('/counter', 'admin.counters.index')->name('counter');
        Route::view('/service', 'admin.services.index')->name('service');
        Route::view('/message', 'admin.messages.index')->name('message');
        Route::view('/category', 'admin.categories.index')->name('category');
        Route::view('/project', 'admin.projects.index')->name('project');
    });
    Route::view('/login', 'admin.auth.login')->name('login')->middleware('guest:admin');
});
