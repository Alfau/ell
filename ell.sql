-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2014 at 08:15 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ell`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
`ID` int(11) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `Text`) VALUES
(13, 'Learn about ELL and our commitment to delivering products that allow you to experience life in more meaningful ways, including how our impact the environment.\r\n\r\nDiscover ELLs history and advances in the use of technology. Browse articles, press releases, photos and films. Experience the ELL products in fun and creative ways. Learn about ELLs commitment to living green and sustainability. And explore how you can start a career with one of the worlds leading consumer electronics companies.');

-- --------------------------------------------------------

--
-- Table structure for table `about_img`
--

CREATE TABLE IF NOT EXISTS `about_img` (
`ID` int(11) NOT NULL,
  `Images` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `about_img`
--

INSERT INTO `about_img` (`ID`, `Images`) VALUES
(31, 'page_images/211a1c287674ca6366a3b49b9e920fcb563237710.jpg'),
(52, 'page_images/66eb0084d250d6db056298b8ff7b5da41481144146.jpg'),
(56, 'page_images/285f31da9c453294106e164e2d39ffeb262913660.jpg'),
(57, 'page_images/e0f68b07be7f73f7ccf6f451e327086b1338910730.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
`ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Latitude` varchar(100) NOT NULL,
  `Longitude` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`ID`, `Name`, `Latitude`, `Longitude`) VALUES
(21, 'Ell Mobile 2', '4.174896', '73.513249');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_specs`
--

CREATE TABLE IF NOT EXISTS `mobile_specs` (
`ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `General` text NOT NULL,
  `Memory` text NOT NULL,
  `Camera` text NOT NULL,
  `Battery` text NOT NULL,
  `Body` text NOT NULL,
  `Display` text NOT NULL,
  `Sound` text NOT NULL,
  `Data` text NOT NULL,
  `Features` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `mobile_specs`
--

INSERT INTO `mobile_specs` (`ID`, `Product_ID`, `General`, `Memory`, `Camera`, `Battery`, `Body`, `Display`, `Sound`, `Data`, `Features`) VALUES
(1, 10, '+2G Network GSM 850 / 900 / 1800 / 1900\r\nCDMA 800 / 1900\r\n+3G Network HSDPA 850 / 900 / 1700 / 1900 / 2100\r\n+CDMA2000 1xEV-DO\r\n+4G Network LTE 700/800/850/900/1800/1900/2100/2600', '+Internal 16/64/128 GB, 2 GB RAM', '+Primary 8 MP, 3264 x 2448 pixels, autofocus\r\n+Video 1080p@30fps, 720p@120fps, HD\r\n+Secondary 1.2 MP, 720p@30fps, face detection, HDR, FaceTime over Wi-Fi or Cellular', '+Non-removable Li-Po battery (27.3 Wh)\r\nStand-by\r\nTalk time Up to 10 h (multimedia)', '+Dimensions 240 x 169.5 x 6.1 mm (9.45 x 6.67 x 0.24 in)\r\nWeight 437 g (Wi-Fi) / 444 g (3G/LTE) (15.41 oz)\r\n+Fingerprint sensor (Touch ID)', '+Type LED-backlit IPS LCD, capacitive touchscreen, 16M colors\r\n+Size 1536 x 2048 pixels, 9.7 inches (~264 ppi pixel density)\r\n+Multitouch Yes\r\n+Protection Scratch-resistant glass, oleophobic coating', '+N/A', '+GPRS Yes\r\n+EDGE Yes\r\n+Speed DC-HSDPA, 42 Mbps; HSDPA, 21 Mbps; +HSUPA, 5.76 Mbps, LTE, 150 Mbps; EV-DO Rev. A, up to 3.1 Mbps\r\n+WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band, +Wi-Fi hotspot\r\n+Bluetooth v4.0, A2DP, EDR\r\n+USB v2.0', '+N/A'),
(8, 2, 'dsghdgh', '', '', '', '', '', '', '', ''),
(9, 1, 'dsghdgh', '', '', '', '', '', '', '', ''),
(10, 2, 'dsghdgh', '', '', '', '', '', '', '', ''),
(11, 1, 'dsghdgh', '', '', '', '', '', '', '', ''),
(12, 161, 'dsghdgh', '', '', '', '', '', '', '', ''),
(13, 162, 'dsghdgh', '', '', '', '', '', '', '', ''),
(14, 163, '+Awesome\r\n+Great', '+Awesome\r\n+Great', '+Awesome\r\n+Great', '+Awesome\r\n+Great', '', '+Awesome\r\n+Great', '+Awesome\r\n+Great', '', '+Awesome\r\n+Great'),
(15, 164, 'asdfsdaf', '', '', '', '', '', '', '', ''),
(16, 165, 'asdfsdaf', '', '', '', '', '', '', '', ''),
(17, 166, 'asdfsdaf', '', '', '', '', '', '', '', ''),
(18, 167, 'asdfsdaf', '', '', '', '', '', '', '', ''),
(19, 168, 'asdfsdaf', '', '', '', '', '', '', '', ''),
(20, 169, 'afdsdas', '', '', '', '', '', '', '', ''),
(21, 170, 'afdsdas', '', '', '', '', '', '', '', ''),
(22, 171, 'afdsdas', '', '', '', '', '', '', '', ''),
(23, 172, 'afdsdas', '', '', '', '', '', '', '', ''),
(24, 173, 'sdfdasf', '', '', '', '', '', '', '', ''),
(25, 174, 'dsaf', '', '', '', '', '', '', '', ''),
(26, 175, 'SAD', '', '', '', '', '', '', '', ''),
(27, 176, 'SAD', '', '', '', '', '', '', '', ''),
(28, 177, 'SAD', '', '', '', '', '', '', '', ''),
(29, 178, 'SAD', '', '', '', '', '', '', '', ''),
(30, 179, 'SAD', '', '', '', '', '', '', '', ''),
(31, 180, 'asdf', '', '', '', '', '', '', '', ''),
(32, 181, 'aSD', '', '', '', '', '', '', '', ''),
(33, 182, 'sad', '', '', '', '', '', '', '', ''),
(34, 183, 'sadasdf', '', '', '', '', '', '', '', ''),
(35, 184, 'dsf', '', '', '', '', '', '', '', ''),
(36, 185, 'ASDSad', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`ID` int(11) NOT NULL,
  `Type` varchar(300) NOT NULL,
  `Brand` varchar(300) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Specifications` text NOT NULL,
  `Ell_Rec` varchar(300) NOT NULL DEFAULT 'FALSE',
  `Thumbnail` varchar(300) NOT NULL,
  `Category` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=186 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Type`, `Brand`, `Name`, `Price`, `Description`, `Specifications`, `Ell_Rec`, `Thumbnail`, `Category`) VALUES
(10, 'Mobile Phones', 'Samsung', 'Samsung Galaxy S5', 10000, '\r\nThe GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'product_thumbnails/7d85eeb5a5219026988bb2a722c34bef444678042.jpg', ''),
(11, 'Mobile Phones', 'HTC', 'HTC One', 9000, 'The GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'product_thumbnails/ec9a57a40a01ba2a4692a24cbe7617521758591599.jpg', ''),
(12, 'Tablets', 'Apple', 'iPad', 7000, 'rhsghfghsghsgfhdhgj', 'gfhjfghjfgkghlgklhjkl', 'FALSE', 'product_thumbnails/8d0eda2d1b726edc509bbf20d89a6d91925001491.jpg', ''),
(13, 'Tablets', 'Samsung', 'Samsung Galaxy Tab', 6500, 'sfgsfgsdkjfgnkjlAK', 'jsadnfkjsngidsddnvkjn', 'FALSE', 'product_thumbnails/f77671c1627d166f543d3ff3f6463c54100965814.jpg', ''),
(31, 'Mobile Accessories', 'Apple', 'Matt Style Screen Protector for Apple iPhone 4S', 200, '', '', 'FALSE', 'product_thumbnails/b9fb9d37bdf15a699bc071ce49baea531962895337.jpg', 'Screen Protection'),
(32, 'Mobile Accessories', 'Apple', 'afasdas', 2341, '', '', 'FALSE', 'product_thumbnails/b9fb9d37bdf15a699bc071ce49baea531981187216.jpg', 'Charger'),
(35, 'TV', 'Sony', 'sdfasdfdsf', 0, 'vhg', 'hgchg', 'FALSE', 'product_thumbnails/a00c479b590a26c2e54842dd990a0113408226938.jpg', ''),
(36, 'Audio', 'Other', 'Sennheiser HD800', 12000, 'sadfasdfsdf', 'sdfsadfasdf', 'FALSE', 'product_thumbnails/eeb19ce65e7e5f85164966433cb38f6d1645613778.jpg', ''),
(44, 'Mobile Phones', 'HTC', 'sdfsdfgsdfgdfgsdfg', 1244, 'egsdfsgbdrgbdfb', 'frbrgbgfbfsdsdv', 'FALSE', 'product_thumbnails/9dd6839a8f88dbffad4369d4e956de26122612472.jpg', ''),
(89, 'Tablets', 'Apple', 'sdfgsdfg', 23545, 'sdfgsdfg', 'sfdgsdfg', 'FALSE', 'product_thumbnails/e0f68b07be7f73f7ccf6f451e327086b1717108606.jpg', ''),
(90, 'Mobile Phones', 'Samsung', 'ghdfgh', 0, 'gfdhgdfh', 'gdfhdgfh', 'FALSE', 'product_thumbnails/e0f68b07be7f73f7ccf6f451e327086b206539949.jpg', ''),
(91, 'Laundry Appliance', 'Sony', 'sdafsdaf', 5234, 'sdfsdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71460874337.jpg', ''),
(92, 'Kitchen Appliance', 'Sony', 'dsfsadf', 345235, 'dsgsdfg', '', 'FALSE', 'product_thumbnails/902f368b4cf4f3c00e36d5e3fb2250bb2027024135.jpg', ''),
(93, 'Kitchen Appliance', 'Samsung', 'asdfdsf', 25235, 'fgsdfgsdfg', '', 'FALSE', 'product_thumbnails/902f368b4cf4f3c00e36d5e3fb2250bb936521268.jpg', ''),
(94, 'Kitchen Appliance', 'Samsung', 'asdfdsf', 25235, 'fgsdfgsdfg', '', 'FALSE', 'product_thumbnails/902f368b4cf4f3c00e36d5e3fb2250bb451970350.jpg', ''),
(95, 'Kitchen Appliance', 'Samsung', 'asdfdsf', 25235, 'fgsdfgsdfg', '', 'FALSE', 'product_thumbnails/902f368b4cf4f3c00e36d5e3fb2250bb905852292.jpg', ''),
(96, 'Kitchen Appliance', 'Samsung', 'asdfdsf', 25235, 'fgsdfgsdfg', '', 'FALSE', 'product_thumbnails/902f368b4cf4f3c00e36d5e3fb2250bb253276450.jpg', ''),
(97, 'Mobile Accessories', 'Samsung', 'asdfasdf', 23525, '', '', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d1834111766.jpg', 'Battery'),
(98, 'Mobile Accessories', 'Samsung', 'asdfasdf', 23525, '', '', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d335030483.jpg', 'Battery'),
(99, 'Mobile Accessories', 'Samsung', 'sddfg', 245254, '', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7171576589.jpg', 'Battery'),
(100, 'Mobile Accessories', 'Samsung', 'sddfg', 245254, '', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d72006376534.jpg', 'Battery'),
(101, 'Mobile Accessories', 'Samsung', 'sadfsdaf', 525, '', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71154509674.jpg', 'Battery'),
(102, 'Kitchen Appliance', 'Sony', 'adfsadsf', 34523, 'sdasf', '', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de65935224043.jpg', ''),
(103, 'Kitchen Appliance', 'Sony', 'adfsadsf', 34523, 'sdasf', '', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de65981737430.jpg', ''),
(104, 'Kitchen Appliance', 'Sony', 'adfsadsf', 34523, 'sdasf', '', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de65500845539.jpg', ''),
(105, 'Kitchen Appliance', 'Sony', 'adfsadsf', 34523, 'sdasf', '', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de651711862356.jpg', ''),
(106, 'Cooling Appliance', 'Sony', 'sadfasdf', 235235, 'sadfasdf', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71408667046.jpg', ''),
(107, 'TV', 'Sony', 'sdafsdaf', 231, 'asfsdg', 'sdfgsdfg', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de65267436039.jpg', ''),
(108, 'Mobile Phones', 'Samsung', 'asdfsdaf', 0, 'dafsadf', 'dassadfasdf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7683837990.jpg', ''),
(109, 'Mobile Phones', 'Samsung', 'qwerqwe', 0, 'cercqwe', 'rcweqrcqwecr', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71231144105.jpg', ''),
(110, 'Mobile Phones', 'Samsung', 'qwerqwe', 0, 'cercqwe', 'rcweqrcqwecr', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7722357712.jpg', ''),
(111, 'Mobile Phones', 'Samsung', 'qwerqwe', 0, 'cercqwe', 'rcweqrcqwecr', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7229454831.jpg', ''),
(112, 'Mobile Phones', 'Samsung', 'qwerqwe', 0, 'cercqwe', 'rcweqrcqwecr', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71188640218.jpg', ''),
(113, 'Mobile Phones', 'Samsung', 'wfdfasf', 324, 'asfsadf', 'dsfsdaf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7174022271.jpg', ''),
(114, 'Mobile Phones', 'Samsung', 'SADF', 2412, 'sdfasdf', 'asdfsadf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d897587666.jpg', ''),
(115, 'Mobile Phones', 'Samsung', 'SADF', 2412, 'sdfasdf', 'asdfsadf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d900132930.jpg', ''),
(116, 'Mobile Phones', 'Samsung', 'asdfadsf', 132, 'sdafdasf', 'sdafdasf', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de651865272542.jpg', ''),
(117, 'Mobile Phones', 'Samsung', 'asdfasd', 1244, 'saasdf', 'asdfasdf', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de65741795004.jpg', ''),
(118, 'Mobile Phones', 'Samsung', 'asdfasd', 1244, 'saasdf', 'asdfasdf', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de651568352617.jpg', ''),
(119, 'Mobile Phones', 'Samsung', 'sadfsfd', 4234, 'sdafdasf', 'dafdsa', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de651061366651.jpg', ''),
(120, 'Mobile Phones', 'Samsung', 'sdafsdaf', 2214234, 'dasfasdfsd', 'asdfasdf', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de65548451386.jpg', ''),
(121, 'Mobile Phones', 'Samsung', 'sdafsdaf', 2214234, 'dasfasdfsd', 'asdfasdf', 'FALSE', 'product_thumbnails/55c532d2181da5c7925d3ffdb189de651333871849.jpg', ''),
(122, 'Mobile Phones', 'Samsung', 'asdfasdf', 1423, 'dsafadsf', 'dasfsdaf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d1415111277.jpg', ''),
(123, 'Mobile Phones', 'Samsung', 'asdfasdf', 1423, 'dsafadsf', 'dasfsdaf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d440605669.jpg', ''),
(124, 'Mobile Phones', 'Samsung', 'dsfadf', 0, 'sdaadsf', 'sdafasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d1921541361.jpg', ''),
(125, 'Mobile Phones', 'Samsung', 'asdfasdf', 0, 'asdfasdf', 'sdafsdaf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71905000513.jpg', ''),
(126, 'Mobile Phones', 'Samsung', 'asdsadf', 2412, 'asdfsdaf', 'sdafsadf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71978834550.jpg', ''),
(127, 'Mobile Phones', 'Samsung', 'asdsadf', 2412, 'asdfsdaf', 'sdafsadf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71064997441.jpg', ''),
(128, 'Mobile Phones', 'Samsung', 'asdsadf', 2412, 'asdfsdaf', 'sdafsadf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71876609392.jpg', ''),
(129, 'Mobile Phones', 'Samsung', 'asdsadf', 2412, 'asdfsdaf', 'sdafsadf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7213148375.jpg', ''),
(130, 'Mobile Phones', 'Samsung', 'asdsadf', 2412, 'asdfsdaf', 'sdafsadf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7637285838.jpg', ''),
(131, 'Mobile Phones', 'Samsung', 'asdsadf', 2412, 'asdfsdaf', 'sdafsadf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7998251792.jpg', ''),
(132, 'Mobile Phones', 'Samsung', 'asdsadf', 2412, 'asdfsdaf', 'sdafsadf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7597726704.jpg', ''),
(133, 'Mobile Phones', 'Samsung', 'asdfasdf', 1342, 'fdgsgdsf', 'gdfgsdfg', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d404140394.jpg', ''),
(134, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d1739057793.jpg', ''),
(135, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d1588524677.jpg', ''),
(136, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d1275207115.jpg', ''),
(137, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d663951340.jpg', ''),
(138, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d540023414.jpg', ''),
(139, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d1444532812.jpg', ''),
(140, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d847663916.jpg', ''),
(141, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d528706332.jpg', ''),
(142, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d77124867.jpg', ''),
(143, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d712003575.jpg', ''),
(144, 'Mobile Phones', 'Samsung', 'ASDasd', 2412, 'asdsfa', 'dfsaasdf', 'FALSE', 'product_thumbnails/0a709aa1a3a894b7ea412436b8df407d654468747.jpg', ''),
(145, 'Mobile Phones', 'Samsung', 'asdfsdf', 24124, 'asdfasdf', 'asdfsadfsad', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7619383374.jpg', ''),
(146, 'Mobile Phones', 'Samsung', 'asDasd', 12423, 'ASDSAD', 'ASDSAF', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7284251688.jpg', ''),
(147, 'Mobile Phones', 'Samsung', 'asdasd', 1242, 'SAdsAD', 'SAdasD', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7716926377.jpg', ''),
(148, 'Mobile Phones', 'Samsung', 'asdasd', 1242, 'SAdsAD', 'SAdasD', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7387821661.jpg', ''),
(149, 'Mobile Phones', 'Samsung', 'asdasd', 1242, 'SAdsAD', 'SAdasD', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71968182239.jpg', ''),
(150, 'Mobile Phones', 'Samsung', 'adsfasdf', 0, 'asdfasdf', 'sdafasdf', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7572425286.jpg', ''),
(151, 'Mobile Phones', 'Samsung', 'sdfasdf', 124124, 'dafsdsf', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7801965073.jpg', ''),
(152, 'Mobile Phones', 'Samsung', 'sdfasdf', 124124, 'dafsdsf', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71668963888.jpg', ''),
(153, 'Mobile Phones', 'Samsung', 'sdfasdf', 124124, 'dafsdsf', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d72017023375.jpg', ''),
(154, 'Mobile Phones', 'Samsung', 'dsfhdghf', 657467, 'sdfgdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7576684128.jpg', ''),
(155, 'Mobile Phones', 'Samsung', 'dsfhdghf', 657467, 'sdfgdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71264928091.jpg', ''),
(156, 'Mobile Phones', 'Samsung', 'dsfhdghf', 657467, 'sdfgdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7332089453.jpg', ''),
(157, 'Mobile Phones', 'Samsung', 'dsfhdghf', 657467, 'sdfgdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71513637964.jpg', ''),
(158, 'Mobile Phones', 'Samsung', 'dsfhdghf', 657467, 'sdfgdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7938482784.jpg', ''),
(159, 'Mobile Phones', 'Samsung', 'dsfhdghf', 657467, 'sdfgdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7778260421.jpg', ''),
(160, 'Mobile Phones', 'Samsung', 'dsfhdghf', 657467, 'sdfgdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d788708567.jpg', ''),
(161, 'Mobile Phones', 'Samsung', 'dsfhdghf', 657467, 'sdfgdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d71715987756.jpg', ''),
(162, 'Mobile Phones', 'Samsung', 'dsfhdghf', 657467, 'sdfgdfg', '', 'FALSE', 'product_thumbnails/aaf3bc7bd30ee07e2edaa868b38572d7849298295.jpg', ''),
(163, 'Mobile Phones', 'HTC', 'HTC One Max', 123456, 'Its a great phone', '', 'FALSE', 'product_thumbnails/8d494984eefd7f09e4a35a28197f8e1a400920429.jpg', ''),
(164, 'Mobile Phones', 'Samsung', 'qweq', 2253, 'fdsadf', '', 'FALSE', '', ''),
(165, 'Mobile Phones', 'Samsung', 'qweq', 2253, 'fdsadf', '', 'FALSE', '', ''),
(166, 'Mobile Phones', 'Samsung', 'qweq', 2253, 'fdsadf', '', 'FALSE', '', ''),
(167, 'Mobile Phones', 'Samsung', 'qweq', 2253, 'fdsadf', '', 'FALSE', '', ''),
(168, 'Mobile Phones', 'Samsung', 'qweq', 2253, 'fdsadf', '', 'FALSE', '262528759.jpg', ''),
(169, 'Mobile Phones', 'Samsung', 'asdfsadf', 34234, 'sadfasdf', '', 'FALSE', '1946664041.jpg', ''),
(170, 'Mobile Phones', 'Samsung', 'asdfsadf', 34234, 'sadfasdf', '', 'FALSE', '../dummy_folder/1044667296.jpg', ''),
(171, 'Mobile Phones', 'Samsung', 'asdfsadf', 34234, 'sadfasdf', '', 'FALSE', '185343781.jpg', ''),
(172, 'Mobile Phones', 'Samsung', 'asdfsadf', 34234, 'sadfasdf', '', 'FALSE', '/dummy_folder/1751877617.jpg', ''),
(173, 'Mobile Phones', 'Samsung', 'aadsf', 345235, 'sdfdasf', '', 'FALSE', '/dummy_folder/1813683092.jpg', ''),
(174, 'Mobile Phones', 'Samsung', 'afasdf', 35254, 'gsfdgsf', '', 'FALSE', '/dummy_folder/144344544.jpg', ''),
(175, 'Mobile Phones', 'Samsung', 'sad', 34345, 'asdfdsf', '', 'FALSE', '/dummy_folder/169830617.jpg', ''),
(176, 'Mobile Phones', 'Samsung', 'sad', 34345, 'asdfdsf', '', 'FALSE', '/dummy_folder/1459343339.jpg', ''),
(177, 'Mobile Phones', 'Samsung', 'sad', 34345, 'asdfdsf', '', 'FALSE', '/dummy_folder/125640398.jpg', ''),
(178, 'Mobile Phones', 'Samsung', 'sad', 34345, 'asdfdsf', '', 'FALSE', 'dummy_folder/1052156687.jpg', ''),
(179, 'Mobile Phones', 'Samsung', 'sad', 34345, 'asdfdsf', '', 'FALSE', 'dummy_folder/310362730.jpg', ''),
(180, 'Mobile Phones', 'Samsung', 'dsaf', 2423, 'adfasdf', '', 'FALSE', 'dummy_folder/1451994832.jpg', ''),
(181, 'Mobile Phones', 'Samsung', 'sfd', 5, 'asdf', '', 'FALSE', 'dummy_folder/1960736281.jpg', ''),
(182, 'Mobile Phones', 'Samsung', 'DFASFD', 4314, 'ASDFSADF', '', 'FALSE', 'dummy_folder/1244920584.jpg', ''),
(183, 'Mobile Phones', 'Samsung', 'galaxygalaxy', 4, 'asdf', '', 'FALSE', 'dummy_folder/370794439.jpg', ''),
(184, 'Mobile Phones', 'Samsung', 'dsafasd', 0, 'dsafasdf', '', 'FALSE', 'product_thumbnails/708968062.jpg', ''),
(185, 'Mobile Phones', 'Samsung', 'oneone', 12341234, 'dfasd', '', 'FALSE', 'product_thumbnails/1099134243.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_slides`
--

CREATE TABLE IF NOT EXISTS `product_slides` (
`ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Slide` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=206 ;

--
-- Dumping data for table `product_slides`
--

INSERT INTO `product_slides` (`ID`, `Product_ID`, `Slide`) VALUES
(10, 4, 'product_slides/9870b6521ab484cc11caafef43c44d041721943638.jpg'),
(11, 4, 'product_slides/36a49de650230768642c739f1b5065e71571499981.jpg'),
(12, 4, 'product_slides/a9bd01ae24da0f2c2d9baf5d28ffa85d226565224.jpg'),
(13, 5, 'product_slides/1f9fa88cedc72933a42fa6cc1d065de71998630166.jpg'),
(14, 5, 'product_slides/9870b6521ab484cc11caafef43c44d042084960982.jpg'),
(15, 5, 'product_slides/36a49de650230768642c739f1b5065e71900251209.jpg'),
(16, 6, 'product_slides/1f9fa88cedc72933a42fa6cc1d065de7217882414.jpg'),
(17, 6, 'product_slides/9870b6521ab484cc11caafef43c44d041462028054.jpg'),
(18, 6, 'product_slides/a9bd01ae24da0f2c2d9baf5d28ffa85d369385318.jpg'),
(19, 7, 'product_slides/1f9fa88cedc72933a42fa6cc1d065de7320420920.jpg'),
(20, 7, 'product_slides/9870b6521ab484cc11caafef43c44d0436544408.jpg'),
(21, 7, 'product_slides/a9bd01ae24da0f2c2d9baf5d28ffa85d692111909.jpg'),
(22, 8, 'product_slides/3dd96294d7d3318b9f0c89411a254665139655637.jpg'),
(23, 8, 'product_slides/7d85eeb5a5219026988bb2a722c34bef864936027.jpg'),
(24, 8, 'product_slides/ec9a57a40a01ba2a4692a24cbe761752986178281.jpg'),
(25, 9, 'product_slides/9dd6839a8f88dbffad4369d4e956de261980065826.jpg'),
(26, 9, 'product_slides/ec9a57a40a01ba2a4692a24cbe761752816421717.jpg'),
(27, 9, 'product_slides/3dd96294d7d3318b9f0c89411a254665279575544.jpg'),
(28, 10, 'product_slides/7d85eeb5a5219026988bb2a722c34bef1315036828.jpg'),
(29, 10, 'product_slides/3dd96294d7d3318b9f0c89411a2546651453754344.jpg'),
(30, 10, 'product_slides/ec9a57a40a01ba2a4692a24cbe7617522093218606.jpg'),
(31, 11, 'product_slides/ec9a57a40a01ba2a4692a24cbe761752626563887.jpg'),
(32, 11, 'product_slides/3dd96294d7d3318b9f0c89411a254665659549804.jpg'),
(33, 11, 'product_slides/7d85eeb5a5219026988bb2a722c34bef1281930567.jpg'),
(35, 12, 'product_slides/ec9a57a40a01ba2a4692a24cbe7617521553346034.jpg'),
(36, 12, 'product_slides/9dd6839a8f88dbffad4369d4e956de261849545943.jpg'),
(37, 13, 'product_slides/f77671c1627d166f543d3ff3f6463c54339792374.jpg'),
(38, 13, 'product_slides/8d0eda2d1b726edc509bbf20d89a6d91898663244.jpg'),
(39, 13, 'product_slides/ec9a57a40a01ba2a4692a24cbe761752482625127.jpg'),
(40, 14, 'product_slides/d41d8cd98f00b204e9800998ecf8427e306458528.jpg'),
(41, 14, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1071849446.jpg'),
(42, 14, 'product_slides/d41d8cd98f00b204e9800998ecf8427e2061035886.jpg'),
(43, 15, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1445833325.jpg'),
(44, 15, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1509499178.jpg'),
(45, 15, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1975378106.jpg'),
(46, 16, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1582788697.jpg'),
(47, 16, 'product_slides/d41d8cd98f00b204e9800998ecf8427e408123445.jpg'),
(48, 16, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1312635610.jpg'),
(49, 17, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e374864726.jpg'),
(50, 17, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e53290537.jpg'),
(51, 17, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e1621113081.jpg'),
(52, 18, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e2072424574.jpg'),
(53, 18, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e2025394472.jpg'),
(54, 18, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e984149151.jpg'),
(55, 19, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e1915597128.jpg'),
(56, 19, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e58313210.jpg'),
(57, 19, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e1507921244.jpg'),
(58, 20, '/ell/product_slides/f77671c1627d166f543d3ff3f6463c5482507612.jpg'),
(59, 20, '/ell/product_slides/f77671c1627d166f543d3ff3f6463c541590463680.jpg'),
(60, 20, '/ell/product_slides/7d85eeb5a5219026988bb2a722c34bef760804329.jpg'),
(61, 21, '/ell/product_slides/7d85eeb5a5219026988bb2a722c34bef975236428.jpg'),
(62, 21, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e1616845897.jpg'),
(63, 21, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e1820821609.jpg'),
(64, 22, '../product_slides/ec9a57a40a01ba2a4692a24cbe76175224628229.jpg'),
(65, 22, '../product_slides/d41d8cd98f00b204e9800998ecf8427e537328925.jpg'),
(66, 22, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1681388706.jpg'),
(67, 23, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1653929429.jpg'),
(68, 23, '../product_slides/d41d8cd98f00b204e9800998ecf8427e371344677.jpg'),
(69, 23, '../product_slides/d41d8cd98f00b204e9800998ecf8427e545426240.jpg'),
(70, 24, '../product_slides/d41d8cd98f00b204e9800998ecf8427e328042050.jpg'),
(71, 24, '../product_slides/d41d8cd98f00b204e9800998ecf8427e578076655.jpg'),
(72, 24, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1123793478.jpg'),
(73, 25, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e864439938.jpg'),
(74, 25, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e1291597606.jpg'),
(75, 25, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e497984581.jpg'),
(76, 26, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e702731273.jpg'),
(77, 26, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e2013389043.jpg'),
(78, 26, '/ell/product_slides/d41d8cd98f00b204e9800998ecf8427e270552869.jpg'),
(79, 27, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1184034656.jpg'),
(80, 27, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1770897248.jpg'),
(81, 27, '../product_slides/d41d8cd98f00b204e9800998ecf8427e120864634.jpg'),
(82, 28, '../product_slides/d41d8cd98f00b204e9800998ecf8427e383543758.jpg'),
(83, 28, '../product_slides/d41d8cd98f00b204e9800998ecf8427e2044192103.jpg'),
(84, 28, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1892884052.jpg'),
(85, 29, '../product_slides/d41d8cd98f00b204e9800998ecf8427e791630901.jpg'),
(86, 29, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1757323909.jpg'),
(87, 29, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1055583978.jpg'),
(88, 30, '../product_slides/d41d8cd98f00b204e9800998ecf8427e313338572.jpg'),
(89, 30, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1077344182.jpg'),
(90, 30, '../product_slides/d41d8cd98f00b204e9800998ecf8427e767891998.jpg'),
(91, 31, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1167286200.jpg'),
(92, 31, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1458594644.jpg'),
(93, 31, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1485860444.jpg'),
(94, 33, '../product_slides/8d0eda2d1b726edc509bbf20d89a6d911257170547.jpg'),
(95, 33, '../product_slides/9dd6839a8f88dbffad4369d4e956de26470178356.jpg'),
(96, 33, '../product_slides/f77671c1627d166f543d3ff3f6463c542136171795.jpg'),
(97, 34, '../product_slides/8d0eda2d1b726edc509bbf20d89a6d911742636470.jpg'),
(98, 34, '../product_slides/9dd6839a8f88dbffad4369d4e956de261771494218.jpg'),
(99, 34, '../product_slides/f77671c1627d166f543d3ff3f6463c542019375678.jpg'),
(100, 35, 'product_slides/8d0eda2d1b726edc509bbf20d89a6d911144580813.jpg'),
(101, 35, 'product_slides/3dd96294d7d3318b9f0c89411a25466572007600.jpg'),
(102, 35, 'product_slides/7d85eeb5a5219026988bb2a722c34bef1352710977.jpg'),
(103, 36, 'product_slides/9dd6839a8f88dbffad4369d4e956de26690762797.jpg'),
(104, 36, 'product_slides/eeb19ce65e7e5f85164966433cb38f6d1908911476.jpg'),
(105, 36, 'product_slides/ec9a57a40a01ba2a4692a24cbe7617521393927332.jpg'),
(106, 37, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1446818525.jpg'),
(107, 37, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1795567628.jpg'),
(108, 37, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1866212386.jpg'),
(109, 38, 'product_slides/d41d8cd98f00b204e9800998ecf8427e664180405.jpg'),
(110, 38, 'product_slides/d41d8cd98f00b204e9800998ecf8427e501776849.jpg'),
(111, 38, 'product_slides/d41d8cd98f00b204e9800998ecf8427e187766884.jpg'),
(112, 39, 'product_slides/d41d8cd98f00b204e9800998ecf8427e538675146.jpg'),
(113, 39, 'product_slides/d41d8cd98f00b204e9800998ecf8427e386835214.jpg'),
(114, 39, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1925595780.jpg'),
(115, 40, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1957185710.jpg'),
(116, 40, 'product_slides/d41d8cd98f00b204e9800998ecf8427e378654674.jpg'),
(117, 40, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1883169656.jpg'),
(118, 41, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1529749540.jpg'),
(119, 41, 'product_slides/d41d8cd98f00b204e9800998ecf8427e2068057127.jpg'),
(120, 41, 'product_slides/d41d8cd98f00b204e9800998ecf8427e331696443.jpg'),
(121, 42, 'product_slides/d41d8cd98f00b204e9800998ecf8427e471796304.jpg'),
(122, 42, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1181794110.jpg'),
(123, 42, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1134032096.jpg'),
(124, 43, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1235449531.jpg'),
(125, 43, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1199799479.jpg'),
(126, 43, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1232454848.jpg'),
(127, 44, 'product_slides/ec9a57a40a01ba2a4692a24cbe761752599308479.jpg'),
(128, 44, 'product_slides/3dd96294d7d3318b9f0c89411a254665938306997.jpg'),
(129, 44, 'product_slides/f77671c1627d166f543d3ff3f6463c541927369578.jpg'),
(130, 45, 'product_slides/d41d8cd98f00b204e9800998ecf8427e331476926.jpg'),
(131, 45, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1104551452.jpg'),
(132, 45, 'product_slides/d41d8cd98f00b204e9800998ecf8427e254635159.jpg'),
(133, 46, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1589454135.jpg'),
(134, 46, 'product_slides/d41d8cd98f00b204e9800998ecf8427e541275228.jpg'),
(135, 46, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1468214451.jpg'),
(136, 47, 'product_slides/d41d8cd98f00b204e9800998ecf8427e218197535.jpg'),
(137, 47, 'product_slides/d41d8cd98f00b204e9800998ecf8427e609837518.jpg'),
(138, 47, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1126444424.jpg'),
(139, 48, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1088756129.jpg'),
(140, 48, 'product_slides/d41d8cd98f00b204e9800998ecf8427e191218877.jpg'),
(141, 48, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1197645638.jpg'),
(142, 49, 'product_slides/d41d8cd98f00b204e9800998ecf8427e553208502.jpg'),
(143, 49, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1006198632.jpg'),
(144, 49, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1958443140.jpg'),
(145, 50, 'product_slides/d41d8cd98f00b204e9800998ecf8427e710385925.jpg'),
(146, 50, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1050001708.jpg'),
(147, 50, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1520928776.jpg'),
(148, 145, 'product_slides/55c532d2181da5c7925d3ffdb189de651185281278.jpg'),
(149, 148, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d71147448941.jpg'),
(150, 146, 'product_slides/55c532d2181da5c7925d3ffdb189de651046104829.jpg'),
(151, 150, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d71307089305.jpg'),
(152, 150, 'product_slides/8d494984eefd7f09e4a35a28197f8e1a320508156.jpg'),
(153, 0, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d7732800364.jpg'),
(154, 2, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d7882351860.jpg'),
(155, 2, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d71574740560.jpg'),
(156, 1, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d71662471555.jpg'),
(157, 2, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d71036186708.jpg'),
(158, 1, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d71717362467.jpg'),
(159, 161, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d7250650235.jpg'),
(160, 162, 'product_slides/aaf3bc7bd30ee07e2edaa868b38572d7516810550.jpg'),
(161, 163, 'product_slides/50730dce5670383c35c0fdacad2d0f5761467709.jpg'),
(162, 163, 'product_slides/902f368b4cf4f3c00e36d5e3fb2250bb1574408472.jpg'),
(163, 163, 'product_slides/8d494984eefd7f09e4a35a28197f8e1a1824173598.jpg'),
(164, 163, 'product_slides/ec9a925d944fd24183b6df2b305701c1358079605.jpg'),
(165, 164, 'product_slides/5f2df13b4880c70f080438ec98bf9576723016747.jpg'),
(166, 165, 'product_slides/5f2df13b4880c70f080438ec98bf95761433235782.jpg'),
(167, 166, 'product_slides/5f2df13b4880c70f080438ec98bf9576928099731.jpg'),
(168, 167, 'product_slides/5f2df13b4880c70f080438ec98bf95761355141653.jpg'),
(169, 168, 'product_slides/5f2df13b4880c70f080438ec98bf9576288064882.jpg'),
(170, 169, 'product_slides/5f2df13b4880c70f080438ec98bf95761034858278.jpg'),
(171, 170, 'product_slides/5f2df13b4880c70f080438ec98bf95761348656173.jpg'),
(172, 171, 'product_slides/5f2df13b4880c70f080438ec98bf957649726783.jpg'),
(173, 172, 'product_slides/5f2df13b4880c70f080438ec98bf95761651825979.jpg'),
(174, 176, ''),
(175, 176, ''),
(176, 176, ''),
(177, 177, ''),
(178, 177, ''),
(179, 177, ''),
(180, 178, 'dummy_folder_2/1236060615.jpg'),
(181, 178, 'dummy_folder_2/1310132240.jpg'),
(182, 178, 'dummy_folder_2/1829366328.jpg'),
(183, 179, 'dummy_folder_2/2050492669.jpg'),
(184, 179, 'dummy_folder_2/1789531837.jpg'),
(185, 179, 'dummy_folder_2/958859914.jpg'),
(186, 179, 'dummy_folder_2/1564601596.jpg'),
(187, 179, 'dummy_folder_2/665589189.jpg'),
(188, 179, 'dummy_folder_2/1003756534.jpg'),
(189, 180, 'dummy_folder_2/1158889484.jpg'),
(190, 180, 'dummy_folder_2/1472996922.png'),
(191, 180, 'dummy_folder_2/587411509.jpg'),
(192, 180, 'dummy_folder_2/119721752.png'),
(193, 181, 'dummy_folder_2/1219466342.jpg'),
(194, 181, 'dummy_folder_2/161412056.jpg'),
(195, 181, 'dummy_folder_2/666624003.jpg'),
(196, 182, 'dummy_folder_2/53788673.jpg'),
(197, 182, 'dummy_folder_2/2094884872.jpg'),
(198, 182, 'dummy_folder_2/1314707424.jpg'),
(199, 183, 'dummy_folder_2/1312104499.jpg'),
(200, 183, 'dummy_folder_2/405312884.jpg'),
(201, 183, 'dummy_folder_2/1495358593.jpg'),
(202, 183, 'dummy_folder_2/894341938.jpg'),
(203, 184, 'product_slides/25358495.jpg'),
(204, 185, 'product_slides/909902959.jpg'),
(205, 185, 'product_slides/1047383802.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
`ID` int(11) NOT NULL,
  `Slide` varchar(300) NOT NULL,
  `Link_Title` varchar(300) NOT NULL,
  `Link_HREF` varchar(300) NOT NULL,
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`ID`, `Slide`, `Link_Title`, `Link_HREF`, `Description`) VALUES
(1, 'home_slides/614507361.png', 'Ubuntu Phone', 'someting', 'A Peak into the Future'),
(2, 'home_slides/fb19620990ee80731adbc2f84cefd4561675221940.jpg', 'Ubuntu Phone', '', 'A Peak into the Future 6+'),
(3, 'home_slides/3d089d2a89d6b5a65886d6f9bff630c01176662304.jpg', 'Ubuntu Phone pizza', '', 'A Peak into the not so far Future');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `about_img`
--
ALTER TABLE `about_img`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mobile_specs`
--
ALTER TABLE `mobile_specs`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_slides`
--
ALTER TABLE `product_slides`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `about_img`
--
ALTER TABLE `about_img`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mobile_specs`
--
ALTER TABLE `mobile_specs`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=186;
--
-- AUTO_INCREMENT for table `product_slides`
--
ALTER TABLE `product_slides`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=206;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
