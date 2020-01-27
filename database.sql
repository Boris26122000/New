-- MySQL dump 10.13  Distrib 8.0.18, for Linux (x86_64)
--
-- Host: localhost    Database: KOLOMOIETS_db
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Shoe'),(2,'Bags'),(3,'Shirts'),(4,'T-Shirts'),(5,'Coat'),(6,'Jumper');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `fullPrice` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Ordrer_idx` (`userId`),
  KEY `productId_idx` (`productId`),
  CONSTRAINT `productId` FOREIGN KEY (`productId`) REFERENCES `product` (`id`),
  CONSTRAINT `userId` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `image` varchar(245) NOT NULL,
  `description` varchar(245) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id_idx` (`category_id`),
  CONSTRAINT `fk_product_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Shoe',1,34,232,4,'dfgdfh','DUOYANGJIASHA Fashion Brand Best Show Women\'s Comfortable Leather Loafers Casual Round Toe Moccasins Wild Driving Slip On Flats Fashion Comfortable Shoes'),(2,'Bag',2,3,123,3,'dfgdfdbfb','Travel Laptop Backpack Water Resistant Anti-Theft Bag with USB Charging Port and Lock 14/15.6 Inch Computer Business Backpacks for Women Men College School Student Gift,Bookbag Casual Hiking Daypack'),(3,'Shirt',3,43,2234,6,'yhfgh','Pervobs Mens Long Shirts, Big 2018 Newest Men Casual Long Sleeve Shirts Camouflage Print Formal Pullover Top'),(4,'T-Shirt',4,11,23445,5,'weds','Our v-necks are a stylish take on the classic crew. If you are looking for a comfortable undershirt that stays hidden, you will love our v-necks.'),(5,'Coat',5,890,567,78,'ghfgh','Heavyweight quilted puffer jacket features a thickened poly filler provides better insulation and extra down-like warmth; It maintains high thermal performance in cold and wet conditions without being heavy & bulky'),(6,'Jumper',6,439,3456,223,'fdsfsd','Heavyweight quilted puffer jacket features a thickened poly filler provides better insulation and extra down-like warmth; It maintains high thermal performance in cold and wet conditions without being heavy & bulky'),(7,'Shoe2',1,943,989,23,'fsdfdsf','DUOYANGJIASHA Fashion Brand Best Show Women\'s Comfortable Leather Loafers Casual Round Toe Moccasins Wild Driving Slip On Flats Fashion Comfortable Shoes'),(8,'Bag2',2,874,98,12,'kjhbnm','Travel Laptop Backpack Water Resistant Anti-Theft Bag with USB Charging Port and Lock 14/15.6 Inch Computer Business Backpacks for Women Men College School Student Gift,Bookbag Casual Hiking Daypack'),(9,'Shirt2',3,359,123,43,'kjhbnmk','Pervobs Mens Long Shirts, Big 2018 Newest Men Casual Long Sleeve Shirts Camouflage Print Formal Pullover Top'),(10,'T-Shirt2',4,823,2312,23,'jlkhfkja;kk','Our v-necks are a stylish take on the classic crew. If you are looking for a comfortable undershirt that stays hidden, you will love our v-necks.'),(11,'Coat2',5,345,541,82,'sdsds','Heavyweight quilted puffer jacket features a thickened poly filler provides better insulation and extra down-like warmth; It maintains high thermal performance in cold and wet conditions without being heavy & bulky'),(12,'Jumper2',6,9890,231,98,'sfdsf','Heavyweight quilted puffer jacket features a thickened poly filler provides better insulation and extra down-like warmth; It maintains high thermal performance in cold and wet conditions without being heavy & bulky'),(13,'Shoe3',1,98423,244,34,'m;k;lk;l','kjhygfcvbnhjmk,l.;;;;;;;;;;;;;;;;;;;;;;;;;;;;;kjhbgjuyhgbnjkiuhnjk'),(14,'Bag3',2,767,567,6,'gvbnhg','trewsxcvbnm,lkoiuytrdcfvbnm,kjtgrfdcvbnm,kjhgrfedsvbnm'),(15,'Shirt3',3,6755,3456,222,'hbgv bnbgv','lkiujytredsxcvbnm,.;/olikuytredsdrftyuiol;/.,mnbvcxswertyuikoloiuytrfedsxcvbnm,kk'),(16,'T-Shirt3',4,67868,12345,976,'mnhgvbnjk','uyhgbnmkiuytredfghjikolp;.,mnbvcdsertyuiop;likujtrfdsdcvbnmkloiuytrfdfghj'),(17,'Coat3',5,7556,6786,686890,'gfcvbn','hgfvbnmkiuytrertyuiop[\'/.,mnbvcxsaqwertyuiol,mnbvcdxsdrftgyhjk'),(18,'Jumper3',6,7923,67858,7896,'hgfcvb','hgfdcvbnmlkiuytrtyuiol,mnbvcxsaqwertyuikjhgfcvgtfgtfvbnhjuytgfvbnhfvbnhjytgfvbghytrfghytfvbhtgfvbhygv');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `idOrder` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (14,'fsdfsdfgdfcg','dfgfddf','admin','$2y$10$rYx80ShvE8ctdExAAkVMC.gFyfN9Z7NxZqQeCjiaRyk6ArJJVllWq',NULL),(16,'fsdfsdfgdfcg','dfgfddf','a','$2y$10$ocKxcnWD2VRgz8BbRJbDxubLXrRt84AwUmWPpIOreCHz5OKUDlb26',NULL),(17,'fsdfsdfgdfcg','fgdfbcgdgsddfszfxdg','2','$2y$10$NVDG08UwMRvI792i3yPnUezSTobbnEx5w55nGwXvJdKdx6xo1x/ry',NULL),(18,'fsdfsdfgdfcg','dfgfddf','3','$2y$10$zyCox.WsrSEvNnXCD4eC1uNOdI2ITDkov0jeQDqo2uta0qQ0McnxS',NULL),(20,'fsdfsdfgdfcg','fgdfbcgdgsddfszfxdg','admin345','$2y$10$7G1qxzBRguD4hHvfFKqLpelV30iIeSrL/PX2JIhhpOrUbssqKWf/K',NULL);
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

-- Dump completed on 2020-01-27 20:18:49
