<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Article;
use App\Models\Research;
use App\Models\Contact;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $articleCount = Article::where('is_draft', false)->count();
        $researchCount = Research::count();
        $contactCount = Contact::where('is_answer', false)->count();

        return [
            Stat::make('Research', $researchCount),
            Stat::make('Post', $articleCount),
            Stat::make('Inbox', $contactCount),
        ];
    }
}
