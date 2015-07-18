-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2015 at 06:20 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
`KODE_ABSENSI` int(11) NOT NULL,
  `KODE_JAM_KERJA` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(25) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM_MASUK` time DEFAULT NULL,
  `JAM_KELUAR` time DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=332 ;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`KODE_ABSENSI`, `KODE_JAM_KERJA`, `NIP_PEGAWAI`, `TANGGAL`, `JAM_MASUK`, `JAM_KELUAR`) VALUES
(326, 1, '3', '2015-07-27', '09:00:00', '16:00:00'),
(325, 1, '3', '2015-07-26', '09:00:00', '16:00:00'),
(324, 1, '3', '2015-07-25', '10:00:00', '18:00:00'),
(323, 1, '3', '2015-07-24', '09:00:00', '16:00:00'),
(322, 1, '3', '2015-07-23', '09:00:00', '16:00:00'),
(321, 1, '3', '2015-07-22', '09:50:00', '16:00:00'),
(320, 1, '3', '2015-07-21', '09:00:00', '16:00:00'),
(319, 1, '3', '2015-07-20', '09:00:00', '16:00:00'),
(318, 1, '3', '2015-07-19', '09:00:00', '16:00:00'),
(317, 1, '3', '2015-07-18', '09:00:00', '16:00:00'),
(316, 1, '3', '2015-07-17', '09:00:00', '18:00:00'),
(315, 1, '3', '2015-07-16', '09:00:00', '16:00:00'),
(314, 1, '3', '2015-07-15', '09:00:00', '16:00:00'),
(313, 1, '3', '2015-07-14', '09:00:00', '16:00:00'),
(312, 1, '3', '2015-07-13', '09:00:00', '16:00:00'),
(311, 1, '3', '2015-07-12', '11:00:00', '16:00:00'),
(310, 1, '3', '2015-07-11', '09:00:00', '16:00:00'),
(309, 1, '3', '2015-07-10', '09:00:00', '16:00:00'),
(308, 1, '3', '2015-07-09', '09:00:00', '16:00:00'),
(307, 1, '3', '2015-07-08', '09:00:00', '16:00:00'),
(306, 1, '3', '2015-07-07', '09:00:00', '16:00:00'),
(305, 1, '3', '2015-07-06', '09:00:00', '16:00:00'),
(304, 1, '3', '2015-07-05', '09:00:00', '19:00:00'),
(303, 1, '3', '2015-07-04', '09:00:00', '17:00:00'),
(302, 1, '3', '2015-07-03', '10:00:00', '18:00:00'),
(301, 1, '3', '2015-07-02', '09:30:00', '16:00:00'),
(300, 1, '3', '2015-07-01', '09:00:00', '16:00:00'),
(238, 1, '1', '2015-07-30', '11:00:00', '17:00:00'),
(237, 1, '1', '2015-07-29', '09:00:00', '16:00:00'),
(236, 1, '1', '2015-07-28', '09:00:00', '16:00:00'),
(235, 1, '1', '2015-07-27', '09:00:00', '16:00:00'),
(234, 1, '1', '2015-07-26', '09:00:00', '16:00:00'),
(233, 1, '1', '2015-07-25', '10:00:00', '18:00:00'),
(232, 1, '1', '2015-07-24', '09:00:00', '16:00:00'),
(231, 1, '1', '2015-07-23', '09:00:00', '16:00:00'),
(230, 1, '1', '2015-07-22', '09:50:00', '16:00:00'),
(229, 1, '1', '2015-07-21', '09:00:00', '16:00:00'),
(228, 1, '1', '2015-07-20', '09:00:00', '16:00:00'),
(227, 1, '1', '2015-07-19', '09:00:00', '16:00:00'),
(226, 1, '1', '2015-07-18', '09:00:00', '16:00:00'),
(225, 1, '1', '2015-07-17', '09:00:00', '18:00:00'),
(224, 1, '1', '2015-07-16', '09:00:00', '16:00:00'),
(223, 1, '1', '2015-07-15', '09:00:00', '16:00:00'),
(222, 1, '1', '2015-07-14', '09:00:00', '16:00:00'),
(221, 1, '1', '2015-07-13', '09:00:00', '16:00:00'),
(220, 1, '1', '2015-07-12', '11:00:00', '16:00:00'),
(219, 1, '1', '2015-07-11', '09:00:00', '16:00:00'),
(218, 1, '1', '2015-07-10', '09:00:00', '16:00:00'),
(217, 1, '1', '2015-07-09', '09:00:00', '16:00:00'),
(216, 1, '1', '2015-07-08', '09:00:00', '16:00:00'),
(202, 1, '2', '2015-07-23', '09:00:00', '16:00:00'),
(201, 1, '2', '2015-07-22', '09:50:00', '16:00:00'),
(200, 1, '2', '2015-07-21', '09:00:00', '16:00:00'),
(199, 1, '2', '2015-07-20', '09:00:00', '16:00:00'),
(198, 1, '2', '2015-07-19', '09:00:00', '16:00:00'),
(197, 1, '2', '2015-07-18', '09:00:00', '16:00:00'),
(196, 1, '2', '2015-07-17', '09:00:00', '18:00:00'),
(195, 1, '2', '2015-07-16', '09:00:00', '16:00:00'),
(194, 1, '2', '2015-07-15', '09:00:00', '16:00:00'),
(193, 1, '2', '2015-07-14', '09:00:00', '16:00:00'),
(192, 1, '2', '2015-07-13', '09:00:00', '16:00:00'),
(191, 1, '2', '2015-07-12', '11:00:00', '16:00:00'),
(181, 1, '2', '2015-07-02', '09:30:00', '16:00:00'),
(190, 1, '2', '2015-07-11', '09:00:00', '16:00:00'),
(189, 1, '2', '2015-07-10', '09:00:00', '16:00:00'),
(188, 1, '2', '2015-07-09', '09:00:00', '16:00:00'),
(187, 1, '2', '2015-07-08', '09:00:00', '16:00:00'),
(186, 1, '2', '2015-07-07', '09:00:00', '16:00:00'),
(180, 1, '2', '2015-07-01', '09:00:00', '16:00:00'),
(182, 1, '2', '2015-07-03', '10:00:00', '18:00:00'),
(185, 1, '2', '2015-07-06', '09:00:00', '16:00:00'),
(184, 1, '2', '2015-07-05', '09:00:00', '19:00:00'),
(183, 1, '2', '2015-07-04', '09:00:00', '17:00:00'),
(215, 1, '1', '2015-07-07', '09:00:00', '16:00:00'),
(214, 1, '1', '2015-07-06', '09:00:00', '16:00:00'),
(213, 1, '1', '2015-07-05', '09:00:00', '19:00:00'),
(212, 1, '1', '2015-07-04', '09:00:00', '17:00:00'),
(211, 1, '1', '2015-07-03', '10:00:00', '18:00:00'),
(210, 1, '1', '2015-07-02', '09:30:00', '16:00:00'),
(299, 1, '1', '2015-07-01', '09:00:00', '16:00:00'),
(209, 1, '2', '2015-07-30', '11:00:00', '17:00:00'),
(208, 1, '2', '2015-07-29', '09:00:00', '16:00:00'),
(207, 1, '2', '2015-07-28', '09:00:00', '16:00:00'),
(206, 1, '2', '2015-07-27', '09:00:00', '16:00:00'),
(205, 1, '2', '2015-07-26', '09:00:00', '16:00:00'),
(204, 1, '2', '2015-07-25', '10:00:00', '18:00:00'),
(203, 1, '2', '2015-07-24', '09:00:00', '16:00:00'),
(327, 1, '3', '2015-07-28', '09:00:00', '16:00:00'),
(328, 1, '3', '2015-07-29', '09:00:00', '16:00:00'),
(329, 1, '3', '2015-07-30', '11:00:00', '17:00:00'),
(331, 1, '5', '2015-07-07', '13:44:59', '13:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `backup_data`
--

CREATE TABLE IF NOT EXISTS `backup_data` (
`id_backup` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `backup_data`
--

INSERT INTO `backup_data` (`id_backup`, `tanggal`, `file`) VALUES
(35, '2015-07-04 12:35:03', 'Sat04Jul2015lukstron1436006103.sql'),
(36, '2015-07-04 12:35:05', 'Sat04Jul2015lukstron1436006105.sql'),
(37, '2015-07-04 12:35:06', 'Sat04Jul2015lukstron1436006106.sql');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE IF NOT EXISTS `cuti` (
`KODE_CUTI` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(25) NOT NULL,
  `KETERANGAN` text NOT NULL,
  `TANGGAL_AWAL` date NOT NULL,
  `TANGGAL_AKHIR` date NOT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `KODE_PETUGAS` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`KODE_CUTI`, `NIP_PEGAWAI`, `KETERANGAN`, `TANGGAL_AWAL`, `TANGGAL_AKHIR`, `STATUS`, `KODE_PETUGAS`) VALUES
(3, '1', 'cuti hamil2', '2015-06-21', '2015-06-30', 'Menunggu', 2),
(4, '1', 'cuti Nikah', '2015-06-21', '2015-06-27', 'Menunggu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
`KODE_DEPARTEMEN` int(11) NOT NULL,
  `NAMA_DEPARTEMEN` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`KODE_DEPARTEMEN`, `NAMA_DEPARTEMEN`) VALUES
(1, 'HUMAS INTERNAL'),
(2, 'KEUANGAN'),
(3, 'TEKNOLOGI'),
(7, 'MANAGER'),
(8, 'GUDANG');

-- --------------------------------------------------------

--
-- Table structure for table `detail_tunjangan_penggajian`
--

CREATE TABLE IF NOT EXISTS `detail_tunjangan_penggajian` (
`id_detail_penggajian` int(11) NOT NULL,
  `kode_penggajian` varchar(100) NOT NULL,
  `nama_tunjangan` text NOT NULL,
  `nominal_tunjangan` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `detail_tunjangan_penggajian`
--

INSERT INTO `detail_tunjangan_penggajian` (`id_detail_penggajian`, `kode_penggajian`, `nama_tunjangan`, `nominal_tunjangan`) VALUES
(22, 'P07001', 'anak', '300000'),
(23, 'P07001', 'Istri', '500000'),
(24, 'P07001', 'Keahlian', '500000'),
(25, 'P07002', 'anak', '300000'),
(26, 'P07002', 'Istri', '500000'),
(27, 'P07003', 'anak', '300000'),
(28, 'P07003', 'Istri', '500000'),
(29, 'P07003', 'Keahlian', '500000'),
(30, 'P07004', 'anak', '300000'),
(31, 'P07004', 'Istri', '500000'),
(32, 'P07004', 'Keahlian', '500000'),
(33, 'P07005', 'anak', '300000'),
(34, 'P07005', 'Istri', '500000'),
(35, 'P07006', 'anak', '300000'),
(36, 'P07006', 'Istri', '500000'),
(37, 'P07007', 'anak', '300000'),
(38, 'P07007', 'Istri', '500000'),
(39, 'P07008', 'anak', '300000'),
(40, 'P07008', 'Istri', '500000'),
(41, 'P07008', 'Keahlian', '500000'),
(42, 'P07009', 'anak', '300000'),
(43, 'P07009', 'Istri', '500000'),
(44, 'P07010', 'anak', '300000'),
(45, 'P07010', 'Istri', '500000'),
(46, 'P07011', 'anak', '300000'),
(47, 'P07011', 'Istri', '500000'),
(48, 'P07011', 'Keahlian', '500000'),
(49, 'P07012', 'anak', '300000'),
(50, 'P07012', 'Istri', '500000'),
(51, 'P07013', 'anak', '300000'),
(52, 'P07013', 'Istri', '500000'),
(53, 'P07013', 'Keahlian', '500000'),
(54, 'P07014', 'anak', '300000'),
(55, 'P07014', 'Istri', '500000'),
(56, 'P07015', 'anak', '300000'),
(57, 'P07015', 'Istri', '500000'),
(58, 'P07016', 'anak', '300000'),
(59, 'P07016', 'Istri', '500000'),
(60, 'P07016', 'Keahlian', '500000'),
(61, 'P07017', 'anak', '300000'),
(62, 'P07017', 'Istri', '500000'),
(63, 'P07018', 'anak', '300000'),
(64, 'P07018', 'Istri', '500000'),
(65, 'P07018', 'Keahlian', '500000'),
(66, 'P07019', 'anak', '300000'),
(67, 'P07019', 'Istri', '500000'),
(68, 'P07020', 'anak', '300000'),
(69, 'P07020', 'Istri', '500000'),
(70, 'P07021', 'anak', '300000'),
(71, 'P07021', 'Istri', '500000'),
(72, 'P07022', 'anak', '300000'),
(73, 'P07022', 'Istri', '500000'),
(74, 'P07022', 'Keahlian', '500000'),
(75, 'P07023', 'anak', '300000'),
(76, 'P07023', 'Istri', '500000'),
(77, 'P07024', 'anak', '300000'),
(78, 'P07024', 'Istri', '500000'),
(79, 'P07025', 'anak', '300000'),
(80, 'P07025', 'Istri', '500000'),
(81, 'P07025', 'Keahlian', '500000'),
(82, 'P07026', 'anak', '300000'),
(83, 'P07026', 'Istri', '500000'),
(84, 'P07026', 'Keahlian', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `hari_libur`
--

CREATE TABLE IF NOT EXISTS `hari_libur` (
`ID` int(11) NOT NULL,
  `TAHUN` year(4) NOT NULL,
  `TANGGAL` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hari_libur`
--

INSERT INTO `hari_libur` (`ID`, `TAHUN`, `TANGGAL`) VALUES
(1, 2015, '2015-07-06,2015-07-08,2015-07-11'),
(2, 2015, '2015-08-01,2015-08-02,2015-08-05'),
(4, 2015, '2015-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `head_penggajian`
--

CREATE TABLE IF NOT EXISTS `head_penggajian` (
  `kode_penggajian` varchar(100) NOT NULL,
  `kode_pegawai` int(11) NOT NULL,
  `gaji_pokok` text NOT NULL,
  `uang_makan_transport` text NOT NULL,
  `lembur` text NOT NULL,
  `terlambat` text NOT NULL,
  `tabungan` text NOT NULL,
  `mangkir` text NOT NULL,
  `total_potongan` text NOT NULL,
  `total_penerimaan` text NOT NULL,
  `tanggal_gaji` date NOT NULL,
  `departemen` int(11) NOT NULL,
  `thp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head_penggajian`
--

INSERT INTO `head_penggajian` (`kode_penggajian`, `kode_pegawai`, `gaji_pokok`, `uang_makan_transport`, `lembur`, `terlambat`, `tabungan`, `mangkir`, `total_potongan`, `total_penerimaan`, `tanggal_gaji`, `departemen`, `thp`) VALUES
('P07001', 2, '4000000', '1000000', '261,905', '30000', '50000', '0', '80,000', '6,561,905', '2015-07-17', 3, '6,481,905'),
('P07002', 1, '4500000', '1500000', '294,643', '30000', '150000', '0', '180,000', '7,094,643', '2015-07-17', 1, '6,914,643'),
('P07003', 2, '4000000', '1000000', '261,905', '30000', '50000', '0', '80,000', '6,561,905', '2015-07-17', 3, '6,481,905'),
('P07004', 3, '45000000', '1000000', '2,946,429', '30000', '50000', '0', '80,000', '50,246,429', '2015-07-17', 1, '50,196,429'),
('P07005', 4, '45', '1200000', '0', '0', '100000', '0', '100,000', '2,000,045', '2015-07-17', 1, '1,900,045'),
('P07006', 5, '5000000', '1200000', '59,524', '5000', '100000', '0', '105,000', '7,059,524', '2015-07-17', 1, '6,959,524'),
('P07007', 1, '4500000', '1500000', '294,643', '30000', '150000', '0', '180,000', '7,094,643', '2015-07-17', 1, '6,914,643'),
('P07008', 3, '45000000', '1000000', '2,946,429', '30000', '50000', '0', '80,000', '50,246,429', '2015-07-17', 1, '50,196,429'),
('P07009', 4, '45', '1200000', '0', '0', '100000', '0', '100,000', '2,000,045', '2015-07-17', 1, '1,900,045'),
('P07010', 5, '5000000', '1200000', '59,524', '5000', '100000', '0', '105,000', '7,059,524', '2015-07-17', 1, '6,959,524'),
('P07011', 2, '4000000', '1000000', '261,905', '30000', '50000', '0', '80,000', '6,561,905', '2015-07-17', 3, '6,481,905'),
('P07012', 1, '4500000', '1500000', '294,643', '30000', '150000', '0', '180,000', '7,094,643', '2015-07-18', 1, '6,914,643'),
('P07013', 3, '45000000', '1000000', '2,946,429', '30000', '50000', '0', '80,000', '50,246,429', '2015-07-18', 1, '50,196,429'),
('P07014', 4, '45', '1200000', '0', '0', '100000', '0', '100,000', '2,000,045', '2015-07-18', 1, '1,900,045'),
('P07015', 5, '5000000', '1200000', '59,524', '5000', '100000', '0', '105,000', '7,059,524', '2015-07-18', 1, '6,959,524'),
('P07016', 2, '4000000', '1000000', '261,905', '30000', '50000', '0', '80,000', '6,561,905', '2015-07-18', 3, '6,481,905'),
('P07017', 1, '4500000', '1500000', '294,643', '30000', '150000', '0', '180,000', '7,094,643', '2015-07-18', 1, '6,914,643'),
('P07018', 3, '45000000', '1000000', '2,946,429', '30000', '50000', '0', '80,000', '50,246,429', '2015-07-18', 1, '50,196,429'),
('P07019', 4, '45', '1200000', '0', '0', '100000', '0', '100,000', '2,000,045', '2015-07-18', 1, '1,900,045'),
('P07020', 5, '5000000', '1200000', '59,524', '5000', '100000', '0', '105,000', '7,059,524', '2015-07-18', 1, '6,959,524'),
('P07021', 1, '4500000', '1500000', '294,643', '30000', '150000', '0', '180,000', '7,094,643', '2015-07-18', 1, '6,914,643'),
('P07022', 3, '45000000', '1000000', '2,946,429', '30000', '50000', '0', '80,000', '50,246,429', '2015-07-18', 1, '50,196,429'),
('P07023', 4, '45', '1200000', '0', '0', '100000', '0', '100,000', '2,000,045', '2015-07-18', 1, '1,900,045'),
('P07024', 5, '5000000', '1200000', '59,524', '5000', '100000', '0', '105,000', '7,059,524', '2015-07-18', 1, '6,959,524'),
('P07025', 2, '4000000', '1000000', '261,905', '30000', '50000', '0', '80,000', '6,561,905', '2015-07-18', 3, '6,481,905'),
('P07026', 2, '4000000', '1000000', '261,905', '30000', '50000', '0', '80,000', '6,561,905', '2015-07-18', 3, '6,481,905');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
`KODE_JABATAN` int(11) NOT NULL,
  `NAMA_JABATAN` varchar(50) NOT NULL,
  `TUNJANGAN_JABATAN` int(11) NOT NULL,
  `TUNJANGAN_LAIN` varchar(50) DEFAULT NULL,
  `NOMINAL_TABUNGAN` int(11) NOT NULL,
  `NOMINAL_UMT` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`KODE_JABATAN`, `NAMA_JABATAN`, `TUNJANGAN_JABATAN`, `TUNJANGAN_LAIN`, `NOMINAL_TABUNGAN`, `NOMINAL_UMT`) VALUES
(12, 'SPESIALISASI WEBSITE', 5000000, '2,3,4', 50000, 1000000),
(13, 'ADMINISTRASI KEUANGAN', 1000000, '2,3', 25000, 500000),
(14, 'FRONT ACCOUNTING', 24000000, '2,3', 15000, 400000),
(15, 'SUPERVISIOR', 3500000, '2,3', 150000, 1500000),
(16, 'GENERAL ACCOUNTING', 1450000, '2,3', 100000, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `jam_kerja`
--

CREATE TABLE IF NOT EXISTS `jam_kerja` (
`KODE_JAM_KERJA` int(11) NOT NULL,
  `KETERANGAN` varchar(20) NOT NULL,
  `JAM_DATANG` time NOT NULL,
  `JAM_PULANG` time NOT NULL,
  `KODE_MASUK` int(11) NOT NULL,
  `KODE_KELUAR` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jam_kerja`
--

INSERT INTO `jam_kerja` (`KODE_JAM_KERJA`, `KETERANGAN`, `JAM_DATANG`, `JAM_PULANG`, `KODE_MASUK`, `KODE_KELUAR`) VALUES
(1, 'Shif Pagi', '09:00:00', '16:00:00', 0, 1),
(4, 'Shif Malam', '16:00:00', '05:00:00', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kasbon_pegawai`
--

CREATE TABLE IF NOT EXISTS `kasbon_pegawai` (
`KODE_KASBON` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(25) NOT NULL,
  `TANGGAL` date NOT NULL,
  `NOMINAL` int(11) NOT NULL,
  `KETERANGAN` varchar(100) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `KODE_PETUGAS` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kasbon_pegawai`
--

INSERT INTO `kasbon_pegawai` (`KODE_KASBON`, `NIP_PEGAWAI`, `TANGGAL`, `NOMINAL`, `KETERANGAN`, `STATUS`, `KODE_PETUGAS`) VALUES
(2, '1', '2015-07-22', 250000, 'Pinjam', 'Hutang', 2),
(3, '1', '2015-06-22', 50000, 'makan siang', 'Hutang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE IF NOT EXISTS `lembur` (
`KODE_LEMBUR` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(25) NOT NULL,
  `BULAN` varchar(20) NOT NULL,
  `TAHUN` year(4) NOT NULL,
  `TANGGAL` int(11) NOT NULL,
  `JUMLAH_JAM_LEMBUR` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `master_tunjangan`
--

CREATE TABLE IF NOT EXISTS `master_tunjangan` (
`KODE_MASTER_TUNJANGAN` int(11) NOT NULL,
  `NAMA_TUNJANGAN` varchar(50) NOT NULL,
  `NOMINAL` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `master_tunjangan`
--

INSERT INTO `master_tunjangan` (`KODE_MASTER_TUNJANGAN`, `NAMA_TUNJANGAN`, `NOMINAL`) VALUES
(2, 'anak', 300000),
(3, 'Istri', 500000),
(4, 'Keahlian', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `mesin_absensi`
--

CREATE TABLE IF NOT EXISTS `mesin_absensi` (
`KODE_MESIN` int(11) NOT NULL,
  `NAMA_MESIN` varchar(50) NOT NULL,
  `IP_ADDRESS` varchar(50) NOT NULL,
  `PORT_COM` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mesin_absensi`
--

INSERT INTO `mesin_absensi` (`KODE_MESIN`, `NAMA_MESIN`, `IP_ADDRESS`, `PORT_COM`) VALUES
(1, 'Lukstron Machine', '192.168.1.201', '4370');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`KODE_PEGAWAI` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(25) NOT NULL,
  `NAMA_PEGAWAI` varchar(100) NOT NULL,
  `TEMPAT_LAHIR` varchar(50) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `AGAMA` varchar(50) DEFAULT NULL,
  `STATUS_PERNIKAHAN` varchar(50) DEFAULT NULL,
  `JUMLAH_ANAK` int(11) DEFAULT NULL,
  `ALAMAT` text,
  `NOMOR_TELEPON` varchar(20) DEFAULT NULL,
  `KODE_JABATAN` int(11) DEFAULT NULL,
  `KODE_DEPARTEMEN` int(11) DEFAULT NULL,
  `GAJI_POKOK` int(11) DEFAULT NULL,
  `TANGGAL_MASUK` date DEFAULT NULL,
  `TANGGAL_KELUAR` date DEFAULT NULL,
  `STATUS_PEGAWAI` varchar(50) DEFAULT NULL,
  `FOTO_PEGAWAI` text,
  `JENIS_KELAMIN` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `NO_REKENING` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`KODE_PEGAWAI`, `NIP_PEGAWAI`, `NAMA_PEGAWAI`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `AGAMA`, `STATUS_PERNIKAHAN`, `JUMLAH_ANAK`, `ALAMAT`, `NOMOR_TELEPON`, `KODE_JABATAN`, `KODE_DEPARTEMEN`, `GAJI_POKOK`, `TANGGAL_MASUK`, `TANGGAL_KELUAR`, `STATUS_PEGAWAI`, `FOTO_PEGAWAI`, `JENIS_KELAMIN`, `EMAIL`, `NO_REKENING`) VALUES
(1, '6311239', 'Fajar Abby', 'Bandung', '1994-10-01', 'Islam', 'Menikah', 0, 'Komplek Margahayu raya', '08987898471', 15, 1, 4500000, '0000-00-00', '0000-00-00', 'Kontrak', '123456.jpg', 'laki-laki', 'fajar@gmail.com', '1234567'),
(2, '3311187', 'Indra Ramadhan', 'Bandung', '1993-03-08', 'Islam', 'Belum Kawin', 0, 'Antapani', '08678577', 12, 3, 4000000, '2015-06-01', '0000-00-00', 'Kontrak', '', 'laki-laki', 'indra08031993@gmail.com', '123432123'),
(3, '123456789', 'Fani MA', 'Bandung', '2015-07-04', 'Islam', 'Menikah', 10, 'Kiaracondong', '08981989111', 12, 1, 45000000, '2015-07-04', '2015-07-24', 'Tetap', '6311240.jpg', 'laki-laki', 'fani@gmail.com', '231231142'),
(4, '6311190', 'lpkia E', 'bandung', '2015-07-07', 'Islam', 'asd', 1, 'asd', '213123', 16, 1, 45, '2015-07-29', '0000-00-00', 'Tetap', '', 'laki-laki', 'asd@gmail.com', '3213123'),
(5, '4354353', 'Lukman', 'Bandung', '2015-07-02', 'Islam', 'Kawin', 2, 'sekejati', '084325232', 16, 1, 5000000, '2015-07-01', '0000-00-00', 'Tetap', '4354353.jpg', 'laki-laki', 'lukman@gmail.com', '321123');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan_penggajian`
--

CREATE TABLE IF NOT EXISTS `pengaturan_penggajian` (
`ID` int(11) NOT NULL,
  `PARAMETER` varchar(100) NOT NULL,
  `VALUE` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pengaturan_penggajian`
--

INSERT INTO `pengaturan_penggajian` (`ID`, `PARAMETER`, `VALUE`) VALUES
(1, 'Jumlah Hari Kerja', '6'),
(2, 'Keterlambatan', '15,5000'),
(3, 'Lembur', 'GAJI POKOK'),
(4, 'Tanggal Penggajian', '16'),
(5, 'Mangkir', 'THP');

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

CREATE TABLE IF NOT EXISTS `penghargaan` (
`KODE_PENGHARGAAN` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `BULAN` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `TAHUN` char(4) COLLATE latin1_general_ci NOT NULL,
  `NOMINAL` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `KODE_PETUGAS` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
`KODE_PETUGAS` int(11) NOT NULL,
  `NAMA_PETUGAS` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `USERNAME_LOGIN` text NOT NULL,
  `PASSWORD_LOGIN` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`KODE_PETUGAS`, `NAMA_PETUGAS`, `EMAIL`, `USERNAME_LOGIN`, `PASSWORD_LOGIN`) VALUES
(1, 'fajar', 'fajar', 'fajar', 'fajar'),
(2, 'admin', 'admin', 'admin', 'admin'),
(3, 'indra', 'indra', 'indra', 'indra');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
`KODE_PINJAMAN` int(11) NOT NULL,
  `KODE_PEGAWAI` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `NOMINAL` int(11) NOT NULL,
  `JUMLAH_BLN` int(11) NOT NULL,
  `KETERANGAN` text,
  `STATUS` varchar(20) DEFAULT NULL,
  `KODE_PETUGAS` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`KODE_PINJAMAN`, `KODE_PEGAWAI`, `TANGGAL`, `NOMINAL`, `JUMLAH_BLN`, `KETERANGAN`, `STATUS`, `KODE_PETUGAS`) VALUES
(1, 2, '2015-07-18', 1000000, 12, 'keperluan', 'Hutang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `potongan_perusahaan`
--

CREATE TABLE IF NOT EXISTS `potongan_perusahaan` (
`KODE_POTONGAN_PERUSAHAAN` int(11) NOT NULL,
  `NAMA_POTONGAN_PERUSAHAAN` varchar(50) NOT NULL,
  `PRESENTASE_POTONGAN` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profil_perusahaan`
--

CREATE TABLE IF NOT EXISTS `profil_perusahaan` (
  `NAMA_PERUSAHAAN` text NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE_1` int(20) NOT NULL,
  `PHONE_2` int(20) NOT NULL,
  `KOTA` varchar(100) NOT NULL,
  `FAXIMILI` varchar(100) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGARA` varchar(100) NOT NULL,
  `logo` varchar(50) DEFAULT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profil_perusahaan`
--

INSERT INTO `profil_perusahaan` (`NAMA_PERUSAHAAN`, `EMAIL`, `PHONE_1`, `PHONE_2`, `KOTA`, `FAXIMILI`, `ALAMAT`, `NEGARA`, `logo`, `id`) VALUES
('Lukstron Company', 'lukstron2015@gmail.com', 2147483647, 2147483647, 'Bandung', '022-7561278', 'Jl.Soekarno Hatta no.456', 'Indonesia', 'logo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restore_data`
--

CREATE TABLE IF NOT EXISTS `restore_data` (
`id_restore` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `restore_data`
--

INSERT INTO `restore_data` (`id_restore`, `tanggal`, `file`) VALUES
(1, '2015-07-04 12:28:32', ''),
(2, '2015-07-04 12:31:05', ''),
(3, '2015-07-04 12:31:59', ''),
(4, '2015-07-04 12:32:28', ''),
(5, '2015-07-04 12:33:13', ''),
(6, '2015-07-04 12:33:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE IF NOT EXISTS `tabungan` (
`ID` int(11) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `NOMINAL` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `KODE_PETUGAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
 ADD PRIMARY KEY (`KODE_ABSENSI`);

--
-- Indexes for table `backup_data`
--
ALTER TABLE `backup_data`
 ADD PRIMARY KEY (`id_backup`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
 ADD PRIMARY KEY (`KODE_CUTI`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
 ADD PRIMARY KEY (`KODE_DEPARTEMEN`);

--
-- Indexes for table `detail_tunjangan_penggajian`
--
ALTER TABLE `detail_tunjangan_penggajian`
 ADD PRIMARY KEY (`id_detail_penggajian`), ADD KEY `kode_penggajian` (`kode_penggajian`);

--
-- Indexes for table `hari_libur`
--
ALTER TABLE `hari_libur`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `head_penggajian`
--
ALTER TABLE `head_penggajian`
 ADD PRIMARY KEY (`kode_penggajian`), ADD KEY `kode_pegawai` (`kode_pegawai`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
 ADD PRIMARY KEY (`KODE_JABATAN`);

--
-- Indexes for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
 ADD PRIMARY KEY (`KODE_JAM_KERJA`);

--
-- Indexes for table `kasbon_pegawai`
--
ALTER TABLE `kasbon_pegawai`
 ADD PRIMARY KEY (`KODE_KASBON`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
 ADD PRIMARY KEY (`KODE_LEMBUR`);

--
-- Indexes for table `master_tunjangan`
--
ALTER TABLE `master_tunjangan`
 ADD PRIMARY KEY (`KODE_MASTER_TUNJANGAN`);

--
-- Indexes for table `mesin_absensi`
--
ALTER TABLE `mesin_absensi`
 ADD PRIMARY KEY (`KODE_MESIN`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`KODE_PEGAWAI`);

--
-- Indexes for table `pengaturan_penggajian`
--
ALTER TABLE `pengaturan_penggajian`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `penghargaan`
--
ALTER TABLE `penghargaan`
 ADD PRIMARY KEY (`KODE_PENGHARGAAN`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
 ADD PRIMARY KEY (`KODE_PETUGAS`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
 ADD PRIMARY KEY (`KODE_PINJAMAN`);

--
-- Indexes for table `potongan_perusahaan`
--
ALTER TABLE `potongan_perusahaan`
 ADD PRIMARY KEY (`KODE_POTONGAN_PERUSAHAAN`);

--
-- Indexes for table `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restore_data`
--
ALTER TABLE `restore_data`
 ADD PRIMARY KEY (`id_restore`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
MODIFY `KODE_ABSENSI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=332;
--
-- AUTO_INCREMENT for table `backup_data`
--
ALTER TABLE `backup_data`
MODIFY `id_backup` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
MODIFY `KODE_CUTI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
MODIFY `KODE_DEPARTEMEN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `detail_tunjangan_penggajian`
--
ALTER TABLE `detail_tunjangan_penggajian`
MODIFY `id_detail_penggajian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `hari_libur`
--
ALTER TABLE `hari_libur`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
MODIFY `KODE_JABATAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
MODIFY `KODE_JAM_KERJA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kasbon_pegawai`
--
ALTER TABLE `kasbon_pegawai`
MODIFY `KODE_KASBON` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
MODIFY `KODE_LEMBUR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_tunjangan`
--
ALTER TABLE `master_tunjangan`
MODIFY `KODE_MASTER_TUNJANGAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mesin_absensi`
--
ALTER TABLE `mesin_absensi`
MODIFY `KODE_MESIN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `KODE_PEGAWAI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengaturan_penggajian`
--
ALTER TABLE `pengaturan_penggajian`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penghargaan`
--
ALTER TABLE `penghargaan`
MODIFY `KODE_PENGHARGAAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
MODIFY `KODE_PETUGAS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
MODIFY `KODE_PINJAMAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `potongan_perusahaan`
--
ALTER TABLE `potongan_perusahaan`
MODIFY `KODE_POTONGAN_PERUSAHAAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `restore_data`
--
ALTER TABLE `restore_data`
MODIFY `id_restore` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_tunjangan_penggajian`
--
ALTER TABLE `detail_tunjangan_penggajian`
ADD CONSTRAINT `detail_tunjangan_penggajian_ibfk_1` FOREIGN KEY (`kode_penggajian`) REFERENCES `head_penggajian` (`kode_penggajian`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
