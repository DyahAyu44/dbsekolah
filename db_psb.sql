-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 06:42 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Bambang', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` varchar(10) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(25) NOT NULL,
  `almt_peserta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_pendaftaran`, `th_ajaran`, `jurusan`, `nm_peserta`, `tmpt_lahir`, `tgl_lahir`, `jk`, `agama`, `almt_peserta`) VALUES
('P202100001', '2021-10-04', '2021/2022', '', '', '', '0000-00-00', '', '', ''),
('P202100002', '2021-10-04', '2021/2022', '', '', '', '0000-00-00', '', '', ''),
('P202100003', '2021-10-04', '2021/2022', '', '', '', '0000-00-00', '', '', ''),
('P202100004', '2021-10-04', '2021/2022', '', '', '', '0000-00-00', '', '', ''),
('P202100005', '2021-10-04', '2021/2022', '', '', '', '0000-00-00', '', '', ''),
('P202100006', '2021-10-04', '2021/2022', '', '', '', '0000-00-00', '', '', ''),
('P202100007', '2021-10-04', '2021/2022', 'IPA', 'Sugik Dono', 'Ngawi', '2001-06-20', 'Laki-laki', 'Islam', 'Jl.Teuku Umar no 57'),
('P202100008', '2021-10-04', '2021/2022', 'IPA', 'Sugik Dono', 'Ngawi', '2001-06-20', 'Laki-laki', 'Islam', 'Jl.Teuku Umar no 57'),
('P202100009', '2021-10-04', '2021/2022', 'IPS', 'Fauzan Masliba', 'Ponorogo', '2001-06-13', 'Laki-laki', 'Hindu', 'Jl. Nangka no 58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
