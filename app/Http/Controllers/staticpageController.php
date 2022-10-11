<?php

namespace App\Http\Controllers;

use App\Models\static_page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| CRUD Tabel static_page
|--------------------------------------------------------------------------
|
| artikelController digunakan untuk mengelola tabel static_page. Dapat diakses dalam
| router grup "/staticpage".
|
| - LIST - Menampilkan daftar static_page
| - DETAIL - Menampilkan detail data static_page
| - CREATE - Membuat data static_page baru
| - UPDATE - Memperbarui data static_page
| - DELETE - Menghapus data static_page
|
*/

class staticpageController extends Controller
{
     /**
     * Get List Static Page
     * @OA\Get (
     *     path="/staticpage",
     *     tags={"Static Page"},
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


    /*
    |--------------------------------------------------------------------------
    | LIST
    |--------------------------------------------------------------------------
    */
    public function list()
    {
        // Jika tabel static_page gak ada isi maka 
        if (static_page::count() > 0) {
            $data = static_page::get();

            return response()->json([
                'data' => $data,
                '__message' => 'Daftar Static Page kategori berhasil diambil',
                '__func' => 'Static Page kategori List',
            ], 200);
        }

        return response()->json([
            'data' => 'Static Page tidak ditemukan',
            '__message' => 'Daftar Static Page kategori berhasil diambil',
            '__func' => 'Static Page List',
        ], 200);
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */
    public function create(Request $request)
    {
        // Validiasi data yang diberikan oleh frontend
        $validator = Validator::make($request->all(), [
            'id_ukm' =>['required',],
            'title' => ['string'],
            'intro' => ['string'],
            'content' => ['string'],
        ]);

        // Jika data yang di validasi tidak sesuai maka berikan response error 422
        if ($validator->fails()) {
            return response()->json([
                'data' => $validator->errors(),
                '__message' => 'Static Page tidak berhasil dibuat, data yang diberikan tidak valid',
                '__func' => 'Static Page create',
            ], 422);
        }

    

        // Eksekusi pembuatan data static_page
        $query = static_page::create([
            'id_ukm' => $request->id_ukm,
            'title' =>  $request->title,
            'intro' =>  $request->intro,
            'content' =>  $request->content,
        ]);

        // Jika eksekusi query berhasil maka berikan response success
        if ($query) {
            return response()->json([
                'data' => $query,
                '__message' => 'Static Page berhasil dibuat',
                '__func' => 'Static Page create',
            ], 200);
        }

        // Jika gagal seperti masalah koneksi atau apapun maka berikan response error
        return response()->json([
            'data' => $query,
            '__message' => 'Static Page tidak berhasil dibuat, coba kembali beberapa saat',
            '__func' => 'Static Page create',
        ], 500);
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id_static_page)
    {
        // Validiasi data yang diberikan oleh frontend
        $validator = Validator::make($request->all(), [
            'id_ukm' =>['required',],
            'title' => ['string'],
            'intro' => ['string'],
            'content' => ['string'],
        ]);

        // Jika data yang di validasi tidak sesuai maka berikan response error 422
        if ($validator->fails()) {
            return response()->json([
                'data' => $validator->errors(),
                '__message' => 'Static Page tidak berhasil diperbarui, data yang diberikan tidak valid',
                '__func' => 'Static Page update',
            ], 422);
        }

        // Cek jika ID static_page yang diberikan merupakan Integer
        if (!is_numeric($id_static_page)){
            return response()->json([
                'data' => 'ID Static Page: ' . $id_static_page,
                '__message' => 'Static Page tidak berhasil diperbarui, ID Static Page harus berupa Integer',
                '__func' => 'Static Page update',
            ], 422);
        }

        // Cek jika ID static_page yang diberikan apakah tersedia di tabel
        if (static_page::where('id', $id_static_page)->exists()) {

          {

                 // Eksekusi pembaruan data static_page
                 $query = static_page::where('id', $id_static_page)->update([
                    'id_ukm' => $request->id_ukm,
                    'title' =>  $request->title,
                    'intro' =>  $request->intro,
                    'content' =>  $request->content,  
                ]);
            }
    
            // Jika eksekusi query berhasil maka berikan response success
            if ($query) {
                return response()->json([
                    'data' => $query,
                    '__message' => 'Staic Page berhasil diperbarui',
                    '__func' => 'Staic Page update',
                ], 200);
            }
    
            // Jika gagal seperti masalah koneksi atau apapun maka berikan response error
            return response()->json([
                'data' => $query,
                '__message' => 'Staic Page  tidak berhasil diperbarui, coba kembali beberapa saat',
                '__func' => 'Staic Page  update',
            ], 500);
        }

        // Jika ID tidak tersedia maka tampilkan response error
        return response()->json([
            'data' => 'ID Staic Page : ' . $id_static_page,
            '__message' => 'Id Static Page tidak berhasil diperbarui, ID Static Page tidak ditemukan',
            '__func' => 'Static Page update',
        ], 500);
    }

    
       /**
     * Get Detail Static Page
     * @OA\Get (
     *     path="/staticpage/{id}",
     *     tags={"Static Page"},
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
    public function detail($id_static_page)
    {
        // Cek jika ID static_page yang diberikan merupakan Integer
        if (!is_numeric($id_static_page)){
            return response()->json([
                'data' => 'ID Static Page: ' . $id_static_page,
                '__message' => 'Static Page tidak berhasil diambil, ID Static Page harus berupa Integer',
                '__func' => 'Static Page detail',
            ], 422);
        }

        // Cek jika ID static_page yang diberikan apakah tersedia di tabel
        if (static_page::where('id', $id_static_page)->exists()) {

            // Eksekusi pembaruan data static_page
            $query = static_page::where('id', $id_static_page)->first();
    
            // Jika eksekusi query berhasil maka berikan response success
            if ($query) {
                return response()->json([
                    'data' => $query,
                    '__message' => 'Detail Static Page berhasil diambil',
                    '__func' => 'Static Page detail',
                ], 200);
            }
    
            // Jika gagal seperti masalah koneksi atau apapun maka berikan response error
            return response()->json([
                'data' => $query,
                '__message' => 'Static Page tidak berhasil diambil, coba kembali beberapa saat',
                '__func' => 'Static Page detail',
            ], 500);
        }

        // Jika ID tidak tersedia maka tampilkan response error
        return response()->json([
            'data' => 'ID Static Page: ' . $id_static_page,
            '__message' => 'Static Page tidak berhasil diambil, ID Static Page tidak ditemukan',
            '__func' => 'Static Page detail',
        ], 500);
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */
    public function delete($id_static_page)
    {
        // Cek jika ID static_page yang diberikan merupakan Integer
        if (!is_numeric($id_static_page)){
            return response()->json([
                'data' => 'ID Static Page: ' . $id_static_page,
                '__message' => 'Static Page tidak berhasil dihapus, ID Static Page  harus berupa Integer',
                '__func' => 'Static Page delete',
            ], 422);
        }

        // Cek jika ID static_page yang diberikan apakah tersedia di tabel
        if (static_page::where('id', $id_static_page)->exists()) {

            // Eksekusi penghapusan data static_page
            $query = static_page::where('id', $id_static_page)->delete();
    
            // Jika eksekusi query berhasil maka berikan response success
            if ($query) {
                return response()->json([
                    'data' => $query,
                    '__message' => 'Static Page berhasil dihapus',
                    '__func' => 'Static Page delete',
                ], 200);
            }
    
            // Jika gagal seperti masalah koneksi atau apapun maka berikan response error
            return response()->json([
                'data' => $query,
                '__message' => 'Static Page tidak berhasil dihapus, coba kembali beberapa saat',
                '__func' => 'Static Page delete',
            ], 500);
        }

        // Jika ID tidak tersedia maka tampilkan response error
        return response()->json([
            'data' => 'ID Static Page: ' . $id_static_page,
            '__message' => 'Static Page tidak berhasil dihapus, ID Static Page tidak ditemukan',
            '__func' => 'Static Page delete',
        ], 500);
    }
}
