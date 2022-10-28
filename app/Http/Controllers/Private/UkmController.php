<?php

namespace App\Http\Controllers\Private;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\news;
use App\Models\UKM;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UkmController extends Controller
{
    public function list()
    {
        $data = UKM::select(
            'ukm.id',
            'ukm.nama',
            'ukm.jenis',
            'ukm.singkatan_ukm',
            'ukm.foto_ukm',
            'ukm.keterangan',
            'ukm.created_at',
        )
        ->where('ukm.id', Auth::user()->id_ukm)
        ->first();

        $data['anggota'] = User::select('name', 'email')->where('id_ukm', Auth::user()->id_ukm)->get();

        return response()->json($data, 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['string'],
            'content' => ['string'],
            'image' => ['mimes:jpg,png,jpeg'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('image')) {
            $nama_file = $this->uploadFile($request->image);

        }

        $data = Announcement::create([
            'id_ukm' => Auth::user()->id_ukm,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $nama_file,
            'total_hit' => 0,
        ])->id;

        if ($data) {
            return response()->json($data, 200);
        }

        return response()->json(false, 500);
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id_news)
    {
        // Validiasi data yang diberikan oleh frontend
        $validator = Validator::make($request->all(), [
              // 'id_users' => ['required'],
              'id_ukm' => ['required'],
              'id_news_kategori' => ['required',],
              'title' => ['string'],
              'intro' => ['string'],
              'content' => ['string'],
              'foto_news' => ['mimes:jpg,png,jpeg'],
              'total_hit' => ['integer'],
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
        if (!is_numeric($id_news)){
            return response()->json([
                'data' => 'ID News: ' . $id_news,
                '__message' => 'News tidak berhasil diperbarui, ID artikel harus berupa Integer',
                '__func' => 'News update',
            ], 422);
        }

        // Cek jika ID News yang diberikan apakah tersedia di tabel
        if (news::where('id', $id_news)->exists()) {

            // Cek jika variabel "$request->foto_News" merupakan sebuah file
            if ($request->hasFile('foto_news')) {

                // Upload file gambar kedalam folder public dan kembalikan nama file 
                $nama_file = $this->uploadFile($request->foto_news);

                // Eksekusi pembaruan data News
                $query = news::where('id', $id_news)->update([
                    'id_ukm' =>  $request->id_ukm,
                    'id_news_kategori' =>  $request->id_news_kategori,
                    'title' =>  $request->title,
                    'intro' =>  $request->intro,
                    'content' =>  $request->content,
                    'foto_news' => $nama_file,
                    'total_hit' =>  $request->total_hit
                ]);
            } else {

                 // Eksekusi pembaruan data News tanpa "foto News"
                 $query = news::where('id', $id_news)->update([
                    'id_ukm' =>  $request->id_ukm,
                    'id_news_kategori' =>  $request->id_news_kategori,
                    'title' =>  $request->title,
                    'intro' =>  $request->intro,
                    'content' =>  $request->content,
                    'total_hit' =>  $request->total_hit
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
     * Get Detail News
     * @OA\Get (
     *     path="/news/{id}",
     *     tags={"News"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *              *                     @OA\Property(
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
     *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *         )
     *     )
     * )
     */


    
    /*
    |--------------------------------------------------------------------------
    | DETAIL
    |--------------------------------------------------------------------------
    */
    public function detail($id_news)
    {
        // Cek jika ID News yang diberikan merupakan Integer
        if (!is_numeric($id_news)){
            return response()->json([
                'data' => 'ID News: ' . $id_news,
                '__message' => 'News tidak berhasil diambil, ID News harus berupa Integer',
                '__func' => 'News detail',
            ], 422);
        }

        // Cek jika ID News yang diberikan apakah tersedia di tabel
        if (news::where('id', $id_news)->exists()) {

            // Eksekusi pembaruan data News
            $query = news::where('id', $id_news)->first();
    
            // Jika eksekusi query berhasil maka berikan response success
            if ($query) {
                return response()->json([
                    'data' => $query,
                    '__message' => 'Detail News berhasil diambil',
                    '__func' => 'News detail',
                ], 200);
            }
    
            // Jika gagal seperti masalah koneksi atau apapun maka berikan response error
            return response()->json([
                'data' => $query,
                '__message' => 'News tidak berhasil diambil, coba kembali beberapa saat',
                '__func' => 'News detail',
            ], 500);
        }

        // Jika ID tidak tersedia maka tampilkan response error
        return response()->json([
            'data' => 'ID News: ' . $id_news,
            '__message' => 'News tidak berhasil diambil, ID News tidak ditemukan',
            '__func' => 'News detail',
        ], 500);
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */
    public function delete($id_news)
    {
        // Cek jika ID News yang diberikan merupakan Integer
        if (!is_numeric($id_news)){
            return response()->json([
                'data' => 'ID News: ' . $id_news,
                '__message' => 'News tidak berhasil dihapus, ID News harus berupa Integer',
                '__func' => 'News delete',
            ], 422);
        }

        // Cek jika ID News yang diberikan apakah tersedia di tabel
        if (news::where('id', $id_news)->exists()) {

            // Eksekusi penghapusan data News
            $query = news::where('id', $id_news)->delete();
    
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
            'data' => 'ID News: ' . $id_news,
            '__message' => 'News tidak berhasil dihapus, ID News tidak ditemukan',
            '__func' => 'News delete',
        ], 500);
    }
}
