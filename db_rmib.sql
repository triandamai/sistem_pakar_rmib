-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2020 pada 05.31
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rmib`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` varchar(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` text,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
('ghjkjgsfdzklufb', 'Trian damai', 'triannurizkillah@gmail.com', 'trian', '$2a$08$K0ZkNK/OFGL2a6oRCV8QrucmD.LMhTOWPLnA1s..N96KH8pEcmeS.', '0000-00-00', '0000-00-00'),
('adsfhgjhkdfsdf', 'Trian', 'triannurizkillah@gmail.com', 'Trian', '$2a$08$K0ZkNK/OFGL2a6oRCV8QrucmD.LMhTOWPLnA1s..N96KH8pEcmeS.', '2020-01-22', '2020-01-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_analisa`
--

CREATE TABLE `detail_analisa` (
  `id` int(11) NOT NULL,
  `id_user` varchar(36) NOT NULL,
  `id_hasil` varchar(36) NOT NULL,
  `id_indikator` varchar(36) NOT NULL,
  `value` int(2) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_analisa`
--

CREATE TABLE `hasil_analisa` (
  `id` varchar(36) NOT NULL,
  `id_user` varchar(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `TTL` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikator`
--

CREATE TABLE `indikator` (
  `id` varchar(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_urut` int(2) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `indikator`
--

INSERT INTO `indikator` (`id`, `nama`, `no_urut`, `created_at`, `updated_at`) VALUES
('I001', 'Indikator 1', 1, '2020-01-20', '2020-01-21'),
('I002', 'Imam Tahyudin', 2, '2020-01-21', '2020-01-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_indikator`
--

CREATE TABLE `sub_indikator` (
  `id` int(12) NOT NULL,
  `id_indikator` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tabel` enum('A','B','C','D','E','F','G','H','I') NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `no_urut` int(12) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_indikator`
--

INSERT INTO `sub_indikator` (`id`, `id_indikator`, `nama`, `tabel`, `jk`, `no_urut`, `created_at`, `updated_at`) VALUES
(3, 'I001', 'Trian', 'A', 'P', 1, '2020-01-21', '2020-01-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` text,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT 'userdefault',
  `password` varchar(255) NOT NULL DEFAULT 'userdefault',
  `status` enum('AKTIF','TIDAK AKTIF') NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `nohp`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
('a215503b-39a9-11ea-9ff9-e03f4931b17e', 'Trian', 'aisyah_ajjh94@yahoo.co.id', '', '17.12.0095', '$2a$08$K0ZkNK/OFGL2a6oRCV8QrucmD.LMhTOWPLnA1s..N96KH8pEcmeS.', 'AKTIF', '2020-01-18', '2020-01-20'),
('5f61843a-3b8a-11ea-9b3d-e03f4931b17e', 'Data', 'data@gmail.com', '', 'data', '$2a$08$QazXFlbegzi9HLtndlVOCeATdftuYMnopkASNYU.kxNYnMZ8MpOYa', 'AKTIF', '2020-01-20', '2020-01-22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_analisa`
--
ALTER TABLE `detail_analisa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_analisa`
--
ALTER TABLE `hasil_analisa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sub_indikator`
--
ALTER TABLE `sub_indikator`
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
-- AUTO_INCREMENT untuk tabel `detail_analisa`
--
ALTER TABLE `detail_analisa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sub_indikator`
--
ALTER TABLE `sub_indikator`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
