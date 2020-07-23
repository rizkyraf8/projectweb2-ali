-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2020 pada 05.34
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
-- Database: `db_project2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_cuti`
--

CREATE TABLE `data_cuti` (
  `id_cuti` int(5) NOT NULL,
  `nik` int(6) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `jenis_cuti` varchar(20) NOT NULL,
  `jml_cuti` varchar(2) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_cuti`
--

INSERT INTO `data_cuti` (`id_cuti`, `nik`, `start_date`, `end_date`, `jenis_cuti`, `jml_cuti`, `alasan`) VALUES
(3, 99693, '2020-07-10', '2020-07-10', 'Cuti Tahunan', '1', 'Cuti'),
(4, 99693, '2020-06-01', '2020-06-01', 'Cuti Tahunan', '1', 'Ambil Cuti'),
(5, 99693, '2020-07-21', '2020-07-21', 'Cuti Dadakan', '1', 'Cuti dadakan'),
(6, 99693, '2020-07-30', '2020-07-31', 'Cuti Tahunan', '2', 'Cuti Liburan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `nik` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `start_kontrak` date NOT NULL,
  `end_kontrak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`nik`, `nama`, `gender`, `tmpt_lahir`, `tgl_lahir`, `no_ktp`, `email`, `jabatan`, `start_kontrak`, `end_kontrak`) VALUES
(99693, 'Ali Ridho Salatin', 'Pria', 'Bekasi', '1996-09-25', '32752509960005', 'aliridhos25@gmail.com', 'Staff IT', '2020-01-01', '2021-01-01'),
(99694, 'Mahadi Muhakam', 'Pria', 'Bekasi', '2002-12-25', '327525122002001', 'mahadimuhakam@gmail.com', 'Officer 1', '2020-01-01', '2020-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_presensi`
--

CREATE TABLE `data_presensi` (
  `id_presensi` int(5) NOT NULL,
  `nik` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_login` time NOT NULL,
  `jam_logout` time NOT NULL,
  `ip_addr` varchar(25) NOT NULL,
  `tipe_presensi` varchar(10) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_presensi`
--

INSERT INTO `data_presensi` (`id_presensi`, `nik`, `tanggal`, `jam_login`, `jam_logout`, `ip_addr`, `tipe_presensi`, `remark`) VALUES
(1, 99693, '2020-07-04', '08:00:00', '17:00:00', '0.0.0.0', '1', 'Jatiasih'),
(2, 99693, '2020-07-20', '19:32:41', '19:32:50', '180.242.182.225', 'WFH', 'Kemayoran'),
(3, 99693, '2020-07-21', '10:50:19', '17:22:41', '180.242.183.107', 'WFH', 'Jatiasih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sakit`
--

CREATE TABLE `data_sakit` (
  `id_sakit` int(5) NOT NULL,
  `nik` int(6) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `jml_hari_sakit` int(2) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_sakit`
--

INSERT INTO `data_sakit` (`id_sakit`, `nik`, `start_date`, `end_date`, `jml_hari_sakit`, `alasan`) VALUES
(1, 99693, '2020-07-01', '2020-07-01', 1, 'Sakit maag'),
(2, 99693, '2020-07-04', '2020-07-04', 1, 'Sakit Hati'),
(3, 99693, '2020-07-15', '2020-07-15', 1, 'Sakit Asam Lambung'),
(4, 99693, '2020-07-24', '2020-07-24', 1, 'Sakit Demam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id` int(4) NOT NULL,
  `nik` int(6) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id`, `nik`, `password`, `level`, `last_login`) VALUES
(1, 99693, '7d5395b3cd55e5597e0d1238e23347f7', 'Administrator', '2020-07-23 10:27:19'),
(5, 99694, '94a8b1fb2f489e5d34bec60873564479', 'Karyawan', '2020-07-21 11:25:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_cuti`
--
ALTER TABLE `data_cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `nik_FK` (`nik`) USING BTREE;

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `data_presensi`
--
ALTER TABLE `data_presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `nik_FK` (`nik`) USING BTREE;

--
-- Indeks untuk tabel `data_sakit`
--
ALTER TABLE `data_sakit`
  ADD PRIMARY KEY (`id_sakit`),
  ADD KEY `nik_FK` (`nik`) USING BTREE;

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_cuti`
--
ALTER TABLE `data_cuti`
  MODIFY `id_cuti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_presensi`
--
ALTER TABLE `data_presensi`
  MODIFY `id_presensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_sakit`
--
ALTER TABLE `data_sakit`
  MODIFY `id_sakit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_cuti`
--
ALTER TABLE `data_cuti`
  ADD CONSTRAINT `data_cuti_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_karyawan` (`nik`);

--
-- Ketidakleluasaan untuk tabel `data_presensi`
--
ALTER TABLE `data_presensi`
  ADD CONSTRAINT `nik_FK1` FOREIGN KEY (`nik`) REFERENCES `data_karyawan` (`nik`);

--
-- Ketidakleluasaan untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `fk_nik` FOREIGN KEY (`nik`) REFERENCES `data_karyawan` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
