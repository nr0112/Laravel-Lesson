<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $posts =[
        // 'Tittle A',
        // 'Tittle B',
        // 'Tittle C',
    ];
    return view('index')
    ->with(['posts'=>$posts]);
});
