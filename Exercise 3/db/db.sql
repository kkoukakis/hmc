-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.16 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sdi1400289
CREATE DATABASE IF NOT EXISTS `sdi1400289` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sdi1400289`;

-- Dumping structure for table sdi1400289.news
CREATE TABLE IF NOT EXISTS `news` (
  `date` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `bus` varchar(50) DEFAULT NULL,
  `content` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sdi1400289.news: ~0 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`date`, `category`, `bus`, `content`) VALUES
	('14.01.20', '', '101', 'Μερική προσωρινή τροποποίηση της λεωφορειακής γραμμής 101 λόγω έργων στο Δήμο Αλίμου. ');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table sdi1400289.stops
CREATE TABLE IF NOT EXISTS `stops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `amea` varchar(50) NOT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table sdi1400289.stops: ~0 rows (approximately)
/*!40000 ALTER TABLE `stops` DISABLE KEYS */;
INSERT INTO `stops` (`id`, `name`, `amea`) VALUES
	(1, 'Ευαγγελισμός', 'ΝΑΙ');
/*!40000 ALTER TABLE `stops` ENABLE KEYS */;

-- Dumping structure for table sdi1400289.users
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  KEY `uid` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sdi1400289.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`email`, `password`, `type`, `name`, `last`, `phone`) VALUES
	('user@user.gr', 'user', '1', 'Kanonikos', 'Kurios', '2101234567'),
	('user2@user2.gr', 'user2', '2', 'Foititis', 'Foititakos', '2104321123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
