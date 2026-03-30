<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::create([
            'nama' => 'Perpustakaan',
            'foto' => 'library.png',
            'keterangan' => 'Gali pengetahuan di salah satu perpustakaan terbesar Jawa Timur. Sebagai caring learning zone Perpustakaan UK Petra tak hanya berperan sebagai pusat informasi saja, tetapi ikut membentuk masyarakat belajar serta menjadi mitra profesional bagi masyarakat akademis dan praktisi tanpa batasan ruang dan waktu.',
        ]);

        Facility::create([
            'nama' => 'Layanan Kesehatan',
            'foto' => 'layanankesehatan.png',
            'keterangan' => 'UK Petra menyediakan sejumlah layanan kesehatan umum dan gigi yang dapat diakses oleh Petranesian secara gratis maupun berbayar di Unit Klinik Pratama. Ingat, kamu diwajibkan untuk membawa Kartu Tanda Mahasiswa (KTM) yang masih berlaku; jika KTM tidak dibawa, maka kamu akan dianggap sebagai pasien biasa dan dikenakan biaya.',
        ]);

        Facility::create([
            'nama' => 'Pusat Teknologi Informasi dan Komunikasi (PTIK)',
            'foto' => 'ptik.png',
            'keterangan' => 'Microsoft Open Value Subscription-Education Solutions Agreement (OVS-ES) & Microsoft Developer Network Academic Alliance (MSDN-AA)
            
            Untuk mendukung kegiatan belajar, mengajar, dan penelitian, Petranesian aktif, staff, serta dosen tetap UK Petra dapat mengunduh berbagai perangkat lunak Microsoft melalui program OVS-ES dan MSDN-AA dengan mengikuti peraturan dan prosedur yang berlaku.
            ',
        ]);

        Facility::create([
            'nama' => 'Petra Career Center',
            'foto' => 'pcc.png',
            'keterangan' => 'Petra Career Center ada untuk mempersiapkan Petranesian sebelum terjun ke dunia kerja melalui program-program onsite dan daring yang asik, seperti webinar, workshop, seminar, dan kamp. Pengenalan potensi karier untuk Petranesian juga diberikan melalui psikotes dan konsultasi karier. Tidak hanya itu, lulusan juga dihubungkan dengan perusahaan-perusahaan pencari tenaga kerja. Layanan-layanan Petra Career Center lainnya dapat diakses lewat Instagram, Youtube, website dan Facebook.',
        ]);

        Facility::create([
            'nama' => 'Biro Administrasi Kemahasiswaan dan Alumni (BAKA)',
            'foto' => 'baka.png',
            'keterangan' => 'Biro Administrasi Kemahasiswaan dan Alumni (BAKA) memiliki tugas dalam mengurus administrasi dan pengembangan kemahasiswaan dan kesejahteraan mahasiswa dan pendataan Alumni.
            
            Petranesian yang ingin mengecek SKKK, mencari informasi mengenai bantuan keuangan, maupun mengurus administrasi Lembaga Kemahasiswaan (termasuk mengecek status proposal, pengajuan SKKK internal kampus, dan lain-lain) dapat mengakses sportfolio.petra.ac.id',
        ]);

        Facility::create([
            'nama' => 'International Office (IO)',
            'foto' => 'io.png',
            'keterangan' => 'KUI atau International Office bertugas untuk mendukung dan meningkatkan pelayanan dan mutu pendidikan Petra melalui kerjasama dalam dan luar negeri. Di sini, bebas berkunjung dan berkonsultasi mengenai rencana mengikuti program internasional seperti Student Exchange (SE), Joint/Double Degree (JD/DD), dan Summer Program. KUI terdiri dari 2 divisi, yaitu Divisi Mobilitas Mahasiswa dan Divisi Kemitraan.
            ',
        ]);

        Facility::create([
            'nama' => 'Kantin dan Toko',
            'foto' => 'kantintoko.png',
            'keterangan' => 'Dari makanan hingga perlengkapan perkuliahan, dapatkan kebutuhan-kebutuhanmu di sini.',
        ]);

        Facility::create([
            'nama' => 'Pusat Kerohanian',
            'foto' => 'pusroh.png',
            'keterangan' => 'Pusat Kerohanian bertugas untuk memberikan layanan di bidang kerohanian kepada mahasiswa, dosen, dan tenaga kependidikan untuk mengembangkan wawasan dunia Kristen (Christian worldview) serta mendorong penerapan nilai-nilai kristiani (Christian values) sehingga dapat menolong pertumbuhan rohani yang diwujudkan dalam perilaku kristiani (Christian behavior) serta membangun atmosfer kristiani (Christian atmosphere) dalam kehidupan kampus. Pusroh terdiri dari 2 bagian, yaitu Pelayanan Kerohanian Mahasiswa dan Pelayanan Kerohanian Pegawai.',
        ]);
    }
}
