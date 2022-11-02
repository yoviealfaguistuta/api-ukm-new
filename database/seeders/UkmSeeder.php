<?php

namespace Database\Seeders;

use App\Models\Pabrik;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ukm')->insert([
            'nama' => "Poltapala",
            'jenis' => 'ukm',
            'singkatan_ukm' => 'UKMPLPA',
            'tentang_kami' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'misi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'visi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'tujuan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ',
            'foto_ukm' => "/assets/images/data/default-ukm.png",
            'facebook' => "https://www.facebook.com/politekniknegerilampung.publikasi",
            'instagram' => "https://www.instagram.com/politeknik_negeri_lampung/?hl=id",
            'twitter' => "https://twitter.com/Polinelaonline",
            'whatsapp' => "whatsapp://send?abid=081278933860&text=Hello%2C%Polinela!",
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('ukm')->insert([
            'nama' => "English Club",
            'jenis' => 'ukm',
            'singkatan_ukm' => 'UKMEC',
            'tentang_kami' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'misi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'visi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'tujuan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ',
            'foto_ukm' => "/assets/images/data/default-ukm.png",
            'facebook' => "https://www.facebook.com/politekniknegerilampung.publikasi",
            'instagram' => "https://www.instagram.com/politeknik_negeri_lampung/?hl=id",
            'twitter' => "https://twitter.com/Polinelaonline",
            'whatsapp' => "whatsapp://send?abid=081278933860&text=Hello%2C%Polinela!",
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('ukm')->insert([
            'nama' => "Garda",
            'jenis' => 'ukm',
            'singkatan_ukm' => 'UKMGD',
            'tentang_kami' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'misi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'visi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'tujuan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ',
            'foto_ukm' => "/assets/images/data/default-ukm.png",
            'facebook' => "https://www.facebook.com/politekniknegerilampung.publikasi",
            'instagram' => "https://www.instagram.com/politeknik_negeri_lampung/?hl=id",
            'twitter' => "https://twitter.com/Polinelaonline",
            'whatsapp' => "whatsapp://send?abid=081278933860&text=Hello%2C%Polinela!",
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('ukm')->insert([
            'nama' => "Olahraga",
            'jenis' => 'ukm',
            'singkatan_ukm' => 'UKMOR',
            'tentang_kami' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'misi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'visi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'tujuan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ',
            'foto_ukm' => "/assets/images/data/default-ukm.png",
            'facebook' => "https://www.facebook.com/politekniknegerilampung.publikasi",
            'instagram' => "https://www.instagram.com/politeknik_negeri_lampung/?hl=id",
            'twitter' => "https://twitter.com/Polinelaonline",
            'whatsapp' => "whatsapp://send?abid=081278933860&text=Hello%2C%Polinela!",
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('ukm')->insert([
            'nama' => "Bidang Seni",
            'jenis' => 'ukm',
            'singkatan_ukm' => 'UKMBS',
            'tentang_kami' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'misi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'visi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'tujuan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ',
            'foto_ukm' => "/assets/images/data/default-ukm.png",
            'facebook' => "https://www.facebook.com/politekniknegerilampung.publikasi",
            'instagram' => "https://www.instagram.com/politeknik_negeri_lampung/?hl=id",
            'twitter' => "https://twitter.com/Polinelaonline",
            'whatsapp' => "whatsapp://send?abid=081278933860&text=Hello%2C%Polinela!",
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('ukm')->insert([
            'nama' => "AL Banna",
            'jenis' => 'ukm',
            'singkatan_ukm' => 'UKMALB',
            'tentang_kami' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'misi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'visi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'tujuan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ',
            'foto_ukm' => "/assets/images/data/default-ukm.png",
            'facebook' => "https://www.facebook.com/politekniknegerilampung.publikasi",
            'instagram' => "https://www.instagram.com/politeknik_negeri_lampung/?hl=id",
            'twitter' => "https://twitter.com/Polinelaonline",
            'whatsapp' => "whatsapp://send?abid=081278933860&text=Hello%2C%Polinela!",
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('ukm')->insert([
            'nama' => "Pers Sukma",
            'jenis' => 'ukm',
            'singkatan_ukm' => 'UKMPS',
            'tentang_kami' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'misi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'visi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'tujuan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ',
            'foto_ukm' => "/assets/images/data/default-ukm.png",
            'facebook' => "https://www.facebook.com/politekniknegerilampung.publikasi",
            'instagram' => "https://www.instagram.com/politeknik_negeri_lampung/?hl=id",
            'twitter' => "https://twitter.com/Polinelaonline",
            'whatsapp' => "whatsapp://send?abid=081278933860&text=Hello%2C%Polinela!",
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('ukm')->insert([
            'nama' => "Koperasi Mahasiswa",
            'jenis' => 'ukm',
            'singkatan_ukm' => 'UKMKM',
            'tentang_kami' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'misi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'visi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ',
            'tujuan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ',
            'foto_ukm' => "/assets/images/data/default-ukm.png",
            'facebook' => "https://www.facebook.com/politekniknegerilampung.publikasi",
            'instagram' => "https://www.instagram.com/politeknik_negeri_lampung/?hl=id",
            'twitter' => "https://twitter.com/Polinelaonline",
            'whatsapp' => "whatsapp://send?abid=081278933860&text=Hello%2C%Polinela!",
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);
    }
}
