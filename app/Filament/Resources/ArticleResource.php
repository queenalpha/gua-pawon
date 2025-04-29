<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\{TextInput, RichEditor, FileUpload, Toggle, Select, Hidden};
use Filament\Forms\Form;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\Action;
use Filament\Resources\Resource;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables;
use FilamentTiptapEditor\TiptapEditor;


class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;
    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';
    protected static ?string $navigationLabel = 'Articles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                Select::make('id_categories')
                    ->label('Category')
                    ->relationship('category', 'category_name')
                    ->createOptionForm([
                        TextInput::make('category_name')
                            ->required()
                            ->label('New Category Name'),
                    ])
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $set('id_categories', $state);
                        }
                    })
                    ->required(),
                RichEditor::make('content')
                    ->label('Content')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('image-article')
                    ->fileAttachmentsVisibility('public')
                    ->required(),
                FileUpload::make('cover')
                    ->image()
                    ->imageEditor()
                    ->previewable(true)
                    ->disk('public')
                    ->directory('covers')
                    ->label('Cover Image')
                    ->hint('Disarankan ukuran 1200 x 400 px, format JPG atau PNG.')
                    ->helperText('Ukuran maksimal 5MB.')
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('3:1')
                    ->imageResizeTargetWidth(1200)
                    ->imageResizeTargetHeight(400)
                    ->maxSize(5120) // Max size = 5MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png']) // Hanya JPG & PNG
                    ->nullable(),
                // Toggle::make('is_draft')->label('Save as Draft'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                // Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('category.category_name')->label('Category')->searchable(),
                // Tables\Columns\IconColumn::make('is_draft')->boolean()->label('Draft?'),
                Tables\Columns\TextColumn::make('view_count')->label('Views')->sortable(),
                Tables\Columns\TextColumn::make('cover')->label('Path cover'),
                Tables\Columns\TextColumn::make('likes')->label('Likes')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y')->sortable(),
            ])
            ->filters([  // Tambahkan filter di sini
                SelectFilter::make('is_draft')
                    ->label('Draft Status')
                    ->options([
                        '1' => 'Draft',  // 1 berarti Draft
                        '0' => 'Published',  // 0 berarti Published
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make() // Tombol Delete
                    ->label('Delete')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->action(function (Article $record) {
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
