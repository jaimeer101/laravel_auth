<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index']);



Route::get('/admin', function () {
    // Only admins can access
    Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin');
})->middleware('can:access-admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/{page}', [ProfileController::class, 'edit'])->name('profile.page');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile', [ProfileController::class, 'save_personal_info'])->name('profile.save_personal_info');
    Route::post('save_password', [ProfileController::class, 'save_password'])->name('profile.save_password');
    Route::post('save_profile', [ProfileController::class, 'save_profile'])->name('profile.save_profile');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/dashboard', [FeedController::class, 'index'])->name('dashboard');
    //CRUD of POST
    Route::apiResource('posts', PostController::class);

    Route::post('react', [PostController::class, 'react'])->name('posts.react');
});

Route::get('/feed', [FeedController::class, 'index'])->name('dashboard');



require __DIR__.'/auth.php';
