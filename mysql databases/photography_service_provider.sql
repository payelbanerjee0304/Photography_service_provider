-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 05:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `photography_service_provider`
--

CREATE TABLE `photography_service_provider` (
  `user_id` int(100) NOT NULL,
  `requirement` varchar(100) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `project` varchar(100) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `stime` time(3) NOT NULL,
  `etime` time(2) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `auth` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photography_service_provider`
--

INSERT INTO `photography_service_provider` (`user_id`, `requirement`, `plan`, `firstname`, `lastname`, `email`, `phone`, `project`, `sdate`, `edate`, `stime`, `etime`, `address1`, `city`, `zip`, `image`, `user`, `auth`) VALUES
(1, 'head', 'none', 'admin', 'admin', 'admin@gmail.com', 1234, 'admin', '2023-09-01', '2023-09-02', '06:00:00.000', '18:00:00.00', 'kolkata', 'Kolkata', 700000, './upload/1693418390__DSC0579.jpg', 'admin', 0),
(2, 'Modelling photoshoot', 'Basic', 'Payel', 'Banerjee', 'payelbanerjee9319@gmail.com', 8777644951, '24hrs project', '2023-08-25', '2023-08-25', '10:00:00.000', '12:00:00.00', 'Bhowanipur', 'Kolkata', 700025, './upload/1693670443_team-1.jpg', 'client', 0),
(11, 'Exhibitions & Workshops', 'Basic', 'Payel', 'Baidya', 'payelbaidya97@gmail.com', 6289977525, '24hrs project', '2023-09-14', '2023-09-15', '09:00:00.000', '09:00:00.00', 'Sonarpur', 'Kolkata', 700150, './upload/1693739870_team-3.jpg', 'client', 0),
(12, 'Album designing services', 'Extended', 'Md Masud', 'Hassan', 'masudhassan1996@gmail.com', 7076163434, '48hrs project', '2023-09-29', '2023-09-30', '10:00:00.000', '15:00:00.00', 'Chandaneswar,Bhangar', 'South24 Parganas', 743330, './upload/1693740610_team-2.jpg', 'client', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photography_service_provider`
--
ALTER TABLE `photography_service_provider`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photography_service_provider`
--
ALTER TABLE `photography_service_provider`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
