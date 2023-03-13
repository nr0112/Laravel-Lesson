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
    public function store(Request $request)
    {
        //ナビゲーション使用（コントローラーで入力するされたルールの検証の設定）
        $request->validate([
            'title'=>'required|min:3',//3文字欲しいルール
            'body' =>'required',//元の状態に差し戻してくれる
        ],
         [
            'title.required'=>'タイトルは必須です',//エラーメッセーじの修正
            'title.min'=>':min 文字以上入力してください',//3文字以上必須の指定
            'body.required' =>'本文は必須です',//元の状態に差し戻してくれる
         ]);


        $post=new Post();
        $post->title=$request->title;
        $post->body=$request->body;
        //値が保存される
        $post->save();
        //元に戻る
        return redirect()
        ->route('posts.index');
}

public function edit(Post $post)
{
     return view('posts.edit')
    ->with(['post' => $post]);
}


public function update(Request $request,Post $post)
    {
        //ナビゲーション使用（コントローラーで入力するされたルールの検証の設定）
        $request->validate([
            'title'=>'required|min:3',//3文字欲しいルール
            'body' =>'required',//元の状態に差し戻してくれる
        ],
         [
            'title.required'=>'タイトルは必須です',//エラーメッセーじの修正
            'title.min'=>':min 文字以上入力してください',//3文字以上必須の指定
            'body.required' =>'本文は必須です',//元の状態に差し戻してくれる
         ]);


        // $post=new Post();インスタンスはいらない
        $post->title=$request->title;
        $post->body=$request->body;
        //値が保存される
        $post->save();
        //元に戻る
        return redirect()
        ->route('posts.show',$post);//データの更新後は詳細ページ
    }
}
