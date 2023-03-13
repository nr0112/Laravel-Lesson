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

// /posts/create
    Route::get('/', [PostController::class, 'index'])
->name('posts.index');



    Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    //数値しか受け付けない宣言　正規表現使用
    ->where('post','[0-9]+');


        // // posts.create にアクセスしたら PostController の create メソッドを呼ぶ
     Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

  // posts.create にアクセスしたら PostController の create メソッドを呼ぶ
  Route::post('/posts/store', [PostController::class, 'store'])
  ->name('posts.store');

  Route::get('/posts/{post}/edit', [PostController::class, 'edit'])  //URLの名前 //メソッド名
  ->name('posts.edit')
  //数値しか受け付けない宣言　正規表現使用
  ->where('post','[0-9]+');

//データの一部の場合はpatch
  Route::patch('/posts/{post}/update', [PostController::class, 'update'])  //URLの名前 //メソッド名
  ->name('posts.update')
  //数値しか受け付けない宣言　正規表現使用
  ->where('post','[0-9]+');

