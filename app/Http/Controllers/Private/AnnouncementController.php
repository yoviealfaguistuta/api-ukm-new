<?php

namespace App\Http\Controllers\Private;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    /**
     * Daftar Pengumuman
     * @OA\Get (
     *     path="/private/announcement",
     *     tags={"Announcement"},
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
        $data = Announcement::select(
            'announcement.id',
            'announcement.id_ukm',
            'announcement.title',
            'announcement.image',
            'announcement.total_hit',
            'announcement.created_at',
        )
        ->where('announcement.id_ukm', Auth::user()->id_ukm)
        ->paginate(5);

        return response()->json($data, 200);
    }

    /**
     * @OA\Post(
     * path="/private/announcement",
     * summary="Membuat Pengumuman",
     * description="Membuat informasi Pengumuman",
     * tags={"Announcement"},

    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"image","title", "content"},
    *               type="object", 
    *               @OA\Property(
    *                  property="image",
    *                  type="file",
    *                  description="Gambar pengumuman",
    *               ),
    *               @OA\Property(
    *                  property="title",
    *                  type="string",
    *                  description="Judul informasi pengumuman",
    *               ),
    *               @OA\Property(
    *                  property="content",
    *                  type="string",
    *                  description="Isi pengumuman (Use WYSWIG)",
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
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('image')) {
            $nama_file = $this->uploadFile($request->image);

        }

        $data = Announcement::create([
            'id_ukm' => Auth::user()->id_ukm,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $nama_file,
            'total_hit' => 0,
        ])->id;

        if ($data) {
            return response()->json($data, 200);
        }

        return response()->json(false, 500);
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    /**
     * @OA\Post(
     * path="/private/announcement/{announcement_id}",
     * summary="Perbarui Pengumuman",
     * description="Perbarui informasi Pengumuman",
     * tags={"Announcement"},
     *     @OA\Parameter(
     *         name="announcement_id",
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
    *               required={"image","title", "content"},
    *               type="object", 
    *               @OA\Property(
    *                  property="image",
    *                  type="file",
    *                  description="Gambar pengumuman",
    *               ),
    *               @OA\Property(
    *                  property="title",
    *                  type="string",
    *                  description="Judul informasi pengumuman",
    *               ),
    *               @OA\Property(
    *                  property="content",
    *                  type="string",
    *                  description="Isi pengumuman (Use WYSWIG)",
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
    public function update(Request $request, $announcement_id)
    {
        $validator = Validator::make($request->all(), [
              'title' => ['required', 'string', 'required'],
              'content' => ['required', 'string', 'required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!is_numeric($announcement_id)){
            return response()->json("Id pengumuman harus bilangan bulat", 422);
        }

        if (Announcement::where('id', $announcement_id)->exists()) {

            if ($request->hasFile('image')) {
                $nama_file = $this->uploadFile($request->image);

                $data = Announcement::where('id', $announcement_id)->update([
                    'title' =>  $request->title,
                    'content' =>  $request->content,
                    'image' => $nama_file,
                ]);
            } else {
                 $data = Announcement::where('id', $announcement_id)->update([
                    'title' =>  $request->title,
                    'content' =>  $request->content,
                ]);
            }
    
            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("Pengumuman tidak ditemukan", 500);
    }

    /**
     * @OA\Get(
     * path="/private/announcement/{announcement_id}",
     * summary="Detail pengumuman",
     * description="Informasi lengkap data pengumuman",
     * tags={"Announcement"},
     *     @OA\Parameter(
     *         name="announcement_id",
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
    public function detail($announcement_id)
    {
        if (!is_numeric($announcement_id)){
            return response()->json("Id pengumuman harus bilangan bulat", 422);
        }

        if (Announcement::where('id', $announcement_id)->exists()) {
            $data = Announcement::where('id', $announcement_id)->first();
    
            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("Pengumuman tidak ditemukan", 500);
    }

    /**
     * @OA\Delete(
     * path="/private/announcement/{announcement_id}",
     * summary="Menghapus pengumuman",
     * description="Menghapus informasi pengumuman",
     * tags={"Announcement"},
     *     @OA\Parameter(
     *         name="announcement_id",
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
    public function delete($announcement_id)
    {
        if (!is_numeric($announcement_id)){
            return response()->json("Id pengumuman harus bilangan bulat", 422);
        }

        if (Announcement::where('id', $announcement_id)->exists()) {
            $data = Announcement::where([['id', $announcement_id], ['id_ukm', Auth::user()->id_ukm]])->delete();
    
            if ($data) {
                return response()->json($data, 200);
            }
    
            return response()->json($data, 500);
        }

        return response()->json("Pengumuman tidak ditemukan", 500);
    }
}
