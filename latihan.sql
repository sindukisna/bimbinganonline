-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 02:36 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `ids` int(11) NOT NULL,
  `kodegrup` varchar(8) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `kategori` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ids`, `kodegrup`, `nama_kelas`, `nim`, `nip`, `periode`, `kategori`) VALUES
(1, 'db32a4', 'dsfds', '', '', '0000-00-00', 'Ganjil'),
(2, 'db3f58', 'gchgv', '', '', '0000-00-00', 'Genap'),
(3, 'db4ab8', 'asnjdns', '', '', '6', 'Genap'),
(4, 'db4fc4', 'wnJDNS', '', '', '6', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idm` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(225) NOT NULL,
  `image` varchar(100) NOT NULL,
  `join` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idm`, `nim`, `member_name`, `email`, `telp`, `address`, `username`, `password`, `image`, `join`) VALUES
(1, '', 'irwan dumet', 'irwan@gmail.com', '2323232', 'jakrta barat', 'irwan', '$2y$10$yfHsdC3Jwe6R4wGKnNiDcel98WwmpqzkDY32pGdoV4kaiIot9Rz02', 'gambar.jpg', '2018-02-02 13:50:24'),
(2, '', 'Rahmat Putra', 'rahmat@gmail.com', '0812452333333', 'jakrta barat', 'rahmat', '$2y$10$yfHsdC3Jwe6R4wGKnNiDcel98WwmpqzkDY32pGdoV4kaiIot9Rz02', 'gambar.jpg', '2018-02-03 10:51:20'),
(4, '', 'lina', 'nhessie.18@hotmail.com', '08772038439', 'blora', 'lina93', '$2y$10$rh5UPgoT6TTQkHLxymnx/eFh//htYRSlAp3k7et.Up9.1VPvX8yVW', '', '2019-04-21 12:35:33'),
(5, 'A22201702613', 'marc', 'nhessie.18@hotmail.com', '08772038439', 'blora', 'lina93', '$2y$10$H7Pw8nd5qYSAoBYxnoMLLOVH8M463GjQQsk9n.LbBy1pvb.04mZ4K', '', '2019-04-22 04:14:33'),
(6, 'a22201702618', 'rizal', 'joserizaal@gmail.com', '009898989', 'smg', 'rizal', '150FB021C56C33F82EEF99253EB36EE1', '', '2019-04-22 07:25:36'),
(7, 'a22201702615', 'alex chusaeni', 'alexsyugar@gmail.com', '087777777777', 'erererererererere', 'alex', 'de12f5798f86bdcc5c759a645e913e4c', '', '2019-04-22 07:52:47'),
(8, 'a22201702614', 'mely ameliya', 'mellyameliya77@gmail.com', '082148485208', 'semarang', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '2019-04-22 11:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `member_dosen`
--

CREATE TABLE `member_dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(225) NOT NULL,
  `image` varchar(100) NOT NULL,
  `join` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_dosen`
--

INSERT INTO `member_dosen` (`id`, `nip`, `member_name`, `email`, `telp`, `address`, `username`, `password`, `image`, `join`) VALUES
(1, 'C002', 'marc', 'nhessie.18@hotmail.com', '09876543', 'blora', 'lina93', '150FB021C56C33F82EEF99253EB36EE1', '', '2019-04-22 07:27:22'),
(2, 'N001', 'Edii', 'edii@gmail.com', '92981929', 'smg', 'edisuu', '$2y$10$E4YGepWZMZIMExBXBRP3.eoAGXUrbbTBCpmPWhW1LUHZb9tFc0BT.', '', '2019-04-22 09:32:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idm`);

--
-- Indexes for table `member_dosen`
--
ALTER TABLE `member_dosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member_dosen`
--
ALTER TABLE `member_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
