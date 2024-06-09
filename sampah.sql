-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disapu`
--

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `id_sampah` int(11) NOT NULL,
  `nama_klasifikasi` varchar(225) NOT NULL,
  `satuan_berat` int(20) NOT NULL,
  `poin` int(11) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp(),
  `tgl_output` timestamp NOT NULL DEFAULT current_timestamp(),
  `updater` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`id_sampah`, `nama_klasifikasi`, `satuan_berat`, `poin`, `tgl_input`, `tgl_output`, `updater`, `id_kategori`, `nama_file`) VALUES
(1, 'koran', 1, 10, '2024-06-03 04:51:29', '2024-06-03 04:51:29', 0, 1, 'kertas karton.jpeg'),
(2, 'buku bekas', 1, 15, '2024-06-03 04:51:29', '2024-06-03 04:51:29', 0, 1, NULL),
(3, 'kertas warna', 1, 11, '2024-06-03 04:52:30', '2024-06-03 04:52:30', 0, 1, NULL),
(4, 'kertas buram\r\n', 1, 13, '2024-06-03 04:52:30', '2024-06-03 04:52:30', 0, 1, NULL),
(5, 'karton', 1, 14, '2024-06-03 04:53:23', '2024-06-03 04:53:23', 0, 1, NULL),
(6, 'kertas lainnya\r\n', 1, 10, '2024-06-03 04:53:23', '2024-06-03 04:53:23', 0, 1, NULL),
(7, 'gelas plastik', 1, 12, '2024-06-03 04:54:52', '2024-06-03 04:54:52', 0, 2, NULL),
(8, 'botol plastik', 1, 13, '2024-06-03 04:54:52', '2024-06-03 04:54:52', 0, 2, NULL),
(9, 'mainan anak', 1, 17, '2024-06-03 04:57:40', '2024-06-03 04:57:40', 0, 2, NULL),
(10, 'perabotan rumah tangga\r\n\r\n', 1, 19, '2024-06-03 04:57:40', '2024-06-03 04:57:40', 0, 2, NULL),
(11, 'kantong plastik', 1, 20, '2024-06-03 04:57:40', '2024-06-03 04:57:40', 0, 2, NULL),
(12, 'plastik lainnya\r\n\r\n', 1, 10, '2024-06-03 04:57:40', '2024-06-03 04:57:40', 0, 2, NULL),
(13, 'TV', 1, 50, '2024-06-03 05:03:13', '2024-06-03 05:03:13', 0, 3, NULL),
(14, 'kipas angin', 1, 30, '2024-06-03 05:03:13', '2024-06-03 05:03:13', 0, 3, NULL),
(15, 'mesin cuci', 1, 45, '2024-06-03 05:03:13', '2024-06-03 05:03:13', 0, 3, NULL),
(16, 'kulkas', 1, 70, '2024-06-03 05:03:13', '2024-06-03 05:03:13', 0, 3, NULL),
(17, 'dispenser', 1, 33, '2024-06-03 05:03:13', '2024-06-03 05:03:13', 0, 3, NULL),
(18, 'rice coocker', 1, 25, '2024-06-03 05:03:13', '2024-06-03 05:03:13', 0, 3, NULL),
(19, 'elektronik lainnya', 1, 25, '2024-06-03 05:03:13', '2024-06-03 05:03:13', 0, 3, NULL),
(20, 'besi tebal', 1, 40, '2024-06-03 05:06:41', '2024-06-03 05:06:41', 0, 4, NULL),
(21, 'besi tipis', 1, 25, '2024-06-03 05:06:41', '2024-06-03 05:06:41', 0, 4, NULL),
(22, 'kuningan', 1, 15, '2024-06-03 05:06:41', '2024-06-03 05:06:41', 0, 4, NULL),
(23, 'tembaga biasa', 1, 34, '2024-06-03 05:06:41', '2024-06-03 05:06:41', 0, 4, NULL),
(24, 'tembaga super', 1, 80, '2024-06-03 05:06:41', '2024-06-03 05:06:41', 0, 4, NULL),
(25, 'timah', 1, 56, '2024-06-03 05:06:41', '2024-06-03 05:06:41', 0, 4, NULL),
(26, 'kepala aki', 1, 10, '2024-06-03 05:06:41', '2024-06-03 05:06:41', 0, 4, NULL),
(27, 'aki', 12, 0, '2024-06-03 05:06:41', '2024-06-03 05:06:41', 0, 4, NULL),
(28, 'besi lainnya', 1, 20, '2024-06-03 05:06:41', '2024-06-03 05:06:41', 0, 4, NULL),
(29, 'alma tipis', 1, 20, '2024-06-03 05:08:30', '2024-06-03 05:08:30', 0, 5, NULL),
(30, 'alma tebal', 1, 30, '2024-06-03 05:08:30', '2024-06-03 05:08:30', 0, 5, NULL),
(31, 'kaleng seng', 1, 5, '2024-06-03 05:08:30', '2024-06-03 05:08:30', 0, 5, NULL),
(32, 'alumunium lainnya', 1, 11, '2024-06-03 05:08:30', '2024-06-03 05:08:30', 0, 5, NULL),
(33, 'botol kecap', 1, 13, '2024-06-03 05:10:36', '2024-06-03 05:10:36', 0, 6, NULL),
(34, 'botol saos', 1, 13, '2024-06-03 05:10:36', '2024-06-03 05:10:36', 0, 6, NULL),
(35, 'botol sirup', 1, 13, '2024-06-03 05:10:36', '2024-06-03 05:10:36', 0, 6, NULL),
(36, 'botol kaca kecil', 1, 9, '2024-06-03 05:10:36', '2024-06-03 05:10:36', 0, 6, NULL),
(37, 'botol kaca besar', 1, 15, '2024-06-03 05:10:36', '2024-06-03 05:10:36', 0, 6, NULL),
(38, 'botol kaca lainnya', 1, 10, '2024-06-03 05:10:36', '2024-06-03 05:10:36', 0, 6, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id_sampah`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sampah`
--
ALTER TABLE `sampah`
  ADD CONSTRAINT `sampah_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_sampah` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
