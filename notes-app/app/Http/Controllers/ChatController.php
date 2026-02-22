<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class ChatController extends Controller
{
    public function index()
    {
        // Load latest 200 messages with user
        $messages = Message::with('user')->latest()->take(200)->get()->reverse();
        return view('chat.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => ['required', 'string', 'max:2000'],
        ]);

        Message::create([
            'user_id' => Auth::id(),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('chat.index');
    }
}
