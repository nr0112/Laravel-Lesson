<x-layout>
    <x-slot name="title">
       Add New Post - My BBS
    </x-slot>

    <div class="back-link">
        &laquo;<a href="{{route('posts.index')}}">Back</a>
        </div>
        <h1>Add New Post</h1>

        <form method="post" action="{{route('posts.store')}}">
            {{-- ホーム送信をするための --}}
            @csrf
            <div class="form-group">

            <label>
                Title
                 {{-- value="{{old('body')}}で値が残る設定 --}}
                <input type="text" name="title" value="{{old('title')}}">
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
                <textarea name="body">{{old('body')}}</textarea>
            </label>
            @error('body')
            <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="form-button">
             <button>Add</button>
            </div>
        </form>
    </x-layout>
