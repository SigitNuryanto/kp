-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 10:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `kd_bagian` varchar(8) NOT NULL,
  `nama_bagian` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`kd_bagian`, `nama_bagian`, `nama`, `jabatan`) VALUES
('11', 'Dewan Kehormatan', 'Rusli', 'Kepala'),
('12', 'Lembaga Pendidikan ', 'Mustam', 'Kepala'),
('13', 'DKC', 'Retno', 'ketua'),
('14', 'SAKA', 'wahyuni', 'ketua'),
('15', 'badan usaha', 'joni', 'ketua'),
('16', 'satuan kegiatan', 'selo', 'ketua');

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `kd_disposisi` varchar(8) NOT NULL,
  `kd_bagian_s` varchar(8) NOT NULL,
  `isi_dispo` text NOT NULL,
  `sifat` varchar(20) NOT NULL,
  `kd_masuk_surat` varchar(8) NOT NULL,
  `catatan` text NOT NULL,
  `kd_petugas_sur` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`kd_disposisi`, `kd_bagian_s`, `isi_dispo`, `sifat`, `kd_masuk_surat`, `catatan`, `kd_petugas_sur`) VALUES
('2', '11', 'pengumpu', 'segera', '12', '--', '1'),
('90', '14', 'permintaan anggota 60', 'segera', 'A1', '-', '1'),
('9A1', '14', 'permintaan anggota', 'segera', '9A', 'anggota 60 orang', '1');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `kd_instansi` varchar(8) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`kd_instansi`, `nama_instansi`, `alamat`) VALUES
('12', 'asdasda', '123123'),
('13', 'asdasd', 'asdasdas'),
('14', 'Dinas Pariwisata', 'beran tridadi sleman');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `kd_keluar` varchar(8) NOT NULL,
  `kd_petugas_surat` varchar(8) NOT NULL,
  `kd_instansi_surat` varchar(8) NOT NULL,
  `no_surat` varchar(8) NOT NULL,
  `isi_surat` varchar(250) NOT NULL,
  `tanggal` varchar(8) NOT NULL,
  `file_nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`kd_keluar`, `kd_petugas_surat`, `kd_instansi_surat`, `no_surat`, `isi_surat`, `tanggal`, `file_nama`) VALUES
('9A', '1', '14', '99/567-A', 'kesanggupan pengiriman anggota', '2017-08-', '123123123123006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `kd_masuk` varchar(8) NOT NULL,
  `kd_petugas_surat` varchar(8) NOT NULL,
  `kd_instansi_surat` varchar(8) NOT NULL,
  `no_surat` varchar(8) NOT NULL,
  `tgl_surat` varchar(20) NOT NULL,
  `tgl_masuk` varchar(20) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `file_nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`kd_masuk`, `kd_petugas_surat`, `kd_instansi_surat`, `no_surat`, `tgl_surat`, `tgl_masuk`, `keterangan`, `file_nama`) VALUES
('12', '1', '12', '123', '2017-08-30', '2017-08-31', 'dawdawdawdwa', '7773-surat keluar 2.jpg'),
('9A', '1', '14', '556/0890', '2017-08-16', '2017-08-17', 'permohonan dukungan anggota pramuka ', '123123123123006.jpg'),
('A1', '1', '14', '555/999', '2017-08-17', '2017-08-18', 'permohaan pengiriman anggota', '123123123123006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kd_petugas` varchar(8) NOT NULL,
  `nama_petugas` varchar(20) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_petugas`, `nama_petugas`, `username`, `password`, `level`) VALUES
('1', 'sigit', 'petugas1', 'petugas1', 1),
('2', 'lala', 'petugas', 'user', 2),
('3', 'kepala', 'kepala', 'kepala', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`kd_bagian`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`kd_disposisi`),
  ADD KEY `kd_bagian_s` (`kd_bagian_s`),
  ADD KEY `kd_masuk_surat` (`kd_masuk_surat`),
  ADD KEY `kd_petugas` (`kd_petugas_sur`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`kd_instansi`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`kd_keluar`),
  ADD KEY `kd_petugas` (`kd_petugas_surat`),
  ADD KEY `kd_instansi` (`kd_instansi_surat`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`kd_masuk`),
  ADD KEY `kd_petugas_surat` (`kd_petugas_surat`),
  ADD KEY `kd_instansi_surat` (`kd_instansi_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_petugas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_ibfk_1` FOREIGN KEY (`kd_bagian_s`) REFERENCES `bagian` (`kd_bagian`),
  ADD CONSTRAINT `disposisi_ibfk_2` FOREIGN KEY (`kd_masuk_surat`) REFERENCES `surat_masuk` (`kd_masuk`),
  ADD CONSTRAINT `disposisi_ibfk_3` FOREIGN KEY (`kd_petugas_sur`) REFERENCES `user` (`kd_petugas`);

--
-- Constraints for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`kd_petugas_surat`) REFERENCES `user` (`kd_petugas`),
  ADD CONSTRAINT `surat_keluar_ibfk_2` FOREIGN KEY (`kd_instansi_surat`) REFERENCES `instansi` (`kd_instansi`);

--
-- Constraints for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`kd_petugas_surat`) REFERENCES `user` (`kd_petugas`),
  ADD CONSTRAINT `surat_masuk_ibfk_2` FOREIGN KEY (`kd_instansi_surat`) REFERENCES `instansi` (`kd_instansi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
