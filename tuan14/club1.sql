-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2017 at 12:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club1`
--

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `stt` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quequan` text COLLATE utf8_unicode_ci NOT NULL,
  `lop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `tieusu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`stt`, `hoten`, `quequan`, `lop`, `ngaysinh`, `tieusu`) VALUES
(1, '', 'Thanh Hoa 01', '', '1996-08-04 00:00:00', 'Không có tiểu sử'),
(2, '', 'Phú Thọ', '', '1996-07-03 00:00:00', NULL),
(3, '', '', '', '0000-00-00 00:00:00', ''),
(4, '', 'hbdh', 'hdfbhb', '1996-08-04 00:00:00', 'hvbfdhbhb'),
(5, '', '', '', '0000-00-00 00:00:00', ''),
(6, '', '', '', '0000-00-00 00:00:00', ''),
(7, '', '', '', '0000-00-00 00:00:00', ''),
(8, '', '', '', '0000-00-00 00:00:00', ''),
(9, '', 'thanh hoa', 'tin a', '1996-08-04 00:00:00', 'bla bla'),
(10, 'quynh trang', 'hvfdbhb', 'hfcbhvdb', '1996-08-04 00:00:00', 'hfghtf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`stt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
