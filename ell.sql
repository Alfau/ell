-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2014 at 01:24 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `Text`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut neque vel libero condimentum faucibus a eget magna. Sed in quam dictum, suscipit nulla quis, porttitor dui. Donec scelerisque, ipsum in laoreet fringilla, sapien mauris finibus arcu, a bibendum augue libero quis sapien. Morbi convallis eros mauris, vitae ullamcorper arcu pharetra non. Maecenas ac lacus in purus placerat eleifend commodo ut nulla. Aenean tempus facilisis venenatis. Nunc porta elit risus, efficitur varius massa venenatis nec. Suspendisse potenti. Maecenas venenatis tellus ac nulla dapibus faucibus. Donec rutrum ligula magna, non tincidunt mi maximus a. Quisque vel diam eget eros pretium molestie non in orci. Donec a risus sagittis, convallis sem at, viverra dolor. Duis pretium metus mauris, vel accumsan justo finibus non. Suspendisse ut semper turpis, vitae placerat lacus.\r\n\r\nVestibulum hendrerit enim diam, ac tempor neque pharetra id. Donec ultricies ipsum lacinia justo convallis, nec tincidunt tellus egestas. Sed lorem dui, finibus ac libero sit amet, posuere cursus libero. Fusce cursus tincidunt porttitor. Mauris ac tristique ligula. Integer cursus ac erat eleifend ultricies. Phasellus convallis cursus orci semper semper. Aenean ac laoreet nunc, eu ornare sapien. Sed sed massa non nisl varius pellentesque. Fusce tincidunt eu arcu eu fermentum. Integer aliquet sollicitudin euismod. Morbi nulla diam, malesuada ac tristique ac, fermentum sit amet justo.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Type`, `Brand`, `Name`, `Price`, `Description`, `Specifications`, `Ell_Rec`, `Thumbnail`, `Category`) VALUES
(8, 'Mobile Phones', 'Samsung', 'Samsung Galaxy Note 3', 9000, '\r\nThe GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'image_thumbnails/3dd96294d7d3318b9f0c89411a254665664004195.jpg', ''),
(9, 'Mobile Phones', 'Apple', 'iPhone 6', 12000, '\r\nThe GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'image_thumbnails/9dd6839a8f88dbffad4369d4e956de261149258042.jpg', ''),
(10, 'Mobile Phones', 'Samsung', 'Samsung Galaxy S5', 10000, '\r\nThe GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'image_thumbnails/7d85eeb5a5219026988bb2a722c34bef444678042.jpg', ''),
(11, 'Mobile Phones', 'HTC', 'HTC One', 9000, 'The GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'image_thumbnails/ec9a57a40a01ba2a4692a24cbe7617521758591599.jpg', ''),
(12, 'Tablets', 'Apple', 'iPad', 7000, 'rhsghfghsghsgfhdhgj', 'gfhjfghjfgkghlgklhjkl', 'FALSE', 'image_thumbnails/8d0eda2d1b726edc509bbf20d89a6d91925001491.jpg', ''),
(13, 'Tablets', 'Samsung', 'Samsung Galaxy Tab', 6500, 'sfgsfgsdkjfgnkjlAK', 'jsadnfkjsngidsddnvkjn', 'FALSE', 'image_thumbnails/f77671c1627d166f543d3ff3f6463c54100965814.jpg', ''),
(28, 'Mobile Accessories', 'Apple', 'Matt Style Screen Protector for Apple iPhone 4S', 200, '', '', 'FALSE', 'image_thumbnails/b9fb9d37bdf15a699bc071ce49baea53703857760.jpg', 'Screen Protection'),
(29, 'Mobile Accessories', 'Apple', 'Matt Style Screen Protector for Apple iPhone 4S', 200, '', '', 'FALSE', 'image_thumbnails/b9fb9d37bdf15a699bc071ce49baea53837520292.jpg', 'Screen Protection');

-- --------------------------------------------------------

--
-- Table structure for table `product_slides`
--

CREATE TABLE IF NOT EXISTS `product_slides` (
`ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Slide` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

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
(34, 12, 'product_slides/3dd96294d7d3318b9f0c89411a2546651241866441.jpg'),
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
(87, 29, '../product_slides/d41d8cd98f00b204e9800998ecf8427e1055583978.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `product_slides`
--
ALTER TABLE `product_slides`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
