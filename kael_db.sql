-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Des 2023 pada 16.05
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kael_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `title` varchar(100) NOT NULL,
  `tools` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`id`, `date_start`, `date_end`, `title`, `tools`, `description`) VALUES
(1, '2020-06-01 00:00:00', '2020-12-31 00:00:00', 'UX/UI Designer', 'Figma', 'There are many variations of passages of Lorem Ipsumav ailable, but the majority have suffered alteration in some'),
(2, '2021-01-01 00:00:00', '2021-12-31 00:00:00', 'Product Designer', 'Adobe Photoshop', 'There are many variations of passages of Lorem Ipsumav ailable, but the majority have suffered alteration in some'),
(3, '2023-01-01 00:00:00', '2023-11-30 00:00:00', 'Graphic Designer', 'Adobe Illustrator', 'There are many variations of passages of Lorem Ipsumav ailable, but the majority have suffered alteration in some');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(5, 'cd', 'dcd', 'dcc', 'cdcdc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penglaman`
--

CREATE TABLE `penglaman` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `mulai` int(4) NOT NULL,
  `akhir` int(4) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penglaman`
--

INSERT INTO `penglaman` (`id`, `nama_perusahaan`, `jabatan`, `mulai`, `akhir`, `deskripsi`) VALUES
(5, 'PKL', 'Helper Mekanik', 2017, 2017, 'Melaksanakan Prakter Kerja Lapangan Saat Kelas 2 SMK Selama 6 Bulan Kurang'),
(6, 'PT.SER', 'Pekerja Lapangan', 2018, 2020, 'Bekerja di Salah Satu Perusahaan yang Bergerak di Bidang Distributor Minyak di daerah Samarinda'),
(7, 'Beternak Mandiri', 'Pekerja / Part time', 2021, 2023, 'Bekerja di Perusahaan Pribadi di Bidang Peternakan di Daerah Loa Janan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'kael', 'kael');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penglaman`
--
ALTER TABLE `penglaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penglaman`
--
ALTER TABLE `penglaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
