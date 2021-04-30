-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 06:41 PM
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
-- Database: `test-phase`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile-companies`
--

CREATE TABLE `mobile-companies` (
  `id` int(250) NOT NULL,
  `company_name` varchar(240) NOT NULL,
  `image` varchar(240) NOT NULL,
  `status` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile-companies`
--

INSERT INTO `mobile-companies` (`id`, `company_name`, `image`, `status`) VALUES
(1, 'Samsung', '', 'UP'),
(2, 'iPhone', '', 'UP'),
(3, 'Vivo', '', 'UP');

-- --------------------------------------------------------

--
-- Table structure for table `mobile-modals`
--

CREATE TABLE `mobile-modals` (
  `id` int(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `modal_name` varchar(250) NOT NULL,
  `modal_number` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile-modals`
--

INSERT INTO `mobile-modals` (`id`, `company_name`, `modal_name`, `modal_number`, `price`, `image`, `status`) VALUES
(1, 'Samsung', 'Note 8', '8', '50000', 'assets/img/uploads/samsung.jpg', 'UP'),
(2, 'Samsung', 'Note 9', '9', '65000', 'assets/img/uploads/samsung.jpg', 'UP'),
(3, 'iPhone', 'iPhone 8', '8', '60000', 'assets/img/uploads/iPhone.png', 'UP'),
(4, 'iPhone', 'iPhone X', 'X', '130000', 'assets/img/uploads/iPhone.png', 'UP'),
(5, 'Vivo', 'Y10', '10', '35000', 'assets/img/uploads/Vivo.png', 'UP'),
(6, 'Vivo', 'Y20', '20', '45000', 'assets/img/uploads/Vivo.png', 'UP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile-companies`
--
ALTER TABLE `mobile-companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile-modals`
--
ALTER TABLE `mobile-modals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobile-companies`
--
ALTER TABLE `mobile-companies`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mobile-modals`
--
ALTER TABLE `mobile-modals`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
