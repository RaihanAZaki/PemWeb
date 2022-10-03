-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tugas1
CREATE DATABASE IF NOT EXISTS `tugas1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tugas1`;

-- Dumping structure for table tugas1.daftar
CREATE TABLE IF NOT EXISTS `daftar` (
  `nama_lengkap` varchar(100) NOT NULL,
  `no_telp` int(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `email` varchar(125) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `nik` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table tugas1.jenjang
CREATE TABLE IF NOT EXISTS `jenjang` (
  `gelar` varchar(5) NOT NULL,
  `lulus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
