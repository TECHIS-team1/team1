<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>商品管理アプリ</title>

</head>
<body>
<div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
