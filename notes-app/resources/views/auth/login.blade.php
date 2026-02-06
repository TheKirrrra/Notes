@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-12 px-4">
        <!-- Title -->
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-100">Login</h1>

        <!-- Login form (dark card) -->
        <div class="bg-gray-800/75 border border-gray-700 p-6 rounded-lg shadow-lg">
            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
                @csrf

                <!-- Email -->
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Email">

                <!-- Password -->
                <input type="password" name="password" required
                       class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Password">

                <!-- Remember Me -->
                <label class="flex items-center gap-2 text-gray-200">
                    <input type="checkbox" name="remember" class="rounded">
                    Remember Me
                </label>

                <!-- Submit Button -->
                <button type="submit"
                        class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                    Login
                </button>

                <!-- Links -->
                <div class="flex justify-between text-sm text-gray-200 mt-2">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="hover:underline">
                            Forgot Your Password?
                        </a>
                    @endif
                    <a href="{{ route('register') }}" class="hover:underline">
                        Register
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
