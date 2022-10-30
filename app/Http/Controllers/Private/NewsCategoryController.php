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
    public function list()
    {
        $data['category'] = news_kategori::where('id_ukm', Auth::user()->id_ukm)->get();
        return response()->json([
            'data' => $data,
            '__message' => 'Daftar Artikel kategori berhasil diambil',
            '__func' => 'Artikel kategori List',
        ], 200);
    }

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
}
