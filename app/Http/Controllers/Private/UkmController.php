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
    /**
     * @OA\Get(
     * path="/private/ukm",
     * summary="Detail UKM",
     * tags={"UKM"},
     * description="Informasi lengkap data UKM",
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
    public function detail()
    {
        $data = UKM::where('ukm.id', Auth::user()->id_ukm)->first();

        $data['anggota'] = User::select('id', 'name', 'email', 'foto_profile', 'position')->where('id_ukm', Auth::user()->id_ukm)->get();

        return response()->json($data, 200);
    }

    /**
     * @OA\Post(
     * path="/private/ukm",
     * summary="Perbarui UKM",
     * description="Perbarui informasi UKM",
     * tags={"UKM"},
    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"nama", "singkatan_ukm", "tentang_kami", "visi", "misi", "tujuan", "facebook", "instagram", "twitter", "whatsapp"},
    *               type="object", 
    *               @OA\Property(
    *                  property="foto_ukm",
    *                  type="file",
    *                  description="Logo UKM",
    *               ),
    *               @OA\Property(
    *                  property="struktur_organisasi",
    *                  type="file",
    *                  description="Stuktur Organisasi UKM",
    *               ),
    *               @OA\Property(
    *                  property="nama",
    *                  type="string",
    *                  description="Nama UKM",
    *               ),
    *               @OA\Property(
    *                  property="singkatan_ukm",
    *                  type="string",
    *                  description="Singkatan UKM",
    *               ),
    *               @OA\Property(
    *                  property="tentang_kami",
    *                  type="string",
    *                  description="Tentang UKM",
    *               ),
    *               @OA\Property(
    *                  property="visi",
    *                  type="string",
    *                  description="Visi UKM",
    *               ),
    *               @OA\Property(
    *                  property="misi",
    *                  type="string",
    *                  description="Misi UKM",
    *               ),
    *               @OA\Property(
    *                  property="tujuan",
    *                  type="string",
    *                  description="Tujuan UKM",
    *               ),
    *               @OA\Property(
    *                  property="facebook",
    *                  type="string",
    *                  description="Link facebook UKM",
    *               ),
    *               @OA\Property(
    *                  property="instagram",
    *                  type="string",
    *                  description="Link instagram UKM",
    *               ),
    *               @OA\Property(
    *                  property="twitter",
    *                  type="string",
    *                  description="Link twitter UKM",
    *               ),
    *               @OA\Property(
    *                  property="whatsapp",
    *                  type="string",
    *                  description="Nomor whatsapp UKM",
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
    public function update(Request $request)
    {
        if (Auth::user()->position === 'anggota') {
            return response()->json("Hanya ketua atau wakil ketua yang dapat merubah informasi UKM", 500);
        }

        $validator = Validator::make($request->all(), [
            'nama' => ['string', 'required'],
            'singkatan_ukm' => ['string', 'required'],
            'facebook' => ['string', 'required'],
            'instagram' => ['string', 'required'],
            'twitter' => ['string', 'required'],
            'whatsapp' => ['string', 'required'],
            'foto_news' => ['mimes:jpg,png,jpeg'],
            'struktur_organisasi' => ['mimes:jpg,png,jpeg'],
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        // return response()->json($request->tentang_kami, 422);

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

        if ($request->hasFile('struktur_organisasi')) {
            $nama_file = $this->uploadFile($request->struktur_organisasi);

            $data = UKM::where('id', Auth::user()->id_ukm)->update([
                'struktur_organisasi' => $nama_file,
            ]);
        }

        return response()->json($data, 200);
    }
}
