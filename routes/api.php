<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth')->group(function () {
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::match(['put', 'patch'], 'posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{user}', [PostController::class, 'destroy'])->name('posts.destroy');
});

