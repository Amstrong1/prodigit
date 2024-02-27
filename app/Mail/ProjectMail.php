<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProjectMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public array $projectFiles = [];

    public function __construct(array $data, array $projectFiles = [])
    {
        $this->data = $data;
        $this->projectFiles = $projectFiles;
    }

    public function build()
    {
        $this->subject('New contact form submission');

        if (!empty($this->projectFiles)) {
            for ($i = 0; $i < count($this->projectFiles); $i++) {
                $this->attach('storage/' . $this->projectFiles[$i], [
                    'as'       => basename($this->projectFiles[$i]),
                ]);
            }
        }

        return $this->view('email')->with([
            $this->data,
            $this->projectFiles
        ]);
    }
}
