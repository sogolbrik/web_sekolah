<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // LandingPage::create([
        //     'name' => 'About',
        //     'description' => 'Ini adalah',
        // ]);

        //Landing Page
        LandingPage::create(['name' => 'Header', 'description' => 'Sekolah']);
        LandingPage::create(['name' => 'Navbar1', 'description' => 'Beranda']);
        LandingPage::create(['name' => 'Navbar2', 'description' => 'Profile Sekolah']);
        LandingPage::create(['name' => 'Navbar3', 'description' => 'Penghargaan']);
        LandingPage::create(['name' => 'Navbar4', 'description' => 'Blog']);
        LandingPage::create(['name' => 'Navbar5', 'description' => 'Galeri']);
        LandingPage::create(['name' => 'Navbar6', 'description' => 'FAQs']);
        LandingPage::create(['name' => 'Navbar7', 'description' => 'About']);
        LandingPage::create(['name' => 'Navbar8', 'description' => 'Contact']);
        LandingPage::create(['name' => 'Heading Atas', 'description' => 'Semangat Belajar, Siswa Hebat!']);
        LandingPage::create(['name' => 'Paragraf Heading Atas', 'description' => 'Ingat, setiap langkah kecil dalam belajar adalah investasi besar untuk masa depanmu. Tetap semangat!']);
        LandingPage::create(['name' => 'Header About', 'description' => 'Profil Sekolah']);
        LandingPage::create(['name' => 'About Kiri', 'description' => 'SMPN Harapan Bangsa adalah lembaga pendidikan yang berdiri sejak tahun 2005 dengan tujuan untuk
                            menciptakan generasi muda yang berprestasi, berkarakter, dan siap menghadapi tantangan global. Kami
                            berkomitmen untuk menyediakan pendidikan berkualitas yang tidak hanya berfokus pada pengembangan akademik,
                            tetapi juga membina nilai-nilai moral, keterampilan sosial, dan kepedulian terhadap lingkungan.']);
        LandingPage::create(['name' => 'Check1 About', 'description' => 'Belajar setiap hari, melangkah menuju sukses!']);
        LandingPage::create(['name' => 'Check2 About', 'description' => 'Prestasi adalah buah dari usaha dan semangat!']);
        LandingPage::create(['name' => 'Check3 About', 'description' => 'Bersama kita tumbuh untuk masa depan yang cerah.']);
        LandingPage::create(['name' => 'About Kanan', 'description' => 'Kami menyediakan pendidikan berkualitas dengan tenaga pengajar profesional, berbagai program unggulan,
                            dan kegiatan yang mendukung pengembangan diri siswa. Dengan lingkungan belajar yang aman dan inspiratif,
                            kami berkomitmen mendampingi setiap siswa menuju masa depan yang gemilang.']);
        LandingPage::create(['name' => 'Header Penghargaan', 'description' => 'Penghargaan Sekolah']);
        LandingPage::create(['name' => 'Paragraf Header Penghargaan', 'description' => 'Penghargaan ini adalah bukti dedikasi kami dalam mencetak generasi berprestasi, dan motivasi untuk terus
                                menjadi lebih baik bagi masa depan siswa dan bangsa.']);
        LandingPage::create(['name' => 'Heading Penghargaan 1', 'description' => 'Penghargaan Sekolah Berprestasi']);
        LandingPage::create(['name' => 'Paragraf Penghargaan 1', 'description' => 'Diberikan kepada Sekolah atas pencapaian luar biasa dalam bidang akademik dan
                                        non-akademik selama tahun ajaran 2023/2024.']);
        LandingPage::create(['name' => 'Heading Penghargaan 2', 'description' => 'Penghargaan Sekolah Ramah Lingkungan']);
        LandingPage::create(['name' => 'Paragraf Penghargaan 2', 'description' => 'Diberikan kepada Sekolah atas upaya aktif dalam menjaga kebersihan dan kelestarian
                                        lingkungan sekolah melalui program Green School.']);
        LandingPage::create(['name' => 'Heading Penghargaan 3', 'description' => 'Penghargaan Inovasi Dalam Pembelajaran']);
        LandingPage::create(['name' => 'Paragraf Penghargaan 3', 'description' => 'Diberikan kepada Sekolah atas penerapan metode pembelajaran inovatif yang berhasil
                                        meningkatkan minat dan prestasi siswa.']);
        LandingPage::create(['name' => 'Header Total', 'description' => 'Total Keseluruhan']);
        LandingPage::create(['name' => 'Paragraf Total', 'description' => 'Ini Adalah Total Dari Keseluruhan']);
        LandingPage::create(['name' => 'Isi Heading Total1', 'description' => 'Jumlah Pengajar']);
        LandingPage::create(['name' => 'Isi Heading Total2', 'description' => 'Jumlah Murid']);
        LandingPage::create(['name' => 'Isi Heading Total3', 'description' => 'Jumlah Jurusan']);
        LandingPage::create(['name' => 'Isi Heading Total4', 'description' => 'Jumlah Kelas']);
        LandingPage::create(['name' => 'Header About Us', 'description' => 'Sedikit Tentang Kita']);
        LandingPage::create(['name' => 'Isi About Us', 'description' => 'Sekolah berdedikasi untuk membentuk siswa berkarakter, kreatif, dan berprestasi melalui pendidikan yang inklusif dan inovatif, mempersiapkan mereka menghadapi masa depan dengan percaya diri dan tangguh.']);
        LandingPage::create(['name' => 'Header Galeri', 'description' => 'Galeri']);
        LandingPage::create(['name' => 'Paragraf Galeri', 'description' => 'Galeri Sekolah']);
        LandingPage::create(['name' => 'Heading Button Semua', 'description' => 'Semua']);
        LandingPage::create(['name' => 'Heading Button 1', 'description' => 'Penghargaan']);
        LandingPage::create(['name' => 'Heading Button 2', 'description' => 'Kreasi']);
        LandingPage::create(['name' => 'Heading Button 3', 'description' => 'Event']);
        LandingPage::create(['name' => 'Header Pemegang Sekolah', 'description' => 'Pemimpin Sekolah']);
        LandingPage::create(['name' => 'Paragraf Pemegang Sekolah', 'description' => 'Para Pemimin Sekolah Kami']);
        LandingPage::create(['name' => 'Nama Petinggi 1', 'description' => 'Prabowo Subianto']);
        LandingPage::create(['name' => 'Pangkat Petinggi 1', 'description' => 'Kepala Sekolah']);
        LandingPage::create(['name' => 'Motivasi Petinggi 1', 'description' => 'Leadership is the ability to inspire others to achieve great things.']);
        LandingPage::create(['name' => 'Nama Petinggi 2', 'description' => 'Puan Maharani']);
        LandingPage::create(['name' => 'Pangkat Petinggi 2', 'description' => 'Wakil Kepala Sekolah']);
        LandingPage::create(['name' => 'Motivasi Petinggi 2', 'description' => 'Together, we can accomplish anything.']);
        LandingPage::create(['name' => 'Nama Petinggi 3', 'description' => 'Gibran Raka']);
        LandingPage::create(['name' => 'Pangkat Petinggi 3', 'description' => 'Kepala Kurikulum']);
        LandingPage::create(['name' => 'Motivasi Petinggi 3', 'description' => 'Education is the foundation of a successful future.']);
        LandingPage::create(['name' => 'Nama Petinggi 4', 'description' => 'Rocky Gerung']);
        LandingPage::create(['name' => 'Pangkat Petinggi 4', 'description' => 'Bendahara']);
        LandingPage::create(['name' => 'Motivasi Petinggi 4', 'description' => 'Education is the foundation of a successful future.']);
        LandingPage::create(['name' => 'Header FAQs', 'description' => 'Pertanyaan yang Sering Diajukan']);
        LandingPage::create(['name' => 'Paragraf FAQs', 'description' => 'Butuh informasi lebih lanjut? Berikut beberapa pertanyaan yang sering diajukan tentang sekolah kami.']);
        LandingPage::create(['name' => 'Pertanyaan FAQs1', 'description' => 'Bagaimana Cara Mendaftar Sebagai Siswa Baru?']);
        LandingPage::create(['name' => 'Jawaban FAQs1', 'description' => 'Anda dapat melakukan pendaftaran melalui halaman "Pendaftaran" di website kami. Isi formulir
                                        pendaftaran online dan lengkapi semua data yang diminta. Anda juga dapat menghubungi bagian
                                        administrasi sekolah untuk bantuan lebih lanjut.']);
        LandingPage::create(['name' => 'Pertanyaan FAQs2', 'description' => 'Apakah Tersedia Jadwal Pelajaran Online?']);
        LandingPage::create(['name' => 'Jawaban FAQs2', 'description' => 'Ya, jadwal pelajaran dapat diakses secara online melalui halaman "Jadwal" atau portal siswa. Anda
                                        harus login menggunakan akun siswa atau orang tua untuk melihat jadwal lengkap dan informasi terkait
                                        kelas.']);
        LandingPage::create(['name' => 'Pertanyaan FAQs3', 'description' => 'Bagaimana Cara Mengakses Nilai Atau Laporan Perkembangan Siswa?']);
        LandingPage::create(['name' => 'Jawaban FAQs3', 'description' => 'Nilai dan laporan perkembangan siswa dapat dilihat di portal orang tua atau siswa. Setelah login,
                                        Anda akan dapat melihat nilai, absensi, dan catatan perkembangan siswa yang diperbarui setiap akhir
                                        semester.']);
        LandingPage::create(['name' => 'Pertanyaan FAQs4', 'description' => 'Apakah Sekolah Menyediakan Informasi Kegiatan Ekstrakurikuler?']);
        LandingPage::create(['name' => 'Jawaban FAQs4', 'description' => 'Ya, kami menyediakan informasi lengkap tentang kegiatan ekstrakurikuler di website. Silakan
                                        kunjungi halaman "Ekstrakurikuler" untuk informasi mengenai kegiatan, jadwal, dan syarat pendaftaran
                                        untuk mengikuti kegiatan yang tersedia di sekolah.']);
        LandingPage::create(['name' => 'Pertanyaan FAQs5', 'description' => 'Bagaimana Cara Menghubungi Pihak Sekolah Untuk Pertanyaan Lebih Lanjut?']);
        LandingPage::create(['name' => 'Jawaban FAQs5', 'description' => 'Anda dapat menghubungi kami melalui halaman "Kontak" di website, yang mencantumkan nomor telepon,
                                        alamat email, dan alamat fisik sekolah. Terdapat juga formulir kontak yang bisa Anda isi untuk
                                        mendapatkan respon dari pihak sekolah.']);
        LandingPage::create(['name' => 'Header Contact', 'description' => 'Contact']);
        LandingPage::create(['name' => 'Paragraf Contact', 'description' => 'Hubungi Kami Dengan Informasi Dibawah']);
        LandingPage::create(['name' => 'Heading Alamat Contact', 'description' => 'Alamat']);
        LandingPage::create(['name' => 'Isi Alamat Contact', 'description' => 'Mojokerto, Kutorejo']);
        LandingPage::create(['name' => 'Heading Nomor Contact', 'description' => 'Nomor Telp']);
        LandingPage::create(['name' => 'Isi Nomor Contact', 'description' => '+62-857-000']);
        LandingPage::create(['name' => 'Heading Email Contact', 'description' => 'Email']);
        LandingPage::create(['name' => 'Isi Email Contact', 'description' => 'info@school.com']);
        LandingPage::create(['name' => 'Header Footer', 'description' => 'Sekolah']);
        LandingPage::create(['name' => 'Alamat Footer', 'description' => 'Mojokerto, Kutorejo']);
        LandingPage::create(['name' => 'Wilayah Footer', 'description' => 'Jawa Timur, Indonesia']);
        LandingPage::create(['name' => 'Nomor Telepon Footer', 'description' => '+62-857-000']);
        LandingPage::create(['name' => 'Email Footer', 'description' => 'info@school.com']);
        //EndLandingPage
    }
}
