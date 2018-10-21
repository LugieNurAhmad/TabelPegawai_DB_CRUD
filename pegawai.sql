-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 02:13 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9
-- Create by lugie


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(8) UNSIGNED NOT NULL,
  `nama_depan` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nama_belakang` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('p','w') CHARACTER SET utf8 DEFAULT NULL,
  `alamat` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `gaji` int(8) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_depan`, `nama_belakang`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `gaji`) VALUES
(1, 'Lugie', 'Nur Ahmad', '1999-11-18', 'p', 'Surakarta', 5000000),
(2, 'Lugie', 'Nur Ahmad', '1999-11-18', 'p', 'Jl.Petir Gg.Mega 1c kec.Jebres Kel.Jebres, Surakarta', 1000000),
(4, 'Xin ', 'Hua', '1989-02-18', 'w', 'Guan', 30000000),
(6, '', '', '0000-00-00', 'p', '', 0),
(7, '', '', '0000-00-00', 'p', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
