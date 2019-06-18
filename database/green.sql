-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jun 2019 pada 08.37
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `detail` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `harga_lapangan` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `judul`, `detail`, `gambar`, `harga_lapangan`) VALUES
(1, 'about Green Unnes', 'Asal Usul Peringkat\r\n\r\nPeringkat Green Unnes adalah inisiatif Universitas Negeri Semarang yang diluncurkan pada tahun 2019. Sebagai bagian dari strateginya untuk meningkatkan posisi konservasinya.  Jelas dari kriteria saat ini digunakan untuk menentukan peringkat fakultas tidak memberikan kredit kepada mereka yang melakukan upaya untuk mengurangi jejak karbon mereka dan dengan demikian membantu memerangi perubahan iklim global.Kami melihat perlunya sistem yang seragam yang akan cocok untuk menarik dukungan fakultas dan di mana hasilnya didasarkan pada skor numerik yang akan memungkinkan peringkat sehingga perbandingan cepat dapat dibuat di antara mereka pada kriteria mereka komitmen untuk mengatasi masalah keberlanjutan dan dampak lingkungan.\r\n\r\nTujuan Pemeringkatan\r\nTujuan dari peringkat ini adalah untuk memberikan hasil survei online mengenai kondisi saat ini dan kebijakan yang terkait dengan Kampus Hijau dan Keberlanjutan di Universitas dalam berbagai fakultas. Diharapkan bahwa dengan menarik perhatian para pemimpin universitas dan fakultas, lebih banyak perhatian akan diberikan untuk memerangi perubahan iklim global, konservasi energi dan air, daur ulang limbah, dan transportasi hijau. Kegiatan semacam itu akan membutuhkan perubahan perilaku dan memberikan lebih banyak perhatian pada kelestarian lingkungan, serta masalah ekonomi dan sosial yang terkait dengan kelestarian. Kami percaya bahwa setiap fakultas dalam hal ini harus dapat diidentifikasi sehingga kami memutuskan untuk memulai ini. Awalnya, kami akan mengumpulkan data numerik dari setiap fakultas dan memproses data yang disediakan untuk sampai pada skor tunggal yang mencerminkan upaya yang dilakukan oleh lembaga untuk menerapkan kebijakan dan program yang ramah lingkungan dan berkelanjutan. Fakultas akan diberi peringkat berdasarkan skor ini. Kami berharap bahwa peringkat akan bermanfaat bagi setiap fakultas dalam upaya mereka untuk menerapkan kebijakan ramah lingkungan dan mengelola perubahan perilaku di antara komunitas akademik di lembaga masing-masing.\r\n\r\nPengembangan dan Penyempurnaan Ranking di Masa Depan\r\nKami menggunakan seperangkat kriteria dan metodologi yang telah dipikirkan secara hati-hati menjadi sederhana dan cukup mudah untuk diisi tanpa upaya yang tidak terkendali, tetapi pada saat yang sama, memberikan informasi tentang indikator utama. Kami menyadari bahwa pemeriksaan kritis terhadap instrumen pengumpulan data akan menghasilkan wawasan yang dapat membantu meningkatkannya. Oleh karena itu kami telah memberikan kuesioner kepada dewan peninjau independen dan akan menerima komentar dari peserta yang dapat digunakan untuk meningkatkan dan memperbaikinya dalam versi berikutnya.\r\n\r\nMenciptakan Peringkat\r\nKami mengundang setiap fakultas yang ada di Unnes untuk ambil bagian. setiap fakultas yang ingin berpartisipasi diminta untuk memberikan data numerik pada sejumlah kriteria yang dapat memberikan gambaran komitmen mereka untuk penghijauan kampus dan menerapkan kebijakan ramah lingkungan yang mendukung keberlanjutan. Kriteria meliputi informasi dasar seperti ukuran universitas, baik secara spasial dan dalam hal populasi,jumlah ruang hijau; dan juga informasi tentang penggunaan energi, transportasi, penggunaan air dan daur ulang dan pengolahan limbah. Selain itu, akan ditanyakan tentang upaya yang dilakukan oleh lembaga menuju pembentukan kebijakan dan manajemen hijau.\r\n\r\nBerpartisipasi\r\nSangat mudah untuk mengambil bagian. Fakultas dapat mengirimkan data dengan mengisi formulir survei online kami. Prosesnya relatif sederhana dan tidak terlalu memakan waktu. Kami percaya bahwa waktu yang singkat dan upaya kecil yang dilakukan akan lebih dari menghargai semua orang yang tertarik pada masalah keberlanjutan. Periode untuk mengirimkan data melalui formulir online akan berjalan dari sekarang hingga mendekati akhir tahun. Kami kemudian akan menghitung skor untuk semua fakultas yang telah mengirimkan data dan mempublikasikan peringkat yang dihasilkan setiap bulan.', 'unnes.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` varchar(20) NOT NULL,
  `fakultas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(10) NOT NULL,
  `id_soal` varchar(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_fakultas` int(10) NOT NULL,
  `hasil_a` int(10) NOT NULL,
  `hasil_b` int(10) NOT NULL,
  `hasil_c` int(10) NOT NULL,
  `hasil_d` int(10) NOT NULL,
  `tgl_input` int(10) NOT NULL,
  `jns_soal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat_email` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama_lengkap`, `alamat_email`, `subjek`, `pesan`, `tanggal`) VALUES
(2, 'A', 'A@GMAIL', 'KKK', 'KKK', '2019-05-21'),
(3, 'o', 's', 'gg', 'gfgg', '2019-06-10');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Struktur dari tabel `jns_soal`
--

CREATE TABLE `jns_soal` (
  `id_jenis` varchar(10) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(10) NOT NULL,
  `pertanyaan` varchar(150) NOT NULL,
  `pilihan_a` varchar(150) NOT NULL,
  `pilihan_b` varchar(150) NOT NULL,
  `pilihan_c` varchar(150) NOT NULL,
  `pilihan_d` varchar(150) NOT NULL,
  `status` varchar(2) NOT NULL,
  `jns_soal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `statis`
--

CREATE TABLE `statis` (
  `judul` varchar(255) NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `detail` text NOT NULL,
  `id_statis` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `statis`
--

INSERT INTO `statis` (`judul`, `halaman`, `detail`, `id_statis`) VALUES
('welcome to Green Unnes', 'home', 'Universitas Negeri Semarang (UNNES) adalah universitas berwawasan konservasi. Visi UNNES adalah menjadi Universitas Berwawasan Konservasi dan Bereputasi Internasional.\r\n\r\nBerwawasan konservasi bermakna cara pandang dan sikap perilaku yang berorientasi pada prinsip konservasi (pengawetan, pemeliharaan, penjagaan, pelestarian, dan pengembangan) sumber daya alam dan nilai-nilai sosial budaya. Prinsip tersebut menjadi landasan dalam kegiatan tri dharma perguruan tinggi.\r\n\r\nGrenn UNNES ingin mewujudkan kampus UNNES menjadi kampus yang konservasi dengan pemeringkatan setiap fakultas-fakultas dengan berbagai indikator sehingga dapat menjadi penilaian setiap fakultas dalam perwujudan konservasi', 2),
('about greenes', 'about', 'kkkkk', 4),
('indikator Green Unnes', 'pesanan', 'Untuk pemesanan lapanga futsal, anda harus memenuhi syarat-syarat yang kami berika pada bagian selanjutnya, apa saja syarat yang harus anda penuhi atau bagaimana cara untuk mendapatkan tiket secara online dari biosko raya, berikut :\r\n\r\n1. Anda harus melakukan register sebagai members.\r\n2. silahkan isi semua data-data register anda dengan baik dan benar.\r\n3. jika semua sudah di isi, maka silahkan klik submit button.\r\n4. jika sukses melakukan pendaftaran, anda sudah bisa melakukan login.\r\n5. masukkan pada halaman login username dan password anda waktu mendaftar.\r\n6. jika benar, anda akan di bawa ke halaman members.\r\n7. pada halaman members anda bisa memilih lapagan futsal \r\n8. pilih dan lihat keterangan lapangan futsal yang anda ingin sewa terlebih dahulu jika mau.\r\n9. jika pilihan anda sudah benar, klik button pesan.\r\n10 dan isi semua data-data pemesanan lapangan futsal anda dengan baenar.\r\n11. klik button submit.\r\n12. jika data2 yang anda isikan benar, maka anda akan sukses memesan lapangan futsal.\r\n13. lapangan futsal yang di pesan akan masuk ke laporan pemesanan lapangan futsal dengan status baru.\r\n14. silahkan bayar pesanan anda ke rekening futsal dengan transfer.\r\n15 jika sudah transfer, silahkan konfrmasi pembayaran.\r\n16. setelah konfirmasi, tunggu status anda samapai di konfirmasi oleh admin.\r\n17. cetak jika status lapangan futsal sudah lunas atau di konfirmasi dan selesai.<br/>\r\n\r\n', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `fakultas` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jabatan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'members',
  `alamat_lengkap` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `id_fakultas` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `fakultas`, `jabatan`, `tanggal_lahir`, `level`, `alamat_lengkap`, `id_fakultas`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'm', 'Admin', 'admin', 'sekaran', ''),
('mipa', 'dbd6ff9eb3389d4d7cbace3aa3524b3e', 'matematika dan ilmu pengetahuan alam', 'staff', '2019-06-29', 'members', '', ''),
('a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'Staff', '2019-06-19', 'members', '', ''),
('FT', '1e2f86b95d78d7f8cfcbdc1a07b2fbd7', 'fakultas teknik', 'Dosen', '2019-06-28', 'members', '', ''),
('cc', '4a8a08f09d37b73795649038408b5f33', 'c', 'Dosen', '2019-06-27', 'members', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `jns_soal`
--
ALTER TABLE `jns_soal`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_orders`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `statis`
--
ALTER TABLE `statis`
  ADD PRIMARY KEY (`id_statis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_orders` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `statis`
--
ALTER TABLE `statis`
  MODIFY `id_statis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
