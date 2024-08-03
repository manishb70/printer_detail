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
  `admin_write` tinyint(1) DEFAULT NULL,
  `user_write_start_date` date DEFAULT NULL,
  `user_write_end_date` date DEFAULT NULL,
  `user_view_start_date` date DEFAULT NULL,
  `user_view_end_date` date DEFAULT NULL,
  `admin_write_start_date` date DEFAULT NULL,
  `admin_write_end_date` date DEFAULT NULL,
  `admin_view_start_date` date DEFAULT NULL,
  `admin_view_end_date` date DEFAULT NULL,
  PRIMARY KEY (`S_NO`),
  UNIQUE KEY `admin_id_UNIQUE` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  PRIMARY KEY (`S_no`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-03 14:26:47
