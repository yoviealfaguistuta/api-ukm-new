<?php

namespace App\Http\Controllers;
use App\Models\UKM;

class UkmController extends Controller
{
    public function list()
    {
        $data = UKM::select(
            'ukm.id',
            'ukm.nama',
            'ukm.foto_ukm',
            'ukm.keterangan',
        )
        ->paginate(6);

        return response()->json($data, 200);
    }
}
