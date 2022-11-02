<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class GalleryImageController extends Controller
{
    public function list()
    {
        $data = GalleryImage::select(
            'gallery_image.id',
            'gallery_image.foto',
            'gallery_image.judul',
            'gallery_image.deskripsi',
            'gallery_image.created_at'
        )
        ->where('gallery_image.id_ukm', Auth::user()->id_ukm)
        ->paginate(5);

        return response()->json($data, 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => ['string'],
            'deskripsi' => ['string'],
            'foto' => ['mimes:jpg,png,jpeg'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('foto')) {
            $nama_file = $this->uploadFile($request->foto);
        } else {
            return response()->json("Mohon masukkan foto", 422);
        }

        $data = GalleryImage::create([
            'id_ukm' => Auth::user()->id_ukm,
            'foto' => $nama_file,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ])->id;

        if ($data) {
            return response()->json($data, 200);
        }

        return response()->json(false, 500);
    }

    public function update(Request $request, $gallery_image_id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => ['string'],
            'deskripsi' => ['string'],
            'foto' => ['mimes:jpg,png,jpeg'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!is_numeric($gallery_image_id)) {
            return response()->json("Id galeri foto harus bilangan bulat", 422);
        }

        if (GalleryImage::where('id', $gallery_image_id)->exists()) {
            if ($request->hasFile('foto')) {
                $nama_file = $this->uploadFile($request->foto);
                $data = GalleryImage::where('id', $gallery_image_id)->update([
                    'judul' =>  $request->judul,
                    'deskripsi' =>  $request->deskripsi,
                    'foto' => $nama_file,
                ]);
            } else {
                $data = GalleryImage::where('id', $gallery_image_id)->update([
                    'judul' =>  $request->judul,
                    'deskripsi' =>  $request->deskripsi,
                ]);
            }

            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("Galeri foto tidak ditemukan", 500);
    }

    public function detail($gallery_image_id)
    {
        if (!is_numeric($gallery_image_id)) {
            return response()->json("Id galeri foto harus bilangan bulat", 422);
        }

        if (GalleryImage::where('id', $gallery_image_id)->exists()) {
            $data = GalleryImage::where('id', $gallery_image_id)->first();

            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }
        
        return response()->json("Galeri foto tidak ditemukan", 500);
    }

    public function delete($gallery_image_id)
    {
        if (!is_numeric($gallery_image_id)) {
            return response()->json("Id galeri foto harus bilangan bulat", 422);
        }

        if (GalleryImage::where('id', $gallery_image_id)->exists()) {

            // Eksekusi penghapusan data News
            $data = GalleryImage::where('id', $gallery_image_id)->delete();

            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("Galeri foto tidak ditemukan", 500);
    }
}
