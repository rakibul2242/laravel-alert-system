<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Welcome Mail');
    }

    public function content(): Content
    {
        return new Content(view: 'emails.welcome', with: ['user' => $this->user]);
    }

    public function attachments(): array
    {
        return [];
    }
}
