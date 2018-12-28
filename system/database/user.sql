-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2018 at 05:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game-tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fullname`, `address`, `phone`, `email`) VALUES
('admin', 'password', 'admin', '', '', ''),
('tw_Earth', '123456', 'thanapat wongwean', '522 OP', '0970262670', 'thanapatwongwearn@gmail.com'),
('ธนภัทร', 'Earth2906', 'ธนภัทร วงษ์แหวน', '522 โอพีแมนชั่น ห้อง506 ถนนดินแดง แขวงดินแดง เขตดินแดง จังหวัดกรุงเทพฯ 10400', '0954753025', 'thanapatwongwean@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
