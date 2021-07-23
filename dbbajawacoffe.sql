-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 08:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbajawacoffe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_nota`
--

CREATE TABLE `tb_detail_nota` (
  `id` int(11) NOT NULL,
  `kodeNota` varchar(255) NOT NULL,
  `kodeMakanan` varchar(255) NOT NULL,
  `jumlahItem` int(20) NOT NULL,
  `subTotal` varchar(255) NOT NULL,
  `hargaSatuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_nota`
--

INSERT INTO `tb_detail_nota` (`id`, `kodeNota`, `kodeMakanan`, `jumlahItem`, `subTotal`, `hargaSatuan`) VALUES
(1, '001', 'kp', 2, '5000', '2500'),
(2, '001', 'rt', 1, '2000', '2000'),
(3, '002', 'mc', 2, '4000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `id` int(20) NOT NULL,
  `kodeMakanan` varchar(255) NOT NULL,
  `namaMakanan` varchar(255) NOT NULL,
  `jenisMakanan` int(11) NOT NULL,
  `hargaMakanan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_makanan`
--

INSERT INTO `tb_makanan` (`id`, `kodeMakanan`, `namaMakanan`, `jenisMakanan`, `hargaMakanan`, `gambar`) VALUES
(1, 'KP', 'Kopi', 1, '15000', '1030987.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nota`
--

CREATE TABLE `tb_nota` (
  `id` int(20) NOT NULL,
  `namaCustomer` varchar(255) NOT NULL,
  `tanggalNota` varchar(255) NOT NULL,
  `nohpCustomer` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `kodeNota` varchar(255) NOT NULL,
  `totalHarga` varchar(255) NOT NULL,
  `statusOrder` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nota`
--

INSERT INTO `tb_nota` (`id`, `namaCustomer`, `tanggalNota`, `nohpCustomer`, `note`, `kodeNota`, `totalHarga`, `statusOrder`) VALUES
(1, 'Secha', '16 November 2020', '085', 'catatan', '001', '2000', 'orderDiterima'),
(2, 'Dea', '16 November 2020', '085', 'catatan', '001', '2000', 'Tunggu'),
(3, 'Nel', '16 November 2020', '085', 'catatan', '001', '2000', 'orderDiterima'),
(4, 'nama', '5 Desember 2020', '085', 'note', '002', '10000', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roleuser` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_nota`
--
ALTER TABLE `tb_detail_nota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_nota`
--
ALTER TABLE `tb_detail_nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_nota`
--
ALTER TABLE `tb_nota`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
