-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sidakmasoem
CREATE DATABASE IF NOT EXISTS `sidakmasoem` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sidakmasoem`;

-- Dumping structure for table sidakmasoem.cabang
CREATE TABLE IF NOT EXISTS `cabang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode_cabang` int(11) NOT NULL,
  `cabang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.cabang: ~11 rows (approximately)
/*!40000 ALTER TABLE `cabang` DISABLE KEYS */;
REPLACE INTO `cabang` (`id`, `kode_cabang`, `cabang`, `created_at`, `updated_at`) VALUES
	(1, 0, 'Kantor Pusat', '2020-07-29 13:43:55', '2020-07-29 13:43:56'),
	(2, 1, 'Majalaya', '2020-07-29 13:43:57', '2020-07-29 13:43:57'),
	(3, 2, 'Jatiwangi', '2020-07-29 13:43:58', '2020-07-29 13:43:58'),
	(4, 3, 'Kopo', '2020-07-29 13:44:00', '2020-07-29 13:43:59'),
	(5, 4, 'Arcamanik', '2020-07-29 13:44:00', '2020-07-29 13:44:01'),
	(6, 5, 'Cianjur', '2020-07-29 13:44:02', '2020-07-29 13:44:03'),
	(7, 6, 'Garut', '2020-07-29 13:44:06', '2020-07-29 13:44:07'),
	(8, 7, 'Kantor Kas YAB', '2020-07-29 13:44:08', '2020-07-29 13:44:08'),
	(9, 8, 'Kantor Kas Kulalet', '2020-07-29 13:44:09', '2020-07-29 13:44:09'),
	(10, 9, 'Kantor Kas Guntur', '2020-07-29 13:44:10', '2020-07-29 13:44:12'),
	(11, 10, 'Kantor Kas Ciwidey', '2020-07-29 13:44:13', '2020-07-29 13:44:14');
/*!40000 ALTER TABLE `cabang` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.cuti
CREATE TABLE IF NOT EXISTS `cuti` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.cuti: ~0 rows (approximately)
/*!40000 ALTER TABLE `cuti` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuti` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.golongan
CREATE TABLE IF NOT EXISTS `golongan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `golongan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `uang_makan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.golongan: ~251 rows (approximately)
/*!40000 ALTER TABLE `golongan` DISABLE KEYS */;
REPLACE INTO `golongan` (`id`, `golongan`, `gaji_pokok`, `uang_makan`, `created_at`, `updated_at`) VALUES
	(1, 'I.25', 200000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(2, 'I.24', 250000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(3, 'I.23', 300000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(4, 'I.22', 350000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(5, 'I.21', 400000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(6, 'I.20', 450000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(7, 'I.19', 500000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(8, 'I.18', 550000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(9, 'I.17', 600000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(10, 'I.16', 650000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(11, 'I.15', 720000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(12, 'I.14', 790000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(13, 'I.13', 860000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(14, 'I.12', 930000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(15, 'I.11', 1000000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(16, 'I.10', 1070000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(17, 'I.9', 1140000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(18, 'I.8', 1210000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(19, 'I.7', 1280000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(20, 'I.6', 1350000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(21, 'I.5', 1450000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(22, 'I.4', 1550000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(23, 'I.3', 1650000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(24, 'I.2', 1750000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(25, 'I.1', 1850000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(26, 'II.A25', 490000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(27, 'II.A24', 540000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(28, 'II.A23', 590000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(29, 'II.A22', 640000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(30, 'II.A21', 690000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(31, 'II.A20', 740000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(32, 'II.A19', 790000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(33, 'II.A18', 840000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(34, 'II.A17', 890000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(35, 'II.A16', 940000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(36, 'II.A15', 990000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(37, 'II.A14', 1040000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(38, 'II.A13', 1090000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(39, 'II.A12', 1150000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(40, 'II.A11', 1210000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(41, 'II.A10', 1270000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(42, 'II.A9', 1330000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(43, 'II.A8', 1390000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(44, 'II.A7', 1450000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(45, 'II.A6', 1510000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(46, 'II.A5', 1570000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(47, 'II.A4', 1630000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(48, 'II.A3', 1690000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(49, 'II.A2', 1750000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(50, 'II.A1', 1810000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(51, 'II.B25', 140000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(52, 'II.B24', 170000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(53, 'II.B23', 200000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(54, 'II.B22', 230000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(55, 'II.B21', 260000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(56, 'II.B20', 290000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(57, 'II.B19', 320000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(58, 'II.B18', 350000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(59, 'II.B17', 380000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(60, 'II.B16', 410000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(61, 'II.B15', 450000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(62, 'II.B14', 490000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(63, 'II.B13', 530000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(64, 'II.B12', 570000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(65, 'II.B11', 610000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(66, 'II.B10', 650000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(67, 'II.B9', 690000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(68, 'II.B8', 730000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(69, 'II.B7', 770000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(70, 'II.B6', 810000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(71, 'II.B5', 860000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(72, 'II.B4', 910000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(73, 'II.B3', 960000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(74, 'II.B2', 1010000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(75, 'II.B1', 1060000, 16500, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(76, 'III.A25', 720000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(77, 'III.A24', 755000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(78, 'III.A23', 790000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(79, 'III.A22', 825000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(80, 'III.A21', 860000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(81, 'III.A20', 895000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(82, 'III.A19', 930000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(83, 'III.A18', 965000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(84, 'III.A17', 1000000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(85, 'III.A16', 1035000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(86, 'III.A15', 1070000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(87, 'III.A14', 1105000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(88, 'III.A13', 1140000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(89, 'III.A12', 1180000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(90, 'III.A11', 1220000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(91, 'III.A10', 1260000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(92, 'III.A9', 1300000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(93, 'III.A8', 1340000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(94, 'III.A7', 1380000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(95, 'III.A6', 1420000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(96, 'III.A5', 1460000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(97, 'III.A4', 1500000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(98, 'III.A3', 1540000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(99, 'III.A2', 1580000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(100, 'III.A1', 1620000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(101, 'III.B25', 320000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(102, 'III.B24', 350000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(103, 'III.B23', 380000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(104, 'III.B22', 410000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(105, 'III.B21', 440000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(106, 'III.B20', 470000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(107, 'III.B19', 500000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(108, 'III.B18', 530000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(109, 'III.B17', 560000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(110, 'III.B16', 590000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(111, 'III.B15', 620000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(112, 'III.B14', 650000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(113, 'III.B13', 680000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(114, 'III.B12', 715000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(115, 'III.B11', 750000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(116, 'III.B10', 785000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(117, 'III.B9', 820000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(118, 'III.B8', 855000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(119, 'III.B7', 890000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(120, 'III.B6', 925000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(121, 'III.B5', 960000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(122, 'III.B4', 995000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(123, 'III.B3', 1030000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(124, 'III.B2', 1065000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(125, 'III.B1', 1100000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(126, 'III.C25', 120000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(127, 'III.C24', 140000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(128, 'III.C23', 160000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(129, 'III.C22', 180000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(130, 'III.C21', 200000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(131, 'III.C20', 220000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(132, 'III.C19', 240000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(133, 'III.C18', 260000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(134, 'III.C17', 280000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(135, 'III.C16', 300000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(136, 'III.C15', 325000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(137, 'III.C14', 350000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(138, 'III.C13', 375000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(139, 'III.C12', 400000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(140, 'III.C11', 425000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(141, 'III.C10', 450000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(142, 'III.C9', 475000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(143, 'III.C8', 500000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(144, 'III.C7', 525000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(145, 'III.C6', 550000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(146, 'III.C5', 580000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(147, 'III.C4', 610000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(148, 'III.C3', 640000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(149, 'III.C2', 670000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(150, 'III.C1', 700000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(151, 'IV.A25', 840000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(152, 'IV.A24', 875000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(153, 'IV.A23', 910000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(154, 'IV.A22', 945000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(155, 'IV.A21', 980000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(156, 'IV.A20', 1015000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(157, 'IV.A19', 1050000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(158, 'IV.A18', 1085000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(159, 'IV.A17', 1120000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(160, 'IV.A16', 1155000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(161, 'IV.A15', 1190000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(162, 'IV.A14', 1225000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(163, 'IV.A13', 1260000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(164, 'IV.A12', 1295000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(165, 'IV.A11', 1330000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(166, 'IV.A10', 1365000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(167, 'IV.A9', 1400000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(168, 'IV.A8', 1435000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(169, 'IV.A7', 1470000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(170, 'IV.A6', 1505000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(171, 'IV.A5', 1540000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(172, 'IV.A4', 1575000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(173, 'IV.A3', 1610000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(174, 'IV.A2', 1645000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(175, 'IV.A1', 1680000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(176, 'IV.B25', 490000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(177, 'IV.B24', 520000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(178, 'IV.B23', 550000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(179, 'IV.B22', 580000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(180, 'IV.B21', 610000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(181, 'IV.B20', 640000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(182, 'IV.B19', 670000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(183, 'IV.B18', 700000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(184, 'IV.B17', 730000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(185, 'IV.B16', 760000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(186, 'IV.B15', 790000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(187, 'IV.B14', 820000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(188, 'IV.B13', 850000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(189, 'IV.B12', 880000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(190, 'IV.B11', 910000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(191, 'IV.B10', 940000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(192, 'IV.B9', 970000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(193, 'IV.B8', 1000000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(194, 'IV.B7', 1030000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(195, 'IV.B6', 1060000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(196, 'IV.B5', 1090000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(197, 'IV.B4', 1120000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(198, 'IV.B3', 1150000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(199, 'IV.B2', 1180000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(200, 'IV.B1', 1210000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(201, 'IV.C25', 240000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(202, 'IV.C24', 265000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(203, 'IV.C23', 290000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(204, 'IV.C22', 315000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(205, 'IV.C21', 340000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(206, 'IV.C20', 365000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(207, 'IV.C19', 390000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(208, 'IV.C18', 415000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(209, 'IV.C17', 440000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(210, 'IV.C16', 465000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(211, 'IV.C15', 490000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(212, 'IV.C14', 515000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(213, 'IV.C13', 540000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(214, 'IV.C12', 565000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(215, 'IV.C11', 590000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(216, 'IV.C10', 615000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(217, 'IV.C9', 640000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(218, 'IV.C8', 665000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(219, 'IV.C7', 690000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(220, 'IV.C6', 715000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(221, 'IV.C5', 740000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(222, 'IV.C4', 765000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(223, 'IV.C3', 790000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(224, 'IV.C2', 815000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(225, 'IV.C1', 840000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(226, 'IV.D25', 90000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(227, 'IV.D24', 105000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(228, 'IV.D23', 120000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(229, 'IV.D22', 135000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(230, 'IV.D21', 150000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(231, 'IV.D20', 165000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(232, 'IV.D19', 180000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(233, 'IV.D18', 195000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(234, 'IV.D17', 210000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(235, 'IV.D16', 225000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(236, 'IV.D15', 245000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(237, 'IV.D14', 265000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(238, 'IV.D13', 285000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(239, 'IV.D12', 305000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(240, 'IV.D11', 325000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(241, 'IV.D10', 345000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(242, 'IV.D9', 365000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(243, 'IV.D8', 385000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(244, 'IV.D7', 405000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(245, 'IV.D6', 425000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(246, 'IV.D5', 450000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(247, 'IV.D4', 475000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(248, 'IV.D3', 500000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(249, 'IV.D2', 525000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(250, 'IV.D1', 550000, 14000, '2020-05-06 00:00:00', '2020-05-06 00:00:00'),
	(251, 'None', 0, 0, '2020-07-29 09:57:25', '2020-07-29 09:57:26');
/*!40000 ALTER TABLE `golongan` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.izin
CREATE TABLE IF NOT EXISTS `izin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL,
  `tanggal_izin` date NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.izin: ~4 rows (approximately)
/*!40000 ALTER TABLE `izin` DISABLE KEYS */;
REPLACE INTO `izin` (`id`, `karyawan_id`, `tanggal_izin`, `keterangan`, `perihal`, `file`, `status`, `created_at`, `updated_at`) VALUES
	(1, 2, '2020-10-10', 'a', 'Tidak Masuk Kerja', '', 'Approved', '2020-10-27 08:09:54', '2020-11-04 04:04:00'),
	(2, 4, '2020-10-28', 'asd', 'Tidak Masuk Kerja', '', 'Waiting', '2020-10-27 15:53:04', '2020-11-04 04:04:07'),
	(3, 2, '2020-10-29', 'Sakit PErut', 'Meninggalkan Pekerjaan', '', 'Waiting', '2020-10-28 02:26:01', '2020-11-04 04:18:07'),
	(4, 4, '2020-11-07', 'Menghadiri pernikahan mantan', 'Tidak Masuk Kerja', '', 'Approved', '2020-10-28 03:06:29', '2020-11-10 01:34:31');
/*!40000 ALTER TABLE `izin` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.jabatan
CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport` int(11) NOT NULL,
  `pulsa` int(11) NOT NULL,
  `tunj_jab` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.jabatan: ~52 rows (approximately)
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
REPLACE INTO `jabatan` (`id`, `jabatan`, `transport`, `pulsa`, `tunj_jab`, `created_at`, `updated_at`) VALUES
	(1, 'Administrasi Pembiayaan KPO dan AO Coorporate Karyawan Al Ma\'soem Group', 0, 0, 0, '2020-06-05 00:00:00', '2020-10-16 07:29:03'),
	(2, 'Administrasi Analis Pembiayaan', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(10, 'AO Corporate', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(12, 'AO Umum', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(13, 'Back Office', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(18, 'Collection', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(21, 'Customer Service', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(22, 'Dewan Pengawas Syariah', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(23, 'Direktur Bisnis', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(24, 'Direktur Operasional', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(25, 'Direktur Utama', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(26, 'General Manajer', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(27, 'Head Teller', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(28, 'Kepala Cabang', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(34, 'Kepala Kantor Kas', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(35, 'Kepala KPO', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(36, 'Ketua Dewan Pengawas Syariah', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(37, 'Komisaris', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(38, 'Komisaris Utama', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(39, 'Manajer Cabang', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(40, 'Manajer Collection', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(41, 'Manajer EDP & SID', 0, 0, 0, '2020-06-05 00:00:00', '2020-10-15 08:08:54'),
	(42, 'Manajer Legal', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(43, 'Manajer Operasional', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(44, 'Manajer Rahn', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(45, 'Manajer Remedial', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(46, 'Manajer Risk & Remedial', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(47, 'Manajer SDI', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(48, 'Manajer SDM', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(49, 'Manajer Support', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(50, 'Petugas Pelaksana', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(51, 'Petugas Ruang Hasanah Rahn', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(52, 'Petugas Security', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(53, 'Pimpinan Divisi SPI', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(54, 'Staff Collection', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(55, 'Staff Dirut Bidang Umum & Sarana', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(56, 'Staff EDP & SID', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(57, 'Staff Funding', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(58, 'Staff Legal', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(61, 'Staff Marketing', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(62, 'Staff Marketing Rahn', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(63, 'Staff Pajak & Petugas Penyimpanan Agunan', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(64, 'Staff Pembukuan', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(65, 'Staff Rahn', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(69, 'Staff Risk & Remedial', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(70, 'Staff SDM', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(71, 'Staff SPI', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(72, 'Teller', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(80, 'Teller Kantor Kas', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(81, 'Teller Rahn', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(85, 'Wakil Kepala Pusat Operasional Bidang Legal dan Pajak', 0, 0, 0, '2020-06-05 00:00:00', '2020-06-05 00:00:00'),
	(86, 'Karyawan Kontrak', 0, 0, 0, '2020-07-29 10:04:35', '2020-10-23 04:19:20');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.jenjang_karir
CREATE TABLE IF NOT EXISTS `jenjang_karir` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `karyawan_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_perubahan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.jenjang_karir: ~0 rows (approximately)
/*!40000 ALTER TABLE `jenjang_karir` DISABLE KEYS */;
/*!40000 ALTER TABLE `jenjang_karir` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `jabatan_id` int(11) DEFAULT '86',
  `golongan_id` int(11) DEFAULT '251',
  `cabang_id` int(11) DEFAULT '1',
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_nikah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.karyawan: ~4 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
REPLACE INTO `karyawan` (`id`, `user_id`, `jabatan_id`, `golongan_id`, `cabang_id`, `nik`, `no_ktp`, `nama_lengkap`, `jk`, `agama`, `tempat_lahir`, `tanggal_lahir`, `status_nikah`, `no_telepon`, `alamat`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
	(2, 2, 85, 25, 1, '232323', '3211182301910005', 'Wildan Y. Tanjung', 'Laki Laki', 'Islam', 'Sumedang', '1991-01-23', 'Menikah', '082316172028', 'Ketib RT 01/RW 12. Keluarahan Kota Kaler, Kecamatan Sumedang Utara, Kabupaten Sumedang', 'Aku Anak Indonesia', 'Sehat dan Kuat Anjaaay', '2020-08-25 01:46:02', '2020-10-23 05:34:37'),
	(4, 4, 40, 125, 3, '171717', '321854655978124', 'Sukandar Suhe', 'Laki Laki', 'Islam', 'Sumedang', '1994-06-14', 'Belum Menikah', '081548965656565', 'Jalan Raya Tanjungsari No.66', 'Santai\r\nSerius', 'Setress', '2020-10-16 07:35:52', '2020-10-26 03:27:19'),
	(5, 5, 65, 101, 2, '151515', '321115465521400012', 'Bambang', 'Laki Laki', 'Protestan', 'Jakarta', '2020-10-05', 'Belum Menikah', '083125456454654', 'Lorem', 'Lorem', 'Lorem', '2020-10-20 05:06:25', '2020-10-23 05:30:51'),
	(6, 6, 64, 121, 1, '121212', '11232132132132132132', 'Bimbing', 'Perempuan', 'Protestan', 'Bandung', '1999-01-23', 'Menikah', '083125456454654', 'Lorem', 'Lorem', 'Lorem', '2020-10-20 05:08:07', '2020-10-23 05:31:47');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.keluarga
CREATE TABLE IF NOT EXISTS `keluarga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `nama_keluarga` varchar(191) NOT NULL DEFAULT '0',
  `status` varchar(191) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sidakmasoem.keluarga: ~0 rows (approximately)
/*!40000 ALTER TABLE `keluarga` DISABLE KEYS */;
REPLACE INTO `keluarga` (`id`, `user_id`, `nama_keluarga`, `status`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Julkifar', 'Saudara Kandung', '2020-11-18 02:59:57', '2020-11-18 02:59:57');
/*!40000 ALTER TABLE `keluarga` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.migrations: ~13 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2020_03_11_041921_create_karyawan_table', 1),
	(4, '2020_09_22_034003_create_golongan_table', 1),
	(5, '2020_09_22_034026_create_jabatan_table', 1),
	(6, '2020_09_22_034052_create_cabang_table', 1),
	(7, '2020_09_22_034129_create_organisasi_table', 1),
	(8, '2020_09_22_034146_create_pendidikan_table', 1),
	(9, '2020_09_22_034221_create_jenjang_karir_table', 1),
	(10, '2020_09_29_081357_create_pengalaman_kerja_table', 1),
	(11, '2020_10_21_021540_create_cuti_table', 2),
	(12, '2020_10_21_021449_create_izin_table', 3),
	(13, '2020_10_21_021523_create_mutasi_table', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.mutasi
CREATE TABLE IF NOT EXISTS `mutasi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `golongan_id` int(11) NOT NULL,
  `cabang_id` int(11) NOT NULL,
  `tanggal_mutasi` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.mutasi: ~4 rows (approximately)
/*!40000 ALTER TABLE `mutasi` DISABLE KEYS */;
REPLACE INTO `mutasi` (`id`, `karyawan_id`, `jabatan_id`, `golongan_id`, `cabang_id`, `tanggal_mutasi`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 2, 85, 50, 1, '2020-11-01', 'Promosi', 'Hadiah Ulang Tahun', '2020-10-23 04:34:39', '2020-10-23 04:34:39'),
	(2, 5, 65, 101, 2, '2020-11-01', 'Promosi', 'Kenaikan Golongan', '2020-10-23 05:30:51', '2020-10-23 05:30:51'),
	(3, 6, 64, 121, 1, '2020-11-01', 'Promosi', 'Pengangkatan Karyawan Tetap', '2020-10-23 05:31:47', '2020-10-23 05:31:47'),
	(4, 2, 85, 25, 1, '2020-11-01', 'Promosi', 'Kenaikan Golongan', '2020-10-23 05:34:37', '2020-10-23 05:34:37'),
	(5, 4, 40, 125, 3, '2020-11-01', 'Promosi', 'Kenaikan Golongan', '2020-10-26 03:27:19', '2020-10-26 03:27:19');
/*!40000 ALTER TABLE `mutasi` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.organisasi
CREATE TABLE IF NOT EXISTS `organisasi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_org` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_org` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode_org` date NOT NULL,
  `status_org` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.organisasi: ~5 rows (approximately)
/*!40000 ALTER TABLE `organisasi` DISABLE KEYS */;
REPLACE INTO `organisasi` (`id`, `user_id`, `nik`, `nama_org`, `jabatan_org`, `periode_org`, `status_org`, `created_at`, `updated_at`) VALUES
	(1, 4, '171717', 'PETANI TEMBAKAU TANJUNGSARI', 'KETUA UMUM', '2020-08-06', 'Aktif', '2020-10-06 07:06:16', '2020-10-06 07:06:16'),
	(2, 4, '171717', 'IKATAN PROGRAMMER TANJUNGSARI', 'KETUA UMUM', '2020-10-01', 'Aktif', '2020-10-07 03:42:14', '2020-10-07 03:42:14'),
	(4, 2, '232023', 'PETANI TEMBAKAU TANJUNGSARI', 'Bendahara', '2020-04-23', 'Aktif', '2020-10-07 04:54:25', '2020-10-07 04:54:25'),
	(6, 2, '232023', 'IKATAN PROGRAMMER TANJUNGSARI', 'Wakil Ketua', '2020-10-01', 'Aktif', '2020-10-07 05:13:03', '2020-10-07 05:13:03'),
	(7, 2, '232023', 'GERAKAN DISIPLIN SISWA', 'KETUA UMUM', '2019-09-12', 'Non Aktif', '2020-10-07 05:14:16', '2020-10-07 05:14:16');
/*!40000 ALTER TABLE `organisasi` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.pembiayaan
CREATE TABLE IF NOT EXISTS `pembiayaan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lemari` int(11) NOT NULL,
  `laci` varchar(191) NOT NULL,
  `no_berkas` int(11) NOT NULL,
  `no_akad` varchar(50) NOT NULL DEFAULT '',
  `cif` varchar(50) NOT NULL DEFAULT '',
  `no_ktp` varchar(50) NOT NULL DEFAULT '',
  `nama_nasabah` varchar(191) NOT NULL,
  `nama_ao` varchar(191) NOT NULL,
  `tanggal_pencairan` date NOT NULL,
  `status` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sidakmasoem.pembiayaan: ~0 rows (approximately)
/*!40000 ALTER TABLE `pembiayaan` DISABLE KEYS */;
REPLACE INTO `pembiayaan` (`id`, `lemari`, `laci`, `no_berkas`, `no_akad`, `cif`, `no_ktp`, `nama_nasabah`, `nama_ao`, `tanggal_pencairan`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 'A', 1, '12151651', '51515', '112323213', 'Wildan', 'Bambang', '2020-11-03', 'Arsip', '2020-11-12 04:38:59', '2020-11-16 06:42:48'),
	(2, 2, 'A', 3, '213213213123123', '11111111111', '12321321312321321321', 'Wildan', 'Bambang', '2020-11-18', 'WO', '2020-11-12 04:46:05', '2020-11-17 04:39:28');
/*!40000 ALTER TABLE `pembiayaan` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.pendidikan
CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.pendidikan: ~2 rows (approximately)
/*!40000 ALTER TABLE `pendidikan` DISABLE KEYS */;
REPLACE INTO `pendidikan` (`id`, `user_id`, `nik`, `nama_instansi`, `jurusan`, `jenjang`, `tahun_lulus`, `created_at`, `updated_at`) VALUES
	(2, 2, '232023', 'SMA NEGERI 1 SUMEDANG', 'IPA', 'SMA', '2009-08-20', '2020-09-29 09:16:08', '2020-09-29 09:16:08'),
	(4, 2, '232023', 'MASOEM UNIVERSITY', 'MANAJEMEN INFORMATIKA', 'D3', '2020-04-10', '2020-10-07 05:04:09', '2020-10-07 05:04:09');
/*!40000 ALTER TABLE `pendidikan` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.pengalaman
CREATE TABLE IF NOT EXISTS `pengalaman` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_masuk` date NOT NULL,
  `th_keluar` date NOT NULL,
  `alasan_resign` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.pengalaman: ~2 rows (approximately)
/*!40000 ALTER TABLE `pengalaman` DISABLE KEYS */;
REPLACE INTO `pengalaman` (`id`, `user_id`, `nik`, `nama_pr`, `jabatan_pr`, `th_masuk`, `th_keluar`, `alasan_resign`, `created_at`, `updated_at`) VALUES
	(1, 2, '232023', 'BCA', 'TELLER', '2017-06-05', '2020-06-17', 'EKONOMI', '2020-10-07 04:16:28', '2020-10-07 04:16:28'),
	(3, 2, '232323', 'BANK MANDIRI SYARIAH', 'DIGITAL MARKETING', '2012-01-06', '2015-11-10', 'LOKASI KERJA JAUH', '2020-10-07 07:39:40', '2020-10-07 07:39:40');
/*!40000 ALTER TABLE `pengalaman` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.sk
CREATE TABLE IF NOT EXISTS `sk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `no_sk` varchar(191) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `file` varchar(191) NOT NULL,
  `tanggal_sah` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table sidakmasoem.sk: ~0 rows (approximately)
/*!40000 ALTER TABLE `sk` DISABLE KEYS */;
REPLACE INTO `sk` (`id`, `user_id`, `no_sk`, `judul`, `keterangan`, `file`, `tanggal_sah`, `created_at`, `updated_at`) VALUES
	(14, 2, 'BAMS/001/08/2020', 'SK KETETAPAN UANG MAKAN', 'asdasd', 'SK KETETAPAN UANG MAKAN.pdf', '2020-11-06', '2020-11-06 07:13:27', '2020-11-06 07:13:27'),
	(15, 2, 'BAMS/002/08/2020', 'SK KETETAPAN CUTI', '123', 'SK KETETAPAN CUTI.pdf', '2020-11-01', '2020-11-10 01:31:59', '2020-11-10 01:31:59');
/*!40000 ALTER TABLE `sk` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.user: ~4 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `nama_lengkap`, `email`, `level`, `password`, `remember_token`, `avatar`, `created_at`, `updated_at`) VALUES
	(2, 'Wildan Yanuarsyah Tanjung', 'wieldhan@gmail.com', 'admin', '$2y$10$49sW054NY2dIzSSP2UFiE.LBkIfzQx.QamMx6K.O3oyP13NiVFDaO', 'lcWfRZET1Kg7HEkkLN18BJBUMB3wYq3sHdu6SiwM1pyiiqTcjlsAlYw1OfFv', '24025-2020-11-06-06-43-02.jpg', '2020-08-25 01:46:02', '2020-11-06 06:43:02'),
	(4, 'Sukandar Suhe', 'sukandar@gmail.com', 'user', '$2y$10$49sW054NY2dIzSSP2UFiE.LBkIfzQx.QamMx6K.O3oyP13NiVFDaO', 'cYvefF07d6Zl7uTvHJ5bOREUgikaaNN5h7GemU5T8GrkQGnCcVoixJn56F8V', '38960-2020-10-28-03-08-20.jpg', '2020-10-16 07:35:52', '2020-10-28 03:08:20'),
	(5, 'Bambang', 'bambang@yahoo.com', 'user', '$2y$10$yS7VN2R0P7WXVJxmMa1TJ.1CY3hs5mDRP8lmUgOXXE7WlnGBDK66W', 'AKzhZDY0Nl6i4ZxjOeWmIe1vk0Gv8RLdyUldCpxSf4ajQOcpi4', NULL, '2020-10-20 05:06:25', '2020-10-20 05:06:25'),
	(6, 'Bimbing', 'bimbing@yahoo.com', 'user', '$2y$10$c/qMuGET9dWhhgnyfr8dOuE7xhVcccTS7QLnxYR0Bp9rXg5fg6lta', 'LO3wfXGRvtvtcqwITv7213odTAk4y7oBMxZcEB7puCgp6fcWb3', NULL, '2020-10-20 05:08:07', '2020-10-20 05:08:07');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
