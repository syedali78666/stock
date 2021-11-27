-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2021 at 05:39 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 5.6.40-47+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `stocktbl`
--

CREATE TABLE `stocktbl` (
  `id_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `stock_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stocktbl`
--

INSERT INTO `stocktbl` (`id_no`, `date`, `stock_name`, `price`, `created`, `modified`) VALUES
(1, '2020-02-11', 'AAPL', '320', '2021-11-26 18:12:58', '2021-11-26 18:12:58'),
(2, '2020-02-11', 'GOOGL', '1510', '2021-11-26 18:12:58', '2021-11-26 18:12:58'),
(3, '2020-02-11', 'MSFT', '185', '2021-11-26 18:12:58', '2021-11-26 18:12:58'),
(4, '2020-02-12', 'GOOGL', '1518', '2021-11-26 18:12:58', '2021-11-26 18:12:58'),
(5, '2020-02-12', 'MSFT', '184', '2021-11-26 18:12:58', '2021-11-26 18:12:58'),
(6, '2020-02-13', 'AAPL', '324', '2021-11-26 18:12:58', '2021-11-26 18:12:58'),
(7, '2020-02-14', 'GOOGL', '1520', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(8, '2020-02-15', 'AAPL', '319', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(9, '2020-02-15', 'GOOGL', '1523', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(10, '2020-02-15', 'MSFT', '189', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(11, '2020-02-16', 'GOOGL', '1530', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(12, '2020-02-18', 'AAPL', '319', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(13, '2020-02-18', 'MSFT', '187', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(14, '2020-02-19', 'AAPL', '323', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(15, '2020-02-21', 'AAPL', '313', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(16, '2020-02-21', 'GOOGL', '1483', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(17, '2020-02-21', 'MSFT', '178', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(18, '2020-02-22', 'GOOGL', '1485', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(19, '2020-02-22', 'MSFT', '180', '2021-11-26 18:12:59', '2021-11-26 18:12:59'),
(20, '2020-02-23', 'AAPL', '320', '2021-11-26 18:12:59', '2021-11-26 18:12:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stocktbl`
--
ALTER TABLE `stocktbl`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stocktbl`
--
ALTER TABLE `stocktbl`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
