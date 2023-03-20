<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        return view('index')
            ->with(['posts' => $posts]);
    }

    public function show(int $id)
    {
        $post = Post::findorFail($id);
        return view('posts.show')
            ->with(['post' => $post]);
    }
}
