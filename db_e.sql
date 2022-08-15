-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 04:03 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE `add_employee` (
  `id` int(255) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_contact` varchar(255) NOT NULL,
  `e_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`id`, `e_name`, `e_contact`, `e_email`) VALUES
(1, 'Rohit Kumar', '9900023112', 'rohit@abc.com'),
(2, 'Thomas Mathew', '9800023112', 'thomas@cbn.in'),
(3, 'Pooja Sharma', '7800023112', 'pooja.sharma@dot.co');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `psd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `psd`) VALUES
(1, 'admin', 'Admin@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_employee`
--
ALTER TABLE `add_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_employee`
--
ALTER TABLE `add_employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
