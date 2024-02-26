<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected array $attachments = [];

    public function __construct(array $data, array $attachments = [])
    {
        $this->data = $data;
        $this->attachments = $attachments;
    }

    public function build()
    {
        $this->subject('New contact form submission');

        if (!empty($this->attachments)) {
            foreach ($this->attachments as $attachment) {
                $this->attach($attachment['path'], [
                    'as'       => basename($attachment['path']),
                    'mime'     => mime_content_type($attachment['path']),
                ]);
            }
        }

        return $this->view('email')->with([
            $this->data['name']
        ]);
    }
}
