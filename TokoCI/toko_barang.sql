-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 10:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kdbarang` int(11) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `hargabarang` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kdbarang`, `namabarang`, `hargabarang`, `stok`) VALUES
(2, 'Mie Goreng ', 3000, 120),
(3, 'Beng Beng ', 1000, 100),
(4, 'Bimoli', 50000, 80),
(5, 'Mentega', 5000, 150),
(7, 'Shampo', 18000, 100),
(8, 'Sabun Batang', 5000, 200),
(9, 'Sabun Cair', 10000, 50),
(10, 'Beras', 50000, 30),
(11, 'Garam', 2500, 250),
(12, 'Gula', 4500, 85),
(14, 'Royco', 2000, 170),
(16, 'Roti Sobek', 2500, 75),
(17, 'Kecap', 7000, 45),
(18, 'Cuka', 3500, 60),
(19, 'Mie Instan', 3000, 130),
(20, 'Gula Merah', 4000, 90),
(21, 'Susu Cair', 15000, 35),
(22, 'Susu Bubuk', 18000, 12),
(23, 'Yakult', 9000, 50),
(24, 'Penghapus', 1500, 80),
(27, 'Mie Samyang Lv 3', 7000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `kdkasir` int(11) NOT NULL,
  `namakasir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`kdkasir`, `namakasir`, `alamat`, `telepon`) VALUES
(2, 'novian', 'surabaya', '08223456452'),
(3, 'zamzami', 'jakarta', '08567586765'),
(4, 'Minggar  Putra D.', 'Probolinggo', '085321102010');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `kdpenjualan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kdbarang` int(11) NOT NULL,
  `kdkasir` int(11) NOT NULL,
  `jumlahbeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`kdpenjualan`, `tanggal`, `kdbarang`, `kdkasir`, `jumlahbeli`) VALUES
(4, '2020-04-01', 4, 3, 5),
(6, '2018-04-16', 2, 2, 6),
(7, '2020-03-16', 3, 3, 4),
(8, '2020-02-16', 3, 2, 6),
(9, '2020-06-14', 3, 2, 1),
(10, '2020-12-24', 17, 2, 99),
(12, '2020-05-05', 20, 2, 25),
(17, '2020-12-24', 24, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `namauser` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `namauser`, `username`, `password`, `level`, `status`) VALUES
(1, 'admin', 'Admin', 'admin', 'admin', ''),
(2, 'user', 'user', 'user', 'user', 'aktif'),
(3, 'tes', 'tes', 'tes', 'user', 'pasif'),
(4, 'novian', 'novian', 'novian', 'user', 'pasif'),
(5, 'nyoba', 'nyoba', 'nyoba', 'user', 'pasif'),
(6, 'nopi', 'nopi', 'nopi', 'user', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kdbarang`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`kdkasir`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kdpenjualan`),
  ADD KEY `fkkdbarang` (`kdbarang`),
  ADD KEY `fkkdkasir` (`kdkasir`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kdbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `kdkasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `kdpenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fkkdbarang` FOREIGN KEY (`kdbarang`) REFERENCES `barang` (`kdbarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkkdkasir` FOREIGN KEY (`kdkasir`) REFERENCES `kasir` (`kdkasir`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
