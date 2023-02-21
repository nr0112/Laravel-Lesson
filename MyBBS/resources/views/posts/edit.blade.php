<x-layout>
    <x-slot name="title">
        Add New Post - My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.show', $post) }}">Back</a>
    </div>
    <h1>Edit Post</h1>
    <form method="post" action="{{ route('posts.update', $post) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label>
                Title
                <input type="text" name="title" value="{{ old('title', $post->title) }}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
                Body
                <textarea name="body">{{ old('body', $post->body) }}</textarea>
            </label>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>Update</button>
        </div>
    </form>
</x-layout>
