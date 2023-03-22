<x-layout>
    <x-slot name="title">Add new post - My BBS</x-slot>
    <a href="{{ route('posts.show', $post) }}">
        <div class="back-link">
            &laquo Back
        </div>
    </a>
    <h1>Edit post</h1>

    <form action="" method="post">
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
