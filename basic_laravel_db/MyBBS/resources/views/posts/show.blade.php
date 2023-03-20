<x-layout>
    <x-slot name="title">{{ $post->title }} - My BBS</x-slot>
    <a href="{{ route('posts.index') }}">
        <div class="back-link">
            &laquo Back
        </div>
    </a>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
</x-layout>
