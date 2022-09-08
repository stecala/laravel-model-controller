<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- my css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>@yield('title') | Movies</title>
</head>
<body>
    @include('import.header')
    @yield('home')
    @include('import.footer')
</body>
</html>