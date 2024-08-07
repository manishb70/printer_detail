-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: for_office
-- ------------------------------------------------------
-- Server version	9.0.0

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
-- Table structure for table `grn_goods_receipt`
--

DROP TABLE IF EXISTS `grn_goods_receipt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grn_goods_receipt` (
  `inventory_id` int NOT NULL,
  `item_id` bigint DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `item_discription` varchar(45) DEFAULT NULL,
  `warehouse_location` varchar(45) DEFAULT NULL,
  `warehouse_code` varchar(45) DEFAULT NULL,
  `receiving_item` varchar(45) DEFAULT NULL,
  `purchase_order_id` varchar(45) DEFAULT NULL,
  `purchase_order_date` date DEFAULT NULL,
  `purchase_order_line` varchar(45) DEFAULT NULL,
  `received_quantity` bigint DEFAULT NULL,
  `recevied_date` date DEFAULT NULL,
  `receiving_time` varchar(45) DEFAULT NULL,
  `finished` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `dimension` varchar(45) DEFAULT NULL,
  `box_no` bigint DEFAULT NULL,
  `box_detail` varchar(45) DEFAULT NULL,
  `checked_by` varchar(45) DEFAULT NULL,
  `approved` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `serial_number_to` bigint DEFAULT NULL,
  `serial_number_from` bigint DEFAULT NULL,
  `vendor_name` varchar(45) DEFAULT NULL,
  `mode_of_transport` varchar(45) DEFAULT NULL,
  `vehical_detail` varchar(45) DEFAULT NULL,
  `invoice_num` bigint DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `amount` bigint DEFAULT NULL,
  PRIMARY KEY (`inventory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grn_goods_receipt`
--

LOCK TABLES `grn_goods_receipt` WRITE;
/*!40000 ALTER TABLE `grn_goods_receipt` DISABLE KEYS */;
/*!40000 ALTER TABLE `grn_goods_receipt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemmaster`
--

DROP TABLE IF EXISTS `itemmaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itemmaster` (
  `S_No` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(50) NOT NULL,
  `Item_Category` varchar(100) DEFAULT NULL,
  `Item_Name` varchar(255) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `Item_Type` varchar(100) DEFAULT NULL,
  `Components` varchar(50) DEFAULT NULL,
  `Quantity` int DEFAULT NULL,
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
  `Height` decimal(10,2) DEFAULT NULL,
  `Length` decimal(10,2) DEFAULT NULL,
  `Breadth` decimal(10,2) DEFAULT NULL,
  `Upper_Dia` decimal(10,2) DEFAULT NULL,
  `Bottom_Dia` decimal(10,2) DEFAULT NULL,
  `Centre_Hole_dia` decimal(10,2) DEFAULT NULL,
  `Size` varchar(50) DEFAULT NULL,
  `watt` decimal(10,2) DEFAULT NULL,
  `Shape` varchar(100) DEFAULT NULL,
  `Side_Hole_dia` decimal(10,2) DEFAULT NULL,
  `Top_hole_dia` decimal(10,2) DEFAULT NULL,
  `No_of_ply` int DEFAULT NULL,
  `Style` varchar(100) DEFAULT NULL,
  `Thickness` decimal(10,2) DEFAULT NULL,
  `Weight` decimal(10,2) DEFAULT NULL,
  `Depth` decimal(10,2) DEFAULT NULL,
  `Bottom_hole_dia` decimal(10,2) DEFAULT NULL,
  `Bottom_hole` varchar(100) DEFAULT NULL,
  `Core` varchar(100) DEFAULT NULL,
  `Inner_Outer_thread` varchar(50) DEFAULT NULL,
  `Upper_thread` varchar(50) DEFAULT NULL,
  `Lower_thread` varchar(50) DEFAULT NULL,
  `Thread_length` decimal(10,2) DEFAULT NULL,
  `Indian_Imported` varchar(50) DEFAULT NULL,
  `In_built_switch` varchar(50) DEFAULT NULL,
  `Wire_type` varchar(100) DEFAULT NULL,
  `vendor` varchar(100) DEFAULT NULL,
  `attribute1` varchar(45) DEFAULT NULL,
  `attribute2` varchar(45) DEFAULT NULL,
  `attribute3` varchar(100) DEFAULT NULL,
  `itemmastercol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`S_No`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemmaster`
--

LOCK TABLES `itemmaster` WRITE;
/*!40000 ALTER TABLE `itemmaster` DISABLE KEYS */;
INSERT INTO `itemmaster` VALUES (1,'abc','electric','bulb','electric','electric','1',1,'desret sand','round','glassy','no','1','plastic','1','surya','yellow','white','ys',10.00,20.00,40.00,12.30,20.40,43.40,'large',200.00,'rounde',29.12,5.00,12,'sharp',1.50,200.00,12.00,10.50,'10','plastic','ys','upper thread ','lower thred',10.00,'yes ','no','fiber','east delhi vendore',NULL,NULL,NULL,NULL),(2,'itemabc2','utencile','fry pan ','utencil','utencil','2',10,'iron','round','non stick',NULL,NULL,NULL,NULL,'example brand',NULL,NULL,NULL,5.00,12.00,25.00,25.05,12.24,4.30,'medium',NULL,'round',NULL,NULL,NULL,'round',2.00,400.00,32.00,32.00,'23','non stick',NULL,NULL,NULL,NULL,'no',NULL,NULL,'east delhi vendor',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `itemmaster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemmastercategory`
--

DROP TABLE IF EXISTS `itemmastercategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itemmastercategory` (
  `S.no` int NOT NULL,
  `itemMasterCategorycol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`S.no`),
  UNIQUE KEY `itemMasterCategorycol_UNIQUE` (`itemMasterCategorycol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemmastercategory`
--

LOCK TABLES `itemmastercategory` WRITE;
/*!40000 ALTER TABLE `itemmastercategory` DISABLE KEYS */;
/*!40000 ALTER TABLE `itemmastercategory` ENABLE KEYS */;
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
  PRIMARY KEY (`S_no`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requisition_table`
--

LOCK TABLES `requisition_table` WRITE;
/*!40000 ALTER TABLE `requisition_table` DISABLE KEYS */;
INSERT INTO `requisition_table` VALUES (1,'system','2024-08-02','HR',1,'IR',1,1,'box',1,10,'cancledsdwdw',10000,'2024-08-02','','PENDING','cancledsdwdw',1,'system','2024-08-06'),(2,'system','2024-08-02','HR',1,'internal store',2,2,'bulb',2,20,'urgenttttttttttttttttttttttt',200,'2024-08-02','store keeper','CANCEL','',1,'system','2024-08-06'),(3,'sytem','2024-08-02','HR',1,'IR',3,2,'bulb',2,10,'need',999,'2024-08-02','store','CANCEL','need',1,'system','2024-08-06'),(4,'System','2024-08-02','SCH',1,'',198,NULL,'BULB',1,1,'data are canceled',99999,'2024-08-21','','PENDING','data',NULL,'system','2024-08-06'),(5,'System','2024-08-02','SCH',1,NULL,199,NULL,'BULB',1,1,'',NULL,NULL,NULL,NULL,NULL,NULL,'system','2024-08-06'),(6,'System','2024-08-02','SCH',1,NULL,200,NULL,'BULB',1,1,'',NULL,NULL,NULL,NULL,NULL,NULL,'system','2024-08-06'),(7,'System','2024-08-02','SCH',1,NULL,201,NULL,'BULB',1,1,'',NULL,NULL,NULL,NULL,NULL,NULL,'system','2024-08-06'),(8,'System','2024-08-02','SCH',1,NULL,202,NULL,'BULB',1,1,'',NULL,NULL,NULL,NULL,NULL,NULL,'system','2024-08-06'),(9,'System','2024-08-02','SCH',1,NULL,203,NULL,'BULB',1,1,'',NULL,NULL,NULL,NULL,NULL,NULL,'system','2024-08-06'),(10,'adminRequisition','2024-08-03','HR',1,NULL,206,NULL,'cable',1,10,'need to be night',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(11,'adminRequisition','2024-08-03','hr',1,NULL,207,NULL,'fibre cable',1,21,'need',NULL,NULL,NULL,'',NULL,NULL,'adminRequisition','2024-08-06'),(12,'adminRequisition','2024-08-03','hr',1,NULL,207,NULL,'fibre cable',1,21,'need',NULL,NULL,NULL,'',NULL,NULL,'adminRequisition','2024-08-06'),(13,'adminRequisition','2024-08-03','SCH',1,NULL,207,NULL,'cup',1,22,'need',NULL,NULL,NULL,'',NULL,NULL,'adminRequisition','2024-08-06'),(14,'adminRequisition','2024-08-03','IT',1,NULL,207,4,'copper cable',1,100,'need cooper cable',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(15,'adminRequisition','2024-08-03','IT',1,NULL,207,4,'copper cable',1,100,'need cooper cable',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(16,'adminRequisition','2024-08-03','HR',1,NULL,207,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(17,'adminRequisition','2024-08-03','HR',1,NULL,212,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(18,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(19,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(20,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(21,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(22,'adminRequisition','2024-08-03','HR',1,NULL,213,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(23,'adminRequisition','2024-08-03','HR',1,NULL,218,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(24,'adminRequisition','2024-08-03','HR',1,NULL,1,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,NULL,'adminRequisition','2024-08-06'),(25,'adminRequisition','2024-08-03','HR',1,NULL,NULL,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,'PENDING',NULL,1,'adminRequisition','2024-08-06'),(26,'adminRequisition','2024-08-03','HR',1,NULL,NULL,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,213,'adminRequisition','2024-08-06'),(27,'adminRequisition','2024-08-03','HR',1,NULL,NULL,6,'kgnl',1,21,'dfmdl',NULL,NULL,NULL,NULL,NULL,213,'adminRequisition','2024-08-06'),(28,'adminRequisition','2024-08-03','IT',1,NULL,NULL,88,'Ba',1,100,'need urget',NULL,NULL,NULL,NULL,NULL,213,'adminRequisition','2024-08-06'),(29,'adminRequisition','2024-08-03','department',1,NULL,NULL,99,'copy',1,10,'cop',NULL,NULL,NULL,'CANCEL',NULL,213,'adminRequisition','2024-08-06'),(30,'adminRequisition','2024-08-05','HR',1,NULL,NULL,9,'cup',1,10,'de',NULL,NULL,NULL,NULL,NULL,234,'adminRequisition','2024-08-06'),(31,'adminRequisition','2024-08-05','NEW DT',1,NULL,NULL,9,'NUSD`',1,1278,'kdk',NULL,NULL,NULL,NULL,NULL,235,'adminRequisition','2024-08-06'),(32,'adminRequisition','2024-08-06','',1,NULL,NULL,12,'cable',1,29,'need get',NULL,NULL,NULL,NULL,NULL,236,'adminRequisition','2024-08-06'),(33,'admin','2024-08-06','',1,NULL,NULL,2,'bud',1,78,'need',NULL,NULL,NULL,NULL,NULL,237,'admin','2024-08-06'),(34,'admin','2024-08-06','',1,NULL,NULL,32,'fmke',1,38,'need',NULL,NULL,NULL,NULL,NULL,238,'admin','2024-08-06'),(35,'admin','2024-08-06','',1,NULL,NULL,43,'kdfoef',1,43,'ifjeiofjo',NULL,NULL,NULL,NULL,NULL,243,'admin','2024-08-06'),(36,'admin','2024-08-06','',1,NULL,NULL,8439,'jido',1,9789,'89879',NULL,NULL,NULL,NULL,NULL,244,'admin','2024-08-06'),(37,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(38,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(39,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(40,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(41,'admin','2024-08-06','',1,NULL,NULL,6767,'klhkj',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(42,'admin','2024-08-06','',1,NULL,NULL,6767,'new item 14',789,6767,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(43,'admin','2024-08-06','',1,NULL,NULL,767,'new name',10,78,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(44,'admin','2024-08-06','',1,NULL,NULL,767,'new name',10,78,'need till night',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(45,'admin','2024-08-06','',1,NULL,NULL,432,'dmwk',10,32,'rf4ff',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(46,'admin','2024-08-06','',1,NULL,NULL,432,'dmwk',10,32,'rf4ff',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(47,'admin','2024-08-06','',1,NULL,NULL,432,'dmwk',10,32,'rf4ff',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(48,'admin','2024-08-06','',1,NULL,NULL,432,'dmwk',10,32,'rf4ff',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(49,'admin','2024-08-06','',1,NULL,NULL,2,'u89j',10,8,'u9',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(50,'admin','2024-08-06','',1,NULL,NULL,2,'',10,1,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(51,'admin','2024-08-06','',1,NULL,NULL,2,'',10,1,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(52,'admin','2024-08-06','',1,NULL,NULL,2,'hfdioef',10,1,'fefemfor',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(53,'admin','2024-08-06','',1,NULL,NULL,2,'jijij',10,7,'ikjo',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(54,'admin','2024-08-06','',1,NULL,NULL,2,'jijij',10,7,'ikjo',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(55,'admin','2024-08-06','',1,NULL,NULL,67,'jkjk',10,67,'i',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(56,'admin','2024-08-06','',1,NULL,NULL,67,'jkjk',10,67,'i',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(57,'admin','2024-08-06','',1,NULL,NULL,343,'hiuh',10,878,'nk',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(58,'admin','2024-08-06','',1,NULL,NULL,343,'hiuh',10,878,'nk',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(59,'admin','2024-08-06','',1,NULL,NULL,898,'huhu',10,6,'de',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(60,'admin','2024-08-06','',1,NULL,NULL,898,'huhu',10,6,'de',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(61,'admin','2024-08-06','',1,NULL,NULL,898,'huhu',10,6,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(62,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,7,'cd',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(63,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,7,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(64,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,7,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(65,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,7,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(66,'admin','2024-08-06','',1,NULL,NULL,878,'kjkj',10,6,'',NULL,NULL,NULL,NULL,NULL,1,'admin','2024-08-06'),(67,'admin','2024-08-06','',1,NULL,NULL,67,'kk',10,7,'hihi',NULL,NULL,NULL,NULL,NULL,7,'admin','2024-08-06'),(68,'admin','2024-08-06','',1,NULL,NULL,67,'kk',10,7,'hihi',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(69,'admin','2024-08-06','',1,NULL,NULL,67,'kk',10,7,'hihi',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(70,'admin','2024-08-06','',1,NULL,NULL,67,'kk',10,7,'hihi',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(71,'admin','2024-08-06','',1,NULL,NULL,67,'knk',10,67,'nk',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(72,'admin','2024-08-06','',1,NULL,NULL,67,'mk',10,78,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(73,'admin','2024-08-06','',1,NULL,NULL,67,'mk',10,78,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(74,'admin','2024-08-06','',1,NULL,NULL,67,'mk',10,78,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(75,'admin','2024-08-06','',1,NULL,NULL,48,'dkop',10,67,'mjijio',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(76,'admin','2024-08-06','',1,NULL,NULL,48,'dkop',10,67,'mjijio',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(77,'admin','2024-08-06','',1,NULL,NULL,54,'jio',10,6,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(78,'admin','2024-08-06','',1,NULL,NULL,54,'jio',10,6,'ji',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(79,'admin','2024-08-06','',1,NULL,NULL,43,'mn',10,67,'jo',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(80,'admin','2024-08-06','',1,NULL,NULL,43,'mn',10,67,'jo',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(81,'admin','2024-08-06','',1,NULL,NULL,867,'mknjb',10,2,'jio',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(82,'admin','2024-08-06','',1,NULL,NULL,12,'fe',10,7,'ojo',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(83,'admin','2024-08-06','',1,NULL,NULL,12,'fe',10,7,'ojo',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(84,'admin','2024-08-07','',1,NULL,NULL,32,'jijdei',10,43,'need till night',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(85,'admin','2024-08-07','',1,NULL,NULL,32,'jijdei',10,43,'need till night',NULL,NULL,NULL,NULL,NULL,265,'admin','2024-08-06'),(86,'adminRequisition','2024-08-07','',1,NULL,NULL,78,'mkm',10,78,',lp',NULL,NULL,NULL,NULL,NULL,268,'adminRequisition','2024-08-06'),(87,'adminRequisition','2024-08-07','',1,NULL,NULL,78,'mkm',10,78,'dede',NULL,NULL,NULL,NULL,NULL,268,'adminRequisition','2024-08-06'),(88,'adminRequisition','2024-08-07','',1,NULL,NULL,32,'CUp',10,342,'fmeopf',NULL,NULL,NULL,NULL,NULL,269,'adminRequisition','2024-08-06'),(89,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-08-06'),(90,'adminRequisition','2024-08-07','',1,NULL,NULL,34348,'hdfej',10,65,'hdw',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL),(91,'adminRequisition','2024-08-07','',1,NULL,NULL,4343,'BB',10,67,'e3e',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL),(92,'adminRequisition','2024-08-07','',1,NULL,NULL,90,'Lp',10,3,'de',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL),(93,'adminRequisition','2024-08-07','',1,NULL,NULL,67,'jk',10,67,'j',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL),(94,'adminRequisition','2024-08-07','',1,NULL,NULL,67,'jk',10,67,'j',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL),(95,'adminRequisition','2024-08-07','',1,NULL,NULL,3728,'kok',10,79,'kdoe',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL),(96,'adminRequisition','2024-08-07','',1,NULL,NULL,243,'dwj',10,2,'dwkdj',NULL,NULL,NULL,NULL,NULL,269,NULL,NULL),(97,'adminRequisition','2024-08-07','',1,NULL,NULL,6,'jijo',1,3,'need to be after noon',NULL,NULL,NULL,NULL,NULL,270,NULL,NULL),(98,'adminRequisition','2024-08-07','',1,NULL,NULL,6,'jijo',1,3,'need to be after noon',NULL,NULL,NULL,NULL,NULL,270,NULL,NULL),(99,'adminRequisition','2024-08-07','',1,NULL,NULL,767,'vuop',10,67,'need roight',NULL,NULL,NULL,NULL,NULL,271,NULL,NULL),(100,'adminRequisition','2024-08-07','',1,NULL,NULL,67,'lao',1,67,'udh',NULL,NULL,NULL,NULL,NULL,271,NULL,NULL),(101,'adminRequisition','2024-08-07','',1,NULL,NULL,67,'lao',1,67,'udh',NULL,NULL,NULL,NULL,NULL,271,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=272 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requisition_table_header`
--

LOCK TABLES `requisition_table_header` WRITE;
/*!40000 ALTER TABLE `requisition_table_header` DISABLE KEYS */;
INSERT INTO `requisition_table_header` VALUES (1,'PENDING','user_1','2024-08-02','user1','2024-08-02','inProcess'),(2,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(3,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(4,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(5,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(6,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(7,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(8,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(9,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(10,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(11,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(12,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(13,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(14,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(15,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(16,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(17,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(18,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(19,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(20,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(21,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(22,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(23,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(24,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(25,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(26,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(27,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(28,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(29,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(30,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(31,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(32,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(33,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(34,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(35,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(36,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(37,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(38,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(39,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(40,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(41,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(42,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(43,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(44,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(45,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(46,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(47,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(48,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(49,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(50,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(51,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(52,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(53,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(54,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(55,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(56,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(57,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(58,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(59,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(60,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(61,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(62,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(63,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(64,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(65,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(66,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(67,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(68,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(69,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(70,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(71,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(72,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(73,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(74,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(75,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(76,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(77,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(78,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(79,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(80,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(81,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(82,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(83,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(84,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(85,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(86,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(87,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(88,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(89,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(90,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(91,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(92,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(93,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(94,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(95,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(96,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(97,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(98,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(99,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(100,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(101,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(102,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(103,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(104,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(105,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(106,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(107,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(108,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(109,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(110,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(111,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(112,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(113,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(114,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(115,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(116,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(117,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(118,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(119,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(120,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(121,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(122,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(123,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(124,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(125,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(126,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(127,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(128,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(129,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(130,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(131,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(132,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(133,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(134,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(135,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(136,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(137,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(138,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(139,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(140,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(141,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(142,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(143,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(144,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(145,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(146,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(147,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(148,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(149,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(150,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(151,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(152,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(153,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(154,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(155,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(156,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(157,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(158,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(159,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(160,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(161,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(162,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(163,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(164,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(165,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(166,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(167,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(168,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(169,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(170,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(171,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(172,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(173,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(174,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(175,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(176,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(177,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(178,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(179,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(180,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(181,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(182,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(183,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(184,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(185,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(186,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(187,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(188,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(189,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(190,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(191,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(192,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(193,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(194,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(195,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(196,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(197,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(198,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(199,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(200,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(201,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(202,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(203,'PENDING','user_1','2024-08-02','user1','2024-08-02',NULL),(204,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(205,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(206,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(207,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(208,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(209,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(210,'PENDING','user_1','2024-08-03','user1','2024-08-03',NULL),(211,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(212,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(213,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(214,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(215,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(216,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(217,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(218,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(219,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(220,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(221,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(222,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(223,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(224,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(225,'PENDING','adminRequisition','2024-08-03','user1','2024-08-03',NULL),(226,'PENDING','','2024-08-05','user1','2024-08-05',NULL),(227,'PENDING','','2024-08-05','user1','2024-08-05',NULL),(228,'PENDING','','2024-08-05','user1','2024-08-05',NULL),(229,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(230,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(231,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(232,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(233,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(234,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(235,'PENDING','adminRequisition','2024-08-05','user1','2024-08-05',NULL),(236,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(237,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(238,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(239,'PENDING','','2024-08-06','user1','2024-08-06',NULL),(240,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(241,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(242,'PENDING','adminRequisition','2024-08-06','user1','2024-08-06',NULL),(243,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(244,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(245,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(246,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(247,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(248,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(249,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(250,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(251,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(252,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(253,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(254,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(255,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(256,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(257,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(258,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(259,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(260,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(261,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(262,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(263,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(264,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(265,'PENDING','admin','2024-08-06','user1','2024-08-06',NULL),(266,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07',NULL),(267,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07',NULL),(268,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07',NULL),(269,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(270,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess'),(271,'PENDING','adminRequisition','2024-08-07','user1','2024-08-07','inProcess');
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
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_management`
--

LOCK TABLES `user_management` WRITE;
/*!40000 ALTER TABLE `user_management` DISABLE KEYS */;
INSERT INTO `user_management` VALUES (1,'nomal_user','system','syetem','2024-07-24','2024-08-06',7382783,'example.com',2,'isiq','2000-12-02','2000-12-12','normal'),(2,'user22222','admin','admin','2024-07-04','2024-08-06',84934809,'example@.com',1,'admin@123','2000-12-12','2004-12-12','admin'),(3,'admin','system','system','2024-07-24','2024-07-24',938493,'admin@admin.com',1,'admin@123','2024-07-24','2024-12-12','admin'),(4,'admin_read','system','system','2024-07-24','2024-07-24',938493,'admin_read@admin.com',1,'admin@123','2024-07-24','2024-12-12','readOnly'),(5,'admin_write','system','system','2024-07-24','2024-07-24',938493,'admin_write@admin.com',1,'admin@123','2024-07-24','2024-12-12','writeOnly'),(6,'admin_modify','system','system','2024-07-24','2024-07-26',938493,'admin_modify@admin.com',1,'admin@1234','2024-07-24','2024-12-12','modify'),(7,'user_admin','system','system','2024-08-09','2024-08-09',798788,'admin@example.com',3,'admin@123','2024-08-09','2024-08-09','normal'),(8,'user_8',' sysgtem','system','2024-07-07','2024-07-29',45784,'admin1@admin.com',12,'admin@123','2024-12-31','2024-12-12','normal'),(9,'admin_9',' sysgtem','system','2024-07-07','2024-07-29',78,'78',1,'admin@123','2024-01-01','2024-07-07','normal'),(10,'admin10',' sysgtem','system','2024-07-07','2024-07-29',788,'exampk@dw.co',12,'admin@123','2024-11-02','2024-07-07','admn'),(11,'admin11',' sysgtem','system','2024-07-07','2024-07-29',898,'admin@13',56,'124','2022-11-01','2024-07-07','modify'),(12,'admin_12',' sysgtem','system','2024-07-07','2024-07-29',73289,'admin1@admin.com',32,'admin@1234','2024-01-01','2024-07-07','admin'),(13,'admin13',' sysgtem','system','2024-07-07','2024-07-29',73289,'admin1@admin.com',12,'admin@123','2024-12-01','2024-07-07','normal'),(14,'user14',' sysgtem','system','2024-07-07','2024-07-29',73289,'78',2,'admin@123','2025-10-02','2000-12-12','normal_user'),(15,'usre15',' sysgtem','system','2024-07-07','2024-07-29',45784,'78',12,'admin@123','2026-01-02','2024-12-12','normal_user'),(16,'admin',' sysgtem','system','2024-07-07','2024-07-29',898,'admin@13',32,'admin@123','2024-01-01','2000-12-12','normal_user'),(17,'admin17',' sysgtem','system','2024-07-07','2024-07-29',45784,'78',12,'ad','2025-02-03','2000-12-12','normal'),(18,'admin18',' sysgtem','system','2024-07-29','2024-07-29',1234,'example@gmail.com',21,'admin@12','2024-02-01','2024-01-01','normal'),(19,'admin19',' system','system','2024-07-29','2024-07-29',1233,'exampk@dw.co',12,'admin@1234','2025-01-01','2025-02-01','normal'),(20,'adminRequisition','system','system','2024-08-03','2024-08-03',74349,'adminRequisition@gmail.com',1,'admin@123','2025-08-03','2025-08-03','admin'),(21,'storeManager','system','system','2024-08-03','2024-08-03',74349,'storeManager@gmail.com',23,'admin@123','2025-08-03','2025-08-03','storemanager');
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

-- Dump completed on 2024-08-07 10:48:49
