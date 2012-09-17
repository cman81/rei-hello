# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9-log)
# Database: hellodb
# Generation Time: 2012-09-17 01:23:47 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table checklist_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `checklist_category`;

CREATE TABLE `checklist_category` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `weight` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

LOCK TABLES `checklist_category` WRITE;
/*!40000 ALTER TABLE `checklist_category` DISABLE KEYS */;

INSERT INTO `checklist_category` (`id`, `category_name`, `weight`)
VALUES
	(1,'Software',1),
	(2,'People',2),
	(3,'Your Gear',3),
	(4,'Reading',4),
	(5,'Program',5),
	(6,'Forms',6);

/*!40000 ALTER TABLE `checklist_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table checklist_item
# ------------------------------------------------------------

DROP TABLE IF EXISTS `checklist_item`;

CREATE TABLE `checklist_item` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `category_id` int(6) NOT NULL,
  `weight` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

LOCK TABLES `checklist_item` WRITE;
/*!40000 ALTER TABLE `checklist_item` DISABLE KEYS */;

INSERT INTO `checklist_item` (`id`, `item_name`, `category_id`, `weight`)
VALUES
	(1,'Adobe Photoshop CS6',1,1),
	(2,'Adobe Illustrator CS6',1,2),
	(3,'Adobe Indesign CS6',1,3),
	(4,'Microsoft Word for Mac 2011',1,4),
	(5,'MAMP',1,5),
	(6,'PHPStorm',1,6),
	(7,'Have you met Anita Kozak?',2,7),
	(8,'Have you met Amit Yadav?',2,8),
	(9,'Laptop -- you can pick Mac or PC!',3,9),
	(10,'Employee Handbook',4,10),
	(11,'401k Plan Info',4,11),
	(12,'Retirement Plans',4,12),
	(13,'Health Insurance',4,13),
	(14,'Employee Handbook',6,14),
	(15,'401k Plan Info',6,14),
	(16,'Retirement Plans',6,14),
	(17,'Health Insurance',6,14);

/*!40000 ALTER TABLE `checklist_item` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mentor_id` int(6) NOT NULL,
  `prog_mgr_id` int(6) NOT NULL,
  `resource_mgr_id` int(6) NOT NULL,
  `proj_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `created_on` date NOT NULL,
  `prog_coord_id` int(6) NOT NULL,
  `avatar_path` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `title`, `mentor_id`, `prog_mgr_id`, `resource_mgr_id`, `proj_id`, `user_id`, `created_on`, `prog_coord_id`, `avatar_path`)
VALUES
	(1,'Kapil','Grover','Senior Graphics Designer',3,4,3,1,2,'0000-00-00',9,'uploads/kgrover/profile.jpg'),
	(2,'David','Rhyne','Graphics Designer',2,4,3,2,1,'0000-00-00',9,'uploads/drhyne/profile.jpg'),
	(3,'Christian','Manalansan','Senior Software Engineer',5,4,7,2,6,'0000-00-00',9,'uploads/cmanalansan/profile.jpg'),
	(4,'Darren','Harper','Senior Graphics Designer',2,4,7,2,3,'0000-00-00',9,'uploads/dharper/profile.jpg'),
	(5,'Amit','Yadav','President',0,4,0,0,4,'0000-00-00',9,'uploads/ayadav/profile.jpg'),
	(6,'Zerihun','Tegegn','Senior Software Engineer',6,4,7,1,5,'0000-00-00',9,'uploads/ztegegn/profile.jpg'),
	(7,'Tim','Molinaro','Resource Manager',4,4,4,2,7,'0000-00-00',9,'uploads/tmolinaro/profile.jpg'),
	(8,'Sudheendra','Mahdur','Project Manager',4,4,4,1,8,'0000-00-00',9,'uploads/smahdur/profile.jpg'),
	(9,'Anita','Kozak','Program Coordinator',9,4,7,1,9,'0000-00-00',9,'uploads/akozak/profile.jpg');

/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table map_checklist_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `map_checklist_user`;

CREATE TABLE `map_checklist_user` (
  `checklist_item_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `is_checked` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `manager` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `name`, `manager`)
VALUES
	(1,'Performance.gov',8),
	(2,'Shared Services',7),
	(3,'',0);

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_on`)
VALUES
	(1,'drhyne@reisystems.com','123','emp','0000-00-00'),
	(2,'kgrover@reisystems.com','123','emp','0000-00-00'),
	(3,'dharper@reisystems.com','123','emp','0000-00-00'),
	(4,'ayadav@reisystems.com','123','emp','0000-00-00'),
	(5,'ztegegn@reisystems.com','123','emp','0000-00-00'),
	(6,'cmanalansan@reisystems.com','123','emp','0000-00-00'),
	(7,'tmolinaro@reisystems.com','123','emp','0000-00-00'),
	(8,'smadhur@reisystems.com','123','emp','0000-00-00'),
	(9,'akozak@reisystems.com','123','emp','0000-00-00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
