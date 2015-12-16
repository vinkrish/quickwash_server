-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2015 at 01:12 AM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vingelin_quickwash`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `alternate_mobile` text,
  `email` text,
  `address` text NOT NULL,
  `pincode` text NOT NULL,
  `date` text NOT NULL,
  `service` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `mobile`, `alternate_mobile`, `email`, `address`, `pincode`, `date`, `service`) VALUES
(1, 'Vinay Krishna', '9886547445', '123456789', 'vinaykrishna1989@gmail.com', 'Bangalore', '560036', '13-12-2015 ', 'Wash + Iron'),
(2, 'Angel May Dupee', '1442583690', '987654321', 'angelkrishna@mail.com', 'Mooers', '560037', '13-12-2015 ', 'Dryclean'),
(3, 'guldu', '9999999999', '', '', 'Harishchandra Ghat', '560048', '13-12-2015 ', 'Iron');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
