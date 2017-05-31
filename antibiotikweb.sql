-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 11:02 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antibiotikweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_jenis_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `email`, `id_jenis_user`) VALUES
(1, 'admin', '822df7b61bf476c5aa8aef388d69a615', 'admin@official.com', 1),
(2, 'user', '6ad14ba9986e3615423dfca256d04e3f', 'user@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `darurat`
--

CREATE TABLE `darurat` (
  `id_dar` int(5) NOT NULL,
  `nm_dar` varchar(30) NOT NULL,
  `almt_dar` varchar(30) NOT NULL,
  `telp_dar` varchar(20) NOT NULL,
  `jam_kerja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `darurat`
--

INSERT INTO `darurat` (`id_dar`, `nm_dar`, `almt_dar`, `telp_dar`, `jam_kerja`) VALUES
(2, 'sumber waras', 'jln bangka', '12365488', '09.00-15.40');

-- --------------------------------------------------------

--
-- Table structure for table `dokterku`
--

CREATE TABLE `dokterku` (
  `id_dok` int(5) NOT NULL,
  `nm_dok` varchar(30) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `telp_dok` varchar(20) NOT NULL,
  `almt_dok` varchar(30) NOT NULL,
  `gambar_dok` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokterku`
--

INSERT INTO `dokterku` (`id_dok`, `nm_dok`, `spesialis`, `telp_dok`, `almt_dok`, `gambar_dok`) VALUES
(5, 'danki', 'jantung', '678947', 'dasijhdias565465v\"', 'Capture2.PNG'),
(8, 'dani', 'hati', '12545858', 'jln seruni', 'Capture5.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `lemari`
--

CREATE TABLE `lemari` (
  `id_obat` int(10) NOT NULL,
  `nm_obat` varchar(30) NOT NULL,
  `kegunaan` varchar(50) NOT NULL,
  `gambar_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lemari`
--

INSERT INTO `lemari` (`id_obat`, `nm_obat`, `kegunaan`, `gambar_obat`) VALUES
(2, 'pasetamn', 'baik', '');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id_quote` int(5) NOT NULL,
  `nm_quote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id_quote`, `nm_quote`) VALUES
(1, 'dsf');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id_tips` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(60) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id_tips`, `judul`, `deskripsi`, `gambar`, `waktu`, `link`) VALUES
(2, '', '', '', '2017-05-12 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `darurat`
--
ALTER TABLE `darurat`
  ADD PRIMARY KEY (`id_dar`);

--
-- Indexes for table `dokterku`
--
ALTER TABLE `dokterku`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indexes for table `lemari`
--
ALTER TABLE `lemari`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id_quote`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id_tips`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `darurat`
--
ALTER TABLE `darurat`
  MODIFY `id_dar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dokterku`
--
ALTER TABLE `dokterku`
  MODIFY `id_dok` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lemari`
--
ALTER TABLE `lemari`
  MODIFY `id_obat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id_quote` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id_tips` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
