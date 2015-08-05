-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Agu 2015 pada 16.23
-- Versi Server: 5.6.20
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
-- Struktur dari tabel `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
`KODE_ABSENSI` int(11) NOT NULL,
  `KODE_JAM_KERJA` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(25) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM_MASUK` time DEFAULT NULL,
  `JAM_KELUAR` time DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=351 ;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`KODE_ABSENSI`, `KODE_JAM_KERJA`, `NIP_PEGAWAI`, `TANGGAL`, `JAM_MASUK`, `JAM_KELUAR`) VALUES
(25, 1, '11', '2015-08-29', '09:00:00', '16:00:00'),
(24, 1, '11', '2015-08-22', '09:00:00', '16:00:00'),
(23, 1, '11', '2015-08-15', '09:00:00', '16:00:00'),
(21, 1, '11', '2015-08-31', '09:00:00', '16:00:00'),
(20, 1, '11', '2015-08-28', '09:00:00', '16:00:00'),
(19, 1, '11', '2015-08-27', '09:00:00', '16:00:00'),
(18, 1, '11', '2015-08-26', '09:00:00', '16:00:00'),
(17, 1, '11', '2015-08-25', '09:00:00', '16:00:00'),
(16, 1, '11', '2015-08-24', '09:00:00', '16:00:00'),
(15, 1, '11', '2015-08-21', '09:00:00', '16:00:00'),
(14, 1, '11', '2015-08-20', '09:00:00', '16:00:00'),
(13, 1, '11', '2015-08-19', '09:00:00', '16:00:00'),
(12, 1, '11', '2015-08-18', '09:00:00', '16:00:00'),
(11, 1, '11', '2015-08-17', '09:00:00', '16:00:00'),
(10, 1, '11', '2015-08-14', '09:00:00', '16:00:00'),
(9, 1, '11', '2015-08-13', '09:00:00', '16:00:00'),
(8, 1, '11', '2015-08-12', '09:00:00', '16:00:00'),
(7, 1, '11', '2015-08-11', '09:00:00', '16:00:00'),
(6, 1, '11', '2015-08-10', '09:00:00', '16:00:00'),
(5, 1, '11', '2015-08-07', '09:00:00', '16:00:00'),
(4, 1, '11', '2015-08-06', '09:00:00', '16:00:00'),
(3, 1, '11', '2015-08-05', '09:00:00', '16:00:00'),
(2, 1, '11', '2015-08-04', '09:00:00', '16:00:00'),
(1, 1, '11', '2015-08-03', '09:00:00', '16:00:00'),
(22, 1, '11', '2015-08-08', '09:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `backup_data`
--

CREATE TABLE IF NOT EXISTS `backup_data` (
`id_backup` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data untuk tabel `backup_data`
--

INSERT INTO `backup_data` (`id_backup`, `tanggal`, `file`) VALUES
(35, '2015-07-04 12:35:03', 'Sat04Jul2015lukstron1436006103.sql'),
(36, '2015-07-04 12:35:05', 'Sat04Jul2015lukstron1436006105.sql'),
(37, '2015-07-04 12:35:06', 'Sat04Jul2015lukstron1436006106.sql'),
(38, '2015-07-24 14:48:35', 'Fri24Jul2015lukstron1437742115.sql'),
(39, '2015-07-24 14:48:39', 'Fri24Jul2015lukstron1437742119.sql'),
(40, '2015-07-24 14:48:42', 'Fri24Jul2015lukstron1437742122.sql'),
(41, '2015-08-03 10:00:18', 'Mon03Aug2015lukstron1438588818.sql'),
(42, '2015-08-03 10:00:40', 'Mon03Aug2015lukstron1438588840.sql'),
(43, '2015-08-04 13:15:09', 'Tue04Aug2015lukstron1438686909.sql');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE IF NOT EXISTS `cuti` (
`KODE_CUTI` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(25) NOT NULL,
  `KETERANGAN` text NOT NULL,
  `TANGGAL_AWAL` date NOT NULL,
  `TANGGAL_AKHIR` date NOT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `KODE_PETUGAS` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`KODE_CUTI`, `NIP_PEGAWAI`, `KETERANGAN`, `TANGGAL_AWAL`, `TANGGAL_AKHIR`, `STATUS`, `KODE_PETUGAS`) VALUES
(5, '12', 'Jalan-Jalan', '2015-08-03', '2015-08-07', 'Menunggu', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
`KODE_DEPARTEMEN` int(11) NOT NULL,
  `NAMA_DEPARTEMEN` varchar(50) NOT NULL,
  `STATE_ID` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`KODE_DEPARTEMEN`, `NAMA_DEPARTEMEN`, `STATE_ID`) VALUES
(15, 'KEUANGAN', 2),
(16, 'PENJUALAN', 2),
(17, 'PEMASARAN', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_tunjangan_penggajian`
--

CREATE TABLE IF NOT EXISTS `detail_tunjangan_penggajian` (
`id_detail_penggajian` int(11) NOT NULL,
  `kode_penggajian` varchar(100) NOT NULL,
  `nama_tunjangan` text NOT NULL,
  `nominal_tunjangan` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=252 ;

--
-- Dumping data untuk tabel `detail_tunjangan_penggajian`
--

INSERT INTO `detail_tunjangan_penggajian` (`id_detail_penggajian`, `kode_penggajian`, `nama_tunjangan`, `nominal_tunjangan`) VALUES
(247, 'P08001', '', ''),
(248, 'P08002', 'KEAHLIAN', '45000'),
(249, 'P08002', 'ANAK', '20000'),
(250, 'P08002', 'ISTRI', '25000'),
(251, 'P08003', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari_libur`
--

CREATE TABLE IF NOT EXISTS `hari_libur` (
`ID` int(11) NOT NULL,
  `BULAN` varchar(3) NOT NULL,
  `TAHUN` year(4) NOT NULL,
  `TANGGAL` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `hari_libur`
--

INSERT INTO `hari_libur` (`ID`, `BULAN`, `TAHUN`, `TANGGAL`) VALUES
(7, '07', 2015, '2015-07-26,2015-07-27'),
(14, '09', 2016, '2015-09-01,2015-09-02,2015-09-03'),
(15, '08', 2015, '2015-08-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `head_penggajian`
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
  `thp` text NOT NULL,
  `kasbon` int(200) NOT NULL,
  `pinjaman` int(100) NOT NULL,
  `potongan_mangkir` int(100) NOT NULL,
  `total_masuk` int(11) NOT NULL,
  `penghargaan` int(100) NOT NULL,
  `jumlah_cuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `head_penggajian`
--

INSERT INTO `head_penggajian` (`kode_penggajian`, `kode_pegawai`, `gaji_pokok`, `uang_makan_transport`, `lembur`, `terlambat`, `tabungan`, `mangkir`, `total_potongan`, `total_penerimaan`, `tanggal_gaji`, `departemen`, `thp`, `kasbon`, `pinjaman`, `potongan_mangkir`, `total_masuk`, `penghargaan`, `jumlah_cuti`) VALUES
('P08001', 13, '4500000', '0', '0', '0', '0', '20', '0', '4,500,000', '2015-08-05', 15, '4500000', 0, 0, 0, 0, 0, 0),
('P08002', 11, '1800000', '390000', '0', '0', '0', '0', '10,000', '2,480,000', '2015-08-05', 15, '2470000', 0, 0, 0, 26, 200000, 0),
('P08003', 10, '4500000', '0', '0', '0', '0', '20', '0', '4,500,000', '2015-08-05', 15, '4500000', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
`KODE_JABATAN` int(11) NOT NULL,
  `NAMA_JABATAN` varchar(50) NOT NULL,
  `TUNJANGAN_JABATAN` int(11) NOT NULL,
  `TUNJANGAN_LAIN` varchar(50) DEFAULT NULL,
  `NOMINAL_TABUNGAN` int(11) NOT NULL,
  `NOMINAL_UMT` int(11) NOT NULL,
  `STATE_ID` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`KODE_JABATAN`, `NAMA_JABATAN`, `TUNJANGAN_JABATAN`, `TUNJANGAN_LAIN`, `NOMINAL_TABUNGAN`, `NOMINAL_UMT`, `STATE_ID`) VALUES
(18, 'SUPERVISIOR', 0, NULL, 0, 300000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam_kerja`
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
-- Dumping data untuk tabel `jam_kerja`
--

INSERT INTO `jam_kerja` (`KODE_JAM_KERJA`, `KETERANGAN`, `JAM_DATANG`, `JAM_PULANG`, `KODE_MASUK`, `KODE_KELUAR`) VALUES
(1, 'Shif Pagi', '09:00:00', '16:00:00', 0, 1),
(4, 'Shif Malam', '16:00:00', '05:00:00', 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasbon_pegawai`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `lembur`
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
-- Struktur dari tabel `master_tunjangan`
--

CREATE TABLE IF NOT EXISTS `master_tunjangan` (
`KODE_MASTER_TUNJANGAN` int(11) NOT NULL,
  `NAMA_TUNJANGAN` varchar(50) NOT NULL,
  `NOMINAL` int(11) NOT NULL,
  `STATE_ID` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `master_tunjangan`
--

INSERT INTO `master_tunjangan` (`KODE_MASTER_TUNJANGAN`, `NAMA_TUNJANGAN`, `NOMINAL`, `STATE_ID`) VALUES
(5, 'KEAHLIAN', 45000, 2),
(6, 'ANAK', 20000, 2),
(7, 'ISTRI', 25000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mesin_absensi`
--

CREATE TABLE IF NOT EXISTS `mesin_absensi` (
`KODE_MESIN` int(11) NOT NULL,
  `NAMA_MESIN` varchar(50) NOT NULL,
  `IP_ADDRESS` varchar(50) NOT NULL,
  `PORT_COM` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `mesin_absensi`
--

INSERT INTO `mesin_absensi` (`KODE_MESIN`, `NAMA_MESIN`, `IP_ADDRESS`, `PORT_COM`) VALUES
(1, 'Lukstron Machine', '192.168.1.201', '4370');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`KODE_PEGAWAI` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(25) DEFAULT NULL,
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
  `NO_REKENING` text,
  `STATE_ID` int(11) NOT NULL,
  `NOMINAL_UMT` int(11) DEFAULT NULL,
  `TABUNGAN` int(11) DEFAULT NULL,
  `PENGHARGAAN` int(11) DEFAULT NULL,
  `CATATAN` text NOT NULL,
  `TUNJANGAN_LAIN` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`KODE_PEGAWAI`, `NIP_PEGAWAI`, `NAMA_PEGAWAI`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `AGAMA`, `STATUS_PERNIKAHAN`, `JUMLAH_ANAK`, `ALAMAT`, `NOMOR_TELEPON`, `KODE_JABATAN`, `KODE_DEPARTEMEN`, `GAJI_POKOK`, `TANGGAL_MASUK`, `TANGGAL_KELUAR`, `STATUS_PEGAWAI`, `FOTO_PEGAWAI`, `JENIS_KELAMIN`, `EMAIL`, `NO_REKENING`, `STATE_ID`, `NOMINAL_UMT`, `TABUNGAN`, `PENGHARGAAN`, `CATATAN`, `TUNJANGAN_LAIN`) VALUES
(13, 'PG2-150800004', 'Reni Indriani', 'Jakarta', '2015-08-19', 'Islam', 'Kawin', 1, 'Jl.Jakarta no 23', '123213124231', 18, 15, 4500000, '2015-08-04', '0000-00-00', 'Tetap', '', 'Perempuan', 'demo@gmail.com', '21783618726387', 2, 0, 0, 0, '', ''),
(12, 'PG2-150800003', 'Mochamad Rendi Yulian', 'Bandung', '2015-08-19', 'Islam', 'Kawin', 2, 'Jl.Cimahi raya ', '123213124231', 18, 16, 1000000, '2015-08-04', '0000-00-00', 'Tetap', '', 'laki-laki', 'demo@gmail.com', '3123123123123', 2, NULL, NULL, NULL, '', ''),
(11, 'PG2-150800002', 'Indra Ramadhan', 'Bandung', '2015-08-04', 'Islam', 'Kawin', 2, 'Jl.Antapani raya 2', '0912038908', 18, 15, 1800000, '2015-08-04', '0000-00-00', 'Tetap', '', 'laki-laki', 'indra@gmail.com', '123432423123', 2, 15000, 10000, 200000, 'asd', '5,6,7'),
(10, 'PG2-150800001', 'Fajar Abby Hydro Prasetyo', 'Cimahi', '1994-01-10', 'Islam', 'Belum Kawin', 0, 'Jl.Margahayu raya bandung No.123 Blok C', '089508148177', 18, 15, 4500000, '2015-08-04', '0000-00-00', 'Tetap', '', 'laki-laki', 'fajarprasetyo45@gmail.com', '123651672357', 2, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan_penggajian`
--

CREATE TABLE IF NOT EXISTS `pengaturan_penggajian` (
`ID` int(11) NOT NULL,
  `PARAMETER` varchar(100) NOT NULL,
  `VALUE` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pengaturan_penggajian`
--

INSERT INTO `pengaturan_penggajian` (`ID`, `PARAMETER`, `VALUE`) VALUES
(1, 'Jumlah Hari Kerja', '6'),
(2, 'Keterlambatan', '15,5000'),
(3, 'Lembur', 'GAJI POKOK'),
(4, 'Tanggal Penggajian', '16'),
(5, 'Mangkir', 'THP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghargaan`
--

CREATE TABLE IF NOT EXISTS `penghargaan` (
`KODE_PENGHARGAAN` int(11) NOT NULL,
  `NIP_PEGAWAI` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `BULAN` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `TAHUN` char(4) COLLATE latin1_general_ci NOT NULL,
  `NOMINAL` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `KETERANGAN` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
`KODE_PETUGAS` int(11) NOT NULL,
  `NAMA_PETUGAS` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `USERNAME_LOGIN` text NOT NULL,
  `PASSWORD_LOGIN` text NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `AKSES` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`KODE_PETUGAS`, `NAMA_PETUGAS`, `EMAIL`, `USERNAME_LOGIN`, `PASSWORD_LOGIN`, `STATE_ID`, `AKSES`) VALUES
(1, 'fajar Abby', 'fajar@gmail.com', 'fajar', 'fajar', 2, '42'),
(2, 'admin', 'admin@gmail.com', 'admin', 'admin', 2, '1'),
(3, 'indra', 'indra', 'indra', 'indra', 0, ''),
(8, 'Lpkia', 'lpkia@gmail.com', 'lpkia', 'lpkia', 2, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
`KODE_PINJAMAN` int(11) NOT NULL,
  `KODE_PEGAWAI` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `NOMINAL` int(11) NOT NULL,
  `JUMLAH_BLN` int(11) NOT NULL,
  `KETERANGAN` text,
  `STATUS` varchar(20) DEFAULT NULL,
  `KODE_PETUGAS` int(11) NOT NULL,
  `CICILAN_PERBULAN` int(200) NOT NULL,
  `SISA_CICILAN` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `potongan_perusahaan`
--

CREATE TABLE IF NOT EXISTS `potongan_perusahaan` (
`KODE_POTONGAN_PERUSAHAAN` int(11) NOT NULL,
  `NAMA_POTONGAN_PERUSAHAAN` varchar(50) NOT NULL,
  `PRESENTASE_POTONGAN` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_perusahaan`
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
`id` int(11) NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `COLOR` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `profil_perusahaan`
--

INSERT INTO `profil_perusahaan` (`NAMA_PERUSAHAAN`, `EMAIL`, `PHONE_1`, `PHONE_2`, `KOTA`, `FAXIMILI`, `ALAMAT`, `NEGARA`, `logo`, `id`, `STATE_ID`, `COLOR`) VALUES
('PT.Indah Jaya Maju', 'lukstron2015@gmail.com', 2147483647, 2147483647, 'Bandung', '022-7561278', 'Jl.Soekarno Hatta no.456', 'Indonesia', 'logo.png', 1, 2, '#0d9ddb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `restore_data`
--

CREATE TABLE IF NOT EXISTS `restore_data` (
`id_restore` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `restore_data`
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
-- Struktur dari tabel `rights_control`
--

CREATE TABLE IF NOT EXISTS `rights_control` (
`ID` int(11) NOT NULL,
  `GROUP_ID` int(11) NOT NULL,
  `AKSES` text NOT NULL,
  `CONTROL` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data untuk tabel `rights_control`
--

INSERT INTO `rights_control` (`ID`, `GROUP_ID`, `AKSES`, `CONTROL`) VALUES
(70, 41, '1', ''),
(71, 41, '2', ''),
(72, 41, '3', ''),
(73, 41, '4', ''),
(74, 41, '5', ''),
(75, 41, '6', ''),
(76, 41, '7', ''),
(77, 41, '8', ''),
(78, 41, '9', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rights_group`
--

CREATE TABLE IF NOT EXISTS `rights_group` (
`ID` int(11) NOT NULL,
  `GROUP_NAME` text NOT NULL,
  `AKSES` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `rights_group`
--

INSERT INTO `rights_group` (`ID`, `GROUP_NAME`, `AKSES`) VALUES
(1, 'Keuangan', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23'),
(2, 'Full Akses', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24'),
(41, 'Manager', '2,3,4,5,6,7,8,9'),
(42, 'Admin', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rights_menu`
--

CREATE TABLE IF NOT EXISTS `rights_menu` (
`ID` int(11) NOT NULL,
  `MENU_NAME` text NOT NULL,
  `MENU_LINK` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `rights_menu`
--

INSERT INTO `rights_menu` (`ID`, `MENU_NAME`, `MENU_LINK`) VALUES
(1, 'State', 'state'),
(2, 'Pegawai', 'pegawai'),
(3, 'Petugas', 'petugas'),
(4, 'Departemen', 'departemen'),
(5, 'Jabatan', 'jabatan'),
(6, 'Tunjangan', 'tunjangan'),
(7, 'Cuti', 'cuti'),
(8, 'KasBon', 'kasbon'),
(9, 'Pinjaman', 'pinjaman'),
(10, 'Jam Kerja', 'waktu'),
(11, 'Data Penggajian', 'penggajian'),
(12, 'Input Penggajian', 'input_penggajian'),
(13, 'Laporan Penggajian', 'laporan_gaji'),
(14, 'Absensi Data', 'absensi_data'),
(15, 'Penghargaan', 'penghargaan'),
(16, 'Cadangkan Basis Data', 'backup'),
(17, 'Pulihkan Basis Data', 'restore'),
(18, 'Konfigurasi Mesin', 'mesin'),
(19, 'Pengaturan Perusahaan', 'info'),
(20, 'Monitoring Sistem', 'monitoring'),
(21, 'Konfigurasi Penggajian', 'conf_penggajian'),
(22, 'Konfigurasi Hari Libur', 'hari_libur'),
(23, 'Grup Pengguna', 'group'),
(24, 'Pembaruan Sistem', 'update');

-- --------------------------------------------------------

--
-- Struktur dari tabel `state`
--

CREATE TABLE IF NOT EXISTS `state` (
`STATE_ID` int(11) NOT NULL,
  `STATE_NAME` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `state`
--

INSERT INTO `state` (`STATE_ID`, `STATE_NAME`) VALUES
(2, 'Jakarta'),
(3, 'Bandung'),
(4, 'Bogor'),
(5, 'Palembang'),
(6, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabungan`
--

CREATE TABLE IF NOT EXISTS `tabungan` (
`ID` int(11) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `NOMINAL` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `KODE_PETUGAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `template`
--

CREATE TABLE IF NOT EXISTS `template` (
`ID` int(11) NOT NULL,
  `KODE_PEGAWAI` int(11) NOT NULL,
  `PRIVILEGE` int(11) NOT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `ENABLED` varchar(10) DEFAULT NULL,
  `FINGERINDEX` int(11) NOT NULL,
  `TMPDATA` text
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
-- Indexes for table `rights_control`
--
ALTER TABLE `rights_control`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rights_group`
--
ALTER TABLE `rights_group`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rights_menu`
--
ALTER TABLE `rights_menu`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
 ADD PRIMARY KEY (`STATE_ID`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
MODIFY `KODE_ABSENSI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=351;
--
-- AUTO_INCREMENT for table `backup_data`
--
ALTER TABLE `backup_data`
MODIFY `id_backup` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
MODIFY `KODE_CUTI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
MODIFY `KODE_DEPARTEMEN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `detail_tunjangan_penggajian`
--
ALTER TABLE `detail_tunjangan_penggajian`
MODIFY `id_detail_penggajian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `hari_libur`
--
ALTER TABLE `hari_libur`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
MODIFY `KODE_JABATAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
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
MODIFY `KODE_MASTER_TUNJANGAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mesin_absensi`
--
ALTER TABLE `mesin_absensi`
MODIFY `KODE_MESIN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `KODE_PEGAWAI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pengaturan_penggajian`
--
ALTER TABLE `pengaturan_penggajian`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penghargaan`
--
ALTER TABLE `penghargaan`
MODIFY `KODE_PENGHARGAAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
MODIFY `KODE_PETUGAS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
MODIFY `KODE_PINJAMAN` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `rights_control`
--
ALTER TABLE `rights_control`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `rights_group`
--
ALTER TABLE `rights_group`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `rights_menu`
--
ALTER TABLE `rights_menu`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
MODIFY `STATE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_tunjangan_penggajian`
--
ALTER TABLE `detail_tunjangan_penggajian`
ADD CONSTRAINT `detail_tunjangan_penggajian_ibfk_1` FOREIGN KEY (`kode_penggajian`) REFERENCES `head_penggajian` (`kode_penggajian`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
