<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('site/css/.css') }}">
</head>

<body>
    @include('layouts.site.header')

    @yield('produtos')

    @include('layouts.site.footer')

    <script src="{{ asset('site/js/.js') }}"></script>

</body>

</html>
