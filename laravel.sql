-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2015 at 04:08 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `name` varchar(32) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `id`, `created_at`, `updated_at`, `email`) VALUES
('rasel', 1, 1440564202, 1441739714, 'raselahmed95@gmail.com'),
('rasel', 6, 1441734265, 1441739732, 'amunshi824@gmail.com'),
('ashik', 7, 1441734270, 1441739742, 'amunshi824@gmail.com'),
('kawser', 8, 1441734280, 1441739736, 'amunshi824@gmail.com'),
('salam', 21, 1441739548, 1441741823, 'rasel@gmaol.com'),
('aslam', 22, 1441741869, 1441741869, 'alikawser1994@gmail.com'),
('Rasel', 23, 1441745431, 1441745431, 'amunshi824@gmail.com'),
('aslam', 24, 1441749473, 1441749473, 'ashikmunshi17@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
