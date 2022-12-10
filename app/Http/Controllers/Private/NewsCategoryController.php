<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\artikel_kategori;
use App\Models\news_kategori;

/*
|--------------------------------------------------------------------------
| CRUD Tabel News
|--------------------------------------------------------------------------
|
| artikelController digunakan untuk mengelola tabel artikel. Dapat diakses dalam
| router grup "/artikel".
|
| - LIST - Menampilkan daftar News
| - DETAIL - Menampilkan detail data News
| - CREATE - Membuat data News baru
| - UPDATE - Memperbarui data News
| - DELETE - Menghapus data News
|
*/

class NewsCategoryController extends Controller
{
    /**
     * Daftar Kategori Berita
     * @OA\Get (
     *     path="/private/news-category",
     *     tags={"News Category"},
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
        $data = news_kategori::where('id_ukm', Auth::user()->id_ukm)->paginate(5);
        return response()->json($data, 200);
    }

    /**
     * @OA\Get(
     * path="/private/news-category/{news_category_id}",
     * summary="Detail Kategori Berita",
     * description="Informasi lengkap data kategori berita",
     * tags={"News Category"},
     *     @OA\Parameter(
     *         name="news_category_id",
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
    public function detail($news_category_id)
    {
        $data = news_kategori::where([['id_ukm', Auth::user()->id_ukm], ['id', $news_category_id]])->first();
        
        return response()->json($data, 200);
    }

    /**
     * @OA\Post(
     * path="/private/news-category",
     * summary="Membuat Kategori Berita",
     * description="Membuat informasi kategori berita",
     * tags={"News Category"},

    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"nama_kategori"},
    *               type="object", 
    *               @OA\Property(
    *                  property="nama_kategori",
    *                  type="string",
    *                  description="Nama kategori berita",
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
            'nama_kategori' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => $validator->errors(),
                '__message' => 'Kategori berita tidak berhasil dibuat, data yang diberikan tidak valid',
                '__func' => 'news category create',
            ], 422);
        }

        $data = news_kategori::create([
            'id_ukm' => Auth::user()->id_ukm,
            'nama_kategori' => $request->nama_kategori,
        ])->id;

        return response()->json([
            'data' => $data,
            '__message' => 'Kategori berita berhasil dibuat',
            '__func' => 'Artikel kategori create',
        ], 200);
    }

    /**
     * @OA\Post(
     * path="/private/news-category/{news_category_id}",
     * summary="Perbarui Kategori Berita",
     * description="Perbarui informasi kategori berita",
     * tags={"News Category"},
     *     @OA\Parameter(
     *         name="news_category_id",
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
    *               required={"nama_kategori"},
    *               type="object", 
    *               @OA\Property(
    *                  property="nama_kategori",
    *                  type="string",
    *                  description="Nama kategori berita",
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
    public function update($news_category_id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = news_kategori::where('id', $news_category_id)->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        if ($data) {
            return response()->json($data, 200);
        }

        return response()->json(false, 500);
    }

    /**
     * @OA\Delete(
     * path="/private/news-category/{news_category_id}",
     * summary="Menghapus Kategori Berita",
     * description="Menghapus informasi kategori berita",
     * tags={"News Category"},
     *     @OA\Parameter(
     *         name="news_category_id",
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
    public function delete($news_category_id)
    {
        // Cek jika ID News yang diberikan merupakan Integer
        if (!is_numeric($news_category_id)){
            return response()->json([
                'data' => 'ID News: ' . $news_category_id,
                '__message' => 'News tidak berhasil dihapus, ID News harus berupa Integer',
                '__func' => 'News delete',
            ], 422);
        }

        // Cek jika ID News yang diberikan apakah tersedia di tabel
        if (news_kategori::where('id', $news_category_id)->exists()) {

            // Eksekusi penghapusan data News
            $query = news_kategori::where('id', $news_category_id)->delete();
    
            // Jika eksekusi query berhasil maka berikan response success
            if ($query) {
                return response()->json([
                    'data' => $query,
                    '__message' => 'Kategori berita berhasil dihapus',
                    '__func' => 'News delete',
                ], 200);
            }
    
            // Jika gagal seperti masalah koneksi atau apapun maka berikan response error
            return response()->json([
                'data' => $query,
                '__message' => 'Kategori berita tidak berhasil dihapus, coba kembali beberapa saat',
                '__func' => 'News delete',
            ], 500);
        }

        // Jika ID tidak tersedia maka tampilkan response error
        return response()->json([
            'data' => 'ID kategori berita: ' . $news_category_id,
            '__message' => 'Kategori berita tidak berhasil dihapus, ID News tidak ditemukan',
            '__func' => 'News delete',
        ], 500);
    }
}
