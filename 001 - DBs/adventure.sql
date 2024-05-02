-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 04:20 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `position`) VALUES
(1, 'Jonathan', 'Bacarac', 'jbacarac', 'eajb2002', 'Owner'),
(2, 'Jaron', 'Andrade', 'jandrade', '1234', 'Admin'),
(3, 'Jeruel', 'Canete', 'jcanete', '1234', 'Admin'),
(4, 'Marco', 'Danga', 'mdanga', '1234', 'Admin'),
(5, 'Danica', 'Salenga', 'dsalenga', '1234', 'Admin'),
(7, 'Janver', 'Ramirez', 'jramirez', '12345', 'Admin'),
(8, 'Maximus', 'Bacarac', 'mbacarac', '1234', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(13) NOT NULL,
  `place` varchar(100) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `promo` varchar(100) NOT NULL,
  `checkin` varchar(100) NOT NULL,
  `checkout` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(10) NOT NULL,
  `place` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `hotel-name` varchar(255) NOT NULL,
  `package` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `place`, `type`, `hotel-name`, `package`, `description`, `image`, `price`) VALUES
(1, 'Batangas', 'Beach', 'Coral Beach Club', 'Package 1', 'PREMIER GOOD FOR 2 PAX FREE BREAKFAST FOR 2 PARKING, COFFEE &amp; TEA, FREE WIFI, DRINKING WATER', 'uploaded_img_file/bata-pack1.png', 4737),
(3, 'Batangas', 'Beach', 'Matabungkay Beach Hotel', 'Package 1', 'DELUXE GOOD FOR 1-2 PAX FREE BREAKFAST FOR 2 PARKING, FREE WIFI', 'uploaded_img_file/293998790_5564799523575756_2576938533263960021_n.jpg', 4441),
(4, 'Batangas', 'Beach', 'Crusoe Cabins Casobe', 'Garden Cabin', 'GOOD FOR 2-4 PAX 1 QUEEN BED FREE BREAKFAST', 'uploaded_img_file/296104073_1196480684475103_3031332987541645819_n.jpg', 9552),
(6, 'Batangas', 'Mountain', 'Laiya Park Adventure', 'Package A', 'Zipline (630m), Wall Climb, Rappelling, Freefall, Aerial Walk, Giant Swing, Infinity Pool', 'uploaded_img_file/bata1.png', 670),
(7, 'Pangasinan', 'Beach', 'Treasures of Bolinao', 'Package 1', 'Mainhouse Garden View Standard Room good for 2 pax free breakfast free entertainment activity for 1 hour', 'uploaded_img_file/pang-pack1.jpg', 6000),
(8, 'Pangasinan', 'Beach', 'Treasures of Bolinao', 'Package 2', 'Mainhouse Ocean View Suite good for 4 - 6 pax free breakfast free entertainment activity for 1 hour', 'uploaded_img_file/pang-pack2.jpg', 10000),
(9, 'Pangasinan', 'Beach', 'Treasures of Bolinao', 'Package 3', 'Mainhouse Ocean View VIP Room good for 4 - 6 pax free breakfast free entertainment activity for 1 hour', 'uploaded_img_file/pang-pack3.jpg', 12000),
(10, 'Pangasinan', 'Mountain', 'Balungao Hilltop Adventure', 'Adventure Package A', 'Zipline No.1 and 2, Cable Biking, plus 15 mins ATV driving', 'uploaded_img_file/asdas.jpg', 1000),
(12, 'Pangasinan', 'Mountain', 'Balungao Hilltop Adventure', 'Adventure Package B', 'Zipline No.1, and 2, plus 15 mins ATV driving', 'uploaded_img_file/asdsad.jpg', 850),
(13, 'Pangasinan', 'Touristspot', 'Manaoag Hotel', 'Standard Room', '1 Pax, Free Wi-Fi, Hot and Cold Shower, Cable TV', 'uploaded_img_file/manaoaghotel.jpeg', 900),
(15, 'Pangasinan', 'Inn', 'WildFlower Inn', 'Budget Friendly', '2 PAX, FREE WIFI, KING BED, AIRCON', 'uploaded_img_file/0b8c76a4_z.jpg', 1400),
(16, 'Pangasinan', 'Resort', 'RiverSide Resort', 'Kubo', 'Karaoke 3 Pools with Slides', 'uploaded_img_file/pang1.jpg', 300),
(17, 'Pangasinan', 'Beach', 'Hotel ni Janver', 'Package 1', 'WLA LANG PLSESEADASDA', 'uploaded_img_file/cebu-pack1.jpg', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `number`, `subject`, `message`) VALUES
(0, 'Hello', 'jonathankram368@gmail.com', '09123456789', 'Point Grades', 'asdasdasasdasd');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price` (`price`),
  ADD KEY `price_2` (`price`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
