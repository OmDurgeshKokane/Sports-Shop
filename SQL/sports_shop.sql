-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 01, 2023 at 06:09 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `password`) VALUES
(1, 'Om Kokane', 'Om12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(4, 'Sarang Dixit', 'sarang.dixit1235@gmail.com', 'Hii Sir '),
(5, 'Ashish Ahire', 'ashish.ahire100@gmail.com', 'Hii Sir'),
(6, 'Aniket Pitre', 'aniketpitre101@gmail.com', 'Hii Sir');

-- --------------------------------------------------------

--
-- Stand-in structure for view `o1`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `o1`;
CREATE TABLE IF NOT EXISTS `o1` (
`firstname` varchar(255)
,`Order_id` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `o2`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `o2`;
CREATE TABLE IF NOT EXISTS `o2` (
`address` varchar(255)
,`firstname` varchar(255)
,`gtotal` int
,`mobile` varchar(255)
,`Order_id` int
);

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

DROP TABLE IF EXISTS `order_manager`;
CREATE TABLE IF NOT EXISTS `order_manager` (
  `Order_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) NOT NULL,
  `Pay_Mode` varchar(255) NOT NULL,
  `gtotal` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=206 DEFAULT CHARSET=utf8mb4 COLLATE= utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `firstname`, `mobile`, `address`, `Pay_Mode`, `gtotal`, `date`) VALUES
(195, 'Sarang', '9067245761', 'Nashik', 'COD', 5900, '2022-05-22 17:24:09'),
(197, 'Aniket', '9067117374', 'Mumbai ', 'COD', 2950, '2022-05-22 17:26:04'),
(201, 'Om ', '9756435647', 'Mumbai ', 'COD', 10620, '2022-09-26 13:14:47'),
(202, 'om', '7378754538', 'Bangalore ', 'COD', 9440, '2022-11-22 15:20:48'),
(203, 'Alex', '8765435546', 'nashik', 'COD', 15340, '2022-11-27 15:13:15'),
(204, 'Alex', '8765435546', 'nashik', 'COD', 7670, '2022-11-27 15:13:36'),
(205, 'Alex', '8765435546', 'Nashik', 'COD', 21240, '2022-11-27 15:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `User_id` int NOT NULL,
  `Pay_id` int NOT NULL,
  `Pay_name` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`User_id`, `Pay_id`, `Pay_name`, `email`) VALUES
(1, 1, 'Om', 'om@gmail.com'),
(2, 2, 'sarang', 'sarang@gmail.com'),
(3, 3, 'RaviRaj', 'ravi@gmail.com'),
(0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_login`
--

DROP TABLE IF EXISTS `register_login`;
CREATE TABLE IF NOT EXISTS `register_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `password` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `confirmpassword` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_login`
--

INSERT INTO `register_login` (`id`, `firstname`, `lastname`, `email`, `gender`, `mobile`, `age`, `password`, `confirmpassword`) VALUES
(5, 'Sarthak', 'Awghad', 'Sarthak@gmail.com', 'Male', '9856746574', 20, '654321', '654321'),
(50, 'Alex', 'bhai', 'alex@gmail.com', 'Male', '8765435546', 20, '$2y$10$543KzqqxpgzqknjanJre9e2qdw8c.rGWJxd5n2/HmcVfUYoW6FfO6', '$2y$10$q8eJ0kaPszi2JEfPMzlg/egU0d2ArbYYmOUyyzZU9zK6vE9yYIJze'),
(3, 'Ravi', 'Gupta', 'ravi@gmail.com', 'Male', '9876546378', 20, '123456', '123456'),
(4, 'Raj', 'gupta', 'raj@gmail.com', 'Male', '9876546657', 20, '3214', '3214'),
(1, 'Alex', 'Kokane', 'om@gmail.com', 'Male', '7378754538', 20, '12345', '12345'),
(2, 'Sarang', 'Dixit', 'sarang@gmail.com', 'Male', '9875643657', 20, '123', '123');

-- --------------------------------------------------------

--
-- Stand-in structure for view `u1`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `u1`;
CREATE TABLE IF NOT EXISTS `u1` (
`Item_Name` varchar(255)
,`Order_id` int
,`Quantity` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

DROP TABLE IF EXISTS `user_orders`;
CREATE TABLE IF NOT EXISTS `user_orders` (
  `Order_id` int NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  KEY `Order_id` (`Order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES
(195, 'Nike✔ T-Shirt Men', '5000', '1'),
(197, 'Puma Bag', '2500', '1'),
(201, 'Season Bat', '9000', '1'),
(202, 'Season Ball', '1500', '2'),
(202, 'Nike✔ T-Shirt Men', '5000', '1'),
(203, 'Season Bat', '9000', '1'),
(203, 'Nike✔ Pants Men', '4000', '1'),
(204, 'Season Ball', '1500', '1'),
(204, 'Nike✔ T-Shirt Men', '5000', '1'),
(205, 'Hockey', '15000', '1'),
(205, 'Nike✔ Shoes', '3000', '1');

-- --------------------------------------------------------

--
-- Structure for view `o1`
--
DROP TABLE IF EXISTS `o1`;

DROP VIEW IF EXISTS `o1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `o1`  AS  select `order_manager`.`Order_id` AS `Order_id`,`order_manager`.`firstname` AS `firstname` from `order_manager` ;

-- --------------------------------------------------------

--
-- Structure for view `o2`
--
DROP TABLE IF EXISTS `o2`;

DROP VIEW IF EXISTS `o2`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `o2`  AS  select `order_manager`.`Order_id` AS `Order_id`,`order_manager`.`firstname` AS `firstname`,`order_manager`.`mobile` AS `mobile`,`order_manager`.`address` AS `address`,`order_manager`.`gtotal` AS `gtotal` from `order_manager` ;

-- --------------------------------------------------------

--
-- Structure for view `u1`
--
DROP TABLE IF EXISTS `u1`;

DROP VIEW IF EXISTS `u1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `u1`  AS  select `user_orders`.`Order_id` AS `Order_id`,`user_orders`.`Item_Name` AS `Item_Name`,`user_orders`.`Price` AS `Quantity` from `user_orders` ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD CONSTRAINT `user_orders_ibfk_1` FOREIGN KEY (`Order_id`) REFERENCES `order_manager` (`Order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
