@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-12 px-4">
        <!-- Title -->
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-100">Register</h1>

        <!-- Register form (dark card) -->
        <div class="bg-gray-800/75 border border-gray-700 p-6 rounded-lg shadow-lg">
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
                @csrf

                <!-- Name -->
                <input type="text" name="name" value="{{ old('name') }}" required autofocus
                       class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Name">

                <!-- Email -->
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Email">

                <!-- Password -->
                <input type="password" name="password" required
                       class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Password">

                <!-- Confirm Password -->
                <input type="password" name="password_confirmation" required
                       class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Confirm Password">

                <!-- Submit Button -->
                <button type="submit"
                        class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                    Register
                </button>

                <!-- Link to login -->
                <div class="text-center text-sm text-gray-200 mt-2">
                    Already have an account?
                    <a href="{{ route('login') }}" class="hover:underline">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
