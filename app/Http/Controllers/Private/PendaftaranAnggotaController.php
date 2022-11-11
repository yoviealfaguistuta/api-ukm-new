<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\PendaftaranAnggota;
use App\Models\UKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranAnggotaController extends Controller
{
    public function list()
    {
        $data = PendaftaranAnggota::where('id_ukm', Auth::user()->id_ukm)->paginate(5);

        return response()->json($data, 200);
    }

    public function delete($id_pendaftaran_anggota)
    {
        if (PendaftaranAnggota::where('id_ukm', Auth::user()->id_ukm)->exists()) {
            $data = PendaftaranAnggota::where([['id_ukm', Auth::user()->id_ukm], ['id', $id_pendaftaran_anggota]])->delete();

            return response()->json($data, 200);
        }
        return response()->json('Pendaftaran tidak ditemukan', 500);
        
    }
}
