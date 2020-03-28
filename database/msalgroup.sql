-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 05:34 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msalgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `dtb_stok`
--

CREATE TABLE `dtb_stok` (
  `id` int(11) NOT NULL,
  `account` varchar(100) NOT NULL,
  `nama_barang` varchar(110) NOT NULL,
  `sat` varchar(50) NOT NULL,
  `saldo_awal` int(100) NOT NULL,
  `qty_masuk` int(100) NOT NULL,
  `qty_keluar` int(100) NOT NULL,
  `saldo_akhir` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dtb_stok`
--

INSERT INTO `dtb_stok` (`id`, `account`, `nama_barang`, `sat`, `saldo_awal`, `qty_masuk`, `qty_keluar`, `saldo_akhir`) VALUES
(1, '102505990000001', 'AC SPLIT 1 PK', 'UNIT', 2, 0, 2, 0),
(2, '102505990000190', 'AC SPLIT 1/2 PK', 'UNIT', 1, 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dtb_stok`
--
ALTER TABLE `dtb_stok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dtb_stok`
--
ALTER TABLE `dtb_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
