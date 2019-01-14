-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2018 pada 04.57
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_psi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, '-', 'admin', 'admin123'),
(2, 'Aditya Mahavira', 'adot', 'adot123'),
(3, 'Moch Dian Nafi', 'dian', 'dian123'),
(4, 'Muhammad Yasin Deru', 'yasin', 'yasin123'),
(5, 'Aditya Putra Irawan', 'adit', 'adit123'),
(6, 'Nugi Nugraha', 'nugi', 'nugi123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `desa`, `nilai`) VALUES
(1, 'Umbulharjo', 3500),
(2, 'Hargobinangun', 3800),
(3, 'Kepuharjo', 7700),
(4, 'Glagaharjo', 9000),
(5, 'Purwobinangun', 9200),
(6, 'Girikerto', 9400),
(7, 'Wonokerto', 11100),
(8, 'Gilimanuk', 4600);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jemput`
--

CREATE TABLE `jemput` (
  `nik_pelapor` varchar(16) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `telepon_pelapor` varchar(15) DEFAULT NULL,
  `nik_korban` varchar(16) NOT NULL,
  `nama_korban` varchar(100) DEFAULT NULL,
  `telepon_korban` varchar(15) DEFAULT NULL,
  `j_lansia` int(8) NOT NULL,
  `j_anak` int(8) NOT NULL,
  `j_dewasa` int(8) NOT NULL,
  `j_ternak` int(8) NOT NULL,
  `j_peliharaan` int(8) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `alamat_detail` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `preferensi1` decimal(6,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jemput`
--

INSERT INTO `jemput` (`nik_pelapor`, `nama_pelapor`, `telepon_pelapor`, `nik_korban`, `nama_korban`, `telepon_korban`, `j_lansia`, `j_anak`, `j_dewasa`, `j_ternak`, `j_peliharaan`, `id_desa`, `alamat_detail`, `id_admin`, `id_status`, `preferensi1`) VALUES
('1603022207980001', 'Rudi Khoir', '085194673432', '1603022207980004', 'Danang Darto', '085123456789', 1, 3, 2, 4, 1, 5, 'Disaana sini saya dimana-mana kok mas', 4, 3, '0.4888'),
('1603022207980002', 'Aditya Putra Irawan', '082177329234', '1603022207980004', 'Fitrah Rozak', '082177328413', 2, 3, 1, 4, 2, 1, 'Gang Mekar, samping indomaret', 1, 1, '0.9525'),
('1603022207980003', 'Dian Nafi', '082177329234', '2900089717005151', 'Cahyo Nugroho', '082177321138', 1, 3, 2, 4, 2, 1, 'Gng Melati, samping alfamart', 3, 2, '0.9425'),
('1603022207980064', 'Aditya Mahavira', '082177321683', '1603022207457457', 'Nabila Claudya', '082177328413', 1, 4, 2, 2, 1, 7, 'Saya ada di rumah mas', 1, 1, '0.4357');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Menunggu'),
(2, 'Penjemputan'),
(3, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `total_transaksi` varchar(50) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_code` varchar(50) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `jemput`
--
ALTER TABLE `jemput`
  ADD PRIMARY KEY (`nik_pelapor`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `order_status` (`order_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jemput`
--
ALTER TABLE `jemput`
  ADD CONSTRAINT `jemput_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jemput_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jemput_ibfk_3` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
