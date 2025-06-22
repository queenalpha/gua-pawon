<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')

    <title>@yield('title', 'Gua Pawon')</title>
    <link rel="icon" type="image/png" href="{{ Vite::asset('../resources/img/Logo-pawon.png') }}">
    @livewireStyles
</head>

<body>
    @include('components.navbar')

    @yield('error')
    @yield('home')
    @yield('history')
    @yield('ecology')
    @yield('Berita')
    @yield('jurnal gua-pawon')
    @yield('artikel')
    @yield('artikel-konten')
    @yield('conservation')

    @livewireScripts
</body>
@include('components.footer')
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
