-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: imistest
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

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
-- Table structure for table `trn_voucher_2`
--

DROP TABLE IF EXISTS `trn_voucher_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trn_voucher_2` (
  `guid` varchar(64) NOT NULL,
  `date` date NOT NULL,
  `voucher_type` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `voucher_number` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `reference_number` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `narration` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `party_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `place_of_supply` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_invoice` tinyint DEFAULT NULL,
  `is_accounting_voucher` tinyint DEFAULT NULL,
  `is_inventory_voucher` tinyint DEFAULT NULL,
  `is_order_voucher` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trn_voucher_2`
--

LOCK TABLES `trn_voucher_2` WRITE;
/*!40000 ALTER TABLE `trn_voucher_2` DISABLE KEYS */;
INSERT INTO `trn_voucher_2` VALUES ('6daea43e-1215-46ef-bbdf-91abcd024f68-00003967','2021-05-12','BANK PAYMENT','140','','NEFT to Pratibha Tudu (Maharishi Markandeshwar University)  for reimbursement of 1st Year fee. Total fee is 113000/-. INR 105000 paid by S-ILF and 8000 was paid by Pratibha of its own and now reimbursed','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396d','2021-05-12','BANK PAYMENT','145','','Chq no 126774 issued for NEFT to Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003969','2021-05-15','Receipt','15','','NEFTreturned - Paid to Pratibha Tudu (Maharishi Markandeshwar University)  for reimbursement of 1st Year fee. Total fee is 113000/-. INR 105000 paid by S-ILF and 8000 was paid by Pratibha of its own and now reimbursed','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396f','2021-05-15','BANK PAYMENT','156','','In lieu of NEFT returned - Paid to Pratibha Tudu (Maharishi Markandeshwar University)  for reimbursement of 1st Year fee. Total fee is 113000/-. INR 105000 paid by S-ILF and 8000 was paid by Pratibha of its own and now reimbursed','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398b','2021-05-15','Receipt','16','','Chq no 126774 issued for NEFT to Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee, NEFT returned','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398c','2021-05-15','BANK PAYMENT','158','','NEFT reissued in lieu of returned Chq no 126774 - Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396e','2021-05-19','Receipt','17','','Chq no 126774 issued for NEFT to Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee. NEFT returned','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003916','2021-05-20','BANK PAYMENT','167','','Chq no 126783 issued for NEFT to Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ac','2021-06-28','BANK PAYMENT','290','','Ref No 033. NEFT to 13 scholars for personal maintenance for the period Apr\'21 to Jun\'21','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ad','2021-06-28','BANK PAYMENT','291','','Ref No 033. NEFT to 14 scholars for personal maintenance for the period Apr\'21 to Jun\'21','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a98','2021-06-29','Receipt','33','','Ref No 033. NEFT to Pratibha Tudu for personal maintenance for the period Apr\'21 to Jun\'21 Retruned','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a66','2021-07-13','BANK PAYMENT','367','','Ref No 046. Chq No. 243393 NEFT to 1 scholars for personal maintenance for the period Apr\'21 to Jun\'21 as her payment is reversed due to wrong bank account','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003b52','2021-07-14','Receipt','52','','Ref No 046. Chq No. 243393 NEFT to Pratibha tadu for personal maintenance for the period Apr\'21 to Jun\'21 as her payment is reversed due to wrong bank account and Reversed again dated 14.7.2021','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf1','2021-09-30','BANK PAYMENT','694','','Ref No PNBF/111. NEFT to 15 scholars for personal maintenance for the period July\'21 to Sept\'21 @1000/- PM.','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf4','2021-09-30','BANK PAYMENT','697','','Ref No PNBF/110. NEFT to 14 scholars for personal maintenance for the period July\'21 to Sept\'21 @1000/- PM','OBC BANK A/C -10482071000023','',0,1,0,0),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003d6d','2021-10-21','BANK PAYMENT','772','','Ref No PNBF/123. NEFT to \"JMHS Mercy School of Nursing\" for Radharani Mahato\'s 3rd Year fee.','OBC BANK A/C -10482071000023','',0,1,0,0);
/*!40000 ALTER TABLE `trn_voucher_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trn_cost_centre_2`
--

DROP TABLE IF EXISTS `trn_cost_centre_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trn_cost_centre_2` (
  `guid` varchar(64) NOT NULL,
  `ledger` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `name` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `amount` decimal(17,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trn_cost_centre_2`
--

LOCK TABLES `trn_cost_centre_2` WRITE;
/*!40000 ALTER TABLE `trn_cost_centre_2` DISABLE KEYS */;
INSERT INTO `trn_cost_centre_2` VALUES ('6daea43e-1215-46ef-bbdf-91abcd024f68-00003967','SILF -NURSING SCHOLARSHIP FEE','PRATIBHA TUDU - 2020-24',-8000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396d','SILF -NURSING SCHOLARSHIP FEE','Radha Rani Rao',-88000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396d','Personal Maintenance - NSP','Radha Rani Rao',-12000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003969','SILF -NURSING SCHOLARSHIP FEE','PRATIBHA TUDU - 2020-24',8000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396f','SILF -NURSING SCHOLARSHIP FEE','PRATIBHA TUDU - 2020-24',-8000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398b','SILF -NURSING SCHOLARSHIP FEE','Radha Rani Rao',88000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398b','Personal Maintenance - NSP','Radha Rani Rao',12000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398c','SILF -NURSING SCHOLARSHIP FEE','Radha Rani Rao',-88000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398c','Personal Maintenance - NSP','Radha Rani Rao',-12000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396e','SILF -NURSING SCHOLARSHIP FEE','Radha Rani Rao',88000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396e','Personal Maintenance - NSP','Radha Rani Rao',12000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003916','SILF -NURSING SCHOLARSHIP FEE','Radha Rani Rao',-88000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003916','Personal Maintenance - NSP','Radha Rani Rao',-12000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ac','Personal Maintenance - NSP','RADHA RANI MAHATO 2019-22',-3000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ad','Personal Maintenance - NSP','PRATIBHA TUDU - 2020-24',-3000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a98','Personal Maintenance - NSP','PRATIBHA TUDU - 2020-24',3000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a66','Personal Maintenance - NSP','PRATIBHA TUDU - 2020-24',-3000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003b52','Personal Maintenance - NSP','PRATIBHA TUDU - 2020-24',3000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf1','Personal Maintenance - NSP','PRATIBHA TUDU - 2020-24',-6000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf4','Personal Maintenance - NSP','RADHA RANI MAHATO 2019-22',-3000.00),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003d6d','SILF -NURSING SCHOLARSHIP FEE','RADHA RANI MAHATO 2019-22',-88000.00);
/*!40000 ALTER TABLE `trn_cost_centre_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trn_accounting_2`
--

DROP TABLE IF EXISTS `trn_accounting_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trn_accounting_2` (
  `guid` varchar(64) NOT NULL,
  `ledger` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `amount` decimal(17,2) NOT NULL DEFAULT '0.00',
  `amount_forex` decimal(17,2) NOT NULL DEFAULT '0.00',
  `currency` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trn_accounting_2`
--

LOCK TABLES `trn_accounting_2` WRITE;
/*!40000 ALTER TABLE `trn_accounting_2` DISABLE KEYS */;
INSERT INTO `trn_accounting_2` VALUES ('6daea43e-1215-46ef-bbdf-91abcd024f68-00003967','SILF -NURSING SCHOLARSHIP FEE',-8000.00,-8000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003967','OBC BANK A/C -10482071000023',8000.00,8000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396d','SILF -NURSING SCHOLARSHIP FEE',-88000.00,-88000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396d','Personal Maintenance - NSP',-12000.00,-12000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396d','OBC BANK A/C -10482071000023',100000.00,100000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003969','SILF -NURSING SCHOLARSHIP FEE',8000.00,8000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003969','OBC BANK A/C -10482071000023',-8000.00,-8000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396f','SILF -NURSING SCHOLARSHIP FEE',-8000.00,-8000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396f','OBC BANK A/C -10482071000023',8000.00,8000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398b','SILF -NURSING SCHOLARSHIP FEE',88000.00,88000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398b','Personal Maintenance - NSP',12000.00,12000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398b','OBC BANK A/C -10482071000023',-100000.00,-100000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398c','SILF -NURSING SCHOLARSHIP FEE',-88000.00,-88000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398c','Personal Maintenance - NSP',-12000.00,-12000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398c','OBC BANK A/C -10482071000023',100000.00,100000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396e','SILF -NURSING SCHOLARSHIP FEE',88000.00,88000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396e','Personal Maintenance - NSP',12000.00,12000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396e','OBC BANK A/C -10482071000023',-100000.00,-100000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003916','SILF -NURSING SCHOLARSHIP FEE',-88000.00,-88000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003916','Personal Maintenance - NSP',-12000.00,-12000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003916','OBC BANK A/C -10482071000023',100000.00,100000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ac','Personal Maintenance - NSP',-39000.00,-39000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ac','OBC BANK A/C -10482071000023',39000.00,39000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ad','Personal Maintenance - NSP',-42000.00,-42000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ad','OBC BANK A/C -10482071000023',42000.00,42000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a98','Personal Maintenance - NSP',3000.00,3000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a98','OBC BANK A/C -10482071000023',-2881.40,-2881.40,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a98','Bank Charges',-118.60,-118.60,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a66','Personal Maintenance - NSP',-3000.00,-3000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a66','OBC BANK A/C -10482071000023',3000.00,3000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003b52','Personal Maintenance - NSP',3000.00,3000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003b52','OBC BANK A/C -10482071000023',-3000.00,-3000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf1','Personal Maintenance - NSP',-48000.00,-48000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf1','OBC BANK A/C -10482071000023',48000.00,48000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf4','Personal Maintenance - NSP',-45000.00,-45000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf4','OBC BANK A/C -10482071000023',45000.00,45000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003d6d','SILF -NURSING SCHOLARSHIP FEE',-88000.00,-88000.00,'₹'),('6daea43e-1215-46ef-bbdf-91abcd024f68-00003d6d','OBC BANK A/C -10482071000023',88000.00,88000.00,'₹');
/*!40000 ALTER TABLE `trn_accounting_2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-07  7:20:27
