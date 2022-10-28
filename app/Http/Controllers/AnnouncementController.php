<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    public function highlight(Request $request)
    {
        $data = Announcement::select(
            'announcement.id',
            'announcement.id_ukm',
            'announcement.title',
            'announcement.image',
            'announcement.created_at',
        )
        ->where('announcement.id_ukm', $request->id_ukm)
        ->first();

        return response()->json($data, 200);
    }
}
