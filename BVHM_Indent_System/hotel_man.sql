-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2019 at 07:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel_man`
--

-- --------------------------------------------------------

--
-- Table structure for table `hm_product`
--

CREATE TABLE IF NOT EXISTS `hm_product` (
  `pname` varchar(38) DEFAULT NULL,
  `price` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hm_product`
--

INSERT INTO `hm_product` (`pname`, `price`) VALUES
('Morde Chocolate White Compound 400 gms', 120),
('Morde Chocolate Milk Compound 400 gms', 100),
('Morde Chocolate Dark Compound 400 gms', 80),
('Chocolate chips', 200),
('Masterline Margarine', 1985),
('baking powder 100 gms', 100),
('cocoa powder', 240),
('Rich Whipping Cream', 600),
('Tropolite Whipping Cream', 180),
('Dry Yeast 500 gms', 170),
('society tea', 335),
('bru coffee 50 gms', 89),
('Cornfllakes 250 gms', 95),
('Tata salt', 20),
('Pink Salt', 380),
('Sugar', 43),
('ajino moto', 160),
('pani puri', 80),
('papad garlic', 60),
('papad udad', 60),
('bread crumbs', 180),
('custard powder 100 GMS', 30),
('fusili pasta 500gm', 90),
('Lasangne sheet', 300),
('pasta spagetthi 500 gms', 110),
('penne pasta 500gm', 90),
('macroni pasta', 90),
('spring roll sheet', 80),
('french fries 2.5Kg.', 260),
('garlic peeled', 80),
('maida', 36),
('corn flour', 60),
('besan', 100),
('Makke ka Atta', 60),
('Whole Wheat Flour Atta', 50),
('Nachani Flour', 50),
('bajri Flour', 70),
('jawar flour', 75),
('black vattaN/A', 90),
('chanN/A dal', 90),
('chanN/A kabuli', 150),
('chanN/A roasted', 140),
('Chowli', 105),
('lapsi (broken wheat)', 65),
('makhaN/A 250gm', 75),
('masoor dal', 80),
('masoor whole', 190),
('matki', 140),
('moogn dal', 130),
('moogh whole', 160),
('poha jada', 65),
('rajma', 125),
('rawa', 35),
('Sela basmati', 62),
('rice flour', 70),
('sabudaN/A', 80),
('Tur Dal', 142),
('Urad dal', 124),
('Urad Dal whole', 120),
('Idli Rawa 500 gms', 42),
('vattaN/A white', 90),
('dalda', 980),
('oil coconut 1 Ltr.', 235),
('oil mustard 1 Ltr.', 110),
('oil sunflower refined 15 Ltr.', 1100),
('Gowardhan Ghee 500 gms', 265),
('oil white til', 180),
('black til', 280),
('kismis black', 335),
('kismis brown', 375),
('kuskus poppy seed', 690),
('coconut dry', 250),
('coconut powder', 290),
('charmagaj', 235),
('Walnut', 1250),
('almond badam', 725),
('charoli nuts', 975),
('kaju broken', 500),
('kaju kani', 470),
('kaju whole', 750),
('Tutti Frutti', 95),
('pista', 1800),
('pizza cheese', 360),
('mustard seed', 70),
('Jeera', 280),
('shah jeera 25 gms', 30),
('Everest jeera powder 100 gms', 56),
('Everest Jeera Powder 1 Kg.', 260),
('Kalonji', 250),
('kasuri methi 50gm', 25),
('kesar', 195),
('methi seeds 25 gms', 15),
('Javitri 25 gms', 30),
('dagad pool 25 gms', 25),
('dhania powder everest/MDH 100 gms', 56),
('Dhania Pwder 1 Kg.', 140),
('dhania whole', 110),
('CinN/Amon 25 gms', 17),
('Cloves 25 gms', 20),
('chat masala 100 gms', 65),
('chilli bedki', 175),
('chilli goal', 250),
('Everest chilli kashmiri powder 100 gms', 50),
('Everest chilli kashmiri powder 1 Kg.', 430),
('chilli kashmiri whole', 185),
('Everest Tikha Lal 100 gms', 26),
('Everest Tikha Lal 1 Kg.', 250),
('amchur powder 50gm', 35),
('badi saunf', 160),
('bayleaf', 340),
('bedki red chilli', 175),
('black pepper', 495),
('Everestt black pepper powder 50 gms', 80),
('Ajwain 25 gms', 30),
('Biryani Masala 100 gm', 90),
('Chat Masala 50 gm', 35),
('Chicken Masala 100 mm', 70),
('Chole Masala', 65),
('Garam Masala 50 gm Everest/ MDH', 40),
('Goda Masala', 60),
('Kitchen King 100 gm', 65),
('Meat Masala 100 gm', 70),
('Pav-Bhaji Masala 100 gm', 65),
('Pickle', 110),
('Sambar Masala', 70),
('Tandoori Masala', 70),
('dabeli masala', 65),
('Thyme Dry', 100),
('imli', 120),
('jaggery', 55),
('onion powder', 450),
('jaifal', 10),
('sweet chilly sauce', 180),
('oyster sauce', 180),
('peprika', 100),
('oregano', 100),
('jam mix fruit 1 Kg.', 180),
('capers', 135),
('black bean sauce', 200),
('gherkins (imported)', 135),
('black olives seedless', 180),
('Green Olives seedless', 185),
('hioisen sause', 250),
('Woh''s up Light Soya Sauce', 210),
('Woh''s up Dark Soya Sauce', 210),
('honey 250gm', 150),
('tomato puree', 120),
('Tomato Paste 850 gm', 100),
('Vinegar White 750 ml', 650),
('Alphasno Mango- tin', 180),
('Apple Juice Real', 90),
('Apricot Jam', 80),
('Baked Beans', 160),
('Cherry Tin', 210),
('cranberry juice', 90),
('fruit cocktail tin', 1580),
('mango juice real', 90),
('mayonN/Aise veg', 150),
('mushroom tin', 160),
('mustard paste 100gm', 80),
('mustard powder 50 gms', 120),
('peach tin', 280),
('pineapple Slice', 130),
('pineapple crush', 210),
('pineapple juice real', 90),
('red chilli sauce big', 60),
('red wine 750ml', 430),
('rose syrup', 160),
('sauce black beans btl', 200),
('sauce fish btl', 240),
('schezwan sauce', 150),
('soya sauce big btl', 150),
('tomato juice real', 90),
('tomato ketchup', 100),
('Hot & Sweet Tomato Sauce Maggi', 150),
('balsamic vinegar', 280),
('barbeque sauce 1.2', 240),
('tobasco sauce 80ml', 150),
('american corn', 100),
('Vim Bar', 40),
('Vim liquid 1.5 Ltr.', 310),
('Gala Scrubber', 25),
('Garbage Bag (Industrial Big Dustbin)', 100),
('CIF', 180),
('Sunny Phenyl', 140),
('Dettol Liquid', 260),
('Collins Spray', 90),
('Dettol Handwash refill', 210),
('Steel Scrubber', 100),
('Dry Mop', 140),
('Dry Mop with handle', 265),
('Wet Mop', 80),
('Wet Mop with handle', 130),
('Long Handle Wiper', 150),
('aluminium foil big', 180),
('Cling Wrap', 100),
('Wonton (300gms pkt)', 150),
('Scampi', 700),
('Squid Frozen', 550),
('Prawns Frozen(16-20)', 850),
('Prawns Frozen(26-30)', 650),
('Basa fillet', 230),
('Pomfret Black(500gms)', 750),
('Pomfret Silver(300gms)', 900),
('Surmai(Whole)', 600),
('Mutton Kheema 1kg', 690),
('Mutton Boneless 1kg', 690),
('Mutton with bone 1kg', 490),
('Spring roll sheet 215mm(550 gms)', 200),
('Avocado frozen 1kg', 650),
('Salmon trim', 1550),
('Smoked salmon 1kg', 1850),
('Lotus Leaf Bun(400 gms)', 210),
('Chicken curry cut 1kg', 190),
('Chicken Breast Boneless 1kg', 280),
('Dry Yeast 500gms', 0);

-- --------------------------------------------------------

--
-- Table structure for table `indent`
--

CREATE TABLE IF NOT EXISTS `indent` (
  `indent` int(11) DEFAULT NULL,
  `kitchen_type` varchar(22) DEFAULT NULL,
  `todays_date` date DEFAULT NULL,
  `required_on` date DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verified` char(1) DEFAULT 'n',
  `faculty` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m`
--

CREATE TABLE IF NOT EXISTS `m` (
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

CREATE TABLE IF NOT EXISTS `product` (
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
