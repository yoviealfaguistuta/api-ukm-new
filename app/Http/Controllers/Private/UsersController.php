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
    public function profile()
    {
        $data = User::where('id', Auth::user()->id)->first();

        return response()->json($data, 200);
    }

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
