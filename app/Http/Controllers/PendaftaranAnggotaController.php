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
     * Pendaftaran anggota UKM
     * @OA\Get (
     *     path="/pendaftaran-anggota/daftar/{id_ukm}",
     *     tags={"Pendaftaran Anggota"},
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
     *                 property="_id",
     *                 type="boolean",
     *                 example="true"
     *             )
     *         )
     *     ),
     *     security={{ "apiAuth": {} }}
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
