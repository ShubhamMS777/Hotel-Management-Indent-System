-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 09:19 AM
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
  `pname` varchar(38) DEFAULT NULL,
  `price` int(4) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hm_product`
--

INSERT INTO `hm_product` (`pname`, `price`, `category`, `id`) VALUES
('Morde Chocolate White Compound 400 gms', 120, 'fish', 1),
('Morde Chocolate Milk Compound 400 gms', 100, 'fish', 2),
('Morde Chocolate Dark Compound 400 gms', 80, 'grocery', 3),
('Chocolate chips', 200, 'grocery', 4),
('Masterline Margarine', 1985, 'grocery', 5),
('baking powder 100 gms', 100, 'grocery', 6),
('cocoa powder', 240, 'grocery', 7),
('Rich Whipping Cream', 600, 'grocery', 8),
('Tropolite Whipping Cream', 180, 'grocery', 9),
('Dry Yeast 500 gms', 170, 'grocery', 10),
('society  tea', 335, 'grocery', 11),
('bru coffee 50 gms', 89, 'grocery', 12),
('Cornfllakes 250 gms', 95, 'grocery', 13),
('Tata salt', 20, 'grocery', 14),
('Pink Salt', 380, 'grocery', 15),
('Sugar', 43, 'grocery', 16),
('ajino moto', 160, 'grocery', 17),
('pani puri', 80, 'grocery', 18),
('papad garlic', 60, 'grocery', 19),
('papad udad', 60, 'grocery', 20),
('bread crumbs', 180, 'grocery', 21),
('custard powder 100 GMS', 30, 'grocery', 22),
('fusili pasta 500gm', 90, 'grocery', 23),
('Lasangne sheet', 300, 'grocery', 24),
('pasta spagetthi 500 gms', 110, 'grocery', 25),
('penne pasta 500gm', 90, 'grocery', 26),
('macroni pasta', 90, 'grocery', 27),
('spring roll sheet', 80, 'grocery', 28),
('french fries 2.5Kg.', 260, 'grocery', 29),
('garlic peeled', 80, 'grocery', 30),
('maida', 36, 'grocery', 31),
('corn flour', 60, 'grocery', 32),
('besan', 100, 'grocery', 33),
('Makke ka Atta', 60, 'grocery', 34),
('Whole Wheat Flour Atta', 50, 'grocery', 35),
('Nachani Flour', 50, 'grocery', 36),
('bajri Flour', 70, 'grocery', 37),
('jawar flour', 75, 'grocery', 38),
('black vattaN/A', 90, 'grocery', 39),
('chanN/A dal', 90, 'grocery', 40),
('chanN/A kabuli', 150, 'grocery', 41),
('chanN/A roasted', 140, 'grocery', 42),
('Chowli', 105, 'grocery', 43),
('lapsi (broken wheat)', 65, 'grocery', 44),
('makhaN/A 250gm', 75, 'grocery', 45),
('masoor dal', 80, 'grocery', 46),
('masoor whole', 190, 'grocery', 47),
('matki', 140, 'grocery', 48),
('moogn dal', 130, 'grocery', 49),
('moogh whole', 160, 'grocery', 50),
('poha jada', 65, 'grocery', 51),
('rajma', 125, 'grocery', 52),
('rawa', 35, 'grocery', 53),
('Sela basmati', 62, 'grocery', 54),
('rice flour', 70, 'grocery', 55),
('sabudaN/A', 80, 'grocery', 56),
('Tur Dal', 142, 'grocery', 57),
('Urad dal', 124, 'grocery', 58),
('Urad Dal whole', 120, 'grocery', 59),
('Idli Rawa 500 gms', 42, 'grocery', 60),
('vattaN/A white', 90, 'grocery', 61),
('dalda', 980, 'grocery', 62),
('oil coconut 1 Ltr.', 235, 'grocery', 63),
('oil mustard 1 Ltr.', 110, 'grocery', 64),
('oil sunflower refined 15 Ltr.', 1100, 'grocery', 65),
('Gowardhan Ghee 500 gms', 265, 'grocery', 66),
('oil white til', 180, 'grocery', 67),
('black til', 280, 'grocery', 68),
('kismis black', 335, 'grocery', 69),
('kismis brown', 375, 'grocery', 70),
('kuskus poppy seed', 690, 'grocery', 71),
('coconut dry', 250, 'grocery', 72),
('coconut powder', 290, 'grocery', 73),
('charmagaj', 235, 'grocery', 74),
('Walnut', 1250, 'grocery', 75),
('almond badam', 725, 'grocery', 76),
('charoli nuts', 975, 'grocery', 77),
('kaju broken', 500, 'grocery', 78),
('kaju kani', 470, 'grocery', 79),
('kaju whole', 750, 'grocery', 80),
('Tutti Frutti', 95, 'grocery', 81),
('pista', 1800, 'grocery', 82),
('pizza cheese', 360, 'grocery', 83),
('mustard seed', 70, 'grocery', 84),
('Jeera', 280, 'grocery', 85),
('shah jeera 25 gms', 30, 'grocery', 86),
('Everest jeera powder 100 gms', 56, 'grocery', 87),
('Everest Jeera Powder 1 Kg.', 260, 'grocery', 88),
('Kalonji', 250, 'grocery', 89),
('kasuri methi 50gm', 25, 'grocery', 90),
('kesar', 195, 'grocery', 91),
('methi seeds 25 gms', 15, 'grocery', 92),
('Javitri 25 gms', 30, 'grocery', 93),
('dagad pool 25 gms', 25, 'grocery', 94),
('dhania powder everest/MDH 100 gms', 56, 'grocery', 95),
('Dhania Pwder 1 Kg.', 140, 'grocery', 96),
('dhania whole', 110, 'grocery', 97),
('CinN/Amon 25 gms', 17, 'grocery', 98),
('Cloves 25 gms', 20, 'grocery', 99),
('chat masala 100 gms', 65, 'grocery', 100),
('chilli bedki', 175, 'grocery', 101),
('chilli goal', 250, 'grocery', 102),
('Everest chilli kashmiri powder 100 gms', 50, 'grocery', 103),
('Everest chilli kashmiri powder 1 Kg.', 430, 'grocery', 104),
('chilli kashmiri whole', 185, 'grocery', 105),
('Everest Tikha Lal 100 gms', 26, 'grocery', 106),
('Everest Tikha Lal 1 Kg.', 250, 'grocery', 107),
('amchur powder 50gm', 35, 'grocery', 108),
('badi saunf', 160, 'grocery', 109),
('bayleaf', 340, 'grocery', 110),
('bedki red chilli', 175, 'grocery', 111),
('black pepper', 495, 'grocery', 112),
('Everestt black pepper powder 50 gms', 80, 'grocery', 113),
('Ajwain 25 gms', 30, 'grocery', 114),
('Biryani Masala 100 gm', 90, 'grocery', 115),
('Chat Masala 50 gm', 35, 'grocery', 116),
('Chicken Masala 100 mm', 70, 'grocery', 117),
('Chole Masala', 65, 'grocery', 118),
('Garam Masala 50 gm Everest/ MDH', 40, 'grocery', 119),
('Goda Masala', 60, 'grocery', 120),
('Kitchen King 100 gm', 65, 'grocery', 121),
('Meat Masala 100 gm', 70, 'grocery', 122),
('Pav-Bhaji Masala 100 gm', 65, 'grocery', 123),
('Pickle', 110, 'grocery', 124),
('Sambar Masala', 70, 'grocery', 125),
('Tandoori Masala', 70, 'grocery', 126),
('dabeli masala', 65, 'grocery', 127),
('Thyme Dry', 100, 'grocery', 128),
('imli', 120, 'grocery', 129),
('jaggery', 55, 'grocery', 130),
('onion powder', 450, 'grocery', 131),
('jaifal', 10, 'grocery', 132),
('sweet chilly sauce', 180, 'grocery', 133),
('oyster sauce', 180, 'grocery', 134),
('peprika', 100, 'grocery', 135),
('oregano', 100, 'grocery', 136),
('jam mix fruit 1 Kg.', 180, 'grocery', 137),
('capers', 135, 'grocery', 138),
('black bean sauce', 200, 'grocery', 139),
('gherkins (imported)', 135, 'grocery', 140),
('black olives seedless', 180, 'grocery', 141),
('Green Olives seedless', 185, 'grocery', 142),
('hioisen sause', 250, 'grocery', 143),
('Woh\'s up Light Soya Sauce', 210, 'grocery', 144),
('Woh\'s up Dark Soya Sauce', 210, 'grocery', 145),
('honey 250gm', 150, 'grocery', 146),
('tomato puree', 120, 'grocery', 147),
('Tomato Paste 850 gm', 100, 'grocery', 148),
('Vinegar White 750 ml', 650, 'grocery', 149),
('Alphasno Mango- tin', 180, 'grocery', 150),
('Apple Juice Real', 90, 'grocery', 151),
('Apricot Jam', 80, 'grocery', 152),
('Baked Beans', 160, 'grocery', 153),
('Cherry Tin', 210, 'grocery', 154),
('cranberry juice', 90, 'grocery', 155),
('fruit cocktail tin', 1580, 'grocery', 156),
('mango juice real', 90, 'grocery', 157),
('mayonN/Aise veg', 150, 'grocery', 158),
('mushroom tin', 160, 'grocery', 159),
('mustard paste 100gm', 80, 'grocery', 160),
('mustard powder 50 gms', 120, 'grocery', 161),
('peach tin', 280, 'grocery', 162),
('pineapple Slice', 130, 'grocery', 163),
('pineapple crush', 210, 'grocery', 164),
('pineapple juice real', 90, 'grocery', 165),
('red chilli sauce big', 60, 'grocery', 166),
('red wine 750ml', 430, 'grocery', 167),
('rose syrup', 160, 'grocery', 168),
('sauce black beans btl', 200, 'grocery', 169),
('sauce fish btl', 240, 'grocery', 170),
('schezwan sauce', 150, 'grocery', 171),
('soya sauce big btl', 150, 'grocery', 172),
('tomato juice real', 90, 'grocery', 173),
('tomato ketchup', 100, 'grocery', 174),
('Hot & Sweet Tomato Sauce Maggi', 150, 'grocery', 175),
('balsamic vinegar', 280, 'grocery', 176),
('barbeque sauce 1.2', 240, 'grocery', 177),
('tobasco sauce 80ml', 150, 'grocery', 178),
('american corn', 100, 'grocery', 179),
('Vim Bar', 40, 'grocery', 180),
('Vim liquid 1.5 Ltr.', 310, 'grocery', 181),
('Gala Scrubber', 25, 'grocery', 182),
('Garbage Bag (Industrial Big Dustbin)', 100, 'grocery', 183),
('CIF', 180, 'grocery', 184),
('Sunny Phenyl', 140, 'grocery', 185),
('Dettol Liquid', 260, 'grocery', 186),
('Collins Spray', 90, 'grocery', 187),
('Dettol Handwash refill', 210, 'grocery', 188),
('Steel Scrubber', 100, 'grocery', 189),
('Dry Mop', 140, 'grocery', 190),
('Dry Mop with handle', 265, 'grocery', 191),
('Wet Mop', 80, 'grocery', 192),
('Wet Mop with handle', 130, 'grocery', 193),
('Long Handle Wiper', 150, 'grocery', 194),
('aluminium foil big', 180, 'grocery', 195),
('Cling Wrap', 100, 'grocery', 196),
('Wonton (300gms pkt)', 150, 'grocery', 197),
('Scampi', 700, 'grocery', 198),
('Squid Frozen', 550, 'grocery', 199),
('Prawns Frozen(16-20)', 850, 'grocery', 200),
('Prawns Frozen(26-30)', 650, 'grocery', 201),
('Basa fillet', 230, 'grocery', 202),
('Pomfret Black(500gms)', 750, 'fish', 203),
('Pomfret Silver(300gms)', 900, 'fish', 204),
('Surmai(Whole)', 600, 'fish', 205),
('Mutton Kheema 1kg', 690, 'grocery', 206),
('Mutton Boneless 1kg', 690, 'grocery', 207),
('Mutton with bone 1kg', 490, 'grocery', 208),
('Spring roll sheet 215mm(550 gms)', 200, 'grocery', 209),
('Avocado frozen 1kg', 650, 'grocery', 210),
('Salmon trim', 1550, 'grocery', 211),
('Smoked salmon 1kg', 1850, 'grocery', 212),
('Lotus Leaf Bun(400 gms)', 210, 'grocery', 213),
('Chicken curry cut 1kg', 190, 'grocery', 214),
('Chicken Breast Boneless 1kg', 280, 'grocery', 215);

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
  `verified` char(1) DEFAULT 'n',
  `faculty` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `s_amount` int(11) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_2019_08_14_`
--

CREATE TABLE `_2019_08_14_` (
  `items` varchar(22) DEFAULT NULL,
  `brand` varchar(22) DEFAULT NULL,
  `degree` varchar(22) DEFAULT NULL,
  `ATK` int(11) DEFAULT '0',
  `BTK` int(11) DEFAULT '0',
  `QTK` int(11) DEFAULT '0',
  `FNB` int(11) DEFAULT '0',
  `RND` int(11) DEFAULT '0',
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_2019_08_19_`
--

CREATE TABLE `_2019_08_19_` (
  `items` varchar(22) DEFAULT NULL,
  `brand` varchar(22) DEFAULT NULL,
  `degree` varchar(22) DEFAULT NULL,
  `ATK` int(11) DEFAULT '0',
  `BTK` int(11) DEFAULT '0',
  `QTK` int(11) DEFAULT '0',
  `FNB` int(11) DEFAULT '0',
  `RND` int(11) DEFAULT '0',
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_2019_08_19_`
--

INSERT INTO `_2019_08_19_` (`items`, `brand`, `degree`, `ATK`, `BTK`, `QTK`, `FNB`, `RND`, `quantity`) VALUES
('Pink Salt', '', 'gm', 5, 0, 0, 0, 0, 5),
('Tata salt', '', 'kg', 1, 0, 0, 0, 0, 1),
('Chocolate chips', '', 'grams', 1, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `_2019_09_12_`
--

CREATE TABLE `_2019_09_12_` (
  `items` varchar(22) DEFAULT NULL,
  `brand` varchar(22) DEFAULT NULL,
  `degree` varchar(22) DEFAULT NULL,
  `ATK` int(11) DEFAULT '0',
  `BTK` int(11) DEFAULT '0',
  `QTK` int(11) DEFAULT '0',
  `FNB` int(11) DEFAULT '0',
  `RND` int(11) DEFAULT '0',
  `quantity` int(11) DEFAULT NULL,
  `issued` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_2019_09_12_`
--

INSERT INTO `_2019_09_12_` (`items`, `brand`, `degree`, `ATK`, `BTK`, `QTK`, `FNB`, `RND`, `quantity`, `issued`) VALUES
('macroni pasta', '', 'kg', 2, 0, 2, 0, 0, 4, 3),
('Morde Chocolate Milk C', '', 'kg', 2, 0, 0, 0, 0, 2, 2),
('society tea', '', 'kg', 3, 0, 2, 0, 0, 5, 4),
('bru coffee 50 gms', '', 'gm', 2, 0, 1, 0, 0, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `_2019_09_14_`
--

CREATE TABLE `_2019_09_14_` (
  `items` varchar(22) DEFAULT NULL,
  `brand` varchar(22) DEFAULT NULL,
  `degree` varchar(22) DEFAULT NULL,
  `ATK` int(11) DEFAULT '0',
  `BTK` int(11) DEFAULT '0',
  `QTK` int(11) DEFAULT '0',
  `FNB` int(11) DEFAULT '0',
  `RND` int(11) DEFAULT '0',
  `quantity` int(11) DEFAULT NULL,
  `issued` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_2019_09_14_`
--

INSERT INTO `_2019_09_14_` (`items`, `brand`, `degree`, `ATK`, `BTK`, `QTK`, `FNB`, `RND`, `quantity`, `issued`) VALUES
('Rich Whipping Cream', '', 'kg', 0, 3, 0, 0, 0, 3, 3),
('Tata salt', '', 'kg', 0, 2, 2, 0, 0, 4, 4),
('Chocolate chips', '', 'kg', 0, 1, 6, 0, 0, 7, 7),
('Morde Chocolate White ', '', 'kg', 0, 2, 0, 0, 0, 2, 2),
('Morde Chocolate Milk C', '', 'gm', 0, 1, 0, 0, 0, 1, 1);

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
-- AUTO_INCREMENT for table `hm_product`
--
ALTER TABLE `hm_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `indent`
--
ALTER TABLE `indent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
