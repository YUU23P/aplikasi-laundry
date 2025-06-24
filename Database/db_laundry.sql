-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2021 pada 15.45
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
`id_detail` int(11) NOT NULL,
  `transaksi_id` int(11) DEFAULT NULL,
  `paket_id` int(11) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  `keterangan` text,
  `total_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `transaksi_id`, `paket_id`, `qty`, `total_harga`, `keterangan`, `total_bayar`) VALUES
(1, 38, 4, 2, 14000, NULL, 14000),
(2, 39, 7, 1, 11000, NULL, NULL),
(3, 40, 9, 5, 105000, NULL, NULL),
(4, 41, 8, 2, 28000, NULL, 28000),
(5, 44, 5, 1, 9000, NULL, NULL),
(6, 45, 7, 1, 11000, NULL, 11000),
(7, 46, 6, 2, 12000, NULL, NULL),
(8, 47, 4, 2, 14000, NULL, 14000),
(9, 48, 5, 2, 18000, NULL, 18000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(11) NOT NULL,
  `nama_member` varchar(100) DEFAULT NULL,
  `alamat_member` text,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `telp_member` varchar(15) DEFAULT NULL,
  `no_ktp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `alamat_member`, `jenis_kelamin`, `telp_member`, `no_ktp`) VALUES
(5, 'Susi', 'Cirebon', 'P', '00000000001', '00000000001'),
(6, 'Mely', 'Cirebon', 'P', '00000000002', '00000000002'),
(7, 'Neni', 'Cirebon', 'P', '00000000003', '00000000003'),
(8, 'ako', 'cirebon', 'L', '08998', '0899332'),
(9, 'jono', 'cirebon', 'L', '08998444333', '320939399320023'),
(10, 'Cantika', 'Kuningan', 'P', '087772322', '02332399923');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlet`
--

CREATE TABLE IF NOT EXISTS `outlet` (
`id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(100) DEFAULT NULL,
  `alamat_outlet` text,
  `telp_outlet` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama_outlet`, `alamat_outlet`, `telp_outlet`) VALUES
(26, 'Outlet Cantik', 'Cirebon', '00000000002'),
(29, 'Outlet Bersih', 'Kuningan', '098777447773');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
`id_paket` int(11) NOT NULL,
  `jenis_paket` enum('kiloan','selimut','bedcover','kaos','lain') DEFAULT NULL,
  `nama_paket` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `outlet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `jenis_paket`, `nama_paket`, `harga`, `outlet_id`) VALUES
(4, 'kiloan', 'Paket Cuci Kering', 7000, 26),
(5, 'kiloan', 'Paket Cuci Setrika', 9000, 26),
(6, 'kiloan', 'Paket Setrika', 6000, 26),
(7, 'bedcover', 'Paket Bedcover', 11000, 26),
(8, 'kiloan', 'Paket One Day Service (ODS)', 14000, 26),
(9, 'kiloan', 'Paket Express Service (6 hours)', 21000, 26),
(10, 'kiloan', 'BErsih 1 hari', 12000, 26),
(11, 'kiloan', 'Bersih 2hari', 10000, 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `outlet_id` int(11) DEFAULT NULL,
  `kode_invoice` varchar(100) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `batas_waktu` datetime DEFAULT NULL,
  `tgl_pembayaran` datetime DEFAULT NULL,
  `biaya_tambahan` int(11) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `pajak` int(11) DEFAULT NULL,
  `status` enum('baru','proses','selesai','diambil') DEFAULT NULL,
  `status_bayar` enum('dibayar','belum') DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `outlet_id`, `kode_invoice`, `member_id`, `tgl`, `batas_waktu`, `tgl_pembayaran`, `biaya_tambahan`, `diskon`, `pajak`, `status`, `status_bayar`, `user_id`) VALUES
(38, 26, 'DRY202010191504', 5, '2021-09-14 02:04:24', '2021-09-16 12:00:00', '2021-09-17 02:04:48', 0, 0, 0, 'diambil', 'dibayar', 16),
(39, 26, 'DRY202010191226', 7, '2021-09-02 02:26:20', '2021-09-04 12:00:00', NULL, 0, 0, 0, 'baru', 'belum', 16),
(40, 26, 'DRY202010194326', 6, '2021-09-07 02:26:53', '2021-09-09 12:00:00', NULL, 0, 0, 0, 'baru', 'belum', 16),
(41, 26, 'DRY202010190239', 7, '2021-09-04 02:39:11', '2021-09-05 12:00:00', '2021-09-06 02:39:28', 0, 0, 0, 'diambil', 'dibayar', 16),
(44, 26, 'DRY202108084604', 6, '2021-08-08 06:05:11', '2021-08-15 12:00:00', NULL, 22220, 0, 0, 'baru', 'belum', 16),
(45, 26, 'DRY202108084105', 8, '2021-08-08 06:06:04', '2021-08-15 12:00:00', '2021-08-08 06:06:32', 12000, 0, 0, 'baru', 'dibayar', 16),
(46, 26, 'DRY202110124530', 9, '2021-10-12 05:31:19', '2021-10-19 12:00:00', NULL, 25000, 10, 0, 'proses', 'belum', 16),
(47, 26, 'DRY202110125133', 9, '2021-10-12 05:34:09', '2021-10-19 12:00:00', '2021-10-18 03:49:34', 25000, 0, 0, 'selesai', 'dibayar', 16),
(48, 26, 'DRY202110185318', 10, '2021-10-18 05:19:15', '2021-10-25 12:00:00', '2021-10-18 05:19:51', 0, 0, 0, 'selesai', 'dibayar', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `outlet_id` int(11) DEFAULT NULL,
  `role` enum('admin','kasir','owner') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `outlet_id`, `role`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin'),
(16, 'Kasir Cantik', 'kasircantik', '21232f297a57a5a743894a0e4a801fc3', 26, 'kasir'),
(18, 'Owner Cantik', 'ownercantik', '21232f297a57a5a743894a0e4a801fc3', NULL, 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
 ADD PRIMARY KEY (`id_detail`), ADD KEY `transaksi_id` (`transaksi_id`), ADD KEY `paket_id` (`paket_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
 ADD PRIMARY KEY (`id_outlet`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`id_paket`), ADD KEY `outlet_id` (`outlet_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `outlet_id` (`outlet_id`), ADD KEY `member_id` (`member_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `outlet_id` (`outlet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id_transaksi`),
ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`outlet_id`) REFERENCES `outlet` (`id_outlet`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`outlet_id`) REFERENCES `outlet` (`id_outlet`),
ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`id_member`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`outlet_id`) REFERENCES `outlet` (`id_outlet`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
