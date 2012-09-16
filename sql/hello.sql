-- MySQL dump 10.13  Distrib 5.5.27, for osx10.6 (i386)
--
-- Host: localhost    Database: hellodb
-- ------------------------------------------------------
-- Server version	5.5.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `checklist_category`
--

DROP TABLE IF EXISTS `checklist_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checklist_category` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `weight` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checklist_category`
--

LOCK TABLES `checklist_category` WRITE;
/*!40000 ALTER TABLE `checklist_category` DISABLE KEYS */;
INSERT INTO `checklist_category` VALUES (1,'Software',1),(2,'People',2),(3,'Your Gear',3),(4,'Reading',4),(5,'Program',5),(6,'Forms',6);
/*!40000 ALTER TABLE `checklist_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `checklist_item`
--

DROP TABLE IF EXISTS `checklist_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checklist_item` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `category_id` int(6) NOT NULL,
  `weight` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checklist_item`
--

LOCK TABLES `checklist_item` WRITE;
/*!40000 ALTER TABLE `checklist_item` DISABLE KEYS */;
INSERT INTO `checklist_item` VALUES (1,'Adobe Photoshop CS6',1,1),(2,'Adobe Illustrator CS6',1,2),(3,'Adobe Indesign CS6',1,3),(4,'Microsoft Word for Mac 2011',1,4),(5,'MAMP',1,5),(6,'PHPStorm',1,6),(7,'Have you met Anita Kozak?',2,7),(8,'Have you met Amit Yadav?',2,8),(9,'Laptop -- you can pick Mac or PC!',3,9),(10,'Employee Handbook',4,10),(11,'401k Plan Info',4,11),(12,'Retirement Plans',4,12),(13,'Health Insurance',4,13),(14,'Employee Handbook',6,14),(15,'401k Plan Info',6,14),(16,'Retirement Plans',6,14),(17,'Health Insurance',6,14);
/*!40000 ALTER TABLE `checklist_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Kapil','Grover','Senior Graphics Designer',3,4,3,1,2,'0000-00-00'),(2,'David','Rhyne','Graphics Designer',2,4,3,2,1,'0000-00-00'),(3,'Christian','Manalansan','Senior Software Engineer',5,4,7,2,6,'0000-00-00'),(4,'Darren','Harper','Senior Graphics Designer',2,4,7,2,3,'0000-00-00'),(5,'Amit','Yadav','President',0,4,0,0,4,'0000-00-00'),(6,'Zerihun','Tegegn','Senior Software Engineer',6,4,7,1,5,'0000-00-00'),(7,'Tim','Molinaro','Resource Manager',4,4,4,2,7,'0000-00-00'),(8,'Sudheendra','Mahdur','Project Manager',4,4,4,1,8,'0000-00-00');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `map_checklist_user`
--

DROP TABLE IF EXISTS `map_checklist_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `map_checklist_user` (
  `checklist_item_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `is_checked` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `map_checklist_user`
--

LOCK TABLES `map_checklist_user` WRITE;
/*!40000 ALTER TABLE `map_checklist_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `map_checklist_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `manager` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Performance.gov',8),(2,'Shared Services',7),(3,'',0);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'drhyne@reisystems.com','123','emp','0000-00-00'),(2,'kgrover@reisystems.com','123','emp','0000-00-00'),(3,'dharper@reisystems.com','123','emp','0000-00-00'),(4,'ayadav@reisystems.com','123','emp','0000-00-00'),(5,'ztegegn@reisystems.com','123','emp','0000-00-00'),(6,'cmanalansan@reisystems.com','123','emp','0000-00-00'),(7,'tmolinaro@reisystems.com','123','emp','0000-00-00'),(8,'smadhur@reisystems.com','123','emp','0000-00-00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-09-16 18:04:02
