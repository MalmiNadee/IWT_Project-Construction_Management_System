-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 08:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Con_Number` int(10) NOT NULL,
  `Message` text NOT NULL,
  `Date_Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `LastName`, `Email`, `Con_Number`, `Message`, `Date_Time`) VALUES
(24, 'shenuka', 'SDF', 'shenuka@gmail.com', 21345678, 'WERTYUI', '2023-06-09 06:51:10'),
(25, 'aassaasa', 'ssasassas', 'dushan123@gmail.com', 23456789, 'jjkjkjk', '2023-06-09 07:02:00'),
(26, 'aassaasa', 'ssasassas', 'dushan123@gmail.com', 23456789, 'asaasasasaasaasasasasa', '2023-06-09 07:12:59'),
(27, 'aassaasa', 'ssasassas', 'dushan123@gmail.com', 23456789, 'jjkjkjk', '2023-06-09 07:32:23'),
(28, 'dddddddddddddddddddd', 'ffffffffffffffff', 'dushan123@gmail.com', 1011212212, 'zasa', '2023-06-09 07:32:42'),
(29, 'aassaasa', 'ssasassas', 'dushan123@gmail.com', 23456789, 'asaasasasaasaasasasasa', '2023-06-09 07:32:49'),
(30, 'dddddddddddddddddddd', 'ffffffffffffffff', 'dushan123@gmail.com', 1011212212, 'ssssss', '2023-06-09 08:00:18'),
(31, 'dddddddddddddddddddd', 'ffffffffffffffff', 'dushan123@gmail.com', 1011212212, 'ssssss', '2023-06-09 09:07:47'),
(32, 'dddddddddddddddddddd', 'ffffffffffffffff', 'dushan123@gmail.com', 1011212212, 'sfsffsdfdfdffdf', '2023-06-09 23:17:20'),
(33, 'dddddddddddddddddddd', 'ssasassas', 'fgcvb@gmai.com', 23456789, 'gfg', '2023-06-09 23:19:42'),
(34, 'malinga', 'dushan', 'nimal@gmail.com', 723548796, 'good supoort', '2023-06-10 20:49:13'),
(35, 'malinga', 'dushan', 'nimal@gmail.com', 723548796, 'good supoort', '2023-06-10 20:49:20'),
(36, 'malinga', 'dushan', 'nimal@gmail.com', 723548796, 'good supoort', '2023-06-10 20:50:31'),
(37, 'malinga', 'dushan', 'nimal@gmail.com', 723548796, 'good supoort', '2023-06-10 20:51:03'),
(38, 'malinga', 'dushan', 'nimal@gmail.com', 723548796, 'good supoort', '2023-06-10 20:51:06'),
(39, 'malinga', 'dushan', 'nimal@gmail.com', 723548796, 'good supoort', '2023-06-10 20:52:55'),
(40, 'malinga', 'dushan', 'nimal@gmail.com', 723548796, 'good supoort', '2023-06-10 20:53:11'),
(41, 'malinga', 'dushan', 'nimal@gmail.com', 723548796, 'good', '2023-06-11 01:16:25'),
(42, 'malinga', 'dushan', 'nimal@gmail.com', 723548796, 'good', '2023-06-11 01:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `crudtable`
--

CREATE TABLE `crudtable` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crudtable`
--

INSERT INTO `crudtable` (`id`, `name`, `email`, `password`) VALUES
(1, 'yuwani', 'yuwani@gmail.com', '@2y4aRxXdGZmRB'),
(213, 'malinga', 'dushan123@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phoneNum` bigint(10) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Project_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstName`, `lastName`, `gender`, `phoneNum`, `birthday`, `email`, `address`, `Project_id`) VALUES
(1, 'kusal', 'Fernando', 'male', 745562454, '1996-03-16', 'Kusal85@gmail.com', 'kelaniya', 10),
(4, 'kamal', 'perera', 'male', 7236544789, '2023-06-15', 'kamal123@gmail.com', 'kandy', 2),
(12, 'Shehan', 'Perera', 'male', 713454232, '1992-08-07', 'shehan.p@gmail.com', 'Kandy', 1),
(13, 'Kavindu', 'Denuwan', 'male', 754896356, '2001-04-20', 'kavindu256@gmail.com', 'Jaffna', 2),
(14, 'Dushan', 'Malinga', 'male', 748568452, '2002-04-08', 'dushan.m@gmail.com', 'Kaluthara', 3),
(15, 'Anuththara', 'Rajapaksha', 'female', 723584457, '2002-11-25', 'anuththara.m@gmail.com', 'Colombo', 4),
(16, 'Yuwani', 'Ekanayake', 'female', 784564797, '2000-12-04', 'anuththara.m@gmail.com', 'Kurunagala', 5),
(17, 'Yumeth', 'Ransana', 'male', 756354178, '2002-12-07', 'yumeth.r@gmail.com', 'Hambanthota', 6),
(18, 'Chamindu', 'Wijerathna', 'male', 724563214, '2002-07-09', 'chamindu752@gmail.com', 'Galle', 7),
(19, 'Poornima', 'Thennakon', 'female', 714598765, '1998-02-14', 'poornima@gmail.com', 'Malabe', 8),
(20, 'Malith', 'Samarakon', 'male', 765848734, '1998-08-12', 'malith.p@gmail.com', 'mathara', 9);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `customerName` varchar(40) NOT NULL,
  `payMethod` varchar(20) NOT NULL,
  `payAmount` double NOT NULL,
  `payDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `customer_id`, `customerName`, `payMethod`, `payAmount`, `payDate`) VALUES
(10, 1, 'Shehan', 'credit card', 500000, '2023-05-16'),
(11, 2, 'kavindu', 'paypal', 1000000, '2023-05-24'),
(13, 4, 'Anuththara', 'paypal', 1800000, '2023-05-15'),
(14, 3, 'Dushan', 'credit card', 1500000, '2023-05-20'),
(15, 5, 'Yuwani', 'paypal', 2000000, '2023-05-14'),
(19, 9, 'Malith', 'credit card', 19500000, '2023-05-30'),
(21, 8, 'Poornima', 'paypal', 3600000, '2023-05-27'),
(22, 7, 'Chamindu', 'credit card', 7500000, '2023-05-28'),
(23, 6, 'Yumeth', 'credit card', 2600000, '2023-05-15'),
(24, 10, 'Kusal', 'credit card', 14500000, '2023-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`Id`, `Name`, `Comment`, `Image`) VALUES
(1, 'Anjali', '', 'uploadImage/house.jpg'),
(2, 'saman', 'Satisfied', 'uploadImage/house2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `crudtable`
--
ALTER TABLE `crudtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `crudtable`
--
ALTER TABLE `crudtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
