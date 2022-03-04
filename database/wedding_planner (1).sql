-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 09:38 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wedding_planner`
--
CREATE DATABASE IF NOT EXISTS `wedding_planner` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wedding_planner`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(255) NOT NULL AUTO_INCREMENT,
  `register_id` int(255) NOT NULL,
  `caterer_id` int(255) NOT NULL,
  `decor_id` int(100) NOT NULL,
  `event_id` int(255) NOT NULL,
  `hotel_id` int(255) NOT NULL,
  `mehandi_id` int(255) NOT NULL,
  `music_id` int(255) NOT NULL,
  `parlour_id` int(255) NOT NULL,
  `photo_id` int(255) NOT NULL,
  `cake_id` int(10) NOT NULL,
  `card_id` int(10) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `register_id`, `caterer_id`, `decor_id`, `event_id`, `hotel_id`, `mehandi_id`, `music_id`, `parlour_id`, `photo_id`, `cake_id`, `card_id`, `venue`, `date`, `timestamp`, `deleted`) VALUES
(1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ajantha Lawns, Jalgaon', '2019-05-31', '2019-05-25 06:47:45', 0),
(2, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sindhi Colony, Jalgaon', '2019-06-10', '2019-05-25 06:47:45', 0),
(3, 2, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'Ajantha Lawns, Jalgaon', '2019-05-31', '2019-05-25 06:47:45', 0),
(4, 2, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Omkar Lawns, Jalgaon', '2019-05-31', '2019-05-25 06:47:45', 0),
(5, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 'Ajantha Lawns, Jalgaon', '2019-05-31', '2019-05-25 06:47:45', 0),
(6, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Sindhi Colony, Jalgaon', '2019-05-29', '2019-05-25 06:47:45', 0),
(7, 2, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 'Sindhi Colony, Jalgaon', '2019-05-30', '2019-05-25 06:47:45', 0),
(8, 2, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'Ajantha Lawns, Jalgaon', '2019-05-31', '2019-05-25 06:47:45', 0),
(9, 2, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 'Ajantha Lawns, Jalgaon', '2019-05-31', '2019-05-25 06:47:45', 0),
(10, 2, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'Ajantha Lawns, Jalgaon', '2019-05-31', '2019-05-25 06:47:45', 0),
(11, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'Sindhi Colony, Jalgaon', '2019-05-25', '2019-05-25 06:47:45', 0),
(12, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Suyog Colony, Jalgaon', '2019-06-10', '2019-06-03 07:22:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE IF NOT EXISTS `cakes` (
  `cake_id` int(100) NOT NULL AUTO_INCREMENT,
  `cake_shop_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`cake_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`cake_id`, `cake_shop_name`, `address`, `city`, `contact_person`, `mobile`, `email`, `type`, `rate`, `logo`, `deleted`) VALUES
(1, 'bebakers', 'khote nagar jalgaon', 'jalgaon', 'lalita patil', '9156237573', 'bebakers@gmail.com', 'pineapple cake', 1000, '1-pineapple-cake.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `card_id` int(100) NOT NULL AUTO_INCREMENT,
  `card_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`card_id`, `card_name`, `address`, `city`, `contact_person`, `mobile`, `email`, `type`, `rate`, `logo`, `deleted`) VALUES
(1, 'Kabra Cards', 'MIDC Ajantha Chowk', 'Jalgaon', 'Ajay Kabra', '8275517368', 'kabracards@gmail.com', 'letterpress wedding card', 50, '1-kabra-cards-navi-peth-jalgaon-jalgaon-wedding-card-dealers-75312su.jpg', 0),
(2, 'Mayur Cards', 'MIDC Ajantha Chowk', 'Jalgaon', 'Mayur Sapkale', '8275517368', 'mayur@gmail.com', 'letterpress wedding card', 80, '2-mayur-cards-jalgaon-ho-jalgaon-wedding-card-printers-thm64sf.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `caterers`
--

CREATE TABLE IF NOT EXISTS `caterers` (
  `caterer_id` int(100) NOT NULL AUTO_INCREMENT,
  `caterer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `rate` int(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`caterer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `caterers`
--

INSERT INTO `caterers` (`caterer_id`, `caterer_name`, `address`, `city`, `contact_person`, `mobile`, `email`, `type`, `rate`, `logo`, `deleted`) VALUES
(1, 'Devine Decadent Catering', 'Ganesh Colony', 'Jalgaon', 'Varsha Sapkale', '8275517368', 'devine@caterer.com', 'maharashtrian', 160, '1-maharashtrian-cuisine.jpg', 0),
(2, 'All Occasion Catering', 'Mahabal Colony', 'Jalgaon', 'Varsha Sapkale', '8275517368', 'devine@caterer.com', 'bengali', 180, '2-547877-bhojohori-manna-sarakkijpg.jpg', 0),
(3, 'All Occasion Catering', 'Shiv Colony', 'Jalgaon', 'Varsha Sapkale', '8275517368', 'devine@caterer.com', 'gujrathi', 110, '3-Vegetarian-Gujarati-Caterers-978x650.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `deleted`) VALUES
(1, 'samiksha', 'samiksha@gmail.com', 'demo', 'demo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `decorations`
--

CREATE TABLE IF NOT EXISTS `decorations` (
  `decor_id` int(100) NOT NULL AUTO_INCREMENT,
  `decor_name` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `rate` int(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`decor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `decorations`
--

INSERT INTO `decorations` (`decor_id`, `decor_name`, `address`, `city`, `contact_person`, `mobile`, `email`, `type`, `rate`, `logo`, `deleted`) VALUES
(1, 'Jay Ambe Flower', 'Suyog colony', 'Jalgaon', 'Lalita Patil', '8275517368', 'jayambeflower@info.com', 'open', 20000, 'decor.jpg', 0),
(2, 'Flower World', 'Shiv Colony', 'Jalgaon', 'Bhavna Sarode', '8275517368', 'flowerworld@info.com', 'close', 21000, '2-decor1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_planners`
--

CREATE TABLE IF NOT EXISTS `event_planners` (
  `event_id` int(100) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event_planners`
--

INSERT INTO `event_planners` (`event_id`, `company_name`, `address`, `city`, `contact_person`, `mobile`, `email`, `logo`, `deleted`) VALUES
(1, 'Softanic Solutions', 'Suyog Colony', 'Jalgaon', 'Alpesh Patil', '827551368', 'alpesh@gmail.com', '1-SSPL NEW LOGO PNG.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_id` int(100) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rate` int(10) NOT NULL,
  `capacity` int(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `address`, `city`, `contact_person`, `mobile`, `email`, `rate`, `capacity`, `logo`, `deleted`) VALUES
(1, 'Royal Palace', 'Ramdas Colony', 'Jalgaon', 'Prasad Neve', '8275517368', 'royalpalace@gmail.com', 50000, 200, '1-royal-palace.jpg', 0),
(2, 'Cozy Cottage', 'Near Reliance Petrol pump', 'Jalgaon', 'Alpesh Patil', '8275517368', 'cozycottage@gmail.com', 40000, 200, '2-hotel-crazy-home.jpg', 0),
(3, 'Step Inn', 'Ring Road', 'Jalgaon', 'Varsha Sapkale', '8275517368', 'stepinn@info.com', 60000, 200, '3-stepinn.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mehandi`
--

CREATE TABLE IF NOT EXISTS `mehandi` (
  `mehandi_id` int(100) NOT NULL AUTO_INCREMENT,
  `mehandi_class_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`mehandi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mehandi`
--

INSERT INTO `mehandi` (`mehandi_id`, `mehandi_class_name`, `address`, `city`, `contact_person`, `mobile`, `email`, `type`, `rate`, `logo`, `deleted`) VALUES
(1, 'Priya  mehandi class', 'Shiv Colony,Jalgaon', 'jalgaon', 'Varsha Sapkale', '9156237573', 'priya@gmail.com', 'bengal design', 1000, '1-hqdefault (1).jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `music_id` int(255) NOT NULL AUTO_INCREMENT,
  `music_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `music_type` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `deleted` int(255) NOT NULL,
  PRIMARY KEY (`music_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_id`, `music_name`, `address`, `city`, `contact_person`, `contact`, `email`, `music_type`, `rate`, `photo`, `deleted`) VALUES
(1, 'demo', 'demo', 'demo', 'demo', '1234567890', 'music@gmail.com', 'maharashtrian', '2000', '1-dp.jpg', 1),
(2, 'XYZ', 'xyz', 'xyz', 'xyz', '8087743167', 'xyzmusic@gmail.com', 'BAND', '3000', '', 1),
(3, 'lalita', 'PL-08, S.NO 484/5/A, M J COLLEGE, SUYOG COLONY, JALGAON, MAHARASHTRA, INDIA 425001', 'JALGAON', 'lalita', '8275331362', 'laita@gmail.com', 'ORCHESTRA', '3000', '', 1),
(4, 'mayur', 'pl-108,ganpati nagar,jalgaon', 'jalgaon', 'mayur', '8087743167', 'mayurmusic@gmail.com', 'DJ', '2300', '4-music.jpg', 0),
(5, 'XYZ', 'xyz', 'xyz', 'varsha', '8275517368', 'xyz@gmail.com', 'ORCHESTRA', '15000', '5-dp.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parlours`
--

CREATE TABLE IF NOT EXISTS `parlours` (
  `parlour_id` int(100) NOT NULL AUTO_INCREMENT,
  `parlour_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `for` varchar(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`parlour_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `parlours`
--

INSERT INTO `parlours` (`parlour_id`, `parlour_name`, `address`, `city`, `contact_person`, `mobile`, `email`, `for`, `rate`, `logo`, `deleted`) VALUES
(1, 'Vaishnavi Beauty Parlour', 'Ring Road', 'Jalgaon', 'Shipa Rane', '8275517368', 'vaishnavi@beauty.com', 'bride', 15000, '1-card4.jpg', 0),
(2, 'Vikky Mens Parlour', 'Suyog Colony', 'Jalgaon', 'Vikky Patil', '8275517368', 'vikky@gmail.com', 'groom', 1000, '2-vikky.jpg', 0),
(3, 'Javed Habib Hair & Beauty', 'Near D-mart', 'Jalgaon', 'Javed Habib', '8275517368', 'javedhabib@beauty.com', 'both', 20000, '3-1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE IF NOT EXISTS `photographers` (
  `photo_id` int(100) NOT NULL AUTO_INCREMENT,
  `studio_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`photo_id`, `studio_name`, `address`, `city`, `contact_person`, `mobile`, `email`, `logo`, `deleted`) VALUES
(1, 'Rainbow Photo Studio', 'Near Stedium', 'Jalgaon', 'Alpesh Patil', '8275517368', 'rainbow@info.com', '1-rainbow.jpg', 0),
(2, 'Ek Aathavan', 'Mohadi Road', 'Jalgaon', 'Sumit Deshmukh', '8275517368', 'sumit@info.com', '2-sumit.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(100) NOT NULL,
  `decor_id` int(100) NOT NULL,
  `photo_id` int(100) NOT NULL,
  `parlour_id` int(100) NOT NULL,
  `caterer_id` int(10) NOT NULL,
  `card_id` int(10) NOT NULL,
  `music_id` int(255) NOT NULL,
  `mehandi_id` int(255) NOT NULL,
  `cake_id` int(255) NOT NULL,
  `event_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `deleted` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `hotel_id`, `decor_id`, `photo_id`, `parlour_id`, `caterer_id`, `card_id`, `music_id`, `mehandi_id`, `cake_id`, `event_id`, `name`, `mobile_no`, `email`, `username`, `password`, `type`, `deleted`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Admin', '', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0),
(2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Royal Palace', '8275517368', 'royalpalace@gmail.com', '8275517368', 'ec4e862906cc5517f45f11085a7d977d', 'hotel', 0),
(3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Cozy Cottage', '8275517368', 'cozycottage@gmail.com', '8275517368', 'dadd9d671a072b60eb42c74ea5e6bf32', 'hotel', 0),
(4, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Step Inn', '8275517368', 'stepinn@info.com', '8275517368', 'a06b85c661af3802ccd6f7e81f388d11', 'hotel', 0),
(5, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Jay Ambe Flower', '8275517368', 'jayambeflower@info.com', '8275517368', '33c5b652810afc6a6551bcb381ccd72f', 'decor', 0),
(6, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'Flower World', '8275517368', 'flowerworld@info.com', '8275517368', '827ccb0eea8a706c4c34a16891f84e7b', 'decor', 0),
(7, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 'Rainbow Photo Studio', '8275517368', 'rainbow@info.com', '8275517368', '7200fa5cf7f37473de17f2f500fcbae5', 'photo', 0),
(8, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 'Ek Aathavan', '8275517368', 'sumit@info.com', '8275517368', 'e11e93dc81880608a8b6f09f330b1504', 'photo', 0),
(9, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 'Aishwarya Beauty Parlour', '8275517368', 'aishwarya@beauty.com', '8275517368', '456091673a8d2fe9817d994a54c5b5e8', 'parlour', 0),
(10, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'Vikky Mens Parlour', '8275517368', 'vikky@gmail.com', '8275517368', 'ccf7e1f75924bb0f72475b4c1c173e8a', 'parlour', 0),
(11, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 'Javed Habib Hair & Beauty', '8275517368', 'javedhabib@beauty.com', '8275517368', '827ccb0eea8a706c4c34a16891f84e7b', 'parlour', 0),
(12, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Devine Decadent Caterers', '8275517368', 'devine@caterer.com', '8275517368', '827ccb0eea8a706c4c34a16891f84e7b', 'caterer', 0),
(13, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 'All Occasion Catering', '8275517368', 'devine@caterer.com', '8275517368', '81dc9bdb52d04dc20036dbd8313ed055', 'caterer', 0),
(14, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 'All Occasion Catering', '8275517368', 'devine@caterer.com', '8275517368', 'ce82c5f03f98efab781fd1c108e87de4', 'caterer', 0),
(15, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Kabra Cards', '8275517368', 'kabracards@gmail.com', '8275517368', '881f55ccbb4060bdb3238de42e367497', 'card', 0),
(16, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 'Mayur Cards', '8275517368', 'mayur@gmail.com', '8275517368', 'c4f4b2eb6d63dd4dd8afed001c61c956', 'card', 0),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Softanic Solutions', '7218252007', 'alpesh@gmail.com', '7218252007', 'e899cf3072761c2c8d5ed0202fb08d56', 'event planner', 0),
(18, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 'priya  mehandi class', '9156237573', 'priya@gmail.com', '9156237573', '0b11fbf924f55ff90f11a112e6bc5ce2', 'mehandi', 0),
(19, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'demo', '1234567890', 'music@gmail.com', '1234567890', 'fe01ce2a7fbac8fafaed7c982a04e229', 'music', 0),
(20, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 'xyz', '8087743167', 'xyzmusic@gmail.com', '8087743167', 'd16fb36f0911f878998c136191af705e', 'music', 0),
(21, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 'lalita', '8275331362', 'laita@gmail.com', '8275331362', 'd06d4e5b40ceaacc69454cf769114a34', 'music', 0),
(22, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 'mayur', '8087743167', 'mayurmusic@gmail.com', '8087743167', 'c4f4b2eb6d63dd4dd8afed001c61c956', 'music', 0),
(23, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 'priya  mehandi class', '9156237573', 'priya@gmail.com', '9156237573', '81dc9bdb52d04dc20036dbd8313ed055', 'mehandi', 0),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'bebakers', '9156237573', 'bebakers@gmail.com', '9156237573', 'c6a6465cb5bb72f8bce57755e05a1718', 'cake', 0),
(27, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 'XYZ', '8275517368', 'xyz@gmail.com', '8275517368', 'e65075d550f9b5bf9992fa1d71a131be', 'music', 0);

-- --------------------------------------------------------

--
-- Table structure for table `website_users`
--

CREATE TABLE IF NOT EXISTS `website_users` (
  `register_id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted` int(100) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `website_users`
--

INSERT INTO `website_users` (`register_id`, `Name`, `contact`, `email`, `username`, `password`, `deleted`) VALUES
(1, 'samiksha', '8087743167', 'samiksha@gmail.com', 'samiksha', '825cf084f9fe84596c47bbe01cacec92', 0),
(2, 'Varsha Sapkale', '8275517368', 'varshasapkale1996@gmail.com', 'varsha', 'ff2f87e3b76f13788e41d6feae7c5dbb', 0),
(3, 'Varsha Sapkale', '8275517368', 'varsha@gmail.com', 'varsha', 'ff2f87e3b76f13788e41d6feae7c5dbb', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
