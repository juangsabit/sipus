-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2018 pada 12.44
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
-- Database: `dbpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_buku`
--

INSERT INTO `kategori_buku` (`idkategori`, `kategori`) VALUES
(1, 'Ilmu Komputer'),
(2, 'Buku Arab'),
(3, 'Ilmu Pengetahuan'),
(4, 'Buku Cerita'),
(5, 'Ilmu Agama'),
(6, 'Umum'),
(7, 'Fiksi'),
(8, 'Non Fiksi'),
(11, 'Kitab Agama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbanggota`
--

CREATE TABLE `tbanggota` (
  `idanggota` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbanggota`
--

INSERT INTO `tbanggota` (`idanggota`, `nama`, `kelas`, `jeniskelamin`, `alamat`, `foto`, `status`) VALUES
(180001, 'Juang Sabit', '9C', 'Pria', 'Jl. Wuluh', 'juang.jpg', 'Sedang Meminjam'),
(180002, 'Marko Simic', '9B', 'Pria', 'Jl. Rajawali', '07122018040103ARFIAN PRASETYA AJI.jpg', 'Tidak Meminjam'),
(180003, 'Dita Purnama Sari', '9D', 'Wanita', 'Jl. Merak', 'DZIH SYOFA KHILMAYA.jpg', 'Tidak Meminjam'),
(180004, 'Dinda Ayu Dewanti', '9A', 'Wanita', 'Jl. Sapen', '07122018040203DZIH SYOFA KHILMAYA2.jpg', 'Tidak Meminjam'),
(180005, 'Nurchulis', '8C', 'Pria', 'Jl. Bantul', '07122018040706SABIQ AHMAD KAMALUDDIN.jpg', 'Tidak Meminjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbuku`
--

CREATE TABLE `tbbuku` (
  `idbuku` varchar(30) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pengarang` varchar(40) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbuku`
--

INSERT INTO `tbbuku` (`idbuku`, `judulbuku`, `kategori`, `pengarang`, `penerbit`, `status`) VALUES
('ABK0020', 'Buku Cerita', 'Non Fiksi', 'Rama', 'Erlangga', 'Tersedia'),
('ABK0021', 'Belajar HTML Dasar', 'Ilmu Komputer', 'Fajri', 'Erlangga', 'Teredia'),
('ABK0023', 'Belajar PHP', 'Ilmu Komputer', 'Dinda Ayu', 'Erlangga', 'Dipinjam'),
('ABK0024', 'Cerita di Tanah Jogja', 'Fiksi', 'Juang', 'Yudhistira', 'Tersedia'),
('ABK0025', 'Mengaji', 'Ilmu Agama', 'Wahyu', 'Erlangga', 'Tersedia'),
('ABK0026', 'Cerita di Tanah Pesisir', 'Buku Cerita', 'Juang', 'Yudhistira', 'Tersedia'),
('ABK0027', 'Belajar PHP Dasar', 'Ilmu', 'Wahyu', 'Yudhistira', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `idtransaksi` int(5) NOT NULL,
  `idanggota` varchar(10) NOT NULL,
  `idbuku` varchar(10) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`idtransaksi`, `idanggota`, `idbuku`, `tglpinjam`, `tglkembali`) VALUES
(10, '16650002', 'ABK0020', '2018-12-05', '2018-12-05'),
(11, '180001', 'ABK0023', '2018-12-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `iduser` int(5) NOT NULL,
  `username` text,
  `password` varchar(35) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `username`, `password`, `alamat`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Jogja'),
(2, 'juang', '577585a92ea0f9b7e82e9f26cc09f087', 'Tegal'),
(3, 'Al Nadiev', '4cf9c8a4958998b35f7d7409c025cad6', 'Bantul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'mblasak', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indeks untuk tabel `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indeks untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbanggota`
--
ALTER TABLE `tbanggota`
  MODIFY `idanggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180006;

--
-- AUTO_INCREMENT untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  MODIFY `idtransaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
