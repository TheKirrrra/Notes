<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gradient-to-b from-gray-900 via-indigo-900 to-gray-700 text-gray-100 min-h-screen">


    <!-- Верхнее меню -->
    @include('partials.nav')

    <!-- Основной контент -->
    <main class="py-8">
        <div class="max-w-6xl mx-auto px-4">
            @yield('content')
        </div>
    </main>

    </body>

</html>
