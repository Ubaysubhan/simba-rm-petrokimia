<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation</title>
    <link rel="stylesheet" href="./css/tailwind.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>


    @include('layouts.navbar')

    @yield('container')
</body>

</html>
