-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 07:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codemasterclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `id` int(11) NOT NULL,
  `nomor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`id`, `nomor`) VALUES
(1, '081226044879');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `link` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `judul`, `gambar`, `link`) VALUES
(15, 'UI/UX Design', 'uiux.jpg', 'materi_UI.php'),
(16, 'AR/VR', 'arvr.jpg', 'materi_AR.php'),
(17, 'Keamanan Siber', 'siber.jpg', 'materi_Keamanan.php'),
(18, 'Video & Animasi', 'vid.jpg', 'materi_video.php'),
(19, 'Bisnis Digital', 'bisnis.jpg', 'materi_bisnis.php'),
(20, 'AI & IOT', 'iot.jpg', 'materi_ai.php'),
(21, 'Aplikasi Sistem Informasi', 'aplikasisi.jpg', 'materi_asi.php'),
(22, 'Pengembangan Game', 'pengembangan.jpg', 'materi_PG.php'),
(23, 'Pemrograman', 'pemrograman.jpg', 'materi_pemrograman.php');

-- --------------------------------------------------------

--
-- Table structure for table `kelasbaru`
--

CREATE TABLE `kelasbaru` (
  `id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `link` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelasbaru`
--

INSERT INTO `kelasbaru` (`id`, `judul`, `gambar`, `link`) VALUES
(1, 'AR/VR', 'img/arvr.jpg', 'materi_ar.php'),
(2, 'Video dan Animasi', 'img/vid.jpg', 'Materi_Video.php'),
(3, 'Aplikasi Sistem Informasi', 'img/aplikasiSI.jpg', 'Materi_ASI.php');

-- --------------------------------------------------------

--
-- Table structure for table `materiui`
--

CREATE TABLE `materiui` (
  `id_materiui` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `subtext` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `content_type` varchar(255) NOT NULL DEFAULT 'text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materiui`
--

INSERT INTO `materiui` (`id_materiui`, `label`, `link`, `subtext`, `content`, `content_type`) VALUES
(1, 'INVITATION TO GROUP', 'Materi1_UI.php', 'Join Grup Belajar di Telegram', 'https://t.me/+DdWaiPgMubg2YjE1', 'text'),
(2, 'ASSETS', 'Materi1_UI.php', 'Download Assets Latihanmu Disini', 'https://drive.google.com/drive/folders/1vTt43nMzXrjHyM33CISWA3kCuCjLtjs5?usp=drive_link', 'text'),
(3, 'DOWNLOAD FIGMA', 'Materi1_UI.php', 'Download Figma', 'https://www.figma.com/downloads/', 'text'),
(4, 'MATERI 1 : BASIC TOOLS', 'Materi1_UI.php', 'Frame and layout', '0JeyMBOPLqw', 'video'),
(5, 'MATERI 2 : SHORTCUT', 'Materi1_UI.php', 'Keyborad shortcut pada Figma', 'Modul Praktikum 2 - PPW - Reguler - Genap 2022-2023.pdf', 'pdf'),
(6, 'MATERI 3 : TIPS AND TRICKS', 'Materi1_UI.php', 'Tips Design', '1h73MOcH3xA', 'video');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Tgl_Daftar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id_user`, `username`, `email`, `password`, `Tgl_Daftar`) VALUES
(12, 'dabit', 'dabit', '202cb962ac59075b964b07152d234b70', '2023-10-11 03:07:39'),
(13, 'anas', 'anas', '202cb962ac59075b964b07152d234b70', '2023-10-11 03:09:30'),
(14, 'sherlymarsa_', 'sherly@students.amikom.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', '2023-12-04 13:29:49'),
(15, 'marsa', 'marsarenaaa@gmail.com', '74b87337454200d4d33f80c4663dc5e5', '2023-12-04 13:34:39'),
(23, 'mar', 'mar@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-12-10 13:58:00'),
(25, 'nas', 'nas@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-12-16 09:53:43'),
(26, 'naufalham', 'hambalinaufal4@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-12-18 16:44:47'),
(29, 'pamela', 'pamela@gamail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2023-12-21 06:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `id` int(11) NOT NULL,
  `penjelasan` text NOT NULL,
  `akun` text NOT NULL,
  `penggunaan_dilarang` text NOT NULL,
  `tanggung_jawab` text NOT NULL,
  `batasan` text NOT NULL,
  `hukum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`id`, `penjelasan`, `akun`, `penggunaan_dilarang`, `tanggung_jawab`, `batasan`, `hukum`) VALUES
(1, 'Syarat dan Ketentuan ini merupakan perjanjian antara pengguna dan Code Masterclass. Syarat dan Ketentuan ini mengatur Anda saat mengakses dan menggunakan seluruh layanan, fitur dan produk yang kami sediakan. Harap membaca Syarat dan Ketentuan ini secara seksama sebelum Anda memulai menggunakan Platform Kami, karena peraturan ini berlaku pada penggunaan Anda terhadap Platform Kami.', 'Sebelum menggunakan Platform, kami meminta Anda untuk menyetujui Syarat dan Ketentuan beserta Kebijakan Privasi untuk Anda dapat mendaftarkan diri dengan memberikan informasi yang Kami butuhkan. Saat melakukan pendaftaran, Kami akan meminta Anda untuk memberikan akses akun google, nama lengkap, profil, jenis kelamin, dan alamat surat elektronik Anda. Keamanan dan kerahasiaan akun Anda, termasuk namun tidak terbatas pada seluruh data pribadi yang Anda berikan kepada kami melalui formulir pendaftaran pada Platform kami, sepenuhnya merupakan tanggung jawab pribadi Anda.', 'Anda hanya diperbolehkan menggunakan Platform kami untuk tujuan-tujuan yang sah menurut hukum. Anda dilarang keras untuk menggunakan Platform Kami dengan melanggar hukum dan peraturan lokal, nasional, maupun internasional yang berlaku, dengan cara yang melanggar hukum atau menipu, menyebarkan atau mengirimkan materi, dengan sengaja meneruskan data.\r\nAnda juga setuju untuk tidak mengirim, menerima, mengunggah, menggandakan, menyalin materi, dan tidak mengakses tanpa izin.', 'Anda bertanggung jawab secara penuh atas setiap kerugian dan/atau klaim yang timbul dari penggunaan Platform melalui akun Anda, baik oleh Anda atau pihak lain yang menggunakan akun Anda, dengan cara yang bertentangan dengan Ketentuan Penggunaan ini, peraturan perundang-undangan yang berlaku, pelanggaran hak kekayaan intelektual dan/atau aktivitas lain yang merugikan publik dan/atau pihak lain manapun atau yang dapat atau dianggap dapat merusak reputasi kami. Kami tidak menjamin bahwa Platform akan aman atau terbebas dari bug atau virus. Anda bertanggung jawab untuk mengatur teknologi informasi, program komputer, serta platform yang Anda gunakan untuk mengakses Platform kami. Anda harus menggunakan perangkat lunak anti-virus Anda sendiri.', 'Platform yang Kami sediakan adalah sebagaimana adanya dan Kami tidak menyatakan atau menjamin bahwa keandalan, ketepatan waktu, kualitas, kesesuaian, ketersediaan, akurasi, kelengkapan atau keamanan dari Platform dapat memenuhi kebutuhan dan akan sesuai dengan harapan Anda.', 'Syarat dan Ketentuan ini diatur berdasarkan hukum Republik Indonesia. Setiap dan seluruh perselisihan yang timbul dari penggunaan Platform tunduk pada yurisdiksi eksklusif Pengadilan Negeri. Code Masterclass akan melaporkan setiap pelanggaran plagiasi konten dan memproses secara hukum.');

-- --------------------------------------------------------

--
-- Table structure for table `upload_karya`
--

CREATE TABLE `upload_karya` (
  `id_upload` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `judul_kelas` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_karya`
--

INSERT INTO `upload_karya` (`id_upload`, `username`, `judul_kelas`, `gambar`, `id_user`) VALUES
(30, 'mar', 'Video & Animasi', 'uploads/v1.gif', 23),
(31, 'mar', 'Keamanan Siber', 'uploads/k5.jfif', 23),
(32, 'naufalham', 'Media AR/VR', 'uploads/ar4.jpeg', 26),
(33, 'naufalham', 'Aplikasi Sistem Informasi', 'uploads/ap2.jfif', 26),
(34, 'pamela', 'AI dan IOT', 'uploads/ai3.jfif', 29),
(35, 'pamela', 'UI/UX Design', 'uploads/ui1.png', 29),
(36, 'nas', 'Pemrograman', 'uploads/p6.jfif', 25),
(37, 'nas', 'Pengembangan Game', 'uploads/g5.jfif', 25),
(38, 'naufalham', 'Bisnis Digital', 'uploads/bd2.jfif', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelasbaru`
--
ALTER TABLE `kelasbaru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_karya`
--
ALTER TABLE `upload_karya`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kelasbaru`
--
ALTER TABLE `kelasbaru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload_karya`
--
ALTER TABLE `upload_karya`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `upload_karya`
--
ALTER TABLE `upload_karya`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `signup` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
