<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ukm')->insert([
            'id' => 1,
            'nama' => "Bidang Seni",
            'jenis' => 'ukm',
            'singkatan_ukm' => 'UKMBS',
            'foto_ukm' => "/assets/images/data/default-ukm.png",
        ]);

        DB::table('users')->insert([
            'id' => 1,
            'id_ukm' => 1,
            'name' => 'Finka Ramadhani',
            'position' => 'ketua',
            'foto_profile' => '/assets/images/data/default-user.png',
            'email' => 'finka@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
