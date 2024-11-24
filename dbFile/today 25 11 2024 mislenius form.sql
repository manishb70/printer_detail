-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: for_office
-- ------------------------------------------------------
-- Server version	9.0.1

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
-- Table structure for table `add_emp_attribute`
--

DROP TABLE IF EXISTS `add_emp_attribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `add_emp_attribute` (
  `s_no` int NOT NULL AUTO_INCREMENT,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `department_name` varchar(45) DEFAULT NULL,
  `job_role` varchar(45) DEFAULT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add_emp_attribute`
--

LOCK TABLES `add_emp_attribute` WRITE;
/*!40000 ALTER TABLE `add_emp_attribute` DISABLE KEYS */;
/*!40000 ALTER TABLE `add_emp_attribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `address_details_tbl`
--

DROP TABLE IF EXISTS `address_details_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `address_details_tbl` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `site_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `site_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `site_description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `add_line1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `add_line2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `postal_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `city_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_preson_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address_details_tbl`
--

LOCK TABLES `address_details_tbl` WRITE;
/*!40000 ALTER TABLE `address_details_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `address_details_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_roles`
--

DROP TABLE IF EXISTS `admin_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_roles` (
  `S_NO` int NOT NULL AUTO_INCREMENT,
  `admin_id` int DEFAULT NULL,
  `user_viewOnly` tinyint(1) DEFAULT NULL,
  `user_write` tinyint(1) DEFAULT NULL,
  `admin_viewOnly` tinyint(1) DEFAULT NULL,
  `store_manager` tinyint(1) DEFAULT NULL,
  `store_isseuer` tinyint(1) DEFAULT NULL,
  `store_genrate` tinyint(1) DEFAULT NULL,
  `user_write_start_date` date DEFAULT NULL,
  `user_write_end_date` date DEFAULT NULL,
  `admin_write` tinyint(1) DEFAULT NULL,
  `PO_appover` tinyint(1) DEFAULT NULL,
  `user_view_start_date` date DEFAULT NULL,
  `user_view_end_date` date DEFAULT NULL,
  `admin_write_start_date` date DEFAULT NULL,
  `admin_write_end_date` date DEFAULT NULL,
  `store_manager_endDate` date DEFAULT NULL,
  `admin_view_start_date` date DEFAULT NULL,
  `admin_view_end_date` date DEFAULT NULL,
  `store_manager_startdate` date DEFAULT NULL,
  `store_issuer_startDate` date DEFAULT NULL,
  `store_issuer_endDate` date DEFAULT NULL,
  `store_genrate_startDate` date DEFAULT NULL,
  `store_genrate_endDate` date DEFAULT NULL,
  PRIMARY KEY (`S_NO`),
  UNIQUE KEY `admin_id_UNIQUE` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,1,1,1,1,1,1,1,'2000-01-01','2000-01-01',1,1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(2,5,0,0,0,0,0,0,'2000-01-01','2000-01-01',0,1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(3,6,1,0,0,NULL,NULL,NULL,'2000-01-11','2000-01-01',1,1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(4,2,1,1,1,0,0,1,'2000-01-01','2000-01-01',1,0,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(5,4,1,0,1,NULL,NULL,NULL,'2023-10-11','2000-01-13',1,1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(6,3,1,0,1,0,0,0,'2000-01-01','2000-01-01',1,1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(7,100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,16,1,1,1,1,1,1,'2000-01-01','2000-01-01',1,1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asl_header_level`
--

DROP TABLE IF EXISTS `asl_header_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asl_header_level` (
  `header_id` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(45) DEFAULT NULL,
  `short_discription` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`header_id`),
  UNIQUE KEY `item_code_UNIQUE` (`item_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asl_header_level`
--

LOCK TABLES `asl_header_level` WRITE;
/*!40000 ALTER TABLE `asl_header_level` DISABLE KEYS */;
INSERT INTO `asl_header_level` VALUES (1,'EL-HU-UH-UH-UH-UH-UH-UH-UH-UH','BULB-HUH-UH-UH-UH-UH','NOW()',NULL,NULL,NULL),(2,'EL-DE-12-76-JI-ON-JA-10-10-DE','BULB-DELH-12-767-JI-ONG',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `asl_header_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asl_line_data`
--

DROP TABLE IF EXISTS `asl_line_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asl_line_data` (
  `S.no` int NOT NULL AUTO_INCREMENT,
  `header_id` varchar(45) DEFAULT NULL,
  `Item code` varchar(45) DEFAULT NULL,
  `short_description` varchar(45) DEFAULT NULL,
  `Warehouse` varchar(45) DEFAULT NULL,
  `Attribute` varchar(45) DEFAULT NULL,
  `vendor_code` varchar(45) DEFAULT NULL,
  `Start date` varchar(45) DEFAULT NULL,
  `End date` varchar(45) DEFAULT NULL,
  `Supplier E- mail id` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `vendor_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`S.no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asl_line_data`
--

LOCK TABLES `asl_line_data` WRITE;
/*!40000 ALTER TABLE `asl_line_data` DISABLE KEYS */;
INSERT INTO `asl_line_data` VALUES (1,'1','EL-HU-UH-UH-UH-UH-UH-UH-UH-UH','BULB-HUH-UH-UH-UH-UH',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1'),(3,'1','EL-HU-UH-UH-UH-UH-UH-UH-UH-UH','BULB-HUH-UH-UH-UH-UH',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2'),(4,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `asl_line_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banking_details_tbl`
--

DROP TABLE IF EXISTS `banking_details_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banking_details_tbl` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `site_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bank_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bank_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bank_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banking_details_tbl`
--

LOCK TABLES `banking_details_tbl` WRITE;
/*!40000 ALTER TABLE `banking_details_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `banking_details_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bom_hedar_detail`
--

DROP TABLE IF EXISTS `bom_hedar_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bom_hedar_detail` (
  `header_id` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(50) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `version` varchar(45) DEFAULT NULL,
  `percentage` varchar(50) DEFAULT NULL,
  `wharehouse_` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(50) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `bom_hedar_detailcol` varchar(45) DEFAULT NULL,
  `revision` varchar(450) DEFAULT NULL,
  `products` varchar(45) DEFAULT NULL,
  `organizin_mapping` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`header_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bom_hedar_detail`
--

LOCK TABLES `bom_hedar_detail` WRITE;
/*!40000 ALTER TABLE `bom_hedar_detail` DISABLE KEYS */;
INSERT INTO `bom_hedar_detail` VALUES (1,'123','manish','v1','100','delhi',NULL,NULL,NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(2,'123','manish','v1','100','delhi','SYSTEM','2024-07-31','SYSTEM','2024-07-31',NULL,100,NULL,NULL,NULL,NULL),(3,'7676','example','v1','100','GURGAO','SYSTEM','2024-07-31','SYSTEM','2024-07-31',NULL,100,NULL,NULL,NULL,NULL),(4,'7676','example','v1','100','GURGAO','SYSTEM','2024-07-31','SYSTEM','2024-07-31',NULL,100,NULL,NULL,NULL,NULL),(5,'7676','example','v1','100','GURGAO','SYSTEM','2024-07-31','SYSTEM','2024-07-31',NULL,100,NULL,NULL,NULL,NULL),(6,'123','abcitem1','v1','100','delhi','SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,100,NULL,NULL,NULL,NULL),(7,'390','example2','v1','100','noida','SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,100,NULL,NULL,NULL,NULL),(8,'390','example2','v1','100','noida','SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,100,NULL,NULL,NULL,NULL),(9,'99','example3','v1','100','okhla','SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,100,NULL,NULL,NULL,NULL),(10,'1','examle3','v1','1000','delhi','SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,100,NULL,NULL,NULL,NULL),(11,'991','example','v1','100','delhi','SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,100,NULL,NULL,NULL,NULL),(12,NULL,'itm',NULL,'hi','hi','admin','2024-09-01 14:55:25',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(13,NULL,'itm',NULL,'hi','hi','admin','2024-09-01 14:56:24',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(14,NULL,'itm',NULL,'hi','hi','admin','2024-09-01 14:56:49',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(15,NULL,'ih',NULL,'ih','ih','admin','2024-09-01 14:57:02',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(16,NULL,'ih',NULL,'ih','ih','admin','2024-09-01 14:57:41',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(17,NULL,'ih',NULL,'ih','ih','admin','2024-09-01 14:58:36',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(18,NULL,'item name',NULL,'pern','nj','admin','2024-09-01 14:59:09',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(19,NULL,'item name',NULL,'pern','nj','admin','2024-09-01 14:59:20',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(20,NULL,'item name',NULL,'pern','nj','admin','2024-09-01 14:59:45',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(21,NULL,'item name',NULL,'percentga','k','admin','2024-09-01 15:00:10',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(22,NULL,'hiu',NULL,'hui','i','admin','2024-09-01 15:01:36',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(23,NULL,'hiu',NULL,'hui','i','admin','2024-09-01 15:01:56',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(24,NULL,'ij',NULL,'ui','giu','admin','2024-09-01 15:02:09',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(25,NULL,'ij',NULL,'ui','dwdw','admin','2024-09-01 15:02:19',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(26,NULL,'ij',NULL,'ui','dwdw','admin','2024-09-01 15:02:34',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(27,NULL,'ij',NULL,'ui','dwdw','admin','2024-09-01 15:03:21',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(28,NULL,'ij',NULL,'ui','dwdw','admin','2024-09-01 15:09:26',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(29,NULL,'jdiwio',NULL,'hi','oih','admin','2024-09-01 15:15:56',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(30,NULL,'jdiwio',NULL,'hi','oih','admin','2024-09-01 15:19:30',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(31,NULL,'jdiwio',NULL,'hi','oih','admin','2024-09-01 15:19:31',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(32,NULL,'jdiwio',NULL,'hi','oih','admin','2024-09-01 15:20:27',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(33,NULL,'nj',NULL,'jn','nj','admin','2024-09-01 15:39:23',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(34,NULL,'nj',NULL,'jn','nj','admin','2024-09-01 15:39:45',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(35,NULL,'nj',NULL,'jn','nj','admin','2024-09-01 15:39:47',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(36,NULL,'nj',NULL,'jn','nj','admin','2024-09-01 15:41:02',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(37,NULL,'nj',NULL,'jn','nj','admin','2024-09-01 15:41:04',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(38,NULL,'nj',NULL,'jn','nj','admin','2024-09-01 15:42:19',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(39,NULL,'nj',NULL,'jn','nj','admin','2024-09-01 15:48:55',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(40,NULL,'nj',NULL,'jn','nj','admin','2024-09-01 15:49:32',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(41,NULL,'ji',NULL,'ji','ni','admin','2024-09-01 15:50:21',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(42,NULL,'ji',NULL,'ji','ni','admin','2024-09-01 15:50:56',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(43,NULL,'chandler',NULL,'100','jhj','admin','2024-09-01 15:52:08',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(44,NULL,'ji',NULL,'ij','mi','admin','2024-09-01 15:54:36',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(45,NULL,'ji',NULL,'ji','mo','admin','2024-09-05 15:15:28',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(46,NULL,'ji',NULL,'ji','mo','admin','2024-09-05 15:15:57',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(47,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ','EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',NULL,'009','1','admin','2024-09-15 09:11:11',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(48,'SELECT thias','chanler',NULL,'100','2','admin','2024-09-15 09:32:50',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(49,'EL-2-1-OS-EA-WH-HO-30-3-RA','item name',NULL,'0','001','admin','2024-09-15 09:35:29',NULL,NULL,NULL,100,NULL,NULL,NULL,NULL),(50,'nfkn','nfkn',NULL,'jkn','kjj','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(51,'uibyyt','uibyyt',NULL,'hu','iu','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(52,'uibyyt','uibyyt',NULL,'hu','iu','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(53,'uibyyt','uibyyt',NULL,'hu','iu','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(54,'uibyyt','uibyyt',NULL,'hu','iu','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(55,'EL-20-ST-ME-GR-ST-30-1.-RA','EL-20-ST-ME-GR-ST-30-1.-RA',NULL,'kmjnhbgvv hbn','fileToUploadn','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(56,'EL-20-ST-ME-GR-ST-30-1.-RA','EL-20-ST-ME-GR-ST-30-1.-RA',NULL,'kmjnhbgvv hbn','fileToUploadn','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(57,'EL-20-ST-ME-GR-ST-30-1.-RA','EL-20-ST-ME-GR-ST-30-1.-RA',NULL,'kmjnhbgvv hbn','fileToUploadn','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(58,NULL,'nioiii',NULL,'ni','on','admin',NULL,NULL,NULL,'Screenshot 2024-10-13 130426.png_2024-10-26_14-05-54.png',NULL,NULL,'ini','nio','noin'),(59,NULL,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',NULL,'10','dwarka','admin',NULL,NULL,NULL,'bhatia emporium.jpg_2024-10-26_14-10-20.png',NULL,NULL,'10','vivek','alfo2bots');
/*!40000 ALTER TABLE `bom_hedar_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bom_line_detail`
--

DROP TABLE IF EXISTS `bom_line_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bom_line_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bom_id` varchar(50) DEFAULT NULL,
  `item_code` varchar(50) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(50) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(50) DEFAULT NULL,
  `process_seq` varchar(45) DEFAULT NULL,
  `percentage_line` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bom_line_detail`
--

LOCK TABLES `bom_line_detail` WRITE;
/*!40000 ALTER TABLE `bom_line_detail` DISABLE KEYS */;
INSERT INTO `bom_line_detail` VALUES (1,'5',NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-07-31','SYSTEM','2024-07-31',NULL,NULL),(2,'6',NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,NULL),(3,'7',NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,NULL),(4,'8',NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,NULL),(5,'9',NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,NULL),(6,'10',NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,NULL),(7,'11',NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01',NULL,NULL),(8,'38','hui',NULL,'6','0','0','admin','2024-09-01',NULL,NULL,'hu',NULL),(9,'38','hui',NULL,'6','0','0','admin','2024-09-01',NULL,NULL,'hu',NULL),(10,'38','jij',NULL,'32','0','0','admin','2024-09-01',NULL,NULL,'jfieji',NULL),(11,'39','nu',NULL,'','0','0','admin','2024-09-01',NULL,NULL,'nu',NULL),(12,'40','ji',NULL,'','0','0','admin','2024-09-01',NULL,NULL,'ji',NULL),(13,'41','ini',NULL,'','0','0','admin','2024-09-01',NULL,NULL,'nin',NULL),(14,'41','jo',NULL,'','0','0','admin','2024-09-01',NULL,NULL,'ji',NULL),(15,'42','ni',NULL,'','0','0','admin','2024-09-01',NULL,NULL,'u',NULL),(16,'43','item code',NULL,'100','0','0','admin','2024-09-01',NULL,NULL,'procees',NULL),(17,'43','item dceo',NULL,'43','0','0','admin','2024-09-01',NULL,NULL,'proccess',NULL),(18,'','nio',NULL,'6','0','0','admin','2024-09-01',NULL,NULL,'ni',NULL),(19,'','item code ',NULL,'43','0','0','admin','2024-09-01',NULL,NULL,'proccess 1',NULL),(20,'','item3',NULL,'3','0','0','admin','2024-09-01',NULL,NULL,'pr3',NULL),(21,'','item co4',NULL,'5499','0','0','admin','2024-09-01',NULL,NULL,'pr4',NULL),(22,'44','item ',NULL,'13','0','0','admin','2024-09-01',NULL,NULL,'procces',NULL),(23,'44','i',NULL,'67','0','0','admin','2024-09-01',NULL,NULL,'jj',NULL),(24,'44','k',NULL,'78','0','0','admin','2024-09-01',NULL,NULL,'jkfl',NULL),(25,'46','',NULL,'','0','0','admin','2024-09-05',NULL,NULL,'b',NULL),(26,'47',NULL,NULL,'10','0','0','admin','2024-09-15',NULL,NULL,'10',NULL),(27,'47','EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',NULL,'10','0','0','admin','2024-09-15',NULL,NULL,'process',NULL),(28,'48','EL-2-1-OS-EA-WH-HO-30-3-RA',NULL,'10','0','0','admin','2024-09-15',NULL,NULL,'process',NULL),(29,'48','EL-GL-2-1.-24-YE-XY-30-2-RA',NULL,'20','0','0','admin','2024-09-15',NULL,NULL,'process 2',NULL),(30,'49','EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ','first item ','100','0','0','admin','2024-09-15',NULL,NULL,'process',NULL),(31,'49','EL-DE-12-76-JI-ON-JA-10-10-DE','second item','200','0','0','admin','2024-09-15',NULL,NULL,'process 2 ',NULL),(32,'50','GL-6-2-2-1.-XY-CL-XY-54-56','GL-12-5-3-2.-XY-CL-XY-90-23','','0','0','admin','2024-09-25',NULL,NULL,'a',NULL),(33,'50','EL-DE-12-76-JI-ON-JA-10-10-DE','GL-6-2-2-1.-XY-CL-XY-54-56','','0','0','admin','2024-09-25',NULL,NULL,'',NULL),(34,'58','nj','njn','89898','0','0','admin','2024-10-26',NULL,NULL,'njanja','989'),(35,'58','nj','njn','89898','0','0','admin','2024-10-26',NULL,NULL,'njanja','989'),(36,'58','7','89798','','0','0','admin','2024-10-26',NULL,NULL,'88989','8'),(37,'59','EL-2-1-FU-EA-WH-XY-25-3-RA','EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ','101','0','0','admin','2024-10-26',NULL,NULL,'101','100'),(38,'59','heyh7h78hj9ui','akjcnbd c','102','0','0','admin','2024-10-26',NULL,NULL,'102','100'),(39,'59','elo','alo','103','0','0','admin','2024-10-26',NULL,NULL,'103','100');
/*!40000 ALTER TABLE `bom_line_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_banking_details`
--

DROP TABLE IF EXISTS `company_banking_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_banking_details` (
  `account_id` int unsigned NOT NULL AUTO_INCREMENT,
  `main_company_id` int NOT NULL,
  `sub_company_id` int NOT NULL,
  `bank_name` varchar(45) NOT NULL,
  `bank_account_number` int NOT NULL,
  `bank_ifsc_code` varchar(45) NOT NULL,
  `bank_branch_name` varchar(45) NOT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `account_id_UNIQUE` (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_banking_details`
--

LOCK TABLES `company_banking_details` WRITE;
/*!40000 ALTER TABLE `company_banking_details` DISABLE KEYS */;
INSERT INTO `company_banking_details` VALUES (1,1,0,'hdfc',84930,'NDEJD993D','sagar pur'),(2,1,1,'yes bank',73829,'NUID78','Palam'),(3,1,2,'capital one',47384,'HD8UEH78','janak puri'),(4,1,3,'chase bank',98998,'9JRJ49I','PALAM'),(5,2,4,'karnataka bank',34343,'SJIE390E','UTTAM NAGAR'),(6,2,5,'hdfc',3434984,'JDWIDJ990','Noida'),(7,2,0,'sbi',90850,'JFM4IIJ4','Sadh nagar'),(15,10,0,'HDFC',7878,'NDIOWJ90','sagar pr'),(16,11,0,'SBI',8768,'SDHSDH898','SAGAR PUR'),(17,11,6,'fake bank',67888,'JSJS8900','palam'),(18,12,0,'yes bank',7392,'ABC33','JANAK PURI'),(19,12,8,'yes',7392,'ABC33','JANAK'),(20,12,9,'yes',7392,'ABC33','JANAK'),(21,12,10,'yes',7392,'ABC33','JANAK'),(22,13,0,'hdfc bank',732898,'BCA123','Gurgao'),(23,13,11,'hdfc',732898,'BCA123','Gurgao'),(24,13,12,'hdfc',732898,'BCA123','Gurgao'),(25,14,0,'HDFSC',67887,'ABC123','Gurago'),(26,14,13,'HDFSC',67887,'ABC123','Gurago'),(27,14,14,'HDFSC',67887,'ABC123','Gurago');
/*!40000 ALTER TABLE `company_banking_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_header_level_details`
--

DROP TABLE IF EXISTS `company_header_level_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_header_level_details` (
  `company_id` int NOT NULL AUTO_INCREMENT,
  `name_of_company` varchar(45) NOT NULL,
  `company_address` varchar(45) NOT NULL,
  `company_pan_card` varchar(45) DEFAULT NULL,
  `company_email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`company_id`),
  UNIQUE KEY `company_id_UNIQUE` (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_header_level_details`
--

LOCK TABLES `company_header_level_details` WRITE;
/*!40000 ALTER TABLE `company_header_level_details` DISABLE KEYS */;
INSERT INTO `company_header_level_details` VALUES (1,'desire pvt ltd','palam',NULL,NULL),(2,'dams','okhla',NULL,NULL),(6,'manish','djfwi',NULL,NULL),(8,'example comonay','jaipur',NULL,NULL),(9,'one','delhi',NULL,NULL),(10,'abc','delhi',NULL,NULL),(11,'another','okhla',NULL,NULL),(12,'shoes pvt ltd','bahadur garh',NULL,NULL),(13,'puma pvt ltd','gurgapo',NULL,NULL),(14,'zara  ','gurgao',NULL,NULL);
/*!40000 ALTER TABLE `company_header_level_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `create_query_form`
--

DROP TABLE IF EXISTS `create_query_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `create_query_form` (
  `record_no` int NOT NULL AUTO_INCREMENT,
  `created_by` varchar(45) DEFAULT NULL,
  `created_lead` varchar(45) DEFAULT NULL,
  `contact_person_details` varchar(45) DEFAULT NULL,
  `lead_source` varchar(45) DEFAULT NULL,
  `lead_type` varchar(45) DEFAULT NULL,
  `assigned_to` varchar(45) DEFAULT NULL,
  `query_received_date` varchar(45) DEFAULT NULL,
  `query_start_date` varchar(45) DEFAULT NULL,
  `query_end_date` varchar(45) DEFAULT NULL,
  `follow_up` varchar(45) DEFAULT NULL,
  `re_query` varchar(45) DEFAULT NULL,
  `re_query_closure_date` varchar(45) DEFAULT NULL,
  `re_query_end_date` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'OPEN',
  `followup_reminder_frequency` int DEFAULT '5',
  `no_of_times` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`record_no`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `create_query_form`
--

LOCK TABLES `create_query_form` WRITE;
/*!40000 ALTER TABLE `create_query_form` DISABLE KEYS */;
INSERT INTO `create_query_form` VALUES (1,'1','1','1','Email','Dealer','123','2024-09-03','2024-09-20','2024-09-04','121','Yes','2024-09-06','2024-09-16','CLOSE',10,NULL),(2,'101','101','1010','Email','Dealer','101','2024-09-17','2024-09-25','2024-09-16','101','Yes','','','INPROCESS',10,NULL),(3,'101','101','1010','Direct-other','Distributor','101','2024-09-25','2024-09-19','2024-09-17','101','Yes','2024-09-27','2024-09-18','CLOSE',10,NULL),(4,'','','','','','','','','','','','','','OPEN',10,NULL),(5,'example','jk','jk','Choose Lead','Choose Lead Type','jk','2026-12-13','2026-12-15','2026-11-13','kojih','Yes','2026-10-14','2025-10-14','CLOSE',10,NULL),(6,'example','jk','jk','Choose Lead','Choose Lead Type','jk','2026-12-13','2026-12-15','2026-11-13','kojih','Yes','2026-10-14','2025-10-14','CLOSE',10,NULL),(7,'YG','g','ygy','Email','Distributor','yg','2025-10-15','2026-11-16','2025-12-14','ug','Choose one','2026-11-15','2026-11-15',NULL,1,'1'),(8,'jfkdjfl','jfklql','jkl','Email','Distributor','rfm`','2023-11-30','2023-11-30','2024-10-29','foloe ','Yes','2025-12-04','2024-02-09','OPEN',5,NULL),(9,'','','','','','','','','','','','','','OPEN',5,NULL);
/*!40000 ALTER TABLE `create_query_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_line_label_details`
--

DROP TABLE IF EXISTS `customer_line_label_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_line_label_details` (
  `sub_company_id` int NOT NULL AUTO_INCREMENT,
  `main_company_id` int NOT NULL,
  `company_address` varchar(45) NOT NULL,
  `companny_name` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `GST_number` varchar(45) DEFAULT NULL,
  `company_email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sub_company_id`),
  UNIQUE KEY `sub_company_id_UNIQUE` (`sub_company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_line_label_details`
--

LOCK TABLES `customer_line_label_details` WRITE;
/*!40000 ALTER TABLE `customer_line_label_details` DISABLE KEYS */;
INSERT INTO `customer_line_label_details` VALUES (8,12,'jaipur','shoes pvt ltd','printer',NULL,NULL),(9,12,'okhla','shoes pvt ltd','printer',NULL,NULL),(10,12,'gurgao','shoes pvt ltd','cooler',NULL,NULL),(11,13,'okhla','puma pvt ltd','shoes',NULL,NULL),(12,13,'noida','puma pvt ltd','thirt',NULL,NULL),(13,14,'noida','zara  ','tshirt',NULL,NULL),(14,14,'okhla','zara  ','jeans',NULL,NULL);
/*!40000 ALTER TABLE `customer_line_label_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daily_txn_book`
--

DROP TABLE IF EXISTS `daily_txn_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `daily_txn_book` (
  `transaction_no` int NOT NULL AUTO_INCREMENT,
  `transaction_date` varchar(45) DEFAULT NULL,
  `amount_type` varchar(45) DEFAULT NULL,
  `credit_amt` varchar(45) DEFAULT NULL,
  `debit_amt` varchar(45) DEFAULT NULL,
  `particuler_to` varchar(45) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `main_head` varchar(45) DEFAULT NULL,
  `sub_head` varchar(45) DEFAULT NULL,
  `bill_cheque_no` varchar(45) DEFAULT NULL,
  `invoice_date` varchar(45) DEFAULT NULL,
  `invoice_no` varchar(45) DEFAULT NULL,
  `gst_no` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `form_status` varchar(45) NOT NULL DEFAULT 'SAVE',
  PRIMARY KEY (`transaction_no`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daily_txn_book`
--

LOCK TABLES `daily_txn_book` WRITE;
/*!40000 ALTER TABLE `daily_txn_book` DISABLE KEYS */;
INSERT INTO `daily_txn_book` VALUES (13,'2024-09-12','Credit','101','','Fuel','Fuel','cash_received','staff_welfare','101','2024-09-12','101','101','abc','SAVE'),(14,'2024-09-13','Debit','','2000','Fuel','Fuel','hkb','col_hkb','102','2024-09-24','102','102','abc','SAVE'),(16,'2024-09-12','Debit','','10000','Fuel','Fuel','donation','staff_welfare','1212','2024-09-05','101','101','abc','SAVE'),(17,'','','','','','','','','','','','','','SAVE'),(18,'2025-01-02','Debit','','','kjhv','delhi','Select one','Select one','5','2024-02-01','00999','099009','Success','SAVE'),(19,'2025-01-02','Debit','','','kjhv','delhi','Select one','Select one','5','2024-02-01','00999','099009','Success','SAVE'),(20,'2025-01-02','Debit','','','kjhv','delhi','Select one','Select one','5','2024-02-01','00999','099009','Success','SAVE'),(21,'2025-01-02','Debit','','','kjhv','delhi','Select one','Select one','5','2024-02-01','00999','099009','Success','SAVE'),(22,'2026-11-30','Credit','','','dejio','','office_running','ip_ajadpur','12','2027-10-31','001','12','90i','SAVE');
/*!40000 ALTER TABLE `daily_txn_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drop_lookup_info_category_header`
--

DROP TABLE IF EXISTS `drop_lookup_info_category_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drop_lookup_info_category_header` (
  `header_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`header_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drop_lookup_info_category_header`
--

LOCK TABLES `drop_lookup_info_category_header` WRITE;
/*!40000 ALTER TABLE `drop_lookup_info_category_header` DISABLE KEYS */;
INSERT INTO `drop_lookup_info_category_header` VALUES (1,'department'),(2,'Requisition_Type'),(3,'Category');
/*!40000 ALTER TABLE `drop_lookup_info_category_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drop_lookup_info_category_line`
--

DROP TABLE IF EXISTS `drop_lookup_info_category_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drop_lookup_info_category_line` (
  `line_id` int NOT NULL AUTO_INCREMENT,
  `header_id` int NOT NULL,
  `sub_line_name` varchar(100) NOT NULL,
  `discription` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`line_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drop_lookup_info_category_line`
--

LOCK TABLES `drop_lookup_info_category_line` WRITE;
/*!40000 ALTER TABLE `drop_lookup_info_category_line` DISABLE KEYS */;
INSERT INTO `drop_lookup_info_category_line` VALUES (1,1,'HR','hr department','2024-08-02','2024-08-10'),(2,1,'Legal','legal department','2024-08-02','2024-08-10'),(3,1,'FInance','finance department','2024-08-02','2024-08-10'),(4,2,'IR','Inetrnal Requisition',NULL,NULL),(5,2,'PR','Purchase Requisition',NULL,NULL),(6,3,'RAW','RAW',NULL,NULL),(7,3,'FG','Finish Good',NULL,NULL),(8,3,'ACC','Accessories',NULL,NULL),(9,3,'CHAN','Chandler',NULL,NULL),(10,3,'Light','Light',NULL,NULL);
/*!40000 ALTER TABLE `drop_lookup_info_category_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `electrical_catinfo`
--

DROP TABLE IF EXISTS `electrical_catinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `electrical_catinfo` (
  `S.No` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) DEFAULT NULL,
  `sub_category` varchar(45) DEFAULT NULL,
  `Item_code` varchar(300) DEFAULT NULL,
  `short_description` varchar(45) DEFAULT NULL,
  `Size` varchar(45) DEFAULT NULL,
  `Watt` varchar(45) DEFAULT NULL,
  `Colour` varchar(45) DEFAULT NULL,
  `Shape` varchar(45) DEFAULT NULL,
  `Brand` varchar(45) DEFAULT NULL,
  `Light_output_Colour` varchar(50) DEFAULT NULL,
  `Vendor` varchar(45) DEFAULT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `Length` varchar(45) DEFAULT NULL,
  `Material` varchar(45) DEFAULT NULL,
  `WireType` varchar(45) DEFAULT NULL,
  `In_Builtswitch` varchar(45) DEFAULT NULL,
  `Pintop` varchar(45) DEFAULT NULL,
  `Holdertype` varchar(45) DEFAULT NULL,
  `Discount` varchar(45) DEFAULT NULL,
  `Images` varchar(45) DEFAULT NULL,
  `cat_id` int DEFAULT NULL,
  `status` varchar(45) DEFAULT 'PENDING',
  `cut` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`S.No`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `electrical_catinfo`
--

LOCK TABLES `electrical_catinfo` WRITE;
/*!40000 ALTER TABLE `electrical_catinfo` DISABLE KEYS */;
INSERT INTO `electrical_catinfo` VALUES (1,'1','1','WHIT-ALUM-GLOS-ROUN-SHAR-23-BREA-HEIG-WEIG-UP-BD-STYL-NOOF-VEND-DISC-IMG-TEST-','','','','white','round','','','VENDORE','DISCRIPTNOP','','23','Aluminum','','','','','','',NULL,NULL,NULL),(2,'1','3','ALUM-CUT-----SIZE-----','','size','','','','','','','','','','Aluminum','','','','','','',NULL,NULL,NULL),(3,'1','3','MA-CU-FE------DE-IM-WI-','','','','','','','','','','','','material ','wireType','','','','','imahe',NULL,NULL,NULL),(4,'1','3','MA-CU-FE------DE-IM-WI-','','','','','','','','','','','','material ','wireType','','','','','imahe',NULL,NULL,NULL),(5,'1','1','-----------------SH-20--','short discription','','200watt','','','','','','','','','','','','','','','',NULL,NULL,NULL),(6,'1','1','-----------------SH-20-20-','short discription','','200watt','','','','','','','','','','','','','','','',NULL,NULL,NULL),(7,'1','1','-----------------SH--JI-','short discription','','','','','','','','','','','','','','','','jio','',NULL,NULL,NULL),(8,'1','3','-----------','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL),(9,'1','1','BL-CU-VE-DI-IM-SH-20-DI-SG-SI-BR-','short discript','sice','200wtt','black','sga[e','brand','','vendor','discrition','','','','','','','','discotun','',NULL,NULL,NULL),(10,'1','1','BL-CU-VE-DI-IM-SH-20-DI-SG-SI-BR-','short discript','sice','200wtt','black','sga[e','brand','','vendor','discrition','','','','','','','','discotun','',NULL,NULL,NULL),(11,'1','1','BL-DI-------SI---','','size','','blacni','','','','','','','','','','','','','','',NULL,NULL,NULL),(12,'1','1','BL-DI-------SI---','','size','','blacni','','','','','','','','','','','','','','',NULL,NULL,NULL),(13,'1','2','98-BL-BR-CE-LO-IM-SH-MA-HO-PR-DI-','shoert','98fe','','blak','','brandy','','','long ','price','','matieril','','','','holder','discoouhnt','images1',NULL,NULL,NULL),(14,'1','1','FE-JK-JK-JK-JK-J-KJ-JK-JK-JK-JK-JK-','jk','jk','jk','felwk','kjk','jkjk','jk','jk','jk','','','','','','','','j','jk',NULL,'PENDING',NULL),(15,'1','3','------WI--------','','','','','','','','','','','','','wireType','','','','','',NULL,'PENDING',NULL),(16,'1','1','VU-VE-SH---------','shote','','','','','','','vene','','','','','','','','','','',NULL,'PENDING',NULL),(17,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(18,'1','1','WH------------','','','','WHITE','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(19,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(20,'1','1','CU-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(21,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(22,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(23,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(24,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(25,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(26,'1','1','CU-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(27,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(28,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(29,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(30,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(31,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(32,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(33,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(34,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(35,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(36,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(37,'1','1','-----------','','','','','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(38,'1','1','FE-HI-H-IU--------','h','','iu','yellow','','','','hiu','','','','','','','','','','',NULL,'PENDING',NULL),(39,'1','1','FE-HI-H-IU--------','h','','iu','skyblue','','','','hiu','','','','','','','','','','',NULL,'PENDING',NULL),(40,'1','1','FE-HI-H-IU--------','h','','iu','blue','','','','hiu','','','','','','','','','','',NULL,'PENDING',NULL),(41,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(42,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(43,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'PENDING',NULL),(44,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(45,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(46,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(47,'1','1','-----------','','','','offwhite','','','','','','','','','','','','','','',NULL,'',NULL),(48,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'',NULL),(49,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(50,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(51,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(52,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(53,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(54,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(55,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(56,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(57,'1','1','-----------','','','','yellow','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(58,'1','1','-----------','','','','black','','','','','','','','','','','','','','',NULL,'',NULL),(59,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(60,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(61,'1','1','-----------','','','','silver','','','','','','','','','','','','','','',NULL,'',NULL),(62,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(63,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(64,'1','1','-----------','','','','white','','','','','','','','','','','','','','',NULL,'',NULL),(65,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(66,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(67,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(68,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(69,'1','1','CU-VE-OR-WA-DI-SH-SI-BR-IM-LO-LI-','ortDescription','size','Watt','skyblue','shape','brand','ligh out[','VENDER','long','','','','','','','','discount','images',NULL,'',NULL),(70,'1','1','FJ-JI-IJ-IJ-IJ-IJ-IJ-IJ-IJ-IJ-J-','ij','ijj','ij','red','ij','ij','j','ji','ij','','','','','','','','ij','ij',NULL,'',NULL),(71,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(72,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(73,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(74,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(75,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(76,'1','3','--------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(77,'1','3','--------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(78,'1','3','--------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(79,'1','3','--------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(80,'1','3','--------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(81,'1','3','--------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(82,'1','3','--------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(83,'1','3','--------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(84,'1','1','-----------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(85,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(86,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(87,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(88,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(89,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(90,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(91,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(92,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(93,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(94,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(95,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(96,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(97,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(98,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(99,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(100,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(101,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(102,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(103,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(104,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(105,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(106,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(107,'1','1','------------','','','','black','','','','','','','','','','','','','','',NULL,'',NULL),(108,'1','1','------------','','','','black','','','','','','','','','','','','','','',NULL,'',NULL),(109,'1','1','------------','','','','black','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(110,'1','1','------------','','','','black','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(111,'1','1','------------','','','','black','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(112,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'',NULL),(113,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(114,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(115,'1','3','---------------','','','','','','','','','','','','','','','','','','',NULL,'',NULL),(116,'1','3','---------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(117,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'Save',NULL),(118,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(119,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(120,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(121,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(122,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(123,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(124,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(125,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'Save',NULL),(126,'1','2','------------','','','','','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(127,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(128,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(129,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(130,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(131,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(132,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(133,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(134,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(135,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(136,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(137,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(138,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(139,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(140,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(141,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(142,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(143,'1','1','-DI-AB-BU-40-5-------','Bulb 40 watt red','','40','black','','','','ABC','','','','','','','','','5','',NULL,'Save',NULL),(144,'SELECT CATEGORY','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(145,'SELECT CATEGORY','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(146,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(147,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(148,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(149,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(150,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(151,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(152,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(153,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(154,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(155,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(156,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(157,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(158,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(159,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(160,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(161,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(162,'SELECT CATEGORY','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(163,'SELECT CATEGORY','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(164,'SELECT CATEGORY','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(165,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(166,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(167,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(168,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(169,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(170,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(171,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(172,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(173,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(174,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(175,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(176,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(177,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(178,'1','1','C:------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(179,'1','1','C:------------','','','','offwhite','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(180,'1','1','C:------------','','','','red','','','','','','','','','','','','','','1723532531',NULL,'SAVE',NULL),(181,'1','1','C:------------','','','','red','','','','','','','','','','','','','','1723532866_Screenshot (60).png',NULL,'SAVE',NULL),(182,'1','1','C:------------','','','','red','','','','','','','','','','','','','','1723533540_Screenshot 2024-08-10 142907.png',NULL,'SUBMIT',NULL),(183,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(184,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(185,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(186,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SUBMIT',NULL),(187,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(188,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(189,'1','1','C:------------','','','','red','','','','','','','','','','','','','','1723535712_Screenshot (60).png',NULL,'SAVE',NULL),(190,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(191,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'SAVE',NULL),(192,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(193,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(194,'1','','','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(195,'1','1','C:-CU-VE-SH-20-20-SH-12-BR-FJ-JF-I-','SHort','12inch','200','black','shape','BRAND','i','Vendor','jfo','','','','','','','','200%','1723536284_Screenshot (59).png',NULL,'APPROOVED',NULL),(196,'1','1','------------','','','','red','','','','','','','','','','','','','','',NULL,'Save',NULL),(197,'1','1','C:-CU-VE-SH-U-H-H-JH-HJ-JH-HJ-HJ-','short','jhjhj','u','offwhite','h','hj','hjh','Vendore','hj','','','','','','','','h','1723536492_Screenshot (60).png',NULL,'SAVE',NULL),(198,'6','4','C:-DF-HU-IH-H-UH-UH-UH-HU-HU-HU-HU-','hu','huih','ih','h','','uhuh','uhu','','hu','','','','','','','','','1723551297_Screenshot (56).png',NULL,'SAVE',NULL),(199,'7','5','C:-I-II-JI-JI-JI-JI-JI-IJ-IJ-I-JI-IJ-I-JI-JI-JI-JI-JI-JI-JI-','','','','','','','','','','','','','','','','','','1723552091_Screenshot (57).png',NULL,'SAVE',NULL),(200,'7','5','C:-I-II-JI-JI-JI-JI-JI-IJ-IJ-I-JI-IJ-I-JI-JI-JI-JI-JI-JI-JI-','','','','','','','','','','','','','','','','','','1723552094_Screenshot (57).png',NULL,'SAVE',NULL),(201,'7','5','C:-UG-T-J9-TT-T-T-TT-T-EX-TT-T-TT-T-T-T-TT-EX-EX-EX-T-','','','','','','','','','','','','','','','','','','1723552926_Screenshot (60).png',NULL,'SAVE',NULL);
/*!40000 ALTER TABLE `electrical_catinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_head`
--

DROP TABLE IF EXISTS `employee_head`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_head` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email_address` varchar(45) DEFAULT NULL,
  `pan_card` varchar(45) DEFAULT NULL,
  `image_path` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(400) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_head`
--

LOCK TABLES `employee_head` WRITE;
/*!40000 ALTER TABLE `employee_head` DISABLE KEYS */;
INSERT INTO `employee_head` VALUES (1,'name','DOB','deoa','MONITL','Aaddre','email','pan','imgpath','created by ','created date','updated_by',NULL),(2,'hello',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'hello',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'name','DOB','DEOPS','KJK','ADDRESemail','email','pan','imgpath','created ','created daet',NULL,NULL),(5,'bjk','','bjk','','b','kdok','','Image path','admin','fmire',NULL,NULL),(6,'nmnais','','on','','on','kdok','no','Image path','admin','fmire',NULL,NULL),(7,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','INSERT INTO `for_office`.`employee_head` (`name`, `dob`, `department`, `mobile_number`, `address`, `email_address`, `pan_card`, `image_path`,`created_by`,`created_date`) \r\n        VALUES (?, ?,?, ?, ?, ?,?, ? ,?,?)',NULL,NULL),(8,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','INSERT INTO `for_office`.`employee_head` (`name`, `dob`, `department`, `mobile_number`, `address`, `email_address`, `pan_card`, `image_path`,`created_by`,`created_date`) \r\n        VALUES (?, ?,?, ?, ?, ?,?, ? ,?,?)',NULL,NULL),(9,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','INSERT INTO `for_office`.`employee_head` (`name`, `dob`, `department`, `mobile_number`, `address`, `email_address`, `pan_card`, `image_path`,`created_by`,`created_date`) \r\n        VALUES (?, ?,?, ?, ?, ?,?, ? ,?,?)',NULL,NULL),(10,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','INSERT INTO `for_office`.`employee_head` (`name`, `dob`, `department`, `mobile_number`, `address`, `email_address`, `pan_card`, `image_path`,`created_by`,`created_date`) \r\n        VALUES (?, ?,?, ?, ?, ?,?, ? ,?,?)',NULL,NULL),(11,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','INSERT INTO `for_office`.`employee_head` (`name`, `dob`, `department`, `mobile_number`, `address`, `email_address`, `pan_card`, `image_path`,`created_by`,`created_date`) \r\n        VALUES (?, ?,?, ?, ?, ?,?, ? ,?,?)',NULL,NULL),(12,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','INSERT INTO `for_office`.`employee_head` (`name`, `dob`, `department`, `mobile_number`, `address`, `email_address`, `pan_card`, `image_path`,`created_by`,`created_date`) \r\n        VALUES (?, ?,?, ?, ?, ?,?, ? ,?,?)',NULL,NULL),(13,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','INSERT INTO `for_office`.`employee_head` (`name`, `dob`, `department`, `mobile_number`, `address`, `email_address`, `pan_card`, `image_path`,`created_by`,`created_date`) \r\n        VALUES (?, ?,?, ?, ?, ?,?, ? ,?,?)',NULL,NULL),(14,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','INSERT INTO `for_office`.`employee_head` (`name`, `dob`, `department`, `mobile_number`, `address`, `email_address`, `pan_card`, `image_path`,`created_by`,`created_date`) \r\n        VALUES (?, ?,?, ?, ?, ?,?, ? ,?,?)',NULL,NULL),(15,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','2024-09-04 10:04:48',NULL,NULL),(16,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','2024-09-04 10:04:49',NULL,NULL),(17,'manish','2026-03-02','hr','2024-02-02','address','enail','pan','Image path','admin','2024-09-04 10:33:34',NULL,NULL),(18,'ji','','j','','ij','ij','ij','Image path','admin','2024-09-04 10:34:13',NULL,NULL),(19,'ji','','j','','ij','ij','ij','Image path','admin','2024-09-04 10:35:26',NULL,NULL),(20,'','','','','','','','Image path','admin','2024-09-04 10:35:49',NULL,NULL),(21,'','','','','','','','Image path','admin','2024-09-04 10:35:58',NULL,NULL),(22,'','','','','','','','Image path','admin','2024-09-04 10:36:27',NULL,NULL),(23,'','','','','','','','Image path','admin','2024-09-04 10:36:48',NULL,NULL),(24,'','','','','','','','Image path','admin','2024-09-04 10:37:07',NULL,NULL),(25,'','','','','','','','Image path','admin','2024-09-04 10:44:52',NULL,NULL),(26,'manish','2024-03-02','hr','909090','sf','jlkj@mf.xpm','nfokn','Image path','admin','2024-09-04 10:45:31',NULL,NULL),(27,'manish','2026-04-03','','','','','','Image path','admin','2024-09-04 10:47:06',NULL,NULL),(28,'gu','','gu','','ug','ug','ug','Image path','admin','2024-09-04 10:47:36',NULL,NULL),(29,'gu','','gu','','ug','ug','ug','Image path','admin','2024-09-04 10:49:07',NULL,NULL),(30,'','','','','','','','Image path','admin','2024-09-04 10:49:14',NULL,NULL),(31,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:49:36',NULL,NULL),(32,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:08',NULL,NULL),(33,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:10',NULL,NULL),(34,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:11',NULL,NULL),(35,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:11',NULL,NULL),(36,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:11',NULL,NULL),(37,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:12',NULL,NULL),(38,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:23',NULL,NULL),(39,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:37',NULL,NULL),(40,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:38',NULL,NULL),(41,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:38',NULL,NULL),(42,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:39',NULL,NULL),(43,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:50:56',NULL,NULL),(44,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:51:29',NULL,NULL),(45,'i','','iub','','uibuib','ui','biuuiui','Image path','admin','2024-09-04 10:52:04',NULL,NULL),(46,'','','','','','','','Image path','admin','2024-09-04 10:52:08',NULL,NULL),(47,'','','','','','','','Image path','admin','2024-09-04 10:52:11',NULL,NULL),(48,'','','','','','','','Image path','admin','2024-09-04 10:54:50',NULL,NULL),(49,'manish','2025-02-02','','','','','','Image path','admin','2024-09-04 11:08:59',NULL,NULL),(50,'jojj','2024-09-18','jioj','99329839','ioj','oij','oi','Image path','admin','2024-09-04 11:10:27',NULL,NULL),(51,'xyz','2015-02-22','Sales','9876543210','house no -198,  Rama nagar','xyz@gmail.com','guk009302','Image path','rg1','2024-09-04 11:21:25',NULL,NULL),(52,'xyz','2015-02-22','Sales','9876543210','house no -198,  Rama nagar','xyz@gmail.com','guk009302','Image path','rg1','2024-09-04 11:22:04',NULL,NULL),(53,'xyz','2015-02-22','Sales','9876543210','house no -198,  Rama nagar','xyz@gmail.com','guk009302','Image path','rg1','2024-09-04 11:23:29',NULL,NULL),(54,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','guk009302','Image path','rg1','2024-09-04 11:26:37',NULL,NULL),(55,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','guk009302','Image path','rg1','2024-09-04 11:28:49',NULL,NULL),(56,'n','2024-09-10','un','8989','pm','o','n','Image path','admin','2024-09-04 11:32:14',NULL,NULL),(57,'n','2024-09-10','un','8989','pm','o','n','Image path','admin','2024-09-04 11:32:27',NULL,NULL),(58,'ni','0098-09-09','9','89','89','87','8','Image path','admin','2024-09-04 11:32:47',NULL,NULL),(59,'i','2024-09-12','n','98','in','in','in','Image path','admin','2024-09-04 11:33:41',NULL,NULL),(60,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','ankh7236','Image path','rg1','2024-09-04 11:34:10',NULL,NULL),(61,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','ankh7236','Image path','rg1','2024-09-04 11:34:23',NULL,NULL),(62,'TGUJH','2024-09-12','ERTFY','98','RFY','5YTH','567','Image path','admin','2024-09-04 11:35:31',NULL,NULL),(63,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','ankh7236','Image path','rg1','2024-09-04 11:35:40',NULL,NULL),(64,'io','2024-01-01','oi','98','on','oin','oin','Image path','admin','2024-09-04 11:39:35',NULL,NULL),(65,'io','2024-01-01','oi','98','on','oin','oin','Image path','admin','2024-09-04 11:39:55',NULL,NULL),(66,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','ankh7236','Image path','rg1','2024-09-04 11:40:49',NULL,NULL),(67,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','guk009302','Image path','rg1','2024-09-04 11:41:06',NULL,NULL),(68,'ion','2024-09-12','io','4','n','io','nio','Image path','admin','2024-09-04 11:41:47',NULL,NULL),(69,'in','2026-02-01','nio','9876','nio','nio','nion','Image path','admin','2024-09-04 11:43:58',NULL,NULL),(70,'in','2026-02-01','nio','9876','nio','nio','nion','Image path','admin','2024-09-04 11:44:44',NULL,NULL),(71,'nn','2025-02-01','oin','3','oin','ion','i','Image path','admin','2024-09-04 11:45:23',NULL,NULL),(72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'./employee/Screenshot (2).png','admin','2024-09-04 11:47:23',NULL,NULL),(73,'in','2024-09-11','nion','898','oin','ion','ion','Image path','admin','2024-09-04 11:50:14',NULL,NULL),(74,'in','2024-09-11','nion','898','oin','ion','ion','Image path','admin','2024-09-04 12:00:07',NULL,NULL),(75,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','guk009302','Image path','rg1','2024-09-04 12:00:12',NULL,NULL),(76,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','guk009302','Image path','rg1','2024-09-04 12:00:29',NULL,NULL),(77,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','guk009302','Image path','rg1','2024-09-04 12:04:30',NULL,NULL),(78,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','guk009302','Image path','rg1','2024-09-04 12:04:49',NULL,NULL),(79,'Ank','2024-09-11','Sales','9876543210','house no -198,  Rama nagar','kh','guk009302','Image path',NULL,'2024-09-04 15:07:57',NULL,NULL),(80,'Ank','2024-09-04','Sales','987654321','house no -198,  Rama nagar','kh','guk009302','Image path','rg1','2024-09-04 16:15:45',NULL,NULL);
/*!40000 ALTER TABLE `employee_head` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_info_line`
--

DROP TABLE IF EXISTS `employee_info_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_info_line` (
  `id` int NOT NULL AUTO_INCREMENT,
  `joiner_new_old` varchar(45) DEFAULT NULL,
  `employee_id` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `old_organization_name` varchar(45) DEFAULT NULL,
  `deputed_to_location` varchar(45) DEFAULT NULL,
  `last_ctc` varchar(45) DEFAULT NULL,
  `current_ctc` varchar(45) DEFAULT NULL,
  `temp` varchar(45) DEFAULT NULL,
  `tentative_date_of_joining` varchar(45) DEFAULT NULL,
  `exact_date_of_joining` date DEFAULT NULL,
  `notice_period` varchar(45) DEFAULT NULL,
  `notice_served` varchar(45) DEFAULT NULL,
  `job_role` varchar(45) DEFAULT NULL,
  `job_description` varchar(45) DEFAULT NULL,
  `date_anniversary` varchar(45) DEFAULT NULL,
  `offer_later_release_date` date DEFAULT NULL,
  `date_of_leaving` date DEFAULT NULL,
  `offer_letter_path` varchar(45) DEFAULT NULL,
  `leave_letter_path` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_info_line`
--

LOCK TABLES `employee_info_line` WRITE;
/*!40000 ALTER TABLE `employee_info_line` DISABLE KEYS */;
INSERT INTO `employee_info_line` VALUES (1,NULL,'24','','','','','',NULL,'2024-10-04','2024-10-02','','','','','','2024-10-12','2024-09-13','',''),(2,NULL,'25','','','','','',NULL,'2024-10-04','2024-10-02','','','','','','2024-10-12','2024-09-13','',''),(3,NULL,'26','manish','nu','nu','nu','nu',NULL,'2024-09-03','2024-09-11','nu','nu','nu','nu','2024-09-13','2024-09-21','2024-09-20','',''),(4,NULL,'28','gu','gug','','hu','giu',NULL,'2024-02-02','2025-01-03','m','nbujy','gy','gy','2024-02-01','2024-03-01','2025-12-02','',''),(5,NULL,'29','gu','gug','','hu','giu',NULL,'2024-02-02','2025-01-03','m','nbujy','gy','gy','2024-02-01','2024-03-01','2025-12-02','',''),(6,NULL,'31','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(7,NULL,'32','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(8,NULL,'33','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(9,NULL,'34','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(10,NULL,'35','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(11,NULL,'36','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(12,NULL,'37','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(13,NULL,'38','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(14,NULL,'39','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(15,NULL,'40','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(16,NULL,'41','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(17,NULL,'42','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(18,NULL,'43','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(19,NULL,'44','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(20,NULL,'45','i','ub','j','ihuv','yt',NULL,'2024-10-02','2024-09-25','v','u','','vuv','2024-10-01','2024-10-02','2024-09-20','',''),(21,NULL,'50','jojj','oij','oij','oij','ioj',NULL,'2024-09-12','2024-09-11','ioj','iojo','ijio','jio','2024-09-12','2024-09-19','2024-10-11','Screenshot (1).png','Screenshot (1).png'),(22,NULL,'51','xyz','Algo2bots','ghar','1000','2000',NULL,'2024-09-17','2024-09-09','1 months','no','Fronted Development','lorem ipsum','2024-09-25','2024-09-25','2024-09-26','new_so1.png','new_so.png'),(23,NULL,'52','xyz','Algo2bots','ghar','1000','2000',NULL,'2024-09-17','2024-09-09','1 months','no','Fronted Development','lorem ipsum','2024-09-25','2024-09-25','2024-09-26','new_so1.png','new_so.png'),(24,NULL,'53','xyz','Algo2bots','ghar','1000','2000',NULL,'2024-09-17','2024-09-09','1 months','no','Fronted Development','lorem ipsum','2024-09-25','2024-09-25','2024-09-26','image (1).png','image (1).png'),(25,NULL,'54','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','',''),(26,NULL,'55','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','',''),(27,NULL,'56','n','nmi','ni','n','ii',NULL,'2024-09-10','2024-09-11','oin','on','on','oinion','2024-09-13','2024-01-01','2024-09-13','Screenshot 2024-08-28 132551.png','Screenshot 2024-08-28 132600.png'),(28,NULL,'57','n','nmi','ni','n','ii',NULL,'2024-09-10','2024-09-11','oin','on','on','oinion','2024-09-13','2024-01-01','2024-09-13','Screenshot 2024-08-28 132551.png','Screenshot 2024-08-28 132600.png'),(29,NULL,'58','ni','7878','87','78','8778',NULL,'2024-07-08','2024-07-08','7','7887','87','oinion','2024-09-13','2024-01-01','2024-09-13','',''),(30,NULL,'59','i','mo','mo','mop','mpom',NULL,'2024-09-18','2024-09-24','jii','i','ini','ko','2024-09-25','2024-09-21','2024-09-21','Screenshot (1).png','Screenshot (1).png'),(31,NULL,'60','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','new_so1.png','create_Supplier.html'),(32,NULL,'61','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','new_so1.png','create_Supplier.html'),(33,NULL,'62','TGUJH','mo','mo','mop','mpom',NULL,'2024-09-18','2024-09-24','jii','i','ini','ko','2024-09-25','2024-09-21','2024-09-21','',''),(34,NULL,'63','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','new_so1.png','create_Supplier.html'),(35,NULL,'64','io','n','ion','ion','ion',NULL,'2024-01-01','2025-02-01','mjio','ij','n','ion','2024-09-23','2025-02-01','2024-12-26','Screenshot 2024-08-28 132600.png','Screenshot 2024-08-28 132600.png'),(36,NULL,'65','io','n','ion','ion','ion',NULL,'2024-01-01','2025-02-01','mjio','ij','n','ion','2024-09-23','2025-02-01','2024-12-26','Screenshot 2024-08-28 132600.png','Screenshot 2024-08-28 132600.png'),(37,NULL,'66','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','new_so1.png','create_Supplier.html'),(38,NULL,'67','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','',''),(39,NULL,'68','ion',' n','in','ion','ion',NULL,'2025-02-02','2024-01-01','on','oin','ioio','noi','2026-01-01','2024-09-26','2024-09-26','Screenshot 2024-08-28 132600.png','Screenshot (3).png'),(40,NULL,'69','in','ion','ion','n','ion',NULL,'2026-02-02','2026-03-02','ion','io','ionoi','noi','2028-01-02','2025-03-03','2027-04-02','Screenshot (3).png','Screenshot (2).png'),(41,NULL,'70','in','ion','ion','n','ion',NULL,'2026-02-02','2026-03-02','ion','io','ionoi','noi','2028-01-02','2025-03-03','2027-04-02','Screenshot (3).png','Screenshot (2).png'),(42,NULL,'71','nn','nion','ion','oin','in',NULL,'2024-09-04','2025-01-01','on','n','in','oinn','2024-01-01','2023-01-02','2025-02-02','Screenshot 2024-08-28 132435.png','Screenshot (3).png'),(43,NULL,'73','in','m','m','im','om',NULL,'2025-03-02','2024-03-02','mm','oim','oi','mio','2024-01-02','2025-02-03','2025-01-02','Screenshot 2024-08-28 132600.png','Screenshot 2024-08-28 132600.png'),(44,NULL,'74','in','m','m','im','om',NULL,'2025-03-02','2024-03-02','mm','oim','oi','mio','2024-01-02','2025-02-03','2025-01-02','Screenshot 2024-08-28 132600.png','Screenshot 2024-08-28 132600.png'),(45,NULL,'75','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','',''),(46,NULL,'76','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','',''),(47,NULL,'77','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','',''),(48,NULL,'78','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','',''),(49,NULL,'79','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','',''),(50,NULL,'80','Ank','Algo2bots','ghar','1000','2000',NULL,'2024-09-04','2024-09-04','1 months','no','Fronted Development','lorem ipsum','2024-09-04','2024-09-04','2024-09-04','new_so.png','new_so1.png');
/*!40000 ALTER TABLE `employee_info_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees_information`
--

DROP TABLE IF EXISTS `employees_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees_information` (
  `id` int NOT NULL AUTO_INCREMENT,
  `joiner_info` varchar(45) DEFAULT NULL,
  `serial_no` varchar(45) DEFAULT NULL,
  `emp_name` varchar(45) DEFAULT NULL,
  `emp_dob` varchar(45) DEFAULT NULL,
  `emp_department` varchar(45) DEFAULT NULL,
  `emp_mobile_no` varchar(45) DEFAULT NULL,
  `emp_address` varchar(45) DEFAULT NULL,
  `emp_email` varchar(45) DEFAULT NULL,
  `emp_pan_card` varchar(45) DEFAULT NULL,
  `emp_image` varchar(45) DEFAULT NULL,
  `organization_name` varchar(45) DEFAULT NULL,
  `deputed_location` varchar(45) DEFAULT NULL,
  `last_ctc` varchar(45) DEFAULT NULL,
  `current_ctc` varchar(45) DEFAULT NULL,
  `tentative_date` varchar(45) DEFAULT NULL,
  `exact_date` varchar(45) DEFAULT NULL,
  `notice_period` varchar(45) DEFAULT NULL,
  `notice_served` varchar(45) DEFAULT NULL,
  `job_role` varchar(45) DEFAULT NULL,
  `job_description` varchar(45) DEFAULT NULL,
  `date_of_anniversary` varchar(45) DEFAULT NULL,
  `offer_letter_date` varchar(45) DEFAULT NULL,
  `offer_letter_file` varchar(45) DEFAULT NULL,
  `date_of_leaving` varchar(45) DEFAULT NULL,
  `date_of_leaving_file` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees_information`
--

LOCK TABLES `employees_information` WRITE;
/*!40000 ALTER TABLE `employees_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expenses_gl`
--

DROP TABLE IF EXISTS `expenses_gl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `expenses_gl` (
  `S_NO` int NOT NULL AUTO_INCREMENT,
  `GL_code` varchar(45) DEFAULT NULL,
  `discription` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`S_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expenses_gl`
--

LOCK TABLES `expenses_gl` WRITE;
/*!40000 ALTER TABLE `expenses_gl` DISABLE KEYS */;
/*!40000 ALTER TABLE `expenses_gl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fields_lookup`
--

DROP TABLE IF EXISTS `fields_lookup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fields_lookup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `attr_id` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `start _date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=333 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fields_lookup`
--

LOCK TABLES `fields_lookup` WRITE;
/*!40000 ALTER TABLE `fields_lookup` DISABLE KEYS */;
INSERT INTO `fields_lookup` VALUES (11,'74','transparent',NULL,NULL),(12,'74','white',NULL,NULL),(13,'74','off-white',NULL,NULL),(14,'74','yellow',NULL,NULL),(15,'75','round',NULL,NULL),(16,'75','candle',NULL,NULL),(17,'145','Osram',NULL,NULL),(18,'145','wipro',NULL,NULL),(19,'75','pygmy',NULL,NULL),(20,'77','E-14','',NULL),(21,'77','E-27',NULL,NULL),(22,'77','GU-10',NULL,NULL),(23,'144','Dimmable',NULL,NULL),(24,'144','Non dimmable',NULL,NULL),(25,'46','black',NULL,NULL),(26,'46','White',NULL,NULL),(27,'95','E-14',NULL,NULL),(28,'95','E-27',NULL,NULL),(29,'95','GU-10',NULL,NULL),(30,'94','Metal',NULL,NULL),(31,'94','plastic',NULL,NULL),(32,'156','Top',NULL,NULL),(35,'156','Bottom',NULL,NULL),(36,'156','Both',NULL,NULL),(37,'156','None',NULL,NULL),(38,'400','Other',NULL,NULL),(39,'400','Circle',NULL,NULL),(40,'158','KG',NULL,NULL),(41,'158','Each',NULL,NULL),(42,'154','Single ply',NULL,NULL),(43,'154','Double Ply',NULL,NULL),(44,'154','Triple ply',NULL,NULL),(45,'68','killi cut',NULL,NULL),(46,'68','Diamond cut',NULL,NULL),(47,'68','Honeycomb',NULL,NULL),(48,'68','Chatai cut',NULL,NULL),(49,'68','Overlong cut',NULL,NULL),(50,'68','Rice cut',NULL,NULL),(51,'68','Deep diamond cut',NULL,NULL),(52,'68','Badam star cut',NULL,NULL),(53,'68','Fali cut',NULL,NULL),(54,'68','Leaf amber',NULL,NULL),(55,'68','Facet Cut',NULL,NULL),(56,'68','Star cut',NULL,NULL),(57,'68','Furl cut',NULL,NULL),(58,'68','Square gula cut',NULL,NULL),(59,'68','Eye cut',NULL,NULL),(60,'68','Lehar cut',NULL,NULL),(61,'68','Triangle cut',NULL,NULL),(62,'68','Flower cut',NULL,NULL),(63,'66','Lavender',NULL,NULL),(64,'66','Purple',NULL,NULL),(65,'66','Grey',NULL,NULL),(66,'66','Red',NULL,NULL),(67,'66','Frosted',NULL,NULL),(68,'66','Clear',NULL,NULL),(69,'66','Green',NULL,NULL),(70,'66','Yellow',NULL,NULL),(71,'66','Blue',NULL,NULL),(72,'76','3 watt',NULL,NULL),(73,'76','4 watt',NULL,NULL),(74,'76','4.5 watt',NULL,NULL),(75,'76','13 watt',NULL,NULL),(76,'76','15 watt',NULL,NULL),(77,'76','23 watt',NULL,NULL),(78,'76','25 watt',NULL,NULL),(79,'76','40 watt',NULL,NULL),(80,'76','50 watt',NULL,NULL),(81,'76','60 watt',NULL,NULL),(82,'146','KG',NULL,NULL),(83,'146','Each',NULL,NULL),(84,'56','Red',NULL,NULL),(85,'56','Blue',NULL,NULL),(86,'56','White',NULL,NULL),(87,'56','Yellow',NULL,NULL),(88,'56','black',NULL,NULL),(89,'56','Green',NULL,NULL),(90,'56','Grey',NULL,NULL),(91,'73','Copper',NULL,NULL),(92,'73','Aluminium',NULL,NULL),(93,'58','0.5 mm',NULL,NULL),(94,'58','0.75 mm',NULL,NULL),(95,'58','1 mm',NULL,NULL),(96,'58','2.5 mm',NULL,NULL),(97,'58','4 mm',NULL,NULL),(98,'58','6 mm',NULL,NULL),(99,'58','10 mm',NULL,NULL),(100,'58','16 mm',NULL,NULL),(101,'81','Single-core',NULL,NULL),(102,'81','2-Core',NULL,NULL),(103,'81','4-Taar',NULL,NULL),(104,'81','4- Pair',NULL,NULL),(107,'87','On / Off one way switch',NULL,NULL),(108,'87','Foot padel switch',NULL,NULL),(109,'88','2 Pintop',NULL,NULL),(110,'88','3 Pintop',NULL,NULL),(111,'93','KG ',NULL,NULL),(112,'93','Each',NULL,NULL),(113,'164','Lavender',NULL,NULL),(114,'164','Purple',NULL,NULL),(115,'164','Grey',NULL,NULL),(116,'164','Red',NULL,NULL),(117,'164','Frosted',NULL,NULL),(118,'164','Clear',NULL,NULL),(119,'164','Green',NULL,NULL),(120,'164','Yellow',NULL,NULL),(121,'164','Blue',NULL,NULL),(122,'165','killi cut',NULL,NULL),(123,'165','Diamond cut',NULL,NULL),(124,'165','Honeycomb cut',NULL,NULL),(125,'165','Overlong cut',NULL,NULL),(126,'165','Rice cut',NULL,NULL),(127,'165','Star Cut',NULL,NULL),(128,'165','Flower cut',NULL,NULL),(129,'171','Single ply',NULL,NULL),(130,'171','Double Ply',NULL,NULL),(131,'171','Triple ply',NULL,NULL),(132,'401','Top ',NULL,NULL),(133,'401','Bottom',NULL,NULL),(134,'401','Both',NULL,NULL),(135,'401','None',NULL,NULL),(136,'180','Circle',NULL,NULL),(137,'180','Other',NULL,NULL),(138,'172','Top',NULL,NULL),(139,'172','Bottom',NULL,NULL),(140,'172','Both',NULL,NULL),(141,'172','None',NULL,NULL),(142,'174','KG',NULL,NULL),(143,'174','Each',NULL,NULL),(144,'199','Lavender',NULL,NULL),(145,'199','Purple',NULL,NULL),(146,'199','Grey',NULL,NULL),(147,'199','Red',NULL,NULL),(148,'199','Frosted',NULL,NULL),(149,'199','Clear',NULL,NULL),(150,'199','Green',NULL,NULL),(151,'199','Yellow',NULL,NULL),(152,'199','Blue',NULL,NULL),(155,'200','killi cut',NULL,NULL),(156,'200','Diamond cut',NULL,NULL),(157,'200','Honeycomb cut',NULL,NULL),(158,'200','Fali cut ',NULL,NULL),(159,'200','Star Cut',NULL,NULL),(160,'200','Eye cut',NULL,NULL),(161,'210','KG',NULL,NULL),(162,'210','Each',NULL,NULL),(163,'207','Single ply ',NULL,NULL),(164,'207','Double Ply',NULL,NULL),(165,'207','Triple Ply',NULL,NULL),(166,'208','Top',NULL,NULL),(167,'208','Bottom',NULL,NULL),(168,'208','Both',NULL,NULL),(169,'208','None',NULL,NULL),(170,'403','Other',NULL,NULL),(171,'403','Circle',NULL,NULL),(172,'182','Lavender',NULL,NULL),(173,'182','Purple',NULL,NULL),(174,'182','Grey',NULL,NULL),(175,'182','Red',NULL,NULL),(176,'182','Frosted',NULL,NULL),(177,'182','Clear',NULL,NULL),(178,'182','Green',NULL,NULL),(179,'182','Yellow',NULL,NULL),(180,'182','Blue',NULL,NULL),(181,'249','Lavender',NULL,NULL),(182,'249','Purple',NULL,NULL),(183,'249','Grey',NULL,NULL),(184,'249','Red',NULL,NULL),(185,'249','Frosted',NULL,NULL),(186,'249','Clear',NULL,NULL),(187,'249','Green',NULL,NULL),(188,'249','Yellow',NULL,NULL),(189,'249','Blue',NULL,NULL),(190,'250','killi cut',NULL,NULL),(191,'250','Diamond cut',NULL,NULL),(192,'250','Honeycomb cut',NULL,NULL),(193,'250','Fali cut',NULL,NULL),(194,'250','Leaf cut',NULL,NULL),(195,'250','Facet cut',NULL,NULL),(196,'250','Star cut',NULL,NULL),(197,'250','Furl cut',NULL,NULL),(198,'250','Square gula cut',NULL,NULL),(199,'250','Eye cut',NULL,NULL),(200,'250','Lehar cut',NULL,NULL),(201,'250','Triangle cut',NULL,NULL),(202,'250','Flower cut',NULL,NULL),(203,'405','Other ',NULL,NULL),(204,'405','Circle',NULL,NULL),(205,'257','Single ply',NULL,NULL),(206,'257','Double ply',NULL,NULL),(207,'257','Triple ply',NULL,NULL),(208,'260','KG','',NULL),(209,'260','Each',NULL,NULL),(210,'258','Top',NULL,NULL),(211,'258','Bottom',NULL,NULL),(212,'258','Both',NULL,NULL),(213,'258','None',NULL,NULL),(214,'183','killi cut',NULL,NULL),(215,'183','Diamond cut',NULL,NULL),(216,'183','Honeycomb cut',NULL,NULL),(217,'183','chatai cut',NULL,NULL),(218,'183','Overlong cut',NULL,NULL),(219,'183','Rice cut',NULL,NULL),(220,'183','Star cut',NULL,NULL),(221,'183','Traingle cut',NULL,NULL),(222,'183','Flower cut',NULL,NULL),(223,'183','Lehar cut',NULL,NULL),(224,'189','Single ply',NULL,NULL),(225,'189','Double ply',NULL,NULL),(226,'189','Triple ply',NULL,NULL),(227,'190','Top',NULL,NULL),(228,'190','Bottom',NULL,NULL),(229,'190','Both',NULL,NULL),(230,'190','None',NULL,NULL),(232,'192','KG',NULL,NULL),(233,'192','Each',NULL,NULL),(234,'406','Other',NULL,NULL),(235,'406','Circle',NULL,NULL),(236,'292','Box pleated',NULL,NULL),(237,'292','Empire',NULL,NULL),(238,'292','Cone',NULL,NULL),(239,'292','Tapered Drum',NULL,NULL),(240,'292','Drum',NULL,NULL),(241,'292','Dome',NULL,NULL),(242,'292','Bell',NULL,NULL),(243,'296','Silk',NULL,NULL),(244,'296','coton',NULL,NULL),(245,'298','Top',NULL,NULL),(246,'298','Bottom',NULL,NULL),(247,'298','Both',NULL,NULL),(248,'298','none',NULL,NULL),(249,'301','E-14',NULL,NULL),(250,'301','E-27',NULL,NULL),(251,'302','Galler from Top',NULL,NULL),(252,'302','Gallery from Bottom',NULL,NULL),(253,'305','Soft',NULL,NULL),(254,'305','Hard',NULL,NULL),(255,'306','Lining Yes',NULL,NULL),(256,'306','Lining No',NULL,NULL),(257,'408','Powder coating',NULL,NULL),(258,'408','paint',NULL,NULL),(259,'410','Each',NULL,NULL),(260,'353','Meter',NULL,NULL),(261,'353','each',NULL,NULL),(262,'360','meter',NULL,NULL),(263,'360','each',NULL,NULL),(264,'367','meter',NULL,NULL),(265,'367','each',NULL,NULL),(266,'374','meter',NULL,NULL),(267,'374','each',NULL,NULL),(268,'285','White',NULL,NULL),(269,'285','Black',NULL,NULL),(270,'285','blue',NULL,NULL),(271,'285','green',NULL,NULL),(272,'285','pink',NULL,NULL),(273,'285','red',NULL,NULL),(274,'97','Each',NULL,NULL),(275,'97','Other',NULL,NULL),(313,'27','transparent',NULL,NULL),(314,'27','white',NULL,NULL),(315,'27','off-white',NULL,NULL),(316,'27','yellow',NULL,NULL),(317,'27','Silver',NULL,NULL),(326,'446','new',NULL,NULL),(327,'447','1',NULL,NULL),(328,'447','shape',NULL,NULL),(329,'458','KG',NULL,NULL),(330,'458','Gram',NULL,NULL),(331,'78','plastic',NULL,NULL),(332,'78','Bakelite',NULL,NULL);
/*!40000 ALTER TABLE `fields_lookup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuctions_by_roles`
--

DROP TABLE IF EXISTS `fuctions_by_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fuctions_by_roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `function_id` varchar(45) DEFAULT NULL,
  `function_name` varchar(45) DEFAULT NULL,
  `isAaccessble` varchar(45) DEFAULT NULL,
  `createdBy` varchar(45) DEFAULT NULL,
  `createdDate` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updatedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuctions_by_roles`
--

LOCK TABLES `fuctions_by_roles` WRITE;
/*!40000 ALTER TABLE `fuctions_by_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `fuctions_by_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `functions_checker`
--

DROP TABLE IF EXISTS `functions_checker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `functions_checker` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `function_id` int DEFAULT NULL,
  `is_allowed` tinyint(1) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `function_id` (`function_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `functions_checker`
--

LOCK TABLES `functions_checker` WRITE;
/*!40000 ALTER TABLE `functions_checker` DISABLE KEYS */;
INSERT INTO `functions_checker` VALUES (1,16,1,1,'2024-11-11','admin','2024-11-11','admin'),(2,16,1,1,'2024-11-11','admin','2024-11-11','admin');
/*!40000 ALTER TABLE `functions_checker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `functions_urls`
--

DROP TABLE IF EXISTS `functions_urls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `functions_urls` (
  `id` int NOT NULL AUTO_INCREMENT,
  `function_name` varchar(45) DEFAULT NULL,
  `filePath` varchar(45) DEFAULT NULL,
  `createdBy` varchar(45) DEFAULT NULL,
  `updatedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `functions_urls`
--

LOCK TABLES `functions_urls` WRITE;
/*!40000 ALTER TABLE `functions_urls` DISABLE KEYS */;
INSERT INTO `functions_urls` VALUES (1,'Requistion Request Creation','genrate_requition.php',NULL,NULL),(2,'Requistion Request Creation Detail','requisition.php',NULL,NULL),(3,'Store issuer','storeIsseuer.php',NULL,NULL),(4,'Store manager requisition approve','requisition.php',NULL,NULL),(5,'Item Request Creation Report','mangerApprove.php',NULL,NULL),(6,'Item Request Creation Form','itemAdd.php',NULL,NULL),(7,'All Item Data','allitems.php',NULL,NULL),(8,'Item Request Creation form 2 Main','itemMasterCreation.php',NULL,NULL),(9,'Po Summary History','purchaseorder.php',NULL,NULL),(10,'Po Request Approval','poRequests.php',NULL,NULL),(11,'Po Order Creation Form ','createPo.php',NULL,NULL),(12,'User Master Creation Report ','create_Receipt.php',NULL,NULL),(13,'User Master Creation FormReport ','users_form.php',NULL,NULL),(14,'User Master Search','userMasterSearch.php',NULL,NULL),(15,'Gate Entry Creation Form','gateentryform.php',NULL,NULL),(16,'GRN Creation Form','GRN/index.php',NULL,NULL),(17,'Grn Edit','search_year_table.php',NULL,NULL),(18,'GRN Report ','grnReport.php',NULL,NULL),(19,'Category Management','categoryManagement.php',NULL,NULL),(20,'Category Report','itemCategoryReports.php',NULL,NULL),(21,'Enter Lead Details','leadGnration.php',NULL,NULL),(22,'Query Report','query_report.php',NULL,NULL),(23,'Sale Order Form','saleOrderForm.php',NULL,NULL),(24,'Sales order Report','saleOrderForm.php',NULL,NULL),(25,'Create Employee','createEmployee.php',NULL,NULL),(26,'Search Employee ','searchEmployee.php',NULL,NULL),(27,'ASL Creation ','aslCreateForm.php',NULL,NULL),(28,'ASL Search','aslSearch.php',NULL,NULL),(29,'Customer Creation Form ','CustomerForm.php',NULL,NULL),(30,'Move Order Creation Form ','moveOrder.php',NULL,NULL),(31,'Create BOM ','createBom.php',NULL,NULL),(32,'Search Bom ','searchBom.php',NULL,NULL),(33,'permission check form','prmissions.php',NULL,NULL);
/*!40000 ALTER TABLE `functions_urls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `functions_urls11`
--

DROP TABLE IF EXISTS `functions_urls11`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `functions_urls11` (
  `id` int NOT NULL AUTO_INCREMENT,
  `function_name` varchar(100) NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `functions_urls11`
--

LOCK TABLES `functions_urls11` WRITE;
/*!40000 ALTER TABLE `functions_urls11` DISABLE KEYS */;
INSERT INTO `functions_urls11` VALUES (1,'home.php','2024-11-11','admin','2024-11-11','admin');
/*!40000 ALTER TABLE `functions_urls11` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gate_entry_form`
--

DROP TABLE IF EXISTS `gate_entry_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gate_entry_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(45) DEFAULT NULL,
  `no_of_boxes` int DEFAULT NULL,
  `fireght_charges` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `recieving_datetime` varchar(45) DEFAULT NULL,
  `mode_of_transport` varchar(45) DEFAULT NULL,
  `vehicle_number` varchar(45) DEFAULT NULL,
  `recieved_by` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `po_number` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gate_entry_form`
--

LOCK TABLES `gate_entry_form` WRITE;
/*!40000 ALTER TABLE `gate_entry_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `gate_entry_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grn_goods_receipt`
--

DROP TABLE IF EXISTS `grn_goods_receipt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grn_goods_receipt` (
  `inventory_id` int NOT NULL AUTO_INCREMENT,
  `item_id` varchar(50) DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `item_discription` varchar(45) DEFAULT NULL,
  `warehouse_location` varchar(45) DEFAULT NULL,
  `warehouse_code` varchar(45) DEFAULT NULL,
  `receiving_item` varchar(45) DEFAULT NULL,
  `purchase_order_id` varchar(45) DEFAULT NULL,
  `purchase_order_date` varchar(50) DEFAULT NULL,
  `purchase_order_line` varchar(45) DEFAULT NULL,
  `received_quantity` varchar(50) DEFAULT NULL,
  `recevied_date` varchar(50) DEFAULT NULL,
  `receiving_time` varchar(45) DEFAULT NULL,
  `finished` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `dimension` varchar(45) DEFAULT NULL,
  `box_no` varchar(50) DEFAULT NULL,
  `box_detail` varchar(45) DEFAULT NULL,
  `checked_by` varchar(45) DEFAULT NULL,
  `approved` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `serial_number_to` varchar(50) DEFAULT NULL,
  `serial_number_from` varchar(50) DEFAULT NULL,
  `vendor_name` varchar(45) DEFAULT NULL,
  `mode_of_transport` varchar(45) DEFAULT NULL,
  `vehical_detail` varchar(45) DEFAULT NULL,
  `invoice_num` varchar(50) DEFAULT NULL,
  `invoice_date` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`inventory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grn_goods_receipt`
--

LOCK TABLES `grn_goods_receipt` WRITE;
/*!40000 ALTER TABLE `grn_goods_receipt` DISABLE KEYS */;
/*!40000 ALTER TABLE `grn_goods_receipt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grn_goods_receipt_header`
--

DROP TABLE IF EXISTS `grn_goods_receipt_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grn_goods_receipt_header` (
  `id` int NOT NULL AUTO_INCREMENT,
  `warehouse_location` varchar(45) DEFAULT NULL,
  `warehouse_code` varchar(45) DEFAULT NULL,
  `purchase_order_id` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `vendor_name` varchar(45) DEFAULT NULL,
  `mode_of_transport` varchar(45) DEFAULT NULL,
  `vehical_detail` varchar(45) DEFAULT NULL,
  `invoice_num` varchar(50) DEFAULT NULL,
  `sub_inventory` varchar(45) DEFAULT NULL,
  `grn_goods_receipt_headercol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=283 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grn_goods_receipt_header`
--

LOCK TABLES `grn_goods_receipt_header` WRITE;
/*!40000 ALTER TABLE `grn_goods_receipt_header` DISABLE KEYS */;
INSERT INTO `grn_goods_receipt_header` VALUES (245,NULL,'1','601',NULL,'Mr Vivek tiwari',NULL,NULL,NULL,NULL,NULL),(246,NULL,'1','601',NULL,'Mr Vivek tiwari',NULL,NULL,NULL,NULL,NULL),(247,NULL,'1','601',NULL,'Mr Vivek tiwari',NULL,NULL,NULL,NULL,NULL),(248,NULL,'1','601',NULL,'Mr Vivek tiwari',NULL,NULL,NULL,NULL,NULL),(249,NULL,'1','601',NULL,'Mr Vivek tiwari',NULL,NULL,NULL,NULL,NULL),(250,NULL,'1','601',NULL,'Mr Vivek tiwari',NULL,NULL,NULL,NULL,NULL),(251,NULL,'1','601',NULL,'Mr Vivek tiwari',NULL,NULL,NULL,NULL,NULL),(252,NULL,'1','601',NULL,'Mr Vivek tiwari',NULL,NULL,NULL,NULL,NULL),(253,NULL,'1','603',NULL,'manish kumar',NULL,NULL,NULL,NULL,NULL),(254,NULL,'1','603',NULL,'manish kumar',NULL,NULL,NULL,NULL,NULL),(255,NULL,'1','629',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(256,NULL,'1','631',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(257,NULL,'1','643',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(258,NULL,'1','670',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(259,NULL,'1','675',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(260,NULL,'1','678',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(261,NULL,'1','683',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(262,NULL,'1','683',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(263,NULL,'1','683',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(264,NULL,'1','683',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(265,NULL,'1','683',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(266,NULL,'1','683',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(267,NULL,'1','683',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(268,NULL,'1','683',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(269,NULL,'1','683',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(270,NULL,'1','681',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(271,NULL,'1','681',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(272,NULL,'1','686',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(273,NULL,'1','685',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(274,NULL,'1','684',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(275,NULL,'1','688',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(276,NULL,'1','687',NULL,'XYZ',NULL,NULL,NULL,NULL,NULL),(277,NULL,'1','697',NULL,'DELHI',NULL,NULL,NULL,NULL,NULL),(278,NULL,'1','697',NULL,'DELHI',NULL,NULL,NULL,NULL,NULL),(279,NULL,'1','697',NULL,'DELHI',NULL,NULL,NULL,NULL,NULL),(280,NULL,'1','697',NULL,'DELHI',NULL,NULL,NULL,NULL,NULL),(281,NULL,'1','697',NULL,'DELHI',NULL,NULL,NULL,NULL,NULL),(282,NULL,'1','697',NULL,'DELHI',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `grn_goods_receipt_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grn_line_items`
--

DROP TABLE IF EXISTS `grn_line_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grn_line_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `grn_head_id` varchar(45) DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `po_line_id` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `po_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=347 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grn_line_items`
--

LOCK TABLES `grn_line_items` WRITE;
/*!40000 ALTER TABLE `grn_line_items` DISABLE KEYS */;
INSERT INTO `grn_line_items` VALUES (328,'247','El---lo-al-El-Ho--20-20','admin','admin','2024-11-07 10:15:41','2024-11-07 10:15:41','362','12','601'),(329,'248','El---lo-al-El-Ho--20-20','admin','admin','2024-11-07 10:18:06','2024-11-07 10:18:06','362','12','601'),(330,'250','El---lo-al-El-Bu--20-20','admin','admin','2024-11-07 10:24:32','2024-11-07 10:24:32','363','25','601'),(331,'251','El---lo-al-El-Bu--20-20','admin','admin','2024-11-07 10:30:48','2024-11-07 10:30:48','363','25','601'),(332,'253','El---lo-al-El-Bu--20-20','admin','admin','2024-11-07 12:38:52','2024-11-07 12:38:52','365','30','603'),(333,'255','Gl---lo-al-Gl-Pi--20-20','admin','admin','2024-11-07 20:17:55','2024-11-07 20:17:55','387','','629'),(334,'257','El---lo-al-El-Ho--20-20','admin','admin','2024-11-07 20:33:04','2024-11-07 20:33:04','400','','643'),(335,'258','El-44-Ho-lo-al-El-Ho--20-20','admin','admin','2024-11-08 18:10:06','2024-11-08 18:10:06','427','','670'),(336,'259','El---lo-al-El-Bu--20-20','admin','admin','2024-11-08 20:23:46','2024-11-08 20:23:46','432','','675'),(337,'260','Gl---lo-al-Gl-Sa--20-20','admin','admin','2024-11-08 22:14:47','2024-11-08 22:14:47','435','','678'),(338,'268','Gl---lo-al-Gl-Pi--20-20','admin','admin','2024-11-13 18:42:34','2024-11-13 18:42:34','440','','683'),(339,'270','El-44-Ho-lo-al-El-Ho--20-20','admin','admin','2024-11-13 19:40:09','2024-11-13 19:40:09','438','','681'),(340,'272','El---lo-al-El-Ho--20-20','admin','admin','2024-11-13 20:27:16','2024-11-13 20:27:16','443','','686'),(341,'273','Gl---lo-al-Gl-Pi--20-20','admin','admin','2024-11-13 20:49:39','2024-11-13 20:49:39','442','','685'),(342,'274','El-44-Ho-lo-al-El-Ho--20-20','admin','admin','2024-11-13 20:57:26','2024-11-13 20:57:26','441','','684'),(343,'275','El---lo-al-El-Ho--20-20','admin','admin','2024-11-13 21:52:46','2024-11-13 21:52:46','445','','688'),(344,'276','El-44-Ho-lo-al-El-Ho--20-20','admin','admin','2024-11-14 15:47:31','2024-11-14 15:47:31','444','','687'),(345,'279','BULB-JNJ-1172024','admin','admin','2024-11-24 06:43:44','2024-11-24 06:43:44','454','150','697'),(346,'','SHRINK WRAP-12322-1172024','admin','admin','2024-11-24 06:58:24','2024-11-24 06:58:24','455','100','697');
/*!40000 ALTER TABLE `grn_line_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grn_sub_line_status`
--

DROP TABLE IF EXISTS `grn_sub_line_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grn_sub_line_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `grn_head_id` varchar(45) DEFAULT NULL,
  `grn_line_id` varchar(45) DEFAULT NULL,
  `recQty` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `createdBy` varchar(45) DEFAULT NULL,
  `createdDate` varchar(45) DEFAULT NULL,
  `updatedBy` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `last_balance` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=535 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grn_sub_line_status`
--

LOCK TABLES `grn_sub_line_status` WRITE;
/*!40000 ALTER TABLE `grn_sub_line_status` DISABLE KEYS */;
INSERT INTO `grn_sub_line_status` VALUES (470,'247','328','10','received','admin','2024-11-07 15:45:41',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(471,'248','329','10','received','admin','2024-11-07 15:48:06',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(472,'248','329','10','Accepted','admin','2024-11-07 15:48:21',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(473,'248','329','10','Delivered','admin','2024-11-07 15:49:19',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(474,'250','330','10','received','admin','2024-11-07 15:54:32',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(475,'250','330','5','Accepted','admin','2024-11-07 15:56:08',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(476,'250','330','3','Delivered','admin','2024-11-07 16:00:24',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(477,'251','331','7','received','admin','2024-11-07 16:00:48',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(478,'251','331','5','Accepted','admin','2024-11-07 16:00:57',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(479,'251','331','5','Delivered','admin','2024-11-07 16:01:09',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(480,'253','332','20','received','admin','2024-11-07 18:08:52',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(481,'253','332','10','Accepted','admin','2024-11-07 18:09:09',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(482,'253','332','10','Delivered','admin','2024-11-07 18:09:35',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(483,'255','333','10','received','admin','2024-11-08 01:47:55',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20',NULL,NULL),(484,'255','333','10','Accepted','admin','2024-11-08 01:48:01',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20',NULL,NULL),(485,'255','333','10','Delivered','admin','2024-11-08 01:48:07',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20',NULL,NULL),(486,'257','334','100','received','admin','2024-11-08 02:03:04',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(487,'257','334','100','Accepted','admin','2024-11-08 02:03:10',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(488,'257','334','100','Delivered','admin','2024-11-08 02:03:24',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(489,'258','335','20','received','admin','2024-11-08 23:40:06',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(490,'258','335','20','Accepted','admin','2024-11-08 23:40:11',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(491,'258','335','20','Delivered','admin','2024-11-08 23:40:24',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(492,'258','335','20','Delivered','admin','2024-11-08 23:44:30',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(493,'259','336','1','received','admin','2024-11-09 01:53:46',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(494,'259','336','1','Accepted','admin','2024-11-09 01:53:51',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(495,'259','336','1','Delivered','admin','2024-11-09 01:53:56',NULL,NULL,'El---lo-al-El-Bu--20-20',NULL,NULL),(496,'260','337','42','received','admin','2024-11-09 03:44:47',NULL,NULL,'Gl---lo-al-Gl-Sa--20-20',NULL,NULL),(497,'260','337','42','Accepted','admin','2024-11-09 03:44:53',NULL,NULL,'Gl---lo-al-Gl-Sa--20-20',NULL,NULL),(498,'260','337','42','Delivered','admin','2024-11-09 03:45:00',NULL,NULL,'Gl---lo-al-Gl-Sa--20-20',NULL,NULL),(499,'268','338','10','received','admin','2024-11-14 00:12:34',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20',NULL,NULL),(500,'268','338','10','Accepted','admin','2024-11-14 00:13:02',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20',NULL,NULL),(501,'268','338','10','Delivered','admin','2024-11-14 00:13:10',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20',NULL,NULL),(502,'270','339','76','received','admin','2024-11-14 01:10:09',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(503,'270','339','76','Accepted','admin','2024-11-14 01:10:18',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(504,'270','339','76','Delivered','admin','2024-11-14 01:10:25',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(505,'272','340','12','received','admin','2024-11-14 01:57:16',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(506,'272','340','12','Accepted','admin','2024-11-14 01:57:27',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(507,'272','340','12','Delivered','admin','2024-11-14 01:57:32',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(508,'273','341','20','received','admin','2024-11-14 02:19:39',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20',NULL,NULL),(509,'273','341','20','Accepted','admin','2024-11-14 02:19:47',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20',NULL,NULL),(510,'273','341','20','Delivered','admin','2024-11-14 02:19:57',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20',NULL,NULL),(511,'274','342','89','received','admin','2024-11-14 02:27:26',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(512,'274','342','89','Accepted','admin','2024-11-14 02:27:33',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(513,'274','342','89','Delivered','admin','2024-11-14 02:27:59',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(514,'275','343','8','received','admin','2024-11-14 03:22:46',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(515,'275','343','8','Accepted','admin','2024-11-14 03:22:53',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(516,'275','343','8','Delivered','admin','2024-11-14 03:22:59',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(517,'275','343','8','Delivered','admin','2024-11-14 03:23:00',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(518,'275','343','8','Damaged','admin','2024-11-14 03:26:50',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(519,'275','343','8','Rejected','admin','2024-11-14 03:26:55',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(520,'275','343','8','Rejected','admin','2024-11-14 03:31:37',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(521,'275','343','8','Damaged','admin','2024-11-14 03:31:49',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(522,'275','343','8','Damaged','admin','2024-11-14 03:31:49',NULL,NULL,'El---lo-al-El-Ho--20-20',NULL,NULL),(523,'276','344','111','received','admin','2024-11-14 21:17:31',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(524,'276','344','111','Accepted','admin','2024-11-14 21:17:37',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(525,'276','344','111','Delivered','admin','2024-11-14 21:17:42',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20',NULL,NULL),(526,'279','345','10','received','admin','2024-11-24 12:13:44',NULL,NULL,'BULB-JNJ-1172024',NULL,NULL),(527,'279','345','10','Accepted','admin','2024-11-24 12:13:51',NULL,NULL,'BULB-JNJ-1172024',NULL,NULL),(528,'279','345','10','Delivered','admin','2024-11-24 12:13:58',NULL,NULL,'BULB-JNJ-1172024',NULL,NULL),(529,'279','345','10','Delivered','admin','2024-11-24 12:15:14',NULL,NULL,'BULB-JNJ-1172024',NULL,NULL),(530,'','346','10','received','admin','2024-11-24 12:28:24',NULL,NULL,'SHRINK WRAP-12322-1172024',NULL,NULL),(531,'','346','10','Accepted','admin','2024-11-24 12:28:46',NULL,NULL,'SHRINK WRAP-12322-1172024',NULL,NULL),(532,'','346','10','Delivered','admin','2024-11-24 12:28:54',NULL,NULL,'SHRINK WRAP-12322-1172024',NULL,NULL),(533,'','346','10','Delivered','admin','2024-11-24 12:31:35',NULL,NULL,'SHRINK WRAP-12322-1172024',NULL,NULL),(534,'282','346','10','Delivered','admin','2024-11-24 12:35:05',NULL,NULL,'SHRINK WRAP-12322-1172024',NULL,NULL);
/*!40000 ALTER TABLE `grn_sub_line_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_master_main`
--

DROP TABLE IF EXISTS `item_master_main`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `item_master_main` (
  `S_No` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(200) DEFAULT NULL,
  `Item_Category` varchar(45) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `sub_category` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `SI_unit` varchar(45) DEFAULT NULL,
  `Material` varchar(45) DEFAULT NULL,
  `Design` varchar(45) DEFAULT NULL,
  `item_type` varchar(45) DEFAULT NULL,
  `Half_Full_Thread` varchar(45) DEFAULT NULL,
  `Holder_Thread` varchar(45) DEFAULT NULL,
  `Holder_type` varchar(45) DEFAULT NULL,
  `Thread` varchar(45) DEFAULT NULL,
  `Brand` varchar(45) DEFAULT NULL,
  `Light_Output_colour` varchar(45) DEFAULT NULL,
  `Colour` varchar(45) DEFAULT NULL,
  `Cut` varchar(45) DEFAULT NULL,
  `Height` varchar(45) DEFAULT NULL,
  `Length` varchar(45) DEFAULT NULL,
  `Breadth` varchar(45) DEFAULT NULL,
  `Upper_Dia` varchar(50) DEFAULT NULL,
  `Bottom_Dia` varchar(45) DEFAULT NULL,
  `Centre_Hole_dia` varchar(45) DEFAULT NULL,
  `Size` varchar(45) DEFAULT NULL,
  `Watt` varchar(45) DEFAULT NULL,
  `Shape` varchar(45) DEFAULT NULL,
  `Side_Hole_dia` varchar(45) DEFAULT NULL,
  `Top_hole_dia` varchar(45) DEFAULT NULL,
  `No_of_ply` varchar(45) DEFAULT NULL,
  `Style` varchar(45) DEFAULT NULL,
  `Thickness` varchar(45) DEFAULT NULL,
  `Weight` varchar(45) DEFAULT NULL,
  `Depth` varchar(45) DEFAULT NULL,
  `Bottom_hole_dia` varchar(45) DEFAULT NULL,
  `Bottom_hole` varchar(45) DEFAULT NULL,
  `Core` varchar(45) DEFAULT NULL,
  `Inner_Outer_thread` varchar(45) DEFAULT NULL,
  `Upper_thread` varchar(45) DEFAULT NULL,
  `Lower_thread` varchar(45) DEFAULT NULL,
  `Thread_length` varchar(45) DEFAULT NULL,
  `Indian_Imported` varchar(45) DEFAULT NULL,
  `In_built_switch` varchar(45) DEFAULT NULL,
  `Wire_type` varchar(45) DEFAULT NULL,
  `Vendor` varchar(45) DEFAULT NULL,
  `standard_npd` varchar(45) DEFAULT NULL,
  `attribute2` varchar(45) DEFAULT NULL,
  `attribute3` varchar(45) DEFAULT NULL,
  `itemmastercol` varchar(45) DEFAULT NULL,
  `imagePath` varchar(45) DEFAULT NULL,
  `createdBy` varchar(45) DEFAULT NULL,
  `updatedBy` varchar(45) DEFAULT NULL,
  `departement` varchar(45) DEFAULT NULL,
  `updatedDate` varchar(45) DEFAULT NULL,
  `Long_Description` varchar(450) DEFAULT NULL,
  `Pintop` varchar(45) DEFAULT NULL,
  `Discount` varchar(45) DEFAULT NULL,
  `itemStatus` varchar(45) DEFAULT NULL,
  `createdDate` varchar(45) DEFAULT NULL,
  `fabric` varchar(45) DEFAULT NULL,
  `fabric_colour` varchar(45) DEFAULT NULL,
  `piping` varchar(45) DEFAULT NULL,
  `piping_color` varchar(45) DEFAULT NULL,
  `acrylic_sheet` varchar(45) DEFAULT NULL,
  `gallery_heght` varchar(45) DEFAULT NULL,
  `sheet` varchar(45) DEFAULT NULL,
  `sheet_color` varchar(45) DEFAULT NULL,
  `powder_coating` varchar(45) DEFAULT NULL,
  `subCatId` varchar(45) DEFAULT NULL,
  `colour_temparature` varchar(45) DEFAULT NULL,
  `Dimmable` varchar(45) DEFAULT NULL,
  `Location` varchar(45) DEFAULT NULL,
  `Collar` varchar(45) DEFAULT NULL,
  `Diameter` varchar(45) DEFAULT NULL,
  `Socket` varchar(45) DEFAULT NULL,
  `Ink_type` varchar(45) DEFAULT NULL,
  `Transparent` varchar(45) DEFAULT NULL,
  `piping_length` varchar(45) DEFAULT NULL,
  `Lining` varchar(45) DEFAULT NULL,
  `Lining_colour` varchar(45) DEFAULT NULL,
  `gallery` varchar(45) DEFAULT NULL,
  `Gallery_type` varchar(45) DEFAULT NULL,
  `attribute1` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`S_No`),
  UNIQUE KEY `item_code_UNIQUE` (`item_code`)
) ENGINE=InnoDB AUTO_INCREMENT=455 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_master_main`
--

LOCK TABLES `item_master_main` WRITE;
/*!40000 ALTER TABLE `item_master_main` DISABLE KEYS */;
INSERT INTO `item_master_main` VALUES (428,'El---lo-al-El-Bu--20-20','Electrical','Bulb---lore-algo-Elec',NULL,'2321','KG','plastic','','row_item','','','','','wipro','transparent','white','shape','12cm','','1.5 cm','','','','','50 watt','round','2cm','','','','lorem ipsum','','','lorem ipsum',NULL,'','','','','','','','','xyz',NULL,'','',NULL,'1730966862_Screenshot 2024-08-20 114403.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','1','200','Non dimmable','delhi','','','E-14','','','','','','','','',NULL,NULL,NULL,NULL),(429,'Gl---lo-al-Gl-Ur--20-20','Glass','Urn---lore-algo-Glas',NULL,'2234','KG','','','finish_good','','','','','wert','','Blue','Triangle cut','12','2cm','1.5','','','','','','Circle','','','Single ply','','','33','','',NULL,'','','','','','','','','abc',NULL,'','',NULL,'1730971040_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','4','','','pune','Top','','','','','','','','','','',NULL,NULL,NULL,NULL),(430,'Gl---lo-al-Gl-Pi--20-20','Glass','Pipe---lore-algo-Glas',NULL,'2234','KG','','','','','','','','wert','','Lavender','Diamond cut','12','2cm','1.5','','','','','','Circle','','','Double Ply','','','33','','',NULL,'','','','','','','','','abc',NULL,'','',NULL,'1730971146_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','6','','','pune','Top','','','','','','','','','','',NULL,NULL,NULL,NULL),(431,'El---lo-al-El-Ho--20-20','Electrical','Holder---lore-algo-Elec',NULL,'222','Other','Metal','','finish_good','','','','','osram','','black','','','2cm','','','','','','','','','','','','','','','',NULL,'','','','','','','','','manish',NULL,'','',NULL,'1730968937_Screenshot 2024-08-21 165533.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','2','','','pune','','','E-14','','','','','','','','',NULL,NULL,NULL,NULL),(432,'El-44-Ho-lo-al-El-Ho--20-20','Electrical','Holder-448-Hold-lore-algo-Elec',NULL,'222','Other','Metal','','finish_good','','','','','osram','','black','','','2cm','','','','','','','','','','','','','','','',NULL,'','','','','','','','','manish',NULL,'','',NULL,'1730969370_Screenshot 2024-08-21 165533.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','2','','','pune','','2cm','E-14','','','','','','','','',NULL,NULL,NULL,NULL),(433,'Gl---lo-al-Gl-Sh--20-20','Glass','Shade---lore-algo-Glas',NULL,'2234','KG','','','finish_good','','','','','wert','','Yellow','Flower cut','12','2cm','1.5','','','','','','Other','','','Single ply','','','33','','',NULL,'','','','','','','','','abc',NULL,'','',NULL,'1730971248_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','7','','','pune','Top','','','','','','','','','','',NULL,NULL,NULL,NULL),(434,'Gl---lo-al-Gl-Sa--20-20','Glass','Samadhan---lore-algo-Glas',NULL,'2234','Each','','','finish_good','','','','','wert','','Purple','killi cut','12','2cm','1.5','','','','','','Other','','','Triple Ply','','','33','','',NULL,'','','','','','','','','abc',NULL,'','',NULL,'1730971326_Screenshot 2024-08-21 162930.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','8','','','pune','Bottom','','','','','','','','','','',NULL,NULL,NULL,NULL),(435,'Gl---lo-al-Gl-Ba--20-20','Glass','Balls---lore-algo-Glas',NULL,'2234','KG','','','finish_good','','','','','wert','','Yellow','Triangle cut','12','2cm','1.5','','','','','','Circle','','','Double ply','','','33','','',NULL,'','','','','','','','','abc',NULL,'','',NULL,'1730971395_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','9','','','pune','Bottom','','','','','','','','','','',NULL,NULL,NULL,NULL),(436,'El---lo-al-El-Wi--20-20','Electrical','Wire---lore-algo-Elec',NULL,'3242','KG ','Copper','','finish_good','','','','','osram','','Blue','','','123','','','','','16 mm','','','','','','','','','','',NULL,'','','','','','','On / Off one way switch','2-Core','antosh',NULL,'','',NULL,'1730970878_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','3 Pintop','12','Approve','24-11-07','','','','','','',NULL,'','','3','','','delhi','','','','','','','','','','','',NULL,NULL,NULL,NULL),(437,'Me---lo-al-Me-ba--20-20','Metal','base---lore-algo-Meta',NULL,'2000','','plastic','','','','','','243','','','','','','','1.5','2cm','3cm','2cm','','','circle','','','','','','','','',NULL,'','','1234','22','21','','','','vivek tiwari',NULL,'','',NULL,'1730971568_Screenshot 2024-08-21 165533.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','5','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL),(438,'St---lo-al-St-St--20-20','Statioery','Staionery---lore-algo-Stat',NULL,'22331','kg','','','finish_good','','','','','osram','','blue','','','','','','','','12','','','','','','','','','','',NULL,'','','','','','','','','manish',NULL,'','',NULL,'1730971877_Screenshot 2024-08-21 175725.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','10','','','pune','','','','lorem ipsum','','','','','','','',NULL,NULL,NULL,NULL),(442,'Ac---lo-al-Ac-Ac--20-20','Acrylic_Shades','Acrylic_diffuser---loer-algo-Acry',NULL,'','','','','finish_good','','','','','','','green','','','','','','','2mm','21','','circle','','','','','','','','',NULL,'','','','','','','','','antosh',NULL,'','',NULL,'1730979913_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'lorem','','','Approve','24-11-07','','','','','','',NULL,'','','12','','','','','','','','3mm','','','','','','',NULL,NULL,NULL,NULL),(443,'Cr---lo-al-Cr-Cr--20-20','Crystal','Crystal---loer-algo-Crys',NULL,'2005','','plastic','','finish_good','','','','','','','red','shep','12','','','2cm','3cm','','','','circle','','','2','xyz','','33','','',NULL,'','','','','','','','','manish',NULL,'','',NULL,'1730980264_Screenshot 2024-08-21 165533.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','13','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL),(444,'Pa---lo-al-Pa-Bu--20-20','Packaging','Bubble wrap---loer-algo-Pack',NULL,'2234','Meter','','','row_item','','','','','wert','','','','12','123','1.5','','','','','','','','','','','','','','',NULL,'','','','','','','','','abc',NULL,'','',NULL,'1730980675_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','14','','','pune','','','','','','','','','','','',NULL,NULL,NULL,NULL),(445,'SHRINK WRAP-12322-1172024','Packaging','Shrink wrap---lore-algo-Pack',NULL,'2300','meter','','','finish_good','','','','','osram','','','','22','12','32','','','','','','','','','','','','','','',NULL,'','','','','','','','','manish',NULL,'','',NULL,'1730980983_Screenshot 2024-08-21 170234.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','15','','','pune','','','','','','','','','','','',NULL,NULL,NULL,NULL),(446,'Pa---lo-al-Pa-Co--20-20','Packaging','Corrugated boxes---lore-algo-Pack',NULL,'2300','meter','','','finish_good','','','','','osram','','','','22','12','32','','','','','','','','','2','','','','','',NULL,'','','','','','','','','manish',NULL,'','',NULL,'1730982405_Screenshot 2024-08-21 170313.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','16','','','pune','','','','','','','','','','','',NULL,NULL,NULL,NULL),(447,'','Packaging','Corrugated boxes---lore-algo-Pack',NULL,'3000','each','','','finish_good','','','','','osram','','','','22','12','32','','','','','','','','','2','','','','','',NULL,'','','','','','','','','ajay kumar',NULL,'','',NULL,'1730981243_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','16','','','pune','','','','','','','','','','','',NULL,NULL,NULL,NULL),(448,'El-SIL-YEL-CAN-4 W-E-1','Electrical','Bulb-Silv-yell-cand-4 wa-E-14',NULL,'2300','KG','plastic','','finish_good','','','','','Osram','yellow','Silver','shape','22','','32','','','','','4 watt','candle','2cm','','','','21cm','','','21cm',NULL,'','','','','','','','','manish',NULL,'','',NULL,'1730985311_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','','','',NULL,'','','1','12','Non dimmable','pune','','','E-14','','','','','','','','',NULL,NULL,NULL,NULL),(450,'Me-xy-12-12-2c-2c-3c-lo-we-2c','Metal','base-xyz-12-12-2cm-2cm',NULL,'2300','','xyz','','finish_good','','','','12','','','','','','','12','2cm','2cm','3cm','','','lorem','','','','','','','','',NULL,'','we','2cm','2','12','','','','manish',NULL,'','',NULL,'1730984555_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','SAVE','24-11-07','','','','','','',NULL,'','','5','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL),(452,'El-whi-tra-rou-50 ','Electrical','Bulb-whit-tran-roun-50 w',NULL,'2300','KG','Bakelite','','row_item','','','','','wipro','transparent','white','shape','22','','32','','','','','50 watt','round','2cm','','','','12','','','12',NULL,'','','','','','','','','manish',NULL,'','',NULL,'1730985004_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-12','','','','','','',NULL,'','','1','23','Non dimmable','pune','','','E-14','','','','','','','','',NULL,NULL,NULL,NULL),(453,'BULB-JNJ-1172024','Electrical','Bulb-----Elec',NULL,'jknjkn','Each','plastic','','','','','','','wipro','white','transparent','1','jn','','jknjk','','','','','4 watt','candle','kj','','','','njkn','','','njkn',NULL,'','','','','','','','','jknjkn',NULL,'','',NULL,'1730979647_Screenshot 2024-10-27 005233.png','admin',NULL,'departement',NULL,'kjn','','kjn','Approve','24-11-12','','','','','','',NULL,'','','1','nkj','Non dimmable','kjnjk','','','E-14','','','','','','','','',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `item_master_main` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_master_temp`
--

DROP TABLE IF EXISTS `item_master_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `item_master_temp` (
  `S_No` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(200) NOT NULL,
  `Item_Category` varchar(45) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `sub_category` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `SI_unit` varchar(45) DEFAULT NULL,
  `Material` varchar(45) DEFAULT NULL,
  `Design` varchar(45) DEFAULT NULL,
  `item_type` varchar(45) DEFAULT NULL,
  `Half_Full_Thread` varchar(45) DEFAULT NULL,
  `Holder_Thread` varchar(45) DEFAULT NULL,
  `Holder_type` varchar(45) DEFAULT NULL,
  `Thread` varchar(45) DEFAULT NULL,
  `Brand` varchar(45) DEFAULT NULL,
  `Light_Output_colour` varchar(45) DEFAULT NULL,
  `Colour` varchar(45) DEFAULT NULL,
  `Cut` varchar(45) DEFAULT NULL,
  `Height` varchar(45) DEFAULT NULL,
  `Length` varchar(45) DEFAULT NULL,
  `Breadth` varchar(45) DEFAULT NULL,
  `Upper_Dia` varchar(50) DEFAULT NULL,
  `Bottom_Dia` varchar(45) DEFAULT NULL,
  `Centre_Hole_dia` varchar(45) DEFAULT NULL,
  `Size` varchar(45) DEFAULT NULL,
  `Watt` varchar(45) DEFAULT NULL,
  `Shape` varchar(45) DEFAULT NULL,
  `Side_Hole_dia` varchar(45) DEFAULT NULL,
  `Top_hole_dia` varchar(45) DEFAULT NULL,
  `No_of_ply` varchar(45) DEFAULT NULL,
  `Style` varchar(45) DEFAULT NULL,
  `Thickness` varchar(45) DEFAULT NULL,
  `Weight` varchar(45) DEFAULT NULL,
  `Depth` varchar(45) DEFAULT NULL,
  `Bottom_hole_dia` varchar(45) DEFAULT NULL,
  `Bottom_hole` varchar(45) DEFAULT NULL,
  `Core` varchar(45) DEFAULT NULL,
  `Inner_Outer_thread` varchar(45) DEFAULT NULL,
  `Upper_thread` varchar(45) DEFAULT NULL,
  `Lower_thread` varchar(45) DEFAULT NULL,
  `Thread_length` varchar(45) DEFAULT NULL,
  `Indian_Imported` varchar(45) DEFAULT NULL,
  `In_built_switch` varchar(45) DEFAULT NULL,
  `Wire_type` varchar(45) DEFAULT NULL,
  `Vendor` varchar(45) DEFAULT NULL,
  `attribute1` varchar(45) DEFAULT NULL,
  `attribute2` varchar(45) DEFAULT NULL,
  `attribute3` varchar(45) DEFAULT NULL,
  `itemmastercol` varchar(45) DEFAULT NULL,
  `imagePath` varchar(45) DEFAULT NULL,
  `createdBy` varchar(45) DEFAULT NULL,
  `updatedBy` varchar(45) DEFAULT NULL,
  `departement` varchar(45) DEFAULT NULL,
  `updatedDate` varchar(45) DEFAULT NULL,
  `Long_Description` varchar(450) DEFAULT NULL,
  `Pintop` varchar(45) DEFAULT NULL,
  `Discount` varchar(45) DEFAULT NULL,
  `itemStatus` varchar(45) DEFAULT NULL,
  `createdDate` varchar(45) DEFAULT NULL,
  `fabric` varchar(45) DEFAULT NULL,
  `fabric_colour` varchar(45) DEFAULT NULL,
  `piping` varchar(45) DEFAULT NULL,
  `piping_color` varchar(45) DEFAULT NULL,
  `piping_length` varchar(45) DEFAULT NULL,
  `acrylic_sheet` varchar(45) DEFAULT NULL,
  `gallery_heght` varchar(45) DEFAULT NULL,
  `sheet` varchar(45) DEFAULT NULL,
  `sheet_color` varchar(45) DEFAULT NULL,
  `Frame` varchar(45) DEFAULT NULL,
  `subCatId` varchar(45) DEFAULT NULL,
  `colour_temparature` varchar(45) DEFAULT NULL,
  `Dimmable` varchar(45) DEFAULT NULL,
  `Location` varchar(45) DEFAULT NULL,
  `Collar` varchar(45) DEFAULT NULL,
  `Diameter` varchar(45) DEFAULT NULL,
  `Socket` varchar(45) DEFAULT NULL,
  `Ink_type` varchar(45) DEFAULT NULL,
  `Transparent` varchar(45) DEFAULT NULL,
  `Lining_colour` varchar(45) DEFAULT NULL,
  `Lining` varchar(45) DEFAULT NULL,
  `Gallery_type` varchar(45) DEFAULT NULL,
  `gallery` varchar(45) DEFAULT NULL,
  `Finish_type` varchar(45) DEFAULT NULL,
  `gallery_height` varchar(45) DEFAULT NULL,
  `powder_coating` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`S_No`),
  UNIQUE KEY `item_code_UNIQUE` (`item_code`)
) ENGINE=InnoDB AUTO_INCREMENT=485 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_master_temp`
--

LOCK TABLES `item_master_temp` WRITE;
/*!40000 ALTER TABLE `item_master_temp` DISABLE KEYS */;
INSERT INTO `item_master_temp` VALUES (447,'El---lo-al-El-Bu--20-20','Electrical','Bulb---lore-algo-Elec',NULL,'2321','KG','plastic','','row_item','','','','','wipro','transparent','white','shape','12cm','','1.5 cm','','','','','50 watt','round','2cm','','','','lorem ipsum','','','lorem ipsum',NULL,'','','','','','','','','xyz','','','',NULL,'1730966862_Screenshot 2024-08-20 114403.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','1','200','Non dimmable','delhi','',NULL,'E-14','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(448,'El---lo-al-El-Ho--20-20','Electrical','Holder---lore-algo-Elec',NULL,'222','Other','Metal','','finish_good','','','','','osram','','black','','','2cm','','','','','','','','','','','','','','','',NULL,'','','','','','','','','manish','','','',NULL,'1730968937_Screenshot 2024-08-21 165533.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','2','','','pune','',NULL,'E-14','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(450,'El-44-Ho-lo-al-El-Ho--20-20','Electrical','Holder-448-Hold-lore-algo-Elec',NULL,'222','Other','Metal','','finish_good','','','','','osram','','black','','','2cm','','','','','','','','','','','','','','','',NULL,'','','','','','','','','manish','','','',NULL,'1730969370_Screenshot 2024-08-21 165533.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','2','','','pune','','2cm','E-14','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(451,'El---lo-al-El-Wi--20-20','Electrical','Wire---lore-algo-Elec',NULL,'3242','KG ','Copper','','finish_good','','','','','osram','','Blue','','','123','','','','','16 mm','','','','','','','','','','',NULL,'','','','','','','On / Off one way switch','2-Core','antosh','','','',NULL,'1730970878_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','3 Pintop','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','3','','','delhi','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(452,'Gl---lo-al-Gl-Ur--20-20','Glass','Urn---lore-algo-Glas',NULL,'2234','KG','','','finish_good','','','','','wert','','Blue','Triangle cut','12','2cm','1.5','','','','','','Circle','','','Single ply','','','33','','',NULL,'','','','','','','','','abc','','','',NULL,'1730971040_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','4','','','pune','Top','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(453,'Gl---lo-al-Gl-Pi--20-20','Glass','Pipe---lore-algo-Glas',NULL,'2234','KG','','','','','','','','wert','','Lavender','Diamond cut','12','2cm','1.5','','','','','','Circle','','','Double Ply','','','33','','',NULL,'','','','','','','','','abc','','','',NULL,'1730971146_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','6','','','pune','Top','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(454,'Gl---lo-al-Gl-Sh--20-20','Glass','Shade---lore-algo-Glas',NULL,'2234','KG','','','finish_good','','','','','wert','','Yellow','Flower cut','12','2cm','1.5','','','','','','Other','','','Single ply','','','33','','',NULL,'','','','','','','','','abc','','','',NULL,'1730971248_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','7','','','pune','Top','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(455,'Gl---lo-al-Gl-Sa--20-20','Glass','Samadhan---lore-algo-Glas',NULL,'2234','Each','','','finish_good','','','','','wert','','Purple','killi cut','12','2cm','1.5','','','','','','Other','','','Triple Ply','','','33','','',NULL,'','','','','','','','','abc','','','',NULL,'1730971326_Screenshot 2024-08-21 162930.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','8','','','pune','Bottom','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(456,'Gl---lo-al-Gl-Ba--20-20','Glass','Balls---lore-algo-Glas',NULL,'2234','KG','','','finish_good','','','','','wert','','Yellow','Triangle cut','12','2cm','1.5','','','','','','Circle','','','Double ply','','','33','','',NULL,'','','','','','','','','abc','','','',NULL,'1730971395_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','9','','','pune','Bottom','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(457,'Me---lo-al-Me-ba--20-20','Metal','base---lore-algo-Meta',NULL,'2000','','plastic','','','','','','243','','','','','','','1.5','2cm','3cm','2cm','','','circle','','','','','','','','',NULL,'','','1234','22','21','','','','vivek tiwari','','','',NULL,'1730971568_Screenshot 2024-08-21 165533.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','5','','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(458,'St---lo-al-St-St--20-20','Statioery','Staionery---lore-algo-Stat',NULL,'22331','kg','','','finish_good','','','','','osram','','blue','','','','','','','','12','','','','','','','','','','',NULL,'','','','','','','','','manish','','','',NULL,'1730971877_Screenshot 2024-08-21 175725.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','10','','','pune','','','','lorem ipsum','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(462,'Sh---lo-al-Sh-Sh--20-20','Shades','Shades---loer-algo-Shad',NULL,'24356','Each','','','finish_good','','','','','osram','','','','12','','','2cm','3cm','','','','circle','','','','Box pleated','','','','',NULL,'','','','','','','','','antosh','','','',NULL,'1730979550_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','SAVE','24-11-07','Silk','red','Top','',NULL,'xyz','12',NULL,'','Powder coating','11','','','pune','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(463,'BULB-JNJ-1172024','Electrical','Bulb-----Elec',NULL,'jknjkn','Each','plastic','','','','','','','wipro','white','transparent','1','jn','','jknjk','','','','','4 watt','candle','kj','','','','njkn','','','njkn',NULL,'','','','','','','','','jknjkn','','','',NULL,'1730979647_Screenshot 2024-10-27 005233.png','admin',NULL,'departement',NULL,'kjn','','kjn','Approve','24-11-07','','','','',NULL,'','',NULL,'','','1','nkj','Non dimmable','kjnjk','','','E-14','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(464,'Ac---lo-al-Ac-Ac--20-20','Acrylic_Shades','Acrylic_diffuser---loer-algo-Acry',NULL,'','','','','finish_good','','','','','','','green','','','','','','','2mm','21','','circle','','','','','','','','',NULL,'','','','','','','','','antosh','','','',NULL,'1730979913_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'lorem','','','Approve','24-11-07','','','','',NULL,'','',NULL,'','','12','','','','','','','','3mm',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(465,'Cr---lo-al-Cr-Cr--20-20','Crystal','Crystal---loer-algo-Crys',NULL,'2005','','plastic','','finish_good','','','','','','','red','shep','12','','','2cm','3cm','','','','circle','','','2','xyz','','33','','',NULL,'','','','','','','','','manish','','','',NULL,'1730980264_Screenshot 2024-08-21 165533.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','13','','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(466,'Pa---lo-al-Pa-Bu--20-20','Packaging','Bubble wrap---loer-algo-Pack',NULL,'2234','Meter','','','row_item','','','','','wert','','','','12','123','1.5','','','','','','','','','','','','','','',NULL,'','','','','','','','','abc','','','',NULL,'1730980675_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','14','','','pune','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(467,'SHRINK WRAP-12322-1172024','Packaging','Shrink wrap---lore-algo-Pack',NULL,'2300','meter','','','finish_good','','','','','osram','','','','22','12','32','','','','','','','','','','','','','','',NULL,'','','','','','','','','manish','','','',NULL,'1730980983_Screenshot 2024-08-21 170234.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','15','','','pune','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(468,'','Packaging','Corrugated boxes---lore-algo-Pack',NULL,'3000','each','','','finish_good','','','','','osram','','','','22','12','32','','','','','','','','','2','','','','','',NULL,'','','','','','','','','ajay kumar','','','',NULL,'1730981243_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','16','','','pune','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(473,'Pa---lo-al-Pa-Co--20-20','Packaging','Corrugated boxes---lore-algo-Pack',NULL,'2300','meter','','','finish_good','','','','','osram','','','','22','12','32','','','','','','','','','2','','','','','',NULL,'','','','','','','','','manish','','','',NULL,'1730982405_Screenshot 2024-08-21 170313.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','16','','','pune','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(477,'Gl-Gl-Pi','Glass','Pipe-Glas',NULL,'dfs','Each','','','','','','','','dsfdsf','','Grey','Diamond cut','fdddf','fsf','sdfds','','','','','','Circle','','','Double Ply','','','fdsfdsf','','',NULL,'','','','','','','','','sffdsfdfds','','','',NULL,'1730983046_Screenshot 2024-10-27 005233.png','admin',NULL,'departement',NULL,'dsfd','','fsfdsfs','SAVE','24-11-07','','','','',NULL,'','',NULL,'','','6','','','','Bottom','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(478,'Pa-Pa-Bu','Packaging','Bubble wrap-Pack',NULL,'fdfd','each','','','','','','','','dfdf','','','','dfd','fsdfd','fd','','','','','','','','','','','','','','',NULL,'','','','','','','','','dfd','','','',NULL,'1730983567_Screenshot 2024-10-27 005233.png','admin',NULL,'departement',NULL,'fd','','fdfdfdfd','SAVE','24-11-07','','','','',NULL,'','',NULL,'','','14','','','fdfdf','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(479,'Pa--Bu-lo-al-Pa-Co--20-20','Packaging','Corrugated boxes--Bubb-loer-algo-Pack',NULL,'2234','each','','','finish_good','','','','','wert','','','','12','123','1.5','','','','','','','','','5','','','','','',NULL,'','','','','','','','','abc','','','',NULL,'1730983586_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','SAVE','24-11-07','','','','',NULL,'','',NULL,'','','16','','','pune','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(481,'Gl-fe-fe-fe-fe-fe-fe-fe-fe-fe','Glass','Pipe-fefe-fefe-fefe-fefe-fef',NULL,'fefe','KG','','','','','','','','fefef','','Red','Diamond cut','fefefe','fefe','fefe','','','','','','Circle','','','Double Ply','','','fefe','','',NULL,'','','','','','','','','fefefe','','','',NULL,'1730984206_Screenshot 2024-10-27 005233.png','admin',NULL,'departement',NULL,'fef','','fef','SAVE','24-11-07','','','','',NULL,'','',NULL,'','','6','','','fefefe','Bottom','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(482,'Me-xy-12-12-2c-2c-3c-lo-we-2c','Metal','base-xyz-12-12-2cm-2cm',NULL,'2300','','xyz','','finish_good','','','','12','','','','','','','12','2cm','2cm','3cm','','','lorem','','','','','','','','',NULL,'','we','2cm','2','12','','','','manish','','','',NULL,'1730984555_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','SAVE','24-11-07','','','','',NULL,'','',NULL,'','','5','','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(483,'El-whi-tra-rou-50 ','Electrical','Bulb-whit-tran-roun-50 w',NULL,'2300','KG','Bakelite','','row_item','','','','','wipro','transparent','white','shape','22','','32','','','','','50 watt','round','2cm','','','','12','','','12',NULL,'','','','','','','','','manish','','','',NULL,'1730985004_Screenshot 2024-08-21 165522.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','1','23','Non dimmable','pune','','','E-14','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(484,'El-SIL-YEL-CAN-4 W-E-1','Electrical','Bulb-Silv-yell-cand-4 wa-E-14',NULL,'2300','KG','plastic','','finish_good','','','','','Osram','yellow','Silver','shape','22','','32','','','','','4 watt','candle','2cm','','','','21cm','','','21cm',NULL,'','','','','','','','','manish','','','',NULL,'1730985311_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'lorem ipsum','','12','Approve','24-11-07','','','','',NULL,'','',NULL,'','','1','12','Non dimmable','pune','','','E-14','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `item_master_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemattribute`
--

DROP TABLE IF EXISTS `itemattribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itemattribute` (
  `id` int NOT NULL AUTO_INCREMENT,
  `attribute_id` int DEFAULT NULL,
  `item_code` int DEFAULT NULL,
  `attribute_value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemattribute`
--

LOCK TABLES `itemattribute` WRITE;
/*!40000 ALTER TABLE `itemattribute` DISABLE KEYS */;
INSERT INTO `itemattribute` VALUES (1,62,51,'bulb'),(2,63,51,'compone'),(3,64,51,''),(4,65,51,''),(5,66,51,''),(6,67,51,''),(7,68,51,''),(8,69,51,''),(9,70,51,'vendor'),(10,71,51,'description'),(11,72,51,''),(12,62,52,'bulb'),(13,63,52,'compone'),(14,64,52,''),(15,65,52,''),(16,66,52,''),(17,67,52,''),(18,68,52,''),(19,69,52,''),(20,70,52,'vendor'),(21,71,52,'description'),(22,72,52,''),(23,1,53,''),(24,2,53,''),(25,16,53,''),(26,17,53,''),(27,18,53,''),(28,19,53,''),(29,20,53,''),(30,21,53,''),(31,22,53,''),(32,23,53,''),(33,24,53,''),(34,25,53,''),(35,26,53,''),(36,27,53,''),(37,28,53,''),(38,29,53,''),(39,61,53,''),(40,1,54,''),(41,2,54,''),(42,16,54,''),(43,17,54,''),(44,18,54,''),(45,19,54,''),(46,20,54,''),(47,21,54,''),(48,22,54,''),(49,23,54,''),(50,24,54,''),(51,25,54,''),(52,26,54,''),(53,27,54,''),(54,28,54,''),(55,29,54,''),(56,61,54,''),(57,1,55,''),(58,2,55,''),(59,16,55,''),(60,17,55,''),(61,18,55,''),(62,19,55,''),(63,20,55,''),(64,21,55,''),(65,22,55,''),(66,23,55,''),(67,24,55,''),(68,25,55,''),(69,26,55,''),(70,27,55,''),(71,28,55,''),(72,29,55,''),(73,61,55,''),(74,1,56,''),(75,2,56,''),(76,16,56,''),(77,17,56,''),(78,18,56,''),(79,19,56,''),(80,20,56,''),(81,21,56,''),(82,22,56,''),(83,23,56,''),(84,24,56,''),(85,25,56,''),(86,26,56,''),(87,27,56,''),(88,28,56,''),(89,29,56,''),(90,61,56,''),(91,1,57,''),(92,2,57,''),(93,16,57,''),(94,17,57,''),(95,18,57,''),(96,19,57,''),(97,20,57,''),(98,21,57,''),(99,22,57,''),(100,23,57,''),(101,24,57,''),(102,25,57,''),(103,26,57,''),(104,27,57,''),(105,28,57,''),(106,29,57,''),(107,61,57,''),(108,1,58,''),(109,2,58,''),(110,16,58,''),(111,17,58,''),(112,18,58,''),(113,19,58,''),(114,20,58,''),(115,21,58,''),(116,22,58,''),(117,23,58,''),(118,24,58,''),(119,25,58,''),(120,26,58,''),(121,27,58,''),(122,28,58,''),(123,29,58,''),(124,61,58,''),(125,1,59,''),(126,2,59,''),(127,16,59,''),(128,17,59,''),(129,18,59,''),(130,19,59,''),(131,20,59,''),(132,21,59,''),(133,22,59,''),(134,23,59,''),(135,24,59,''),(136,25,59,''),(137,26,59,''),(138,27,59,''),(139,28,59,''),(140,29,59,''),(141,61,59,''),(142,1,60,''),(143,2,60,''),(144,16,60,''),(145,17,60,''),(146,18,60,''),(147,19,60,''),(148,20,60,''),(149,21,60,''),(150,22,60,''),(151,23,60,''),(152,24,60,''),(153,25,60,''),(154,26,60,''),(155,27,60,''),(156,28,60,''),(157,29,60,''),(158,61,60,''),(159,1,61,''),(160,2,61,''),(161,16,61,''),(162,17,61,''),(163,18,61,''),(164,19,61,''),(165,20,61,''),(166,21,61,''),(167,22,61,''),(168,23,61,''),(169,24,61,''),(170,25,61,''),(171,26,61,''),(172,27,61,''),(173,28,61,''),(174,29,61,''),(175,61,61,''),(176,1,62,''),(177,2,62,''),(178,16,62,''),(179,17,62,''),(180,18,62,''),(181,19,62,''),(182,20,62,''),(183,21,62,''),(184,22,62,''),(185,23,62,''),(186,24,62,''),(187,25,62,''),(188,26,62,''),(189,27,62,''),(190,28,62,''),(191,29,62,''),(192,61,62,''),(193,41,63,'iou'),(194,42,63,''),(195,43,63,''),(196,44,63,''),(197,45,63,''),(198,46,63,''),(199,47,63,''),(200,48,63,''),(201,49,63,''),(202,50,63,''),(203,41,64,'components'),(204,42,64,'78'),(205,43,64,'78'),(206,44,64,'black'),(207,45,64,'sjdkwo'),(208,46,64,'SIO'),(209,47,64,''),(210,48,64,''),(211,49,64,''),(212,50,64,''),(213,1,65,'fo4pfi'),(214,2,65,'pjpo'),(215,16,65,'jo'),(216,17,65,'jo'),(217,18,65,'j'),(218,19,65,'oj'),(219,20,65,'oj'),(220,21,65,'oj'),(221,22,65,'oj'),(222,23,65,'oj'),(223,24,65,'oj'),(224,25,65,'oj'),(225,26,65,'oj'),(226,27,65,'o'),(227,28,65,'oj'),(228,29,65,'oj'),(229,61,65,'oj'),(230,1,66,'fo4pfi'),(231,2,66,'pjpo'),(232,16,66,'jo'),(233,17,66,'jo'),(234,18,66,'j'),(235,19,66,'oj'),(236,20,66,'oj'),(237,21,66,'oj'),(238,22,66,'oj'),(239,23,66,'oj'),(240,24,66,'oj'),(241,25,66,'oj'),(242,26,66,'oj'),(243,27,66,'o'),(244,28,66,'oj'),(245,29,66,'oj'),(246,61,66,'oj'),(247,1,67,'fo4pfi'),(248,2,67,'pjpo'),(249,16,67,'jo'),(250,17,67,'jo'),(251,18,67,'j'),(252,19,67,'oj'),(253,20,67,'oj'),(254,21,67,'oj'),(255,22,67,'oj'),(256,23,67,'oj'),(257,24,67,'oj'),(258,25,67,'oj'),(259,26,67,'oj'),(260,27,67,'o'),(261,28,67,'oj'),(262,29,67,'oj'),(263,61,67,'oj'),(264,1,68,''),(265,2,68,''),(266,16,68,''),(267,17,68,''),(268,18,68,''),(269,19,68,''),(270,20,68,''),(271,21,68,''),(272,22,68,''),(273,23,68,''),(274,24,68,''),(275,25,68,''),(276,26,68,''),(277,27,68,''),(278,28,68,''),(279,29,68,''),(280,61,68,''),(281,51,69,''),(282,52,69,''),(283,53,69,''),(284,54,69,''),(285,55,69,''),(286,56,69,''),(287,57,69,''),(288,58,69,''),(289,59,69,''),(290,60,69,''),(291,51,70,''),(292,52,70,''),(293,53,70,''),(294,54,70,''),(295,55,70,''),(296,56,70,''),(297,57,70,''),(298,58,70,''),(299,59,70,''),(300,60,70,'');
/*!40000 ALTER TABLE `itemattribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemmaster`
--

DROP TABLE IF EXISTS `itemmaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itemmaster` (
  `S_No` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(200) NOT NULL,
  `Item_Category` varchar(100) DEFAULT NULL,
  `Item_Name` varchar(255) DEFAULT NULL,
  `sub_category` varchar(100) DEFAULT NULL,
  `Item_Type` varchar(100) DEFAULT NULL,
  `si_unit` varchar(50) DEFAULT NULL,
  `Material` varchar(100) DEFAULT NULL,
  `Design` varchar(100) DEFAULT NULL,
  `Finish_type` varchar(100) DEFAULT NULL,
  `Half_Full_Thread` varchar(50) DEFAULT NULL,
  `Holder_Thread` varchar(50) DEFAULT NULL,
  `Holder_type` varchar(100) DEFAULT NULL,
  `Thread` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Light_Output_colour` varchar(50) DEFAULT NULL,
  `Colour` varchar(50) DEFAULT NULL,
  `Cut` varchar(50) DEFAULT NULL,
  `Height` varchar(50) DEFAULT NULL,
  `Length` varchar(50) DEFAULT NULL,
  `Breadth` varchar(50) DEFAULT NULL,
  `Upper_Dia` varchar(50) DEFAULT NULL,
  `Bottom_Dia` varchar(50) DEFAULT NULL,
  `Centre_Hole_dia` varchar(50) DEFAULT NULL,
  `Size` varchar(50) DEFAULT NULL,
  `watt` varchar(50) DEFAULT NULL,
  `Shape` varchar(100) DEFAULT NULL,
  `Side_Hole_dia` varchar(50) DEFAULT NULL,
  `Top_hole_dia` varchar(50) DEFAULT NULL,
  `No_of_ply` varchar(50) DEFAULT NULL,
  `Style` varchar(100) DEFAULT NULL,
  `Thickness` varchar(50) DEFAULT NULL,
  `Weight` varchar(50) DEFAULT NULL,
  `Depth` varchar(50) DEFAULT NULL,
  `Bottom_hole_dia` varchar(50) DEFAULT NULL,
  `Bottom_hole` varchar(100) DEFAULT NULL,
  `Core` varchar(100) DEFAULT NULL,
  `Inner_Outer_thread` varchar(50) DEFAULT NULL,
  `Upper_thread` varchar(50) DEFAULT NULL,
  `Lower_thread` varchar(50) DEFAULT NULL,
  `Thread_length` varchar(50) DEFAULT NULL,
  `Indian_Imported` varchar(50) DEFAULT NULL,
  `In_built_switch` varchar(50) DEFAULT NULL,
  `Wire_type` varchar(100) DEFAULT NULL,
  `vendor` varchar(100) DEFAULT NULL,
  `attribute1` varchar(50) DEFAULT NULL,
  `attribute2` varchar(45) DEFAULT NULL,
  `attribute3` varchar(100) DEFAULT NULL,
  `itemmastercol` varchar(45) DEFAULT NULL,
  `imagePath` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`S_No`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemmaster`
--

LOCK TABLES `itemmaster` WRITE;
/*!40000 ALTER TABLE `itemmaster` DISABLE KEYS */;
INSERT INTO `itemmaster` VALUES (1,'abc','electric','bulb','electric','electric','1','desret sand','round','glassy','no','1','plastic','1','surya','yellow','white','ys','10.00','20.00','40.00','12.30','20.40','43.40','large','200.00','rounde','29.12','5.00','12','sharp','1.50','200.00','12.00','10.50','10','plastic','ys','upper thread ','lower thred','10.00','yes ','no','fiber','east delhi vendore',NULL,NULL,NULL,NULL,NULL),(2,'itemabc2','utencile','fry pan ','utencil','utencil','10','iron','round','non stick',NULL,NULL,NULL,NULL,'example brand',NULL,NULL,NULL,'5.00','12.00','25.00','25.05','12.24','4.30','medium',NULL,'round',NULL,NULL,NULL,'round','2.00','400.00','32.00','32.00','23','non stick',NULL,NULL,NULL,NULL,'no',NULL,NULL,'east delhi vendor',NULL,NULL,NULL,NULL,NULL),(3,'WHIT-ALUM-GLOS-ROUN-SHAR-23-BREA-HEIG-WEIG-UP-BD-STYL-NOOF-VEND-DISC-IMG-TEST-','Electrical','','Bulb','','0','Aluminum','','','','','','','','','white','','','23','','','','','','','round','','','','','','','','','','','','','','','','','','VENDORE',NULL,NULL,NULL,NULL,''),(4,'MA-CU-FE------DE-IM-WI-','Electrical','','Wire','','0','material ','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','wireType','',NULL,NULL,NULL,NULL,'imahe'),(5,'MA-CU-FE------DE-IM-WI-','Electrical','','Wire','','0','material ','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','wireType','',NULL,NULL,NULL,NULL,'imahe'),(6,'-----------------SH-20-20-','Electrical','','Bulb','','0','','','','','','','','','','','','','','','','','','','200watt','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(7,'CU-VE-OR-WA-DI-SH-SI-BR-IM-LO-LI-','Electrical','','Bulb','','0','','','','','','','','brand','ligh out[','skyblue','','','','','','','','size','Watt','shape','','','','','','','','','','','','','','','','','','VENDER',NULL,NULL,NULL,NULL,'images'),(8,'-----------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(9,'-----------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(10,'CU-VE-OR-WA-DI-SH-SI-BR-IM-LO-LI-','Electrical','','Bulb','','0','','','','','','','','brand','ligh out[','skyblue','','','','','','','','size','Watt','shape','','','','','','','','','','','','','','','','','','VENDER',NULL,NULL,NULL,NULL,'images'),(11,'------------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(12,'------------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(13,'------------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(14,'------------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(15,'------------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(16,'------------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(17,'WHIT-ALUM-GLOS-ROUN-SHAR-23-BREA-HEIG-WEIG-UP-BD-STYL-NOOF-VEND-DISC-IMG-TEST-','Electrical','','Bulb','','0','Aluminum','','','','','','','','','white','','','23','','','','','','','round','','','','','','','','','','','','','','','','','','VENDORE',NULL,NULL,NULL,NULL,''),(18,'ALUM-CUT-----SIZE-----','Electrical','','Wire','','0','Aluminum','','','','','','','','','','','','','','','','','size','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(19,'MA-CU-FE------DE-IM-WI-','Electrical','','Wire','','0','material ','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','wireType','',NULL,NULL,NULL,NULL,'imahe'),(20,'MA-CU-FE------DE-IM-WI-','Electrical','','Wire','','0','material ','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','wireType','',NULL,NULL,NULL,NULL,'imahe'),(21,'MA-CU-FE------DE-IM-WI-','Electrical','','Wire','','0','material ','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','wireType','',NULL,NULL,NULL,NULL,'imahe'),(22,'WHIT-ALUM-GLOS-ROUN-SHAR-23-BREA-HEIG-WEIG-UP-BD-STYL-NOOF-VEND-DISC-IMG-TEST-','Electrical','','Bulb','','0','Aluminum','','','','','','','','','white','','','23','','','','','','','round','','','','','','','','','','','','','','','','','','VENDORE',NULL,NULL,NULL,NULL,''),(23,'C:------------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(24,'C:------------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,''),(25,'C:------------','Electrical','','Bulb','','0','','','','','','','','','','red','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,'');
/*!40000 ALTER TABLE `itemmaster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemmastercategory`
--

DROP TABLE IF EXISTS `itemmastercategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itemmastercategory` (
  `categoryId` int NOT NULL AUTO_INCREMENT,
  `catagory_name` varchar(45) NOT NULL,
  PRIMARY KEY (`categoryId`),
  UNIQUE KEY `itemMasterCategorycol_UNIQUE` (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemmastercategory`
--

LOCK TABLES `itemmastercategory` WRITE;
/*!40000 ALTER TABLE `itemmastercategory` DISABLE KEYS */;
INSERT INTO `itemmastercategory` VALUES (1,'Electrical'),(6,'Glass'),(7,'Metal'),(8,'Statioery'),(9,'Shades'),(10,'Acrylic_Shades'),(11,'Crystal'),(12,'Packaging'),(28,'');
/*!40000 ALTER TABLE `itemmastercategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemmasterheader`
--

DROP TABLE IF EXISTS `itemmasterheader`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itemmasterheader` (
  `itemid` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(1000) DEFAULT NULL,
  `categoryId` int NOT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `subcatid` int NOT NULL,
  `status` varchar(45) DEFAULT 'SAVE',
  PRIMARY KEY (`itemid`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemmasterheader`
--

LOCK TABLES `itemmasterheader` WRITE;
/*!40000 ALTER TABLE `itemmasterheader` DISABLE KEYS */;
INSERT INTO `itemmasterheader` VALUES (1,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(2,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(3,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(4,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(5,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(6,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(7,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(8,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(9,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(10,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(11,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(12,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(13,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(14,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(15,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(16,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(17,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(18,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(19,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(20,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(21,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(22,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(23,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(24,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(25,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(26,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(27,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(28,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(29,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(30,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(31,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(32,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(33,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(34,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(35,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(36,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(37,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(38,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(39,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(40,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(41,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(42,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(43,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(44,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(45,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(46,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(47,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(48,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(49,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(50,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(51,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(52,'itemMasterItemcCodeGen',1,NULL,NULL,4,'SAVE'),(53,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(54,'itemMasterItemcCodeGen',1,NULL,NULL,1,'SAVE'),(63,'IO',1,NULL,NULL,2,'SAVE'),(64,'CO7878BLSJSI',1,NULL,NULL,2,'SAVE'),(65,'FO4P-PJPO-JO-JO-J-OJ-OJ-OJ-OJ-OJ-OJ-OJ-OJ-O-OJ-OJ-OJ-',1,NULL,NULL,1,'SAVE'),(66,'FO4P-PJPO-JO-JO-J-OJ-OJ-OJ-OJ-OJ-OJ-OJ-OJ-O-OJ-OJ-OJ-',1,NULL,NULL,1,'SAVE'),(67,'FO4P-PJPO-JO-JO-J-OJ-OJ-OJ-OJ-OJ-OJ-OJ-OJ-O-OJ-OJ-OJ-',1,NULL,NULL,1,'SAVE'),(68,'-----------------',1,NULL,NULL,1,'SAVE'),(69,'----------',1,NULL,NULL,3,'SAVE'),(70,'----------',1,NULL,NULL,3,'SAVE'),(71,'-----------------',1,NULL,NULL,1,'SAVE'),(72,'BLAC-GQ----------------',1,NULL,NULL,1,'SAVE'),(73,'BLAC-GQ----------------',1,NULL,NULL,1,'SAVE'),(74,'BLAC-GQ----------------',1,NULL,NULL,1,'SAVE'),(75,'BLAC-GQ----------------',1,NULL,NULL,1,'SAVE'),(76,'BLAC-GQ----------------',1,NULL,NULL,1,'SAVE');
/*!40000 ALTER TABLE `itemmasterheader` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lead_details_header_form`
--

DROP TABLE IF EXISTS `lead_details_header_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lead_details_header_form` (
  `record_no` int NOT NULL AUTO_INCREMENT,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `form_status` varchar(45) NOT NULL DEFAULT 'SAVE',
  `lead_source` varchar(45) DEFAULT NULL,
  `ref_By` varchar(45) DEFAULT NULL,
  `ref_phone_no` varchar(45) DEFAULT NULL,
  `lead_type` varchar(45) DEFAULT NULL,
  `contact_person_name` varchar(45) DEFAULT NULL,
  `contact_person_phone_no` varchar(45) DEFAULT NULL,
  `contact_person_email` varchar(45) DEFAULT NULL,
  `contact_person_address` varchar(45) DEFAULT NULL,
  `lead_received_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`record_no`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lead_details_header_form`
--

LOCK TABLES `lead_details_header_form` WRITE;
/*!40000 ALTER TABLE `lead_details_header_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `lead_details_header_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location` (
  `id` int NOT NULL AUTO_INCREMENT,
  `address_1` varchar(45) DEFAULT NULL,
  `address_2` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `landmark` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `pincode` varchar(45) DEFAULT NULL,
  `shipTO` varchar(45) DEFAULT NULL,
  `billTo` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'wz-12',NULL,'south',NULL,'delhi','110046',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `miscellaneous_receipt_issue_form`
--

DROP TABLE IF EXISTS `miscellaneous_receipt_issue_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `miscellaneous_receipt_issue_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(45) DEFAULT NULL,
  `sub_invetory` varchar(45) DEFAULT NULL,
  `wherehouse_location` varchar(45) DEFAULT NULL,
  `invoice_number` varchar(45) DEFAULT NULL,
  `invoice_amount` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `miscellaneous_receipt_issue_form`
--

LOCK TABLES `miscellaneous_receipt_issue_form` WRITE;
/*!40000 ALTER TABLE `miscellaneous_receipt_issue_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `miscellaneous_receipt_issue_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `move_order_item_header`
--

DROP TABLE IF EXISTS `move_order_item_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `move_order_item_header` (
  `id` int NOT NULL AUTO_INCREMENT,
  `so_number` varchar(45) DEFAULT NULL,
  `so_line_number` int DEFAULT NULL,
  `serial_number` varchar(45) DEFAULT NULL,
  `transaction_type` varchar(45) DEFAULT NULL,
  `move_order_type` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `source_invetory` varchar(45) DEFAULT NULL,
  `destination_inv` varchar(45) DEFAULT NULL,
  `date_require_sub_inventory` varchar(45) DEFAULT NULL,
  `transaction_qty` int DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `update_date` varchar(45) DEFAULT NULL,
  `item_code` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=350 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `move_order_item_header`
--

LOCK TABLES `move_order_item_header` WRITE;
/*!40000 ALTER TABLE `move_order_item_header` DISABLE KEYS */;
INSERT INTO `move_order_item_header` VALUES (1,'so number',NULL,NULL,'transaction type','move order ','descritopn','location','source inve','destination','date re',NULL,'satus','created ','created date',NULL,NULL,NULL),(2,'so number',NULL,NULL,'transaction type','move order ','descritopn','location','source inve','destination','date re',NULL,'satus','created ','created date',NULL,NULL,NULL),(3,'so numberer',NULL,NULL,'transaction type','','description','location',NULL,'destination','2026-01-03',NULL,'admin','admin','2024-09-29 14:13:49',NULL,NULL,NULL),(4,'so numberer',NULL,NULL,'transaction type','','description','location','SOURCE','destination','2026-01-03',NULL,'admin','admin','2024-09-29 14:17:',NULL,NULL,NULL),(5,'so numberer',NULL,NULL,'transaction type','','description','location','SOURCE','destination','2026-01-03',NULL,'admin','admin','2024-09-29 14:17:',NULL,NULL,NULL),(6,'392',NULL,NULL,'transaction type','','description','location','SOURCE','destination','2026-01-03',NULL,'admin','admin','2024-09-29 14:18:',NULL,NULL,NULL),(7,'',NULL,NULL,'','','','','','','',NULL,'admin','admin','2024-09-29 14:43:',NULL,NULL,NULL),(8,'37',75,'GRN_S_274_89_4','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:17:24',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(9,'37',75,'GRN_S_274_89_2','Sale order allocation',NULL,NULL,NULL,'INSTALLTION','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:17:49',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(10,'37',75,'GRN_S_274_89_4','Sale order allocation',NULL,NULL,NULL,'INSTALLTION','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:18:18',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(11,'37',75,'GRN_S_274_89_2','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:18:34',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(12,'37',75,'GRN_S_274_89_4','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:18:34',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(13,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(14,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(15,'37',72,'GRN_S_276_111_4','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(16,'37',72,'GRN_S_276_111_5','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(17,'37',72,'GRN_S_276_111_6','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(18,'37',72,'GRN_S_276_111_7','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(19,'37',72,'GRN_S_276_111_8','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(20,'37',72,'GRN_S_276_111_9','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(21,'37',72,'GRN_S_276_111_10','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(22,'37',72,'GRN_S_276_111_11','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(23,'37',72,'GRN_S_276_111_12','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(24,'37',72,'GRN_S_276_111_13','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(25,'37',72,'GRN_S_276_111_14','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(26,'37',72,'GRN_S_276_111_15','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(27,'37',72,'GRN_S_276_111_16','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(28,'37',72,'GRN_S_276_111_17','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(29,'37',72,'GRN_S_276_111_18','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(30,'37',72,'GRN_S_276_111_19','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(31,'37',72,'GRN_S_276_111_20','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(32,'37',72,'GRN_S_276_111_21','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(33,'37',72,'GRN_S_276_111_22','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(34,'37',72,'GRN_S_276_111_23','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(35,'37',72,'GRN_S_276_111_24','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(36,'37',72,'GRN_S_276_111_25','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(37,'37',72,'GRN_S_276_111_26','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(38,'37',72,'GRN_S_276_111_27','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(39,'37',72,'GRN_S_276_111_28','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(40,'37',72,'GRN_S_276_111_29','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(41,'37',72,'GRN_S_276_111_30','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(42,'37',72,'GRN_S_276_111_31','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(43,'37',72,'GRN_S_276_111_32','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(44,'37',72,'GRN_S_276_111_33','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(45,'37',72,'GRN_S_276_111_34','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(46,'37',72,'GRN_S_276_111_35','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(47,'37',72,'GRN_S_276_111_36','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(48,'37',72,'GRN_S_276_111_42','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(49,'37',72,'GRN_S_276_111_43','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(50,'37',72,'GRN_S_276_111_44','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(51,'37',72,'GRN_S_276_111_45','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(52,'37',72,'GRN_S_276_111_46','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(53,'37',72,'GRN_S_276_111_47','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(54,'37',72,'GRN_S_276_111_48','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(55,'37',72,'GRN_S_276_111_49','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(56,'37',72,'GRN_S_276_111_50','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(57,'37',72,'GRN_S_276_111_51','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(58,'37',72,'GRN_S_276_111_52','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(59,'37',72,'GRN_S_276_111_53','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(60,'37',72,'GRN_S_276_111_54','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(61,'37',72,'GRN_S_276_111_55','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(62,'37',72,'GRN_S_276_111_56','Sale order allocation',NULL,NULL,NULL,'ASSEMBLY','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(63,'37',72,'GRN_S_276_111_57','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(64,'37',72,'GRN_S_276_111_58','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(65,'37',72,'GRN_S_276_111_59','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(66,'37',72,'GRN_S_276_111_60','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(67,'37',72,'GRN_S_276_111_61','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(68,'37',72,'GRN_S_276_111_62','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(69,'37',72,'GRN_S_276_111_63','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(70,'37',72,'GRN_S_276_111_64','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(71,'37',72,'GRN_S_276_111_65','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(72,'37',72,'GRN_S_276_111_66','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(73,'37',72,'GRN_S_276_111_67','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(74,'37',72,'GRN_S_276_111_68','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(75,'37',72,'GRN_S_276_111_69','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(76,'37',72,'GRN_S_276_111_70','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(77,'37',72,'GRN_S_276_111_71','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(78,'37',72,'GRN_S_276_111_72','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(79,'37',72,'GRN_S_276_111_73','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(80,'37',72,'GRN_S_276_111_74','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(81,'37',72,'GRN_S_276_111_75','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(82,'37',72,'GRN_S_276_111_76','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(83,'37',72,'GRN_S_276_111_77','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(84,'37',72,'GRN_S_276_111_78','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(85,'37',72,'GRN_S_276_111_79','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(86,'37',72,'GRN_S_276_111_80','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(87,'37',72,'GRN_S_276_111_81','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(88,'37',72,'GRN_S_276_111_82','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(89,'37',72,'GRN_S_276_111_83','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(90,'37',72,'GRN_S_276_111_84','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:19:51',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(91,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(92,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(93,'37',72,'GRN_S_276_111_4','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(94,'37',72,'GRN_S_276_111_5','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(95,'37',72,'GRN_S_276_111_6','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(96,'37',72,'GRN_S_276_111_7','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(97,'37',72,'GRN_S_276_111_8','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(98,'37',72,'GRN_S_276_111_9','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(99,'37',72,'GRN_S_276_111_10','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(100,'37',72,'GRN_S_276_111_11','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(101,'37',72,'GRN_S_276_111_12','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(102,'37',72,'GRN_S_276_111_13','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(103,'37',72,'GRN_S_276_111_14','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(104,'37',72,'GRN_S_276_111_15','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(105,'37',72,'GRN_S_276_111_16','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(106,'37',72,'GRN_S_276_111_17','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(107,'37',72,'GRN_S_276_111_18','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(108,'37',72,'GRN_S_276_111_19','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(109,'37',72,'GRN_S_276_111_20','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(110,'37',72,'GRN_S_276_111_21','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(111,'37',72,'GRN_S_276_111_22','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(112,'37',72,'GRN_S_276_111_23','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(113,'37',72,'GRN_S_276_111_24','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(114,'37',72,'GRN_S_276_111_25','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(115,'37',72,'GRN_S_276_111_26','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(116,'37',72,'GRN_S_276_111_27','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(117,'37',72,'GRN_S_276_111_28','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(118,'37',72,'GRN_S_276_111_29','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(119,'37',72,'GRN_S_276_111_30','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(120,'37',72,'GRN_S_276_111_31','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(121,'37',72,'GRN_S_276_111_32','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(122,'37',72,'GRN_S_276_111_33','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(123,'37',72,'GRN_S_276_111_34','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(124,'37',72,'GRN_S_276_111_35','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(125,'37',72,'GRN_S_276_111_36','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(126,'37',72,'GRN_S_276_111_42','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(127,'37',72,'GRN_S_276_111_43','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(128,'37',72,'GRN_S_276_111_44','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(129,'37',72,'GRN_S_276_111_45','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(130,'37',72,'GRN_S_276_111_46','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(131,'37',72,'GRN_S_276_111_47','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(132,'37',72,'GRN_S_276_111_48','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(133,'37',72,'GRN_S_276_111_49','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(134,'37',72,'GRN_S_276_111_50','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(135,'37',72,'GRN_S_276_111_51','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(136,'37',72,'GRN_S_276_111_52','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(137,'37',72,'GRN_S_276_111_53','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(138,'37',72,'GRN_S_276_111_54','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(139,'37',72,'GRN_S_276_111_55','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(140,'37',72,'GRN_S_276_111_56','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(141,'37',72,'GRN_S_276_111_57','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(142,'37',72,'GRN_S_276_111_58','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(143,'37',72,'GRN_S_276_111_59','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(144,'37',72,'GRN_S_276_111_60','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(145,'37',72,'GRN_S_276_111_61','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(146,'37',72,'GRN_S_276_111_62','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(147,'37',72,'GRN_S_276_111_63','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(148,'37',72,'GRN_S_276_111_64','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(149,'37',72,'GRN_S_276_111_65','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(150,'37',72,'GRN_S_276_111_66','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(151,'37',72,'GRN_S_276_111_67','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(152,'37',72,'GRN_S_276_111_68','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(153,'37',72,'GRN_S_276_111_69','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(154,'37',72,'GRN_S_276_111_70','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(155,'37',72,'GRN_S_276_111_71','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(156,'37',72,'GRN_S_276_111_72','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(157,'37',72,'GRN_S_276_111_73','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(158,'37',72,'GRN_S_276_111_74','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(159,'37',72,'GRN_S_276_111_75','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(160,'37',72,'GRN_S_276_111_76','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(161,'37',72,'GRN_S_276_111_77','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(162,'37',72,'GRN_S_276_111_78','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(163,'37',72,'GRN_S_276_111_79','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(164,'37',72,'GRN_S_276_111_80','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(165,'37',72,'GRN_S_276_111_81','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(166,'37',72,'GRN_S_276_111_82','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(167,'37',72,'GRN_S_276_111_83','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(168,'37',72,'GRN_S_276_111_84','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:20:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(169,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(170,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(171,'37',72,'GRN_S_276_111_4','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(172,'37',72,'GRN_S_276_111_5','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(173,'37',72,'GRN_S_276_111_6','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(174,'37',72,'GRN_S_276_111_7','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(175,'37',72,'GRN_S_276_111_8','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(176,'37',72,'GRN_S_276_111_9','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(177,'37',72,'GRN_S_276_111_10','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(178,'37',72,'GRN_S_276_111_11','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(179,'37',72,'GRN_S_276_111_12','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(180,'37',72,'GRN_S_276_111_13','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(181,'37',72,'GRN_S_276_111_14','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(182,'37',72,'GRN_S_276_111_15','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(183,'37',72,'GRN_S_276_111_16','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(184,'37',72,'GRN_S_276_111_17','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(185,'37',72,'GRN_S_276_111_18','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(186,'37',72,'GRN_S_276_111_19','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(187,'37',72,'GRN_S_276_111_20','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(188,'37',72,'GRN_S_276_111_21','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(189,'37',72,'GRN_S_276_111_22','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(190,'37',72,'GRN_S_276_111_23','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(191,'37',72,'GRN_S_276_111_24','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(192,'37',72,'GRN_S_276_111_25','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(193,'37',72,'GRN_S_276_111_26','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(194,'37',72,'GRN_S_276_111_27','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(195,'37',72,'GRN_S_276_111_28','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(196,'37',72,'GRN_S_276_111_29','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(197,'37',72,'GRN_S_276_111_30','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(198,'37',72,'GRN_S_276_111_31','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(199,'37',72,'GRN_S_276_111_32','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(200,'37',72,'GRN_S_276_111_33','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(201,'37',72,'GRN_S_276_111_34','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(202,'37',72,'GRN_S_276_111_35','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(203,'37',72,'GRN_S_276_111_36','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(204,'37',72,'GRN_S_276_111_42','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(205,'37',72,'GRN_S_276_111_43','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(206,'37',72,'GRN_S_276_111_44','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(207,'37',72,'GRN_S_276_111_45','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(208,'37',72,'GRN_S_276_111_46','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(209,'37',72,'GRN_S_276_111_47','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(210,'37',72,'GRN_S_276_111_48','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(211,'37',72,'GRN_S_276_111_49','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(212,'37',72,'GRN_S_276_111_50','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(213,'37',72,'GRN_S_276_111_51','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(214,'37',72,'GRN_S_276_111_52','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(215,'37',72,'GRN_S_276_111_53','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(216,'37',72,'GRN_S_276_111_54','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(217,'37',72,'GRN_S_276_111_55','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(218,'37',72,'GRN_S_276_111_56','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(219,'37',72,'GRN_S_276_111_57','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(220,'37',72,'GRN_S_276_111_58','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(221,'37',72,'GRN_S_276_111_59','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(222,'37',72,'GRN_S_276_111_60','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(223,'37',72,'GRN_S_276_111_61','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(224,'37',72,'GRN_S_276_111_62','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(225,'37',72,'GRN_S_276_111_63','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(226,'37',72,'GRN_S_276_111_64','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(227,'37',72,'GRN_S_276_111_65','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(228,'37',72,'GRN_S_276_111_66','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(229,'37',72,'GRN_S_276_111_67','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(230,'37',72,'GRN_S_276_111_68','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(231,'37',72,'GRN_S_276_111_69','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(232,'37',72,'GRN_S_276_111_70','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(233,'37',72,'GRN_S_276_111_71','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(234,'37',72,'GRN_S_276_111_72','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(235,'37',72,'GRN_S_276_111_73','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(236,'37',72,'GRN_S_276_111_74','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(237,'37',72,'GRN_S_276_111_75','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(238,'37',72,'GRN_S_276_111_76','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(239,'37',72,'GRN_S_276_111_77','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(240,'37',72,'GRN_S_276_111_78','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(241,'37',72,'GRN_S_276_111_79','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(242,'37',72,'GRN_S_276_111_80','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(243,'37',72,'GRN_S_276_111_81','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(244,'37',72,'GRN_S_276_111_82','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(245,'37',72,'GRN_S_276_111_83','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(246,'37',72,'GRN_S_276_111_84','Sale order allocation',NULL,NULL,NULL,'PACKAGING','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:21:43',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(247,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(248,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(249,'37',72,'GRN_S_276_111_4','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(250,'37',72,'GRN_S_276_111_5','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(251,'37',72,'GRN_S_276_111_6','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(252,'37',72,'GRN_S_276_111_7','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(253,'37',72,'GRN_S_276_111_8','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(254,'37',72,'GRN_S_276_111_9','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(255,'37',72,'GRN_S_276_111_10','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(256,'37',72,'GRN_S_276_111_11','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(257,'37',72,'GRN_S_276_111_12','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(258,'37',72,'GRN_S_276_111_13','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(259,'37',72,'GRN_S_276_111_14','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(260,'37',72,'GRN_S_276_111_15','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(261,'37',72,'GRN_S_276_111_16','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(262,'37',72,'GRN_S_276_111_17','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(263,'37',72,'GRN_S_276_111_18','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(264,'37',72,'GRN_S_276_111_19','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(265,'37',72,'GRN_S_276_111_20','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(266,'37',72,'GRN_S_276_111_21','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(267,'37',72,'GRN_S_276_111_22','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(268,'37',72,'GRN_S_276_111_23','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(269,'37',72,'GRN_S_276_111_24','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(270,'37',72,'GRN_S_276_111_25','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(271,'37',72,'GRN_S_276_111_26','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(272,'37',72,'GRN_S_276_111_27','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(273,'37',72,'GRN_S_276_111_28','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(274,'37',72,'GRN_S_276_111_29','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(275,'37',72,'GRN_S_276_111_30','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(276,'37',72,'GRN_S_276_111_31','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(277,'37',72,'GRN_S_276_111_32','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(278,'37',72,'GRN_S_276_111_33','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(279,'37',72,'GRN_S_276_111_34','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(280,'37',72,'GRN_S_276_111_35','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(281,'37',72,'GRN_S_276_111_36','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(282,'37',72,'GRN_S_276_111_42','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(283,'37',72,'GRN_S_276_111_43','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(284,'37',72,'GRN_S_276_111_44','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(285,'37',72,'GRN_S_276_111_45','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(286,'37',72,'GRN_S_276_111_46','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(287,'37',72,'GRN_S_276_111_47','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(288,'37',72,'GRN_S_276_111_48','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(289,'37',72,'GRN_S_276_111_49','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(290,'37',72,'GRN_S_276_111_50','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(291,'37',72,'GRN_S_276_111_51','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(292,'37',72,'GRN_S_276_111_52','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(293,'37',72,'GRN_S_276_111_53','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(294,'37',72,'GRN_S_276_111_54','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(295,'37',72,'GRN_S_276_111_55','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(296,'37',72,'GRN_S_276_111_56','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(297,'37',72,'GRN_S_276_111_57','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(298,'37',72,'GRN_S_276_111_58','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(299,'37',72,'GRN_S_276_111_59','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(300,'37',72,'GRN_S_276_111_60','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(301,'37',72,'GRN_S_276_111_61','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(302,'37',72,'GRN_S_276_111_62','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(303,'37',72,'GRN_S_276_111_63','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(304,'37',72,'GRN_S_276_111_64','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(305,'37',72,'GRN_S_276_111_65','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(306,'37',72,'GRN_S_276_111_66','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(307,'37',72,'GRN_S_276_111_67','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(308,'37',72,'GRN_S_276_111_68','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(309,'37',72,'GRN_S_276_111_69','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(310,'37',72,'GRN_S_276_111_70','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(311,'37',72,'GRN_S_276_111_71','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(312,'37',72,'GRN_S_276_111_72','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(313,'37',72,'GRN_S_276_111_73','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(314,'37',72,'GRN_S_276_111_74','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(315,'37',72,'GRN_S_276_111_75','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(316,'37',72,'GRN_S_276_111_76','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(317,'37',72,'GRN_S_276_111_77','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(318,'37',72,'GRN_S_276_111_78','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(319,'37',72,'GRN_S_276_111_79','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(320,'37',72,'GRN_S_276_111_80','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(321,'37',72,'GRN_S_276_111_81','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(322,'37',72,'GRN_S_276_111_82','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(323,'37',72,'GRN_S_276_111_83','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(324,'37',72,'GRN_S_276_111_84','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','INSTALLION',NULL,1,NULL,'admin','2024-11-24 15:22:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(325,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'INSTALLTION','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:23:49',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(326,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'INSTALLTION','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 15:23:49',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(327,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:23:56',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(328,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:23:56',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(329,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'PACKAGING','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:24:03',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(330,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'PACKAGING','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:24:03',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(331,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','ASSEMBLY',NULL,1,NULL,'admin','2024-11-24 15:24:12',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(332,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','ASSEMBLY',NULL,1,NULL,'admin','2024-11-24 15:24:12',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(333,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:25:05',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(334,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:28:52',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(335,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'PACKAGING','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:29:11',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(336,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','ASSEMBLY',NULL,1,NULL,'admin','2024-11-24 15:29:24',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(337,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'ASSEMBLY','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:29:37',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(338,'37',72,'GRN_S_276_111_2','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','PACKAGING',NULL,1,NULL,'admin','2024-11-24 15:33:00',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(339,'37',72,'GRN_S_276_111_37','Sale order allocation',NULL,NULL,NULL,'ASSEMBLY','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 15:50:07',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(340,'37',72,'GRN_S_276_111_37','Sale order allocation',NULL,NULL,NULL,'QUALITY_CHECK','ASSEMBLY',NULL,1,NULL,'admin','2024-11-24 15:50:53',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(341,'37',72,'GRN_S_274_89_3','Sale order allocation',NULL,NULL,NULL,'DAMAGE','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 18:05:56',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(342,'37',72,'GRN_S_274_89_3','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 18:06:27',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(343,'37',72,'GRN_S_274_89_3','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','GATE_EXIT',NULL,1,NULL,'admin','2024-11-24 18:08:49',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(344,'37',72,'GRN_S_274_89_3','Sale order allocation',NULL,NULL,NULL,'GATE_EXIT','REFURBISHENT',NULL,1,NULL,'admin','2024-11-24 18:13:14',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(345,'37',72,'GRN_S_276_111_37','Sale order allocation',NULL,NULL,NULL,'ASSEMBLY','DISAMENTAL',NULL,1,NULL,'admin','2024-11-24 19:16:25',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(346,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'ASSEMBLY','DISAMENTAL',NULL,1,NULL,'admin','2024-11-24 19:17:11',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(347,'37',73,'GRN_S_273_20_2','Sale order allocation',NULL,NULL,NULL,'ASSEMBLY','QUALITY_CHECK',NULL,1,NULL,'admin','2024-11-24 19:18:26',NULL,NULL,'Gl---lo-al-Gl-Pi--20-20'),(348,'37',72,'GRN_S_276_111_3','Sale order allocation',NULL,NULL,NULL,'DAMAGE','PACKAGING',NULL,1,NULL,'admin','2024-11-24 19:25:14',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20'),(349,'37',72,'GRN_S_276_111_37','Sale order allocation',NULL,NULL,NULL,'DAMAGE','PACKAGING',NULL,1,NULL,'admin','2024-11-24 19:25:14',NULL,NULL,'El-44-Ho-lo-al-El-Ho--20-20');
/*!40000 ALTER TABLE `move_order_item_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `move_order_line`
--

DROP TABLE IF EXISTS `move_order_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `move_order_line` (
  `id` int NOT NULL,
  `move_order` varchar(45) DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `itema_name` varchar(45) DEFAULT NULL,
  `qty` varchar(45) DEFAULT NULL,
  `so_quantity` varchar(45) DEFAULT NULL,
  `on_hand` varchar(45) DEFAULT NULL,
  `mo_from_store` varchar(45) DEFAULT NULL,
  `issue_date` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `process_seq` varchar(45) DEFAULT NULL,
  `transaction_type` varchar(45) DEFAULT NULL,
  `date_required` varchar(45) DEFAULT NULL,
  `uom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `move_order_line`
--

LOCK TABLES `move_order_line` WRITE;
/*!40000 ALTER TABLE `move_order_line` DISABLE KEYS */;
/*!40000 ALTER TABLE `move_order_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mtl_inventory_transactions`
--

DROP TABLE IF EXISTS `mtl_inventory_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mtl_inventory_transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `grn_line_number` int DEFAULT NULL,
  `sub_inventory_name` varchar(45) DEFAULT NULL,
  `sub_inventory_id` int DEFAULT NULL,
  `location_id` int DEFAULT NULL,
  `item_qty` int DEFAULT NULL,
  `item_code` varchar(50) DEFAULT NULL,
  `so_head_id` int DEFAULT NULL,
  `workinprogress_qty` int DEFAULT '0',
  `dispatched_qty` int DEFAULT '0',
  `created_date` varchar(50) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `grn_id` int DEFAULT NULL,
  `po_number` int DEFAULT NULL,
  `po_line_number` int DEFAULT NULL,
  `item_image` varchar(45) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `lot_number` varchar(45) DEFAULT NULL,
  `hold_qty` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sub_inventory_id_idx` (`sub_inventory_id`),
  KEY `so_head_id_idx` (`id`,`so_head_id`),
  CONSTRAINT `sub_inventory_id` FOREIGN KEY (`sub_inventory_id`) REFERENCES `mtl_sub_inventory` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=291 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mtl_inventory_transactions`
--

LOCK TABLES `mtl_inventory_transactions` WRITE;
/*!40000 ALTER TABLE `mtl_inventory_transactions` DISABLE KEYS */;
INSERT INTO `mtl_inventory_transactions` VALUES (186,340,'STORE',1,1,9,'El---lo-al-El-Ho--20-20',NULL,0,0,'2024-11-14 01:57:32','admin',NULL,NULL,272,NULL,NULL,NULL,NULL,'GRN_L272_12',3),(187,341,'STORE',1,1,0,'Gl---lo-al-Gl-Pi--20-20',NULL,0,0,'2024-11-14 02:19:57','admin',NULL,NULL,273,NULL,NULL,NULL,NULL,'GRN_L273_20',20),(188,342,'STORE',1,1,0,'El-44-Ho-lo-al-El-Ho--20-20',NULL,0,0,'2024-11-14 02:27:59','admin',NULL,NULL,274,NULL,NULL,NULL,NULL,'GRN_L274_89',89),(189,343,'STORE',1,1,8,'El---lo-al-El-Ho--20-20',NULL,0,0,'2024-11-14 03:22:59','admin',NULL,NULL,275,NULL,NULL,NULL,NULL,'GRN_L275_8',0),(190,343,'STORE',1,1,0,'El---lo-al-El-Ho--20-20',NULL,0,0,'2024-11-14 03:23:00','admin',NULL,NULL,275,NULL,NULL,NULL,NULL,'GRN_L275_8',8),(191,343,'Damage',7,1,8,'El---lo-al-El-Ho--20-20',NULL,0,0,'2024-11-14 03:26:50','admin',NULL,NULL,275,688,445,NULL,NULL,NULL,0),(192,343,'Damage',7,1,8,'El---lo-al-El-Ho--20-20',NULL,0,0,'2024-11-14 03:31:49','admin',NULL,NULL,275,688,445,NULL,NULL,NULL,0),(193,343,'Damage',7,1,8,'El---lo-al-El-Ho--20-20',NULL,0,0,'2024-11-14 03:31:49','admin',NULL,NULL,275,688,445,NULL,NULL,NULL,0),(194,344,'STORE',1,1,1,'El-44-Ho-lo-al-El-Ho--20-20',NULL,0,0,'2024-11-14 21:17:42','admin',NULL,NULL,276,NULL,NULL,NULL,NULL,'GRN_L276_111',110),(195,NULL,'ASSEMBLY',2,1,1,'',37,0,0,'2024-11-17 01:30:43','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(196,NULL,'ASSEMBLY',2,1,1,'Gl---lo-al-Gl-Pi--20-20',37,0,0,'2024-11-17 01:32:34','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(197,NULL,'ASSEMBLY',2,1,1,'El---lo-al-El-Ho--20-20',37,0,0,'2024-11-17 01:32:56','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(198,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 01:44:39','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(199,NULL,'ASSEMBLY',2,1,4,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 01:45:24','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(200,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 01:46:35','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(201,NULL,'ASSEMBLY',2,1,72,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 01:48:05','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(202,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',36,0,0,'2024-11-17 01:54:08','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(203,NULL,'ASSEMBLY',2,1,2,'El---lo-al-El-Ho--20-20',37,0,0,'2024-11-17 15:30:17','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(204,NULL,'ASSEMBLY',2,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 15:31:23','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(205,NULL,'QUALITY_CHECK',9,1,1,'Gl---lo-al-Gl-Pi--20-20',37,0,0,'2024-11-17 16:10:42','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(206,NULL,'QUALITY_CHECK',9,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 16:11:07','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(207,NULL,'STORE',1,1,1,'El---lo-al-El-Ho--20-20',37,0,0,'2024-11-17 23:33:00','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(208,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 23:36:53','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(209,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 23:37:22','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(210,NULL,'STORE',1,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 23:37:48','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(211,NULL,'STORE',1,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 23:38:18','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(212,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 23:54:33','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(213,NULL,'QUALITY_CHECK',9,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 23:54:48','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(214,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-17 23:55:22','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(215,NULL,'ASSEMBLY',2,1,1,'Gl---lo-al-Gl-Pi--20-20',37,0,0,'2024-11-17 23:56:37','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(216,NULL,'QUALITY_CHECK',9,1,1,'Gl---lo-al-Gl-Pi--20-20',37,0,0,'2024-11-18 00:07:44','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(217,NULL,'ASSEMBLY',2,1,1,'Gl---lo-al-Gl-Pi--20-20',37,0,0,'2024-11-18 00:08:01','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(218,NULL,'PACKAGING',4,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 00:28:52','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(219,NULL,'QUALITY_CHECK',9,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 00:29:09','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(220,NULL,'PACKAGING',4,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 00:40:05','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(221,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 00:40:16','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(222,NULL,'PACKAGING',4,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 00:49:28','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(223,NULL,'GATE_EXIT',5,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 00:50:49','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(224,NULL,'PACKAGING',4,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 00:50:58','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(225,NULL,'INSTALLION',10,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 00:53:14','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(226,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 01:00:34','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(227,NULL,'INSTALLION',10,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 01:00:54','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(228,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-18 01:01:02','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(229,NULL,'DISAMENTAL',3,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-22 12:21:50','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(230,345,'STORE',1,1,10,'BULB-JNJ-1172024',NULL,0,0,'2024-11-24 12:13:58','admin',NULL,NULL,279,NULL,NULL,NULL,NULL,'GRN_L279_10',0),(231,345,'STORE',1,1,10,'BULB-JNJ-1172024',NULL,0,0,'2024-11-24 12:15:14','admin',NULL,NULL,279,NULL,NULL,NULL,NULL,'GRN_L279_10',0),(232,346,'STORE',1,1,10,'SHRINK WRAP-12322-1172024',NULL,0,0,'2024-11-24 12:35:05','admin',NULL,NULL,282,NULL,NULL,NULL,NULL,'GRN_L282_10',0),(233,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 14:21:10','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(234,NULL,'INSTALLION',10,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 14:22:25','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(235,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 14:56:05','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(236,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 14:58:59','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(237,NULL,'INSTALLION',10,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:00:44','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(238,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:02:11','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(239,NULL,'INSTALLION',10,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:09:34','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(240,NULL,'INSTALLION',10,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:11:08','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(241,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:11:37','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(242,NULL,'INSTALLION',10,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:13:03','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(243,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:15:03','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(244,NULL,'INSTALLION',10,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:16:02','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(245,NULL,'INSTALLION',10,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:17:24','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(246,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:17:49','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(247,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:18:18','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(248,NULL,'INSTALLION',10,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:18:34','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(249,NULL,'QUALITY_CHECK',9,1,78,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:19:51','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(250,NULL,'PACKAGING',4,1,78,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:20:52','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(251,NULL,'GATE_EXIT',5,1,78,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:21:43','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(252,NULL,'INSTALLION',10,1,78,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:22:00','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(253,NULL,'GATE_EXIT',5,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:23:49','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(254,NULL,'PACKAGING',4,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:23:56','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(255,NULL,'QUALITY_CHECK',9,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:24:03','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(256,NULL,'ASSEMBLY',2,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:24:12','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(257,NULL,'QUALITY_CHECK',9,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:25:05','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(258,NULL,'PACKAGING',4,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:28:52','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(259,NULL,'QUALITY_CHECK',9,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:29:11','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(260,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:29:24','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(261,NULL,'QUALITY_CHECK',9,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:29:37','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(262,NULL,'PACKAGING',4,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:33:00','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(263,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:42:07','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(264,NULL,'QUALITY_CHECK',9,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:50:07','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(265,NULL,'ASSEMBLY',2,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 15:50:53','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(266,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 18:05:56','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(267,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 18:06:27','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(268,NULL,'GATE_EXIT',5,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 18:08:49','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(269,NULL,'REFURBISHENT',6,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 18:13:14','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(270,NULL,'DISAMENTAL',3,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 19:16:25','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(271,NULL,'DISAMENTAL',3,1,1,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 19:17:11','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(272,NULL,'QUALITY_CHECK',9,1,1,'Gl---lo-al-Gl-Pi--20-20',37,0,0,'2024-11-24 19:18:26','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(273,NULL,'PACKAGING',4,1,2,'El-44-Ho-lo-al-El-Ho--20-20',37,0,0,'2024-11-24 19:25:14','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(274,NULL,'STORE',1,1,1,'irem code',NULL,0,0,'2024-11-24 19:58:46','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(275,NULL,'STORE',1,1,1,'irem code',NULL,0,0,'2024-11-24 19:59:37','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(276,NULL,'STORE',1,1,1,'irem code',NULL,0,0,'2024-11-24 20:00:28','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(277,NULL,'STORE',1,1,1,'irem code',NULL,0,0,'2024-11-24 20:02:46','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(278,NULL,'STORE',1,1,1,'irem code',NULL,0,0,'2024-11-24 20:04:16','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(279,NULL,'STORE',1,1,2,'irem code',NULL,0,0,'2024-11-24 20:11:20','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(280,NULL,'STORE',1,1,2,'hjh',NULL,0,0,'2024-11-24 20:11:20','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(281,NULL,'STORE',1,1,2,'irem code',NULL,0,0,'2024-11-24 20:12:20','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(282,NULL,'STORE',1,1,2,'hjh',NULL,0,0,'2024-11-24 20:12:20','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(283,NULL,'STORE',1,1,1,'newMis_items',NULL,0,0,'2024-11-24 20:13:23','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(284,NULL,'STORE',1,1,1,'newMis_items',NULL,0,0,'2024-11-24 20:13:56','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(285,NULL,'STORE',1,1,10,'lkjklj',NULL,0,0,'2024-11-24 20:15:24','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(286,NULL,'STORE',1,1,10,'lkjklj',NULL,0,0,'2024-11-24 20:17:03','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(287,NULL,'STORE',1,1,10,'lkjklj',NULL,0,0,'2024-11-24 20:18:11','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(288,NULL,'STORE',1,1,8,'lkjklj',NULL,0,0,'2024-11-24 20:18:22','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(289,NULL,'STORE',1,1,10,'gy',NULL,0,0,'2024-11-24 20:21:07','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(290,NULL,'STORE',1,1,10,'yg',NULL,0,0,'2024-11-24 20:22:41','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `mtl_inventory_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mtl_lot_number`
--

DROP TABLE IF EXISTS `mtl_lot_number`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mtl_lot_number` (
  `id` int NOT NULL AUTO_INCREMENT,
  `grn_number` int DEFAULT NULL,
  `grn_line_number` int DEFAULT NULL,
  `lot_name` varchar(45) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mtl_lot_number`
--

LOCK TABLES `mtl_lot_number` WRITE;
/*!40000 ALTER TABLE `mtl_lot_number` DISABLE KEYS */;
INSERT INTO `mtl_lot_number` VALUES (67,248,329,'GRN_L248_10',10,'2024-11-07 15:49:19','admin','update','updtesd by','El---lo-al-El-Ho--20-20'),(68,250,330,'GRN_L250_3',3,'2024-11-07 16:00:24','admin','update','updtesd by','El---lo-al-El-Bu--20-20'),(69,251,331,'GRN_L251_5',5,'2024-11-07 16:01:09','admin','update','updtesd by','El---lo-al-El-Bu--20-20'),(70,253,332,'GRN_L253_10',10,'2024-11-07 18:09:35','admin','update','updtesd by','El---lo-al-El-Bu--20-20'),(71,255,333,'GRN_L255_10',10,'2024-11-08 01:48:07','admin','update','updtesd by','Gl---lo-al-Gl-Pi--20-20'),(72,257,334,'GRN_L257_100',100,'2024-11-08 02:03:24','admin','update','updtesd by','El---lo-al-El-Ho--20-20'),(73,258,335,'GRN_L258_20',20,'2024-11-08 23:40:24','admin','update','updtesd by','El-44-Ho-lo-al-El-Ho--20-20'),(74,258,335,'GRN_L258_20',20,'2024-11-08 23:44:30','admin','update','updtesd by','El-44-Ho-lo-al-El-Ho--20-20'),(75,259,336,'GRN_L259_1',1,'2024-11-09 01:53:56','admin','update','updtesd by','El---lo-al-El-Bu--20-20'),(76,260,337,'GRN_L260_42',42,'2024-11-09 03:45:00','admin','update','updtesd by','Gl---lo-al-Gl-Sa--20-20'),(77,268,338,'GRN_L268_10',10,'2024-11-14 00:13:10','admin','update','updtesd by','Gl---lo-al-Gl-Pi--20-20'),(78,270,339,'GRN_L270_76',76,'2024-11-14 01:10:25','admin','update','updtesd by','El-44-Ho-lo-al-El-Ho--20-20'),(79,272,340,'GRN_L272_12',12,'2024-11-14 01:57:32','admin','update','updtesd by','El---lo-al-El-Ho--20-20'),(80,273,341,'GRN_L273_20',20,'2024-11-14 02:19:57','admin','update','updtesd by','Gl---lo-al-Gl-Pi--20-20'),(81,274,342,'GRN_L274_89',89,'2024-11-14 02:27:59','admin','update','updtesd by','El-44-Ho-lo-al-El-Ho--20-20'),(82,275,343,'GRN_L275_8',8,'2024-11-14 03:22:59','admin','update','updtesd by','El---lo-al-El-Ho--20-20'),(83,275,343,'GRN_L275_8',8,'2024-11-14 03:23:00','admin','update','updtesd by','El---lo-al-El-Ho--20-20'),(84,275,343,'El---lo-al-El-Ho--20-20',8,'2024-11-14 03:26:50','admin','update','updtesd by',NULL),(85,275,343,'El---lo-al-El-Ho--20-20',8,'2024-11-14 03:31:49','admin','update','updtesd by',NULL),(86,275,343,'El---lo-al-El-Ho--20-20',8,'2024-11-14 03:31:49','admin','update','updtesd by',NULL),(87,276,344,'GRN_L276_111',111,'2024-11-14 21:17:42','admin','update','updtesd by','El-44-Ho-lo-al-El-Ho--20-20'),(88,279,345,'GRN_L279_10',10,'2024-11-24 12:15:14','admin','update','updtesd by','BULB-JNJ-1172024'),(89,282,346,'GRN_L282_10',10,'2024-11-24 12:35:05','admin','update','updtesd by','SHRINK WRAP-12322-1172024');
/*!40000 ALTER TABLE `mtl_lot_number` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mtl_serial_number`
--

DROP TABLE IF EXISTS `mtl_serial_number`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mtl_serial_number` (
  `id` int NOT NULL AUTO_INCREMENT,
  `serial_number` varchar(45) DEFAULT NULL,
  `grn_id` int DEFAULT NULL,
  `grn_line_id` int DEFAULT NULL,
  `po_number` int DEFAULT NULL,
  `po_line_number` varchar(45) DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `lot_number` varchar(45) DEFAULT NULL,
  `mtnl_transaction_id` int DEFAULT NULL,
  `status` enum('yes','no') DEFAULT 'yes',
  `so_number` int DEFAULT NULL,
  `so_line_number` int DEFAULT NULL,
  `inventory_id` int DEFAULT NULL,
  `unit_price` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `grn_id_idx` (`grn_id`),
  KEY `mtnl_transaction_id_idx` (`mtnl_transaction_id`),
  CONSTRAINT `grn_id` FOREIGN KEY (`grn_id`) REFERENCES `grn_goods_receipt_header` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1701 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mtl_serial_number`
--

LOCK TABLES `mtl_serial_number` WRITE;
/*!40000 ALTER TABLE `mtl_serial_number` DISABLE KEYS */;
INSERT INTO `mtl_serial_number` VALUES (1319,'GRN_S_272_12_1',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 22:35:48','admin','GRN_L272_12',186,'no',37,74,NULL,NULL),(1320,'GRN_S_272_12_2',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:08:41','admin','GRN_L272_12',186,'yes',37,74,NULL,NULL),(1321,'GRN_S_272_12_3',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:01:10','admin','GRN_L272_12',186,'no',37,74,NULL,NULL),(1322,'GRN_S_272_12_4',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:08:41','admin','GRN_L272_12',186,'yes',37,74,NULL,NULL),(1323,'GRN_S_272_12_5',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:08:41','admin','GRN_L272_12',186,'yes',37,74,NULL,NULL),(1324,'GRN_S_272_12_6',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:08:41','admin','GRN_L272_12',186,'yes',37,74,NULL,NULL),(1325,'GRN_S_272_12_7',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:08:41','admin','GRN_L272_12',186,'yes',37,74,NULL,NULL),(1326,'GRN_S_272_12_8',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 23:46:51','admin','GRN_L272_12',186,'yes',37,74,NULL,NULL),(1327,'GRN_S_272_12_9',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:08:41','admin','GRN_L272_12',186,'yes',37,74,NULL,NULL),(1328,'GRN_S_272_12_10',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:08:41','admin','GRN_L272_12',186,'yes',37,74,NULL,NULL),(1329,'GRN_S_272_12_11',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:08:41','admin','GRN_L272_12',186,'yes',37,74,NULL,NULL),(1330,'GRN_S_272_12_12',272,340,686,'443','El---lo-al-El-Ho--20-20','admin','2024-11-14 01:57:32','2024-11-14 04:01:10','admin','GRN_L272_12',186,'no',37,74,NULL,NULL),(1331,'GRN_S_273_20_1',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-16 23:42:01','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1332,'GRN_S_273_20_2',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-24 19:18:26','admin','GRN_L273_20',272,'no',37,73,9,NULL),(1333,'GRN_S_273_20_3',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1334,'GRN_S_273_20_4',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1335,'GRN_S_273_20_5',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1336,'GRN_S_273_20_6',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1337,'GRN_S_273_20_7',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1338,'GRN_S_273_20_8',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1339,'GRN_S_273_20_9',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1340,'GRN_S_273_20_10',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1341,'GRN_S_273_20_11',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1342,'GRN_S_273_20_12',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1343,'GRN_S_273_20_13',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1344,'GRN_S_273_20_14',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1345,'GRN_S_273_20_15',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1346,'GRN_S_273_20_16',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1347,'GRN_S_273_20_17',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1348,'GRN_S_273_20_18',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1349,'GRN_S_273_20_19',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1350,'GRN_S_273_20_20',273,341,685,'442','Gl---lo-al-Gl-Pi--20-20','admin','2024-11-14 02:19:57','2024-11-14 02:26:13','admin','GRN_L273_20',187,'no',37,73,1,NULL),(1351,'GRN_S_274_89_1',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-17 23:37:48','admin','GRN_L274_89',210,'no',37,75,1,NULL),(1352,'GRN_S_274_89_2',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-24 15:18:34','admin','GRN_L274_89',248,'no',37,75,10,NULL),(1353,'GRN_S_274_89_3',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-24 18:13:14','admin','GRN_L274_89',269,'no',37,72,6,NULL),(1354,'GRN_S_274_89_4',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-24 15:18:34','admin','GRN_L274_89',248,'no',37,75,10,NULL),(1355,'GRN_S_274_89_5',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1356,'GRN_S_274_89_6',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1357,'GRN_S_274_89_7',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1358,'GRN_S_274_89_8',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1359,'GRN_S_274_89_9',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1360,'GRN_S_274_89_10',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1361,'GRN_S_274_89_11',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1362,'GRN_S_274_89_12',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1363,'GRN_S_274_89_13',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1364,'GRN_S_274_89_14',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1365,'GRN_S_274_89_15',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1366,'GRN_S_274_89_16',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1367,'GRN_S_274_89_17',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1368,'GRN_S_274_89_18',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1369,'GRN_S_274_89_19',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1370,'GRN_S_274_89_20',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1371,'GRN_S_274_89_21',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1372,'GRN_S_274_89_22',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 23:18:15','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1373,'GRN_S_274_89_23',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1374,'GRN_S_274_89_24',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 23:18:15','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1375,'GRN_S_274_89_25',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1376,'GRN_S_274_89_26',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1377,'GRN_S_274_89_27',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1378,'GRN_S_274_89_28',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1379,'GRN_S_274_89_29',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1380,'GRN_S_274_89_30',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1381,'GRN_S_274_89_31',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1382,'GRN_S_274_89_32',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1383,'GRN_S_274_89_33',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1384,'GRN_S_274_89_34',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1385,'GRN_S_274_89_35',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1386,'GRN_S_274_89_36',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1387,'GRN_S_274_89_37',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1388,'GRN_S_274_89_38',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1389,'GRN_S_274_89_39',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1390,'GRN_S_274_89_40',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1391,'GRN_S_274_89_41',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1392,'GRN_S_274_89_42',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1393,'GRN_S_274_89_43',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1394,'GRN_S_274_89_44',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1395,'GRN_S_274_89_45',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1396,'GRN_S_274_89_46',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1397,'GRN_S_274_89_47',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1398,'GRN_S_274_89_48',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1399,'GRN_S_274_89_49',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1400,'GRN_S_274_89_50',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1401,'GRN_S_274_89_51',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1402,'GRN_S_274_89_52',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1403,'GRN_S_274_89_53',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1404,'GRN_S_274_89_54',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1405,'GRN_S_274_89_55',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1406,'GRN_S_274_89_56',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1407,'GRN_S_274_89_57',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1408,'GRN_S_274_89_58',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1409,'GRN_S_274_89_59',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1410,'GRN_S_274_89_60',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1411,'GRN_S_274_89_61',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1412,'GRN_S_274_89_62',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1413,'GRN_S_274_89_63',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1414,'GRN_S_274_89_64',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1415,'GRN_S_274_89_65',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1416,'GRN_S_274_89_66',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1417,'GRN_S_274_89_67',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1418,'GRN_S_274_89_68',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1419,'GRN_S_274_89_69',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1420,'GRN_S_274_89_70',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1421,'GRN_S_274_89_71',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1422,'GRN_S_274_89_72',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1423,'GRN_S_274_89_73',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1424,'GRN_S_274_89_74',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1425,'GRN_S_274_89_75',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1426,'GRN_S_274_89_76',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1427,'GRN_S_274_89_77',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1428,'GRN_S_274_89_78',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1429,'GRN_S_274_89_79',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1430,'GRN_S_274_89_80',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1431,'GRN_S_274_89_81',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1432,'GRN_S_274_89_82',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1433,'GRN_S_274_89_83',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1434,'GRN_S_274_89_84',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1435,'GRN_S_274_89_85',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1436,'GRN_S_274_89_86',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1437,'GRN_S_274_89_87',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1438,'GRN_S_274_89_88',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1439,'GRN_S_274_89_89',274,342,684,'441','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 02:27:59','2024-11-14 02:30:45','admin','GRN_L274_89',188,'no',37,75,1,NULL),(1440,'GRN_S_275_8_1',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:22:59','2024-11-17 15:30:17','admin','GRN_L275_8',203,'no',37,74,2,NULL),(1441,'GRN_S_275_8_2',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:22:59','2024-11-17 15:30:17','admin','GRN_L275_8',203,'no',37,74,2,NULL),(1442,'GRN_S_275_8_3',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:22:59','2024-11-17 23:33:00','admin','GRN_L275_8',207,'no',37,74,1,NULL),(1443,'GRN_S_275_8_4',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:22:59','2024-11-14 04:01:10','admin','GRN_L275_8',189,'no',37,74,1,NULL),(1444,'GRN_S_275_8_5',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:22:59','2024-11-14 04:01:10','admin','GRN_L275_8',189,'no',37,74,1,NULL),(1445,'GRN_S_275_8_6',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:22:59','2024-11-14 04:01:10','admin','GRN_L275_8',189,'no',37,74,1,NULL),(1446,'GRN_S_275_8_7',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:22:59','2024-11-14 04:01:10','admin','GRN_L275_8',189,'no',37,74,1,NULL),(1447,'GRN_S_275_8_8',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:22:59','2024-11-14 04:01:10','admin','GRN_L275_8',189,'no',37,74,1,NULL),(1448,'GRN_S_275_8_1',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:23:00','2024-11-17 15:30:17','admin','GRN_L275_8',203,'no',37,74,2,NULL),(1449,'GRN_S_275_8_2',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:23:00','2024-11-17 15:30:17','admin','GRN_L275_8',203,'no',37,74,2,NULL),(1450,'GRN_S_275_8_3',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:23:00','2024-11-17 23:33:00','admin','GRN_L275_8',207,'no',37,74,1,NULL),(1451,'GRN_S_275_8_4',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:23:00','2024-11-14 04:01:10','admin','GRN_L275_8',190,'no',37,74,1,NULL),(1452,'GRN_S_275_8_5',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:23:00','2024-11-14 04:01:10','admin','GRN_L275_8',190,'no',37,74,1,NULL),(1453,'GRN_S_275_8_6',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:23:00','2024-11-14 04:01:10','admin','GRN_L275_8',190,'no',37,74,1,NULL),(1454,'GRN_S_275_8_7',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:23:00','2024-11-14 04:01:10','admin','GRN_L275_8',190,'no',37,74,1,NULL),(1455,'GRN_S_275_8_8',275,343,688,'445','El---lo-al-El-Ho--20-20','admin','2024-11-14 03:23:00','2024-11-14 04:01:10','admin','GRN_L275_8',190,'no',37,74,1,NULL),(1456,'GRN_S_276_111_1',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1457,'GRN_S_276_111_2',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:33:00','admin','GRN_L276_111',262,'no',37,72,4,NULL),(1458,'GRN_S_276_111_3',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 19:25:14','admin','GRN_L276_111',273,'no',37,72,4,NULL),(1459,'GRN_S_276_111_4',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1460,'GRN_S_276_111_5',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1461,'GRN_S_276_111_6',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1462,'GRN_S_276_111_7',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1463,'GRN_S_276_111_8',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1464,'GRN_S_276_111_9',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1465,'GRN_S_276_111_10',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1466,'GRN_S_276_111_11',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1467,'GRN_S_276_111_12',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1468,'GRN_S_276_111_13',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1469,'GRN_S_276_111_14',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1470,'GRN_S_276_111_15',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1471,'GRN_S_276_111_16',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1472,'GRN_S_276_111_17',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1473,'GRN_S_276_111_18',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1474,'GRN_S_276_111_19',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1475,'GRN_S_276_111_20',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1476,'GRN_S_276_111_21',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1477,'GRN_S_276_111_22',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1478,'GRN_S_276_111_23',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1479,'GRN_S_276_111_24',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1480,'GRN_S_276_111_25',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1481,'GRN_S_276_111_26',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1482,'GRN_S_276_111_27',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1483,'GRN_S_276_111_28',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1484,'GRN_S_276_111_29',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1485,'GRN_S_276_111_30',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1486,'GRN_S_276_111_31',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1487,'GRN_S_276_111_32',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1488,'GRN_S_276_111_33',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1489,'GRN_S_276_111_34',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1490,'GRN_S_276_111_35',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1491,'GRN_S_276_111_36',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1492,'GRN_S_276_111_37',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 19:25:14','admin','GRN_L276_111',273,'no',37,72,4,NULL),(1493,'GRN_S_276_111_38',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-17 01:54:08','admin','GRN_L276_111',202,'no',36,68,2,NULL),(1494,'GRN_S_276_111_39',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-17 01:53:05','admin','GRN_L276_111',194,'yes',37,72,1,NULL),(1495,'GRN_S_276_111_40',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 21:18:58','admin','GRN_L276_111',194,'no',37,72,1,NULL),(1496,'GRN_S_276_111_41',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 21:18:58','admin','GRN_L276_111',194,'no',37,72,1,NULL),(1497,'GRN_S_276_111_42',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1498,'GRN_S_276_111_43',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1499,'GRN_S_276_111_44',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1500,'GRN_S_276_111_45',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1501,'GRN_S_276_111_46',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1502,'GRN_S_276_111_47',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1503,'GRN_S_276_111_48',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1504,'GRN_S_276_111_49',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1505,'GRN_S_276_111_50',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1506,'GRN_S_276_111_51',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1507,'GRN_S_276_111_52',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1508,'GRN_S_276_111_53',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1509,'GRN_S_276_111_54',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1510,'GRN_S_276_111_55',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1511,'GRN_S_276_111_56',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1512,'GRN_S_276_111_57',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1513,'GRN_S_276_111_58',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1514,'GRN_S_276_111_59',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1515,'GRN_S_276_111_60',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1516,'GRN_S_276_111_61',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1517,'GRN_S_276_111_62',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1518,'GRN_S_276_111_63',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1519,'GRN_S_276_111_64',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1520,'GRN_S_276_111_65',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1521,'GRN_S_276_111_66',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1522,'GRN_S_276_111_67',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1523,'GRN_S_276_111_68',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1524,'GRN_S_276_111_69',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1525,'GRN_S_276_111_70',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1526,'GRN_S_276_111_71',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1527,'GRN_S_276_111_72',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1528,'GRN_S_276_111_73',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1529,'GRN_S_276_111_74',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1530,'GRN_S_276_111_75',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1531,'GRN_S_276_111_76',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1532,'GRN_S_276_111_77',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1533,'GRN_S_276_111_78',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1534,'GRN_S_276_111_79',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1535,'GRN_S_276_111_80',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1536,'GRN_S_276_111_81',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1537,'GRN_S_276_111_82',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1538,'GRN_S_276_111_83',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1539,'GRN_S_276_111_84',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-24 15:22:00','admin','GRN_L276_111',252,'no',37,72,10,NULL),(1540,'GRN_S_276_111_85',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 21:18:58','admin','GRN_L276_111',194,'no',37,72,1,NULL),(1541,'GRN_S_276_111_86',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 21:18:58','admin','GRN_L276_111',194,'no',37,72,1,NULL),(1542,'GRN_S_276_111_87',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 21:18:58','admin','GRN_L276_111',194,'no',37,72,1,NULL),(1543,'GRN_S_276_111_88',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 21:18:58','admin','GRN_L276_111',194,'no',37,72,1,NULL),(1544,'GRN_S_276_111_89',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 21:18:58','admin','GRN_L276_111',194,'no',37,72,1,NULL),(1545,'GRN_S_276_111_90',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1546,'GRN_S_276_111_91',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1547,'GRN_S_276_111_92',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1548,'GRN_S_276_111_93',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1549,'GRN_S_276_111_94',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1550,'GRN_S_276_111_95',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1551,'GRN_S_276_111_96',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1552,'GRN_S_276_111_97',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1553,'GRN_S_276_111_98',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1554,'GRN_S_276_111_99',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1555,'GRN_S_276_111_100',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1556,'GRN_S_276_111_101',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1557,'GRN_S_276_111_102',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1558,'GRN_S_276_111_103',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1559,'GRN_S_276_111_104',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1560,'GRN_S_276_111_105',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1561,'GRN_S_276_111_106',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1562,'GRN_S_276_111_107',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1563,'GRN_S_276_111_108',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1564,'GRN_S_276_111_109',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1565,'GRN_S_276_111_110',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-14 23:18:15','admin','GRN_L276_111',194,'no',37,75,1,NULL),(1566,'GRN_S_276_111_111',276,344,687,'444','El-44-Ho-lo-al-El-Ho--20-20','admin','2024-11-14 21:17:42','2024-11-17 23:38:18','admin','GRN_L276_111',211,'no',37,75,1,NULL),(1567,'GRN_S_279_10_1',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1568,'GRN_S_279_10_2',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1569,'GRN_S_279_10_3',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1570,'GRN_S_279_10_4',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1571,'GRN_S_279_10_5',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1572,'GRN_S_279_10_6',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1573,'GRN_S_279_10_7',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1574,'GRN_S_279_10_8',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1575,'GRN_S_279_10_9',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1576,'GRN_S_279_10_10',279,345,697,'454','BULB-JNJ-1172024','admin','2024-11-24 12:15:14',NULL,NULL,'GRN_L279_10',231,'yes',NULL,NULL,1,150),(1577,'GRN_S_282_10_1',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1578,'GRN_S_282_10_2',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1579,'GRN_S_282_10_3',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1580,'GRN_S_282_10_4',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1581,'GRN_S_282_10_5',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1582,'GRN_S_282_10_6',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1583,'GRN_S_282_10_7',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1584,'GRN_S_282_10_8',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1585,'GRN_S_282_10_9',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1586,'GRN_S_282_10_10',282,346,697,'455','SHRINK WRAP-12322-1172024','admin','2024-11-24 12:35:05',NULL,NULL,'GRN_L282_10',232,'yes',NULL,NULL,1,100),(1587,'MIS-20241125-003246-001',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:02:46',NULL,NULL,NULL,277,'yes',NULL,NULL,1,NULL),(1588,'MIS-20241125-003416-001',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:04:16',NULL,NULL,NULL,278,'yes',NULL,NULL,1,NULL),(1589,'MIS-20241125-004120-001',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:11:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1590,'MIS-20241125-004120-002',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:11:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1591,'MIS-20241125-004120-001',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:11:20',NULL,NULL,NULL,1590,'yes',NULL,NULL,1,NULL),(1592,'MIS-20241125-004120-002',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:11:20',NULL,NULL,NULL,1590,'yes',NULL,NULL,1,NULL),(1593,'MIS-20241125-004220-001',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1594,'MIS-20241125-004220-002',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1595,'MIS-20241125-004220-003',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1596,'MIS-20241125-004220-004',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1597,'MIS-20241125-004220-005',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1598,'MIS-20241125-004220-006',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1599,'MIS-20241125-004220-007',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1600,'MIS-20241125-004220-008',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1601,'MIS-20241125-004220-009',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1602,'MIS-20241125-004220-010',NULL,NULL,NULL,NULL,'irem code','admin','2024-11-24 20:12:20',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1603,'MIS-20241125-004220-001',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1604,'MIS-20241125-004220-002',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1605,'MIS-20241125-004220-003',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1606,'MIS-20241125-004220-004',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1607,'MIS-20241125-004220-005',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1608,'MIS-20241125-004220-006',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1609,'MIS-20241125-004220-007',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1610,'MIS-20241125-004220-008',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1611,'MIS-20241125-004220-009',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1612,'MIS-20241125-004220-010',NULL,NULL,NULL,NULL,'hjh','admin','2024-11-24 20:12:20',NULL,NULL,NULL,1602,'yes',NULL,NULL,1,NULL),(1613,'MIS-20241125-004323-001',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1614,'MIS-20241125-004323-002',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1615,'MIS-20241125-004323-003',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1616,'MIS-20241125-004323-004',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1617,'MIS-20241125-004323-005',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1618,'MIS-20241125-004323-006',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1619,'MIS-20241125-004323-007',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1620,'MIS-20241125-004323-008',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1621,'MIS-20241125-004323-009',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1622,'MIS-20241125-004323-010',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1623,'MIS-20241125-004323-011',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1624,'MIS-20241125-004323-012',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1625,'MIS-20241125-004323-013',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1626,'MIS-20241125-004323-014',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1627,'MIS-20241125-004323-015',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:23',NULL,NULL,NULL,0,'yes',NULL,NULL,1,NULL),(1628,'MIS-20241125-004356-001',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,284,'yes',NULL,NULL,1,NULL),(1629,'MIS-20241125-004356-002',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1628,'yes',NULL,NULL,1,NULL),(1630,'MIS-20241125-004356-003',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1629,'yes',NULL,NULL,1,NULL),(1631,'MIS-20241125-004356-004',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1630,'yes',NULL,NULL,1,NULL),(1632,'MIS-20241125-004356-005',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1631,'yes',NULL,NULL,1,NULL),(1633,'MIS-20241125-004356-006',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1632,'yes',NULL,NULL,1,NULL),(1634,'MIS-20241125-004356-007',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1633,'yes',NULL,NULL,1,NULL),(1635,'MIS-20241125-004356-008',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1634,'yes',NULL,NULL,1,NULL),(1636,'MIS-20241125-004356-009',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1635,'yes',NULL,NULL,1,NULL),(1637,'MIS-20241125-004356-010',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1636,'yes',NULL,NULL,1,NULL),(1638,'MIS-20241125-004356-011',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1637,'yes',NULL,NULL,1,NULL),(1639,'MIS-20241125-004356-012',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1638,'yes',NULL,NULL,1,NULL),(1640,'MIS-20241125-004356-013',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1639,'yes',NULL,NULL,1,NULL),(1641,'MIS-20241125-004356-014',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1640,'yes',NULL,NULL,1,NULL),(1642,'MIS-20241125-004356-015',NULL,NULL,NULL,NULL,'newMis_items','admin','2024-11-24 20:13:56',NULL,NULL,NULL,1641,'yes',NULL,NULL,1,NULL),(1643,'MIS-20241125-004524-001',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,285,'yes',NULL,NULL,1,NULL),(1644,'MIS-20241125-004524-002',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,1643,'yes',NULL,NULL,1,NULL),(1645,'MIS-20241125-004524-003',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,1644,'yes',NULL,NULL,1,NULL),(1646,'MIS-20241125-004524-004',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,1645,'yes',NULL,NULL,1,NULL),(1647,'MIS-20241125-004524-005',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,1646,'yes',NULL,NULL,1,NULL),(1648,'MIS-20241125-004524-006',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,1647,'yes',NULL,NULL,1,NULL),(1649,'MIS-20241125-004524-007',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,1648,'yes',NULL,NULL,1,NULL),(1650,'MIS-20241125-004524-008',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,1649,'yes',NULL,NULL,1,NULL),(1651,'MIS-20241125-004524-009',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,1650,'yes',NULL,NULL,1,NULL),(1652,'MIS-20241125-004524-010',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:15:24',NULL,NULL,NULL,1651,'yes',NULL,NULL,1,NULL),(1653,'MIS-20241125-004703-001',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,286,'yes',NULL,NULL,1,NULL),(1654,'MIS-20241125-004703-002',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,1653,'yes',NULL,NULL,1,NULL),(1655,'MIS-20241125-004703-003',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,1654,'yes',NULL,NULL,1,NULL),(1656,'MIS-20241125-004703-004',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,1655,'yes',NULL,NULL,1,NULL),(1657,'MIS-20241125-004703-005',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,1656,'yes',NULL,NULL,1,NULL),(1658,'MIS-20241125-004703-006',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,1657,'yes',NULL,NULL,1,NULL),(1659,'MIS-20241125-004703-007',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,1658,'yes',NULL,NULL,1,NULL),(1660,'MIS-20241125-004703-008',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,1659,'yes',NULL,NULL,1,NULL),(1661,'MIS-20241125-004703-009',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,1660,'yes',NULL,NULL,1,NULL),(1662,'MIS-20241125-004703-010',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:17:03',NULL,NULL,NULL,1661,'yes',NULL,NULL,1,NULL),(1663,'MIS-20241125-004811-001',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1664,'MIS-20241125-004811-002',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1665,'MIS-20241125-004811-003',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1666,'MIS-20241125-004811-004',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1667,'MIS-20241125-004811-005',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1668,'MIS-20241125-004811-006',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1669,'MIS-20241125-004811-007',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1670,'MIS-20241125-004811-008',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1671,'MIS-20241125-004811-009',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1672,'MIS-20241125-004811-010',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:11',NULL,NULL,NULL,287,'yes',NULL,NULL,1,NULL),(1673,'MIS-20241125-004822-001',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:22',NULL,NULL,NULL,288,'yes',NULL,NULL,1,NULL),(1674,'MIS-20241125-004822-002',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:22',NULL,NULL,NULL,288,'yes',NULL,NULL,1,NULL),(1675,'MIS-20241125-004822-003',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:22',NULL,NULL,NULL,288,'yes',NULL,NULL,1,NULL),(1676,'MIS-20241125-004822-004',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:22',NULL,NULL,NULL,288,'yes',NULL,NULL,1,NULL),(1677,'MIS-20241125-004822-005',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:22',NULL,NULL,NULL,288,'yes',NULL,NULL,1,NULL),(1678,'MIS-20241125-004822-006',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:22',NULL,NULL,NULL,288,'yes',NULL,NULL,1,NULL),(1679,'MIS-20241125-004822-007',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:22',NULL,NULL,NULL,288,'yes',NULL,NULL,1,NULL),(1680,'MIS-20241125-004822-008',NULL,NULL,NULL,NULL,'lkjklj','admin','2024-11-24 20:18:22',NULL,NULL,NULL,288,'yes',NULL,NULL,1,NULL),(1681,'MIS-20241125-005107-001',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1682,'MIS-20241125-005107-002',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1683,'MIS-20241125-005107-003',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1684,'MIS-20241125-005107-004',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1685,'MIS-20241125-005107-005',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1686,'MIS-20241125-005107-006',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1687,'MIS-20241125-005107-007',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1688,'MIS-20241125-005107-008',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1689,'MIS-20241125-005107-009',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1690,'MIS-20241125-005107-010',NULL,NULL,NULL,NULL,'gy','admin','2024-11-24 20:21:07',NULL,NULL,NULL,289,'yes',NULL,NULL,1,NULL),(1691,'MIS-20241125-005241-001',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL),(1692,'MIS-20241125-005241-002',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL),(1693,'MIS-20241125-005241-003',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL),(1694,'MIS-20241125-005241-004',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL),(1695,'MIS-20241125-005241-005',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL),(1696,'MIS-20241125-005241-006',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL),(1697,'MIS-20241125-005241-007',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL),(1698,'MIS-20241125-005241-008',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL),(1699,'MIS-20241125-005241-009',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL),(1700,'MIS-20241125-005241-010',NULL,NULL,NULL,NULL,'yg','admin','2024-11-24 20:22:41',NULL,NULL,NULL,290,'yes',NULL,NULL,1,NULL);
/*!40000 ALTER TABLE `mtl_serial_number` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mtl_sub_inventory`
--

DROP TABLE IF EXISTS `mtl_sub_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mtl_sub_inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sub_inventory_code` varchar(50) DEFAULT NULL,
  `sub_inventory_name` varchar(45) DEFAULT NULL,
  `active_warehouse_code` varchar(45) DEFAULT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `QTY` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mtl_sub_inventory`
--

LOCK TABLES `mtl_sub_inventory` WRITE;
/*!40000 ALTER TABLE `mtl_sub_inventory` DISABLE KEYS */;
INSERT INTO `mtl_sub_inventory` VALUES (1,'DLW-WH','STORE','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL),(2,'DLW-WH','ASSEMBLY','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL),(3,'DLW-WH','DISAMENTAL','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL),(4,'DLW-WH','PACKAGING','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL),(5,'DLW-WH','GATE_EXIT','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL),(6,'DLW-WH','REFURBISHENT','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL),(7,'DLW-WH','DAMAGE','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL),(8,'DLW-WH','RTV','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL),(9,'DLW-WH','QUALITY_CHECK','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL),(10,'DLW-WH','INSTALLION','DLW-WH',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL);
/*!40000 ALTER TABLE `mtl_sub_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization_details_tbl`
--

DROP TABLE IF EXISTS `organization_details_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organization_details_tbl` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `organization_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `organigation_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gst_number` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sub_cutomer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `starting_date` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ending_date` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization_details_tbl`
--

LOCK TABLES `organization_details_tbl` WRITE;
/*!40000 ALTER TABLE `organization_details_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `organization_details_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_status_table`
--

DROP TABLE IF EXISTS `project_status_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project_status_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(45) DEFAULT NULL,
  `total_qty` int DEFAULT NULL,
  `so_head_id` int DEFAULT NULL,
  `so_line_id` int DEFAULT NULL,
  `drawing_qty` int DEFAULT NULL,
  `sample_qty` int DEFAULT NULL,
  `issue_item_qty` int DEFAULT NULL,
  `assemble_item_qty` int DEFAULT NULL,
  `quality_check` int DEFAULT NULL,
  `disamental_qty` int DEFAULT NULL,
  `packaging_qty` int DEFAULT NULL,
  `gate_exit` int DEFAULT NULL,
  `installtion_qty` int DEFAULT NULL,
  `created_date` varchar(50) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `remarks` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_status_table`
--

LOCK TABLES `project_status_table` WRITE;
/*!40000 ALTER TABLE `project_status_table` DISABLE KEYS */;
INSERT INTO `project_status_table` VALUES (1,'BULB-GLAS-2-1.5-2400-YELL',453,NULL,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'BULB-GLAS-2-1.5-2400-YELL',453,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'BULB-GLAS-2-1.5-2400-YELL',453,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(4,'BULB-GLAS-2-1.5-2400-YELL',453,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(5,'BULB-GLAS-2-1.5-2400-YELL',12,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(6,'BULB-GLAS-2-1.5-2400-YELL',535,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(7,'BULB-GLAS-2-1.5-2400-YELL',535,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(8,'BULB-GLAS-2-1.5-2400-YELL',535,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(9,'BULB-GLAS-2-1.5-2400-YELL',535,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(10,'BULB-GLAS-2-1.5-2400-YELL',523,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(11,'BULB-GLAS-2-1.5-2400-YELL',535,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(12,'BULB-GLAS-2-1.5-2400-YELL',547,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(13,'BULB-GLAS-2-1.5-2400-YELL',559,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(14,'BULB-GLAS-2-1.5-2400-YELL',571,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(15,'BULB-GLAS-2-1.5-2400-YELL',583,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(16,'BULB-GLAS-2-1.5-2400-YELL',5,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(17,'BULB-GLAS-2-1.5-2400-YELL',5,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(18,'BULB-GLAS-2-1.5-2400-YELL',5,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(19,'BULB-GLAS-2-1.5-2400-YELL',-1700,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(20,'BULB-GLAS-2-1.5-2400-YELL',1,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(21,'BULB-GLAS-2-1.5-2400-YELL',2,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(22,'BULB-GLAS-2-1.5-2400-YELL',2,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(23,'BULB-GLAS-2-1.5-2400-YELL',2,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(24,'BULB-GLAS-2-1.5-2400-YELL',200,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(25,'BULB-GLAS-2-1.5-2400-YELL',2,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(26,'BULB-GLAS-2-1.5-2400-YELL',2,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(27,'BULB-GLAS-2-1.5-2400-YELL',2,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(28,'BULB-GLAS-2-1.5-2400-YELL',2,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(29,'BULB-GLAS-2-1.5-2400-YELL',2,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(30,'BULB-GLAS-2-1.5-2400-YELL',27,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(31,'BULB-GLAS-2-1.5-2400-YELL',1,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(32,'BULB-GLAS-2-1.5-2400-YELL',0,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(33,'BULB-GLAS-2-1.5-2400-YELL',1,27,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(34,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(35,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(36,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(37,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(38,'BULB-GLAS-2-1.5-2400-YELL',10,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(39,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(40,'EL-GL-2-1-15-YE-XY-30-2-RA',0,26,36,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(41,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(42,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(43,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(44,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(45,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(46,'BULB-GLAS-2-1.5-2400-YELL',10,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(47,'BULB-GLAS-2-1.5-2400-YELL',10,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(48,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(49,'BULB-GLAS-2-1.5-2400-YELL',5,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(50,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(51,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(52,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(53,'BULB-GLAS-2-1.5-2400-YELL',100,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(54,'BULB-GLAS-2-1.5-2400-YELL',100,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(55,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(56,'BULB-GLAS-2-1.5-2400-YELL',100,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(57,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(58,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(59,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(60,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(61,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(62,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(63,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(64,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(65,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(66,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(67,'BULB-GLAS-2-1.5-2400-YELL',100,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(68,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(69,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(70,'BULB-GLAS-2-1.5-2400-YELL',40,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(71,'BULB-GLAS-2-1.5-2400-YELL',40,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(72,'BULB-GLAS-2-1.5-2400-YELL',91,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(73,'BULB-GLAS-2-1.5-2400-YELL',-40,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(74,'BULB-GLAS-2-1.5-2400-YELL',100,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(75,'BULB-GLAS-2-1.5-2400-YELL',100,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(76,'BULB-GLAS-2-1.5-2400-YELL',65,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(77,'BULB-GLAS-2-1.5-2400-YELL',80,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(78,'BULB-GLAS-2-1.5-2400-YELL',72,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(79,'BULB-GLAS-2-1.5-2400-YELL',80,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(80,'BULB-GLAS-2-1.5-2400-YELL',366,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(81,'BULB-GLAS-2-1.5-2400-YELL',2000,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(82,'BULB-GLAS-2-1.5-2400-YELL',468230,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(83,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(84,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(85,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(86,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(87,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(88,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(89,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(90,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(91,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(92,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(93,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(94,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(95,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(96,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(97,'BULB-GLAS-2-1.5-2400-YELL',10,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(98,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(99,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(100,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(101,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(102,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(103,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(104,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(105,'BULB-GLAS-2-1.5-2400-YELL',1,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(106,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(107,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(108,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(109,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,NULL),(110,'BULB-GLAS-2-1.5-2400-YELL',11,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,'1111'),(111,'BULB-GLAS-2-1.5-2400-YELL',11,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(112,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(113,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(114,'BULB-GLAS-2-1.5-2400-YELL',1,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(115,'BULB-GLAS-2-1.5-2400-YELL',1,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(116,'BULB-GLAS-2-1.5-2400-YELL',2,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(117,'BULB-GLAS-2-1.5-2400-YELL',1,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(118,'BULB-GLAS-2-1.5-2400-YELL',1,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(119,'BULB-GLAS-2-1.5-2400-YELL',3,27,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(120,'EL-2-1-FU-EA-WH-XY-25-3-RA',1,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(121,'EL-2-1-FU-EA-WH-XY-25-3-RA',10,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(122,'EL-2-1-FU-EA-WH-XY-25-3-RA',10,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(123,'EL-2-1-FU-EA-WH-XY-25-3-RA',10,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(124,'EL-2-1-FU-EA-WH-XY-25-3-RA',1,29,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(125,'EL-2-1-FU-EA-WH-XY-25-3-RA',9,29,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(126,'EL-2-1-FU-EA-WH-XY-25-3-RA',1,29,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,'1'),(127,'EL-2-1-FU-EA-WH-XY-25-3-RA',12,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(128,'EL-2-1-FU-EA-WH-XY-25-3-RA',12,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(129,'EL-2-1-FU-EA-WH-XY-25-3-RA',1,29,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(130,'EL-2-1-FU-EA-WH-XY-25-3-RA',10,29,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(131,'EL-2-1-FU-EA-WH-XY-25-3-RA',1,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(132,'EL-2-1-FU-EA-WH-XY-25-3-RA',23,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(133,'EL-2-1-FU-EA-WH-XY-25-3-RA',23,29,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(134,'HOLDER-2-1-FUTU-EACH-WHIT',20,29,44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(135,'EL-2-1-FU-EA-WH-XY-25-3-RA',48,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(136,'EL-2-1-FU-EA-WH-XY-25-3-RA',-96,29,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(137,'EL-2-1-OS-EA-WH-HO-30-3-RA',1,33,52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(138,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',5,33,53,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(139,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',1,33,53,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(140,'EL-2-1-OS-EA-WH-HO-30-3-RA',1,33,52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(141,'EL-2-1-OS-EA-WH-HO-30-3-RA',1,33,52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(142,'EL-2-1-OS-EA-WH-HO-30-3-RA',1,33,52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(143,'EL-2-1-OS-EA-WH-HO-30-3-RA',1,33,52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(144,'EL-2-1-OS-EA-WH-HO-30-3-RA',1,33,52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(145,'EL-2-1-OS-EA-WH-HO-30-3-RA',1,33,52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(146,'EL-2-1-OS-EA-WH-HO-30-3-RA',5,34,55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(147,'EL-2-1-OS-EA-WH-HO-30-3-RA',5,34,55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(148,'EL-20-ST-ME-GR-ST-30-1.-RA',80,34,57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(149,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',10,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(150,'EL-2-1-OS-EA-WH-HO-30-3-RA',0,34,55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(151,'EL-2-1-OS-EA-WH-HO-30-3-RA',10,34,55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(152,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',10,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(153,'EL-2-1-OS-EA-WH-HO-30-3-RA',10,34,55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(154,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',10,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(155,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',10,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(156,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',44,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(157,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',10,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(158,'EL-20-ST-ME-GR-ST-30-1.-RA',10,34,57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(159,'EL-20-ST-ME-GR-ST-30-1.-RA',72,34,57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(160,'EL-20-ST-ME-GR-ST-30-1.-RA',28,34,57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(161,'EL-2-1-OS-EA-WH-HO-30-3-RA',10,34,55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(162,'EL-2-1-OS-EA-WH-HO-30-3-RA',3,34,55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(163,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',50,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(164,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',0,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(165,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',50,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(166,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',50,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(167,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',50,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(168,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',101,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(169,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',49,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(170,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',91,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(171,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',59,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(172,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',42,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(173,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',101,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(174,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',7,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(175,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',150,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(176,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',0,34,56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-06','admin',NULL,NULL,''),(177,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-07','admin',NULL,NULL,NULL),(178,'BULB-GLAS-2-1.5-2400-YELL',0,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-07','admin',NULL,NULL,NULL),(179,'BULB-GLAS-2-1.5-2400-YELL',-121183,26,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-07','admin',NULL,NULL,''),(180,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ',4,33,53,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-07','admin',NULL,NULL,''),(181,'El---lo-al-El-Ho--20-20',10,36,65,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-07','admin',NULL,NULL,''),(182,'El---lo-al-El-Ho--20-20',10,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-08','admin',NULL,NULL,''),(183,'El-44-Ho-lo-al-El-Ho--20-20',20,37,75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-08','admin',NULL,NULL,''),(184,'El-44-Ho-lo-al-El-Ho--20-20',1,36,68,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09','admin',NULL,NULL,''),(185,'El-44-Ho-lo-al-El-Ho--20-20',1,37,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09','admin',NULL,NULL,''),(186,'El-44-Ho-lo-al-El-Ho--20-20',1,37,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 00:34:14','admin',NULL,NULL,''),(187,'El-44-Ho-lo-al-El-Ho--20-20',1,37,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 00:36:46','admin',NULL,NULL,''),(188,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 00:41:14','admin',NULL,NULL,''),(189,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 00:41:50','admin',NULL,NULL,''),(190,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 00:41:59','admin',NULL,NULL,''),(191,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 00:43:18','admin',NULL,NULL,''),(192,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 00:51:01','admin',NULL,NULL,''),(193,'El-44-Ho-lo-al-El-Ho--20-20',3,37,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 00:57:07','admin',NULL,NULL,''),(194,'El---lo-al-El-Bu--20-20',1,37,76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 01:01:20','admin',NULL,NULL,''),(195,'El---lo-al-El-Bu--20-20',1,37,76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 01:01:58','admin',NULL,NULL,''),(196,'El---lo-al-El-Bu--20-20',5,37,76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 01:02:52','admin',NULL,NULL,''),(197,'El---lo-al-El-Bu--20-20',11,37,76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 01:04:43','admin',NULL,NULL,''),(198,'El---lo-al-El-Bu--20-20',1,37,76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 01:54:25','admin',NULL,NULL,''),(199,'El---lo-al-El-Bu--20-20',1,36,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:07:48','admin',NULL,NULL,''),(200,'El---lo-al-El-Bu--20-20',0,36,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:13:14','admin',NULL,NULL,''),(201,'El---lo-al-El-Bu--20-20',0,36,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:16:46','admin',NULL,NULL,''),(202,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:21:45','admin',NULL,NULL,''),(203,'Gl---lo-al-Gl-Pi--20-20',10,37,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:23:39','admin',NULL,NULL,''),(204,'Gl---lo-al-Gl-Pi--20-20',-9,37,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:24:03','admin',NULL,NULL,''),(205,'Gl---lo-al-Gl-Pi--20-20',0,37,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:26:27','admin',NULL,NULL,''),(206,'El---lo-al-El-Bu--20-20',1,36,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:39:01','admin',NULL,NULL,''),(207,'Gl---lo-al-Gl-Sa--20-20',0,36,71,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:43:49','admin',NULL,NULL,''),(208,'Gl---lo-al-Gl-Sa--20-20',42,36,71,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:45:58','admin',NULL,NULL,''),(209,'El---lo-al-El-Bu--20-20',1,36,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:59:02','admin',NULL,NULL,''),(210,'El---lo-al-El-Bu--20-20',1,36,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 03:59:28','admin',NULL,NULL,''),(211,'El---lo-al-El-Bu--20-20',11,37,76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 04:01:44','admin',NULL,NULL,''),(212,'El---lo-al-El-Bu--20-20',0,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 04:35:30','admin',NULL,NULL,''),(213,'El---lo-al-El-Bu--20-20',0,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 04:43:44','admin',NULL,NULL,''),(214,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 04:46:12','admin',NULL,NULL,''),(215,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 04:49:15','admin',NULL,NULL,''),(216,'El---lo-al-El-Bu--20-20',0,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 04:50:04','admin',NULL,NULL,''),(217,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 04:51:35','admin',NULL,NULL,''),(218,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 05:07:52','admin',NULL,NULL,''),(219,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 05:09:36','admin',NULL,NULL,''),(220,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 05:11:50','admin',NULL,NULL,''),(221,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 05:13:49','admin',NULL,NULL,''),(222,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 05:15:13','admin',NULL,NULL,''),(223,'El---lo-al-El-Bu--20-20',1,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-09 12:41:40','admin',NULL,NULL,''),(224,'El-44-Ho-lo-al-El-Ho--20-20',24,37,75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-11 20:25:10','admin',NULL,NULL,''),(225,'El-44-Ho-lo-al-El-Ho--20-20',0,37,75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-12 00:22:18','admin',NULL,NULL,''),(226,'Gl---lo-al-Gl-Sa--20-20',1,36,71,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-12 23:46:13','admin',NULL,NULL,''),(227,'Gl---lo-al-Gl-Sa--20-20',1,36,71,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-12 23:47:07','admin',NULL,NULL,''),(228,'El---lo-al-El-Bu--20-20',0,36,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-12 23:48:58','admin',NULL,NULL,''),(229,'El---lo-al-El-Bu--20-20',1,36,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-12 23:49:18','admin',NULL,NULL,''),(230,'El---lo-al-El-Bu--20-20',2,36,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-12 23:56:16','admin',NULL,NULL,''),(231,'El---lo-al-El-Ho--20-20',12,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 02:04:15','admin',NULL,NULL,''),(232,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 02:08:15','admin',NULL,NULL,''),(233,'Gl---lo-al-Gl-Pi--20-20',20,37,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 02:26:13','admin',NULL,NULL,''),(234,'El-44-Ho-lo-al-El-Ho--20-20',89,37,75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 02:30:45','admin',NULL,NULL,''),(235,'El---lo-al-El-Bu--20-20',0,37,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 02:36:51','admin',NULL,NULL,''),(236,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 02:37:40','admin',NULL,NULL,''),(237,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 02:40:54','admin',NULL,NULL,''),(238,'El---lo-al-El-Ho--20-20',4,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 03:18:17','admin',NULL,NULL,''),(239,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 03:21:09','admin',NULL,NULL,''),(240,'El---lo-al-El-Ho--20-20',20,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 04:01:10','admin',NULL,NULL,''),(241,'El-44-Ho-lo-al-El-Ho--20-20',89,37,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 21:18:58','admin',NULL,NULL,''),(242,'El---lo-al-El-Ho--20-20',1,37,74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 22:35:48','admin',NULL,NULL,''),(243,'El-44-Ho-lo-al-El-Ho--20-20',1,37,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 22:39:59','admin',NULL,NULL,''),(244,'El-44-Ho-lo-al-El-Ho--20-20',0,36,69,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 22:42:48','admin',NULL,NULL,''),(245,'El-44-Ho-lo-al-El-Ho--20-20',0,36,69,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 22:42:58','admin',NULL,NULL,''),(246,'El-44-Ho-lo-al-El-Ho--20-20',1,36,68,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 22:43:06','admin',NULL,NULL,''),(247,'El-44-Ho-lo-al-El-Ho--20-20',1,37,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 22:55:31','admin',NULL,NULL,''),(248,'El-44-Ho-lo-al-El-Ho--20-20',25,37,75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-14 23:18:15','admin',NULL,NULL,''),(249,'El-44-Ho-lo-al-El-Ho--20-20',1,37,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-16 23:11:50','admin',NULL,NULL,''),(250,'Gl---lo-al-Gl-Pi--20-20',1,37,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-16 23:42:01','admin',NULL,NULL,''),(251,'El-44-Ho-lo-al-El-Ho--20-20',3,37,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-17 01:47:18','admin',NULL,NULL,''),(252,'El-44-Ho-lo-al-El-Ho--20-20',1,36,68,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-17 01:53:45','admin',NULL,NULL,'');
/*!40000 ALTER TABLE `project_status_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_order_header`
--

DROP TABLE IF EXISTS `purchase_order_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchase_order_header` (
  `PO_number` int NOT NULL AUTO_INCREMENT,
  `id` int DEFAULT NULL,
  `vendore_code` varchar(45) DEFAULT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `supplier_site_code` varchar(45) DEFAULT NULL,
  `payment_term` varchar(45) DEFAULT NULL,
  `bill_to_location` varchar(45) DEFAULT NULL,
  `shipTo` varchar(45) DEFAULT NULL,
  `tax` varchar(45) DEFAULT NULL,
  `hsn_code` varchar(45) DEFAULT NULL,
  `status` enum('inProcess','Approved') DEFAULT 'inProcess',
  `createdBy` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `remarks_nots` varchar(45) DEFAULT NULL,
  `so_id` int DEFAULT NULL,
  PRIMARY KEY (`PO_number`),
  UNIQUE KEY `PO_number_UNIQUE` (`PO_number`),
  KEY `id_idx` (`so_id`),
  CONSTRAINT `id` FOREIGN KEY (`so_id`) REFERENCES `sale_order_header` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=698 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_order_header`
--

LOCK TABLES `purchase_order_header` WRITE;
/*!40000 ALTER TABLE `purchase_order_header` DISABLE KEYS */;
INSERT INTO `purchase_order_header` VALUES (684,NULL,'1','XYZ','ABC','30','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-14 01:50:37','admin','2024-11-14 02:27:05',NULL,37),(685,NULL,'1','XYZ','ABC','30','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-14 01:52:48','admin','2024-11-14 02:19:11',NULL,37),(686,NULL,'1','XYZ','ABC','30','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-14 01:52:54','admin','2024-11-14 01:56:51',NULL,37),(687,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-14 02:26:24','admin','2024-11-14 02:27:05',NULL,37),(688,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-14 03:21:39','admin','2024-11-14 03:22:02',NULL,37),(689,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-14 23:09:40','admin','2024-11-24 13:13:28',NULL,37),(690,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-14 23:18:38','admin','2024-11-24 13:13:28',NULL,37),(691,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-14 23:18:39','admin','2024-11-24 13:13:28',NULL,37),(692,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-16 23:07:55','admin','2024-11-24 13:13:28',NULL,37),(693,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-16 23:08:08','admin','2024-11-24 13:13:28',NULL,37),(694,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-16 23:15:57','admin','2024-11-24 13:13:28',NULL,37),(695,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-16 23:42:40','admin','2024-11-24 13:13:28',NULL,37),(696,NULL,'1','XYZ','ABC','by check','ABC','XYZ',NULL,NULL,'Approved','admin','2024-11-16 23:42:41','admin','2024-11-24 13:13:28',NULL,37),(697,NULL,'VEN-01','DELHI','VEN00-1','BY CASH','DELHI','DELHI',NULL,NULL,'Approved','admin','2024-11-24 11:59:33','admin','2024-11-24 12:08:20',NULL,NULL);
/*!40000 ALTER TABLE `purchase_order_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_order_line`
--

DROP TABLE IF EXISTS `purchase_order_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchase_order_line` (
  `id` int NOT NULL AUTO_INCREMENT,
  `po_number` int DEFAULT NULL,
  `item_code` varchar(405) DEFAULT NULL,
  `item_shortdiscription` varchar(45) DEFAULT NULL,
  `unit_price` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `total_price` varchar(45) DEFAULT NULL,
  `need_by_date` varchar(45) DEFAULT NULL,
  `quantity_recevied` varchar(45) DEFAULT NULL,
  `balance` int DEFAULT '0',
  `reqiuisition_id` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `so_id` int DEFAULT NULL,
  `so_line_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `PO_number_idx` (`po_number`)
) ENGINE=InnoDB AUTO_INCREMENT=456 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_order_line`
--

LOCK TABLES `purchase_order_line` WRITE;
/*!40000 ALTER TABLE `purchase_order_line` DISABLE KEYS */;
INSERT INTO `purchase_order_line` VALUES (441,684,'El-44-Ho-lo-al-El-Ho--20-20','lorem ipsum',NULL,'89','206569',NULL,NULL,0,NULL,NULL,NULL,NULL),(442,685,'Gl---lo-al-Gl-Pi--20-20','lorem ipsum',NULL,'20','46420',NULL,NULL,0,NULL,NULL,NULL,NULL),(443,686,'El---lo-al-El-Ho--20-20','lorem ipsum',NULL,'12','27852',NULL,NULL,0,NULL,NULL,NULL,NULL),(444,687,'El-44-Ho-lo-al-El-Ho--20-20','lorem ipsum',NULL,'111','257631',NULL,NULL,0,NULL,NULL,NULL,NULL),(445,688,'El---lo-al-El-Ho--20-20','lorem ipsum',NULL,'8','18568',NULL,NULL,-32,NULL,NULL,NULL,NULL),(446,689,'El-44-Ho-lo-al-El-Ho--20-20','lorem ipsum',NULL,'88','204248',NULL,NULL,88,NULL,NULL,NULL,NULL),(447,690,'El---lo-al-El-Bu--20-20','lorem ipsum',NULL,'1','2321',NULL,NULL,1,NULL,NULL,NULL,NULL),(448,691,'El---lo-al-El-Bu--20-20','lorem ipsum',NULL,'1','2321',NULL,NULL,1,NULL,NULL,NULL,NULL),(449,692,'El---lo-al-El-Ho--20-20','lorem ipsum',NULL,'24','55704',NULL,NULL,24,NULL,NULL,NULL,NULL),(450,693,'El---lo-al-El-Bu--20-20','lorem ipsum',NULL,'21','48741',NULL,NULL,21,NULL,NULL,NULL,NULL),(451,694,'El-44-Ho-lo-al-El-Ho--20-20','lorem ipsum',NULL,'1','2321',NULL,NULL,1,NULL,NULL,NULL,NULL),(452,695,'El---lo-al-El-Ho--20-20','lorem ipsum',NULL,'9','20889',NULL,NULL,9,NULL,NULL,NULL,NULL),(453,696,'El---lo-al-El-Ho--20-20','lorem ipsum',NULL,'9','20889',NULL,NULL,9,NULL,NULL,NULL,NULL),(454,697,'BULB-JNJ-1172024','BULB','150','10','1500','2024-02-03',NULL,0,NULL,NULL,NULL,NULL),(455,697,'SHRINK WRAP-12322-1172024','SHRINK','100','10','1000','2025-01-03',NULL,0,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `purchase_order_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `require_atts`
--

DROP TABLE IF EXISTS `require_atts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `require_atts` (
  `attr_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `default_value` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `placeholder` varchar(45) DEFAULT NULL,
  `dropdown` varchar(45) DEFAULT 'no',
  PRIMARY KEY (`attr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=509 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `require_atts`
--

LOCK TABLES `require_atts` WRITE;
/*!40000 ALTER TABLE `require_atts` DISABLE KEYS */;
INSERT INTO `require_atts` VALUES (446,'Short_Description',NULL,NULL,NULL,'no'),(447,'Price',NULL,NULL,NULL,'no'),(448,'SI_unit',NULL,NULL,NULL,'no'),(449,'Material',NULL,NULL,NULL,'no'),(450,'Design',NULL,NULL,NULL,'no'),(451,'finish_type',NULL,NULL,NULL,'no'),(452,'Half_Full_Thread',NULL,NULL,NULL,'no'),(453,'Holder_Thread',NULL,NULL,NULL,'no'),(454,'Holder_type',NULL,NULL,NULL,'no'),(455,'Thread',NULL,NULL,NULL,'no'),(456,'Brand',NULL,NULL,NULL,'no'),(457,'Light_Output_Colour',NULL,NULL,NULL,'no'),(458,'Colour',NULL,NULL,NULL,'no'),(459,'Cut',NULL,NULL,NULL,'no'),(460,'Height',NULL,NULL,NULL,'no'),(461,'Length',NULL,NULL,NULL,'no'),(462,'Breadth',NULL,NULL,NULL,'no'),(463,'Upper_Dia',NULL,NULL,NULL,'no'),(464,'Bottom_Dia',NULL,NULL,NULL,'no'),(465,'Centre_Hole_dia',NULL,NULL,NULL,'no'),(466,'Size',NULL,NULL,NULL,'no'),(467,'Watt',NULL,NULL,NULL,'no'),(468,'Shape',NULL,NULL,NULL,'no'),(469,'Side_Hole_dia',NULL,NULL,NULL,'no'),(470,'Top_hole_dia',NULL,NULL,NULL,'no'),(471,'No_of_ply',NULL,NULL,NULL,'no'),(472,'Style',NULL,NULL,NULL,'no'),(473,'Thickness',NULL,NULL,NULL,'no'),(474,'Weight',NULL,NULL,NULL,'no'),(475,'Depth',NULL,NULL,NULL,'no'),(476,'Thickness',NULL,NULL,NULL,'no'),(477,'Weight',NULL,NULL,NULL,'no'),(478,'Depth',NULL,NULL,NULL,'no'),(479,'Thickness',NULL,NULL,NULL,'no'),(480,'Core',NULL,NULL,NULL,'no'),(481,'Inner_Outer_thread',NULL,NULL,NULL,'no'),(482,'Upper_thread',NULL,NULL,NULL,'no'),(483,'Lower_thread',NULL,NULL,NULL,'no'),(484,'Thread_length',NULL,NULL,NULL,'no'),(485,'Indian_Imported',NULL,NULL,NULL,'no'),(486,'In_built_switch',NULL,NULL,NULL,'no'),(487,'Wire_type',NULL,NULL,NULL,'no'),(488,'Vendor',NULL,NULL,NULL,'no'),(489,'Long_Description',NULL,NULL,NULL,'no'),(490,'Discount',NULL,NULL,NULL,'no'),(491,'fabric',NULL,NULL,NULL,'no'),(492,'piping',NULL,NULL,NULL,'no'),(493,'piping_color',NULL,NULL,NULL,'no'),(494,'acrylic_sheet',NULL,NULL,NULL,'no'),(495,'gallery_height',NULL,NULL,NULL,'no'),(496,'sheet',NULL,NULL,NULL,'no'),(497,'sheet',NULL,NULL,NULL,'no'),(498,'sheet_color',NULL,NULL,NULL,'no'),(499,'Frame',NULL,NULL,NULL,'no'),(500,'fabric_colour',NULL,NULL,NULL,'no'),(501,'Colour_Temparature',NULL,NULL,NULL,'no'),(502,'Dimmable',NULL,NULL,NULL,'no'),(503,'Location',NULL,NULL,NULL,'no'),(504,'Diameter',NULL,NULL,NULL,'no'),(505,'Collar',NULL,NULL,NULL,'no'),(506,'Socket',NULL,NULL,NULL,'no'),(507,'Ink_type',NULL,NULL,NULL,'no'),(508,'Transparent',NULL,NULL,NULL,'no');
/*!40000 ALTER TABLE `require_atts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requireattributeforcatname`
--

DROP TABLE IF EXISTS `requireattributeforcatname`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `requireattributeforcatname` (
  `attr_id` int NOT NULL AUTO_INCREMENT,
  `SubcatId` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `default_value` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `placeholder` varchar(45) DEFAULT NULL,
  `dropdown` varchar(45) DEFAULT 'no',
  PRIMARY KEY (`attr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=477 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requireattributeforcatname`
--

LOCK TABLES `requireattributeforcatname` WRITE;
/*!40000 ALTER TABLE `requireattributeforcatname` DISABLE KEYS */;
INSERT INTO `requireattributeforcatname` VALUES (27,1,'Colour',NULL,'txt',NULL,'yes'),(46,2,'Colour',NULL,'txt',NULL,'yes'),(48,2,'Length',NULL,'txt',NULL,'no'),(56,3,'Colour',NULL,'txt',NULL,'yes'),(57,3,'Length',NULL,'txt',NULL,'no'),(58,3,'Size',NULL,'txt',NULL,'yes'),(66,4,'Colour',NULL,NULL,NULL,'yes'),(68,4,'Cut',NULL,NULL,NULL,'yes'),(70,4,'Height',NULL,NULL,NULL,'no'),(73,3,'Material',NULL,NULL,NULL,'yes'),(74,1,'Light_Output_Colour',NULL,'txt',NULL,'yes'),(75,1,'Shape',NULL,NULL,NULL,'yes'),(76,1,'Watt',NULL,'txt',NULL,'yes'),(77,1,'Socket',NULL,NULL,NULL,'yes'),(78,1,'Material',NULL,NULL,NULL,'yes'),(79,1,'Height',NULL,'txt',NULL,'no'),(81,3,'Wire_type',NULL,NULL,NULL,'yes'),(82,2,'Diameter',NULL,NULL,NULL,'no'),(83,4,'Length',NULL,NULL,NULL,'no'),(87,3,'In_built_switch',NULL,NULL,NULL,'yes'),(88,3,'Pintop',NULL,NULL,NULL,'yes'),(92,3,'Brand',NULL,'txt',NULL,'no'),(93,3,'SI_unit',NULL,NULL,NULL,'yes'),(94,2,'Material',NULL,NULL,NULL,'yes'),(95,2,'Socket',NULL,NULL,NULL,'yes'),(96,2,'Brand',NULL,'txt',NULL,'no'),(97,2,'SI_unit',NULL,NULL,NULL,'yes'),(98,1,'Breadth',NULL,NULL,NULL,'no'),(143,1,'Colour_Temparature',NULL,NULL,NULL,'no'),(144,1,'Dimmable',NULL,NULL,NULL,'yes'),(145,1,'Brand',NULL,'txt',NULL,'yes'),(146,1,'SI_unit',NULL,NULL,NULL,'yes'),(147,2,'Long_Description',NULL,NULL,NULL,'no'),(148,2,'Vendor',NULL,NULL,NULL,'no'),(149,4,'Breadth',NULL,NULL,NULL,'no'),(153,4,'Weight',NULL,NULL,NULL,'no'),(154,4,'No_of_ply',NULL,NULL,NULL,'yes'),(156,4,'Collar',NULL,NULL,NULL,'yes'),(157,4,'Brand',NULL,NULL,NULL,'no'),(158,4,'SI_unit',NULL,NULL,NULL,'yes'),(160,4,'Long_Description',NULL,NULL,NULL,'no'),(161,4,'Vendor',NULL,NULL,NULL,'no'),(162,4,'Price',NULL,NULL,NULL,'no'),(163,4,'Discount',NULL,'txt',NULL,'no'),(164,6,'Colour',NULL,NULL,NULL,'yes'),(165,6,'Cut',NULL,NULL,NULL,'yes'),(166,6,'Height',NULL,NULL,NULL,'no'),(167,6,'Length',NULL,NULL,NULL,'no'),(168,6,'Breadth',NULL,NULL,NULL,'no'),(169,6,'Weight',NULL,NULL,NULL,'no'),(171,6,'No_of_ply',NULL,NULL,NULL,'yes'),(172,6,'Collar',NULL,NULL,NULL,'yes'),(173,6,'Brand',NULL,NULL,NULL,'no'),(174,6,'SI_unit',NULL,NULL,NULL,'yes'),(175,6,'Long_Description',NULL,NULL,NULL,'no'),(176,6,'Vendor',NULL,NULL,NULL,'no'),(177,6,'Price',NULL,NULL,NULL,'no'),(178,6,'Discount',NULL,NULL,NULL,'no'),(179,6,'Location',NULL,NULL,NULL,'no'),(180,6,'Shape',NULL,'txt',NULL,'yes'),(182,7,'Colour',NULL,NULL,NULL,'yes'),(183,7,'Cut',NULL,NULL,NULL,'yes'),(184,7,'Height',NULL,NULL,NULL,'no'),(185,7,'Length',NULL,NULL,NULL,'no'),(186,7,'Breadth',NULL,NULL,NULL,'no'),(187,7,'Weight',NULL,NULL,NULL,'no'),(189,7,'No_of_ply',NULL,NULL,NULL,'yes'),(190,7,'Collar',NULL,NULL,NULL,'yes'),(191,7,'Brand',NULL,NULL,NULL,'no'),(192,7,'SI_unit',NULL,NULL,NULL,'yes'),(193,7,'Long_Description',NULL,NULL,NULL,'no'),(195,7,'Vendor',NULL,NULL,NULL,'no'),(196,7,'Price',NULL,NULL,NULL,'no'),(197,7,'Discount',NULL,NULL,NULL,'no'),(198,7,'Location',NULL,'txt',NULL,'no'),(199,8,'Colour',NULL,NULL,NULL,'yes'),(200,8,'Cut',NULL,NULL,NULL,'yes'),(201,8,'Height',NULL,NULL,NULL,'no'),(202,8,'Length',NULL,NULL,NULL,'no'),(204,8,'Breadth',NULL,NULL,NULL,'no'),(206,8,'Weight',NULL,NULL,NULL,'no'),(207,8,'No_of_ply',NULL,NULL,NULL,'yes'),(208,8,'Collar',NULL,NULL,NULL,'yes'),(209,8,'Brand',NULL,NULL,NULL,'no'),(210,8,'SI_unit',NULL,NULL,NULL,'yes'),(212,8,'Long_Description',NULL,NULL,NULL,'no'),(213,8,'Vendor',NULL,NULL,NULL,'no'),(214,8,'Price',NULL,NULL,NULL,'no'),(215,8,'Discount',NULL,'txt',NULL,'no'),(249,9,'Colour',NULL,NULL,NULL,'yes'),(250,9,'Cut',NULL,NULL,NULL,'yes'),(251,9,'Height',NULL,NULL,NULL,'no'),(252,9,'Length',NULL,NULL,NULL,'no'),(254,9,'Breadth',NULL,NULL,NULL,'no'),(256,9,'Weight',NULL,NULL,NULL,'no'),(257,9,'No_of_ply',NULL,NULL,NULL,'yes'),(258,9,'Collar',NULL,NULL,NULL,'yes'),(259,9,'Brand',NULL,NULL,NULL,'no'),(260,9,'SI_unit',NULL,NULL,NULL,'yes'),(262,9,'Long_Description',NULL,NULL,NULL,'no'),(263,9,'Vendor',NULL,NULL,NULL,'no'),(264,9,'Price',NULL,NULL,NULL,'no'),(265,9,'Discount',NULL,'txt',NULL,'no'),(268,5,'Material',NULL,NULL,NULL,'no'),(270,5,'Thread',NULL,NULL,NULL,'no'),(271,5,'Breadth',NULL,NULL,NULL,'no'),(272,5,'Upper_Dia',NULL,NULL,NULL,'no'),(273,5,'Bottom_Dia',NULL,NULL,NULL,'no'),(274,5,'Centre_Hole_dia',NULL,NULL,NULL,'no'),(275,5,'Shape',NULL,NULL,NULL,'no'),(276,5,'Inner_Outer_thread',NULL,NULL,NULL,'no'),(277,5,'Upper_thread',NULL,NULL,NULL,'no'),(278,5,'Lower_thread',NULL,NULL,NULL,'no'),(279,5,'Thread_length',NULL,NULL,NULL,'no'),(280,5,'Vendor',NULL,NULL,NULL,'no'),(281,5,'Price',NULL,'txt',NULL,'no'),(282,5,'Discount',NULL,NULL,NULL,'no'),(283,5,'Long_Description',NULL,NULL,NULL,'no'),(285,10,'Colour',NULL,NULL,NULL,'yes'),(286,10,'Ink_type',NULL,NULL,NULL,'no'),(287,10,'Size',NULL,NULL,NULL,'no'),(288,10,'Brand',NULL,'txt',NULL,'no'),(289,10,'SI_unit',NULL,NULL,NULL,'no'),(290,10,'Long_Description',NULL,NULL,NULL,'no'),(292,11,'Style',NULL,NULL,NULL,'yes'),(293,11,'Height',NULL,NULL,NULL,'no'),(294,11,'Upper_Dia',NULL,NULL,NULL,'no'),(295,11,'Bottom_Dia',NULL,NULL,NULL,'no'),(296,11,'fabric',NULL,NULL,NULL,'yes'),(297,11,'fabric_colour',NULL,NULL,NULL,'no'),(298,11,'piping',NULL,NULL,NULL,'yes'),(299,11,'piping_color',NULL,NULL,NULL,'no '),(300,11,'piping_length',NULL,NULL,NULL,'no'),(301,11,'Gallery_type',NULL,NULL,NULL,'yes'),(302,11,'gallery',NULL,NULL,NULL,'yes'),(303,11,'gallery_height',NULL,NULL,NULL,'no'),(304,11,'acrylic_sheet',NULL,NULL,NULL,'no'),(305,11,'sheet',NULL,NULL,NULL,'yes'),(306,11,'Lining',NULL,NULL,NULL,'yes'),(308,12,'Colour',NULL,NULL,NULL,'no'),(309,12,'Size',NULL,NULL,NULL,'no'),(310,12,'Shape',NULL,NULL,NULL,'no'),(311,12,'Centre_Hole_dia',NULL,NULL,NULL,'no'),(312,12,'Transparent',NULL,NULL,NULL,'no'),(313,12,'Vendor',NULL,NULL,NULL,'no'),(314,12,'Long_Description',NULL,NULL,NULL,'no'),(332,13,'Colour',NULL,NULL,NULL,'no'),(333,13,'Material',NULL,NULL,NULL,'no'),(334,13,'Finish_type',NULL,NULL,NULL,'no'),(335,13,'Shape',NULL,NULL,NULL,'no'),(336,13,'Cut',NULL,NULL,NULL,'no'),(337,13,'Height',NULL,NULL,NULL,'no'),(338,13,'Weight',NULL,NULL,NULL,'no'),(339,13,'Upper_Dia',NULL,NULL,NULL,'no'),(340,13,'Bottom_Dia',NULL,NULL,NULL,'no'),(341,13,'Style',NULL,NULL,NULL,'no'),(342,13,'No_of_ply',NULL,NULL,NULL,'no'),(343,13,'Vendor',NULL,NULL,NULL,'no'),(344,13,'Long_Description',NULL,NULL,NULL,'no'),(345,13,'Price',NULL,'txt',NULL,'no'),(346,13,'Discount',NULL,NULL,NULL,'no'),(348,14,'Length',NULL,NULL,NULL,'no'),(349,14,'Breadth',NULL,NULL,NULL,'no'),(350,14,'Height',NULL,NULL,NULL,'no'),(352,14,'Brand',NULL,NULL,NULL,'no'),(353,14,'SI_unit',NULL,NULL,NULL,'yes'),(355,15,'Length',NULL,NULL,NULL,'no'),(356,15,'Breadth',NULL,NULL,NULL,'no'),(357,15,'Height',NULL,NULL,NULL,'no'),(359,15,'Brand',NULL,NULL,NULL,'no'),(360,15,'SI_unit',NULL,NULL,NULL,'yes'),(362,16,'Length',NULL,NULL,NULL,'no'),(363,16,'Breadth',NULL,NULL,NULL,'no'),(364,16,'Height',NULL,NULL,NULL,'no'),(365,16,'No_of_ply',NULL,NULL,NULL,'no'),(366,16,'Brand',NULL,NULL,NULL,'no'),(367,16,'SI_unit',NULL,NULL,NULL,'yes'),(369,17,'Length',NULL,NULL,NULL,'no'),(370,17,'Breadth',NULL,NULL,NULL,'no'),(371,17,'Height',NULL,NULL,NULL,'no'),(372,17,'No_of_ply',NULL,NULL,NULL,'no'),(373,17,'Brand',NULL,NULL,NULL,'no'),(374,17,'SI_unit',NULL,NULL,NULL,'yes'),(376,18,'Length',NULL,NULL,NULL,'no'),(377,18,'Breadth',NULL,NULL,NULL,'no'),(378,18,'Height',NULL,NULL,NULL,'no'),(379,18,'No_of_ply',NULL,NULL,NULL,'no'),(380,18,'Vendor',NULL,NULL,NULL,'no'),(381,18,'Long_Description',NULL,NULL,NULL,'no'),(382,1,'Long_Description',NULL,NULL,NULL,'no'),(383,1,'Vendor',NULL,NULL,NULL,'no'),(384,1,'Price',NULL,NULL,NULL,'no'),(385,1,'Discount',NULL,NULL,NULL,'no'),(386,1,'Location',NULL,NULL,NULL,'no'),(387,2,'Price',NULL,NULL,NULL,'no'),(388,2,'Discount',NULL,NULL,NULL,'no'),(389,2,'Location',NULL,NULL,NULL,'no'),(390,3,'Long_Description',NULL,NULL,NULL,'no'),(391,3,'Vendor',NULL,NULL,NULL,'no'),(392,3,'Price',NULL,NULL,NULL,'no'),(393,3,'Discount',NULL,NULL,NULL,'no'),(394,3,'Location',NULL,NULL,NULL,'no'),(395,4,'Location',NULL,NULL,NULL,'no'),(400,4,'Shape',NULL,NULL,NULL,'yes'),(402,8,'Location',NULL,NULL,NULL,'no'),(403,8,'Shape',NULL,NULL,NULL,'yes'),(404,9,'Location',NULL,NULL,NULL,'no'),(405,9,'Shape',NULL,NULL,NULL,'yes'),(406,7,'Shape',NULL,NULL,NULL,'yes'),(407,11,'Lining_colour',NULL,NULL,NULL,'no'),(408,11,'Frame',NULL,NULL,NULL,'yes'),(409,11,'Brand',NULL,NULL,NULL,'no'),(410,11,'SI_unit',NULL,NULL,NULL,'yes'),(411,11,'Long_Description',NULL,NULL,NULL,'no'),(412,11,'Vendor',NULL,NULL,NULL,'no'),(413,11,'Price',NULL,NULL,NULL,'no'),(414,11,'Discount',NULL,NULL,NULL,'no'),(415,11,'Location',NULL,NULL,NULL,'no'),(416,11,'Shape',NULL,NULL,NULL,'no'),(422,14,'Long_Description',NULL,NULL,NULL,'no'),(423,14,'Vendor',NULL,NULL,NULL,'no'),(424,14,'Price',NULL,NULL,NULL,'no'),(425,14,'Discount',NULL,NULL,NULL,'no'),(426,14,'Location',NULL,NULL,NULL,'no'),(427,15,'Long_Description',NULL,NULL,NULL,'no'),(428,15,'Vendor',NULL,NULL,NULL,'no'),(429,15,'Price',NULL,NULL,NULL,'no'),(430,15,'Discount',NULL,NULL,NULL,'no'),(431,15,'Location',NULL,NULL,NULL,'no'),(432,16,'Long_Description',NULL,NULL,NULL,'no'),(433,16,'Vendor',NULL,NULL,NULL,'no'),(434,16,'Price',NULL,NULL,NULL,'no'),(435,16,'Discount',NULL,NULL,NULL,'no'),(436,16,'Location',NULL,NULL,NULL,'no'),(437,17,'Long_Description',NULL,NULL,NULL,'no'),(438,17,'Vendor',NULL,NULL,NULL,'no'),(439,17,'Price',NULL,NULL,NULL,'no'),(440,17,'Discount',NULL,NULL,NULL,'no'),(441,17,'Location',NULL,NULL,NULL,'no'),(442,10,'Vendor',NULL,NULL,NULL,'no'),(443,10,'Price',NULL,NULL,NULL,'no'),(444,10,'Discount',NULL,NULL,NULL,'no'),(445,10,'Location',NULL,NULL,NULL,'no'),(447,1,'Cut',NULL,NULL,NULL,'yes'),(448,1,'Thickness',NULL,NULL,NULL,'no'),(449,1,'Side_Hole_dia',NULL,NULL,NULL,'no'),(450,20,'name',NULL,NULL,NULL,'no'),(451,22,'name',NULL,NULL,NULL,'no'),(452,23,'name',NULL,NULL,NULL,'no'),(453,24,'name',NULL,NULL,NULL,'no'),(454,24,'seconed',NULL,NULL,NULL,'no'),(455,25,'name',NULL,NULL,NULL,'no'),(456,26,'name',NULL,NULL,NULL,'no'),(457,27,'name',NULL,NULL,NULL,'no'),(458,27,'SI_unit',NULL,NULL,NULL,'yes'),(459,28,'name',NULL,NULL,NULL,'no'),(460,29,'name',NULL,NULL,NULL,'no'),(461,30,'name',NULL,NULL,NULL,'no'),(462,31,'name',NULL,NULL,NULL,'no'),(463,32,'name',NULL,NULL,NULL,'no'),(464,34,'name',NULL,NULL,NULL,'no'),(465,35,'name',NULL,NULL,NULL,'no'),(466,36,'name',NULL,NULL,NULL,'no'),(467,37,'name',NULL,NULL,NULL,'no'),(468,38,'name',NULL,NULL,NULL,'no'),(469,39,'name',NULL,NULL,NULL,'no'),(470,40,'name',NULL,NULL,NULL,'no'),(471,41,'name',NULL,NULL,NULL,'no'),(472,42,'name',NULL,NULL,NULL,'no'),(473,43,'name',NULL,NULL,NULL,'no'),(474,44,'name',NULL,NULL,NULL,'no'),(475,45,'name',NULL,NULL,NULL,'no'),(476,46,'name',NULL,NULL,NULL,'no');
/*!40000 ALTER TABLE `requireattributeforcatname` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requisition_table`
--

DROP TABLE IF EXISTS `requisition_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `requisition_table` (
  `S_no` int NOT NULL AUTO_INCREMENT,
  `created_by` varchar(50) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL,
  `department_id` int DEFAULT NULL,
  `requisition_type` varchar(50) DEFAULT NULL,
  `requisition_id` int DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_code` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `user_remarks` varchar(200) DEFAULT NULL,
  `price` bigint DEFAULT NULL,
  `date_hand_hover` date DEFAULT NULL,
  `handover_over_by` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `final_remarks` varchar(200) DEFAULT NULL,
  `record_id` int DEFAULT NULL,
  `updatedBy` varchar(45) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  `shortDiscription` varchar(45) DEFAULT NULL,
  `total_price` varchar(45) DEFAULT NULL,
  `po_status` varchar(45) DEFAULT NULL,
  `po_number` int DEFAULT NULL,
  PRIMARY KEY (`S_no`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requisition_table`
--

LOCK TABLES `requisition_table` WRITE;
/*!40000 ALTER TABLE `requisition_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `requisition_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requisition_table_header`
--

DROP TABLE IF EXISTS `requisition_table_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `requisition_table_header` (
  `record_id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL DEFAULT 'PENDING',
  `created_by` varchar(45) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(45) NOT NULL,
  `updated_date` date NOT NULL,
  `recordStatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=371 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requisition_table_header`
--

LOCK TABLES `requisition_table_header` WRITE;
/*!40000 ALTER TABLE `requisition_table_header` DISABLE KEYS */;
INSERT INTO `requisition_table_header` VALUES (1,'PENDING','user_1','2024-08-02','user1','2024-08-02','inProcess'),(2,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(3,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(4,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(5,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(6,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(7,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(8,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(9,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(10,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(11,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(12,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(13,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(14,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(15,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(16,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(17,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(18,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(19,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(20,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(21,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(22,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(23,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(24,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(25,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(26,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(27,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(28,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(29,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(30,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(31,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(32,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(33,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(34,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(35,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(36,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(37,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(38,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(39,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(40,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(41,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(42,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(43,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(44,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(45,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(46,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(47,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(48,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(49,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(50,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(51,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(52,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(53,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(54,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(55,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(56,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(57,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(58,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(59,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(60,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(61,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(62,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(63,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(64,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(65,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(66,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(67,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(68,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(69,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(70,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(71,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(72,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(73,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(74,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(75,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(76,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(77,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(78,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(79,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(80,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(81,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(82,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(83,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(84,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(85,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(86,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(87,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(88,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(89,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(90,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(91,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(92,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(93,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(94,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(95,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(96,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(97,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(98,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(99,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(100,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(101,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(102,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(103,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(104,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(105,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(106,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(107,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(108,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(109,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(110,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(111,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(112,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(113,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(114,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(115,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(116,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(117,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(118,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(119,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(120,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(121,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(122,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(123,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(124,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(125,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(126,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(127,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(128,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(129,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(130,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(131,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(132,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(133,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(134,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(135,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(136,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(137,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(138,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(139,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(140,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(141,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(142,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(143,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(144,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(145,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(146,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(147,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(148,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(149,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(150,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(151,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(152,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(153,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(154,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(155,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(156,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(157,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(158,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(159,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(160,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(161,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(162,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(163,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(164,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(165,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(166,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(167,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(168,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(169,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(170,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(171,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(172,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(173,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(174,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(175,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(176,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(177,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(178,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(179,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(180,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(181,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(182,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(183,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(184,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(185,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(186,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(187,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(188,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(189,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(190,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(191,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(192,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(193,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(194,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(195,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(196,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(197,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(198,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(199,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(200,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(201,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(202,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(203,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(204,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(205,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(206,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(207,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(208,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(209,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(210,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(211,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(212,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(213,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(214,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(215,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(216,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(217,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(218,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(219,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(220,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(221,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(222,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(223,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(224,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(225,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(226,'PENDING','','2024-08-05','user1','2024-08-05',NULL),(227,'PENDING','','2024-08-05','user1','2024-08-05',NULL),(228,'PENDING','','2024-08-05','user1','2024-08-05',NULL),(229,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(230,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(231,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(232,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(233,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(234,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(235,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(236,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(237,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(238,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(239,'PENDING','','2024-08-06','user1','2024-08-06',NULL),(240,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(241,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(242,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(243,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(244,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(245,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(246,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(247,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(248,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(249,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(250,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(251,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(252,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(253,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(254,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(255,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(256,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(257,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(258,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(259,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(260,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(261,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(262,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(263,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(264,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(265,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(266,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07',NULL),(267,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07',NULL),(268,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07',NULL),(269,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(270,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(271,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(272,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(273,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(274,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(275,'PENDING','rg1','2024-08-07','user1','2024-08-07',NULL),(276,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(277,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(278,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(279,'PENDING','rg1','2024-08-07','user1','2024-08-07','draft'),(280,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(281,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(282,'PENDING','rg1','2024-08-07','user1','2024-08-07',NULL),(283,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(284,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(285,'PENDING','rg1','2024-08-07','user1','2024-08-07',NULL),(286,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(287,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(288,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(289,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(290,'PENDING','rg1','2024-08-07','user1','2024-08-07',NULL),(291,'PENDING','admin','2024-08-12','user1','2024-08-12',NULL),(292,'PENDING','admin','2024-08-18','user1','2024-08-18',NULL),(293,'PENDING','admin','2024-08-19','user1','2024-08-19','inProcess'),(294,'PENDING','rg1','2024-08-19','user1','2024-08-19','inProcess'),(295,'PENDING','rg1','2024-08-19','user1','2024-08-19',NULL),(296,'PENDING','admin','2024-08-20','user1','2024-08-20',NULL),(297,'PENDING','admin','2024-08-20','user1','2024-08-20',NULL),(298,'PENDING','admin','2024-08-20','user1','2024-08-20',NULL),(299,'PENDING','rg1','2024-08-21','user1','2024-08-21',NULL),(300,'PENDING','admin','2024-08-21','user1','2024-08-21',NULL),(301,'PENDING','admin','2024-08-21','user1','2024-08-21',NULL),(302,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(303,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(304,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(305,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(306,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(307,'PENDING','admin','2024-08-22','user1','2024-08-22','inProcess'),(308,'PENDING','admin','2024-08-22','user1','2024-08-22','inProcess'),(309,'PENDING','admin','2024-08-23','user1','2024-08-23',NULL),(310,'PENDING','admin','2024-08-23','user1','2024-08-23',NULL),(311,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL),(312,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL),(313,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL),(314,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL),(315,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL),(316,'PENDING','admin','2024-08-24','user1','2024-08-24','inProcess'),(317,'PENDING','admin','2024-08-25','user1','2024-08-25','inProcess'),(318,'PENDING','admin','2024-08-25','user1','2024-08-25','inProcess'),(319,'PENDING','admin','2024-08-25','user1','2024-08-25','inProcess'),(320,'PENDING','admin','2024-08-25','user1','2024-08-25','draft'),(321,'PENDING','admin','2024-08-25','user1','2024-08-25','draft'),(322,'PENDING','admin','2024-08-25','user1','2024-08-25','inProcess'),(323,'PENDING','admin','2024-08-25','user1','2024-08-25','inProcess'),(324,'PENDING','admin','2024-08-25','user1','2024-08-25','inProcess'),(325,'PENDING','admin','2024-08-25','user1','2024-08-25','inProcess'),(326,'PENDING','admin','2024-08-25','user1','2024-08-25','inProcess'),(327,'PENDING','admin','2024-08-25','user1','2024-08-25','draft'),(328,'PENDING','admin','2024-08-25','user1','2024-08-25',NULL),(329,'PENDING','admin','2024-08-26','user1','2024-08-26',NULL),(330,'PENDING','admin','2024-08-26','user1','2024-08-26','inProcess'),(331,'PENDING','admin','2024-08-26','user1','2024-08-26','inProcess'),(332,'PENDING','admin','2024-08-26','user1','2024-08-26','inProcess'),(333,'PENDING','admin','2024-08-26','user1','2024-08-26',NULL),(334,'PENDING','user_admin','2024-08-26','user1','2024-08-26','inProcess'),(335,'PENDING','admin','2024-08-26','user1','2024-08-26','inProcess'),(336,'PENDING','admin','2024-08-26','user1','2024-08-26','inProcess'),(337,'PENDING','admin','2024-08-26','user1','2024-08-26','inProcess'),(338,'PENDING','admin','2024-08-26','user1','2024-08-26','inProcess'),(339,'PENDING','admin','2024-08-26','user1','2024-08-26',NULL),(340,'PENDING','admin','2024-08-26','user1','2024-08-26',NULL),(341,'PENDING','admin','2024-08-28','user1','2024-08-28','inProcess'),(342,'PENDING','admin','2024-08-28','user1','2024-08-28',NULL),(343,'PENDING','admin','2024-08-28','user1','2024-08-28','inProcess'),(344,'PENDING','admin','2024-08-28','user1','2024-08-28','inProcess'),(345,'PENDING','admin','2024-08-28','user1','2024-08-28','draft'),(346,'PENDING','admin','2024-08-28','user1','2024-08-28',NULL),(347,'PENDING','admin','2024-08-28','user1','2024-08-28',NULL),(348,'PENDING','admin','2024-08-28','user1','2024-08-28',NULL),(349,'PENDING','admin','2024-08-29','user1','2024-08-29','inProcess'),(350,'PENDING','rg1','2024-08-29','user1','2024-08-29',NULL),(351,'PENDING','admin','2024-08-31','user1','2024-08-31',NULL),(352,'PENDING','admin','2024-09-01','user1','2024-09-01',NULL),(353,'PENDING','admin','2024-09-01','user1','2024-09-01',NULL),(354,'PENDING','admin','2024-09-01','user1','2024-09-01',NULL),(355,'PENDING','admin','2024-09-01','user1','2024-09-01',NULL),(356,'PENDING','admin','2024-09-01','user1','2024-09-01',NULL),(357,'PENDING','admin','2024-09-04','user1','2024-09-04',NULL),(358,'PENDING','admin','2024-09-04','user1','2024-09-04',NULL),(359,'PENDING','admin','2024-09-05','user1','2024-09-05',NULL),(360,'PENDING','admin','2024-09-05','user1','2024-09-05',NULL),(361,'PENDING','admin','2024-09-07','user1','2024-09-07',NULL),(362,'PENDING','admin','2024-09-07','user1','2024-09-07',NULL),(363,'PENDING','rg1','2024-09-10','user1','2024-09-10',NULL),(364,'PENDING','admin','2024-09-22','user1','2024-09-22',NULL),(365,'PENDING','admin','2024-09-25','user1','2024-09-25',NULL),(366,'PENDING','admin','2024-09-25','user1','2024-09-25',NULL),(367,'PENDING','admin','2024-09-29','user1','2024-09-29',NULL),(368,'PENDING','admin','2024-09-29','user1','2024-09-29',NULL),(369,'PENDING','admin','2024-09-29','user1','2024-09-29',NULL),(370,'PENDING','admin','2024-09-29','user1','2024-09-29',NULL);
/*!40000 ALTER TABLE `requisition_table_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sale_order_header`
--

DROP TABLE IF EXISTS `sale_order_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sale_order_header` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `user_address` varchar(45) DEFAULT NULL,
  `user_phone_number` bigint DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `installation_is_required` varchar(45) DEFAULT NULL,
  `installation_need_by_date` date DEFAULT NULL,
  `tntative_installation` varchar(45) DEFAULT NULL,
  `perform_invoice` varchar(45) DEFAULT NULL,
  `quotation_shared_date` date DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT 'inProcess',
  `created_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale_order_header`
--

LOCK TABLES `sale_order_header` WRITE;
/*!40000 ALTER TABLE `sale_order_header` DISABLE KEYS */;
INSERT INTO `sale_order_header` VALUES (35,'manish','',88825687832,'','yes','2025-12-09','yes','0011','2026-12-09','sended on date',NULL,'admin','2024-11-07 16:27:52'),(36,'manish','',88825687832,'','yes','2025-12-09','yes','0011','2026-12-09','sended on date',NULL,'admin','2024-11-07 16:29:07'),(37,'manis','',0,'','yes','2024-03-01','yes','ys','2026-01-01','need from today',NULL,'admin','2024-11-08 23:09:12');
/*!40000 ALTER TABLE `sale_order_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sale_order_items_lines`
--

DROP TABLE IF EXISTS `sale_order_items_lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sale_order_items_lines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `so_number` int NOT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `qty` int DEFAULT '0',
  `rate` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `shipping_address` varchar(200) DEFAULT NULL,
  `item_image_path` varchar(45) DEFAULT NULL,
  `item_type` varchar(45) DEFAULT NULL,
  `finish_head_id` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `update_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `work_in_progress_qty` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_idx` (`so_number`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale_order_items_lines`
--

LOCK TABLES `sale_order_items_lines` WRITE;
/*!40000 ALTER TABLE `sale_order_items_lines` DISABLE KEYS */;
INSERT INTO `sale_order_items_lines` VALUES (58,35,'El---lo-al-El-Ho--20-20','undefined',0,222,0,'shippingaddress','1730968937_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(59,35,'El---lo-al-El-Ho--20-20','undefined',0,222,0,'shippingaddress','1730968937_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(60,35,'Gl---lo-al-Gl-Pi--20-20','undefined',0,2234,0,'shippingaddress','1730971146_Screenshot 2024-08-21 163934.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(61,35,'El-44-Ho-lo-al-El-Ho--20-20','undefined',0,222,0,'shippingaddress','1730969370_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(62,35,'El-44-Ho-lo-al-El-Ho--20-20','undefined',0,222,0,'shippingaddress','1730969370_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(63,35,'Gl---lo-al-Gl-Sa--20-20','undefined',0,2234,0,'shippingaddress','1730971326_Screenshot 2024-08-21 162930.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(64,35,'Gl---lo-al-Gl-Sa--20-20','undefined',0,2234,0,'shippingaddress','1730971326_Screenshot 2024-08-21 162930.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(65,36,'El---lo-al-El-Ho--20-20','undefined',120,222,26640,'shippingaddress','1730968937_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',10),(66,36,'El---lo-al-El-Ho--20-20','undefined',45,222,9990,'shippingaddress','1730968937_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(67,36,'Gl---lo-al-Gl-Pi--20-20','undefined',44,2234,96062,'shippingaddress','1730971146_Screenshot 2024-08-21 163934.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(68,36,'El-44-Ho-lo-al-El-Ho--20-20','undefined',1,222,222,'shippingaddress','1730969370_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',3),(69,36,'El-44-Ho-lo-al-El-Ho--20-20','undefined',0,222,0,'shippingaddress','1730969370_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(70,36,'Gl---lo-al-Gl-Sa--20-20','undefined',0,2234,0,'shippingaddress','1730971326_Screenshot 2024-08-21 162930.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',0),(71,36,'Gl---lo-al-Gl-Sa--20-20','undefined',42,2234,96062,'shippingaddress','1730971326_Screenshot 2024-08-21 162930.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-04',44),(72,37,'El-44-Ho-lo-al-El-Ho--20-20','Urn---lore-algo-Glas',89,2234,0,'shippingaddress','1730971040_Screenshot 2024-08-21 165522.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-11',88),(73,37,'Gl---lo-al-Gl-Pi--20-20','Pipe---lore-algo-Glas',20,2234,44680,'shippingaddress','1730971146_Screenshot 2024-08-21 163934.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-11',20),(74,37,'El---lo-al-El-Ho--20-20','Holder---lore-algo-Elec',20,222,2220,'shippingaddress','1730968937_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-11',19),(75,37,'El-44-Ho-lo-al-El-Ho--20-20','Holder-448-Hold-lore-algo-Elec',200,222,4440,'shippingaddress','1730969370_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin','24-11-11',157),(76,37,'El---lo-al-El-Bu--20-20','\\El---lo-al-El-Bu--20-20',23,0,0,'nuinuiniu','1730969370_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,'admin',NULL,30),(77,36,'El---lo-al-El-Bu--20-20','8u8u8u',4,989,0,'huhuhu','1730969370_Screenshot 2024-08-21 165533.png','row_item',NULL,NULL,NULL,NULL,NULL,NULL,7),(78,37,'El---lo-al-El-Bu--20-20','El---lo-al-El-Bu--20-20',1,2234,NULL,'ojkokok','jijoi','jiji','i','ji','ijijij','ij','ijijii','jijiji',10);
/*!40000 ALTER TABLE `sale_order_items_lines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sale_order_table`
--

DROP TABLE IF EXISTS `sale_order_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sale_order_table` (
  `project_number` int NOT NULL AUTO_INCREMENT,
  `User_name` varchar(45) DEFAULT NULL,
  `user_address` varchar(45) DEFAULT NULL,
  `user_phone_number` bigint DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `item_required` varchar(45) DEFAULT NULL,
  `item_shape` varchar(45) DEFAULT NULL,
  `item_size` varchar(45) DEFAULT NULL,
  `item_height` varchar(45) DEFAULT NULL,
  `item_finish` varchar(45) DEFAULT NULL,
  `installation_is_required` varchar(45) DEFAULT NULL,
  `installatio_need_by_date` date DEFAULT NULL,
  `query_recieved` varchar(45) DEFAULT NULL,
  `query_start_date` date DEFAULT NULL,
  `query_updated_date` date DEFAULT NULL,
  `query_created_by` varchar(45) DEFAULT NULL,
  `query_updated_by` varchar(45) DEFAULT NULL,
  `quotaion_shared_date` date DEFAULT NULL,
  `re_query` varchar(45) DEFAULT NULL,
  `re_query_closure_date` date DEFAULT NULL,
  `followup` varchar(45) DEFAULT NULL,
  `query_end_date` date DEFAULT NULL,
  `project_status` varchar(45) DEFAULT NULL,
  `tentative_installation` varchar(45) DEFAULT NULL,
  `installation_date` date DEFAULT NULL,
  `item_type` varchar(45) DEFAULT NULL,
  `shop_drawing_start_date` varchar(45) DEFAULT NULL,
  `shop_drawing_approved` varchar(45) DEFAULT NULL,
  `sample_approval_start_date` date DEFAULT NULL,
  `sample_approval_date` date DEFAULT NULL,
  `perfomance_invoice` varchar(45) DEFAULT NULL,
  `assemble_start_date` date DEFAULT NULL,
  `assemble_compition_date` date DEFAULT NULL,
  `dismantal_start_date` date DEFAULT NULL,
  `disamental_complition_date` date DEFAULT NULL,
  `packed_start_date` date DEFAULT NULL,
  `packed_completion_date` date DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`project_number`),
  UNIQUE KEY `project_number_UNIQUE` (`project_number`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale_order_table`
--

LOCK TABLES `sale_order_table` WRITE;
/*!40000 ALTER TABLE `sale_order_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `sale_order_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saleorder_sub_line`
--

DROP TABLE IF EXISTS `saleorder_sub_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `saleorder_sub_line` (
  `id` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(45) DEFAULT NULL,
  `attribute` varchar(45) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saleorder_sub_line`
--

LOCK TABLES `saleorder_sub_line` WRITE;
/*!40000 ALTER TABLE `saleorder_sub_line` DISABLE KEYS */;
/*!40000 ALTER TABLE `saleorder_sub_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sub_category` (
  `subCatId` int NOT NULL AUTO_INCREMENT,
  `catId` int DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`subCatId`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_category`
--

LOCK TABLES `sub_category` WRITE;
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
INSERT INTO `sub_category` VALUES (1,1,'Bulb'),(2,1,'Holder'),(3,1,'Wire'),(4,6,'Urn'),(5,7,'base'),(6,6,'Pipe'),(7,6,'Shade'),(8,6,'Samadhan'),(9,6,'Balls'),(10,8,'Staionery'),(11,9,'Shades'),(12,10,'Acrylic_diffuser'),(13,11,'Crystal'),(14,12,'Bubble wrap'),(15,12,'Shrink wrap'),(16,12,'Corrugated boxes'),(17,12,'Wooden crating'),(18,12,'Tapes'),(21,1,'new yegeuyebfjehfe4'),(22,1,'new third'),(23,1,'new'),(26,1,'newtests'),(28,1,'abcs'),(29,1,'dfghj'),(32,1,'keoif'),(33,NULL,NULL),(34,19,'newtest'),(37,1,'deionf'),(40,1,''),(46,1,'james_bond');
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_address_details_tbl`
--

DROP TABLE IF EXISTS `supplier_address_details_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supplier_address_details_tbl` (
  `supplier_id` int NOT NULL AUTO_INCREMENT,
  `site_code` varchar(45) DEFAULT NULL,
  `site_name` varchar(45) DEFAULT NULL,
  `site_description` varchar(45) DEFAULT NULL,
  `address_line_1` varchar(45) DEFAULT NULL,
  `address_line_2` varchar(45) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `person_name` varchar(45) DEFAULT NULL,
  `person_email` varchar(45) DEFAULT NULL,
  `person_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_address_details_tbl`
--

LOCK TABLES `supplier_address_details_tbl` WRITE;
/*!40000 ALTER TABLE `supplier_address_details_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_address_details_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_banking_details_tbl`
--

DROP TABLE IF EXISTS `supplier_banking_details_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supplier_banking_details_tbl` (
  `supplier_id` int NOT NULL AUTO_INCREMENT,
  `site_code` varchar(45) DEFAULT NULL,
  `branch_name_` varchar(45) DEFAULT NULL,
  `brach_number` varchar(45) DEFAULT NULL,
  `brach_type` varchar(45) DEFAULT NULL,
  `bank_name` varchar(45) DEFAULT NULL,
  `bank_number` varchar(45) DEFAULT NULL,
  `bank_type` varchar(45) DEFAULT NULL,
  `account_name` varchar(45) DEFAULT NULL,
  `account_number` varchar(45) DEFAULT NULL,
  `account_type` varchar(45) DEFAULT NULL,
  `ifsc_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_banking_details_tbl`
--

LOCK TABLES `supplier_banking_details_tbl` WRITE;
/*!40000 ALTER TABLE `supplier_banking_details_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_banking_details_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_details_header`
--

DROP TABLE IF EXISTS `supplier_details_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supplier_details_header` (
  `vendor_id` int NOT NULL AUTO_INCREMENT,
  `vendor_code` int DEFAULT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `msme_status` varchar(45) DEFAULT NULL,
  `pan` varchar(45) DEFAULT NULL,
  `attribute` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_details_header`
--

LOCK TABLES `supplier_details_header` WRITE;
/*!40000 ALTER TABLE `supplier_details_header` DISABLE KEYS */;
INSERT INTO `supplier_details_header` VALUES (1,100,'ABC ',NULL,NULL,NULL),(2,101,'AAA','',NULL,NULL);
/*!40000 ALTER TABLE `supplier_details_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_organization_details_tbl`
--

DROP TABLE IF EXISTS `supplier_organization_details_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supplier_organization_details_tbl` (
  `supplier_id` int NOT NULL AUTO_INCREMENT,
  `oraganigation_name` varchar(45) DEFAULT NULL,
  `oraganigation_type` varchar(45) DEFAULT NULL,
  `gst_number` varchar(45) DEFAULT NULL,
  `supplier_code` varchar(45) DEFAULT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `supplier_type` varchar(45) DEFAULT NULL,
  `sub_supplier_type` varchar(45) DEFAULT NULL,
  `supplier_status` varchar(45) DEFAULT NULL,
  `starting_date` varchar(45) DEFAULT NULL,
  `ending_date` varchar(45) DEFAULT NULL,
  `person_name` varchar(45) DEFAULT NULL,
  `person_email` varchar(45) DEFAULT NULL,
  `person_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_organization_details_tbl`
--

LOCK TABLES `supplier_organization_details_tbl` WRITE;
/*!40000 ALTER TABLE `supplier_organization_details_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_organization_details_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_site_detail_line`
--

DROP TABLE IF EXISTS `supplier_site_detail_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supplier_site_detail_line` (
  `vendor_line_id` int NOT NULL AUTO_INCREMENT,
  `vendor_id` varchar(45) DEFAULT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `site_name` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `supplier_address` varchar(45) DEFAULT NULL,
  `supplier_category` varchar(45) DEFAULT NULL,
  `supplier_sub_category` varchar(45) DEFAULT NULL,
  `GSTIN number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`vendor_line_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_site_detail_line`
--

LOCK TABLES `supplier_site_detail_line` WRITE;
/*!40000 ALTER TABLE `supplier_site_detail_line` DISABLE KEYS */;
INSERT INTO `supplier_site_detail_line` VALUES (1,'1','ABC','S1','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'1','ABC','S2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'1','ABC','S3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'1','ABC','S4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'2','AAA','B1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'2','AAA','B2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'2','AAA','B3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `supplier_site_detail_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timestamps`
--

DROP TABLE IF EXISTS `timestamps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timestamps` (
  `id` varchar(45) DEFAULT NULL,
  `grn_po_line_id` varchar(45) DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  `qty` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timestamps`
--

LOCK TABLES `timestamps` WRITE;
/*!40000 ALTER TABLE `timestamps` DISABLE KEYS */;
/*!40000 ALTER TABLE `timestamps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `txn_book`
--

DROP TABLE IF EXISTS `txn_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `txn_book` (
  `transaction_no` int NOT NULL AUTO_INCREMENT,
  `transaction_date` varchar(45) DEFAULT NULL,
  `amount_type` varchar(45) DEFAULT NULL,
  `credit_amt` varchar(45) DEFAULT NULL,
  `debit_amt` varchar(45) DEFAULT NULL,
  `net_balance` varchar(45) DEFAULT NULL,
  `particuler_to` varchar(45) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `main_head` varchar(45) DEFAULT NULL,
  `sub_head` varchar(45) DEFAULT NULL,
  `from` varchar(45) DEFAULT NULL,
  `to` varchar(45) DEFAULT NULL,
  `startKm` varchar(45) DEFAULT NULL,
  `endKm` varchar(45) DEFAULT NULL,
  `totalKm` varchar(45) DEFAULT NULL,
  `rate` varchar(45) DEFAULT NULL,
  `bill_cheque_no` varchar(45) DEFAULT NULL,
  `invoice_date` varchar(45) DEFAULT NULL,
  `invoice_no` varchar(45) DEFAULT NULL,
  `gst_no` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `form_status` varchar(45) NOT NULL DEFAULT 'SAVE',
  `currentUser` varchar(45) DEFAULT NULL,
  `currentTime` varchar(45) DEFAULT NULL,
  `updatedBy` varchar(45) DEFAULT NULL,
  `updatedDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transaction_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `txn_book`
--

LOCK TABLES `txn_book` WRITE;
/*!40000 ALTER TABLE `txn_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `txn_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_details` (
  `name` varchar(50) DEFAULT NULL,
  `fullName` varchar(50) DEFAULT NULL,
  `phone_number` bigint DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES ('manish','manish kdr',24834989,'IND');
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phoneNumber` bigint NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address_line_1` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_birth` date NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_account_number` varchar(50) NOT NULL,
  `bank_IFSC_code` varchar(50) NOT NULL,
  `bank_branch_name` varchar(50) NOT NULL,
  `Year` int NOT NULL,
  `pan_card_required` varchar(10) DEFAULT NULL,
  `adhaar_number` bigint DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `membership` varchar(50) NOT NULL,
  `name_of_company` varchar(50) NOT NULL,
  `address_line_2` varchar(100) DEFAULT NULL,
  `landmark` varchar(50) DEFAULT NULL,
  `area` varchar(50) NOT NULL,
  `pincode` int NOT NULL,
  `total_amount_due` int DEFAULT NULL,
  `total_amount_received` int DEFAULT NULL,
  `membership_renewed` varchar(10) DEFAULT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (1,'james','example@example.com',7483748,20,'male','delhi','manish','jfeo','2003-12-12','bank','branch_name','32404398905','IDJIDND8D',2024,'no',89898,'genral','no','company_name','delhi-2','palam','palam',110045,2332,323,'no','sum_user'),(2,'John','john.doe@example.com',1234567890,30,'Male','123','johndoe','password123','1993-07-21','Bank','1234567890123456','EXAMPLE1234','Example',2023,'YES',123456789012,'General','Gold','Example','Suite','Near','Example',123456,1000,500,'no','RegularYes'),(3,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','j','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(4,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','j','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(5,'sagar','sagar@gmail.com',97837384,19,'male','rz 26a kailash puri','sagar79','sagar@123','2003-12-13','bank of india','9843908','IJF9J09U0','Sagar pur',2005,'ODKODJ4',7478350,'GENRAL','PREMEIUM','Constech','kailash puri palam','near by railway station','soth west delhi',110045,3782,47389,'Yes','normal user'),(6,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(7,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(8,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(9,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(10,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(11,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(12,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(13,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(14,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(15,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(16,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(17,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(18,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(19,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(20,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(21,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(22,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(23,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(24,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(25,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',2004,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(26,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',20043,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(27,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',20043,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(28,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',20043,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(29,'manish','dj@diw.com',787878,7,'jkm',' joi','','swq','2003-12-12','ub','ubj','kjb','kub',20043,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(30,'manish','dj@diw.com',787878,7,'jkm',' joi','','swq','2003-12-12','ub','ubj','kjb','kub',20043,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(31,'manish','dj@diw.com',787878,7,'jkm',' joi','','swq','2003-12-12','ub','ubj','kjb','kub',20043,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(32,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',20043,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(33,'manish','dj@diw.com',787878,7,'jkm',' joi','sio','swq','2003-12-12','ub','ubj','kjb','kub',20043,'k',2323,'jb','kjb','j','$hi','hui','uib',232,3232,3232,'no','jkb'),(34,'james','james@gmailc.om',434839480,34,'male',' dwodl4','james79','ifenq39r','2005-03-04','bankofameria','443','43ew','sagar put',4344,'4ed3',434390,'genrel','gold','example comonay','$dwmw3','delhi','palam',110044,3232,324,'no','normal user'),(35,'james','james@gmailc.om',434839480,34,'male',' dwodl4','james79','ifenq39r','2005-03-04','bankofameria','443','43ew','sagar put',4344,'4ed3',434390,'genrel','gold','example comonay','$dwmw3','delhi','palam',110044,3232,324,'no','normal user'),(36,' kcoe','aman@gmail.com',9876545678,20,'male','rz','aman79','aman@123','2005-07-07','Bank','8294082409','NXSKNIED89','Sagar',2024,'SJD90DWPKO',875589742468,'GENRAL','GOLD','Gold','palam','kailash','palam',110046,3434,344,'no','normal'),(37,'aman','aman@gmail.com',9876545678,20,'male',' rz kailash puri','aman79','aman@123','2005-07-07','Bank of Asiya','8294082409','NXSKNIED89','Sagar Pur',2024,'SJD90DWPKO',875589742468,'GENRAL','GOLD','Gold company','$palam','kailash puri','palam',110046,3434,344,'no','normal user');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_management`
--

DROP TABLE IF EXISTS `user_management`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_management` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `updataed_by` varchar(50) DEFAULT NULL,
  `createdBy` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date DEFAULT NULL,
  `mobile_number` bigint NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `person_id` int NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `customer` varchar(45) DEFAULT NULL,
  `supplier` varchar(45) DEFAULT NULL,
  `days` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_management`
--

LOCK TABLES `user_management` WRITE;
/*!40000 ALTER TABLE `user_management` DISABLE KEYS */;
INSERT INTO `user_management` VALUES (1,'rg1','system','syetem','2024-07-24','2024-08-26',7382783,'example.com',2,'rg1@123','2000-12-02','2000-12-12','requisitionGen',NULL,NULL,NULL,NULL),(2,'rg2','admin','admin','2024-07-04','2024-08-06',84934809,'example@.com',1,'rg2@123','2000-12-12','2004-12-12','storeIssuer',NULL,NULL,NULL,NULL),(3,'rg3','system','system','2024-07-24','2024-08-26',938493,'admin@admin.com',1,'rg3@123','2024-07-24','2024-12-12','manager',NULL,NULL,NULL,NULL),(4,'admin_read','system','system','2024-07-24','2024-07-24',938493,'admin_read@admin.com',1,'admin@123','2024-07-24','2024-12-12','readOnly',NULL,NULL,NULL,NULL),(5,'admin_write','system','system','2024-07-24','2024-07-24',938493,'admin_write@admin.com',1,'admin@123','2024-07-24','2024-12-12','writeOnly',NULL,NULL,NULL,NULL),(6,'admin_modify','system','system','2024-07-24','2024-07-26',938493,'admin_modify@admin.com',1,'admin@1234','2024-07-24','2024-12-12','modify',NULL,NULL,NULL,NULL),(7,'user_admin','system','system','2024-08-09','2024-08-26',798788,'admin@example.com',3,'admin@123','2024-08-09','2024-08-09','admin',NULL,NULL,NULL,NULL),(8,'rg4',' sysgtem','system','2024-07-07','2024-07-29',45784,'admin1@admin.com',12,'rg4@123','2024-12-31','2024-12-12','requisitionGen',NULL,NULL,NULL,NULL),(9,'admin_9',' sysgtem','system','2024-07-07','2024-07-29',78,'78',1,'admin@123','2024-01-01','2024-07-07','normal',NULL,NULL,NULL,NULL),(10,'admin10',' sysgtem','system','2024-07-07','2024-07-29',788,'exampk@dw.co',12,'admin@123','2024-11-02','2024-07-07','admn',NULL,NULL,NULL,NULL),(11,'admin11',' sysgtem','system','2024-07-07','2024-07-29',898,'admin@13',56,'124','2022-11-01','2024-07-07','modify',NULL,NULL,NULL,NULL),(12,'admin_12',' sysgtem','system','2024-07-07','2024-07-29',73289,'admin1@admin.com',32,'admin@1234','2024-01-01','2024-07-07','admin',NULL,NULL,NULL,NULL),(13,'admin13',' sysgtem','system','2024-07-07','2024-07-29',73289,'admin1@admin.com',12,'admin@123','2024-12-01','2024-07-07','normal',NULL,NULL,NULL,NULL),(14,'user14',' sysgtem','system','2024-07-07','2024-07-29',73289,'78',2,'admin@123','2025-10-02','2000-12-12','normal_user',NULL,NULL,NULL,NULL),(15,'usre15',' sysgtem','system','2024-07-07','2024-07-29',45784,'78',12,'admin@123','2026-01-02','2024-12-12','normal_user',NULL,NULL,NULL,NULL),(16,'admin',' sysgtem','system','2024-07-07','2024-07-29',898,'manish.b@algo2botsinfotech.com',32,'admin@123','2024-01-01','2000-12-12','admin',NULL,NULL,NULL,NULL),(17,'admin17',' sysgtem','system','2024-07-07','2024-07-29',45784,'78',12,'ad','2025-02-03','2000-12-12','normal',NULL,NULL,NULL,NULL),(18,'admin18',' sysgtem','system','2024-07-29','2024-07-29',1234,'example@gmail.com',21,'admin@12','2024-02-01','2024-01-01','normal',NULL,NULL,NULL,NULL),(19,'admin19',' system','system','2024-07-29','2024-07-29',1233,'exampk@dw.co',12,'admin@1234','2025-01-01','2025-02-01','normal',NULL,NULL,NULL,NULL),(20,'adminRequisition','system','system','2024-08-03','2024-08-03',74349,'adminRequisition@gmail.com',1,'admin@123','2025-08-03','2025-08-03','admin',NULL,NULL,NULL,NULL),(21,'storeManager','system','system','2024-08-03','2024-08-03',74349,'storeManager@gmail.com',23,'admin@123','2025-08-03','2025-08-03','storemanager',NULL,NULL,NULL,NULL),(22,'L&S 2',' System ','System ','2024-08-26','2024-08-26',9876543210,'gfedty@gmail.com',1,'L&S@123','2024-08-26','2024-08-26','Store Manager',NULL,NULL,NULL,NULL),(24,'LTESTUSER1','SYSTEM','SYSTEM','2024-08-26','2024-08-26',9876543210,'LTESTUSER1@LTESTUSER1.com',1,'LTESTUSER1@123','2024-08-26','2024-08-26','leadGenTest',NULL,NULL,NULL,NULL),(25,'hello',NULL,'admin','2024-09-14',NULL,99,'hello@123',99,'hello@123','2024-09-04','2024-09-05',NULL,'','','',''),(26,'hello123',NULL,'admin','2024-09-14',NULL,99,'hello@123',99,'hello@123','2024-09-04','2024-09-05',NULL,'','','',''),(27,'hello1232',NULL,'admin','2024-09-14',NULL,99,'hello@123',99,'hello@123','2024-09-04','2024-09-05',NULL,'','','',''),(28,'hello1232ee',NULL,'admin','2024-09-14',NULL,99,'hello@123',99,'hello@123','2024-09-04','2024-09-05',NULL,'','','',''),(29,'dd',NULL,'admin','2024-09-14',NULL,99,'hello@123',99,'hello@123','2024-09-04','2024-09-05',NULL,'','','',''),(30,'FMSS.AD','admin','admin','2024-09-14',NULL,99,'FMSS.AD@FMSS.AD.com',99,'FMSS.AD@123','2024-09-04','2024-09-05','txnFormAccess',NULL,NULL,NULL,NULL),(31,'FMSS.US','admin','admin','2024-09-14',NULL,99,'FMSS.US@FMSS.AD.com',99,'FMSS.US@123','2024-09-04','2024-09-05','txnFormAccess',NULL,NULL,NULL,NULL),(32,'user_manager','admin','admin','2024-09-14',NULL,99,'user_manager@1234',99,'user_manager@1234','2024-09-04','2024-09-05','storemanager',NULL,NULL,NULL,NULL),(33,'user_regular','admiin','admin','2024-09-14',NULL,99,'manish.b@algo2botsinfotech.com',99,'user_regular@123','2024-09-04','2024-09-05','normal_user',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user_management` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warehouse_deatails`
--

DROP TABLE IF EXISTS `warehouse_deatails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `warehouse_deatails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `location` varchar(45) DEFAULT NULL,
  `organaization_code` varchar(45) DEFAULT NULL,
  `organization_name` varchar(45) DEFAULT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warehouse_deatails`
--

LOCK TABLES `warehouse_deatails` WRITE;
/*!40000 ALTER TABLE `warehouse_deatails` DISABLE KEYS */;
INSERT INTO `warehouse_deatails` VALUES (1,'1','DEL','DELHI-WAREHOUSE-NAME',NULL,NULL,NULL,NULL,NULL,NULL,'active');
/*!40000 ALTER TABLE `warehouse_deatails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-25  0:58:06
