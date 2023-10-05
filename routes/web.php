<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);
Route::get('/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::delete('/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
