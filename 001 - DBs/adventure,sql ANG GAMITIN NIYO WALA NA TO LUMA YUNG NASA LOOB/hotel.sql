-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 04:36 AM
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
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(10) NOT NULL,
  `place` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `hotel-name` varchar(25) NOT NULL,
  `package` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `place`, `type`, `hotel-name`, `package`, `description`, `image`, `price`) VALUES
(1, 'Batangas', 'Beach', 'Coral Beach Club', 'Package 1', 'PREMIER GOOD FOR 2 PAX FREE BREAKFAST FOR 2 PARKING, COFFEE &amp; TEA, FREE WIFI, DRINKING WATER P4,737/NIGHT', 'uploaded_img_file/282163998_160364596461429_6658116619826625972_n.jpg', 4737),
(3, 'Batangas', 'Beach', 'Matabungkay Beach Hotel', 'Package 1', 'DELUXE GOOD FOR 1-2 PAX FREE BREAKFAST FOR 2 PARKING, FREE WIFI', 'uploaded_img_file/293998790_5564799523575756_2576938533263960021_n.jpg', 4441),
(4, 'Batangas', 'Beach', 'Crusoe Cabins Casobe', 'Garden Cabin', 'GOOD FOR 2-4 PAX 1 QUEEN BED FREE BREAKFAST', 'uploaded_img_file/296104073_1196480684475103_3031332987541645819_n.jpg', 9552);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price` (`price`),
  ADD KEY `price_2` (`price`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
