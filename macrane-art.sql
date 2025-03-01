-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 10:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `macrane-art`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(250) NOT NULL,
  `aemail` varchar(250) NOT NULL,
  `apass` varchar(250) NOT NULL,
  `amob` bigint(20) NOT NULL,
  `aque` varchar(100) NOT NULL,
  `aans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `apass`, `amob`, `aque`, `aans`) VALUES
(1, 'admin', 'admin3@gmail.com', 'admin123', 8974589557, 'What is your pet name', 'moti');

-- --------------------------------------------------------

--
-- Table structure for table `admindetail`
--

CREATE TABLE `admindetail` (
  `aid` int(11) NOT NULL,
  `aname` varchar(250) NOT NULL,
  `aemail` varchar(250) NOT NULL,
  `apass` varchar(250) NOT NULL,
  `amob` bigint(20) NOT NULL,
  `aque` varchar(100) NOT NULL,
  `aans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindetail`
--

INSERT INTO `admindetail` (`aid`, `aname`, `aemail`, `apass`, `amob`, `aque`, `aans`) VALUES
(1, 'admin', 'admin3@gmail.com', 'admin123', 8974589557, 'What is your pet name', 'moti');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `aid` int(11) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `aprice` int(11) NOT NULL,
  `aphoto` varchar(200) NOT NULL,
  `astatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`aid`, `aname`, `aprice`, `aphoto`, `astatus`) VALUES
(1, 'Flower holder', 200, 'product_img/60361flower-holder-1.jpg', 'Unavailable'),
(2, 'flower pot pista', 150, 'product_img/24536flower pot1.jpg', 'Available'),
(3, 'flower pot yellow', 200, 'product_img/32710flower pot3.jpg', 'Available'),
(4, 'flower holder green', 180, 'product_img/47556flower holder5.jpg', 'Available'),
(5, 'jhula ', 180, 'product_img/84117jhula1.jpg', 'Available'),
(6, 'Jhula', 180, 'product_img/25666jhula8.png', 'Available'),
(7, 'mirror', 250, 'product_img/64729mirror1.jpg', 'Available'),
(8, 'mirror', 300, 'product_img/60551mirror2.jpg', 'Available'),
(9, 'key holder', 310, 'product_img/66755key holder2.jpg', 'Available'),
(10, 'key-holder', 280, 'product_img/58250key-holder1.jpg', 'Available'),
(11, 'mobile holder', 350, 'product_img/89863mobile holder2.jpg', 'Available'),
(12, 'mobile holder', 250, 'product_img/92926mobile holder6.jpg', 'Available'),
(13, 'toran', 250, 'product_img/37443toran1.jpg', 'Available'),
(14, 'toran', 400, 'product_img/63347toran3.png', 'Available'),
(15, 'Toran', 150, 'product_img/73343toran8.jpg', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `conid` int(11) NOT NULL,
  `coname` varchar(200) NOT NULL,
  `comob` bigint(20) NOT NULL,
  `coemail` varchar(250) NOT NULL,
  `comsg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`conid`, `coname`, `comob`, `coemail`, `comsg`) VALUES
(1, 'Raju', 7894561230, 'raju@gmail.com', 'hello sir!');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `coid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `gtotal` int(11) NOT NULL,
  `pay_method` varchar(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`coid`, `oid`, `uid`, `aid`, `price`, `qty`, `total`, `gtotal`, `pay_method`, `date`) VALUES
(1, 1988426031, 1, 4, 180, 12, 2160, 8310, 'Cash', '2023-10-30'),
(2, 1988426031, 1, 11, 350, 15, 5250, 8310, 'Cash', '2023-10-30'),
(3, 1988426031, 1, 5, 180, 5, 900, 8310, 'Cash', '2023-10-30'),
(4, 1432680328, 2, 10, 280, 15, 4200, 8950, 'Online', '2023-11-01'),
(5, 1432680328, 2, 3, 200, 5, 1000, 8950, 'Online', '2023-11-01'),
(6, 1432680328, 2, 13, 250, 15, 3750, 8950, 'Online', '2023-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uid` int(11) NOT NULL,
  `unm` varchar(100) NOT NULL,
  `uemail` varchar(250) NOT NULL,
  `upass` varchar(250) NOT NULL,
  `umob` bigint(20) NOT NULL,
  `uque` varchar(250) NOT NULL,
  `uans` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `unm`, `uemail`, `upass`, `umob`, `uque`, `uans`) VALUES
(1, 'Ram', 'ram3@gmail.com', 'ram123', 8974589557, 'What is your hobby', 'play'),
(2, 'akshay', 'akshay2@gmail.com', 'akshay123', 9875482486, 'What is your hobby', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `uoid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `anm` varchar(250) NOT NULL,
  `aphoto` varchar(250) NOT NULL,
  `amsg` varchar(250) NOT NULL,
  `abill` int(11) NOT NULL,
  `apay_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`uoid`, `uid`, `anm`, `aphoto`, `amsg`, `abill`, `apay_method`) VALUES
(1, 1, 'Mobile Holder', 'order_img/90660mobile holder2.jpg', 'Colour change in red', 582, 'Cash'),
(2, 1, 'Flower Pot', 'order_img/36219flower pot3.jpg', 'In black colour', 350, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
  `urid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `urmsg` varchar(250) NOT NULL,
  `urstatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`urid`, `uid`, `urmsg`, `urstatus`) VALUES
(1, 1, 'Great Artist', 'publish'),
(2, 1, 'Work Is not Good', 'Publish'),
(3, 2, 'bad Word', 'unpublish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admindetail`
--
ALTER TABLE `admindetail`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`conid`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`uoid`);

--
-- Indexes for table `user_review`
--
ALTER TABLE `user_review`
  ADD PRIMARY KEY (`urid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admindetail`
--
ALTER TABLE `admindetail`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `conid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `uoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `urid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
