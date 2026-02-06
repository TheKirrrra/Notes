@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-12 px-4">
        <!-- Title -->
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-100">Edit note</h1>

        <!-- Edit form (dark card) -->
        <div class="bg-gray-800/75 border border-gray-700 p-6 rounded-lg shadow-lg">
            <form method="POST" action="{{ route('notes.update', $note) }}" class="flex flex-col gap-4">
                @csrf
                @method('PUT')

                <!-- Title -->
                <input type="text" name="title" value="{{ old('title', $note->title) }}" required
                       class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Title">

                <!-- Content -->
                <textarea name="content" rows="5" required
                          class="bg-gray-700 text-gray-100 border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                          placeholder="Description">{{ old('content', $note->content) }}</textarea>

                <!-- Buttons -->
                <div class="flex justify-between">
                    <a href="{{ route('notes.index') }}"
                       class="bg-gray-700 text-gray-200 px-4 py-2 rounded hover:bg-gray-600 transition">
                        Cancel
                    </a>
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500 transition">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
