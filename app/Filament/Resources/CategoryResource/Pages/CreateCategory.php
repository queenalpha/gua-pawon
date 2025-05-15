<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('back')
                ->label('Kembali')
                ->url(CategoryResource::getUrl())
                ->icon('heroicon-o-arrow-left')
                ->color('gray'),
            $this->getCreateFormAction()
                ->label('Simpan')
                ->icon('heroicon-o-check')
                ->color('primary'),
        ];
    }
}
