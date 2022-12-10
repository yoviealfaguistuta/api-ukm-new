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
    /**
     * Daftar Galeri Video
     * @OA\Get (
     *     path="/private/gallery-video",
     *     tags={"Gallery Video"},
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

    /**
     * @OA\Post(
     * path="/private/gallery-video",
     * summary="Membuat Galeri Video",
     * description="Membuat informasi galeri video",
     * tags={"Gallery Video"},

    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"youtube_id","judul", "deskripsi"},
    *               type="object", 
    *               @OA\Property(
    *                  property="youtube_id",
    *                  type="string",
    *                  description="Id youtube",
    *               ),
    *               @OA\Property(
    *                  property="judul",
    *                  type="string",
    *                  description="Judul informasi galeri video",
    *               ),
    *               @OA\Property(
    *                  property="deskripsi",
    *                  type="string",
    *                  description="Isi galeri video",
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

    /**
     * @OA\Post(
     * path="/private/gallery-video/{gallery_video_id}",
     * summary="Perbarui Galeri Video",
     * description="Perbarui informasi galeri video",
     * tags={"Gallery Video"},
     *     @OA\Parameter(
     *         name="gallery_video_id",
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
    *               required={"youtube_id","judul", "deskripsi"},
    *               type="object", 
    *               @OA\Property(
    *                  property="youtube_id",
    *                  type="string",
    *                  description="Id youtube",
    *               ),
    *               @OA\Property(
    *                  property="judul",
    *                  type="string",
    *                  description="Judul informasi galeri video",
    *               ),
    *               @OA\Property(
    *                  property="deskripsi",
    *                  type="string",
    *                  description="Isi galeri video",
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
    public function update(Request $request, $gallery_video_id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => ['string', 'required'],
            'deskripsi' => ['string', 'required'],
            'youtube_id' => ['string', 'required'],
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

    /**
     * @OA\Get(
     * path="/private/gallery-video/{gallery_video_id}",
     * summary="Detail Galeri Video",
     * description="Informasi lengkap data galeri video",
     * tags={"Gallery Video"},
     *     @OA\Parameter(
     *         name="gallery_video_id",
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

    /**
     * @OA\Delete(
     * path="/private/gallery-video/{gallery_video_id}",
     * summary="Menghapus Galeri Video",
     * description="Menghapus informasi galeri video",
     * tags={"Gallery Video"},
     *     @OA\Parameter(
     *         name="gallery_video_id",
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
