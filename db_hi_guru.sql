-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 Okt 2017 pada 00.57
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hi_guru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos_admin`
--

CREATE TABLE `pos_admin` (
  `id_admin` char(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `level_user` enum('SUPERADMIN','USER','','') NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pos_admin`
--

INSERT INTO `pos_admin` (`id_admin`, `nama_admin`, `password_admin`, `level_user`, `email`) VALUES
('A001', 'ASIFAH ULUL', '73acd9a5972130b75066c82595a1fae3', 'SUPERADMIN', 'asifah.ulul@gmal.com'),
('A002', 'Taufik H', '0192023a7bbd73250516f069df18b500', 'SUPERADMIN', 'taufikh@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos_guru`
--

CREATE TABLE `pos_guru` (
  `id_guru` char(10) NOT NULL,
  `id_admin` char(10) NOT NULL,
  `nik_guru` char(16) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `alamat_guru` varchar(50) NOT NULL,
  `pendidikan_guru` enum('D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `jurusan_guru` varchar(20) NOT NULL,
  `asal_pt` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `sta_rekom` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pos_guru`
--

INSERT INTO `pos_guru` (`id_guru`, `id_admin`, `nik_guru`, `nama_guru`, `alamat_guru`, `pendidikan_guru`, `jurusan_guru`, `asal_pt`, `keterangan`, `sta_rekom`) VALUES
('G001', 'A001', '1788929736636', 'DITA WIDYASTUTI', 'SRAGI', 'D3', 'TEKNIK INFORMATIKA', 'AKN KAJEN', 'ARAB', ''),
('G002', 'A001', '1234456576878', 'M TAUFIQ', 'PEKALONGAN', 'S1', 'TEKNIK INFORMATIKA', 'AKN KAJEN', 'SPESIALIS MATEMATIKA', ''),
('G003', 'A001', '124356578798', 'PRABOWO RUDI', 'KESESI', 'D4', 'TEKNIK INFORMATIKA', 'AKN KAJEN', 'SPESIALIS IPA FISIKA DAN BIOLOGI', ''),
('G004', 'A001', '126135737639', 'ASIFAH ULUL', 'KAJEN', 'S1', 'TEKNIK INFORMATIKA', 'AKN KAJEN', 'SPESIALIS BAHASA INDONESIA', ''),
('G005', 'A001', '5412425623532', 'RAHMAWATI', 'SRAGI', 'D4', 'INFORMATIKA', 'ugm', 'MATEMATIKA', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos_gurumapel`
--

CREATE TABLE `pos_gurumapel` (
  `id_gm` char(10) NOT NULL,
  `id_guru` char(10) NOT NULL,
  `id_mapel` char(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tarif/jam` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pos_gurumapel`
--

INSERT INTO `pos_gurumapel` (`id_gm`, `id_guru`, `id_mapel`, `foto`, `tarif/jam`) VALUES
('GM001', 'G001', 'M001', '', 35000),
('GM005', 'G001', 'M001', '', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos_mapel`
--

CREATE TABLE `pos_mapel` (
  `id_mapel` char(10) NOT NULL,
  `id_gm` char(10) NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `tingkat` enum('SD','SMP','SMA/SMK','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pos_mapel`
--

INSERT INTO `pos_mapel` (`id_mapel`, `id_gm`, `mapel`, `tingkat`) VALUES
('M001', 'GM001', 'FISIKA', 'SMA/SMK'),
('M002', 'GM002', 'IPA', 'SMP'),
('M003', 'GM003', 'BHS INDONESIA', 'SD'),
('M004', 'GM004', 'MATEMATIKA', 'SMP'),
('M005', 'GM005', 'BIOLOGI', 'SMP'),
('M006', 'GM006', 'ARAB', 'SD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos_pemesanan`
--

CREATE TABLE `pos_pemesanan` (
  `id_pm` char(10) NOT NULL,
  `id_siswa` char(10) NOT NULL,
  `id_gm` char(10) NOT NULL,
  `tanggal_pm` date NOT NULL,
  `total_sesi` int(15) NOT NULL,
  `jam` time NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `status_pm` enum('PROSES','SELESAI','BATAL','') NOT NULL,
  `lokasi_les` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pos_pemesanan`
--

INSERT INTO `pos_pemesanan` (`id_pm`, `id_siswa`, `id_gm`, `tanggal_pm`, `total_sesi`, `jam`, `tanggal_mulai`, `tanggal_akhir`, `status_pm`, `lokasi_les`) VALUES
('P001', 'S001', 'GM001', '2017-10-01', 2, '08:00:00', '2017-10-03', '2017-10-06', 'SELESAI', 'bogor'),
('P002', 'S002', 'GM001', '2017-10-14', 1, '09:00:00', '2017-10-15', '2017-10-15', 'SELESAI', 'JL.KYAI GRIBIG NO.1 KARANGAYAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos_siswa`
--

CREATE TABLE `pos_siswa` (
  `id_siswa` char(10) NOT NULL,
  `id_admin` char(10) NOT NULL,
  `nik_siswa` char(16) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `alamat_siswa` varchar(50) NOT NULL,
  `nomor_telepon_siswa` char(12) NOT NULL,
  `email_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pos_siswa`
--

INSERT INTO `pos_siswa` (`id_siswa`, `id_admin`, `nik_siswa`, `nama_siswa`, `alamat_siswa`, `nomor_telepon_siswa`, `email_siswa`) VALUES
('S001', 'A001', '17376831867', 'RUDI PRABOWO', 'KESESI', '085', 'rudi@gmail.com'),
('S002', 'A001', '214269292362', 'AFRIZAL AHMED', 'SRAGI', '0857', 'afrizal@gmail.com'),
('S003', 'A001', '13657137329', 'NOVELIA ANITA', 'PEKALONGAN', '0822', 'novelia@gmail.com'),
('S004', 'A001', '65389309309', 'AGRESIA ROBERTO', 'JAKARTA', '0819', 'gresia@gmail.comm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos_voteguru`
--

CREATE TABLE `pos_voteguru` (
  `id_vote` char(10) NOT NULL,
  `id_siswa` char(10) NOT NULL,
  `id_guru` char(10) NOT NULL,
  `rate` varchar(15) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pos_admin`
--
ALTER TABLE `pos_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pos_guru`
--
ALTER TABLE `pos_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `pos_gurumapel`
--
ALTER TABLE `pos_gurumapel`
  ADD PRIMARY KEY (`id_gm`),
  ADD KEY `INDEX` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `pos_mapel`
--
ALTER TABLE `pos_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `pos_pemesanan`
--
ALTER TABLE `pos_pemesanan`
  ADD PRIMARY KEY (`id_pm`),
  ADD KEY `INDEX` (`id_siswa`),
  ADD KEY `id_gm` (`id_gm`);

--
-- Indexes for table `pos_siswa`
--
ALTER TABLE `pos_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `INDEX` (`id_admin`);

--
-- Indexes for table `pos_voteguru`
--
ALTER TABLE `pos_voteguru`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `INDEX` (`id_siswa`,`id_guru`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pos_guru`
--
ALTER TABLE `pos_guru`
  ADD CONSTRAINT `pos_guru_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `pos_admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `pos_gurumapel`
--
ALTER TABLE `pos_gurumapel`
  ADD CONSTRAINT `pos_gurumapel_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `pos_guru` (`id_guru`),
  ADD CONSTRAINT `pos_gurumapel_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `pos_mapel` (`id_mapel`);

--
-- Ketidakleluasaan untuk tabel `pos_pemesanan`
--
ALTER TABLE `pos_pemesanan`
  ADD CONSTRAINT `pos_pemesanan_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `pos_siswa` (`id_siswa`),
  ADD CONSTRAINT `pos_pemesanan_ibfk_3` FOREIGN KEY (`id_gm`) REFERENCES `pos_gurumapel` (`id_gm`);

--
-- Ketidakleluasaan untuk tabel `pos_siswa`
--
ALTER TABLE `pos_siswa`
  ADD CONSTRAINT `pos_siswa_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `pos_admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `pos_voteguru`
--
ALTER TABLE `pos_voteguru`
  ADD CONSTRAINT `pos_voteguru_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `pos_guru` (`id_guru`),
  ADD CONSTRAINT `pos_voteguru_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `pos_siswa` (`id_siswa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
