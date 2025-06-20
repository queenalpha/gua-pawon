<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\{TextInput, RichEditor, FileUpload, Select,};
use Filament\Forms\Form;
use Filament\Tables\Filters\SelectFilter;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\Builder;


class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;
    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';
    protected static ?string $pluralModelLabel = 'Postingan';
    protected static ?string $modelLabel = 'Postingan';
    protected static ?string $navigationLabel = 'Postingan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Title
                TextInput::make('title')
                    ->required()
                    ->label('Judul')
                    ->columnSpan(2)
                    ->placeholder('Masukkan judul'),

                // Kategori
                Select::make('id_categories')
                    ->label('Kategori')
                    ->placeholder('Pilih Kategori')
                    ->relationship('category', 'category_name')
                    // ---untuk bisa tambah kategori lewat aricle page
                    // ->live()
                    // ->createOptionForm([
                    //     TextInput::make('category_name')
                    //         ->required()
                    //         ->label('New Category Name'),
                    // ])
                    // ->afterStateUpdated(function ($state, callable $set) {
                    //     if ($state) {
                    //         $set('id_categories', $state);
                    //     }
                    // })
                    ->required()
                    ->columnSpan(2), // Lebar lebih besar

                // Cover
                FileUpload::make('cover')
                    ->image()
                    ->imageEditor()
                    ->previewable(true)
                    ->disk('public')
                    ->directory('covers')
                    ->label('Cover Foto')
                    ->hint('Ukuran yang direkomendasikan: 1200 x 400 px (JPG atau PNG)')
                    ->helperText('Maks. file: 5MB.')
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('3:1')
                    ->imageResizeTargetWidth(1200)
                    ->imageResizeTargetHeight(400)
                    ->maxSize(5000) // Max size = 5MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->nullable()
                    ->columnSpan(2), // Lebar lebih besar

                // Content (Membuat lebih besar)
                RichEditor::make('content')
                    ->label('Konten')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('image-article')
                    ->fileAttachmentsVisibility('public')
                    ->disableGrammarly()
                    ->required() // Membuat editor lebih besar
                    ->placeholder('Tulis konten disini')
                    ->columnSpan(2), // Lebar lebih besar
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            // ->query(function (Builder $query) {
            //     return $query->withoutGlobalScopes([
            //         SoftDeletingScope::class,
            //     ]);
            // })
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('category.category_name')->label('Category')->searchable()->sortable()->label('Kategori'),
                Tables\Columns\TextColumn::make('view_count')->label('Views')->label('Dilihat')->sortable(),
                Tables\Columns\TextColumn::make('likes')->label('Likes')->label('Disukai')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y')->sortable()->label('Tgl. Dibuat'),
            ])
            ->filters([
                // Filter untuk Draft (is_draft)
                SelectFilter::make('is_draft')
                    ->label('Draft Status')
                    ->options([
                        '1' => 'Draft',
                        '0' => 'Published',
                    ]),
                //filter soft delete
                TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(), // Untuk hard delete
                Tables\Actions\RestoreAction::make(), // Untuk restore soft deleted article
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
