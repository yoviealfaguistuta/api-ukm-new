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
            'tentang_kami' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh eros, curabitur elementum amet felis, suspendisse rhoncus, aenean velit. Tempor mattis suscipit risus nunc sed scelerisque. Purus enim quisque augue ornare turpis pellentesque etiam. Nullam et sed a ut eros. Tortor amet laoreet felis posuere elit arcu in. Lectus metus sed sed sed. In in pretium nisl at neque. Quisque malesuada elementum sagittis eget.<br><br>Consequat in in vel habitasse vel accumsan, tempus. Nibh enim, amet eu vestibulum, ut elementum urna. Et, donec risus, sem egestas elementum vitae amet. Congue nulla felis ac enim. Vitae, dapibus dui tellus dui amet sed nisl. Mauris nec lorem maecenas vel pulvinar eu, ac non.</p>',
            'misi' => '<p>1. Menyelenggarakan pendidikan tinggi vokasi yang berorientasi pada akhlak mulia, terampil, disiplin, mandiri, dan kompetitif<br>2.Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran<br>3.Melaksanakan pengabdian kepada masyarakat melalui transfer ilmu pengetahuan dan teknologi terapan<br>4.Menguatkan budaya akademik, organisasi, dan kerja yang berkarakter dan beretika<br>5.Menjalin kerjasama secara berkelanjutan dengan pihak lain.</p>',
            'visi' => '<p>Menjadi politeknik yang bermutu, inovatif, dan unggul dalam ilmu pengetahuan dan teknologi terapan.</p>',
            'tujuan' => '<p>1. Menghasilkan lulusan yang berakhlak mulia, terampil, disiplin, mandiri, dan memiliki keahlian di bidang iptek terapan;&nbsp;<br>2.Mengembangkan pengetahuan terapan bidang teknologi terapan yang memajukan penerapan teknologi di industri dan masyarakat; <br>3.Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat; <br>4.Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian, dan pengabdian kepada masyarakat; <br>5.Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional.</p>',
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
            'tentang_kami' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh eros, curabitur elementum amet felis, suspendisse rhoncus, aenean velit. Tempor mattis suscipit risus nunc sed scelerisque. Purus enim quisque augue ornare turpis pellentesque etiam. Nullam et sed a ut eros. Tortor amet laoreet felis posuere elit arcu in. Lectus metus sed sed sed. In in pretium nisl at neque. Quisque malesuada elementum sagittis eget.<br><br>Consequat in in vel habitasse vel accumsan, tempus. Nibh enim, amet eu vestibulum, ut elementum urna. Et, donec risus, sem egestas elementum vitae amet. Congue nulla felis ac enim. Vitae, dapibus dui tellus dui amet sed nisl. Mauris nec lorem maecenas vel pulvinar eu, ac non.</p>',
            'misi' => '<p>1. Menyelenggarakan pendidikan tinggi vokasi yang berorientasi pada akhlak mulia, terampil, disiplin, mandiri, dan kompetitif<br>2.Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran<br>3.Melaksanakan pengabdian kepada masyarakat melalui transfer ilmu pengetahuan dan teknologi terapan<br>4.Menguatkan budaya akademik, organisasi, dan kerja yang berkarakter dan beretika<br>5.Menjalin kerjasama secara berkelanjutan dengan pihak lain.</p>',
            'visi' => '<p>Menjadi politeknik yang bermutu, inovatif, dan unggul dalam ilmu pengetahuan dan teknologi terapan.</p>',
            'tujuan' => '<p>1. Menghasilkan lulusan yang berakhlak mulia, terampil, disiplin, mandiri, dan memiliki keahlian di bidang iptek terapan;&nbsp;<br>2.Mengembangkan pengetahuan terapan bidang teknologi terapan yang memajukan penerapan teknologi di industri dan masyarakat; <br>3.Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat; <br>4.Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian, dan pengabdian kepada masyarakat; <br>5.Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional.</p>',
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
            'tentang_kami' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh eros, curabitur elementum amet felis, suspendisse rhoncus, aenean velit. Tempor mattis suscipit risus nunc sed scelerisque. Purus enim quisque augue ornare turpis pellentesque etiam. Nullam et sed a ut eros. Tortor amet laoreet felis posuere elit arcu in. Lectus metus sed sed sed. In in pretium nisl at neque. Quisque malesuada elementum sagittis eget.<br><br>Consequat in in vel habitasse vel accumsan, tempus. Nibh enim, amet eu vestibulum, ut elementum urna. Et, donec risus, sem egestas elementum vitae amet. Congue nulla felis ac enim. Vitae, dapibus dui tellus dui amet sed nisl. Mauris nec lorem maecenas vel pulvinar eu, ac non.</p>',
            'misi' => '<p>1. Menyelenggarakan pendidikan tinggi vokasi yang berorientasi pada akhlak mulia, terampil, disiplin, mandiri, dan kompetitif<br>2.Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran<br>3.Melaksanakan pengabdian kepada masyarakat melalui transfer ilmu pengetahuan dan teknologi terapan<br>4.Menguatkan budaya akademik, organisasi, dan kerja yang berkarakter dan beretika<br>5.Menjalin kerjasama secara berkelanjutan dengan pihak lain.</p>',
            'visi' => '<p>Menjadi politeknik yang bermutu, inovatif, dan unggul dalam ilmu pengetahuan dan teknologi terapan.</p>',
            'tujuan' => '<p>1. Menghasilkan lulusan yang berakhlak mulia, terampil, disiplin, mandiri, dan memiliki keahlian di bidang iptek terapan;&nbsp;<br>2.Mengembangkan pengetahuan terapan bidang teknologi terapan yang memajukan penerapan teknologi di industri dan masyarakat; <br>3.Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat; <br>4.Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian, dan pengabdian kepada masyarakat; <br>5.Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional.</p>',
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
            'tentang_kami' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh eros, curabitur elementum amet felis, suspendisse rhoncus, aenean velit. Tempor mattis suscipit risus nunc sed scelerisque. Purus enim quisque augue ornare turpis pellentesque etiam. Nullam et sed a ut eros. Tortor amet laoreet felis posuere elit arcu in. Lectus metus sed sed sed. In in pretium nisl at neque. Quisque malesuada elementum sagittis eget.<br><br>Consequat in in vel habitasse vel accumsan, tempus. Nibh enim, amet eu vestibulum, ut elementum urna. Et, donec risus, sem egestas elementum vitae amet. Congue nulla felis ac enim. Vitae, dapibus dui tellus dui amet sed nisl. Mauris nec lorem maecenas vel pulvinar eu, ac non.</p>',
            'misi' => '<p>1. Menyelenggarakan pendidikan tinggi vokasi yang berorientasi pada akhlak mulia, terampil, disiplin, mandiri, dan kompetitif<br>2.Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran<br>3.Melaksanakan pengabdian kepada masyarakat melalui transfer ilmu pengetahuan dan teknologi terapan<br>4.Menguatkan budaya akademik, organisasi, dan kerja yang berkarakter dan beretika<br>5.Menjalin kerjasama secara berkelanjutan dengan pihak lain.</p>',
            'visi' => '<p>Menjadi politeknik yang bermutu, inovatif, dan unggul dalam ilmu pengetahuan dan teknologi terapan.</p>',
            'tujuan' => '<p>1. Menghasilkan lulusan yang berakhlak mulia, terampil, disiplin, mandiri, dan memiliki keahlian di bidang iptek terapan;&nbsp;<br>2.Mengembangkan pengetahuan terapan bidang teknologi terapan yang memajukan penerapan teknologi di industri dan masyarakat; <br>3.Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat; <br>4.Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian, dan pengabdian kepada masyarakat; <br>5.Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional.</p>',
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
            'tentang_kami' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh eros, curabitur elementum amet felis, suspendisse rhoncus, aenean velit. Tempor mattis suscipit risus nunc sed scelerisque. Purus enim quisque augue ornare turpis pellentesque etiam. Nullam et sed a ut eros. Tortor amet laoreet felis posuere elit arcu in. Lectus metus sed sed sed. In in pretium nisl at neque. Quisque malesuada elementum sagittis eget.<br><br>Consequat in in vel habitasse vel accumsan, tempus. Nibh enim, amet eu vestibulum, ut elementum urna. Et, donec risus, sem egestas elementum vitae amet. Congue nulla felis ac enim. Vitae, dapibus dui tellus dui amet sed nisl. Mauris nec lorem maecenas vel pulvinar eu, ac non.</p>',
            'misi' => '<p>1. Menyelenggarakan pendidikan tinggi vokasi yang berorientasi pada akhlak mulia, terampil, disiplin, mandiri, dan kompetitif<br>2.Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran<br>3.Melaksanakan pengabdian kepada masyarakat melalui transfer ilmu pengetahuan dan teknologi terapan<br>4.Menguatkan budaya akademik, organisasi, dan kerja yang berkarakter dan beretika<br>5.Menjalin kerjasama secara berkelanjutan dengan pihak lain.</p>',
            'visi' => '<p>Menjadi politeknik yang bermutu, inovatif, dan unggul dalam ilmu pengetahuan dan teknologi terapan.</p>',
            'tujuan' => '<p>1. Menghasilkan lulusan yang berakhlak mulia, terampil, disiplin, mandiri, dan memiliki keahlian di bidang iptek terapan;&nbsp;<br>2.Mengembangkan pengetahuan terapan bidang teknologi terapan yang memajukan penerapan teknologi di industri dan masyarakat; <br>3.Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat; <br>4.Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian, dan pengabdian kepada masyarakat; <br>5.Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional.</p>',
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
            'tentang_kami' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh eros, curabitur elementum amet felis, suspendisse rhoncus, aenean velit. Tempor mattis suscipit risus nunc sed scelerisque. Purus enim quisque augue ornare turpis pellentesque etiam. Nullam et sed a ut eros. Tortor amet laoreet felis posuere elit arcu in. Lectus metus sed sed sed. In in pretium nisl at neque. Quisque malesuada elementum sagittis eget.<br><br>Consequat in in vel habitasse vel accumsan, tempus. Nibh enim, amet eu vestibulum, ut elementum urna. Et, donec risus, sem egestas elementum vitae amet. Congue nulla felis ac enim. Vitae, dapibus dui tellus dui amet sed nisl. Mauris nec lorem maecenas vel pulvinar eu, ac non.</p>',
            'misi' => '<p>1. Menyelenggarakan pendidikan tinggi vokasi yang berorientasi pada akhlak mulia, terampil, disiplin, mandiri, dan kompetitif<br>2.Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran<br>3.Melaksanakan pengabdian kepada masyarakat melalui transfer ilmu pengetahuan dan teknologi terapan<br>4.Menguatkan budaya akademik, organisasi, dan kerja yang berkarakter dan beretika<br>5.Menjalin kerjasama secara berkelanjutan dengan pihak lain.</p>',
            'visi' => '<p>Menjadi politeknik yang bermutu, inovatif, dan unggul dalam ilmu pengetahuan dan teknologi terapan.</p>',
            'tujuan' => '<p>1. Menghasilkan lulusan yang berakhlak mulia, terampil, disiplin, mandiri, dan memiliki keahlian di bidang iptek terapan;&nbsp;<br>2.Mengembangkan pengetahuan terapan bidang teknologi terapan yang memajukan penerapan teknologi di industri dan masyarakat; <br>3.Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat; <br>4.Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian, dan pengabdian kepada masyarakat; <br>5.Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional.</p>',
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
            'tentang_kami' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh eros, curabitur elementum amet felis, suspendisse rhoncus, aenean velit. Tempor mattis suscipit risus nunc sed scelerisque. Purus enim quisque augue ornare turpis pellentesque etiam. Nullam et sed a ut eros. Tortor amet laoreet felis posuere elit arcu in. Lectus metus sed sed sed. In in pretium nisl at neque. Quisque malesuada elementum sagittis eget.<br><br>Consequat in in vel habitasse vel accumsan, tempus. Nibh enim, amet eu vestibulum, ut elementum urna. Et, donec risus, sem egestas elementum vitae amet. Congue nulla felis ac enim. Vitae, dapibus dui tellus dui amet sed nisl. Mauris nec lorem maecenas vel pulvinar eu, ac non.</p>',
            'misi' => '<p>1. Menyelenggarakan pendidikan tinggi vokasi yang berorientasi pada akhlak mulia, terampil, disiplin, mandiri, dan kompetitif<br>2.Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran<br>3.Melaksanakan pengabdian kepada masyarakat melalui transfer ilmu pengetahuan dan teknologi terapan<br>4.Menguatkan budaya akademik, organisasi, dan kerja yang berkarakter dan beretika<br>5.Menjalin kerjasama secara berkelanjutan dengan pihak lain.</p>',
            'visi' => '<p>Menjadi politeknik yang bermutu, inovatif, dan unggul dalam ilmu pengetahuan dan teknologi terapan.</p>',
            'tujuan' => '<p>1. Menghasilkan lulusan yang berakhlak mulia, terampil, disiplin, mandiri, dan memiliki keahlian di bidang iptek terapan;&nbsp;<br>2.Mengembangkan pengetahuan terapan bidang teknologi terapan yang memajukan penerapan teknologi di industri dan masyarakat; <br>3.Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat; <br>4.Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian, dan pengabdian kepada masyarakat; <br>5.Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional.</p>',
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
            'tentang_kami' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh eros, curabitur elementum amet felis, suspendisse rhoncus, aenean velit. Tempor mattis suscipit risus nunc sed scelerisque. Purus enim quisque augue ornare turpis pellentesque etiam. Nullam et sed a ut eros. Tortor amet laoreet felis posuere elit arcu in. Lectus metus sed sed sed. In in pretium nisl at neque. Quisque malesuada elementum sagittis eget.<br><br>Consequat in in vel habitasse vel accumsan, tempus. Nibh enim, amet eu vestibulum, ut elementum urna. Et, donec risus, sem egestas elementum vitae amet. Congue nulla felis ac enim. Vitae, dapibus dui tellus dui amet sed nisl. Mauris nec lorem maecenas vel pulvinar eu, ac non.</p>',
            'misi' => '<p>1. Menyelenggarakan pendidikan tinggi vokasi yang berorientasi pada akhlak mulia, terampil, disiplin, mandiri, dan kompetitif<br>2.Melaksanakan kajian keilmuan dan penelitian terapan untuk menopang pendidikan dan pengajaran<br>3.Melaksanakan pengabdian kepada masyarakat melalui transfer ilmu pengetahuan dan teknologi terapan<br>4.Menguatkan budaya akademik, organisasi, dan kerja yang berkarakter dan beretika<br>5.Menjalin kerjasama secara berkelanjutan dengan pihak lain.</p>',
            'visi' => '<p>Menjadi politeknik yang bermutu, inovatif, dan unggul dalam ilmu pengetahuan dan teknologi terapan.</p>',
            'tujuan' => '<p>1. Menghasilkan lulusan yang berakhlak mulia, terampil, disiplin, mandiri, dan memiliki keahlian di bidang iptek terapan;&nbsp;<br>2.Mengembangkan pengetahuan terapan bidang teknologi terapan yang memajukan penerapan teknologi di industri dan masyarakat; <br>3.Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat; <br>4.Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian, dan pengabdian kepada masyarakat; <br>5.Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional.</p>',
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
