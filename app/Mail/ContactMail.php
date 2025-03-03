<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    

    public $details;

    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        
        $this->details = $details;
    }

    /**
     * Get the message envelope.Sätib meeta andmed emailile.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Uus kontaktivormi sõnum', // The subject of the email
            replyTo: !empty($this->details['email']) ? [new Address($this->details['email'])] : [] // Fix null error
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'components.email.email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
