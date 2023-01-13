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

        if (news::where('id_ukm', $request->id_ukm)->exists()) {
            $data = news::select(
                'news.id',
                'news.id_ukm',
                'news.title',
                'news.foto_news',
                'news.created_at',
                'news_kategori.nama_kategori',
                'users.id AS user_id',
                'users.name',
                'users.foto_profile',
            )
            ->where('news.id_ukm', $request->id_ukm)
            ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
            ->orderBy('news.created_at', 'DESC')
            ->join('users', 'users.id', 'news.created_by')
            ->first();
    
            return response()->json($data, 200);
        }

        return response()->json("Data tidak ditemukan", 500);
        
    }

    /**
     * Menampilkan berita terpopuler berdasarkan jumlah dibaca
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

        if (news::where('id_ukm', $request->id_ukm)->exists()) {
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
            ->limit(4)->get();

            return response()->json($data, 200);
        }

        return response()->json("Data tidak ditemukan", 500);
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
     *      @OA\Parameter(
     *          parameter="id_kategori",
     *          name="id_kategori",
     *          description="Sortir berdasarkan ID Kategori Ex: 'semua'",
     *          @OA\Schema(
     *              type="string"
     *          ),
     *          in="query",
     *          required=false
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

        if (news::where('news.id_ukm', $request->id_ukm)->whereRaw('lower(news.title) like (?)',["%{$request->judul}%"])->exists()) {
            if ($request->id_kategori != 'semua') {
                // dd($request->id_kategori);
                // return response()->json(news::where([['news.id_ukm', $request->id_ukm], ['news.title', 'LIKE', '%' . $request->judul . '%'], ['news.id_news_kategori', (int)$request->id_kategori]])->exists(), 500);
                if (news::where([['news.id_ukm', $request->id_ukm], ['news.title', 'LIKE', '%' . $request->judul . '%'], ['news.id_news_kategori', (int)$request->id_kategori]])->exists()) {
                    $data = news::select(
                        'news.id',
                        'news.id_ukm',
                        'news.title',
                        'news.intro',
                        'news.foto_news',
                        'news.total_hit',
                        'news.created_at',
                        'news_kategori.nama_kategori',
                        'users.id AS user_id',
                        'users.name',
                        'users.foto_profile',
                    )
                    ->where([['news.id_ukm', $request->id_ukm], ['news.id_news_kategori', (int)$request->id_kategori]])
                    ->whereRaw('lower(news.title) like (?)',["%{$request->judul}%"])
                    ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
                    ->join('users', 'users.id', 'news.created_by')
                    ->orderBy('news.total_hit', 'DESC')
                    ->paginate(4);
                }

                return response()->json($data, 200);

            } else {
                
                $data = news::select(
                    'news.id',
                    'news.id_ukm',
                    'news.title',
                    'news.intro',
                    'news.foto_news',
                    'news.total_hit',
                    'news.created_at',
                    'news_kategori.nama_kategori',
                    'users.id AS user_id',
                    'users.name',
                    'users.foto_profile',
                )
                ->where('news.id_ukm', $request->id_ukm)
                ->whereRaw('lower(news.title) like (?)',["%{$request->judul}%"])
                ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
                ->join('users', 'users.id', 'news.created_by')
                ->orderBy('news.total_hit', 'DESC')
                ->paginate(4);
            }

            return response()->json($data, 200);
        }
        
        return response()->json(false, 200);
    }

    /**
     * Menampilkan detail berita 
     * @OA\Get (
     *     path="/news/detail/{news_id}",
     *     tags={"News"},
     *      @OA\Parameter(
     *          parameter="news_id",
     *          name="news_id",
     *          description="ID Berita",
     *          @OA\Schema(
     *              type="integer"
     *          ),
     *          in="path",
     *          required=true
     *      ),
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
    public function detail(Request $request, $news_id)
    {
        if (!UKM::where('id', $request->id_ukm)->exists()) {
            return response()->json("UKM tidak ditemukan", 500);
        }

        if (news::where([['id_ukm', $request->id_ukm], ['id', $news_id]])->exists()) {
            $data = news::select(
                'news.id',
                'news.id_ukm',
                'news.title',
                'news.content',
                'news.intro',
                'news.foto_news',
                'news.total_hit',
                'news.created_at',
                'news_kategori.id AS category_id',
                'news_kategori.nama_kategori',
                'users.id AS user_id',
                'users.name',
            )
            ->where([['news.id_ukm', $request->id_ukm], ['news.id', $news_id]])
            ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
            ->join('users', 'users.id', 'news.created_by')
            ->first();
    
            return response()->json($data, 200);
        }
    }

    /**
     * Menampilkan berita terkait berdasarkan id kategori
     * @OA\Get (
     *     path="/news/related",
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
     *      @OA\Parameter(
     *          parameter="category_id",
     *          name="category_id",
     *          description="ID Kategori Berita",
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
    public function related(Request $request)
    {
        if (!UKM::where('id', $request->id_ukm)->exists()) {
            return response()->json("UKM tidak ditemukan", 500);
        }

        if (news::where([['id_ukm', $request->id_ukm], ['id_news_kategori', $request->category_id]])->exists()) {
            $data = news::select(
                'news.id',
                'news.id_ukm',
                'news.title',
                'news.intro',
                'news.foto_news',
                'news.total_hit',
                'news.created_at',
                'news_kategori.nama_kategori',
            )
            ->where([['news.id_ukm', $request->id_ukm], ['news.id_news_kategori', $request->category_id]])
            ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
            ->orderBy('news.created_at', 'DESC')
            ->limit(3)->get();

            return response()->json($data, 200);
        } else if (news::where('id_ukm', $request->id_ukm)->exists()) {
            $data = news::select(
                'news.id',
                'news.id_ukm',
                'news.title',
                'news.intro',
                'news.foto_news',
                'news.total_hit',
                'news.created_at',
                'news_kategori.nama_kategori',
            )
            ->where('news.id_ukm', $request->id_ukm)
            ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
            ->orderBy('news.created_at', 'DESC')
            ->limit(3)->get();

            return response()->json($data, 200);
        }

        return response()->json("Data tidak ditemukan", 500);
    }
}
