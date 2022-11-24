-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 04:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_absen`
--

CREATE TABLE `tabel_absen` (
  `id_absen` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `absen_masuk` varchar(20) NOT NULL,
  `absen_keluar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_absen`
--

INSERT INTO `tabel_absen` (`id_absen`, `nim`, `absen_masuk`, `absen_keluar`) VALUES
(1, 2001092001, 'present', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dosen`
--

CREATE TABLE `tabel_dosen` (
  `nip` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_dosen`
--

INSERT INTO `tabel_dosen` (`nip`, `nama`, `ttl`, `alamat`) VALUES
(2001, 'Rina, S. Kom', '2001-05-19', 'Kuranji'),
(2002, 'Fathan, S. Kom', '1996-07-23', 'Batang Anai'),
(2003, 'Lucyana, S.Kom', '1992-06-03', 'Andalas Timur'),
(2004, 'Mulyadi, S. Kom', '1994-04-12', 'Gajah Mada'),
(2005, 'Hannan, S.Kom, M.Eng', '2002-07-17', 'Lubuk Minturun'),
(2006, 'Dani, S. Kom', '1998-09-13', 'Air Tawar'),
(2007, 'Syahera, S. Kom.,M.Kom', '2000-09-13', 'Lubuk Buaya'),
(2008, 'Hendra, S. Kom', '1996-07-23', 'Aur Duri'),
(2009, 'Faiz, S. Kom', '2002-07-17', 'Padang Utara'),
(2010, 'Dinni, S. Kom', '2000-09-17', 'Padang Barat'),
(2011, 'Wuri, S. Kom', '2001-05-12', 'Kuranji'),
(2012, 'Feby, S. Kom', '1996-07-23', 'Bungus'),
(2013, 'Nurul, S.Kom', '2000-06-03', 'Pasar Baru'),
(2014, 'Dayat, S. Kom', '1994-04-12', 'Simpang Haru'),
(2015, 'Putra, S.Kom ', '1994-06-03', 'Pasir Jambak');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_hari`
--

CREATE TABLE `tabel_hari` (
  `id_hari` int(11) NOT NULL,
  `nama_hari` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_hari`
--

INSERT INTO `tabel_hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jadwal_kuliah`
--

CREATE TABLE `tabel_jadwal_kuliah` (
  `id_kuliah` int(10) NOT NULL,
  `nip` int(10) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `id_kelas` varchar(30) NOT NULL,
  `id_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_jadwal_kuliah`
--

INSERT INTO `tabel_jadwal_kuliah` (`id_kuliah`, `nip`, `kode_mk`, `jam`, `id_kelas`, `id_hari`) VALUES
(1, 2001, '001', '08.00-09.45', '1', 1),
(2, 2002, '002', '10.45-13.00', '1', 2),
(3, 2003, '003', '14.30-17.25', '1', 3),
(4, 2004, '004', '13.00-15.10', '1', 4),
(5, 2005, '005', '09.45-14.00', '1', 5),
(6, 2006, '003', '13.00-15.10', '2', 1),
(7, 2007, '002', '09.45-11.50', '2', 2),
(8, 2008, '001', '07.30-10.00', '2', 3),
(9, 2009, '004', '10.00-13.20', '2', 4),
(10, 2010, '005', '10.45-13.00', '2', 5),
(11, 2011, '005', '09.45-13.00', '3', 1),
(12, 2012, '004', '07.30-10.00', '3', 2),
(13, 2013, '003', '09.45-11.50', '3', 3),
(14, 2014, '002', '11.45-14.00', '3', 4),
(15, 2015, '001', '07.30-09.45', '3', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jurusan`
--

CREATE TABLE `tabel_jurusan` (
  `kode_jurusan` varchar(5) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_jurusan`
--

INSERT INTO `tabel_jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
('TI', 'Teknologi Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kelas`
--

CREATE TABLE `tabel_kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kode_prodi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kelas`
--

INSERT INTO `tabel_kelas` (`id_kelas`, `nama_kelas`, `kode_prodi`) VALUES
('1', 'A', 'MI'),
('2', 'B', 'MI'),
('3', 'C', 'MI');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `kode_prodi` varchar(5) NOT NULL,
  `id_kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`nim`, `nama`, `ttl`, `jenis_kelamin`, `alamat`, `kode_prodi`, `id_kelas`) VALUES
(2001092001, 'Dina Nurulhuda', '2002-06-17', 'Perempuan', 'Lubuk Buaya, Anak Air', 'MI', '1'),
(2001092002, 'Seuhendra', '2001-11-13', 'Laki-laki', 'Kuranji', 'MI', '2'),
(2001092003, 'Zaky Drajat Mulya', '2000-07-28', 'Laki-laki', 'Kayu Kalek', 'MI', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_matakuliah`
--

CREATE TABLE `tabel_matakuliah` (
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(10) NOT NULL,
  `semester` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_matakuliah`
--

INSERT INTO `tabel_matakuliah` (`kode_mk`, `nama_mk`, `semester`) VALUES
('001', 'Desain', '1'),
('002', 'P.Alpro', '1'),
('003', 'PTI', '1'),
('004', 'Instalasi', '1'),
('005', 'Agama', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_prodi`
--

CREATE TABLE `tabel_prodi` (
  `kode_prodi` varchar(5) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_prodi`
--

INSERT INTO `tabel_prodi` (`kode_prodi`, `kode_jurusan`, `nama_prodi`) VALUES
('MI', 'TI', 'Manajemen Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `nama`, `email`, `password`) VALUES
(1, 'dinanurulhuda', 'Dina Nurulhuda', 'dinanurulhuda06@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_absen`
--
ALTER TABLE `tabel_absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tabel_hari`
--
ALTER TABLE `tabel_hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `tabel_jadwal_kuliah`
--
ALTER TABLE `tabel_jadwal_kuliah`
  ADD PRIMARY KEY (`id_kuliah`),
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_hari` (`id_hari`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tabel_jurusan`
--
ALTER TABLE `tabel_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `kode_prodi` (`kode_prodi`);

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kode_prodi` (`kode_prodi`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tabel_matakuliah`
--
ALTER TABLE `tabel_matakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- Indexes for table `tabel_prodi`
--
ALTER TABLE `tabel_prodi`
  ADD PRIMARY KEY (`kode_prodi`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_absen`
--
ALTER TABLE `tabel_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_hari`
--
ALTER TABLE `tabel_hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_jadwal_kuliah`
--
ALTER TABLE `tabel_jadwal_kuliah`
  MODIFY `id_kuliah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_absen`
--
ALTER TABLE `tabel_absen`
  ADD CONSTRAINT `tabel_absen_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tabel_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabel_jadwal_kuliah`
--
ALTER TABLE `tabel_jadwal_kuliah`
  ADD CONSTRAINT `tabel_jadwal_kuliah_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tabel_dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_jadwal_kuliah_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `tabel_matakuliah` (`kode_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_jadwal_kuliah_ibfk_3` FOREIGN KEY (`id_hari`) REFERENCES `tabel_hari` (`id_hari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_jadwal_kuliah_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `tabel_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  ADD CONSTRAINT `tabel_kelas_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `tabel_prodi` (`kode_prodi`);

--
-- Constraints for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD CONSTRAINT `tabel_mahasiswa_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `tabel_prodi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_mahasiswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tabel_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabel_prodi`
--
ALTER TABLE `tabel_prodi`
  ADD CONSTRAINT `tabel_prodi_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `tabel_jurusan` (`kode_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
