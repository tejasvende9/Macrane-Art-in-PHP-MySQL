-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 12:02 PM
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
(1, 'ajinkya more', 'admin@gmail.com', 'admin123', 8974589556, 'What is your pet name', 'red');

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
(2, 'toran', 700, 'product_img/5583toran3.png', 'Available'),
(3, 'Jhula', 450, 'product_img/77742jhula7.jpg', 'Available'),
(4, 'key holder', 500, 'product_img/76825flower holder5.jpg', 'Available'),
(5, 'test', 300, 'product_img/77863key-holder1.jpg', 'Available'),
(6, 'my new art', 400, 'product_img/27172arjun.jpg', 'Available');

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
(1, 1395590498, 2, 2, 700, 5, 3500, 5000, 'Cash', '2023-11-02'),
(2, 1395590498, 2, 4, 500, 3, 1500, 5000, 'Cash', '2023-11-02'),
(3, 1194499931, 1, 2, 700, 10, 7000, 7000, 'Online', '2023-11-02'),
(4, 112981427, 1, 5, 300, 5, 1500, 8500, 'Online', '2023-11-03'),
(5, 112981427, 1, 2, 700, 10, 7000, 8500, 'Online', '2023-11-03'),
(6, 231930638, 1, 3, 450, 20, 9000, 13000, 'Cash', '2024-07-28'),
(7, 231930638, 1, 6, 400, 10, 4000, 13000, 'Cash', '2024-07-28'),
(8, 309011520, 1, 2, 700, 5, 3500, 8000, 'Cash', '2024-08-07'),
(9, 309011520, 1, 3, 450, 10, 4500, 8000, 'Cash', '2024-08-07');

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
(1, 'Rutuja Shelar', 'aj@gmail.com', '23456', 9865021245, 'What is your school Name', 'yc'),
(2, 'bhavika', 'bhavika@gmail.com', '12345', 9145540604, 'What is your hobby', 'shopping'),
(4, 'Priti Nikam', 'pritinikam@gmail.com', '12345', 9763456321, 'What is your hobby', 'paintinh');

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
(3, 1, 'Jhula', 'product_img/12723jhula7.jpg', 'test', 450, 'Cash');

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
(1, 4, 'Light weight compact n very preety pieces they r small in length as compared to the picture but it serves my purpose n saved me the trouble of going out n looking for them ...thank u', 'Publish');

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
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `conid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `uoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `urid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
