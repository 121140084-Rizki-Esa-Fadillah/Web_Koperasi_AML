-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 04:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi_aml`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_anjuran_pejabat`
--

CREATE TABLE `buku_anjuran_pejabat` (
  `No_Urut` int(11) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `Nama_Pejabat` varchar(50) DEFAULT NULL,
  `Jabatan` varchar(50) DEFAULT NULL,
  `Alamat_Kantor` varchar(50) DEFAULT NULL,
  `Isi_Anjuran` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buku_inventaris`
--

CREATE TABLE `buku_inventaris` (
  `No_Urut` int(11) NOT NULL,
  `Nama_Barang` varchar(50) DEFAULT NULL,
  `Tanggal_Beli` date) DEFAULT NULL,
  `Jumlah_Beli` varchar(50) DEFAULT NULL,
  `Jumlah_Harga` int(20) DEFAULT NULL,
  `Taksiran_Umur_Teknis` varchar(50) DEFAULT NULL,
  `Taksiran_Umur_Ekonomis` varchar(50) DEFAULT NULL,
  `Keadaan_Barang` varchar(10) DEFAULT NULL,
  `Keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `No_Urut` int(11) NOT NULL,
  `Tanggal` varchar(50) DEFAULT NULL,
  `Nama_Tamu` varchar(50) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Bertemu_Dengan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_anggota`
--

CREATE TABLE `daftar_anggota` (
  `No_Anggota` int(11) NOT NULL,
  `Nama_Lengkap` varchar(50) DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL,
  `Tempat_Tanggal_Lahir` varchar(50) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Tanggal_Masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pengawas`
--

CREATE TABLE `daftar_pengawas` (
  `No_Pengawas` int(11) NOT NULL,
  `Nama_Lengkap` varchar(50) DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL,
  `Tempat_Tanggal_Lahir` varchar(50) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pengurus`
--

CREATE TABLE `daftar_pengurus` (
  `No_Pengurus` int(11) NOT NULL,
  `Nama_Lengkap` varchar(50) DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL,
  `Tempat_Tanggal_Lahir` varchar(50) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notulensi_rapat_biasa`
--

CREATE TABLE `notulensi_rapat_biasa` (
  `No_Urut` int(11) NOT NULL,
  `Tanggal_Rapat` varchar(50) DEFAULT NULL,
  `Tempat_Rapat` varchar(50) DEFAULT NULL,
  `Jenis_Rapat` varchar(50) DEFAULT NULL,
  `Jumlah_Anggota_Hadir` int(11) DEFAULT NULL,
  `Jumlah_Pengurus_Hadir` int(11) DEFAULT NULL,
  `Jumlah_Pengawas_Hadir` int(11) DEFAULT NULL,
  `Undangan_Hadir` int(11) DEFAULT NULL,
  `Acara_Rapat` varchar(250) DEFAULT NULL,
  `Keputusan_Rapat` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notulensi_rapat_pengawas`
--

CREATE TABLE `notulensi_rapat_pengawas` (
  `No_Urut` int(11) NOT NULL,
  `Tanggal_Rapat` varchar(50) DEFAULT NULL,
  `Tempat_Rapat` varchar(50) DEFAULT NULL,
  `Jumlah_Pengawas_Hadir` int(11) DEFAULT NULL,
  `Undangan_Hadir` int(11) DEFAULT NULL,
  `Pimpinan_Rapat` varchar(50) DEFAULT NULL,
  `Acara_Rapat` varchar(50) DEFAULT NULL,
  `Keputusan_Rapat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notulensi_rapat_pengurus`
--

CREATE TABLE `notulensi_rapat_pengurus` (
  `No_Urut` int(11) NOT NULL,
  `Tanggal_Rapat` varchar(50) DEFAULT NULL,
  `Tempat_Rapat` varchar(50) DEFAULT NULL,
  `Jumlah_Pengurus_Hadir` int(11) DEFAULT NULL,
  `Undangan_Hadir` int(11) DEFAULT NULL,
  `Pimpinan_Rapat` varchar(50) DEFAULT NULL,
  `Acara_Rapat` varchar(250) DEFAULT NULL,
  `Keputusan_Rapat` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_anjuran_pejabat`
--
ALTER TABLE `buku_anjuran_pejabat`
  ADD PRIMARY KEY (`No_Urut`);

--
-- Indexes for table `buku_inventaris`
--
ALTER TABLE `buku_inventaris`
  ADD PRIMARY KEY (`No_Urut`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`No_Urut`);

--
-- Indexes for table `daftar_anggota`
--
ALTER TABLE `daftar_anggota`
  ADD PRIMARY KEY (`No_Anggota`);

--
-- Indexes for table `daftar_pengawas`
--
ALTER TABLE `daftar_pengawas`
  ADD PRIMARY KEY (`No_Pengawas`);

--
-- Indexes for table `daftar_pengurus`
--
ALTER TABLE `daftar_pengurus`
  ADD PRIMARY KEY (`No_Pengurus`);

--
-- Indexes for table `notulensi_rapat_biasa`
--
ALTER TABLE `notulensi_rapat_biasa`
  ADD PRIMARY KEY (`No_Urut`);

--
-- Indexes for table `notulensi_rapat_pengawas`
--
ALTER TABLE `notulensi_rapat_pengawas`
  ADD PRIMARY KEY (`No_Urut`);

--
-- Indexes for table `notulensi_rapat_pengurus`
--
ALTER TABLE `notulensi_rapat_pengurus`
  ADD PRIMARY KEY (`No_Urut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
