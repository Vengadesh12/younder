-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2025 at 07:35 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `contract_no` varchar(100) DEFAULT NULL,
  `tender_no` varchar(100) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `assigned_team` varchar(255) DEFAULT NULL,
  `current_status` varchar(100) DEFAULT NULL,
  `project_duration` varchar(100) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `client_id` varchar(100) DEFAULT NULL,
  `pile_type` varchar(100) DEFAULT NULL,
  `no_of_piles` int(11) DEFAULT NULL,
  `pile_length` varchar(100) DEFAULT NULL,
  `expected_installation_rate` varchar(100) DEFAULT NULL,
  `penetration_record` varchar(255) DEFAULT NULL,
  `rig_details` varchar(255) DEFAULT NULL,
  `address` text,
  `rig_length` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `restrike` int(11) DEFAULT NULL,
  `no_of_days_piling` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
