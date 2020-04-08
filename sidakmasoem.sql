-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sidakmasoem
CREATE DATABASE IF NOT EXISTS `sidakmasoem` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sidakmasoem`;

-- Dumping structure for table sidakmasoem.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(12) NOT NULL,
  `gaji_pokok` int(12) NOT NULL DEFAULT '0',
  `uang_makan` int(12) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sidakmasoem.golongan: ~2 rows (approximately)
/*!40000 ALTER TABLE `golongan` DISABLE KEYS */;
REPLACE INTO `golongan` (`id`, `golongan`, `gaji_pokok`, `uang_makan`, `created_at`, `updated_at`) VALUES
	(1, 'I.A1', 1000000, 16500, '2020-04-02 03:28:39', '2020-04-02 03:28:39'),
	(2, 'I.A2', 950000, 16500, '2020-04-02 03:29:03', '2020-04-02 03:29:03');
/*!40000 ALTER TABLE `golongan` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.jabatan
CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(50) NOT NULL DEFAULT '0',
  `transport` int(15) NOT NULL DEFAULT '0',
  `pulsa` int(15) NOT NULL DEFAULT '0',
  `tunj_jab` int(15) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table sidakmasoem.jabatan: ~1 rows (approximately)
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
REPLACE INTO `jabatan` (`id`, `jabatan`, `transport`, `pulsa`, `tunj_jab`, `created_at`, `updated_at`) VALUES
	(21, 'DIREKTUR', 150000, 100000, 3000000, '2020-04-02 08:42:05', '2020-04-02 08:42:05'),
	(22, 'MANAJER', 50000, 100000, 2000000, '2020-04-02 09:34:14', '2020-04-02 09:34:14');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.jenjang_karir
CREATE TABLE IF NOT EXISTS `jenjang_karir` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `thn_perubahan` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sidakmasoem.jenjang_karir: ~0 rows (approximately)
/*!40000 ALTER TABLE `jenjang_karir` DISABLE KEYS */;
/*!40000 ALTER TABLE `jenjang_karir` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `ibukandung` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_nikah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasangan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan_id` int(10) NOT NULL DEFAULT '0',
  `jabatan_id` int(10) NOT NULL DEFAULT '0',
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_keluarga` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sma_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sma_jurusan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sma_lulus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sma_nilai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s1_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s1_jurusan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s1_lulus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s1_nilai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_jurusan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_lulus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_nilai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or_jenis` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or_periode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or2_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or2_jenis` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or2_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or2_periode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or3_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or3_jenis` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or3_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or3_periode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr_jabatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr_thmasuk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr_thkeluar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr2_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr2_jabatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr2_thmasuk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr2_thkeluar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr3_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr3_jabatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr3_thmasuk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr3_thkeluar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `golongan_id` (`golongan_id`),
  KEY `jabatan_id` (`jabatan_id`),
  CONSTRAINT `FK_karyawan_golongan` FOREIGN KEY (`golongan_id`) REFERENCES `golongan` (`id`),
  CONSTRAINT `FK_karyawan_jabatan` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.karyawan: ~0 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2020_03_11_041921_create_karyawan_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('superadmin','admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
