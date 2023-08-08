-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 02:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'Kepala Bagian Marketing', 'marketing', 'marketing@gmail.com', '$2y$10$dWlZGz7dRVAISidFmCanNuo20R2mK6anWNla88BcHybYlpGMc8oAu', '1'),
(11, 'ferry', 'ferry', 'ferry@gmail.com', '$2y$10$v7upUXPAi5y9VFFZruQUZ.4JwZRe6kmdj9I3IPmbpzHzLI25h2gNW', '3'),
(12, 'indrawan', 'indrawan', 'indrawan@gmail.com', '$2y$10$Mlio7E127/B5ZpW4Bs9iEurobqJZpWzR88CODlc5uPUQp3Wy/w9/u', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kritiksaran`
--

CREATE TABLE `tb_kritiksaran` (
  `id_kritiksaran` int(10) NOT NULL,
  `id_pelanggan` int(10) DEFAULT NULL,
  `kritik` varchar(200) NOT NULL,
  `saran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(15) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`) VALUES
(154, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(15) NOT NULL,
  `penjualan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `penjualan`) VALUES
(1, '﻿1.447.421.300\r\n'),
(2, '1.411.669.480\r\n'),
(3, '1.529.264.390\r\n'),
(4, '1.576.408.890\r\n'),
(5, '1.537.712.700\r\n'),
(6, '1.563.377.330\r\n'),
(7, '1.664.626.300\r\n'),
(8, '1.651.382.340');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(15) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `gambar`, `nama_produk`) VALUES
(1, '1.jpg', 'Bumbu Balado'),
(8, '2.jpg', 'Bumbu Jagung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_promosi`
--

CREATE TABLE `tb_promosi` (
  `id_promosi` int(15) NOT NULL,
  `id_penjualan` int(15) DEFAULT NULL,
  `periklanan` int(50) NOT NULL,
  `pemasaran_langsung` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_promosi`
--

INSERT INTO `tb_promosi` (`id_promosi`, `id_penjualan`, `periklanan`, `pemasaran_langsung`) VALUES
(1, 1, 60000000, 40000000),
(2, 2, 60000000, 40000000),
(3, 3, 65000000, 35000000),
(4, 4, 70000000, 30000000),
(5, 5, 75000000, 25000000),
(6, 6, 80000000, 20000000),
(7, 7, 85000000, 15000000),
(8, 8, 80000000, 30000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  ADD PRIMARY KEY (`id_kritiksaran`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_promosi`
--
ALTER TABLE `tb_promosi`
  ADD PRIMARY KEY (`id_promosi`),
  ADD KEY `tb_promosi_ibfk_1` (`id_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  MODIFY `id_kritiksaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_promosi`
--
ALTER TABLE `tb_promosi`
  MODIFY `id_promosi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  ADD CONSTRAINT `tb_kritiksaran_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_promosi`
--
ALTER TABLE `tb_promosi`
  ADD CONSTRAINT `tb_promosi_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `tb_penjualan` (`id_penjualan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
