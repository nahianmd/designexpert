<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Full Banger') }} - @yield('title')</title>
    <link rel="icon" href="">
    @include('layouts_land.header')
    @yield('head')
    @include('include.navbar')

</head>
<body>
    @yield('content')
    @include('layouts_land.footer')
    @yield('foot')

</body>
</html>
