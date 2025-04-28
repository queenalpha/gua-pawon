<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReply;

class EditContact extends EditRecord
{
    protected static string $resource = ContactResource::class;

    // protected function getFormSchema(): array
    // {
    //     return [
    //         TextInput::make('name')
    //             ->disabled(),

    //         TextInput::make('email')
    //             ->disabled(),

    //         Textarea::make('message')
    //             ->disabled(),

    //         Textarea::make('reply_message')
    //             ->label('Reply Message')
    //             ->required()
    //             ->placeholder('Type your reply here...'),
    //     ];
    // }

    protected function getActions(): array
    {
        return [
            Action::make('send_reply')
                ->label('Send Reply')
                ->action(function () {
                    $contact = $this->record;
                    $replyMessage = $this->form->getState()['reply'];
                    // dd($replyMessage);

                    // Pastikan ContactReply menerima data yang sesuai
                    $replyData = [
                        'reply' => $replyMessage,  // Balasan yang diisi
                        'name' => $contact->name,  // Nama pengirim
                        'email' => $contact->email // Email penerima
                    ];

                    // Kirim email ke pengirim kontak dengan balasan
                    Mail::to($contact->email)->send(new ContactReply($replyData));

                    // Setelah mengirim email, set status kontak ke "Replied" dan simpan perubahan
                    $contact->is_answer = true;
                    $contact->reply = $replyMessage;
                    $contact->save();

                    // Redirect ke halaman daftar kontak setelah email terkirim
                    return redirect('/admin/contacts');
                })
                ->color('primary'),
        ];
    }
}
