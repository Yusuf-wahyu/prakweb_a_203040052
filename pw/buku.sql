-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2022 pada 17.36
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(10) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `gambar_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `gambar_buku`, `penerbit_buku`, `pengarang`) VALUES
(1, 'WATIR', 'watir.jpg', 'RakBuku', '@infowatir'),
(2, 'Sebuah seni untuk bersikap bodo amat', 'buku2.jpg', 'Grasindo', 'Mark Manson'),
(3, 'Cantik Itu Luka', 'buku3.jpg', 'Gramedia Pustaka Utama', 'Eka Kurniawan'),
(4, 'Corat-coret di Toilet', 'buku4.jpg', 'Gramedia Pustaka Utama', 'Eka Kurniawan'),
(5, 'PARTIKEL', 'buku5.jpg', 'Truedee Books', 'Dewi Lestari'),
(6, 'Filosofi Teras', 'buku6.jpg', 'Kompas', 'Henry Manampiring'),
(7, 'Ikhlas Paling Serius', 'buku7.jpg', 'mediakita', 'Fajar Sulaiman'),
(8, 'Jika Kita Tak Pernah Baik-Baik Saja', 'buku8.jpg', 'GagasMedia', 'Alvi Syahrin'),
(9, 'Duduk dulu', 'buku9.jpg', 'Gradien Mediatama', 'Syahid Muhammad'),
(10, 'Nanti Juga Sembuh Sendiri', 'buku10.jpg', 'Gradien Mediatama', 'helobagas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
