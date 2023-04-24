-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 04:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `rfidtrx`
--

CREATE TABLE `rfidtrx` (
  `tagid` varchar(25) NOT NULL,
  `tagname` varchar(55) NOT NULL,
  `vdate` date NOT NULL,
  `vtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rfidtrx`
--

INSERT INTO `rfidtrx` (`tagid`, `tagname`, `vdate`, `vtime`) VALUES
('043C5722', 'john', '2023-04-24', '14:25:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rfidtrx`
--
ALTER TABLE `rfidtrx`
  ADD PRIMARY KEY (`tagid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
