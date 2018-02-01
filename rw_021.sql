-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 06:28 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rw_021`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id_warga` int(20) NOT NULL,
  `nama_warga` varchar(25) NOT NULL,
  `jenis_iuran` varchar(20) NOT NULL,
  `jumlah_bayar` varchar(20) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `rt` int(10) NOT NULL,
  `denda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`id_warga`, `nama_warga`, `jenis_iuran`, `jumlah_bayar`, `tanggal_bayar`, `rt`, `denda`) VALUES
(4, 'Risky', 'Keamanan', 'Rp 10.000,-', '2017-08-19', 5, 'Rp.5.000,-'),
(5, 'Tanto', 'Keamanan', 'Rp 5.000,-', '2017-08-19', 5, 'Tidak Denda');

-- --------------------------------------------------------

--
-- Table structure for table `staff_rw_021`
--

CREATE TABLE `staff_rw_021` (
  `id_staff` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `rt` int(10) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_rw_021`
--

INSERT INTO `staff_rw_021` (`id_staff`, `uname`, `jabatan`, `rt`, `pass`, `foto`) VALUES
(9, 'risky', '', 0, 'risky', 'Foto_1.jpg'),
(46, 'admin', '', 0, 'admin', 'text.png'),
(47, 'sodik', '', 0, 'sodik', 'text.png');

-- --------------------------------------------------------

--
-- Table structure for table `tunggakan`
--

CREATE TABLE `tunggakan` (
  `nama_warga` varchar(25) NOT NULL,
  `jenis_tunggakan` varchar(25) NOT NULL,
  `tanggal_tunggakan` date NOT NULL,
  `denda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunggakan`
--

INSERT INTO `tunggakan` (`nama_warga`, `jenis_tunggakan`, `tanggal_tunggakan`, `denda`) VALUES
('Risky', 'Kematian', '2017-08-19', 'Tidak Denda');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(20) NOT NULL,
  `nama_warga` varchar(25) NOT NULL,
  `rt` int(10) NOT NULL,
  `no_telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nama_warga`, `rt`, `no_telepon`) VALUES
(4, 'Risky', 5, '087781952898'),
(5, 'Tanto', 5, '7716984'),
(7, 'Jono', 8, '7798988');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_warga`);

--
-- Indexes for table `staff_rw_021`
--
ALTER TABLE `staff_rw_021`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tunggakan`
--
ALTER TABLE `tunggakan`
  ADD PRIMARY KEY (`nama_warga`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id_warga` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staff_rw_021`
--
ALTER TABLE `staff_rw_021`
  MODIFY `id_staff` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
