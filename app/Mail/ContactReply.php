<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReply extends Mailable
{
    use SerializesModels;

    public $replyData;

    public function __construct($replyData)
    {
        $this->replyData = $replyData;
    }

    public function build()
    {
        return $this->subject('Gua Pawon: ' . $this->replyData['subject'])
            ->view('emails.reply') // Nama view untuk tampilan email
            ->with([
                'reply' => $this->replyData['reply'],  // Mengirim data balasan
                'name' => $this->replyData['name'],    // Nama pengirim
            ]);
    }
}
