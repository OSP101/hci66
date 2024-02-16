-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 08:04 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hci66`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
`id` int(11) NOT NULL,
  `userid` varchar(11) NOT NULL,
  `orginal` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `filetype` varchar(50) NOT NULL,
  `filesize` float NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `userid`, `orginal`, `hash`, `filetype`, `filesize`, `create_at`, `delete_at`) VALUES
(100, 'g00', 'ASS3_Sec2_663380162-7 (1).pdf', 'doc_17820469220240216_065958_0.pdf', '.pdf', 25137200, '2024-02-16 05:59:58', '2024-02-16 13:35:59'),
(101, '663380182-1', 'LAB03 - Flow Chart.pdf', 'doc_188745199420240216_073644_0..pdf', '.pdf', 1299810, '2024-02-16 06:36:44', '2024-02-16 13:38:39'),
(102, 'g02', '2-ความรู้พื้นฐานเกี่ยวกับความคิดสร้างสรรค์.pdf', 'doc_139858850520240216_073646_0.pdf', '.pdf', 550014, '2024-02-16 06:36:46', NULL),
(103, '663380148-1', 'Clairo, Kathy.pdf', 'doc_153468156120240216_073704_0..pdf', '.pdf', 852106, '2024-02-16 06:37:04', NULL),
(104, '663380172-4', 'HS 112 003 ISA - Number 05 - How teens deal with the spread of misinformation - Part 1.pdf', 'doc_178947194720240216_073707_0..pdf', '.pdf', 3927050, '2024-02-16 06:37:07', '2024-02-16 13:41:02'),
(105, '663380168-5', 'Lab06_663380168-5.pdf', 'doc_92510956520240216_073735_0..pdf', '.pdf', 828209, '2024-02-16 06:37:35', '2024-02-16 13:37:47'),
(106, 'g00', 'ASS3_Sec2_663380162-7 (1).pdf', 'doc_92153929020240216_073826_0.pdf', '.pdf', 25137200, '2024-02-16 06:38:26', NULL),
(107, '663380497-6', 'Quizz Chapter 5 (1).pdf', 'doc_206528449820240216_073901_0..pdf', '.pdf', 650926, '2024-02-16 06:39:01', '2024-02-16 13:41:02'),
(108, '663380154-6', '892c9df87bc02d69860b494c3be12fad.jpg', 'doc_58825497820240216_073939_0..jpg', '.jpg', 42801, '2024-02-16 06:39:39', '2024-02-16 13:43:14'),
(109, '663380179-0', '20240122_220957.heic', 'doc_34994239520240216_073950_0..heic', '.heic', 1307410, '2024-02-16 06:39:50', '2024-02-16 13:43:15'),
(110, '663380179-0', 'ASS4_Sec2_663380179-0.pdf', 'doc_206218618920240216_074356_0..pdf', '.pdf', 32823900, '2024-02-16 06:43:56', '2024-02-16 13:44:11'),
(111, '663380170-8', 'Lab9_G5_Sec2.pdf', 'doc_13051597320240216_074427_0..pdf', '.pdf', 3742710, '2024-02-16 06:44:27', '2024-02-16 13:45:50'),
(112, '663380160-1', 'ASS5_Sec2_663380160-1.pdf', 'doc_168075835220240216_074439_0..pdf', '.pdf', 22315200, '2024-02-16 06:44:39', '2024-02-16 13:45:22'),
(113, '663380150-4', 'ASS5_Sec_663380150-4.pdf', 'doc_133086223620240216_074439_0..pdf', '.pdf', 9280260, '2024-02-16 06:44:39', '2024-02-16 13:45:21'),
(114, '663380003-7', 'ASS5_Sec2_663380003-7.pdf', 'doc_18840704420240216_074439_0..pdf', '.pdf', 10077600, '2024-02-16 06:44:39', '2024-02-16 13:46:54'),
(115, '663380160-1', 'ASS5_Sec2_663380160-1.pdf', 'doc_66191065420240216_074441_0..pdf', '.pdf', 22315200, '2024-02-16 06:44:41', '2024-02-16 13:45:30'),
(116, 'g17', 'Screenshot_2024-02-16-13-36-51-40_40deb401b9ffe8e1df2f1cc5ba480b12.jpg', 'doc_207447340320240216_074444_0.jpg', '.jpg', 416022, '2024-02-16 06:44:44', '2024-02-16 13:53:24'),
(117, '663380142-3', 'ASS5_Sec2_663380142-3.pdf', 'doc_114327944920240216_074635_0..pdf', '.pdf', 15393600, '2024-02-16 06:46:35', '2024-02-16 13:46:55'),
(118, 'g00', 'PL3_N.pdf', 'doc_101683886420240216_074828_0.pdf', '.pdf', 169913, '2024-02-16 06:48:28', NULL),
(119, '663380485-3', 'ASS5_Sec2_663380485-3.pdf.pdf', 'doc_2373086020240216_075051_0..pdf', '.pdf', 3277380, '2024-02-16 06:50:51', '2024-02-16 13:51:01'),
(120, 'g00', 'ASS3_Sec2_663380162-7 (1).pdf', 'doc_146377454820240216_093116_0.pdf', '.pdf', 25137200, '2024-02-16 08:31:16', NULL),
(121, 'g32', 'ภาพถ่ายหน้าจอ 2567-02-16 เวลา 12.14.55.pdf', 'doc_71978928520240216_093146_0.pdf', '.pdf', 1678560, '2024-02-16 08:31:46', NULL),
(122, 'g20', 'ASS3_Sec3_663380560-5.pdf', 'doc_67924504620240216_093205_0.pdf', '.pdf', 10063800, '2024-02-16 08:32:05', '2024-02-16 15:35:13'),
(123, 'g20', 'ASS3_Sec3_663380560-5.pdf', 'doc_190665479120240216_093206_0.pdf', '.pdf', 10063800, '2024-02-16 08:32:06', '2024-02-16 15:35:19'),
(124, 'g31', 'Ass6 _663380560-5_Sec2.pdf', 'doc_146247416120240216_093242_0.pdf', '.pdf', 670813, '2024-02-16 08:32:42', '2024-02-16 15:34:02'),
(125, '6330203136', 'ASS3_Sec2_663380179-0.pdf', 'doc_60846630720240216_093434_0..pdf', '.pdf', 7043210, '2024-02-16 08:34:34', '2024-02-16 15:35:30'),
(126, 'g28', 'ASS4_Sec3_663380579-4.pdf', 'doc_173114306120240216_093443_0.pdf', '.pdf', 55463100, '2024-02-16 08:34:43', NULL),
(127, '6330203136', 'ASS3_Sec2_663380179-0.pdf', 'doc_196306880320240216_093456_0..pdf', '.pdf', 7043210, '2024-02-16 08:34:56', NULL),
(128, 'g00', 'ASS3_Sec2_663380179-0.pdf', 'doc_214198716820240216_101535_0.pdf', '.pdf', 7043210, '2024-02-16 09:15:35', NULL),
(129, '6330203136', 'ASS3_Sec2_663380179-0.pdf', 'doc_97237844620240216_111340_0..pdf', '.pdf', 7043210, '2024-02-16 10:13:40', NULL),
(130, '6330203136', 'ASS3_Sec2_663380179-0.pdf', 'doc_33372512420240216_111341_0..pdf', '.pdf', 7043210, '2024-02-16 10:13:41', NULL),
(131, '6330203136', 'ASS3_Sec2_663380179-0.pdf', 'doc_141526870320240216_111343_0..pdf', '.pdf', 7043210, '2024-02-16 10:13:43', NULL),
(132, '633021103-2', 'LAB7_DB-65.docx', 'doc_70345867820240216_111721_0..docx', '.docx', 1203800, '2024-02-16 10:17:21', '2024-02-16 17:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(11) NOT NULL,
  `userid` varchar(11) NOT NULL,
  `topic` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `userid`, `topic`) VALUES
(2, 'g01', 'แอปพลิเคชั่นเกี่ยวกับการเข้าศึกษามหาวิทยาลัยขอนแก่น'),
(3, 'g02', 'แอปพลิเคชันสำหรับการติวความรู้ทั้งก่อนเข้ามาใน มข. และหลังเข้ามาแล้ว'),
(4, 'g03', 'แอปพลิเคชั่นช่วยเหลือในการปรับตัวของนักศึกษาใหม่'),
(5, 'g04', 'แอพช่วยแนะนำสถานที่ต่างๆ ในมหาลัยและบอกรายละเอียดวิชา'),
(6, 'g05', 'แอปพลิเคชันสำหรับการเดินทางภายในมหาวิทยาลัยขอนแก่น'),
(7, 'g06', 'แอปพลิเคชั่นติดตามรถชัตเตอร์บัส ด้วยระบบ RFID'),
(8, 'g07', 'แอปพลิเคชันหาที่พัก'),
(9, 'g08', 'แอพลิเคชันสำหรับผู้ประกอบการ ผู้ให้บริการห้องพัก และนักศึกษาหรือผู้ที่ต้องหาที่พักหรือหอพัก'),
(10, 'g09', 'แอปพลิเคชั่นสำหรับแนะนำร้านอาหารและคาเฟ่รอบมหาวิทยาลัยขอนแก่น'),
(11, 'g10', 'แอปพลิเคชันสำหรับค้นหาร้านอาหารเเละหาเพื่อนในโซนมหาวิทยาลัยขอนแก่น และพื้นที่โซนใกล้เคียง'),
(12, 'g11', 'แอปพลิเคชันสำหรับหาเพื่อนเรียน'),
(13, 'g12', 'แอปพลิเคชั่นสำหรับแจ้งเหตุฉุกเฉินภายใน มข.'),
(14, 'g13', '  Ed KKU'),
(15, 'g14', 'แอปพลิเคชั่นสำหรับแนะนำค่ายอาสาและกิจกรรม ภายในมหาลัยขอนแก่น'),
(16, 'g15', 'แอปรวบรวม,แนะนำค่ายเก็บชั่วโมงจิตอาสา'),
(17, 'g16', 'แอปพลิเคชันการรวมตัวทำกิจกรรมของนักศึกษามหาวิทยาลัยขอนแก่น'),
(18, 'g17', 'แอปพลิเคชันดูแลสุขภาพต่างๆของนักศึกษามหาวิทยาลัยขอนแก่น'),
(19, 'g18', 'แอปพลิเคชั่นขายสินค้าและประมูลสินค้าออนไลน์'),
(20, 'g19', 'แอปพลิเคชันขายของสำหรับนักศึกษา'),
(21, 'g20', 'แอปพลิเคชันช่วยแนะนำเกี่ยวกับมหาวิทยาลัยขอนแก่น'),
(22, 'g21', 'แอปพลิเคชันหาเพื่อน'),
(23, 'g22', 'แอพพลิเคชันความปลอดภัยในมหาวิทยาลัยขอนแก่น'),
(24, 'g23', 'แอปพลิเคชันวางแผนการเรียน'),
(25, 'g24', 'แอปพลิเคชันที่ช่วยในการตัดสินใจเลือกเรียนต่อในแทรคต่างๆ'),
(26, 'g25', 'แอปพลิเคชันให้คำปรึกษาเกี่ยวกับการเรียนการใช้ชีวิต'),
(27, 'g26', 'แอปพลิเคชันค้นหา นศ. นร. หรือ ติวเตอร์มาช่วยสอนในวิชาที่ไม่เข้าใจ'),
(28, 'g27', 'แอปพลิเคชันแนะนำร้านอาหารแถวมข'),
(29, 'g28', 'แอปพลิเคชันหางานพาร์ทไทม์'),
(30, 'g29', 'แอปพลิเคชันหาหอพักบริเวณมหาวิทยาลัยขอนแก่น'),
(31, 'g30', 'แอปพลิเคชันเช็คที่จอดรถในบริเวณมหาวิทยาลัยขอนแก่น'),
(32, 'g31', 'แอพพลิเคชันเกี่ยวกับการหาของหายภายในมหาวิทยาลัยขอนแก่น'),
(33, 'g32', 'แอพพลิเคชันเกี่ยวกับการแพทย์ เพื่อความอำนวยสะดวกแก่นักศึกษา'),
(34, 'g33', 'แอปพลิเคชั่นคำนวนรายรับรายจ่าย'),
(35, 'g34', 'แอปพลิเคชันห้องสมุด'),
(36, 'g35', 'แอปพลิเคชันเกี่ยวกับการติดตามข่าวสาร ช่วยเหลือ รายงาน ความเคลื่อนไหวสังคมในมหาวิทยาลัยขอนแก่น'),
(37, 'g36', 'ไม่ประสงค์แจ้งหัวข้อ'),
(38, 'g00', 'TA Test system upload file');

-- --------------------------------------------------------

--
-- Table structure for table `group_detal`
--

CREATE TABLE IF NOT EXISTS `group_detal` (
`id` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,
  `userid` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=405 ;

--
-- Dumping data for table `group_detal`
--

INSERT INTO `group_detal` (`id`, `groupid`, `userid`) VALUES
(253, 2, '663380166-9'),
(254, 2, '663380172-4'),
(255, 2, '663380497-6'),
(256, 2, '663380501-1'),
(257, 3, '663380180-5'),
(258, 3, '663380184-7'),
(259, 3, '663380006-1'),
(260, 3, '663380162-7'),
(261, 4, '663380187-1'),
(262, 4, '663380169-3'),
(263, 4, '663380174-0'),
(264, 4, '663380161-9'),
(265, 5, '663380177-4'),
(266, 5, '663380144-9'),
(267, 5, '663380171-6'),
(268, 5, '663380173-2'),
(269, 6, '663380181-3'),
(270, 6, '663380192-8'),
(271, 6, '663380145-7'),
(272, 6, '643020394-1'),
(273, 7, '663380158-8'),
(274, 7, '663380159-6'),
(275, 7, '663380164-3'),
(276, 7, '663380176-6'),
(277, 8, '653380372-9'),
(278, 8, '663380001-1'),
(279, 8, '663380196-0'),
(280, 8, '663380152-0'),
(281, 9, '663380487-9'),
(282, 9, '663380165-1'),
(283, 9, '663380163-5'),
(284, 9, '663380499-2'),
(285, 10, '663380185-5'),
(286, 10, '663380496-8'),
(287, 10, '663380146-5'),
(288, 10, '663380191-0'),
(289, 11, '663380142-3'),
(290, 11, '663380160-1'),
(291, 11, '663380170-8'),
(292, 11, '663380168-5'),
(293, 12, '663380154-6'),
(294, 12, '663380175-8'),
(295, 12, '663380179-0'),
(296, 12, '663380489-5'),
(297, 13, '663380193-6'),
(298, 13, '663380486-1'),
(299, 13, '663380182-1'),
(300, 13, '663380500-3'),
(301, 14, '663380002-9'),
(302, 14, '663380003-7'),
(303, 14, '663380151-2'),
(304, 14, '663380178-2'),
(305, 15, '663380004-5'),
(306, 15, '663380005-3'),
(307, 15, '663380485-3'),
(308, 15, '663380490-0'),
(309, 16, '663380148-1'),
(310, 16, '663380488-7'),
(311, 16, '663380183-9'),
(312, 16, '663380150-4'),
(313, 17, '663380188-9'),
(314, 17, '663380189-7'),
(315, 17, '663380190-2'),
(316, 17, '663380195-2'),
(317, 18, '663380194-4'),
(318, 18, '663380156-2'),
(319, 18, '663380157-0'),
(320, 18, '643020410-9'),
(321, 19, '663380492-6'),
(322, 19, '663380149-9'),
(323, 19, '663380147-3'),
(324, 19, '663380495-0'),
(325, 20, '663380563-9'),
(326, 20, '663380631-8'),
(327, 20, '663380635-0'),
(328, 20, '663380580-9'),
(329, 21, '663380354-8'),
(330, 21, '663380349-1'),
(331, 21, '663380576-0'),
(332, 21, '663380357-2'),
(333, 22, '663380348-3'),
(334, 22, '663380582-5'),
(335, 22, '663380581-7'),
(336, 22, '663380371-8'),
(337, 23, '633021074-3'),
(338, 23, '633021080-8'),
(339, 23, '633021102-4'),
(340, 23, '633021103-2'),
(341, 24, '663380583-3'),
(342, 24, '663380355-6'),
(343, 24, '663380637-6'),
(344, 24, '663380638-4'),
(345, 25, '663380338-6'),
(346, 25, '663380346-7'),
(347, 25, '663380554-0'),
(348, 25, '663380366-1'),
(349, 26, '663380556-6'),
(350, 26, '663380358-0'),
(351, 26, '663380571-0'),
(352, 26, '663380632-6'),
(353, 27, '663380555-8'),
(354, 27, '663380352-2'),
(355, 27, '663380360-3'),
(356, 27, '663380365-3'),
(357, 28, '663380568-9'),
(358, 28, '663380347-5'),
(359, 28, '663380344-1'),
(360, 28, '663380564-7'),
(361, 29, '663380364-5'),
(362, 29, '663380565-5'),
(363, 29, '663380575-2'),
(364, 29, '663380579-4'),
(365, 30, '663380343-3'),
(366, 30, '663380628-7'),
(367, 30, '663380633-4'),
(368, 30, '663380634-2'),
(369, 31, '663380363-7'),
(370, 31, '663380370-0'),
(371, 31, '663380345-9'),
(372, 31, '663380044-3'),
(373, 32, '663380340-9'),
(374, 32, '663380560-5'),
(375, 32, '663380569-7'),
(376, 32, '663380570-2'),
(377, 33, '663380372-6'),
(378, 33, '663380578-6'),
(379, 33, '663380367-9'),
(380, 33, '663380559-0'),
(381, 34, '663380573-6'),
(382, 34, '663380359-8'),
(383, 34, '663380361-1'),
(384, 34, '663380341-7'),
(385, 35, '663380562-1'),
(386, 35, '663380574-4'),
(387, 35, '663380558-2'),
(388, 35, '663380561-3'),
(389, 36, '663380362-9'),
(390, 36, '663380351-4'),
(391, 36, '663380342-5'),
(392, 36, '663380572-8'),
(393, 36, '663380630-0'),
(394, 36, '663380368-7'),
(395, 36, '663380577-8'),
(396, 36, '663380629-5'),
(397, 37, '663380630-0'),
(398, 37, '663380368-7'),
(399, 37, '663380577-8'),
(400, 37, '663380629-5'),
(401, 26, '663380337-8'),
(402, 18, '663380143-1'),
(403, 38, '633020334-8'),
(404, 38, '633020313-6');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id` int(11) NOT NULL,
  `userid` varchar(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=476 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `userid`, `type`, `ip`, `detail`, `create_at`) VALUES
(279, '633020334-8', 'Authentication', '172.68.234.153', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Chrome 121.0.0.0', '2024-02-16 02:52:04'),
(280, 'root', 'Setting', '172.68.234.225', 'Set up group work reception => set date and time as 2024-03-06T13:00', '2024-02-16 02:53:39'),
(281, 'root', 'Setting', '172.68.234.225', 'Set up single job reception => set date and time as 2024-03-20T13:00', '2024-02-16 02:54:06'),
(282, '6330203136', 'Authentication', '172.68.241.102', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 04:06:26'),
(283, '633020313-6', 'Authentication', '172.68.241.103', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 04:06:43'),
(284, 'g00', 'Authentication', '172.68.234.225', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 05:58:43'),
(285, 'g00', 'File', '172.68.234.190', 'Upload File', '2024-02-16 05:59:58'),
(286, 'g14', 'Authentication', '172.68.234.152', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:32:16'),
(287, 'g11', 'Authentication', '172.68.241.115', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 06:32:39'),
(288, 'g13', 'Authentication', '172.68.234.170', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.2', '2024-02-16 06:33:04'),
(289, 'g02', 'Authentication', '172.70.188.63', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 06:33:08'),
(290, '663380005-3', 'Authentication', '172.68.234.191', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:33:13'),
(291, '663380005-3', 'Authentication', '172.68.234.191', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:33:15'),
(292, '663380182-1', 'Authentication', '172.70.143.29', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 06:33:31'),
(293, '663380182-1', 'Authentication', '172.70.143.30', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 06:33:34'),
(294, '663380148-1', 'Authentication', '172.68.189.222', 'OS: iPhone; CPU iPhone OS 17_1 like Mac OS X | Browser: Safari 17.1', '2024-02-16 06:33:47'),
(295, '663380148-1', 'Authentication', '172.68.189.223', 'OS: iPhone; CPU iPhone OS 17_1 like Mac OS X | Browser: Safari 17.1', '2024-02-16 06:33:49'),
(296, '663380172-4', 'Authentication', '172.68.189.222', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 06:33:56'),
(297, 'g00', 'Authentication', '172.68.234.171', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:35:32'),
(298, 'root', 'File', '172.68.234.170', 'Delete File => 100', '2024-02-16 06:35:59'),
(299, '663380497-6', 'Authentication', '108.162.227.58', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Unknown ', '2024-02-16 06:36:23'),
(300, '663380182-1', 'File', '172.68.241.76', 'Upload File', '2024-02-16 06:36:44'),
(301, 'g02', 'File', '162.158.106.66', 'Upload File', '2024-02-16 06:36:46'),
(302, '663380168-5', 'Authentication', '172.68.234.153', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.2', '2024-02-16 06:36:57'),
(303, '663380148-1', 'File', '172.68.189.200', 'Upload File', '2024-02-16 06:37:04'),
(304, '663380172-4', 'File', '172.68.189.223', 'Upload File', '2024-02-16 06:37:07'),
(305, '663380168-5', 'File', '172.68.234.152', 'Upload File', '2024-02-16 06:37:35'),
(306, 'root', 'File', '172.68.234.152', 'Delete File => 105', '2024-02-16 06:37:47'),
(307, '663380179-0', 'Authentication', '162.158.189.226', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 06:38:21'),
(308, '663380154-6', 'Authentication', '172.68.189.212', 'OS: Linux; Android 10; K | Browser: Chrome 114.0.0.0', '2024-02-16 06:38:21'),
(309, 'g00', 'File', '172.68.234.170', 'Upload File', '2024-02-16 06:38:26'),
(310, 'root', 'File', '172.68.241.77', 'Delete File => 101', '2024-02-16 06:38:39'),
(311, '663380497-6', 'File', '172.68.241.65', 'Upload File', '2024-02-16 06:39:01'),
(312, 'g17', 'Authentication', '172.68.234.152', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 06:39:16'),
(313, '663380154-6', 'File', '172.68.189.142', 'Upload File', '2024-02-16 06:39:39'),
(314, '663380179-0', 'File', '162.158.189.216', 'Upload File', '2024-02-16 06:39:50'),
(315, '663380180-5', 'Authentication', '162.158.162.173', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 06:40:12'),
(316, '663380160-1', 'Authentication', '172.68.234.170', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 06:40:40'),
(317, '663380172-4', 'Authentication', '172.68.234.224', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.2', '2024-02-16 06:40:48'),
(318, '663380172-4', 'Authentication', '172.68.234.224', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.2', '2024-02-16 06:40:50'),
(319, '663380497-6', 'Authentication', '172.68.234.224', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.2', '2024-02-16 06:40:55'),
(320, 'root', 'File', '172.68.234.225', 'Delete File => 107', '2024-02-16 06:41:02'),
(321, 'root', 'File', '172.68.234.225', 'Delete File => 104', '2024-02-16 06:41:02'),
(322, '663380148-1', 'Authentication', '172.68.189.213', 'OS: iPhone; CPU iPhone OS 17_1 like Mac OS X | Browser: Unknown ', '2024-02-16 06:41:03'),
(323, '663380179-0', 'Authentication', '172.68.234.152', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 16.2', '2024-02-16 06:42:37'),
(324, 'root', 'File', '172.68.189.143', 'Delete File => 108', '2024-02-16 06:43:14'),
(325, 'root', 'File', '172.68.234.153', 'Delete File => 109', '2024-02-16 06:43:15'),
(326, '663380170-8', 'Authentication', '172.68.234.190', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.2', '2024-02-16 06:43:53'),
(327, '663380179-0', 'File', '172.68.234.152', 'Upload File', '2024-02-16 06:43:56'),
(328, '663380150-4', 'Authentication', '172.68.234.152', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 06:43:58'),
(329, '663380003-7', 'Authentication', '172.68.234.152', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:44:00'),
(330, 'root', 'File', '172.68.234.152', 'Delete File => 110', '2024-02-16 06:44:11'),
(331, '663380170-8', 'File', '172.68.234.191', 'Upload File', '2024-02-16 06:44:27'),
(332, '663380196-0', 'Authentication', '108.162.227.111', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 06:44:31'),
(333, '663380160-1', 'File', '172.68.234.170', 'Upload File', '2024-02-16 06:44:39'),
(334, '663380150-4', 'File', '172.68.234.171', 'Upload File', '2024-02-16 06:44:39'),
(335, '663380003-7', 'File', '172.68.234.171', 'Upload File', '2024-02-16 06:44:39'),
(336, '663380160-1', 'File', '172.68.234.171', 'Upload File', '2024-02-16 06:44:41'),
(337, 'g17', 'File', '172.68.234.190', 'Upload File', '2024-02-16 06:44:44'),
(338, 'root', 'File', '172.68.234.152', 'Delete File => 113', '2024-02-16 06:45:21'),
(339, 'root', 'File', '172.68.234.171', 'Delete File => 112', '2024-02-16 06:45:22'),
(340, 'root', 'File', '172.68.234.170', 'Delete File => 115', '2024-02-16 06:45:30'),
(341, 'root', 'File', '172.68.234.190', 'Delete File => 111', '2024-02-16 06:45:50'),
(342, '663380485-3', 'Authentication', '172.68.234.225', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:46:16'),
(343, '663380142-3', 'Authentication', '172.68.234.171', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.2', '2024-02-16 06:46:17'),
(344, '663380142-3', 'File', '172.68.234.170', 'Upload File', '2024-02-16 06:46:35'),
(345, '663380490-0', 'Authentication', '172.68.234.225', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.2', '2024-02-16 06:46:46'),
(346, 'root', 'File', '172.68.234.170', 'Delete File => 117', '2024-02-16 06:46:51'),
(347, 'root', 'File', '172.68.234.170', 'Delete File => 117', '2024-02-16 06:46:53'),
(348, 'root', 'File', '172.68.234.171', 'Delete File => 114', '2024-02-16 06:46:54'),
(349, 'root', 'File', '172.68.234.171', 'Delete File => 117', '2024-02-16 06:46:55'),
(350, 'g00', 'File', '172.68.234.190', 'Upload File', '2024-02-16 06:48:28'),
(351, 'g17', 'Authentication', '172.68.234.191', 'OS: iPad; CPU OS 16_2 like Mac OS X | Browser: Unknown ', '2024-02-16 06:49:12'),
(352, '6330203136', 'Authentication', '162.158.189.216', 'OS: iPhone; CPU iPhone OS 17_2 like Mac OS X | Browser: Unknown ', '2024-02-16 06:50:21'),
(353, 'g00', 'Authentication', '172.68.234.152', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:50:37'),
(354, '663380485-3', 'File', '172.68.234.225', 'Upload File', '2024-02-16 06:50:51'),
(355, 'root', 'File', '172.68.234.224', 'Delete File => 119', '2024-02-16 06:51:01'),
(356, '6330203136', 'Authentication', '172.68.234.153', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:51:23'),
(357, 'g17', 'Authentication', '172.68.234.190', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:51:30'),
(358, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:51:38'),
(359, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:51:40'),
(360, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:51:42'),
(361, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:51:44'),
(362, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:51:46'),
(363, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:51:48'),
(364, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:51:51'),
(365, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:51:53'),
(366, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:51:55'),
(367, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:51:57'),
(368, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:51:59'),
(369, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:01'),
(370, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:03'),
(371, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:05'),
(372, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:07'),
(373, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:09'),
(374, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:11'),
(375, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:13'),
(376, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:15'),
(377, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:17'),
(378, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:19'),
(379, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:21'),
(380, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:23'),
(381, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:25'),
(382, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:27'),
(383, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:29'),
(384, '6330203136', 'Authentication', '172.68.234.152', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:52:29'),
(385, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:31'),
(386, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:33'),
(387, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:35'),
(388, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:37'),
(389, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:39'),
(390, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:52:42'),
(391, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:44'),
(392, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:46'),
(393, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:48'),
(394, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:50'),
(395, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:52'),
(396, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:54'),
(397, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:56'),
(398, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:52:58'),
(399, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:53:00'),
(400, '633020313-6', 'Authentication', '172.68.234.152', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:53:02'),
(401, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:53:02'),
(402, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:53:12'),
(403, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:53:14'),
(404, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:53:16'),
(405, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:53:18'),
(406, 'root', 'File', '172.68.234.190', 'Delete File => 116', '2024-02-16 06:53:20'),
(407, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:53:22'),
(408, 'root', 'File', '172.68.234.191', 'Delete File => 116', '2024-02-16 06:53:24'),
(409, 'g00', 'Authentication', '172.68.234.224', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 06:57:17'),
(410, 'g17', 'Authentication', '172.68.234.224', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 07:18:07'),
(411, 'g20', 'Authentication', '108.162.226.220', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 08:29:33'),
(412, 'g00', 'Authentication', '172.68.234.191', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 08:29:38'),
(413, 'g24', 'Authentication', '172.68.234.152', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 08:30:02'),
(414, 'g28', 'Authentication', '172.68.234.152', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 08:30:09'),
(415, 'g29', 'Authentication', '172.68.189.200', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 08:30:10'),
(416, 'g29', 'Authentication', '172.68.189.201', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 08:30:13'),
(417, 'g31', 'Authentication', '172.68.189.201', 'OS: iPhone; CPU iPhone OS 17_3_1 like Mac OS X | Browser: Safari 17.3.1', '2024-02-16 08:30:15'),
(418, 'g32', 'Authentication', '172.68.234.153', 'OS: iPhone; CPU iPhone OS 17_0_2 like Mac OS X | Browser: Safari 17.0', '2024-02-16 08:30:17'),
(419, 'g20', 'Authentication', '162.158.189.226', 'OS: iPhone; CPU iPhone OS 16_7_4 like Mac OS X | Browser: Safari 16.6', '2024-02-16 08:30:27'),
(420, 'g35', 'Authentication', '162.158.162.18', 'OS: iPhone; CPU iPhone OS 16_1_1 like Mac OS X | Browser: Safari 16.1', '2024-02-16 08:30:31'),
(421, 'g34', 'Authentication', '162.158.189.26', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 08:30:37'),
(422, 'g24', 'Authentication', '172.68.234.171', 'OS: Linux; Android 10; K | Browser: Chrome 119.0.0.0', '2024-02-16 08:30:41'),
(423, 'g28', 'Authentication', '172.68.234.171', 'OS: iPhone; CPU iPhone OS 17_2 like Mac OS X | Browser: Unknown ', '2024-02-16 08:31:10'),
(424, 'g00', 'File', '172.68.234.224', 'Upload File', '2024-02-16 08:31:16'),
(425, 'g28', 'Authentication', '172.68.189.212', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 08:31:40'),
(426, 'g35', 'Authentication', '172.70.189.81', 'OS: iPhone; CPU iPhone OS 17_0 like Mac OS X | Browser: Unknown ', '2024-02-16 08:31:44'),
(427, 'g32', 'File', '172.68.234.153', 'Upload File', '2024-02-16 08:31:46'),
(428, 'g24', 'Authentication', '172.68.234.152', 'OS: Linux; Android 11; RMX1851 | Browser: Chrome 107.0.0.0', '2024-02-16 08:31:48'),
(429, 'g20', 'File', '162.158.163.106', 'Upload File', '2024-02-16 08:32:05'),
(430, 'g20', 'File', '162.158.163.105', 'Upload File', '2024-02-16 08:32:06'),
(431, 'g21', 'Authentication', '172.68.241.103', 'OS: Linux; Android 10; K | Browser: Chrome 111.0.0.0', '2024-02-16 08:32:23'),
(432, 'g21', 'Authentication', '172.68.241.103', 'OS: Linux; Android 10; K | Browser: Chrome 111.0.0.0', '2024-02-16 08:32:24'),
(433, 'g20', 'Authentication', '172.69.165.4', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 08:32:30'),
(434, 'g20', 'Authentication', '172.69.165.4', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 08:32:32'),
(435, 'g31', 'File', '172.68.189.200', 'Upload File', '2024-02-16 08:32:42'),
(436, 'g29', 'Authentication', '172.68.241.65', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 08:32:48'),
(437, '633020313-6', 'Authentication', '172.68.234.190', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 08:33:43'),
(438, '633020313-6', 'Authentication', '172.68.234.191', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 08:33:45'),
(439, '6330203136', 'Authentication', '172.68.234.191', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 08:33:54'),
(440, 'g31', 'Authentication', '172.68.234.170', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 16.6', '2024-02-16 08:33:54'),
(441, 'root', 'File', '172.68.234.170', 'Delete File => 124', '2024-02-16 08:34:02'),
(442, '6330203136', 'File', '172.68.234.171', 'Upload File', '2024-02-16 08:34:34'),
(443, 'g28', 'File', '172.68.189.213', 'Upload File', '2024-02-16 08:34:43'),
(444, '6330203136', 'File', '172.68.234.170', 'Upload File', '2024-02-16 08:34:56'),
(445, 'g20', 'Authentication', '172.68.234.171', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.3.1', '2024-02-16 08:35:06'),
(446, 'root', 'File', '172.68.234.171', 'Delete File => 122', '2024-02-16 08:35:13'),
(447, 'root', 'File', '172.68.234.171', 'Delete File => 123', '2024-02-16 08:35:19'),
(448, 'root', 'File', '172.68.234.171', 'Delete File => 125', '2024-02-16 08:35:30'),
(449, 'G21', 'Authentication', '172.69.166.45', 'OS: Linux; Android 10; K | Browser: Chrome 111.0.0.0', '2024-02-16 08:39:48'),
(450, 'G21', 'Authentication', '172.69.166.44', 'OS: Linux; Android 10; K | Browser: Chrome 111.0.0.0', '2024-02-16 08:39:56'),
(451, 'G21', 'Authentication', '172.69.166.45', 'OS: Linux; Android 10; K | Browser: Chrome 111.0.0.0', '2024-02-16 08:39:57'),
(452, '633020313-6', 'Authentication', '172.70.142.183', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 08:51:26'),
(453, 'g00', 'Authentication', '172.70.143.135', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 09:14:52'),
(454, 'g00', 'File', '172.68.234.190', 'Upload File', '2024-02-16 09:15:35'),
(455, '633020313-6', 'Authentication', '172.68.234.170', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 09:17:11'),
(456, '6330203136', 'Authentication', '172.68.234.171', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 09:17:20'),
(457, '6330203136', 'Authentication', '172.68.234.153', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 10:00:31'),
(458, '6330203136', 'Authentication', '172.68.234.152', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 10:12:36'),
(459, '663380166-9', 'Authentication', '172.68.241.115', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 10:12:49'),
(460, '663380355-6', 'Authentication', '172.68.234.190', 'OS: Macintosh; Intel Mac OS X 10_15_7 | Browser: Safari 17.3.1', '2024-02-16 10:12:53'),
(461, '663380337-8', 'Authentication', '172.68.234.153', 'OS: iPhone; CPU iPhone OS 17_2 like Mac OS X | Browser: Unknown ', '2024-02-16 10:13:16'),
(462, '6330203136', 'File', '172.68.234.191', 'Upload File', '2024-02-16 10:13:40'),
(463, '6330203136', 'File', '172.68.234.190', 'Upload File', '2024-02-16 10:13:41'),
(464, '6330203136', 'File', '172.68.234.191', 'Upload File', '2024-02-16 10:13:43'),
(465, '663380556-6', 'Authentication', '172.68.234.225', 'OS: iPhone; CPU iPhone OS 16_6_1 like Mac OS X | Browser: Safari 16.6', '2024-02-16 10:14:33'),
(466, 'g25', 'Authentication', '172.68.234.153', 'OS: iPhone; CPU iPhone OS 17_2 like Mac OS X | Browser: Unknown ', '2024-02-16 10:15:01'),
(467, 'g25', 'Authentication', '172.68.234.152', 'OS: iPhone; CPU iPhone OS 17_2 like Mac OS X | Browser: Unknown ', '2024-02-16 10:15:02'),
(468, 'g25', 'Authentication', '172.68.234.152', 'OS: iPhone; CPU iPhone OS 17_2 like Mac OS X | Browser: Unknown ', '2024-02-16 10:15:02'),
(469, 'g00', 'Authentication', '172.68.234.224', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 10:15:07'),
(470, '633021103-2', 'Authentication', '172.68.234.191', 'OS: Windows NT 10.0; Win64; x64 | Browser: Chrome 121.0.0.0', '2024-02-16 10:16:58'),
(471, '663380563-9', 'Authentication', '172.68.189.143', 'OS: iPhone; CPU iPhone OS 17_2_1 like Mac OS X | Browser: Safari 17.2', '2024-02-16 10:17:13'),
(472, '633021103-2', 'File', '172.68.234.191', 'Upload File', '2024-02-16 10:17:21'),
(473, 'root', 'File', '172.68.234.190', 'Delete File => 132', '2024-02-16 10:17:31'),
(474, '663380574-4', 'Authentication', '172.68.234.170', 'OS: Linux; Android 10; K | Browser: Chrome 121.0.0.0', '2024-02-16 10:17:41'),
(475, '663380562-1', 'Authentication', '172.68.241.64', 'OS: iPhone; CPU iPhone OS 17_2 like Mac OS X | Browser: Unknown ', '2024-02-16 10:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id` int(11) NOT NULL,
  `statustype` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `statustype`, `type`, `datetime`) VALUES
(1, 2, 3, '2024-03-06 13:00:00'),
(2, 2, 3, '2024-03-20 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  `passkey` varchar(20) NOT NULL,
  `rold` int(11) NOT NULL,
  `image` text NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fname`, `email`, `section`, `passkey`, `rold`, `image`, `update_at`) VALUES
('633020313-6', 'Pichamon Boonsre', 'pichamon.bo@kkumail.com', 1, '1234', 1, 'https://lh3.googleusercontent.com/a-/ALV-UjUJiLFyhDzb--jtqgzumW4f5Qhc9lXzNoJbtWhChyaEIg', NULL),
('6330203136', 'Pichamon Boonsre', 'pichamon.bo@kkumail.com', 1, '1234', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjUJiLFyhDzb--jtqgzumW4f5Qhc9lXzNoJbtWhChyaEIg', '2024-02-16 17:13:43'),
('633020334-8', 'Supphitan Paksawad', 'supphitan.p@kkumail.com', 1, '0648801344Ohmmy', 1, 'https://lh3.googleusercontent.com/a/ACg8ocJXFlu73BECmcaLVJQHbcjjdsncvfiaEVAKYyH7QfMQdA9A', NULL),
('633020455-6', 'นางสาวณัฐชยา พรวนแก้ว', 'nutchaya.pr@kkumail.com', 1, 'best123', 1, 'https://lh3.googleusercontent.com/a-/ALV-UjWFIQhDzEBvjdYaVWaxTHgjI0eRZvLQVdHTkOWKk99ERw', NULL),
('633020926-3', 'นางสาวมิรันตรา ผาสกุล', 'mirantra.p@kkumail.com', 1, 'nonie', 1, 'https://lh3.googleusercontent.com/cm/AOgkWRaBb3riPsoSlR604jowX4VJWWljZQ8963PqcDlJCdVGpuJsnT7LqQNfMKJBKpdt', NULL),
('633021074-3', 'นางสาวฉัฐพร จุลลาศรี', 'chartaporn.j@kkumail.com', 4, 'vjxhzahfpwit', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjUwIzL_7Xs4KFeZIB99UvwJJvqtCDQKDBa7T70h4zqL-A', NULL),
('633021080-8', 'นางสาวณิชากร รอนแรม', 'nichakorn_ronram@kkumail.com', 4, 'ibgdmgwapkfc', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLxE0tIB0lWsvuTvLiMHjcd6rerjDox9rxguIeVlsbw', NULL),
('633021102-4', 'นายวีรชิต ไชยวงศ์ค', 'weerachit.c@kkumail.com', 4, 'ddpwinkhlolg', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLJs1GTNrOLN3CKTRSgIvB_ifaTOcSHXeNqZanUu0qK', NULL),
('633021103-2', 'นายศุภกร กงชา', 'max.supakorn@kkumail.com', 4, 'yyfiaekarozf', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVm-5yd7NPqdKiHgbK8Ib1LySD2LAny6OwT7rvAeCKr6yQ', '2024-02-16 17:17:21'),
('643020394-1', 'นายพชร ศรีสุพัฒน์', 'patchara.sri@kkumail.com', 1, 'vdcnlcxzustm', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjU86GXQsRo0EyLhiLQ2t7wd6gTii4kyDB2Fvo9IsxVke-o', NULL),
('643021111-4', 'นางสาวปิยะรัตน์ อุปชีวะ', 'piyarat.up@kkumail.com', 1, 'pungpung', 1, 'https://lh3.googleusercontent.com/a-/ALV-UjVnUeMCOpRkHCZWYAENBSi9Qj-g3BLX1tinc1EHtg5TTg', NULL),
('643021115-6', 'นางสาวภัทรศยา ศรีสง่า', 'pattarasaya.sr@kkumail.com', 1, 'jj123', 1, 'https://lh3.googleusercontent.com/a-/ALV-UjUfv3l_fBol_otHD8xdCZGDiuqec7lvouNJ6cQrZ4rM-cs', NULL),
('653380040-0', 'นางสาวเสาวลักษณ์ เปรียบดีสุด', 'saowalak.pri@kkumail.com', 1, 'aonaon', 1, 'https://lh3.googleusercontent.com/cm/AOgkWRYBHRy-C_34CCZOkTr__jAPP-u3NCuWBJOEsLUHR3cNy4Rpwa7Yh65Qh9OLx4_Y', NULL),
('653380041-8', 'นางสาวอารยา หงษาวงษ์', 'araya.h@kkumail.com', 1, 'ployploy', 1, 'https://lh3.googleusercontent.com/a-/ALV-UjXKgTq-e8xGDssKCWnX34XUJb1kdfoWGuWZuOvgaerzgg', NULL),
('653380372-9', 'นางสาวธิดารัตน์ อินอุ่นโชติ', 'thidarut.i@kkumail.com', 2, 'dkxmfmeqqhzm', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJvBcBfRiK0W73weM_arhcyVz1Pb2yK7-bpKA_X8hH5', NULL),
('663380001-1', 'นางสาวณัฐณิชา รัตน์เพ็ชร', 'natnicha.ra@kkumail.com', 2, 'wnxuitktmkqp', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWAlpCG4DJuGL4zvNCX-XH7EAtOUGWuAN44KC1c6bLdvA', NULL),
('663380002-9', 'ณัฐภัทร ประชุมวงษ์', 'nattapat.pr@kkumail.com', 2, 'xmoedxtvoeah', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLhDBFDb6Idq_tbV8wExM32ApTUhFoOit1emxIrzfRW', NULL),
('663380003-7', 'ปฏิภาณ แก้วนวล', 'patiphan.k@kkumail.com', 2, 'xhmjghfdxsbr', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKND_C1ivaPBeW75DNLiPgP4YSxddWq4E6AbAA8DBRj', '2024-02-16 13:44:39'),
('663380004-5', 'นายพงศกร สระแก้ว', 'pongsakorn.sra@kkumail.com', 2, 'dsxniaqppaji', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKxaj-ZZWwHknf-gRO_VFEfFSIiPlEi8jrNeKxmD572', NULL),
('663380005-3', 'นายวัฒนวิทย์ สะมะโน', 'wattanawit.s@kkumail.com', 2, 'dwfninciizmx', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVPMsY3os6pLWWGYCtRFQKx7dnltde-0_E3RKvUljOxJxc', NULL),
('663380006-1', 'นางสาวสุธินันท์ ลำลอง', 'suthinan.l@kkumail.com', 1, 'owiazxsbarok', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJgAAHHRictPDwdqg_bsYrWlA4Rq5jg2gPly720FKZa', NULL),
('663380044-3', 'นุสรา สารธิราช', 'nuchsara.s@kkumail.com', 3, 'awatffceqlpw', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWd23fYR1X9D3cTThFNZLUv5vrf3uEhTb8nhq5E2LhIsA', NULL),
('663380142-3', 'นางสาวกรองกาญจน์ ตรีเมฆ', 'krongkan.t@kkumail.com', 2, 'vyoujkoiktwf', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjUJJr44k8Jw-jaZgpWlNghbHT1PlovZd5LcCaVR4UMrTg', '2024-02-16 13:46:35'),
('663380143-1', 'นายกิตติิกวิน วิจิตขะจี', 'kittikawin.wi@kkumail.com', 2, 'ntmlnkesvgbd', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKrv3MhCdA4gnXWfxNavXp2M9vw_sVMbw6VrkQOBDaN', NULL),
('663380144-9', 'นายกิตติธัช ปลั่งกลาง', 'kittithat.pl@kkumail.com', 1, 'moxenbnpihuk', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKJ_OD-JnMXFW3zXrZk5Qj0X8BhgTZdmZ0GEGi-qEbr', NULL),
('663380145-7', 'นางสาวกุลศยา จันภูงา', 'kunsaya.j@kkumail.com', 1, 'udcqryqampia', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVucb2f8vW84vYNv14K9UGQVmxo7wQtCg-E6oyw7pPm2w', NULL),
('663380146-5', 'นายจตุรวิทย์ ปะสังคะเต', 'chaturawit.p@kkumail.com', 1, 'krojvcsmlhkm', 3, 'https://lh3.googleusercontent.com/a/ACg8ocItsK-arF-gDq626eC1dZ_RXxjD40KpM_kP0mAuJwje', NULL),
('663380147-3', 'นายจักรเรศ ชัยศรี', 'jakkaret.c@kkumail.com', 1, 'ybzvmnshtyqd', 3, 'https://lh3.googleusercontent.com/cm/AOgkWRbPDJk43a5zb9cY5ol6yPljHo2B5rEZBJYblxKJTNvZ6dHjKomxHSDRPigErneQ', NULL),
('663380148-1', 'นางสาวจิรัฐติกานต์ ชิณวงษ์', 'jiruttikan.c@kkumail.com', 2, 'phuwrvvqquja', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjUiyg_A6xW39_A3FBY4Bs4__CfxN263qaRPGVEA918BCg', '2024-02-16 13:37:04'),
('663380149-9', 'นายจิรโชติ​ ลุนศรี', 'chirachot.l@kkumail.com', 1, 'tkrbkbnvfnrh', 3, 'https://lh3.googleusercontent.com/a/ACg8ocK5huNk0OvDb9dmQVbg6gfBXaeqJSWEK3uQhApQ3suv', NULL),
('663380150-4', 'นายชนกานต์ งามดี', 'chanakan.ng@kkumail.com', 2, 'pwtouuniktpo', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKy51Zxu16cNy3_Qggw5Eqrnvjl5z5ILICIXhDOUrVd', '2024-02-16 13:44:39'),
('663380151-2', 'ชนาธิป สีลาพล', 'chanathip.si@kkumail.com', 2, 'pafymcrtzssp', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjU2TKFumUEm79SSFOvkuXuzO5E-4x63x0pGKlwfp0IS4Ok', NULL),
('663380152-0', 'นางสาวชลิตา อ่วมกุล', 'chalita.au@kkumail.com', 1, 'iozqzamyykbk', 3, 'https://lh3.googleusercontent.com/a/ACg8ocL4r26wWUFyt1tDDZXfJteIi5TGxtfUtfKrNnHqkP7H', NULL),
('663380154-6', 'นางสาวฐิติมา บุญพรมมา', 'thitima.b@kkumail.com', 2, 'nxjlkqfwcbla', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJpfeqdVrvJf9IzxlqviBZIdmlqRpS7-6307ny4SWcE', '2024-02-16 13:39:39'),
('663380156-2', 'นายณัชพล สุวรรณอำไพ', 'natchapon.su@kkumail.com', 1, 'ogefcnbupcue', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLtZJRHC8zHEAFMjzWkvLPnFSesvG7wR60colgiFkni', NULL),
('663380157-0', 'นายณัฐพันธ์ุ เชตวัน', 'nattapan.c@kkumail.com', 1, 'sliwttrhtbnj', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXM8ngAQ4FzpBzr_PyGo9gexQ6dVgH3m2uBPTdtH8npyw', NULL),
('663380158-8', 'นายดรัสวัจ ยิ้มพิรัตน์', 'daratsawat.y@kkumail.com', 1, 'dedwatisrjrb', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKx3udOA9BYP70Wc5byELmFPEYOL3W4IwFWsi_hXTsN', NULL),
('663380159-6', 'นายธนภัทร สุเพ็ญ', 'thanapat.su@kkumail.com', 1, 'kwmstbnosplg', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXRiVPBLB04Cn6t2D16w11Or63gL0n0DE8115RESwE6qQ', NULL),
('663380160-1', 'นางสาวธนาภา เจริญสุข', 'thanapa.c@kkumail.com', 2, 'szonhstvyzal', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXVYiZIlKVI9ZJ9vO31wZrAfKQWl57phqwGw01Db0Kvsg', '2024-02-16 13:44:41'),
('663380161-9', 'นางสาวธนิศากร พุดละ', 'thanisakon.p@kkumail.com', 1, 'mzljotclrbff', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVIwiQlv9BR0AQ8GQeT6iX_6xzX5H_IbjhP57KcRU-lQw', NULL),
('663380162-7', 'นายธนิสร คําสิงห์', 'thanisorn.kh@kkumail.com', 2, 'akafprvdrfrl', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVC0d23_QkzcS-kSBGadL0d8-ohaorpF9nepCzdUcmMQg', NULL),
('663380163-5', 'ธรณ์ธันย์ นามแสง', 'thornthan.n@kkumail.com', 1, 'idyzfmqrjsws', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVQkDbaadHznII7QhjkSCWenRZVdyDCLRSf3g1VkaCfOg', NULL),
('663380164-3', 'นายธฤต สุมาลัย', 'tharit.su@kkumail.com', 1, 'rmkowplvfera', 3, 'https://lh3.googleusercontent.com/a/ACg8ocL7Z9c4QkH31aiBv6l9oNmKWIp5FUJlUie7hwmvYyX5', NULL),
('663380165-1', 'ธัชพล คำกำจร', 'thatchaphon.k@kkumail.com', 2, 'yvbrczwhgaeh', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXNI15t02tAcpamfpwAxpeLJTJrrIFJD3gVj09Dd1DUNQ', NULL),
('663380166-9', 'นายธีรภัทร์ ภูมิภักดิ์', 'theeraphat.kh@kkumail.com', 2, 'gkdsxjjljyyk', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLmT_9Agq3n3uamS6GoECgCRL7k8StI66dvK4LntV-Y', NULL),
('663380168-5', 'นายบวรนันต์ ตะบองทอง', 'bowonnun.t@kkumail.com', 6, 'ijundddfpswt', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJwl8tM6Kg7wgYyMea-9OsbY100i0VsbyiA_jqLl9t0', '2024-02-16 13:37:35'),
('663380169-3', 'นายประสพโชค สมวงษา', 'prasopchok.s@kkumail.com', 1, 'yvwxfrvfgjbq', 3, 'https://lh3.googleusercontent.com/a/ACg8ocIvZrfkAwSmyZgOGknIVhjnU2n5oWeUb6HjUTBnYhN4', NULL),
('663380170-8', 'นางสาวปริยากร พละดร', 'priyakorn.p@kkumail.com', 2, 'wkvkzmubibeb', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWLDGgnldb8tJwCTvDgdr0o7cyoslo8w4MhdDFKgo1afw', '2024-02-16 13:44:27'),
('663380171-6', 'นายปลวัชร สุทธมา', 'palawhat.s@kkumail.com', 1, 'hphxdrekxooo', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJNBWweKauHLHPhhcHAY7h1V0TFVSBIDd8nV7Bavo2y', NULL),
('663380172-4', 'นางสาวปวีณา กุลศิริ', 'paweena.kul@kkumail.com', 2, 'yqiayisbxetl', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJsNfJ8GAy5hN29tGsClCXMA6izWr6ju6mQxG6Vmhg', '2024-02-16 13:37:07'),
('663380173-2', 'นายปัญญาเพชร ฤทธิธาดา', 'punyapechr.r@kkumail.com', 1, 'cbpmrsezssgq', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWACkd5t6jay_e7PeOb9h9z3-6Xyyj_mLUeCQRHWXCZvA', NULL),
('663380174-0', 'นายพรรษา ปิ่นแคน', 'pansa.p@kkumail.com', 1, 'olcffidsqrwn', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVdzON5tW46Atal2fO-4bLcjDujYFcQrGd4n-9ECBaRWQ', NULL),
('663380175-8', 'นางสาวพิธิดา คำชารี', 'phithida.k@kkumail.com', 2, 'njhmdtctdwre', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJdvdmTeCWdKn1Y4tUmZS70UaTCBg6AXVnAyGZACuCU', NULL),
('663380176-6', 'นายพุฒิศานต์ ศรีนันท์ดอน', 'puttisan.s@kkumail.com', 1, 'hmyyqhxpfnkm', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLXQb9vOxBuNLcqZn4y74bkl5lmW1bk279WkxwTmBxh', NULL),
('663380177-4', 'นายฟลอเรนท์ เอ็มฟอดโว', 'florent.m@kkumail.com', 1, 'jucsesokameo', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWYyvPyeNaUxOew0vy6l0B0pdYHXhMs-9XuPzkPjrfgNw', NULL),
('663380178-2', 'ภัทรวดี วงศ์นอก', 'patarawadee.w@kkumail.com', 2, 'mevwevikgdmz', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWbVjLjnAT62ds3DtspDcV2uP-wMuIeaG8noGuk0nk1xA', NULL),
('663380179-0', 'นายภานุวัฒน์ ลครราช', 'phanuwat.l@kkumail.com', 2, 'jssfricuvceu', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKj4KS1U1pG3LDnQ_WTEkpwbdMilvlq9D-tgRgQHTc0', '2024-02-16 13:43:56'),
('663380180-5', 'นายภูริณัฐ บุญมาถึง', 'phurinat.bo@kkumail.com', 2, 'ufyohjxhxvxx', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJt-cJUO-AHMmGx_mL8n0eEhrrI0twS9QIqYlABggtt', NULL),
('663380181-3', 'นายภูรินทร์ สุวชาติ', 'phurin.su@kkumail.com', 1, 'oqftptovkept', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWb2s42RTHJ55HJoWwRkvWSj6kbd_cnWTzb7K_MPRiKAg', NULL),
('663380182-1', 'นายภูวดล ภาโนมัย', 'phuwadol.pa@kkumail.com', 2, 'rpiwioawzrmm', 3, 'https://lh3.googleusercontent.com/a/ACg8ocL8haKag4SpR24Je9lb7AsiejPc-z_x02WRKizunbxQ', '2024-02-16 13:36:44'),
('663380183-9', 'นางสาวรัชธางค์กูล สิทธี', 'ratchatangkoon.s@kkumail.com', 1, 'zaaacvzfumuc', 3, 'https://lh3.googleusercontent.com/a/ACg8ocIn1iMj7fed7xi21sq4-9sGTQMUK93WIN4x8Ho_ISny', NULL),
('663380184-7', 'นางสาววรัชยา จันทร์รัตน์', 'waratchaya.ch@kkumail.com', 1, 'keytbauaxrhe', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXfjKiUMMV2LEw3XC9kQVhIHADVM7NO01vr-99EzH4TzA', NULL),
('663380185-5', 'นางสาววริศรา สังคะโห', 'warisara.sang@kkumail.com', 1, 'ervygyfpufdl', 3, 'https://lh3.googleusercontent.com/a/ACg8ocL_2g_YAzPmS96w6DQ0ASscpeBUSc7AyKv-cL1e7I7I', NULL),
('663380187-1', 'นายสิรภพ น้อยสา', 'siraphop.n@kkumail.com', 1, 'srlvxazxehrr', 3, 'https://lh3.googleusercontent.com/a/ACg8ocL53B9DkexaPJhb6q4sAsQG914RcT6Q2XNW9oJu3XQz', NULL),
('663380188-9', 'นางสาวสิริมา ฉายถวิล', 'sirima.ch@kkumail.com', 1, 'dqffmuxwzrud', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKiKRD9Qr-tRbo64AITm2e6rISyrdDMpueX6UoDeEtR', NULL),
('663380189-7', 'นาสุทธิพงศ์ การปรีชา', 'suttipong.k@kkumail.com', 1, 'crsnmxecqkke', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXT2OAiz7PBDUbCjAbG1xeyquRiNsEXCfNq9FUpP4eTOA', NULL),
('663380190-2', 'นางสาวสุรัสวดี จักรพิมพ์', 'suratsawadee.j@kkumail.com', 1, 'rwfapzncuekm', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLvL6IIYD5F_AgJ91ymfu_yUmbo4CJxgtMEitM3ZGc6', NULL),
('663380191-0', 'นายอภิวิชญ์ เสนาหนอก', 'apivich.s@kkumail.com', 1, 'cwvmpzgpvnxb', 3, 'https://lh3.googleusercontent.com/a/ACg8ocL7DiRWxFxy62sOps53X8pE35Zps19TXi-ObxIVrurv', NULL),
('663380192-8', 'นายอุตตมากร บรรหารักษ์', 'autamakorn.b@kkumail.com', 1, 'xqabpyqwjclp', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWf3KHGiqg34FoIYMs29hCf1WF9gYDB0MiJFp8OidjZ5w', NULL),
('663380193-6', 'นายอโนชา​ เชยทอง', 'anocha.ch@kkumail.com', 1, 'csavpuzwnllw', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWw8veCvG9_pyLDDeCep46WFG3M50pn8M7OqUUSBe1KTA', NULL),
('663380194-4', 'นายไชยวัฒน์ แจ่มกลาง', 'chaiwat.jam@kkumail.com', 2, 'clzzsgxapjla', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjW75wPuFRyQadsj2osnBnQKTD3dzwdMc9MPOOIpkRhkyw', NULL),
('663380195-2', 'นายไชยวัฒน์ โสนะชัย', 'chaiyawat.s@kkumail.com', 1, 'llqeslszgkwn', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjW78Gl-H7b5HmHG6V8-zAghbEaHF0qEdluF8ApUDLGehg', NULL),
('663380196-0', 'นางสาวไพริน พรมสะอาด', 'pairin.pr@kkumail.com', 2, 'yhqtqwxnqmds', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWX_DP1Z7r38o8zuN4WTLfYgQQ5MgICnbTj0QJEMtxSHg', NULL),
('663380337-8', 'กฤษฏ์ ทันหา', 'krit.tha@kkumail.com', 4, 'xignpueuqmvo', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKHe8TkhvXWUl2xdMKuhY1yB5zUrkhPJQFqqs1d45bY', NULL),
('663380338-6', 'จิรัสย์ อารยะพงศ์ภักดี', 'chirus.a@kkumail.com', 4, 'iubxanxofeqe', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJbPjHFvAfBDONPdKmwaN0ve3jT1ojghPdYmP106hj0', NULL),
('663380340-9', 'ชนาธิป ศรีจักรโคตร', 'chanathip.sr@kkumail.com', 3, 'xasfiitzahsg', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJQ3DdXSGvX8qBYq-zJbxqCKq_QZFJj9Nf5svuBkB_N', NULL),
('663380341-7', 'นายชวกร ฤทธิธรรมกุล', 'chawakorn.r@kkumail.com', 4, 'rbmovzpspfhm', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJIwbsdnjrGMehxYHFtL4IEuUqNoDWNs1hvgRf42otm', NULL),
('663380342-5', 'นายชาคริต ชาระวงศ์', 'chakhrit.c@kkumail.com', 3, 'nhntrsinjxnf', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXJcMqkTd8gOgK7oBTxBdIVkn5KihwH6YcSZKBw8gDQfw', NULL),
('663380343-3', 'นายญาณวุฒ ชุ่มใจ', 'yannavut.c@kkumail.com', 3, 'xyghjtbgppds', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWSbsDY0uxe6HFe4eS0G3HWSuQ8HdS5R0qw0xy6sFenyw', NULL),
('663380344-1', 'นายณัฏฐชัย ไชยรบ', 'nattachai.c@kkumail.com', 3, 'fydfiduntjhc', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKegB7_nCzWg8Dgz4JUuIHRZOrBbmv1eegX57PWvfE0', NULL),
('663380345-9', 'ณัฐวุฒิ พัดไธสง', 'natthawut.pha@kkumail.com', 3, 'mkuuspseiffm', 3, 'https://lh3.googleusercontent.com/a/ACg8ocIf7yoMriPZ6-Tq_6-mXfcEKF_8ofkF-swXpHbeikn9', NULL),
('663380346-7', 'ทิวากรณ์ ผลภิญโญ', 'tiwakorn.ph@kkumail.com', 3, 'qhtsmbgtevtr', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVWy2gEgWuaDHwby0dNQODvsmx5rMZmgCs9tkVhP8be', NULL),
('663380347-5', 'นายธนภัทร สมบูรณ์', 'thanapat.somb@kkumail.com', 4, 'aqfnonewwmze', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXFLCXUBgrFOWrYYaaHTwgYms8TLsTPTHtb4IXWgZRZTA', NULL),
('663380349-1', 'ธีรภัทร บุญมีประเสริฐ', 'teerapat.boo@kkumail.com', 3, 'aosoavkcmoii', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKZYg4-WJGaCLFk7b5SleM4de8kG1JpZvloTSRGrcus', NULL),
('663380351-4', 'นายบุญชนน ติโนชัง', 'boonchanon.t@kkumail.com', 3, 'czqajnulmsxf', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKXoduOz62M9NBwccIRJvVBbdaq_Ymm6Q7FjNnP8SnW', NULL),
('663380352-2', 'นายปฏิภาณ ธงหาร', 'patiphan.th@kkumail.com', 3, 'zkvjoznorabk', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVjvjcDlS3z_3S7n2V2rXGxruN9veGIMDZZS32enFEWVQ', NULL),
('663380354-8', 'พงศ์พัฒน์ พิตรพิบูลผล', 'pongpat.pi@kkumail.com', 3, 'nsncjvzzshtp', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWFFldMMUgJwmSrHk_BKZ-ateCmo29ZB5Fml7nrbOVfEQ', NULL),
('663380355-6', 'นางสาวพลอยขวัญ อุปสัย', 'ploykwun.u@kkumail.com', 4, 'luurcyfanhos', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXCptiv7PcCKpMnEcAfaCt4LTM4cEeU18I7Rm6R0A0bOQ', NULL),
('663380357-2', 'ภูผา แก้วทอง', 'phupha.k@kkumail.com', 3, 'bdidwumrtqkt', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjX21fakuLO5hX7yWg7Ycv8lN2fKotFvLarMPaT5novadA', NULL),
('663380358-0', 'ภูมินทร์ ไกรกิติการ', 'phumin.kr@kkumail.com', 4, 'jzdkplsrrddv', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjV0s_VkoJWu9iyoD5lw_O1adllKMLOfOYbimdHU32cTJg', NULL),
('663380359-8', 'นางสาวรพีพรรณ ศรีบุญเรือง', 'rapeephan.s@kkumail.com', 4, 'hdwimkhjrxba', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVwww3a45KjyhUcs6x2eVPfM0J6wY_lR5rt7-_6C6mdXQ', NULL),
('663380360-3', 'นายวจนะ ใต้ระหัน', 'vajana.t@kkumail.com', 3, 'rhciwdjaqfkv', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjUbVDYFd5cjRQ6AsSxyu9cmLLvz2AvOVGaeHV5DCizTSw', NULL),
('663380361-1', 'นางสาววนิดา ศรีดวงคำ', 'wanida.sri@kkumail.com', 4, 'leecexpvhkgn', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXF9R7ugkmELVMP7f5yWah9lMgjpq09Tot1pvVQcflPjQ', NULL),
('663380362-9', 'นายวรกันต์ ปราบนอก', 'worakan.p@kkumail.com', 4, 'bvrgmccbinhz', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKb5IPStJjK4OP5fbeK9pWWx96H2gbtdCtRuvhpR6tv', NULL),
('663380363-7', 'วิศรุต ไตรยวงศ์', 'wissarut.t@kkumail.com', 3, 'xelfwytxkdbv', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJe3c_Yp1wwc38LpRQrGj5sxjw3u2J8V0Eqd35A3fYT', NULL),
('663380364-5', 'นางสาวศราพร เบ้าหินลาด', 'saraporn.b@kkumail.com', 3, 'etybgumybygw', 3, 'https://lh3.googleusercontent.com/a/ACg8ocIr1T4XAdc_X5T8Y4nyvjBbExnF3dNlyq95ypVOT4-z', NULL),
('663380365-3', 'นายสาริษฐ์ บุตรช่วง', 'sarid.b@kkumail.com', 3, 'unaaayrkzrwc', 3, 'https://lh3.googleusercontent.com/a/ACg8ocL4IW7tUUKx5fA2uraCtOiWoY2XDRs6LnVR1tqv870e', NULL),
('663380366-1', 'นางสาวสุจิรา สัตถาผล', 'sujira.sa@kkumail.com', 3, 'qlyiksiycgip', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKDKCI4LBL4mFO2ecQ1cGuwP6mu3LB0Omi8I1itTrhq', NULL),
('663380367-9', 'นางสาวสุธางศุ์รัตน์ ศรีโรจน์', 'suthangrat.s@kkumail.com', 3, 'sdrlrybephwv', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjUCDmfysHVUst9l43b0Yl251dRkuc8SG2SjU6u9-RYtzg', NULL),
('663380368-7', 'อัครเดช ผาดำ', 'akharadet.p@kkumail.com', 4, 'dvtohgozbyah', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjXDC_vRK7dCb5mkpY6BRM24Qq-zMHBepcxi64kKrBVIRw', NULL),
('663380370-0', 'เกศกนก ประสมทรัพย์', 'ketkanok.p@kkumail.com', 3, 'itrwudhzlodj', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKV6nC7RSakQ-l4UpaRBT3JATpp8-59HCrwACda5hlw', NULL),
('663380371-8', 'เจตริน ศรีนุกูล', 'jattarin.s@kkumail.com', 3, 'nrrsroddmuxs', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjUVNXWe0RffV54b5nInhhQWm7F4i1OwUKSJgWqDUbtRwQ', NULL),
('663380372-6', 'นางสาวเมธาวี สิทธิชัยเนตร', 'mathawee.sit@kkumail.com', 3, 'nrrsroddmuxs', 3, 'https://lh3.googleusercontent.com/a/ACg8ocINNXWiRuhwKM7uq_kP4H6f1_joanMLo13pLDfNk-Xm', NULL),
('663380485-3', 'นายชุติพนธ์ หล้าอามาตย์', 'chutipon.l@kkumail.com', 2, 'qbbilrvnhijp', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWwhk5_YYRv1Xis5mbFwh-wx-9ccaG_YceCXvHlJMFwHg', '2024-02-16 13:50:51'),
('663380486-1', 'นายทวีพงศ์ เหลืองปฐมชัย', 'taweephong.l@kkumail.com', 2, 'eveqqxddzrsr', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVQr_SEadvbj2GwxwCLs-WVnpA6e9TgBZl9HyUBpddLlg', NULL),
('663380487-9', 'นายธนดล สาเสน', 'tanadol.s@kkumail.com', 1, 'ipmwnpkqvvaa', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKbUj9K1BHAp7rGqUn5N3n17cp-AH9rasduv6U38Ddp', NULL),
('663380488-7', 'นายธีรภัทร สังเกตกิจ', 'thiraphat.sa@kkumail.com', 2, 'gcovycffyetj', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLLeWDpzE5b2L4snTmFneuKAsT1q2be0QCENfJIxNmD', NULL),
('663380489-5', 'นายปกรณ์ รอดปรีชา', 'pakorn.l@kkumail.com', 2, 'fcwsipwnnzrq', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLZuZQVJ3Hmow_zFH3_Q1dQwU2ALz7PZnYi5Pkd0br2', NULL),
('663380490-0', 'นายปภพ แสงสมนึก', 'papop.sa@kkumail.com', 2, 'oqpvurjccbbv', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKel7ct8fWPgB1XlkgzZxpvzE9H962kX_YdraD6G0b0', NULL),
('663380492-6', 'นางสาวปริยาภรณ์ พรมรัง', 'pariyapron.p@kkumail.com', 1, 'arssxbhrwuhp', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjV96anGqy45NNQLlTjbKxyakYuL4W7TYiW5lFutyovi9g', NULL),
('663380495-0', 'นายภูมรพี วงษ์​ศรี', 'phumrapee.v@kkumail.com', 2, 'negxjjaerujo', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjUOLbkeFUfDjPWd2EOZmTGHLd1GPSezVGGZujf3GI2XDg', NULL),
('663380496-8', 'นายวงศพันธ์ อนันตวงศ์', 'wongsaphan.a@kkumail.com', 1, 'hwkgugqeorhm', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWJF9ZX7SaN1nRLlzhM81VGnPxl0lVu3rD1ZVu0mY5kHQ', NULL),
('663380497-6', 'นายวัฒชรวิทย์ อดทน', 'watcharawit.o@kkumail.com', 2, 'wmwrsdhtppil', 3, 'https://lh3.googleusercontent.com/a/ACg8ocIEZnvFo85lAnlCVbjVKiV0QnqO5V5_idSpOt5jktDp', '2024-02-16 13:39:01'),
('663380499-2', 'อดิศัย เลนนาแซง', 'adisai.l@kkumail.com', 2, 'grnjtnieqnrf', 3, 'https://lh3.googleusercontent.com/a/ACg8ocI-nO8SHJ6qPEIp3oEOqihOmNGygEM85SVwlDQYWXy5', NULL),
('663380500-3', 'นายอรรถนนท์​ บุญน้อย', 'attanon.b@kkumail.com', 1, 'lrmfyyrxhsih', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjX72HS15e2-yY0eKwqmMaLeeaBW2fTfVJo5pru-87eFcw', NULL),
('663380501-1', 'นายอรรถพล อมรทัต', 'autthapon.a@kkumail.com', 2, 'nkfahdilqiju', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKE15zj4_lAYNA85AebiEEKFORbkbt1VnfTWMq7_twj', NULL),
('663380554-0', 'นางสาวกัญญาณัฐ เดชโยธิน', 'kanyanat.d@kkumail.com', 3, 'bnhosbxmcyry', 3, 'https://lh3.googleusercontent.com/a/ACg8ocI22ONtM6PkzyqaPPeiKWZkBJW-HFRrfP24wkfPF27y', NULL),
('663380555-8', 'นายชาคริต อ่วมอ่ำ', 'chakrit.u@kkumail.com', 3, 'fojhdsknaxgh', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVLHJoWMIM2gQD42d4f3joIwbCGqSprwAFGEL5OiVtYxg', NULL),
('663380556-6', 'ชโยคม แพงเนตร', 'chayodom.p@kkumail.com', 4, 'zixxmecpmqvw', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJFKbsdfzy7y0cUwwqOrA1VRzcphayEdZ6SzI4-8Pm6', NULL),
('663380558-2', 'ดุลยวัต มูลสาร', 'dulyawat.m@kkumail.com', 3, 'gjrskwmcetju', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKQ-LmpAGf3l4XTI2LzHMlffFG9Z7XmshL0GU72A91B', NULL),
('663380559-0', 'นางสาวธัญญรัตน์ อาจหาญ', 'thanyarath.a@kkumail.com', 3, 'gjrskwmcetju', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVsXuvyNGgn_XdaOKtQ1XPkvBtdycMtYjelUh2U4m3DtQ', NULL),
('663380560-5', 'ธัญญลักษณ์ สาเสน', 'thanyalak.sas@kkumail.com', 3, 'jpkoaejfrumm', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJ1HLhWTANfo7njUynboFpI3rmA1cdwj--45G9Hdba0', NULL),
('663380561-3', 'ธีรธัช มหาฤทธิ์', 'theerathat.m@kkumail.com', 3, 'yowobjwdxtug', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWvBJ3fXbYopOlbxrKKi18yd9_M0cyfiJpW6xkqmZpwBA', NULL),
('663380562-1', 'นพฤทธิ์ ฤกษนอก', 'noppharit.l@kkumail.com', 4, 'cgurakrsumcc', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWdTtuXscvgVPw7LnUbUSHjgb4lqfVE9fk4-0ycLqUe4w', NULL),
('663380563-9', 'นายนภัสกรณ์ บุตรโคตร', 'naphatsakorn.bu@kkumail.com', 4, 'cmfrelbinsti', 3, 'https://lh3.googleusercontent.com/a/ACg8ocIJ0h0V2KzQQaZ2vaVZprg5eKPeI9ra48WsOXdydvlJ', NULL),
('663380564-7', 'นายนวมินทร์ เจียรสุวรรณ', 'nawamin.ch@kkumail.com', 4, 'kkwnibmlyfkf', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLbJbEeGl8MvcmpF-DLfj9FqMU6fTULPniyztrV7ljo', NULL),
('663380565-5', 'นางสาวบัญจรัตน์ โยธีเสวต', 'banjarat.y@kkumail.com', 3, 'yowobjwdxtug', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKIv8Tm_Hhv3srZLOme6btS6_HyVzwxykWokL-r3up6', NULL),
('663380568-9', 'นายยศพล ถิรพงศ์ชาติ', 'yotsaphon.t@kkumail.com', 4, 'dvptexnpnrkq', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLz9B4fxRGAeswpYIaSSe-0NiXpVpl49OtvRuHFxW87', NULL),
('663380569-7', 'รสริน ปราณีตพลกรัง', 'sodsarin.p@kkumail.com', 3, 'munqxjgpvhjn', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJ28ziEPbGVc5uiPzwRxQ95FPmXkIhxEbLKCwKS1S85', NULL),
('663380570-2', 'ฤทธิเดช สุขสมบูรณ์', 'rittidech.s@kkumail.com', 3, 'bkgokpvqcueu', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWH5tFHxkd7M3-ShpKBXZVXE-jkqPrRymEf4ZXF-1ETpQ', NULL),
('663380572-8', 'นายวัชรพล เดชะคำภู', 'watcharaphol.d@kkumail.com', 3, 'pztelmdioxnk', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJeOqdgG4g8leS0fS0JbESEUr2gtS-RY10Eqp7u32HH', NULL),
('663380573-6', 'นางสาววิยดา มูลกัน', 'veeyada.m@kkumail.com', 4, 'ghegkuiqxdhu', 3, 'https://lh3.googleusercontent.com/a/ACg8ocInAsDkIVfaH1V1tQUx_LvW3jhtMmw8AMXoDqByD8Y4', NULL),
('663380574-4', 'วีรวัต สดศิริ', 'weerawat.so@kkumail.com', 4, 'tcnlcswpvsox', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJZ-5wI5Aq96qUu58_q9PzSsZpQsBAmLm9rSMPEfuom', NULL),
('663380575-2', 'นางสาวศรัณญา ชัยปลื้ม', 'saranya.ch@kkumail.com', 3, 'vtfbzrjhhrlp', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLOB0qpzBeF_jzMZNHptYxFgK0vZPGXegf_K6z2oz-I', NULL),
('663380576-0', 'ศุภชัย คนเพียร', 'suphachai.kh@kkumail.com', 3, 'uttqrzsufzvd', 3, 'https://lh3.googleusercontent.com/a/ACg8ocIJpiAeMv6LzbNvgT92UwVJ724Fv636wsVNq_MES1_I', NULL),
('663380577-8', 'สุกิจตรา โคแสงรักษา', 'sukijtra.k@kkumail.com', 4, 'qhksxpootwju', 3, 'https://lh3.googleusercontent.com/a/ACg8ocL6O4z_2H58XcT_zcM_w1KC93z3UiDWLcnCFq-apbRL', NULL),
('663380579-4', 'นางสาวอริศรา สีพาเสน', 'arissara.se@kkumail.com', 3, 'gmpedeimbyph', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjVYMvsY5XWF4X1IZOzOpjJGx1Bk10SZB1tpLK0ejo7L3w', NULL),
('663380580-9', 'นายอำพล แก้วภักดี', 'amphon.k@kkumail.com', 3, 'pudlvybnbjzg', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKvsLCiiDxQkOKmQgBgggACIMjebFZ-O_4KN_B6HVLu', NULL),
('663380581-7', 'เจษฎาภรณ์ วิชาสี', 'jetsadaporn.wi@kkumail.com', 4, 'cywkvvpeuzov', 3, 'https://lh3.googleusercontent.com/a/ACg8ocK129Q9dQbx8cLE3H3Ptyy4eQv3f_8mSAb8g4-T3vdK', NULL),
('663380582-5', 'เอกปฐวี มีไชยา', 'aekpattawee.m@kkumail.com', 3, 'grpiihhgfkff', 3, 'https://lh3.googleusercontent.com/a/ACg8ocJMky8fPsIU8IOt2QECUIOkWPxbpelE5KIatZV2y7F2', NULL),
('663380583-3', 'นางสาวแพรไหม หงษ์สำเริง', 'pramai_hong@kkumail.com', 4, 'uelstdbnddlw', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWRJ1mjdc3zk4SVqMQasDSw2_dct4_Gv6TvA_wCq6vrDpM', NULL),
('663380628-7', 'นางสาวกมลทิพย์ กงเพชร', 'gamontip.g@kkumail.com', 3, 'grpiihhgfkff', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjWnTMkQQRDC4MIk8iT_dSE5EBCH_JmTIbmR1w12V6T7eQ', NULL),
('663380629-5', 'จักรภัทร พิทักโยธา', 'jakkapat.pi@kkumail.com', 4, 'rrqvtxgoelnn', 3, 'https://lh3.googleusercontent.com/a/ACg8ocIohG5xpgop0ZphNaRId5zwyeNfAOjYtREizqt7965g', NULL),
('663380630-0', 'ชญาณภัทร คำสิน', 'chayanapat.k@kkumail.com', 4, 'sprrjfhjzyon', 3, 'https://lh3.googleusercontent.com/a-/ALV-UjV1iprrVEj_fiZ1xL4fslD-hun7GWNVQP7bYx44TPt-63c', NULL),
('663380631-8', 'นายฐิติพันธ์ บุตรวงค์', 'thitipun.b@kkumail.com', 4, 'ntqispnsbwvc', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLG7tqbJjBTyfPIGz4x4XmfAQ28vUIYIFspj8IpDJ_T', NULL),
('663380632-6', 'ณภัทร เปลี่ยนชัย', 'naphat.pl@kkumail.com', 4, 'zvinposjtfoc', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLTtIgfzXznQiQsdpQLQij4bLGfbmu21VRYuZ1hKTLW', NULL),
('663380633-4', 'นางสาวณัฐนิชา ทะยานรัมย์', 'natnicha.thay@kkumail.com', 3, 'ftmzhbwhnata', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKi1B_PoCqHqAEzdLsXV8rUjk5el72rbt9Z-w77v3g', NULL),
('663380634-2', 'นายนันทภัทร์ จันทชูศักดิ์', 'nantapat.c@kkumail.com', 3, 'shqxoqysbhwy', 3, 'https://lh3.googleusercontent.com/a/ACg8ocICgUeV4huSH9ANNAKsHXSO2tTmgo608KEAZn7b-Itz', NULL),
('663380635-0', 'นายปวริศ สายโยค', 'pawarit.s@kkumail.com', 3, 'ailwhoxbvtfc', 3, 'https://lh3.googleusercontent.com/a/ACg8ocLZwNjRW2u3Wr2R5uIBusZeTdm-UKCuKTuoCR5tDrlG', NULL),
('663380637-6', 'นายอภิรักษ์ สุริยะศรี', 'apirak.su@kkumail.com', 4, 'ivsvnbrivkis', 3, 'https://lh3.googleusercontent.com/a/ACg8ocKZBSb28sxTtG1vVtrT7v88HnosAbnVQhrHulYTlAkD', NULL),
('663380638-4', 'นางสาวเพ็ชรพริ้ง มะลิทอง', 'petpring.m@kkumail.com', 4, 'tkxjzevbbgtv', 3, 'https://lh3.googleusercontent.com/a/ACg8ocIveJXEuR_9YYN0zqGsdLdOguu9Z5M78SFdbTy7iDK1', NULL),
('g00', 'TA HCI Mini project', 'G00@hci.com', 1, '00000', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', '2024-02-16 16:15:35'),
('g01', 'KKU CASTER', 'G01@hci.com', 1, 'zwjxotdtobnp', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g02', 'ติวป่าว', 'ไม่พบข้อมูล', 1, 'bandvtmazvna', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', '2024-02-16 13:36:46'),
('g03', 'Freshy', NULL, 1, 'prnzhusbqnde', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g04', 'KKU Guide', NULL, 1, 'pjejxzljczui', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g05', 'KKU GO', NULL, 1, 'frovwhkynbxy', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g06', 'KKU transit', NULL, 1, 'kytcuxxuunot', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g07', 'WeStay', NULL, 1, 'ypoozixnepvx', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g08', 'Mong Rest', NULL, 1, 'akouvkjnofai', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g09', 'KKU FindFood', NULL, 1, 'azqxhjtluxsz', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g10', 'มาเด้อ', NULL, 1, 'jvpmdnorgbuf', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g11', 'KKU Say Hi!', NULL, 1, 'zgdiccuseugu', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g12', 'KKU Emergency', NULL, 1, 'hobdxargqjkj', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g13', 'Ed KKU', NULL, 1, 'bzexcopzymqe', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g14', 'Camp Connect', NULL, 1, 'aocxgksyymva', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g15', 'Volunteer FUN', NULL, 1, 'hisilnevqemf', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g16', 'ตุ้มโฮม KKU', NULL, 1, 'bhnqlpkagyga', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g17', 'HealthHub', NULL, 1, 'gyhkzanynxtm', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', '2024-02-16 13:44:44'),
('g18', 'KKU market', NULL, 1, 'rfwoarvydnuu', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g19', 'Kaikhong KKU', NULL, 3, 'kmzzfadblnvr', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g20', 'Nongmai KKU', NULL, 3, 'avwshvcuyail', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', '2024-02-16 15:32:06'),
('g21', 'Meet friends KKU', NULL, 3, 'oflgebgthrse', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g22', 'Make friends', NULL, 3, 'oxwkybeodafp', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g23', 'Plan KKU', NULL, 3, 'ljmjblghxneu', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g24', 'TrackIT', NULL, 3, 'hxyhaabhzbqy', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g25', 'Talk KKU', NULL, 3, 'leupjibkquwo', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g26', 'Find Tutor', NULL, 3, 'befrugvafgot', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g27', 'Guide food', NULL, 3, 'ruaqgbnrvqkj', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g28', 'jobjive', NULL, 3, 'kgmfyccmfaio', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', '2024-02-16 15:34:43'),
('g29', 'HAR-HOR', NULL, 3, 'ubrmxhwnwern', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g30', 'Parking Space', NULL, 3, 'bteqekemzyng', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g31', 'Find Things', NULL, 3, 'wgujwcoqeril', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', '2024-02-16 15:32:42'),
('g32', 'MD convenient', NULL, 3, 'neorvetzbhuo', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', '2024-02-16 15:31:46'),
('g33', 'summarize', NULL, 3, 'xfsnneueagle', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g34', 'Libraread', NULL, 3, 'knjcyzcucuzw', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g35', 'KKU SO', NULL, 3, 'ncdpwmdruicu', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g36', 'G36', NULL, 3, 'nnclsshptkbn', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('g37', 'G37', NULL, 1, 'iqclncjyjuuy', 2, 'https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg', NULL),
('sumkas', 'Sumonta Kasemvilas', 'sumkas@kku.ac.th', 1, 'sumkasadmin', 1, 'https://lh3.googleusercontent.com/a-/ALV-UjVIDXGo12hXUqOcgTMlSBGshi7TFD-Grvrctna9yjqxlQ', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD KEY `user_groups` (`userid`);

--
-- Indexes for table `group_detal`
--
ALTER TABLE `group_detal`
 ADD PRIMARY KEY (`id`), ADD KEY `group-user` (`userid`), ADD KEY `group-groups` (`groupid`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `group_detal`
--
ALTER TABLE `group_detal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=405;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=476;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
ADD CONSTRAINT `user_groups` FOREIGN KEY (`userid`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
