-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 08:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edeskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaddoffice`
--

CREATE TABLE `adminaddoffice` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminaddoffice`
--

INSERT INTO `adminaddoffice` (`id`, `title`, `description`) VALUES
(5, 'Vice-Chancellor Office', 'This is for vc Office'),
(6, 'Audit Cell', 'This is under in VC Offic'),
(8, 'Dean Office', 'Dean Office'),
(9, 'Registrar Office', 'Registrar Office'),
(10, 'White House Office', 'White House Office'),
(11, 'Nishat', 'jhghyjgrj tg jyt gjr rtu ytuy riut yuiryt ilrytiuyit yiu yuirytuk yuiytuyriire '),
(14, 'wev rwer we', 'we rwer w4tytu ');

-- --------------------------------------------------------

--
-- Table structure for table `adminmanagement`
--

CREATE TABLE `adminmanagement` (
  `id` int(20) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminmanagement`
--

INSERT INTO `adminmanagement` (`id`, `userid`, `password`, `firstname`, `lastname`, `picture`) VALUES
(1, 'admin', 'admin', 'test', 'test lastr g', ''),
(3, 'test', 'test', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `office_id` int(20) NOT NULL,
  `author_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usermanagement`
--

CREATE TABLE `usermanagement` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermanagement`
--

INSERT INTO `usermanagement` (`id`, `firstname`, `lastname`, `userid`, `email`, `password`, `picture`, `stat`) VALUES
(8, 'Asir Shahriar', 'Roudra', 'B190305021', 'roudra@gmail.com', '$2y$10$tZGM0CDKTKhqPVD5150P9u.VsFJtiuPjPU//IXNKE/7Dal.7OJBTO', '1683898159Roudra.jpg', 'deactive'),
(9, 'Nahid', 'Hasan', 'B190305020', 'nahid@gmail.com', '$2y$10$MTFljBCDp9wcRpMHcBaYU./QlBvb2g3ftNo1HJb1TiXKVi3PcIs9W', '1684124883Nahid.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaddoffice`
--
ALTER TABLE `adminaddoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmanagement`
--
ALTER TABLE `adminmanagement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermanagement`
--
ALTER TABLE `usermanagement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaddoffice`
--
ALTER TABLE `adminaddoffice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `adminmanagement`
--
ALTER TABLE `adminmanagement`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `usermanagement`
--
ALTER TABLE `usermanagement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
