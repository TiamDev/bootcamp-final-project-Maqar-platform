<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use App\Http\Controllers\MessageController\Message;

use App\Models\Message\Message;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'user_id' => 1,
        ]);
        return "done";
    }
}
