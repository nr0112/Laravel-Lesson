{{-- コンポーネントの記述
        コンポーネント→共通部分をまとめて表示できる
     --}}

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        {{-- <x-slot name='title'>この間に入れたい値を書くことで、使える。</x-slot> --}}
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            {{ $slot }}
        </div>
    </body>
</html>
