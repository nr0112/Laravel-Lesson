<x-layout>
    <x-slot name="title">{{ $post }} - My BBS</x-slot>
    <a href="{{ route('posts.index') }}">
        <div class="back-link">
            &laquo Back
        </div>
    </a>
    <h1>{{ $post }}</h1>
</x-layout>
