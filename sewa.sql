-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 12:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `tanggal_sewa` varchar(50) NOT NULL,
  `tanggal_pengembalian` varchar(50) NOT NULL,
  `durasi` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `email`, `nama_produk`, `jumlah`, `harga`, `tanggal_sewa`, `tanggal_pengembalian`, `durasi`, `total`) VALUES
(27, 'bbgg', 'jnhfhhffgh@gmail.com', 'Kost Ambatron77', 1, 1200000, '2024-12-12', '2024-12-13', 1, 1200000),
(28, 'bbgg', 'jnhfhhffgh@gmail.com', 'Kost kenanga41', 3, 900000, '2024-12-18', '2025-01-01', 14, 37800000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `foto`, `jenis`, `lokasi`, `deskripsi`, `stok`) VALUES
(35, 'Kost Pak Ruslan', 2000000, 'Kamar1.jpg', 'Campur', 'Bandung', 'kost strategis dekat telkom university full furniture', 2),
(36, 'Kost Rusdi77', 1500000, 'Kamar2.jpg', 'Laki-Laki', 'Bandung - Buah Batu', 'kost bagus dan murah', 3),
(37, 'Kost AdamJaya', 1300000, 'kamar.jpeg', 'Perempuan', 'Bandung - Batununggal', 'Kost perempuan aman bebas banjir', 2),
(38, 'Kost RumahKu9', 1000000, 'Kamar4.jpg', 'Campur', 'Bandung - Dayeuhkolot', 'kost bagus dan murah', 3),
(39, 'Kost kenanga41', 900000, 'Kamar6.jpg', 'Laki-Laki', 'Bandung - Dayeuhkolot', 'kost strategis dekat telkom university full furniture', 3),
(40, 'Kost syariah421', 800000, 'Kamar7.jpg', 'Perempuan', 'Bandung - Buah Batu', 'kost strategis dekat telkom university wc dalam', 3),
(41, 'Kost Himalaya', 850000, 'Kamar8.jpg', 'Campur', 'Bandung - Buah Batu', 'kost strategis dekat telkom university wc dalam dan AC', 2),
(42, 'Kost Sigma99', 950000, 'Kamar9.jpeg', 'Campur', 'Bandung - Buah Batu', 'kost strategis dekat telkom university wc dalam dan AC', 3),
(43, 'Kost Ambatron77', 1200000, 'Kamar5.jpg', 'Campur', 'Bandung - Buah Batu', 'kost strategis dekat telkom university wc dalam dan AC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `tipe`) VALUES
(5, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(6, 'evo', 'evo@gmail.com', 'evo', 'evo'),
(7, 'rizky', 'rizky@gmail.com', '1234', '1234'),
(8, 'user', 'user@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
