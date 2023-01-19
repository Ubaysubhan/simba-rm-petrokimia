<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIMBA | Retail Management PG</title>
    <link rel="stylesheet" href="./css/tailwind.css">
    @vite('resources/css/app.css')
    <link href="{{ URL::asset('dist/terang.png') }}" rel="icon">

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

</head>



<body class="bg-white">
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js">
    </script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>


    @include('layouts.navbar')

    @yield('container')


    @yield('script')

</body>

</html>