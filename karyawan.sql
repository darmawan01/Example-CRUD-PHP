-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2018 at 02:00 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `pdd_terakhir` varchar(30) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `nik`, `nama`, `tmp_lahir`, `tgl_lahir`, `gender`, `alamat`, `tlp`, `pdd_terakhir`, `bidang`, `img`) VALUES
(1, '1510520151', 'Darmawan Zulkifli', 'Dompu', '1997-07-01', 'Laki', 'Jl. KH.M. Sidiq,Selaparang', '085237104883', 'S2', 'Science', 'uploaded/djvhd.jpg'),
(2, '1510520152', 'Amirudin', 'Loteng', '1996-07-01', 'Laki', 'Jl. KH.M. Sidiq,Ampenans', '085237104882', 'SMA/SMK', 'TKJ', 'uploaded/python_django.png'),
(3, '1510520153', 'Kiki Setiawati', 'Lotim', '1997-01-07', 'Perempuan', 'Jl. Ampenan,Pantai', '0852340291', 'S1', 'Statistk', 'uploaded/python_sweatshirt.jpg'),
(4, '1510520154', 'Rian Asmara P.', 'Loteng', '1996-08-01', 'Laki', 'Jl. Loteng', '094837482989', 'S1', 'Jaringan Saraf Tiruan', 'uploaded/1018.jpg'),
(8, '1510520155', 'Agil Pratam', 'Mataram', '2018-01-01', 'Laki', 'Jl. Menggigil', '085237104883', 'S3', 'IT', 'uploaded/fjdhskf.png'),
(9, '1510520156', 'Ramlah', 'Subawa', '2018-01-03', 'Perempuan', 'Jl. Sumbawa', '085237104882', 'S2', 'Jaringan', 'uploaded/testimoni.png'),
(10, '1510520157', 'Mulyadi', 'Gerung', '2018-01-03', 'Laki', 'Jl. Gerung', '085237104882', 'S3', 'Multimedia', 'uploaded/9a8JU2t.png'),
(11, '1510520158', 'Agam Pratam', 'LOBAR', '2000-08-09', 'Laki', 'Jl. Lobar', '085237104883', 'S2', 'Multimedia', 'uploaded/pamflet.jpg'),
(12, '1510520159', 'Budi Roro', 'Jakarta', '2018-01-01', 'Perempuan', 'JL. Roro', '085237104882', 'S2', 'IT', 'uploaded/pamflet.jpg'),
(13, '1510520110', 'Mustika Nila', 'Lotim', '1998-08-09', 'Perempuan', 'Jl. Lotim', '085237104882', 'S3', 'Jaringan', 'uploaded/dsc_1731_38252914345_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`, `img`) VALUES
(1, 'Darmawan', '7b902e6ff1db9f560443f2048974fd7d386975b0', 'admin', 'uploaded/boot.png'),
(2, 'user', 'd7316a3074d562269cf4302e4eed46369b523687', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
