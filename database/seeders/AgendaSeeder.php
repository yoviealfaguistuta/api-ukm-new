<?php

namespace Database\Seeders;

use App\Models\Pabrik;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agenda')->insert([
            'id_ukm' => 1,
            'title' => 'Webinar Dan Pelatihan Memburu Peluang Kerja Polinela',
            'content' => '<p><strong>? Tabik Pun&nbsp;</strong><br>Apa kabar para pejuang tugas akhir ??<br>UPT. Pusat Karir Polinela mempunyai Program Kerja tahunan yaitu &ldquo;Pelatihan Memburu Peluang Kerja&rdquo; dengan sasaran yaitu para calon alumni polinela tahun 2020 yang akan di adakan secara Daring pada tanggal 17 september 2020<br>yuk segera daftarkan diri anda pada link berikut untuk menjadi alumni yang siap menghadapi kerasnya persaingan dunia kerja ???<span id="more-2697"></span></p>
            <p>Pendaftaran Gratis, Free E-Sertifikat loh Link pendaftaran : bit.ly/registrasimpk20</p>
            <p>Cp. 0895-4135-95011 <strong>(Sandi)</strong><br>0896-3101-9333 <strong>(Ririn)</strong></p>',
            'image' => '/assets/images/data/1667351733_UPT-KARIR.jpeg',
            'lokasi' => 'Zoom',
            'tanggal' => '2022-09-17',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('agenda')->insert([
            'id_ukm' => 1,
            'title' => 'Seleksi Penerimaan Mahasiswa Baru Jalur Mandiri (UM) Politeknik Negeri Lampung T.A. 2020/2021',
            'content' => '<p>Jalur Mandiri adalah salah satu jalur seleksi penerimaan mahasiswa baru di Politeknik Negeri Lampung. Jika sebelumnya penerimaan Mahasiswa Baru jalur Mandiri dilakukan Ujian Tulis,&nbsp;<span id="more-2252"></span>per-tahun ini, dikarenakan adanya pandemi Covid-19, maka pelaksanaan Seleksi Jalur Mandiri 2020 diselenggarakan seperti layaknya SBMPN yakni melalui mekanisme seleksi Portofolio.<span id="more-2411"></span></p>
            <p>Link Pendaftaran :&nbsp;<a href="https://bit.ly/UMPolinela2020">bit.ly/UMPolinela2020&nbsp;&nbsp;</a>Pilih Tombol &ldquo;Daftar&rdquo;</p>
            <p>Mekanisme Pendaftaran</p>
            <figure id="attachment_2412" class="wp-caption alignnone" aria-describedby="caption-attachment-2412"><img class="size-full wp-image-2412" src="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg" sizes="(max-width: 1035px) 100vw, 1035px" srcset="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg 1035w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-300x186.jpg 300w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-1024x634.jpg 1024w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-768x476.jpg 768w" alt="tahap_pendaftaran_um2020" width="1035" height="641" loading="lazy">
            <figcaption id="caption-attachment-2412" class="wp-caption-text">Mekanisme Pendaftaran Seleksi Mandiri Polinela 2020</figcaption>
            </figure>
            <h2>Syarat Pendaftaran</h2>
            <ol class="messages">
            <li>Lulusan Sekolah Menengah Atas, Madrasah Aliyah dan atau Sekolah Menengah Kejuruan dengan Jurusan atau bidang studi yang sesuai dengan Program Studi Pilihan</li>
            <li>Umur maksimal 22 tahun pada tanggal 1 September 2020</li>
            <li>Berjiwa dan berbadan sehat, dan tidak buta warna. (didukung dengan Surat Keterangan Sehat dari Dokter). Pengecekan kesehatan dan buta warna akan dilakukan pada saat tahap wawancara, apabila terbukti buta warna maka yang bersangkutan dinyatakan GUGUR.</li>
            <li>Warga Negara Asing Bagi WNA harus dengan ijin Direktorat Jenderal Kelembagaan, Kementerian Riset Teknologi dan Pendidikan Tinggi. sesuai dengan Peraturan Menteri Pendidikan Nasional Republik Indonesia Nomor 25 Tahun 2007 tanggal 19 Juli 2007 tentang Persyaratan dan Prosedur bagi Warga Negara Asing untuk menjadi Mahasiswa pada Perguruan Tinggi di Indonesia.</li>
            <li><strong>Memiliki email pribadi</strong>. Email (surel) pribadi yang digunakan harus email aktif, karena informasi tentang pendaftaran dan tahapan pendaftaran akan dikirimkan ke email pendaftar.</li>
            <li><strong>Memiliki User Akun Pendaftaran Online</strong>. User akun pendaftaran online didapatkan dengan cara melakukan registrasi pendaftaran user akun pada laman ini. Hanya jika jalur penerimaan mahasiswa baru (SBMPN/MANDIRI) Politeknik Negeri Lampung telah aktif (dibuka).</li>
            <li>Membayar Biaya Pendaftaran Rp.150.000,-. Pembayaran dilakukan dengan cara mentransfer biaya pendaftaran ke&nbsp;<strong>BANK BNI 46</strong>&nbsp;cabang Malahayati, Nomor Rekening&nbsp;<strong>71059905</strong>&nbsp;atas nama&nbsp;<strong>Politeknik Negeri Lampung</strong>&nbsp;Informasi lengkap pembayaran biaya pendaftaran akan Anda dapatkan setelah Anda login ke sistem pendaftaran online untuk pertama kali (tahap inisialisasi).</li>
            <li><strong>Melakukan Registrasi Data Pendaftaran Online</strong>. Pendaftar wajib melakukan dan menyelesaikan setiap tahapan registrasi data pendaftaran online pada layanan pendaftaran online.</li>
            <li><strong>Mengikuti Seluruh Tahapan Seleksi</strong>. Pendaftar wajib mengikuti dan menyelesaikan setiap tahapan seleksi pendaftaran mahasiswa baru yang telah ditentukan.</li>
            </ol>
            <p>sebelum mendaftar pastikan kelengkapan dan format dokumen yang harus disiapkan, yakni :</p>
            <table class="table table-striped small">
            <tbody>
            <tr>
            <th>No.</th>
            <th>NAMA DOKUMEN</th>
            <th>FORMAT FILE</th>
            <th>UKURAN FILE MAKSIMAL</th>
            </tr>
            <tr>
            <td>1</td>
            <td>IJAZAH atau SKL SMA/SMK/MA/Sederajat</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>2</td>
            <td>RAPORT</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 1</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 2</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 3</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 4</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 5</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 6</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>3</td>
            <td>FORM NILAI KEJURUAN<br><small>Bagi pendaftar berasal dari SMK/MAK</small></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>4</td>
            <td>KARTU KELUARGA (KK)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>5</td>
            <td>KARTU TANDA PENDUDUK (KTP) atau KARTU INDUK ANAK (KIA)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>6</td>
            <td>SERTIFIKAT/PIAGAM PRESTASI AKADEMIK DAN NON AKADEMIK<br><em>Jika memiliki lampirkan.</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>7</td>
            <td>KARTU INDONESIA PINTAR-KULIAH(KIP).<br><em>Bagi Pendaftar beasiswa KIP-KULIAH</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>8</td>
            <td>SURAT KETERANGAN KESANGGUPAN PEMBAYARAN BIAYA SPI.<br><em>Template dokumen dapat di Unduh di sistem pada saat registrasi pendaftaran</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>9</td>
            <td>Pas Photo Berwarna.<br><small>file foto dengan dimensi/ukuran Maksimal 500&times;500 pixel.</small></td>
            <td>JPG, JPEG dan PNG ( *.JPG, *.JPEG, atau *.PNG)</td>
            <td>1 MB</td>
            </tr>
            </tbody>
            </table>
            <h4>Sangat tidak disarankan penggunaan perangkat smartphone/handphone pada saat tahap registrasi.</h4>',
            'image' => '/assets/images/data/1667351991_Iklan-UM.jpg',
            'lokasi' => 'POLINELA',
            'tanggal' => '2020-07-16',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);


        // 2

        DB::table('agenda')->insert([
            'id_ukm' => 2,
            'title' => 'Webinar Dan Pelatihan Memburu Peluang Kerja Polinela',
            'content' => '<p><strong>? Tabik Pun&nbsp;</strong><br>Apa kabar para pejuang tugas akhir ??<br>UPT. Pusat Karir Polinela mempunyai Program Kerja tahunan yaitu &ldquo;Pelatihan Memburu Peluang Kerja&rdquo; dengan sasaran yaitu para calon alumni polinela tahun 2020 yang akan di adakan secara Daring pada tanggal 17 september 2020<br>yuk segera daftarkan diri anda pada link berikut untuk menjadi alumni yang siap menghadapi kerasnya persaingan dunia kerja ???<span id="more-2697"></span></p>
            <p>Pendaftaran Gratis, Free E-Sertifikat loh Link pendaftaran : bit.ly/registrasimpk20</p>
            <p>Cp. 0895-4135-95011 <strong>(Sandi)</strong><br>0896-3101-9333 <strong>(Ririn)</strong></p>',
            'image' => '/assets/images/data/1667351733_UPT-KARIR.jpeg',
            'lokasi' => 'Zoom',
            'tanggal' => '2022-09-17',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('agenda')->insert([
            'id_ukm' => 2,
            'title' => 'Seleksi Penerimaan Mahasiswa Baru Jalur Mandiri (UM) Politeknik Negeri Lampung T.A. 2020/2021',
            'content' => '<p>Jalur Mandiri adalah salah satu jalur seleksi penerimaan mahasiswa baru di Politeknik Negeri Lampung. Jika sebelumnya penerimaan Mahasiswa Baru jalur Mandiri dilakukan Ujian Tulis,&nbsp;<span id="more-2252"></span>per-tahun ini, dikarenakan adanya pandemi Covid-19, maka pelaksanaan Seleksi Jalur Mandiri 2020 diselenggarakan seperti layaknya SBMPN yakni melalui mekanisme seleksi Portofolio.<span id="more-2411"></span></p>
            <p>Link Pendaftaran :&nbsp;<a href="https://bit.ly/UMPolinela2020">bit.ly/UMPolinela2020&nbsp;&nbsp;</a>Pilih Tombol &ldquo;Daftar&rdquo;</p>
            <p>Mekanisme Pendaftaran</p>
            <figure id="attachment_2412" class="wp-caption alignnone" aria-describedby="caption-attachment-2412"><img class="size-full wp-image-2412" src="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg" sizes="(max-width: 1035px) 100vw, 1035px" srcset="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg 1035w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-300x186.jpg 300w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-1024x634.jpg 1024w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-768x476.jpg 768w" alt="tahap_pendaftaran_um2020" width="1035" height="641" loading="lazy">
            <figcaption id="caption-attachment-2412" class="wp-caption-text">Mekanisme Pendaftaran Seleksi Mandiri Polinela 2020</figcaption>
            </figure>
            <h2>Syarat Pendaftaran</h2>
            <ol class="messages">
            <li>Lulusan Sekolah Menengah Atas, Madrasah Aliyah dan atau Sekolah Menengah Kejuruan dengan Jurusan atau bidang studi yang sesuai dengan Program Studi Pilihan</li>
            <li>Umur maksimal 22 tahun pada tanggal 1 September 2020</li>
            <li>Berjiwa dan berbadan sehat, dan tidak buta warna. (didukung dengan Surat Keterangan Sehat dari Dokter). Pengecekan kesehatan dan buta warna akan dilakukan pada saat tahap wawancara, apabila terbukti buta warna maka yang bersangkutan dinyatakan GUGUR.</li>
            <li>Warga Negara Asing Bagi WNA harus dengan ijin Direktorat Jenderal Kelembagaan, Kementerian Riset Teknologi dan Pendidikan Tinggi. sesuai dengan Peraturan Menteri Pendidikan Nasional Republik Indonesia Nomor 25 Tahun 2007 tanggal 19 Juli 2007 tentang Persyaratan dan Prosedur bagi Warga Negara Asing untuk menjadi Mahasiswa pada Perguruan Tinggi di Indonesia.</li>
            <li><strong>Memiliki email pribadi</strong>. Email (surel) pribadi yang digunakan harus email aktif, karena informasi tentang pendaftaran dan tahapan pendaftaran akan dikirimkan ke email pendaftar.</li>
            <li><strong>Memiliki User Akun Pendaftaran Online</strong>. User akun pendaftaran online didapatkan dengan cara melakukan registrasi pendaftaran user akun pada laman ini. Hanya jika jalur penerimaan mahasiswa baru (SBMPN/MANDIRI) Politeknik Negeri Lampung telah aktif (dibuka).</li>
            <li>Membayar Biaya Pendaftaran Rp.150.000,-. Pembayaran dilakukan dengan cara mentransfer biaya pendaftaran ke&nbsp;<strong>BANK BNI 46</strong>&nbsp;cabang Malahayati, Nomor Rekening&nbsp;<strong>71059905</strong>&nbsp;atas nama&nbsp;<strong>Politeknik Negeri Lampung</strong>&nbsp;Informasi lengkap pembayaran biaya pendaftaran akan Anda dapatkan setelah Anda login ke sistem pendaftaran online untuk pertama kali (tahap inisialisasi).</li>
            <li><strong>Melakukan Registrasi Data Pendaftaran Online</strong>. Pendaftar wajib melakukan dan menyelesaikan setiap tahapan registrasi data pendaftaran online pada layanan pendaftaran online.</li>
            <li><strong>Mengikuti Seluruh Tahapan Seleksi</strong>. Pendaftar wajib mengikuti dan menyelesaikan setiap tahapan seleksi pendaftaran mahasiswa baru yang telah ditentukan.</li>
            </ol>
            <p>sebelum mendaftar pastikan kelengkapan dan format dokumen yang harus disiapkan, yakni :</p>
            <table class="table table-striped small">
            <tbody>
            <tr>
            <th>No.</th>
            <th>NAMA DOKUMEN</th>
            <th>FORMAT FILE</th>
            <th>UKURAN FILE MAKSIMAL</th>
            </tr>
            <tr>
            <td>1</td>
            <td>IJAZAH atau SKL SMA/SMK/MA/Sederajat</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>2</td>
            <td>RAPORT</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 1</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 2</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 3</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 4</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 5</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 6</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>3</td>
            <td>FORM NILAI KEJURUAN<br><small>Bagi pendaftar berasal dari SMK/MAK</small></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>4</td>
            <td>KARTU KELUARGA (KK)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>5</td>
            <td>KARTU TANDA PENDUDUK (KTP) atau KARTU INDUK ANAK (KIA)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>6</td>
            <td>SERTIFIKAT/PIAGAM PRESTASI AKADEMIK DAN NON AKADEMIK<br><em>Jika memiliki lampirkan.</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>7</td>
            <td>KARTU INDONESIA PINTAR-KULIAH(KIP).<br><em>Bagi Pendaftar beasiswa KIP-KULIAH</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>8</td>
            <td>SURAT KETERANGAN KESANGGUPAN PEMBAYARAN BIAYA SPI.<br><em>Template dokumen dapat di Unduh di sistem pada saat registrasi pendaftaran</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>9</td>
            <td>Pas Photo Berwarna.<br><small>file foto dengan dimensi/ukuran Maksimal 500&times;500 pixel.</small></td>
            <td>JPG, JPEG dan PNG ( *.JPG, *.JPEG, atau *.PNG)</td>
            <td>1 MB</td>
            </tr>
            </tbody>
            </table>
            <h4>Sangat tidak disarankan penggunaan perangkat smartphone/handphone pada saat tahap registrasi.</h4>',
            'image' => '/assets/images/data/1667351991_Iklan-UM.jpg',
            'lokasi' => 'POLINELA',
            'tanggal' => '2020-07-16',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        // 3

        DB::table('agenda')->insert([
            'id_ukm' => 3,
            'title' => 'Webinar Dan Pelatihan Memburu Peluang Kerja Polinela',
            'content' => '<p><strong>? Tabik Pun&nbsp;</strong><br>Apa kabar para pejuang tugas akhir ??<br>UPT. Pusat Karir Polinela mempunyai Program Kerja tahunan yaitu &ldquo;Pelatihan Memburu Peluang Kerja&rdquo; dengan sasaran yaitu para calon alumni polinela tahun 2020 yang akan di adakan secara Daring pada tanggal 17 september 2020<br>yuk segera daftarkan diri anda pada link berikut untuk menjadi alumni yang siap menghadapi kerasnya persaingan dunia kerja ???<span id="more-2697"></span></p>
            <p>Pendaftaran Gratis, Free E-Sertifikat loh Link pendaftaran : bit.ly/registrasimpk20</p>
            <p>Cp. 0895-4135-95011 <strong>(Sandi)</strong><br>0896-3101-9333 <strong>(Ririn)</strong></p>',
            'image' => '/assets/images/data/1667351733_UPT-KARIR.jpeg',
            'lokasi' => 'Zoom',
            'tanggal' => '2022-09-17',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('agenda')->insert([
            'id_ukm' => 3,
            'title' => 'Seleksi Penerimaan Mahasiswa Baru Jalur Mandiri (UM) Politeknik Negeri Lampung T.A. 2020/2021',
            'content' => '<p>Jalur Mandiri adalah salah satu jalur seleksi penerimaan mahasiswa baru di Politeknik Negeri Lampung. Jika sebelumnya penerimaan Mahasiswa Baru jalur Mandiri dilakukan Ujian Tulis,&nbsp;<span id="more-2252"></span>per-tahun ini, dikarenakan adanya pandemi Covid-19, maka pelaksanaan Seleksi Jalur Mandiri 2020 diselenggarakan seperti layaknya SBMPN yakni melalui mekanisme seleksi Portofolio.<span id="more-2411"></span></p>
            <p>Link Pendaftaran :&nbsp;<a href="https://bit.ly/UMPolinela2020">bit.ly/UMPolinela2020&nbsp;&nbsp;</a>Pilih Tombol &ldquo;Daftar&rdquo;</p>
            <p>Mekanisme Pendaftaran</p>
            <figure id="attachment_2412" class="wp-caption alignnone" aria-describedby="caption-attachment-2412"><img class="size-full wp-image-2412" src="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg" sizes="(max-width: 1035px) 100vw, 1035px" srcset="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg 1035w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-300x186.jpg 300w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-1024x634.jpg 1024w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-768x476.jpg 768w" alt="tahap_pendaftaran_um2020" width="1035" height="641" loading="lazy">
            <figcaption id="caption-attachment-2412" class="wp-caption-text">Mekanisme Pendaftaran Seleksi Mandiri Polinela 2020</figcaption>
            </figure>
            <h2>Syarat Pendaftaran</h2>
            <ol class="messages">
            <li>Lulusan Sekolah Menengah Atas, Madrasah Aliyah dan atau Sekolah Menengah Kejuruan dengan Jurusan atau bidang studi yang sesuai dengan Program Studi Pilihan</li>
            <li>Umur maksimal 22 tahun pada tanggal 1 September 2020</li>
            <li>Berjiwa dan berbadan sehat, dan tidak buta warna. (didukung dengan Surat Keterangan Sehat dari Dokter). Pengecekan kesehatan dan buta warna akan dilakukan pada saat tahap wawancara, apabila terbukti buta warna maka yang bersangkutan dinyatakan GUGUR.</li>
            <li>Warga Negara Asing Bagi WNA harus dengan ijin Direktorat Jenderal Kelembagaan, Kementerian Riset Teknologi dan Pendidikan Tinggi. sesuai dengan Peraturan Menteri Pendidikan Nasional Republik Indonesia Nomor 25 Tahun 2007 tanggal 19 Juli 2007 tentang Persyaratan dan Prosedur bagi Warga Negara Asing untuk menjadi Mahasiswa pada Perguruan Tinggi di Indonesia.</li>
            <li><strong>Memiliki email pribadi</strong>. Email (surel) pribadi yang digunakan harus email aktif, karena informasi tentang pendaftaran dan tahapan pendaftaran akan dikirimkan ke email pendaftar.</li>
            <li><strong>Memiliki User Akun Pendaftaran Online</strong>. User akun pendaftaran online didapatkan dengan cara melakukan registrasi pendaftaran user akun pada laman ini. Hanya jika jalur penerimaan mahasiswa baru (SBMPN/MANDIRI) Politeknik Negeri Lampung telah aktif (dibuka).</li>
            <li>Membayar Biaya Pendaftaran Rp.150.000,-. Pembayaran dilakukan dengan cara mentransfer biaya pendaftaran ke&nbsp;<strong>BANK BNI 46</strong>&nbsp;cabang Malahayati, Nomor Rekening&nbsp;<strong>71059905</strong>&nbsp;atas nama&nbsp;<strong>Politeknik Negeri Lampung</strong>&nbsp;Informasi lengkap pembayaran biaya pendaftaran akan Anda dapatkan setelah Anda login ke sistem pendaftaran online untuk pertama kali (tahap inisialisasi).</li>
            <li><strong>Melakukan Registrasi Data Pendaftaran Online</strong>. Pendaftar wajib melakukan dan menyelesaikan setiap tahapan registrasi data pendaftaran online pada layanan pendaftaran online.</li>
            <li><strong>Mengikuti Seluruh Tahapan Seleksi</strong>. Pendaftar wajib mengikuti dan menyelesaikan setiap tahapan seleksi pendaftaran mahasiswa baru yang telah ditentukan.</li>
            </ol>
            <p>sebelum mendaftar pastikan kelengkapan dan format dokumen yang harus disiapkan, yakni :</p>
            <table class="table table-striped small">
            <tbody>
            <tr>
            <th>No.</th>
            <th>NAMA DOKUMEN</th>
            <th>FORMAT FILE</th>
            <th>UKURAN FILE MAKSIMAL</th>
            </tr>
            <tr>
            <td>1</td>
            <td>IJAZAH atau SKL SMA/SMK/MA/Sederajat</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>2</td>
            <td>RAPORT</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 1</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 2</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 3</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 4</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 5</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 6</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>3</td>
            <td>FORM NILAI KEJURUAN<br><small>Bagi pendaftar berasal dari SMK/MAK</small></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>4</td>
            <td>KARTU KELUARGA (KK)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>5</td>
            <td>KARTU TANDA PENDUDUK (KTP) atau KARTU INDUK ANAK (KIA)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>6</td>
            <td>SERTIFIKAT/PIAGAM PRESTASI AKADEMIK DAN NON AKADEMIK<br><em>Jika memiliki lampirkan.</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>7</td>
            <td>KARTU INDONESIA PINTAR-KULIAH(KIP).<br><em>Bagi Pendaftar beasiswa KIP-KULIAH</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>8</td>
            <td>SURAT KETERANGAN KESANGGUPAN PEMBAYARAN BIAYA SPI.<br><em>Template dokumen dapat di Unduh di sistem pada saat registrasi pendaftaran</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>9</td>
            <td>Pas Photo Berwarna.<br><small>file foto dengan dimensi/ukuran Maksimal 500&times;500 pixel.</small></td>
            <td>JPG, JPEG dan PNG ( *.JPG, *.JPEG, atau *.PNG)</td>
            <td>1 MB</td>
            </tr>
            </tbody>
            </table>
            <h4>Sangat tidak disarankan penggunaan perangkat smartphone/handphone pada saat tahap registrasi.</h4>',
            'image' => '/assets/images/data/1667351991_Iklan-UM.jpg',
            'lokasi' => 'POLINELA',
            'tanggal' => '2020-07-16',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);






        // 4

        DB::table('agenda')->insert([
            'id_ukm' => 4,
            'title' => 'Webinar Dan Pelatihan Memburu Peluang Kerja Polinela',
            'content' => '<p><strong>? Tabik Pun&nbsp;</strong><br>Apa kabar para pejuang tugas akhir ??<br>UPT. Pusat Karir Polinela mempunyai Program Kerja tahunan yaitu &ldquo;Pelatihan Memburu Peluang Kerja&rdquo; dengan sasaran yaitu para calon alumni polinela tahun 2020 yang akan di adakan secara Daring pada tanggal 17 september 2020<br>yuk segera daftarkan diri anda pada link berikut untuk menjadi alumni yang siap menghadapi kerasnya persaingan dunia kerja ???<span id="more-2697"></span></p>
            <p>Pendaftaran Gratis, Free E-Sertifikat loh Link pendaftaran : bit.ly/registrasimpk20</p>
            <p>Cp. 0895-4135-95011 <strong>(Sandi)</strong><br>0896-3101-9333 <strong>(Ririn)</strong></p>',
            'image' => '/assets/images/data/1667351733_UPT-KARIR.jpeg',
            'lokasi' => 'Zoom',
            'tanggal' => '2022-09-17',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('agenda')->insert([
            'id_ukm' => 4,
            'title' => 'Seleksi Penerimaan Mahasiswa Baru Jalur Mandiri (UM) Politeknik Negeri Lampung T.A. 2020/2021',
            'content' => '<p>Jalur Mandiri adalah salah satu jalur seleksi penerimaan mahasiswa baru di Politeknik Negeri Lampung. Jika sebelumnya penerimaan Mahasiswa Baru jalur Mandiri dilakukan Ujian Tulis,&nbsp;<span id="more-2252"></span>per-tahun ini, dikarenakan adanya pandemi Covid-19, maka pelaksanaan Seleksi Jalur Mandiri 2020 diselenggarakan seperti layaknya SBMPN yakni melalui mekanisme seleksi Portofolio.<span id="more-2411"></span></p>
            <p>Link Pendaftaran :&nbsp;<a href="https://bit.ly/UMPolinela2020">bit.ly/UMPolinela2020&nbsp;&nbsp;</a>Pilih Tombol &ldquo;Daftar&rdquo;</p>
            <p>Mekanisme Pendaftaran</p>
            <figure id="attachment_2412" class="wp-caption alignnone" aria-describedby="caption-attachment-2412"><img class="size-full wp-image-2412" src="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg" sizes="(max-width: 1035px) 100vw, 1035px" srcset="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg 1035w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-300x186.jpg 300w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-1024x634.jpg 1024w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-768x476.jpg 768w" alt="tahap_pendaftaran_um2020" width="1035" height="641" loading="lazy">
            <figcaption id="caption-attachment-2412" class="wp-caption-text">Mekanisme Pendaftaran Seleksi Mandiri Polinela 2020</figcaption>
            </figure>
            <h2>Syarat Pendaftaran</h2>
            <ol class="messages">
            <li>Lulusan Sekolah Menengah Atas, Madrasah Aliyah dan atau Sekolah Menengah Kejuruan dengan Jurusan atau bidang studi yang sesuai dengan Program Studi Pilihan</li>
            <li>Umur maksimal 22 tahun pada tanggal 1 September 2020</li>
            <li>Berjiwa dan berbadan sehat, dan tidak buta warna. (didukung dengan Surat Keterangan Sehat dari Dokter). Pengecekan kesehatan dan buta warna akan dilakukan pada saat tahap wawancara, apabila terbukti buta warna maka yang bersangkutan dinyatakan GUGUR.</li>
            <li>Warga Negara Asing Bagi WNA harus dengan ijin Direktorat Jenderal Kelembagaan, Kementerian Riset Teknologi dan Pendidikan Tinggi. sesuai dengan Peraturan Menteri Pendidikan Nasional Republik Indonesia Nomor 25 Tahun 2007 tanggal 19 Juli 2007 tentang Persyaratan dan Prosedur bagi Warga Negara Asing untuk menjadi Mahasiswa pada Perguruan Tinggi di Indonesia.</li>
            <li><strong>Memiliki email pribadi</strong>. Email (surel) pribadi yang digunakan harus email aktif, karena informasi tentang pendaftaran dan tahapan pendaftaran akan dikirimkan ke email pendaftar.</li>
            <li><strong>Memiliki User Akun Pendaftaran Online</strong>. User akun pendaftaran online didapatkan dengan cara melakukan registrasi pendaftaran user akun pada laman ini. Hanya jika jalur penerimaan mahasiswa baru (SBMPN/MANDIRI) Politeknik Negeri Lampung telah aktif (dibuka).</li>
            <li>Membayar Biaya Pendaftaran Rp.150.000,-. Pembayaran dilakukan dengan cara mentransfer biaya pendaftaran ke&nbsp;<strong>BANK BNI 46</strong>&nbsp;cabang Malahayati, Nomor Rekening&nbsp;<strong>71059905</strong>&nbsp;atas nama&nbsp;<strong>Politeknik Negeri Lampung</strong>&nbsp;Informasi lengkap pembayaran biaya pendaftaran akan Anda dapatkan setelah Anda login ke sistem pendaftaran online untuk pertama kali (tahap inisialisasi).</li>
            <li><strong>Melakukan Registrasi Data Pendaftaran Online</strong>. Pendaftar wajib melakukan dan menyelesaikan setiap tahapan registrasi data pendaftaran online pada layanan pendaftaran online.</li>
            <li><strong>Mengikuti Seluruh Tahapan Seleksi</strong>. Pendaftar wajib mengikuti dan menyelesaikan setiap tahapan seleksi pendaftaran mahasiswa baru yang telah ditentukan.</li>
            </ol>
            <p>sebelum mendaftar pastikan kelengkapan dan format dokumen yang harus disiapkan, yakni :</p>
            <table class="table table-striped small">
            <tbody>
            <tr>
            <th>No.</th>
            <th>NAMA DOKUMEN</th>
            <th>FORMAT FILE</th>
            <th>UKURAN FILE MAKSIMAL</th>
            </tr>
            <tr>
            <td>1</td>
            <td>IJAZAH atau SKL SMA/SMK/MA/Sederajat</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>2</td>
            <td>RAPORT</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 1</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 2</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 3</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 4</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 5</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 6</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>3</td>
            <td>FORM NILAI KEJURUAN<br><small>Bagi pendaftar berasal dari SMK/MAK</small></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>4</td>
            <td>KARTU KELUARGA (KK)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>5</td>
            <td>KARTU TANDA PENDUDUK (KTP) atau KARTU INDUK ANAK (KIA)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>6</td>
            <td>SERTIFIKAT/PIAGAM PRESTASI AKADEMIK DAN NON AKADEMIK<br><em>Jika memiliki lampirkan.</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>7</td>
            <td>KARTU INDONESIA PINTAR-KULIAH(KIP).<br><em>Bagi Pendaftar beasiswa KIP-KULIAH</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>8</td>
            <td>SURAT KETERANGAN KESANGGUPAN PEMBAYARAN BIAYA SPI.<br><em>Template dokumen dapat di Unduh di sistem pada saat registrasi pendaftaran</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>9</td>
            <td>Pas Photo Berwarna.<br><small>file foto dengan dimensi/ukuran Maksimal 500&times;500 pixel.</small></td>
            <td>JPG, JPEG dan PNG ( *.JPG, *.JPEG, atau *.PNG)</td>
            <td>1 MB</td>
            </tr>
            </tbody>
            </table>
            <h4>Sangat tidak disarankan penggunaan perangkat smartphone/handphone pada saat tahap registrasi.</h4>',
            'image' => '/assets/images/data/1667351991_Iklan-UM.jpg',
            'lokasi' => 'POLINELA',
            'tanggal' => '2020-07-16',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);





        // 5

        DB::table('agenda')->insert([
            'id_ukm' => 5,
            'title' => 'Webinar Dan Pelatihan Memburu Peluang Kerja Polinela',
            'content' => '<p><strong>? Tabik Pun&nbsp;</strong><br>Apa kabar para pejuang tugas akhir ??<br>UPT. Pusat Karir Polinela mempunyai Program Kerja tahunan yaitu &ldquo;Pelatihan Memburu Peluang Kerja&rdquo; dengan sasaran yaitu para calon alumni polinela tahun 2020 yang akan di adakan secara Daring pada tanggal 17 september 2020<br>yuk segera daftarkan diri anda pada link berikut untuk menjadi alumni yang siap menghadapi kerasnya persaingan dunia kerja ???<span id="more-2697"></span></p>
            <p>Pendaftaran Gratis, Free E-Sertifikat loh Link pendaftaran : bit.ly/registrasimpk20</p>
            <p>Cp. 0895-4135-95011 <strong>(Sandi)</strong><br>0896-3101-9333 <strong>(Ririn)</strong></p>',
            'image' => '/assets/images/data/1667351733_UPT-KARIR.jpeg',
            'lokasi' => 'Zoom',
            'tanggal' => '2022-09-17',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('agenda')->insert([
            'id_ukm' => 5,
            'title' => 'Seleksi Penerimaan Mahasiswa Baru Jalur Mandiri (UM) Politeknik Negeri Lampung T.A. 2020/2021',
            'content' => '<p>Jalur Mandiri adalah salah satu jalur seleksi penerimaan mahasiswa baru di Politeknik Negeri Lampung. Jika sebelumnya penerimaan Mahasiswa Baru jalur Mandiri dilakukan Ujian Tulis,&nbsp;<span id="more-2252"></span>per-tahun ini, dikarenakan adanya pandemi Covid-19, maka pelaksanaan Seleksi Jalur Mandiri 2020 diselenggarakan seperti layaknya SBMPN yakni melalui mekanisme seleksi Portofolio.<span id="more-2411"></span></p>
            <p>Link Pendaftaran :&nbsp;<a href="https://bit.ly/UMPolinela2020">bit.ly/UMPolinela2020&nbsp;&nbsp;</a>Pilih Tombol &ldquo;Daftar&rdquo;</p>
            <p>Mekanisme Pendaftaran</p>
            <figure id="attachment_2412" class="wp-caption alignnone" aria-describedby="caption-attachment-2412"><img class="size-full wp-image-2412" src="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg" sizes="(max-width: 1035px) 100vw, 1035px" srcset="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg 1035w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-300x186.jpg 300w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-1024x634.jpg 1024w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-768x476.jpg 768w" alt="tahap_pendaftaran_um2020" width="1035" height="641" loading="lazy">
            <figcaption id="caption-attachment-2412" class="wp-caption-text">Mekanisme Pendaftaran Seleksi Mandiri Polinela 2020</figcaption>
            </figure>
            <h2>Syarat Pendaftaran</h2>
            <ol class="messages">
            <li>Lulusan Sekolah Menengah Atas, Madrasah Aliyah dan atau Sekolah Menengah Kejuruan dengan Jurusan atau bidang studi yang sesuai dengan Program Studi Pilihan</li>
            <li>Umur maksimal 22 tahun pada tanggal 1 September 2020</li>
            <li>Berjiwa dan berbadan sehat, dan tidak buta warna. (didukung dengan Surat Keterangan Sehat dari Dokter). Pengecekan kesehatan dan buta warna akan dilakukan pada saat tahap wawancara, apabila terbukti buta warna maka yang bersangkutan dinyatakan GUGUR.</li>
            <li>Warga Negara Asing Bagi WNA harus dengan ijin Direktorat Jenderal Kelembagaan, Kementerian Riset Teknologi dan Pendidikan Tinggi. sesuai dengan Peraturan Menteri Pendidikan Nasional Republik Indonesia Nomor 25 Tahun 2007 tanggal 19 Juli 2007 tentang Persyaratan dan Prosedur bagi Warga Negara Asing untuk menjadi Mahasiswa pada Perguruan Tinggi di Indonesia.</li>
            <li><strong>Memiliki email pribadi</strong>. Email (surel) pribadi yang digunakan harus email aktif, karena informasi tentang pendaftaran dan tahapan pendaftaran akan dikirimkan ke email pendaftar.</li>
            <li><strong>Memiliki User Akun Pendaftaran Online</strong>. User akun pendaftaran online didapatkan dengan cara melakukan registrasi pendaftaran user akun pada laman ini. Hanya jika jalur penerimaan mahasiswa baru (SBMPN/MANDIRI) Politeknik Negeri Lampung telah aktif (dibuka).</li>
            <li>Membayar Biaya Pendaftaran Rp.150.000,-. Pembayaran dilakukan dengan cara mentransfer biaya pendaftaran ke&nbsp;<strong>BANK BNI 46</strong>&nbsp;cabang Malahayati, Nomor Rekening&nbsp;<strong>71059905</strong>&nbsp;atas nama&nbsp;<strong>Politeknik Negeri Lampung</strong>&nbsp;Informasi lengkap pembayaran biaya pendaftaran akan Anda dapatkan setelah Anda login ke sistem pendaftaran online untuk pertama kali (tahap inisialisasi).</li>
            <li><strong>Melakukan Registrasi Data Pendaftaran Online</strong>. Pendaftar wajib melakukan dan menyelesaikan setiap tahapan registrasi data pendaftaran online pada layanan pendaftaran online.</li>
            <li><strong>Mengikuti Seluruh Tahapan Seleksi</strong>. Pendaftar wajib mengikuti dan menyelesaikan setiap tahapan seleksi pendaftaran mahasiswa baru yang telah ditentukan.</li>
            </ol>
            <p>sebelum mendaftar pastikan kelengkapan dan format dokumen yang harus disiapkan, yakni :</p>
            <table class="table table-striped small">
            <tbody>
            <tr>
            <th>No.</th>
            <th>NAMA DOKUMEN</th>
            <th>FORMAT FILE</th>
            <th>UKURAN FILE MAKSIMAL</th>
            </tr>
            <tr>
            <td>1</td>
            <td>IJAZAH atau SKL SMA/SMK/MA/Sederajat</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>2</td>
            <td>RAPORT</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 1</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 2</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 3</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 4</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 5</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 6</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>3</td>
            <td>FORM NILAI KEJURUAN<br><small>Bagi pendaftar berasal dari SMK/MAK</small></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>4</td>
            <td>KARTU KELUARGA (KK)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>5</td>
            <td>KARTU TANDA PENDUDUK (KTP) atau KARTU INDUK ANAK (KIA)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>6</td>
            <td>SERTIFIKAT/PIAGAM PRESTASI AKADEMIK DAN NON AKADEMIK<br><em>Jika memiliki lampirkan.</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>7</td>
            <td>KARTU INDONESIA PINTAR-KULIAH(KIP).<br><em>Bagi Pendaftar beasiswa KIP-KULIAH</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>8</td>
            <td>SURAT KETERANGAN KESANGGUPAN PEMBAYARAN BIAYA SPI.<br><em>Template dokumen dapat di Unduh di sistem pada saat registrasi pendaftaran</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>9</td>
            <td>Pas Photo Berwarna.<br><small>file foto dengan dimensi/ukuran Maksimal 500&times;500 pixel.</small></td>
            <td>JPG, JPEG dan PNG ( *.JPG, *.JPEG, atau *.PNG)</td>
            <td>1 MB</td>
            </tr>
            </tbody>
            </table>
            <h4>Sangat tidak disarankan penggunaan perangkat smartphone/handphone pada saat tahap registrasi.</h4>',
            'image' => '/assets/images/data/1667351991_Iklan-UM.jpg',
            'lokasi' => 'POLINELA',
            'tanggal' => '2020-07-16',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);





        // 6

        DB::table('agenda')->insert([
            'id_ukm' => 6,
            'title' => 'Webinar Dan Pelatihan Memburu Peluang Kerja Polinela',
            'content' => '<p><strong>? Tabik Pun&nbsp;</strong><br>Apa kabar para pejuang tugas akhir ??<br>UPT. Pusat Karir Polinela mempunyai Program Kerja tahunan yaitu &ldquo;Pelatihan Memburu Peluang Kerja&rdquo; dengan sasaran yaitu para calon alumni polinela tahun 2020 yang akan di adakan secara Daring pada tanggal 17 september 2020<br>yuk segera daftarkan diri anda pada link berikut untuk menjadi alumni yang siap menghadapi kerasnya persaingan dunia kerja ???<span id="more-2697"></span></p>
            <p>Pendaftaran Gratis, Free E-Sertifikat loh Link pendaftaran : bit.ly/registrasimpk20</p>
            <p>Cp. 0895-4135-95011 <strong>(Sandi)</strong><br>0896-3101-9333 <strong>(Ririn)</strong></p>',
            'image' => '/assets/images/data/1667351733_UPT-KARIR.jpeg',
            'lokasi' => 'Zoom',
            'tanggal' => '2022-09-17',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('agenda')->insert([
            'id_ukm' => 6,
            'title' => 'Seleksi Penerimaan Mahasiswa Baru Jalur Mandiri (UM) Politeknik Negeri Lampung T.A. 2020/2021',
            'content' => '<p>Jalur Mandiri adalah salah satu jalur seleksi penerimaan mahasiswa baru di Politeknik Negeri Lampung. Jika sebelumnya penerimaan Mahasiswa Baru jalur Mandiri dilakukan Ujian Tulis,&nbsp;<span id="more-2252"></span>per-tahun ini, dikarenakan adanya pandemi Covid-19, maka pelaksanaan Seleksi Jalur Mandiri 2020 diselenggarakan seperti layaknya SBMPN yakni melalui mekanisme seleksi Portofolio.<span id="more-2411"></span></p>
            <p>Link Pendaftaran :&nbsp;<a href="https://bit.ly/UMPolinela2020">bit.ly/UMPolinela2020&nbsp;&nbsp;</a>Pilih Tombol &ldquo;Daftar&rdquo;</p>
            <p>Mekanisme Pendaftaran</p>
            <figure id="attachment_2412" class="wp-caption alignnone" aria-describedby="caption-attachment-2412"><img class="size-full wp-image-2412" src="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg" sizes="(max-width: 1035px) 100vw, 1035px" srcset="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg 1035w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-300x186.jpg 300w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-1024x634.jpg 1024w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-768x476.jpg 768w" alt="tahap_pendaftaran_um2020" width="1035" height="641" loading="lazy">
            <figcaption id="caption-attachment-2412" class="wp-caption-text">Mekanisme Pendaftaran Seleksi Mandiri Polinela 2020</figcaption>
            </figure>
            <h2>Syarat Pendaftaran</h2>
            <ol class="messages">
            <li>Lulusan Sekolah Menengah Atas, Madrasah Aliyah dan atau Sekolah Menengah Kejuruan dengan Jurusan atau bidang studi yang sesuai dengan Program Studi Pilihan</li>
            <li>Umur maksimal 22 tahun pada tanggal 1 September 2020</li>
            <li>Berjiwa dan berbadan sehat, dan tidak buta warna. (didukung dengan Surat Keterangan Sehat dari Dokter). Pengecekan kesehatan dan buta warna akan dilakukan pada saat tahap wawancara, apabila terbukti buta warna maka yang bersangkutan dinyatakan GUGUR.</li>
            <li>Warga Negara Asing Bagi WNA harus dengan ijin Direktorat Jenderal Kelembagaan, Kementerian Riset Teknologi dan Pendidikan Tinggi. sesuai dengan Peraturan Menteri Pendidikan Nasional Republik Indonesia Nomor 25 Tahun 2007 tanggal 19 Juli 2007 tentang Persyaratan dan Prosedur bagi Warga Negara Asing untuk menjadi Mahasiswa pada Perguruan Tinggi di Indonesia.</li>
            <li><strong>Memiliki email pribadi</strong>. Email (surel) pribadi yang digunakan harus email aktif, karena informasi tentang pendaftaran dan tahapan pendaftaran akan dikirimkan ke email pendaftar.</li>
            <li><strong>Memiliki User Akun Pendaftaran Online</strong>. User akun pendaftaran online didapatkan dengan cara melakukan registrasi pendaftaran user akun pada laman ini. Hanya jika jalur penerimaan mahasiswa baru (SBMPN/MANDIRI) Politeknik Negeri Lampung telah aktif (dibuka).</li>
            <li>Membayar Biaya Pendaftaran Rp.150.000,-. Pembayaran dilakukan dengan cara mentransfer biaya pendaftaran ke&nbsp;<strong>BANK BNI 46</strong>&nbsp;cabang Malahayati, Nomor Rekening&nbsp;<strong>71059905</strong>&nbsp;atas nama&nbsp;<strong>Politeknik Negeri Lampung</strong>&nbsp;Informasi lengkap pembayaran biaya pendaftaran akan Anda dapatkan setelah Anda login ke sistem pendaftaran online untuk pertama kali (tahap inisialisasi).</li>
            <li><strong>Melakukan Registrasi Data Pendaftaran Online</strong>. Pendaftar wajib melakukan dan menyelesaikan setiap tahapan registrasi data pendaftaran online pada layanan pendaftaran online.</li>
            <li><strong>Mengikuti Seluruh Tahapan Seleksi</strong>. Pendaftar wajib mengikuti dan menyelesaikan setiap tahapan seleksi pendaftaran mahasiswa baru yang telah ditentukan.</li>
            </ol>
            <p>sebelum mendaftar pastikan kelengkapan dan format dokumen yang harus disiapkan, yakni :</p>
            <table class="table table-striped small">
            <tbody>
            <tr>
            <th>No.</th>
            <th>NAMA DOKUMEN</th>
            <th>FORMAT FILE</th>
            <th>UKURAN FILE MAKSIMAL</th>
            </tr>
            <tr>
            <td>1</td>
            <td>IJAZAH atau SKL SMA/SMK/MA/Sederajat</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>2</td>
            <td>RAPORT</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 1</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 2</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 3</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 4</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 5</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 6</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>3</td>
            <td>FORM NILAI KEJURUAN<br><small>Bagi pendaftar berasal dari SMK/MAK</small></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>4</td>
            <td>KARTU KELUARGA (KK)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>5</td>
            <td>KARTU TANDA PENDUDUK (KTP) atau KARTU INDUK ANAK (KIA)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>6</td>
            <td>SERTIFIKAT/PIAGAM PRESTASI AKADEMIK DAN NON AKADEMIK<br><em>Jika memiliki lampirkan.</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>7</td>
            <td>KARTU INDONESIA PINTAR-KULIAH(KIP).<br><em>Bagi Pendaftar beasiswa KIP-KULIAH</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>8</td>
            <td>SURAT KETERANGAN KESANGGUPAN PEMBAYARAN BIAYA SPI.<br><em>Template dokumen dapat di Unduh di sistem pada saat registrasi pendaftaran</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>9</td>
            <td>Pas Photo Berwarna.<br><small>file foto dengan dimensi/ukuran Maksimal 500&times;500 pixel.</small></td>
            <td>JPG, JPEG dan PNG ( *.JPG, *.JPEG, atau *.PNG)</td>
            <td>1 MB</td>
            </tr>
            </tbody>
            </table>
            <h4>Sangat tidak disarankan penggunaan perangkat smartphone/handphone pada saat tahap registrasi.</h4>',
            'image' => '/assets/images/data/1667351991_Iklan-UM.jpg',
            'lokasi' => 'POLINELA',
            'tanggal' => '2020-07-16',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);






        // 7 

        DB::table('agenda')->insert([
            'id_ukm' => 7,
            'title' => 'Webinar Dan Pelatihan Memburu Peluang Kerja Polinela',
            'content' => '<p><strong>? Tabik Pun&nbsp;</strong><br>Apa kabar para pejuang tugas akhir ??<br>UPT. Pusat Karir Polinela mempunyai Program Kerja tahunan yaitu &ldquo;Pelatihan Memburu Peluang Kerja&rdquo; dengan sasaran yaitu para calon alumni polinela tahun 2020 yang akan di adakan secara Daring pada tanggal 17 september 2020<br>yuk segera daftarkan diri anda pada link berikut untuk menjadi alumni yang siap menghadapi kerasnya persaingan dunia kerja ???<span id="more-2697"></span></p>
            <p>Pendaftaran Gratis, Free E-Sertifikat loh Link pendaftaran : bit.ly/registrasimpk20</p>
            <p>Cp. 0895-4135-95011 <strong>(Sandi)</strong><br>0896-3101-9333 <strong>(Ririn)</strong></p>',
            'image' => '/assets/images/data/1667351733_UPT-KARIR.jpeg',
            'lokasi' => 'Zoom',
            'tanggal' => '2022-09-17',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('agenda')->insert([
            'id_ukm' => 7,
            'title' => 'Seleksi Penerimaan Mahasiswa Baru Jalur Mandiri (UM) Politeknik Negeri Lampung T.A. 2020/2021',
            'content' => '<p>Jalur Mandiri adalah salah satu jalur seleksi penerimaan mahasiswa baru di Politeknik Negeri Lampung. Jika sebelumnya penerimaan Mahasiswa Baru jalur Mandiri dilakukan Ujian Tulis,&nbsp;<span id="more-2252"></span>per-tahun ini, dikarenakan adanya pandemi Covid-19, maka pelaksanaan Seleksi Jalur Mandiri 2020 diselenggarakan seperti layaknya SBMPN yakni melalui mekanisme seleksi Portofolio.<span id="more-2411"></span></p>
            <p>Link Pendaftaran :&nbsp;<a href="https://bit.ly/UMPolinela2020">bit.ly/UMPolinela2020&nbsp;&nbsp;</a>Pilih Tombol &ldquo;Daftar&rdquo;</p>
            <p>Mekanisme Pendaftaran</p>
            <figure id="attachment_2412" class="wp-caption alignnone" aria-describedby="caption-attachment-2412"><img class="size-full wp-image-2412" src="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg" sizes="(max-width: 1035px) 100vw, 1035px" srcset="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg 1035w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-300x186.jpg 300w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-1024x634.jpg 1024w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-768x476.jpg 768w" alt="tahap_pendaftaran_um2020" width="1035" height="641" loading="lazy">
            <figcaption id="caption-attachment-2412" class="wp-caption-text">Mekanisme Pendaftaran Seleksi Mandiri Polinela 2020</figcaption>
            </figure>
            <h2>Syarat Pendaftaran</h2>
            <ol class="messages">
            <li>Lulusan Sekolah Menengah Atas, Madrasah Aliyah dan atau Sekolah Menengah Kejuruan dengan Jurusan atau bidang studi yang sesuai dengan Program Studi Pilihan</li>
            <li>Umur maksimal 22 tahun pada tanggal 1 September 2020</li>
            <li>Berjiwa dan berbadan sehat, dan tidak buta warna. (didukung dengan Surat Keterangan Sehat dari Dokter). Pengecekan kesehatan dan buta warna akan dilakukan pada saat tahap wawancara, apabila terbukti buta warna maka yang bersangkutan dinyatakan GUGUR.</li>
            <li>Warga Negara Asing Bagi WNA harus dengan ijin Direktorat Jenderal Kelembagaan, Kementerian Riset Teknologi dan Pendidikan Tinggi. sesuai dengan Peraturan Menteri Pendidikan Nasional Republik Indonesia Nomor 25 Tahun 2007 tanggal 19 Juli 2007 tentang Persyaratan dan Prosedur bagi Warga Negara Asing untuk menjadi Mahasiswa pada Perguruan Tinggi di Indonesia.</li>
            <li><strong>Memiliki email pribadi</strong>. Email (surel) pribadi yang digunakan harus email aktif, karena informasi tentang pendaftaran dan tahapan pendaftaran akan dikirimkan ke email pendaftar.</li>
            <li><strong>Memiliki User Akun Pendaftaran Online</strong>. User akun pendaftaran online didapatkan dengan cara melakukan registrasi pendaftaran user akun pada laman ini. Hanya jika jalur penerimaan mahasiswa baru (SBMPN/MANDIRI) Politeknik Negeri Lampung telah aktif (dibuka).</li>
            <li>Membayar Biaya Pendaftaran Rp.150.000,-. Pembayaran dilakukan dengan cara mentransfer biaya pendaftaran ke&nbsp;<strong>BANK BNI 46</strong>&nbsp;cabang Malahayati, Nomor Rekening&nbsp;<strong>71059905</strong>&nbsp;atas nama&nbsp;<strong>Politeknik Negeri Lampung</strong>&nbsp;Informasi lengkap pembayaran biaya pendaftaran akan Anda dapatkan setelah Anda login ke sistem pendaftaran online untuk pertama kali (tahap inisialisasi).</li>
            <li><strong>Melakukan Registrasi Data Pendaftaran Online</strong>. Pendaftar wajib melakukan dan menyelesaikan setiap tahapan registrasi data pendaftaran online pada layanan pendaftaran online.</li>
            <li><strong>Mengikuti Seluruh Tahapan Seleksi</strong>. Pendaftar wajib mengikuti dan menyelesaikan setiap tahapan seleksi pendaftaran mahasiswa baru yang telah ditentukan.</li>
            </ol>
            <p>sebelum mendaftar pastikan kelengkapan dan format dokumen yang harus disiapkan, yakni :</p>
            <table class="table table-striped small">
            <tbody>
            <tr>
            <th>No.</th>
            <th>NAMA DOKUMEN</th>
            <th>FORMAT FILE</th>
            <th>UKURAN FILE MAKSIMAL</th>
            </tr>
            <tr>
            <td>1</td>
            <td>IJAZAH atau SKL SMA/SMK/MA/Sederajat</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>2</td>
            <td>RAPORT</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 1</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 2</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 3</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 4</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 5</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 6</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>3</td>
            <td>FORM NILAI KEJURUAN<br><small>Bagi pendaftar berasal dari SMK/MAK</small></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>4</td>
            <td>KARTU KELUARGA (KK)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>5</td>
            <td>KARTU TANDA PENDUDUK (KTP) atau KARTU INDUK ANAK (KIA)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>6</td>
            <td>SERTIFIKAT/PIAGAM PRESTASI AKADEMIK DAN NON AKADEMIK<br><em>Jika memiliki lampirkan.</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>7</td>
            <td>KARTU INDONESIA PINTAR-KULIAH(KIP).<br><em>Bagi Pendaftar beasiswa KIP-KULIAH</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>8</td>
            <td>SURAT KETERANGAN KESANGGUPAN PEMBAYARAN BIAYA SPI.<br><em>Template dokumen dapat di Unduh di sistem pada saat registrasi pendaftaran</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>9</td>
            <td>Pas Photo Berwarna.<br><small>file foto dengan dimensi/ukuran Maksimal 500&times;500 pixel.</small></td>
            <td>JPG, JPEG dan PNG ( *.JPG, *.JPEG, atau *.PNG)</td>
            <td>1 MB</td>
            </tr>
            </tbody>
            </table>
            <h4>Sangat tidak disarankan penggunaan perangkat smartphone/handphone pada saat tahap registrasi.</h4>',
            'image' => '/assets/images/data/1667351991_Iklan-UM.jpg',
            'lokasi' => 'POLINELA',
            'tanggal' => '2020-07-16',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);




        // 8

        DB::table('agenda')->insert([
            'id_ukm' => 8,
            'title' => 'Webinar Dan Pelatihan Memburu Peluang Kerja Polinela',
            'content' => '<p><strong>? Tabik Pun&nbsp;</strong><br>Apa kabar para pejuang tugas akhir ??<br>UPT. Pusat Karir Polinela mempunyai Program Kerja tahunan yaitu &ldquo;Pelatihan Memburu Peluang Kerja&rdquo; dengan sasaran yaitu para calon alumni polinela tahun 2020 yang akan di adakan secara Daring pada tanggal 17 september 2020<br>yuk segera daftarkan diri anda pada link berikut untuk menjadi alumni yang siap menghadapi kerasnya persaingan dunia kerja ???<span id="more-2697"></span></p>
            <p>Pendaftaran Gratis, Free E-Sertifikat loh Link pendaftaran : bit.ly/registrasimpk20</p>
            <p>Cp. 0895-4135-95011 <strong>(Sandi)</strong><br>0896-3101-9333 <strong>(Ririn)</strong></p>',
            'image' => '/assets/images/data/1667351733_UPT-KARIR.jpeg',
            'lokasi' => 'Zoom',
            'tanggal' => '2022-09-17',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);

        DB::table('agenda')->insert([
            'id_ukm' => 8,
            'title' => 'Seleksi Penerimaan Mahasiswa Baru Jalur Mandiri (UM) Politeknik Negeri Lampung T.A. 2020/2021',
            'content' => '<p>Jalur Mandiri adalah salah satu jalur seleksi penerimaan mahasiswa baru di Politeknik Negeri Lampung. Jika sebelumnya penerimaan Mahasiswa Baru jalur Mandiri dilakukan Ujian Tulis,&nbsp;<span id="more-2252"></span>per-tahun ini, dikarenakan adanya pandemi Covid-19, maka pelaksanaan Seleksi Jalur Mandiri 2020 diselenggarakan seperti layaknya SBMPN yakni melalui mekanisme seleksi Portofolio.<span id="more-2411"></span></p>
            <p>Link Pendaftaran :&nbsp;<a href="https://bit.ly/UMPolinela2020">bit.ly/UMPolinela2020&nbsp;&nbsp;</a>Pilih Tombol &ldquo;Daftar&rdquo;</p>
            <p>Mekanisme Pendaftaran</p>
            <figure id="attachment_2412" class="wp-caption alignnone" aria-describedby="caption-attachment-2412"><img class="size-full wp-image-2412" src="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg" sizes="(max-width: 1035px) 100vw, 1035px" srcset="https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020.jpg 1035w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-300x186.jpg 300w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-1024x634.jpg 1024w, https://polinela.ac.id/wp-content/uploads/2020/07/tahap_pendaftaran_um2020-768x476.jpg 768w" alt="tahap_pendaftaran_um2020" width="1035" height="641" loading="lazy">
            <figcaption id="caption-attachment-2412" class="wp-caption-text">Mekanisme Pendaftaran Seleksi Mandiri Polinela 2020</figcaption>
            </figure>
            <h2>Syarat Pendaftaran</h2>
            <ol class="messages">
            <li>Lulusan Sekolah Menengah Atas, Madrasah Aliyah dan atau Sekolah Menengah Kejuruan dengan Jurusan atau bidang studi yang sesuai dengan Program Studi Pilihan</li>
            <li>Umur maksimal 22 tahun pada tanggal 1 September 2020</li>
            <li>Berjiwa dan berbadan sehat, dan tidak buta warna. (didukung dengan Surat Keterangan Sehat dari Dokter). Pengecekan kesehatan dan buta warna akan dilakukan pada saat tahap wawancara, apabila terbukti buta warna maka yang bersangkutan dinyatakan GUGUR.</li>
            <li>Warga Negara Asing Bagi WNA harus dengan ijin Direktorat Jenderal Kelembagaan, Kementerian Riset Teknologi dan Pendidikan Tinggi. sesuai dengan Peraturan Menteri Pendidikan Nasional Republik Indonesia Nomor 25 Tahun 2007 tanggal 19 Juli 2007 tentang Persyaratan dan Prosedur bagi Warga Negara Asing untuk menjadi Mahasiswa pada Perguruan Tinggi di Indonesia.</li>
            <li><strong>Memiliki email pribadi</strong>. Email (surel) pribadi yang digunakan harus email aktif, karena informasi tentang pendaftaran dan tahapan pendaftaran akan dikirimkan ke email pendaftar.</li>
            <li><strong>Memiliki User Akun Pendaftaran Online</strong>. User akun pendaftaran online didapatkan dengan cara melakukan registrasi pendaftaran user akun pada laman ini. Hanya jika jalur penerimaan mahasiswa baru (SBMPN/MANDIRI) Politeknik Negeri Lampung telah aktif (dibuka).</li>
            <li>Membayar Biaya Pendaftaran Rp.150.000,-. Pembayaran dilakukan dengan cara mentransfer biaya pendaftaran ke&nbsp;<strong>BANK BNI 46</strong>&nbsp;cabang Malahayati, Nomor Rekening&nbsp;<strong>71059905</strong>&nbsp;atas nama&nbsp;<strong>Politeknik Negeri Lampung</strong>&nbsp;Informasi lengkap pembayaran biaya pendaftaran akan Anda dapatkan setelah Anda login ke sistem pendaftaran online untuk pertama kali (tahap inisialisasi).</li>
            <li><strong>Melakukan Registrasi Data Pendaftaran Online</strong>. Pendaftar wajib melakukan dan menyelesaikan setiap tahapan registrasi data pendaftaran online pada layanan pendaftaran online.</li>
            <li><strong>Mengikuti Seluruh Tahapan Seleksi</strong>. Pendaftar wajib mengikuti dan menyelesaikan setiap tahapan seleksi pendaftaran mahasiswa baru yang telah ditentukan.</li>
            </ol>
            <p>sebelum mendaftar pastikan kelengkapan dan format dokumen yang harus disiapkan, yakni :</p>
            <table class="table table-striped small">
            <tbody>
            <tr>
            <th>No.</th>
            <th>NAMA DOKUMEN</th>
            <th>FORMAT FILE</th>
            <th>UKURAN FILE MAKSIMAL</th>
            </tr>
            <tr>
            <td>1</td>
            <td>IJAZAH atau SKL SMA/SMK/MA/Sederajat</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>2</td>
            <td>RAPORT</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 1</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 2</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 3</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 4</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 5</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Semester 6</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>3</td>
            <td>FORM NILAI KEJURUAN<br><small>Bagi pendaftar berasal dari SMK/MAK</small></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>4</td>
            <td>KARTU KELUARGA (KK)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>5</td>
            <td>KARTU TANDA PENDUDUK (KTP) atau KARTU INDUK ANAK (KIA)</td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>6</td>
            <td>SERTIFIKAT/PIAGAM PRESTASI AKADEMIK DAN NON AKADEMIK<br><em>Jika memiliki lampirkan.</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>7</td>
            <td>KARTU INDONESIA PINTAR-KULIAH(KIP).<br><em>Bagi Pendaftar beasiswa KIP-KULIAH</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>8</td>
            <td>SURAT KETERANGAN KESANGGUPAN PEMBAYARAN BIAYA SPI.<br><em>Template dokumen dapat di Unduh di sistem pada saat registrasi pendaftaran</em></td>
            <td>PDF (*.PDF)</td>
            <td>2 MB</td>
            </tr>
            <tr>
            <td>9</td>
            <td>Pas Photo Berwarna.<br><small>file foto dengan dimensi/ukuran Maksimal 500&times;500 pixel.</small></td>
            <td>JPG, JPEG dan PNG ( *.JPG, *.JPEG, atau *.PNG)</td>
            <td>1 MB</td>
            </tr>
            </tbody>
            </table>
            <h4>Sangat tidak disarankan penggunaan perangkat smartphone/handphone pada saat tahap registrasi.</h4>',
            'image' => '/assets/images/data/1667351991_Iklan-UM.jpg',
            'lokasi' => 'POLINELA',
            'tanggal' => '2020-07-16',
            'waktu' => '08:00',
            'created_at' => '2022-08-17 15:20:07',
            'updated_at' => '2022-08-17 15:20:07',
        ]);
    }
}
