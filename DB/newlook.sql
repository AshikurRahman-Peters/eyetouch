-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 09:45 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newlook`
--

-- --------------------------------------------------------

--
-- Table structure for table `common_part`
--

CREATE TABLE `common_part` (
  `com_id` int(11) NOT NULL,
  `com_title` varchar(255) NOT NULL,
  `com_description` text NOT NULL,
  `com_image` text NOT NULL,
  `com_type` varchar(100) NOT NULL,
  `com_created_by` varchar(100) DEFAULT NULL,
  `com_created_date` datetime NOT NULL,
  `com_update_by` varchar(100) NOT NULL,
  `com_update_date` datetime NOT NULL,
  `com_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `common_part`
--

INSERT INTO `common_part` (`com_id`, `com_title`, `com_description`, `com_image`, `com_type`, `com_created_by`, `com_created_date`, `com_update_by`, `com_update_date`, `com_status`) VALUES
(1, 'WHY WE ARE SPECIAL..??', '<p>There is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.&nbsp;<br />\r\nThere is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.<br />\r\nThere is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING</p>', '3652d26238f982a20b9376fcb15a4be3.jpeg', '', NULL, '0000-00-00 00:00:00', '', '2019-04-28 12:56:15', 2),
(2, 'ABOUT OUR NEWLOOKSBD SHOPPY', '<p>There is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.</p>\r\n\r\n<p>There is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING</p>', '9f5b28539eebc4a4c49f1c9dcf42d5d8.jpg', 'aboutus', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(3, 'New Feature update', '<h3>NEW FEATURE</h3>', '267755be04fc6935a1056ae4ae4ad27e.jpeg', '', NULL, '0000-00-00 00:00:00', '', '2019-04-28 12:00:15', 2),
(4, 'WHY WE ARE SPECIAL..??', '<p>There is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.&nbsp;<br />\r\nThere is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.<br />\r\nThere is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.</p>', '8198bc9e5d0dffb6823fba473364c00d.jpeg', 'whychoose', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `username`, `pass`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(11, 'Liton Sutradhar', 'liton@gmail.com', 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(12, 'fayez update', 'fayez@gmail.com', 'fayez', '25d55ad283aa400af464c76d713c07ad', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` varchar(100) NOT NULL,
  `update_by` datetime NOT NULL,
  `update_date` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `title`, `image`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(1, 'Brand one', '617324023a0da04872d6e94aac682470.png', NULL, '29-04-2019 06:35:30', '0000-00-00 00:00:00', '', 1),
(2, 'Brand two', '80560cd26970456226d875022866c9dd.png', NULL, '29-04-2019 07:11:03', '0000-00-00 00:00:00', '', 1),
(3, 'Brand three', '46fa3be10b3d23c393c95c2533882cf0.jpg', NULL, '29-04-2019 07:14:11', '0000-00-00 00:00:00', '2019-04-29 07:22:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `pro_title` varchar(300) DEFAULT NULL,
  `pro_description` text,
  `pro_image` text NOT NULL,
  `pro_price` float NOT NULL,
  `pro_old_price` float NOT NULL,
  `pro_status` int(11) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `pro_quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `pro_id`, `cat_id`, `pro_title`, `pro_description`, `pro_image`, `pro_price`, `pro_old_price`, `pro_status`, `s_id`, `pro_quantity`) VALUES
(4, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'dc4c1fc75bc7c88f80de7c9e64683111.jpg', 450, 500, 1, '6fmi4bk850d4rkcmkhptrn96bsgf215d', 0),
(5, 12, 11, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '346638a63e63c675bdacdee4c9d23981.jpg', 325, 420, 1, '6fmi4bk850d4rkcmkhptrn96bsgf215d', 0),
(6, 13, 13, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '1e2602675765a7251c1eb18bc8433d51.jpg', 360, 450, 1, 'ot07t88sv4s8gla9noro9mpv5n6psrnh', 0),
(7, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, 'ot07t88sv4s8gla9noro9mpv5n6psrnh', 0),
(8, 10, 8, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '0011c16d70133f8444c339fa79443e38.jpg', 150, 0, 1, 'ot07t88sv4s8gla9noro9mpv5n6psrnh', 0),
(9, 8, 11, 'Gabi Full Sleeve Sweatshirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9910d4e783e9f12cbeba9cbf89c31abd.jpg', 215, 326, 1, 'ot07t88sv4s8gla9noro9mpv5n6psrnh', 0),
(10, 12, 11, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '346638a63e63c675bdacdee4c9d23981.jpg', 325, 420, 1, 'ot07t88sv4s8gla9noro9mpv5n6psrnh', 0),
(11, 11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '4e18575e14c0dcfe2880a288b73bf993.jpg', 230, 330, 1, 'ot07t88sv4s8gla9noro9mpv5n6psrnh', 0),
(12, 13, 13, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '1e2602675765a7251c1eb18bc8433d51.jpg', 360, 450, 1, '80he931smbv4acjtbn7nnn4kuuotqok6', 0),
(13, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'imsdlkpr8eqhf7ggmk3astmufglad693', 0),
(14, 7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '7c23e294bfbe7f2914415128dc306172.jpg', 215, 325, 1, 'imsdlkpr8eqhf7ggmk3astmufglad693', 0),
(15, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, 'imsdlkpr8eqhf7ggmk3astmufglad693', 0),
(16, 10, 8, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '0011c16d70133f8444c339fa79443e38.jpg', 150, 0, 1, 'u114p32g6u5s3hh3qhec6joeires0fjh', 0),
(17, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'u114p32g6u5s3hh3qhec6joeires0fjh', 0),
(18, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'bkp1l9tqhsu6k1qqal8fgp18cvamlb3e', 0),
(19, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 'l1u3hbm9gdssf9ssr1hmooks1bfsdf87', 0),
(20, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'l1u3hbm9gdssf9ssr1hmooks1bfsdf87', 0),
(21, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 'u5vad32d5tvat3rarcki5goaces1ie2l', 0),
(22, 7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '7c23e294bfbe7f2914415128dc306172.jpg', 215, 325, 1, 'u5vad32d5tvat3rarcki5goaces1ie2l', 1),
(23, 7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '7c23e294bfbe7f2914415128dc306172.jpg', 215, 325, 1, 't3ophptr77kshret7v4pmj8khljhhe6n', 1),
(24, 10, 8, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '0011c16d70133f8444c339fa79443e38.jpg', 150, 0, 1, 't1domn2aemfko88lvtt0j5m3f80iv7ri', 1),
(25, 10, 8, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '0011c16d70133f8444c339fa79443e38.jpg', 150, 0, 1, 'up8b5h361jruho22qb92qf91q74sru10', 1),
(26, 8, 11, 'Gabi Full Sleeve Sweatshirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9910d4e783e9f12cbeba9cbf89c31abd.jpg', 215, 326, 1, 'up8b5h361jruho22qb92qf91q74sru10', 1),
(27, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'dc4c1fc75bc7c88f80de7c9e64683111.jpg', 450, 500, 1, 'up8b5h361jruho22qb92qf91q74sru10', 1),
(31, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 'job1aifamp023btj0iociadvqek2c0kd', 1),
(29, 12, 11, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '346638a63e63c675bdacdee4c9d23981.jpg', 325, 420, 1, 'fc9equ4f964odtvlo1sr4t4p4g02fm5d', 1),
(32, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'o494c0b138sr3749eahq2cm3kghqfvec', 1),
(33, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'dc4c1fc75bc7c88f80de7c9e64683111.jpg', 450, 500, 1, 'o494c0b138sr3749eahq2cm3kghqfvec', 1),
(34, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, '9iou091f7rmj53tlqd46sap7030nkq6a', 2),
(35, 8, 11, 'Gabi Full Sleeve Sweatshirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9910d4e783e9f12cbeba9cbf89c31abd.jpg', 215, 326, 1, '9iou091f7rmj53tlqd46sap7030nkq6a', 2),
(36, 7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '7c23e294bfbe7f2914415128dc306172.jpg', 215, 325, 1, '9iou091f7rmj53tlqd46sap7030nkq6a', 2),
(40, 8, 11, 'Gabi Full Sleeve Sweatshirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9910d4e783e9f12cbeba9cbf89c31abd.jpg', 215, 326, 1, '5eq9p7dnb23ttlv5tkk65oiiji91h6b7', 1),
(39, 10, 8, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '0011c16d70133f8444c339fa79443e38.jpg', 150, 0, 1, '5eq9p7dnb23ttlv5tkk65oiiji91h6b7', 1),
(41, 11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '4e18575e14c0dcfe2880a288b73bf993.jpg', 230, 330, 1, '5a0n0pngashhlvt6n30boso5302ej3u7', 9),
(42, 15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3433d27fc9a88a8bda600f12b8d42b40.jpg', 750, 0, 1, '5a0n0pngashhlvt6n30boso5302ej3u7', 1),
(43, 11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '4e18575e14c0dcfe2880a288b73bf993.jpg', 230, 330, 1, 'pgubgpd7l08imo7id9tc87qjklj6ipgq', 6),
(44, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'pgubgpd7l08imo7id9tc87qjklj6ipgq', 2),
(45, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 'pgubgpd7l08imo7id9tc87qjklj6ipgq', 1),
(46, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 'flniifsr67cnabeliovdoendid61tjf9', 6),
(47, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'flniifsr67cnabeliovdoendid61tjf9', 5),
(48, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, 'oa92qids72vtqnt4mc9iafkp2qdsm5sv', 1),
(49, 8, 11, 'Gabi Full Sleeve Sweatshirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9910d4e783e9f12cbeba9cbf89c31abd.jpg', 215, 326, 1, 'oa92qids72vtqnt4mc9iafkp2qdsm5sv', 2),
(50, 11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '4e18575e14c0dcfe2880a288b73bf993.jpg', 230, 330, 1, 'oa92qids72vtqnt4mc9iafkp2qdsm5sv', 1),
(51, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, 'li9a5tmjs8dqvtd4gl7s6ei32i4kktof', 2),
(52, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'dc4c1fc75bc7c88f80de7c9e64683111.jpg', 450, 500, 1, '851qirci0gaivi91m2teruuuio24713a', 1),
(54, 15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3433d27fc9a88a8bda600f12b8d42b40.jpg', 750, 0, 1, '851qirci0gaivi91m2teruuuio24713a', 2),
(55, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, '851qirci0gaivi91m2teruuuio24713a', 1),
(56, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, '851qirci0gaivi91m2teruuuio24713a', 2),
(57, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'rre9df1jidhngc292h4m2m735thod3h7', 3),
(58, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 'rre9df1jidhngc292h4m2m735thod3h7', 3);
INSERT INTO `tbl_cart` (`cart_id`, `pro_id`, `cat_id`, `pro_title`, `pro_description`, `pro_image`, `pro_price`, `pro_old_price`, `pro_status`, `s_id`, `pro_quantity`) VALUES
(60, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, '90it93f2aogci7alfe25kj140k7vkklj', 1),
(61, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, '90it93f2aogci7alfe25kj140k7vkklj', 1),
(62, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'dc4c1fc75bc7c88f80de7c9e64683111.jpg', 450, 500, 1, 'rnqdttu2drlg4pbcb8s6fegolv8fra8n', 3),
(63, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'rnqdttu2drlg4pbcb8s6fegolv8fra8n', 1),
(64, 10, 8, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '0011c16d70133f8444c339fa79443e38.jpg', 150, 0, 1, 'rnqdttu2drlg4pbcb8s6fegolv8fra8n', 1),
(65, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 'rnqdttu2drlg4pbcb8s6fegolv8fra8n', 1),
(66, 7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '7c23e294bfbe7f2914415128dc306172.jpg', 215, 325, 1, 'rnqdttu2drlg4pbcb8s6fegolv8fra8n', 1),
(67, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, 've1up6b588gntoggj5lt5k60gb8l0r35', 2),
(68, 11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '4e18575e14c0dcfe2880a288b73bf993.jpg', 230, 330, 1, 've1up6b588gntoggj5lt5k60gb8l0r35', 3),
(69, 7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '7c23e294bfbe7f2914415128dc306172.jpg', 215, 325, 1, 've1up6b588gntoggj5lt5k60gb8l0r35', 1),
(70, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 've1up6b588gntoggj5lt5k60gb8l0r35', 1),
(71, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 've1up6b588gntoggj5lt5k60gb8l0r35', 1),
(72, 8, 11, 'Gabi Full Sleeve Sweatshirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9910d4e783e9f12cbeba9cbf89c31abd.jpg', 215, 326, 1, 've1up6b588gntoggj5lt5k60gb8l0r35', 1),
(73, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, 'ig2v14fb7l69hklklc9ehr9q7u8nr3ju', 1),
(74, 13, 13, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '1e2602675765a7251c1eb18bc8433d51.jpg', 360, 450, 1, 'ig2v14fb7l69hklklc9ehr9q7u8nr3ju', 1),
(75, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'ig2v14fb7l69hklklc9ehr9q7u8nr3ju', 1),
(76, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', 214, 325, 1, 'd3ei7gt4pgd7v2q5mp2kfab685dj3nth', 1),
(77, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 'd3ei7gt4pgd7v2q5mp2kfab685dj3nth', 1),
(78, 7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '7c23e294bfbe7f2914415128dc306172.jpg', 215, 325, 1, 'd3ei7gt4pgd7v2q5mp2kfab685dj3nth', 1),
(81, 13, 13, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '1e2602675765a7251c1eb18bc8433d51.jpg', 360, 450, 1, '8v1juejn1a10pppe51lajop1r1s5tqls', 3),
(82, 12, 11, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '346638a63e63c675bdacdee4c9d23981.jpg', 325, 420, 1, '8v1juejn1a10pppe51lajop1r1s5tqls', 3),
(83, 7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '7c23e294bfbe7f2914415128dc306172.jpg', 215, 325, 1, 't8hm57uk35all7kirrft2ugqhk8nmc20', 3),
(84, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', 325, 625, 1, 't8hm57uk35all7kirrft2ugqhk8nmc20', 1),
(85, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, 'ik24tr597rqs91laklra4rrsn099r4ok', 1),
(86, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', 325, 425, 1, '8t708prngb4a2lds0v89dt9r7cbmblmu', 1),
(88, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'dc4c1fc75bc7c88f80de7c9e64683111.jpg', 450, 500, 1, 'vhv12lu0ispjdmcl6omtsd3gouv2o4s9', 1),
(90, 11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '4e18575e14c0dcfe2880a288b73bf993.jpg', 230, 330, 1, 'b3ss0uelvhe80v5rjqho4k75haum23fv', 1),
(91, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'dc4c1fc75bc7c88f80de7c9e64683111.jpg', 450, 500, 1, 'abeuj907f6nc4v5bjciivqfm29rb4sjs', 1),
(92, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'dc4c1fc75bc7c88f80de7c9e64683111.jpg', 450, 500, 1, 'jofbt95cg972pi93cjqb50ujp6ennf5i', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_created_by` varchar(100) DEFAULT NULL,
  `cat_created_date` datetime NOT NULL,
  `cat_update_by` varchar(100) NOT NULL,
  `cat_update_date` datetime NOT NULL,
  `cat_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_created_by`, `cat_created_date`, `cat_update_by`, `cat_update_date`, `cat_status`) VALUES
(8, 'Footware', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(9, 'Bags', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(10, 'Women\'s', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(11, 'Men\'s', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(13, 'garaments', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_colors`
--

CREATE TABLE `tbl_colors` (
  `colors_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `colors_name` varchar(255) NOT NULL,
  `colors_code` varchar(255) NOT NULL,
  `colors_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_colors`
--

INSERT INTO `tbl_colors` (`colors_id`, `product_id`, `colors_name`, `colors_code`, `colors_status`) VALUES
(1, 15, 'red', '#000000', 1),
(2, 15, 'red', '#ff0000', 1),
(3, 15, 'green', '#00ff00', 1),
(4, 15, 'blue', '#80ff00', 1),
(5, 13, 'red', '#ff0000', 1),
(6, 13, 'blue', '#00ff80', 1),
(7, 13, 'green', '#008000', 1),
(8, 14, 'white', '#ffffff', 1),
(9, 14, 'red', '#ff0000', 1),
(10, 14, 'green', '#008000', 1),
(11, 17, 'red', '#ff0000', 1),
(12, 17, 'purple', '#ff8000', 1),
(13, 17, 'green', '#80ff00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `address`, `phone`, `phone2`, `email`, `email2`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(1, '<p>Mirpur 60 feet road, Mirpur 2</p>\r\n\r\n<p>Dhaka, Banglades</p>', '+88 01678-614761', '+88 01678-614761', 'info@newlooksbd.com', 'info@newlooksbd2.com', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_by` varchar(100) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `created_by`, `created_date`, `update_by`, `updated_date`, `status`, `first_name`, `last_name`, `email`, `phone`, `address`, `zip_code`, `city`, `password`) VALUES
(1, 'liton', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1, '', '', '', '', '', '', '', ''),
(7, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(8, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(9, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(10, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(11, NULL, NULL, NULL, NULL, NULL, 'asddsad', 'aSdasd', 'admin123@gmail.coom', '018', '', '5250', 'Dinajpur', '202cb962ac59075b964b07152d234b70'),
(12, NULL, NULL, NULL, NULL, NULL, 'Programmer Rayhan', 'Mondol', 'icttask.com.rayhan@gmail.com', '01749508007', '', '5250', 'Rangpur', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured`
--

CREATE TABLE `tbl_featured` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_featured`
--

INSERT INTO `tbl_featured` (`id`, `title`, `description`, `image`, `type`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(1, 'New Feature', '<h3><span style=\"color:#e74c3c\">NEW</span> FEATURE</h3>', '4b702ae2a5fb2095f52d67764aebeb32.jpg', 'featured', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(2, 'Upto 55%', '<h3><span style=\"color:#e74c3c\">S</span>HOE</h3>', 'aae0a64721015cc55dafd1ed4cda277b.jpg', 'special_featured', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(3, 'New Feature', '<h3><span style=\"color:#d35400\">NEW</span> FEATURE</h3>', '63c292b93f097b109b08c0371c3442a0.jpg', 'featured', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(4, 'featured test', '<p>featured test</p>', 'dd5aa83ce1f51a4a0f89129b4b63b7f7.jpg', 'special_featured', NULL, '0000-00-00 00:00:00', '', '2019-04-29 09:11:13', 2),
(5, 'Coat 50% Offer', '<p>Coat <span style=\"color:#e74c3c\">50%</span> Offer</p>', '4ab89d24aad7dbfab19228a183d23a33.jpg', 'offer', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(6, 'Coat 50% Offer', '<p>Coat&nbsp;<span style=\"color:#e74c3c\">50%</span>&nbsp;Offer</p>', '9816d277b134cdffa39785a0b919ff20.jpg', 'offer', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(7, 'upto 55%', '<p><span style=\"color:#e74c3c\">S</span>HOE</p>', '32c38d42d5d5e9a7e6faab5c13ccbc0f.jpg', 'special_featured', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(8, 'upto 55%', '<p><span style=\"color:#e74c3c\">S</span>ALE</p>', '5bfde90b63d7055247cdc8a35ffa14d8.jpeg', 'special_featured', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `product_id`, `image`, `status`) VALUES
(1, 15, '5e01d4259d7cd3b20d8265a28b0491d5.jpg', 2),
(2, 15, '24941b9c554ec70007943ac01345b966.jpg', 2),
(3, 15, '4e430d7150cbea0a6ac4ca13d0b94633.jpg', 2),
(4, 15, '9069fb2047b4a192f019925d68505437.jpg', 2),
(5, 15, 'd43758b908a7be5f1d4f7d565958b5c4.jpg', 1),
(6, 13, 'bcb6aab7d231c22c7efd089667d369ba.jpg', 1),
(7, 13, '83d010f08f00a57443f7ec9ccfc721c8.jpg', 1),
(8, 13, '462e053005cf4c3a4950e63ba3f238d7.jpg', 1),
(9, 13, 'ed472b7e0798732413a2bd20e92c6c00.jpg', 1),
(10, 14, 'e152e62907a626c2dfaf0553d2c6fa6d.jpg', 1),
(11, 14, '162a8316f0fb07adf371838fef10567a.jpg', 1),
(12, 14, '5ab3c9d8093e13502bc11578aaca1b5a.jpg', 1),
(13, 17, '31da2dbb36468c5cf14044744e2b7140.jpg', 1),
(14, 17, '782de68e032503c3b3bf85c9b8d39bde.jpg', 1),
(15, 17, '9f3d650a5b95a411da2beb4585e3aca5.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_title` varchar(255) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_image` text NOT NULL,
  `pro_price` decimal(10,0) NOT NULL,
  `pro_old_price` decimal(10,0) NOT NULL,
  `pro_created_by` varchar(100) DEFAULT NULL,
  `pro_created_date` datetime NOT NULL,
  `pro_update_by` varchar(100) NOT NULL,
  `pro_update_date` datetime NOT NULL,
  `pro_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `cat_id`, `pro_title`, `pro_description`, `pro_image`, `pro_price`, `pro_old_price`, `pro_created_by`, `pro_created_date`, `pro_update_by`, `pro_update_date`, `pro_status`) VALUES
(1, 4, 'erf', '<p>aedfweqf efd e</p>', 'a3eb2aac5763bb999936d9fbae001571.jpg', '250', '0', NULL, '2019-04-28 07:17:47', '', '0000-00-00 00:00:00', 1),
(2, 2, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'af538f535a86bfb933cc83112e474754.jpg', '0', '0', NULL, '2019-04-28 07:19:29', '', '0000-00-00 00:00:00', 1),
(3, 3, 'Formal Blue Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '35fe8804365740083b65d0b83ba52e01.jpg', '70', '80', NULL, '2019-04-28 07:43:19', '', '0000-00-00 00:00:00', 1),
(5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '3ee26266104067a1591bb4078979561d.jpg', '214', '325', NULL, '2019-04-28 15:14:41', '', '0000-00-00 00:00:00', 1),
(6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'b950d505589af2f028a19d55c208f402.jpg', '325', '625', NULL, '2019-04-28 15:15:19', '', '0000-00-00 00:00:00', 1),
(7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '7c23e294bfbe7f2914415128dc306172.jpg', '215', '325', NULL, '2019-04-28 15:15:55', '', '0000-00-00 00:00:00', 1),
(8, 11, 'Gabi Full Sleeve Sweatshirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9910d4e783e9f12cbeba9cbf89c31abd.jpg', '215', '326', NULL, '2019-04-28 15:44:06', '', '0000-00-00 00:00:00', 1),
(9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3822162533b1bc6abb89ce846c153951.jpg', '325', '425', NULL, '2019-04-28 16:00:20', '', '0000-00-00 00:00:00', 1),
(10, 8, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '0011c16d70133f8444c339fa79443e38.jpg', '150', '0', NULL, '2019-04-28 16:02:05', '', '0000-00-00 00:00:00', 1),
(11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '4e18575e14c0dcfe2880a288b73bf993.jpg', '230', '330', NULL, '2019-04-28 16:08:27', '', '0000-00-00 00:00:00', 1),
(12, 11, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '346638a63e63c675bdacdee4c9d23981.jpg', '325', '420', NULL, '2019-04-28 16:12:54', '', '0000-00-00 00:00:00', 1),
(13, 13, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '1e2602675765a7251c1eb18bc8433d51.jpg', '360', '450', NULL, '2019-05-04 08:57:28', '', '0000-00-00 00:00:00', 2),
(14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'dc4c1fc75bc7c88f80de7c9e64683111.jpg', '450', '500', NULL, '2019-05-04 08:59:15', '', '0000-00-00 00:00:00', 1),
(15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3433d27fc9a88a8bda600f12b8d42b40.jpg', '750', '0', NULL, '2019-05-08 08:00:21', '', '0000-00-00 00:00:00', 1),
(16, 13, 'test update', '<p>test description update</p>', '2d8f6cbc772dcd6f0f8e58942b2c67f1.jpg', '205', '305', NULL, '2019-05-14 08:07:27', '', '2019-05-14 08:22:01', 2),
(17, 13, 'test', '<p>description test</p>', '01d7a4b45d587c541c0110c0f2888d1e.jpg', '305', '450', NULL, '2019-05-14 08:35:38', '', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `size_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `size_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`size_id`, `product_id`, `size_name`, `size_status`) VALUES
(1, 7, 'S', 1),
(2, 7, 'M', 1),
(3, 7, 'L', 1),
(4, 7, 'XL', 1),
(5, 7, 'XXL', 1),
(6, 15, 'S', 1),
(7, 15, 'M', 1),
(8, 15, 'L', 2),
(9, 13, 'S', 1),
(10, 14, 'S', 1),
(11, 14, 'M', 1),
(12, 15, 'XL', 2),
(13, 13, 'M', 1),
(14, 13, 'L', 1),
(15, 13, 'XL', 1),
(16, 17, 'S', 1),
(17, 17, 'M', 1),
(18, 17, 'L', 1),
(19, 17, 'XL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` text NOT NULL,
  `image` text NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `slogan`, `image`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(1, 'slider one', '', '6308861c9cafc4b2fcc48337a9003746.jpg', NULL, '0000-00-00 00:00:00', 'liton', '2019-05-04 11:25:37', 2),
(2, 'slider two', '', '4f4d5c55f0ee9118729d3a49a40c218c.jpg', NULL, '0000-00-00 00:00:00', 'liton', '2019-04-27 06:51:16', 2),
(3, 'Special for today', '<p>THE BIGGEST&nbsp;<span style=\"color:#1abc9c\">SALE</span></p>', 'e67cc34c0270ac0737a07b4cb4ee8b6c.jpg', NULL, '0000-00-00 00:00:00', 'liton', '2019-05-04 11:55:23', 2),
(4, 'New Arrivals On Sale', '<p>SUMMER&nbsp;<span style=\"color:#1abc9c\">COLLECTION</span></p>', '6d4f175d3f277d581a0ad73fb0ccd315.jpg', NULL, '0000-00-00 00:00:00', 'liton', '2019-05-04 11:55:29', 2),
(5, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>', 'eb000446812ebed321e3b8d1abf71b0d.jpg', NULL, '0000-00-00 00:00:00', 'liton', '2019-04-28 06:51:27', 2),
(6, 'Special for today', '<p>THE BIGGEST&nbsp;<span style=\"color:#1abc9c\"><big>SALE</big></span></p>', '1f0e49eefd55f05907aafc466d80c07a.jpg', NULL, '0000-00-00 00:00:00', 'liton', '2019-05-04 11:55:32', 2),
(7, 'slider seven', '<p>slider seven</p>', 'b076ad1bcb4fd9c3312d1693035fd95d.jpg', NULL, '0000-00-00 00:00:00', 'liton', '2019-05-04 11:25:43', 2),
(8, 'New Arrivals On Sale', '<h3>SUMMER&nbsp;<span style=\"color:#1abc9c\">COLLECTION</span></h3>', 'c58da8016d8e0ed02e1c8f3b782a4682.jpg', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(9, 'Special for today', '<p><span style=\"color:#ffffff\">THE BIGGEST</span>&nbsp;<span style=\"color:#1abc9c\"><big>SALE</big></span></p>', 'ba72a6b728c0b110538d089080dc8cfb.jpg', NULL, '0000-00-00 00:00:00', 'liton', '2019-05-04 11:52:26', 2),
(10, 'Special for today', '<h3>THE BIGGEST&nbsp;<span style=\"color:#1abc9c\">SALE</span></h3>', '699d3d77a6bfb04b6d10346e5b45196b.jpg', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `description`, `image`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(1, 'Joanna Vilken', '<p>Add Short Description</p>', '285aa0487287556dc3f7a8cb0f76b5b1.jpg', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(2, 'Anika Mollik', '<p>Add Short Description</p>', '674ed399885c8984e14b3108975fd23d.jpg', NULL, '0000-00-00 00:00:00', '', '2019-05-06 08:08:18', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `common_part`
--
ALTER TABLE `common_part`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_colors`
--
ALTER TABLE `tbl_colors`
  ADD PRIMARY KEY (`colors_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_featured`
--
ALTER TABLE `tbl_featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `common_part`
--
ALTER TABLE `common_part`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_colors`
--
ALTER TABLE `tbl_colors`
  MODIFY `colors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_featured`
--
ALTER TABLE `tbl_featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
