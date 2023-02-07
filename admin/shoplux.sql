-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 04:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoplux`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_sr` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `no_of_item` int(255) NOT NULL,
  `user_cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_sr`, `category_name`, `no_of_item`, `user_cate`) VALUES
(188, 'nike', 2, 54),
(189, 'adidas', 1, 54),
(190, 'sparx', 1, 54),
(191, 'reebok', 1, 54),
(192, 'shoes', 1, 50),
(193, 'hello', 0, 51),
(194, 'shoes', 0, 60),
(195, 'medicine', 1, 61),
(196, 'medicine ', 0, 62);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pd_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(50) NOT NULL,
  `user_pd` int(11) NOT NULL,
  `product_category` int(50) NOT NULL,
  `product_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pd_id`, `product_name`, `product_price`, `user_pd`, `product_category`, `product_img`) VALUES
(20, 'nike j50', 1999, 54, 188, 'third_img.jpg'),
(21, 'reebok A1 50', 1699, 54, 191, 'seventh_img.jpg'),
(22, 'bata comfort 56', 1499, 54, 186, 'fifth.jpg'),
(23, 'sparx 150 light', 1299, 54, 190, 'first_img.jpg'),
(25, 'brand new shoes', 123, 50, 192, 'second_img.jpg'),
(26, 'new adidas', 1455, 54, 189, 'eight_img.jpg'),
(28, 'nike 123', 14800, 54, 188, 'sixth_img.jpg'),
(29, 'fever medicine ', 100, 61, 195, '713442.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_sr` int(11) NOT NULL,
  `store_name` varchar(50) NOT NULL,
  `store_desc` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `main_img` varchar(100) NOT NULL,
  `sub1` varchar(100) NOT NULL,
  `sub2` varchar(100) NOT NULL,
  `sub3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_sr`, `store_name`, `store_desc`, `phone_no`, `email`, `main_img`, `sub1`, `sub2`, `sub3`) VALUES
(1531, 'first store', 'this is a first store', '1', '123@gmail.com', 'images 2.jfif', 'images 3.jfif', 'images 4.jfif', 'images 5.jfif'),
(5024, 'fifth store', 'this is fifth store', '5', '123@fmail.com', 'images 6.jfif', 'images 7.jfif', 'images 8.jfif', 'images.jfif'),
(5197, 'kumar medical', 'medical shop', '12354', '123@fmail.com', '654247.jpg', '37864.jpg', '521718.jpg', '238870.jpg'),
(5807, 'fourth store', 'this is fourth store', '4', '123@fmail.com', 'images 5.jfif', 'images 6.jfif', 'images 7.jfif', 'images 8.jfif'),
(6071, 'naman shop', 'medical shop for any kind of medicine ', '123', 'naman@gmail', '654247.jpg', '37864.jpg', '260413.jpg', '521718.jpg'),
(6708, 'third store', 'this is third store', '3', '123@fmail.com', 'images 4.jfif', 'images 5.jfif', 'images 6.jfif', 'images 7.jfif'),
(9263, 'second store', 'this is second store', '2', '123@fmail.com', 'images 3.jfif', 'images 4.jfif', 'images 5.jfif', 'images 6.jfif'),
(9992, 'sixth store', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ipsum rerum cumque, tempore earum quam sunt vero asperiores vitae, ab minus voluptas iure numquam natus provident mollitia sed! Ratione tempore eius consequaturLorem ipsum dolor sit ame', '6', '123@fmail.com', 'images 7.jfif', 'images 8.jfif', 'images.jfif', 'images 2.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_sr` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_sr`, `name`, `username`, `password`, `shop_id`) VALUES
(49, 'sanjit debnath', 'sanjit', 'debnath', 1531),
(50, 'second', 'second', 'second', 9263),
(51, 'third', 'third', 'third', 6708),
(52, 'fourth', 'fourth', 'fourth', 5807),
(53, 'fifth', 'fifth', 'fifth', 5024),
(54, 'sixth', 'sixth', 'sixth', 9992),
(55, 'select * from users ', '', '', 5197),
(56, 'select * from users ', '', '', 5197),
(57, 'select * from users ', '', '', 5197),
(58, 'sanjit', '', '', 5197),
(59, 'sanjit', '', '', 5197),
(60, 'brij mohan', 'rana', 'rana', 5197),
(61, 'Naman Aggarwal', 'naman123', 'namanagg', 5197),
(62, 'naman', 'naman123', 'naman123', 6071);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_sr`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_sr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
