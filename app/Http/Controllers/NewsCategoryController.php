<?php

namespace App\Http\Controllers;
use App\Models\news;
use App\Models\news_kategori;
use App\Models\UKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NewsCategoryController extends Controller
{
    /**
     * Menampikan 4 kategori berita secara random
     * @OA\Get (
     *     path="/news-category/highlight",
     *     tags={"News Category"},
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

        if (news_kategori::where('id_ukm', $request->id_ukm)->exists()) {
            $data = news_kategori::select(
                'news_kategori.id',
                'news_kategori.id_ukm',
                'news_kategori.nama_kategori',
            )
            ->where('news_kategori.id_ukm', $request->id_ukm)
            ->inRandomOrder()
            ->limit(4)->get();
    
            return response()->json($data, 200);
        }

        return response()->json("Data tidak ditemukan", 500);
        
    }
}
