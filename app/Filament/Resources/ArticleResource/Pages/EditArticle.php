<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Notifications\Notification;
use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArticle extends EditRecord
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('saveAsDraft')
                ->label('Simpan sebagai Draft')
                ->action(function () {
                    $this->record->is_draft = true;
                    $this->record->save();
                    Notification::make()
                        ->title('Draft Berhasil Disimpan')
                        ->success()  // Menandakan bahwa ini adalah notifikasi sukses
                        ->send();
                })
                ->color('secondary'),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Pastikan saat menyimpan data, kita set is_draft berdasarkan kebutuhan
        if (isset($this->saveAsDraft) && $this->saveAsDraft) {
            $data['is_draft'] = false; // Set kolom is_draft ke true
        }
        return $data;
    }
}
