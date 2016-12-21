-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2016 at 01:21 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoris`
--

CREATE TABLE `aksesoris` (
  `id_aksesoris` int(20) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama_aksesoris` varchar(100) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `harga_aksesoris` int(50) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aksesoris`
--

INSERT INTO `aksesoris` (`id_aksesoris`, `jenis`, `nama_aksesoris`, `jumlah_barang`, `harga_aksesoris`, `keterangan`, `gambar`) VALUES
(1001, 'T-shirt', 'T-Shirt Polygon XL', 10, 75000, 'warna dasar merah, dengan lis biru', 't-shirt_polygon.png'),
(1002, 'Lampu', 'Lampu Sepeda', 8, 45000, 'lampu depan belakang', 'lampu_sepeda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `type` enum('admin','user','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `user`, `pass`, `type`) VALUES
(1, 'Administrator', 'admin', '$2y$10$UTDfSYDge3Hyw7duD2S/VeRkar/TtR56In5IR0TlbHkH42OqgJg72', 'admin'),
(2, 'Personal User', 'user', '$2y$10$yNRytSTDHHOR6Q4UQHc2yOtJQFuIJ/t7/sgzSXfiYrYwXpyMk5PTC', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE `sepeda` (
  `kode_sepeda` int(5) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `nama_sepeda` varchar(50) NOT NULL,
  `size_sepeda` varchar(2) NOT NULL,
  `harga_sepeda` int(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepeda`
--

INSERT INTO `sepeda` (`kode_sepeda`, `merek`, `nama_sepeda`, `size_sepeda`, `harga_sepeda`, `jumlah_barang`, `gambar`) VALUES
(9, 'Polygon', 'Xtrada 2.0', '26', 5500000, 3, 'extrada2,0.jpg'),
(11, 'Thrill', 'Ricochet 5.0', '26', 5600000, 7, 'thrill_ricochet5,0.jpg'),
(13, 'Thrill', 'Ricochet 3.0', '26', 5600000, 7, 'thrill_ricochet_3,0.jpg'),
(15, 'Thrill', 'Ricochet 4.0', '26', 5600000, 7, 'thrill_ricochet_4,0.jpg'),
(26, 'Polygon', 'Monarch 3.0', '26', 5600000, 10, 'monarch_3,0.png'),
(28, 'Polygon', 'Xtrada 4.0', '26', 5600000, 7, 'xtrada_40.jpg'),
(32, 'Family', 'Truck', '16', 800000, 7, 'family_truck_16.JPG'),
(33, 'WTP', 'BMX WTP Justice', '20', 3000000, 3, 'wtp_justice.jpg'),
(37, 'Thrill', 'Ricochet 2.0', '26', 3000000, 5, 'thrill2,0.png'),
(38, 'Wimcycle', 'Dragster', '20', 1300000, 3, 'dragster.jpg'),
(40, 'Wimcycle', 'Strawberry', '12', 800000, 3, 'wimcycle_strawberry_18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sperpart`
--

CREATE TABLE `sperpart` (
  `id_sperpart` int(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama_sperpart` varchar(50) NOT NULL,
  `harga_sperpart` int(50) NOT NULL,
  `jumlah_barang` int(25) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sperpart`
--

INSERT INTO `sperpart` (`id_sperpart`, `jenis`, `nama_sperpart`, `harga_sperpart`, `jumlah_barang`, `keterangan`, `gambar`) VALUES
(101, 'Frame', 'Frame Mountain Bike', 1530000, 3, 'Untuk jenis sepeda Trill ricoset 3.0', 'IMG_20160325_212329.jpg'),
(103, 'Helm', 'Helm Polygon', 200000, 7, '', 'P_20160122_145659.jpg'),
(105, 'Headset', 'Headset Necco', 70000, 5, 'Untuk sepeda gunung stang besar', 'P_20160123_164823.jpg'),
(106, 'Pedal', 'Pedal Polygon', 150000, 5, '', 'P_20160124_102929.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_chart`
--

CREATE TABLE `table_chart` (
  `id_penjualan` int(10) NOT NULL,
  `nama_sepeda` varchar(100) NOT NULL,
  `ukuran_sepeda` varchar(10) NOT NULL,
  `harga_sepeda` int(50) NOT NULL,
  `tanggal_pemebelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD PRIMARY KEY (`id_aksesoris`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`kode_sepeda`);

--
-- Indexes for table `sperpart`
--
ALTER TABLE `sperpart`
  ADD PRIMARY KEY (`id_sperpart`);

--
-- Indexes for table `table_chart`
--
ALTER TABLE `table_chart`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksesoris`
--
ALTER TABLE `aksesoris`
  MODIFY `id_aksesoris` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `kode_sepeda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `sperpart`
--
ALTER TABLE `sperpart`
  MODIFY `id_sperpart` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `table_chart`
--
ALTER TABLE `table_chart`
  MODIFY `id_penjualan` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
