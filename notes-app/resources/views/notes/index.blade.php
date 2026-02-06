@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto mt-12 px-4">
        <!-- Page title -->
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-100">Your notes</h1>

        <!-- New note form (dark card) -->
        <div class="bg-gray-800/75 border border-gray-700 p-6 rounded-lg shadow-lg mb-6 backdrop-blur-sm">
            <form action="{{ route('notes.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <input type="text" name="title" placeholder="Title" required
                       class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <textarea name="content" placeholder="Description" required rows="3"
                          class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                    Add Note
                </button>
            </form>
        </div>

        <!-- Notes list -->
        <div class="grid gap-4">
            @forelse($notes as $note)
                <div class="bg-gray-800/70 border border-gray-700 p-4 rounded-lg shadow flex justify-between items-start">
                    <div>
                        <h2 class="font-semibold text-lg mb-1 text-gray-100">{{ $note->title }}</h2>
                        <p class="text-gray-300">{{ $note->content }}</p>
                    </div>
                    <div class="flex flex-col gap-2 ml-4">
                        <a href="{{ route('notes.edit', $note) }}"
                           class="text-sm text-indigo-400 hover:underline">Edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-sm text-red-400 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-400">You don't have Notes still.</p>
            @endforelse
        </div>
    </div>
@endsection
