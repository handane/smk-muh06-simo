-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20240413.a6c56e6e0e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 09:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joki_smk6simo`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id_calon_siswa` int(11) NOT NULL,
  `id_user_calon_siswa` int(11) NOT NULL,
  `nama` varchar(111) NOT NULL,
  `jenis_kelamin` varchar(55) NOT NULL,
  `tempat_lahir` varchar(55) NOT NULL,
  `tanggal_lahir` varchar(55) NOT NULL,
  `agama` varchar(55) NOT NULL,
  `alamat_sekarang` varchar(111) NOT NULL,
  `no_telepon` varchar(25) NOT NULL,
  `nik` int(25) NOT NULL,
  `kk` int(25) NOT NULL,
  `sekolah_asal` varchar(111) NOT NULL,
  `alamat_sekolah` varchar(111) NOT NULL,
  `skhun` int(11) NOT NULL,
  `jurusan` varchar(55) NOT NULL,
  `nama_ayah` varchar(111) NOT NULL,
  `nama_ibu` varchar(111) NOT NULL,
  `pekerjaan_ayah` varchar(111) NOT NULL,
  `pekerjaan_ibu` varchar(111) NOT NULL,
  `keadaan_ayah` varchar(25) NOT NULL,
  `keadaan_ibu` varchar(25) NOT NULL,
  `alamat_orangtua` varchar(111) NOT NULL,
  `no_telpon_orangtua` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `role` varchar(25) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `nama` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin01', 'admin01', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_calon_siswa`
--

CREATE TABLE `user_calon_siswa` (
  `id_user_calon_siswa` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_calon_siswa`
--

INSERT INTO `user_calon_siswa` (`id_user_calon_siswa`, `username`, `password`) VALUES
(11, 'rayhan@gmail.com', 'rayhan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id_calon_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_calon_siswa`
--
ALTER TABLE `user_calon_siswa`
  ADD PRIMARY KEY (`id_user_calon_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id_calon_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_calon_siswa`
--
ALTER TABLE `user_calon_siswa`
  MODIFY `id_user_calon_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
