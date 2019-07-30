-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 09:17 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE `kredit` (
  `id` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `angsuran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id` int(11) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id`, `merek`, `lokasi`) VALUES
(9, 'toda', '1.PNG'),
(10, 'kop', 'aston lombok.jpg'),
(11, 'tosa', 'Capture.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `spesifikasi`
--

CREATE TABLE `spesifikasi` (
  `id` int(11) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `kapasitas_mesin` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `kapasitas_penumpang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesifikasi`
--

INSERT INTO `spesifikasi` (`id`, `id_merek`, `id_tipe`, `kapasitas_mesin`, `warna`, `kapasitas_penumpang`) VALUES
(5, 9, 4, '2', '9', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id` int(11) NOT NULL,
  `tipe_mobil` varchar(100) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id`, `tipe_mobil`, `id_merek`, `lokasi`) VALUES
(4, 'saya', 9, 'aqua-pack-shot-all-min.png'),
(5, 'saya', 9, 'an happy ending.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_merek` (`id_merek`),
  ADD KEY `id_tipe` (`id_tipe`),
  ADD KEY `id_merek_2` (`id_merek`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_merek` (`id_merek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kredit`
--
ALTER TABLE `kredit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kredit`
--
ALTER TABLE `kredit`
  ADD CONSTRAINT `kredit_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD CONSTRAINT `spesifikasi_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spesifikasi_ibfk_2` FOREIGN KEY (`id_merek`) REFERENCES `merek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tipe`
--
ALTER TABLE `tipe`
  ADD CONSTRAINT `tipe_ibfk_1` FOREIGN KEY (`id_merek`) REFERENCES `merek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
