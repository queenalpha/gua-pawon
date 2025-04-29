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
        return [
            Stat::make('Unique views', '192.1k'),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
