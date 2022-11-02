<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcement';

    protected $fillable = [
        'id_ukm',
        'title',
        'content',
        'image',
        'total_hit'
    ];

    protected $primaryKey = 'id';
    protected $casts = [
        'created_at' => 'datetime:d M Y - H:00',
    ];
    protected $guarded = [];
}
