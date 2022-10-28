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
    public function detail()
    {
        $data = UKM::where('ukm.id', Auth::user()->id_ukm)->first();

        $data['anggota'] = User::select('name', 'email', 'foto_profile', 'position')->where('id_ukm', Auth::user()->id_ukm)->get();

        return response()->json($data, 200);
    }

    public function update(Request $request)
    {
        if (Auth::user()->position === 'anggota') {
            return response()->json("Hanya ketua atau wakil ketua yang dapat merubah informasi UKM", 500);
        }

        $validator = Validator::make($request->all(), [
            'nama' => ['string'],
            'singkatan_ukm' => ['string'],
            'tentang_kami' => ['string'],
            'visi' => ['string'],
            'misi' => ['string'],
            'tujuan' => ['string'],
            'facebook' => ['string'],
            'instagram' => ['string'],
            'twitter' => ['string'],
            'whatsapp' => ['string'],
            'foto_news' => ['mimes:jpg,png,jpeg'],
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('foto_ukm')) {
            $nama_file = $this->uploadFile($request->foto_ukm);

            $data = UKM::where('id', Auth::user()->id_ukm)->update([
                'nama' => $request->nama,
                'singkatan_ukm' => $request->singkatan_ukm,
                'tentang_kami' => $request->tentang_kami,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'tujuan' => $request->tujuan,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'whatsapp' => $request->whatsapp,
                'foto_ukm' => $nama_file,
            ]);
        } else {
            $data = UKM::where('id', Auth::user()->id_ukm)->update([
                'nama' => $request->nama,
                'singkatan_ukm' => $request->singkatan_ukm,
                'tentang_kami' => $request->tentang_kami,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'tujuan' => $request->tujuan,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'whatsapp' => $request->whatsapp,
            ]);
        }

        return response()->json($data, 200);
    }
}
