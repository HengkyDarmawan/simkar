-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2023 pada 01.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simkar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_keluarga` varchar(128) NOT NULL,
  `hubungan` varchar(128) NOT NULL,
  `telp_keluarga` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_keluarga`
--

INSERT INTO `data_keluarga` (`id_keluarga`, `user_id`, `nama_keluarga`, `hubungan`, `telp_keluarga`) VALUES
(1, 1, 'sella', 'kakak', '089659177854'),
(2, 1, 'Dika', 'adik', '089657112254'),
(4, 4, 'Sandi', 'Anak', '089674154454'),
(6, 20, 'Ada Wong', 'Istri', '085117522255');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelatihan`
--

CREATE TABLE `data_pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_pelatihan` varchar(128) NOT NULL,
  `organisasi_penerbit` varchar(128) NOT NULL,
  `lokasi_pelatihan` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` varchar(128) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` varchar(128) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pelatihan`
--

INSERT INTO `data_pelatihan` (`id_pelatihan`, `user_id`, `nama_pelatihan`, `organisasi_penerbit`, `lokasi_pelatihan`, `deskripsi`, `url`, `tgl_mulai`, `tgl_selesai`, `status`, `created_at`) VALUES
(1, 1, 'Kampus Merdeka', 'Dicoding', 'Online', 'Mempelajari Mengenai javascript Fundamental', 'https://www.linkedin.com/in/hengky-darmawan/', '2022-03-01', '2022-08-31', 'approved', '2022-11-30'),
(2, 1, 'Web Master', 'Dumet School', 'Tanjung Duren', 'Mempelajari mengenai HTML, CSS, Bootstrap', 'https://getbootstrap.com/', '2022-11-01', '2022-12-01', 'approved', '2022-12-01'),
(4, 1, 'React Js', 'Digital Talent & KomInfo', 'Online', 'Mempelajari Mengenai React Js', 'https://bucket.cloud.lintasarta.co.id:8082/dts-sertifikat/sertifikat-pdf/e444dae6-c6db-46bd-8da0-23b811772f96.pdf', '2022-05-31', '2022-06-24', 'review', '2022-12-01'),
(7, 1, 'HTML', 'Progate', 'Online', 'Mempelajari tag - tag HTML', 'https://progate.com/', '2022-12-01', '2022-12-20', 'approved', '2022-12-03'),
(10, 5, 's', 's', 's', 'a', 'https://getbootstrap.com/docs/4.6/components/buttons/', '2022-12-18', '2022-12-31', 'rejected', '2022-12-22'),
(12, 3, 'Manajemen', 'Tokopedia', 'Online', 'aaa', 'https://stackoverflow.com', '2022-12-01', '2022-12-31', 'approved', '2022-12-22'),
(13, 4, 'Data Analyst', 'DQLAB', 'Online', 'SQL', 'https://digitalent.kominfo.go.id/', '2022-10-01', '2022-12-31', 'approved', '2022-12-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengalaman`
--

CREATE TABLE `data_pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_perusahaan` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `alasan_berhenti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pengalaman`
--

INSERT INTO `data_pengalaman` (`id_pengalaman`, `user_id`, `nama_perusahaan`, `jabatan`, `tgl_mulai`, `tgl_berakhir`, `status`, `alasan_berhenti`) VALUES
(1, 1, 'PT.ABC', 'UI/UX Design', '2021-11-01', '2022-11-01', 'review', 'kontrak habis'),
(2, 5, 'PT.Sinar Jaya', 'Web Developer', '2022-12-01', '2022-12-31', 'review', 'resign'),
(3, 4, 's', 's', '2022-12-15', '2022-12-16', 'review', 's'),
(5, 3, 'PT.QWETY', 'Akuntan', '2019-01-01', '2020-05-31', 'review', 'Kontrak Habis'),
(6, 1, 's', 's', '2023-03-06', '2023-03-31', 'approved', 'saa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_golongan`
--

CREATE TABLE `master_golongan` (
  `id_golongan` int(11) NOT NULL,
  `nama_golongan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_golongan`
--

INSERT INTO `master_golongan` (`id_golongan`, `nama_golongan`) VALUES
(1, 'III/a'),
(2, 'III/b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_hukuman`
--

CREATE TABLE `master_hukuman` (
  `id` int(11) NOT NULL,
  `hukuman` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_hukuman`
--

INSERT INTO `master_hukuman` (`id`, `hukuman`) VALUES
(1, 'Surat Peringatan 1'),
(2, 'Surat Peringatan 2'),
(3, 'Surat Peringatan 3'),
(4, 'PHK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jabatan`
--

CREATE TABLE `master_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `parent_jabatan_id` varchar(128) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_jabatan`
--

INSERT INTO `master_jabatan` (`id_jabatan`, `parent_jabatan_id`, `paket_id`, `jabatan`) VALUES
(1, '1', 2, 'WR 1'),
(2, '1', 0, 'WR 2'),
(3, '1.2', 0, 'Manajer IT'),
(4, '1', 0, 'WR3'),
(5, '1', 0, 'WR4'),
(10, '1.2.1', 1, 'Biro Infrastruktur'),
(11, '1.2.1', 5, 'Magang'),
(12, '1.4', 0, 'Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jurusan`
--

CREATE TABLE `master_jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_jurusan`
--

INSERT INTO `master_jurusan` (`id`, `jurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Sipil'),
(3, 'Akutansi'),
(4, 'Sastra Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kelompok_jabatan`
--

CREATE TABLE `master_kelompok_jabatan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kelompok_jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_kelompok_jabatan`
--

INSERT INTO `master_kelompok_jabatan` (`id`, `user_id`, `kelompok_jabatan`) VALUES
(1, 1, '1.2.1.1'),
(2, 2, '1.0.0.3'),
(3, 1, '1.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_libur`
--

CREATE TABLE `master_libur` (
  `id_libur` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_libur`
--

INSERT INTO `master_libur` (`id_libur`, `tgl_mulai`, `tgl_akhir`, `keterangan`) VALUES
(3, '2022-12-24', '2022-12-25', 'hari natal'),
(4, '2022-12-26', '2022-12-31', 'Tahun Baru'),
(5, '2022-12-01', '2022-12-31', 'Libur Akhir Tahun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_paket`
--

CREATE TABLE `master_paket` (
  `id_paket` int(11) NOT NULL,
  `golongan_id` int(11) DEFAULT NULL,
  `nama_paket` varchar(128) NOT NULL,
  `gaji_pokok` int(11) DEFAULT NULL,
  `tj_jabatan_fungsional` int(11) DEFAULT NULL,
  `tj_pendidikan_s3` int(11) DEFAULT NULL,
  `tj_transport_makan` int(11) DEFAULT NULL,
  `tj_jabatan_struktural` int(11) DEFAULT NULL,
  `tj_jabatan_rangkap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_paket`
--

INSERT INTO `master_paket` (`id_paket`, `golongan_id`, `nama_paket`, `gaji_pokok`, `tj_jabatan_fungsional`, `tj_pendidikan_s3`, `tj_transport_makan`, `tj_jabatan_struktural`, `tj_jabatan_rangkap`) VALUES
(1, NULL, 'Tipe A', 10000000, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Tipe B', 2069550, 1074468, NULL, 1800000, 1831650, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_parent_jabatan`
--

CREATE TABLE `master_parent_jabatan` (
  `id` int(11) NOT NULL,
  `id_parent_jabatan` varchar(128) NOT NULL,
  `parent_jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_parent_jabatan`
--

INSERT INTO `master_parent_jabatan` (`id`, `id_parent_jabatan`, `parent_jabatan`) VALUES
(7, '1', 'Rektor'),
(8, '1.1', 'WR1'),
(9, '1.2', 'WR2'),
(10, '1.3', 'WR3'),
(11, '1.4', 'WR4'),
(12, '1.2.1', 'Direktur IT'),
(13, '1.2.1.1', 'Biro Infrastruktur'),
(14, '1.2.1.2', 'Biro Sistem Informasi'),
(15, '1.2.1.3', 'Biro Layanan IT'),
(16, '1.2.1.1.1', 'Bagian Server'),
(17, '1.2.1.1.2', 'Bagian layanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pendidikan`
--

CREATE TABLE `master_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tingkat_pendidikan` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `universitas` varchar(128) NOT NULL,
  `alamat_univ` text NOT NULL,
  `judul_skripsi` varchar(128) NOT NULL,
  `nama_dospem` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL DEFAULT current_timestamp(),
  `tgl_lulus` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_pendidikan`
--

INSERT INTO `master_pendidikan` (`id_pendidikan`, `user_id`, `tingkat_pendidikan`, `jurusan`, `universitas`, `alamat_univ`, `judul_skripsi`, `nama_dospem`, `url`, `status`, `tgl_mulai`, `tgl_lulus`) VALUES
(1, 1, 'S1', 'Teknik Informatika', 'Universitas Dian Nusantara', 'Grogol', 'E-Commerce', 'Giri', 'https://www.google.com/', 'approved', '2013-01-01', '2017-01-31'),
(2, 1, 'S2', 'Teknik Informatika', 'ITB', 'Bandung', 'HRIS', 'Desi', 'https://www.google.com/', 'approved', '2023-01-12', '2018-01-31'),
(4, 3, 'S2', 'Ekonomi', 'ITB', 'Depok', 'Investasi', 'Andi', 'https://www.google.com/', 'approved', '2015-07-01', '2019-12-31'),
(5, 4, 'S1', 'Teknik Informasi', 'Universitas Indonesia', 'Depok', 'Company Profile', 'Henri', 'https://www.google.com/', 'approved', '2018-01-01', '2023-01-12'),
(6, 5, 'S1', 'Sastra Inggris', 'Universitas Gajah Mada', 'Yogyakarta', 'An Analysis of Symbols in Toba Batak Traditional House', 'Siti', 'https://www.google.com/', 'approved', '2016-01-08', '2022-01-14'),
(7, 3, 'S3', 'Teknik Mesin', 'Universitas Gajah Mada', 'bandung', 'cara mudah membuat mesin', 'Yusuf', 'https://puslit.mercubuana.ac.id/', 'approved', '2021-11-01', '2024-12-31'),
(8, 20, 'S1', 'Teknik Informatika', 'Harvad', 'Amerika', 'AI', 'Stev', 'https://disdukcapil.bandaacehkota.go.id/tinymce_upload/tinymce/plugins/imagemanager/F-1.06.pdf', 'approved', '2023-03-01', '2023-03-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_seminar`
--

CREATE TABLE `master_seminar` (
  `id_seminar` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_seminar` varchar(128) NOT NULL,
  `deskripsi_seminar` text NOT NULL,
  `organisasi_pelaksana` varchar(128) NOT NULL,
  `lokasi_seminar` varchar(128) NOT NULL,
  `tgl_seminar` date NOT NULL,
  `url` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_seminar`
--

INSERT INTO `master_seminar` (`id_seminar`, `user_id`, `nama_seminar`, `deskripsi_seminar`, `organisasi_pelaksana`, `lokasi_seminar`, `tgl_seminar`, `url`, `status`) VALUES
(1, 1, 'LINE TO UI/UX DESIGN', 'Have you ever wondered why some platforms are more demanding than the other? Or how can users be loyal to some products or brands? No worries! We’re gonna give you an exciting event which may answer some of your questions! ????Introducing : Find Your Line to UI/UX Design with Kak Gregorius Willy Adiguno! ????We’re here to dive deep into the world of UI UX Design with which will be held And what’s more exciting is that all participants will receive free access to Dicoding Course! ????What are you waiting for! Register yourself now!', 'dicodings', 'Online', '2022-12-09', 'https://fontawesome.com/', 'approved'),
(2, 3, 'tes', 'tes', 'tes', 'online', '2022-12-15', 'https://translate.google.com/', 'review'),
(5, 4, 's', 's', 's', 's', '2022-12-02', 's', 'approved'),
(6, 5, 'sa', 'sa', 'sa', 'sa', '2021-12-01', 'sa', 'rejected');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_status_pegawai`
--

CREATE TABLE `master_status_pegawai` (
  `id` int(11) NOT NULL,
  `status_pegawai` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_status_pegawai`
--

INSERT INTO `master_status_pegawai` (`id`, `status_pegawai`) VALUES
(1, 'Kontrak'),
(2, 'Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_university`
--

CREATE TABLE `master_university` (
  `id` int(11) NOT NULL,
  `universitas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_university`
--

INSERT INTO `master_university` (`id`, `universitas`) VALUES
(1, 'Universitas Dian Nusantara'),
(2, 'Universitas Indonesia'),
(3, 'Institut Teknologi Bandung'),
(4, 'Universitas Gadjah Mada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `address` varchar(128) NOT NULL,
  `tmpt_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `status_pernikahan` varchar(128) NOT NULL,
  `nik_ktp` bigint(16) NOT NULL,
  `nik_karyawan` bigint(13) NOT NULL,
  `nama_bank` varchar(128) NOT NULL,
  `no_rek` bigint(16) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `email_undira` varchar(128) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `nama_darurat` varchar(128) NOT NULL,
  `telp_darurat` varchar(12) NOT NULL,
  `no_bpjs_kesehatan` bigint(13) NOT NULL,
  `no_bpjs_ketenagakerjaan` bigint(11) NOT NULL,
  `jenis_pegawai` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tgl_bergabung` date NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `approval` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `jabatan_id`, `address`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `status_pernikahan`, `nik_ktp`, `nik_karyawan`, `nama_bank`, `no_rek`, `npwp`, `email`, `email_undira`, `telp`, `nama_darurat`, `telp_darurat`, `no_bpjs_kesehatan`, `no_bpjs_ketenagakerjaan`, `jenis_pegawai`, `image`, `password`, `role_id`, `is_active`, `tgl_bergabung`, `created_at`, `approval`) VALUES
(1, 'Hengky Darmawan', 4, 'Jakarta Barat, Indonesia', 'Pontianak', '2001-02-22', 'Pria', 'Buddha', 'Singel', 3174092505520003, 1100000000011, 'BCA', 1234567891123, '12.345.678.9-101.012', 'hengky@gmail.com', 'hengkydarmawan66@gmail.com', '082186629996', 'Ani', '082196629997', 1234567, 123456789, 'tendik', 'default.png', '$2y$10$ojaaWuHiz1Lc.8.vAs5qZu7lPXwvCj5YsIqQ0StBObS9mHbMXh/UG', 1, 1, '2022-12-13', '2021-11-02', 'approved'),
(3, 'Athiyyah Nadiya', 1, 'Jakarta Selatan, Indonesia', 'Surabaya', '2009-10-02', 'Perempuan', 'Islam', 'single', 1234, 1100000000013, 'Mandiri', 654654654, '12.345.678.9-101.013', 'staf@gmail.com', 'stafundira@gmail.com', '081211223566', 'Yudi', '082196629982', 6546544, 747444121, 'dosen tetap', 'girl.jpg', '$2y$10$U30aolUMCLZA11aaB/c1quMY5vs1aWIyYMs0luD8ugmJ2RTgNeDFu', 2, 1, '2019-12-13', '2010-10-22', 'approved'),
(4, 'Giri', 1, 'Jakarta Barat, Indonesia', 'Bandung', '1995-01-01', 'Pria', 'Islam', 'menikah', 56464, 1100000000010, 'Mandiri', 65644452545, '12.345.678.9-101.014', 'giri@gmail.com', 'giriundira@gmail.com', '081211223566', 'Sinta', '082196629722', 44443313, 8797741, 'dosen tidak tetap', 'default.png', '$2y$10$18r7ywjo4z82VioBR4U4GePdiMuX6.lQYN100BprgTNAx2pmXRN8W', 1, 1, '2018-12-13', '2000-11-12', 'rejected'),
(5, 'eky', 10, 'Jakarta Barat, Indonesia', 'Singkawang', '1995-11-15', 'Pria', 'Katolik', 'menikah', 123555, 12345455, 'Mandiri', 12355, '12.345.678.9-101.017', 'eky@gmail.com', 'hengkycross52@gmail.com', '089659172256', 'Eko', '082196628852', 121377, 132177, 'pegawai tetap', 'default.png', '$2y$10$b8nykjIrz5BUzu0cCpg78uYxQrtjTMMoFoyG7hRwn6LW0QMFXgJjS', 3, 1, '2020-12-01', '2001-11-11', 'approved'),
(18, 'as', 12, 'jakarta', 'Surabaya', '2019-03-12', 'Perempuan', 'Konghuchu', 'Singel', 9223372036854775807, 12345455, 'Mandiri', 654455, '12.345.678.9-101.017', 'sa@gmail.com', 'ekoUndira@gmail.com', '082186629997', 'su', '085117522254', 44411132123, 1234567333, '', 'default.png', '$2y$10$39zCTE/HnLQY4OGjsIzY5uzhnf11FbcJluaMDokbeTwgXC1WtkPqm', 3, 1, '2023-03-01', '2023-03-01', 'approved'),
(20, 'tes', 1, 'paris', 'Paris', '2023-03-01', 'pria', 'Kristen', 'nikah', 123555, 12345455, 'BCA', 654455, '12.345.678.9-101.020', 'leon@gmail.com', 'leonUndira@gmail.com', '089659172256', 'Ada Wong', '085117522255', 123456722, 123456733, '', 'default.png', '$2y$10$wf0Kjfiszy.zjhJMrkTCE.V6O/MjegWYUOzoPz/MiiUQlSZkW1PUe', 1, 1, '2023-03-01', '2023-03-02', 'review');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`, `sub_menu_id`) VALUES
(1, 1, 1, 1),
(4, 2, 2, 2),
(6, 3, 3, 3),
(17, 1, 4, 5),
(23, 2, 17, 1),
(25, 3, 17, 1),
(27, 1, 18, 1),
(28, 2, 18, 1),
(29, 3, 18, 1),
(33, 1, 17, 1),
(38, 1, 20, 1),
(42, 2, 21, 1),
(43, 2, 6, 1),
(44, 2, 12, 1),
(45, 3, 6, 1),
(46, 3, 7, 1),
(47, 2, 7, 1),
(48, 1, 6, 1),
(49, 1, 12, 1),
(50, 1, 7, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_jabatan`
--

CREATE TABLE `user_jabatan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_jabatan`
--

INSERT INTO `user_jabatan` (`id`, `user_id`, `jabatan_id`) VALUES
(1, 1, 3),
(2, 1, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Staf'),
(3, 'User'),
(4, 'Menu'),
(5, 'Laporan'),
(6, 'Absensi'),
(7, 'Gaji'),
(12, 'Master Data'),
(16, 'Sertifikat'),
(18, 'Setting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Staf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Dashboard', 'staf', 'fas fa-fw fa-tachometer-alt', 1),
(3, 3, 'Dashboard', 'user', 'fas fa-fw fa-tachometer-alt', 1),
(5, 4, 'Menu Management', 'menu', 'far fa-fw fa-folder', 1),
(6, 4, 'Sub Menu Management', 'menu/submenu', 'far fa-fw fa-folder-open', 1),
(13, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-lock', 1),
(15, 18, 'My Profile', 'setting', 'fas fa-fw fa-users-cog', 1),
(17, 12, 'Data Pegawai', 'pegawai', 'fas fa-fw fa-user-tie', 1),
(18, 18, 'Edit Profile', 'setting/edit', 'fas fa-fw fa-user-edit', 1),
(19, 18, 'Change Password', 'setting/changepassword', 'fas fa-fw fa-user-lock', 1),
(20, 12, 'Data Keluarga Pegawai', 'keluarga', 'fas fa-fw fa-house-user', 1),
(21, 12, 'Data Posisi Jabatan', 'jabatan', 'fas fa-fw fa-briefcase', 1),
(22, 12, 'Data Pendidikan', 'pendidikan', 'fas fa-fw fa-graduation-cap', 1),
(23, 12, 'Data Pelatihan', 'pelatihan', 'fas fa-fw fa-chalkboard-teacher', 1),
(25, 12, 'Data Seminar', 'seminar', 'fas fa-fw fa-laptop', 1),
(30, 12, 'Data Pengalaman', 'pengalaman', 'fas fa-fw fa-laptop-house', 1),
(32, 7, 'Slip Gaji', 'gaji/slip', 'fas fa-fw fa-wallet', 1),
(33, 12, 'Data Libur', 'libur', 'fas fa-fw fa-calendar-week', 1),
(34, 6, 'Rekap Absen', 'absensi', 'fas fa-fw fa-user-check', 1),
(35, 12, 'Data Staf', 'staf/pegawai', 'fas fa-fw fa-users', 0),
(38, 1, 'Approval User', 'approval', 'fas fa-fw fa-user-check', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(13, 'hengkydarmawan66@gmail.com', '7v5uLOwiZk5z/fW6pfdSo+E/VslSg6nAJvp968xCCHA=', 1677329950);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indeks untuk tabel `data_pelatihan`
--
ALTER TABLE `data_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indeks untuk tabel `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indeks untuk tabel `master_golongan`
--
ALTER TABLE `master_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indeks untuk tabel `master_hukuman`
--
ALTER TABLE `master_hukuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_jabatan`
--
ALTER TABLE `master_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `master_jurusan`
--
ALTER TABLE `master_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kelompok_jabatan`
--
ALTER TABLE `master_kelompok_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_libur`
--
ALTER TABLE `master_libur`
  ADD PRIMARY KEY (`id_libur`);

--
-- Indeks untuk tabel `master_paket`
--
ALTER TABLE `master_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `master_parent_jabatan`
--
ALTER TABLE `master_parent_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_pendidikan`
--
ALTER TABLE `master_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `master_seminar`
--
ALTER TABLE `master_seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indeks untuk tabel `master_status_pegawai`
--
ALTER TABLE `master_status_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_university`
--
ALTER TABLE `master_university`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_jabatan`
--
ALTER TABLE `user_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_pelatihan`
--
ALTER TABLE `data_pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_golongan`
--
ALTER TABLE `master_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_hukuman`
--
ALTER TABLE `master_hukuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `master_jabatan`
--
ALTER TABLE `master_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `master_jurusan`
--
ALTER TABLE `master_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `master_kelompok_jabatan`
--
ALTER TABLE `master_kelompok_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_libur`
--
ALTER TABLE `master_libur`
  MODIFY `id_libur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `master_paket`
--
ALTER TABLE `master_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_parent_jabatan`
--
ALTER TABLE `master_parent_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `master_pendidikan`
--
ALTER TABLE `master_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `master_seminar`
--
ALTER TABLE `master_seminar`
  MODIFY `id_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_status_pegawai`
--
ALTER TABLE `master_status_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_university`
--
ALTER TABLE `master_university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `user_jabatan`
--
ALTER TABLE `user_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
