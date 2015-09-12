-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2015 at 05:53 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `nama_calon`, `kelamin`, `tempat_lahir`, `tgl_lahir`, `suara`, `rt`) VALUES
(8, 'Calon 1', 'Pria', 'Jakarta', '1975-09-23', 5, 1),
(9, 'Calon 2', 'Wanita', 'Bandung', '1978-10-29', 7, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `username`, `password`, `no_id`, `kelamin`, `tempat_lahir`, `tgl_lahir`, `status`) VALUES
(28, 'Peserta 0', '73b6d5aacd605d24d5b84250699646f9', 898989898989898, 'Pria', 'jakarta', '1992-07-27', 'sudah'),
(29, 'Peserta 2', 'b8d45b209303aee4e1006fc29e7c1b05', 111112222233333, 'Pria', 'Jakarta', '1986-11-21', 'sudah'),
(30, 'Peserta 3', '2944606be05f78f9386f08e02d3a2a62', 999999999909090, 'Wanita', 'Jakarta', '1989-10-30', 'belum');

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
MODIFY `id_calon` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
MODIFY `id_peserta` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
