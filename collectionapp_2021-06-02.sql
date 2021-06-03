# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: collectionapp
# Generation Time: 2021-06-02 08:43:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table records
# ------------------------------------------------------------

DROP TABLE IF EXISTS `records`;

CREATE TABLE `records` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Artist` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Rating` float DEFAULT NULL,
  `Released` year(4) DEFAULT NULL,
  `Condition` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `records` WRITE;
/*!40000 ALTER TABLE `records` DISABLE KEYS */;

INSERT INTO `records` (`id`, `Artist`, `Title`, `Rating`, `Released`, `Condition`)
VALUES
	(1,'Maxi Priest','You\'re Safe',3.8,'1985','Very Good Plus (VG+)'),
	(2,'Randy Edelman','Farewell Fairbanks',3.5,'1976','Near Mint (NM or M-)'),
	(3,'T. Rex','T. Rex',4.1,'1998','Very Good Plus (VG+)'),
	(4,'Iggy Pop','Blah-Blah-Blah',3.4,'1986','Very Good Plus (VG+)'),
	(5,'The Police','Reggatta De Blanc',3.2,'1979','Fair (F)'),
	(6,'Steely Dan','The Royal Scam',4,'1976','Near Mint (NM or M-)'),
	(7,'Joni Mitchell','Miles of Aisles',5,'1974','Very Good Plus (VG+)'),
	(8,'Eagles','Desperado',3,'1973','Good Plus (G+)'),
	(9,'The Beach Boys','Best of the Beach Boys',2,'1966','Generic'),
	(10,'Radiohead','A Moon Shaped Pool',4.9,'2016','Near Mint (NM or M-)');

/*!40000 ALTER TABLE `records` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
