-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2018 pada 15.03
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
(1, 'X-2', 'NA', '11'),
(3, 'XI-2', 'IPS 1', '44'),
(10, 'X-1', 'NA', '11');

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
(1, 'tiara', 'budi', 'GGa', '082226801285', 'tiara123', '12345'),
(18, 'murni111', 'budi2', 'jakal', '3123123123', 'tiara2', '12345'),
(19, 'ridho', 'aryo', 'jakat', '08221232931', 'ridho1234', '12345'),
(20, 'wawan', 'tata', 'sleman', '099999999', '1111', '1111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datapegawai`
--

CREATE TABLE `tb_datapegawai` (
  `id_datapegawai` int(15) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_datapegawai`
--

INSERT INTO `tb_datapegawai` (`id_datapegawai`, `nama_pegawai`, `tgl_lahir`, `alamat`, `no_hp`) VALUES
(1, 'nurma', '1990-06-04', 'condong catur', '08900001111'),
(3, 'lilis', '1990-12-09', 'purworejo', '081234567891'),
(4, 'anwar', '1991-11-11', 'ngaglik', '089911113211');

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

--
-- Dumping data untuk tabel `tb_datapenarikan`
--

INSERT INTO `tb_datapenarikan` (`id_datapenarikan`, `tanggal`, `no_transaksi`, `nama_siswa`, `debit`, `kredit`, `saldo`) VALUES
(1, '2018-12-02', '1', 'tiara', 10000, 2000, 8000),
(2, '2018-12-02', '2', 'murni', 50000, 20000, 0);

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

--
-- Dumping data untuk tabel `tb_datasetoran`
--

INSERT INTO `tb_datasetoran` (`id_datasetoran`, `tanggal`, `no_transaksi`, `nama_siswa`, `debit`, `kredit`, `saldo`) VALUES
(1, '2018-12-01', '1', 'tiara', 10000, 2000, 8000),
(2, '2018-12-01', '2', 'murni', 50000, 20000, 30000),
(3, '2018-11-04', '3', 'murni', 50000, 0, 50000),
(4, '2018-12-04', '4', 'wawan', 10000, 0, 10000),
(5, '2018-12-03', '5', 'murni', 50000, 20000, 0),
(6, '2018-12-04', '5', 'murni', 50000, 5000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datasiswa`
--

CREATE TABLE `tb_datasiswa` (
  `id_siswa` int(5) NOT NULL,
  `no_rek` int(12) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `id_datakelas` int(15) NOT NULL,
  `id_dataorgtua` int(15) NOT NULL,
  `saldo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_datasiswa`
--

INSERT INTO `tb_datasiswa` (`id_siswa`, `no_rek`, `nama_siswa`, `id_datakelas`, `id_dataorgtua`, `saldo`) VALUES
(1, 199864, 'tiara', 1, 1, 10000),
(7, 199864, 'tiara', 3, 18, 10000);

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
  `no_rekening` varchar(50) NOT NULL,
  `no_induk` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `id_dataorgtua` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `userorgtua`
--

INSERT INTO `userorgtua` (`id_userorgtua`, `no_rekening`, `no_induk`, `nisn`, `ttl`, `id_dataorgtua`) VALUES
(1, '1990754', '9999', '9999', 'tangerang,1mei 1998', 1);

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
(6, 'tiara', '0822279231', 'tiara223@gmail.com', '12345', 'SMAN 4 KOTA YOGYAKARTA', '      suroto', '551123', 'tiara S.Pd', 'www.sman3yk.ac.id');

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
-- Indeks untuk tabel `tb_datapegawai`
--
ALTER TABLE `tb_datapegawai`
  ADD PRIMARY KEY (`id_datapegawai`);

--
-- Indeks untuk tabel `tb_datapenarikan`
--
ALTER TABLE `tb_datapenarikan`
  ADD PRIMARY KEY (`id_datapenarikan`);

--
-- Indeks untuk tabel `tb_datasetoran`
--
ALTER TABLE `tb_datasetoran`
  ADD PRIMARY KEY (`id_datasetoran`);

--
-- Indeks untuk tabel `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `id_dataorgtua` (`id_dataorgtua`),
  ADD UNIQUE KEY `id_datakelas` (`id_datakelas`);

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
  ADD UNIQUE KEY `id_dataorgtua` (`id_dataorgtua`);

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
  MODIFY `id_dataorgtua` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_datapegawai`
--
ALTER TABLE `tb_datapegawai`
  MODIFY `id_datapegawai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_datapenarikan`
--
ALTER TABLE `tb_datapenarikan`
  MODIFY `id_datapenarikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_datasetoran`
--
ALTER TABLE `tb_datasetoran`
  MODIFY `id_datasetoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  MODIFY `id_siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Ketidakleluasaan untuk tabel `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  ADD CONSTRAINT `tb_datasiswa_ibfk_1` FOREIGN KEY (`id_datakelas`) REFERENCES `tb_datakelas` (`id_datakelas`),
  ADD CONSTRAINT `tb_datasiswa_ibfk_2` FOREIGN KEY (`id_dataorgtua`) REFERENCES `tb_dataorgtua` (`id_dataorgtua`);

--
-- Ketidakleluasaan untuk tabel `userorgtua`
--
ALTER TABLE `userorgtua`
  ADD CONSTRAINT `userorgtua_ibfk_1` FOREIGN KEY (`id_dataorgtua`) REFERENCES `tb_dataorgtua` (`id_dataorgtua`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
