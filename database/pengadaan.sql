-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 07:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengadaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_kode` varchar(50) NOT NULL,
  `barang_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `jenis_id` varchar(10) NOT NULL,
  `jenis_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_barang`
--

CREATE TABLE `pembelian_barang` (
  `pembelian_id` int(11) NOT NULL,
  `pemohonan_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `pembelian_jml` float DEFAULT NULL,
  `pembelian_tgl_buat` date DEFAULT NULL,
  `pembelian_tgl_selesai` date DEFAULT NULL,
  `pembelian_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemohonan_pengadaan`
--

CREATE TABLE `pemohonan_pengadaan` (
  `pemohonan_id` int(11) NOT NULL,
  `barang_kode` varchar(50) NOT NULL,
  `pemohonan_jml` float NOT NULL,
  `pemohonan_tgl_buat` date NOT NULL,
  `pemohonan_tgl_deadline` date NOT NULL,
  `pemohonan_tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_barang`
--

CREATE TABLE `penerimaan_barang` (
  `penerimaan_id` int(11) NOT NULL,
  `pembelian_id` int(11) DEFAULT NULL,
  `penerimaan_tgl` date DEFAULT NULL,
  `penerimaan_jml` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `satuan_barang`
--

CREATE TABLE `satuan_barang` (
  `supplier_id` int(11) NOT NULL,
  `supplier_nama` varchar(50) NOT NULL,
  `supplier_alamat` varchar(50) NOT NULL,
  `supplier_no_telp` varchar(50) NOT NULL,
  `supplier_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(1, 'senioktvnii', 'senioktoviani@gmail.com', '$2y$10$9GYsk7OK8H1sVtgd5wCQ9uIFGEv0H1Hzu.Cp6j3PasrW6OVBq/W8S', 'seni oktoviani', 'default.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_kode`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indexes for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  ADD PRIMARY KEY (`pembelian_id`),
  ADD KEY `pemohonan_id` (`pemohonan_id`);

--
-- Indexes for table `pemohonan_pengadaan`
--
ALTER TABLE `pemohonan_pengadaan`
  ADD PRIMARY KEY (`pemohonan_id`);

--
-- Indexes for table `penerimaan_barang`
--
ALTER TABLE `penerimaan_barang`
  ADD PRIMARY KEY (`penerimaan_id`),
  ADD KEY `pembelian_id` (`pembelian_id`);

--
-- Indexes for table `satuan_barang`
--
ALTER TABLE `satuan_barang`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  ADD CONSTRAINT `pembelian_barang_ibfk_1` FOREIGN KEY (`pemohonan_id`) REFERENCES `pemohonan_pengadaan` (`pemohonan_id`);

--
-- Constraints for table `penerimaan_barang`
--
ALTER TABLE `penerimaan_barang`
  ADD CONSTRAINT `penerimaan_barang_ibfk_1` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian_barang` (`pembelian_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
