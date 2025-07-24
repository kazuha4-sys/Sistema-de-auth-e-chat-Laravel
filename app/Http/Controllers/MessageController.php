<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index() {
        return view('chat.index');        
    }

    public function fetch(){
        return \App\Models\Message::with('user')->latest(50)->get()->reverse()->values();
    }

    public function store(Request $request) {
        $request->validate(['message' => 'required|string']);
        $message = $request->user()->messages()->create([
            'message' => $request->message,
        ]);
        return $message->load('user');
    }
}
