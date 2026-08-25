<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $senderName,
        public string $senderEmail,
        public string $messageBody,
    ) {}

    public function build(): ContactMessage
    {
        return $this->subject('پیام جدید از پورتفولیو — ' . $this->senderName)
            ->replyTo($this->senderEmail, $this->senderName)
            ->view('emails.contact');
    }
}
