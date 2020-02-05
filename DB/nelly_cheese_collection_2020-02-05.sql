# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: nelly_cheese_collection
# Generation Time: 2020-02-05 15:34:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cheese
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cheese`;

CREATE TABLE `cheese` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `countryoforigin` varchar(255) NOT NULL DEFAULT '',
  `winepairing` varchar(255) NOT NULL DEFAULT '',
  `funfact` varchar(255) NOT NULL DEFAULT '',
  `imgurl` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cheese` WRITE;
/*!40000 ALTER TABLE `cheese` DISABLE KEYS */;

INSERT INTO `cheese` (`id`, `name`, `countryoforigin`, `winepairing`, `funfact`, `imgurl`)
VALUES
	(1,'Stilton','England','Lambrusco Dolce','Must be produced in Derbyshire, Leicestershire or Nottinghamshire.','images/stilton.jpeg'),
	(2,'Gouda','Netherlands','Malbec','One of oldest recorded cheeses in the world still made today.','images/gouda.jpeg'),
	(3,'Mozarella','Italy','Dry Rose','Often called \"the queen of the Mediterranean cuisine\", \"white gold\" or \"the pearl of the table?.','images/mozarella.jpeg'),
	(4,'Brie','France','Chardonnay','Takes around 5-6 weeks to mature.','images/brie.jpg'),
	(5,'Edam','Netherlands','Syrah','Edam is traditionally sold in rounded cylinders with a pale yellow interior and a coat, or rind, of red paraffin wax.','images/edam.jpeg');

/*!40000 ALTER TABLE `cheese` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
