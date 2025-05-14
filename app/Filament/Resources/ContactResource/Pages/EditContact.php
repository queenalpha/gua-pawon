<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Mail\ContactReply;
use App\Models\Contact;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class EditContact extends EditRecord
{
    protected static string $resource = ContactResource::class;

    public function form(Form $form): Form
    {
        return parent::form($form);
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('send_reply')
                ->label('Kirim Balasan')
                ->icon('heroicon-o-paper-airplane')
                ->color('primary')
                ->requiresConfirmation()
                ->action(function () {
                    $contact = $this->record;
                    $replyMessage = $this->form->getState()['reply'];

                    if (!$replyMessage) {
                        Notification::make()
                            ->title('Balasan tidak boleh kosong.')
                            ->danger()
                            ->send();
                        return;
                    }

                    $replyData = [
                        'reply' => $replyMessage,
                        'name' => Str::title($contact->name),
                        'subject' => Str::title($contact->subject),
                    ];

                    // Kirim email
                    Mail::to($contact->email)->send(new ContactReply($replyData));

                    // Update status dan simpan
                    $contact->is_answer = true;
                    $contact->reply = $replyMessage;
                    $contact->save();

                    Notification::make()
                        ->title('Balasan berhasil dikirim.')
                        ->success()
                        ->send();

                    $this->redirect(ContactResource::getUrl());
                }),
        ];
    }
}
