-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 04:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koko_pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(255) NOT NULL,
  `id_kategori` varchar(255) NOT NULL,
  `id_suplier` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_jual` int(255) NOT NULL,
  `harga_beli` int(255) NOT NULL,
  `stok` int(255) NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `id_suplier`, `nama_barang`, `harga_jual`, `harga_beli`, `stok`, `tgl_update`) VALUES
('BRG001', 'KAT001', 'SUP001', 'Makanan kucing serbaguna', 20000, 15000, 0, '2021-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi_pelanggan`
--

CREATE TABLE `detail_transaksi_pelanggan` (
  `id_detail_tp` int(255) NOT NULL,
  `id_transaksi` varchar(255) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('KAT001', 'Makanan'),
('KAT002', 'Cemilan 2'),
('KAT003', 'Minuman'),
('KAT004', 'Paking');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_operator` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `password`, `nama_operator`, `level`) VALUES
('ADM001', '123', 'A', 4),
('ADM002', '123', 'b', 4),
('OPR003', '123', 'a', 3),
('OPR004', '123', 'b', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` int(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_suplier` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `password`, `nama_suplier`, `no_telp`, `level`) VALUES
('SUP001', '123', 'Mahkota Raja EDITED', '1234', 2),
('SUP002', '123', 'AQUA', '123123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pelanggan`
--

CREATE TABLE `transaksi_pelanggan` (
  `id_transaksi` varchar(255) NOT NULL,
  `id_pelanggan` varchar(255) NOT NULL,
  `id_operator` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detail_transaksi_pelanggan`
--
ALTER TABLE `detail_transaksi_pelanggan`
  ADD PRIMARY KEY (`id_detail_tp`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indexes for table `transaksi_pelanggan`
--
ALTER TABLE `transaksi_pelanggan`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi_pelanggan`
--
ALTER TABLE `detail_transaksi_pelanggan`
  MODIFY `id_detail_tp` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
