-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 08:20 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `Id` int(11) NOT NULL,
  `customer_name` varchar(72) NOT NULL,
  `contact_no` varchar(72) NOT NULL,
  `city` varchar(72) NOT NULL,
  `address` varchar(72) NOT NULL,
  `gender` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`Id`, `customer_name`, `contact_no`, `city`, `address`, `gender`) VALUES
(1, 'Imran', '01742658883', 'Dhaka', 'Mohammadpur, Dhaka', 'Male'),
(2, 'Ujjal', '01742658883', 'Dhaka', 'Dhanmondi,Dhaka-1207', 'Male'),
(3, 'Bappy', '01916142383', 'Dhaka', 'Mohammadpur Dhaka_1207', 'Male'),
(5, 'Balel', '01712365478', 'Dhaka', 'Mohammadpur Dhaka_1207', 'Male'),
(6, ' Rafia', '01364528689', 'Khulna', 'k/12, street road, khulna', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `employee_roll` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `password`, `phone_no`, `address`, `image`, `salary`, `employee_roll`, `gender`) VALUES
(5, 'Ujjal', 'ujjal@gmail.com', '1234', 1921213329, 'Dhaka', ' ', 2500, '2', 'Male'),
(6, 'Imran', 'imran@gmail.com', '12345', 1710821029, 'Dhaka', '  ', 1245, '2 ', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category` varchar(72) NOT NULL,
  `decription` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category`, `decription`) VALUES
(2, 'Regular Food', 'Rice, Oil, Salt.'),
(6, 'Baby Food', 'All kinds of baby foods like milk.'),
(7, 'Organic Food', 'Juice , Honey');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` int(11) NOT NULL,
  `product_name` varchar(72) NOT NULL,
  `category` varchar(72) NOT NULL,
  `stock_qu` varchar(72) NOT NULL,
  `price` varchar(72) NOT NULL,
  `buy_price` varchar(72) NOT NULL,
  `product_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `product_name`, `category`, `stock_qu`, `price`, `buy_price`, `product_id`) VALUES
(2, 'oil', 'Bentgrass', '01', '140', '1135', 'M-02'),
(3, 'Suger', 'Bermudagrass', '03', '135', '130', 'M-03'),
(4, 'Suger', 'Bluegrass', '03', '110', '105', 'M-04'),
(6, 'Milk', 'Baby Food', '20', '80', ' 70', 'B-1'),
(7, 'Rice', 'Regular Food', '100 ', '50', '45', 'R-101');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `ID` int(11) NOT NULL,
  `price` varchar(72) NOT NULL,
  `quantity` varchar(72) NOT NULL,
  `total` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`ID`, `price`, `quantity`, `total`) VALUES
(1, '150', '01', '1050'),
(2, '160', '02', '1000'),
(3, '160', '02', '320'),
(4, '200', '02', '400'),
(5, '300', '02', '600');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_info`
--

CREATE TABLE `supplier_info` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(72) NOT NULL,
  `email` varchar(72) NOT NULL,
  `phone` varchar(72) NOT NULL,
  `product_name` varchar(72) NOT NULL,
  `product_qu` varchar(72) NOT NULL,
  `product_price` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_info`
--

INSERT INTO `supplier_info` (`supplier_id`, `name`, `email`, `phone`, `product_name`, `product_qu`, `product_price`) VALUES
(1, 'Bappy', 'debnathbappy@yahoo.com', '01742658883', 'Potato', '02', '150'),
(2, 'imran', 'imran@yahoo.com', '01789456123', 'M-02', '02', '160'),
(3, 'ujjal', 'ujjal@yahoo.com', '01789123456', 'Milk', '02', '180'),
(6, 'Azhae Ali', 'ajhar@email.com', '01921213329', 'Rice', '500', '20000'),
(7, 'Imran', 'gdimran@gmail.com', '01921213329', 'Rice', '500', '10000'),
(8, 'Farhan Khan', 'farhan@gmail.com', '01712593878', 'Honey', '20', '15000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `supplier_info`
--
ALTER TABLE `supplier_info`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `supplier_info`
--
ALTER TABLE `supplier_info`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
