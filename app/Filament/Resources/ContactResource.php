<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Icons\Icon;
use Filament\Forms;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReply;
use Filament\Forms\Components\{TextInput, Textarea, Toggle};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Contacts';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->label('Name'),
            TextInput::make('email')->required()->email()->label('Email'),
            TextInput::make('telp')->label('Phone Number(Optional)')->maxLength(15),
            Textarea::make('subject')->required()->label('Subject'),
            Textarea::make('messages')->required()->label('Message'),
            Toggle::make('is_answer')->default(false)->hidden(),
            Textarea::make('reply')
                ->label('Reply')
                ->placeholder('Reply message... ')
                ->visible(fn(string $context) => $context === 'edit'),
        ]);
    }

    // public static function mutateFormDataBeforeUpdate(array $data): array
    // {
    //     // Jika ada balasan, kirim email balasan
    //     if (isset($data['reply']) && $data['reply']) {
    //         $contact = Contact::find($data['id']);
    //         $replyData = [
    //             'reply' => $data['reply'], // Balasan yang diisi
    //             'name' => $contact->name,  // Nama pengirim
    //             'email' => $contact->email, // Email penerima
    //         ];

    //         Mail::to($contact->email)->send(new ContactReply($replyData));
    //     }

    //     return $data;
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('is_answer')->hidden(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y'),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable(),
                Tables\Columns\TextColumn::make('telp')->sortable(),
                Tables\Columns\TextColumn::make('subject')
                    ->label('subject'),
                Tables\Columns\TextColumn::make('messages')
                    ->label('Message')
                    ->limit(50),
                Tables\Columns\TextColumn::make('reply')
                    ->label('Reply')
                    ->limit(50),
                Tables\Columns\IconColumn::make('is_answer')->boolean()->label('Answered?'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
