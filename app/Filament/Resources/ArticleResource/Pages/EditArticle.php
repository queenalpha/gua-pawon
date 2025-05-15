<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Illuminate\Support\Str;

class EditArticle extends EditRecord
{
    protected static string $resource = ArticleResource::class;

    public bool $saveAsDraft = false;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Update slug if title has changed
        if ($data['title'] !== $this->record->title) {
            $slug = Str::slug($data['title']);
            $originalSlug = $slug;
            $counter = 2;

            while (\App\Models\Article::where('slug', $slug)->where('id_article', '!=', $this->record->id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            $data['slug'] = $slug;
        }

        if ($this->saveAsDraft) {
            $data['is_draft'] = true;
        } else {
            $data['is_draft'] = false;
        }

        return $data;
    }

    public function form(Form $form): Form
    {
        return parent::form($form);
    }

    public function getSaveFormAction(): Action
    {
        return parent::getSaveFormAction()
            ->label('Publish')
            ->icon('heroicon-o-check')
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
                    $this->save();
                })
                ->color('warning')
                ->icon('heroicon-o-pencil')
                ->requiresConfirmation(false),

            $this->getSaveFormAction(),
        ];
    }
}
