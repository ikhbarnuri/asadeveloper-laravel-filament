<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\User;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function getRedirectUrl(): string
    {
        $name = Auth::user()->name;
        Notification::make()
            ->success()
            ->title('Post Created By ' . $name)
            ->body('New Post Has Been Saved')
            ->sendToDatabase(User::query()->whereNot('id', \auth()->user()->id)->get());

        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
