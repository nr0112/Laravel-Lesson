<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <title>My BBS</title>
</head>

<body>
    <div class="container">
        <a href="{{ route('posts.index') }}">
            <div class="back-link">
                &laquo Back
            </div>
        </a>
        <h1>{{ $post }}</h1>
    </div>
</body>

</html>
