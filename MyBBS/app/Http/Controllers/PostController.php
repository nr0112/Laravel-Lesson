<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * indexメソッド：一覧表示を行うメソッド
     * メモ
        * viewフォルダーのindex.blade.phpを返す
        * withで$postsの値を'posts'として返す
     */
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();
        return view('index')
            ->with(['posts' => $posts]);
    }

    /**
     * showメソッド：詳細表示を行うメソッド
     * メモ
        * 引数にweb.phpでルート設定した変数にすることで、値を持ってこれる
        * 引数にPost $postでルートからの値を取得することをImplicit Bindingという
     */
    public function show(Post $post)
    {
        // 一致するものがない時に404エラーを表示
        // $post = Post::findOrFail($id);
        return view('posts.show')
            ->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()
            ->route('posts.index');
    }
}
