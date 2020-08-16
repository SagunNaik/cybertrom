-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 09:48 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybertrom_user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE `systemuser` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`username`, `password`, `Name`) VALUES
('test', 'test123', 'Test User'),
('spidy', '123', 'Sagun');

-- --------------------------------------------------------

--
-- Table structure for table `userresponse`
--

CREATE TABLE `userresponse` (
  `Uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `photo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userresponse`
--

INSERT INTO `userresponse` (`Uid`, `name`, `address`, `phone`, `email`, `dob`, `photo`) VALUES
(1, 'Test', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test@test.com', '2020-07-27', 'test@12345678.jpg'),
(2, 'test 1', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test1@test.com', '2020-07-28', 'test1@12345678.jpg'),
(3, 'test 3', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test2@test.com', '2020-07-29', 'test2@12345678.jpg'),
(4, 'test 4', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test4@test.com', '2020-07-30', 'test4@12345678.jpg'),
(5, 'test 5', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test5@test.com', '2020-07-31', 'test5@12345678.jpg'),
(6, 'test 6', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test6@test.com', '2020-08-01', 'test6@12345678.jpg'),
(7, 'test 7', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test7@test.com', '2020-08-02', 'test7@12345678.jpg'),
(8, 'test 8', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test8@test.com', '2020-08-03', 'test8@12345678.jpg'),
(9, 'test 9', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test9@test.com', '2020-08-04', 'test9@12345678.jpg'),
(10, 'test 10', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test10@test.com', '2020-08-04', 'test10@12345678.jpg'),
(11, 'test 11', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test11@test.com', '2020-08-05', 'test11@12345678.jpg'),
(12, 'test 12', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test12@test.com', '2020-08-05', 'test12@12345678.jpg'),
(13, 'test 13', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test13@test.com', '2020-08-06', 'test13@12345678.jpg'),
(14, 'test 14', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test14@test.com', '2020-08-07', 'test14@12345678.jpg'),
(15, 'test 15', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test15@test.com', '2020-08-08', 'test15@12345678.jpg'),
(16, 'test 16', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test16@test.com', '2020-08-09', 'test16@12345678.jpg'),
(17, 'test 17', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test17@test.com', '2020-08-09', 'test17@12345678.jpg'),
(18, 'test 18', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test18@test.com', '2020-08-10', 'test18@12345678.jpg'),
(19, 'test 19', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test19@test.com', '2020-08-10', 'test19@12345678.jpg'),
(20, 'Test 20', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test20@test.com', '2020-08-10', 'test20@12345678.jpg'),
(21, 'test 21', 'H.NO:2300,KAREKHAJAN WADA VIRDI SANQUELIM GOA', '1234567890', 'test21@test.com', '2020-08-11', 'test21@12345678.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userresponse`
--
ALTER TABLE `userresponse`
  ADD PRIMARY KEY (`Uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userresponse`
--
ALTER TABLE `userresponse`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
