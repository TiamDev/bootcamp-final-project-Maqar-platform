<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Mail\MessageEmail;
use App\Mail\ReplyEmail;
use Illuminate\Http\Request;

// use App\Http\Controllers\MessageController\Message;

use App\Models\Message\Message;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $Messages = Message::where('user_id',  $id)->paginate(10);
        return view('platform.messages.index', compact('Messages'));
    }
    public function store(Request $request)
    {

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'user_id' => 1,
        ]);
        return redirect()->route('home');
    }
    public function storeTenant(Request $request)
    {

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'user_id' => $request->provider,
        ]);
        return redirect()->route('home');
    }
    public function view($id)
    {
        $record = Message::findOrFail($id);
        return view('platform.messages.view', compact('record'));
    }
    public function destroy($id)
    {
        // Find the record to delete
        $record = Message::findOrFail($id);

        // Delete the record
        $record->delete();

        return redirect()->route('platform.messages')->with('success', 'Record deleted successfully');
    }
    public function sendreplay(Request $request)
    {
        $email = new ReplyEmail($request->email, $request->reply);
        Mail::to($request->email)->send($email);
        return redirect()->route('platform.messages')->with('success', 'تم ارسال الرد بنجاح');
    }
}
