<x-layout>
    <x-slot name="title">Add new post - My BBS</x-slot>
    <a href="{{ route('posts.index') }}">
        <div class="back-link">
            &laquo Back
        </div>
    </a>
    <h1>Add new post</h1>

    <form action="" method="post">
        @csrf

        <label>
            Title
            <input type="text" name="title">
        </label>
        <label>
            Body
            <textarea name="body"></textarea>
        </label>
        <button>Add</button>
    </form>
</x-layout>
