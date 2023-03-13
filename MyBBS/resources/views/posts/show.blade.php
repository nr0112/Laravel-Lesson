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
        </h1>
     {{-- nl2brは改行のやつ。blade で値を埋め込みつつ、文字実態参照への変換を無効にする --}}
     {{-- $post->bodにhtmlにタグが含まれていたら、文字実態参照に変換してあげると良い --}}
     {{-- HTML タグが混入していたら、文字実態参照に変換してくれて、そのうえでさらにこのデータに改行が含まれていたら
      nl2br で br タグに変換してくれて、そしてその br タグは blade のこの記法でそのまま出力されるのでうまくいきそうです。 --}}
        <p>{!! nl2br(e($post->body))!!}</p>
    </x-layout>
