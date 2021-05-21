-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 10:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kgims`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(250) NOT NULL,
  `catagory_name` varchar(250) NOT NULL,
  `sub_catagory` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `catagory_name`, `sub_catagory`) VALUES
(51, 'Books', 'Text Books'),
(56, 'demo', '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(250) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `catagory` varchar(250) NOT NULL,
  `sub_catagory` varchar(248) NOT NULL,
  `unit_purchase_cost` varchar(250) NOT NULL,
  `unit_selling_price` varchar(250) NOT NULL,
  `quantity` varchar(248) NOT NULL,
  `available` varchar(248) NOT NULL,
  `tax_rate` varchar(250) NOT NULL,
  `estimated_profit` varchar(250) NOT NULL,
  `posted_by` varchar(250) NOT NULL,
  `item_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `barcode`, `item_name`, `item_description`, `catagory`, `sub_catagory`, `unit_purchase_cost`, `unit_selling_price`, `quantity`, `available`, `tax_rate`, `estimated_profit`, `posted_by`, `item_status`) VALUES
(4, 'KG2104001', 'Let Us C', 'c programming book', 'Books', 'Text Books', '100', '140', '20', '1', '16', '17%', 'Naveed Ahmad', 'In Stock'),
(5, 'KG2104002', 'Chemistry', '10th class', 'Books', 'Text Books', '150', '232', '20', '15', '16', '25%', 'Naveed Ahmad', 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `available` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `posted_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_group`
--

CREATE TABLE `tax_group` (
  `id` int(250) NOT NULL,
  `tax_group_name` varchar(248) NOT NULL,
  `tax_rate` varchar(248) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_group`
--

INSERT INTO `tax_group` (`id`, `tax_group_name`, `tax_rate`) VALUES
(4, 'Sales Tax (16%)', '16'),
(5, 'VAT (15%)', '15'),
(7, 'NO TAX (0%)', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(250) NOT NULL,
  `username` varchar(240) NOT NULL,
  `password_hash` varchar(240) NOT NULL,
  `full_name` varchar(240) NOT NULL,
  `user_role` varchar(250) NOT NULL,
  `user_email` varchar(240) NOT NULL,
  `user_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `username`, `password_hash`, `full_name`, `user_role`, `user_email`, `user_status`) VALUES
(1, 'naveed', '$2y$10$jojDNTHf/AXY677n03pEReVxPWYcgqRfrKzeZF4I2geIF1zX6v7mG', 'Naveed Ahmad', 'Administrator', 'mc180201194@vu.edu.pk', 'ACTIVE'),
(4, 'mudassir', '$2y$10$wrVa2dNBCb9AscWssC/u2eMH6/WCG6qgoM891UmvDZygxUzcQNUfy', 'Mudassir Mirza', 'Administrator', 'mirzamudassir202@gmail.com', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(250) NOT NULL,
  `role_name` varchar(250) NOT NULL,
  `access_type` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posted_by` (`posted_by`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_group`
--
ALTER TABLE `tax_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tax_rate` (`tax_rate`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_group`
--
ALTER TABLE `tax_group`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
