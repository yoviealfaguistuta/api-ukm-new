<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\PendaftaranAnggota;
use App\Models\UKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranAnggotaController extends Controller
{
    /**
     * Daftar Pendaftaran Anggota
     * @OA\Get (
     *     path="/private/pendaftaran-anggota/list",
     *     tags={"Pendaftaran Anggota"},
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
        $data = PendaftaranAnggota::where('id_ukm', Auth::user()->id_ukm)->paginate(5);

        return response()->json($data, 200);
    }

    /**
     * @OA\Delete(
     * path="/private/pendaftaran-anggota/{id_pendaftaran_anggota}",
     * summary="Menghapus pendaftaran anggota",
     * description="Menghapus informasi pendaftaran anggota",
     * tags={"Agenda"},
     *     @OA\Parameter(
     *         name="id_pendaftaran_anggota",
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
    public function delete($id_pendaftaran_anggota)
    {
        if (PendaftaranAnggota::where('id_ukm', Auth::user()->id_ukm)->exists()) {
            $data = PendaftaranAnggota::where([['id_ukm', Auth::user()->id_ukm], ['id', $id_pendaftaran_anggota]])->delete();

            return response()->json($data, 200);
        }
        return response()->json('Pendaftaran tidak ditemukan', 500);
        
    }
}
