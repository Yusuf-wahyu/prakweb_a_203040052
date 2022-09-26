-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 10:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_a_203040052_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(10) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `gambar_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(100) NOT NULL,
  `font_buku` varchar(100) NOT NULL,
  `warna_buku` varchar(100) NOT NULL,
  `jumlah_halaman` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `gambar_buku`, `penerbit_buku`, `tanggal_terbit`, `font_buku`, `warna_buku`, `jumlah_halaman`, `pengarang`, `genre`) VALUES
(1, 'WATIR', 'watir.jpg', 'RakBuku', '2012', 'arial', 'kuning', '192', '@infowatir', 'humor'),
(2, 'Sebuah seni untuk bersikap bodo amat', 'buku2.jpg', 'Grasindo', '13 september 2016', 'arial', 'orange', '246', 'Mark Manson', 'Buku bantuan diri'),
(3, 'Cantik Itu Luka', 'buku3.jpg', 'Gramedia Pustaka Utama', '2004', 'arial', 'merah muda', '537', 'Eka Kurniawan', 'fiksi'),
(4, 'Corat-coret di Toilet', 'buku4.jpg', 'Gramedia Pustaka Utama', '8 Mei 2016', 'arial', 'putih', '135', 'Eka Kurniawan', 'fiksi'),
(5, 'PARTIKEL', 'buku5.jpg', 'Truedee Books', '2001', 'arial', 'Hitam', '332', 'Dewi Lestari', 'Fiksi Ilmiah'),
(6, 'Filosofi Teras', 'buku6.jpg', 'Kompas', '26 November 2018', 'Arial', 'putih', '346', 'Henry Manampiring', 'Filsafat'),
(7, 'Ikhlas Paling Serius', 'buku7.jpg', 'mediakita', '2021', 'arial', 'hitam', '172', 'Fajar Sulaiman', 'Fiksi'),
(8, 'Jika Kita Tak Pernah Baik-Baik Saja', 'buku8.jpg', 'GagasMedia', '2020', 'arial', 'hitam', '216', 'Alvi Syahrin', 'Fiksi'),
(9, 'Duduk dulu', 'buku9.jpg', 'Gradien Mediatama', '2021', 'arial', 'biru muda', '232', 'Syahid Muhammad', 'fiksi'),
(10, 'Nanti Juga Sembuh Sendiri', 'buku10.jpg', 'Gradien Mediatama', 'Mei 2022', 'arial', 'merah muda', '164', 'helobagas', 'buku bantuan diri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
