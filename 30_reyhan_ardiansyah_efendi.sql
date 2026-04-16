-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2026 at 01:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `30_reyhan ardiansyah efendi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(2, 'admin', '$2y$10$MEckIFEpbIT7YV2JhQosSuR9/bE5GA8w4RDq.cOf0RPWE1WTlN66S', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int NOT NULL,
  `judul_kegiatan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `deskripsi`, `tanggal_kegiatan`, `gambar`) VALUES
(1, 'Uji Kopetensi Keahlian MULTIMEDIA', 'Alhamdulillah, Hari ini Rabu, 15 April 2026 telah terlaksana dengan lancar Uji Kompetensi Keahlian SMK Negeri 1 Dlanggu Jurusan Multimedia (Kreator Konten) Skema Multimedia Kreator Konten bersama LSP P3 Teknologi Digital.\r\n\r\nSebanyak 19 peserta mengikuti Uji Kompetensi Keahlian dengan penuh semangat dan kreativitas.\r\nMenghadirkan konten inspiratif dan inovatif sebagai bukti kesiapan menjadi kreator digital yang profesional.', '2026-04-10', 'Cuplikan layar 2026-04-16 093517.png'),
(2, 'Memperingati Hari Sumpah Pemuda SMKN 1 Dlanggu', 'Memperingati Hari Sumpah Pemuda SMKN 1 Dlanggu', '2026-04-11', 'images (7).jpeg'),
(3, 'Kegitan Ekstrakurikuler Bola Basket SMKN 1 Dlanggu', 'Kegiatan Ekstrakurikuler Bola Basket SMK Negeri 1 Dlanggu 15 April 2026', '2026-04-12', 'images (6).jpeg'),
(4, 'Uji Kopetensi Keahlian RPL 2026', 'Alhamdulillah, Hari ini Rabu, 15 April 2026 telah terlaksana dengan lancar Uji Kompetensi Keahlian SMK Negeri 1 Dlanggu Jurusan RPL (Rekayasa Perangkat Lunak) Skema Junior Web Programming bersama LSP P3 Teknologi Digital.\r\n\r\nSebanyak 21 peserta mengikuti Uji Kompetensi Keahlian dengan penuh semangat dan kesiapan.\r\nMenunjukkan kemampuan terbaik dalam membangun aplikasi web yang fungsional, rapi, dan sesuai standar industri.', '2026-04-13', 'Cuplikan layar 2026-04-16 091031.png'),
(5, 'Uji Kopetensi Keahlian TKJ', 'Alhamdulillah, Hari ini Rabu, 15 April 2026 telah terlaksana dengan lancar Uji Kompetensi Keahlian SMK Negeri 1 Dlanggu Jurusan TKJ (Teknik Komputer dan Jaringan) Skema Network Administrator Muda bersama LSP P3 Teknologi Digital.\r\n\r\nSebanyak 26 peserta mengikuti Uji Kompetensi Keahlian dengan penuh semangat dan kesiapan.\r\nMenunjukkan keahlian dalam instalasi, konfigurasi, dan troubleshooting jaringan secara tepat dan profesional.', '2026-04-14', 'images.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
