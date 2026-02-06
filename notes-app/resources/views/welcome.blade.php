@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-gray-800/75 border border-gray-700 p-8 rounded-lg shadow-lg backdrop-blur-sm text-center text-gray-100 mt-12">
        @auth
            <h1 class="text-2xl font-bold mb-4 text-white">
                Hey ho, {{ Auth::user()->name }} 👋
            </h1>

            <p class="mb-6 text-gray-200">
                Welcome! Here you can make your notes.
            </p>

            <a href="{{ url('/notes') }}"
               class="inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                Go to Notes
            </a>

            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit" class="text-sm text-gray-300 hover:underline">
                    Logout
                </button>
            </form>

        @else
            <h1 class="text-2xl font-bold mb-4 text-white">
                Welcome 👋
            </h1>

            <p class="mb-6 text-gray-200">
                Welcome! Here you can make your notes.,<br>
                but at first, complete an Authorisation.
            </p>

            <div class="flex justify-center gap-4">
                <a href="{{ route('login') }}"
                   class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="bg-gray-700 text-gray-200 px-4 py-2 rounded hover:bg-gray-600 transition">
                    Registration
                </a>
            </div>
        @endauth
    </div>
@endsection
