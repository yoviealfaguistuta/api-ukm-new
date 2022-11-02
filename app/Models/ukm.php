<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UKM extends Model
{
    protected $table = 'ukm';
	
	protected $fillable = [
        'nama',
        'jenis', 
        'singkatan_ukm', 
        'keterangan',
        'foto_ukm'
    ];

	protected $primaryKey = 'id';
}