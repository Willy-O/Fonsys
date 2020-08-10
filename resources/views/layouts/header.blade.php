<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/layout.css')}}">
    <title>@yield('tittle')</title>
</head>
<body>
    <div class="container">
        @include('partials.banner')
        @include('partials.navbar')

        @yield('content')

    </div>
</body>
    <script src="{{ asset('js/app.js')}}"></script>
</html>