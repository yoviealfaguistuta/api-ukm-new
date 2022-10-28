<?php

namespace App\Http\Controllers;
use App\Models\GalleryImage;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GalleryImageController extends Controller
{
    public function highlight(Request $request)
    {
        $data = GalleryImage::select(
            'gallery_image.id',
            'gallery_image.foto',
        )
        ->where('gallery_image.id_ukm', $request->id_ukm)
        ->limit(2)->get();

        return response()->json($data, 200);
    }

    public function main_home_gallery_image(Request $request)
    {
        $data = GalleryImage::select(
            'gallery_image.id',
            'gallery_image.foto',
            'gallery_image.judul',
            'gallery_image.deskripsi',
            'gallery_image.created_at',
        )
        ->where('gallery_image.id_ukm', $request->id_ukm)
        ->paginate(4);

        return response()->json($data, 200);
    }
}
