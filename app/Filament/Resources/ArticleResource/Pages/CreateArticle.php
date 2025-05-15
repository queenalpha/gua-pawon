<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Illuminate\Support\Str;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;

    public bool $saveAsDraft = false;

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


    public function form(Form $form): Form
    {
        return parent::form($form);
    }

    public function getCreateFormAction(): \Filament\Actions\Action
    {
        return parent::getCreateFormAction()
            ->label('Publish')
            ->icon('heroicon-o-paper-airplane')
            ->color('success')
            ->successRedirectUrl(ArticleResource::getUrl());
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('back')
                ->label('Kembali')
                ->url(ArticleResource::getUrl())
                ->icon('heroicon-o-arrow-left')
                ->color('gray'),
            Action::make('saveAsDraft')
                ->label('Simpan ke Draft')
                ->action(function () {
                    $this->saveAsDraft = true;
                    $this->create();
                    Notification::make()
                        ->title('Draft Berhasil Disimpan')
                        ->success()
                        ->send();
                })
                ->color('warning')
                ->icon('heroicon-o-pencil')
                ->requiresConfirmation(false),
            $this->getCreateFormAction() // Publish button
        ];
    }
}
