<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReply extends Mailable
{
    use SerializesModels;

    public $replyData;

    // Konstruktor untuk menerima data balasan
    public function __construct($replyData)
    {
        $this->replyData = $replyData;
    }

    // Konfigurasi pengiriman email
    public function build()
    {
        return $this->view('emails.reply') // Nama view untuk tampilan email
            ->with([
                'reply' => $this->replyData['reply'],  // Mengirim data balasan
                'name' => $this->replyData['name'],    // Nama pengirim
            ]);
    }
}
