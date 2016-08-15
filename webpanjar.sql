-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2016 at 09:16 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webpanjar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(2, 'Nazrul Rachmadi', 'nazrul', 'n4zrul');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kec` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kec` varchar(150) NOT NULL,
  PRIMARY KEY (`id_kec`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`) VALUES
(1, 'Banyuwangi'),
(2, 'Bangorejo'),
(3, 'Cluring'),
(4, 'Gambiran'),
(5, 'Genteng'),
(6, 'Giri'),
(7, 'Glagah'),
(8, 'Glenmore'),
(9, 'Kabat'),
(10, 'Kalibaru'),
(11, 'Kalipuro'),
(12, 'Licin'),
(13, 'Muncar'),
(14, 'Pesanggaran'),
(15, 'Purwoharjo'),
(16, 'Rogojampi'),
(17, 'Sempu'),
(18, 'Siliragung'),
(19, 'Singojuruh'),
(20, 'Songgon'),
(21, 'Srono'),
(22, 'Tegaldlimo'),
(23, 'Tegalsari'),
(24, 'Wongsorejo');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id_kel` int(11) NOT NULL AUTO_INCREMENT,
  `id_kec` int(11) NOT NULL,
  `nama_kel` varchar(150) NOT NULL,
  `id_radius` int(11) NOT NULL,
  PRIMARY KEY (`id_kel`),
  KEY `id_radius` (`id_radius`),
  KEY `id_kec` (`id_kec`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=215 ;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kel`, `id_kec`, `nama_kel`, `id_radius`) VALUES
(1, 1, 'Kampung Mandar', 1),
(2, 1, 'Kampung Melayu', 1),
(3, 1, 'Karangrejo', 1),
(4, 1, 'Pakis', 1),
(5, 1, 'Sobo', 1),
(6, 1, 'Kebalenan', 1),
(7, 1, 'Penganjuran', 1),
(8, 1, 'Tukang Kayu', 1),
(9, 1, 'Kertosari', 1),
(10, 1, 'Kepatihan', 1),
(11, 1, 'Panderejo', 1),
(12, 1, 'Singonegaran', 1),
(13, 1, 'Temenggungan', 1),
(14, 1, 'Lateng', 1),
(15, 1, 'Singotrunan', 1),
(16, 1, 'Pengantigan', 1),
(17, 1, 'TamanBaru', 1),
(18, 1, 'Sumberrejo', 1),
(19, 9, 'Kabat', 2),
(20, 9, 'Dadapan', 2),
(21, 9, 'Pondoknongko', 2),
(22, 9, 'Kalirejo', 2),
(23, 9, 'Benelan Lor', 2),
(24, 9, 'Pendarungan', 2),
(25, 9, 'Pakistaji', 2),
(26, 9, 'Bareng', 2),
(27, 9, 'Tambong', 2),
(28, 9, 'Macanputih', 2),
(29, 9, 'Bunder', 2),
(30, 9, 'Badean', 2),
(31, 9, 'Sukojati', 2),
(32, 9, 'Labanasem', 2),
(33, 9, 'Kedayunan', 2),
(34, 9, 'Gombolirang', 2),
(35, 6, 'Mojopanggung', 2),
(36, 6, 'Penataban', 2),
(37, 6, 'Giri', 2),
(38, 6, 'Jambesari', 2),
(39, 6, 'Grogol', 2),
(40, 6, 'Boyolangu', 2),
(41, 16, 'Bubuk', 2),
(42, 16, 'Kaotan', 2),
(43, 16, 'Gladag', 2),
(44, 16, 'Pengantigan', 2),
(45, 16, 'Mangir', 2),
(46, 16, 'Kedaleman', 2),
(47, 16, 'Karangbendo', 2),
(48, 16, 'Gitik', 2),
(49, 16, 'Lemahbang Dewo', 2),
(50, 16, 'Alian', 2),
(51, 16, 'Rogojampi', 2),
(52, 16, 'Blimbingsari', 2),
(53, 16, 'Kaligung', 2),
(54, 16, 'Gintangan', 2),
(55, 16, 'Bomo', 2),
(56, 16, 'Watukebo', 2),
(57, 16, 'Karangrejo', 2),
(58, 16, 'Patoman', 2),
(59, 11, 'Kalipuro', 2),
(60, 11, 'Klatak', 2),
(61, 11, 'Bulusan', 2),
(62, 11, 'Ketapang', 2),
(63, 7, 'Bakungan', 2),
(64, 7, 'Banjarsari', 2),
(65, 7, 'Banjarsari', 2),
(66, 7, 'Olehsari', 2),
(67, 7, 'Paspan', 2),
(68, 7, 'Tamansuruh', 2),
(69, 7, 'Kenjo', 2),
(70, 7, 'Rejosari', 2),
(71, 7, 'Kemiren', 2),
(72, 7, 'Glagah', 2),
(73, 21, 'Wonosobo', 2),
(74, 19, 'Singolatren', 2),
(75, 19, 'Singojuruh', 2),
(76, 19, 'Benelan Kidul', 2),
(77, 19, 'Gambor', 2),
(78, 19, 'Gumirih', 2),
(79, 19, 'Padang', 2),
(80, 19, 'Cantuk', 2),
(81, 19, 'Alasmalang', 2),
(82, 19, 'Lemahbang Kulon', 2),
(83, 10, 'Kebonrejo', 4),
(84, 10, 'Banyuanyar', 4),
(85, 10, 'Kalibaru Manis', 4),
(86, 14, 'Pesanggaran', 4),
(87, 14, 'Sumberagung', 4),
(88, 14, 'Sumbermulyo', 4),
(89, 14, 'Sarongan', 4),
(90, 14, 'Kandangan', 4),
(91, 8, 'Sumbergondo', 4),
(92, 8, 'Karangharjo', 4),
(93, 8, 'Bumiharjo', 4),
(94, 8, 'Margomulyo', 4),
(95, 22, 'Kendalrejo', 4),
(96, 22, 'Kalipait', 4),
(97, 22, 'Purwoagung', 4),
(98, 18, 'Siliragung', 4),
(99, 18, 'Buluagung', 4),
(100, 11, 'Telemung', 3),
(101, 11, 'Pesucen', 3),
(102, 11, 'Kelir', 3),
(103, 11, 'Gombeng', 3),
(104, 11, 'Bulusari', 3),
(105, 7, 'Kampung Anyar', 3),
(106, 12, 'Gumuk', 3),
(107, 12, 'Banjar', 3),
(108, 12, 'Jelun', 3),
(109, 12, 'Tamansari', 3),
(110, 12, 'Kluncing', 3),
(111, 12, 'Segobang', 3),
(112, 12, 'Licin', 3),
(113, 12, 'Pakel', 3),
(114, 19, 'Kemiri', 3),
(115, 19, 'Sumberbaru', 3),
(116, 20, 'Parangharjo', 3),
(117, 20, 'Balak', 3),
(118, 20, 'Songgon', 3),
(119, 20, 'Bedewang', 3),
(120, 20, 'Sragi', 3),
(121, 20, 'Bayu', 3),
(122, 20, 'Bangunsari', 3),
(123, 20, 'Sumberarum', 3),
(124, 20, 'Balurejo', 3),
(125, 17, 'Sempu', 3),
(126, 17, 'Jambewangi', 3),
(127, 17, 'Karangsari', 3),
(128, 17, 'Gendoh', 3),
(129, 17, 'Temuguruh', 3),
(130, 17, 'Tegalarum', 3),
(131, 17, 'Temuasri', 3),
(132, 23, 'Tamansari', 3),
(133, 23, 'Dasri', 3),
(134, 23, 'Karangmulyo', 3),
(135, 23, 'Karangdoro', 3),
(136, 23, 'Tegalsari', 3),
(137, 23, 'Tegalrejo', 3),
(138, 22, 'Kedungasri', 3),
(139, 22, 'Wringinpitu', 3),
(140, 22, 'Purwoasri', 3),
(141, 22, 'Tegaldlimo', 3),
(142, 22, 'Kedungwungu', 3),
(143, 22, 'Kedunggebang', 3),
(144, 18, 'Kesilir', 3),
(145, 18, 'Seneporejo', 3),
(146, 18, 'Barurejo', 3),
(147, 21, 'Parijatah Kulon', 3),
(148, 21, 'Sumber sari', 3),
(149, 21, 'Kebaman', 3),
(150, 21, 'Sukonatar', 3),
(151, 21, 'Parijatah Wetan', 3),
(152, 21, 'Bagorejo', 3),
(153, 21, 'Rejoagung', 3),
(154, 21, 'Sukomaju', 3),
(155, 5, 'Kembiritan', 3),
(156, 5, 'Genteng Wetan', 3),
(157, 5, 'Genteng Kulon', 3),
(158, 5, 'Setail', 3),
(159, 5, 'Kaligondo', 3),
(160, 8, 'Tegalharjo', 3),
(161, 8, 'Tulungrejo', 3),
(162, 8, 'Sepanjang', 3),
(163, 4, 'Wringinrejo', 3),
(164, 4, 'Yosomulyo', 3),
(165, 4, 'Purwodadi', 3),
(166, 4, 'Gambiran', 3),
(167, 4, 'Jajag', 3),
(168, 4, 'Wringinagung', 3),
(169, 15, 'Glagah Agung', 3),
(170, 15, 'Sidorejo', 3),
(171, 15, 'Sumber Asri', 3),
(172, 15, 'Bulurejo', 3),
(173, 15, 'Kradenan', 3),
(174, 15, 'Grajagan', 3),
(175, 15, 'Purwoharjo', 3),
(176, 15, 'Karetan', 3),
(177, 24, 'Bengkak', 3),
(178, 24, 'Sidodadi', 3),
(179, 24, 'Alasbuluh', 3),
(180, 24, 'Bajulmati', 3),
(181, 24, 'Wongsorejo', 3),
(182, 24, 'Alasrejo', 3),
(183, 24, 'Sumber Kencono', 3),
(184, 24, 'Bangsring', 3),
(185, 24, 'Watukebo', 3),
(186, 10, 'Kajarharjo', 3),
(187, 24, 'Kalibaru Wetan', 3),
(188, 10, 'Kalibaru Kulon', 3),
(189, 3, 'Plampang rejo', 3),
(190, 3, 'Sraten', 3),
(191, 3, 'Sarimulyo', 3),
(192, 3, 'Tamanagung', 3),
(193, 3, 'Kaliploso', 3),
(194, 3, 'Benculuk', 3),
(195, 3, 'Sembulung', 3),
(196, 3, 'Cluring', 3),
(197, 3, 'Tampo', 3),
(198, 13, 'Sumberberas', 3),
(199, 13, 'Wringinputih', 3),
(200, 13, 'Kedungrejo', 3),
(201, 13, 'Blambangan', 3),
(202, 13, 'Tembokrejo', 3),
(203, 13, 'Kedungringin', 3),
(204, 13, 'Tapanrejo', 3),
(205, 13, 'Tambakrejo', 3),
(206, 13, 'Sumbersewu', 3),
(207, 13, 'Kumendung', 3),
(208, 2, 'Temurejo', 3),
(209, 2, 'Bangorejo', 3),
(210, 2, 'Kebonrejo', 3),
(211, 2, 'Ringinrejo', 3),
(212, 2, 'Sambirejo', 3),
(213, 2, 'Sambimulyo', 3),
(214, 2, 'Sukorejo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE IF NOT EXISTS `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_konfigurasi` varchar(40) NOT NULL,
  `type_konfigurasi` enum('Text','File','Uang') NOT NULL,
  `nilai_konfigurasi` text NOT NULL,
  PRIMARY KEY (`id_konfigurasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `nama_konfigurasi`, `type_konfigurasi`, `nilai_konfigurasi`) VALUES
(1, 'Pengaturan Judul Website', 'Text', 'Aplikasi Kalkulator Panjar Biaya Perkara Tingkat Pertama Pengadilan Agama Banyuwangi'),
(2, 'Meta Deskripsi', 'Text', 'Aplikasi Kalkulator Panjar Biaya Perkara Tingkat Pertama Pengadilan Agama Banyuwangi'),
(3, 'Meta Keyword', 'Text', 'kalkulator panjar perkara, hitung panjar perkara, pengadilan agama banyuwangi'),
(4, 'Footer', 'Text', 'Pengadilan Agama Banyuwangi'),
(5, 'Nama Pengadilan', 'Text', 'Pengadilan Agama Banyuwangi'),
(6, 'Nama Kabupaten', 'Text', 'Kabupaten Banyuwangi'),
(7, 'Biaya Pendaftaran', 'Uang', '30000'),
(8, 'Redaksi', 'Uang', '5000'),
(9, 'Materai', 'Uang', '6000'),
(10, 'Biaya Proses', 'Uang', '50000'),
(12, 'Gambar Header', 'File', ''),
(13, 'Favicon Website', 'File', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `radius`
--

CREATE TABLE IF NOT EXISTS `radius` (
  `id_radius` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_radius` varchar(10) NOT NULL,
  `nilai_radius` double NOT NULL,
  PRIMARY KEY (`id_radius`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `radius`
--

INSERT INTO `radius` (`id_radius`, `kategori_radius`, `nilai_radius`) VALUES
(1, 'I', 75000),
(2, 'II', 100000),
(3, 'III', 125000),
(4, 'RK', 150000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `kelurahan_ibfk_1` FOREIGN KEY (`id_kec`) REFERENCES `kecamatan` (`id_kec`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelurahan_ibfk_2` FOREIGN KEY (`id_radius`) REFERENCES `radius` (`id_radius`) ON DELETE CASCADE ON UPDATE CASCADE;
