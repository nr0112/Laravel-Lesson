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
    ->name('posts.show');
