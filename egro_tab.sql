-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2012 at 12:00 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `eagro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `egro_tab`
--

CREATE TABLE IF NOT EXISTS `egro_tab` (
  `sl` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `price` int(30) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `egro_tab`
--

INSERT INTO `egro_tab` (`sl`, `code`, `price`, `name`) VALUES
('1', '101', 152, 'corn seeds'),
('2', '102', 235, 'wheat'),
('3', '103', 350, 'gram seeds'),
('4', '104', 255, 'rice seeds'),
('5', '105', 235, 'Pulse seed'),
('6', '106', 258, 'Beens seed'),
('7', '107', 735, 'Cabbage seeds'),
('8', '108', 935, 'Onion seeds'),
('9', '109', 2353, 'Mushroom Seeds'),
('10', '110', 1353, 'Tomato seeds'),
('11', '111', 350, 'Tomato insectiside'),
('12', '112', 355, 'Brinjal insectiside'),
('13', '113', 2350, 'corn insectiside'),
('14', '114', 3005, 'grain insectiside'),
('15', '115', 2395, 'Insect traper'),
('16', '116', 1235, 'Electro magnetic sen'),
('17', '117', 135, 'Hand Shears'),
('18', '118', 5, 'leg damage Band'),
('19', '119', 2335, 'Sprayer'),
('20', '120', 586, 'Rain Gauge');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `name` varchar(20) NOT NULL,
  `code` int(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`name`, `code`, `price`) VALUES
('corn seeds', 101, 152),
('Mushroom Seeds', 109, 2353),
('Brinjal insectiside', 112, 355),
('Hand Shears', 117, 135);
