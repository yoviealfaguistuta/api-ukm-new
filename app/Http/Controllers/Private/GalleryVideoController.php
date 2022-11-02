<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\GalleryVideo;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GalleryVideoController extends Controller
{
    public function list()
    {
        $data = GalleryVideo::select(
            'gallery_video.id',
            'gallery_video.youtube_id',
            'gallery_video.judul',
            'gallery_video.deskripsi',
            'gallery_video.created_at'
        )
        ->where('gallery_video.id_ukm', Auth::user()->id_ukm)
        ->paginate(5);

        return response()->json($data, 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => ['required','string'],
            'deskripsi' => ['required','string'],
            'youtube_id' => ['required','string'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = GalleryVideo::create([
            'id_ukm' => Auth::user()->id_ukm,
            'youtube_id' => $request->youtube_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ])->id;

        if ($data) {
            return response()->json($data, 200);
        }

        return response()->json(false, 200);
    }
    public function update(Request $request, $gallery_video_id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => ['string'],
            'deskripsi' => ['string'],
            'youtube_id' => ['string'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!is_numeric($gallery_video_id)) {
            return response()->json("Id galeri video harus bilangan bulat", 422);
        }

        if (GalleryVideo::where('id', $gallery_video_id)->exists()) {
            $data = GalleryVideo::where('id', $gallery_video_id)->update([
                'judul' =>  $request->judul,
                'deskripsi' =>  $request->deskripsi,
                'youtube_id' => $request->youtube_id,
            ]);

            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("galeri video tidak ditemukan", 500);
    }

    public function detail($gallery_video_id)
    {
        if (!is_numeric($gallery_video_id)) {
            return response()->json("Id galeri video harus bilangan bulat", 422);
        }

        if (GalleryVideo::where('id', $gallery_video_id)->exists()) {
            $data = GalleryVideo::where('id', $gallery_video_id)->first();

            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }
        
        return response()->json("galeri video tidak ditemukan", 500);
    }

    public function delete($gallery_video_id)
    {
        if (!is_numeric($gallery_video_id)) {
            return response()->json("Id galeri video harus bilangan bulat", 422);
        }

        if (GalleryVideo::where('id', $gallery_video_id)->exists()) {

            // Eksekusi penghapusan data News
            $data = GalleryVideo::where('id', $gallery_video_id)->delete();

            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("galeri video tidak ditemukan", 500);
    }
}
