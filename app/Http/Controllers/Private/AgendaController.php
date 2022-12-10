<?php

namespace App\Http\Controllers\Private;
use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AgendaController extends Controller
{
    /**
     * Daftar Agenda
     * @OA\Get (
     *     path="/private/agenda",
     *     tags={"Agenda"},
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
        $data = Agenda::select(
            'agenda.id',
            'agenda.id_ukm',
            'agenda.title',
            'agenda.lokasi',
            'agenda.image',
            'agenda.tanggal',
            'agenda.waktu',
        )
        ->where('agenda.id_ukm', Auth::user()->id_ukm)
        ->paginate(5);

        return response()->json($data, 200);
    }

    /**
     * @OA\Post(
     * path="/private/agenda",
     * summary="Membuat Agenda",
     * description="Membuat informasi agenda",
     * tags={"Agenda"},

    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"image","title", "content", "lokasi", "tanggal", "waktu"},
    *               type="object", 
    *               @OA\Property(
    *                  property="image",
    *                  type="file",
    *                  description="Gambar agenda",
    *               ),
    *               @OA\Property(
    *                  property="title",
    *                  type="string",
    *                  description="Judul informasi agenda",
    *               ),
    *               @OA\Property(
    *                  property="content",
    *                  type="string",
    *                  description="Isi agenda (Use WYSWIG)",
    *               ),
    *               @OA\Property(
    *                  property="lokasi",
    *                  type="string",
    *                  description="Lokasi agenda",
    *               ),
    *               @OA\Property(
    *                  property="tanggal",
    *                  type="string",
    *                  description="Tanggal dimulai. Ex: YYYY-MM-DD (SQL Format Default)",
    *               ),
    *               @OA\Property(
    *                  property="waktu",
    *                  type="string",
    *                  description="Waktu dimulai. Ex: h:mm (Moment JS Format)",
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
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['string', 'required'],
            'content' => ['string', 'required'],
            'image' => ['mimes:jpg,png,jpeg', 'required'],
            'lokasi' => ['string', 'required'],
            'tanggal' => ['string', 'required'],
            'waktu' => ['string', 'required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('image')) {
            $nama_file = $this->uploadFile($request->image);

        }

        $data = Agenda::create([
            'id_ukm' => Auth::user()->id_ukm,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $nama_file,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ])->id;

        if ($data) {
            return response()->json($data, 200);
        }

        return response()->json(false, 500);
    }

    /**
     * @OA\Post(
     * path="/private/agenda/{agenda_id}",
     * summary="Perbarui agenda",
     * description="Perbarui informasi agenda",
     * tags={"Agenda"},
     *     @OA\Parameter(
     *         name="agenda_id",
     *         description="",
     *         in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *    ),
    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"image","title", "content", "lokasi", "tanggal", "waktu"},
    *               type="object", 
    *               @OA\Property(
    *                  property="image",
    *                  type="file",
    *                  description="Gambar agenda",
    *               ),
    *               @OA\Property(
    *                  property="title",
    *                  type="string",
    *                  description="Judul informasi agenda",
    *               ),
    *               @OA\Property(
    *                  property="content",
    *                  type="string",
    *                  description="Isi agenda (Use WYSWIG)",
    *               ),
    *               @OA\Property(
    *                  property="lokasi",
    *                  type="string",
    *                  description="Lokasi agenda",
    *               ),
    *               @OA\Property(
    *                  property="tanggal",
    *                  type="string",
    *                  description="Tanggal dimulai. Ex: YYYY-MM-DD (SQL Format Default)",
    *               ),
    *               @OA\Property(
    *                  property="waktu",
    *                  type="string",
    *                  description="Waktu dimulai. Ex: h:mm (Moment JS Format)",
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
    public function update(Request $request, $agenda_id)
    {
        $validator = Validator::make($request->all(), [
              'title' => ['required', 'string'],
              'lokasi' => ['required', 'string'],
              'tanggal' => ['required', 'string'],
              'waktu' => ['required', 'string'],
              'content' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!is_numeric($agenda_id)){
            return response()->json("Id agenda harus bilangan bulat", 422);
        }

        if (Agenda::where('id', $agenda_id)->exists()) {

            if ($request->hasFile('image')) {
                $nama_file = $this->uploadFile($request->image);

                $data = Agenda::where('id', $agenda_id)->update([
                    'title' =>  $request->title,
                    'content' =>  $request->content,
                    'image' => $nama_file,
                    'lokasi' =>  $request->lokasi,
                    'tanggal' =>  $request->tanggal,
                    'waktu' =>  $request->waktu,
                ]);
            } else {
                 $data = Agenda::where('id', $agenda_id)->update([
                    'title' =>  $request->title,
                    'content' =>  $request->content,
                    'lokasi' =>  $request->lokasi,
                    'tanggal' =>  $request->tanggal,
                    'waktu' =>  $request->waktu,
                ]);
            }
    
            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("Agenda tidak ditemukan", 500);
    }

    /**
     * @OA\Get(
     * path="/private/agenda/{agenda_id}",
     * summary="Detail agenda",
     * description="Informasi lengkap data agenda",
     * tags={"Agenda"},
     *     @OA\Parameter(
     *         name="agenda_id",
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
    public function detail($agenda_id)
    {
        if (!is_numeric($agenda_id)){
            return response()->json("Id pengumuman harus bilangan bulat", 422);
        }

        if (Agenda::where('id', $agenda_id)->exists()) {
            $data = Agenda::where('id', $agenda_id)->first();
    
            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("Agenda tidak ditemukan", 500);
    }

    /**
     * @OA\Delete(
     * path="/private/agenda/{agenda_id}",
     * summary="Menghapus agenda",
     * description="Menghapus informasi agenda",
     * tags={"Agenda"},
     *     @OA\Parameter(
     *         name="agenda_id",
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
    public function delete($agenda_id)
    {
        if (!is_numeric($agenda_id)){
            return response()->json("Id agenda harus bilangan bulat", 422);
        }

        if (Agenda::where('id', $agenda_id)->exists()) {
            $data = Agenda::where([['id', $agenda_id], ['id_ukm', Auth::user()->id_ukm]])->delete();
    
            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("Agenda tidak ditemukan", 500);
    }
}
