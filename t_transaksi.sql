-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 01:06 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tabungan`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_nasabah` varchar(50) NOT NULL,
  `jenis_trans` enum('Setor','Tarik') NOT NULL,
  `value` double NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_nasabah`, `jenis_trans`, `value`, `tanggal`, `id_user`, `datetime`, `keterangan`) VALUES
('TR-00002', 'NB-00004', 'Tarik', 4000, '2014-08-30', 'PT-00002', '2014-08-30 21:22:28', '-'),
('ST-00006', 'NB-00003', 'Setor', 80000, '2014-08-30', 'PT-00002', '2014-08-30 21:21:46', '-'),
('ST-00005', 'NB-00007', 'Setor', 10000, '2014-05-31', 'PT-00002', '2014-05-31 22:44:04', '-'),
('ST-00004', 'NB-00001', 'Setor', 45000, '2014-05-31', 'PT-00002', '2014-05-31 15:39:51', '-'),
('ST-00003', 'NB-00006', 'Setor', 560000, '2014-05-31', 'PT-00002', '2014-05-31 15:24:08', '-'),
('TR-00001', 'NB-00001', 'Tarik', 50000, '2014-05-09', 'PT-00002', '2014-05-09 14:28:18', '-'),
('ST-00002', 'NB-00004', 'Setor', 20000, '2014-04-23', 'PT-00002', '2014-04-23 00:10:55', '-'),
('ST-00001', 'NB-00001', 'Setor', 100000, '2014-04-23', 'PT-00002', '2014-04-23 00:09:23', '-'),
('ST-00007', 'NB-00006', 'Setor', 200000, '2014-08-30', 'PT-00002', '2014-08-30 21:23:07', '-'),
('ST-00008', 'NB-00003', 'Setor', 50000, '2014-08-30', 'PT-00002', '2014-08-30 21:23:24', '-'),
('ST-00009', 'NB-00005', 'Setor', 50000, '2014-08-30', 'PT-00002', '2014-08-30 21:23:42', '-'),
('ST-00010', 'NB-00001', 'Setor', 10000, '2014-09-28', 'PT-00002', '2014-09-28 19:17:39', '-'),
('ST-00011', 'NB-00004', 'Setor', 50000, '2014-10-08', 'PT-00002', '2014-10-08 07:34:02', '-'),
('TR-00003', 'NB-00001', 'Tarik', 10000, '2015-01-12', 'PT-00002', '2015-01-12 07:40:07', '-'),
('ST-00012', 'NB-00003', 'Setor', 50000, '2015-02-21', 'PT-00002', '2015-02-21 15:32:39', '-'),
('ST-00013', 'NB-00003', 'Setor', 20000, '2015-02-21', 'PT-00002', '2015-02-21 15:34:48', '-'),
('TR-00004', 'NB-00003', 'Tarik', 150000, '2015-02-21', 'PT-00002', '2015-02-21 15:36:19', '-'),
('ST-00014', 'NB-00005', 'Setor', 200000, '2015-03-18', 'PT-00002', '2015-03-18 00:38:22', '-'),
('TR-00005', 'NB-00005', 'Tarik', 150000, '2015-03-18', 'PT-00002', '2015-03-18 00:39:08', '-'),
('ST-00015', 'NB-00002', 'Setor', 3000000, '2015-03-18', 'PT-00002', '2015-03-18 00:42:44', '-'),
('ST-00016', 'NB-00011', 'Setor', 50, '2015-07-23', 'PT-00002', '2015-07-23 20:13:08', '-'),
('ST-00017', 'NB-00003', 'Setor', 50000, '2015-09-23', 'PT-00002', '2015-09-23 22:53:22', '-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
