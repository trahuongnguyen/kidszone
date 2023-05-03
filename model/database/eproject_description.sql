-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: eproject
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `description`
--

DROP TABLE IF EXISTS `description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `description` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(200) DEFAULT NULL,
  `cateDetail_id` int DEFAULT NULL,
  `image` varchar(40) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_detail_idx` (`cateDetail_id`),
  CONSTRAINT `FK_detail` FOREIGN KEY (`cateDetail_id`) REFERENCES `categories_details` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `description`
--

LOCK TABLES `description` WRITE;
/*!40000 ALTER TABLE `description` DISABLE KEYS */;
INSERT INTO `description` VALUES (1,'/ei/',1,NULL,'2023-04-27 17:00:00',NULL,0),(2,'/bi:/',2,NULL,'2023-04-27 17:00:00',NULL,0),(3,'/si:/',3,NULL,'2023-04-27 17:00:00',NULL,0),(4,'/di:/',4,NULL,'2023-04-27 17:00:00',NULL,0),(5,'/i:/',5,NULL,'2023-04-27 17:00:00',NULL,0),(6,'/ɛf/',6,NULL,'2023-04-27 17:00:00',NULL,0),(7,'/dʒi:/',7,NULL,'2023-04-27 17:00:00',NULL,0),(8,'/eɪtʃ/',8,NULL,'2023-04-27 17:00:00',NULL,0),(9,'/ai/',9,NULL,'2023-04-27 17:00:00',NULL,0),(10,'/dʒeɪ/',10,NULL,'2023-04-27 17:00:00',NULL,0),(11,'/kei/',11,NULL,'2023-04-27 17:00:00',NULL,0),(12,'/ɛl/',12,NULL,'2023-04-27 17:00:00',NULL,0),(13,'/ɛm/',13,NULL,'2023-04-27 17:00:00',NULL,0),(14,'/ɛn/',14,NULL,'2023-04-27 17:00:00',NULL,0),(15,'/oʊ/',15,NULL,'2023-04-27 17:00:00',NULL,0),(16,'/pi:/',16,NULL,'2023-04-27 17:00:00',NULL,0),(17,'/kju:/',17,NULL,'2023-04-27 17:00:00',NULL,0),(18,'/ɑr/',18,NULL,'2023-04-27 17:00:00',NULL,0),(19,'/ɛs/',19,NULL,'2023-04-27 17:00:00',NULL,0),(20,'/ti:/',20,NULL,'2023-04-27 17:00:00',NULL,0),(21,'/ju:/',21,NULL,'2023-04-27 17:00:00',NULL,0),(22,'/vi:/',22,NULL,'2023-04-27 17:00:00',NULL,0),(23,'/ˈdʌbəl.ju:/',23,NULL,'2023-04-27 17:00:00',NULL,0),(24,'/ɛks/',24,NULL,'2023-04-27 17:00:00',NULL,0),(25,'/waɪ/',25,NULL,'2023-04-27 17:00:00',NULL,0),(26,'/zɛd/',26,NULL,'2023-04-27 17:00:00',NULL,0),(27,'one',27,NULL,'2023-04-27 17:00:00',NULL,0),(28,'two',28,NULL,'2023-04-27 17:00:00',NULL,0),(29,'three',29,NULL,'2023-04-27 17:00:00',NULL,0),(30,'four',30,NULL,'2023-04-27 17:00:00',NULL,0),(31,'five',31,NULL,'2023-04-27 17:00:00',NULL,0),(32,'six',32,NULL,'2023-04-27 17:00:00',NULL,0),(33,'seven',33,NULL,'2023-04-27 17:00:00',NULL,0),(34,'eight',34,NULL,'2023-04-27 17:00:00',NULL,0),(35,'nine',35,NULL,'2023-04-27 17:00:00',NULL,0),(36,'ten',36,NULL,'2023-04-27 17:00:00',NULL,0),(37,'eleven',37,NULL,'2023-04-27 17:00:00',NULL,0),(38,'twelve',38,NULL,'2023-04-27 17:00:00',NULL,0),(39,'thirt-teen',39,NULL,'2023-04-27 17:00:00',NULL,0),(40,'four-teen',40,NULL,'2023-04-27 17:00:00',NULL,0),(41,'fif-teen',41,NULL,'2023-04-27 17:00:00',NULL,0),(42,'six-teen',42,NULL,'2023-04-27 17:00:00',NULL,0),(43,'seven-teen',43,NULL,'2023-04-27 17:00:00',NULL,0),(44,'eight-teen',44,NULL,'2023-04-27 17:00:00',NULL,0),(45,'nine-teen',45,NULL,'2023-04-27 17:00:00',NULL,0),(46,'twen-ty',46,NULL,'2023-04-27 17:00:00',NULL,0),(47,'twen-ty one',47,NULL,'2023-04-27 17:00:00',NULL,0),(48,'twen-ty two',48,NULL,'2023-04-27 17:00:00',NULL,0),(49,'twen-ty three',49,NULL,'2023-04-27 17:00:00',NULL,0),(50,'twen-ty four',50,NULL,'2023-04-27 17:00:00',NULL,0),(51,'twen-ty five',51,NULL,'2023-04-27 17:00:00',NULL,0),(52,'twen-ty six',52,NULL,'2023-04-27 17:00:00',NULL,0),(53,'twen-ty seven',53,NULL,'2023-04-27 17:00:00',NULL,0),(54,'twen-ty eight',54,NULL,'2023-04-27 17:00:00',NULL,0),(55,'twen-ty nine',55,NULL,'2023-04-27 17:00:00',NULL,0),(56,'thirt-ty',56,NULL,'2023-04-27 17:00:00',NULL,0),(57,'thirt-ty one',57,NULL,'2023-04-27 17:00:00',NULL,0),(58,'thirt-ty two',58,NULL,'2023-04-27 17:00:00',NULL,0),(59,'thirt-ty three',59,NULL,'2023-04-27 17:00:00',NULL,0),(60,'thirt-ty four',60,NULL,'2023-04-27 17:00:00',NULL,0),(61,'thirt-ty five',61,NULL,'2023-04-27 17:00:00',NULL,0),(62,'thirt-ty six',62,NULL,'2023-04-27 17:00:00',NULL,0),(63,'thirt-ty seven',63,NULL,'2023-04-27 17:00:00',NULL,0),(64,'thirt-ty eight',64,NULL,'2023-04-27 17:00:00',NULL,0),(65,'thirt-ty nine',65,NULL,'2023-04-27 17:00:00',NULL,0),(66,'four-ty',66,NULL,'2023-04-27 17:00:00',NULL,0),(67,'four-ty one',67,NULL,'2023-04-27 17:00:00',NULL,0),(68,'four-ty two',68,NULL,'2023-04-27 17:00:00',NULL,0),(69,'four-ty three',69,NULL,'2023-04-27 17:00:00',NULL,0),(70,'four-ty four',70,NULL,'2023-04-27 17:00:00',NULL,0),(71,'four-ty five',71,NULL,'2023-04-27 17:00:00',NULL,0),(72,'four-ty six',72,NULL,'2023-04-27 17:00:00',NULL,0),(73,'four-ty seven',73,NULL,'2023-04-27 17:00:00',NULL,0),(74,'four-ty eight',74,NULL,'2023-04-27 17:00:00',NULL,0),(75,'four-ty nine',75,NULL,'2023-04-27 17:00:00',NULL,0),(76,'fif-ty',76,NULL,'2023-04-27 17:00:00',NULL,0),(77,'fif-ty one',77,NULL,'2023-04-27 17:00:00',NULL,0),(78,'fif-ty two',78,NULL,'2023-04-27 17:00:00',NULL,0),(79,'fif-ty three',79,NULL,'2023-04-27 17:00:00',NULL,0),(80,'fif-ty four',80,NULL,'2023-04-27 17:00:00',NULL,0),(81,'fif-ty five',81,NULL,'2023-04-27 17:00:00',NULL,0),(82,'fif-ty six',82,NULL,'2023-04-27 17:00:00',NULL,0),(83,'fif-ty seven',83,NULL,'2023-04-27 17:00:00',NULL,0),(84,'fif-ty eight',84,NULL,'2023-04-27 17:00:00',NULL,0),(85,'fif-ty nine',85,NULL,'2023-04-27 17:00:00',NULL,0),(86,'six-ty',86,NULL,'2023-04-27 17:00:00',NULL,0),(87,'six-ty one',87,NULL,'2023-04-27 17:00:00',NULL,0),(88,'six-ty two',88,NULL,'2023-04-27 17:00:00',NULL,0),(89,'six-ty three',89,NULL,'2023-04-27 17:00:00',NULL,0),(90,'six-ty four',90,NULL,'2023-04-27 17:00:00',NULL,0),(91,'six-ty five',91,NULL,'2023-04-27 17:00:00',NULL,0),(92,'six-ty six',92,NULL,'2023-04-27 17:00:00',NULL,0),(93,'six-ty seven',93,NULL,'2023-04-27 17:00:00',NULL,0),(94,'six-ty eight',94,NULL,'2023-04-27 17:00:00',NULL,0),(95,'six-ty nine',95,NULL,'2023-04-27 17:00:00',NULL,0),(96,'seven-ty',96,NULL,'2023-04-27 17:00:00',NULL,0),(97,'seven-ty one',97,NULL,'2023-04-27 17:00:00',NULL,0),(98,'seven-ty two',98,NULL,'2023-04-27 17:00:00',NULL,0),(99,'seven-ty three',99,NULL,'2023-04-27 17:00:00',NULL,0),(100,'seven-ty four',100,NULL,'2023-04-27 17:00:00',NULL,0),(101,'seven-ty five',101,NULL,'2023-04-27 17:00:00',NULL,0),(102,'seven-ty six',102,NULL,'2023-04-27 17:00:00',NULL,0),(103,'seven-ty seven',103,NULL,'2023-04-27 17:00:00',NULL,0),(104,'seven-ty eight',104,NULL,'2023-04-27 17:00:00',NULL,0),(105,'seven-ty nine',105,NULL,'2023-04-27 17:00:00',NULL,0),(106,'eight-ty',106,NULL,'2023-04-27 17:00:00',NULL,0),(107,'eight-ty one',107,NULL,'2023-04-27 17:00:00',NULL,0),(108,'eight-ty two',108,NULL,'2023-04-27 17:00:00',NULL,0),(109,'eight-ty three',109,NULL,'2023-04-27 17:00:00',NULL,0),(110,'eight-ty four',110,NULL,'2023-04-27 17:00:00',NULL,0),(111,'eight-ty five',111,NULL,'2023-04-27 17:00:00',NULL,0),(112,'eight-ty six',112,NULL,'2023-04-27 17:00:00',NULL,0),(113,'eight-ty seven',113,NULL,'2023-04-27 17:00:00',NULL,0),(114,'eight-ty eight',114,NULL,'2023-04-27 17:00:00',NULL,0),(115,'eight-ty nine',115,NULL,'2023-04-27 17:00:00',NULL,0),(116,'nine-ty',116,NULL,'2023-04-27 17:00:00',NULL,0),(117,'nine-ty one',117,NULL,'2023-04-27 17:00:00',NULL,0),(118,'nine-ty two',118,NULL,'2023-04-27 17:00:00',NULL,0),(119,'nine-ty three',119,NULL,'2023-04-27 17:00:00',NULL,0),(120,'nine-ty four',120,NULL,'2023-04-27 17:00:00',NULL,0),(121,'nine-ty five',121,NULL,'2023-04-27 17:00:00',NULL,0),(122,'nine-ty six',122,NULL,'2023-04-27 17:00:00',NULL,0),(123,'nine-ty seven',123,NULL,'2023-04-27 17:00:00',NULL,0),(124,'nine-ty eight',124,NULL,'2023-04-27 17:00:00',NULL,0),(125,'nine-ty nine',125,NULL,'2023-04-27 17:00:00',NULL,0),(126,'one-hundred',126,NULL,'2023-04-27 17:00:00',NULL,0);
/*!40000 ALTER TABLE `description` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-03 23:04:57
