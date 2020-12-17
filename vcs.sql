-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 03:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_emp`
--

CREATE TABLE `master_emp` (
  `me_id` int(11) NOT NULL,
  `me_fname` varchar(100) NOT NULL,
  `me_lname` varchar(100) NOT NULL,
  `me_email` varchar(100) DEFAULT NULL,
  `me_mobile` varchar(12) NOT NULL,
  `me_salary` float NOT NULL,
  `me_company` varchar(100) DEFAULT NULL,
  `me_dept_id` varchar(100) NOT NULL,
  `me_country` varchar(100) NOT NULL,
  `me_state` varchar(100) NOT NULL,
  `me_city` varchar(100) NOT NULL,
  `me_gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_emp`
--

INSERT INTO `master_emp` (`me_id`, `me_fname`, `me_lname`, `me_email`, `me_mobile`, `me_salary`, `me_company`, `me_dept_id`, `me_country`, `me_state`, `me_city`, `me_gender`) VALUES
(1, 'Pragyesh', 'Thakkar', 'pragyesht@gmail.com', '8889277770', 55000, 'PSPS', 'IT', 'India', 'State 3', 'City 3', 'Male'),
(2, 'Yogesh', 'Rathore', 'norepy@gmail.com', '0987654321', 85000, 'Wipro', 'Finance', 'Australia', 'State 2', 'City 1', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_emp`
--
ALTER TABLE `master_emp`
  ADD PRIMARY KEY (`me_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_emp`
--
ALTER TABLE `master_emp`
  MODIFY `me_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
