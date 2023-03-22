<x-layout>
    <x-slot name="title">{{ $post->title }} - My BBS</x-slot>
    <a href="{{ route('posts.index') }}">
        <div class="back-link">
            &laquo Back
        </div>
    </a>
    <h1>
        <span>
            {{ $post->title }}
        </span>
        <a href="{{ route('posts.edit', $post) }}">[Edit]</a>
        {{-- <form action="{{ route('posts.delete', $post) }}" method="post"> --}}
        <form action="" method="post">
            <button class="btn">X DELETE</button>
        </form>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
</x-layout>
