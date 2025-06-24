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
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/dashboard', [FeedController::class, 'index'])->name('dashboard');
    //CRUD of POST
    Route::apiResource('posts', PostController::class);

    Route::post('react', [PostController::class, 'react'])->name('posts.react');
});

Route::get('/feed', [FeedController::class, 'index'])->name('dashboard');



require __DIR__.'/auth.php';
