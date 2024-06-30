-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220525.c1e393abce
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 04:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `namalengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(6, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'erick irwansyah'),
(7, 'hendroAdmin', '4e2b9bd6eea02278fe01834a451456135e17c624', 'Hendro');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `idanggota` int(5) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idanggota`, `nim`, `nama`, `jurusan`, `program_studi`, `foto`) VALUES
(14, 'g231210006', 'rizky haryanto putro', 'ftik', 'teknik informatika', '6578533c830ff.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `idtamu` int(5) NOT NULL,
  `namatamu` varchar(100) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `tglkunjung` varchar(10) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`idtamu`, `namatamu`, `jurusan`, `program_studi`, `tglkunjung`, `tujuan`) VALUES
(4, 'japriansyah', 'sukaraja', 'universitas dehasen', '2018-09-30', 'refleshing'),
(5, 'reza', 'sukaraja', 'universitas dehasen', '2018-09-30', 'kunjungan biasa membaca'),
(6, 'rizky haryanto putro', 'ftik', 'teknik informatika', '2023-12-12', 'tugas kuliah'),
(7, 'muhammad johny deep putra', 'hukum', 'hukum', '2023-12-12', 'pengembalian buku');

-- --------------------------------------------------------

--
-- Table structure for table `tamu2`
--

CREATE TABLE `tamu2` (
  `idtamu` int(5) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tglkunjung` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu2`
--

INSERT INTO `tamu2` (`idtamu`, `nim`, `nama`, `tglkunjung`, `tujuan`) VALUES
(15, 'g231210006', 'rizky haryanto putro', '2023-12-12', 'pencarian literatur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`idtamu`);

--
-- Indexes for table `tamu2`
--
ALTER TABLE `tamu2`
  ADD PRIMARY KEY (`idtamu`),
  ADD KEY `noanggota` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `idtamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tamu2`
--
ALTER TABLE `tamu2`
  MODIFY `idtamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



