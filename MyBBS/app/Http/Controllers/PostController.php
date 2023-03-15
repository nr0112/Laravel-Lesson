<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

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
    public function store(PostRequest $request)
    //バリエーション実行
    {

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

public function update(PostRequest $request,Post $post)
    {
        // $post=new Post();インスタンスはいらない
        $post->title=$request->title;
        $post->body=$request->body;
        //値が保存される
        $post->save();
        //元に戻る
        return redirect()
        ->route('posts.show',$post);//データの更新後は詳細ページ
    }

    public function destroy(Post $post)
    {
    $post->delete();

    return redirect()
        ->route('posts.index');
    }
}
