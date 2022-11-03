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
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 1,
            'nama_kategori' => 'Kegiatan',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        // 2

        DB::table('news_kategori')->insert([
            'id_ukm' => 2,
            'nama_kategori' => 'Mahasiswa',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 2,
            'nama_kategori' => 'Kegiatan',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        // 3

        DB::table('news_kategori')->insert([
            'id_ukm' => 3,
            'nama_kategori' => 'Mahasiswa',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 3,
            'nama_kategori' => 'Kegiatan',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        // 4

        DB::table('news_kategori')->insert([
            'id_ukm' => 4,
            'nama_kategori' => 'Mahasiswa',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 4,
            'nama_kategori' => 'Kegiatan',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        // 5

        DB::table('news_kategori')->insert([
            'id_ukm' => 5,
            'nama_kategori' => 'Mahasiswa',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 5,
            'nama_kategori' => 'Kegiatan',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        // 6

        DB::table('news_kategori')->insert([
            'id_ukm' => 6,
            'nama_kategori' => 'Mahasiswa',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 6,
            'nama_kategori' => 'Kegiatan',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        // 7

        DB::table('news_kategori')->insert([
            'id_ukm' => 7,
            'nama_kategori' => 'Mahasiswa',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 7,
            'nama_kategori' => 'Kegiatan',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        // 8

        DB::table('news_kategori')->insert([
            'id_ukm' => 8,
            'nama_kategori' => 'Mahasiswa',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('news_kategori')->insert([
            'id_ukm' => 8,
            'nama_kategori' => 'Kegiatan',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);
    }
}
