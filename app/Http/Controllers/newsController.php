<?php

namespace App\Http\Controllers;
use App\Models\news;
use App\Models\UKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Menampikan 1 berita terbaru
     * @OA\Get (
     *     path="/news/highlight",
     *     tags={"News"},
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

        $data = news::select(
            'news.id',
            'news.id_ukm',
            'news.title',
            'news.foto_news',
            'news.created_at',
            'news_kategori.nama_kategori',
        )
        ->where('news.id_ukm', $request->id_ukm)
        ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
        ->orderBy('news.created_at', 'DESC')
        ->first();

        return response()->json($data, 200);
    }

    /**
     * Menampilkan berita terpopuler berdadarkan jumlah dibaca
     * @OA\Get (
     *     path="/news/popular",
     *     tags={"News"},
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
    public function popular(Request $request)
    {
        if (!UKM::where('id', $request->id_ukm)->exists()) {
            return response()->json("UKM tidak ditemukan", 500);
        }

        $data = news::select(
            'news.id',
            'news.id_ukm',
            'news.title',
            'news.foto_news',
            'news.total_hit',
            'news.created_at',
            'news_kategori.nama_kategori',
        )
        ->where('news.id_ukm', $request->id_ukm)
        ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
        ->orderBy('news.total_hit', 'DESC')
        ->limit(3)->get();

        return response()->json($data, 200);
    }

    /**
     * Menampilkan seluruh daftar berita 
     * @OA\Get (
     *     path="/news/main-home-news",
     *     tags={"News"},
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
    public function main_home_news(Request $request)
    {
        if (!UKM::where('id', $request->id_ukm)->exists()) {
            return response()->json("UKM tidak ditemukan", 500);
        }

        $data = news::select(
            'news.id',
            'news.id_ukm',
            'news.title',
            'news.foto_news',
            'news.total_hit',
            'news.created_at',
            'news_kategori.nama_kategori',
        )
        ->where('news.id_ukm', $request->id_ukm)
        ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
        ->orderBy('news.total_hit', 'DESC')
        ->paginate(4);

        return response()->json($data, 200);
    }
}
