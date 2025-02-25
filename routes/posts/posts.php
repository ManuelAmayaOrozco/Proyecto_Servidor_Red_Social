<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// RUTA PARA ENRUTAR /user/
Route::get('/register', [PostController::class, 'showRegisterPost'])->name('post.showRegisterPost');
Route::post('/regsiter', [PostController::class, 'doRegisterPost'])->name('post.doRegisterPost');
