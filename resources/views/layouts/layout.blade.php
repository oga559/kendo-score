<!DOCTYPE html>
<html lang="ja">
    <head>
        @include('parts.head')
        <title>@yield('title')</title>
    </head>
    <body class="antialiased">
        @include('parts.header')
        @yield('body')
    </body>
</html>
