<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResearchResource\Pages;
use App\Models\Research;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\{TextInput, Textarea, DatePicker, FileUpload};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class ResearchResource extends Resource
{
    protected static ?string $model = Research::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-magnifying-glass';
    protected static ?string $navigationLabel = 'Research';

   public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('title')
            ->label('Judul')
            ->required(),

        Textarea::make('abstract')
            ->label('Abstract')
            ->required(),

        TextInput::make('author')
            ->label('Author')
            ->required(),

        DatePicker::make('publish_date')
            ->label('Publish Date')
            ->required(),

        TextInput::make('url_doi')
            ->label('DOI URL')
            ->url()
            ->required(),
    ])
    ->columns(1); // Menampilkan semua input secara vertikal (berbaris ke bawah)
}
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->limit(50),
                Tables\Columns\TextColumn::make('author')->searchable()->limit(30),
                Tables\Columns\TextColumn::make('publish_date')->date()->sortable(),
                Tables\Columns\TextColumn::make('url_doi')->label('DOI URL')->searchable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make() // Tombol Delete
                    ->label('Delete')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->action(function (Research $record) {
                        $record->delete(); // Menghapus kategori
                    }),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResearch::route('/'),
            'create' => Pages\CreateResearch::route('/create'),
            'edit' => Pages\EditResearch::route('/{record}/edit'),
        ];
    }
}
