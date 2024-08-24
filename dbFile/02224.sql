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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,1,1,0,0,0,0,0,'2000-01-01','2000-01-01',1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(2,5,0,0,0,0,0,0,'2000-01-01','2000-01-01',0,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(3,6,1,0,0,NULL,NULL,NULL,'2000-01-11','2000-01-01',1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(4,2,0,0,0,0,0,0,'2000-01-01','2000-01-01',0,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(5,4,1,0,1,NULL,NULL,NULL,'2023-10-11','2000-01-13',1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(6,3,1,0,1,NULL,NULL,NULL,'2000-01-01','2000-01-01',1,'2000-01-01','2000-01-01','2000-01-01','2000-01-01',NULL,'2000-01-01','2000-01-01',NULL,NULL,NULL,NULL,NULL),(7,100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bom_hedar_detail`
--

DROP TABLE IF EXISTS `bom_hedar_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bom_hedar_detail` (
  `header_id` int NOT NULL AUTO_INCREMENT,
  `item_code` int NOT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `version` varchar(45) DEFAULT NULL,
  `percentage` int DEFAULT NULL,
  `wharehouse_` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`header_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bom_hedar_detail`
--

LOCK TABLES `bom_hedar_detail` WRITE;
/*!40000 ALTER TABLE `bom_hedar_detail` DISABLE KEYS */;
INSERT INTO `bom_hedar_detail` VALUES (1,123,'manish','v1',100,'delhi',NULL,NULL,NULL,NULL),(2,123,'manish','v1',100,'delhi','SYSTEM','2024-07-31','SYSTEM','2024-07-31'),(3,7676,'example','v1',100,'GURGAO','SYSTEM','2024-07-31','SYSTEM','2024-07-31'),(4,7676,'example','v1',100,'GURGAO','SYSTEM','2024-07-31','SYSTEM','2024-07-31'),(5,7676,'example','v1',100,'GURGAO','SYSTEM','2024-07-31','SYSTEM','2024-07-31'),(6,123,'abcitem1','v1',100,'delhi','SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(7,390,'example2','v1',100,'noida','SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(8,390,'example2','v1',100,'noida','SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(9,99,'example3','v1',100,'okhla','SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(10,1,'examle3','v1',1000,'delhi','SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(11,991,'example','v1',100,'delhi','SYSTEM','2024-08-01','SYSTEM','2024-08-01');
/*!40000 ALTER TABLE `bom_hedar_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bom_line_detail`
--

DROP TABLE IF EXISTS `bom_line_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bom_line_detail` (
  `header_id` int NOT NULL,
  `item_code` int DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`header_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bom_line_detail`
--

LOCK TABLES `bom_line_detail` WRITE;
/*!40000 ALTER TABLE `bom_line_detail` DISABLE KEYS */;
INSERT INTO `bom_line_detail` VALUES (5,NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-07-31','SYSTEM','2024-07-31'),(6,NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(7,NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(8,NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(9,NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(10,NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01'),(11,NULL,NULL,NULL,NULL,NULL,'SYSTEM','2024-08-01','SYSTEM','2024-08-01');
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
) ENGINE=InnoDB AUTO_INCREMENT=274 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fields_lookup`
--

LOCK TABLES `fields_lookup` WRITE;
/*!40000 ALTER TABLE `fields_lookup` DISABLE KEYS */;
INSERT INTO `fields_lookup` VALUES (3,'27','transparent',NULL,NULL),(4,'27','white',NULL,NULL),(5,'27','off-white',NULL,NULL),(6,'27','yellow',NULL,NULL),(11,'74','transparent',NULL,NULL),(12,'74','white',NULL,NULL),(13,'74','off-white',NULL,NULL),(14,'74','yellow',NULL,NULL),(15,'75','round',NULL,NULL),(16,'75','candle',NULL,NULL),(17,'145','Osram',NULL,NULL),(18,'145','wipro',NULL,NULL),(19,'75','pygmy',NULL,NULL),(20,'77','E-14','',NULL),(21,'77','E-27',NULL,NULL),(22,'77','GU-10',NULL,NULL),(23,'144','Dimmable',NULL,NULL),(24,'144','Non dimmable',NULL,NULL),(25,'46','black',NULL,NULL),(26,'46','White',NULL,NULL),(27,'95','E-14',NULL,NULL),(28,'95','E-27',NULL,NULL),(29,'95','GU-10',NULL,NULL),(30,'94','Metal',NULL,NULL),(31,'94','plastic',NULL,NULL),(32,'156','Top',NULL,NULL),(35,'156','Bottom',NULL,NULL),(36,'156','Both',NULL,NULL),(37,'156','None',NULL,NULL),(38,'400','Other',NULL,NULL),(39,'400','Circle',NULL,NULL),(40,'158','KG',NULL,NULL),(41,'158','Each',NULL,NULL),(42,'154','Single ply',NULL,NULL),(43,'154','Double Ply',NULL,NULL),(44,'154','Triple ply',NULL,NULL),(45,'68','killi cut',NULL,NULL),(46,'68','Diamond cut',NULL,NULL),(47,'68','Honeycomb',NULL,NULL),(48,'68','Chatai cut',NULL,NULL),(49,'68','Overlong cut',NULL,NULL),(50,'68','Rice cut',NULL,NULL),(51,'68','Deep diamond cut',NULL,NULL),(52,'68','Badam star cut',NULL,NULL),(53,'68','Fali cut',NULL,NULL),(54,'68','Leaf amber',NULL,NULL),(55,'68','Facet Cut',NULL,NULL),(56,'68','Star cut',NULL,NULL),(57,'68','Furl cut',NULL,NULL),(58,'68','Square gula cut',NULL,NULL),(59,'68','Eye cut',NULL,NULL),(60,'68','Lehar cut',NULL,NULL),(61,'68','Triangle cut',NULL,NULL),(62,'68','Flower cut',NULL,NULL),(63,'66','Lavender',NULL,NULL),(64,'66','Purple',NULL,NULL),(65,'66','Grey',NULL,NULL),(66,'66','Red',NULL,NULL),(67,'66','Frosted',NULL,NULL),(68,'66','Clear',NULL,NULL),(69,'66','Green',NULL,NULL),(70,'66','Yellow',NULL,NULL),(71,'66','Blue',NULL,NULL),(72,'76','3 watt',NULL,NULL),(73,'76','4 watt',NULL,NULL),(74,'76','4.5 watt',NULL,NULL),(75,'76','13 watt',NULL,NULL),(76,'76','15 watt',NULL,NULL),(77,'76','23 watt',NULL,NULL),(78,'76','25 watt',NULL,NULL),(79,'76','40 watt',NULL,NULL),(80,'76','50 watt',NULL,NULL),(81,'76','60 watt',NULL,NULL),(82,'146','KG',NULL,NULL),(83,'146','Each',NULL,NULL),(84,'56','Red',NULL,NULL),(85,'56','Blue',NULL,NULL),(86,'56','White',NULL,NULL),(87,'56','Yellow',NULL,NULL),(88,'56','black',NULL,NULL),(89,'56','Green',NULL,NULL),(90,'56','Grey',NULL,NULL),(91,'73','Copper',NULL,NULL),(92,'73','Aluminium',NULL,NULL),(93,'58','0.5 mm',NULL,NULL),(94,'58','0.75 mm',NULL,NULL),(95,'58','1 mm',NULL,NULL),(96,'58','2.5 mm',NULL,NULL),(97,'58','4 mm',NULL,NULL),(98,'58','6 mm',NULL,NULL),(99,'58','10 mm',NULL,NULL),(100,'58','16 mm',NULL,NULL),(101,'81','Single-core',NULL,NULL),(102,'81','2-Core',NULL,NULL),(103,'81','4-Taar',NULL,NULL),(104,'81','4- Pair',NULL,NULL),(107,'87','On / Off one way switch',NULL,NULL),(108,'87','Foot padel switch',NULL,NULL),(109,'88','2 Pintop',NULL,NULL),(110,'88','3 Pintop',NULL,NULL),(111,'93','KG ',NULL,NULL),(112,'93','Each',NULL,NULL),(113,'164','Lavender',NULL,NULL),(114,'164','Purple',NULL,NULL),(115,'164','Grey',NULL,NULL),(116,'164','Red',NULL,NULL),(117,'164','Frosted',NULL,NULL),(118,'164','Clear',NULL,NULL),(119,'164','Green',NULL,NULL),(120,'164','Yellow',NULL,NULL),(121,'164','Blue',NULL,NULL),(122,'165','killi cut',NULL,NULL),(123,'165','Diamond cut',NULL,NULL),(124,'165','Honeycomb cut',NULL,NULL),(125,'165','Overlong cut',NULL,NULL),(126,'165','Rice cut',NULL,NULL),(127,'165','Star Cut',NULL,NULL),(128,'165','Flower cut',NULL,NULL),(129,'171','Single ply',NULL,NULL),(130,'171','Double Ply',NULL,NULL),(131,'171','Triple ply',NULL,NULL),(132,'401','Top ',NULL,NULL),(133,'401','Bottom',NULL,NULL),(134,'401','Both',NULL,NULL),(135,'401','None',NULL,NULL),(136,'180','Circle',NULL,NULL),(137,'180','Other',NULL,NULL),(138,'172','Top',NULL,NULL),(139,'172','Bottom',NULL,NULL),(140,'172','Both',NULL,NULL),(141,'172','None',NULL,NULL),(142,'174','KG',NULL,NULL),(143,'174','Each',NULL,NULL),(144,'199','Lavender',NULL,NULL),(145,'199','Purple',NULL,NULL),(146,'199','Grey',NULL,NULL),(147,'199','Red',NULL,NULL),(148,'199','Frosted',NULL,NULL),(149,'199','Clear',NULL,NULL),(150,'199','Green',NULL,NULL),(151,'199','Yellow',NULL,NULL),(152,'199','Blue',NULL,NULL),(155,'200','killi cut',NULL,NULL),(156,'200','Diamond cut',NULL,NULL),(157,'200','Honeycomb cut',NULL,NULL),(158,'200','Fali cut ',NULL,NULL),(159,'200','Star Cut',NULL,NULL),(160,'200','Eye cut',NULL,NULL),(161,'210','KG',NULL,NULL),(162,'210','Each',NULL,NULL),(163,'207','Single ply ',NULL,NULL),(164,'207','Double Ply',NULL,NULL),(165,'207','Triple Ply',NULL,NULL),(166,'208','Top',NULL,NULL),(167,'208','Bottom',NULL,NULL),(168,'208','Both',NULL,NULL),(169,'208','None',NULL,NULL),(170,'403','Other',NULL,NULL),(171,'403','Circle',NULL,NULL),(172,'182','Lavender',NULL,NULL),(173,'182','Purple',NULL,NULL),(174,'182','Grey',NULL,NULL),(175,'182','Red',NULL,NULL),(176,'182','Frosted',NULL,NULL),(177,'182','Clear',NULL,NULL),(178,'182','Green',NULL,NULL),(179,'182','Yellow',NULL,NULL),(180,'182','Blue',NULL,NULL),(181,'249','Lavender',NULL,NULL),(182,'249','Purple',NULL,NULL),(183,'249','Grey',NULL,NULL),(184,'249','Red',NULL,NULL),(185,'249','Frosted',NULL,NULL),(186,'249','Clear',NULL,NULL),(187,'249','Green',NULL,NULL),(188,'249','Yellow',NULL,NULL),(189,'249','Blue',NULL,NULL),(190,'250','killi cut',NULL,NULL),(191,'250','Diamond cut',NULL,NULL),(192,'250','Honeycomb cut',NULL,NULL),(193,'250','Fali cut',NULL,NULL),(194,'250','Leaf cut',NULL,NULL),(195,'250','Facet cut',NULL,NULL),(196,'250','Star cut',NULL,NULL),(197,'250','Furl cut',NULL,NULL),(198,'250','Square gula cut',NULL,NULL),(199,'250','Eye cut',NULL,NULL),(200,'250','Lehar cut',NULL,NULL),(201,'250','Triangle cut',NULL,NULL),(202,'250','Flower cut',NULL,NULL),(203,'405','Other ',NULL,NULL),(204,'405','Circle',NULL,NULL),(205,'257','Single ply',NULL,NULL),(206,'257','Double ply',NULL,NULL),(207,'257','Triple ply',NULL,NULL),(208,'260','KG','',NULL),(209,'260','Each',NULL,NULL),(210,'258','Top',NULL,NULL),(211,'258','Bottom',NULL,NULL),(212,'258','Both',NULL,NULL),(213,'258','None',NULL,NULL),(214,'183','killi cut',NULL,NULL),(215,'183','Diamond cut',NULL,NULL),(216,'183','Honeycomb cut',NULL,NULL),(217,'183','chatai cut',NULL,NULL),(218,'183','Overlong cut',NULL,NULL),(219,'183','Rice cut',NULL,NULL),(220,'183','Star cut',NULL,NULL),(221,'183','Traingle cut',NULL,NULL),(222,'183','Flower cut',NULL,NULL),(223,'183','Lehar cut',NULL,NULL),(224,'189','Single ply',NULL,NULL),(225,'189','Double ply',NULL,NULL),(226,'189','Triple ply',NULL,NULL),(227,'190','Top',NULL,NULL),(228,'190','Bottom',NULL,NULL),(229,'190','Both',NULL,NULL),(230,'190','None',NULL,NULL),(232,'192','KG',NULL,NULL),(233,'192','Each',NULL,NULL),(234,'406','Other',NULL,NULL),(235,'406','Circle',NULL,NULL),(236,'292','Box pleated',NULL,NULL),(237,'292','Empire',NULL,NULL),(238,'292','Cone',NULL,NULL),(239,'292','Tapered Drum',NULL,NULL),(240,'292','Drum',NULL,NULL),(241,'292','Dome',NULL,NULL),(242,'292','Bell',NULL,NULL),(243,'296','Silk',NULL,NULL),(244,'296','coton',NULL,NULL),(245,'298','Top',NULL,NULL),(246,'298','Bottom',NULL,NULL),(247,'298','Both',NULL,NULL),(248,'298','none',NULL,NULL),(249,'301','E-14',NULL,NULL),(250,'301','E-27',NULL,NULL),(251,'302','Galler from Top',NULL,NULL),(252,'302','Gallery from Bottom',NULL,NULL),(253,'305','Soft',NULL,NULL),(254,'305','Hard',NULL,NULL),(255,'306','Lining Yes',NULL,NULL),(256,'306','Lining No',NULL,NULL),(257,'408','Powder coating',NULL,NULL),(258,'408','paint',NULL,NULL),(259,'410','Each',NULL,NULL),(260,'353','Meter',NULL,NULL),(261,'353','each',NULL,NULL),(262,'360','meter',NULL,NULL),(263,'360','each',NULL,NULL),(264,'367','meter',NULL,NULL),(265,'367','each',NULL,NULL),(266,'374','meter',NULL,NULL),(267,'374','each',NULL,NULL),(268,'285','White',NULL,NULL),(269,'285','Black',NULL,NULL),(270,'285','blue',NULL,NULL),(271,'285','green',NULL,NULL),(272,'285','pink',NULL,NULL),(273,'285','red',NULL,NULL);
/*!40000 ALTER TABLE `fields_lookup` ENABLE KEYS */;
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
INSERT INTO `grn_goods_receipt` VALUES (2,'7878787878','78','78','78','78','787','87','87','87','87','87','87','87','weight','78','78','78','78','78','78','8','78','78','7878','788','78','78','87'),(3,'item_id','item_code','item_discription','warehouse_location','warehouse_code','receiving_item','purchase_order_id','purchase_order_date','purchase_order_line','received_quantity','recevied_date','receiving_time','finished','weight','dimension','box_no','box_detail','checked_by','approved','remarks','serial_number_to','serial_number_from','vendor_name','mode_of_transport','vehical_detail','invoice_num','invoice_date','amount'),(4,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(5,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(6,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(7,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(8,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(9,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(10,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(11,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(12,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(13,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(14,'543','999','item','rack 1','0033','iter','','jkjk','jkjk','jk','','','jk','jk','','jkjkjk','jkjk','jk','jkjkjk','jkjk','777878','7878','jk','87','8787','8787','0787-08-08','87878787'),(15,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(16,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(17,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(18,'','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(19,'','','','','','','','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `grn_goods_receipt` ENABLE KEYS */;
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
  `Short_Description` varchar(45) DEFAULT NULL,
  `sub_category` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `SI_unit` varchar(45) DEFAULT NULL,
  `Material` varchar(45) DEFAULT NULL,
  `Design` varchar(45) DEFAULT NULL,
  `Finish_type` varchar(45) DEFAULT NULL,
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
  PRIMARY KEY (`S_No`)
) ENGINE=InnoDB AUTO_INCREMENT=406 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_master_main`
--

LOCK TABLES `item_master_main` WRITE;
/*!40000 ALTER TABLE `item_master_main` DISABLE KEYS */;
INSERT INTO `item_master_main` VALUES (349,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Wipro','Yellow','White','','2','','1.5','','','','','40 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724235140_Screenshot 2024-08-20 114403.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(350,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Wipro','Yellow','Yellow','','2','','1.5','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234595_Screenshot 2024-08-21 151905.png','rg3',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 2 first floor','',NULL,'E-27','','','','','','',''),(351,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Osram','White','White','','2','','1.5','','','','','40 watt','Pygmy','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234783_Screenshot 2024-08-20 114403.png','rg3',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 2 first floor','',NULL,'E-27','','','','','','',''),(352,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Wipro','Yellow','White','','2','','1.5','','','','','40 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724235135_Screenshot 2024-08-20 114403.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(353,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724235048_Screenshot 2024-08-14 181751.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','','','','','',''),(354,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724235048_Screenshot 2024-08-14 181751.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','','','','','',''),(355,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Osram','White','White','','2','','1.5','','','','','40 watt','Pygmy','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234797_Screenshot 2024-08-20 114403.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 2 first floor','',NULL,'E-27','','','','','','',''),(356,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Osram','White','White','','2','','1.5','','','','','40 watt','Pygmy','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234797_Screenshot 2024-08-20 114403.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 2 first floor','',NULL,'E-27','','','','','','',''),(357,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Osram','White','White','','2','','1.5','','','','','40 watt','Pygmy','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234783_Screenshot 2024-08-20 114403.png','rg3',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 2 first floor','',NULL,'E-27','','','','','','',''),(358,'EL-2-1-FU-EA-WH-XY-25-3-RA','1','Short_Description',NULL,'250','each','Plastic','','','','','','','Futurekart','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238131_Screenshot 2024-08-21 162930.png','admin',NULL,'departement',NULL,'white holder','','3','','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'E-27','','','','','','',''),(359,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ','1','Short_Description',NULL,'HJ','select','rgr','','','','','','','select','White','White','','rgrg','','r','','','','','3 watt','Candle','','','','','','','','',NULL,'','','','','','','','','JHJ','','','',NULL,'1724237059_Screenshot 2024-08-20 192616.png','admin',NULL,'departement',NULL,'jNJJJHjhJhjHJhjHJH','','HJ','','24-08-21','','','','','','',NULL,'','','1','rgr','select','HJ','',NULL,'GU-10','','','','','','',''),(360,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Osram','White','White','','2','','1.5','','','','','15 watt','Pygmy','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238887_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Non dimmable','rack 1 first floor','',NULL,'select','','','','','','',''),(361,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239074_Screenshot 2024-08-21 151905.png','rg3',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(362,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(363,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239074_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(364,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(365,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(366,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(367,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(368,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(369,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(370,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(371,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(372,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(373,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(374,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(375,'EL-GL-2-1-15-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','','','','','',''),(376,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Wipro','White','Off-white','','2','','1.5','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238937_Screenshot 2024-08-07 134307.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 1 first floor','',NULL,'GU-10','','','','','','',''),(377,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Wipro','White','Off-white','','2','','1.5','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238937_Screenshot 2024-08-07 134307.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 1 first floor','',NULL,'GU-10','','','','','','',''),(378,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','Each','Glass','','','','','','','Wipro','White','Off-white','','2','','1.5','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238937_Screenshot 2024-08-07 134307.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','Dimmable','rack 1 first floor','',NULL,'GU-10','','','','','','',''),(379,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234878_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','','24-08-21','','','','','','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','','','','','',''),(380,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234878_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','SUBMIT','24-08-21','','','','','','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','','','','','',''),(381,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234878_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','','','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','','','','','',''),(382,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234878_Screenshot 2024-08-21 151905.png','admin',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','','','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','','','','','',''),(383,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','SUBMIT','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(384,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','SUBMIT','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(385,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','SUBMIT','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(386,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','SUBMIT','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(387,'EL-2-1-WI-EA-WH-XY-25-3-RA','1','',NULL,'250','each','Plastic','','','','','','','wipro','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238639_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'E-27','','','','','','',''),(388,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(389,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','SUBMIT','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(390,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','SUBMIT','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(391,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','SUBMIT','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(392,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','Short_Description',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(393,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','Short_Description',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(394,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234878_Screenshot 2024-08-21 151905.png','rg3',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','','','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','','','','','',''),(395,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','Short_Description',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','rg3',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(396,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','Short_Description',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234878_Screenshot 2024-08-21 151905.png','rg3',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','','','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','','','','','',''),(397,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','Short_Description',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(398,'EL-2-1-WI-EA-WH-XY-25-3-RA','1','Short_Description',NULL,'250','each','Plastic','','','','','','','wipro','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238639_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'E-27','','','','','','',''),(399,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','Short_Description',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239475_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(400,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','Short_Description',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239475_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(401,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','Short_Description',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(402,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','Short_Description',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239475_Screenshot 2024-08-21 163934.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','','','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','','','','','',''),(403,'GL-8-2-2-1.-BL-CL-XY-45-56','6','Short_Description',NULL,'4500','Each','','','','','','','','blissful','','Clear','Star Cut','8','2','2','','','','','','Circle','','','Single ply','','','1.5 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724240818_Screenshot 2024-08-21 171242.png','admin',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','56','inRunning','24-08-21','','','','','','',NULL,'','','6','','','rack 5 warehouse','Bottom',NULL,'','','','','','','',''),(404,'GL-U6-U-6U-U6-U6-U-6-U6-6','6','Short_Description',NULL,'u6','select','','','','','','','','u6','','select','select','u6u6','u','6u6','','','','','','select','','','Triple ply','','','u6','','',NULL,'','','','','','','','','6','','','',NULL,'1724241894_Screenshot 2024-08-18 185706.png','admin',NULL,'departement',NULL,'u','','6','inRunning','24-08-21','','','','','','',NULL,'','','6','','','u6u6uu6u','Bottom',NULL,'','','','','','','',''),(405,'EL-HU-UH-UH-UH-UH-UH-UH-UH-UH','1','BULB-HUH-UH-UH-UH-UH',NULL,'uh','select','huh','','','','','','','select','Transparent','Transparent','','uh','','uh','','','','','3 watt','Candle','','','','','','','','',NULL,'','','','','','','','','uh','','','',NULL,'1724357311_Screenshot (61).png','admin',NULL,'departement',NULL,'uh','','uh','inRunning','24-08-22','','','','','','',NULL,'','','1','uh','select','uh','',NULL,'E-14','','','','','','','');
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
  `item_code` varchar(200) DEFAULT NULL,
  `Item_Category` varchar(45) DEFAULT NULL,
  `Short_Description` varchar(45) DEFAULT NULL,
  `sub_category` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `SI_unit` varchar(45) DEFAULT NULL,
  `Material` varchar(45) DEFAULT NULL,
  `Design` varchar(45) DEFAULT NULL,
  `Finish_type` varchar(45) DEFAULT NULL,
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
  PRIMARY KEY (`S_No`)
) ENGINE=InnoDB AUTO_INCREMENT=390 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_master_temp`
--

LOCK TABLES `item_master_temp` WRITE;
/*!40000 ALTER TABLE `item_master_temp` DISABLE KEYS */;
INSERT INTO `item_master_temp` VALUES (346,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','BULB-GLAS-2-1.5-2400-YELL',NULL,'30','Each','Glass','','','','','','','Wipro','Yellow','Yellow','','2','','1.5','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234595_Screenshot 2024-08-21 151905.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','2400 k ','Dimmable','rack 2 first floor','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(347,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','BULB-GLAS-2-1.5-2400-YELL',NULL,'30','Each','Glass','','','','','','','Osram','White','White','','2','','1.5','','','','','40 watt','Pygmy','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234783_Screenshot 2024-08-20 114403.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','2400 k ','Dimmable','rack 2 first floor','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(348,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','BULB-GLAS-2-1.5-2400-YELL',NULL,'30','Each','Glass','','','','','','','Osram','White','White','','2','','1.5','','','','','40 watt','Pygmy','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234797_Screenshot 2024-08-20 114403.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','2400 k ','Dimmable','rack 2 first floor','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(349,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','BULB-GLAS-2-1.5-2400-YELL',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724234878_Screenshot 2024-08-21 151905.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(350,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','BULB-GLAS-2-1.5-2400-YELL',NULL,'30','select','Glass','','','','','','','select','Yellow','Yellow','','2','','1.5','','','','','50 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724235048_Screenshot 2024-08-14 181751.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','2400 k ','select','rack 1 first floor','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(351,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','BULB-GLAS-2-1.5-2400-YELL',NULL,'30','Each','Glass','','','','','','','Wipro','Yellow','White','','2','','1.5','','','','','40 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724235135_Screenshot 2024-08-20 114403.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','2400 k ','Dimmable','rack 1 first floor','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(352,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','BULB-GLAS-2-1.5-2400-YELL',NULL,'30','Each','Glass','','','','','','','Wipro','Yellow','White','','2','','1.5','','','','','40 watt','Candle','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724235140_Screenshot 2024-08-20 114403.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','2400 k ','Dimmable','rack 1 first floor','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(353,'EL-RG-RG-R-RG-JN-JH-HJ-HJ-HJ','1','BULB-RGR-RGRG-R-RGR-JNJJ',NULL,'HJ','select','rgr','','','','','','','select','White','White','','rgrg','','r','','','','','3 watt','Candle','','','','','','','','',NULL,'','','','','','','','','JHJ','','','',NULL,'1724237059_Screenshot 2024-08-20 192616.png','admin',NULL,'departement',NULL,'jNJJJHjhJhjHJhjHJH','','HJ','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','rgr','select','HJ','',NULL,'GU-10','','',NULL,NULL,NULL,NULL),(354,'EL-2-1-FU-EA-WH-XY-25-3-RA','1','HOLDER-2-1-FUTU-EACH-WHIT',NULL,'250','each','Plastic','','','','','','','Futurekart','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238131_Screenshot 2024-08-21 162930.png','admin',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','2','','','rack 4 ','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(355,'EL-2-1-WI-EA-WH-XY-25-3-RA','1','HOLDER-2-1-WIPR-EACH-WHIT',NULL,'250','each','Plastic','','','','','','','wipro','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238639_Screenshot 2024-08-21 163934.png','rg1',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','2','','','rack 4 ','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(356,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','BULB-GLAS-2-1.5-2400-YELL',NULL,'30','Each','Glass','','','','','','','Osram','White','White','','2','','1.5','','','','','15 watt','Pygmy','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238887_Screenshot 2024-08-21 163934.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','2400 k ','Non dimmable','rack 1 first floor','',NULL,'select','','',NULL,NULL,NULL,NULL),(357,'EL-GL-2-1.-24-YE-XY-30-2-RA','1','BULB-GLAS-2-1.5-2400-YELL',NULL,'30','Each','Glass','','','','','','','Wipro','White','Off-white','','2','','1.5','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724238937_Screenshot 2024-08-07 134307.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','2400 k ','Dimmable','rack 1 first floor','',NULL,'GU-10','','',NULL,NULL,NULL,NULL),(358,'EL-GL-2-1-15-YE-XY-30-2-RA','1','BULB-GLAS-2-1-1500-YELL',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239074_Screenshot 2024-08-21 151905.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(359,'EL-GL-2-1-15-YE-XY-30-2-RA','1','BULB-GLAS-2-1-1500-YELL',NULL,'30','Each','glass','','','','','','','Osram','Transparent','Off-white','','2','','1','','','','','40 watt','Round','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724239199_Screenshot 2024-08-21 151905.png','rg1',NULL,'departement',NULL,'yellow round bulb','','2','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','1','1500 k ','Non dimmable','rack 1 first floor','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(360,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','HOLDER-2-1-OSRA-EACH-WHIT',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239428_Screenshot 2024-08-21 163934.png','rg1',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','',NULL,NULL,NULL,NULL),(361,'EL-2-1-OS-EA-WH-HO-30-3-RA','1','HOLDER-2-1-OSRA-EACH-WHIT',NULL,'300','each','Metal','','','','','','','osram','','White','','','2','','','','','','','','','','','','','','','',NULL,'','','','','','','','','holders supplier','','','',NULL,'1724239475_Screenshot 2024-08-21 163934.png','rg1',NULL,'departement',NULL,'white holder','','3','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','2','','','rack 4 ','',NULL,'GU-10','','',NULL,NULL,NULL,NULL),(362,'EL-20-ST-ME-GR-ST-30-1.-RA','1','WIRE-20 -STUR-METE-GREE-STUR',NULL,'300','meters','Copper','','','','','','','sturlite','','Green','','','20 ','','','','','0.75 mm','','','','','','','','','','',NULL,'','','','','','','On / Off one way switch','Single-core','sturlite','','','',NULL,'1724239724_Screenshot 2024-08-21 165522.png','rg1',NULL,'departement',NULL,'green 1.5 inches wire','2 Pintop','1.5','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','3','','','rack 5 warehouse','',NULL,'','','',NULL,NULL,NULL,NULL),(363,'EL-30-ST-ME-GR-ST-30-1.-RA','1','WIRE-30-STUR-METE-GREE-STUR',NULL,'300','meters','Copper','','','','','','','sturlite','','Black','','','30','','','','','0.5 mm','','','','','','','','','','',NULL,'','','','','','','On / Off one way switch','2-Core','sturlite','','','',NULL,'1724239831_Screenshot 2024-08-21 165533.png','rg1',NULL,'departement',NULL,'green 1.5 inches wire','3 Pintop','1.5','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','3','','','rack 5 warehouse','',NULL,'','','',NULL,NULL,NULL,NULL),(364,'GL-12-5-3-2.-XY-CL-XY-90-23','6','URN-12-5-3-2.5-XYZ',NULL,'9000','Each','','','','','','','','xyz','','Clear','Star cut','12','','','5','3','','','','Circle','','','Single ply','','','2.5','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724240395_Screenshot 2024-08-21 170234.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','239','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','4','','','rack 7 warehouse','Both',NULL,'','','',NULL,NULL,NULL,NULL),(365,'GL-12-4.-3-2.-XY-CL-XY-98-13','6','URN-12-4.5-3-2.5 -XYZ',NULL,'9800','Each','','','','','','','','xyz','','Frosted','Honeycomb','12','','','4.5','3','','','','Circle','','','Double Ply','','','2.5 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724240498_Screenshot 2024-08-21 170313.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','139','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','4','','','rack 7 warehouse','Both',NULL,'','','',NULL,NULL,NULL,NULL),(366,'GL-8-2-2-1.-BL-CL-XY-45-56','6','PIPE-8-2-2-1.5 -BLIS',NULL,'4500','Each','','','','','','','','blissful','','Clear','Star Cut','8','2','2','','','','','','Circle','','','Single ply','','','1.5 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724240818_Screenshot 2024-08-21 171242.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','56','inRunning','24-08-21','','','','',NULL,'','',NULL,'','','6','','','rack 5 warehouse','Bottom',NULL,'','','',NULL,NULL,NULL,NULL),(367,'GL-4-4-3-1.-XY-CL-XY-54-56','6','SHADE-4-4-3-1.25-XYZ',NULL,'5476','select','','','','','','','','xyz','','Clear','Overlong cut','4','4','3','','','','','','Circle','','','Double ply','','','1.25 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724241002_Screenshot 2024-08-21 171902.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','56','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','7','','','rack 5 warehouse','Bottom',NULL,'','','',NULL,NULL,NULL,NULL),(368,'GL-4-4-3-3.-XY-CL-XY-54-56','6','SHADE-4-4-3-3.25-XYZ',NULL,'5476','Each','','','','','','','','xyz','','Red','Star cut','4','4','3','','','','','','Circle','','','Single ply','','','3.25 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724241459_Screenshot 2024-08-21 171812.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','56','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','7','','','rack 5 warehouse','None',NULL,'','','',NULL,NULL,NULL,NULL),(369,'GL-U6-U-6U-U6-U6-U-6-U6-6','6','PIPE-U6U6-U-6U6-U6-U6',NULL,'u6','select','','','','','','','','u6','','select','select','u6u6','u','6u6','','','','','','select','','','Triple ply','','','u6','','',NULL,'','','','','','','','','6','','','',NULL,'1724241894_Screenshot 2024-08-18 185706.png','admin',NULL,'departement',NULL,'u','','6','Reject','24-08-21','','','','',NULL,'','',NULL,'','','6','','','u6u6uu6u','Bottom',NULL,'','','',NULL,NULL,NULL,NULL),(370,'GL-6-2-2-1.-XY-CL-XY-54-56','6','PIPE-6-2-2-1.45-XYZ',NULL,'5476','Each','','','','','','','','xyz','','Frosted','Flower cut','6','2','2','','','','','','Circle','','','Single ply','','','1.45 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724242592_Screenshot 2024-08-21 171242.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','56','Reject','24-08-21','','','','',NULL,'','',NULL,'','','6','','','rack 5 warehouse','None',NULL,'','','',NULL,NULL,NULL,NULL),(371,'GL-6-2-2-1.-XY-CL-XY-54-56','6','SAMADHAN-6-2-2-1.45-XYZ',NULL,'5476','Each','','','','','','','','xyz','','Clear','Eye cut','6','2','2','','','','','','Circle','','','Single ply ','','','1.45 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724242839_Screenshot 2024-08-21 171812.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','56','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','8','','','rack 5 warehouse','Both',NULL,'','','',NULL,NULL,NULL,NULL),(372,'GL-6-2-2-1.-XY-CL-XY-54-56','6','SAMADHAN-6-2-2-1.45-XYZ',NULL,'5476','Each','','','','','','','','xyz','','Clear','Eye cut','6','2','2','','','','','','Circle','','','Triple Ply','','','1.45 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724242910_Screenshot 2024-08-21 173609.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','56','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','8','','','rack 5 warehouse','Bottom',NULL,'','','',NULL,NULL,NULL,NULL),(373,'GL-6-2-2-1.-XY-CL-XY-54-56','6','SAMADHAN-6-2-2-1.45-XYZ',NULL,'5476','Each','','','','','','','','xyz','','Clear','Honeycomb cut','6','2','2','','','','','','Other','','','Double Ply','','','1.45 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724242964_Screenshot 2024-08-21 173716.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','56','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','8','','','rack 5 warehouse','None',NULL,'','','',NULL,NULL,NULL,NULL),(374,'GL-6-2-2-1.-XY-CL-XY-54-56','6','SAMADHAN-6-2-2-1.45-XYZ',NULL,'5476','Each','','','','','','','','xyz','','Frosted','Fali cut ','6','2','2','','','','','','Circle','','','Double Ply','','','1.45 kg','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724243067_Screenshot 2024-08-21 173502.png','rg1',NULL,'departement',NULL,'clear glass with collar at top of brass 1.5 inches','','56','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','8','','','rack 5 warehouse','Both',NULL,'','','',NULL,NULL,NULL,NULL),(375,'ST-BA----HA-EA-HA-HA-10-0-OF','8','STAIONERY-BALL----HAUS-EACH-HAUS',NULL,'10 ','each','','','','','','','','hauser','','Blue','','','','','','','','--','','','','','','','','','','',NULL,'','','','','','','','','hauser ltd.','','','',NULL,'1724243447_Screenshot 2024-08-21 175725.png','rg1',NULL,'departement',NULL,'hauser blue pens ','','0','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','10','','','office ','',NULL,'','ball','',NULL,NULL,NULL,NULL),(376,'ST-0-A--CL-EA-NO-CL-30-2-OF','8','STAIONERY-0-A-5-CLAS-EACH-NOTE',NULL,'30','each','','','','','','','','classmate','','White','','','','','','','','a-5','','','','','','','','','','',NULL,'','','','','','','','','classmate','','','',NULL,'1724243618_Screenshot 2024-08-21 175804.png','rg1',NULL,'departement',NULL,'notepads for employees','','2','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','10','','','office','',NULL,'','0','',NULL,NULL,NULL,NULL),(377,'ST-0-A--JK-EA-WH-JK-20-2.-OF','8','STAIONERY-0-A-4-JK E-EACH-WHIT',NULL,'200','each bundle','','','','','','','','jk easy','','White','','','','','','','','A-4','','','','','','','','','','',NULL,'','','','','','','','','jk easy ','','','',NULL,'1724243723_Screenshot 2024-08-21 175906.png','rg1',NULL,'departement',NULL,'white sheets for printing','','2.5','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','10','','','office','',NULL,'','0','',NULL,NULL,NULL,NULL),(378,'SH-5-4-4-GR-GR-1-2.-5 -GR','9','SHADES-5-4-4-GREE-GREE',NULL,'300','Each','','','','','','','','xyz','','','','5','','','4','4','','','','circle','','','','Tapered Drum','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724244267_Screenshot 2024-08-21 180759.png','rg1',NULL,'departement',NULL,'tapered drum shade ','','2','SUBMIT','24-08-21','Coton','green ','Bottom','green',NULL,'5 inches','2.5',NULL,'','Powder coating','11','','','warehouse','',NULL,'','','',NULL,NULL,NULL,NULL),(379,'SH-5-4-4-GR-GR-1-2.-5 -GR','9','SHADES-5-4-4-GREE-GREE',NULL,'300','select','','','','','','','','xyz','','','','5','','','4','4','','','','circle','','','','Empire','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724244314_Screenshot 2024-08-21 181016.png','rg1',NULL,'departement',NULL,'tapered drum shade ','','2','SUBMIT','24-08-21','Silk','green ','Bottom','green',NULL,'5 inches','2.5',NULL,'','Powder coating','11','','','warehouse','',NULL,'','','',NULL,NULL,NULL,NULL),(380,'SH-5-4-4-GR-GR-1-2.-5 -GR','9','SHADES-5-4-4-GREE-GREE',NULL,'300','select','','','','','','','','xyz','','','','5','','','4','4','','','','circle','','','','Box pleated','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724244353_Screenshot 2024-08-21 180818.png','rg1',NULL,'departement',NULL,'tapered drum shade ','','2','SUBMIT','24-08-21','Coton','green ','Both','green',NULL,'5 inches','2.5',NULL,'','Paint','11','','','warehouse','',NULL,'','','',NULL,NULL,NULL,NULL),(381,'PA-20---15-XY-BU-XY-29-2-WA','12','BUBBLE WRAP-200 ---15 M-XYZ-BUBB',NULL,'290','Meter','','','','','','','','xyz','','','','15 meter','200 meter','-','','','','','','','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724244864_Screenshot 2024-08-21 181704.png','rg1',NULL,'departement',NULL,'bubble wrap','','2','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','14','','','warehouse','',NULL,'','','',NULL,NULL,NULL,NULL),(382,'PA-20---15-XY-BU-XY-29-2-WA','12','SHRINK WRAP-200 ---15 M-XYZ-BUBB',NULL,'290','Meter','','','','','','','','xyz','','','','15 meter','200 meter','-','','','','','','','','','','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724244915_Screenshot 2024-08-21 181737.png','rg1',NULL,'departement',NULL,'bubble wrap','','2','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','15','','','warehouse','',NULL,'','','',NULL,NULL,NULL,NULL),(383,'PA-20---15-7-XY-BU-XY-29-2','12','CORRUGATED BOXES-200 ---15 M-7-XYZ',NULL,'290','Each','','','','','','','','xyz','','','','15 meter','200 meter','-','','','','','','','','','7','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724244952_Screenshot 2024-08-21 181758.png','rg1',NULL,'departement',NULL,'bubble wrap','','2','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','16','','','warehouse','',NULL,'','','',NULL,NULL,NULL,NULL),(384,'PA-20---15-7-XY-BU-XY-29-2','12','WOODEN CRATING-200 ---15 M-7-XYZ',NULL,'290','Meter','','','','','','','','xyz','','','','15 meter','200 meter','-','','','','','','','','','7','','','','','',NULL,'','','','','','','','','xyz','','','',NULL,'1724245065_Screenshot 2024-08-21 181858.png','rg1',NULL,'departement',NULL,'bubble wrap','','2','SUBMIT','24-08-21','','','','',NULL,'','',NULL,'','','17','','','warehouse','',NULL,'','','',NULL,NULL,NULL,NULL),(385,'EL-DE-12-76-JI-ON-JA-10-10-DE','1','BULB-DELH-12-767-JI-ONG',NULL,'100','KG','Delhi','','','','','','','Wipro','select','select','','12','','767','','','','','select','select','','','','','','','','',NULL,'','','','','','','','','jaipur','','','',NULL,'1724267037_Screenshot 2024-08-18 185706.png','admin',NULL,'departement',NULL,'ong','','10','Reject','24-08-21','','','','',NULL,'','',NULL,'','','1','ji','Dimmable','Delhi','',NULL,'select','','',NULL,NULL,NULL,NULL),(386,'EL-U6-HJ-UJ-JH-HJ-HJ-JH-JH-JH','1','BULB-U6U-HJH-UJH-JHJ-HJ',NULL,'jh','KG','u6u','','','','','','','Osram','Off-white','White','','hjh','','ujh','','','','','4 watt','Candle','','','','','','','','',NULL,'','','','','','','','','hjhh','','','',NULL,'1724316781_Screenshot (60).png','admin',NULL,'departement',NULL,'hj','','jh','SAVE','24-08-22','','','','',NULL,'','',NULL,'','','1','jhj','Non dimmable','jhj','',NULL,'E-27','','',NULL,NULL,NULL,NULL),(387,'EL-Y6-6Y-6Y-Y6-6Y-Y6-6Y-6Y-Y','1','HOLDER-Y6Y-6Y-6Y6Y-Y6Y-6Y',NULL,'6y6','y6y','Metal','','','','','','','6y6yy6y6','','White','','','y6y','','','','','','','','','','','','','','','',NULL,'','','','','','','','','y6y','','','',NULL,'1724316802_Screenshot (61).png','admin',NULL,'departement',NULL,'6y','','6y','SAVE','24-08-22','','','','',NULL,'','',NULL,'','','2','','','y','',NULL,'E-14','','',NULL,NULL,NULL,NULL),(388,'GL-Y6-6Y-Y6-MI-Y6-Y6-Y6-Y6-Y6','6','URN-Y6Y-6Y6Y-Y6-MIMI-Y6Y',NULL,'y6y6','KG','','','','','','','','y6y','','Purple','Lehar cut','y6y','','','6y6y6','y6','','','','Circle','','','Double Ply','','','mimi','','',NULL,'','','','','','','','','y6y','','','',NULL,'1724316829_Screenshot (61).png','admin',NULL,'departement',NULL,'y6y6','','y6','SAVE','24-08-22','','','','',NULL,'','',NULL,'','','4','','','y6y6y6','Bottom',NULL,'','','',NULL,NULL,NULL,NULL),(389,'EL-HU-UH-UH-UH-UH-UH-UH-UH-UH','1','BULB-HUH-UH-UH-UH-UH',NULL,'uh','select','huh','','','','','','','select','Transparent','Transparent','','uh','','uh','','','','','3 watt','Candle','','','','','','','','',NULL,'','','','','','','','','uh','','','',NULL,'1724357311_Screenshot (61).png','admin',NULL,'departement',NULL,'uh','','uh','inRunning','24-08-22','','','','',NULL,'','',NULL,'','','1','uh','select','uh','',NULL,'E-14','','',NULL,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemmastercategory`
--

LOCK TABLES `itemmastercategory` WRITE;
/*!40000 ALTER TABLE `itemmastercategory` DISABLE KEYS */;
INSERT INTO `itemmastercategory` VALUES (1,'Electrical'),(6,'Glass'),(7,'Metal'),(8,'Statioery'),(9,'Shades'),(10,'Acrylic_Shades'),(11,'Crystal'),(12,'Packaging');
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
-- Table structure for table `purchase_order_header`
--

DROP TABLE IF EXISTS `purchase_order_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchase_order_header` (
  `id` int NOT NULL AUTO_INCREMENT,
  `PO_number` varchar(45) DEFAULT NULL,
  `vendore_code` varchar(45) DEFAULT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `supplier_site_code` varchar(45) DEFAULT NULL,
  `payment_term` varchar(45) DEFAULT NULL,
  `bill_to_location` varchar(45) DEFAULT NULL,
  `tax` varchar(45) DEFAULT NULL,
  `hsn_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_order_header`
--

LOCK TABLES `purchase_order_header` WRITE;
/*!40000 ALTER TABLE `purchase_order_header` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase_order_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_order_line`
--

DROP TABLE IF EXISTS `purchase_order_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchase_order_line` (
  `id` int NOT NULL,
  `po_number` varchar(45) DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `unit_price` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `total_price` varchar(45) DEFAULT NULL,
  `need_by_date` varchar(45) DEFAULT NULL,
  `quantity_recevied` varchar(45) DEFAULT NULL,
  `balance` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_order_line`
--

LOCK TABLES `purchase_order_line` WRITE;
/*!40000 ALTER TABLE `purchase_order_line` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase_order_line` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=446 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requireattributeforcatname`
--

LOCK TABLES `requireattributeforcatname` WRITE;
/*!40000 ALTER TABLE `requireattributeforcatname` DISABLE KEYS */;
INSERT INTO `requireattributeforcatname` VALUES (27,1,'Colour',NULL,'txt',NULL,'yes'),(46,2,'Colour',NULL,'txt',NULL,'yes'),(48,2,'Length',NULL,'txt',NULL,'no'),(56,3,'Colour',NULL,'txt',NULL,'yes'),(57,3,'Length',NULL,'txt',NULL,'no'),(58,3,'Size',NULL,'txt',NULL,'yes'),(66,4,'Colour',NULL,NULL,NULL,'yes'),(68,4,'Cut',NULL,NULL,NULL,'yes'),(70,4,'Height',NULL,NULL,NULL,'no'),(73,3,'Material',NULL,NULL,NULL,'yes'),(74,1,'Light_Output_Colour',NULL,'txt',NULL,'yes'),(75,1,'Shape',NULL,NULL,NULL,'yes'),(76,1,'Watt',NULL,'txt',NULL,'yes'),(77,1,'Socket',NULL,NULL,NULL,'yes'),(78,1,'Material',NULL,NULL,NULL,'no'),(79,1,'Height',NULL,'txt',NULL,'no'),(81,3,'Wire_type',NULL,NULL,NULL,'yes'),(82,2,'Diameter',NULL,NULL,NULL,'no'),(83,4,'Length',NULL,NULL,NULL,'no'),(87,3,'In_built_switch',NULL,NULL,NULL,'yes'),(88,3,'Pintop',NULL,NULL,NULL,'yes'),(92,3,'Brand',NULL,'txt',NULL,'no'),(93,3,'SI_unit',NULL,NULL,NULL,'no'),(94,2,'Material',NULL,NULL,NULL,'yes'),(95,2,'Socket',NULL,NULL,NULL,'yes'),(96,2,'Brand',NULL,'txt',NULL,'no'),(97,2,'SI_unit',NULL,NULL,NULL,'no'),(98,1,'Breadth',NULL,NULL,NULL,'no'),(143,1,'Colour_Temparature',NULL,NULL,NULL,'no'),(144,1,'Dimmable',NULL,NULL,NULL,'yes'),(145,1,'Brand',NULL,'txt',NULL,'yes'),(146,1,'SI_unit',NULL,NULL,NULL,'yes'),(147,2,'Long_Description',NULL,NULL,NULL,'no'),(148,2,'Vendor',NULL,NULL,NULL,'no'),(149,4,'Breadth',NULL,NULL,NULL,'no'),(153,4,'Weight',NULL,NULL,NULL,'no'),(154,4,'No_of_ply',NULL,NULL,NULL,'yes'),(156,4,'Collar',NULL,NULL,NULL,'yes'),(157,4,'Brand',NULL,NULL,NULL,'no'),(158,4,'SI_unit',NULL,NULL,NULL,'yes'),(160,4,'Long_Description',NULL,NULL,NULL,'no'),(161,4,'Vendor',NULL,NULL,NULL,'no'),(162,4,'Price',NULL,NULL,NULL,'no'),(163,4,'Discount',NULL,'txt',NULL,'no'),(164,6,'Colour',NULL,NULL,NULL,'yes'),(165,6,'Cut',NULL,NULL,NULL,'yes'),(166,6,'Height',NULL,NULL,NULL,'no'),(167,6,'Length',NULL,NULL,NULL,'no'),(168,6,'Breadth',NULL,NULL,NULL,'no'),(169,6,'Weight',NULL,NULL,NULL,'no'),(171,6,'No_of_ply',NULL,NULL,NULL,'yes'),(172,6,'Collar',NULL,NULL,NULL,'yes'),(173,6,'Brand',NULL,NULL,NULL,'no'),(174,6,'SI_unit',NULL,NULL,NULL,'yes'),(175,6,'Long_Description',NULL,NULL,NULL,'no'),(176,6,'Vendor',NULL,NULL,NULL,'no'),(177,6,'Price',NULL,NULL,NULL,'no'),(178,6,'Discount',NULL,NULL,NULL,'no'),(179,6,'Location',NULL,NULL,NULL,'no'),(180,6,'Shape',NULL,'txt',NULL,'yes'),(182,7,'Colour',NULL,NULL,NULL,'yes'),(183,7,'Cut',NULL,NULL,NULL,'yes'),(184,7,'Height',NULL,NULL,NULL,'no'),(185,7,'Length',NULL,NULL,NULL,'no'),(186,7,'Breadth',NULL,NULL,NULL,'no'),(187,7,'Weight',NULL,NULL,NULL,'no'),(189,7,'No_of_ply',NULL,NULL,NULL,'yes'),(190,7,'Collar',NULL,NULL,NULL,'yes'),(191,7,'Brand',NULL,NULL,NULL,'no'),(192,7,'SI_unit',NULL,NULL,NULL,'yes'),(193,7,'Long_Description',NULL,NULL,NULL,'no'),(195,7,'Vendor',NULL,NULL,NULL,'no'),(196,7,'Price',NULL,NULL,NULL,'no'),(197,7,'Discount',NULL,NULL,NULL,'no'),(198,7,'Location',NULL,'txt',NULL,'no'),(199,8,'Colour',NULL,NULL,NULL,'yes'),(200,8,'Cut',NULL,NULL,NULL,'yes'),(201,8,'Height',NULL,NULL,NULL,'no'),(202,8,'Length',NULL,NULL,NULL,'no'),(204,8,'Breadth',NULL,NULL,NULL,'no'),(206,8,'Weight',NULL,NULL,NULL,'no'),(207,8,'No_of_ply',NULL,NULL,NULL,'yes'),(208,8,'Collar',NULL,NULL,NULL,'yes'),(209,8,'Brand',NULL,NULL,NULL,'no'),(210,8,'SI_unit',NULL,NULL,NULL,'yes'),(212,8,'Long_Description',NULL,NULL,NULL,'no'),(213,8,'Vendor',NULL,NULL,NULL,'no'),(214,8,'Price',NULL,NULL,NULL,'no'),(215,8,'Discount',NULL,'txt',NULL,'no'),(249,9,'Colour',NULL,NULL,NULL,'yes'),(250,9,'Cut',NULL,NULL,NULL,'yes'),(251,9,'Height',NULL,NULL,NULL,'no'),(252,9,'Length',NULL,NULL,NULL,'no'),(254,9,'Breadth',NULL,NULL,NULL,'no'),(256,9,'Weight',NULL,NULL,NULL,'no'),(257,9,'No_of_ply',NULL,NULL,NULL,'yes'),(258,9,'Collar',NULL,NULL,NULL,'yes'),(259,9,'Brand',NULL,NULL,NULL,'no'),(260,9,'SI_unit',NULL,NULL,NULL,'yes'),(262,9,'Long_Description',NULL,NULL,NULL,'no'),(263,9,'Vendor',NULL,NULL,NULL,'no'),(264,9,'Price',NULL,NULL,NULL,'no'),(265,9,'Discount',NULL,'txt',NULL,'no'),(266,5,'yuy6yu6',NULL,NULL,NULL,'no'),(267,5,'Short_Description',NULL,NULL,NULL,'no'),(268,5,'Material',NULL,NULL,NULL,'no'),(269,5,'Finish_type',NULL,NULL,NULL,'no'),(270,5,'Thread',NULL,NULL,NULL,'no'),(271,5,'Breadth',NULL,NULL,NULL,'no'),(272,5,'Upper_Dia',NULL,NULL,NULL,'no'),(273,5,'Bottom_Dia',NULL,NULL,NULL,'no'),(274,5,'Centre_Hole_dia',NULL,NULL,NULL,'no'),(275,5,'Shape',NULL,NULL,NULL,'no'),(276,5,'Inner_Outer_thread',NULL,NULL,NULL,'no'),(277,5,'Upper_thread',NULL,NULL,NULL,'no'),(278,5,'Lower_thread',NULL,NULL,NULL,'no'),(279,5,'Thread_length',NULL,NULL,NULL,'no'),(280,5,'Vendor',NULL,NULL,NULL,'no'),(281,5,'Price',NULL,'txt',NULL,'no'),(282,5,'Discount',NULL,NULL,NULL,'no'),(283,5,'Long_Description',NULL,NULL,NULL,'no'),(285,10,'Colour',NULL,NULL,NULL,'yes'),(286,10,'Ink_type',NULL,NULL,NULL,'no'),(287,10,'Size',NULL,NULL,NULL,'no'),(288,10,'Brand',NULL,'txt',NULL,'no'),(289,10,'SI_unit',NULL,NULL,NULL,'no'),(290,10,'Long_Description',NULL,NULL,NULL,'no'),(292,11,'Style',NULL,NULL,NULL,'yes'),(293,11,'Height',NULL,NULL,NULL,'no'),(294,11,'Upper_Dia',NULL,NULL,NULL,'no'),(295,11,'Bottom_Dia',NULL,NULL,NULL,'no'),(296,11,'fabric',NULL,NULL,NULL,'yes'),(297,11,'fabric_colour',NULL,NULL,NULL,'no'),(298,11,'piping',NULL,NULL,NULL,'yes'),(299,11,'piping_color',NULL,NULL,NULL,'no '),(300,11,'piping_length',NULL,NULL,NULL,'no'),(301,11,'Gallery_type',NULL,NULL,NULL,'yes'),(302,11,'gallery',NULL,NULL,NULL,'yes'),(303,11,'gallery_height',NULL,NULL,NULL,'no'),(304,11,'acrylic_sheet',NULL,NULL,NULL,'no'),(305,11,'sheet',NULL,NULL,NULL,'yes'),(306,11,'Lining',NULL,NULL,NULL,'yes'),(307,12,'Short_Description',NULL,NULL,NULL,'no'),(308,12,'Colour',NULL,NULL,NULL,'no'),(309,12,'Size',NULL,NULL,NULL,'no'),(310,12,'Shape',NULL,NULL,NULL,'no'),(311,12,'Centre_Hole_dia',NULL,NULL,NULL,'no'),(312,12,'Transparent',NULL,NULL,NULL,'no'),(313,12,'Vendor',NULL,NULL,NULL,'no'),(314,12,'Long_Description',NULL,NULL,NULL,'no'),(331,13,'Short_Description',NULL,NULL,NULL,'no'),(332,13,'Colour',NULL,NULL,NULL,'no'),(333,13,'Material',NULL,NULL,NULL,'no'),(334,13,'Finish_type',NULL,NULL,NULL,'no'),(335,13,'Shape',NULL,NULL,NULL,'no'),(336,13,'Cut',NULL,NULL,NULL,'no'),(337,13,'Height',NULL,NULL,NULL,'no'),(338,13,'Weight',NULL,NULL,NULL,'no'),(339,13,'Upper_Dia',NULL,NULL,NULL,'no'),(340,13,'Bottom_Dia',NULL,NULL,NULL,'no'),(341,13,'Style',NULL,NULL,NULL,'no'),(342,13,'No_of_ply',NULL,NULL,NULL,'no'),(343,13,'Vendor',NULL,NULL,NULL,'no'),(344,13,'Long_Description',NULL,NULL,NULL,'no'),(345,13,'Price',NULL,'txt',NULL,'no'),(346,13,'Discount',NULL,NULL,NULL,'no'),(348,14,'Length',NULL,NULL,NULL,'no'),(349,14,'Breadth',NULL,NULL,NULL,'no'),(350,14,'Height',NULL,NULL,NULL,'no'),(352,14,'Brand',NULL,NULL,NULL,'no'),(353,14,'SI_unit',NULL,NULL,NULL,'yes'),(355,15,'Length',NULL,NULL,NULL,'no'),(356,15,'Breadth',NULL,NULL,NULL,'no'),(357,15,'Height',NULL,NULL,NULL,'no'),(359,15,'Brand',NULL,NULL,NULL,'no'),(360,15,'SI_unit',NULL,NULL,NULL,'yes'),(362,16,'Length',NULL,NULL,NULL,'no'),(363,16,'Breadth',NULL,NULL,NULL,'no'),(364,16,'Height',NULL,NULL,NULL,'no'),(365,16,'No_of_ply',NULL,NULL,NULL,'no'),(366,16,'Brand',NULL,NULL,NULL,'no'),(367,16,'SI_unit',NULL,NULL,NULL,'yes'),(369,17,'Length',NULL,NULL,NULL,'no'),(370,17,'Breadth',NULL,NULL,NULL,'no'),(371,17,'Height',NULL,NULL,NULL,'no'),(372,17,'No_of_ply',NULL,NULL,NULL,'no'),(373,17,'Brand',NULL,NULL,NULL,'no'),(374,17,'SI_unit',NULL,NULL,NULL,'yes'),(375,18,'Short_Description',NULL,NULL,NULL,'no'),(376,18,'Length',NULL,NULL,NULL,'no'),(377,18,'Breadth',NULL,NULL,NULL,'no'),(378,18,'Height',NULL,NULL,NULL,'no'),(379,18,'No_of_ply',NULL,NULL,NULL,'no'),(380,18,'Vendor',NULL,NULL,NULL,'no'),(381,18,'Long_Description',NULL,NULL,NULL,'no'),(382,1,'Long_Description',NULL,NULL,NULL,'no'),(383,1,'Vendor',NULL,NULL,NULL,'no'),(384,1,'Price',NULL,NULL,NULL,'no'),(385,1,'Discount',NULL,NULL,NULL,'no'),(386,1,'Location',NULL,NULL,NULL,'no'),(387,2,'Price',NULL,NULL,NULL,'no'),(388,2,'Discount',NULL,NULL,NULL,'no'),(389,2,'Location',NULL,NULL,NULL,'no'),(390,3,'Long_Description',NULL,NULL,NULL,'no'),(391,3,'Vendor',NULL,NULL,NULL,'no'),(392,3,'Price',NULL,NULL,NULL,'no'),(393,3,'Discount',NULL,NULL,NULL,'no'),(394,3,'Location',NULL,NULL,NULL,'no'),(395,4,'Location',NULL,NULL,NULL,'no'),(400,4,'Shape',NULL,NULL,NULL,'yes'),(402,8,'Location',NULL,NULL,NULL,'no'),(403,8,'Shape',NULL,NULL,NULL,'yes'),(404,9,'Location',NULL,NULL,NULL,'no'),(405,9,'Shape',NULL,NULL,NULL,'yes'),(406,7,'Shape',NULL,NULL,NULL,'yes'),(407,11,'Lining_colour',NULL,NULL,NULL,'no'),(408,11,'Frame',NULL,NULL,NULL,'yes'),(409,11,'Brand',NULL,NULL,NULL,'no'),(410,11,'SI_unit',NULL,NULL,NULL,'yes'),(411,11,'Long_Description',NULL,NULL,NULL,'no'),(412,11,'Vendor',NULL,NULL,NULL,'no'),(413,11,'Price',NULL,NULL,NULL,'no'),(414,11,'Discount',NULL,NULL,NULL,'no'),(415,11,'Location',NULL,NULL,NULL,'no'),(416,11,'Shape',NULL,NULL,NULL,'no'),(422,14,'Long_Description',NULL,NULL,NULL,'no'),(423,14,'Vendor',NULL,NULL,NULL,'no'),(424,14,'Price',NULL,NULL,NULL,'no'),(425,14,'Discount',NULL,NULL,NULL,'no'),(426,14,'Location',NULL,NULL,NULL,'no'),(427,15,'Long_Description',NULL,NULL,NULL,'no'),(428,15,'Vendor',NULL,NULL,NULL,'no'),(429,15,'Price',NULL,NULL,NULL,'no'),(430,15,'Discount',NULL,NULL,NULL,'no'),(431,15,'Location',NULL,NULL,NULL,'no'),(432,16,'Long_Description',NULL,NULL,NULL,'no'),(433,16,'Vendor',NULL,NULL,NULL,'no'),(434,16,'Price',NULL,NULL,NULL,'no'),(435,16,'Discount',NULL,NULL,NULL,'no'),(436,16,'Location',NULL,NULL,NULL,'no'),(437,17,'Long_Description',NULL,NULL,NULL,'no'),(438,17,'Vendor',NULL,NULL,NULL,'no'),(439,17,'Price',NULL,NULL,NULL,'no'),(440,17,'Discount',NULL,NULL,NULL,'no'),(441,17,'Location',NULL,NULL,NULL,'no'),(442,10,'Vendor',NULL,NULL,NULL,'no'),(443,10,'Price',NULL,NULL,NULL,'no'),(444,10,'Discount',NULL,NULL,NULL,'no'),(445,10,'Location',NULL,NULL,NULL,'no');
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
  PRIMARY KEY (`S_no`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requisition_table`
--

LOCK TABLES `requisition_table` WRITE;
/*!40000 ALTER TABLE `requisition_table` DISABLE KEYS */;
INSERT INTO `requisition_table` VALUES (1,'system','2024-08-02','HR',1,'IR',1,1,'box',1,10,'cancledsdwdw',10000,'2024-08-09','','CANCEL','UPDATE',1,'system','2024-08-06',NULL),(2,'system','2024-08-02','HR',1,'internal store',2,2,'bulb',2,20,'urgenttttttttttttttttttttttt',200,'2024-08-02','store keeper','CANCEL','',1,'system','2024-08-06',NULL),(3,'sytem','2024-08-02','HR',1,'IR',3,2,'bulb',2,10,'need',999,'2024-08-02','store','CANCEL','need',1,'system','2024-08-06',NULL),(4,'System','2024-08-02','SCH',1,'',198,NULL,'BULB',1,1,'data are canceled',99999,'2024-08-21','','PENDING','data',NULL,'system','2024-08-06',NULL),(5,'System','2024-08-02','SCH',1,'IR',199,NULL,'BULB',1,1,'',233,'2024-08-09','store','CLOSE','',NULL,'system','2024-08-06',NULL),(6,'System','2024-08-02','SCH',1,'IR',200,NULL,'BULB',1,1,'',1,'2024-09-09','kkjk','CLOSE','kjkjk',NULL,'system','2024-08-06',NULL),(7,'System','2024-08-02','SCH',1,NULL,201,NULL,'BULB',1,1,'',NULL,NULL,NULL,NULL,NULL,NULL,'system','2024-08-06',NULL),(8,'System','2024-08-02','SCH',1,NULL,202,NULL,'BULB',1,1,'',NULL,NULL,NULL,NULL,NULL,NULL,'system','2024-08-06',NULL),(9,'System','2024-08-02','SCH',1,NULL,203,NULL,'BULB',1,1,'',NULL,NULL,NULL,NULL,NULL,NULL,'system','2024-08-06',NULL),(10,'adminRequisition','2024-08-03','HR',1,NULL,206,NULL,'cable',1,10,'need to be night',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(11,'adminRequisition','2024-08-03','hr',1,NULL,207,NULL,'fibre cable',1,21,'need',NULL,NULL,NULL,'',NULL,NULL,'adminRequisition','2024-08-06',NULL),(12,'adminRequisition','2024-08-03','hr',1,NULL,207,NULL,'fibre cable',1,21,'need',NULL,NULL,NULL,'',NULL,NULL,'adminRequisition','2024-08-06',NULL),(13,'adminRequisition','2024-08-03','SCH',1,NULL,207,NULL,'cup',1,22,'need',NULL,NULL,NULL,'',NULL,NULL,'adminRequisition','2024-08-06',NULL),(14,'adminRequisition','2024-08-03','IT',1,NULL,207,4,'copper cable',1,100,'need cooper cable',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(15,'adminRequisition','2024-08-03','IT',1,NULL,207,4,'copper cable',1,100,'need cooper cable',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(16,'adminRequisition','2024-08-03','HR',1,NULL,207,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(17,'adminRequisition','2024-08-03','HR',1,NULL,212,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(18,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(19,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(20,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(21,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(22,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(23,'adminRequisition','2024-08-03','HR',1,NULL,218,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(24,'adminRequisition','2024-08-03','HR',1,NULL,1,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06',NULL),(25,'adminRequisition','2024-08-03','HR',1,NULL,NULL,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,'PENDING',NULL,1,'adminRequisition','2024-08-06',NULL),(26,'adminRequisition','2024-08-03','HR',1,NULL,NULL,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,213,'adminRequisition','2024-08-06',NULL),(27,'adminRequisition','2024-08-03','HR',1,NULL,NULL,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,213,'adminRequisition','2024-08-06',NULL),(28,'adminRequisition','2024-08-03','IT',1,NULL,NULL,88,'Ba',1,100,'need urget',NULL,NULL,NULL,NULL,NULL,213,'adminRequisition','2024-08-06',NULL),(29,'adminRequisition','2024-08-03','department',1,NULL,NULL,99,'copy',1,10,'cop',NULL,NULL,NULL,'CANCEL',NULL,213,'adminRequisition','2024-08-06',NULL),(30,'adminRequisition','2024-08-05','HR',1,NULL,NULL,9,'cup',1,10,'de',NULL,NULL,NULL,NULL,NULL,234,'adminRequisition','2024-08-06',NULL),(31,'adminRequisition','2024-08-05','NEW DT',1,NULL,NULL,9,'NUSD`',1,1278,'kdk',NULL,NULL,NULL,NULL,NULL,235,'adminRequisition','2024-08-06',NULL),(32,'adminRequisition','2024-08-06','',1,NULL,NULL,12,'cable',1,29,'need get',NULL,NULL,NULL,NULL,NULL,236,'adminRequisition','2024-08-06',NULL),(33,'admin','2024-08-06','',1,NULL,NULL,2,'bud',1,78,'need',NULL,NULL,NULL,NULL,NULL,237,'admin','2024-08-06',NULL),(34,'admin','2024-08-06','',1,NULL,NULL,32,'fmke',1,38,'need',NULL,NULL,NULL,NULL,NULL,238,'admin','2024-08-06',NULL),(35,'admin','2024-08-06','',1,NULL,NULL,43,'kdfoef',1,43,'ifjeiofjo',NULL,NULL,NULL,NULL,NULL,243,'admin','2024-08-06',NULL),(36,'admin','2024-08-06','',1,NULL,NULL,8439,'jido',1,9789,'89879',NULL,NULL,NULL,NULL,NULL,244,'admin','2024-08-06',NULL),(37,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(38,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(39,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(40,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(41,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(42,'admin','2024-08-06','',1,NULL,NULL,6767,'new item 14',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(43,'admin','2024-08-06','',1,NULL,NULL,767,'new name',10,78,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(44,'admin','2024-08-06','',1,NULL,NULL,767,'new name',10,78,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(45,'admin','2024-08-06','',1,NULL,NULL,432,'dmwk',10,32,'rf4ff',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(46,'admin','2024-08-06','',1,NULL,NULL,432,'dmwk',10,32,'rf4ff',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(47,'admin','2024-08-06','',1,NULL,NULL,432,'dmwk',10,32,'rf4ff',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(48,'admin','2024-08-06','',1,NULL,NULL,432,'dmwk',10,32,'rf4ff',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(49,'admin','2024-08-06','',1,NULL,NULL,2,'u89j',10,8,'u9',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(50,'admin','2024-08-06','',1,NULL,NULL,2,'',10,1,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(51,'admin','2024-08-06','',1,NULL,NULL,2,'',10,1,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(52,'admin','2024-08-06','',1,NULL,NULL,2,'hfdioef',10,1,'fefemfor',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(53,'admin','2024-08-06','',1,NULL,NULL,2,'jijij',10,7,'ikjo',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(54,'admin','2024-08-06','',1,NULL,NULL,2,'jijij',10,7,'ikjo',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(55,'admin','2024-08-06','',1,NULL,NULL,67,'jkjk',10,67,'i',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(56,'admin','2024-08-06','',1,NULL,NULL,67,'jkjk',10,67,'i',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(57,'admin','2024-08-06','',1,NULL,NULL,343,'hiuh',10,878,'nk',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(58,'admin','2024-08-06','',1,NULL,NULL,343,'hiuh',10,878,'nk',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(59,'admin','2024-08-06','',1,NULL,NULL,898,'huhu',10,6,'de',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(60,'admin','2024-08-06','',1,NULL,NULL,898,'huhu',10,6,'de',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(61,'admin','2024-08-06','',1,NULL,NULL,898,'huhu',10,6,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(62,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,7,'cd',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(63,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,7,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(64,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,7,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(65,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,7,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(66,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,6,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06',NULL),(67,'admin','2024-08-06','',1,NULL,NULL,67,'kk',10,7,'hihi',NULL,NULL,NULL,NULL,NULL,7,'admin','2024-08-06',NULL),(68,'admin','2024-08-06','',1,NULL,NULL,67,'kk',10,7,'hihi',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(69,'admin','2024-08-06','',1,NULL,NULL,67,'kk',10,7,'hihi',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(70,'admin','2024-08-06','',1,NULL,NULL,67,'kk',10,7,'hihi',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(71,'admin','2024-08-06','',1,NULL,NULL,67,'knk',10,67,'nk',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(72,'admin','2024-08-06','',1,NULL,NULL,67,'mk',10,78,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(73,'admin','2024-08-06','',1,NULL,NULL,67,'mk',10,78,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(74,'admin','2024-08-06','',1,NULL,NULL,67,'mk',10,78,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(75,'admin','2024-08-06','',1,NULL,NULL,48,'dkop',10,67,'mjijio',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(76,'admin','2024-08-06','',1,NULL,NULL,48,'dkop',10,67,'mjijio',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(77,'admin','2024-08-06','',1,NULL,NULL,54,'jio',10,6,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(78,'admin','2024-08-06','',1,NULL,NULL,54,'jio',10,6,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(79,'admin','2024-08-06','',1,NULL,NULL,43,'mn',10,67,'jo',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(80,'admin','2024-08-06','',1,NULL,NULL,43,'mn',10,67,'jo',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(81,'admin','2024-08-06','',1,NULL,NULL,867,'mknjb',10,2,'jio',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(82,'admin','2024-08-06','',1,NULL,NULL,12,'fe',10,7,'ojo',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(83,'admin','2024-08-06','',1,NULL,NULL,12,'fe',10,7,'ojo',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(84,'admin','2024-08-07','',1,NULL,NULL,32,'jijdei',10,43,'need till night',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(85,'admin','2024-08-07','',1,NULL,NULL,32,'jijdei',10,43,'need till night',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06',NULL),(86,'adminRequisition','2024-08-07','',1,NULL,NULL,78,'mkm',10,78,',lp',NULL,NULL,NULL,NULL,NULL,268,'adminRequisition','2024-08-06',NULL),(87,'adminRequisition','2024-08-07','',1,NULL,NULL,78,'mkm',10,78,'dede',NULL,NULL,NULL,NULL,NULL,268,'adminRequisition','2024-08-06',NULL),(88,'adminRequisition','2024-08-07','',1,NULL,NULL,32,'CUp',10,342,'fmeopf',NULL,NULL,NULL,NULL,NULL,269,'adminRequisition','2024-08-06',NULL),(89,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-08-06',NULL),(90,'adminRequisition','2024-08-07','',1,NULL,NULL,34348,'hdfej',10,65,'hdw',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL,NULL),(91,'adminRequisition','2024-08-07','',1,NULL,NULL,4343,'BB',10,67,'e3e',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL,NULL),(92,'adminRequisition','2024-08-07','',1,NULL,NULL,90,'Lp',10,3,'de',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL,NULL),(93,'adminRequisition','2024-08-07','',1,NULL,NULL,67,'jk',10,67,'j',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL,NULL),(94,'adminRequisition','2024-08-07','',1,NULL,NULL,67,'jk',10,67,'j',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL,NULL),(95,'adminRequisition','2024-08-07','',1,NULL,NULL,3728,'kok',10,79,'kdoe',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL,NULL),(96,'adminRequisition','2024-08-07','',1,NULL,NULL,243,'dwj',10,2,'dwkdj',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL,NULL),(97,'adminRequisition','2024-08-07','',1,NULL,NULL,6,'jijo',1,3,'need to be after noon',NULL,NULL,NULL,NULL,NULL,270,NULL,NULL,NULL),(98,'adminRequisition','2024-08-07','',1,NULL,NULL,6,'jijo',1,3,'need to be after noon',NULL,NULL,NULL,NULL,NULL,270,NULL,NULL,NULL),(99,'adminRequisition','2024-08-07','',1,NULL,NULL,767,'vuop',10,67,'need roight',NULL,NULL,NULL,NULL,NULL,271,NULL,NULL,NULL),(100,'adminRequisition','2024-08-07','',1,NULL,NULL,67,'lao',1,67,'udh',NULL,NULL,NULL,NULL,NULL,271,NULL,NULL,NULL),(101,'adminRequisition','2024-08-07','',1,NULL,NULL,67,'lao',1,67,'udh',NULL,NULL,NULL,NULL,NULL,271,NULL,NULL,NULL),(102,'rg1','2024-08-07','',1,NULL,NULL,34,'bvvb',1,3,'fgf',NULL,NULL,NULL,NULL,NULL,272,NULL,NULL,NULL),(103,'rg1','2024-08-07','',1,NULL,NULL,34,'bvvb',1,3,'fgf',NULL,NULL,NULL,NULL,NULL,272,NULL,NULL,NULL),(104,'adminRequisition','2024-08-07','',1,NULL,NULL,78,'kol',10,67,'oo',NULL,NULL,NULL,NULL,NULL,273,NULL,NULL,NULL),(105,'rg1','2024-08-07','',1,NULL,NULL,12,'jio',10,56,'jio',NULL,NULL,NULL,NULL,NULL,274,NULL,NULL,NULL),(106,'rg1','2024-08-07','',1,NULL,NULL,12,'jio',10,56,'jio',NULL,NULL,NULL,NULL,NULL,274,NULL,NULL,NULL),(107,'rg1','2024-08-07','',1,NULL,NULL,12,'jio',1,5,'sdsds',NULL,NULL,NULL,NULL,NULL,274,NULL,NULL,NULL),(108,'rg1','2024-08-07','',1,NULL,NULL,12,'jio',1,5,'sdsds',NULL,NULL,NULL,NULL,NULL,274,NULL,NULL,NULL),(109,'adminRequisition','2024-08-07','',1,NULL,NULL,43,'hio',1,67,'huu',NULL,NULL,NULL,NULL,NULL,273,NULL,NULL,NULL),(110,'adminRequisition','2024-08-07','',1,NULL,NULL,43,'hio',1,67,'huu',NULL,NULL,NULL,NULL,NULL,273,NULL,NULL,NULL),(111,'adminRequisition','2024-08-07','HR',1,NULL,NULL,67,'laptopn',1,21,'jhio',NULL,NULL,NULL,NULL,NULL,277,NULL,NULL,NULL),(112,'adminRequisition','2024-08-07','HR',1,NULL,NULL,67,'laptopn',1,21,'jhio',NULL,NULL,NULL,NULL,NULL,277,NULL,NULL,NULL),(113,'rg1','2024-08-07','',1,NULL,NULL,1,'ughg',10,2,'ughg',NULL,NULL,NULL,NULL,NULL,276,NULL,NULL,NULL),(114,'rg1','2024-08-07','HR',1,NULL,NULL,1,'ughg',1,2,'kjkj',NULL,NULL,NULL,NULL,NULL,276,NULL,NULL,NULL),(115,'rg1','2024-08-07','HR',1,NULL,NULL,1,'ughg',1,2,'kjkj',NULL,NULL,NULL,NULL,NULL,276,NULL,NULL,NULL),(116,'adminRequisition','2024-08-07','HR',1,NULL,NULL,32,'OPPO',1,67,'hioi',NULL,NULL,NULL,NULL,NULL,278,NULL,NULL,NULL),(117,'adminRequisition','2024-08-07','HR',1,NULL,NULL,32,'OPPO',1,67,'hioi',NULL,NULL,NULL,NULL,NULL,278,NULL,NULL,NULL),(118,'adminRequisition','2024-08-07','HR',1,NULL,NULL,56,'nk',1,67,'ji',NULL,NULL,NULL,NULL,NULL,280,NULL,NULL,NULL),(119,'adminRequisition','2024-08-07','HR',1,NULL,NULL,56,'nk',1,67,'ji',NULL,NULL,NULL,NULL,NULL,280,NULL,NULL,NULL),(120,'rg1','2024-08-07','HR',1,NULL,NULL,12,'mnkjk',1,1,'kjkjk',NULL,NULL,NULL,NULL,NULL,281,NULL,NULL,NULL),(121,'rg1','2024-08-07','HR',1,NULL,NULL,12,'mnkjk',1,1,'hjvghffdfcancel',NULL,NULL,NULL,'CANCEL',NULL,281,NULL,NULL,NULL),(122,'rg1','2024-08-07','HR',1,NULL,NULL,677,'jlk',1,76,'hi',NULL,NULL,NULL,NULL,NULL,283,NULL,NULL,NULL),(123,'rg1','2024-08-07','HR',1,NULL,NULL,677,'jlk',1,76,'hi',NULL,NULL,NULL,NULL,NULL,283,NULL,NULL,NULL),(124,'rg1','2024-08-07','HR',1,NULL,NULL,56,'hu',1,67,'jio',NULL,NULL,NULL,NULL,NULL,284,NULL,NULL,NULL),(125,'rg1','2024-08-07','HR',1,NULL,NULL,56,'hu',1,67,'jio',NULL,NULL,NULL,NULL,NULL,284,NULL,NULL,NULL),(126,'rg1','2024-08-07','hr',1,NULL,NULL,78,'joi',10,78,'joi',NULL,NULL,NULL,NULL,NULL,285,NULL,NULL,NULL),(127,'rg1','2024-08-07','hr',1,NULL,NULL,78,'joi',10,78,'joi',NULL,NULL,NULL,NULL,NULL,285,NULL,NULL,NULL),(128,'rg1','2024-08-07','hr',1,NULL,NULL,78,'joi',10,78,'joi',NULL,NULL,NULL,NULL,NULL,285,NULL,NULL,NULL),(129,'rg1','2024-08-07','HR',1,NULL,NULL,43,'hj',1,78,'jil',NULL,NULL,NULL,NULL,NULL,286,NULL,NULL,NULL),(130,'rg1','2024-08-07','HR',1,NULL,NULL,43,'hj',1,78,'jil',NULL,NULL,NULL,NULL,NULL,286,NULL,NULL,NULL),(131,'rg1','2024-08-07','hr',1,NULL,NULL,678,'kl',10,67,'jio',NULL,NULL,NULL,NULL,NULL,287,NULL,NULL,NULL),(132,'rg1','2024-08-07','HR',1,NULL,NULL,67,'jln',1,67,'kjkl',NULL,NULL,NULL,NULL,NULL,287,NULL,NULL,NULL),(133,'rg1','2024-08-07','HR',1,NULL,NULL,67,'jln',1,67,'kjkl',NULL,NULL,NULL,NULL,NULL,287,NULL,NULL,NULL),(134,'rg1','2024-08-07','HR',1,NULL,NULL,0,'fdoep',1,678,'kojp',NULL,NULL,NULL,NULL,NULL,288,NULL,NULL,NULL),(135,'rg1','2024-08-07','HR',1,NULL,NULL,0,'fdoep',1,678,'kojp',NULL,NULL,NULL,NULL,NULL,288,NULL,NULL,NULL),(136,'rg1','2024-08-07','HR',1,NULL,NULL,0,'ojio',1,67,'hk',NULL,NULL,NULL,NULL,NULL,289,NULL,NULL,NULL),(137,'rg1','2024-08-07','HR',1,NULL,NULL,0,'ojio',1,67,'hk',NULL,NULL,NULL,NULL,NULL,289,NULL,NULL,NULL),(138,'admin','2024-08-19','HR',1,NULL,NULL,0,'hjjj',1,7678,'need to be night',NULL,NULL,NULL,NULL,NULL,293,NULL,NULL,NULL),(139,'admin','2024-08-19','HR',1,NULL,NULL,0,'hjjj',1,7678,'need to be night',NULL,NULL,NULL,NULL,NULL,293,NULL,NULL,NULL),(140,'rg1','2024-08-19','HR',1,NULL,NULL,0,'ihu1',1,56,'need to be urgrn',NULL,NULL,NULL,NULL,NULL,294,NULL,NULL,NULL),(141,'rg1','2024-08-19','HR',1,NULL,NULL,0,'ihu1',1,56,'need to be urgrn',NULL,NULL,NULL,NULL,NULL,294,NULL,NULL,NULL),(142,'admin','2024-08-20','hr',1,NULL,NULL,87,'iuofhjio',10,90879,'r3r3',NULL,NULL,NULL,NULL,NULL,298,NULL,NULL,NULL),(143,'admin','2024-08-22','HR',1,NULL,NULL,0,'EL-HU-UH-UH-UH-UH-UH-UH-UH-UH',1,34,'dfmdl',NULL,NULL,NULL,NULL,NULL,307,NULL,NULL,NULL),(144,'admin','2024-08-22','HR',1,NULL,NULL,0,'EL-HU-UH-UH-UH-UH-UH-UH-UH-UH',1,34,'dfmdl',NULL,NULL,NULL,NULL,NULL,307,NULL,NULL,NULL),(145,'admin','2024-08-22','HR',1,NULL,NULL,0,'EL-2-1-FU-EA-WH-XY-25-3-RA',1,0,'MKMK',NULL,NULL,NULL,NULL,NULL,308,NULL,NULL,'Short_Description'),(146,'admin','2024-08-22','HR',1,NULL,NULL,0,'EL-2-1-FU-EA-WH-XY-25-3-RA',1,0,'MKMK',NULL,NULL,NULL,NULL,NULL,308,NULL,NULL,'Short_Description');
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
) ENGINE=InnoDB AUTO_INCREMENT=316 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requisition_table_header`
--

LOCK TABLES `requisition_table_header` WRITE;
/*!40000 ALTER TABLE `requisition_table_header` DISABLE KEYS */;
INSERT INTO `requisition_table_header` VALUES (1,'PENDING','user_1','2024-08-02','user1','2024-08-02','inProcess'),(2,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(3,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(4,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(5,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(6,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(7,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(8,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(9,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(10,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(11,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(12,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(13,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(14,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(15,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(16,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(17,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(18,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(19,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(20,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(21,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(22,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(23,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(24,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(25,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(26,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(27,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(28,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(29,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(30,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(31,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(32,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(33,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(34,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(35,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(36,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(37,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(38,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(39,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(40,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(41,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(42,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(43,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(44,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(45,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(46,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(47,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(48,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(49,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(50,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(51,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(52,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(53,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(54,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(55,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(56,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(57,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(58,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(59,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(60,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(61,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(62,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(63,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(64,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(65,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(66,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(67,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(68,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(69,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(70,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(71,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(72,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(73,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(74,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(75,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(76,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(77,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(78,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(79,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(80,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(81,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(82,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(83,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(84,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(85,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(86,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(87,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(88,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(89,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(90,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(91,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(92,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(93,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(94,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(95,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(96,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(97,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(98,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(99,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(100,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(101,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(102,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(103,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(104,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(105,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(106,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(107,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(108,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(109,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(110,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(111,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(112,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(113,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(114,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(115,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(116,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(117,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(118,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(119,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(120,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(121,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(122,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(123,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(124,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(125,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(126,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(127,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(128,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(129,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(130,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(131,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(132,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(133,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(134,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(135,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(136,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(137,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(138,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(139,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(140,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(141,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(142,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(143,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(144,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(145,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(146,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(147,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(148,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(149,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(150,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(151,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(152,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(153,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(154,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(155,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(156,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(157,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(158,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(159,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(160,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(161,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(162,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(163,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(164,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(165,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(166,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(167,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(168,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(169,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(170,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(171,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(172,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(173,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(174,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(175,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(176,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(177,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(178,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(179,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(180,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(181,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(182,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(183,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(184,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(185,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(186,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(187,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(188,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(189,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(190,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(191,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(192,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(193,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(194,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(195,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(196,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(197,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(198,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(199,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(200,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(201,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(202,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(203,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(204,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(205,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(206,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(207,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(208,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(209,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(210,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(211,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(212,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(213,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(214,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(215,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(216,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(217,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(218,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(219,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(220,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(221,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(222,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(223,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(224,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(225,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(226,'PENDING','','2024-08-05','user1','2024-08-05',NULL),(227,'PENDING','','2024-08-05','user1','2024-08-05',NULL),(228,'PENDING','','2024-08-05','user1','2024-08-05',NULL),(229,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(230,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(231,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(232,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(233,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(234,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(235,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(236,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(237,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(238,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(239,'PENDING','','2024-08-06','user1','2024-08-06',NULL),(240,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(241,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(242,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(243,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(244,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(245,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(246,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(247,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(248,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(249,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(250,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(251,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(252,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(253,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(254,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(255,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(256,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(257,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(258,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(259,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(260,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(261,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(262,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(263,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(264,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(265,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(266,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07',NULL),(267,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07',NULL),(268,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07',NULL),(269,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(270,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(271,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(272,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(273,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(274,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(275,'PENDING','rg1','2024-08-07','user1','2024-08-07',NULL),(276,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(277,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(278,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(279,'PENDING','rg1','2024-08-07','user1','2024-08-07','draft'),(280,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(281,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(282,'PENDING','rg1','2024-08-07','user1','2024-08-07',NULL),(283,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(284,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(285,'PENDING','rg1','2024-08-07','user1','2024-08-07',NULL),(286,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(287,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(288,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(289,'PENDING','rg1','2024-08-07','user1','2024-08-07','inProcess'),(290,'PENDING','rg1','2024-08-07','user1','2024-08-07',NULL),(291,'PENDING','admin','2024-08-12','user1','2024-08-12',NULL),(292,'PENDING','admin','2024-08-18','user1','2024-08-18',NULL),(293,'PENDING','admin','2024-08-19','user1','2024-08-19','inProcess'),(294,'PENDING','rg1','2024-08-19','user1','2024-08-19','inProcess'),(295,'PENDING','rg1','2024-08-19','user1','2024-08-19',NULL),(296,'PENDING','admin','2024-08-20','user1','2024-08-20',NULL),(297,'PENDING','admin','2024-08-20','user1','2024-08-20',NULL),(298,'PENDING','admin','2024-08-20','user1','2024-08-20',NULL),(299,'PENDING','rg1','2024-08-21','user1','2024-08-21',NULL),(300,'PENDING','admin','2024-08-21','user1','2024-08-21',NULL),(301,'PENDING','admin','2024-08-21','user1','2024-08-21',NULL),(302,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(303,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(304,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(305,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(306,'PENDING','admin','2024-08-22','user1','2024-08-22',NULL),(307,'PENDING','admin','2024-08-22','user1','2024-08-22','inProcess'),(308,'PENDING','admin','2024-08-22','user1','2024-08-22','inProcess'),(309,'PENDING','admin','2024-08-23','user1','2024-08-23',NULL),(310,'PENDING','admin','2024-08-23','user1','2024-08-23',NULL),(311,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL),(312,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL),(313,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL),(314,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL),(315,'PENDING','admin','2024-08-24','user1','2024-08-24',NULL);
/*!40000 ALTER TABLE `requisition_table_header` ENABLE KEYS */;
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
INSERT INTO `sale_order_table` VALUES (1,'manish','delhi',4783,'manish@gmil.com','12','12','12','120','yes','n','2022-11-30','yes','2026-03-29','2024-08-01','SYSTEM','SYSTEM','2024-01-02','last monday','2024-02-03','followup','2025-01-02','pending','yes','2024-03-01','goods','2024-01-01','pending','2025-02-02','2024-02-01','dmko','2024-01-01','2024-02-02','2025-02-02','2024-01-03','2024-01-01','2024-01-01','remarks','system','2024-08-01','system','2024-08-01'),(2,'manish','delhi',4783,'manish@gmil.com','12','12','12','120','yes','n','2022-11-30','yes','2026-03-29','2024-08-01','SYSTEM','SYSTEM','2024-01-02','last monday','2024-02-03','followup','2025-01-02','pending','yes','2024-03-01','goods','2024-01-01','pending','2025-02-02','2024-02-01','dmko','2024-01-01','2024-02-02','2025-02-02','2024-01-03','2024-01-01','2024-01-01','remarks','system','2024-08-01','system','2024-08-01'),(3,'john ','221street california',948349,'john@gmail.com','wood','round','large','10ft','glossy','yes','2024-01-02','yes','2024-01-01','2024-08-01','SYSTEM','SYSTEM','2025-03-03','received','2025-03-02','followup','2025-03-03','pending','yes','2025-02-04','furniture','2024-03-03','YES','2026-03-03','2026-03-03','invoice','2025-03-03','2025-02-04','2025-01-01','2024-01-01','2024-02-01','2025-01-06','remarks','system','2024-08-01','system','2024-08-01'),(4,'sagar','kailashpuri',748378,'sagar@gmail.com','wood','sharp','small','20ft','glossy','yes','2024-02-02','no','2024-08-01','2024-08-01','SYSTEM','SYSTEM','2024-08-01','last monday','2024-08-01','no follow up','2026-03-02','Success','noi','2025-03-02','utencil','2025-03-02','yes','2026-02-01','2024-02-01','invoive001','2024-08-01','2024-08-01','2024-08-01','2024-08-01','2024-08-01','2024-08-01','work pending','system','2024-08-01','system','2024-08-01');
/*!40000 ALTER TABLE `sale_order_table` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_category`
--

LOCK TABLES `sub_category` WRITE;
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
INSERT INTO `sub_category` VALUES (1,1,'Bulb'),(2,1,'Holder'),(3,1,'Wire'),(4,6,'Urn'),(5,7,'base'),(6,6,'Pipe'),(7,6,'Shade'),(8,6,'Samadhan'),(9,6,'Balls'),(10,8,'Staionery'),(11,9,'Shades'),(12,10,'Acrylic_diffuser'),(13,11,'Crystal'),(14,12,'Bubble wrap'),(15,12,'Shrink wrap'),(16,12,'Corrugated boxes'),(17,12,'Wooden crating'),(18,12,'Tapes');
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_details`
--

DROP TABLE IF EXISTS `supplier_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supplier_details` (
  `supplier_code` int NOT NULL,
  `supplier_site` varchar(45) DEFAULT NULL,
  `supplier_type` varchar(45) DEFAULT NULL,
  `supplier_sub_type` varchar(45) DEFAULT NULL,
  `supplier_address` varchar(45) DEFAULT NULL,
  `GSTIN number` varchar(45) DEFAULT NULL,
  `msme_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`supplier_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_details`
--

LOCK TABLES `supplier_details` WRITE;
/*!40000 ALTER TABLE `supplier_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_details` ENABLE KEYS */;
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
  `updataed_by` varchar(50) NOT NULL,
  `createdBy` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  `mobile_number` bigint NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `person_id` int NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_management`
--

LOCK TABLES `user_management` WRITE;
/*!40000 ALTER TABLE `user_management` DISABLE KEYS */;
INSERT INTO `user_management` VALUES (1,'rg1','system','syetem','2024-07-24','2024-08-20',7382783,'example.com',2,'rg1@123','2000-12-02','2000-12-12','requisitionGen'),(2,'rg2','admin','admin','2024-07-04','2024-08-06',84934809,'example@.com',1,'rg2@123','2000-12-12','2004-12-12','storeIssuer'),(3,'rg3','system','system','2024-07-24','2024-07-24',938493,'admin@admin.com',1,'rg3@123','2024-07-24','2024-12-12','manager'),(4,'admin_read','system','system','2024-07-24','2024-07-24',938493,'admin_read@admin.com',1,'admin@123','2024-07-24','2024-12-12','readOnly'),(5,'admin_write','system','system','2024-07-24','2024-07-24',938493,'admin_write@admin.com',1,'admin@123','2024-07-24','2024-12-12','writeOnly'),(6,'admin_modify','system','system','2024-07-24','2024-07-26',938493,'admin_modify@admin.com',1,'admin@1234','2024-07-24','2024-12-12','modify'),(7,'user_admin','system','system','2024-08-09','2024-08-09',798788,'admin@example.com',3,'admin@123','2024-08-09','2024-08-09','normal'),(8,'rg4',' sysgtem','system','2024-07-07','2024-07-29',45784,'admin1@admin.com',12,'rg4@123','2024-12-31','2024-12-12','requisitionGen'),(9,'admin_9',' sysgtem','system','2024-07-07','2024-07-29',78,'78',1,'admin@123','2024-01-01','2024-07-07','normal'),(10,'admin10',' sysgtem','system','2024-07-07','2024-07-29',788,'exampk@dw.co',12,'admin@123','2024-11-02','2024-07-07','admn'),(11,'admin11',' sysgtem','system','2024-07-07','2024-07-29',898,'admin@13',56,'124','2022-11-01','2024-07-07','modify'),(12,'admin_12',' sysgtem','system','2024-07-07','2024-07-29',73289,'admin1@admin.com',32,'admin@1234','2024-01-01','2024-07-07','admin'),(13,'admin13',' sysgtem','system','2024-07-07','2024-07-29',73289,'admin1@admin.com',12,'admin@123','2024-12-01','2024-07-07','normal'),(14,'user14',' sysgtem','system','2024-07-07','2024-07-29',73289,'78',2,'admin@123','2025-10-02','2000-12-12','normal_user'),(15,'usre15',' sysgtem','system','2024-07-07','2024-07-29',45784,'78',12,'admin@123','2026-01-02','2024-12-12','normal_user'),(16,'admin',' sysgtem','system','2024-07-07','2024-07-29',898,'admin@13',32,'admin@123','2024-01-01','2000-12-12','admin'),(17,'admin17',' sysgtem','system','2024-07-07','2024-07-29',45784,'78',12,'ad','2025-02-03','2000-12-12','normal'),(18,'admin18',' sysgtem','system','2024-07-29','2024-07-29',1234,'example@gmail.com',21,'admin@12','2024-02-01','2024-01-01','normal'),(19,'admin19',' system','system','2024-07-29','2024-07-29',1233,'exampk@dw.co',12,'admin@1234','2025-01-01','2025-02-01','normal'),(20,'adminRequisition','system','system','2024-08-03','2024-08-03',74349,'adminRequisition@gmail.com',1,'admin@123','2025-08-03','2025-08-03','admin'),(21,'storeManager','system','system','2024-08-03','2024-08-03',74349,'storeManager@gmail.com',23,'admin@123','2025-08-03','2025-08-03','storemanager');
/*!40000 ALTER TABLE `user_management` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-24 19:43:16
