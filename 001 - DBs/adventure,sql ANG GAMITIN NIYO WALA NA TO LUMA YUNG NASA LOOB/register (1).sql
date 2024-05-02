-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 04:37 AM
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
-- Database: `adventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phonenumber` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `username`, `phonenumber`, `email`, `birthday`, `password`) VALUES
(1, 'asdadasd', 'asdasda', 'eaj', 2147483647, 'jonathanmark368@gmail.com', 'asdasd', '1234'),
(4, 'Maximus', 'Bacarac', 'max11', 2147483647, 'Max368@gmail.com', '12/13/2007', '$2y$10$UQDCTvWBjToWzy2y/usp2eGRx.smkFz6KNeHVqZGgXP'),
(5, 'asdasdasd', 'asdasdasd', 'asdasdasdasd', 2312903, 'asdasddadasdasd', '10/05/2022', 'efe6398127928f1b2e9ef3207fb82663'),
(6, 'jghjghj', 'ghjghjgh', 'jghjghjghj', 232329323, 'ghjghjghjghj', '10/12/2022', 'asdasd'),
(7, 'test', 'Test', 'Test', 123456, 'Test', '10/06/2022', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'test1', 'Test1', 'Test1', 123123123, 'Test1', '10/13/2022', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'test3', 'Test3', 'Test3', 123123123, 'Test3', '10/06/2022', '$2y$10$WiiPk6HGQ23u.BvpXiNzJOpdS677JVfL/YCYPdI3V/Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
