@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-12 px-4">
        <!-- Title -->
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-100">Forgot Your Password?</h1>

        <!-- Forgot Password form (dark card) -->
        <div class="bg-gray-800/75 border border-gray-700 p-6 rounded-lg shadow-lg">
            @if (session('status'))
                <div class="bg-green-600 text-white p-3 rounded mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-4">
                @csrf

                <!-- Email -->
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Email">

                <!-- Submit Button -->
                <button type="submit"
                        class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                    Send Password Reset Link
                </button>

                <!-- Link back to login -->
                <div class="text-center text-sm text-gray-200 mt-2">
                    Remembered your password?
                    <a href="{{ route('login') }}" class="hover:underline">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
