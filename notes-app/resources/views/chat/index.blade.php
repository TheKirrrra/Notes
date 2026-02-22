@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-12 px-4">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-100">Chat</h1>

        <div class="bg-gray-800/75 border border-gray-700 p-6 rounded-lg shadow-lg mb-6">
            <p class="text-gray-300">This will be the chat interface. Placeholder for now.</p>
        </div>

        <!-- Message window -->
        <div class="bg-gray-900 border border-gray-700 p-4 rounded-lg shadow-lg">
            <div class="h-64 overflow-auto mb-4 space-y-3" id="messages">
                @foreach($messages as $msg)
                    <div class="text-gray-300">[{{ $msg->created_at->format('H:i') }}] <span class="font-semibold text-gray-100">{{ $msg->user->name }}:</span> {{ $msg->content }}</div>
                @endforeach
            </div>

            <form action="{{ route('chat.messages.store') }}" method="POST" class="flex gap-2">
                @csrf
                <input type="text" name="content" placeholder="Type a message..." required
                       class="flex-1 bg-gray-800 text-gray-100 border border-gray-700 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">Send</button>
            </form>
        </div>
    </div>
@endsection
