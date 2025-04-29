<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Notifications\Notification;
use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Log;

class EditArticle extends EditRecord
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('saveAsDraft')
                ->label('Simpan ke Draft')
                ->action(function () {
                    $data = $this->form->getState();
                    Log::info('Data form:', $data);

                    $this->record->fill($data); // isi ulang data dari form
                    $this->record->is_draft = true;
                    $this->record->save();

                    Log::info('Data tersimpan:', $this->record->toArray());

                    Notification::make()
                        ->title('Draft Berhasil Disimpan')
                        ->success()
                        ->send();
                })
                ->color('primary')
                ->size('lg')
                ->tooltip('Simpan artikel sebagai draft')
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Pastikan saat menyimpan data, kita set is_draft berdasarkan kebutuhan
        if (isset($this->saveAsDraft) && $this->saveAsDraft) {
            $data['is_draft'] = false;
        }
        return $data;
    }
}
