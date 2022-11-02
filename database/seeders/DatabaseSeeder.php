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
        $this->call([
            UkmSeeder::class,
            UsersSeeder::class,
            NewsCategorySeeder::class,
            NewsSeeder::class,
            AgendaSeeder::class,
            PengumumanSeeder::class,
            GaleriFotoSeeder::class,
            GaleriVideoSeeder::class,
        ]);
    }
}
