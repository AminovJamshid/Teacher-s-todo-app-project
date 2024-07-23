-- MySQL dump 10.13  Distrib 8.3.0, for macos14.2 (arm64)
--
-- Host: localhost    Database: todo_app
-- ------------------------------------------------------
-- Server version	8.3.0

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
-- Table structure for table `todos`
--

DROP TABLE IF EXISTS `todos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `todos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` text,
  `status` tinyint(1) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todos`
--

LOCK TABLES `todos` WRITE;
/*!40000 ALTER TABLE `todos` DISABLE KEYS */;
INSERT INTO `todos` VALUES (34,'Task 1',0,3),(35,'Task 1',0,3),(36,'Task 2',0,3),(37,'Task 3',0,3),(38,'Task 4',0,3),(39,'Task5',0,3),(40,'Task 11',0,3),(41,'Task 22',0,3),(42,'Task 33',0,3),(43,'PHP 8',1,16),(44,'Do homework',1,15),(45,'привет',0,17),(46,'a',1,14),(47,'/get',0,16),(48,'Mmjs',0,18),(49,'Ususu',0,18),(50,'Yeyey',0,18),(51,'16 p.m. code yozish',0,14),(52,'Do',0,15),(53,'Do',1,15),(54,'Watch lesson',1,14),(55,'Todo app 2',1,24),(56,'Working homework',1,14),(57,'/tasks',1,14),(58,'🏞️',1,15),(59,'Assalomu Alaykum',0,26),(60,'1234556',0,26),(61,'Salom',1,28),(62,'Hello',1,29),(63,'Hello',1,28),(64,'🐐',1,15),(65,'Salom',1,14),(66,'7847845',0,26),(67,'Qalay',0,14),(68,'Zoʼrmi',0,14),(69,'f,hgiftgiurkhj,gr',0,26),(70,'mvbjjkehgnkeh',0,26),(71,'nvkjbdkbjndb,n',0,26),(72,'todo appppp',0,24),(73,'SALOM',1,20),(74,'Shohjahon',1,33),(75,',bnjkrgnr\'\'jgnekj',0,26),(76,'jnbejk',0,26),(77,'nbkrj',0,26),(78,'lekgje',0,26),(79,'3545',0,26),(80,'541',0,26),(81,'542',0,26),(82,'254',0,26),(83,'2415',0,26),(84,'52',0,26),(85,'67',0,26),(86,'45',0,26),(87,'2',0,26),(88,'54',0,26),(89,'452',0,26),(90,'/tasks',0,14),(91,'654',0,26),(92,'654',0,26),(93,'home work',0,34),(94,'564',0,26),(95,'54',0,26),(96,'2475',0,26),(97,'54',0,26),(98,'/check',0,33),(99,'Dh',0,15),(100,'565',0,26),(101,'Sh',1,15),(102,'654',0,26),(103,'Sj',1,15),(104,'54',0,26),(105,'Sh',1,15),(106,'5',0,26),(107,'Bw',1,15),(108,'54',0,26),(109,'54',0,26),(110,'54',0,26),(111,'45',0,26),(112,'45',0,26),(113,'87',0,26),(114,'5146203.',0,26),(115,'4789562+3',0,26),(116,'4985263.',0,26),(117,'Task 1',1,35),(118,'Text todo',0,24),(119,'Jahdhfhsjsf',0,24);
/*!40000 ALTER TABLE `todos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `chat_id` int DEFAULT NULL,
  `status` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_pk` (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,262247413,NULL,'2024-07-22 17:42:52'),(14,1578982344,NULL,'2024-07-22 19:59:18'),(15,1202500985,NULL,'2024-07-22 19:59:11'),(16,1487755257,NULL,'2024-07-22 19:56:02'),(17,1746546661,NULL,'2024-07-22 19:56:21'),(18,791952688,NULL,'2024-07-22 19:56:28'),(20,2015894982,NULL,'2024-07-22 19:58:44'),(21,863518385,'add','2024-07-22 19:56:51'),(24,1818683343,NULL,'2024-07-22 20:01:26'),(26,1015339329,NULL,'2024-07-22 19:58:43'),(28,939524628,NULL,'2024-07-22 19:58:56'),(29,1752436700,NULL,'2024-07-22 19:59:09'),(33,1654124831,NULL,'2024-07-22 19:59:41'),(34,931026030,NULL,'2024-07-22 20:00:05'),(35,1730258303,NULL,'2024-07-22 20:00:23');
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

-- Dump completed on 2024-07-22 20:39:45
