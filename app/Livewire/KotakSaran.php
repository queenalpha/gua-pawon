<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class KotakSaran extends Component
{
    public $email, $name, $telp, $subject, $messages;


    public function submit()
    {
        Contact::create([
            'email' => $this->email,
            'name' => $this->name,
            'telp' => $this->telp,
            'subject' => $this->subject,
            'messages' => $this->messages,
            'is_answer' => false,
            'reply' => null,
        ]);

        // Reset field
        $this->reset();

        // Kirim pesan sukses
        session()->flash('success', 'Pesan kamu sudah terkirim!');
    }

    public function render()
    {
        return view('livewire.kotak_saran');
    }
}
