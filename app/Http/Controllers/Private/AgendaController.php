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
    public function list()
    {
        $data = Agenda::select(
            'agenda.id',
            'agenda.id_ukm',
            'agenda.title',
            'agenda.lokasi',
            'agenda.image',
            'agenda.tanggal',
        )
        ->where('agenda.id_ukm', Auth::user()->id_ukm)
        ->paginate(5);

        return response()->json($data, 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['string'],
            'content' => ['string'],
            'image' => ['mimes:jpg,png,jpeg'],
            'lokasi' => ['string'],
            'tanggal' => ['string'],
            'waktu' => ['string'],
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
