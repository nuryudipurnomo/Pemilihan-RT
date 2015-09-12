-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2015 at 06:31 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemilihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `alamat`) VALUES
(1, 'yudi', '63a9f0ea7bb98050796b649e85481845', 'Kayu Besar Tegal Alur');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE IF NOT EXISTS `calon` (
`id_calon` int(25) NOT NULL,
  `nama_calon` varchar(25) NOT NULL,
  `kelamin` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `suara` int(25) NOT NULL,
  `rt` int(3) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `nama_calon`, `kelamin`, `tempat_lahir`, `tgl_lahir`, `suara`, `rt`) VALUES
(7, 'Calon N', 'Pria', 'Cina', '2014-11-30', 1, 1),
(6, 'Calon A', 'Wanita', 'Jakarta', '1966-11-19', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fchart`
--

CREATE TABLE IF NOT EXISTS `fchart` (
  `id` int(11) NOT NULL,
  `soal` varchar(100) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fchart`
--

INSERT INTO `fchart` (`id`, `soal`, `status`) VALUES
(1, 'Sistem Pemilihan Ketua RT', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
`id_peserta` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_id` bigint(15) NOT NULL,
  `kelamin` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `username`, `password`, `no_id`, `kelamin`, `tempat_lahir`, `tgl_lahir`, `status`) VALUES
(12, 'dedi', '1eed09e397d38d74ac36b31b1d0f35c9', 898989898909876, 'Pria', 'jakarta', '1998-11-25', 'sudah'),
(13, 'nerli', 'e277dd1e05688a22e377e25a3dae5de1', 123123123123123, 'Wanita', 'Bandung', '1991-11-16', 'sudah'),
(14, 'erdi', 'bf135555be523b739b3667c59f3975b2', 656565656565432, 'Pria', 'Bandung', '1999-11-17', 'sudah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
 ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
 ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
MODIFY `id_calon` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
MODIFY `id_peserta` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
