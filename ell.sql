-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2014 at 10:17 PM
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
  `Thumbnail` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Type`, `Brand`, `Name`, `Price`, `Description`, `Specifications`, `Ell_Rec`, `Thumbnail`) VALUES
(8, 'Mobile Phones', 'Samsung', 'Samsung Galaxy Note 3', 9000, '\r\nThe GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'image_thumbnails/3dd96294d7d3318b9f0c89411a254665664004195.jpg'),
(9, 'Mobile Phones', 'Apple', 'iPhone 6', 12000, '\r\nThe GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'image_thumbnails/9dd6839a8f88dbffad4369d4e956de261149258042.jpg'),
(10, 'Mobile Phones', 'Samsung', 'Samsung Galaxy S5', 10000, '\r\nThe GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'image_thumbnails/7d85eeb5a5219026988bb2a722c34bef444678042.jpg'),
(11, 'Mobile Phones', 'HTC', 'HTC One', 9000, 'The GALAXY Note 4 4G+ introduces a new, sleek and stylish\r\ndesign. Enjoy the wonders of a premium metal frame, 2.5D\r\nfluid curvature glass screen and soft-textured back cover for\r\nincredible comfort, that makes it easy to control with one\r\nhand. It offers a superior grip and enhanced durability.', 'GENERAL\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 1900 / 2100\r\n4G Network	LTE 800 / 850 / 900 / 1800 / 2100 / 2600\r\nSIM	Micro-SIM\r\nAnnounced	2014, September\r\nStatus	Coming soon. Exp. release 10 october 2014,at eLL Mobile maldives', 'TRUE', 'image_thumbnails/ec9a57a40a01ba2a4692a24cbe7617521758591599.jpg'),
(12, 'Tablets', 'Apple', 'iPad', 7000, '', '', 'FALSE', 'image_thumbnails/8d0eda2d1b726edc509bbf20d89a6d91925001491.jpg'),
(13, 'Tablets', 'Samsung', 'Samsung Galaxy Tab', 6500, 'sfgsfgsdkjfgnkjlAK', 'jsadnfkjsngidsddnvkjn', 'FALSE', 'image_thumbnails/f77671c1627d166f543d3ff3f6463c54100965814.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_slides`
--

CREATE TABLE IF NOT EXISTS `product_slides` (
`ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Slide` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

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
(39, 13, 'product_slides/ec9a57a40a01ba2a4692a24cbe761752482625127.jpg');

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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_slides`
--
ALTER TABLE `product_slides`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
