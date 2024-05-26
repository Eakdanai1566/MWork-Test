-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 09:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `requestid` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `leavetype` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `startdat` date NOT NULL,
  `enddat` date NOT NULL,
  `savedat` date NOT NULL,
  `stat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`requestid`, `firstname`, `lastname`, `position`, `email`, `phonenumber`, `leavetype`, `reason`, `startdat`, `enddat`, `savedat`, `stat`) VALUES
(1, 'Eakdanai', 'Tanuphon', 'Developer', 'eakdanai.tan@student.mahidol.edu', '0886462999', 'business', 'Songkran', '2024-05-30', '2024-05-31', '2024-05-26', 'approve'),
(2, 'Channaront', 'Rittisorntanu', 'Business Analyst', 'channarong.rit@student.mahidol.edu', '0812852999', 'sick', 'Covid-19', '2024-05-29', '2024-05-30', '2024-05-26', 'approve'),
(3, 'Sonchai', 'Jiddee', 'Accoutane', 'somchai@somchai.com', '000000', 'business', 'Songkran', '2024-05-29', '2024-05-30', '2024-05-26', 'approve'),
(4, 'chujai', 'somsri', 'HR', 'chujai@gmail.com', '0814789523', 'sick', 'COVID', '2024-06-04', '2024-06-05', '2024-05-26', 'reject'),
(5, 'franklin', 'benjamin', 'Manager', 'frankling@gmai.com', '0845795236', 'vacation', 'My dad is deceased', '2024-06-04', '2024-06-05', '2024-05-26', 'reject'),
(6, 'Victor', 'Frankenstein', 'Electrical Engineer', 'victor@gmai.com', '0851478569', 'business', 'Rest', '2024-06-05', '2024-06-06', '2024-05-26', 'approve'),
(7, 'Dextor', 'Robinson', 'IT Support', 'dextor@gmail.com', '0214785697', 'sick', 'Ebola', '2024-05-31', '2024-06-01', '2024-05-26', 'reject'),
(8, 'Pichaya', 'Sidaeng', 'Full Stack Developer', 'pichaya@gmail.com', '0547896547', 'business', 'Relax', '2024-06-18', '2024-06-19', '2024-05-26', 'Considering'),
(9, 'Sarah', 'Wester', 'Secretary', 'sarah@gmail.com', '0847895214', 'vacation', 'My mom is deceased', '2024-05-29', '2024-05-30', '2024-05-26', 'Considering'),
(10, 'Chakkree', 'Sudtee', 'Business Development', 'chrakkree@gmail.com', '0856987412', 'sick', 'COVID', '2024-06-04', '2024-06-05', '2024-05-26', 'Considering'),
(11, 'Thanamonkel', 'Senavithunkit', 'Front End Developer', 'bew.thanamonkol@gmail.com', '0217854785', 'sick', 'Fever', '2024-05-29', '2024-05-30', '2024-05-26', 'reject'),
(12, 'sdfsdsdf', 'sdfsd', 'sdfssfd', 'sdfsdfdf', '0214587', 'sick', 'COVID', '2024-05-29', '2024-06-01', '2024-05-26', 'Considering'),
(13, 'Riktor', 'Foren', 'Developer', 'riktor@gmail', '0886462999', 'business', 'Relax', '2024-05-30', '2024-05-31', '2024-05-26', 'approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`requestid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `requestid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
