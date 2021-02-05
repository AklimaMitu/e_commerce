-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 04:31 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sostadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_address` varchar(300) NOT NULL,
  `order_date` date NOT NULL,
  `shipping_date` date NOT NULL,
  `order_amount` int(11) NOT NULL,
  `delivery_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `customer_address`, `order_date`, `shipping_date`, `order_amount`, `delivery_status`) VALUES
(17, 18, 'Nikunja 2', '2017-11-11', '2017-11-11', 5005955, 'delivered'),
(18, 18, 'Nikunja 2', '2017-11-11', '2017-11-11', 5005955, 'delivered'),
(19, 19, 'Nikunja 2', '2017-11-11', '2017-11-11', 51042, 'delivered'),
(20, 19, 'Nikunja 2', '2017-11-11', '2017-11-11', 51042, 'delivered'),
(21, 19, 'bmnbm', '2017-11-11', '2017-11-11', 51042, 'pending'),
(22, 19, 'Banani', '2017-11-11', '2017-11-11', 51042, 'pending'),
(23, 19, 'Nikunja 2', '2017-11-11', '2017-11-11', 5050813, 'delivered'),
(24, 19, 'Banani', '2017-11-11', '2017-11-11', 50550, 'delivered'),
(25, 19, 'Nikunja 2', '2017-11-12', '2017-11-12', 50592, 'delivered'),
(26, 19, 'Nikunja 2', '2017-11-14', '2017-11-14', 6042, 'delivered'),
(27, 19, 'Banani', '2017-11-14', '2017-11-14', 51042, 'pending'),
(28, 19, 'hgfsdfksdjhfksd', '2017-11-14', '2017-11-14', 5050313, 'pending'),
(29, 19, 'Banani', '2017-11-15', '2017-11-16', 550, 'pending'),
(30, 19, 'Banani', '2017-11-15', '2017-11-18', 1050, 'delivered'),
(31, 19, 'Khilkhet, Dhaka-1229', '2017-11-15', '2017-11-20', 5050855, 'delivered'),
(32, 19, 'Kuril Bisswaroad', '2017-11-15', '2017-11-20', 5050813, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `price`, `quantity`) VALUES
(4, 22, 46, 50000, 1),
(5, 22, 47, 500, 1),
(6, 22, 51, 542, 1),
(7, 23, 46, 50000, 1),
(8, 23, 47, 500, 1),
(9, 23, 48, 5000313, 1),
(10, 24, 46, 50000, 1),
(11, 24, 47, 500, 1),
(12, 24, 55, 50, 1),
(13, 25, 46, 50000, 1),
(14, 25, 51, 542, 1),
(15, 25, 56, 50, 1),
(16, 26, 47, 500, 1),
(17, 26, 51, 542, 1),
(18, 26, 53, 5000, 1),
(19, 27, 51, 542, 1),
(20, 27, 47, 500, 1),
(21, 27, 46, 50000, 1),
(22, 28, 46, 50000, 1),
(23, 28, 48, 5000313, 1),
(24, 29, 47, 500, 1),
(25, 29, 54, 50, 1),
(26, 30, 47, 500, 1),
(27, 30, 55, 50, 1),
(28, 30, 52, 500, 1),
(29, 31, 51, 542, 1),
(30, 31, 48, 5000313, 1),
(31, 31, 46, 50000, 1),
(32, 32, 46, 50000, 1),
(33, 32, 47, 500, 1),
(34, 32, 48, 5000313, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `short_desc` varchar(300) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `short_desc`, `img_path`, `price`, `stock`) VALUES
(46, 5, 'Asus Rog', 'Asus Rog Gaming Laptop', '00.png', 50000, 200),
(47, 13, 'Apple Watch', 'Pink Color Apple Watch', 'watch 1.png', 500, 20),
(48, 6, 'Gaming Desktop', 'Brand New', 'desktop 2.png', 5000313, 4646),
(51, 6, 'Hp Desktop', 'This is what you want', 'desktop 1.png', 542, 245),
(52, 13, 'Apple Tv', 'All new Apple Tv', 'apple tv.png', 500, 20),
(53, 6, 'Asus Desktop', 'New Rog Desktop', 'desktop 3.png', 5000, 466),
(54, 1, 'Iphone X', 'All New Iphone x 64 GB', 'iphone-x-silver-select-2017.png', 50, 20),
(55, 13, 'Apple Watch', 'Apple Sports Watch', 'watch 2.png', 50, 20),
(56, 6, 'Msi Gaming', 'New Msi Gaming Desktop', 'desktop 4.png', 50, 40),
(57, 1, 'Samsung Galaxy S8', 'New Samsung Galaxy S8 for you!', 'galaxy-s8_gallery_right_side_black_s4.png', 50, 20),
(58, 16, 'Samsung Smart TV', 'New 42 inch Samsung Smart TV', 'samsung.png', 42000, 20),
(59, 16, 'Sony Full HD TV', 'Sony 52 inc Full HD TV', 'sony.png', 50000, 20),
(60, 16, 'Samsung Smart TV', 'New 42 inch Samsung Smart TV', 'samsung.png', 42000, 20),
(61, 16, 'LG Smart Tv', 'LG 52 inc Full HD TV', 'lg.png', 50000, 20),
(62, 17, 'Polo Shirt', 'Men\'s New Polo SHirt', 'shirt.png', 300, 10),
(63, 17, 'V neck shirt', 'Fit v neck shirt', 'polo 1.png', 500, 20),
(64, 17, 'Polo Shirt', 'Men\'s New Polo SHirt', 'cool.png', 300, 10),
(65, 17, 'V neck shirt', 'Fit v neck shirt', 'polo 2.png', 500, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(70) NOT NULL,
  `short_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `short_desc`) VALUES
(1, 'Smart Phones', 'all smart phones are here.'),
(5, 'Laptop', 'All laptop are here'),
(6, 'desktop', 'All new Desktop is here'),
(13, 'apple', 'Mac Book, MacBook Pro, Apple Tv....'),
(16, 'tv', 'Sony, Samsung.......'),
(17, 'Clothing', 'Men\'s Clothing, Women\'s Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `user_type_id`) VALUES
(1, 'Administrator', 'admin@gmail.com', '123', 'male', 1),
(13, 'Belal Hosen', 'fg', 'Belal1525', 'male', 2),
(14, 'Belal Khan', 'mdbelal.aiub@gmail.com', '152547', 'male', 2),
(15, 'dgdd fffs', 'ddjf@gmail.com', '125Belal', 'male', 2),
(16, 'Md Easin', 'easin@gmail.com', '12345678', 'male', 2),
(17, 'Md Kaiser', 'kaiser@gmail.com', '12345678', 'female', 2),
(18, 'nahid', 'nahid@gmail.com', '123', 'female', 2),
(19, 'Md Belal Hosen', 'belal@gmail.com', '123', 'male', 2),
(20, 'sezan', 'sezansarker@gmail.com', '12345678', 'male', 2),
(21, 'sir', 'sir@gmail.com', '12345678', 'male', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type_name`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_fk` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `product_id_fk` (`product_id`),
  ADD KEY `order_datils_fk` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cat_relation` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_unique` (`category_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `em_uniqe` (`email`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_fk` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_datils_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_cat_relation` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `usertypeFK` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
