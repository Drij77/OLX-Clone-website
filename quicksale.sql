-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 07:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darshan`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `AdID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`AdID`, `UID`, `title`, `categories`, `price`, `description`, `image`, `date`) VALUES
(1, 1, 'Boat bluetooh headphones', 'electronics', 1500, 'Boat bluetooth headphones in fully working condition and also with bill.', 'img1.jpg', '2020-12-27 18:09:45'),
(2, 1, 'Apple Macbook Pro 13 Inch with/without Touch Bar', 'laptops', 45000, ' Apple macbook unused only 4 monts used bill and bad and accesories fully complete.             8 gb ram , i5 8th gen processor, 2 gb graphics.                   Geninun byers contact only.', 'img5.jpg', '2020-12-27 18:06:53'),
(9, 4, 'lenovo Tab t30', 'mobiles', 2500, '                                        Lenovo tab white colour ,2gb ram ,20 megapixel camera, fully working condition , price negotiable.                                                              ', 'img13.jpg', '2020-12-29 17:01:39'),
(10, 4, '5-BHK Luxurious Bunglaw', 'realestate', 40000000, '5-BHK Luxurious bunglaw near trikaun baug with fully amenities like gym, hometheatre, swimming-pool, garden, and fully furnished.', 'download.jpeg', '2020-12-27 18:18:28'),
(11, 4, 'Hp laptop', 'realestate', 25, '                                        xxxxx                                     ', 'milky-way-2695569.jpg', '2020-12-26 08:43:03'),
(12, 4, 'Hp laptop', 'realestate', 25, '                                                                             ', 'StockSnap_Z5MV0VULT5_12.5f6361bbf174f9.24556378.jpg', '2020-12-26 08:58:19'),
(13, 4, 'Hp laptop777777', 'homeappliances', 34000, '                                        9090909                                     ', 'milky-way-2695569.jpg', '2020-12-26 08:58:59'),
(14, 4, 'eeee', 'sports', 44455555, '                                                                                drij                                                                          ', 'the-road-815297.jpg', '2020-12-26 09:07:22'),
(15, 4, 'www', 'furniture', 5445, 'qqqq', '', '2020-12-25 16:59:52'),
(16, 4, '', 'none', 0, '', '', '2020-12-25 12:43:55'),
(17, 4, '', 'none', 0, '', '', '2020-12-25 12:44:40'),
(19, 3, '4 BHK Luxorious for sale', 'realestate', 500000, '                                                                                                                                                                Bungalow for sale 4 bhk title clear and ', 'the-road-815297.jpg', '2021-01-14 16:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `ID` int(11) NOT NULL,
  `categoryname1` varchar(50) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`ID`, `categoryname1`, `categoryname`) VALUES
(1, 'vehicles', 'Vehicles'),
(2, 'laptops', 'Laptops'),
(3, 'mobiles', 'Mobiles'),
(4, 'furniture', 'Furniture'),
(5, 'electronics', 'Electronics'),
(6, 'realestate', 'Realestate'),
(7, 'appliances', 'Appliances'),
(8, 'jobs', 'Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `username`, `email`, `password`, `phone`, `state`, `city`) VALUES
(1, 'drij', 'drijchudasama@gmail.com', 'd', '9408509065', 'Gujarat', 'rajkot'),
(2, '', '', '', '9408509065', '', ''),
(3, 'drij', 'drijchudasam@gmail.com', '88', '6356109065', 'gujarat', 'gujarat'),
(4, 'drij', 'drijchudasama@gmail.com', '99', '9408509065', 'gujarat', 'ahemdabad'),
(5, '', 'drijchudasama@gmail.com', '1234567', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(11) NOT NULL,
  `AdID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`ID`, `AdID`) VALUES
(12, 1),
(13, 14),
(14, 2),
(15, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`AdID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `AdID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertise`
--
ALTER TABLE `advertise`
  ADD CONSTRAINT `advertise_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
