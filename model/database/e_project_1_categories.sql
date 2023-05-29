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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `image` varchar(45) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Number','With the number section, children will be familiar with numbers - it is also a new knowledge that almost every child wants to discover. Parents should introduce their children to numbers from an early age, which help prepare for the child to enter grade 1. In the number learning part, we will divide it into 2 parts, 1-digit numbers and 2-digit numbers. To learn more about it, let\'s click on the \"Numbers\" section to learn.','number.jpg','2023-05-13 18:53:12','2023-05-13 18:53:12',0),(2,'Alphabet','With the letter section, children will discover 26 letters matching with 26 cute and funny animals. There are many ways for children to learn letters effectively, such as learning through songs, through stories, through nursery rhymes,... Coming to Kidzone, we always want children to learn in the most effective way. , in order not to cause boredom when learning for children, each letter is animated with animal images. For example, the letter A is taken with the image of \"crocodile\". This also contributes to improving memory for children, when learning combined with images, children will remember longer.','alphabet.png','2023-05-15 07:17:25','2023-05-15 07:17:25',0),(3,'Fruit','Oranges, apples, bananas, from berries to dried, from sweet to sour, they will all be introduced in this part. They are all familiar fruits that children have met in daily life, but are attached with cute and funny images so they will not make them feel bored with the lesson.','fruit.png','2023-05-15 07:17:25','2023-05-15 07:17:25',0),(4,'Animals','Welcome to our animal world, in there children feel like they are lost in a fairy forest with animals from the sky, the ground to the water. Children will get to know cute animals such as a bird, a dog or a turtle and a lovely cat. Children can enjoy learning and having fun  from the animals they have met in real life and the animals that they have not known.','animal.png','2023-05-15 07:17:25','2023-05-15 07:17:25',0),(5,'Colors','In our daily life, there are so many beautiful colors around us, colors that make the world more vibrant and beautiful. For example, the blue of the sky, of the trees, or the yellow of autumn leaves, of the bright yellow sun, etc. There are many other beautiful colors, but first, let\'s learn about the 12 basic colors first.','color.png','2023-05-15 07:17:25','2023-05-15 07:17:25',0),(6,'Vehicles','Do you know any basic vehicle? There are many different types of vehicle and it also operates on different roads, for example: water, road, air and railway. We invite you to learn more.','vehicle.png','2023-05-15 07:17:25','2023-05-15 07:17:25',0),(7,'Geometry','From the lines and curves that make up different geometries, children will learn about basic low-level geometry here, like squares, circles or triangles, after each lesson they can create different shapes together.',NULL,'2023-05-15 07:17:25','2023-05-15 07:17:25',0);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
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
