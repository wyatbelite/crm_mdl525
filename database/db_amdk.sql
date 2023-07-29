-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2023 pada 17.41
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_amdk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'Kepala Bidang Pemasaran', 'oppemasaran', 'oppemasaran@gmail.com', '$2y$10$dWlZGz7dRVAISidFmCanNuo20R2mK6anWNla88BcHybYlpGMc8oAu', '1'),
(2, 'Kepala Bidang Penjualan dan Umum', 'oppenjualan', 'oppenjualan@gmail.com', '$2y$10$EkUKRHbIEazXpxWiJ0pUrOUcNPgjny61lU.2AUzTNC5uEIvntLglG', '2'),
(3, 'Operator Pemasaran 2', 'oppemasaran2', 'oppemasaran2@gmail.com', '$2y$10$tuxOq2cB86bpg8aBe/iSR.TQgccfu943g0a0x7U7FjK7l48IrquB2', '1'),
(11, 'ferry', 'ferry', 'ferry@gmail.com', '$2y$10$v7upUXPAi5y9VFFZruQUZ.4JwZRe6kmdj9I3IPmbpzHzLI25h2gNW', '3'),
(12, 'indrawan', 'indrawan', 'indrawan@gmail.com', '$2y$10$Mlio7E127/B5ZpW4Bs9iEurobqJZpWzR88CODlc5uPUQp3Wy/w9/u', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kritiksaran`
--

CREATE TABLE `tb_kritiksaran` (
  `id_kritiksaran` int(10) NOT NULL,
  `id_pelanggan` int(10) DEFAULT NULL,
  `kritik` varchar(200) NOT NULL,
  `saran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(15) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`) VALUES
(1, '﻿RSHS', 'JL. PASTEUR NO. 38\r'),
(2, 'RSKIA', 'JL. ASTANA ANYAR NO. 224\r'),
(3, 'RS PINDAD', 'JL. GATOT SUBROTO NO 517\r'),
(4, 'RS HERMINA PASTEUR', 'JL. DJUNJUNAN 107\r'),
(5, 'RS BORROMEUS', 'JL. IR. H. JUANDA NO 100\r'),
(6, 'APARTMENT GATEWAY CICADAS', 'JL. A. YANI\r'),
(7, 'BENGPUSPAL PUSPALAD', 'JL. GATOT SUBROTO NO. 372\r'),
(8, 'BNN', 'JL. CIANJUR NO. 4\r'),
(9, 'BPOM', 'JL. PASTEUR NO. 45\r'),
(10, 'DINAS KETAHANAN PANGAN DAN PERTANIAN', 'JL. ARJUNA NO. 45\r'),
(11, 'DINAS PENANAMAN MODAL', 'JL. CIANJUR NO. 34\r'),
(12, 'DINAS KETENAGAKERJAAN', 'JL. RE MARTADINATA NO. 8\r'),
(13, 'DINAS TATA RUANG', 'JL. CIANJUR NO. 34\r'),
(14, 'DINAS PEMUDA DAN OLAHRAGA', 'JL. TAMAN SARI NO. 76\r'),
(15, 'DEWAN KERAJINAN NASIONAL DAERAH PROV. JABAR', 'JL. IR H JUANDA NO 19\r'),
(16, 'KECAMATAN CIDADAP', 'JL. HERGAMANAH TENGAH NO. 1\r'),
(17, 'KECAMATAN SUKASARI', 'JL. SUKA MULYA NO 4 BANDUNG\r'),
(18, 'KECAMATAN ASTANA ANYAR', 'JL. BOJONGLOA NO. 69\r'),
(19, 'KECAMATAN BANDUNG WETAN', 'JL. TAMAN SARI NO. 49\r'),
(20, 'KECAMATAN CICENDO', 'JL. PURABAYA NO. 1\r'),
(21, 'KECAMATAN COBLONG', 'JL. SANGKURIANG NO. 10 A\r'),
(22, 'KLINIK MARLINA', 'JL. MANIRANCAN NO. 226\r'),
(23, 'PUSKESMAS SUKARAJA', 'JL. MEGARAYA NO. 51\r'),
(24, 'PUSKESMAS PADASUKA', 'JL. PADASUKA NO. 3\r'),
(25, 'PUSKESMAS PASIRLAYUNG', 'JL. PADSUKA NO.146\r'),
(26, 'PUSKESMAS PUTER', 'JL. PUTER NO. 3\r'),
(27, 'PUSKESMAS AHMAD YANI', 'JL. LAPANGAN KEBON WARU NO. 8\r'),
(28, 'BANK BJB', 'JL. TAMAN SARI NO. 18\r'),
(29, 'BANK BTN', 'JL. JAWA NO. 7\r'),
(30, 'BANK BPR KOTA BANDUNG', 'JL. NARIPAN NO. 29\r'),
(31, 'SD ASY-SYIFA 2 BANDUNG', 'JL. RANDUSARI V NO. 28-29\r'),
(32, 'SDN 054', 'JL. RANCANUMPANG\r'),
(33, 'SDN NEGLASARI', 'JL. SADANG SERANG\r'),
(34, 'SDN CISITU', 'JL. SANGKURIANG NO. 87\r'),
(35, 'SDN CIRATEUN', 'JL. SERSAN SODIK\r'),
(36, 'SMPN 15', 'JL. SETIABUDI NO. 89\r'),
(37, 'SMPN 34', 'JL. WAAS BATU NUNGGAL NO. 19\r'),
(38, 'SMPN 39', 'JL. HOLIS NO 439\r'),
(39, 'SMPN 41', 'JL. ARJUNA NO. 18\r'),
(40, 'SMPN 43', 'JL. KAUTAMAAN ISTRI NO. 43\r'),
(41, 'SMPN 55', 'JL. CIGONDEWAH KALER NO. 55\r'),
(42, 'SMPN 57', 'JL. GEMPOL SARI NO.142\r'),
(43, 'SMAN 10', 'JL. PAHLAWAN\r'),
(44, 'SMP DEWI SARTIKA', 'JL. KAUTAMAAN ISTRI NO. 12\r'),
(45, 'SMP SALMAN ALFARIZI', 'JL. TUBAGUS ISMAIL ATAS NO. 8\r'),
(46, 'SMP DARUL HIKAM', 'JL. IR H JUANDA NO 285A\r'),
(47, 'SMP YAS', 'JL. PH MUSTOFA 115\r'),
(48, 'SMK NASIONAL', 'JL. SADANG SERANG NO 117\r'),
(49, 'SMA PASUNDAN', 'JL. CIHAMPELAS NO. 167\r'),
(50, 'SMA NEGERI 2', 'JL. CIHAMPELAS NO. 173\r'),
(51, 'KANTOR DENZIBANG', 'JL. SEKEJATI NO.25\r'),
(52, 'HOTEL UTARI', 'JL. IR H JUANDA NO, 50\r'),
(53, 'HOTEL NATUNA GUEST', 'JL. NATUNA\r'),
(54, 'PT. QUANTA GLOBAL', 'JL. SUKA SENANG RAYA NO. 22\r'),
(55, 'PT. IBARA', 'JL. RANCAEKEK\r'),
(56, 'PT. SINERGI', 'JL. SETIABUDHI REGENCY\r'),
(57, 'PT. ELCO', 'JL. PADASUKA\r'),
(58, 'PT. IREVINO', 'JL. GATOT SUBROTO\r'),
(59, 'PT SOLVINDO', 'JL. PETA\r'),
(60, 'PT PANORAMA', 'JL. CIKUTRA\r'),
(61, 'CAFÉ MARWAH', 'JL. LEMBANG\r'),
(62, 'HOTEL UTARI', 'JALAN IR. H. DJUANDA NO 50\r'),
(63, 'DINI-RSHS', 'JL. PASTEUR\r'),
(64, 'IRMA-RSHS', 'JL. PASTEUR\r'),
(65, 'LELI-RSHS', 'JL PASTEUR\r'),
(66, 'KANTOR DENSIBANG', 'JL. KIARACONDONG\r'),
(67, 'NATUNA GUEST HOUSE', 'JL. NATUNA\r'),
(68, 'KEC COBLONG', 'JL. CISITU\r'),
(69, 'KOPERASI DENZIBANG', 'JL. KIARACONDONG\r'),
(70, 'PAK EMAN KEJATI', 'JL. TAMANSARI\r'),
(71, 'LUSI', 'JL. CISITU\r'),
(72, 'KECAMATAN ASTANA ANYAR', 'JL. ASTANA ANYAR\r'),
(73, 'PUSKESMAS PADASUKA', 'JL. AHMAD NASUTION\r'),
(74, 'PUSKESMAS MERDEKA', 'JL. PATRAKOMALA\r'),
(75, 'BAGUM', 'JL. PEMKOT\r'),
(76, 'TK TIARA JAYA', 'JL. PASIR HONJE\r'),
(77, 'TK 3 PUTRI', 'JL. CIHANJUANG\r'),
(78, 'TK RUBY', 'JL. CIHANJUANG\r'),
(79, 'TK YENI', 'JL. BIMA\r'),
(80, 'TK UNI', 'JL. BALA DEWA\r'),
(81, 'TK YETI', 'JL. SUKAHAJI\r'),
(82, 'TOKO PARIGI', 'JL. DAGO\r'),
(83, 'TOKO DEAN-ALFITROH', 'JL. DAGO\r'),
(84, 'TOKO AEN', 'JL. DAGO\r'),
(85, 'TOKO EMBONG', 'JL. DAGO\r'),
(86, 'TOKO NITA', 'JL. TUBAGUS ISMAIL DALAM\r'),
(87, 'TOKO MALA', 'JL. DAGO\r'),
(88, 'TOKO RANGSI', 'JL. DAGO\r'),
(89, 'ASEP GOR', 'JL. CIGUGUR\r'),
(90, 'NANO CATERING', 'JL. PANYAIRAN\r'),
(91, 'NANI CATERING', 'JL. SUKALAKSANA\r'),
(92, 'AGUS', 'JL. CIPEDES\r'),
(93, 'BU DARMI', 'JL, HEGARMANAH\r'),
(94, 'KIOS MERI - ERINKA', 'JL. PASTEUR\r'),
(95, 'SD CISITU', 'JL. DAGO\r'),
(96, 'SMK NASIONAL', 'JL TUBAGUS ISMAIL\r'),
(97, 'TOKO YANTO', 'JL. PASAR SARIJADI\r'),
(98, 'TOKO ASEP', 'JL. CIDADAP\r'),
(99, 'TOKO AA/ADE', 'JL. LEDENG\r'),
(100, 'AYAM GEPREK', 'JL. LEMBANG\r'),
(101, 'SD CIRATEUN', 'JL. CIRATEUN\r'),
(102, 'PA ATO', 'JL. CIUMBULEUIT\r'),
(103, 'SANDRI', 'JL. BABAKAN\r'),
(104, 'TOKO WANGUNSARI', 'JL. CIJENGKOL\r'),
(105, 'NENDEN', 'JL. CIJERAH\r'),
(106, 'JASA BABY', 'JL. SIMBAR\r'),
(107, 'KOPI KEDUA', 'JL. SARIJADI\r'),
(108, 'BENGKEL CAHEM', 'JL. CAHEM\r'),
(109, 'PA UUS', 'JL. JAMARAS 3\r'),
(110, 'IBU ULLY', 'JAL. BOJONGKONENG\r'),
(111, 'WARUNG AYU', 'JL. TUBAGUS ISMAIL DALAM\r'),
(112, 'WARUNG NETI', 'JL.TUBAGUS ISMAIL DALAM\r'),
(113, 'PAK ARYA', 'JL. CIBENYING/CIGADUNG\r'),
(114, 'FAHMI', 'JL. TUBAGUS ISMAIL RAYA\r'),
(115, 'BASO WONG DEWE', 'JL. TUBAGUS ISMAIL DALAM\r'),
(116, 'TEH ENONG', 'JL. TUBAGUS ISMAIL DALAM\r'),
(117, 'ANGGA', 'JL. TUBAGUS ISMAIL DALAM\r'),
(118, 'REZI', 'JL. TUBAGUS ISMAIL DALAM\r'),
(119, 'BIT', 'JL. DAGO BENGKOK\r'),
(120, 'NI OOH', 'JL TUBAGUS ISMAIL\r'),
(121, 'BU NONENG', 'JL TUBAGUS ISMAIL\r'),
(122, 'DEWI', 'JL. ANTAPANI 107/29\r'),
(123, 'BU SITI', 'JL. SASTRA\r'),
(124, 'HAMKA', 'JL. CICAHEUM\r'),
(125, 'ERVIN KADIN', 'JL. TERUSAN ANTAPANI LAMA\r'),
(126, 'MAMIH', 'JL. CIJENGKOL\r'),
(127, 'PA ARIS', 'JL.SADANG SERANG\r'),
(128, 'PA AGUS', 'JL. HERGAMANAH TENGAH NO 1\r'),
(129, 'RUSTIJA', 'JL. UJUNG BERUNG\r'),
(130, 'PANTIASUHAN ALHAYAT-ETI', 'JL. UJUNG BERUNG\r'),
(131, 'ETI PASEBAHAN', 'JL. KANGKUNG\'\r'),
(132, 'INABA- IBU DIANA', 'JL. SOEKARNO HATTA\r'),
(133, 'NESSA-TMK', 'JL. KANGKUNG\r'),
(134, 'HYPERNET', 'KOMP. SETRASARI\r'),
(135, 'CHANDRA', 'JL. RIUNG BANDUNG\r'),
(136, 'AGUS', 'JL. GEGERKALONG\r'),
(137, 'DIDIN KOP.ALUKHUWAH', 'JL. BUKIT RAHAYU NO 1A\r'),
(138, 'IREVINO', 'JL. GATOT SUBROTO\r'),
(139, 'TOKO PUTRAJAYA', 'JL. JAKARTA\r'),
(140, 'TOKO KEIZIRO', 'JL. GUNUNG BATU\r'),
(141, 'SEKOLAH SENYUM AMANDA', 'JL. GUNUNG BATU\r'),
(142, 'IBU TITA ADIT', 'JL. GUNUNG BATU\r'),
(143, 'IBU TETI', 'KOMP. D\'VILLAGE KAVLING 15\r'),
(144, 'ASEP SOPYAN', 'CICALENGKA\r'),
(145, 'GRIYA NUTRISI-MAMAN', 'KOMP SETRASARI\r'),
(146, 'MESJID BAITURAHIM', 'RIUNG BANDUNG\r'),
(147, 'MESJID MANUNGGAL', 'SADANG SERANG\r'),
(148, 'PAK ENTRIS', 'UJUNG BERUNG\r'),
(149, 'IBU AE', 'JL. SUKAJADI\r'),
(150, 'KLINIK MARLINA', 'JL. MAJALAYA\r'),
(151, 'UPT KILINIK HEWAN', 'JL. PELINDUNG HEWAN\r'),
(152, 'SUDIWIYANA', 'KOMP. VIJAYA KUSUMAH\r'),
(153, 'DENI', 'KOMP. CEMPAKA ARUM\r');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(15) NOT NULL,
  `penjualan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `penjualan`) VALUES
(1, '﻿412163500\r'),
(2, '436407000\r'),
(3, '414113500\r'),
(4, '468905500\r'),
(5, '871604100\r'),
(6, '765510575\r'),
(7, '774170075\r'),
(8, '752243450\r');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(15) NOT NULL,
  `nama_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_promosi`
--

CREATE TABLE `tb_promosi` (
  `id_promosi` int(15) NOT NULL,
  `id_penjualan` int(15) DEFAULT NULL,
  `periklanan` int(50) NOT NULL,
  `pemasaran_langsung` int(50) NOT NULL,
  `penjualan_personal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_promosi`
--

INSERT INTO `tb_promosi` (`id_promosi`, `id_penjualan`, `periklanan`, `pemasaran_langsung`, `penjualan_personal`) VALUES
(1, 1, 3000000, 4000000, 3000000),
(2, 2, 3000000, 5000000, 2000000),
(3, 3, 3000000, 4500000, 3000000),
(4, 4, 2000000, 6000000, 2000000),
(5, 5, 2500000, 6500000, 1000000),
(6, 6, 3000000, 5000000, 2000000),
(7, 7, 2000000, 6000000, 2000000),
(8, 8, 2500000, 5500000, 2000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  ADD PRIMARY KEY (`id_kritiksaran`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_promosi`
--
ALTER TABLE `tb_promosi`
  ADD PRIMARY KEY (`id_promosi`),
  ADD KEY `tb_promosi_ibfk_1` (`id_penjualan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  MODIFY `id_kritiksaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_promosi`
--
ALTER TABLE `tb_promosi`
  MODIFY `id_promosi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  ADD CONSTRAINT `tb_kritiksaran_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_promosi`
--
ALTER TABLE `tb_promosi`
  ADD CONSTRAINT `tb_promosi_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `tb_penjualan` (`id_penjualan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
