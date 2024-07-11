-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2024 pada 22.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id` int(25) NOT NULL,
  `User` varchar(50) NOT NULL,
  `no_kursi` varchar(100) NOT NULL,
  `judul_film` enum('Film 1','Film 2','Film 3','Film 4') NOT NULL,
  `jadwal_tayang` enum('Pagi','Siang','Malam') NOT NULL,
  `kategori_tiket` enum('Regular','VIP') DEFAULT NULL,
  `harga_tiket` float DEFAULT NULL,
  `metode_pembayaran` enum('Cash','Kartu Kredit','Transfer Bank') NOT NULL,
  `tanggal` date DEFAULT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id`, `User`, `no_kursi`, `judul_film`, `jadwal_tayang`, `kategori_tiket`, `harga_tiket`, `metode_pembayaran`, `tanggal`, `bukti_pembayaran`, `status`) VALUES
(1232, '', 'A11', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1233, '', 'A12', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1234, '', 'C03', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1235, '', 'C12', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1237, '', 'D07', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1238, '', 'D08', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1239, '', 'D09', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1240, '', 'A01', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1241, '', 'VA01', 'Film 2', 'Siang', 'VIP', 100000, 'Transfer Bank', '2024-07-06', '', ''),
(1245, '', 'VA02', 'Film 2', 'Siang', 'VIP', 100000, 'Transfer Bank', '2024-07-06', '', ''),
(1246, '', 'C09', 'Film 3', 'Malam', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1247, '', 'C10', 'Film 3', 'Malam', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1248, '', 'B07', 'Film 3', 'Malam', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1249, '', 'B02', 'Film 3', 'Malam', 'Regular', 75000, 'Cash', '2024-07-06', '', ''),
(1250, '', 'A08', 'Film 1', 'Pagi', 'Regular', 75, 'Transfer Bank', '2024-07-09', '', ''),
(1251, '', 'A12', 'Film 4', 'Pagi', 'Regular', 75000, 'Transfer Bank', '2024-07-09', '', ''),
(1252, '', 'A11', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-09', '', ''),
(1253, '', 'A08', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-09', '', ''),
(1254, '', 'A08', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-09', '', ''),
(1255, '', 'A08', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-09', '', ''),
(1257, '', 'A03', 'Film 2', 'Siang', 'Regular', 75000, 'Kartu Kredit', '2024-07-09', '', ''),
(1258, '', 'A08', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-10', '', ''),
(1261, '', 'A13', 'Film 3', 'Siang', 'Regular', 75000, 'Kartu Kredit', '2024-07-09', '', 'rejected'),
(1262, '', 'A14', 'Film 2', 'Pagi', 'Regular', 75000, 'Transfer Bank', '2024-07-09', '', 'rejected'),
(1263, '', 'A02', 'Film 1', 'Malam', 'Regular', 75000, 'Kartu Kredit', '2024-07-09', '', ''),
(1264, '', 'A08', 'Film 2', 'Pagi', 'Regular', 75000, 'Kartu Kredit', '2024-07-09', '', 'rejected'),
(1265, '', 'B01', 'Film 2', 'Siang', 'Regular', 75000, 'Transfer Bank', '2024-07-09', '', 'rejected'),
(1266, '', 'A08', 'Film 3', 'Pagi', 'Regular', 75000, 'Kartu Kredit', '2024-07-09', '', 'rejected'),
(1267, '', 'D01', 'Film 1', 'Siang', 'Regular', 75000, 'Kartu Kredit', '2024-07-09', '', 'pending'),
(1268, '', 'D01', 'Film 1', 'Pagi', 'Regular', 75000, 'Kartu Kredit', '2024-07-09', '', 'pending'),
(1269, '', 'D01', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-09', '', 'pending'),
(1272, 'user', 'A08', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-16', '', 'rejected'),
(1280, 'user', 'A08', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-09', 'index', 'pending'),
(1284, 'user', 'A02', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-10', 'index', 'approved'),
(1285, '', 'A11', 'Film 1', 'Pagi', 'Regular', 75000, 'Cash', '2024-07-16', '', ''),
(1286, '', 'A18', 'Film 1', 'Pagi', 'Regular', 78000, 'Cash', '2024-07-12', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(2, 'admin', 'admin', 1),
(3, 'user', 'user', 0),
(4, 'user2', 'user2', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1287;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
