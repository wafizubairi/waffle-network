<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $namaPengirim;
    public string $emailPengirim;
    public string $telefon;
    public string $perkhidmatan;
    public string $mesej;

    public function __construct($data)
    {
        $this->namaPengirim  = $data['nama'];
        $this->emailPengirim = $data['email'];
        $this->telefon       = $data['telefon'];
        $this->perkhidmatan  = $data['perkhidmatan'];
        $this->mesej         = $data['mesej'];
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pertanyaan Baru — Waffle Network',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }
}