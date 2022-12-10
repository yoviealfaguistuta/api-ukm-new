<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\UKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AgendaController extends Controller
{
    /**
     * Menampilkan 1 agenda terbaru
     * @OA\Get (
     *     path="/agenda/highlight",
     *     tags={"Agenda"},
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
    public function highlight(Request $request)
    {
        if (!UKM::where('id', $request->id_ukm)->exists()) {
            return response()->json("UKM tidak ditemukan", 500);
        }
        
        if (Agenda::where('id_ukm', $request->id_ukm)->exists()) {
            $data = Agenda::select(
                'agenda.id',
                'agenda.id_ukm',
                'agenda.title',
                'agenda.tanggal',
                'agenda.image',
                'agenda.created_at',
            )
            ->where('agenda.id_ukm', $request->id_ukm)
            ->first();
    
            return response()->json($data, 200);
        }
        return response()->json(null, 500);
    }

    /**
     * Menampilkan detail agenda
     * @OA\Get (
     *     path="/agenda/detail/{agenda_id}",
     *     tags={"Agenda"},
     *     @OA\Parameter(
     *          parameter="agenda_id",
     *          name="agenda_id",
     *          description="ID Agenda",
     *          @OA\Schema(
     *              type="integer"
     *          ),
     *          in="path",
     *          required=true
     *      ),
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
    public function detail(Request $request, $agenda_id)
    {
        if (!UKM::where('id', $request->id_ukm)->exists()) {
            return response()->json("UKM tidak ditemukan", 500);
        }
        
        if (Agenda::where([['id_ukm', $request->id_ukm], ['id', $agenda_id]])->exists()) {
            $data = Agenda::select(
                'agenda.id',
                'agenda.id_ukm',
                'agenda.title',
                'agenda.content',
                'agenda.image',
                'agenda.lokasi',
                'agenda.tanggal',
                'agenda.waktu',
                'agenda.created_at',
            )
            ->where('agenda.id_ukm', $request->id_ukm)
            ->first();
    
            return response()->json($data, 200);
        }
        return response()->json(null, 500);
    }
}
