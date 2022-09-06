-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2022 at 02:54 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-mis-project-kst`
--

-- --------------------------------------------------------

--
-- Table structure for table `trn_voucher_2`
--
DROP TABLE IF EXISTS `trn_voucher_2`;
CREATE TABLE `trn_voucher_2` (
  `guid` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `voucher_type` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucher_number` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `reference_number` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `narration` varchar(4000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `party_name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_of_supply` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_invoice` tinyint DEFAULT NULL,
  `is_accounting_voucher` tinyint DEFAULT NULL,
  `is_inventory_voucher` tinyint DEFAULT NULL,
  `is_order_voucher` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trn_voucher_2`
--

INSERT INTO `trn_voucher_2` (`guid`, `date`, `voucher_type`, `voucher_number`, `reference_number`, `narration`, `party_name`, `place_of_supply`, `is_invoice`, `is_accounting_voucher`, `is_inventory_voucher`, `is_order_voucher`) VALUES
('6daea43e-1215-46ef-bbdf-91abcd024f68-00003967', '2021-05-12', 'BANK PAYMENT', '140', '', 'NEFT to Pratibha Tudu (Maharishi Markandeshwar University)  for reimbursement of 1st Year fee. Total fee is 113000/-. INR 105000 paid by S-ILF and 8000 was paid by Pratibha of its own and now reimbursed', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396d', '2021-05-12', 'BANK PAYMENT', '145', '', 'Chq no 126774 issued for NEFT to Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-00003969', '2021-05-15', 'Receipt', '15', '', 'NEFTreturned - Paid to Pratibha Tudu (Maharishi Markandeshwar University)  for reimbursement of 1st Year fee. Total fee is 113000/-. INR 105000 paid by S-ILF and 8000 was paid by Pratibha of its own and now reimbursed', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396f', '2021-05-15', 'BANK PAYMENT', '156', '', 'In lieu of NEFT returned - Paid to Pratibha Tudu (Maharishi Markandeshwar University)  for reimbursement of 1st Year fee. Total fee is 113000/-. INR 105000 paid by S-ILF and 8000 was paid by Pratibha of its own and now reimbursed', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398b', '2021-05-15', 'Receipt', '16', '', 'Chq no 126774 issued for NEFT to Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee, NEFT returned', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-0000398c', '2021-05-15', 'BANK PAYMENT', '158', '', 'NEFT reissued in lieu of returned Chq no 126774 - Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-0000396e', '2021-05-19', 'Receipt', '17', '', 'Chq no 126774 issued for NEFT to Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee. NEFT returned', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-00003916', '2021-05-20', 'BANK PAYMENT', '167', '', 'Chq no 126783 issued for NEFT to Medwin College of Nursing for Radha Rani Rao\'s 3rd Year fee. Her PM is clubbed with fee', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ac', '2021-06-28', 'BANK PAYMENT', '290', '', 'Ref No 033. NEFT to 13 scholars for personal maintenance for the period Apr\'21 to Jun\'21', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-000039ad', '2021-06-28', 'BANK PAYMENT', '291', '', 'Ref No 033. NEFT to 14 scholars for personal maintenance for the period Apr\'21 to Jun\'21', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a98', '2021-06-29', 'Receipt', '33', '', 'Ref No 033. NEFT to Pratibha Tudu for personal maintenance for the period Apr\'21 to Jun\'21 Retruned', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-00003a66', '2021-07-13', 'BANK PAYMENT', '367', '', 'Ref No 046. Chq No. 243393 NEFT to 1 scholars for personal maintenance for the period Apr\'21 to Jun\'21 as her payment is reversed due to wrong bank account', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-00003b52', '2021-07-14', 'Receipt', '52', '', 'Ref No 046. Chq No. 243393 NEFT to Pratibha tadu for personal maintenance for the period Apr\'21 to Jun\'21 as her payment is reversed due to wrong bank account and Reversed again dated 14.7.2021', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf1', '2021-09-30', 'BANK PAYMENT', '694', '', 'Ref No PNBF/111. NEFT to 15 scholars for personal maintenance for the period July\'21 to Sept\'21 @1000/- PM.', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-00003cf4', '2021-09-30', 'BANK PAYMENT', '697', '', 'Ref No PNBF/110. NEFT to 14 scholars for personal maintenance for the period July\'21 to Sept\'21 @1000/- PM', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0),
('6daea43e-1215-46ef-bbdf-91abcd024f68-00003d6d', '2021-10-21', 'BANK PAYMENT', '772', '', 'Ref No PNBF/123. NEFT to \"JMHS Mercy School of Nursing\" for Radharani Mahato\'s 3rd Year fee.', 'OBC BANK A/C -10482071000023', '', 0, 1, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
