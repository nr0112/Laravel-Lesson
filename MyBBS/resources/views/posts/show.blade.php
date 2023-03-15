<x-layout>
    <x-slot name="title">
       {{$post->title}} - My BBS
    </x-slot>

    <div class="back-link">
        &laquo;<a href="{{route('posts.index')}}">Back</a>
        </div>
        <h1>
          <span>{{ $post->title }}</span>
            {{-- h1にフレックスボックスの設置をした --}}
         <a href="{{route('posts.edit',$post)}}">[Edit]</a>
         {{-- 削除タグ actionの後は送信先(route('posts.destory')、ポストのデータを渡す--}}
         {{-- idで扱いやすくなる --}}
         <form method="post" action="{{route('posts.destroy',$post)}}"id="delete_post">
            {{-- データの削除はDELETで送信 --}}
            @method('DELETE')
        {{--ユーザ本人以外の者が捏造（ねつぞう）したコンテンツに基づいて発せられたHTTPリクエストを Webアプリケーションが受け付けないようにすること --}}
            @csrf
            <button class="btn">[x]</button>
         </form>
        </h1>
     {{-- nl2brは改行のやつ。blade で値を埋め込みつつ、文字実態参照への変換を無効にする --}}
     {{-- $post->bodにhtmlにタグが含まれていたら、文字実態参照に変換してあげると良い --}}
        <p>{!! nl2br(e($post->body)) !!}</p>

<script>
    'use strict';
    {
        document.getElementById('delete_post').addEventListener('submit', e=>{
            e.preventDefault();

            if(!confirm('Sure to delete?')){
                return;
            }
        e.target.submit();
        });
    }
</script>
    </x-layout>
