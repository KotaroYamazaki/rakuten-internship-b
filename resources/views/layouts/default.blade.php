<!-- resources/views/layouts/default.blade.phpとして保存 -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
</head>
<body>
    {{-- コンテンツの表示 --}}
    <div class="container">
        @yield('content')
    </div>
</body>