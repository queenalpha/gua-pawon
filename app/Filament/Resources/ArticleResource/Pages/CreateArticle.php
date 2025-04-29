<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Actions\CreateAction;
use Illuminate\Support\Str;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $slug = Str::slug($data['title']);
        $originalSlug = $slug;
        $counter = 2;

        while (\App\Models\Article::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $data['slug'] = $slug;

        if ($this->saveAsDraft) {
            $data['is_draft'] = true;
        }

        return $data;
    }

    public bool $saveAsDraft = false;

    public function form(Form $form): Form
    {
        return parent::form($form);
    }

    public function getCreateFormAction(): \Filament\Actions\Action
    {
        return parent::getCreateFormAction()
            ->label('Publish')
            ->successRedirectUrl(ArticleResource::getUrl());
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('saveAsDraft')
                ->label('Simpan sebagai Draft')
                ->action(function () {
                    $this->saveAsDraft = true;
                    $this->create();
                    Notification::make()
                        ->title('Draft Berhasil Disimpan')
                        ->success()  // Menandakan bahwa ini adalah notifikasi sukses
                        ->send();
                })
                ->color('secondary'),
        ];
    }
}
