<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Filament\Resources\Pages\Page;
use Illuminate\Contracts\View\View;

class ShowPost extends Page
{
    protected static string $resource = PostResource::class;

    protected static ?string $title = 'Show';

    protected static string $view = 'filament.resources.post-resource.pages.show-post';

    protected function getData(): ?object
    {
        $id = request()->segment(4);

        return Post::query()->where('slug', $id)->first();
    }

    protected function getHeader(): ?View
    {
        $data = $this->getData();

        return \view('filament.resources.post-resource.pages.header-post', [
            'title' => $data->title
        ]);
    }
}
