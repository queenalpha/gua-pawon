<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms\Components\{TextInput, Textarea, Toggle};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    protected static ?string $pluralModelLabel = 'Pesan';
    protected static ?string $modelLabel = 'Pesan';
    protected static ?string $navigationLabel = 'Pesan';
    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->label('Nama')->disabled(),
            TextInput::make('email')->required()->email()->label('Email')->disabled(),
            TextInput::make('telp')->label('No. Telp')->maxLength(15)->disabled(),
            Textarea::make('subject')->required()->label('Subject')->disabled(),
            Toggle::make('is_answer')->default(false)->hidden(),
            Textarea::make('messages')->required()->label('Pesan Pertanyaan')->disabled()->rows(6),
            Textarea::make('reply')
                ->label('Balasan')
                ->placeholder('Tulis jawaban terkait pertanyaan tersebut...')
                ->required()
                ->rows(6)
                ->visible(fn(string $context) => $context === 'edit'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('is_answer')->hidden(),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y')->sortable(),
                Tables\Columns\TextColumn::make('name')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('telp')->label('No. Telp')->searchable(),
                Tables\Columns\TextColumn::make('subject')
                    ->label('Subject'),
                Tables\Columns\TextColumn::make('messages')
                    ->label('Pertanyaan')
                    ->limit(50),
                Tables\Columns\TextColumn::make('reply')
                    ->label('Jawaban Balasan')
                    ->limit(50),
                Tables\Columns\IconColumn::make('is_answer')->boolean()->label('Dijawab?')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Balas'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
    public static function canCreate(): bool
    {
        return false;
    }
}
