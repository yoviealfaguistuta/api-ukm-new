<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';

    protected $fillable = [
        'id_ukm',
        'title',
        'content',
        'image',
        'lokasi',
        'tanggal',
        'waktu'
    ];

    protected $primaryKey = 'id';
    protected $casts = [
        'created_at' => 'datetime:d M Y - H:00',
    ];
    protected $guarded = [];
}
