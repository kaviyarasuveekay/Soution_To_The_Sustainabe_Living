-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 07:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `build`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(22) NOT NULL,
  `designername` varchar(22) NOT NULL,
  `designercontact` varchar(22) NOT NULL,
  `designerexpertise` varchar(22) NOT NULL,
  `name` varchar(22) NOT NULL,
  `contact` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `address` varchar(22) NOT NULL,
  `dates` date NOT NULL,
  `tyme` varchar(22) NOT NULL,
  `payment` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `designername`, `designercontact`, `designerexpertise`, `name`, `contact`, `email`, `address`, `dates`, `tyme`, `payment`) VALUES
(10, 'Kaviyarasu', '7639595078', 'Renovation', 'test', '6789876909', 'jay@gmail.com', 'no:23, katpadi ', '2022-07-14', '11.00am', 'Cash'),
(11, 'Nithya', '6789764543', 'Interior', 'V kaviyarasu', '+917639595078', 'kavi@gmail.com', '9/4, deepan nager', '2022-07-07', '11.00am', 'Card'),
(12, 'Nithya', '6789764543', 'Interior', 'V kaviyarasu', '1234567898', 'kw@coderszine.com', '9/4, deepan nager', '2022-07-07', '03.00pm', 'Cash'),
(16, 'Kaviyarasu', '7639595078', 'Renovation', 'Rose', '7865789078', 'rose@gmail.com', 'karur', '2022-07-14', '03.00pm', 'Cash'),
(17, 'Shantha Lakshmi', '9878906543', 'Interior', 'aaa', '7865789078', 'aaa@gmaicom', 'madurai', '2022-07-09', '03.00pm', 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE `designers` (
  `des_id` int(22) NOT NULL,
  `designername` varchar(22) NOT NULL,
  `designeraddress` varchar(100) NOT NULL,
  `designercontact` varchar(14) NOT NULL,
  `designeremail` varchar(22) NOT NULL,
  `designerexpertise` varchar(22) NOT NULL,
  `designerpassword` varchar(22) NOT NULL,
  `pic` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designers`
--

INSERT INTO `designers` (`des_id`, `designername`, `designeraddress`, `designercontact`, `designeremail`, `designerexpertise`, `designerpassword`, `pic`) VALUES
(1, 'Ramkumar', 'george street', '9032245678', 'ram@gmail.com', 'Interior', 'sam', ''),
(2, 'sasikumar', '35-305,', '1234567546', 'sasi@gmail.com', 'Floor Plan', 'curren', 'Screenshot (914).png'),
(3, 'priya', 'stephen street', '8967890876', 'priya@gmail.com', 'Floor Plan', 'emily', ''),
(4, 'Kaviyarasu', 'VIT vellore', '7639595078', 'kaviyarasuv22@gmail.co', 'Renovation', 'kavi123', ''),
(5, 'Nithya', 'VIT vellore', '6789764543', 'nithya@gmail.com', 'Interior', 'nithya123', ''),
(6, 'Shantha Lakshmi', 'VIT vellore', '9878906543', 'lakshmi@gmail.com', 'Interior', 'lakshmi123', ''),
(7, 'Debangan', 'VIT vellore', '8090765689', 'debangan@gmail.com', 'Floor Plan', 'Debangan123', ''),
(8, 'aaa', 'aaa', '4567654321', 'aw@qwcom', 'Interior', '1234', '1.jpg'),
(9, 'Arunraj', 'chennai', '8978675645', 'arun@gmail.com', 'Floor Plan', '12345', '1.jpg'),
(10, 'Murai', 'trichy', '4567654321', 'murai@gmail.com', 'Painting', 'muraikavi', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `phone` int(11) NOT NULL,
  `subject` varchar(22) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `subject`, `feedback`) VALUES
(1, 'nish', 'de@gmail.com', 796666, 'feedback', 'nothing'),
(2, 'S.Deepan', 'deepan455614@gmail.com', 2147483647, 'das', 'das'),
(4, 'V kaviyarasu', 'kavi@gmail.com', 1234567898, 'Farm', 'hi'),
(5, 'karen', 'abcd@gmail.com', 1234567898, 'Goat', 'km'),
(6, 'karen', 'kavi@gmail.com', 2147483647, 'Farm', 'asd'),
(7, 'Rose', 'rose@gmail.com', 2147483647, 'Renovation', 'what is the renovation'),
(8, 'karen', 'karen@gmaicom', 2147483647, '3d', 'is there 3D panning and design experts there for service?');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `uid` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(6, 'admin', 'arunrkv', 'admin', 'admin@admin.com'),
(7, 'kavi', 'kavi1234', 'kaviyarasu', 'kavi@gmail.com'),
(8, 'deeban', 'deeban@123', 'dk', 'deeban@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `contact` int(22) NOT NULL,
  `home` varchar(111) NOT NULL,
  `street` varchar(22) NOT NULL,
  `city` varchar(22) NOT NULL,
  `state` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `contact`, `home`, `street`, `city`, `state`) VALUES
(1, 'S.Deepan', 'deepan455614@gmail.com', 'de', 'M', 123456, '35-305,', 'Ramar kovil street,', 'Chittoor', 'Andhra Pradesh'),
(2, 'test', 'test@gmail.com', 'test', 'M', 98312, '35-305,', 'VKA Street', 'Chittoor', 'Andhra Pradesh'),
(3, 'aaa', 'aaa@gmail.com', 'aaa', 'M', 12345, '12da', 'MMK street', 'KARUR', 'Tamil Nadu'),
(4, 'Kaviyarasu V', 'kaviv@gmail.com', 'veekay1234', 'M', 2147483647, '7A/2', 'RK Street', 'KARUR', 'Tamil Nadu'),
(5, 'Rose', 'rose@gmail.com', 'roseflower', 'F', 2147483647, '7A/2', 'kavi Street', 'Karur', 'Tamil Nadu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `designers`
--
ALTER TABLE `designers`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `designers`
--
ALTER TABLE `designers`
  MODIFY `des_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
