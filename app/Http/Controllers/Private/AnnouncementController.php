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

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['string'],
            'content' => ['string'],
            'image' => ['mimes:jpg,png,jpeg'],
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
    public function update(Request $request, $announcement_id)
    {
        $validator = Validator::make($request->all(), [
              'title' => ['required', 'string'],
              'content' => ['required', 'string'],
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
