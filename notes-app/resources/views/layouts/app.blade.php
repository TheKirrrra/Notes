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
    <nav class="bg-gradient-to-r from-indigo-700 via-indigo-800 to-gray-900 text-white px-6 py-4 flex justify-between items-center border-2 border-indigo-600 rounded-lg shadow-2xl ring-1 ring-indigo-600/30">
    <!-- Левая часть: вкладки -->
        <div class="flex gap-4">
            <a href="{{ url('/') }}"
               class="hover:bg-gray-700 px-3 py-2 rounded {{ request()->is('/') ? 'bg-gray-900' : '' }}">
                Main
            </a>
            <a href="{{ url('/notes') }}"
               class="hover:bg-gray-700 px-3 py-2 rounded {{ request()->is('notes*') ? 'bg-gray-900' : '' }}">
                Notes
            </a>
        </div>

        <!-- Правая часть: авторизация -->
        <div class="flex gap-4 items-center">
            @auth
                <span>Hey ho, {{ Auth::user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:underline">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:underline">Login</a>
                <a href="{{ route('register') }}" class="hover:underline">Registration</a>
            @endauth
        </div>
    </nav>

    <!-- Основной контент -->
    <main class="py-8">
        @yield('content')
    </main>

    </body>

</html>
