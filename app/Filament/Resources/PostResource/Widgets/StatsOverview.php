<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    // protected static string $view = 'filament.resources.post-resource.widgets.stats-overview';

    protected function getCards(): array
    {
        return [
            Card::make('All Post', Post::all()->count()),
            Card::make('Publish', Post::query()->where('status', true)->count()),
            Card::make('Draft', Post::query()->where('status', false)->count()),
        ];
    }
}
