<x-layout>
    <x-slot name="title">
       Edit Post - My BBS
    </x-slot>

    <div class="back-link">
        {{-- 戻り先 --}}
        &laquo;<a href="{{route('posts.show',$post)}}">Back</a>
        </div>
        <h1>Edit Post</h1>
        {{-- 送信先 --}}
        <form method="post" action="{{route('posts.update',$post)}}">
            {{-- ホーム送信をするための --}}
            @method('PATCH')
        @csrf
            <div class="form-group">

            <label>
                Title
                 {{-- value="{{old('body')}}で値が残る設定 --}}
                <input type="text" name="title" value="{{old('title',$post->title)}}">
            </label>
    {{-- エラーの表示 --}}
            @error('title')
            <div class="error">{{$message}}</div>
         @enderror
            </div>
            <div class="form-group">
            <label>
                Body
                {{--{{old('body')}}で値が残る設定 --}}
                <textarea name="body"> {{old('body',$post->body)}}</textarea>
            </label>
            @error('body')
            <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="form-button">
                {{-- ボタン変更 --}}
             <button>Update</button>
            </div>
        </form>
    </x-layout>
