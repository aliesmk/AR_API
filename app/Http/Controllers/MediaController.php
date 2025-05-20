<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function store(Request $request)
    {
        // store Image
        $imagePath = $request->file('image')->store('images', 'public');
        // store video
        $videoPath = $request->file('video')->store('videos', 'public');

        // store in Database
        $media = Media::create([
            'image_path' => $imagePath,
            'video_path' => $videoPath,
        ]);

        return response()->json([
            'message' => 'فایل‌ها با موفقیت آپلود شدند',
            'media' => $media,
        ], 201);

    }

}
