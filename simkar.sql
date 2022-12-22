-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 01:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
-- Table structure for table `data_pelatihan`
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
-- Dumping data for table `data_pelatihan`
--

INSERT INTO `data_pelatihan` (`id_pelatihan`, `user_id`, `nama_pelatihan`, `organisasi_penerbit`, `lokasi_pelatihan`, `deskripsi`, `url`, `tgl_mulai`, `tgl_selesai`, `status`, `created_at`) VALUES
(1, 1, 'Kampus Merdeka', 'Dicoding', 'Online', 'Mempelajari Mengenai javascript Fundamental', 'https://www.linkedin.com/in/hengky-darmawan/', '2022-03-01', '2022-08-31', 'approved', '2022-11-30'),
(2, 1, 'Web Master', 'Dumet School', 'Tanjung Duren', 'Mempelajari mengenai HTML, CSS, Bootstrap', 'https://getbootstrap.com/', '2022-11-01', '2022-12-01', 'review', '2022-12-01'),
(4, 1, 'React Js', 'Digital Talent & KomInfo', 'Online', 'Mempelajari Mengenai React Js', 'https://bucket.cloud.lintasarta.co.id:8082/dts-sertifikat/sertifikat-pdf/e444dae6-c6db-46bd-8da0-23b811772f96.pdf', '2022-05-31', '2022-06-24', 'review', '2022-12-01'),
(7, 1, 'HTML', 'Progate', 'Online', 'Mempelajari tag - tag HTML', 'https://progate.com/', '2022-12-01', '2022-12-20', 'approved', '2022-12-03'),
(10, 5, 's', 's', 's', 'a', 'https://getbootstrap.com/docs/4.6/components/buttons/', '2022-12-18', '2022-12-31', 'rejected', '2022-12-22'),
(12, 3, 'Manajemen', 'Tokopedia', 'Online', 'aaa', 'https://stackoverflow.com', '2022-12-01', '2022-12-31', 'approved', '2022-12-22'),
(13, 4, 'Data Analyst', 'DQLAB', 'Online', 'SQL', 'https://digitalent.kominfo.go.id/', '2022-10-01', '2022-12-31', 'approved', '2022-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengalaman`
--

CREATE TABLE `data_pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_perusahaan` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `alasan_berhenti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengalaman`
--

INSERT INTO `data_pengalaman` (`id_pengalaman`, `user_id`, `nama_perusahaan`, `jabatan`, `tgl_mulai`, `tgl_berakhir`, `alasan_berhenti`) VALUES
(1, 1, 'PT.ABC', 'UI/UX Design', '2021-11-01', '2022-11-01', 'kontrak habis'),
(2, 5, 'PT.Sinar Jaya', 'Web Developer', '2022-12-01', '2022-12-31', 'resign'),
(3, 4, 's', 's', '2022-12-15', '2022-12-16', 's'),
(5, 3, 'PT.QWETY', 'Akuntan', '2019-01-01', '2020-05-31', 'Kontrak Habis');

-- --------------------------------------------------------

--
-- Table structure for table `master_golongan`
--

CREATE TABLE `master_golongan` (
  `id_golongan` int(11) NOT NULL,
  `nama_golongan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_golongan`
--

INSERT INTO `master_golongan` (`id_golongan`, `nama_golongan`) VALUES
(1, 'III/a'),
(2, 'III/b');

-- --------------------------------------------------------

--
-- Table structure for table `master_hukuman`
--

CREATE TABLE `master_hukuman` (
  `id` int(11) NOT NULL,
  `hukuman` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_hukuman`
--

INSERT INTO `master_hukuman` (`id`, `hukuman`) VALUES
(1, 'Surat Peringatan 1'),
(2, 'Surat Peringatan 2'),
(3, 'Surat Peringatan 3'),
(4, 'PHK');

-- --------------------------------------------------------

--
-- Table structure for table `master_jabatan`
--

CREATE TABLE `master_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `parent_jabatan_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_jabatan`
--

INSERT INTO `master_jabatan` (`id_jabatan`, `parent_jabatan_id`, `paket_id`, `jabatan`) VALUES
(1, 1, 2, 'WR 1'),
(2, 1, 0, 'WR 2'),
(3, 2, 0, 'SDM'),
(4, 1, 0, 'WR3'),
(5, 1, 0, 'WR4'),
(8, 1, 0, 'Rektor'),
(10, 6, 1, 'Manajer IT'),
(11, 4, 0, 'Magang');

-- --------------------------------------------------------

--
-- Table structure for table `master_jurusan`
--

CREATE TABLE `master_jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_jurusan`
--

INSERT INTO `master_jurusan` (`id`, `jurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Sipil'),
(3, 'Akutansi'),
(4, 'Sastra Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `master_kelompok_jabatan`
--

CREATE TABLE `master_kelompok_jabatan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `kelompok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_libur`
--

CREATE TABLE `master_libur` (
  `id_libur` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_libur`
--

INSERT INTO `master_libur` (`id_libur`, `tgl_mulai`, `tgl_akhir`, `keterangan`) VALUES
(3, '2022-12-24', '2022-12-25', 'hari natal'),
(4, '2022-12-26', '2022-12-31', 'Tahun Baru'),
(5, '2022-12-01', '2022-12-31', 'Libur Akhir Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `master_paket`
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
-- Dumping data for table `master_paket`
--

INSERT INTO `master_paket` (`id_paket`, `golongan_id`, `nama_paket`, `gaji_pokok`, `tj_jabatan_fungsional`, `tj_pendidikan_s3`, `tj_transport_makan`, `tj_jabatan_struktural`, `tj_jabatan_rangkap`) VALUES
(1, NULL, 'Tipe A', 10000000, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Tipe B', 2069550, 1074468, NULL, 1800000, 1831650, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_parent_jabatan`
--

CREATE TABLE `master_parent_jabatan` (
  `id_parent_jabatan` int(11) NOT NULL,
  `parent_jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_parent_jabatan`
--

INSERT INTO `master_parent_jabatan` (`id_parent_jabatan`, `parent_jabatan`) VALUES
(1, 'Manager'),
(2, 'Keuangan'),
(4, 'Manajer IT'),
(6, 'WR1');

-- --------------------------------------------------------

--
-- Table structure for table `master_pendidikan`
--

CREATE TABLE `master_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tingkat_pendidikan` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `universitas` varchar(128) NOT NULL,
  `alamat_univ` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_lulus` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_pendidikan`
--

INSERT INTO `master_pendidikan` (`id_pendidikan`, `user_id`, `tingkat_pendidikan`, `jurusan`, `universitas`, `alamat_univ`, `tgl_mulai`, `tgl_lulus`) VALUES
(1, 1, 'S1', 'Teknik Informatika', 'Universitas Dian Nusantara', 'Grogol', '2019-10-01', '2023-10-01'),
(2, 1, 'S2', 'Teknik Informatika', 'ITB', 'Bandung', '2023-12-01', '2025-12-01'),
(4, 3, 'S2', 'Ekonomi', 'ITB', 'Depok', '2022-12-02', '2022-12-30'),
(5, 4, 'S1', 'Teknik Informasi', 'Universitas Indonesia', 'Depok', '2017-01-01', '2024-01-30'),
(6, 5, 'S1', 'Sastra Inggris', 'Universitas Gajah Mada', 'Yogyakarta', '2017-10-02', '2020-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `master_seminar`
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
-- Dumping data for table `master_seminar`
--

INSERT INTO `master_seminar` (`id_seminar`, `user_id`, `nama_seminar`, `deskripsi_seminar`, `organisasi_pelaksana`, `lokasi_seminar`, `tgl_seminar`, `url`, `status`) VALUES
(1, 1, 'LINE TO UI/UX DESIGN', 'Have you ever wondered why some platforms are more demanding than the other? Or how can users be loyal to some products or brands? No worries! We’re gonna give you an exciting event which may answer some of your questions! ????Introducing : Find Your Line to UI/UX Design with Kak Gregorius Willy Adiguno! ????We’re here to dive deep into the world of UI UX Design with which will be held And what’s more exciting is that all participants will receive free access to Dicoding Course! ????What are you waiting for! Register yourself now!', 'dicodings', 'Online', '2022-12-09', 'https://fontawesome.com/', 'approved'),
(2, 3, 'tes', 'tes', 'tes', 'online', '2022-12-15', 'https://translate.google.com/', 'review'),
(5, 4, 's', 's', 's', 's', '2022-12-02', 's', 'rejected'),
(6, 5, 'sa', 'sa', 'sa', 'sa', '2021-12-01', 'sa', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `master_status_pegawai`
--

CREATE TABLE `master_status_pegawai` (
  `id` int(11) NOT NULL,
  `status_pegawai` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_status_pegawai`
--

INSERT INTO `master_status_pegawai` (`id`, `status_pegawai`) VALUES
(1, 'Kontrak'),
(2, 'Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `master_university`
--

CREATE TABLE `master_university` (
  `id` int(11) NOT NULL,
  `universitas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_university`
--

INSERT INTO `master_university` (`id`, `universitas`) VALUES
(1, 'Universitas Dian Nusantara'),
(2, 'Universitas Indonesia'),
(3, 'Institut Teknologi Bandung'),
(4, 'Universitas Gadjah Mada');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
  `nik_ktp` bigint(16) NOT NULL,
  `nik_karyawan` bigint(13) NOT NULL,
  `nama_bank` varchar(128) NOT NULL,
  `no_rek` bigint(16) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `email_undira` varchar(128) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `no_bpjs_kesehatan` bigint(13) NOT NULL,
  `no_bpjs_ketenagakerjaan` bigint(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tgl_bergabung` date NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `jabatan_id`, `address`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `nik_ktp`, `nik_karyawan`, `nama_bank`, `no_rek`, `npwp`, `email`, `email_undira`, `telp`, `no_bpjs_kesehatan`, `no_bpjs_ketenagakerjaan`, `image`, `password`, `role_id`, `is_active`, `tgl_bergabung`, `created_at`) VALUES
(1, 'Hengky Darmawan', 4, 'Jakarta Barat, Indonesia', 'Pontianak', '2001-02-22', 'Laki-laki', 'Buddha', 3174092505520003, 1100000000011, 'BCA', 1234567891123, '12.345.678.9-101.012', 'hengky@gmail.com', 'hengkydarmawan66@gmail.com', '082186629996', 1234567, 123456789, 'default.png', '$2y$10$ojaaWuHiz1Lc.8.vAs5qZu7lPXwvCj5YsIqQ0StBObS9mHbMXh/UG', 1, 1, '2022-12-13', 20211102),
(3, 'Athiyyah Nadiya', 1, 'Jakarta Selatan, Indonesia', 'Surabaya', '2009-10-02', 'Perempuan', 'Islam', 0, 1100000000013, 'Mandiri', 0, '0', 'staf@gmail.com', 'stafundira@gmail.com', '081211223566', 0, 0, 'girl.jpg', '$2y$10$U30aolUMCLZA11aaB/c1quMY5vs1aWIyYMs0luD8ugmJ2RTgNeDFu', 2, 1, '2019-12-13', 101022),
(4, 'Giri', 1, 'Jakarta Barat, Indonesia', 'Bandung', '1995-01-01', 'Laki-laki', 'Islam', 0, 1100000000010, 'Mandiri', 0, '0', 'giri@gmail.com', 'giriundira@gmail.com', '081211223566', 0, 0, 'default.png', '$2y$10$18r7ywjo4z82VioBR4U4GePdiMuX6.lQYN100BprgTNAx2pmXRN8W', 1, 1, '2018-12-13', 1112),
(5, 'tes', 2, 'Jakarta Selatan, Indonesia', 'Surabaya', '1995-11-02', '', '', 123, 123, 'BRI', 123, '1321', 'tes@gmail.com', 'hengkycross172@gmail.com', '089659172255', 1213, 1321, 'default.png', '$2y$10$b8nykjIrz5BUzu0cCpg78uYxQrtjTMMoFoyG7hRwn6LW0QMFXgJjS', 3, 1, '2020-12-10', 11111);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(4, 2, 2),
(6, 3, 3),
(17, 1, 4),
(23, 2, 17),
(24, 3, 16),
(25, 3, 17),
(27, 1, 18),
(28, 2, 18),
(29, 3, 18),
(32, 1, 12),
(33, 1, 17),
(38, 1, 20),
(40, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Staf'),
(3, 'User'),
(4, 'Menu'),
(5, 'Laporan'),
(12, 'Master Data'),
(16, 'Sertifikat'),
(18, 'Setting');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Staf'),
(3, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
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
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Dashboard Staf', 'staf/index', 'fas fa-fw fa-tachometer-alt', 1),
(3, 3, 'User', 'user', 'fas fa-fw fa-tachometer-alt', 1),
(5, 4, 'Menu Management', 'menu', 'far fa-fw fa-folder', 1),
(6, 4, 'Sub Menu Management', 'menu/submenu', 'far fa-fw fa-folder-open', 1),
(13, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-check', 1),
(15, 18, 'My Profile', 'setting', 'fas fa-fw fa-users-cog', 1),
(17, 12, 'Data Pegawai', 'pegawai/index', 'fas fa-fw fa-user-tie', 1),
(18, 18, 'Edit Profile', 'setting/edit', 'fas fa-fw fa-user-edit', 1),
(19, 18, 'Change Password', 'setting/changepassword', 'fas fa-fw fa-user-lock', 1),
(20, 12, 'Data Jabatan', 'jabatan/index', 'fas fa-fw fa-briefcase', 1),
(21, 12, 'Data Pendidikan', 'pendidikan', 'fas fa-fw fa-graduation-cap', 1),
(22, 12, 'Data Pelatihan', 'pelatihan/index', 'fas fa-fw fa-chalkboard-teacher', 1),
(23, 12, 'Data Seminar', 'seminar', 'fas fa-fw fa-laptop', 1),
(30, 12, 'Data Pengalaman', 'pengalaman', 'fas fa-fw fa-laptop-house', 1),
(31, 12, 'Data Libur', 'libur', 'fas fa-fw fa-calendar-week', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pelatihan`
--
ALTER TABLE `data_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `master_golongan`
--
ALTER TABLE `master_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `master_hukuman`
--
ALTER TABLE `master_hukuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `master_jurusan`
--
ALTER TABLE `master_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kelompok_jabatan`
--
ALTER TABLE `master_kelompok_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_libur`
--
ALTER TABLE `master_libur`
  ADD PRIMARY KEY (`id_libur`);

--
-- Indexes for table `master_paket`
--
ALTER TABLE `master_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `master_parent_jabatan`
--
ALTER TABLE `master_parent_jabatan`
  ADD PRIMARY KEY (`id_parent_jabatan`);

--
-- Indexes for table `master_pendidikan`
--
ALTER TABLE `master_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `master_seminar`
--
ALTER TABLE `master_seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indexes for table `master_status_pegawai`
--
ALTER TABLE `master_status_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_university`
--
ALTER TABLE `master_university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pelatihan`
--
ALTER TABLE `data_pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_golongan`
--
ALTER TABLE `master_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_hukuman`
--
ALTER TABLE `master_hukuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_jurusan`
--
ALTER TABLE `master_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_kelompok_jabatan`
--
ALTER TABLE `master_kelompok_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_libur`
--
ALTER TABLE `master_libur`
  MODIFY `id_libur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_paket`
--
ALTER TABLE `master_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_parent_jabatan`
--
ALTER TABLE `master_parent_jabatan`
  MODIFY `id_parent_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_pendidikan`
--
ALTER TABLE `master_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_seminar`
--
ALTER TABLE `master_seminar`
  MODIFY `id_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_status_pegawai`
--
ALTER TABLE `master_status_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_university`
--
ALTER TABLE `master_university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
