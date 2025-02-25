<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'showPosts'])->name('post.showPosts');


Route::prefix('users')->group(base_path('routes/users/users.php'));
Route::prefix('chores')->group(base_path('routes/chores/chores.php'));
Route::prefix('posts')->group(base_path('routes/posts/posts.php'));
