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
        <div class="form-group">
            <label>
                Title
                <input type="text" name="title">
            </label>
        </div>
        <div class="form-group">
            <label>
                Body
                <textarea name="body"></textarea>
            </label>
        </div>
        <div class="form-button">
            <button>Add</button>
        </div>
    </form>
</x-layout>
