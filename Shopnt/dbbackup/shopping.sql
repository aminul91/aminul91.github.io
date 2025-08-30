-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 06:20 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_name`
--

CREATE TABLE IF NOT EXISTS `category_name` (
  `category_id` int(6) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(25) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category_name`
--

INSERT INTO `category_name` (`category_id`, `category_name`) VALUES
(1, 'cloth'),
(2, 'shoe'),
(3, 'Electronics-item'),
(4, 'furnitures'),
(5, 'BAG'),
(6, 'ornaments'),
(7, 'clock'),
(8, 'Food'),
(12, 'combind-shop'),
(13, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `forget`
--

CREATE TABLE IF NOT EXISTS `forget` (
  `reqeust_id` int(5) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  PRIMARY KEY (`reqeust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `market_info`
--

CREATE TABLE IF NOT EXISTS `market_info` (
  `market_id` int(8) NOT NULL AUTO_INCREMENT,
  `market_name` varchar(25) NOT NULL,
  `location` varchar(30) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `images` varchar(220) NOT NULL,
  PRIMARY KEY (`market_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `market_info`
--

INSERT INTO `market_info` (`market_id`, `market_name`, `location`, `Description`, `images`) VALUES
(1, 'basundhar city', 'panthopoth', 'The 8th stroied modern shopping complex. huge market for mobile , pc and cloth, and all other things. have food court and cineplex at 7th floor.', ''),
(2, 'Jamuna future park', 'baridhara', 'Multi shopping complex. The biggest shopping complex of Bangladesh.Available every kinds of products. have food court and modern cine complex. Have also way of amusement and park .', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(150) NOT NULL AUTO_INCREMENT,
  `product_type_id` int(10) NOT NULL,
  `category_id` int(12) NOT NULL,
  `shop_id` int(12) NOT NULL,
  `product_class` int(2) NOT NULL,
  `brand_name` varchar(25) NOT NULL,
  `price` varchar(80) NOT NULL,
  `product_description` varchar(250) DEFAULT NULL,
  `product_image` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_type_id`, `category_id`, `shop_id`, `product_class`, `brand_name`, `price`, `product_description`, `product_image`) VALUES
(7, 1, 1, 23, 2, 'Baishakh', '1499', 'panjabi ', 'download.jpg'),
(13, 1, 1, 23, 1, 'Baishakh', '1599', 'men`s long panajabi', 'images5.jpg'),
(16, 3, 1, 26, 2, 'Rez Style', '1232', 'men`s shirt', 'Being-Human-Clothing-Blue-Solid-Slim-Fit-Polo-T-Shirt-4565-493945-1-catalog.jpg'),
(17, 7, 1, 26, 0, 'Rez Style', '400', 'Men`s polo shirt', 'Being-Human-Clothing-Printed-Blue-Slim-Fit-Polo-T-Shirt-0347-241725-1-catalog.jpg'),
(18, 4, 1, 28, 2, 'Hathe Hathe Boutiques', '1400', 'Star Crinckle Chiffon Lawn', '749-C.jpg'),
(20, 1, 1, 2, 0, 'High choice ', '1900', 'serwani of joy silk', 'images.jpg'),
(21, 34, 2, 30, 0, 'shoe world', '1212', 'sdsd', 'Chrysanthemum.jpg'),
(24, 1, 1, 2, 1, 'High choice ', '1200', 'long panjabi', 'images1.jpg'),
(25, 2, 1, 2, 1, 'High choice ', '2300', 'Shari Exclusive collection for female', '2200.jpg'),
(26, 2, 1, 2, 0, 'High choice ', '2400', 'Exclusive silk', '2300.jpg'),
(33, 4, 1, 2, 0, 'High choice ', '100', 'tshirt', 'Pepe-Jeans-White-Casual-Shirts-2004-489994-1-catalog.jpg'),
(34, 3, 1, 2, 0, 'High choice ', '1560', 'shari', 'Pepe-Jeans-Black-Casual-Shirts-6107-889994-1-catalog.jpg'),
(35, 6, 1, 2, 0, 'High choice ', '450', 'alki', 'Product635411936682788000.jpeg'),
(36, 3, 1, 25, 0, 'smart fashion', '1600', 'Formal shirt with exclusive cotton', '1450.jpeg'),
(37, 3, 1, 25, 1, 'smart fashion', '1800', 'cotton ', '1650.jpeg'),
(38, 3, 1, 25, 0, 'smart fashion', '1450', 'short formal ', '1789.jpeg'),
(40, 7, 1, 38, 1, 'Replica fashion', '299', 'product ID: General Lee  specification:  fabric: high quality cotton fine wash: silicon-enzyme wash neck: round neck color: Blue print: rubber print (best quality assurance, heat pressed)  size:S, M, L, XL  price: Tk.299 only. (delivery in dhaka )', '1937493_555556971240634_8857850712291014549_n.jpg'),
(41, 7, 1, 38, 1, 'Replica fashion', '299', 'High quality cotton Fine WASH:- silicon enzyme wash', '10645016_572539616209036_8098915079045133640_n.jpg'),
(42, 7, 1, 38, 0, 'Replica fashion', '299', 'Product ID :- samurai sword Febric:- high quality cotton fine Size :- S M L XL', '10733997_572539886209009_1293305778423154241_n.jpg'),
(43, 7, 1, 38, 0, 'Replica fashion', '300', 'Product ID: General Lee Specification:  Made in Bangladesh Fabric: High quality cotton fine Wash: Silicon-enzyme wash Neck: Round neck Color: Dark blue Print: Rubber print (Best quality assurance, heat pressed)  Size: S,M,L,XL', '10600667_550550435074621_2507698107926366364_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_name`
--

CREATE TABLE IF NOT EXISTS `product_name` (
  `product_type_id` int(15) NOT NULL AUTO_INCREMENT,
  `category_id` int(6) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  PRIMARY KEY (`product_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `product_name`
--

INSERT INTO `product_name` (`product_type_id`, `category_id`, `product_name`) VALUES
(1, 1, 'panjabi'),
(2, 1, 'shari'),
(3, 1, 'shirt'),
(4, 1, 'salwar-kamiz'),
(5, 1, 'pant'),
(6, 1, 'skirt'),
(7, 1, 'T-SHIRT'),
(8, 4, 'Dinning-table'),
(9, 4, 'BED'),
(12, 4, 'Almari'),
(13, 4, 'Table'),
(16, 4, 'show-case'),
(17, 4, 'sofa'),
(20, 4, 'Chair'),
(21, 4, 'shoe-stand'),
(22, 1, 'other'),
(23, 4, 'other-furni'),
(24, 3, 'mobile-phone'),
(25, 3, 'TV'),
(26, 3, 'laptop'),
(27, 3, 'tablet-pc'),
(28, 3, 'Refrizaretor'),
(29, 3, 'sound-box'),
(30, 3, 'mouse'),
(31, 3, 'key-board'),
(32, 3, 'micro-oven'),
(33, 3, 'AC'),
(34, 2, 'Menz-shoe'),
(35, 2, 'ladies-shoe'),
(36, 2, 'children-shoe'),
(39, 12, 'cloth'),
(40, 12, 'show-piece'),
(41, 12, 'Ornaments'),
(42, 12, 'toys'),
(43, 12, 'shoe'),
(44, 12, 'Daily accessories'),
(45, 12, 'perfumes'),
(46, 12, 'bag'),
(47, 12, 'card'),
(53, 3, 'other-product'),
(55, 6, 'Gold'),
(56, 6, 'Silver'),
(57, 6, 'Diamond'),
(58, 6, 'other-types'),
(63, 7, 'menz-clock'),
(64, 7, 'womenz-clock'),
(65, 7, 'wall-clock'),
(66, 5, 'bag'),
(67, 8, 'food'),
(68, 12, 'Mobile'),
(69, 12, 'Clock'),
(70, 12, 'food'),
(71, 12, 'Other-Product'),
(72, 12, 'Electronic-items'),
(73, 13, 'shop-product');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `shop_id` int(12) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(25) DEFAULT NULL,
  `class` int(2) NOT NULL DEFAULT '0',
  `owner_name` varchar(25) NOT NULL,
  `Location` varchar(60) DEFAULT NULL,
  `contact_number` varchar(25) NOT NULL,
  `contact_email` varchar(25) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `brand_des` varchar(300) NOT NULL,
  `category_id` int(20) NOT NULL,
  `item_number` int(20) DEFAULT NULL,
  `logo_image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`shop_id`, `brand_name`, `class`, `owner_name`, `Location`, `contact_number`, `contact_email`, `user_name`, `password`, `brand_des`, `category_id`, `item_number`, `logo_image`) VALUES
(2, 'High choice ', 0, 'hellow', 'mugdapara', 'hellow', 'sumon2907@yahoo.com', 'hellow', 'hellow', 'hellow', 1, NULL, NULL),
(23, 'Baishakh', 1, 'Md. Mahmudul Hasan', '23,Rampura DIT road,dhaka-1219', '01987345672', 'baishakh@gmail.com', 'baishakh123', '123456', 'Baishakh is a panjabi brand with a variety of different ', 1, NULL, NULL),
(25, 'smart fashion', 1, 'minhaj', 'Shantinogor', '01761838040', 'minhaz@yahoo.com', 'minhaz', 'minhaz', 'Smart style for smart people .Home delivery is available just order if choice', 1, NULL, NULL),
(26, 'Rez Style', 1, 'Md. Aminul Islam', '23,Rampura DIT road,dhaka-1219', '01987345672', 'jahid.tn@gmail.com', 'rez1234', '123456', 'Authetic panjabi store', 1, NULL, NULL),
(27, 'Bohudur Collection', 0, 'bohudur.com', 'shop.bohudur.com', '01620114141', 'job@bohudur.com', 'bohudur', '139413', 'Exclusive and High Quality Products ', 12, NULL, NULL),
(28, 'Hathe Hathe Boutiques', 1, 'Delwar Hossain', '83/1 Sabujbagh, 1st Lane, Boddho Mondir, Bashabo, Dhaka.', '01616150016,  01919416866', 'delwar.1429@yahoo.com', 'delwar', 'delwar1429', 'We provide all kinds of Women''s Fashion wear, Pakistani Lawn Three Pieces, Indian Designer Salwar Kameej, Exclusive Designer Sharee, Bed Sheet, varities Handicrafts etc.', 1, NULL, NULL),
(29, 'Ahona Furniture', 1, 'Anisuddin Ahmed ', '48, Narinda Road, 1100 Dhaka, Bangladesh', '+8801783279227', 'anisuddin.santu@gmail.com', 'anisuddin.santu', 'anis!!santu!!', 'At AHONA we believe the design and manufacture of truly original, high-quality furniture is the result of passion, care, design integrity, experience, craftsmanship and an unfaltering dedication to quality. This commitment could not be realised without fully integrating the design and manufacturing ', 4, NULL, NULL),
(30, 'shoe world', 0, 'faruk', 'badda', '44233', 'sds@yahoo.com', 'faruk', 'faruk1', 'fdfdfdf', 2, NULL, NULL),
(31, 'electro', 1, 'razu', 'rampura', '2323', 'razu@yahoo.com', 'razu', 'razu123', '', 3, NULL, NULL),
(32, 'Vai Vai jwelers', 0, 'Sarwar', 'Banasree', '01933489193', 'sumon2907@gmail.com', 'sarwar123', 'sarwar123', 'Vai vai jwelerse is a jwelery shop where you can give order for any kinds of ornaments.Price will be discussed on basis of type and design.For gorgeous ornaments just give call.', 6, NULL, NULL),
(33, 'my watch', 0, 'mehedi', 'dhanmondi', '00123', 'mehedi@yahoo.com', 'mehedi', 'mehedi', '', 7, NULL, NULL),
(34, 'my bag', 0, 'raz', 'Banasree', '2323', 'razu@yahoo.com', 'raz', 'razraz', '', 5, NULL, NULL),
(35, 'khana resipi', 0, 'fahim', 'razbari', '232323', 'fahim@yahoo.com', 'fahim', '123456', '', 8, NULL, NULL),
(36, 'aqurium house', 0, 'riaz', 'badda', '43435', 'riaz@yahoo.com', 'riaz', 'riazriaz', '', 13, NULL, NULL),
(37, 'pierre cardin, ornate,', 0, 'dalims leather. mr. abdus', 'dalims leather, 6.super "a" market. baitul mokarrom.dhaka.  ', 'dalims -9555906', 'tuhin.airtel.tuhin@gmail.', 'tuhin', '01911938523', 'now get this good product. pierre cardin, ornate, lojel, all bages item. trolly bag. office bag. ladies bag. school & college bag. travaling bag,  leather bag', 5, NULL, NULL),
(38, 'Replica fashion', 0, 'Rafiur rahman (Rumel)', 'H-55 South banasree Goran dhaka', '01817619847', 'rafiur_rhmn@yahoo.com', 'rumel', '123456', 'We manufacture our products to our exact specifications. Countless hours are spent creating fashion forward masterpieces. we also take orders from buyer''s own specification. We base our reputation on excellence and quality of all products', 1, NULL, NULL),
(40, 'all band Mobile & Accesso', 0, 'Md. Abdus Sakur Bhyuin (S', '5/37 (5th Floor) Eastern Plus Shopping Complex,145, Shantina', '01814734338,01922653204', 'hotboysohel@yahoo.com', 'Sohel', '232323', '', 13, NULL, NULL),
(42, '', 0, '', '', '', '', '', '', '', 0, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
