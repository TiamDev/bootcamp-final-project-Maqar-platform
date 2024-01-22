<?php

namespace App\Mail;

use App\Models\reservation\reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RejectRequestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $reply;
    protected $email;
    protected $request;
    protected Reservation $reservation;

    public function __construct($email, $reply, Reservation $reservation)
    {
        $this->reply = $reply;
        $this->email = $email;
        $this->reservation = $reservation;
    }

    public function build()
    {

        return $this->view('emails.rejectRequest')
            ->subject('رفض طلب الحجز')
            ->to($this->email, 'Me')
            ->with(['reply' => $this->reservation]);

        // ->with(['reply' => $this->reservation, 'message' => ' $this->reply']);
    }
}
