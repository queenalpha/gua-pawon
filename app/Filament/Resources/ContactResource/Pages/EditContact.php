<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReplyMail;

class EditContact extends EditRecord
{
    protected static string $resource = ContactResource::class;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('send_reply')
                ->label('Send Reply')
                ->action(function (Contact $contact) {
                    // Balasan email yang ingin dikirim
                    $replyMessage = 'Gua pawon berasal dari Cipatat'; // Ganti dengan logika balasan yang diinginkan

                    // Mengirimkan balasan email
                    Mail::to($contact->email)->send(new ContactReplyMail($contact, $replyMessage));

                    // Update status pesan menjadi sudah dijawab
                    $contact->update(['is_answer' => true]);

                    // Notifikasi sukses
                    // $this->notify('success', 'Reply sent successfully!');
                }),
        ];
    }
}
