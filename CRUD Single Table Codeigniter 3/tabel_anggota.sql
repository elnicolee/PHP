-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 05:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anggota`
--

CREATE TABLE `tabel_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(140) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_anggota`
--

INSERT INTO `tabel_anggota` (`id_anggota`, `nama`, `alamat`, `kota`, `no_telp`, `tgl_lahir`) VALUES
(1, 'Jonathan Matthew', 'CitraLand', 'Surabaya', '085257615331', '7-12-27'),
(2, 'Michelle Alexandra', 'CitraLand', 'Surabaya', '085257615333', '17-09-09'),
(3, 'Nicho Valendriansyah', 'CitraLand', 'Surabaya', '085257615332', '27-12-06'),
(4, 'The Weeknd', 'Amerika', 'US', '9898691398', '19-7-97'),
(5, 'Ariana Grande', 'Amerika', 'US', '797193713781', '15-4-99'),
(6, 'Kujo Jotaro', 'Japan', 'Tokyo', '7841748113', '4-9-93'),
(8, 'Joseph Joestar', 'Amerika', 'US', '74918481', '3-11-90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
