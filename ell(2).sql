-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2014 at 07:48 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `mobile_specs`
--

INSERT INTO `mobile_specs` (`ID`, `Product_ID`, `General`, `Memory`, `Camera`, `Battery`, `Body`, `Display`, `Sound`, `Data`, `Features`) VALUES
(1, 1, '', '', '', '', '', '', '', '', ''),
(2, 2, '+2G Network 	GSM 850 / 900 / 1800 / 1900 - all versions\r\n+3G Network 	HSDPA 850 / 900 / 1900 / 2100 - SM-G900F\r\n                        	HSDPA 850 / 1900 / 2100 - SM-G900A\r\n                        	HSDPA 850 / 900 / 1700 / 1900 / 2100 - SM-G900M\r\n  	                        HSDPA 850 / 1700 / 1900 / 2100 - SM-G900T\r\n*4G Network 	LTE 800 / 850 / 900 / 1800 / 1900 / 2100 / 2600 - SM-G900F\r\n                          	LTE 700 / 850 / 1700 / 1800 / 1900 / 2100 / 2600 - SM-G900A\r\n                            	LTE 700 / 850 / 1700 / 1900 / 2100 / 2600 - SM-G900M\r\n                               	LTE 700/850/900/1700/1800/1900/2100/2600 - SM-G900T', '+Card slot 	microSD, up to 128 GB\r\n+Internal 	16/32 GB, 2 GB RAM', 'Primary 	16 MP, 5312 x 2988 pixels, phase detection autofocus, LED flash, check quality', '+Li-Ion 2800 mAh battery\r\n+Stand-by 	Up to 390 h\r\n+Talk time 	Up to 21 h\r\n+Music play 	Up to 67 h', '+Dimensions 	142 x 72.5 x 8.1 mm (5.59 x 2.85 x 0.32 in)\r\n+Weight 	145 g (5.11 oz)\r\n+ Fingerprint sensor (PayPal certified)\r\n+IP67 certified - dust and water resistant\r\n+Water resistant up to 1 meter and 30 minutes', '+Type 	Super AMOLED capacitive touchscreen, 16M colors\r\n+Size 	1080 x 1920 pixels, 5.1 inches (~432 ppi pixel density)\r\n+Multitouch 	Yes\r\n+Protection 	Corning Gorilla Glass 3\r\n+TouchWiz UI', '', '', ''),
(3, 3, 'sdfadsf', '', '', '', '', '', '', '', ''),
(4, 4, '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. '),
(5, 5, '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '', '', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,'),
(6, 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', ''),
(7, 7, '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,'),
(8, 8, '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,'),
(9, 9, '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in portti+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,tor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare,'),
(10, 10, '+turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh aug', '+turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh aug', '+turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh aug', '+turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh aug', '+turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh aug', '+turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh aug', '+turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh aug', '+turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh aug', ''),
(11, 11, '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id ele', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id ele', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id ele', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id ele', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id ele', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id ele', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id ele', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id ele', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id ele'),
(12, 12, '+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio,', '+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio,', '+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio,', '+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio,+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio,', '+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio,', '+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio,', '', '+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio,+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio,', ''),
(13, 13, '+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife', '+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife', '+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife', '+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife', '+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife', '+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife', '+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife', '+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife', '+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife+Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleife'),
(14, 14, '+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non', '+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non', '+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non', '+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non', '+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non', '+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non', '+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non', '+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non', '+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non+onec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non'),
(15, 15, '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est'),
(16, 16, '+Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligu', 'Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate liguQuisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligu', 'Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligu', 'Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligu', 'Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligu', 'Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligu', 'Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate liguQuisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligu', 'Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligu', ''),
(17, 17, '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo'),
(18, 18, '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. ', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. ', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. ', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. ', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. ', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. ', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. +Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. ', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. ', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. '),
(19, 19, '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elemen'),
(20, 20, '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito', '', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttito'),
(21, 21, '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, ', '+Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, +Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, +Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, '),
(22, 22, '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.', '+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.+Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Type`, `Brand`, `Name`, `Price`, `Description`, `Specifications`, `Ell_Rec`, `Thumbnail`, `Category`) VALUES
(1, 'Mobile Phones', 'Samsung', 'Samsung Galaxy s5', 12000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/1422729207.jpg', ''),
(2, 'Mobile Phones', 'Apple', 'IPhone 6', 18000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/51140497.jpg', ''),
(3, 'Mobile Phones', 'HTC', 'HTC One', 10000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/830552163.jpg', ''),
(4, 'Mobile Phones', 'LG', 'LG G3', 14000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/1073139084.jpg', ''),
(5, 'Mobile Phones', 'Apple', 'Apple IPhone 5', 9000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/1244788871.jpg', ''),
(6, 'Mobile Phones', 'HTC', 'HTC One M8', 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/1542782765.jpg', ''),
(7, 'Mobile Phones', 'HTC', 'HTC Two M8', 12000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/1396090390.jpg', ''),
(8, 'Mobile Phones', 'HTC', 'HTC Three', 10000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/417155844.jpg', ''),
(9, 'Mobile Phones', 'HTC', 'HTC Four', 13000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/2071256313.jpg', ''),
(10, 'Mobile Phones', 'HTC', 'HTC Five', 12341, 'Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. Mauris id eros sed sapien molestie elementum. Curabitur id suscipit dolor, laoreet fringilla est. Mauris malesuada, velit placerat ultricies pulvinar, arcu mi laoreet felis, et mollis felis est non ex. Cras id volutpat arcu. Nunc suscipit lorem et aliquet hendrerit. Vestibulum vitae ante vel mauris scelerisque imperdiet eu in neque. Phasellus sed fringilla tortor, ut auctor nunc. ', '', 'FALSE', 'product_thumbnails/995583026.jpg', ''),
(11, 'Mobile Phones', 'HTC', 'HTC Six Plus One', 30000, 'Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. Mauris id eros sed sapien molestie elementum. Curabitur id suscipit dolor, laoreet fringilla est. Mauris malesuada, velit placerat ultricies pulvinar, arcu mi laoreet felis, et mollis felis est non ex. Cras id volutpat arcu. Nunc suscipit lorem et aliquet hendrerit. Vestibulum vitae ante vel mauris scelerisque imperdiet eu in neque. Phasellus sed fringilla tortor, ut auctor nunc. ', '', 'FALSE', 'product_thumbnails/2052955960.jpg', ''),
(12, 'Mobile Phones', 'HTC', 'HTC Seven Eight Nine', 7898789, 'Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligula mollis id. Maecenas ut tincidunt ex. Suspendisse rutrum, leo in posuere cursus, sapien quam finibus velit, at mattis felis eros ut sapien. Nulla facilisi. Etiam accumsan iaculis magna et maximus. Suspendisse velit nibh, laoreet hendrerit ipsum eget, placerat mattis nulla. Etiam ornare nunc vel odio sollicitudin, vel consectetur leo imperdiet. Aliquam in lorem nulla. ', '', 'FALSE', 'product_thumbnails/1037717271.jpg', ''),
(13, 'Mobile Phones', 'HTC', 'HTC One Minus One', 1, 'Curabitur et justo tincidunt, interdum ante ut, aliquam dui. Nam blandit libero sem, eget placerat massa aliquet sit amet. Aenean at mi et ex eleifend pharetra quis eu odio. Integer ullamcorper suscipit dolor, porttitor maximus diam lobortis sed. Morbi ut tristique risus. Aliquam dictum fermentum egestas. Pellentesque ac mauris neque. Phasellus molestie leo sit amet ullamcorper ultricies. Sed et augue diam. ', '', 'FALSE', 'product_thumbnails/666293752.jpg', ''),
(14, 'Mobile Phones', 'HTC', 'HTC Galaxy G3', 127612, 'Praesent id odio massa. Sed vestibulum justo sit amet fringilla condimentum. Maecenas eu sapien non ipsum malesuada tempor in eget orci. Nunc id est mauris. Suspendisse maximus dolor iaculis nulla pretium aliquet. Vestibulum nec quam non tortor vulputate suscipit. Maecenas felis massa, euismod et risus quis, ultrices hendrerit sapien. Donec felis arcu, convallis ut iaculis nec, aliquet quis est. ', '', 'FALSE', 'product_thumbnails/1245610551.jpg', ''),
(15, 'Mobile Phones', 'Apple', 'Apple IPhone 10', 10000, 'Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. Mauris id eros sed sapien molestie elementum. Curabitur id suscipit dolor, laoreet fringilla est. Mauris malesuada, velit placerat ultricies pulvinar, arcu mi laoreet felis, et mollis felis est non ex. Cras id volutpat arcu. Nunc suscipit lorem et aliquet hendrerit. Vestibulum vitae ante vel mauris scelerisque imperdiet eu in neque. Phasellus sed fringilla tortor, ut auctor nunc.', '', 'FALSE', 'product_thumbnails/1029744574.jpg', ''),
(16, 'Mobile Phones', 'Apple', 'Apple IApple 7+', 12000, 'Quisque non egestas ligula, id cursus erat. Aliquam nisi tortor, porta eu aliquet blandit, vestibulum ac magna. Etiam fringilla vulputate odio, quis vulputate ligula mollis id. Maecenas ut tincidunt ex. Suspendisse rutrum, leo in posuere cursus, sapien quam finibus velit, at mattis felis eros ut sapien. Nulla facilisi. Etiam accumsan iaculis magna et maximus. Suspendisse velit nibh, laoreet hendrerit ipsum eget', '', 'FALSE', 'product_thumbnails/745243000.jpg', ''),
(17, 'Mobile Phones', 'Apple', 'IApple Phone', 345423, 'Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. Mauris id eros sed sapien molestie elementum. Curabitur id suscipit dolor, laoreet fringilla est. Mauris malesuada, velit placerat ultricies pulvinar, arcu mi laoreet felis, et mollis felis est non ex. Cras id volutpat arcu. Nunc suscipit lorem et alique', '', 'FALSE', 'product_thumbnails/13222131.jpg', ''),
(18, 'Mobile Phones', 'LG', 'LG G6 Cafe', 32100, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim.', '', 'FALSE', 'product_thumbnails/1247250587.jpg', ''),
(19, 'Mobile Phones', 'LG', 'LG GL GN', 40000, 'Fusce porta arcu non ipsum luctus, et porttitor arcu dictum. In ligula mauris, pellentesque eget molestie ac, bibendum vitae quam. Proin id elementum est. Mauris id eros sed sapien molestie elementum. Curabitur id suscipit dolor, laoreet fringilla est. Mauris malesuada, velit placerat ultricies pulvinar, arcu mi laoreet felis, et mollis felis est non ex. Cras id volutpat arcu. Nunc suscipit lorem et aliquet hendrerit. Vestibulum vitae ante vel mauris scelerisque imperdiet eu in neque. Phasellus sed fringilla tortor, ut auctor nunc. ', '', 'FALSE', 'product_thumbnails/741350255.jpg', ''),
(20, 'Tablets', 'Samsung', 'Samsung Galaxy Tab', 10000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/592967250.jpg', ''),
(21, 'Tablets', 'Samsung', 'Samsung Galaxy Orange', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/361123981.jpg', ''),
(22, 'Tablets', 'Apple', 'Apple iPad Helium', 30000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/1642196710.jpg', ''),
(27, 'TV', 'Sony', 'Sony Bravia 2000', 20000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales eleifend dolor id pretium. Aliquam sit amet bibendum eros. Donec mollis, leo in porttitor ornare, tellus ipsum tincidunt dui, nec congue lacus nulla ac ante. Fusce vulputate pellentesque turpis, non iaculis turpis bibendum id. Suspendisse auctor porta ligula non vestibulum. Donec vestibulum, erat vitae tincidunt tincidunt, nibh augue faucibus massa, a facilisis risus augue vel ligula. Aenean at nunc eu massa porttitor luctus. Curabitur nec varius turpis. Integer faucibus rutrum urna a dignissim. ', '', 'FALSE', 'product_thumbnails/154023209.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_slides`
--

CREATE TABLE IF NOT EXISTS `product_slides` (
`ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Slide` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `product_slides`
--

INSERT INTO `product_slides` (`ID`, `Product_ID`, `Slide`) VALUES
(1, 1, 'product_slides/2027933185.jpg'),
(2, 1, 'product_slides/994018673.jpg'),
(3, 1, 'product_slides/434592667.jpg'),
(4, 2, 'product_slides/824442753.jpg'),
(5, 2, 'product_slides/167597693.jpg'),
(6, 2, 'product_slides/2111341422.jpg'),
(7, 3, 'product_slides/2027700729.jpg'),
(8, 3, 'product_slides/390704648.jpg'),
(9, 3, 'product_slides/612513671.jpg'),
(10, 4, 'product_slides/1170403330.jpg'),
(11, 4, 'product_slides/920581124.jpg'),
(12, 4, 'product_slides/1420248654.jpg'),
(13, 5, 'product_slides/842875062.jpg'),
(14, 5, 'product_slides/1436830746.jpg'),
(15, 5, 'product_slides/704150073.jpg'),
(16, 6, 'product_slides/781212890.jpg'),
(17, 6, 'product_slides/543352329.jpg'),
(18, 6, 'product_slides/1846012551.jpg'),
(19, 7, 'product_slides/597526033.jpg'),
(20, 7, 'product_slides/1286880077.jpg'),
(21, 7, 'product_slides/1803501365.jpg'),
(22, 8, 'product_slides/1238490390.jpg'),
(23, 8, 'product_slides/1892048346.jpg'),
(24, 8, 'product_slides/2132636937.jpg'),
(25, 9, 'product_slides/1504187871.jpg'),
(26, 9, 'product_slides/660448455.jpg'),
(27, 9, 'product_slides/1195248259.jpg'),
(28, 10, 'product_slides/833386977.jpg'),
(29, 10, 'product_slides/604532904.jpg'),
(30, 10, 'product_slides/1721962330.jpg'),
(31, 11, 'product_slides/352533275.jpg'),
(32, 11, 'product_slides/1584833397.jpg'),
(33, 11, 'product_slides/985218482.jpg'),
(34, 12, 'product_slides/495644769.jpg'),
(35, 12, 'product_slides/1386909894.jpg'),
(36, 12, 'product_slides/2125613240.jpg'),
(37, 13, 'product_slides/22806415.jpg'),
(38, 13, 'product_slides/1627568425.jpg'),
(39, 13, 'product_slides/1807996590.jpg'),
(40, 14, 'product_slides/1587786824.jpg'),
(41, 14, 'product_slides/1276543138.jpg'),
(42, 14, 'product_slides/207587375.jpg'),
(43, 15, 'product_slides/857589206.jpg'),
(44, 15, 'product_slides/1777497024.jpg'),
(45, 15, 'product_slides/368388157.jpg'),
(46, 16, 'product_slides/426696336.jpg'),
(47, 16, 'product_slides/727178725.jpg'),
(48, 16, 'product_slides/539523633.jpg'),
(49, 17, 'product_slides/480010717.jpg'),
(50, 17, 'product_slides/816951133.jpg'),
(51, 17, 'product_slides/167909048.jpg'),
(52, 18, 'product_slides/219291372.jpg'),
(53, 18, 'product_slides/2020159452.jpg'),
(54, 18, 'product_slides/475442958.jpg'),
(55, 19, 'product_slides/1570133773.jpg'),
(56, 19, 'product_slides/1353174786.jpg'),
(57, 19, 'product_slides/585947541.jpg'),
(58, 20, 'product_slides/1676960519.jpg'),
(59, 20, 'product_slides/1151636325.jpg'),
(60, 20, 'product_slides/1484084888.jpg'),
(61, 21, 'product_slides/359411954.jpg'),
(62, 21, 'product_slides/1576622416.jpg'),
(63, 22, 'product_slides/778920464.jpg'),
(64, 22, 'product_slides/840561924.jpg'),
(65, 22, 'product_slides/1238596802.jpg'),
(66, 23, 'product_slides/1866346146.jpg'),
(67, 23, 'product_slides/826648898.jpg'),
(68, 23, 'product_slides/53982694.jpg'),
(69, 24, 'product_slides/309458455.jpg'),
(70, 24, 'product_slides/90051645.jpg'),
(71, 24, 'product_slides/700480472.jpg'),
(72, 23, 'product_slides/1726214312.jpg'),
(73, 23, 'product_slides/633572221.jpg'),
(74, 26, 'product_slides/667785487.jpg'),
(75, 26, 'product_slides/323895297.jpg'),
(76, 26, 'product_slides/226065423.jpg'),
(77, 27, 'product_slides/2004971559.jpg'),
(78, 27, 'product_slides/1718472463.jpg'),
(79, 27, 'product_slides/873911490.jpg'),
(80, 28, 'product_slides/1195043986.jpg'),
(81, 28, 'product_slides/1424442646.jpg');

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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `product_slides`
--
ALTER TABLE `product_slides`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
