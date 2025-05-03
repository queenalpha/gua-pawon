<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ContactReply;

class EditContact extends EditRecord
{
    protected static string $resource = ContactResource::class;

    protected function getActions(): array
    {
        return [
            Action::make('send_reply')
                ->label('Send Reply')
                ->action(function () {
                    $contact = $this->record;
                    $replyMessage = $this->form->getState()['reply'];

                    $replyData = [
                        'reply' => $replyMessage,
                        'name' => Str::title($contact->name),
                        'subject' => Str::title($contact->subject),
                    ];

                    // Kirim email ke pengirim kontak dengan balasan
                    Mail::to($contact->email)->send(new ContactReply($replyData));

                    // Setelah mengirim email, set status kontak ke "Replied" dan simpan perubahan
                    $contact->is_answer = true;
                    $contact->reply = $replyMessage;
                    $contact->save();

                    return redirect('/admin/contacts');
                })
                ->color('primary'),
        ];
    }
}
