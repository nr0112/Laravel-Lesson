<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * 配列の宣言
     */
    private $posts = [
        'Title A',
        'Title B',
        'Title C',
    ];

    /**
     * indexメソッド：一覧表示を行うメソッド
     * メモ
        * viewフォルダーのindex.blade.phpを返す
        * withで$postsの値を'posts'として返す
     */
    public function index()
    {
        return view('index')
            ->with(['posts' => $this->posts]);
    }

    /**
     * showメソッド：詳細表示を行うメソッド
     * メモ
        * 引数にweb.phpでルート設定した変数にすることで、値を持ってこれる
     */
    public function show($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
