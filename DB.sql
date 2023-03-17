-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for registration
CREATE DATABASE IF NOT EXISTS `registration` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `registration`;

-- Dumping structure for table registration.dogstats
CREATE TABLE IF NOT EXISTS `dogstats` (
  `breed` varchar(50) DEFAULT NULL,
  `weight(avg)` double DEFAULT NULL,
  `age(avg)` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table registration.dogstats: ~4 rows (approximately)
REPLACE INTO `dogstats` (`breed`, `weight(avg)`, `age(avg)`) VALUES
	('Labrador', 65, 11),
	('French Bulldog', 20, 12),
	('Border Collie', 35, 13),
	('Golden Retriever', 67, 11);

-- Dumping structure for table registration.users
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `admin` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table registration.users: ~7 rows (approximately)
REPLACE INTO `users` (`username`, `password`, `admin`) VALUES
	('PuppyEnthusiest', 'this is a passwerod', 'N'),
	('user', '123', 'N'),
	('NickB', '123', 'Y'),
	('BrandonS', 'password1', 'Y'),
	('CasonN', 'Pa$$word2!', 'Y'),
	('HannahK', 'SuperSecretPassword123!', 'Y'),
	('DillP', 'Pass1', 'Y');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
