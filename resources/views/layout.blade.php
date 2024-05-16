<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="css/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="css/images/favico/favicon-32x32.png">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="css/images/favico/favicon-16x16.png"> -->
   

    <title>Moove</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js', 'vendor/courier/build'])
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <x-flash-success />

    @include('nav')
    @yield('content')

    @if(session()->has('success'))
    <p>
        {{ session()->get('success') }}
    </p>
    @endif

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>