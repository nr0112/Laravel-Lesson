<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
    <h1>My BBS</h1>
    <ul>
        @forelse ($posts as $post)
        {{-- //showメソッドにつながるリンクを生成 --}}
            <li>
                <a href="{{ route('posts.show',$post) }}">
                    {{-- post自動でくる --}}
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>No posts yet!</li>
        @endforelse
    </ul>
</x-layout>
