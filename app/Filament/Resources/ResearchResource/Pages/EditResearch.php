<?php

namespace App\Filament\Resources\ResearchResource\Pages;

use App\Filament\Resources\ResearchResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditResearch extends EditRecord
{
    protected static string $resource = ResearchResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('back')
                ->label('Kembali')
                ->url(ResearchResource::getUrl())
                ->icon('heroicon-o-arrow-left')
                ->color('gray'),
            $this->getSaveFormAction()
                ->label('Simpan')
                ->icon('heroicon-o-check')
                ->color('primary'),
        ];
    }
}
