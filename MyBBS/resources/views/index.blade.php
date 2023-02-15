

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>My BBS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>My BBS</h1>
    </ul>
        {{-- @foreach ($posts as $post)
            <li>{{ $post }}</li>
        @endforeach --}}

        @forelse ($posts as $post)
            <li>{{ $post }}</li>
        @empty
            <li>No posts yet!</li>
        @endforelse
</ul>
        <div>

</body>
</html>
