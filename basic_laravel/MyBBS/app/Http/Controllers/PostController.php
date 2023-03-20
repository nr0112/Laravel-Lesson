<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
    $posts = [
        'Title A',
        'Title B',
        'Title C',
    ];

    return view('index')
        ->with(['posts' => $posts]);
}
}
