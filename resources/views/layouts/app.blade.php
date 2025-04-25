<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
   

    <title>Gua Pawon</title>
    <link rel="icon" type="image/png" href="{{ Vite::asset('../resources/img/Logo-pawon.png') }}">
</head>

<body>
    @include('components.navbar')

    @yield('history')
    @yield('ecology')
</body>
@include('components.footer')
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


</html>