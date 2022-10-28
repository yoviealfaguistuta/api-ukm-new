<?php

namespace App\Http\Controllers;
use App\Models\GalleryImage;
use App\Models\GalleryVideo;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GalleryVideoController extends Controller
{
    public function highlight(Request $request)
    {
        $data = GalleryVideo::select(
            'gallery_video.id',
            'gallery_video.youtube_id',
        )
        ->where('gallery_video.id_ukm', $request->id_ukm)
        ->first();

        return response()->json($data, 200);
    }
}
