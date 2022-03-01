-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: qr
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `codes`
--

DROP TABLE IF EXISTS `codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `codes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(150) NOT NULL,
  `name` varchar(100) NOT NULL,
  `design` varchar(200) NOT NULL,
  `welcomescreen` varchar(150) DEFAULT NULL,
  `active` int NOT NULL,
  `userId` int NOT NULL,
  `dataQR` text NOT NULL,
  `typeQR` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codes`
--

LOCK TABLES `codes` WRITE;
/*!40000 ALTER TABLE `codes` DISABLE KEYS */;
INSERT INTO `codes` VALUES (1,'96EgTWvjSwfafNfZvdhKxijVG7TDPP','test','{\"dataType\":\"\",\"color\":\"#000000\",\"background\":\"#ffffff\",\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(2,'R1KSrAThXRWgb48L50VuGfG1VbMrQL','test','{\"dataType\":\"\",\"color\":\"#000000\",\"background\":\"#ffffff\",\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(3,'jkMNE5FI2zZmVKLlcWuEXSwYJJ9Vzf','test','{\"dataType\":\"square\",\"color\":\"#000000\",\"background\":\"#ffffff\",\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(4,'4eprlkb3ZkmGlslb7kVDw5DcOVDt4U','test','{\"dataType\":\"square\",\"color\":\"#ffffff\",\"background\":null,\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"square\",\"dataInteral\":\"dot\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(5,'FHWriOrZyiKQJ5dT6V4auau4m7AxzX','test','{\"dataType\":\"square\",\"color\":\"#ffffff\",\"background\":null,\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"square\",\"dataInteral\":\"square\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(6,'GG4Pjkx7w6U7I3n7YWHUOEfzkv8JCd','test','{\"dataType\":\"square\",\"color\":\"#ffffff\",\"background\":null,\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"square\",\"dataInteral\":\"square\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(7,'WH2jUueg45bcoZIlfiGG7K5blLvhPa','test','{\"dataType\":\"\",\"color\":\"#ffffff\",\"background\":null,\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(8,'gGZ1YKdeNye7WESyGcjnII4t09i1Re','test','{\"dataType\":\"\",\"color\":\"#ffffff\",\"background\":null,\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(9,'cpfUFf35ZmltG8gt9EbavXmM3cBjqv','test','{\"dataType\":\"\",\"color\":\"#000000\",\"background\":\"#ffffff\",\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(10,'kbMebLReSmwZvx34DG15z7VzSWDMxh','jkh','{\"dataType\":\"classy\",\"color\":\"#000000\",\"background\":\"#ffffff\",\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"img\":null,\"nameMenu\":\"kjg\",\"description\":\"jkh\",\"menu\":\"{\\\"1\\\":{\\\"products\\\":[{\\\"name\\\":\\\"\\\",\\\"description\\\":\\\"jkb\\\",\\\"price\\\":\\\"\\\"}],\\\"name\\\":\\\"jbn\\\",\\\"description\\\":\\\"\\\"}}\"}','menu'),(11,'4SHzMpqBek25V8JNicANUuGUv4LO7D','test','{\"dataType\":\"dots\",\"color\":\"#000000\",\"background\":\"#ffffff\",\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"url\":\"https:\\/\\/google.com\"}','website'),(12,'Iaf2r1wcaQAQu2JXR9CzkiP7t0uXGf','Matias','{\"dataType\":\"\",\"color\":\"#000000\",\"background\":\"#ffffff\",\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"url\":\"https:\\/\\/www.google.com\"}','website'),(13,'fD0Sf5wuZYz8pftXqvqylqanKrF97G','sadsad','{\"dataType\":\"\",\"color\":\"#000000\",\"background\":\"#ffffff\",\"colorCorner\":\"#000000\",\"backgroundCorner\":\"#000000\",\"dataExternal\":\"\",\"dataInteral\":\"\"}','',0,1,'{\"url\":\"https:\\/\\/www.sasdsd.com\"}','website');
/*!40000 ALTER TABLE `codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userId` int NOT NULL,
  `amount` varchar(10) NOT NULL,
  `statePayment` varchar(100) NOT NULL,
  `datePayment` date NOT NULL,
  `expirationDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,1,'0,50','init','2022-01-19','2022-01-19'),(2,1,'0,50','init','2022-01-19','2022-01-19'),(3,1,'0,50','init','2022-01-19','2022-01-19'),(4,1,'0,50','init','2022-01-19','2022-01-19'),(5,1,'0,50','approved','2022-01-19','2022-01-19'),(6,2,'0,50','init','2022-01-19','2022-01-19'),(7,2,'0,50','approved','2022-01-19','2022-01-19'),(8,2,'0,50','init','2022-01-19','2022-01-19'),(9,2,'0,50','init','2022-01-19','2022-01-19'),(10,2,'0,50','init','2022-01-19','2022-01-19'),(11,2,'0,50','init','2022-01-19','2022-01-19'),(12,2,'0,50','init','2022-01-19','2022-01-19'),(13,2,'0,50','init','2022-01-19','2022-01-19'),(14,3,'0,50','init','2022-01-19','2022-01-19'),(15,2,'0,50','init','2022-01-20','2022-01-20'),(16,2,'0,50','init','2022-01-20','2022-01-20'),(17,4,'0,50','init','2022-01-24','2022-01-24'),(18,4,'0,50','init','2022-01-24','2022-01-24'),(19,4,'0,50','init','2022-01-24','2022-01-24'),(20,4,'0,50','init','2022-01-24','2022-01-24'),(21,4,'0,50','init','2022-01-24','2022-01-24'),(22,4,'0,50','init','2022-01-24','2022-01-24');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'borrazas.trab2ajo@gmail.com','a13336cccedfc1c6dee66882e736e6fa85bdbeda'),(2,'borrazas.trabajo@gmail.com','a13336cccedfc1c6dee66882e736e6fa85bdbeda'),(3,'knbjkjnb@gmail.com','2ff10290a01fded9b24c2760acbe69ac311b6542'),(4,'wisoti8126@altcen.com','88ea39439e74fa27c09a4fc0bc8ebe6d00978392');
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

-- Dump completed on 2022-02-24  8:31:26
