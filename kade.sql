-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 05:36 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kade`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `trolleyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`trolleyId`) VALUES
(21);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `itemCode` varchar(30) NOT NULL,
  `shop` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `qty` int(11) NOT NULL,
  `measuringUnit` varchar(10) NOT NULL,
  `unitPrice` decimal(11,2) NOT NULL,
  `minPrice` decimal(11,2) NOT NULL,
  `purchasePrice` decimal(11,2) NOT NULL,
  `itemLock` int(11) NOT NULL,
  `imgType` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `itemCode`, `shop`, `name`, `description`, `qty`, `measuringUnit`, `unitPrice`, `minPrice`, `purchasePrice`, `itemLock`, `imgType`) VALUES
(14, '', 1, 'iPhone 7 Plus', 'Released 2016, September\r\n3GB RAM\r\n188g, 7.3mm thickness\r\niOS 10.0.1, up to iOS 13.2\r\n32GB/128GB storage, no card slot', 10, 'Device', '50000.00', '50000.00', '50000.00', 0, 'jpg'),
(18, '113414', 1, 'iphone 11 pro max', 'Released 2019, September\r\n4GB RAM\r\n226g, 8.1mm thickness\r\niOS 11.1.1, up to iOS 13.4\r\n64GB storage, no card slot', 10, 'Device', '200000.00', '200000.00', '200000.00', 0, 'jpg'),
(3, '12312312', 1, 'iPhone 5s', 'Released 2013, September1GB RAM112g, 7.6mm thicknessiOS 7, up to iOS 12.432GB storage, no card slot', 10, 'Device', '14000.00', '15000.00', '0.00', 0, 'jpg'),
(13, '13123', 1, 'iPhone 7', 'Released 2016, September\r\n1GB RAM\r\n138g, 7.1mm thickness\r\niOS 10.0.1, up to iOS 13.2\r\n32GB/128GB storage, no card slot', 10, 'Device', '38000.00', '38000.00', '38000.00', 0, 'jpg'),
(5, '234234', 1, 'iPhone 8', 'Released 2017, September\r\n2GB RAM\r\n148g, 7.3mm thickness\r\niOS 11, up to iOS 13.2\r\n32GB storage, no card slot', 10, 'Device', '60000.00', '60000.00', '60000.00', 0, 'jpg'),
(16, '235235', 1, 'iPhone 8 Plus', 'Released 2017, September\r\n3GB RAM\r\n202g, 7.5mm thickness\r\niOS 11, up to iOS 13.2\r\n64GB storage, no card slot', 10, 'Device', '68000.00', '68000.00', '68000.00', 0, 'jpg'),
(4, '24234', 1, 'iPhone SE', 'Released 2016, March2GB RAM113g, 7.6mm thicknessiOS 9.3.2, up to iOS 13.232GB storage, no card slot', 10, 'Device', '25000.00', '26000.00', '26000.00', 0, 'jpg'),
(12, '345345', 1, 'iPhone 6 Plus', 'Released 2014, September\r\n1GB RAM\r\n172g, 7.1mm thickness\r\niOS 8, up to iOS 12.4\r\n16GB/32GB/128GB storage, no card slot', 10, 'Device', '28000.00', '28000.00', '28000.00', 0, 'jpg'),
(17, '546456', 1, 'iphone SE 2', 'Released 2020, May\r\n3GB RAM\r\n148g, 7.3mm thickness\r\niOS 11.1.1, up to iOS 13.4\r\n64GB storage, no card slot', 10, 'Device', '80000.00', '80000.00', '80000.00', 0, 'jpg'),
(6, 'iPhone 6s', 1, 'iPhone 6s', 'Released 2015, September2GB RAM143g, 7.1mm thicknessiOS 9, up to iOS 13.216GB/32GB storage, no card slot', 10, 'Device', '24000.00', '24000.00', '24000.00', 0, 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `qty` double(5,2) NOT NULL,
  `trolleyId` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `remarks` varchar(70) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item`, `qty`, `trolleyId`, `address`, `status`, `remarks`, `timeStamp`, `user`) VALUES
(14, 5, 3.00, 4, ',,,', 'CONFIRMED BY CUSTOMER', '', '2020-08-24 14:27:05', 2),
(7, 18, 1.00, 4, ',,,', 'CONFIRMED BY CUSTOMER', '', '2020-08-24 13:49:04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contactNo` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `nearestTown` varchar(30) NOT NULL,
  `deliveryChargeType` varchar(10) NOT NULL,
  `charge` decimal(5,2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `ownerName` varchar(30) NOT NULL,
  `ownerAddress` varchar(50) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `br_no` varchar(20) NOT NULL,
  `ownerEmail` varchar(40) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `contactNo`, `address`, `district`, `nearestTown`, `deliveryChargeType`, `charge`, `email`, `pass`, `ownerName`, `ownerAddress`, `NIC`, `br_no`, `ownerEmail`, `status`) VALUES
(1, 'ifixfast', 763726309, 'No 05,Behind the telecom,New Town ,Embilipitiya', 'Rathanapura', 'Embilipitiya', 'FIXED', '999.99', 'kcrdissanayake@gmail.com', '123456', 'Kavindu', 'No 05,Behind the telecom,New Town ,Embilipitiya', '1231231231Kk', 'Kaviya', 'kcrdissanayake@gmail.com', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tp1` int(11) NOT NULL,
  `tp2` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  `nearestTown` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `trolleyId` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `tp1`, `tp2`, `address`, `district`, `nearestTown`, `pass`, `trolleyId`, `status`) VALUES
(1, '', '', 0, 0, '', '', '', '', 3, 1),
(10, 'aa', 'abc@gmail.com', 123, 123, 'qwe', 'Colombo', 'shsj', '123', 12, 0),
(14, 'bhanu hasaranga ', 'agbnhcb@gmail.com', 2147483647, 2147483647, 'No.45vjjm jhjk', 'Kegalle', 'Polgahawela ?', 'Gasballa', 16, 0),
(15, 'bhanu hasaranga ', 'bhanu20139@gmail.com', 2147483647, 2147483647, 'No.45vjjm jhjk', 'Kegalle', 'Polgahawela ?', 'Gasballa', 17, 1),
(6, 'Damitha Ariyarathna ', 'damitha1998@gmail.com', 713601655, 779461313, 'No 187, Kalwana, Aranayake', 'Kegalle', 'Mawanella', '0713601655d', 8, 1),
(13, 'Dasuni', 'dasunin98@gmail.com', 702092242, 119, 'Knuckles ', 'Kandy', 'Kundasale', 'Dasuni', 15, 1),
(7, 'Pakaya', 'dialog@marketeka.lk', 777678678, 777678678, 'Union Place', 'Colombo', 'Colombo', 'Tricoloretotal1', 9, 0),
(8, 'Dinuka', 'dinuka.n.j@gmail.com', 252738, 36373839, 'Dheidndkdk', 'Colombo', 'nittambuwa', '123', 10, 1),
(9, 'dinuka', 'dnj@gmail.com', 11, 11, 'asd', 'Colombo', 'wer', '123', 11, 0),
(18, 'Dulshani', 'Dulshanisomrathne@gmail.com', 777490602, 777490602, 'Kegalle ', 'Kegalle', 'Kegalle ', '9767', 18, 0),
(4, 'Sandun', 'hsudndnbdg@gmail.com', 716378232, 781736271, 'Hsjkdkhdjjsijshsjjdijshdgjsokwkjhgskaks', 'Colombo', 'Vahajsnsn', '12345', 6, 0),
(5, 'Jeewanta ', 'jeewanthapublic@gmail.com', 705706116, 705706116, 'Kurunegala ', 'Kurunegala', 'Kurunegala ', 'Qwerty123', 7, 1),
(11, 'Kaviya', 'kaviya@gmail.com', 123123, 1232, 'fsdf', 'Galle', 'Emabiltitiya', '123456', 13, 0),
(2, 'Rushan Thasindu Jayasundara', 'rushanthasindu10@gmail.com', 2147483647, 2147483647, 'B 34/1, Yataththawala, Imbulgasdeniya', 'Colombo', 'Kegalle', 'rushan', 21, 1),
(12, 'Thivanka Nimesh', 'thivankanimshan@gmail.com', 774600224, 774600224, 'No 25, Habudugala Jayamawatha, Kegalle', 'Kegalle', 'Kegalle', 'thivankanimesh ', 14, 1),
(3, 'Chandima', 'vishwajith.9t@gmail.com', 710011001, 711100110, '123,abc,def rd', 'Badulla', 'badulla', 'chandima@123', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`trolleyId`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemCode`,`shop`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`item`,`trolleyId`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
