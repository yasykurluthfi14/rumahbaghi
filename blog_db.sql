-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 03:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(11) NOT NULL,
  `about_image` varchar(100) DEFAULT NULL,
  `about_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_image`, `about_description`) VALUES
(1, 'about.jpg', 'MBLOG adalah Open Source Source Code untuk personal blog.<br><br>Full responsive dan terlihat memukau pada desktop, tablet, atau perangkat selular apapun.<br><br>Dibangun dengan framework PHP Codeigniter dengan mengikuti standard desain patern MVC, sehingga mudah dikembangkan lebeih lanjut oleh web developer manapun. <br><br>Anda dapat memiliki blog pribadi idaman Anda menggunakan source code ini sekarang juga.<br><br>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_backlog`
--

CREATE TABLE `tbl_backlog` (
  `id_backlog` int(11) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `backlog` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_backlog`
--

INSERT INTO `tbl_backlog` (`id_backlog`, `kelurahan`, `kecamatan`, `backlog`) VALUES
(3, 'Manggul', 'Gumay Ulu', 41),
(4, 'Pagar Agung', 'Jarai', 92),
(5, 'Pagar Gunung', 'Pagar Gunung', 161),
(6, 'Desa Manggul ', 'Kikim Selatan', 45),
(7, 'Ulak Lebar', 'Kikim Tengah', 58),
(8, 'Tanjung Payang', 'Kikim Timur', 418),
(9, 'Bandar Jaya', 'Kota Agung', 907),
(10, 'Air Dingin Lama', 'Tanjung Tebat', 50),
(11, 'Talang Padang Tinggi', 'Pajar Bulan', 52),
(12, 'Sidomakmur', 'Kikim Barat', 87),
(13, 'Gunung Gajah', 'Lahat', 172),
(14, 'Karang Baru', 'Lahat Selatan', 49),
(15, 'Ulak Pandan', 'Merapi Barat', 147),
(16, 'Geramat', 'Merapi Selatan', 59),
(17, 'Banjarsari', 'Merapi Timur', 20),
(18, 'Bandu Agung', 'Muara Payang', 49),
(19, 'Jadian Lama', 'Mulak Sebingkai', 0),
(20, 'Karang Lebak', 'Mulak Ulu', 0),
(21, 'Pagar Agung', 'Pseksu', 6),
(22, 'Kuba', 'Pulau Pinang', 0),
(23, 'Tanjung Alam', 'Suka Merindu', 0),
(24, 'Tanjung Bulan', 'Tanjung Sakti Pumu', 162),
(30, 'Sugi Rawas', 'Gumay Talang', 91);

--
-- Triggers `tbl_backlog`
--
DELIMITER $$
CREATE TRIGGER `tambah_backlog` AFTER INSERT ON `tbl_backlog` FOR EACH ROW BEGIN
 UPDATE tbl_kecamatan set backlog = backlog + NEW.backlog
 WHERE kecamatan = NEW.kecamatan ;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_backlog` AFTER UPDATE ON `tbl_backlog` FOR EACH ROW BEGIN
 UPDATE tbl_kecamatan set backlog = NEW.backlog
 WHERE kecamatan = NEW.kecamatan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `comment_date` timestamp NULL DEFAULT current_timestamp(),
  `comment_name` varchar(60) DEFAULT NULL,
  `comment_email` varchar(90) DEFAULT NULL,
  `comment_message` text DEFAULT NULL,
  `comment_status` int(11) DEFAULT 0,
  `comment_parent` int(11) DEFAULT 0,
  `comment_post_id` int(11) DEFAULT NULL,
  `comment_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `comment_date`, `comment_name`, `comment_email`, `comment_message`, `comment_status`, `comment_parent`, `comment_post_id`, `comment_image`) VALUES
(1, '2019-04-07 03:15:05', 'Joko', 'joko@gmail.com', 'Nice Post, thanks', 1, 0, 6, 'user_blank.png'),
(2, '2019-04-12 04:22:34', 'M Fikri', 'fikrifiver97@gmail.com', 'Thank you.<br>', 1, 1, 6, 'fcee14ca639c3ca3c5b93b7c7fc70ba2.png'),
(3, '2019-12-28 07:52:42', 'Name', 'mfikri@gmail.com', 'Nice Post', 1, 0, 2, 'user_blank.png'),
(4, '2019-12-28 08:00:22', 'M Fikri', 'qadalm@gmail.com', 'Nice Article', 1, 0, 2, 'user_blank.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_developer`
--

CREATE TABLE `tbl_developer` (
  `id_developer` int(11) NOT NULL,
  `nama_developer` varchar(50) DEFAULT NULL,
  `telepon` varchar(200) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_developer`
--

INSERT INTO `tbl_developer` (`id_developer`, `nama_developer`, `telepon`, `alamat`) VALUES
(1, 'Sentraland Jakabaring', NULL, NULL),
(2, 'PT. Semadak Serunting Sakti Palembang ', NULL, NULL),
(3, 'PT. Ogan Kencana Propertindo', NULL, NULL),
(4, 'PT. Athar Indah Properti', NULL, NULL),
(5, 'CV. Mutiara Prabu', NULL, NULL),
(6, 'PT. Karya Mandiri Propertindo Utama', NULL, NULL),
(7, 'Kirana Eshan Nugraha. PT', NULL, NULL),
(8, 'PT. Gadang Berlian', NULL, NULL),
(9, 'PT. Artha Esa Buana', NULL, NULL),
(10, 'Sinar Artha Prakarsa, PT', NULL, NULL),
(11, 'CV. Siguntang', NULL, NULL),
(12, 'PT. Unggul Perkasa Propertindo', NULL, NULL),
(13, 'PT. Adhi Gemilang Sriwijaya', NULL, NULL),
(14, 'PT. Syaputra Bersaudara Abadi', NULL, NULL),
(15, 'PT. Graha Cipta Konstruksi', NULL, NULL),
(16, 'PT. Zullia Bintang Akbar', NULL, NULL),
(17, 'PT. Citra Arshi Graha', NULL, NULL),
(18, 'PT. Sumatea Agung Perkasa', NULL, NULL),
(19, 'PT. Sepakat Jaya Perdana', NULL, NULL),
(20, 'PT. Kurnia Hamusri Sukses Mandiri', NULL, NULL),
(21, 'PT. Muarakati Baru Satu', NULL, NULL),
(22, 'PT. Graha Sriwijaya Abadi', NULL, NULL),
(23, 'PT. Iryu Berlian Cikitsu', NULL, NULL),
(24, 'PT. Indonesia Makmur Konstruksi', NULL, NULL),
(25, 'PT. RID Jaya Bersama', NULL, NULL),
(26, 'PT. Rumba Lestari Jaya', NULL, NULL),
(27, 'PT. Zafir Permata Properti', NULL, NULL),
(28, 'PT. Revari Putra Pratama', NULL, NULL),
(29, 'PT. Sinar Grha Persada', NULL, NULL),
(30, 'CV. Sukses Karya Mandiri', NULL, NULL),
(31, 'PT. Depot Mataram Jaya', NULL, NULL),
(32, 'PT. Marian Makmur Bersama', NULL, NULL),
(33, 'PT. Pelangi Pintu Emas Sejahtera', NULL, NULL),
(34, 'PT. Cipta Arsigriya', NULL, NULL),
(35, 'PT. Kesuma Maju Sejahtera', NULL, NULL),
(36, 'PT. Sumatera Agung Perkasa', NULL, NULL),
(37, 'PT. Sukses Agni Mandiri', NULL, NULL),
(38, 'Sahabat Properti', NULL, NULL),
(39, 'PT. Harasco Maksum Propertindo', NULL, NULL),
(40, 'PT. Vision Point Indonesia', NULL, NULL),
(41, 'PT. Sinar Cemerlang Development', NULL, NULL),
(42, 'PT. Ogan Graha Mandiri', NULL, NULL),
(43, 'PT. Samsafa Alfa', NULL, NULL),
(44, 'PT. Alison Cahaya Semesta', NULL, NULL),
(45, 'PT. Cipta Griya Sriwijaya', NULL, NULL),
(46, 'PT. Sumber Multisarana Mulia', NULL, NULL),
(47, 'PT. Tiara Persada Mandiri', NULL, NULL),
(48, 'PT. Sandaran Sukses Abadi', NULL, NULL),
(49, 'PT. Perdana Jaya Sukses Abadi', NULL, NULL),
(50, 'PT. Cakra Kharisma Pratama', NULL, NULL),
(51, 'PT. Bumi Eka Gemilang', NULL, NULL),
(52, 'PT. Adeka Jaya Abadi', NULL, NULL),
(53, 'PT. Nusantara Berkah Gemilang', NULL, NULL),
(54, 'PT. Raion Sriwijaya Raya', NULL, NULL),
(55, 'PT. Zafran Athmar Anugrah', NULL, NULL),
(56, 'PT. Karunia Anugerah Gemilang', NULL, NULL),
(57, 'PT. Buana Asa', NULL, NULL),
(58, 'PT. Vinayaka Abadi', NULL, NULL),
(59, 'PT. Hutama Cipta Abadi', NULL, NULL),
(60, 'PT. Maja Praya Persada', NULL, NULL),
(61, 'CV. Bandar Residence', NULL, NULL),
(62, 'PT. Aditya Graha Mulia', NULL, NULL),
(63, 'PT. Akhira Barat Jaya', NULL, NULL),
(64, 'PT. Poligon Selaras Abadi', NULL, NULL),
(65, 'PT. Wima Intra Nusa', NULL, NULL),
(66, 'PT. Sumatera Karya Utama', NULL, NULL),
(67, 'PT. Indah Rizqy Bersaudara', NULL, NULL),
(68, 'PT. Anugrah Lestari Abadi Mandiri', NULL, NULL),
(69, 'PT. Cakra Derma Warsa', NULL, NULL),
(70, 'Sumatera Muda Propertindo, PT', NULL, NULL),
(71, 'PT. Dharma Rezeki Sejahtera', NULL, NULL),
(72, 'PT. Sinar Agung Propertindo', NULL, NULL),
(73, 'PT. Cahaya Bangun Bersaudara', NULL, NULL),
(74, 'PT. Bukit Juvi Permata', NULL, NULL),
(75, 'PT. Mahaputra Karya Konstruksindo', NULL, NULL),
(76, 'PT. Sumatera Bintang Mandiri', NULL, NULL),
(77, 'PT. Berkah Sejahtera Konstruksi', NULL, NULL),
(78, 'PT. Nayaka Bangun Persada', NULL, NULL),
(79, 'PT. Hamparan Sejahtera Lestari', NULL, NULL),
(80, 'PT. Duta Persada Lestari', NULL, NULL),
(81, 'PT. Permata Pratama Propertindo', NULL, NULL),
(82, 'PT. Gita Nugraha Cipta', NULL, NULL),
(83, 'PT. Bangun Cakra Mandiri', NULL, NULL),
(84, 'PT. Raksawiguna', NULL, NULL),
(85, 'PT. Golden Royal Propertindo', NULL, NULL),
(86, 'PT. Said Hamim Jaya', NULL, NULL),
(87, 'PT. Sarana Maju Perkasa', NULL, NULL),
(88, 'PT. Perdana Abadi Barokah', NULL, NULL),
(89, 'PT. Cahaya Makmur Mandiri', NULL, NULL),
(90, 'CV. Zafa Bersaudara', NULL, NULL),
(91, 'CV. Bangun Jaya Abadi', NULL, NULL),
(92, 'PT. Bintang Agung Realti', NULL, NULL),
(93, 'PT. Bima Sakti Berkarya', NULL, NULL),
(94, 'PT. Komala Lima Bersaudara', NULL, NULL),
(95, 'PT. Permata Berkah Utama', NULL, NULL),
(96, 'PT. Sukses Saudara Bersama', NULL, NULL),
(97, 'PT. Ahaz Karya Mandiri', NULL, NULL),
(98, 'PT. Bintang Berlian Berjaya', NULL, NULL),
(99, 'Athung Abadi', NULL, NULL),
(100, 'PT. Royyan Amani Ahli', NULL, NULL),
(101, 'PT. Sukses Rizqy Insani', NULL, NULL),
(102, 'PT. Pandawa Lima Sukses Sejahtea', NULL, NULL),
(103, 'CV. Sinar Putra Andalas', NULL, NULL),
(104, 'CV. Karya Mandiri', NULL, NULL),
(105, 'PT. Alta Prisma Perkasa', NULL, NULL),
(106, 'PT. Sinar Lololuan', NULL, NULL),
(107, 'PT. Cipta Kreasindo Mandiri', NULL, NULL),
(108, 'PT. Hikamah Jaya Indonesia', NULL, NULL),
(109, 'PT. Tiga Putri Sinar Kencana', NULL, NULL),
(110, 'PT. Disan Perkasa', NULL, NULL),
(111, 'PT. Mulia Bersatu Sukses', NULL, NULL),
(112, 'CV. Mega Mulia Contrindo', NULL, NULL),
(113, 'PT. Bersama Jaya Kontsruksi', NULL, NULL),
(114, 'PT. Sehati Terang Bersama', NULL, NULL),
(115, 'PT. Alfin Putera Perkasa', NULL, NULL),
(116, 'PT. Akbar Al-Farizi', NULL, NULL),
(117, 'PT. Rizky Melimpah Ruah', NULL, NULL),
(118, 'PT. Synergi Indomakmur Perkasa', NULL, NULL),
(119, 'CV. Hamizan', NULL, NULL),
(120, 'PT. Lestari Budi Sentosa', NULL, NULL),
(121, 'PT. Buana Raden Jaya', NULL, NULL),
(122, 'PT. Cahaya Hati Nusantara', NULL, NULL),
(123, 'PT. Cahaya Sanubari Sakti', NULL, NULL),
(124, 'PT. Sriwijaya Anugerah Pratama', NULL, NULL),
(125, 'PT. Anugrah Wahana Indah', NULL, NULL),
(126, 'PT. Surya Ganda Makmur', NULL, NULL),
(127, 'PT. Bintang Sumber Permata', NULL, NULL),
(128, 'PT. Difa Celdira Propertindo', NULL, NULL),
(129, 'PT. Buana Istana Lestari', NULL, NULL),
(130, 'PT. Tanjung Bakti Persada', NULL, NULL),
(131, 'PT. Fafiri Utama Propertindo', NULL, NULL),
(132, 'PT. Wartino Insani Mulia', NULL, NULL),
(133, 'PT. Kharisma Amanah Putra', NULL, NULL),
(134, 'PT. Rancang Bangun Sriwijaya', NULL, NULL),
(135, 'PT. Developing Graha Sriwijaya', NULL, NULL),
(136, 'PT. Putra Halim Abadi', NULL, NULL),
(137, 'PT. Berkah Sahabat Sumbay', NULL, NULL),
(138, 'PT. Gunung Kerto', NULL, NULL),
(139, 'PT. Agung Cempaka Guna', NULL, NULL),
(140, 'PT. Lahat Maju Jaya', NULL, NULL),
(141, 'PT. Rakha Sejahtera Abadi', NULL, NULL),
(142, 'PT. Rindang Sari Anugrah', NULL, NULL),
(143, 'PT. Gedung Agung Permai Lestari', NULL, NULL),
(144, 'PT. Aldiva Mandiri Perkasa', NULL, NULL),
(145, 'PT. Anggara Jaya Utama Energi', NULL, NULL),
(146, 'PT. Ehsan Mabrukah', NULL, NULL),
(147, 'PT. Rekha Sejahtera Abadi', NULL, NULL),
(148, 'PT. Silampari', NULL, NULL),
(149, 'CV. Mitra Konstruksi', NULL, NULL),
(150, 'PT. Alvino Lahat Sejahtera', NULL, NULL),
(151, 'PT. Ehsan Mabrukah Mubarak', NULL, NULL),
(152, 'PT. Bersama Muda Berkarya', NULL, NULL),
(153, 'PT. Panca Artha Sentosa', NULL, NULL),
(154, 'PT. Agung Jaya Persada', NULL, NULL),
(155, 'PT. Intan Cahaya Abadi', NULL, NULL),
(156, 'PT. Usaha Remaja Maju', NULL, NULL),
(157, 'PT. Usaha Remaja', NULL, NULL),
(158, 'PT. Pratama Sion Mandiri', NULL, NULL),
(159, 'PT. Kedaton Mitra Sejahtera', NULL, NULL),
(160, 'PT. Sinar Baturaja Indah', NULL, NULL),
(161, 'PT. Rikki Leo Pratama', NULL, NULL),
(162, 'PT. Property Tiga Empat', NULL, NULL),
(163, 'PT. Alma Arya Mandiri', NULL, NULL),
(164, 'PT. Raja Properti Sriwijaya', NULL, NULL),
(165, 'PT. Nugraha Multi Karya', NULL, NULL),
(166, 'PT. Familli Indah Sejatera', NULL, NULL),
(167, 'PT. Artha Mitra Govinda', NULL, NULL),
(168, 'PT. Sarana Jati Raya', NULL, NULL),
(169, 'PT. Meikhado Ogan Propertindo', NULL, NULL),
(170, 'PT. Karya Perdana Bersaudara', NULL, NULL),
(171, 'PT. Cipta Bangun Musi', NULL, NULL),
(172, 'PT. Amanda Agung Lestari', NULL, NULL),
(173, 'PT. Chinta Karya Group', NULL, NULL),
(174, 'PT. Maju Berkembang Bijaksana', NULL, NULL),
(175, 'PT. Prestasi Investa Pratama', NULL, NULL),
(176, 'PT. Delta Laham Mandiri', NULL, NULL),
(177, 'PT. Keira Almanzil Mubarok', NULL, NULL),
(178, 'PT. Prabu Properti Indonesia', NULL, NULL),
(179, 'PT. Inti Zafir Indonesia', NULL, NULL),
(180, 'PT. Sarana Titian Sejahtera', NULL, NULL),
(181, 'PT. Sarinah Lestari  Persada', NULL, NULL),
(182, 'CV. Annisa Cahaya Agung', NULL, NULL),
(183, 'Untung Abadi Sempurna', NULL, NULL),
(184, 'PT. Empat Pilar Bersaudara', NULL, NULL),
(185, 'PT. Agung Rahayu Baru', NULL, NULL),
(186, 'PT. Rimbang Jaya', NULL, NULL),
(187, 'PT. Dwi Mitra Asaba', NULL, NULL),
(188, 'PT. Yashaffa Putri ', NULL, NULL),
(189, 'PT. Rapaland', NULL, NULL),
(190, 'PT. Rene Indah Lestari', NULL, NULL),
(191, 'PT. Hutama Andalan Indonesia', NULL, NULL),
(192, 'PT. Prima Dwi Mitra', NULL, NULL),
(193, 'PT. Tiga Putri Mitra Sejahtera', NULL, NULL),
(194, 'PT. Triyasa Ageng Sangkara', NULL, NULL),
(195, 'PT. Sumatera Artha Propertindo', NULL, NULL),
(196, 'PT. Alkhalifi Farzano Bersaudara', NULL, NULL),
(197, 'PT. Beliti Sumatera Land', NULL, NULL),
(198, 'PT. Najwa Karya Mandiri', NULL, NULL),
(199, 'PT. Abdi Bumi Lestari', NULL, NULL),
(200, 'PT. Muba Bangun Negeri', NULL, NULL),
(201, 'PT. Amanah Agro Indonesia', NULL, NULL),
(202, 'CV. Mutiara Indah Perdana', NULL, NULL),
(203, 'PT. Bandar Budi Lestari', NULL, NULL),
(204, 'PT. Griya Tasrindo Permai', NULL, NULL),
(205, 'CV. Putra Kembar Jaya', NULL, NULL),
(206, 'PT. Bumi Nusantara Mandiri', NULL, NULL),
(207, 'PT. Giri Jaya Persada', NULL, NULL),
(208, 'PT. ATH Zafir Propertindo', NULL, NULL),
(209, 'PT. Mandiri Ultra Famili Ceria', NULL, NULL),
(210, 'PT. Musawaa Indonesia Mandiri', NULL, NULL),
(211, 'PT. Istana Demang Lestari', NULL, NULL),
(212, 'PT. Lima Putra Jaya', NULL, NULL),
(213, 'PT. Reolan', NULL, NULL),
(214, 'Kirana Ehsan Nugraha, PT', NULL, NULL),
(215, 'PT. Surya Athaya Sejahtera', NULL, NULL),
(216, 'PT. Bernai Utama Sejahtera', NULL, NULL),
(217, 'PT. Citra Sumatera Mandiri', NULL, NULL),
(218, 'PT. Pelita Jaya Nusantara', NULL, NULL),
(219, 'PT. Duma Bersaudara', NULL, NULL),
(220, 'PT. Agung Sumatera Development', NULL, NULL),
(221, 'PT. Gumay Asri Utama', NULL, NULL),
(222, 'PT. Berkat Cahaya Surya Agung', NULL, NULL),
(223, 'PT. Sriwijaya Griya Cemerlang', NULL, NULL),
(224, 'CV. Pesona Abadi', NULL, NULL),
(225, 'PT. Afifah Prima Indah', NULL, NULL),
(226, 'PT. Sukses Artha Bersama', NULL, NULL),
(227, 'PT. Nakayo Lima Saudara', NULL, NULL),
(228, 'PT. Golden Artha Sriwijaya', NULL, NULL),
(229, 'PT. Putra Darma Cemerlang', NULL, NULL),
(230, 'PT. Bonita Indonesia', NULL, NULL),
(231, 'PT. Pandega Pandu Perkasa', NULL, NULL),
(232, 'PT. Unggul Perkasa Sriwijaya', NULL, NULL),
(233, 'PT. Terbit Jaya Sentosa', NULL, NULL),
(234, 'PT. Bonni Aktafian Syaputra', NULL, NULL),
(235, 'PT. Karya Istana Damai', NULL, NULL),
(236, 'PT. Muzazi Nurfi Abadi', NULL, NULL),
(237, 'PT. Puri Jaya Prima', NULL, NULL),
(238, 'PT. Sri Gading Indah', NULL, NULL),
(239, 'PT. Ragam Karya Gemilang', NULL, NULL),
(240, 'PT. Dwi Lijaya Bersaudara', NULL, NULL),
(241, 'PT. Sriwijaya Agung Sejahtera', NULL, NULL),
(242, 'CV. Bersatu Bangun Mulia', NULL, NULL),
(243, 'PT. Faiz Bintang Pratama', NULL, NULL),
(244, 'CV. Forji Teknik', NULL, NULL),
(245, 'PT. Anugrah Setia Mulia', NULL, NULL),
(246, 'PT. Sinar Mekar Sari', NULL, NULL),
(247, 'PT. Beliti Jaya Mandiri', NULL, NULL),
(248, 'PT. Alstelindo Agung Abadi', NULL, NULL),
(249, 'PT. Barangan Jaya Mandiri', NULL, NULL),
(250, 'PT. Garuda Emas Cakrawala', NULL, NULL),
(251, 'PT. Bukit Agung Sehati', NULL, NULL),
(252, 'PT. Sriwijaya Konstruksi', NULL, NULL),
(253, 'CV. Palembang Sukses', NULL, NULL),
(254, 'PT. Yuki Prima Anugrah', NULL, NULL),
(255, 'PT. Rajawali Emas Gemilang Jaya', NULL, NULL),
(256, 'PT. Musi Belida Lestari', NULL, NULL),
(257, 'PT. Berdikari Bangun Abadi', NULL, NULL),
(258, 'PT. Candra Putra Mandiri', NULL, NULL),
(259, 'PT. Arisma Maju Jaya', NULL, NULL),
(260, 'PT. Herdi Jaya', NULL, NULL),
(261, 'PT. Duta Karya Pratama', NULL, NULL),
(262, 'PT. Caraka Sriwijaya Perkasa', NULL, NULL),
(263, 'PT. Bersinar Bangun Bersama', NULL, NULL),
(264, 'PT. Duta Persada Semesta', NULL, NULL),
(265, 'PT. Bangun Pesona Sriwijaya', NULL, NULL),
(266, 'Perumnas Cabang Palembang', NULL, NULL),
(267, 'PT. Sandy Putra Property', NULL, NULL),
(268, 'PT. Indonesia Makmur Kontruksi', NULL, NULL),
(269, 'PT. Karya Perumahan Mandiri', NULL, NULL),
(270, 'PT. Dinamisator', NULL, NULL),
(271, 'PT. Karya Anak Negeri', NULL, NULL),
(272, 'PT. Ladang Makmur', NULL, NULL),
(273, 'PT. Tabriz Karya Utama', NULL, NULL),
(274, 'PT. Graha Artha Govinda', NULL, NULL),
(275, 'PT. Boemi Berkah Prioritas', NULL, NULL),
(276, 'PT. Yadi Maju Bersama', NULL, NULL),
(277, 'CV. Tadza Gemilang', NULL, NULL),
(278, 'CV. Sejahtera', NULL, NULL),
(279, 'PT. Seri Tanjung Lestari', NULL, NULL),
(280, 'CV. Agnar Jaya', NULL, NULL),
(281, 'PT. Agnar Jaya Indah', NULL, NULL),
(282, 'PT. Alam Permai Tanjung Raja', NULL, NULL),
(283, 'Opuchan Marven Gemilang', NULL, NULL),
(284, 'PT. Afifah Makmur Jaya', NULL, NULL),
(285, 'PT. Sukaria Candra Abadi', NULL, NULL),
(286, 'PT. Anugra Ridho Illahi', NULL, NULL),
(287, 'CV. Putra Jaya Perkasa', NULL, NULL),
(288, 'PT. Pandawa Lima Sukses Sejahtera', NULL, NULL),
(289, 'PT. Puriyasa Contraco Abadi', NULL, NULL),
(290, 'PT. Pratama Mandiri Sentosa', NULL, NULL),
(291, 'PT. Putra Yansi Perkasa', NULL, NULL),
(292, 'PT. Maju Jang Jaya Dua', NULL, NULL),
(293, 'PT. Griya Tunas Mandiri', NULL, NULL),
(294, 'PT. Maju Jang Jaya', NULL, NULL),
(295, 'PT. Baiti Sejahtera', NULL, NULL),
(296, 'PT. Puteri Mandiri Linggau', NULL, NULL),
(297, 'PT. Pangkuan Ayah dan Ibu', NULL, NULL),
(298, 'PT. Duta Graha Sriwijaya', NULL, NULL),
(299, 'PT. Ashilla Beliti Kontruksi', NULL, NULL),
(300, 'PT. Mega Faras', NULL, NULL),
(301, 'PT. Dwi Putra Bakti Persada', NULL, NULL),
(302, 'PT. Rahayu Putra Pratama', NULL, NULL),
(303, 'PT. Gol Properti Perdana', NULL, NULL),
(304, 'PT. Bersama Jaya Konstruksi', NULL, NULL),
(305, 'PT. Cakra Nabilla Caraka', NULL, NULL),
(306, 'PT. Gentong Emas Lubuklinggau', NULL, NULL),
(307, 'PT. Mandiri Jaya Grup', NULL, NULL),
(308, 'PT. Nugraha Jaya Abadi MRT', NULL, NULL),
(309, 'PT. Prabu Nusa Properti', NULL, NULL),
(310, 'PT. Cipta Sarana Usaha', NULL, NULL),
(311, 'PT. Mitra Muda Propertindo', NULL, NULL),
(312, 'PT. Terbit Bersama Amanah', NULL, NULL),
(313, 'PT. Permata Gumay Sakti', NULL, NULL),
(314, 'PT. Satya Mitra Selaras Mandiri', NULL, NULL),
(315, 'PT. Cahaya Maharani Mandiri', NULL, NULL),
(316, 'PT. Poligon Abadi', NULL, NULL),
(317, 'PT. Amalia Duta Persada', NULL, NULL),
(318, 'PT. Grup Rambang Bellido', NULL, NULL),
(319, 'PT. Rambang Jaya Perkasa', NULL, NULL),
(320, 'PT. Group Rambang Bellido', NULL, NULL),
(321, 'PT. Bhasma Anugrah Al-Fatih', NULL, NULL),
(322, 'PT. Cesatu Mitra Griya', NULL, NULL),
(323, 'PT. Bumi Enim Lestari', NULL, NULL),
(324, 'PT. Anisa Cahaya Agung', NULL, NULL),
(325, 'PT. Anugra Ridho Illah', NULL, NULL),
(326, 'PT. Chaesar Handayani Properti', NULL, NULL),
(327, 'PT. Setia Budi', NULL, NULL),
(328, 'PT. Titan Abadi Pratama', NULL, NULL),
(329, 'PT. Cheasar Handayani Properti', NULL, NULL),
(331, 'PT. Inti Timur', '081391496048', 'Jl. Sudirman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` int(11) NOT NULL,
  `home_caption_1` varchar(200) DEFAULT NULL,
  `home_caption_2` varchar(200) DEFAULT NULL,
  `home_bg_heading` varchar(50) DEFAULT NULL,
  `home_bg_testimonial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_caption_1`, `home_caption_2`, `home_bg_heading`, `home_bg_testimonial`) VALUES
(1, 'Driven . Inspired . Smart', 'Rumah Baghi', 'fotorumahbaghi11.png', 'image_8.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_name` varchar(50) DEFAULT NULL,
  `inbox_email` varchar(80) DEFAULT NULL,
  `inbox_subject` varchar(200) DEFAULT NULL,
  `inbox_message` text DEFAULT NULL,
  `inbox_created_at` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` varchar(2) DEFAULT '0' COMMENT '0=Unread, 1=Read'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `koordinat` varchar(100) DEFAULT NULL,
  `backlog` varchar(100) NOT NULL,
  `rtlh` varchar(100) NOT NULL,
  `perumahan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id_kecamatan`, `kecamatan`, `koordinat`, `backlog`, `rtlh`, `perumahan`) VALUES
(1, 'GUMAY TALANG', '-3.92859498512003,103.314335939', '364', '320', '2'),
(2, 'GUMAY ULU', '-3.78697049743944,103.386769166', '41', '327', ''),
(3, 'JARAI', '-3.93712322710551,103.124062345', '92', '481', ''),
(4, 'KIKIM BARAT', '-3.57630766704771,103.115802666', '87', '632', ''),
(5, 'KIKIM SELATAN', '-3.75741226758586,103.116866526', '45', '574', ''),
(6, 'KIKIM TENGAH', '-3.63366798134418,103.206583394', '58', '132', ''),
(7, 'KIKIM TIMUR', '-3.62875646042213,103.272641148', '418', '1332', ''),
(8, 'KOTA AGUNG', '-4.10877043356456,103.355757976', '907', '512', ''),
(9, 'LAHAT', '-3.71685896692417,103.482794186', '172', '905', ''),
(10, 'MERAPI BARAT', '-3.75363675825928,103.568079266', '147', '220', ''),
(11, 'MERAPI SELATAN', '-3.8663748722335,103.613837026', '59', '578', ''),
(12, 'MERAPI TIMUR', '-3.62935176154541,103.537351029', '20', '369', ''),
(13, 'MUARA PAYANG', '-3.89813804888412,103.120462543', '49', '432', ''),
(14, 'MULAK ULU', '-4.01208574222944,103.460303102', '0', '622', ''),
(15, 'PAGAR GUNUNG', '-3.93747434812435,103.49405703', '161', '520', ''),
(16, 'PAJAR BULAN', '-3.96806724958648,103.227901187', '52', '456', ''),
(17, 'PSEKSU', '-3.82148446759427,103.234676486', '6', '431', ''),
(18, 'PULAU PINANG', '-3.8584635703356,103.478339998', '0', '176', ''),
(20, 'TANJUNG SAKTI PUMU', '-4.14489486286838,103.023967948', '162', '305', ''),
(21, 'TANJUNG TEBAT', '-3.99966749457235,103.390204096', '50', '392', ''),
(22, 'LAHAT SELATAN', '-3.796945, 103.531729', '49', '202', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_navbar`
--

CREATE TABLE `tbl_navbar` (
  `navbar_id` int(11) NOT NULL,
  `navbar_name` varchar(50) DEFAULT NULL,
  `navbar_slug` varchar(200) DEFAULT NULL,
  `navbar_parent_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_navbar`
--

INSERT INTO `tbl_navbar` (`navbar_id`, `navbar_name`, `navbar_slug`, `navbar_parent_id`) VALUES
(1, 'Home', NULL, 0),
(2, 'Program Pemerintah', '#', 0),
(3, 'Perumahan', '', 0),
(4, 'Data Dalam Peta', 'maps', 0),
(5, 'Cari Perumahan', 'cari', 3),
(10, 'Daftar Perumahan', 'daftar', 3),
(11, 'Rekap Perumahan', 'rekap', 3),
(12, 'Login', 'administrator', 0),
(13, 'Data Rumah', 'rtlh', 2),
(14, 'DATA BACKLOG', 'backlog', 2),
(15, 'data Developer', 'dev', 2),
(16, 'DATA SK KUMUH', 'kumuh', 2),
(18, 'Download Form PSU', 'download', 2),
(19, 'Download Usulan PKRTLH', 'pkrtlh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perumahan`
--

CREATE TABLE `tbl_perumahan` (
  `id_perumahan` int(11) NOT NULL,
  `nama_perumahan` varchar(100) DEFAULT NULL,
  `developer` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `koordinat` varchar(100) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `harga` bigint(20) NOT NULL DEFAULT 0,
  `luas_lahan` varchar(50) DEFAULT NULL,
  `terjual` varchar(50) DEFAULT NULL,
  `belum_terjual` varchar(50) DEFAULT NULL,
  `belum_terbangun` varchar(50) DEFAULT NULL,
  `sisa_rumah` varchar(50) DEFAULT NULL,
  `bank_partner` varchar(200) DEFAULT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `image4` varchar(50) DEFAULT NULL,
  `image5` varchar(50) DEFAULT NULL,
  `count` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perumahan`
--

INSERT INTO `tbl_perumahan` (`id_perumahan`, `nama_perumahan`, `developer`, `alamat`, `kecamatan`, `koordinat`, `tipe`, `harga`, `luas_lahan`, `terjual`, `belum_terjual`, `belum_terbangun`, `sisa_rumah`, `bank_partner`, `image1`, `image2`, `image3`, `image4`, `image5`, `count`) VALUES
(197, 'Bukit Bengkutrat Indah', 'PT. Rizky Melimpah Ruah', 'Kecamatan Lahat, Kelurahan Pagar Agung', 'LAHAT', '-3.759416,103.502086', '36', 0, '96', '0', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, 0),
(198, 'Griya Rafika Blok C Ujung', 'PT. Lahat Maju Jaya', 'Desa Manggul Kecamatan Lahat', 'LAHAT', '-3.764802,103.566728', '36/99', 0, '32.18 M2', '112', '8', '174', '0', 'BTN', NULL, NULL, NULL, NULL, NULL, 0),
(199, 'Pelangi Residence', 'PT. Rakha Sejahtera Abadi', 'Jalan Lintas Baru Desa Manggul', 'LAHAT', '-3.760368,103.565733', '36/96', 0, '2 HA', '115', '0', '127', '0', 'BTN', NULL, NULL, NULL, NULL, NULL, 0),
(200, 'Lematang Mulya Residence', 'PT. Rindang Sari Anugrah', 'Kecamatan Lahat, Kelurahan Bandar Jaya', 'LAHAT', '-3.757845,103.561332', '36', 0, '96', '1', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, NULL, 0),
(201, 'Griya Agung Permai Lestari', 'PT. Gedung Agung Permai Lestari', 'Jalan Baru Lintas Sumatera Lahat', 'LAHAT', '-3.757329,103.56235', '36/96', 0, '3.6 HA', '8', '6', '200', '0', 'BNI,MANDIRI,Sumsel', NULL, NULL, NULL, NULL, NULL, 0),
(202, 'Griya Alam Merdeka', 'PT. Aldiva Mandiri Perkasa', 'Kecamatan Lahat, Kelurahan Pagar Agung', 'LAHAT', '-3.755079,103.507974', '0', 0, '0', '0', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, 0),
(203, 'Griya Herataserasi', 'PT. Anggara Jaya Utama Energi', 'Kecamatan Lahat, Kelurahan Pagar Agung', 'LAHAT', '-3.771316,103.571431', '36/96', 0, '1 HA', '5', '0', '70', '0', 'BTN', NULL, NULL, NULL, NULL, NULL, 0),
(204, 'Deffadi Residence', 'PT. Ehsan Mabrukah', 'Jalan Lubuk Beringin Manggul Lahat', 'LAHAT', '-3.771389,103.570278', '36/96', 0, '7.968 M2', '9', '11', '83', '0', 'BNI,BRI,MANDIRI', NULL, NULL, NULL, NULL, NULL, 0),
(205, 'Bengkurat Permai', 'PT. Rekha Sejahtera Abadi', 'Jalan Pemuda Kelurahan Sari Bunga', 'LAHAT', '-3.759416,103.502086', '36/100', 0, '2 Ha', '285', '0', '300', '0', 'BTN', NULL, NULL, NULL, NULL, NULL, 0),
(206, 'Green Garden Residence', 'PT. Silampari', 'Kecamatan Lahat, Kelurahan Manggul', 'LAHAT', '-3.771987,103.57055', '36', 0, '100', '275', NULL, NULL, '0', '23', NULL, NULL, NULL, NULL, NULL, 0),
(207, 'Griya Jalan Baru Permai', 'CV. Mitra Konstruksi', 'Kecamatan Lahat, Kelurahan Manggul', 'LAHAT', '-3.775264,103.569722', '36', 0, '99', '0', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, 0),
(208, 'Griya Aldiva', 'PT. Aldiva Mandiri Perkasa', 'Kecamatan Lahat, Kelurahan Manggul', 'LAHAT', '-3.757813,103.564059', '0', 0, '0', '0', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, 0),
(209, 'Bumi Srikaton Residence', 'PT. Alvino Lahat Sejahtera', 'Jl. Srikaton Kelurahan Pagar Gunung', 'LAHAT', '-3.779573,103.519641', '36/96', 0, '18.480 M2', '51', '79', '130', '0', 'BTN,Sumsel', 'rtlh1.jfif', 'rtlh2.jpg', 'rtlh3.jpeg', 'rtlh4.jpg', 'rtlh5.jpg', 0),
(210, 'Rakha Residence', 'PT. Rakha Sejahtera Abadi', 'Jalan Anggrek I Ulak Lebar Lahat', 'LAHAT', '-3.760007,103.565803', '36/90', 0, '17.000 M2', '0', '0', '106', '0', 'BTN', NULL, NULL, NULL, NULL, NULL, 0),
(212, 'Griya Revari Indah Lahat', 'PT. Revari Putra Pratama', 'Kecamatan Lahat, Kelurahan Ulak Lebar', 'LAHAT', '-3.765271,103.575508', '0', 0, '0', '0', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, 0),
(213, 'Griya Rafika Tanjung Payang 4', 'PT. Lahat Maju Jaya', 'Desa Tanjung Payang Kecamatan Lahat Selatan', 'LAHAT SELATAN', '-3.815227,103.545979', '36/98', 0, '25.430 M2', '133', '21', '165', '0', 'BNI,BRI,BTN', NULL, NULL, NULL, NULL, NULL, 0),
(214, 'Rafika 5', 'PT. Bersama Muda Berkarya', 'Jalan Tanjung Payang Kecamatan Selatan', 'LAHAT SELATAN', '-3.812817,103.542312', '36/98', 0, '3 HA', '80', '0', '190', '0', 'BNI,MANDIRI', NULL, NULL, NULL, NULL, NULL, 0),
(215, 'Graha Sentosa', 'PT. Panca Artha Sentosa', 'Jalan H Harunata Tanjung Payang Lahat Selatan', 'LAHAT SELATAN', '-3.821993,103.553827', '36/108', 0, '1.8 HA', '4', '0', '93', '0', 'BNI', NULL, NULL, NULL, NULL, NULL, 0),
(216, 'Tanjung Payang Sejahtera 3', 'PT. Agung Jaya Persada', 'Kecamatan Lahat Selatan, Kelurahan Tanjung Payang', 'LAHAT SELATAN', '-3.816346,103.529346', '36', 0, '96', '21', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, 0),
(548, 'CALEDONIA', 'PT.INTI TIMUR BARU', 'KENTEN', 'SAKO', NULL, '36', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'fotoktp2.jpg', 'rumah42.jpg', 'rumah32.jpg', 'rumah22.jpg', 'rumah12.jpg', 1);

--
-- Triggers `tbl_perumahan`
--
DELIMITER $$
CREATE TRIGGER `tambah_perumahan` AFTER INSERT ON `tbl_perumahan` FOR EACH ROW BEGIN
 UPDATE tbl_kecamatan set perumahan = perumahan + NEW.count
 WHERE kecamatan = NEW.kecamatan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rtlh`
--

CREATE TABLE `tbl_rtlh` (
  `id_rtlh` int(11) NOT NULL,
  `surveyor_id` varchar(50) DEFAULT NULL,
  `survey_date` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `jumlah_kk` int(11) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `penghasilan` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `atap` varchar(50) DEFAULT NULL,
  `lantai` varchar(50) DEFAULT NULL,
  `dinding` varchar(50) DEFAULT NULL,
  `pencahayaan` varchar(50) DEFAULT NULL,
  `kamar_mandi` varchar(50) DEFAULT NULL,
  `sumber_air` varchar(50) DEFAULT NULL,
  `jarak_sumber_air` varchar(50) DEFAULT NULL,
  `sumber_listrik` varchar(50) DEFAULT NULL,
  `luas_rumah` int(11) DEFAULT NULL,
  `jumlah_penghuni` int(11) DEFAULT NULL,
  `status_tanah` varchar(50) DEFAULT NULL,
  `status_rumah` varchar(50) DEFAULT NULL,
  `kepemilikan_rumah` varchar(50) DEFAULT NULL,
  `kepemilikan_tanah` varchar(50) DEFAULT NULL,
  `bantuan_perumahan` varchar(50) DEFAULT NULL,
  `lokasi_kawasan` varchar(50) DEFAULT NULL,
  `lokasi_koordinat` varchar(50) DEFAULT NULL,
  `foto_ktp` varchar(100) DEFAULT NULL,
  `foto_rumah1` varchar(100) DEFAULT NULL,
  `foto_rumah2` varchar(75) NOT NULL,
  `foto_rumah3` varchar(75) NOT NULL,
  `foto_rumah4` varchar(75) NOT NULL,
  `foto_rumah5` varchar(75) NOT NULL,
  `count` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rtlh`
--

INSERT INTO `tbl_rtlh` (`id_rtlh`, `surveyor_id`, `survey_date`, `nik`, `nama`, `sex`, `alamat`, `kelurahan`, `kecamatan`, `jumlah_kk`, `pekerjaan`, `penghasilan`, `pendidikan`, `atap`, `lantai`, `dinding`, `pencahayaan`, `kamar_mandi`, `sumber_air`, `jarak_sumber_air`, `sumber_listrik`, `luas_rumah`, `jumlah_penghuni`, `status_tanah`, `status_rumah`, `kepemilikan_rumah`, `kepemilikan_tanah`, `bantuan_perumahan`, `lokasi_kawasan`, `lokasi_koordinat`, `foto_ktp`, `foto_rumah1`, `foto_rumah2`, `foto_rumah3`, `foto_rumah4`, `foto_rumah5`, `count`) VALUES
(127, 'GERI', '04 OKTOBER 2020', '1671 1441 0478 0008', 'RUSMULYATI', 'PEREMPUAN', 'LR. MURNI RT. 025 RW. 001', '', '', 1, 'TIDAK BEKERJA', '0-1,2 JUTA', 'SMA/SEDERAJAT', 'RUSAK SEDANG/SEBAGIAN', 'RUSAK SEDANG/SEBAGIAN', 'RUSAK SEDANG/SEBAGIAN', 'TIDAK ADA', 'TIDAK ADA', 'SUMUR', '< 10M', 'LAINNYA', 35, 4, 'MILIK SENDIRI', 'MILIK SENDIRI', NULL, 'TIDAK ADA', 'BELUM PERNAH', NULL, '-2.992178,104.809361', NULL, NULL, '', '', '', '', 0),
(128, 'GERI', '04 OKTOBER 2020', '1671 1429 1167 0004', 'AHMAD', 'LAKI-LAKI', 'LR. MURNI RT. 025 RW. 001', '', '', 1, 'BURUH HARIAN', '0-1,2 JUTA', 'SMP/SEDERAJAT', 'RUSAK RINGAN', 'RUSAK RINGAN', 'RUSAK RINGAN', 'ADA', 'ADA', 'PDAM', '< 10M', 'LISTRIK TANPA METERAN', 45, 2, 'MILIK SENDIRI', 'MILIK SENDIRI', NULL, 'TIDAK ADA', 'BELUM PERNAH', NULL, '-2.992241,104.809549', NULL, NULL, '', '', '', '', 0),
(129, 'GERI', '04 OKTOBER 2020', '1671 1443 0454 0007', 'ASMINAH', 'PEREMPUAN', 'LR. MURNI RT. 025 RW. 001', '', '', 1, 'TIDAK BEKERJA', '0-1,2 JUTA', 'SD/SEDERAJAT', 'RUSAK RINGAN', 'RUSAK RINGAN', 'RUSAK RINGAN', 'ADA', 'ADA', 'PDAM', '< 10M', 'LISTRIK DENGAN METERAN', 55, 2, 'MILIK SENDIRI', 'MILIK SENDIRI', NULL, 'TIDAK ADA', 'BELUM PERNAH', NULL, '-2.992040,104.809638', NULL, NULL, '', '', '', '', 0),
(130, 'GERI', '04 OKTOBER 2020', '1671 1441 0184 0009', 'SURYANA', 'LAKI-LAKI', 'LR. MURNI RT. 025 RW. 001', '', '', 1, 'TIDAK BEKERJA', '0-1,2 JUTA', 'SD/SEDERAJAT', 'RUSAK RINGAN', 'RUSAK RINGAN', 'RUSAK RINGAN', 'ADA', 'ADA', 'PDAM', '< 10M', 'LISTRIK TANPA METERAN', 45, 5, 'MILIK SENDIRI', 'MILIK SENDIRI', NULL, 'TIDAK ADA', 'BELUM PERNAH', NULL, '-2.992134,104.809645', NULL, NULL, '', '', '', '', 0),
(131, 'GERI', '04 OKTOBER 2020', '1671 1411 0180 0002', 'PAMILUDDIN', 'LAKI-LAKI', 'LR. MURNI RT. 025 RW. 001', '', '', 1, 'BURUH HARIAN', '0-1,2 JUTA', 'SMA/SEDERAJAT', 'RUSAK SEDANG/SEBAGIAN', 'RUSAK RINGAN', 'RUSAK RINGAN', 'ADA', 'TIDAK ADA', 'SUNGAI', '< 10M', 'LAINNYA', 50, 4, 'MILIK SENDIRI', 'MILIK SENDIRI', NULL, 'TIDAK ADA', 'BELUM PERNAH', NULL, '-2.990831,104.809339', NULL, NULL, '', '', '', '', 0);

--
-- Triggers `tbl_rtlh`
--
DELIMITER $$
CREATE TRIGGER `tambah_rtlh` AFTER INSERT ON `tbl_rtlh` FOR EACH ROW BEGIN
 UPDATE tbl_kecamatan set rtlh = rtlh + NEW.count 
 WHERE kecamatan = new.kecamatan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

CREATE TABLE `tbl_site` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(100) DEFAULT NULL,
  `site_title` varchar(200) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `site_favicon` varchar(50) DEFAULT NULL,
  `site_logo_header` varchar(50) DEFAULT NULL,
  `site_logo_footer` varchar(50) DEFAULT NULL,
  `site_logo_big` varchar(50) DEFAULT NULL,
  `site_facebook` varchar(150) DEFAULT NULL,
  `site_twitter` varchar(150) DEFAULT NULL,
  `site_instagram` varchar(150) DEFAULT NULL,
  `site_pinterest` varchar(150) DEFAULT NULL,
  `site_linkedin` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`site_id`, `site_name`, `site_title`, `site_description`, `site_favicon`, `site_logo_header`, `site_logo_footer`, `site_logo_big`, `site_facebook`, `site_twitter`, `site_instagram`, `site_pinterest`, `site_linkedin`) VALUES
(1, 'Rumah Baghi', 'Rumah Baghi', 'Rumah Baghi', 'logolahat.png', 'logolahat.png', 'favicon.png', 'logolahat.png', 'https://www.facebook.com/mfikridotcom/', 'https://twitter.com/MFikri75770694/', 'https://www.instagram.com/mfikricom/', 'https://id.pinterest.com/mfikricom/', 'https://www.linkedin.com/in/m-fikri-setiadi-b03370148/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(10) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT '1',
  `user_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_status`, `user_photo`) VALUES
(3, 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '1', '952ca1e359daf77ece71ce7252e5a066.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitors`
--

CREATE TABLE `tbl_visitors` (
  `visit_id` int(11) NOT NULL,
  `visit_date` timestamp NULL DEFAULT current_timestamp(),
  `visit_ip` varchar(50) DEFAULT NULL,
  `visit_platform` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visitors`
--

INSERT INTO `tbl_visitors` (`visit_id`, `visit_date`, `visit_ip`, `visit_platform`) VALUES
(541327, '2019-03-18 14:07:36', '::1', 'Firefox'),
(541328, '2019-03-19 03:33:51', '::1', 'Chrome'),
(541329, '2019-03-20 01:00:19', '::1', 'Chrome'),
(541330, '2019-04-05 01:53:28', '::1', 'Firefox'),
(541331, '2019-04-06 01:37:35', '::1', 'Chrome'),
(541332, '2019-04-06 23:04:12', '::1', 'Chrome'),
(541333, '2019-04-09 12:19:32', '::1', 'Chrome'),
(541334, '2019-04-10 01:33:03', '::1', 'Chrome'),
(541335, '2019-04-11 03:30:38', '::1', 'Chrome'),
(541336, '2019-04-11 03:30:38', '::1', 'Chrome'),
(541337, '2019-04-12 03:51:42', '::1', 'Chrome'),
(541338, '2019-04-12 21:55:51', '::1', 'Chrome'),
(541339, '2019-04-14 01:30:40', '::1', 'Chrome'),
(541340, '2019-04-15 01:42:53', '::1', 'Chrome'),
(541341, '2019-05-08 02:07:09', '::1', 'Chrome'),
(541342, '2019-05-21 05:55:14', '::1', 'Firefox'),
(541343, '2019-08-28 07:08:22', '::1', 'Firefox'),
(541344, '2019-12-17 06:04:57', '::1', 'Firefox'),
(541345, '2019-12-18 01:34:25', '::1', 'Firefox'),
(541346, '2019-12-19 02:21:23', '::1', 'Firefox'),
(541347, '2019-12-20 07:47:00', '::1', 'Firefox'),
(541348, '2019-12-28 02:58:34', '::1', 'Firefox'),
(541349, '2019-12-29 08:48:39', '::1', 'Firefox'),
(541350, '2019-12-30 03:24:04', '::1', 'Firefox'),
(541351, '2019-12-31 02:47:15', '::1', 'Firefox'),
(541352, '2020-01-01 02:24:55', '::1', 'Firefox'),
(541353, '2020-01-02 01:58:25', '::1', 'Firefox'),
(541354, '2020-01-03 03:15:30', '::1', 'Firefox'),
(541355, '2020-01-04 03:31:49', '::1', 'Firefox'),
(541356, '2020-01-05 06:58:35', '127.0.0.1', 'Firefox'),
(541357, '2020-01-06 06:03:25', '::1', 'Firefox'),
(541358, '2020-01-07 00:57:59', '::1', 'Firefox'),
(541359, '2020-01-08 05:53:44', '::1', 'Firefox'),
(541360, '2020-01-12 04:18:15', '::1', 'Firefox'),
(541361, '2022-08-25 08:36:48', '::1', 'Chrome'),
(541362, '2022-08-31 04:24:18', '::1', 'Chrome'),
(541363, '2022-09-01 11:06:04', '::1', 'Chrome'),
(541364, '2022-09-02 18:45:55', '::1', 'Chrome'),
(541365, '2022-09-03 17:22:44', '::1', 'Chrome'),
(541366, '2022-09-03 19:26:51', '192.168.100.164', 'Chrome'),
(541367, '2022-09-03 19:33:09', '192.168.100.42', 'Chrome'),
(541368, '2022-09-04 05:05:02', '192.168.100.80', 'Chrome'),
(541369, '2022-09-05 06:13:52', '::1', 'Chrome'),
(541370, '2022-09-05 17:00:21', '::1', 'Chrome'),
(541371, '2022-09-07 06:49:43', '::1', 'Chrome'),
(541372, '2022-09-08 17:18:06', '::1', 'Chrome'),
(541373, '2022-09-10 08:04:19', '::1', 'Chrome'),
(541374, '2022-09-10 17:25:28', '::1', 'Chrome'),
(541375, '2022-09-12 03:42:38', '::1', 'Chrome'),
(541376, '2022-09-13 11:39:39', '::1', 'Chrome'),
(541377, '2022-09-15 07:50:34', '::1', 'Chrome'),
(541378, '2022-09-17 08:47:27', '::1', 'Chrome'),
(541379, '2022-09-18 11:34:53', '::1', 'Chrome'),
(541380, '2022-09-19 03:56:55', '::1', 'Chrome'),
(541381, '2022-09-20 15:10:35', '::1', 'Chrome'),
(541382, '2022-09-20 17:00:44', '::1', 'Chrome'),
(541383, '2022-09-22 02:56:20', '::1', 'Chrome'),
(541384, '2022-10-19 15:45:12', '::1', 'Chrome'),
(541385, '2022-10-19 17:02:54', '::1', 'Chrome'),
(541386, '2022-10-20 17:05:36', '::1', 'Chrome'),
(541387, '2022-10-22 06:19:58', '::1', 'Chrome'),
(541388, '2022-10-25 11:52:09', '::1', 'Chrome'),
(541389, '2022-10-25 17:05:09', '::1', 'Chrome'),
(541390, '2022-10-26 17:01:47', '::1', 'Chrome'),
(541391, '2022-11-02 13:31:55', '::1', 'Chrome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_backlog`
--
ALTER TABLE `tbl_backlog`
  ADD PRIMARY KEY (`id_backlog`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_developer`
--
ALTER TABLE `tbl_developer`
  ADD PRIMARY KEY (`id_developer`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tbl_navbar`
--
ALTER TABLE `tbl_navbar`
  ADD PRIMARY KEY (`navbar_id`);

--
-- Indexes for table `tbl_perumahan`
--
ALTER TABLE `tbl_perumahan`
  ADD PRIMARY KEY (`id_perumahan`);

--
-- Indexes for table `tbl_rtlh`
--
ALTER TABLE `tbl_rtlh`
  ADD PRIMARY KEY (`id_rtlh`);

--
-- Indexes for table `tbl_site`
--
ALTER TABLE `tbl_site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_backlog`
--
ALTER TABLE `tbl_backlog`
  MODIFY `id_backlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_developer`
--
ALTER TABLE `tbl_developer`
  MODIFY `id_developer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_navbar`
--
ALTER TABLE `tbl_navbar`
  MODIFY `navbar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_perumahan`
--
ALTER TABLE `tbl_perumahan`
  MODIFY `id_perumahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=549;

--
-- AUTO_INCREMENT for table `tbl_rtlh`
--
ALTER TABLE `tbl_rtlh`
  MODIFY `id_rtlh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27408;

--
-- AUTO_INCREMENT for table `tbl_site`
--
ALTER TABLE `tbl_site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541392;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
