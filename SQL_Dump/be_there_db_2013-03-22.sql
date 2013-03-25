# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.29)
# Database: be_there_db
# Generation Time: 2013-03-22 20:46:25 -0400
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table location_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `location_info`;

CREATE TABLE `location_info` (
  `lid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `street` varchar(20) DEFAULT '',
  `city` varchar(20) DEFAULT NULL,
  `state` char(2) DEFAULT NULL,
  `zip` int(5) NOT NULL,
  `phone` int(10) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `location_info` WRITE;
/*!40000 ALTER TABLE `location_info` DISABLE KEYS */;

INSERT INTO `location_info` (`lid`, `name`, `street`, `city`, `state`, `zip`, `phone`)
VALUES
	(1,'Sully\'s','','Somerset','ky',42519,2147483647);

/*!40000 ALTER TABLE `location_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table there
# ------------------------------------------------------------

DROP TABLE IF EXISTS `there`;

CREATE TABLE `there` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `day` date NOT NULL,
  `arrive` time NOT NULL,
  `leave` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `there` WRITE;
/*!40000 ALTER TABLE `there` DISABLE KEYS */;

INSERT INTO `there` (`id`, `uid`, `lid`, `day`, `arrive`, `leave`)
VALUES
	(1,1,1,'0000-00-00','02:00:00','04:00:00');

/*!40000 ALTER TABLE `there` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(30) DEFAULT '',
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;

INSERT INTO `user_info` (`uid`, `username`, `password`, `email`, `first_name`, `last_name`, `zip`)
VALUES
	(1,'wagle','1234','wagle@wagle.com','Shawn','Sampson',42519);

/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
