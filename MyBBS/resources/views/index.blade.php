<x-layout>
    {{-- コンポーネントの利用 --}}

    <x-slot name='title'>
        {{-- コンポーネント内の変数の利用 --}}
        My BBS
    </x-slot>

    <h1>My BBS</h1>
            <ul>
                {{-- 値がある時 --}}
                @forelse ($posts as $post)
                    <li>
                        <a href="{{ route('posts.show', $post ) }}">
                            {{ $post->title }}
                        </a>
                    </li>
                {{-- からの時 --}}
                @empty
                    <li>No posts yet!</li>
                @endforelse
            </ul>
</x-layout>
