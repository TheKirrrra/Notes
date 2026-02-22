<nav class="bg-gradient-to-r from-indigo-700 via-indigo-800 to-gray-900 text-white px-6 py-4 flex justify-between items-center border-2 border-indigo-600 rounded-lg shadow-2xl ring-1 ring-indigo-600/30">
    <!-- Left: tabs -->
    <div class="flex gap-4">
        <a href="{{ url('/') }}"
           class="hover:bg-gray-700 px-3 py-2 rounded {{ request()->is('/') ? 'bg-gray-900' : '' }}">
            Home
        </a>
        <a href="{{ url('/notes') }}"
           class="hover:bg-gray-700 px-3 py-2 rounded {{ request()->is('notes*') ? 'bg-gray-900' : '' }}">
            Notes
        </a>
        <a href="{{ url('/chat') }}"
           class="hover:bg-gray-700 px-3 py-2 rounded {{ request()->is('chat*') ? 'bg-gray-900' : '' }}">
            Chat
        </a>
    </div>

    <!-- Right: auth -->
    <div class="flex gap-4 items-center">
        @auth
            <span>Hello, {{ Auth::user()->name }}</span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="hover:underline">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="hover:underline">Login</a>
            <a href="{{ route('register') }}" class="hover:underline">Register</a>
        @endauth
    </div>
</nav>
