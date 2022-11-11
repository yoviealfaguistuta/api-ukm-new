<?php

namespace App\Http\Controllers;
use App\Models\GalleryImage;
use App\Models\GalleryVideo;
use App\Models\news;
use App\Models\PendaftaranAnggota;
use App\Models\UKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PendaftaranAnggotaController extends Controller
{
    /**
     * Menampilkan 1 galeri video terbaru
     * @OA\Get (
     *     path="/gallery-video/highlight",
     *     tags={"Gallery Video"},
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
    public function daftar(Request $request, $id_ukm)
    {
        if (!UKM::where('id', $id_ukm)->exists()) {
            return response()->json("UKM tidak ditemukan", 500);
        }

        $data = PendaftaranAnggota::create([
            'id_ukm' => $id_ukm,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alasan_bergabung' => $request->alasan_bergabung,
        ]);

        if ($data) {
            return response()->json($data, 200);
        }
        return response()->json($data, 500);
    }
}
