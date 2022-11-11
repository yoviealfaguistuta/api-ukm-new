<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftaranAnggota extends Model
{
    protected $table = 'pendaftaran_anggota';

    protected $fillable = [
        'id_ukm',
        'nama',
        'prodi',
        'jurusan',
        'email',
        'no_hp',
        'alasan_bergabung',
    ];

    protected $primaryKey = 'id';
    protected $guarded = [];
}
