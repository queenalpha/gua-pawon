<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Actions\CreateAction;
use Illuminate\Support\Str;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['title']);

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
            ->label('Simpan')
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
                })
                ->color('secondary'),
        ];
    }
}
