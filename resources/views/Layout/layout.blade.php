<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}">
    <title>@yield('title', 'Cash Status')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col h-screen">
    @include('Partials.header')

    <main class="flex flex-1">
        @include('Partials.menu')

        @yield('content')
    </main>
</body>

</html>
