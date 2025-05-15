<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class ArticleTable extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    protected function getTableHeading(): string
    {
        return 'Daftar Postingan';
    }

    protected function getTableQuery(): Builder
    {
        return Article::query()->latest()->where('is_draft', false);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('title')
                ->label('Judul')
                ->sortable()
                ->searchable()
                ->limit(50),
            Tables\Columns\TextColumn::make('category.category_name')->label('Kategori')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('view_count')->label('Views')->sortable()->label('Dilihat'),
            Tables\Columns\TextColumn::make('likes')->label('Likes')->sortable()->label('Disukai'),
            Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y')->sortable()->label('Tgl. Dibuat'),
        ];
    }
}
