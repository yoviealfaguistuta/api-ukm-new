<?php

namespace Database\Seeders;

use App\Models\Pabrik;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GaleriFotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_image')->insert([
            'id_ukm' => 1,
            'foto' => '/assets/images/data/1667352688_smart_green_house_polihidro_farm_polinela2.jpg',
            'judul' => 'Politeknik Negeri Lampung Kini Miliki Smart Green House Polihidro Farm',
            'deskripsi' => 'Senin, (16/12/2019), Direktur Politeknik Negeri Lampung, Dr. Ir. Sarono, M.Si. beserta jajaran direksi, resmikan Smart Green House “Polihidro Farm”.Politeknik Negeri Lampung kini telah memiliki Green House modern dengan yang resmi diberi nama ‘POLIHIDRO FARM’. Polihidro Farm adalah green house yang dikhususkan untuk penanaman berbagai tanaman hidroponik, seperti pagoda, pakcoy, selada merah, kangkung dan lain-lain.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 1,
            'foto' => '/assets/images/data/1667352753_Polinela-Kuliah-Umum-Teknologi-Perbenihan-Prof-M-Syukur-5.jpg',
            'judul' => 'Studium Generale HIMA Teknologi Perbenihan Dan Penandatangan MoU Dengan 5 Perusahaan Mitra Studi',
            'deskripsi' => 'Polinela, Selasa (13/09/2022). Progam Studi Teknologi Perbenihan Politeknik Negeri Lampung mengadakan kuliah umum dengan tema “Membangun Pertanian Melalui Benih Unggul, Bermutu, dan Bersertifikasi” dan penandatanganan MoU dengan 5 perusahaan mitra studi. Kelima perusahan tersebut  adalah PT. Agri Makmur Pertiwi, PT. Habibi Digital Nusantara dan Metro Garden, CV. Maju Sejahtera Inti, PT. Marm Maju Sejahtera, dan Firma Bandulbesi Istana Benih. Acara yang berlansung di Gedung Sakura Politeknik Negeri Lampung pada hari Sabtu 12 September 2022 tersebut dihadiri oleh  jajaran Direksi Polinela, 5 Pimpinan perusahaan mitra studi yang melaksanakan penandatanganan MoU pada acara tersebut.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 1,
            'foto' => '/assets/images/data/1667352790_Polinela-Mahasiswa-Polinela-terpilih-Global-Youth-Action-1.jpg',
            'judul' => 'Mahasiswa Politeknik Negeri Lampung Ikuti Global Youth Action 2022',
            'deskripsi' => 'Polinela, Jum’at (09/09/2022). Kesempatan mahasiswa untuk berkuliah di kampus luar negeri hingga berkarier di kancah Internasional semakin terbuka lebar. Terdapatnya berbagai program beasiswa yang berasal dari Pemerintah, Perguruan Tinggi, dan Organisasi dengan mudah melebarkan kesempatan kepada calon mahasiswa maupun mahasiswa Indonesia untuk melanjutkan studi di luar negeri. Riki Saputra merupakan mahasiswa aktif Program Studi Produksi dan Manajemen Industri Perkebunan, Jurusan Budidaya Tanaman Perkebunan Politeknik Negeri Lampung angkatan 2020 adalah seorang mahasiswa yang gemar mencoba hal baru dan sangat aktif berkompetisi, baik tingkat nasional dan mencoba untuk mengikuti kegiatan mahasiswa dalam ajang internasional. Motivasinya bersemangat dalam perkuliahan dan mengikuti berbagai perlombaan adalah dedikasi untuk kedua orang tuanya yang sudah berpulang.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 1,
            'foto' => '/assets/images/data/1667352844_Polinela-Pekan-Seni-Mahasiswa-Provinsi-3.jpg',
            'judul' => 'Polinela Menjadi Tuan Rumah Peksimprov Lampung Tahun 2022 Cabang Baca Puisi',
            'deskripsi' => 'Polinela, Senin (05/09/2022). Politeknik Negeri Lampung (POLINELA) menjadi tuan rumah Pekan Seni Mahasiswa (Peksimprov) 2022 Provinsi Lampung,  cabang baca puisi yang dilaksanakan di Gedung Serba Guna Polinela pada hari Sabtu, 3 September 2022. Peksimprov merupakan kegiatan yang bertujuan memberikan wadah bagi mahasiswa dalam meningkatkan kualitas dan kemampuan praktis mahasiswa dalam bidang seni, baik seni suara, seni pertunjukan, seni sastra, maupun seni rupa. Dengan adanya kegiatan ini, diharapkan para mahasiswa mampu meningkatkan sekaligus mengembangkan prestasi dan kreasi seninya untuk memperkaya budaya bangsa. Dalam kesempatan ini hal yang dinilai oleh tim juri yaitu Penafsiran/Interpretasi 35%, Vokalisasi 35%, dan Ekspresi 30%',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 1,
            'foto' => '/assets/images/data/1667352872_Polinela-Satuan-Tugas-Satgas-Pencegahan-dan-Penanganan-Kekerasan-Seksual-PPKS-1.jpg',
            'judul' => 'Uji Publik Calon Panitia Seleksi Politeknik Negeri Lampung',
            'deskripsi' => 'Polinela, Selasa (30/08/2022). Pelaksanaan kegiatan uji publik untuk calon panitia seleksi Pencegahan dan Penanganan Kekerasan seksual (PPKS) di lingkungan Politeknik Negeri Lampung yang dilaksanakan pada tanggal 29 agustus 2022 pukul 13.30 WIB. Acara yang dilaksanakan melalui video conference Zoom Meetting dan yang dihadiri oleh 13 peserta tersebut dibuka oleh Agung Adi Candra, S.Kh., M.Si. selaku Pembantu Direktur III, dan juga dihadiri oleh Dra. Dewayani Diah Savitrì M.Hum. sebagai pemerhati gender dan perempuan.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 1,
            'foto' => '/assets/images/data/1667352901_Polinela-PKKMB-2022-Hari-Kedua-2.jpg',
            'judul' => 'Pengukuhan Peserta PKKMB Polinela Tahun 2022',
            'deskripsi' => 'Polinela, Kamis (25/08/2022). Pelaksanaan Hari ke-2 PKKMB TA 2022 diawali dengan pembukaan oleh Direktur Politeknik Negeri Lampung Dr. Ir Sarono, M.Si. dan pengukuhan mahasiswa oleh Ketua Senat, kegiatan di laksanakan di Gedung serba Guna Polinela.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);





        // 2

        DB::table('gallery_image')->insert([
            'id_ukm' => 2,
            'foto' => '/assets/images/data/1667352688_smart_green_house_polihidro_farm_polinela2.jpg',
            'judul' => 'Politeknik Negeri Lampung Kini Miliki Smart Green House Polihidro Farm',
            'deskripsi' => 'Senin, (16/12/2019), Direktur Politeknik Negeri Lampung, Dr. Ir. Sarono, M.Si. beserta jajaran direksi, resmikan Smart Green House “Polihidro Farm”.Politeknik Negeri Lampung kini telah memiliki Green House modern dengan yang resmi diberi nama ‘POLIHIDRO FARM’. Polihidro Farm adalah green house yang dikhususkan untuk penanaman berbagai tanaman hidroponik, seperti pagoda, pakcoy, selada merah, kangkung dan lain-lain.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 2,
            'foto' => '/assets/images/data/1667352753_Polinela-Kuliah-Umum-Teknologi-Perbenihan-Prof-M-Syukur-5.jpg',
            'judul' => 'Studium Generale HIMA Teknologi Perbenihan Dan Penandatangan MoU Dengan 5 Perusahaan Mitra Studi',
            'deskripsi' => 'Polinela, Selasa (13/09/2022). Progam Studi Teknologi Perbenihan Politeknik Negeri Lampung mengadakan kuliah umum dengan tema “Membangun Pertanian Melalui Benih Unggul, Bermutu, dan Bersertifikasi” dan penandatanganan MoU dengan 5 perusahaan mitra studi. Kelima perusahan tersebut  adalah PT. Agri Makmur Pertiwi, PT. Habibi Digital Nusantara dan Metro Garden, CV. Maju Sejahtera Inti, PT. Marm Maju Sejahtera, dan Firma Bandulbesi Istana Benih. Acara yang berlansung di Gedung Sakura Politeknik Negeri Lampung pada hari Sabtu 12 September 2022 tersebut dihadiri oleh  jajaran Direksi Polinela, 5 Pimpinan perusahaan mitra studi yang melaksanakan penandatanganan MoU pada acara tersebut.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 2,
            'foto' => '/assets/images/data/1667352790_Polinela-Mahasiswa-Polinela-terpilih-Global-Youth-Action-1.jpg',
            'judul' => 'Mahasiswa Politeknik Negeri Lampung Ikuti Global Youth Action 2022',
            'deskripsi' => 'Polinela, Jum’at (09/09/2022). Kesempatan mahasiswa untuk berkuliah di kampus luar negeri hingga berkarier di kancah Internasional semakin terbuka lebar. Terdapatnya berbagai program beasiswa yang berasal dari Pemerintah, Perguruan Tinggi, dan Organisasi dengan mudah melebarkan kesempatan kepada calon mahasiswa maupun mahasiswa Indonesia untuk melanjutkan studi di luar negeri. Riki Saputra merupakan mahasiswa aktif Program Studi Produksi dan Manajemen Industri Perkebunan, Jurusan Budidaya Tanaman Perkebunan Politeknik Negeri Lampung angkatan 2020 adalah seorang mahasiswa yang gemar mencoba hal baru dan sangat aktif berkompetisi, baik tingkat nasional dan mencoba untuk mengikuti kegiatan mahasiswa dalam ajang internasional. Motivasinya bersemangat dalam perkuliahan dan mengikuti berbagai perlombaan adalah dedikasi untuk kedua orang tuanya yang sudah berpulang.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 2,
            'foto' => '/assets/images/data/1667352844_Polinela-Pekan-Seni-Mahasiswa-Provinsi-3.jpg',
            'judul' => 'Polinela Menjadi Tuan Rumah Peksimprov Lampung Tahun 2022 Cabang Baca Puisi',
            'deskripsi' => 'Polinela, Senin (05/09/2022). Politeknik Negeri Lampung (POLINELA) menjadi tuan rumah Pekan Seni Mahasiswa (Peksimprov) 2022 Provinsi Lampung,  cabang baca puisi yang dilaksanakan di Gedung Serba Guna Polinela pada hari Sabtu, 3 September 2022. Peksimprov merupakan kegiatan yang bertujuan memberikan wadah bagi mahasiswa dalam meningkatkan kualitas dan kemampuan praktis mahasiswa dalam bidang seni, baik seni suara, seni pertunjukan, seni sastra, maupun seni rupa. Dengan adanya kegiatan ini, diharapkan para mahasiswa mampu meningkatkan sekaligus mengembangkan prestasi dan kreasi seninya untuk memperkaya budaya bangsa. Dalam kesempatan ini hal yang dinilai oleh tim juri yaitu Penafsiran/Interpretasi 35%, Vokalisasi 35%, dan Ekspresi 30%',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 2,
            'foto' => '/assets/images/data/1667352872_Polinela-Satuan-Tugas-Satgas-Pencegahan-dan-Penanganan-Kekerasan-Seksual-PPKS-1.jpg',
            'judul' => 'Uji Publik Calon Panitia Seleksi Politeknik Negeri Lampung',
            'deskripsi' => 'Polinela, Selasa (30/08/2022). Pelaksanaan kegiatan uji publik untuk calon panitia seleksi Pencegahan dan Penanganan Kekerasan seksual (PPKS) di lingkungan Politeknik Negeri Lampung yang dilaksanakan pada tanggal 29 agustus 2022 pukul 13.30 WIB. Acara yang dilaksanakan melalui video conference Zoom Meetting dan yang dihadiri oleh 13 peserta tersebut dibuka oleh Agung Adi Candra, S.Kh., M.Si. selaku Pembantu Direktur III, dan juga dihadiri oleh Dra. Dewayani Diah Savitrì M.Hum. sebagai pemerhati gender dan perempuan.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 2,
            'foto' => '/assets/images/data/1667352901_Polinela-PKKMB-2022-Hari-Kedua-2.jpg',
            'judul' => 'Pengukuhan Peserta PKKMB Polinela Tahun 2022',
            'deskripsi' => 'Polinela, Kamis (25/08/2022). Pelaksanaan Hari ke-2 PKKMB TA 2022 diawali dengan pembukaan oleh Direktur Politeknik Negeri Lampung Dr. Ir Sarono, M.Si. dan pengukuhan mahasiswa oleh Ketua Senat, kegiatan di laksanakan di Gedung serba Guna Polinela.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);


        // 3

        DB::table('gallery_image')->insert([
            'id_ukm' => 3,
            'foto' => '/assets/images/data/1667352688_smart_green_house_polihidro_farm_polinela2.jpg',
            'judul' => 'Politeknik Negeri Lampung Kini Miliki Smart Green House Polihidro Farm',
            'deskripsi' => 'Senin, (16/12/2019), Direktur Politeknik Negeri Lampung, Dr. Ir. Sarono, M.Si. beserta jajaran direksi, resmikan Smart Green House “Polihidro Farm”.Politeknik Negeri Lampung kini telah memiliki Green House modern dengan yang resmi diberi nama ‘POLIHIDRO FARM’. Polihidro Farm adalah green house yang dikhususkan untuk penanaman berbagai tanaman hidroponik, seperti pagoda, pakcoy, selada merah, kangkung dan lain-lain.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 3,
            'foto' => '/assets/images/data/1667352753_Polinela-Kuliah-Umum-Teknologi-Perbenihan-Prof-M-Syukur-5.jpg',
            'judul' => 'Studium Generale HIMA Teknologi Perbenihan Dan Penandatangan MoU Dengan 5 Perusahaan Mitra Studi',
            'deskripsi' => 'Polinela, Selasa (13/09/2022). Progam Studi Teknologi Perbenihan Politeknik Negeri Lampung mengadakan kuliah umum dengan tema “Membangun Pertanian Melalui Benih Unggul, Bermutu, dan Bersertifikasi” dan penandatanganan MoU dengan 5 perusahaan mitra studi. Kelima perusahan tersebut  adalah PT. Agri Makmur Pertiwi, PT. Habibi Digital Nusantara dan Metro Garden, CV. Maju Sejahtera Inti, PT. Marm Maju Sejahtera, dan Firma Bandulbesi Istana Benih. Acara yang berlansung di Gedung Sakura Politeknik Negeri Lampung pada hari Sabtu 12 September 2022 tersebut dihadiri oleh  jajaran Direksi Polinela, 5 Pimpinan perusahaan mitra studi yang melaksanakan penandatanganan MoU pada acara tersebut.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 3,
            'foto' => '/assets/images/data/1667352790_Polinela-Mahasiswa-Polinela-terpilih-Global-Youth-Action-1.jpg',
            'judul' => 'Mahasiswa Politeknik Negeri Lampung Ikuti Global Youth Action 2022',
            'deskripsi' => 'Polinela, Jum’at (09/09/2022). Kesempatan mahasiswa untuk berkuliah di kampus luar negeri hingga berkarier di kancah Internasional semakin terbuka lebar. Terdapatnya berbagai program beasiswa yang berasal dari Pemerintah, Perguruan Tinggi, dan Organisasi dengan mudah melebarkan kesempatan kepada calon mahasiswa maupun mahasiswa Indonesia untuk melanjutkan studi di luar negeri. Riki Saputra merupakan mahasiswa aktif Program Studi Produksi dan Manajemen Industri Perkebunan, Jurusan Budidaya Tanaman Perkebunan Politeknik Negeri Lampung angkatan 2020 adalah seorang mahasiswa yang gemar mencoba hal baru dan sangat aktif berkompetisi, baik tingkat nasional dan mencoba untuk mengikuti kegiatan mahasiswa dalam ajang internasional. Motivasinya bersemangat dalam perkuliahan dan mengikuti berbagai perlombaan adalah dedikasi untuk kedua orang tuanya yang sudah berpulang.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 3,
            'foto' => '/assets/images/data/1667352844_Polinela-Pekan-Seni-Mahasiswa-Provinsi-3.jpg',
            'judul' => 'Polinela Menjadi Tuan Rumah Peksimprov Lampung Tahun 2022 Cabang Baca Puisi',
            'deskripsi' => 'Polinela, Senin (05/09/2022). Politeknik Negeri Lampung (POLINELA) menjadi tuan rumah Pekan Seni Mahasiswa (Peksimprov) 2022 Provinsi Lampung,  cabang baca puisi yang dilaksanakan di Gedung Serba Guna Polinela pada hari Sabtu, 3 September 2022. Peksimprov merupakan kegiatan yang bertujuan memberikan wadah bagi mahasiswa dalam meningkatkan kualitas dan kemampuan praktis mahasiswa dalam bidang seni, baik seni suara, seni pertunjukan, seni sastra, maupun seni rupa. Dengan adanya kegiatan ini, diharapkan para mahasiswa mampu meningkatkan sekaligus mengembangkan prestasi dan kreasi seninya untuk memperkaya budaya bangsa. Dalam kesempatan ini hal yang dinilai oleh tim juri yaitu Penafsiran/Interpretasi 35%, Vokalisasi 35%, dan Ekspresi 30%',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 3,
            'foto' => '/assets/images/data/1667352872_Polinela-Satuan-Tugas-Satgas-Pencegahan-dan-Penanganan-Kekerasan-Seksual-PPKS-1.jpg',
            'judul' => 'Uji Publik Calon Panitia Seleksi Politeknik Negeri Lampung',
            'deskripsi' => 'Polinela, Selasa (30/08/2022). Pelaksanaan kegiatan uji publik untuk calon panitia seleksi Pencegahan dan Penanganan Kekerasan seksual (PPKS) di lingkungan Politeknik Negeri Lampung yang dilaksanakan pada tanggal 29 agustus 2022 pukul 13.30 WIB. Acara yang dilaksanakan melalui video conference Zoom Meetting dan yang dihadiri oleh 13 peserta tersebut dibuka oleh Agung Adi Candra, S.Kh., M.Si. selaku Pembantu Direktur III, dan juga dihadiri oleh Dra. Dewayani Diah Savitrì M.Hum. sebagai pemerhati gender dan perempuan.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 3,
            'foto' => '/assets/images/data/1667352901_Polinela-PKKMB-2022-Hari-Kedua-2.jpg',
            'judul' => 'Pengukuhan Peserta PKKMB Polinela Tahun 2022',
            'deskripsi' => 'Polinela, Kamis (25/08/2022). Pelaksanaan Hari ke-2 PKKMB TA 2022 diawali dengan pembukaan oleh Direktur Politeknik Negeri Lampung Dr. Ir Sarono, M.Si. dan pengukuhan mahasiswa oleh Ketua Senat, kegiatan di laksanakan di Gedung serba Guna Polinela.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);


        // 4

        DB::table('gallery_image')->insert([
            'id_ukm' => 4,
            'foto' => '/assets/images/data/1667352688_smart_green_house_polihidro_farm_polinela2.jpg',
            'judul' => 'Politeknik Negeri Lampung Kini Miliki Smart Green House Polihidro Farm',
            'deskripsi' => 'Senin, (16/12/2019), Direktur Politeknik Negeri Lampung, Dr. Ir. Sarono, M.Si. beserta jajaran direksi, resmikan Smart Green House “Polihidro Farm”.Politeknik Negeri Lampung kini telah memiliki Green House modern dengan yang resmi diberi nama ‘POLIHIDRO FARM’. Polihidro Farm adalah green house yang dikhususkan untuk penanaman berbagai tanaman hidroponik, seperti pagoda, pakcoy, selada merah, kangkung dan lain-lain.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 4,
            'foto' => '/assets/images/data/1667352753_Polinela-Kuliah-Umum-Teknologi-Perbenihan-Prof-M-Syukur-5.jpg',
            'judul' => 'Studium Generale HIMA Teknologi Perbenihan Dan Penandatangan MoU Dengan 5 Perusahaan Mitra Studi',
            'deskripsi' => 'Polinela, Selasa (13/09/2022). Progam Studi Teknologi Perbenihan Politeknik Negeri Lampung mengadakan kuliah umum dengan tema “Membangun Pertanian Melalui Benih Unggul, Bermutu, dan Bersertifikasi” dan penandatanganan MoU dengan 5 perusahaan mitra studi. Kelima perusahan tersebut  adalah PT. Agri Makmur Pertiwi, PT. Habibi Digital Nusantara dan Metro Garden, CV. Maju Sejahtera Inti, PT. Marm Maju Sejahtera, dan Firma Bandulbesi Istana Benih. Acara yang berlansung di Gedung Sakura Politeknik Negeri Lampung pada hari Sabtu 12 September 2022 tersebut dihadiri oleh  jajaran Direksi Polinela, 5 Pimpinan perusahaan mitra studi yang melaksanakan penandatanganan MoU pada acara tersebut.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 4,
            'foto' => '/assets/images/data/1667352790_Polinela-Mahasiswa-Polinela-terpilih-Global-Youth-Action-1.jpg',
            'judul' => 'Mahasiswa Politeknik Negeri Lampung Ikuti Global Youth Action 2022',
            'deskripsi' => 'Polinela, Jum’at (09/09/2022). Kesempatan mahasiswa untuk berkuliah di kampus luar negeri hingga berkarier di kancah Internasional semakin terbuka lebar. Terdapatnya berbagai program beasiswa yang berasal dari Pemerintah, Perguruan Tinggi, dan Organisasi dengan mudah melebarkan kesempatan kepada calon mahasiswa maupun mahasiswa Indonesia untuk melanjutkan studi di luar negeri. Riki Saputra merupakan mahasiswa aktif Program Studi Produksi dan Manajemen Industri Perkebunan, Jurusan Budidaya Tanaman Perkebunan Politeknik Negeri Lampung angkatan 2020 adalah seorang mahasiswa yang gemar mencoba hal baru dan sangat aktif berkompetisi, baik tingkat nasional dan mencoba untuk mengikuti kegiatan mahasiswa dalam ajang internasional. Motivasinya bersemangat dalam perkuliahan dan mengikuti berbagai perlombaan adalah dedikasi untuk kedua orang tuanya yang sudah berpulang.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 4,
            'foto' => '/assets/images/data/1667352844_Polinela-Pekan-Seni-Mahasiswa-Provinsi-3.jpg',
            'judul' => 'Polinela Menjadi Tuan Rumah Peksimprov Lampung Tahun 2022 Cabang Baca Puisi',
            'deskripsi' => 'Polinela, Senin (05/09/2022). Politeknik Negeri Lampung (POLINELA) menjadi tuan rumah Pekan Seni Mahasiswa (Peksimprov) 2022 Provinsi Lampung,  cabang baca puisi yang dilaksanakan di Gedung Serba Guna Polinela pada hari Sabtu, 3 September 2022. Peksimprov merupakan kegiatan yang bertujuan memberikan wadah bagi mahasiswa dalam meningkatkan kualitas dan kemampuan praktis mahasiswa dalam bidang seni, baik seni suara, seni pertunjukan, seni sastra, maupun seni rupa. Dengan adanya kegiatan ini, diharapkan para mahasiswa mampu meningkatkan sekaligus mengembangkan prestasi dan kreasi seninya untuk memperkaya budaya bangsa. Dalam kesempatan ini hal yang dinilai oleh tim juri yaitu Penafsiran/Interpretasi 35%, Vokalisasi 35%, dan Ekspresi 30%',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 4,
            'foto' => '/assets/images/data/1667352872_Polinela-Satuan-Tugas-Satgas-Pencegahan-dan-Penanganan-Kekerasan-Seksual-PPKS-1.jpg',
            'judul' => 'Uji Publik Calon Panitia Seleksi Politeknik Negeri Lampung',
            'deskripsi' => 'Polinela, Selasa (30/08/2022). Pelaksanaan kegiatan uji publik untuk calon panitia seleksi Pencegahan dan Penanganan Kekerasan seksual (PPKS) di lingkungan Politeknik Negeri Lampung yang dilaksanakan pada tanggal 29 agustus 2022 pukul 13.30 WIB. Acara yang dilaksanakan melalui video conference Zoom Meetting dan yang dihadiri oleh 13 peserta tersebut dibuka oleh Agung Adi Candra, S.Kh., M.Si. selaku Pembantu Direktur III, dan juga dihadiri oleh Dra. Dewayani Diah Savitrì M.Hum. sebagai pemerhati gender dan perempuan.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 4,
            'foto' => '/assets/images/data/1667352901_Polinela-PKKMB-2022-Hari-Kedua-2.jpg',
            'judul' => 'Pengukuhan Peserta PKKMB Polinela Tahun 2022',
            'deskripsi' => 'Polinela, Kamis (25/08/2022). Pelaksanaan Hari ke-2 PKKMB TA 2022 diawali dengan pembukaan oleh Direktur Politeknik Negeri Lampung Dr. Ir Sarono, M.Si. dan pengukuhan mahasiswa oleh Ketua Senat, kegiatan di laksanakan di Gedung serba Guna Polinela.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);


        // 5

        DB::table('gallery_image')->insert([
            'id_ukm' => 5,
            'foto' => '/assets/images/data/1667352688_smart_green_house_polihidro_farm_polinela2.jpg',
            'judul' => 'Politeknik Negeri Lampung Kini Miliki Smart Green House Polihidro Farm',
            'deskripsi' => 'Senin, (16/12/2019), Direktur Politeknik Negeri Lampung, Dr. Ir. Sarono, M.Si. beserta jajaran direksi, resmikan Smart Green House “Polihidro Farm”.Politeknik Negeri Lampung kini telah memiliki Green House modern dengan yang resmi diberi nama ‘POLIHIDRO FARM’. Polihidro Farm adalah green house yang dikhususkan untuk penanaman berbagai tanaman hidroponik, seperti pagoda, pakcoy, selada merah, kangkung dan lain-lain.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 5,
            'foto' => '/assets/images/data/1667352753_Polinela-Kuliah-Umum-Teknologi-Perbenihan-Prof-M-Syukur-5.jpg',
            'judul' => 'Studium Generale HIMA Teknologi Perbenihan Dan Penandatangan MoU Dengan 5 Perusahaan Mitra Studi',
            'deskripsi' => 'Polinela, Selasa (13/09/2022). Progam Studi Teknologi Perbenihan Politeknik Negeri Lampung mengadakan kuliah umum dengan tema “Membangun Pertanian Melalui Benih Unggul, Bermutu, dan Bersertifikasi” dan penandatanganan MoU dengan 5 perusahaan mitra studi. Kelima perusahan tersebut  adalah PT. Agri Makmur Pertiwi, PT. Habibi Digital Nusantara dan Metro Garden, CV. Maju Sejahtera Inti, PT. Marm Maju Sejahtera, dan Firma Bandulbesi Istana Benih. Acara yang berlansung di Gedung Sakura Politeknik Negeri Lampung pada hari Sabtu 12 September 2022 tersebut dihadiri oleh  jajaran Direksi Polinela, 5 Pimpinan perusahaan mitra studi yang melaksanakan penandatanganan MoU pada acara tersebut.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 5,
            'foto' => '/assets/images/data/1667352790_Polinela-Mahasiswa-Polinela-terpilih-Global-Youth-Action-1.jpg',
            'judul' => 'Mahasiswa Politeknik Negeri Lampung Ikuti Global Youth Action 2022',
            'deskripsi' => 'Polinela, Jum’at (09/09/2022). Kesempatan mahasiswa untuk berkuliah di kampus luar negeri hingga berkarier di kancah Internasional semakin terbuka lebar. Terdapatnya berbagai program beasiswa yang berasal dari Pemerintah, Perguruan Tinggi, dan Organisasi dengan mudah melebarkan kesempatan kepada calon mahasiswa maupun mahasiswa Indonesia untuk melanjutkan studi di luar negeri. Riki Saputra merupakan mahasiswa aktif Program Studi Produksi dan Manajemen Industri Perkebunan, Jurusan Budidaya Tanaman Perkebunan Politeknik Negeri Lampung angkatan 2020 adalah seorang mahasiswa yang gemar mencoba hal baru dan sangat aktif berkompetisi, baik tingkat nasional dan mencoba untuk mengikuti kegiatan mahasiswa dalam ajang internasional. Motivasinya bersemangat dalam perkuliahan dan mengikuti berbagai perlombaan adalah dedikasi untuk kedua orang tuanya yang sudah berpulang.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 5,
            'foto' => '/assets/images/data/1667352844_Polinela-Pekan-Seni-Mahasiswa-Provinsi-3.jpg',
            'judul' => 'Polinela Menjadi Tuan Rumah Peksimprov Lampung Tahun 2022 Cabang Baca Puisi',
            'deskripsi' => 'Polinela, Senin (05/09/2022). Politeknik Negeri Lampung (POLINELA) menjadi tuan rumah Pekan Seni Mahasiswa (Peksimprov) 2022 Provinsi Lampung,  cabang baca puisi yang dilaksanakan di Gedung Serba Guna Polinela pada hari Sabtu, 3 September 2022. Peksimprov merupakan kegiatan yang bertujuan memberikan wadah bagi mahasiswa dalam meningkatkan kualitas dan kemampuan praktis mahasiswa dalam bidang seni, baik seni suara, seni pertunjukan, seni sastra, maupun seni rupa. Dengan adanya kegiatan ini, diharapkan para mahasiswa mampu meningkatkan sekaligus mengembangkan prestasi dan kreasi seninya untuk memperkaya budaya bangsa. Dalam kesempatan ini hal yang dinilai oleh tim juri yaitu Penafsiran/Interpretasi 35%, Vokalisasi 35%, dan Ekspresi 30%',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 5,
            'foto' => '/assets/images/data/1667352872_Polinela-Satuan-Tugas-Satgas-Pencegahan-dan-Penanganan-Kekerasan-Seksual-PPKS-1.jpg',
            'judul' => 'Uji Publik Calon Panitia Seleksi Politeknik Negeri Lampung',
            'deskripsi' => 'Polinela, Selasa (30/08/2022). Pelaksanaan kegiatan uji publik untuk calon panitia seleksi Pencegahan dan Penanganan Kekerasan seksual (PPKS) di lingkungan Politeknik Negeri Lampung yang dilaksanakan pada tanggal 29 agustus 2022 pukul 13.30 WIB. Acara yang dilaksanakan melalui video conference Zoom Meetting dan yang dihadiri oleh 13 peserta tersebut dibuka oleh Agung Adi Candra, S.Kh., M.Si. selaku Pembantu Direktur III, dan juga dihadiri oleh Dra. Dewayani Diah Savitrì M.Hum. sebagai pemerhati gender dan perempuan.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 5,
            'foto' => '/assets/images/data/1667352901_Polinela-PKKMB-2022-Hari-Kedua-2.jpg',
            'judul' => 'Pengukuhan Peserta PKKMB Polinela Tahun 2022',
            'deskripsi' => 'Polinela, Kamis (25/08/2022). Pelaksanaan Hari ke-2 PKKMB TA 2022 diawali dengan pembukaan oleh Direktur Politeknik Negeri Lampung Dr. Ir Sarono, M.Si. dan pengukuhan mahasiswa oleh Ketua Senat, kegiatan di laksanakan di Gedung serba Guna Polinela.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);


        // 6

        DB::table('gallery_image')->insert([
            'id_ukm' => 6,
            'foto' => '/assets/images/data/1667352688_smart_green_house_polihidro_farm_polinela2.jpg',
            'judul' => 'Politeknik Negeri Lampung Kini Miliki Smart Green House Polihidro Farm',
            'deskripsi' => 'Senin, (16/12/2019), Direktur Politeknik Negeri Lampung, Dr. Ir. Sarono, M.Si. beserta jajaran direksi, resmikan Smart Green House “Polihidro Farm”.Politeknik Negeri Lampung kini telah memiliki Green House modern dengan yang resmi diberi nama ‘POLIHIDRO FARM’. Polihidro Farm adalah green house yang dikhususkan untuk penanaman berbagai tanaman hidroponik, seperti pagoda, pakcoy, selada merah, kangkung dan lain-lain.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 6,
            'foto' => '/assets/images/data/1667352753_Polinela-Kuliah-Umum-Teknologi-Perbenihan-Prof-M-Syukur-5.jpg',
            'judul' => 'Studium Generale HIMA Teknologi Perbenihan Dan Penandatangan MoU Dengan 5 Perusahaan Mitra Studi',
            'deskripsi' => 'Polinela, Selasa (13/09/2022). Progam Studi Teknologi Perbenihan Politeknik Negeri Lampung mengadakan kuliah umum dengan tema “Membangun Pertanian Melalui Benih Unggul, Bermutu, dan Bersertifikasi” dan penandatanganan MoU dengan 5 perusahaan mitra studi. Kelima perusahan tersebut  adalah PT. Agri Makmur Pertiwi, PT. Habibi Digital Nusantara dan Metro Garden, CV. Maju Sejahtera Inti, PT. Marm Maju Sejahtera, dan Firma Bandulbesi Istana Benih. Acara yang berlansung di Gedung Sakura Politeknik Negeri Lampung pada hari Sabtu 12 September 2022 tersebut dihadiri oleh  jajaran Direksi Polinela, 5 Pimpinan perusahaan mitra studi yang melaksanakan penandatanganan MoU pada acara tersebut.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 6,
            'foto' => '/assets/images/data/1667352790_Polinela-Mahasiswa-Polinela-terpilih-Global-Youth-Action-1.jpg',
            'judul' => 'Mahasiswa Politeknik Negeri Lampung Ikuti Global Youth Action 2022',
            'deskripsi' => 'Polinela, Jum’at (09/09/2022). Kesempatan mahasiswa untuk berkuliah di kampus luar negeri hingga berkarier di kancah Internasional semakin terbuka lebar. Terdapatnya berbagai program beasiswa yang berasal dari Pemerintah, Perguruan Tinggi, dan Organisasi dengan mudah melebarkan kesempatan kepada calon mahasiswa maupun mahasiswa Indonesia untuk melanjutkan studi di luar negeri. Riki Saputra merupakan mahasiswa aktif Program Studi Produksi dan Manajemen Industri Perkebunan, Jurusan Budidaya Tanaman Perkebunan Politeknik Negeri Lampung angkatan 2020 adalah seorang mahasiswa yang gemar mencoba hal baru dan sangat aktif berkompetisi, baik tingkat nasional dan mencoba untuk mengikuti kegiatan mahasiswa dalam ajang internasional. Motivasinya bersemangat dalam perkuliahan dan mengikuti berbagai perlombaan adalah dedikasi untuk kedua orang tuanya yang sudah berpulang.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 6,
            'foto' => '/assets/images/data/1667352844_Polinela-Pekan-Seni-Mahasiswa-Provinsi-3.jpg',
            'judul' => 'Polinela Menjadi Tuan Rumah Peksimprov Lampung Tahun 2022 Cabang Baca Puisi',
            'deskripsi' => 'Polinela, Senin (05/09/2022). Politeknik Negeri Lampung (POLINELA) menjadi tuan rumah Pekan Seni Mahasiswa (Peksimprov) 2022 Provinsi Lampung,  cabang baca puisi yang dilaksanakan di Gedung Serba Guna Polinela pada hari Sabtu, 3 September 2022. Peksimprov merupakan kegiatan yang bertujuan memberikan wadah bagi mahasiswa dalam meningkatkan kualitas dan kemampuan praktis mahasiswa dalam bidang seni, baik seni suara, seni pertunjukan, seni sastra, maupun seni rupa. Dengan adanya kegiatan ini, diharapkan para mahasiswa mampu meningkatkan sekaligus mengembangkan prestasi dan kreasi seninya untuk memperkaya budaya bangsa. Dalam kesempatan ini hal yang dinilai oleh tim juri yaitu Penafsiran/Interpretasi 35%, Vokalisasi 35%, dan Ekspresi 30%',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 6,
            'foto' => '/assets/images/data/1667352872_Polinela-Satuan-Tugas-Satgas-Pencegahan-dan-Penanganan-Kekerasan-Seksual-PPKS-1.jpg',
            'judul' => 'Uji Publik Calon Panitia Seleksi Politeknik Negeri Lampung',
            'deskripsi' => 'Polinela, Selasa (30/08/2022). Pelaksanaan kegiatan uji publik untuk calon panitia seleksi Pencegahan dan Penanganan Kekerasan seksual (PPKS) di lingkungan Politeknik Negeri Lampung yang dilaksanakan pada tanggal 29 agustus 2022 pukul 13.30 WIB. Acara yang dilaksanakan melalui video conference Zoom Meetting dan yang dihadiri oleh 13 peserta tersebut dibuka oleh Agung Adi Candra, S.Kh., M.Si. selaku Pembantu Direktur III, dan juga dihadiri oleh Dra. Dewayani Diah Savitrì M.Hum. sebagai pemerhati gender dan perempuan.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 6,
            'foto' => '/assets/images/data/1667352901_Polinela-PKKMB-2022-Hari-Kedua-2.jpg',
            'judul' => 'Pengukuhan Peserta PKKMB Polinela Tahun 2022',
            'deskripsi' => 'Polinela, Kamis (25/08/2022). Pelaksanaan Hari ke-2 PKKMB TA 2022 diawali dengan pembukaan oleh Direktur Politeknik Negeri Lampung Dr. Ir Sarono, M.Si. dan pengukuhan mahasiswa oleh Ketua Senat, kegiatan di laksanakan di Gedung serba Guna Polinela.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);


        // 7

        DB::table('gallery_image')->insert([
            'id_ukm' => 7,
            'foto' => '/assets/images/data/1667352688_smart_green_house_polihidro_farm_polinela2.jpg',
            'judul' => 'Politeknik Negeri Lampung Kini Miliki Smart Green House Polihidro Farm',
            'deskripsi' => 'Senin, (16/12/2019), Direktur Politeknik Negeri Lampung, Dr. Ir. Sarono, M.Si. beserta jajaran direksi, resmikan Smart Green House “Polihidro Farm”.Politeknik Negeri Lampung kini telah memiliki Green House modern dengan yang resmi diberi nama ‘POLIHIDRO FARM’. Polihidro Farm adalah green house yang dikhususkan untuk penanaman berbagai tanaman hidroponik, seperti pagoda, pakcoy, selada merah, kangkung dan lain-lain.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 7,
            'foto' => '/assets/images/data/1667352753_Polinela-Kuliah-Umum-Teknologi-Perbenihan-Prof-M-Syukur-5.jpg',
            'judul' => 'Studium Generale HIMA Teknologi Perbenihan Dan Penandatangan MoU Dengan 5 Perusahaan Mitra Studi',
            'deskripsi' => 'Polinela, Selasa (13/09/2022). Progam Studi Teknologi Perbenihan Politeknik Negeri Lampung mengadakan kuliah umum dengan tema “Membangun Pertanian Melalui Benih Unggul, Bermutu, dan Bersertifikasi” dan penandatanganan MoU dengan 5 perusahaan mitra studi. Kelima perusahan tersebut  adalah PT. Agri Makmur Pertiwi, PT. Habibi Digital Nusantara dan Metro Garden, CV. Maju Sejahtera Inti, PT. Marm Maju Sejahtera, dan Firma Bandulbesi Istana Benih. Acara yang berlansung di Gedung Sakura Politeknik Negeri Lampung pada hari Sabtu 12 September 2022 tersebut dihadiri oleh  jajaran Direksi Polinela, 5 Pimpinan perusahaan mitra studi yang melaksanakan penandatanganan MoU pada acara tersebut.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 7,
            'foto' => '/assets/images/data/1667352790_Polinela-Mahasiswa-Polinela-terpilih-Global-Youth-Action-1.jpg',
            'judul' => 'Mahasiswa Politeknik Negeri Lampung Ikuti Global Youth Action 2022',
            'deskripsi' => 'Polinela, Jum’at (09/09/2022). Kesempatan mahasiswa untuk berkuliah di kampus luar negeri hingga berkarier di kancah Internasional semakin terbuka lebar. Terdapatnya berbagai program beasiswa yang berasal dari Pemerintah, Perguruan Tinggi, dan Organisasi dengan mudah melebarkan kesempatan kepada calon mahasiswa maupun mahasiswa Indonesia untuk melanjutkan studi di luar negeri. Riki Saputra merupakan mahasiswa aktif Program Studi Produksi dan Manajemen Industri Perkebunan, Jurusan Budidaya Tanaman Perkebunan Politeknik Negeri Lampung angkatan 2020 adalah seorang mahasiswa yang gemar mencoba hal baru dan sangat aktif berkompetisi, baik tingkat nasional dan mencoba untuk mengikuti kegiatan mahasiswa dalam ajang internasional. Motivasinya bersemangat dalam perkuliahan dan mengikuti berbagai perlombaan adalah dedikasi untuk kedua orang tuanya yang sudah berpulang.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 7,
            'foto' => '/assets/images/data/1667352844_Polinela-Pekan-Seni-Mahasiswa-Provinsi-3.jpg',
            'judul' => 'Polinela Menjadi Tuan Rumah Peksimprov Lampung Tahun 2022 Cabang Baca Puisi',
            'deskripsi' => 'Polinela, Senin (05/09/2022). Politeknik Negeri Lampung (POLINELA) menjadi tuan rumah Pekan Seni Mahasiswa (Peksimprov) 2022 Provinsi Lampung,  cabang baca puisi yang dilaksanakan di Gedung Serba Guna Polinela pada hari Sabtu, 3 September 2022. Peksimprov merupakan kegiatan yang bertujuan memberikan wadah bagi mahasiswa dalam meningkatkan kualitas dan kemampuan praktis mahasiswa dalam bidang seni, baik seni suara, seni pertunjukan, seni sastra, maupun seni rupa. Dengan adanya kegiatan ini, diharapkan para mahasiswa mampu meningkatkan sekaligus mengembangkan prestasi dan kreasi seninya untuk memperkaya budaya bangsa. Dalam kesempatan ini hal yang dinilai oleh tim juri yaitu Penafsiran/Interpretasi 35%, Vokalisasi 35%, dan Ekspresi 30%',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 7,
            'foto' => '/assets/images/data/1667352872_Polinela-Satuan-Tugas-Satgas-Pencegahan-dan-Penanganan-Kekerasan-Seksual-PPKS-1.jpg',
            'judul' => 'Uji Publik Calon Panitia Seleksi Politeknik Negeri Lampung',
            'deskripsi' => 'Polinela, Selasa (30/08/2022). Pelaksanaan kegiatan uji publik untuk calon panitia seleksi Pencegahan dan Penanganan Kekerasan seksual (PPKS) di lingkungan Politeknik Negeri Lampung yang dilaksanakan pada tanggal 29 agustus 2022 pukul 13.30 WIB. Acara yang dilaksanakan melalui video conference Zoom Meetting dan yang dihadiri oleh 13 peserta tersebut dibuka oleh Agung Adi Candra, S.Kh., M.Si. selaku Pembantu Direktur III, dan juga dihadiri oleh Dra. Dewayani Diah Savitrì M.Hum. sebagai pemerhati gender dan perempuan.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 7,
            'foto' => '/assets/images/data/1667352901_Polinela-PKKMB-2022-Hari-Kedua-2.jpg',
            'judul' => 'Pengukuhan Peserta PKKMB Polinela Tahun 2022',
            'deskripsi' => 'Polinela, Kamis (25/08/2022). Pelaksanaan Hari ke-2 PKKMB TA 2022 diawali dengan pembukaan oleh Direktur Politeknik Negeri Lampung Dr. Ir Sarono, M.Si. dan pengukuhan mahasiswa oleh Ketua Senat, kegiatan di laksanakan di Gedung serba Guna Polinela.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);


        // 8

        DB::table('gallery_image')->insert([
            'id_ukm' => 8,
            'foto' => '/assets/images/data/1667352688_smart_green_house_polihidro_farm_polinela2.jpg',
            'judul' => 'Politeknik Negeri Lampung Kini Miliki Smart Green House Polihidro Farm',
            'deskripsi' => 'Senin, (16/12/2019), Direktur Politeknik Negeri Lampung, Dr. Ir. Sarono, M.Si. beserta jajaran direksi, resmikan Smart Green House “Polihidro Farm”.Politeknik Negeri Lampung kini telah memiliki Green House modern dengan yang resmi diberi nama ‘POLIHIDRO FARM’. Polihidro Farm adalah green house yang dikhususkan untuk penanaman berbagai tanaman hidroponik, seperti pagoda, pakcoy, selada merah, kangkung dan lain-lain.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 8,
            'foto' => '/assets/images/data/1667352753_Polinela-Kuliah-Umum-Teknologi-Perbenihan-Prof-M-Syukur-5.jpg',
            'judul' => 'Studium Generale HIMA Teknologi Perbenihan Dan Penandatangan MoU Dengan 5 Perusahaan Mitra Studi',
            'deskripsi' => 'Polinela, Selasa (13/09/2022). Progam Studi Teknologi Perbenihan Politeknik Negeri Lampung mengadakan kuliah umum dengan tema “Membangun Pertanian Melalui Benih Unggul, Bermutu, dan Bersertifikasi” dan penandatanganan MoU dengan 5 perusahaan mitra studi. Kelima perusahan tersebut  adalah PT. Agri Makmur Pertiwi, PT. Habibi Digital Nusantara dan Metro Garden, CV. Maju Sejahtera Inti, PT. Marm Maju Sejahtera, dan Firma Bandulbesi Istana Benih. Acara yang berlansung di Gedung Sakura Politeknik Negeri Lampung pada hari Sabtu 12 September 2022 tersebut dihadiri oleh  jajaran Direksi Polinela, 5 Pimpinan perusahaan mitra studi yang melaksanakan penandatanganan MoU pada acara tersebut.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 8,
            'foto' => '/assets/images/data/1667352790_Polinela-Mahasiswa-Polinela-terpilih-Global-Youth-Action-1.jpg',
            'judul' => 'Mahasiswa Politeknik Negeri Lampung Ikuti Global Youth Action 2022',
            'deskripsi' => 'Polinela, Jum’at (09/09/2022). Kesempatan mahasiswa untuk berkuliah di kampus luar negeri hingga berkarier di kancah Internasional semakin terbuka lebar. Terdapatnya berbagai program beasiswa yang berasal dari Pemerintah, Perguruan Tinggi, dan Organisasi dengan mudah melebarkan kesempatan kepada calon mahasiswa maupun mahasiswa Indonesia untuk melanjutkan studi di luar negeri. Riki Saputra merupakan mahasiswa aktif Program Studi Produksi dan Manajemen Industri Perkebunan, Jurusan Budidaya Tanaman Perkebunan Politeknik Negeri Lampung angkatan 2020 adalah seorang mahasiswa yang gemar mencoba hal baru dan sangat aktif berkompetisi, baik tingkat nasional dan mencoba untuk mengikuti kegiatan mahasiswa dalam ajang internasional. Motivasinya bersemangat dalam perkuliahan dan mengikuti berbagai perlombaan adalah dedikasi untuk kedua orang tuanya yang sudah berpulang.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 8,
            'foto' => '/assets/images/data/1667352844_Polinela-Pekan-Seni-Mahasiswa-Provinsi-3.jpg',
            'judul' => 'Polinela Menjadi Tuan Rumah Peksimprov Lampung Tahun 2022 Cabang Baca Puisi',
            'deskripsi' => 'Polinela, Senin (05/09/2022). Politeknik Negeri Lampung (POLINELA) menjadi tuan rumah Pekan Seni Mahasiswa (Peksimprov) 2022 Provinsi Lampung,  cabang baca puisi yang dilaksanakan di Gedung Serba Guna Polinela pada hari Sabtu, 3 September 2022. Peksimprov merupakan kegiatan yang bertujuan memberikan wadah bagi mahasiswa dalam meningkatkan kualitas dan kemampuan praktis mahasiswa dalam bidang seni, baik seni suara, seni pertunjukan, seni sastra, maupun seni rupa. Dengan adanya kegiatan ini, diharapkan para mahasiswa mampu meningkatkan sekaligus mengembangkan prestasi dan kreasi seninya untuk memperkaya budaya bangsa. Dalam kesempatan ini hal yang dinilai oleh tim juri yaitu Penafsiran/Interpretasi 35%, Vokalisasi 35%, dan Ekspresi 30%',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 8,
            'foto' => '/assets/images/data/1667352872_Polinela-Satuan-Tugas-Satgas-Pencegahan-dan-Penanganan-Kekerasan-Seksual-PPKS-1.jpg',
            'judul' => 'Uji Publik Calon Panitia Seleksi Politeknik Negeri Lampung',
            'deskripsi' => 'Polinela, Selasa (30/08/2022). Pelaksanaan kegiatan uji publik untuk calon panitia seleksi Pencegahan dan Penanganan Kekerasan seksual (PPKS) di lingkungan Politeknik Negeri Lampung yang dilaksanakan pada tanggal 29 agustus 2022 pukul 13.30 WIB. Acara yang dilaksanakan melalui video conference Zoom Meetting dan yang dihadiri oleh 13 peserta tersebut dibuka oleh Agung Adi Candra, S.Kh., M.Si. selaku Pembantu Direktur III, dan juga dihadiri oleh Dra. Dewayani Diah Savitrì M.Hum. sebagai pemerhati gender dan perempuan.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('gallery_image')->insert([
            'id_ukm' => 8,
            'foto' => '/assets/images/data/1667352901_Polinela-PKKMB-2022-Hari-Kedua-2.jpg',
            'judul' => 'Pengukuhan Peserta PKKMB Polinela Tahun 2022',
            'deskripsi' => 'Polinela, Kamis (25/08/2022). Pelaksanaan Hari ke-2 PKKMB TA 2022 diawali dengan pembukaan oleh Direktur Politeknik Negeri Lampung Dr. Ir Sarono, M.Si. dan pengukuhan mahasiswa oleh Ketua Senat, kegiatan di laksanakan di Gedung serba Guna Polinela.',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);
    }
}
