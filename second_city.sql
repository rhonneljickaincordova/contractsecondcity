-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2016 at 09:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `second_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `contract_information`
--

CREATE TABLE `contract_information` (
  `contract_information_id` int(11) NOT NULL,
  `client_to` varchar(100) DEFAULT NULL,
  `client_date` varchar(100) DEFAULT NULL,
  `client_email` varchar(100) DEFAULT NULL,
  `client_phone_1` varchar(100) DEFAULT NULL,
  `client_address` varchar(100) DEFAULT NULL,
  `client_phone_2` varchar(100) DEFAULT NULL,
  `client_work_address` varchar(100) DEFAULT NULL,
  `company_from` varchar(100) DEFAULT NULL,
  `company_phone` varchar(100) DEFAULT NULL,
  `company_email` varchar(100) DEFAULT NULL,
  `project_title` varchar(100) DEFAULT NULL,
  `project_description` text,
  `payment_sum` varchar(100) DEFAULT NULL,
  `payment_data_cotract` varchar(100) DEFAULT NULL,
  `payment_amount` varchar(100) DEFAULT NULL,
  `payment_on` varchar(100) DEFAULT NULL,
  `payment_balance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract_information`
--

INSERT INTO `contract_information` (`contract_information_id`, `client_to`, `client_date`, `client_email`, `client_phone_1`, `client_address`, `client_phone_2`, `client_work_address`, `company_from`, `company_phone`, `company_email`, `project_title`, `project_description`, `payment_sum`, `payment_data_cotract`, `payment_amount`, `payment_on`, `payment_balance`) VALUES
(3, 'Client to', 'Nov 11,2016', 'Client email', 'Client Phone 1 ', 'Client address', 'Client Phone 2 ', 'Client work address', 'Company from', 'Comapny Phone', 'Company email', 'Project titleAWS', 'Fawfafased', 'Payment Buyers Sum ', 'Payment Date', 'Payment Amount', 'payment on ', 'Payment balance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contract_information`
--
ALTER TABLE `contract_information`
  ADD PRIMARY KEY (`contract_information_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contract_information`
--
ALTER TABLE `contract_information`
  MODIFY `contract_information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
