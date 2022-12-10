<?php

namespace App\Http\Controllers\Private;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\news;
use App\Models\UKM;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Profile
     * @OA\Get (
     *     path="/private/users/profile",
     *     tags={"User"},
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
    public function profile()
    {
        $data = User::where('id', Auth::user()->id)->first();

        return response()->json($data, 200);
    }

    /**
     * @OA\Post(
     * path="/private/users/profile",
     * summary="Perbarui akun",
     * description="Perbarui informasi akun",
     * tags={"User"},
    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"name","email", "position"},
    *               type="object", 
    *               @OA\Property(
    *                  property="foto_profile",
    *                  type="file",
    *                  description="Foto Profile",
    *               ),
    *               @OA\Property(
    *                  property="name",
    *                  type="string",
    *                  description="Nama",
    *               ),
    *               @OA\Property(
    *                  property="email",
    *                  type="string",
    *                  description="Email",
    *               ),
    *               @OA\Property(
    *                  property="position",
    *                  type="string",
    *                  description="Jabatan Enum: (ketua, wakil, anggota)",
    *               ),
    *               @OA\Property(
    *                  property="password",
    *                  type="string",
    *                  description="Password",
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
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'position' => ['required', 'string'],
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->position == "ketua" || $request->position == "wakil" || $request->position != "anggota") {
            if ($request->hasFile('foto_profile')) {
                $nama_file = $this->uploadFile($request->foto_profile);
    
                if ($request->password == '' || $request->password == null) {
                    $data = User::where('id', Auth::user()->id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'foto_profile' => $nama_file,
                        'position' => $request->position,
                    ]);
                } else {
                    $data = User::where('id', Auth::user()->id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'foto_profile' => $nama_file,
                        'position' => $request->position,
                        'password' => Hash::make($request->password),
                    ]);
                }
                
            } else {
                if ($request->password == '' || $request->password == null) {
                    $data = User::where('id', Auth::user()->id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'position' => $request->position,
                    ]);
                } else {
                    $data = User::where('id', Auth::user()->id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'position' => $request->position,
                        'password' => Hash::make($request->password),
                    ]);
                }
            }
    
            return response()->json($data, 200);
        }

        return response()->json("Jabatan hanya terdapat 'ketua', 'wakil' dan 'anggota'", 500);
    }

    /**
     * @OA\Post(
     * path="/private/users/tambah-anggota",
     * summary="Membuat Anggota UKM",
     * description="Membuat anggota UKM baru",
     * tags={"User"},

    *   @OA\RequestBody(
    *       @OA\MediaType(
    *           mediaType="multipart/form-data",
    *           @OA\Schema(
    *               required={"id_ukm", "foto_profile", "name","email", "position", "password"},
    *               type="object", 
    *               @OA\Property(
    *                  property="foto_profile",
    *                  type="file",
    *                  description="Foto Profile",
    *               ),
    *               @OA\Property(
    *                  property="id_ukm",
    *                  type="integer",
    *                  description="Id UKM",
    *               ),
    *               @OA\Property(
    *                  property="name",
    *                  type="string",
    *                  description="Nama",
    *               ),
    *               @OA\Property(
    *                  property="email",
    *                  type="string",
    *                  description="Email",
    *               ),
    *               @OA\Property(
    *                  property="position",
    *                  type="string",
    *                  description="Jabatan Enum: (ketua, wakil, anggota)",
    *               ),
    *               @OA\Property(
    *                  property="password",
    *                  type="string",
    *                  description="Password",
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
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'position' => ['required', 'string'],
            'password' => ['required', 'string'],
            'foto_profile' => ['mimes:jpg,png,jpeg'],
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (User::where('email', $request->email)->exists()) {
            return response()->json('Email sudah digunakan', 500);
        }

        if ($request->position == "ketua" || $request->position == "wakil" || $request->position != "anggota") {
            $nama_file = $this->uploadFile($request->foto_profile);

            $data = User::create([
                'id_ukm' => Auth::user()->id_ukm,
                'name' => $request->name,
                'email' => $request->email,
                'foto_profile' => $nama_file,
                'position' => $request->position,
                'password' => Hash::make($request->password),
            ]);
    
            return response()->json($data, 200);
        }
        return response()->json("Jabatan hanya terdapat 'ketua', 'wakil' dan 'anggota'", 500);
    }

    /**
     * @OA\Delete(
     * path="/private/users/delete-anggota/{id_users}",
     * summary="Menghapus anggota UKM",
     * description="Menghapus informasi anggota UKM",
     * tags={"User"},
     *     @OA\Parameter(
     *         name="id_users",
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
    public function delete_anggota($users_id)
    {
        if (!is_numeric($users_id)) {
            return response()->json("Id anggota harus bilangan bulat", 422);
        }

        if (User::where('id', $users_id)->exists()) {

            $data = User::where('id', $users_id)->delete();

            return response()->json($data, 200);
        }

        return response()->json("Anggota tidak ditemukan", 500);
    }
}
