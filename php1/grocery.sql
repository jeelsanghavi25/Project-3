-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 06:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(20) NOT NULL,
  `pid` int(3) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `pid` int(2) DEFAULT NULL,
  `price` int(3) DEFAULT NULL,
  `image` varchar(22) DEFAULT NULL,
  `name` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`pid`, `price`, `image`, `name`) VALUES
(3, 202, 'images\\peach.jpg', 'Peach'),
(4, 252, 'images\\grapple.jpg', 'Green Apple'),
(5, 224, 'images\\strawberry.jpg', 'Strawberry'),
(6, 95, 'images\\orange.jpg', 'Orange'),
(7, 270, 'images\\kiwi.jpg', 'Kiwi'),
(8, 250, 'images\\peas.jpg', 'Green Peas'),
(9, 175, 'images\\onion.jpg', 'Onion'),
(10, 87, 'images\\potato.jpg', 'Potato'),
(11, 65, 'images\\carrot.jpg', 'Carrot'),
(12, 50, 'images\\ladyfinger.jpg', 'Lady Finger'),
(13, 42, 'images\\bellpeppers.jpg', 'Bell Peppers'),
(14, 68, 'images\\brinjal.jpg', 'Brinjal'),
(15, 42, 'images\\butter.jpg', 'Butter'),
(16, 117, 'images\\cheese.jpg', 'Cheese'),
(17, 87, 'images\\paneer.jpg', 'Cottage Cheese'),
(18, 65, 'images\\cream.jpg', 'Cream'),
(19, 30, 'images\\milk.jpg', 'Milk'),
(20, 50, 'images\\egg.jpg', 'Eggs'),
(21, 68, 'images\\curd.jpg', 'Curd'),
(22, 260, 'images\\wheat.jpg', 'Wheat'),
(23, 120, 'images\\chickpeas.jpg', 'Chickpeas'),
(24, 350, 'images\\rice.jpg', 'Rice'),
(25, 95, 'images\\chilli.jpg', 'Chilli'),
(26, 34, 'images\\salt.jpg', 'Salt'),
(27, 74, 'images\\oil.jpg', 'Oil'),
(28, 224, 'images\\spices.jpg', 'All Spices'),
(29, 190, 'images\\sugar.jpg', 'Sugar'),
(30, 270, 'images\\pasta1.jpg', 'Pasta'),
(31, 120, 'images\\loaf.jpg', 'Bread Loaf'),
(32, 90, 'images\\jam.jpg', 'Jam'),
(1, 320, 'images\\lichi.jpg', 'Lichi'),
(2, 120, 'images\\cherry.jpg', 'Cherry');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `active` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `active`) VALUES
('aaa', 'aaa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `active` int(3) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `hash`, `password`, `active`, `address`) VALUES
('aaa', 'meetishah13@gmail.com', '98d6f58ab0dafbb86b083a001561bb34', 'aaaaaaaa', 0, 'hellooo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
