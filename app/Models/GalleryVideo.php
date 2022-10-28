<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryVideo extends Model
{
    protected $table = 'gallery_video';
	
	protected $fillable = [
        'id_ukm',
        'youtube_id',
        'judul',
        'deskripsi'
    ];

	protected $primaryKey = 'id';
	
	protected $guarded = [];
}
