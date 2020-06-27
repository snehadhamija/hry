-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 09:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haryana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `aname`, `email`, `password`) VALUES
(2, 'kba', 'kba', 'kba@232543');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `is_active` bit(1) NOT NULL,
  `sequence_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `img_url`, `is_active`, `sequence_id`, `created_at`, `updated_at`) VALUES
(1, 'Haryana Enterprise Promotion Policy -2015 (EPP – 2015)', NULL, b'1', 1, '2020-02-22 06:38:44', '2020-04-30 10:38:31'),
(2, 'Steps to Setup Industries', NULL, b'1', 2, '2020-02-22 06:38:44', '2020-05-26 07:35:25'),
(5, 'APEDA Schemes', NULL, b'1', 19, '2020-04-30 12:32:36', '2020-06-21 18:14:31'),
(6, 'State Govt. Schemes for Industries', 'update no 8', b'1', 20, '2020-02-22 06:38:44', '2020-05-30 06:51:01'),
(7, 'Centeral Government Schemes ', NULL, b'1', 11, '2020-02-22 06:38:44', '2020-06-20 07:04:46'),
(9, 'Government Policies', NULL, b'1', 12, '2020-04-30 12:04:21', '2020-06-18 06:48:03'),
(10, 'Government Licenses', NULL, b'1', 13, '2020-04-30 12:34:42', '2020-06-18 06:48:10'),
(11, 'Government Clearances ', NULL, b'1', 15, '2020-04-30 12:34:42', '2020-06-21 18:13:32'),
(12, 'Online Registrations', NULL, b'1', 16, '2020-04-30 12:34:42', '2020-06-21 18:14:11'),
(13, 'Quality Certification \r\n', NULL, b'1', 14, '2020-04-30 12:34:42', '2020-06-18 06:48:20'),
(14, 'Act & Rules', NULL, b'1', 10, '2020-02-22 06:38:44', '2020-05-30 06:53:57'),
(15, 'Important Information about MSMEs and SMEs', NULL, b'1', 18, '2020-04-30 12:34:42', '2020-06-21 18:14:24'),
(16, 'Haryana State Pollution Control Board', NULL, b'1', 4, '2020-04-30 12:37:10', '2020-06-20 07:04:21'),
(18, 'Haryana E-Services', NULL, b'1', 3, '2020-04-30 12:37:10', '2020-05-26 16:50:55'),
(19, 'Town and Country Planning Department', NULL, b'1', 5, '2020-04-30 12:37:10', '2020-05-27 08:16:24'),
(20, 'Patents', 'Null', b'1', 7, '2020-05-04 17:36:06', '2020-05-30 06:50:53'),
(21, 'Design', 'Null', b'1', 8, '2020-05-04 17:38:34', '2020-05-30 06:51:07'),
(22, 'Trade Marks', 'Null', b'1', 9, '2020-05-04 17:39:24', '2020-05-30 06:51:25'),
(30, 'Our Services', NULL, b'1', 17, '2020-02-22 06:38:44', '2020-06-21 18:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `menu_category`
--

CREATE TABLE `menu_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `is_active` bit(1) NOT NULL DEFAULT b'1',
  `sequence_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_category`
--

INSERT INTO `menu_category` (`id`, `category`, `cid`, `img_url`, `is_active`, `sequence_id`, `created_at`, `updated_at`) VALUES
(1, 'EPP- 2015', 1, NULL, b'1', 1, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(37, 'State Mini Cluster Development Scheme ', 6, NULL, b'1', 37, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(38, 'Critical Infrastructure Development Scheme', 6, NULL, b'1', 38, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(39, 'Start-ups Scheme', 6, NULL, b'1', 39, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(40, 'Industrial Infrastructure Development Scheme ', 6, NULL, b'1', 40, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(41, 'Setting of Primary Processing Centres/Collection Centres', 6, NULL, b'1', 41, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(42, 'Pradhan Mantri Mudra Yojana', 7, NULL, b'1', 42, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(43, ' Credit Guarantee Scheme (CGTMSE) ', 7, NULL, b'1', 43, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(45, ' Performance and Credit Rating', 7, NULL, b'1', 45, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(46, 'Stand-Up India', 7, NULL, b'1', 46, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(48, 'NABARD Schemes', 7, NULL, b'0', 1, '2020-04-30 11:52:17', '2020-06-11 08:11:14'),
(54, 'Haryana Pharmaceutical Policy 2019', 9, NULL, b'1', 54, '2020-02-22 13:23:38', '2020-04-30 12:05:39'),
(55, 'Haryana Solar Power Policy 2016', 9, NULL, b'1', 55, '2020-02-22 13:23:38', '2020-06-17 09:34:02'),
(56, 'Haryana MSME Policy 2019', 9, NULL, b'1', 56, '2020-02-22 13:23:38', '2020-04-30 12:07:24'),
(57, 'Haryana Agri Business and Food Processing Policy 2018', 9, NULL, b'1', 57, '2020-02-22 13:23:38', '2020-04-30 12:08:41'),
(58, 'Haryana Textile Policy 2019', 9, NULL, b'1', 58, '2020-02-22 13:23:38', '2020-04-30 12:09:19'),
(61, 'Haryana Logistics, Warehousing & Retail Policy, 2019', 9, NULL, b'1', 61, '2020-02-22 13:23:38', '2020-04-30 12:15:47'),
(78, 'Startup India', 7, NULL, b'1', 78, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(79, 'OUR SERVICES', 30, NULL, b'1', 79, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(80, 'Trusts (NGO)', 30, NULL, b'1', 80, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(81, 'Trademark', 30, NULL, b'1', 81, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(82, 'Copyright Registration', 30, NULL, b'1', 82, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(83, 'Patent Registration', 30, NULL, b'1', 83, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(84, 'BIS (ISI): Registration', 30, NULL, b'1', 84, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(85, 'ISO 9001: 2008', 30, NULL, b'1', 85, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(86, 'ISO 14000', 30, NULL, b'1', 86, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(87, 'ISO 22000', 30, NULL, b'1', 87, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(88, 'HACCP', 30, NULL, b'1', 88, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(89, 'HALAL', 30, NULL, b'1', 89, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(90, 'PAN', 30, NULL, b'1', 90, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(91, 'TAN', 30, NULL, b'1', 91, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(92, 'FSSAI License', 30, NULL, b'1', 92, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(93, 'Brick Kiln License', 30, NULL, b'1', 93, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(94, 'Accounting Services', 30, NULL, b'1', 94, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(95, 'Auditing Services', 30, NULL, b'1', 95, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(96, 'Societies under The Haryana Registration and Regulation of Societies  Act, 2012', 30, NULL, b'1', 96, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(97, 'Registration of Trust & Society under Section 12AA of income tax act', 30, NULL, b'1', 97, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(98, 'Registration of Trust & Society under FCRA', 30, NULL, b'1', 98, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(99, 'NOC from DTP', 30, NULL, b'1', 99, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(100, 'NOC from Forest Department', 30, NULL, b'1', 100, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(101, 'NOC from Fire department', 30, NULL, b'1', 101, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(102, 'NOC from NHAI', 30, NULL, b'1', 102, '2020-02-22 13:23:38', '2020-02-22 14:02:45'),
(108, 'Trade Related Entrepreneurship Assistance and Development (TREAD) for Women', 7, NULL, b'1', 5, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(109, 'Scheme of Fund for Regeneration of Traditional Industries', 7, NULL, b'1', 6, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(111, 'National Awards Scheme (Individual MSEs)', 7, NULL, b'1', 8, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(112, 'Entrepreneurial and Managerial Development of SMEs through Incubators', 7, NULL, b'1', 9, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(113, 'Scheme for Integrated Textile Parks', 7, NULL, b'1', 10, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(115, 'Mega Food Park', 7, NULL, b'1', 12, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(116, 'Cold Chain', 7, NULL, b'1', 13, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(117, 'Rural Industry Service Centre (RISC) for Khadi and Village Industries', 7, NULL, b'1', 14, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(118, 'Common Effluent Treatment Plants', 7, NULL, b'1', 15, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(119, 'Design Clinic for Design Expertise to MSMEs Manufacturing Sector (DESIGN)', 7, NULL, b'1', 16, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(120, 'Marketing Development Assistance to MSMEs (MDA-Bar Code)', 7, NULL, b'1', 17, '2020-04-30 15:46:51', '2020-04-30 15:46:51'),
(121, 'Building Awareness on Intellectual Property Rights', 7, NULL, b'1', 18, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(122, 'Market Development Assistance ( MDA)', 7, NULL, b'1', 19, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(123, 'Single Point Registration', 7, NULL, b'1', 20, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(124, 'Raw Material Assistance', 7, NULL, b'1', 21, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(125, 'NSIC Infrastructure', 7, NULL, b'1', 22, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(126, 'Marketing Assistance & Technology Upgradation (MATU)', 7, NULL, b'1', 23, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(127, 'Zero Defect Zero Effect Scheme (ZED)', 7, NULL, b'1', 24, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(128, 'Lean Manufacturing Competitiveness for MSMEs', 7, NULL, b'1', 25, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(129, 'Technology and Quality Upgradation Support to MSMEs (TEQUP)', 7, NULL, b'1', 26, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(130, 'Quality Management Standards (QMS) and Quality Technology Tools (QTT)', 7, NULL, b'1', 27, '2020-04-30 15:50:22', '2020-04-30 15:50:22'),
(131, 'Make in India', 7, NULL, b'1', 28, '2020-04-30 15:50:52', '2020-05-12 14:19:17'),
(132, 'Credit Linked Interest Subsidy Scheme', 6, NULL, b'1', 1, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(133, 'Investment Subsidy on VAT/ SGST', 6, NULL, b'1', 2, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(134, 'Interest Subsidy Scheme', 6, NULL, b'1', 3, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(135, 'Interest Subsidy Scheme for Artisans', 6, NULL, b'1', 4, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(136, 'Freight Assistance Scheme', 6, NULL, b'1', 5, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(137, 'Stamp Duty Scheme', 6, NULL, b'1', 6, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(138, 'Electricity Duty Exemption', 6, NULL, b'1', 7, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(139, 'Credit Rating Scheme', 6, NULL, b'1', 8, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(140, 'Design Clinic Scheme', 6, NULL, b'1', 9, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(141, 'Market Development Assistance Scheme', 6, NULL, b'1', 10, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(142, 'State Export Award Scheme', 6, NULL, b'1', 11, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(143, 'Handicraft Award Scheme', 6, NULL, b'1', 12, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(144, 'Patent Registration Scheme', 6, NULL, b'1', 13, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(145, 'E-commerce portal for MSMEs Scheme', 6, NULL, b'1', 14, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(146, 'Marketing Promotion Assistance Scheme for the artisans/weavers', 6, NULL, b'1', 15, '2020-04-30 15:56:07', '2020-04-30 15:56:07'),
(147, 'Scheme of State Award for Micro, Small and Medium Enterprises', 6, NULL, b'1', 16, '2020-04-30 15:58:06', '2020-05-30 07:05:38'),
(148, 'Quality Certification Scheme', 6, NULL, b'1', 17, '2020-04-30 15:58:06', '2020-04-30 15:58:06'),
(149, 'Assistance for Environment Compliance Scheme', 6, NULL, b'1', 18, '2020-04-30 15:58:06', '2020-04-30 15:58:06'),
(150, 'Testing Equipment Assistance Scheme', 6, NULL, b'1', 19, '2020-04-30 15:58:06', '2020-04-30 15:58:06'),
(151, 'Energy Audit Scheme', 6, '', b'1', 20, '2020-04-30 15:58:06', '2020-04-30 15:58:06'),
(152, 'Safety Audit Scheme', 6, NULL, b'1', 21, '2020-04-30 15:58:06', '2020-04-30 15:58:06'),
(153, 'Water Audit Scheme', 6, NULL, b'1', 22, '2020-04-30 15:58:06', '2020-04-30 15:58:06'),
(154, ' Assistance for Technology Acquisition Scheme', 6, NULL, b'1', 23, '2020-04-30 15:58:06', '2020-04-30 15:58:06'),
(155, 'Haryana Estate Management Policy – 2015', 9, NULL, b'1', 1, '2020-04-30 16:11:31', '2020-04-30 16:11:31'),
(156, 'Warehouse Policy', 9, NULL, b'1', 2, '2020-04-30 16:11:31', '2020-04-30 16:11:31'),
(157, 'Organic Fertilizer License', 10, NULL, b'1', 1, '2020-04-30 16:13:21', '2020-04-30 16:13:21'),
(158, 'FSSAI LICENSE', 10, NULL, b'1', 2, '2020-04-30 16:13:21', '2020-04-30 16:13:21'),
(159, 'IMPORT-EXPORT CODE (IEC)', 10, NULL, b'1', 3, '2020-04-30 16:13:21', '2020-04-30 16:13:21'),
(160, 'Brick Kiln License', 10, NULL, b'1', 4, '2020-04-30 16:13:21', '2020-04-30 16:13:21'),
(161, 'CAF (Common Application Form)', 11, NULL, b'1', 1, '2020-04-30 16:15:15', '2020-04-30 16:15:15'),
(162, 'Labour Department Factory Wing', 11, NULL, b'1', 2, '2020-04-30 16:15:15', '2020-04-30 16:15:15'),
(165, 'Urban Local Bodies', 11, NULL, b'1', 5, '2020-04-30 16:15:15', '2020-05-27 09:08:42'),
(166, 'Udyog Aadhar Memorandum', 12, NULL, b'1', 1, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(167, 'Partnership Firm Registration', 12, NULL, b'1', 2, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(168, 'Society Registration', 12, NULL, b'1', 3, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(169, 'Trust Registration', 12, NULL, b'1', 4, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(170, 'Shop & Establishment Act Registration', 12, NULL, b'1', 5, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(171, 'FSSAI Registration', 12, NULL, b'1', 6, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(172, 'Trademark Registration', 12, NULL, b'1', 7, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(173, 'Copyright Registration', 12, NULL, b'1', 8, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(174, 'Patent Registration', 12, NULL, b'1', 9, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(175, 'Company Registration', 12, NULL, b'1', 10, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(176, 'FPO Registration', 12, NULL, b'1', 11, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(177, 'PAN Registration', 12, NULL, b'1', 12, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(178, 'TAN Registration', 12, NULL, b'1', 13, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(179, 'GST Registration', 12, '', b'1', 14, '2020-04-30 16:18:52', '2020-04-30 16:18:52'),
(180, 'BIS Registration', 13, NULL, b'1', 1, '2020-04-30 16:19:57', '2020-04-30 16:19:57'),
(181, 'ISO Registration', 13, NULL, b'1', 2, '2020-04-30 16:19:57', '2020-04-30 16:19:57'),
(182, 'MSME Act 2006', 14, NULL, b'1', 3, '2020-04-30 16:21:35', '2020-05-30 07:07:10'),
(186, 'Financial Assistance on Barcode (dcmsme.gov.in useful links)', 15, NULL, b'1', 1, '2020-04-30 16:21:35', '2020-04-30 16:22:59'),
(190, 'Form & Fees', 20, NULL, b'1', 20, '2020-05-04 18:02:45', '2020-05-05 12:18:54'),
(191, 'Manual', 20, 'Null', b'1', 0, '2020-05-05 12:57:58', '2020-05-12 11:43:10'),
(192, 'Acts', 20, 'Null ', b'1', 20, '2020-05-05 14:27:41', '2020-05-05 14:27:41'),
(193, 'Rules', 20, 'null', b'1', 4, '2020-05-05 14:34:16', '2020-05-05 14:34:16'),
(194, 'Acts', 21, 'null', b'1', 1, '2020-05-05 14:40:32', '2020-05-05 14:40:32'),
(195, 'Manual', 21, 'null', b'1', 2, '2020-05-05 14:58:03', '2020-05-12 11:44:11'),
(196, 'Rules', 21, 'null', b'1', 3, '2020-05-05 14:58:52', '2020-05-05 14:58:52'),
(197, 'Acts', 22, 'null', b'1', 1, '2020-05-05 15:00:25', '2020-05-05 15:00:25'),
(198, 'Manual', 22, 'Null', b'1', 2, '2020-05-05 15:01:03', '2020-05-12 11:44:39'),
(199, 'Rules', 22, 'null', b'1', 3, '2020-05-05 15:01:51', '2020-05-05 15:01:51'),
(200, 'Form & Fees', 22, 'null', b'1', 4, '2020-05-05 15:02:27', '2020-05-05 15:02:27'),
(201, 'Form & Fees', 21, 'null', b'1', 4, '2020-05-06 08:21:59', '2020-05-06 08:21:59'),
(202, 'Controlled Area Details', 19, NULL, b'1', 1, '2020-05-08 14:38:06', '2020-05-27 09:01:22'),
(203, 'Urban Area Details', 19, NULL, b'1', 2, '2020-05-08 14:38:06', '2020-05-27 09:01:38'),
(204, 'Development Plans', 19, NULL, b'1', 3, '2020-05-08 14:38:06', '2020-05-08 14:38:06'),
(205, 'Draft Development Plans', 19, NULL, b'1', 4, '2020-05-08 14:38:06', '2020-05-27 09:06:57'),
(206, 'Procedure for CLU/Building Plan/Occupation Certificate', 19, NULL, b'1', 5, '2020-05-08 14:38:06', '2020-05-27 10:33:51'),
(207, 'List of e-Services', 19, NULL, b'1', 6, '2020-05-08 14:38:06', '2020-05-08 14:39:26'),
(208, 'How To Get Consent - New Units', 16, NULL, b'1', 1, '2020-05-08 15:36:36', '2020-05-27 09:00:30'),
(209, 'How To Renew Consent', 16, NULL, b'1', 2, '2020-05-08 15:36:36', '2020-05-27 09:02:37'),
(210, 'Categorization Of Industries', 16, NULL, b'1', 3, '2020-05-08 15:36:36', '2020-05-27 09:02:57'),
(211, 'Fee Structure For Obtaining Consent From Board', 16, NULL, b'1', 4, '2020-05-08 15:36:36', '2020-05-27 09:04:50'),
(212, 'Protection Of Environment', 16, NULL, b'1', 5, '2020-05-08 15:36:36', '2020-05-27 09:05:58'),
(213, 'Factory Act', 18, NULL, b'1', 1, '2020-05-09 11:01:12', '2020-05-09 11:01:12'),
(214, 'Shop Act', 18, NULL, b'1', 2, '2020-05-09 11:01:12', '2020-05-09 11:01:12'),
(215, 'BOCW Establishment Act', 18, NULL, b'1', 3, '2020-05-09 11:01:45', '2020-05-09 11:01:45'),
(216, 'Enforcement Of Labour Laws', 14, NULL, b'1', 1, '2020-05-09 11:07:02', '2020-05-30 07:00:01'),
(217, 'Bare Acts', 14, 'Null', b'1', 2, '2020-05-11 12:43:05', '2020-05-30 07:04:31'),
(218, 'Establishing an Industrial Project', 2, NULL, b'1', 1, '2020-05-26 08:10:51', '2020-05-26 08:10:51'),
(219, 'Industry Licensing Policy', 2, NULL, b'1', 2, '2020-05-26 08:10:51', '2020-05-26 08:10:51'),
(220, 'Approvals Required for Establishing an Industrial Project', 2, NULL, b'1', 3, '2020-05-26 08:10:51', '2020-05-26 08:10:51'),
(221, 'Central Acts/Rules', 14, 'null', b'1', 5, '2020-05-30 09:55:19', '2020-05-30 09:55:19'),
(222, 'State Acts/Rules', 14, 'Null', b'1', 6, '2020-05-30 10:35:37', '2020-05-30 10:35:37'),
(226, 'Checklist of documents of all services', 19, 'null', b'1', 7, '2020-06-01 07:20:26', '2020-06-01 07:20:26'),
(227, 'Function & Policies', 19, 'null', b'1', 8, '2020-06-01 07:34:18', '2020-06-01 07:34:18'),
(228, 'Act & Rules', 19, 'null', b'1', 9, '2020-06-01 07:40:21', '2020-06-02 07:40:21'),
(229, 'Society Act & Rules', 14, 'null', b'1', 7, '2020-06-01 08:54:40', '2020-06-01 08:54:40'),
(230, 'Udyog Aadhar Memorandum', 18, 'Null', b'1', 4, '2020-06-01 09:11:35', '2020-06-01 09:11:35'),
(231, 'Registration of Boilers', 18, 'Null', b'1', 5, '2020-06-01 09:11:35', '2020-06-01 09:11:35'),
(232, 'Renewal of Registration for Boilers', 18, 'Null', b'1', 6, '2020-06-01 09:11:35', '2020-06-01 09:11:35'),
(234, 'Verification of Boilers', 18, 'Null', b'1', 14, '2020-06-01 09:11:35', '2020-06-05 06:24:54'),
(235, 'Verification of Firm', 18, 'null', b'1', 15, '2020-06-01 09:11:35', '2020-06-05 06:24:58'),
(236, 'Verification of Society', 18, 'Null', b'1', 16, '2020-06-01 09:11:35', '2020-06-05 06:25:04'),
(237, 'Registration of Societies', 18, 'Null', b'1', 11, '2020-06-01 09:11:35', '2020-06-01 09:11:35'),
(238, 'Registration of Firms', 18, 'Null', b'1', 12, '2020-06-01 09:11:35', '2020-06-01 09:11:35'),
(239, 'Incentive Schemes', 18, 'null', b'1', 13, '2020-06-01 09:11:35', '2020-06-01 09:11:35'),
(242, 'Invest Haryana HEPC Portal', 18, 'Nulll', b'1', 1, '2020-06-02 10:49:49', '2020-06-02 10:49:49'),
(243, 'Credit Link Capital Subsidy Scheme (CLCSS)', 7, 'null', b'1', 2, '2020-06-11 09:36:16', '2020-06-11 09:38:11'),
(244, 'Cluster Scheme', 7, 'null', b'1', 3, '2020-06-11 09:36:16', '2020-06-11 09:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `menu_cat_service`
--

CREATE TABLE `menu_cat_service` (
  `id` int(11) NOT NULL,
  `service` varchar(200) NOT NULL,
  `detail` longtext NOT NULL,
  `category` int(11) NOT NULL,
  `keyword` longtext NOT NULL,
  `description` longtext NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `is_active` bit(1) NOT NULL,
  `sequence_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_cat_service`
--

INSERT INTO `menu_cat_service` (`id`, `service`, `detail`, `category`, `keyword`, `description`, `img_url`, `is_active`, `sequence_id`, `created_at`, `updated_at`) VALUES
(1, 'Udyog Aadhar Memorandum', '<script> window.location=\'udyog.php\'; </script>', 166, '', '', NULL, b'1', 1, '2020-06-22 05:52:32', '2020-06-22 05:52:32'),
(2, 'EPP-2015', '<script> window.location=\'epp.php\'; </script>', 1, '', '', NULL, b'1', 1, '2020-02-22 13:23:00', '2020-05-27 08:53:19'),
(3, 'Partnership Firm Registration', '<script> window.location=\'partner.php\'; </script>', 167, '', '', NULL, b'0', 0, '2020-06-22 05:52:32', '2020-06-22 05:52:32'),
(4, 'Society Registration', '<script> window.location=\'regsociety.php\'; </script>', 168, 'sfd', 'fgdf', 'null', b'1', 1, '2020-06-22 06:25:34', '2020-06-22 06:25:34'),
(5, 'Shop & Establishment Act Registration', '<script> window.location=\'shop.php\'; </script>', 170, 'cd', 'dfd', 'null', b'1', 1, '2020-06-22 06:25:34', '2020-06-22 06:26:36'),
(6, 'Trust Registration', '<script> window.location=\'regsociety.php\'; </script>', 169, 'dfj', 'dkgdks', 'null', b'1', 1, '2020-06-22 06:26:10', '2020-06-22 06:26:10'),
(18, 'Pradhan Mantri Mudra Yojana', '<script> window.location=\'mudra.php\'; </script>', 42, '', '', NULL, b'1', 18, '2020-02-22 13:23:00', '2020-06-21 18:18:15'),
(19, 'Haryana Textile Policy 2019', '<script> window.location=\'textile policy.php\'; </script>', 58, '', '', NULL, b'1', 19, '2020-02-22 13:23:00', '2020-06-21 18:20:30'),
(20, 'Haryana MSME Policy 2019', '<script> window.location=\'msme2019.php\'; </script>', 56, '', '', NULL, b'1', 20, '2020-02-22 13:23:00', '2020-06-21 18:22:09'),
(21, 'Haryana Agri Business and Food Processing Policy 2018', '<script> window.location=\'agri.php\'; </script>', 57, '', '', NULL, b'1', 21, '2020-02-22 13:23:00', '2020-06-21 18:23:47'),
(22, 'Haryana Pharmaceutical Policy 2019', '<script> window.location=\'pharma.php\'; </script>', 54, '', '', NULL, b'1', 22, '2020-02-22 13:23:00', '2020-06-21 18:24:31'),
(23, 'Haryana Logistics, Warehousing & Retail Policy, 2019', '<script> window.location=\'logic.php\'; </script>', 61, '', '', NULL, b'1', 23, '2020-02-22 13:23:00', '2020-06-21 18:27:38'),
(48, 'Start-Ups Scheme', '<script> window.location=\'startups.php\'; </script>', 39, '', '', NULL, b'1', 48, '2020-02-22 13:23:00', '2020-06-21 18:27:53'),
(49, 'Critical Infrastructure Development Scheme', '<script> window.location=\'critical.php\'; </script>', 40, '', '', NULL, b'1', 49, '2020-02-22 13:23:00', '2020-06-21 18:28:04'),
(50, 'Primary Processing Centres', '<script> window.location=\'primary.php\'; </script>', 41, '', '', NULL, b'1', 50, '2020-02-22 13:23:00', '2020-06-21 18:28:16'),
(51, 'Credit Guarantee Scheme (CGTMSE)', '<script> window.location=\'fund.php\'; </script>', 43, '', '', NULL, b'1', 51, '2020-02-22 13:23:00', '2020-06-12 08:34:44'),
(53, 'OUR SERVICES', '', 79, '', '', NULL, b'1', 53, '2020-02-22 13:23:00', '2020-02-22 14:02:33'),
(55, 'Registration of Trust / NGO under section 80G, 35AC and FCRA', '<script> window.location=\'trust.php\'; </script>', 80, '', '', NULL, b'1', 55, '2020-02-22 13:23:00', '2020-06-17 06:12:29'),
(57, 'Trademark', '<script> window.location=\'trademark.php\'; </script>', 81, '', '', NULL, b'1', 57, '2020-02-22 13:23:00', '2020-06-17 06:29:26'),
(58, 'Copyright Registration', '<script> window.location=\'copyright.php\'; </script>', 82, '', '', NULL, b'1', 58, '2020-02-22 13:23:00', '2020-06-17 06:45:08'),
(59, 'Patent Registration', '<script> window.location=\'patent reg.php\'; </script>', 83, '', '', NULL, b'1', 59, '2020-02-22 13:23:00', '2020-06-17 06:45:41'),
(60, 'BIS (ISI): Registration', '<script> window.location=\'bis reg.php\'; </script>', 84, '', '', NULL, b'1', 60, '2020-02-22 13:23:00', '2020-06-17 07:01:16'),
(61, 'ISO 9001: 2008', '<script> window.location=\'iso 90001.php\'; </script>', 85, '', '', NULL, b'1', 61, '2020-02-22 13:23:00', '2020-06-17 07:32:26'),
(62, 'ISO 14000', '<script> window.location=\'iso 14000.php\'; </script>', 86, '', '', NULL, b'1', 62, '2020-02-22 13:23:00', '2020-06-17 06:46:33'),
(63, 'ISO 22000', '<script> window.location=\'iso 22000.php\'; </script>', 87, '', '', NULL, b'1', 63, '2020-02-22 13:23:00', '2020-06-17 06:47:13'),
(64, 'HACCP', '<script> window.location=\'haccp.php\'; </script>', 88, '', '', NULL, b'1', 64, '2020-02-22 13:23:00', '2020-06-17 06:47:29'),
(65, 'HALAL', '<script> window.location=\'halal.php\'; </script>', 89, '', '', NULL, b'1', 65, '2020-02-22 13:23:00', '2020-06-17 06:47:43'),
(66, 'PAN', '<script> window.location=\'pan.php\'; </script>', 90, '', '', NULL, b'1', 66, '2020-02-22 13:23:00', '2020-06-17 06:48:25'),
(67, 'TAN', '<script> window.location=\'tan.php\'; </script>', 91, '', '', NULL, b'1', 67, '2020-02-22 13:23:00', '2020-06-17 06:48:11'),
(68, 'FSSAI License', '<script> window.location=\'fssai.php\'; </script>', 92, '', '', NULL, b'1', 68, '2020-02-22 13:23:00', '2020-06-17 06:49:04'),
(69, 'Brick Kiln License', '<script> window.location=\'brick.php\'; </script>', 93, '', '', NULL, b'1', 69, '2020-02-22 13:23:00', '2020-06-17 06:44:42'),
(70, 'Accounting Services', '<script> window.location=\'account.php\'; </script>', 94, '', '', NULL, b'1', 70, '2020-02-22 13:23:00', '2020-06-17 06:44:25'),
(71, 'Auditing Services', '<script> window.location=\'audit.php\'; </script>', 95, '', '', NULL, b'1', 71, '2020-02-22 13:23:00', '2020-06-17 07:52:28'),
(72, 'Societies under The Haryana Registration and Regulation of Societies  Act, 2012', '<script> window.location=\'regulation.php\'; </script>', 96, '', '', NULL, b'1', 72, '2020-02-22 13:23:00', '2020-06-17 07:59:33'),
(73, 'Registration of Trust & Society under Section 12AA of income tax act', '<script> window.location=\'12aa.php\'; </script>', 97, '', '', NULL, b'1', 73, '2020-02-22 13:23:00', '2020-06-17 06:59:53'),
(74, 'Registration of Trust & Society under FCRA', '<script> window.location=\'fcar.php\'; </script>', 98, '', '', NULL, b'1', 74, '2020-02-22 13:23:00', '2020-06-17 06:59:38'),
(75, 'NOC from DTP', '<script> window.location=\'dtp.php\'; </script>', 99, '', '', NULL, b'1', 75, '2020-02-22 13:23:00', '2020-06-17 06:59:24'),
(76, 'NOC from Forest Department', '<script> window.location=\'forest.php\'; </script>', 100, '', '', NULL, b'1', 76, '2020-02-22 13:23:00', '2020-06-17 06:59:10'),
(77, 'NOC from Fire department', '<script> window.location=\'fire.php\'; </script>', 101, '', '', NULL, b'1', 77, '2020-02-22 13:23:00', '2020-06-17 06:58:53'),
(78, 'NOC from NHAI', '<script> window.location=\'nhai.php\'; </script>', 102, '', '', NULL, b'1', 78, '2020-02-22 13:23:00', '2020-06-17 06:58:38'),
(79, 'Form & Fees', '<script> window.location=\'form fees.php\'; </script>', 190, 'form', 'demo', 'none', b'1', 190, '2020-05-04 18:03:39', '2020-05-05 14:50:21'),
(80, 'Manual', '<script> window.location=\'patents mannual.php\'; </script>', 191, 'Mannual', 'mannual of patents', 'Null', b'1', 20, '2020-05-05 13:04:44', '2020-05-12 14:27:12'),
(81, 'Acts', '<script> window.location=\'patents act.php\'; </script>', 192, 'acts', 'act of patents', 'null', b'1', 20, '2020-05-05 14:28:59', '2020-05-05 14:50:32'),
(82, 'Rules', '<script> window.location=\'patents rule.php\' </script>', 193, 'Rules', 'rules of patents', 'null', b'1', 1, '2020-05-05 14:35:29', '2020-05-05 14:50:39'),
(83, 'Acts', '<script> window.location=\'design acts.php\' </script>', 194, 'acts of design', 'acts', 'null', b'1', 1, '2020-05-05 14:55:49', '2020-05-05 14:55:49'),
(84, 'Manual', '<script> window.location=\'design mannual.php\' </script>', 195, 'Mannual', 'mannual of design', 'null', b'1', 1, '2020-05-05 15:05:06', '2020-05-12 14:26:40'),
(85, 'Rules', '<script> window.location=\'Design rule.php\' </script>', 196, 'rules', 'rules of design', 'null', b'1', 1, '2020-05-05 15:03:25', '2020-05-05 15:05:01'),
(86, 'Acts', '<script> window.location=\'tm acts.php\' </script>', 197, 'acts', 'acts of trade mark', 'null', b'1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Manual', '<script> window.location=\'tm mannual.php\' </script>', 198, 'Mannnual', 'mannual of trade marks', 'noll', b'1', 1, '2020-05-05 15:12:02', '2020-05-12 14:26:22'),
(88, 'Rules', '<script> window.location=\'tm rule.php\' </script>', 199, 'rules', 'rules of tm', 'null', b'1', 1, '2020-05-05 15:13:43', '2020-05-05 15:13:43'),
(89, 'Form & Fees', '<script> window.location=\'tm form.php\' </script>', 200, 'form and fees', 'form and fees of tm', 'null', b'1', 1, '2020-05-05 15:15:06', '2020-05-05 15:15:06'),
(90, 'Form & fees', '<script> window.location=\'design form.php\'; </script>', 201, 'form and fees', 'form and fees', 'null', b'1', 1, '2020-05-06 08:23:28', '2020-05-06 08:23:28'),
(91, 'Bare Acts', '<script> window.location=\'bareact.php\'; </script>', 217, 'bares acts', 'bare and acts', 'null', b'1', 2, '2020-05-06 11:20:26', '2020-05-30 07:01:03'),
(93, 'Controlled Area Details List & Notifications', '<script> window.location=\'controlled_area.php\'; </script>', 202, 'Controlled Area Details List & Notifications', 'Controlled Area Details List & Notifications', NULL, b'1', 1, '2020-05-08 14:47:42', '2020-05-08 14:47:42'),
(94, 'Urban Area Details List & Notifications', '<script> window.location=\'urban.php\'; </script>', 203, 'Urban Area Details List & Notifications', 'Urban Area Details List & Notifications', NULL, b'1', 2, '2020-05-08 14:47:42', '2020-05-08 14:47:42'),
(95, 'Final Development Plan List & Notifications', '<script> window.location=\'Final_Development_Plan.php\'; </script>', 204, 'Final Development Plan List & Notifications', 'Final Development Plan List & Notifications', NULL, b'1', 3, '2020-05-08 14:47:42', '2020-05-08 14:47:42'),
(96, 'Draft Development Plan List & Notifications', '<script> window.location=\'draft.php\'; </script>', 205, 'Draft Development Plan List & Notifications', 'Draft Development Plan List & Notifications', NULL, b'1', 4, '2020-05-08 14:47:42', '2020-05-08 14:47:42'),
(97, 'Procedure & Checklist', '<script> window.location=\'CLU.php\'; </script>', 206, 'Procedure & Checklist', 'Procedure & Checklist', NULL, b'0', 1, '2020-05-08 14:47:42', '2020-05-08 14:48:02'),
(98, 'List Of E-Services', '<script> window.location=\'e-services.php\' </script>', 207, 'List Of E-Services', 'List Of E-Services', NULL, b'1', 1, '2020-05-08 14:59:05', '2020-05-08 14:59:05'),
(99, 'Procedure for Obtaining Consent to Establish', '<script> window.location=\'new_unit.php\' </script>', 208, 'Procedure for Obtaining Consent to Establish', 'Procedure for Obtaining Consent to Establish', NULL, b'1', 1, '2020-05-08 15:39:41', '2020-05-08 15:39:41'),
(100, 'Procedure to Operate', '<script> window.location=\'renew.php\' </script>', 209, 'HOW TO RENEW CONSENT', 'HOW TO RENEW CONSENT', NULL, b'1', 1, '2020-05-08 15:42:17', '2020-05-08 15:57:39'),
(101, 'Red', '<script> window.location=\'red.php\'; </script>', 210, 'red', 'red', NULL, b'1', 1, '2020-05-08 17:27:24', '2020-05-27 08:18:44'),
(102, 'Orange', '<script> window.location=\'orange.php\'; </script>', 210, 'Orange', 'Orange', NULL, b'1', 2, '2020-05-08 17:28:27', '2020-05-27 08:19:15'),
(103, 'Green', '<script> window.location=\'green.php\'; </script>', 210, 'Green', 'Green', NULL, b'1', 3, '2020-05-08 17:29:05', '2020-05-27 08:19:36'),
(104, 'White', '<script> window.location=\'white.php\'; </script>', 210, 'white', 'white', NULL, b'1', 4, '2020-05-08 17:30:16', '2020-05-27 08:19:59'),
(105, 'Fee Structure for Obtaining CTE, CTO, Sampling and Public Hearing', '<script> window.location=\'cte.php\'; </script>', 211, 'Fee Structure', 'Fee Structure', NULL, b'1', 1, '2020-05-08 15:51:34', '2020-06-02 11:21:57'),
(106, 'Water Pollution', '<script> window.location=\'water.php\' </script>', 212, 'WATER PREVENTION AND CONTROL OF POLLUTION', 'WATER PREVENTION AND CONTROL OF POLLUTION', NULL, b'1', 1, '2020-05-08 15:56:35', '2020-05-08 15:56:35'),
(107, 'Air Pollution', '<script> window.location=\'air.php\' </script>', 212, 'AIR POLLUTION', 'AIR POLLUTION', NULL, b'1', 2, '2020-05-08 15:56:35', '2020-05-27 08:58:40'),
(108, 'Noise Pollution', '<script> window.location=\'noise.php\' </script>', 212, 'NOISE POLLUTION', 'NOISE POLLUTION', NULL, b'1', 3, '2020-05-08 15:56:35', '2020-05-27 08:58:59'),
(109, 'Waste Management', '<script> window.location=\'waste.php\' </script>', 212, 'Waste Management', 'Waste Management', NULL, b'1', 4, '2020-05-08 15:56:35', '2020-05-08 15:56:35'),
(110, 'Factory Act', '<script> window.location = \'factory act.php\'; </script>', 213, 'Factory Act', 'Factory Act', NULL, b'1', 1, '2020-05-09 11:04:22', '2020-05-09 11:04:22'),
(111, 'Shop Act', '<script> window.location = \'shop.php\'; </script>', 214, 'Shop Act', 'Shop Act', NULL, b'1', 1, '2020-05-09 11:04:22', '2020-05-09 11:04:22'),
(112, 'BOCW Establishment Act', '<script> window.location =\'bocw.php\'; </script>', 215, 'BOCW Establishment Act', 'BOCW Establishment Act', NULL, b'1', 1, '2020-05-09 11:05:42', '2020-05-09 11:05:42'),
(113, 'Enforcement Of Labour Laws', '<script> window.location = \'labour.php\'; </script>', 216, 'Enforcement Of Labour Laws', 'Enforcement Of Labour Laws', NULL, b'1', 1, '2020-05-09 11:08:37', '2020-05-09 11:08:37'),
(114, 'Notification of EPP-2015', '<script> window.location=\'notifications.php\' </script>', 1, 'Notification of EPP-2015', 'Notification of EPP-2015', NULL, b'1', 2, '2020-05-26 07:42:54', '2020-05-27 08:55:46'),
(115, 'Blockwise Categorization', '<script> window.location =\'blockwise.php\'; </script>', 1, 'notice', 'notice', NULL, b'1', 3, '2020-05-26 07:42:54', '2020-05-26 07:46:33'),
(116, 'Restrictive Industries Under EPP-2015', '<script> window.location = \'restrictive.php\' ; </script>', 1, 'restrictive', 'restrictive', NULL, b'1', 4, '2020-05-26 07:42:54', '2020-05-26 11:34:36'),
(117, 'Sectorwise Incentives Under EPP-2015', '<script> window.location = \'sectorwise.php\' ; </script>', 1, 'Sectorwise Incentives Under EPP-2015', 'Sectorwise Incentives Under EPP-2015', NULL, b'1', 5, '2020-05-26 07:42:54', '2020-05-26 07:42:54'),
(118, 'Details For Various State Governments Incentives', '<script> window.location = \'incentive.php\' ; </script>', 1, 'Incentives detail', 'Incentives detail', NULL, b'1', 6, '2020-05-26 07:42:54', '2020-05-28 10:47:55'),
(119, 'Notification', '<script> window.location = \'notification.php\' ; </script>', 1, 'Notisfications', 'Notisfications', NULL, b'1', 7, '2020-05-26 07:43:30', '2020-05-26 09:51:00'),
(120, 'Establishing an Industrial Project ', '<script> window.location=\'establishment.php\'; </script>', 218, 'Establishing an Industrial Project', 'Establishing an Industrial Project', NULL, b'1', 1, '2020-05-26 08:14:57', '2020-05-26 10:14:39'),
(121, 'Industry Licensing Policy', '<script> window.location=\'industry.php\'; </script>', 219, 'Industry Licensing Policy\r\n', 'Industry Licensing Policy\r\n', NULL, b'1', 1, '2020-05-26 08:14:57', '2020-05-26 10:07:31'),
(122, 'Approvals Required for Establishing an Industrial Project', '<script> window.location=\'approvals.php\'; </script>', 220, 'Approvals Required for Establishing an Industrial Project', 'Approvals Required for Establishing an Industrial Project', NULL, b'1', 18, '2020-05-26 08:14:57', '2020-05-28 10:44:58'),
(123, 'MSME Act 2006', '<script> window.location=\'msme.php\'; </script>', 182, '', '', NULL, b'0', 1, '2020-05-30 07:15:55', '2020-06-02 11:19:29'),
(124, 'Central Acts/Rules', '<script> window.location=\'central act.php\'; </script>', 221, 'central acts', 'central acts', 'null', b'1', 1, '2020-05-30 10:41:42', '2020-05-30 11:03:33'),
(125, 'State Acts/Rules', '<script> window.location=\'state.php\'; </script>', 222, 'state', 'state', 'null', b'1', 1, '2020-05-30 10:43:22', '2020-05-30 11:03:21'),
(126, 'Stone Crusher', '<script> window.location=\'stone.php\'; </script>', 212, 'stone crusher', 'stone', 'Null', b'1', 5, '2020-05-30 10:53:09', '2020-05-30 10:53:09'),
(127, 'Screening Plants', '<script> window.location=\'screening.php\'; </script>', 212, 'sks', 'an', 'null', b'1', 6, '2020-05-30 10:53:09', '2020-05-30 10:53:09'),
(128, 'Hot Mix Plant', '<script> window.location=\'hot_plant.php\'; </script>', 212, 'hot plant', 'hot plant', 'null', b'1', 7, '2020-05-30 10:55:47', '2020-05-30 11:06:27'),
(129, 'Others', '<script> window.location=\'others.php\'; </script>', 212, 'others', 'others', 'null', b'1', 8, '2020-05-30 10:55:47', '2020-05-30 11:06:23'),
(130, 'Checklist Of Documents Of All Services', '<script> window.location=\'tcpchecklist.php\'; </script>', 226, 'checklist', 'hecklist of document', 'null', b'1', 1, '2020-06-01 07:21:38', '2020-06-01 07:24:33'),
(131, 'Function & Policies', '<script> window.location=\'tcpfunction.php\'; </script>', 227, 'Function & Policies', 'Function & Policies', 'null', b'1', 1, '2020-06-01 07:35:22', '2020-06-01 07:35:22'),
(132, 'Act & Rules', '<script> window.location=\'tcpacts.php\'; </script>', 228, 'act', 'rule', 'null', b'1', 1, '2020-06-01 07:40:58', '2020-06-01 08:08:58'),
(133, 'Society Acts & Rules ', '<script> window.location=\'society.php\'; </script>', 229, 'act', 'act', 'null', b'1', 1, '2020-06-01 08:55:11', '2020-06-01 08:55:11'),
(134, 'Udyog Aadhar Memorandum', '<script> window.location=\'udyog.php\'; </script>', 230, '', '', NULL, b'1', 0, '2020-06-01 09:44:18', '2020-06-18 07:53:33'),
(135, 'Registration of Boilers', '<script> window.location=\'rboiler.php\'; </script>', 231, '', '', NULL, b'1', 0, '2020-06-01 09:44:18', '2020-06-18 07:53:30'),
(136, 'Renewal of Registration for Boilers', '<script> window.location=\'renewalboil.php\'; </script>', 232, '', '', NULL, b'0', 0, '2020-06-01 09:44:18', '2020-06-01 09:44:18'),
(138, 'Verification of Boilers', '<script> window.location =\'vboiler.php\'; </script>', 234, 'boiler', 'boiler', 'null', b'1', 1, '2020-06-01 09:44:18', '2020-06-01 10:35:36'),
(139, 'Verification of Firm', '<script> window.location =\'vfirm.php\'; </script>', 235, 'firm', 'firm', 'null', b'1', 1, '2020-06-01 09:44:18', '2020-06-01 10:38:26'),
(140, 'Registration of Societies', '<script> window.location =\'regsociety.php\'; </script>', 237, 'socity', 'so', 'null', b'1', 1, '2020-06-01 09:44:18', '2020-06-01 11:04:21'),
(141, 'Registration of Firms', '<script> window.location =\'regfirm.php\'; </script>', 238, 'firm', 'firm', 'null', b'1', 1, '2020-06-01 09:44:18', '2020-06-01 11:04:51'),
(142, 'Incentive Schemes', '<script> window.location =\'eincentive.php\'; </script>', 239, 'incentive', 'incentive', 'null', b'1', 1, '2020-06-01 09:44:18', '2020-06-01 11:09:17'),
(144, 'Verification of Society', '<script> window.location =\'vsociety.php\'; </script>', 236, 'verify', 'verify', 'null', b'1', 1, '2020-06-01 09:44:18', '2020-06-02 10:50:07'),
(145, 'Invest Haryana HEPC Portal', '<script> window.location=\'hepc.php\'; </script>', 242, 'hepc', 'hepc', 'null', b'1', 1, '2020-06-02 10:53:26', '2020-06-02 11:15:00'),
(146, 'Apply for Service', '<script> window.location=\'apply.php\'; </script>', 242, 'apply', 'apply', 'null', b'1', 2, '2020-06-02 10:53:26', '2020-06-02 10:53:26'),
(147, 'New Agricultural Marketing Infrastructure', '<Script> window.location=\'agrmarketing.php\'; </script>', 48, 'agri', 'agri', 'null', b'1', 1, '2020-06-11 08:12:16', '2020-06-11 08:12:16'),
(148, 'National Livestock Mission', '<script> window.location=\'mission.php\'; </script>', 48, 'mision', 'mission', 'null', b'1', 2, '2020-06-11 08:12:16', '2020-06-11 08:40:08'),
(149, 'Credit Link Capital Subsidy Scheme (CLCSS)', '<script> window.location=\'clcss.php\'; </script>', 243, 'credit', 'clcss', 'null', b'1', 1, '2020-06-11 09:38:33', '2020-06-11 09:38:33'),
(150, 'Cluster Scheme', '<script> window.location=\'cluster.php\'; </script>', 244, 'cluster', 'cluster', 'null', b'1', 1, '2020-06-11 09:38:33', '2020-06-11 09:38:33'),
(151, 'Performance & Credit Rating Scheme', '<script> window.location=\'rating.php\'; </script>', 45, 'performance', 'performance', 'null', b'1', 1, '2020-06-12 09:01:37', '2020-06-12 09:01:37'),
(152, 'Stand-Up India', '<script> window.location=\'standup.php\'; </script>', 46, 'stand', 'up', 'null', b'1', 1, '2020-06-12 09:23:06', '2020-06-12 09:28:47'),
(153, 'Start-Up India', '<script> window.location=\'startup.php\'; </script>', 78, 'startup', 'up', 'null', b'1', 1, '2020-06-12 09:35:22', '2020-06-12 09:42:30'),
(154, 'Trade Related Entrepreneurship Assistance and Development (TREAD) Scheme for Women', '<script> window.location=\'woman.php\'; </script>', 108, 'women\r\n', 'women', 'null', b'1', 1, '2020-06-12 09:54:35', '2020-06-12 10:09:46'),
(155, '	Prime Minister Employment Generation Programme and Other Credit Support Schemes', '<script> window.location=\'tradtional.php\'; </script>', 109, 'abc', 'abc', 'null', b'1', 1, '2020-06-12 10:05:09', '2020-06-19 09:13:48'),
(156, 'National Awards Scheme (Individual MSEs)', '<script> window.location=\'national.php\'; </script>', 111, 'national', 'national', 'null', b'1', 1, '2020-06-13 05:40:58', '2020-06-13 05:59:37'),
(157, 'Entrepreneurial and Managerial Development of SMEs through Incubators', '<script> window.location=\'smes.php\'; </script>', 112, 'smes', 'enterprenure', 'enter', b'1', 1, '2020-06-13 06:30:35', '2020-06-13 06:30:35'),
(158, 'Scheme for Integrated Textile Parks', '<script> window.location = \'textile.php\'; </script>', 113, 'texttile', 'texttile', 'null', b'1', 1, '2020-06-13 07:09:12', '2020-06-13 07:09:12'),
(159, 'Mega Food Park', '<script> window.location = \'foods.php\'; </script>', 115, 'mega', 'food', 'null', b'1', 1, '2020-06-13 07:12:33', '2020-06-13 07:12:33'),
(160, 'Rural Industry Service Centre (RISC) for Khadi and Village Industries', '<script> window.location = \'risc.php\'; </script>', 117, 'risc', 'risc', 'null', b'0', 1, '2020-06-13 07:54:20', '2020-06-13 07:54:20'),
(162, 'Design Clinic for Design Expertise to MSMEs Manufacturing Sector (DESIGN)', '<script> window.location = \'clinic.php\'; </script>', 119, 'clinic', 'clinic', 'null', b'1', 1, '2020-06-13 07:55:30', '2020-06-13 07:55:30'),
(163, 'Cold Chain', '<script> window.location = \'cold.php\'; </script>', 116, 'cold', 'cold', 'null', b'1', 1, '2020-06-13 08:36:15', '2020-06-13 08:36:15'),
(164, 'Marketing Development Assistance to MSMEs (MDA-Bar Code)', '<script> window.location = \'market.php\'; </script>', 120, 'market', 'market', 'null', b'1', 1, '2020-06-13 08:55:58', '2020-06-13 08:55:58'),
(165, 'Building Awareness on Intellectual Property Rights', '<script> window.location = \'buliding.php\'; </script>', 121, 'bulid', '', NULL, b'1', 1, '2020-06-16 08:52:53', '2020-06-16 09:02:33'),
(166, 'Market Development Assistance ( MDA)', '<script> window.location = \'marketing.php\'; </script>', 122, 'm', 'm', 'null', b'1', 1, '2020-06-16 08:52:53', '2020-06-16 09:06:11'),
(167, 'Single Point Registration', '<script> window.location = \'single.php\'; </script>', 123, 's', 's', 'null', b'1', 1, '2020-06-16 08:52:53', '2020-06-16 08:52:53'),
(168, 'Raw Material Assistance', '<script> window.location = \'raw.php\'; </script>', 124, 'r', 'r', 'null', b'1', 1, '2020-06-16 08:52:53', '2020-06-16 08:52:53'),
(169, 'NSIC Infrastructure', '<script> window.location = \'infrastructure.php\'; </script>', 125, 'n', 'i', 'null', b'1', 1, '2020-06-16 08:52:53', '2020-06-16 08:52:53'),
(170, 'Marketing Assistance & Technology Upgradation (MATU)', '<script> window.location = \'upgrade.php\'; </script>', 126, 'up', 'up', 'null', b'1', 1, '2020-06-16 08:52:53', '2020-06-16 08:52:53'),
(171, 'Lean Manufacturing Competitiveness for MSMEs', '<script> window.location = \'lean.php\'; </script>', 128, 'lean', 'l', 'null', b'1', 1, '2020-06-16 08:52:53', '2020-06-16 08:52:53'),
(172, 'Technology and Quality Upgradation Support to MSMEs (TEQUP)', '<script> window.location = \'quality.php\'; </script>', 129, 'q', 'q', 'null', b'1', 1, '2020-06-16 08:52:53', '2020-06-16 08:52:53'),
(173, 'Quality Management Standards (QMS) and Quality Technology Tools (QTT)', '<script> window.location = \'qms.php\'; </script>', 130, 'abc', 'cs', 'null', b'1', 1, '2020-06-16 08:52:53', '2020-06-16 08:52:53'),
(174, 'Make in India', '<script> window.location = \'india.php\'; </script>', 131, 'df', 'dsf', 'null', b'1', 1, '2020-06-16 08:52:53', '2020-06-16 08:52:53'),
(175, 'BIS Registration', '<script> window.location = \'bis.php\'; </script>', 180, 'null', 'abc', 'null', b'1', 1, '2020-06-16 09:33:07', '2020-06-16 09:33:24'),
(176, 'ISO Registration', '<script> window.location = \'iso.php\'; </script>', 181, 'fd', 'df', 'null', b'1', 1, '2020-06-16 09:33:07', '2020-06-16 09:33:07'),
(177, 'Haryana Estate Management Policy – 2015', '<script> window.location=\'estate.php\'; </script>', 155, 'estate', 'estate', 'null', b'1', 1, '2020-06-17 09:29:56', '2020-06-17 09:29:56'),
(178, 'Haryana Solar Power Policy, 2016', '<script> window.location=\'solar.php\'; </script>', 55, 'solar', 'solar', 'null', b'1', 1, '2020-06-17 09:37:12', '2020-06-17 09:37:12'),
(179, 'Warehouse Policy', '<script> window.location=\'warehouse.php\'; </script>', 156, 'warehose', 'warehouse', 'null', b'1', 1, '2020-06-17 09:39:16', '2020-06-17 09:39:16'),
(180, 'FSSAI License ', '<script> window.location=\'fssai.php\'; </script>', 158, 'fssai', 'fssai', 'null', b'1', 1, '2020-06-17 09:48:15', '2020-06-17 09:48:15'),
(181, 'Import-Export Code', '<script> window.location=\'iec.php\'; </script>', 159, 'iec', 'iec', 'null', b'1', 1, '2020-06-17 09:59:15', '2020-06-17 09:59:15'),
(182, 'APPLICATION FORM FOR NEW BRICK KILN LICENCE', '<script> window.location=\'brick.php\'; </script>', 160, 'brick', 'brick', 'null', b'1', 1, '2020-06-17 10:02:24', '2020-06-17 10:02:24'),
(183, 'Common Effluent Treatment Plants (CETPs) ', '<script> window.location=\'common.php\'; </script>', 118, 'dsd', 'sdsd', 'null', b'1', 1, '2020-06-18 07:56:17', '2020-06-18 07:56:17'),
(184, 'Zero Defect Zero Effect', '<script> window.location=\'zero.php\'; </script>', 127, 'fgf', 'dgd', NULL, b'1', 1, '2020-06-18 07:59:25', '2020-06-18 07:59:25'),
(185, 'Organic Fertilizer Licenses', '<script> window.location=\'organic.php\'; </script>', 157, 'hjg', '', 'null', b'1', 1, '2020-06-18 08:43:06', '2020-06-18 08:43:06'),
(186, 'Scheme of Information, Education and Communication', '<script> window.location=\'t9.php\'; </script>', 109, 'ng', 'hgh', NULL, b'1', 9, '2020-06-19 09:08:22', '2020-06-19 09:08:22'),
(187, 'National SC-ST-HUB', '<script> window.location=\'t8.php\'; </script>', 109, 'asds', 'sd', NULL, b'1', 8, '2020-06-19 09:08:22', '2020-06-19 09:08:22'),
(188, 'Infrastructure Development Programme', '<script> window.location=\'t6.php\'; </script>', 109, '', '', NULL, b'1', 6, '2020-06-19 09:09:46', '2020-06-19 09:09:46'),
(189, 'Scheme of Surveys, Studies and Policy Research', '<script> window.location=\'t7.php\'; </script>', 109, '', '', NULL, b'1', 7, '2020-06-19 09:09:46', '2020-06-19 09:09:46'),
(190, 'Entrepreneurship and skill Development Programme', '<script> window.location=\'t5.php\'; </script>', 109, '', '', NULL, b'1', 5, '2020-06-19 09:11:18', '2020-06-19 09:11:18'),
(191, 'Marketing Promotion Schemes', '<script> window.location=\'t4.php\'; </script>', 109, '', '', NULL, b'1', 4, '2020-06-19 09:11:18', '2020-06-19 09:11:18'),
(192, 'Technology Upgradation and Quality Certification', '<script> window.location=\'t3.php\'; </script>', 109, '', '', NULL, b'1', 3, '2020-06-19 09:12:23', '2020-06-19 09:12:23'),
(193, 'Development of Khadi, Village and Coir Industries', '<script> window.location=\'t2.php\'; </script>', 109, '', '', NULL, b'1', 2, '2020-06-19 09:12:23', '2020-06-19 09:16:25'),
(194, 'Urban Local Bodies', '<script> window.location=\'urban bodies.php\'; </script>', 165, 'dkfj', 'djf', 'dkj', b'1', 1, '2020-06-20 07:50:20', '2020-06-20 07:50:20'),
(195, 'CAF (Common Application Form)', '<script> window.location=\'caf.php\'; </script>', 161, 's', 'sd', NULL, b'1', 1, '2020-06-20 08:00:22', '2020-06-20 08:00:22'),
(196, 'Labour Department Factory Wing', '<script> window.location=\'factory wing.php\'; </script>', 162, 'dhf', 'ksfh', 'null', b'1', 1, '2020-06-20 08:36:45', '2020-06-20 08:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(800) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `product` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(128) NOT NULL,
  `service_description` varchar(2000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `service_description`, `created_at`, `updated_at`) VALUES
(1, 'Project Report', 'Experts in creating all sorts of project reports', '2019-03-22 07:48:04', '2019-03-22 07:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `BLOOD_GROUP` varchar(255) DEFAULT NULL,
  `CREATED_AT` datetime NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `FULL_NAME` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `IS_ACTIVE` bit(1) NOT NULL,
  `MOBILE_NUMBER` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `UPDATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `menu_category`
--
ALTER TABLE `menu_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_trd73urwjt4pfeih67jqoijsq` (`cid`);

--
-- Indexes for table `menu_cat_service`
--
ALTER TABLE `menu_cat_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_h88jcij83rqvuuww6ppsl930d` (`category`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `UK_2ieb0i2ccycbcw4h4j92soklm` (`MOBILE_NUMBER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menu_category`
--
ALTER TABLE `menu_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `menu_cat_service`
--
ALTER TABLE `menu_cat_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_category`
--
ALTER TABLE `menu_category`
  ADD CONSTRAINT `FK_trd73urwjt4pfeih67jqoijsq` FOREIGN KEY (`cid`) REFERENCES `menu` (`id`);

--
-- Constraints for table `menu_cat_service`
--
ALTER TABLE `menu_cat_service`
  ADD CONSTRAINT `FK_h88jcij83rqvuuww6ppsl930d` FOREIGN KEY (`category`) REFERENCES `menu_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
