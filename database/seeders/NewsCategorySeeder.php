<?php

namespace Database\Seeders;

use App\Models\Pabrik;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_kategori')->insert([
            'id_ukm' => 1,
            'nama_kategori' => 'Mahasiswa',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 1,
            'nama_kategori' => 'Kegiatan',
        ]);

        // 2

        DB::table('news_kategori')->insert([
            'id_ukm' => 2,
            'nama_kategori' => 'Mahasiswa',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 2,
            'nama_kategori' => 'Kegiatan',
        ]);

        // 3

        DB::table('news_kategori')->insert([
            'id_ukm' => 3,
            'nama_kategori' => 'Mahasiswa',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 3,
            'nama_kategori' => 'Kegiatan',
        ]);

        // 4

        DB::table('news_kategori')->insert([
            'id_ukm' => 4,
            'nama_kategori' => 'Mahasiswa',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 4,
            'nama_kategori' => 'Kegiatan',
        ]);

        // 5

        DB::table('news_kategori')->insert([
            'id_ukm' => 5,
            'nama_kategori' => 'Mahasiswa',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 5,
            'nama_kategori' => 'Kegiatan',
        ]);

        // 6

        DB::table('news_kategori')->insert([
            'id_ukm' => 6,
            'nama_kategori' => 'Mahasiswa',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 6,
            'nama_kategori' => 'Kegiatan',
        ]);

        // 7

        DB::table('news_kategori')->insert([
            'id_ukm' => 7,
            'nama_kategori' => 'Mahasiswa',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 7,
            'nama_kategori' => 'Kegiatan',
        ]);

        // 8

        DB::table('news_kategori')->insert([
            'id_ukm' => 8,
            'nama_kategori' => 'Mahasiswa',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 8,
            'nama_kategori' => 'Kegiatan',
        ]);
    }
}
