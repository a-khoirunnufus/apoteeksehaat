-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 12:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apoteksehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(10) NOT NULL,
  `nama_obat` varchar(100) DEFAULT NULL,
  `golongan_obat` varchar(50) DEFAULT NULL,
  `bentuk_obat` varchar(50) DEFAULT NULL,
  `harga_pokok` int(10) DEFAULT NULL,
  `harga_jual` int(10) DEFAULT 0,
  `isi_obat` int(10) DEFAULT NULL,
  `stok_min` int(10) DEFAULT NULL,
  `stok_gudang` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `golongan_obat`, `bentuk_obat`, `harga_pokok`, `harga_jual`, `isi_obat`, `stok_min`, `stok_gudang`) VALUES
(1, 'ANADIUM', 'TABLET BEBAS', 'TABLET', 10000, 15000, 4, 100, 125),
(2, 'ANADIUM SYRUP', 'SYRUP', 'SYRUP', 8000, 10000, 45, 100, 44);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(10) NOT NULL,
  `no_faktur` varchar(10) DEFAULT NULL,
  `id_obat` int(10) NOT NULL,
  `jumlah_obat` int(10) NOT NULL,
  `tanggal` varchar(10) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `id_supplier` int(10) DEFAULT NULL,
  `tanggal_kadaluarsa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `no_faktur`, `id_obat`, `jumlah_obat`, `tanggal`, `jenis`, `id_supplier`, `tanggal_kadaluarsa`) VALUES
(1, 'ABCD', 2, 15, '12/12/2020', 'TUNAI', 1, '12/12/2030');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `tipe_pengguna` varchar(10) DEFAULT NULL,
  `foto_profil` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `tipe_pengguna`, `foto_profil`, `no_hp`, `email`) VALUES
(1, 'Pongki Barata', 'admin', 'admin', 'admin', 'profile-1.jpg', '082181818181', 'pongki@gmail.com'),
(2, 'Budi Hermawan', 'budihermawan', 'apoteker', 'apoteker', 'profile-2.jpg', '082181818181', 'budihermawan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(10) NOT NULL,
  `nama_konsumen` varchar(100) DEFAULT NULL,
  `id_obat` int(10) NOT NULL,
  `jumlah_obat` int(10) NOT NULL,
  `tanggal` varchar(10) DEFAULT NULL,
  `harga_total` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `nama_konsumen`, `id_obat`, `jumlah_obat`, `tanggal`, `harga_total`) VALUES
(1, 'dodo', 1, 12, '12/12/2020', 12000),
(2, 'didi', 2, 15, '12/12/2020', 767);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(10) NOT NULL,
  `nama_supplier` varchar(100) DEFAULT NULL,
  `alamat_supplier` varchar(500) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_telepon`, `email`) VALUES
(1, 'Merapi Utama Pharma', 'Jl. Cilosari 23 Cikini Menteng Jakarta', '0213141506', 'merapiutama@gmial.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
