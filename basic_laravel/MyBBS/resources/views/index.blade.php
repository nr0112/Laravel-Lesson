<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <title>My BBS</title>
</head>
<body>
    <div class="container">
        <h1>My BBS</h1>
        <ul>
            @forelse ($posts as $index => $post)
                <li>
                    <a href="/posts/{{ $index }}">
                        {{ $post }}
                    </a>
                </li>
            @empty
                <li>No posts yet!</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
