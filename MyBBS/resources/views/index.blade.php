<x-layout>
    {{-- コンポーネントの利用 --}}

    <x-slot name='title'>
        {{-- コンポーネント内の変数の利用 --}}
        My BBS
    </x-slot>

    <h1>My BBS</h1>
            <ul>
                {{-- 値がある時 --}}
                @forelse ($posts as $index => $post)
                    <li>
                        <a href="{{ route('posts.show', $index) }}">
                            {{ $post }}
                        </a>
                    </li>
                {{-- からの時 --}}
                @empty
                    <li>No posts yet!</li>
                @endforelse
            </ul>
</x-layout>
