-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2018 pada 11.46
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_tabungan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(50) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `status`) VALUES
('K0001', 'VII', 'Y'),
('K0002', 'VIII', 'N'),
('K0003', 'IX', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `mapel` varchar(20) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`) VALUES
(1, 'BIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE IF NOT EXISTS `nasabah` (
  `id_nasabah` varchar(50) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `orang_tua` varchar(50) NOT NULL,
  `saldo` double NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` enum('Y','T') NOT NULL,
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`id_nasabah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `no_rekening`, `username`, `password`, `nama`, `alamat`, `id_kelas`, `orang_tua`, `saldo`, `tempat_lahir`, `tanggal_lahir`, `level`, `status`, `id_session`) VALUES
('N0001', '2017000001', 'nasrul', '202cb962ac59075b964b07152d234b70', 'Nashrul', 'Sambogunung Dukun Gresik  ', 'K0001', 'Mujiono', 1970000, 'Gresik', '2017-08-23', 'nasabah', 'Y', 'n1jkjstfrpchfgm66ct03s63u4'),
('N0002', '2017000002', '', '', 'Syaiful Nazar', 'Sambogunung   ', 'K0001', 'Kartaji', 270000, 'Gresik', '1993-05-20', '', 'T', ''),
('N0003', '2017000003', 'arini', '32d871f40492ea15c187ce6bed5cdecc', 'Arini', 'Sambogunung   ', 'K0003', 'Kartaji', 440000, 'Gresik', '2017-09-06', '', 'Y', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `alamat`, `no_telp`, `username`, `password`, `level`, `status`, `id_session`) VALUES
('P0001', 'Syaiful Nazar', ' Sambogunung Dukun Gresik           ', '081515176779', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Y', '22j5pelcgr55itht4kc4sa6of1'),
('P0002', 'Bais', 'Sambogunung      ', '081515176779', 'bais', '47111f73828922ec4349208ad14b083d', 'user', 'Y', 'pb35f1v27bcdnnoiorfhqaik10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `nama_sekolah` varchar(200) NOT NULL,
  `kepala` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `situs` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengaturan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `nama_sekolah`, `kepala`, `alamat`, `telephone`, `situs`) VALUES
(1, 'MTs YKUI SAMBOUNUNG', 'Endang Nurhayati, S.Pd', 'Jl. Gajah Mada RT 8B RW 003 Sambogunung        ', '081515176779', 'https://mtsykuisambogunung.sch.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_nasabah` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `debit` int(10) NOT NULL,
  `kredit` int(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_nasabah`, `tanggal`, `debit`, `kredit`, `keterangan`) VALUES
('T0002', 'N0001', '2017-08-28', 0, 10000, ''),
('T0001', 'N0001', '2017-08-28', 150000, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2','3') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(4, 'Syaiful Nazar', 'rul23@yahoo.co.id', '202cb962ac59075b964b07152d234b70', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
