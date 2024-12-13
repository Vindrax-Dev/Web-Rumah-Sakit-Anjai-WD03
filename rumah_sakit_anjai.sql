-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 04:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit_anjai`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `id_poli` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `alamat`, `no_hp`, `id_poli`) VALUES
(2, 'Dr.zaky', 'surabaya', '8932738376378', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kemasan` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama`, `kemasan`, `harga`) VALUES
(2, 'gungin', 'besar', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noKTP` varchar(50) NOT NULL,
  `noHP` varchar(50) NOT NULL,
  `id_user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `alamat`, `noKTP`, `noHP`, `id_user`) VALUES
(2, 'iawaadaaw', 'awdawd', '33123ad', '893dwawdaaa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `nama`) VALUES
(1, 'poli gigi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'adminanjai', '7f0c46d7096040fe807e946beea7b2a0c9db0416', '1'),
(2, 'dokter', '9d2878abdd504d16fe6262f17c80dae5cec34440', '2'),
(3, 'pasien', '2d64647e07ad6d7fdc36818a3f93a0c8a054bd18', '3'),
(5, 'pasien1', '60f96079f03633e437caf4aad4a8e482a678dc3d', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
