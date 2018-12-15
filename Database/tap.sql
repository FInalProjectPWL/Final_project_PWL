-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2018 pada 10.57
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datakelas`
--

CREATE TABLE `tb_datakelas` (
  `id_datakelas` int(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `jml_siswa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_datakelas`
--

INSERT INTO `tb_datakelas` (`id_datakelas`, `kelas`, `jurusan`, `jml_siswa`) VALUES
(1, 'X-1', 'NA', '11'),
(3, '123', '123', '444'),
(10, 'X-2', 'IPA', '32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dataorgtua`
--

CREATE TABLE `tb_dataorgtua` (
  `id_dataorgtua` int(15) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nama_orgtua` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dataorgtua`
--

INSERT INTO `tb_dataorgtua` (`id_dataorgtua`, `nama_siswa`, `nama_orgtua`, `alamat`, `telepon`, `username`, `password`) VALUES
(17, 'murni12355345345', 'budi2312323', 'asd12312313', '123', 'asd', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datapenarikan`
--

CREATE TABLE `tb_datapenarikan` (
  `id_datapenarikan` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `no_transaksi` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `debit` int(100) NOT NULL,
  `kredit` int(100) NOT NULL,
  `saldo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datasetoran`
--

CREATE TABLE `tb_datasetoran` (
  `id_datasetoran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_transaksi` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `debit` int(100) NOT NULL,
  `kredit` int(100) NOT NULL,
  `saldo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datasiswa`
--

CREATE TABLE `tb_datasiswa` (
  `id_datasiswa` int(11) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `nama_ortua` varchar(50) NOT NULL,
  `saldo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporantrans`
--

CREATE TABLE `tb_laporantrans` (
  `id_laporantrans` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_transaksi` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `debit` int(100) NOT NULL,
  `kredit` int(100) NOT NULL,
  `saldo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `userorgtua`
--

CREATE TABLE `userorgtua` (
  `id_userorgtua` int(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nama_orgtua` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `no_induk` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usersekolah`
--

CREATE TABLE `usersekolah` (
  `id_sekolah` int(20) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `situs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usersekolah`
--

INSERT INTO `usersekolah` (`id_sekolah`, `nama_admin`, `telepon`, `email`, `password`, `nama_sekolah`, `alamat`, `kodepos`, `nama_kepsek`, `situs`) VALUES
(1, 'ridho aryo', '082226801285', 'ridho@gmail.com', '12345', 'SMAN3 YOGYAKARTA', 'JL, Suroto no 1', '12345', 'anwar spd', 'www.sman3yk.ac.id'),
(2, 'tiara', '0822279231', 'tiara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', ''),
(3, 'tiara', '0822279231', 'tiara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', ''),
(4, 'tiara', '0822279231', 'tiara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', ''),
(5, 'tiara', '0822279231', 'tiara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', ''),
(6, 'tiara', '0822279231', 'tiara223@gmail.com', '12345', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_datakelas`
--
ALTER TABLE `tb_datakelas`
  ADD PRIMARY KEY (`id_datakelas`);

--
-- Indeks untuk tabel `tb_dataorgtua`
--
ALTER TABLE `tb_dataorgtua`
  ADD PRIMARY KEY (`id_dataorgtua`);

--
-- Indeks untuk tabel `tb_datapenarikan`
--
ALTER TABLE `tb_datapenarikan`
  ADD PRIMARY KEY (`id_datapenarikan`);

--
-- Indeks untuk tabel `tb_datasetoran`
--
ALTER TABLE `tb_datasetoran`
  ADD PRIMARY KEY (`id_datasetoran`),
  ADD UNIQUE KEY `kredit` (`kredit`);

--
-- Indeks untuk tabel `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  ADD PRIMARY KEY (`id_datasiswa`),
  ADD UNIQUE KEY `saldo` (`saldo`),
  ADD UNIQUE KEY `nama_ortua` (`nama_ortua`);

--
-- Indeks untuk tabel `tb_laporantrans`
--
ALTER TABLE `tb_laporantrans`
  ADD PRIMARY KEY (`id_laporantrans`);

--
-- Indeks untuk tabel `userorgtua`
--
ALTER TABLE `userorgtua`
  ADD PRIMARY KEY (`id_userorgtua`),
  ADD UNIQUE KEY `nama_siswa` (`nama_siswa`,`nama_orgtua`,`username`,`email`,`password`,`alamat`,`telepon`);

--
-- Indeks untuk tabel `usersekolah`
--
ALTER TABLE `usersekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_datakelas`
--
ALTER TABLE `tb_datakelas`
  MODIFY `id_datakelas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_dataorgtua`
--
ALTER TABLE `tb_dataorgtua`
  MODIFY `id_dataorgtua` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_datapenarikan`
--
ALTER TABLE `tb_datapenarikan`
  MODIFY `id_datapenarikan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_datasetoran`
--
ALTER TABLE `tb_datasetoran`
  MODIFY `id_datasetoran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  MODIFY `id_datasiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_laporantrans`
--
ALTER TABLE `tb_laporantrans`
  MODIFY `id_laporantrans` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `userorgtua`
--
ALTER TABLE `userorgtua`
  MODIFY `id_userorgtua` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `usersekolah`
--
ALTER TABLE `usersekolah`
  MODIFY `id_sekolah` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `userorgtua`
--
ALTER TABLE `userorgtua`
  ADD CONSTRAINT `userorgtua_ibfk_1` FOREIGN KEY (`id_userorgtua`) REFERENCES `tb_dataorgtua` (`id_dataorgtua`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
