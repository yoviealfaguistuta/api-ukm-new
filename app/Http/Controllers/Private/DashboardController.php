<?php

namespace App\Http\Controllers\Private;
use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\GalleryImage;
use App\Models\news;
use App\Models\news_kategori;
use App\Models\UKM;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['statistik']['agenda'] = Agenda::where('id_ukm', Auth::user()->id_ukm)->count();
        $data['statistik']['berita'] = news::where('id_ukm', Auth::user()->id_ukm)->count();
        $data['statistik']['kategori_berita'] = news_kategori::where('id_ukm', Auth::user()->id_ukm)->count();
        $data['statistik']['pengumuman'] = Announcement::where('id_ukm', Auth::user()->id_ukm)->count();
        $data['statistik']['galeri_foto'] = GalleryImage::where('id_ukm', Auth::user()->id_ukm)->count();
        $data['statistik']['galeri_video'] = GalleryImage::where('id_ukm', Auth::user()->id_ukm)->count();
        $data['statistik']['anggota'] = User::where('id_ukm', Auth::user()->id_ukm)->count();
        $data['ukm'] = UKM::where('id', Auth::user()->id_ukm)->first();
        $data['anggota'] = User::where([['id_ukm', Auth::user()->id_ukm], ['position', '!=' , 'ketua'], ['position', '!=' , 'wakil']])->inRandomOrder()->limit(3)->get();

        return response()->json($data, 200);
    }
}
