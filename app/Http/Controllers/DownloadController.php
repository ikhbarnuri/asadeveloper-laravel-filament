<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DownloadController extends Controller
{
    public function downloadImage($postId)
    {
        $data = Media::query()
            ->select('id', 'file_name')
            ->where('model_id', $postId)
            ->first();

        $content = Storage::disk('public')->path($data->id . '/' . $data->file_name);

        return response()->download($content);
    }
}
