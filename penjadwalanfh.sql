-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2019 pada 15.44
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjadwalanfh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `dari`, `sampai`, `isi`, `created_at`, `updated_at`) VALUES
(24, '2018-04-10', '2018-04-10', '2018-04-21', 'Jadwal Perkuliahan malam REGULER B akan dilaksanakan pada hari sabtu tanggal 21, 28 April dan 5 Mei 2018. Info lebih lengkap harap segera hubungi pengelola REGULER B', '2018-04-10 07:15:12', '2018-04-10 07:15:12'),
(25, '2018-04-30', '2018-04-30', '2018-05-31', 'PENGUMUMAN UNTUK SELURUH MAHASISWA S1 REGULER FEB ULM\r\nPERIHAL JADWAL UJIAN AKHIR SEMESTER (UAS) GENAP TH.2017/2018\r\n\r\nJADWAL UJIAN AKHIR SEMESTER (UAS) SEMESTER GENAP T.2017/2018 DILAKSANAKAN SELAMA 10 HARI TERBAGI ATAS 2 (DUA) SESI YAITU:\r\n\r\n\r\nSESI 1: TANGGAL 4 S/D 8 JUNI 2018 dan\r\nSESI 2: TANGGAL 21 S/D 27 JUNI 2018.\r\n\r\nDEMIKIAN PENGUMUMAN INI KAMI SAMPAIKAN, ATAS PERHATIANNYA KAMI UCAPKAN TERIMA KASIH', '2018-04-30 08:19:58', '2018-05-07 08:27:51'),
(26, '2018-05-02', '2018-05-02', '2018-05-09', 'Sehubung dengan adanya kegiatan Ujian Test Masuk Perguruan Tinggi Jalur SBMPTN Tahun 2018 ULM yang dilaksanakan pada Hari Senin dan Selasa Tanggal 7 & 8 Mei 2018\r\n\r\nMaka Semua perkuliahan pada tanggal tersebut DI LIBURKAN. demikian pengumuman ini disampaikan. Atas perhatiannya kami ucapkan terimakasih', '2018-05-02 08:29:50', '2018-05-02 08:29:50'),
(27, '2018-06-26', '2018-06-26', '2018-06-28', 'PENGUMUMAN\r\nSEHUBUNGAN DENGAN DIADAKANNYA LIBUR NASIONAL HARI RABU TANGGAL 27 JUNI 2018 . MAKA UJIAN AKHIR SEMESTER YANG DILAKSANAKAN HARI TERSEBUT DI PINDAHKAN KE HARI KAMIS TANGGAL 28 JUNI 2018. JADWAL PELAKSANAAN JAM UJIAN AKHIR SEMESTER SESUAI DENGAN JADWAL YANG TELAH DIATUR (TIDAK BERUBAH). ATAS PERHATIANNYA KAMI UCAPKAN TERIMA KASIH\r\n\r\n(TTD AKADEMIK)', '2018-06-26 03:13:31', '2018-06-26 03:13:31'),
(28, '2018-07-13', '2018-07-13', '2018-07-03', 'SEHUBUNGAN DENGAN ADANYA KEGIATAN UJIAN TEST MASUK PERGURUAN TINGGI JALUR MANDIRI TAHUN 2018 UNIVERSITAS LAMBUNG MANGKURAT YANG AKAN DILAKSANAKAN PADA HARI SENIN 16 JULI 2018 PADA JAM 08.00 S/D 16.00. MAKA SEMUA PERKULIAHAN PADA TANGGAL DAN JAM TERSEBUT DILIBURKAN. DEMIKIAN PENGUMUMAN INI DISAMPAIKAN, ATAS PERHATIANNYA KAMI UCAPKAN TERIMAKASIH', '2018-07-13 08:36:09', '2018-07-13 08:36:09'),
(29, '2018-09-12', '2018-09-12', '2018-09-17', 'Sehubungan dengan adanya kegiatan KULIAH UMUM yang akan dilaksanakan pada hari Kamis, 13 September 2018 Jam 08.00 - 13.00 WITA di RUANG AULA Maka perkuliahan pada waktu dan tempat tersebut (Bahasa Inggris Prodi Manajemen Kelas Genap 08.00-10.30 dan Pend Agama Islam Prodi Akuntansi Kelas Ganjil 10.30-13.00) diwajibkan untuk mengikuti kegiatan tersebut sebagai pengganti mata kuliah yang bersangkutan dan mengenakan JAS ALMAMATER. Selanjutnya untuk perkuliahan pada jam 13.30 sampai dengan 18.30 WITA tetap dilaksanakan sebagaimana mestinya.', '2018-09-12 02:49:10', '2018-09-12 02:53:46'),
(30, '2018-09-19', '2018-09-19', '2018-09-20', 'Sehubungan dengan adanya kegiatan kuliah umum dari Kementrian Keuangan R.I yang akan dilaksanakan pada : \r\nHari / Tanggal : Kamis, 20 September 2018\r\nJam                : 08.00 - 12.00 WITA \r\nTempat           : Ruang Aula FEB ULM\r\n\r\nMaka Mata Kuliah Dibawah ini : \r\n1. 08.00-10.30, Eko. Koperasi & UKM ( IESP ) dari Ruang GB Lt.3 Pindah Ke Ruang 2\r\n2. 08.00-10.30, Bahasa Inggris/Genap ( Manajemen ) dari Ruang Aula Pindah Ke Gb.Lt.3 \r\n3. 08.00-10.30, Perpajakan/B ( Akuntansi ) dari Ruang 2 Pindah Ke Aula ( Mengikuti Kuliah Umum )\r\n4. 10.30-13.00, Pendidikan Agama Islam/Ganjil (Akuntansi) dari Ruang Aula Pindah Ke Ruang 3 \r\n5. 10.30-13.00, Perilaku Organisasi/B ( Akuntansi) dari Ruang 3 Pindah Ke Aula ( Mengikuti Kuliah Umum )\r\n\r\nBAGI MAHSISWA/I YANG MENGAMBIL MK. PERPAJAKAN (KELAS B) JUR. AKUNTANSI DAN PERILAKU ORGANISASI (KELAS B) JUR. AKUNTANSI DIWAJIBKAN MENGIKUTI KEGIATAN TERSEBUT SEBAGAI PENGGANTI MATA KULIAH YANG BERSANGKUTAN.', '2018-09-19 08:32:21', '2018-09-19 08:34:21'),
(31, '2019-01-31', '2019-02-04', '2019-02-08', 'Perkuliahan Semester Genap Tahun Ajaran 2018/2019 Program S1 Reguler Fakultas Ekonomi dan Bisnis Universitas Lambung Mangkurat Dilaksanakan Mulai Hari Senin Tanggal 4 Februari 2019, Silakan Lihat Informasi seputar Akademik dan Lainnya selengkapnya di Layar ini \r\n\r\nTerimakasih', '2019-01-31 03:38:03', '2019-01-31 03:40:37'),
(33, '2019-02-07', '2019-02-07', '2019-05-31', 'Mata Kuliah Akuntansi Industri Jurusan AKUNTANSI Semester VIII dibagi Menjadi 2 (Dua) Kelas, Yaitu : 1. Kelas GANJIL Perkuliahan di Ruang Aula Magister Manajemen  dan 2. Kelas GENAP Perkuliahan di Ruang 1 Magister Manajemen Hari dan Jam Sesuai Jadwal yang ditetapkan.\r\n\r\nAtas Perhatiannya Terimakasih.', '2019-02-07 03:00:36', '2019-02-07 03:03:12'),
(34, '2019-02-18', '2019-02-14', '2019-05-31', 'PENGUMUMAN PERTUKARAN RUANG KULIAH HARI RABU JAM 10.30 - 13.00 WITA MATA KULIAH STATISTIK EKONOMI II (B) JURUSAN MANAJEMEN DI RUANG GEDUNG BARU LANTAI 2, DAN MATA KULIAH EKONOMI ISLAM SYARIAH (GANJIL) JURUSAN IESP MENJADI DIRUANG MAGISTER MANAJEMEN 1.  ATAS PERHATIANNYA DIUCAPKAN TERIMAKASIH.', '2019-02-18 08:51:05', '2019-02-18 08:54:04'),
(35, '2019-04-08', '2019-02-20', '2019-05-31', 'PENGUMUMAN PERGANTIAN RUANG KULIAH UNTUK : HARI RABU, PUKUL 13.30 - 16.00 MATA KULIAH : ILMU KEALAMAN DASAR (GANJIL) IESP RUANGAN ASAL (RUANG AULA) PINDAH KE RUANG 6, KULIAH DIRUANG 6 PINDAH KE AULA. DEMIKIAN TERIMAKASIH', '2019-04-08 04:35:06', '2019-04-08 04:35:06'),
(36, '2019-04-08', '2019-03-01', '2019-04-30', 'KEPADA BAPAK IBU DOSEN FAKULTAS EKONOMI DAN BISNIS UNIVERSITAS LAMBUNG MANGKURAT, BAGI YANG INGIN MELAKSANAKAN KULIAH PENGGANTI PADA SEMESTER GENAP TAHUN 2019 DIAGENDAKAN SETIAP HARI SABTU SILAKAN KONFIRMASI UNTUK PELAYANAN PERKULIAHAN PADA BAGIAN AKADEMIK DI 087-828-350-767 DENGAN SAUDARA GUSTIAWAN. TERIMAKASIH', '2019-04-08 04:38:42', '2019-04-08 04:39:06'),
(37, '2019-08-23', '2019-08-23', '2020-01-31', 'PENGUMUMAN PERTUKARAN RUANG KULIAH SEMSESTER GANJIL 2019/2020 HARI SENIN PUKUL 13.30-16.00 WITA, MATA KULIAH KOMUNIKASI BISNIS JURUSAN AKUNTANSI DARI RUANG GB2 KE GB1A DAN MATA KULIAH SISTEM INFORMASI AKUNTANSI (A) DARI RUANG ASAL GB1A KE GB2, HARI SELASA PUKUL 13.30-16.00 WITA MANAJEMEN PERPAJAKAN JURUSAN AKUNTANSI DARI RUANG 16 KE RUANG PPAk DAN MATA KULIAH AKUNTANSI FORENSIK & AUDIT INVESTIGASI (A) DARI RUANG PPAK KE RUANG 16 KELAS B JURUSAN AKUNTANSI DIRUANG POST GRADUATE 37\r\n\r\nDEMIKIAN TERIMAKASIH', '2019-08-23 03:00:58', '2019-08-23 03:00:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(10) UNSIGNED NOT NULL,
  `nip_dosen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dosen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip_dosen`, `nama_dosen`, `email`, `created_at`, `updated_at`) VALUES
(6, '222', 'Dosen 10', 'dosen1@gmail.com', '2018-02-26 22:44:46', '2018-02-26 22:44:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'expertphp', 'Online tutorials', NULL, NULL),
(2, 'expertphp', 'Online tutorials', NULL, NULL),
(3, 'sad', 'ssss', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalfh`
--

CREATE TABLE `jadwalfh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tahunajaran` int(10) UNSIGNED DEFAULT NULL,
  `prodi` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_matkul` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_matkul` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `kelas` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hari` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `ruangan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosen1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosen2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosen3` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosen4` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosen5` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_mahasiswa` int(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalguest`
--

CREATE TABLE `jadwalguest` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tahunajaran` int(10) UNSIGNED NOT NULL,
  `tgl_berlaku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dekan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_dekan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwalguest`
--

INSERT INTO `jadwalguest` (`id`, `id_tahunajaran`, `tgl_berlaku`, `tgl_ttd`, `dekan`, `nip_dekan`, `created_at`, `updated_at`) VALUES
(1, 5, 'TGL. 26 Agustus Sampai Dengan 13 Desember 2019', 'Banjarmasin, 26 Juli 2019', 'Dr. Riza Firdaus. H.M, SE, MM', '19670909 199303 1 001', '2019-01-21 09:11:43', '2019-01-21 09:11:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_history`
--

CREATE TABLE `list_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `list_history`
--

INSERT INTO `list_history` (`id`, `keterangan`, `waktu`, `created_at`, `updated_at`) VALUES
(3, 'Berhasil menambah data jadwal untuk Mata Kuliah: matkul1, Hari: Senin, Jam: 08:00:00 Ruangan: Aula', '20:33', NULL, NULL),
(4, 'Berhasil menghapus data jadwal untuk Mata Kuliah: , Hari: , Jam:  Ruangan: ', '20:36', NULL, NULL),
(5, 'Berhasil menambah data jadwal untuk Mata Kuliah: matkul1, Hari: Senin, Jam: 08:00:00 Ruangan: Aula', '20:37', NULL, NULL),
(6, 'Berhasil mengubah data jadwal untuk Mata Kuliah: matkul1, Hari: Kamis, Jam: 08:00:00 Ruangan: Aula', '20:37', NULL, NULL),
(7, 'Berhasil menghapus data jadwal untuk Mata Kuliah: , Hari: , Jam:  Ruangan: ', '20:37', NULL, NULL),
(8, 'Berhasil mengimport data jadwal menggunakan excel', '20:39', NULL, NULL),
(9, 'Berhasil menghapus data jadwal untuk Mata Kuliah: A.Keu.Men.II, Hari: Rabu, Jam: 13:30:00 Ruangan: Aula', '20:39', NULL, NULL),
(10, 'Berhasil mengubah data jadwal untuk Mata Kuliah: A.Keu.Men.II, Hari: Rabu, Jam: 16:00:00 Ruangan: Ruang 2', '19:09', NULL, NULL),
(11, 'Berhasil menambah data jadwal untuk Mata Kuliah: PPKN, Hari: Selasa, Jam: 10:30:00 Ruangan: GB 2', '14:09', NULL, NULL),
(12, 'Berhasil menghapus data jadwal untuk Mata Kuliah: A.Keu.Men.II, Hari: Senin, Jam: 08:00:00 Ruangan: Ruang 2', '12:07', NULL, NULL),
(13, 'Berhasil menghapus data jadwal untuk Mata Kuliah: A.Keu.Men.II, Hari: Senin, Jam: 08:00:00 Ruangan: Ruang 2', '12:07', NULL, NULL),
(14, 'Berhasil menghapus data jadwal untuk Mata Kuliah: A.Keu.Men.II, Hari: Rabu, Jam: 13:30:00 Ruangan: Aula', '12:07', NULL, NULL),
(15, 'Berhasil mengimport data jadwal menggunakan excel', '15:19', NULL, NULL),
(16, 'Berhasil mengimport data jadwal menggunakan excel', '15:21', NULL, NULL),
(17, 'Berhasil mengimport data jadwal menggunakan excel', '13:42', NULL, NULL),
(18, 'Berhasil mengimport data jadwal menggunakan excel', '14:54', NULL, NULL),
(19, 'Berhasil mengimport data jadwal menggunakan excel', '08:51', NULL, NULL),
(20, 'Berhasil mengimport data jadwal menggunakan excel', '09:31', NULL, NULL),
(21, 'Berhasil mengimport data jadwal menggunakan excel', '09:34', NULL, NULL),
(22, 'Berhasil menghapus data jadwal untuk tahun ajaran: 2019/2020, Semester: GANJIL', NULL, NULL, NULL),
(23, 'Berhasil menghapus data jadwal untuk tahun ajaran: 2019/2020, Semester: GANJIL', NULL, NULL, NULL),
(24, 'Berhasil menghapus data jadwal untuk tahun ajaran: 2019/2020, Semester: GANJIL', NULL, NULL, NULL),
(25, 'Berhasil menambah data jadwal untuk Mata Kuliah: Tes, Hari: Senin, Jam: 08:00:00 Ruangan: A', '12:12', NULL, NULL),
(26, 'Berhasil menghapus data jadwal untuk Mata Kuliah: Tes, Hari: Senin, Jam: 08:00:00 Ruangan: A', '12:13', NULL, NULL),
(27, 'Berhasil mengimport data jadwal menggunakan excel', '21:27', NULL, NULL),
(28, 'Berhasil menghapus data jadwal untuk tahun ajaran: 2017/2018, Semester: GANJIL', NULL, NULL, NULL),
(29, 'Berhasil mengimport data jadwal menggunakan excel', '21:30', NULL, NULL),
(30, 'Berhasil menghapus data jadwal untuk tahun ajaran: 2017/2018, Semester: GANJIL', NULL, NULL, NULL),
(31, 'Berhasil mengimport data jadwal menggunakan excel', '21:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asal_organisasi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `dari` time NOT NULL,
  `sampai` time NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2017_10_18_233404_create_permission_tables', 1),
(16, '2017_10_18_234530_create_post_tbl', 1),
(17, '2017_10_29_014553_buat_table_prodi', 2),
(18, '2017_10_30_062840_buat_table_tahunajaran', 3),
(19, '2017_10_30_083455_buat_table_ruangan', 4),
(20, '2017_10_30_095457_buat_table_hari', 5),
(21, '2017_10_30_095517_buat_table_jam', 5),
(22, '2017_10_30_101616_buat_table_waktu', 6),
(23, '2017_10_31_083232_buat_table_matkul', 7),
(24, '2017_10_31_131225_buat_table_dosen', 8),
(26, '2017_11_01_030120_buat_table_dosen', 9),
(28, '2017_11_01_142419_tambah_tabel_matkul', 10),
(29, '2017_11_01_143857_buat_tabel_matkul', 11),
(30, '2017_11_01_144258_buat_tabel_matkul', 12),
(31, '2017_11_04_230417_buat_table_jadwal', 13),
(32, '2017_11_06_060427_buat_table_berita', 14),
(33, '2017_11_11_034841_buat_jadwal_kosong', 15),
(34, '2017_11_13_084326_tambah_semester_matkul', 15),
(35, '2017_11_16_030405_buat_table_dekan', 16),
(37, '2017_11_16_061637_tambah_tanggal_berita', 17),
(38, '2017_11_18_223331_buat_table_jadwalguest', 18),
(39, '2017_12_06_234932_tambah_table_ketdosen', 19),
(40, '2017_12_08_235428_tambah_table_koderuang', 20),
(41, '2017_12_10_004632_tambah_publikasi_berita', 21),
(42, '2017_12_13_144336_buat_tabel_dekan', 22),
(43, '2018_02_04_211852_tambah_kelas_matkul', 23),
(44, '2018_02_13_050259_tambah_status_matkul', 24),
(45, '2018_02_24_111036_create_products_table', 25),
(46, '2018_02_24_214823_create_items_table', 26),
(47, '2018_02_25_003655_buat_tabel_prodi', 27),
(53, '2018_02_25_122849_tambah_tabel_dosen', 28),
(54, '2018_02_25_205909_buat__table_matkul', 28),
(55, '2018_02_26_073943_buat__table_jadwal', 29),
(56, '2019_06_04_151622_tambah_table_mahasiswa', 30),
(57, '2019_07_09_120424_buat_table_organisasi', 31),
(60, '2019_07_13_132344_buat_table_jadwalfh', 32),
(62, '2019_07_16_122806_buat_table_listhistory', 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_id`, `model_type`) VALUES
(1, 1, 'isAdmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(1, 1, 'isAdmin'),
(1, 14, 'App\\User'),
(1, 30, 'App\\User'),
(1, 32, 'App\\User'),
(1, 37, 'App\\User'),
(1, 38, 'App\\User'),
(2, 3, 'App\\User'),
(3, 24, 'App\\User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organisasi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id`, `organisasi`, `created_at`, `updated_at`) VALUES
(2, 'BEM FEB', '2019-07-09 05:15:08', '2019-07-09 05:15:08'),
(3, 'Himpunan Mahasiswa Prodi Akuntansi', '2019-07-23 02:06:05', '2019-07-23 02:06:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('akbarkurniawaan@gmail.com', '$2y$10$O3.d6UFy.doaLdDP1WAZO.F3xzDloBQbHupAk1FDIAcoAvSKqASI.', '2017-11-16 22:39:22'),
('hide@gmail.com', '$2y$10$0yNGXL/lf/OfkEOS6Oxcv.aMgurLAN6jXbAcqF85iP9IIHeR5hC5S', '2018-02-13 14:38:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, '2017-10-24 20:00:00'),
(2, 'superadmin', 'web', '2017-10-19 02:45:59', '2017-10-19 02:45:59'),
(3, 'bagianumum', 'web', '2017-12-08 15:01:11', '2017-12-08 15:01:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) UNSIGNED NOT NULL,
  `nama_prodi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `program`, `created_at`, `updated_at`) VALUES
(2, 'S1 HUKUM', 'S1 HUKUM', '2018-02-24 17:00:32', '2018-02-24 17:00:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'expert php', 'sddsfd', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2017-10-19 02:17:56', '2017-10-24 20:00:11'),
(2, 'superadmin', 'web', '2017-10-19 02:46:19', '2017-10-19 02:46:19'),
(3, 'bagianumum', 'web', '2017-12-08 15:01:55', '2017-12-08 15:01:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(10) UNSIGNED NOT NULL,
  `koderuangan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ruangan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas_ruangan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `koderuangan`, `nama_ruangan`, `kapasitas_ruangan`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Ruang AULA', 200, '2017-11-04 06:36:30', '2018-02-10 13:27:42'),
(2, '2', 'Ruang 2', 108, '2017-11-04 06:36:45', '2018-02-10 13:27:51'),
(3, '3', 'Ruang 3', 138, '2017-11-04 06:37:42', '2018-02-10 13:28:12'),
(4, '4', 'Ruang 4', 68, '2017-11-04 06:37:54', '2018-02-10 13:28:18'),
(5, '5', 'Ruang 5', 68, '2017-11-04 06:38:04', '2018-02-10 13:28:23'),
(6, '6', 'Ruang 6', 68, '2017-11-04 06:38:12', '2018-02-10 13:28:30'),
(7, '7', 'Ruang 7', 68, '2018-02-04 02:19:25', '2018-02-10 13:28:36'),
(8, '8', 'Ruang 8', 79, '2018-02-04 02:19:44', '2018-02-10 13:28:41'),
(9, '11', 'Ruang 11', 72, '2018-02-04 02:20:52', '2018-02-10 13:28:47'),
(10, '12', 'Ruang 12', 84, '2018-02-04 02:26:01', '2018-02-10 13:28:52'),
(12, '13', 'Ruang 13', 72, '2018-02-04 02:31:55', '2018-02-10 13:29:40'),
(13, '14', 'Ruang 14', 60, '2018-02-04 02:32:13', '2018-02-10 13:29:46'),
(14, '15', 'Ruang 15', 84, '2018-02-04 02:33:06', '2018-02-10 13:29:52'),
(15, '16', 'Ruang 16', 60, '2018-02-04 02:36:32', '2018-02-10 13:29:12'),
(16, 'ppak', 'Ruang PPAK', 0, '2018-02-04 02:37:15', '2018-02-10 13:30:13'),
(17, 'GB1a', 'GB 1 A', 66, '2018-02-04 02:38:05', '2018-02-04 02:38:05'),
(18, 'GB1b', 'GB 1 B', 66, '2018-02-04 02:38:28', '2018-02-04 02:38:28'),
(19, 'GB2', 'GB 2', 104, '2018-02-04 02:38:51', '2018-02-04 02:38:51'),
(20, 'GB3aula', 'GB 3 AULA', 150, '2018-02-04 02:39:28', '2018-02-04 02:39:28'),
(21, 'K.Internasional', 'Kelas Internasional', 30, '2018-02-04 02:40:00', '2018-02-04 02:40:00'),
(22, 'RK1MM', 'Ruang Kuliah 1 MM', 70, '2018-02-04 02:41:26', '2018-02-04 02:41:26'),
(23, 'RK2MM', 'Ruang Kuliah 2 MM', 70, '2018-02-04 02:41:43', '2018-02-04 02:41:43'),
(24, 'RK3MM', 'Ruang Kuliah 3 MM', 70, '2018-02-04 02:42:04', '2018-02-04 02:42:04'),
(25, 'RK4MM', 'Ruang Kuliah 4 MM', 70, '2018-02-04 02:42:22', '2018-02-04 02:42:22'),
(26, 'Lab', 'Lab', 100, '2018-02-10 13:27:28', '2018-02-10 13:27:28'),
(27, 'Aula MM', 'Aula MM', 100, '2018-02-11 00:05:01', '2018-02-11 00:05:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahunajaran` int(10) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` enum('GANJIL','GENAP') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahunajaran`, `tahun_ajaran`, `semester`, `created_at`, `updated_at`) VALUES
(1, '2017/2018', 'GANJIL', '2019-06-30 17:00:00', NULL),
(2, '2017/2018', 'GENAP', '2019-07-01 17:00:00', NULL),
(3, '2018/2019', 'GANJIL', '2019-07-02 17:00:00', NULL),
(4, '2018/2019', 'GENAP', '2019-07-03 17:00:00', NULL),
(5, '2019/2020', 'GANJIL', '2019-07-04 17:00:00', NULL),
(6, '2019/2020', 'GENAP', '2019-07-05 17:00:00', NULL),
(7, '2020/2021', 'GANJIL', '2019-07-06 17:00:00', NULL),
(8, '2020/2021', 'GENAP', '2019-07-07 17:00:00', NULL),
(9, '2021/2022', 'GANJIL', '2019-07-08 17:00:00', NULL),
(10, '2021/2022', 'GENAP', '2019-07-09 17:00:00', NULL),
(11, '2022/2023', 'GANJIL', '2019-07-10 17:00:00', NULL),
(12, '2022/2023', 'GENAP', '2019-07-11 17:00:00', NULL),
(13, '2023/2024', 'GANJIL', '2019-07-12 17:00:00', NULL),
(14, '2023/2024', 'GENAP', '2019-07-13 17:00:00', NULL),
(15, '2024/2025', 'GANJIL', '2019-07-14 17:00:00', NULL),
(16, '2024/2025', 'GENAP', '2019-07-15 17:00:00', NULL),
(17, '2025/2026', 'GANJIL', '2019-07-16 17:00:00', NULL),
(18, '2025/2026', 'GENAP', '2019-07-17 17:00:00', NULL),
(19, '2026/2027', 'GANJIL', '2019-07-18 17:00:00', NULL),
(20, '2026/2027', 'GENAP', '2019-07-19 17:00:00', NULL),
(21, '2027/2028', 'GANJIL', '2019-07-20 17:00:00', NULL),
(22, '2027/2028', 'GENAP', '2019-07-21 17:00:00', NULL),
(23, '2028/2029', 'GANJIL', '2019-07-22 17:00:00', NULL),
(24, '2028/2029', 'GENAP', '2019-07-23 17:00:00', NULL),
(25, '2029/2030', 'GANJIL', '2019-07-24 17:00:00', NULL),
(26, '2029/2030', 'GENAP', '2019-07-25 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hari`
--

CREATE TABLE `tb_hari` (
  `kode_hari` int(10) UNSIGNED NOT NULL,
  `nama_hari` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_hari`
--

INSERT INTO `tb_hari` (`kode_hari`, `nama_hari`, `created_at`, `updated_at`) VALUES
(1, 'Senin', '2018-02-25 02:48:06', '2018-02-25 02:48:06'),
(2, 'Selasa', '2018-02-25 02:48:11', '2018-02-25 02:48:11'),
(3, 'Rabu', '2018-02-25 02:48:16', '2018-02-25 02:48:16'),
(4, 'Kamis', '2018-02-25 02:48:21', '2018-02-25 02:48:21'),
(5, 'Jumat', '2018-02-25 02:48:27', '2018-02-25 02:48:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jam`
--

CREATE TABLE `tb_jam` (
  `kode_jam` int(10) UNSIGNED NOT NULL,
  `nama_jam` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_jam`
--

INSERT INTO `tb_jam` (`kode_jam`, `nama_jam`, `created_at`, `updated_at`) VALUES
(1, '08:00:00', '2018-02-25 02:56:35', '2018-02-25 02:56:41'),
(2, '09:50:00', '2018-02-25 02:56:53', '2018-02-25 02:57:30'),
(3, '10:30:00', '2018-02-25 02:57:09', '2018-02-25 02:57:09'),
(4, '13:30:00', '2018-02-25 02:58:11', '2018-02-25 02:58:11'),
(5, '14:00:00', '2018-02-25 02:58:29', '2018-02-25 02:58:29'),
(6, '16:00:00', '2018-02-25 02:58:58', '2018-02-25 02:58:58'),
(7, '17:00:00', '2018-02-25 02:59:47', '2018-02-25 02:59:47'),
(8, '19:30:00', '2018-02-25 03:00:18', '2018-02-25 03:00:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_waktu`
--

CREATE TABLE `tb_waktu` (
  `kode_waktu` int(10) UNSIGNED NOT NULL,
  `kode_hari` int(10) UNSIGNED NOT NULL,
  `kode_jam` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_waktu`
--

INSERT INTO `tb_waktu` (`kode_waktu`, `kode_hari`, `kode_jam`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-02-25 03:00:36', '2018-02-25 03:00:36'),
(2, 1, 3, '2018-02-25 03:00:42', '2018-02-25 03:00:42'),
(3, 1, 4, '2018-02-25 03:00:49', '2018-02-25 03:00:49'),
(4, 1, 6, '2018-02-25 03:00:54', '2018-02-25 03:00:54'),
(5, 1, 7, '2018-02-25 03:00:58', '2018-02-25 03:00:58'),
(6, 1, 8, '2018-02-25 03:01:02', '2018-02-25 03:01:02'),
(7, 2, 1, '2018-02-25 03:01:10', '2018-02-25 03:01:10'),
(8, 2, 3, '2018-02-25 03:01:16', '2018-02-25 03:01:16'),
(9, 2, 4, '2018-02-25 03:01:23', '2018-02-25 03:01:23'),
(10, 2, 6, '2018-02-25 03:01:30', '2018-02-25 03:01:30'),
(11, 2, 7, '2018-02-25 03:01:40', '2018-02-25 03:01:40'),
(12, 2, 8, '2018-02-25 03:01:45', '2018-02-25 03:01:45'),
(13, 3, 1, '2018-02-25 03:02:00', '2018-02-25 03:02:00'),
(14, 3, 3, '2018-02-25 03:02:05', '2018-02-25 03:02:05'),
(15, 3, 4, '2018-02-25 03:02:11', '2018-02-25 03:02:11'),
(16, 3, 6, '2018-02-25 03:02:26', '2018-02-25 03:02:26'),
(18, 3, 7, '2018-02-25 03:02:31', '2018-02-25 03:02:31'),
(19, 3, 8, '2018-02-25 03:02:36', '2018-02-25 03:02:36'),
(20, 4, 1, '2018-02-25 03:11:33', '2018-02-25 03:11:33'),
(21, 4, 3, '2018-02-25 03:11:38', '2018-02-25 03:11:38'),
(22, 4, 4, '2018-02-25 03:11:44', '2018-02-25 03:11:57'),
(23, 4, 6, '2018-02-25 03:12:07', '2018-02-25 03:12:07'),
(24, 4, 7, '2018-02-25 03:12:26', '2018-02-25 03:12:26'),
(25, 4, 8, '2018-02-25 03:12:31', '2018-02-25 03:12:31'),
(26, 5, 1, '2018-02-25 03:12:44', '2018-02-25 03:12:44'),
(27, 5, 2, '2018-02-25 03:13:05', '2018-02-25 03:13:05'),
(28, 5, 5, '2018-02-25 03:13:18', '2018-02-25 03:13:18'),
(29, 5, 6, '2018-02-25 03:13:28', '2018-02-25 03:13:28'),
(30, 5, 7, '2018-02-25 03:13:42', '2018-02-25 03:13:42'),
(31, 5, 8, '2018-02-25 03:13:46', '2018-02-25 03:13:46'),
(32, 5, 8, '2018-02-25 03:13:46', '2018-02-25 03:13:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'AKADEMIK', 'feb@feb.com', '$2y$10$P9mjXPADog2FzdBPQ6LMbui.hFz67j1hWSaCajsKqsQg4QgTnAcnO', 'dsxzp0sgyZTAZOyLZkdwaZI7PN8aSGIUdj46THlUg4OGNvcduYOicDCTZGns', '2017-10-19 02:40:56', '2019-07-20 14:57:41'),
(24, 'Bagian Umum', 'bagianumum@gmail.com', '$2y$10$Qem236jNkWIE0RywCcXMY.LaADc7TwNMvssIFTzIO4YR8mcPwM2ge', 'kf2zgOdtGKlPumSlavLQnpKBhiEAoCdHLhpK6xeEzkD08OkMqJCsXr8CUIn3', '2017-12-08 15:02:42', '2018-03-04 04:06:24'),
(25, 'sungapan', 'stiyogans@gmail.com', '$2y$10$gthiqK0fEKipiPsLBrQlGuWbdT8aRbWu2dp5MueyN.UzmfERwqE3C', NULL, '2018-12-06 17:36:35', '2018-12-06 17:36:35'),
(26, 'wwww', 'wow@cliptik.net', '$2y$10$KUjLdu3CdnqXXtReDPTOuuV/db89P63DgNrkc1CWdb5DwjhTCiLui', NULL, '2018-12-23 10:17:20', '2018-12-23 10:17:20'),
(27, 'indo', 'qwqweqwqwe@gmail.com', '$2y$10$BfwyReFePz/jYrzuWayMZ.US0JJwOF50cmU17CcRcV9OMXShyf1pS', NULL, '2019-01-01 17:10:09', '2019-01-01 17:10:09'),
(28, 'okemantap', 'sfbihsjfkads@GMAIL.COM', '$2y$10$Uyzfjv7WTj6WiPs/sDt8oOh1mmtkVJnLcsjsmP3Hn4EKY9VRNx3oG', NULL, '2019-01-02 06:16:59', '2019-01-02 06:16:59'),
(29, 'dewqewq', 'admin@gmail.com', '$2y$10$N7KsjRkAo.x3WdmYk/v3qOBf2r7QQEgebJhv661fGbJZaeTO3LU2e', NULL, '2019-02-21 14:28:12', '2019-02-21 14:28:12'),
(30, 'admin', 'admin2@gmail.com', '$2y$10$ZJwleJAmWBYq3C5w9GHcReLR5PZZlsdKhNks81DnGjr.E7bea6E3y', NULL, '2019-08-22 13:09:07', '2019-08-22 13:09:07'),
(31, 'Mustapa Ahmad Kamal', 'mustapakamalkml@gmail.com', '$2y$10$0JR0uTTDBp956PvxMuQJ3eD.2APAU7hlhjr7BckUfg133LLqlTseS', NULL, '2019-08-25 16:35:20', '2019-08-25 16:35:20'),
(32, 'Mustapa Ahmad Kamal', 'sma@almajaya.com', '$2y$10$APz2lvY41OqLKl0xppCW/usc7eGwI6LKGdUug5P7PdYKOTWjfzPOa', NULL, '2019-08-25 16:56:14', '2019-08-25 16:56:14'),
(33, 'Mustapa Ahmad Kamal', 'anggota@gmail.com', '$2y$10$FEl1A0fSFxdJqwgGWFhRYeP5LAVqRx/JbJHTPLS/J2zT.SeirKVfy', NULL, '2019-08-26 06:03:24', '2019-08-26 06:03:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwalfh`
--
ALTER TABLE `jadwalfh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwalfh_id_tahunajaran_foreign` (`id_tahunajaran`);

--
-- Indeks untuk tabel `jadwalguest`
--
ALTER TABLE `jadwalguest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwalguest_id_tahunajaran_foreign` (`id_tahunajaran`);

--
-- Indeks untuk tabel `list_history`
--
ALTER TABLE `list_history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahunajaran`);

--
-- Indeks untuk tabel `tb_hari`
--
ALTER TABLE `tb_hari`
  ADD PRIMARY KEY (`kode_hari`);

--
-- Indeks untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`kode_jam`);

--
-- Indeks untuk tabel `tb_waktu`
--
ALTER TABLE `tb_waktu`
  ADD PRIMARY KEY (`kode_waktu`),
  ADD KEY `tb_waktu_kode_hari_foreign` (`kode_hari`),
  ADD KEY `tb_waktu_kode_jam_foreign` (`kode_jam`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jadwalfeb`
--
ALTER TABLE `jadwalfh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwalguest`
--
ALTER TABLE `jadwalguest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `list_history`
--
ALTER TABLE `list_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahunajaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_hari`
--
ALTER TABLE `tb_hari`
  MODIFY `kode_hari` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  MODIFY `kode_jam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_waktu`
--
ALTER TABLE `tb_waktu`
  MODIFY `kode_waktu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
