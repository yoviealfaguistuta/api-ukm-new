<?php

namespace App\Http\Controllers;
use App\Models\GalleryImage;
use App\Models\news;
use App\Models\UKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GalleryImageController extends Controller
{

    /**
     * Menampilkan 1 galeri foto terbaru
     * @OA\Get (
     *     path="/gallery-image/highlight",
     *     tags={"Gallery Image"},
     *      @OA\Parameter(
     *          parameter="id_ukm",
     *          name="id_ukm",
     *          description="ID UKM",
     *          @OA\Schema(
     *              type="integer"
     *          ),
     *          in="query",
     *          required=true
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="_id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="nama",
     *                         type="string",
     *                         example="example nama"
     *                     ),
     *                     @OA\Property(
     *                         property="jenis",
     *                         type="enum",
     *                         example="example jenis"
     *                     ),
     *                     @OA\Property(
     *                         property="singkatan_ukm",
     *                         type="string",
     *                         example="example singkatan_ukm"
     *                     ),
      *                      @OA\Property(
     *                         property="foto_ukm",
     *                         type="text",
     *                         example="example foto_ukm"
     *                     ),          
     *                      @OA\Property(
     *                         property="keterangan",
     *                         type="string",
     *                         example="example keterangan"
     *                     ),
     *                     @OA\Property(
     *                         property="updated_at",
     *                         type="string",
     *                         example="2021-12-11T09:25:53.000000Z"
     *                     ),
     *                     @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                         example="2021-12-11T09:25:53.000000Z"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function highlight(Request $request)
    {
        if (!UKM::where('id', $request->id_ukm)->exists()) {
            return response()->json("UKM tidak ditemukan", 500);
        }
        
        if (GalleryImage::where('id_ukm', $request->id_ukm)->exists()) {
            $data = GalleryImage::select(
                'gallery_image.id',
                'gallery_image.foto',
            )
            ->where('gallery_image.id_ukm', $request->id_ukm)
            ->limit(6)->get();
    
            return response()->json($data, 200);
        }
        return response()->json(null, 500);
    }

    /**
     * Menampilkan daftar seluruh galeri foto
     * @OA\Get (
     *     path="/gallery-image/main-gallery-image",
     *     tags={"Gallery Image"},
     *      @OA\Parameter(
     *          parameter="id_ukm",
     *          name="id_ukm",
     *          description="ID UKM",
     *          @OA\Schema(
     *              type="integer"
     *          ),
     *          in="query",
     *          required=true
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="_id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="nama",
     *                         type="string",
     *                         example="example nama"
     *                     ),
     *                     @OA\Property(
     *                         property="jenis",
     *                         type="enum",
     *                         example="example jenis"
     *                     ),
     *                     @OA\Property(
     *                         property="singkatan_ukm",
     *                         type="string",
     *                         example="example singkatan_ukm"
     *                     ),
      *                      @OA\Property(
     *                         property="foto_ukm",
     *                         type="text",
     *                         example="example foto_ukm"
     *                     ),          
     *                      @OA\Property(
     *                         property="keterangan",
     *                         type="string",
     *                         example="example keterangan"
     *                     ),
     *                     @OA\Property(
     *                         property="updated_at",
     *                         type="string",
     *                         example="2021-12-11T09:25:53.000000Z"
     *                     ),
     *                     @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                         example="2021-12-11T09:25:53.000000Z"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function main_home_gallery_image(Request $request)
    {
        if (!UKM::where('id', $request->id_ukm)->exists()) {
            return response()->json("UKM tidak ditemukan", 500);
        }
        
        $data = GalleryImage::select(
            'gallery_image.id',
            'gallery_image.foto',
            'gallery_image.judul',
            'gallery_image.deskripsi',
            'gallery_image.created_at',
        )
        ->where([['gallery_image.id_ukm', $request->id_ukm], ['gallery_image.judul', 'LIKE', '%' . $request->judul . '%']])
        ->paginate(4);

        return response()->json($data, 200);
    }
}
