-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 09:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `email` varchar(50) NOT NULL,
  `twitter` varchar(25) NOT NULL,
  `linkedin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `twitter`, `linkedin`) VALUES
('rhnashil@gmail.com', 'rhn', 'raihnz');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `nama_lengkap` varchar(75) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `nama_panggilan` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(3) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`nama_lengkap`, `nama_depan`, `nama_belakang`, `nama_panggilan`, `tanggal_lahir`, `usia`, `alamat`, `no_telp`, `kota`, `negara`) VALUES
('Raihan Ashil Zaki', 'Raihan', 'Zaki', 'Rehan', '2002-09-05', 20, 'Pamulang Residence, Jl. Parakan, Pd. Benda, Kec. Pamulang, Kota Tangerang Selatan.', '+62-877-7177-3888', 'Tangerang Selatan', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `foto_diri`
--

CREATE TABLE `foto_diri` (
  `id` int(3) NOT NULL,
  `foto_satu` varchar(100) NOT NULL,
  `foto_dua` varchar(100) NOT NULL,
  `foto_tiga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto_diri`
--

INSERT INTO `foto_diri` (`id`, `foto_satu`, `foto_dua`, `foto_tiga`) VALUES
(1, 'duer.png', 'as.jpg', 'rehans.png');

-- --------------------------------------------------------

--
-- Table structure for table `kuliah`
--

CREATE TABLE `kuliah` (
  `nama_kuliah` varchar(75) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `program_studi` varchar(25) NOT NULL,
  `angkatan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuliah`
--

INSERT INTO `kuliah` (`nama_kuliah`, `alamat`, `program_studi`, `angkatan`) VALUES
('Universitas Pembangunan Jaya', 'B7/P, Jl. Cendrawasih Raya, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan.', 'Informatika', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `nama_lengkap` varchar(75) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `pesan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `nama_portofolio` varchar(50) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `gambar_satu` varchar(100) NOT NULL,
  `gambar_dua` varchar(100) NOT NULL,
  `gambar_tiga` varchar(100) NOT NULL,
  `gambar_empat` varchar(100) NOT NULL,
  `gambar_lima` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`nama_portofolio`, `deskripsi`, `gambar_satu`, `gambar_dua`, `gambar_tiga`, `gambar_empat`, `gambar_lima`) VALUES
('Raihan', 'Portofolio Raihan', 'tuding.png', 'melek.png', 'portofo.png', 'informatika.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int(3) NOT NULL,
  `sertif_satu` varchar(100) NOT NULL,
  `sertif_dua` varchar(100) NOT NULL,
  `sertif_tiga` varchar(100) NOT NULL,
  `sertif_empat` varchar(100) NOT NULL,
  `sertif_lima` varchar(100) NOT NULL,
  `sertif_enam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `sertif_satu`, `sertif_dua`, `sertif_tiga`, `sertif_empat`, `sertif_lima`, `sertif_enam`) VALUES
(0, 'sertif1.jpg', 'sertif2.jpg', 'sertif3.jpg', 'sertif4.jpg', 'sertif-5.jpg', 'sertif-6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto_diri`
--
ALTER TABLE `foto_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
