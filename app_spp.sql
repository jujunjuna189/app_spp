-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 08:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `dapur`
--

CREATE TABLE `dapur` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `nama_suplier` varchar(200) NOT NULL,
  `harga` double NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `jml_keseluruhan` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dapur`
--

INSERT INTO `dapur` (`id`, `nama_barang`, `nama_suplier`, `harga`, `jml_beli`, `jml_keseluruhan`, `tgl`) VALUES
(1, 'Mouse', 'Agus', 435436, 5, 6, '2023-05-18'),
(2, 'try', 'rty', 67657, 6, 7, '2023-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `jenis_kategori` varchar(255) NOT NULL,
  `harga_infaq` double NOT NULL DEFAULT 0,
  `harga_makan` double NOT NULL DEFAULT 0,
  `harga_semester` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `jenis_kategori`, `harga_infaq`, `harga_makan`, `harga_semester`) VALUES
(4, 'Bu Asis', 25000, 50000, 250000),
(5, 'Bu Marni', 35000, 40000, 25000),
(6, 'Umum', 50000, 100000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`) VALUES
(3, 'Kelas 1');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL COMMENT 'Berelasi ke table siswa',
  `nominal` double NOT NULL COMMENT 'Nominal uang yang dibayarkan',
  `tanggal` date NOT NULL COMMENT 'Tanggal pembayaran'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_siswa`, `nominal`, `tanggal`) VALUES
(3, 2, 414224, '2023-05-18'),
(4, 1, 1059458, '2023-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_detail`
--

CREATE TABLE `pembayaran_detail` (
  `id` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `detail_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_detail`
--

INSERT INTO `pembayaran_detail` (`id`, `id_pembayaran`, `detail_pembayaran`) VALUES
(1, 3, '{\"infaq\":\"34345\",\"makan\":\"345345\",\"semester\":\"34534\",\"total\":\"414224\",\"keterangan\":\"dggdf\"}'),
(2, 4, '{\"infaq\":\"546456\",\"makan\":\"56546\",\"semester\":\"456456\",\"total\":\"1059458\",\"keterangan\":\"fghfghh\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_lengkap`, `username`, `password`, `no_hp`, `alamat`, `foto`, `jabatan`) VALUES
(4, 'Aas Latipah', 'admin', '123456', '087777777777', 'Garut Leles', NULL, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL COMMENT 'Berelasi ke table kategori',
  `id_kelas` int(11) NOT NULL COMMENT 'Beralasi ke table kelas',
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `id_kategori`, `id_kelas`, `nama_lengkap`, `no_hp`, `alamat`) VALUES
(1, 4, 3, 'Aas Latipah', '087777777', 'Garut'),
(2, 5, 3, 'Fanny dfas', '0877777776', 'Tasik'),
(5, 4, 3, 'Agus', '087777777777', 'Ciamis Garut');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dapur`
--
ALTER TABLE `dapur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_detail`
--
ALTER TABLE `pembayaran_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dapur`
--
ALTER TABLE `dapur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran_detail`
--
ALTER TABLE `pembayaran_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
