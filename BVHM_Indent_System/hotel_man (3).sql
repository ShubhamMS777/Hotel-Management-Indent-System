-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 09:19 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_man`
--

-- --------------------------------------------------------

--
-- Table structure for table `hm_product`
--

CREATE TABLE `hm_product` (
  `id` int(11) NOT NULL,
  `pname` varchar(22) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hm_product`
--

INSERT INTO `hm_product` (`id`, `pname`, `price`) VALUES
(1, 'onion', 30),
(2, 'milk', 58),
(3, 'potato', 70),
(4, 'garam masala', 10);

-- --------------------------------------------------------

--
-- Table structure for table `indent`
--

CREATE TABLE `indent` (
  `indent` int(11) DEFAULT NULL,
  `kitchen_type` varchar(22) DEFAULT NULL,
  `todays_date` date DEFAULT NULL,
  `required_on` date DEFAULT NULL,
  `id` int(11) NOT NULL,
  `verified` char(1) DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indent`
--

INSERT INTO `indent` (`indent`, `kitchen_type`, `todays_date`, `required_on`, `id`, `verified`) VALUES
(1, 'B', '2019-08-06', '2019-08-11', 2, 'n'),
(5, 'A', '2019-08-06', '0000-00-00', 3, 'n'),
(420, 'C', '2019-08-07', '2019-08-12', 4, 'n'),
(421, 'C', '2019-08-07', '2019-08-11', 5, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `m`
--

CREATE TABLE `m` (
  `items` varchar(22) DEFAULT NULL,
  `brand` varchar(22) DEFAULT NULL,
  `degree` varchar(22) DEFAULT NULL,
  `A` int(11) DEFAULT NULL,
  `B` int(11) DEFAULT NULL,
  `C` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `indent` int(30) NOT NULL,
  `items` text NOT NULL,
  `brand` text NOT NULL,
  `degree` varchar(22) NOT NULL,
  `req_quan` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `issued` int(11) DEFAULT NULL,
  `remark` text,
  `s_rate` int(11) DEFAULT NULL,
  `s_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `indent`, `items`, `brand`, `degree`, `req_quan`, `rate`, `amount`, `issued`, `remark`, `s_rate`, `s_amount`) VALUES
(1, 1, 'onion', '', 'kg', 2, 30, 60, 2, 'abc', 35, NULL),
(2, 1, 'garam masala', '', 'grams', 2, 10, 20, 2, NULL, NULL, NULL),
(1, 5, 'onion', '', 'kg', 2, 30, 60, 2, 'SK', 32, 60),
(1, 420, 'onion', '', 'kg', 1, 30, 30, 2, 'hi', 2, 4),
(2, 420, 'milk', '', 'litre', 1, 58, 58, 2, NULL, 58, 116),
(1, 421, 'onion', '', 'kg', 2, 30, 60, 1, 'onion ka bhav bad gaya', 35, 35),
(2, 421, 'milk', '', 'litre', 5, 58, 290, 5, NULL, 58, 290);

-- --------------------------------------------------------

--
-- Table structure for table `_2019_07_16_`
--
-- Error reading structure for table hotel_man._2019_07_16_: #1932 - Table 'hotel_man._2019_07_16_' doesn't exist in engine
-- Error reading data for table hotel_man._2019_07_16_: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hotel_man`.`_2019_07_16_`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `_2019_07_17_`
--

CREATE TABLE `_2019_07_17_` (
  `items` varchar(22) DEFAULT NULL,
  `brand` varchar(22) DEFAULT NULL,
  `degree` varchar(22) DEFAULT NULL,
  `A` int(11) DEFAULT NULL,
  `B` int(11) DEFAULT NULL,
  `C` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_2019_07_17_`
--

INSERT INTO `_2019_07_17_` (`items`, `brand`, `degree`, `A`, `B`, `C`, `quantity`) VALUES
('milk', 'none', 'litre', 1, 2, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `_2019_07_18_`
--

CREATE TABLE `_2019_07_18_` (
  `items` varchar(22) DEFAULT NULL,
  `brand` varchar(22) DEFAULT NULL,
  `degree` varchar(22) DEFAULT NULL,
  `A` int(11) DEFAULT '0',
  `B` int(11) DEFAULT '0',
  `C` int(11) DEFAULT '0',
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_2019_07_18_`
--

INSERT INTO `_2019_07_18_` (`items`, `brand`, `degree`, `A`, `B`, `C`, `quantity`) VALUES
('milk', 'none', 'litre', 1, 2, 0, 3),
('milk', 'none', 'litre', 1, 2, 0, 3),
('milk', 'none', 'litre', 1, 2, 0, 3),
('garam masala', 'none', 'kg', 0, 0, 2, 2),
('onion', 'none', 'kg', 2, 0, 0, 2),
('garam masala', 'none', 'grams', 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `_2019_08_01_`
--

CREATE TABLE `_2019_08_01_` (
  `items` varchar(22) DEFAULT NULL,
  `brand` varchar(22) DEFAULT NULL,
  `degree` varchar(22) DEFAULT NULL,
  `A` int(11) DEFAULT '0',
  `B` int(11) DEFAULT '0',
  `C` int(11) DEFAULT '0',
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_2019_08_01_`
--

INSERT INTO `_2019_08_01_` (`items`, `brand`, `degree`, `A`, `B`, `C`, `quantity`) VALUES
('garam masala', 'none', 'kg', 1, 0, 2, 3),
('onion', 'none', 'kg', 2, 0, 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hm_product`
--
ALTER TABLE `hm_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indent`
--
ALTER TABLE `indent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indent`
--
ALTER TABLE `indent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
