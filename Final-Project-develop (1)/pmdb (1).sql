-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 10:53 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(3000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `category` varchar(2000) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `author`, `date`, `content`, `image`, `category`, `status`) VALUES
(1, '', '', '0000-00-00 00:00:00', '', '', '', 0),
(2, '', '', '0000-00-00 00:00:00', '', '', '', 0),
(3, '', '', '0000-00-00 00:00:00', '', '', '', 0),
(4, '', '', '0000-00-00 00:00:00', '', '', '', 0),
(5, '', '', '0000-00-00 00:00:00', '', '', '', 0),
(6, '', '', '0000-00-00 00:00:00', '', '', '', 0),
(7, '', '', '0000-00-00 00:00:00', '', '', '', 0),
(8, '', '', '0000-00-00 00:00:00', '', '', '', 0),
(9, '', '', '0000-00-00 00:00:00', '', '', '', 0),
(10, '', '', '2019-05-18 08:09:31', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `articledraft`
--

CREATE TABLE `articledraft` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(3000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `category` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articledraft`
--

INSERT INTO `articledraft` (`id`, `title`, `author`, `date`, `content`, `image`, `category`) VALUES
(4, 'photography', 'peter', '2019-05-18 07:47:10', 'tutorial', '', ''),
(6, 'street', 'mckinnon', '2019-05-18 08:38:51', 'loremipsum', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profileimage` varchar(2000) NOT NULL,
  `aboutme` varchar(2000) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`admin_id`, `firstname`, `lastname`, `username`, `email`, `profileimage`, `aboutme`, `password`) VALUES
(1, 'dan', 'carandang', '', 'dan@gmail.com', '', '', 'dandan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articledraft`
--
ALTER TABLE `articledraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `articledraft`
--
ALTER TABLE `articledraft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
