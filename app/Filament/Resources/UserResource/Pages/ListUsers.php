<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            \Filament\Pages\Actions\Action::make('Laporan pdf')
                ->url(fn() => route('download.tes'))
                ->openUrlInNewTab(),

            Actions\CreateAction::make(),
        ];
    }
}
