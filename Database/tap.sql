-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2018 pada 14.54
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

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
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `bank_name` varchar(250) NOT NULL,
  `bank_status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id_bank`, `bank_name`, `bank_status`) VALUES
(1, 'Bank Mandiri', 'Y'),
(2, 'Bank Negara Indonesia (BNI)', 'Y'),
(3, 'Bank Rakyat Indonesia (BRI)', 'Y'),
(4, 'Bank Central Asia (BCA)', 'Y'),
(5, 'Bank CIMB Niaga', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataorgtua`
--

CREATE TABLE `dataorgtua` (
  `id_dataorgtua` int(15) NOT NULL,
  `id_siswa` varchar(50) NOT NULL,
  `nama_orgtua` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataorgtua`
--

INSERT INTO `dataorgtua` (`id_dataorgtua`, `id_siswa`, `nama_orgtua`, `alamat`, `telepon`, `username`, `password`) VALUES
(1, '1', 'wijaya', 'a', '123', 'a', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rks`
--

CREATE TABLE `rks` (
  `id_rks` int(20) NOT NULL,
  `nama_rks` text NOT NULL,
  `tempat` text NOT NULL,
  `biaya` text NOT NULL,
  `id_sekolah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rks`
--

INSERT INTO `rks` (`id_rks`, `nama_rks`, `tempat`, `biaya`, `id_sekolah`) VALUES
(1, 'makan bareng', 'sekolah', '20000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rks_status`
--

CREATE TABLE `rks_status` (
  `id_status_rks` int(20) NOT NULL,
  `id_rks` int(20) NOT NULL,
  `id_siswa` int(20) NOT NULL,
  `status_rks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rks_status`
--

INSERT INTO `rks_status` (`id_status_rks`, `id_rks`, `id_siswa`, `status_rks`) VALUES
(1, 1, 1, 'sudah bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(20) NOT NULL,
  `saldo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `saldo`) VALUES
(1, '300000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(20) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `situs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `kodepos`, `nama_kepsek`, `situs`) VALUES
(1, 'abc sekolah', 'asdsa', '12321', 'aku', 'aku.web.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datakelas`
--

CREATE TABLE `tb_datakelas` (
  `id_datakelas` int(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `jml_siswa` varchar(20) NOT NULL,
  `id_sekolah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_datakelas`
--

INSERT INTO `tb_datakelas` (`id_datakelas`, `kelas`, `jurusan`, `jml_siswa`, `id_sekolah`) VALUES
(1, 'X-2', 'NA', '11', 1),
(3, 'XI-2', 'IPS 1', '44', 1),
(10, 'X-1', 'NA', '11', 1);

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
  `id_siswa` int(20) NOT NULL,
  `kredit` int(100) NOT NULL,
  `id_saldo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datasetoran`
--

CREATE TABLE `tb_datasetoran` (
  `id_datasetoran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_transaksi` varchar(20) NOT NULL,
  `id_siswa` int(20) NOT NULL,
  `debit` int(100) NOT NULL,
  `id_saldo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datasiswa`
--

CREATE TABLE `tb_datasiswa` (
  `id_siswa` int(20) NOT NULL,
  `nama_siswa` text NOT NULL,
  `no_induk` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `id_bank` int(20) NOT NULL,
  `no_rek` int(12) NOT NULL,
  `id_datakelas` int(15) NOT NULL,
  `id_saldo` int(20) NOT NULL,
  `id_sekolah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_datasiswa`
--

INSERT INTO `tb_datasiswa` (`id_siswa`, `nama_siswa`, `no_induk`, `nisn`, `ttl`, `id_bank`, `no_rek`, `id_datakelas`, `id_saldo`, `id_sekolah`) VALUES
(1, 'willy', '123123', '12312', '13011998', 1, 1312312312, 2, 1, 1);

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
  `id_usersekolah` int(20) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_sekolah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usersekolah`
--

INSERT INTO `usersekolah` (`id_usersekolah`, `nama_admin`, `telepon`, `email`, `password`, `id_sekolah`) VALUES
(1, 'a', '123', 'a', '0cc175b9c0f1b6a831c399e269772661', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `rks`
--
ALTER TABLE `rks`
  ADD PRIMARY KEY (`id_rks`);

--
-- Indeks untuk tabel `rks_status`
--
ALTER TABLE `rks_status`
  ADD PRIMARY KEY (`id_status_rks`);

--
-- Indeks untuk tabel `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `tb_datakelas`
--
ALTER TABLE `tb_datakelas`
  ADD PRIMARY KEY (`id_datakelas`);

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
  ADD PRIMARY KEY (`id_siswa`);

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
  ADD PRIMARY KEY (`id_usersekolah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `rks`
--
ALTER TABLE `rks`
  MODIFY `id_rks` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rks_status`
--
ALTER TABLE `rks_status`
  MODIFY `id_status_rks` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_datakelas`
--
ALTER TABLE `tb_datakelas`
  MODIFY `id_datakelas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_datapegawai`
--
ALTER TABLE `tb_datapegawai`
  MODIFY `id_datapegawai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_siswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_usersekolah` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `userorgtua`
--
ALTER TABLE `userorgtua`
  ADD CONSTRAINT `userorgtua_ibfk_1` FOREIGN KEY (`id_dataorgtua`) REFERENCES `tb_dataorgtua` (`id_dataorgtua`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
