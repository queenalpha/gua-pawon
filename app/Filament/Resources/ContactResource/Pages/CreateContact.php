<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('back')
                ->label('Kembali')
                ->url(ContactResource::getUrl())
                ->icon('heroicon-o-arrow-left')
                ->color('gray'),
            $this->getCreateFormAction()
                ->label('Simpan')
                ->icon('heroicon-o-check')
                ->color('primary'),
        ];
    }
}
