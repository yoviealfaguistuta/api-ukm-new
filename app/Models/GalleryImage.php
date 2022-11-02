<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = 'gallery_image';

    protected $fillable = [
        'id_ukm',
        'foto',
        'judul',
        'deskripsi'
    ];

    protected $primaryKey = 'id';
    protected $casts = [
        'created_at' => 'datetime:d M Y',
    ];
    protected $guarded = [];
}
