<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApproveEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $reply;
    protected $email;
    protected $request;

    public function __construct($email, $reply)
    {
        $this->reply = $reply;
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.approve')
            ->subject('قبول طلب الانضمام')
            ->to($this->email, 'Me')
            ->with(['reply' => $this->reply]);
    }
}
