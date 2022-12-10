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
    /**
     * Daftar Galeri Foto
     * @OA\Get (
     *     path="/private/gallery-image",
     *     tags={"Gallery Image"},
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="_id",
     *                 type="boolean",
     *                 example="true"
     *             )
     *         )
     *     ),
     *     security={{ "apiAuth": {} }}
     * )
     */
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

    /**
     * @OA\Post(
     * path="/private/gallery-image",
     * summary="Membuat Galeri Foto",
     * description="Membuat galeri foto",
     * tags={"Gallery Image"},

    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"foto","judul", "deskripsi"},
    *               type="object", 
    *               @OA\Property(
    *                  property="foto",
    *                  type="file",
    *                  description="Foto",
    *               ),
    *               @OA\Property(
    *                  property="judul",
    *                  type="string",
    *                  description="Judul informasi galeri foto",
    *               ),
    *               @OA\Property(
    *                  property="deskripsi",
    *                  type="string",
    *                  description="Deskripsi galeri foto",
    *               ),
    *           ),
    *       )
    *   ),
    *     @OA\Response(
    *         response=200,
    *         description="success",
    *         @OA\JsonContent(
    *             @OA\Property(
    *                 property="_id",
    *                 type="boolean",
    *                 example="true"
    *             )
    *         )
    *     ),
     *     security={{ "apiAuth": {} }}
     * )
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => ['string', 'required'],
            'deskripsi' => ['string', 'required'],
            'foto' => ['mimes:jpg,png,jpeg', 'required'],
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

    /**
     * @OA\Post(
     * path="/private/gallery-image/{gallery_image_id}",
     * summary="Perbarui Galeri Foto",
     * description="Perbarui informasi galeri foto",
     * tags={"Gallery Image"},
     *     @OA\Parameter(
     *         name="gallery_image_id",
     *         description="",
     *         in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *    ),
    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"foto","judul", "deskripsi"},
    *               type="object", 
    *               @OA\Property(
    *                  property="foto",
    *                  type="file",
    *                  description="Foto",
    *               ),
    *               @OA\Property(
    *                  property="judul",
    *                  type="string",
    *                  description="Judul informasi galeri foto",
    *               ),
    *               @OA\Property(
    *                  property="deskripsi",
    *                  type="string",
    *                  description="Deskripsi galeri foto",
    *               ),
    *           ),
    *       )
    *   ),
    *     @OA\Response(
    *         response=200,
    *         description="success",
    *         @OA\JsonContent(
    *             @OA\Property(
    *                 property="_id",
    *                 type="boolean",
    *                 example="true"
    *             )
    *         )
    *     ),
     *     security={{ "apiAuth": {} }}
     * )
     */
    public function update(Request $request, $gallery_image_id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => ['string', 'required'],
            'deskripsi' => ['string', 'required'],
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

    /**
     * @OA\Get(
     * path="/private/gallery-image/{gallery_image_id}",
     * summary="Detail Galeri Foto",
     * description="Informasi lengkap data galeri foto",
     * tags={"Gallery Image"},
     *     @OA\Parameter(
     *         name="gallery_image_id",
     *         description="",
     *         in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *    ),
    *     @OA\Response(
    *         response=200,
    *         description="success",
    *         @OA\JsonContent(
    *             @OA\Property(
    *                 property="_id",
    *                 type="boolean",
    *                 example="true"
    *             )
    *         )
    *     ),
    *     security={{ "apiAuth": {} }}
    * )
    */
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

    /**
     * @OA\Delete(
     * path="/private/gallery-image/{gallery_image_id}",
     * summary="Menghapus Galeri Foto",
     * description="Menghapus informasi galeri foto",
     * tags={"Gallery Image"},
     *     @OA\Parameter(
     *         name="gallery_image_id",
     *         description="",
     *         in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *    ),
    *     @OA\Response(
    *         response=200,
    *         description="success",
    *         @OA\JsonContent(
    *             @OA\Property(
    *                 property="_id",
    *                 type="boolean",
    *                 example="true"
    *             )
    *         )
    *     ),
    *     security={{ "apiAuth": {} }}
    * )
    */
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
