<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RejectedEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $reply;
    protected $email;
    public function __construct($email, $reply)
    {
        $this->reply = $reply;
        $this->email = $email;
    }
    public function build()
    {
        return $this->view('emails.reject')
            ->subject('رفض  طلب انضمام')
            ->to($this->email, 'Me')
            ->with(['reply' => $this->reply]);
    }
    /**
     * Create a new message instance.
     */
    // public function __construct()
    // {
    //     //
    // }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Rejected Email',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    //}
}
