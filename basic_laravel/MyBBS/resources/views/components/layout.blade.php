<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <title>My BBS</title>
</head>
<body>
    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>
