-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2014 at 11:41 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `about_img`
--

INSERT INTO `about_img` (`ID`, `Images`) VALUES
(21, 'page_images/6050e5dc7e93d8ade6dad387ba7b8fb51810665555.jpg'),
(22, 'page_images/8dc4172245eaf68335dbc37a3def9c941840314168.jpg'),
(23, 'page_images/567cc3f1d1df86afac50a354703e485f1197612760.jpg'),
(24, 'page_images/773f7ce638178128351c311aa876db26563247359.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

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
(90, 'Mobile Phones', 'Samsung', 'ghdfgh', 0, 'gfdhgdfh', 'gdfhdgfh', 'FALSE', 'product_thumbnails/e0f68b07be7f73f7ccf6f451e327086b206539949.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_slides`
--

CREATE TABLE IF NOT EXISTS `product_slides` (
`ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Slide` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

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
(147, 50, 'product_slides/d41d8cd98f00b204e9800998ecf8427e1520928776.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
`ID` int(11) NOT NULL,
  `Slide` varchar(300) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`ID`, `Slide`, `Link`, `Description`) VALUES
(1, 'home_slides/03b54c3867d0f659d6534784ae5abfcc949192178.jpg', 'Ubuntu Phone', 'A Peak into the Future'),
(2, 'home_slides/fb19620990ee80731adbc2f84cefd4561675221940.jpg', 'Ubuntu Phone', 'A Peak into the Future 6+'),
(3, 'home_slides/3d089d2a89d6b5a65886d6f9bff630c01176662304.jpg', 'Ubuntu Phone pizza', 'A Peak into the not so far Future');

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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `product_slides`
--
ALTER TABLE `product_slides`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
