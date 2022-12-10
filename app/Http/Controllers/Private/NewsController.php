<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\news;
use App\Models\news_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Daftar Agenda
     * @OA\Get (
     *     path="/private/news",
     *     tags={"News"},
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
            ->where('news.id_ukm', Auth::user()->id_ukm)
            ->join('news_kategori', 'news_kategori.id', 'news.id_news_kategori')
            ->paginate(5);

            return response()->json($data, 200);
    }

    /**
     * @OA\Post(
     * path="/private/news",
     * summary="Membuat Berita",
     * description="Membuat informasi berita",
     * tags={"News"},

    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"foto_news","id_news_kategori", "title", "intro", "content"},
    *               type="object", 
    *               @OA\Property(
    *                  property="foto_news",
    *                  type="file",
    *                  description="Gambar berita",
    *               ),
    *               @OA\Property(
    *                  property="id_news_kategori",
    *                  type="string",
    *                  description="Id kategori berita",
    *               ),
    *               @OA\Property(
    *                  property="title",
    *                  type="string",
    *                  description="Judul berita",
    *               ),
    *               @OA\Property(
    *                  property="intro",
    *                  type="string",
    *                  description="Kata pembuka",
    *               ),
    *               @OA\Property(
    *                  property="content",
    *                  type="string",
    *                  description="isi berita (WYSWIG)",
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
            'id_news_kategori' => ['required',],
            'title' => ['string', 'required'],
            'intro' => ['string', 'required'],
            'content' => ['string', 'required'],
            'foto_news' => ['mimes:jpg,png,jpeg', 'required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('foto_news')) {
            $nama_file = $this->uploadFile($request->foto_news);
        }

        DB::beginTransaction();

        if (!news_kategori::where('id', $request->id_news_kategori)->exists()) {
            return response()->json("Kategori berita tidak ditemukan", 500);
        }

        try {
            $data = news::create([
                'id_ukm' => Auth::user()->id_ukm,
                'id_news_kategori' => $request->id_news_kategori,
                'title' => $request->title,
                'intro' => $request->intro,
                'content' => $request->content,
                'foto_news' => $nama_file,
                'total_hit' => 0,
                'created_by' => Auth::user()->id,
            ])->id;

            DB::commit();
            if ($data) {
                return response()->json($data, 200);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                $e->getMessage()
            ], 500);
        }
    }

    /**
     * @OA\Post(
     * path="/private/news/{news_id}",
     * summary="Perbarui Berita",
     * description="Perbarui informasi berita",
     * tags={"News"},
     *     @OA\Parameter(
     *         name="news_id",
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
    *               required={"id_news_kategori", "title", "intro", "content"},
    *               type="object", 
    *               @OA\Property(
    *                  property="foto_news",
    *                  type="file",
    *                  description="Gambar berita",
    *               ),
    *               @OA\Property(
    *                  property="id_news_kategori",
    *                  type="string",
    *                  description="Id kategori berita",
    *               ),
    *               @OA\Property(
    *                  property="title",
    *                  type="string",
    *                  description="Judul berita",
    *               ),
    *               @OA\Property(
    *                  property="intro",
    *                  type="string",
    *                  description="Kata pembuka",
    *               ),
    *               @OA\Property(
    *                  property="content",
    *                  type="string",
    *                  description="isi berita (WYSWIG)",
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
    public function update(Request $request, $id_news)
    {
        // Validiasi data yang diberikan oleh frontend
        $validator = Validator::make($request->all(), [
            'id_news_kategori' => ['string', 'required'],
            'title' => ['string', 'required'],
            'intro' => ['string', 'required'],
            'content' => ['string', 'required'],
        ]);

        // Jika data yang di validasi tidak sesuai maka berikan response error 422
        if ($validator->fails()) {
            return response()->json([
                'data' => $validator->errors(),
                '__message' => 'News tidak berhasil diperbarui, data yang diberikan tidak valid',
                '__func' => 'News update',
            ], 422);
        }

        // Cek jika ID News yang diberikan merupakan Integer
        if (!is_numeric($id_news)) {
            return response()->json([
                'data' => 'ID News: ' . $id_news,
                '__message' => 'News tidak berhasil diperbarui, ID artikel harus berupa Integer',
                '__func' => 'News update',
            ], 422);
        }

        // Cek jika ID News yang diberikan apakah tersedia di tabel
        if (news::where('id', $id_news)->exists()) {

            if (!news_kategori::where('id', $request->id_news_kategori)->exists()) {
                return response()->json("Kategori berita tidak ditemukan", 500);
            }
            // Cek jika variabel "$request->foto_News" merupakan sebuah file
            if ($request->hasFile('foto_news')) {

                // Upload file gambar kedalam folder public dan kembalikan nama file 
                $nama_file = $this->uploadFile($request->foto_news);

                // Eksekusi pembaruan data News
                $query = news::where('id', $id_news)->update([
                    'id_news_kategori' =>  $request->id_news_kategori,
                    'title' =>  $request->title,
                    'intro' =>  $request->intro,
                    'content' =>  $request->content,
                    'foto_news' => $nama_file,
                ]);
            } else {

                // Eksekusi pembaruan data News tanpa "foto News"
                $query = news::where('id', $id_news)->update([
                    'id_news_kategori' =>  $request->id_news_kategori,
                    'title' =>  $request->title,
                    'intro' =>  $request->intro,
                    'content' =>  $request->content,
                ]);
            }

            // Jika eksekusi query berhasil maka berikan response success
            if ($query) {
                return response()->json([
                    'data' => $query,
                    '__message' => 'News berhasil diperbarui',
                    '__func' => 'News update',
                ], 200);
            }

            // Jika gagal seperti masalah koneksi atau apapun maka berikan response error
            return response()->json([
                'data' => $query,
                '__message' => 'News tidak berhasil diperbarui, coba kembali beberapa saat',
                '__func' => 'News update',
            ], 500);
        }

        // Jika ID tidak tersedia maka tampilkan response error
        return response()->json([
            'data' => 'ID News: ' . $id_news,
            '__message' => 'News tidak berhasil diperbarui, ID News tidak ditemukan',
            '__func' => 'News update',
        ], 500);
    }

    /**
     * @OA\Get(
     * path="/private/news/{news_id}",
     * summary="Detail berita",
     * description="Informasi lengkap data berita",
     * tags={"News"},
     *     @OA\Parameter(
     *         name="news_id",
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
    public function detail($id_news)
    {
        if (!is_numeric($id_news)) {
            return response()->json([
                'data' => 'ID News: ' . $id_news,
                '__message' => 'News tidak berhasil diambil, ID News harus berupa Integer',
                '__func' => 'News detail',
            ], 422);
        }

        if (news::where('id', $id_news)->exists()) {

            $data = news::where('id', $id_news)->first();

            if ($data) {
                return response()->json($data, 200);
            }

            return response()->json($data, 500);
        }

        return response()->json("Berita tidak berhasil diambil, ID News tidak ditemukan", 500);
    }

/**
     * @OA\Delete(
     * path="/private/news/{news_id}",
     * summary="Menghapus berita",
     * description="Menghapus informasi berita",
     * tags={"News"},
     *     @OA\Parameter(
     *         name="news_id",
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
    public function delete($news_id)
    {
        // Cek jika ID News yang diberikan merupakan Integer
        if (!is_numeric($news_id)) {
            return response()->json([
                'data' => 'ID News: ' . $news_id,
                '__message' => 'News tidak berhasil dihapus, ID News harus berupa Integer',
                '__func' => 'News delete',
            ], 422);
        }

        // Cek jika ID News yang diberikan apakah tersedia di tabel
        if (news::where('id', $news_id)->exists()) {

            // Eksekusi penghapusan data News
            $query = news::where('id', $news_id)->delete();

            // Jika eksekusi query berhasil maka berikan response success
            if ($query) {
                return response()->json([
                    'data' => $query,
                    '__message' => 'News berhasil dihapus',
                    '__func' => 'News delete',
                ], 200);
            }

            // Jika gagal seperti masalah koneksi atau apapun maka berikan response error
            return response()->json([
                'data' => $query,
                '__message' => 'News tidak berhasil dihapus, coba kembali beberapa saat',
                '__func' => 'News delete',
            ], 500);
        }

        // Jika ID tidak tersedia maka tampilkan response error
        return response()->json([
            'data' => 'ID News: ' . $news_id,
            '__message' => 'News tidak berhasil dihapus, ID News tidak ditemukan',
            '__func' => 'News delete',
        ], 500);
    }
}
