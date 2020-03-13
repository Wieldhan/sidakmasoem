-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.3.0.5771
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

-- Dumping structure for table sidakmasoem.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `no_ktp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sidakmasoem.karyawan: ~3 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` (`id`, `nik`, `no_ktp`, `username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `golongan`, `jabatan`, `alamat`, `no_telepon`, `email`, `created_at`, `updated_at`) VALUES
	(1, '2320', '3211182301910005', 'WYT', '2320', 'WILDAN YANUARSYAH TANJUNG', 'SUMEDANG', '1991-01-23', 'ISLAM', 'III.B5', 'STAFF EDP DAN SID', 'SUMEDANG', '082316172028', 'wieldhan.android@gmail.com', '2020-03-11 13:24:56', '2020-03-11 13:25:00'),
	(16, '1212', '13312322131', 'TG', 'asdasd', 'Takiya Genjieh', 'Bandung', '2020-03-02', 'Islam', 'IIIB3', 'Montir', 'asdasd', '0823158421236', 'takiya@gmail.com', '2020-03-12 06:00:09', '2020-03-12 06:00:09'),
	(17, '1212', '13312322131', 'TG', 'asdasd', 'Takiya Genjieh', 'Bandung', '2020-03-02', 'Khatolik', 'III.B3', 'Montir', 'asdasd', '0823158421236', 'takiya@gmail.com', '2020-03-12 06:54:14', '2020-03-12 06:54:14');
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
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2020_03_11_041921_create_karyawan_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sidakmasoem.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
