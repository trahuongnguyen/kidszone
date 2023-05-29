-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: e_project_1
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
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `audio` varchar(45) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_categories_details_idx` (`category_id`),
  CONSTRAINT `FK_categories_details` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details`
--

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` VALUES (1,2,'A','character/a.png','char/a.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(2,2,'B','character/b.png','char/b.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(3,2,'C','character/c.png','char/c.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(4,2,'D','character/d.png','char/d.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(5,2,'E','character/e.png','char/e.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(6,2,'F','character/f.png','char/f.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(7,2,'G','character/g.png','char/g.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(8,2,'H','character/h.png','char/h.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(9,2,'I','character/i.png','char/i.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(10,2,'J','character/j.png','char/j.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(11,2,'K','character/k.png','char/k.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(12,2,'L','character/l.png','char/al.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(13,2,'M','character/m.png','char/m.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(14,2,'N','character/n.png','char/n.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(15,2,'O','character/o.png','char/o.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(16,2,'P','character/p.png','char/p.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(17,2,'Q','character/q.png','char/q.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(18,2,'R','character/r.png','char/r.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(19,2,'S','character/s.png','char/s.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(20,2,'T','character/t.png','char/t.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(21,2,'U','character/u.png','char/u.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(22,2,'V','character/v.png','char/v.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(23,2,'W','character/w.png','char/w.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(24,2,'X','character/x.png','char/x.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(25,2,'Y','character/y.png','char/y.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(26,2,'Z','character/z.png','char/z.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(27,6,'Airplane','transportation/airplane.png','transportation/airplane.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(28,6,'Ambulance','transportation/ambulance.png','transportation/ambulance.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(29,6,'Bicycle','transportation/bicycle.png','transportation/bicycle.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(30,6,'Bus','transportation/bus.png','transportation/bus.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(31,6,'Car','transportation/car.png','transportation/car.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(32,6,'Fire Truck','transportation/fire_truck.png','transportation/fire_truck.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(33,6,'Motor','transportation/motor.png','transportation/motor.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(34,6,'Police Car','transportation/police_car.png','transportation/police_car.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(35,6,'Ship','transportation/ship.png','transportation/ship.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(36,6,'Train','transportation/train.png','transportation/train.mp3','2023-05-15 14:27:52','2023-05-15 14:27:52',0),(37,1,'Zero','numberic/0.png','numberic/0.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(38,1,'One','numberic/1.png','numberic/1.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(39,1,'Two','numberic/2.png','numberic/2.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(40,1,'Three','numberic/3.png','numberic/3.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(41,1,'Four','numberic/4.png','numberic/4.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(42,1,'Five','numberic/5.png','numberic/5.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(43,1,'Six','numberic/6.png','numberic/6.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(44,1,'Seven','numberic/7.png','numberic/7.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(45,1,'Eight','numberic/8.png','numberic/8.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(46,1,'Nine','numberic/9.png','numberic/9.mp3','2023-05-15 14:39:27','2023-05-15 14:39:27',0),(47,7,'Circle','shape/circle.png','shape/circle.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(48,7,'Triangle','shape/triangle.png','shape/triangle.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(49,7,'Square','shape/square.png','shape/square.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(50,7,'Rectangle','shape/rectangle.png','shape/rectangle.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(51,7,'Heart','shape/heart.png','shape/heart.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(52,7,'Star','shape/star.png','shape/star.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(53,7,'Rhombus','shape/rhombus.png','shape/rhombus.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(54,3,'Apple','fruit/apple.png','fruit/apple.mp3','2023-05-16 14:17:06','2023-05-16 14:17:06',0),(55,3,'Avocado','fruit/avocado.png','fruit/avocado.mp3','2023-05-16 14:17:06','2023-05-16 14:17:06',0),(56,3,'Grape','fruit/grape.png','fruit/grape.mp3','2023-05-16 14:17:06','2023-05-16 14:17:06',0),(57,3,'Guava','fruit/guava.png','fruit/guava.mp3','2023-05-16 14:17:06','2023-05-16 14:17:06',0),(58,3,'Jackfruit','fruit/jackfruit.png','fruit/jackfruit.mp3','2023-05-16 14:17:06','2023-05-16 14:17:06',0),(59,3,'Lychee','fruit/lychee.png','fruit/lychee.mp3','2023-05-16 14:17:06','2023-05-16 14:17:06',0),(60,3,'Orange','fruit/orange.png','fruit/orange.mp3','2023-05-16 14:17:06','2023-05-16 14:17:06',0),(61,3,'Pineapple','fruit/pineapple.png','fruit/pineapple.mp3','2023-05-16 14:17:06','2023-05-16 14:17:06',0),(62,3,'Watermelon','fruit/watermelon.png','fruit/watermelon.mp3','2023-05-16 14:17:06','2023-05-16 14:17:06',0),(63,4,'Alligator','character/a.png','animal/alligator.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(64,4,'Bear','character/b.png','animal/bear.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(65,4,'Cat','character/c.png','animal/cat.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(66,4,'Deer','character/d.png','animal/deer.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(67,4,'Elephant','character/e.png','animal/elephant.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(68,4,'Flamingo','character/f.png','animal/flamingo.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(69,4,'Giraffe','character/g.png','animal/giraffe.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(70,4,'Horse','character/h.png','animal/horse.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(71,4,'Iguana','character/i.png','animal/iguana.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(72,4,'Jaguar','character/j.png','animal/jaguar.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(73,4,'Koala','character/k.png','animal/koala.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(74,4,'Lion','character/l.png','animal/lion.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(75,4,'Monkey','character/m.png','animal/monkey.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(76,4,'Numbat','character/n.png','animal/numbat.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(77,4,'Owl','character/o.png','animal/owl.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(78,4,'Penguin','character/p.png','animal/penguin.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(79,4,'Quail','character/q.png','animal/quail.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(80,4,'Rabbit','character/r.png','animal/rabbit.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(81,4,'Snake','character/s.png','animal/snake.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(82,4,'Turtle','character/t.png','animal/turtle.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(83,4,'Unicorn','character/u.png','animal/unicorn.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(84,4,'Vulture','character/v.png','animal/vulture.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(85,4,'Whale','character/w.png','animal/whale.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(86,4,'Xerus','character/x.png','animal/xerus.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(87,4,'Yak','character/y.png','animal/yak.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(88,4,'Zebra','character/z.png','animal/zebra.mp3','2023-05-13 21:08:24','2023-05-13 21:08:24',0),(89,5,'Orange','shape/circle.png','color/orange.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(90,5,'Green','shape/triangle.png','color/green.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(91,5,'Purple','shape/square.png','color/purple.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(92,5,'Brown','shape/rectangle.png','color/brown.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(93,5,'Red','shape/heart.png','color/red.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(94,5,'Yellow','shape/star.png','color/yellow.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0),(95,5,'Blue','shape/rhombus.png','color/blue.mp3','2023-05-15 17:43:40','2023-05-15 17:43:40',0);
/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-29  8:18:48
