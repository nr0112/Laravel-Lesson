<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// URLが '/'で、getリクエストが来ると実行される。 PostControllerのindexが呼び出される
Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

// URLが '/posts/$post'で、getリクエストが来ると実行される。 PostControllerのshowが呼び出される
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('post', '[0-9]+'); //正規表現の追加

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
