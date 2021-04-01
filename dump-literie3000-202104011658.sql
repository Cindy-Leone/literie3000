-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: literie3000
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

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
-- Table structure for table `matelas`
--

DROP TABLE IF EXISTS `matelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matelas` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(300),
  `marque` varchar(300),
  `picture` text DEFAULT NULL,
  `dimension` varchar(500),
  `prix` decimal(6,2),
  `reduction` int(11),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matelas`
--

LOCK TABLES `matelas` WRITE;
/*!40000 ALTER TABLE `matelas` DISABLE KEYS */;
INSERT INTO `matelas` VALUES (1,'Matelas Tamoul','EPEDA','https://cdn.laredoute.com/products/362by362/2/6/1/261a43665c647423eaa0c04e89234ae0.jpg','90 x 190',759.00,20),(2,'Matelas Waldorf','DREAMWAY','https://cdn.laredoute.com/products/362by362/b/d/0/bd0b29a9aa8a4350c67327d7e22809e7.jpg','90 x 190',709.00,10),(14,'Joris','Bultex','https://cdn.laredoute.com/products/362by362/6/d/9/6d9d50cd4be257954613782644c62635.jpg','140 x 190',759.00,20),(15,'Melon','Epeda','https://cdn.laredoute.com/products/362by362/6/d/9/6d9d50cd4be257954613782644c62635.jpg','160 x 200',815.00,20),(16,'laura','Bultex','https://cdn.laredoute.com/products/362by362/8/c/9/8c9d6aa13b877d4652013ac4093a22b7.jpg','200 x 200',780.00,10),(17,'laura','Epeda','https://cdn.laredoute.com/products/362by362/8/c/9/8c9d6aa13b877d4652013ac4093a22b7.jpg','90 x 190',475.00,5),(18,'Joris','Bultex','https://cdn.laredoute.com/products/362by362/6/d/9/6d9d50cd4be257954613782644c62635.jpg','140 x 190',90.00,10);
/*!40000 ALTER TABLE `matelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'literie3000'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-01 16:58:11
