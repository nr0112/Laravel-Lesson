<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('post', '[0-9]+');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])
    ->name('posts.store');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('post', '[0-9]+');

Route::patch('/posts/{post}/update', [PostController::class, 'update'])
    ->name('posts.update')
    ->where('post', '[0-9]+');

Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->where('post', '[0-9]+');
