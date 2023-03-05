<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{


    public function index()
    {
    //get必要、更新順に並べる
    $posts= Post::latest()->get();


        return view('index')
            ->with(['posts' => $posts]);
    }
//Implicit Binding
    public function show(Post $post)
    {
         return view('posts.show')
        ->with(['post' => $post]);
}

// 上記によりいらない　$post= Post::findOrFail($id);//エラーページの表示

public function create(){
    return view ('posts.create');
    }
}
