-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 07:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_permohonan`
--

CREATE TABLE `tb_permohonan` (
  `id_mohon` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(200) NOT NULL,
  `email_perusahaan` varchar(100) NOT NULL,
  `kabupaten_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `jabatan_pimpinan` varchar(100) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `jabatan_p2k3` varchar(100) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `jumlah_naker` int(100) NOT NULL,
  `jumlah_laki` int(100) NOT NULL,
  `jumlah_pr` int(100) NOT NULL,
  `bpjs_k` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `skdtu` varchar(300) NOT NULL,
  `siuk` varchar(300) NOT NULL,
  `nosurat_permohonan` varchar(60) NOT NULL,
  `jabatan_ang_p2k3` text DEFAULT NULL,
  `jabatan_perusahaan` text DEFAULT NULL,
  `nama_anggota` text DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `kode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_permohonan`
--

INSERT INTO `tb_permohonan` (`id_mohon`, `id_user`, `nama_perusahaan`, `bidang_usaha`, `alamat_perusahaan`, `email_perusahaan`, `kabupaten_kota`, `provinsi`, `nama_pemilik`, `nama_pimpinan`, `jabatan_pimpinan`, `nama_ketua`, `jabatan_p2k3`, `npwp`, `jumlah_naker`, `jumlah_laki`, `jumlah_pr`, `bpjs_k`, `foto`, `skdtu`, `siuk`, `nosurat_permohonan`, `jabatan_ang_p2k3`, `jabatan_perusahaan`, `nama_anggota`, `status`, `kode`) VALUES
(44, 4, 'PT. PEMALANG BATANG TOL ROAD', 'Konstruksi', 'Jl. Tol Pemalang Batang Km.12', 'pemalang@gmail.com', 'Batang', 'Jawa Tengah', 'Paijo', 'Supriyono', 'Direktur Utama', 'Febrian Indra Putra', 'HSE', '43218765', 200, 150, 50, 'Sertifikat Ahli K3.pdf', 'SKP AhliK3.pdf', 'KTK Ahli K3.pdf', 'SKP AhliK3.pdf', '123/456', NULL, NULL, NULL, 'surat terbit', NULL),
(45, 1, 'PT.DAHLIA INTI KARYA', 'PT', 'Jl. Sendang Melati No.33', 'intika@gmail.com', 'Semarang', 'Jawa Tengah', 'Darmawan', 'Supriyono', 'HRD', 'Megawati vika', 'HSE', '6789', 1080, 1000, 80, 'Sertifikat Ahli K3.pdf', 'SKP AhliK3.pdf', 'KTK Ahli K3.pdf', 'Surat Permohonan.pdf', '4321', NULL, NULL, NULL, 'surat terbit', NULL),
(46, 4, 'PT.DAHLIA INTI KARYA', 'PT', 'Jl. Pahlawan No. 16', 'intika@gmail.com', 'Kota', 'Jawa Tengah', 'Rifqun Nabil', 'Dimas', 'HRD', 'Febrian Indra Putra', 'HSE', '9078790', 100, 50, 50, 'Sertifikat Ahli K3.pdf', 'SKP AhliK3.pdf', 'KTK Ahli K3.pdf', 'Surat Permohonan.pdf', '04/01/2022', NULL, NULL, NULL, 'surat terbit', NULL),
(47, 1, 'PT. SUCOFINDO', 'PT', 'Jl. Sendang Melati No.33', 'qwerty123@gmail.com', 'Kota', 'Jawa Tengah', 'Dimas', 'Dimas', 'HRD', 'Febrian Indra Putra', 'HSE', '9098070', 100, 80, 20, 'Sertifikat Ahli K3.pdf', 'SKP AhliK3.pdf', 'KTK Ahli K3.pdf', 'Surat Permohonan.pdf', '04/12/022', NULL, NULL, NULL, 'Data tidak sesuai', NULL),
(48, 4, 'pt sucofindo', 'pt', 'Jl.Perbalan Purwosari V 760C', 'dimasantoni492@gmail.com', 'Semarang', 'jawa tengah', 'Bily D Monkey', 'Billy', 'HRD', 'Billy D Teach', 'Hie', '930239', 100, 50, 50, 'verKRS_02738.pdf', 'hapus.pdf', 'hapusaja.pdf', 'UTS_KWU.pdf', '12/20/2021', NULL, NULL, NULL, 'Tidak Jelas', NULL),
(49, 4, 'PT. UNDINES', 'PT', 'Jl Tugu Muda No 25 RT 06/02', 'udines@gmail.com', 'Kudus', 'Jawa Tengah', 'Akhmad Rifqun', 'Abiel', 'HRD', 'Megawati vika', 'HSE', '081568482398', 1000, 500, 500, 'Sertifikat Ahli K3.pdf', 'SKP AhliK3.pdf', 'KTK Ahli K3.pdf', 'Surat Permohonan.pdf', '14/04/2022', 'Anggota|Anggota|Anggota|Anggota|Anggota|Anggota|Anggota|Anggota', 'Warehose|Packing|Packing|Packing|Packing|Packing|Packing|Packing', 'Alan B|Akbar H|Sika P|Reni |Sena|Rahma|Udin|Jibril', 'surat terbit', NULL),
(50, 1, 'PT. UDINUS', 'Universitas', 'Jl. Imam Bonjol No.20', 'udinus@gmail.com', 'Semarang', 'Jawa Tengah', 'Yayasan Universitas Dian Nuswantoro', 'Edi Nur Sasongko', 'Rektor', 'Megawati vika', 'Sekertaris', '664397933', 1080, 1000, 80, 'Sertifikat Ahli K3.pdf', 'SKP AhliK3.pdf', 'KTK Ahli K3.pdf', 'Surat Permohonan.pdf', '24/12/01', NULL, NULL, NULL, 'surat terbit', NULL),
(51, 11, 'PT. PEMALANG BATANG TOL ROAD', 'Konstruksi', 'Jl. Soekarno Hatta No.10', 'pemalangbatang@gmail.com', 'Semarang', 'Jawa Tengah', 'Akhmad Rifqun', 'Supriyono', 'Direktur Utama', 'Febrian Indra Putra', 'HSE', '4365', 400, 300, 100, 'Sertifikat Ahli K3.pdf', 'SKP AhliK3.pdf', 'KTK Ahli K3.pdf', 'Surat Permohonan.pdf', '1/17/2022', NULL, NULL, NULL, 'surat terbit', NULL),
(52, 11, 'PT. MAJU TERUS', 'PT', 'JL. Merpati No.33 Semarang', 'majuterus@gmail.com', 'Kota Semarang', 'Jawa Tengah', 'Margono', 'Tegar', 'Direktur', 'Laura', 'HSE', '05772851', 150, 120, 30, 'Sertifikat Ahli K3.pdf', 'SKP AhliK3.pdf', 'KTK Ahli K3.pdf', 'Surat Permohonan.pdf', '25/01/2022', NULL, NULL, NULL, 'diterima', '0'),
(53, 11, 'PT Cemerlang', 'PT Cemerlang', 'Jl Batu Alam No 11', 'cemerlang@gmail.com', 'Cirebon', 'Jawa Barat', 'Karno', 'Sukardi', 'Direktur Utama', 'Hendi', 'Sekretaris', '123333', 20, 10, 10, 'blank.pdf', 'blank.pdf', 'blank.pdf', 'blank.pdf', '04/14/2022', 'Anggota|Anggota|Anggota||Anggota|||||||||||||', 'Staff|Staff|PT Cemerlang|PT Cemerlang|CRBDev|||||||||||||', 'Herman|Rani|Ahmad|Hena|Roki|||||||||||||', 'surat terbit', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mohon` int(11) NOT NULL,
  `qr_code` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `id_user`, `id_mohon`, `qr_code`, `created_at`) VALUES
(2, 1, 7, '7.png', '2021-08-10 23:52:00'),
(3, 4, 9, '9.png', '2021-08-10 23:52:00'),
(4, 4, 12, '12.png', '2021-08-10 23:52:00'),
(5, 4, 10, '10.png', '2021-08-10 23:52:00'),
(6, 4, 13, '13.png', '2021-08-10 23:52:00'),
(7, 4, 11, '11.png', '2021-08-10 23:52:00'),
(8, 4, 14, '14.png', '2021-08-10 23:52:00'),
(9, 1, 15, '15.png', '2021-08-14 01:30:36'),
(10, 4, 10, '10.png', '2021-08-20 20:50:08'),
(11, 1, 18, '18.png', '2021-08-20 21:22:44'),
(12, 1, 16, '16.png', '2021-12-04 15:20:00'),
(13, 4, 9, '9.png', '2021-12-04 15:20:33'),
(14, 1, 25, '25.png', '2021-12-07 11:46:00'),
(15, 4, 26, '26.png', '2021-12-07 13:18:23'),
(16, 1, 27, '27.png', '2021-12-07 14:42:56'),
(17, 1, 28, '28.png', '2021-12-14 08:12:40'),
(18, 1, 31, '31.png', '2021-12-15 09:08:01'),
(19, 4, 41, '41.png', '2021-12-22 03:20:45'),
(20, 1, 42, '42.png', '2021-12-30 14:28:26'),
(21, 1, 43, '43.png', '2022-01-01 14:58:43'),
(22, 4, 44, '44.png', '2022-01-03 12:33:04'),
(23, 4, 46, '46.png', '2022-01-04 02:45:25'),
(24, 1, 45, '45.png', '2022-01-11 09:03:44'),
(25, 4, 49, '49.png', '2022-01-11 09:17:14'),
(26, 1, 50, '50.png', '2022-01-14 04:16:53'),
(27, 11, 51, '51.png', '2022-01-17 03:06:07'),
(29, 11, 53, '53.png', '2022-04-15 00:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(3, 'kadis', 'kadis@gmail.com', 'kadis', 'kadis'),
(11, 'herwin', 'herwin@gmail.com', 'herwin', 'pemohon'),
(12, 'Kabid', 'kabid@gmail.com', 'kabid', 'kabid'),
(13, 'Sekdis', 'sekdis@gmail.com', 'sekdis', 'sekdis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  ADD PRIMARY KEY (`id_mohon`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  MODIFY `id_mohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
