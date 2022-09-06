-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 11:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create schema sheldoo;

use sheldoo;
--
-- Database: `sheldoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(230) NOT NULL,
  `adminuser` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminuser`, `adminpassword`) VALUES
(1, 'Admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `artisan`
--

CREATE TABLE `artisan` (
  `id` int(11) NOT NULL,
  `Carpentry` varchar(255) NOT NULL,
  `Plumbing` varchar(255) NOT NULL,
  `Cleaner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(22) NOT NULL,
  `namee` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subjectt` varchar(222) NOT NULL,
  `messagee` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `namee`, `email`, `subjectt`, `messagee`) VALUES
(3, 'Yaw Anim', 'yaw@gmail.com', 'Enquires', 'Please what is the least price that you currently have?');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `ImagesID` int(230) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  `Statuss` varchar(255) NOT NULL,
  `Pricee` decimal(10,2) DEFAULT NULL,
  `Bedroomm` varchar(255) NOT NULL,
  `Washroomm` varchar(200) NOT NULL,
  `Enterprisee` varchar(200) NOT NULL,
  `Locationn` varchar(200) NOT NULL,
  `Descriptionn` varchar(222) NOT NULL,
  `Contactt` varchar(255) NOT NULL,
  `videoss` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`ImagesID`, `ImageName`, `Statuss`, `Pricee`, `Bedroomm`, `Washroomm`, `Enterprisee`, `Locationn`, `Descriptionn`, `Contactt`, `videoss`) VALUES
(12, 'photo_2022-08-05_15-54-02.jpg', 'Rent', '450.00', '1', '1', 'SheldonHomes', 'Madina', '', '057568245jjj', NULL),
(13, 'photo_2022-08-05_15-54-02.jpg', 'Sale', '450.00', '1', '1', 'SheldonHomes', 'Madina', '', '057568245bb', 'video_2022-08-05_16-21-43.mp4'),
(14, 'photo_2022-08-05_15-54-02.jpg', 'Rent', '67.00', '1', '11', 'SheldonHomes', 'Madina', 'Opposite Madina Police Station', '9890', 'video_2022-08-05_16-21-43.mp4'),
(15, 'photo_2022-08-05_15-54-02.jpg', 'Rent', '450.00', '1', '1', 'SheldonHomes', 'Madina', 'Opposite Madina Police Station', '9890', 'video_2022-08-05_16-21-43.mp4'),
(16, '', 'bb', '67.00', '', '11', 'SheldonHomes', 'bbb', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Passwordd` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Email`, `Passwordd`, `Contact`, `Gender`) VALUES
(1, 'Brightjnr', 'bb@gmail.com', '92eb5ffee6ae2fec3ad71c777531578f', '3333', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artisan`
--
ALTER TABLE `artisan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`ImagesID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artisan`
--
ALTER TABLE `artisan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `ImagesID` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
