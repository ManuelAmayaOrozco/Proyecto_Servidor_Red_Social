<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'showPosts'])->name('home');


Route::prefix('users')->group(base_path('routes/users/users.php'));
Route::prefix('chores')->group(base_path('routes/chores/chores.php'));
Route::prefix('posts')->group(base_path('routes/posts/posts.php'));
Route::prefix('comments')->group(base_path('routes/comments/comments.php'));