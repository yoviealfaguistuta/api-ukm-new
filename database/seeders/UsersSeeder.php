<?php

namespace Database\Seeders;

use App\Models\Pabrik;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id_ukm' => 1,
            'name' => 'Ketua Poltapala',
            'position' => 'ketua',
            'foto_profile' => '/assets/images/data/default-user.png',
            'email' => 'ukmplpa@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('users')->insert([
            'id_ukm' => 2,
            'name' => 'Ketua English Club',
            'position' => 'ketua',
            'foto_profile' => '/assets/images/data/default-user.png',
            'email' => 'ukmec@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('users')->insert([
            'id_ukm' => 3,
            'name' => 'Ketua Garda',
            'position' => 'ketua',
            'foto_profile' => '/assets/images/data/default-user.png',
            'email' => 'ukmgd@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('users')->insert([
            'id_ukm' => 4,
            'name' => 'Ketua Olahraga',
            'position' => 'ketua',
            'foto_profile' => '/assets/images/data/default-user.png',
            'email' => 'ukmor@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('users')->insert([
            'id_ukm' => 5,
            'name' => 'Ketua Bidang Seni',
            'position' => 'ketua',
            'foto_profile' => '/assets/images/data/default-user.png',
            'email' => 'ukmbs@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);
        
        DB::table('users')->insert([
            'id_ukm' => 6,
            'name' => 'Ketua AL Banna',
            'position' => 'ketua',
            'foto_profile' => '/assets/images/data/default-user.png',
            'email' => 'ukmalb@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('users')->insert([
            'id_ukm' => 7,
            'name' => 'Ketua Pers Sukma',
            'position' => 'ketua',
            'foto_profile' => '/assets/images/data/default-user.png',
            'email' => 'ukmps@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('users')->insert([
            'id_ukm' => 8,
            'name' => 'Ketua Koperasi Mahasiswa',
            'position' => 'ketua',
            'foto_profile' => '/assets/images/data/default-user.png',
            'email' => 'ukmkm@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);
    }
}
