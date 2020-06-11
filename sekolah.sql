-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2020 at 05:37 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_sekolah`
--

CREATE TABLE `akun_sekolah` (
  `id` int(11) NOT NULL,
  `id_sek` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_sekolah`
--

INSERT INTO `akun_sekolah` (`id`, `id_sek`, `email`, `username`, `pass`, `img`) VALUES
(37, 12345, 'agungztya@gmail.com', 'agung Prasetia ', '892a9944cf14665375630c06a1902152', '26042020101059ig.png'),
(38, 12345, 'a@gmail.com', 'Prasetia ', '3b2285b348e95774cb556cb36e583106', '26042020101639EQBlN8UU4AAiMCo.jpeg'),
(39, 123456, 'a@gmail.com', 'Prasetia ', '3b2285b348e95774cb556cb36e583106', NULL),
(40, 123456, 'agungztya@gmail.com', 'Prasetia ', '733b5e6a2e24f2764086325a28b6013d', '26042020103441Screenshot from 2020-02-07 23-55-38.png'),
(41, 11111, 'agungztya@gmail.com', 'wawa', 'cab197e67ce18583777baa6157e52c53', 'logo.png'),
(42, 2020, 'a@gmail.com', 'lala', '2e3817293fc275dbee74bd71ce6eb056', 'logo.png'),
(43, 2020, 'agungztya@gmail.com', 'agung Prasetia', 'e51d6441579554eba15fe3e89cb8e098', '26042020114836Screenshot from 2020-02-10 01-00-42.png');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id` int(11) NOT NULL,
  `id_sek` int(15) NOT NULL,
  `id_kelas` varchar(15) NOT NULL,
  `kelas` int(5) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id`, `id_sek`, `id_kelas`, `kelas`, `ruangan`, `jurusan`) VALUES
(1, 12345, '1', 1, 'A', 'tkj'),
(2, 12345, '1', 2, 'A', 'tkj'),
(3, 12345, '1', 2, 'A', 'tkj'),
(4, 12345, '1', 2, 'A', 'tkj'),
(5, 12345, '1a', 1, 'A', 'tkj'),
(6, 12345, '1A', 1, 'A', ''),
(7, 12345, '1b', 1, 'b', ''),
(8, 12345, '1A', 1, 'A', ''),
(9, 12345, '1ATKJ', 1, 'A', 'tkj'),
(10, 12345, '1ATKJ', 1, 'a', 'tkj'),
(11, 12345, '1ATKJ', 1, 'a', 'tkj'),
(12, 12345, '1ATKJ', 1, 'a', 'tkj'),
(13, 12345, '1ATKJ', 1, 'a', 'tkj'),
(14, 12345, '1ATKJ', 1, 'a', 'tkj'),
(15, 123456, '1ATKJ', 1, 'a', 'tkj');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_sek` int(15) NOT NULL,
  `id_mapel` varchar(10) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_sek`, `id_mapel`, `mapel`) VALUES
(123456, '1ipa', 'ilmu pengetahuan alam'),
(123456, '2ipa', 'ilmu pengetahuan alam'),
(12345, '1ipa', 'ilmu pengetahuan alam'),
(12345, '1ipa', 'ilmu pengetahuan alam');

-- --------------------------------------------------------

--
-- Table structure for table `mapel_tuksoal`
--

CREATE TABLE `mapel_tuksoal` (
  `id` int(11) NOT NULL,
  `id_sek` int(15) NOT NULL,
  `id_mapelsoal` varchar(20) NOT NULL,
  `id_mapel` varchar(20) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `mulai` varchar(20) NOT NULL,
  `selesai` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel_tuksoal`
--

INSERT INTO `mapel_tuksoal` (`id`, `id_sek`, `id_mapelsoal`, `id_mapel`, `id_kelas`, `semester`, `mulai`, `selesai`, `pass`) VALUES
(1, 123456, '2ipa', '2ipa', '1ATKJ', 'ganjil', '13:59', '13:59', 'wawawaaaaaa'),
(2, 123456, '1ATKJ2ipa', '2ipa', '1ATKJ', 'ganjil', '12:59', '01:59', 'lalalala'),
(3, 12345, '1ATKJ1ipa', '1ipa', '1ATKJ', 'ganjil', '01:59', '01:28', 'wawawaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `id_sek` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kab` varchar(30) NOT NULL,
  `kec` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kontak` varchar(17) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `id_sek`, `nama`, `provinsi`, `kab`, `kec`, `alamat`, `email`, `kontak`, `foto`) VALUES
(16, 12345, 'aaaaaaaaaaaaaaaaaaaaa', 'Aceh', 'Natuna', 'Bandar', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'raphbayuaditya6@gmail.com', 'awawawawawaw', '26042020101419EQBlN8UU4AAiMCo.jpeg'),
(17, 2020, 'asasasas', 'Aceh', 'Natuna', 'Bandar', 'laaaaaaaaaalalalalallallalalla', 'a@gmail.com', 'sssa', '26042020114655Screenshot from 2020-01-28 22-28-06.png');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `id_sek` int(15) NOT NULL,
  `nis` int(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('laki - laki','perempuan') NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `nope` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `id_sek`, `nis`, `nama`, `jk`, `id_kelas`, `nope`) VALUES
(1, 12345, 1234, 'nananani', 'perempuan', '1A', '1111111'),
(2, 12345, 1010, 'qqqq', 'perempuan', '1A', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `id_sek` int(15) NOT NULL,
  `id_mapelsoal` varchar(15) NOT NULL,
  `nomer` int(5) NOT NULL,
  `soal` varchar(1000) NOT NULL,
  `jawab_a` varchar(900) NOT NULL,
  `jawab_b` varchar(900) NOT NULL,
  `jawab_c` varchar(900) NOT NULL,
  `jawab_d` varchar(900) NOT NULL,
  `jawaban` enum('a','b','c','d') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_sek` int(15) NOT NULL,
  `id_mapelsoal` int(15) NOT NULL,
  `id_siswa` int(15) NOT NULL,
  `jawaban` varchar(200) NOT NULL,
  `poin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_sekolah`
--
ALTER TABLE `akun_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel_tuksoal`
--
ALTER TABLE `mapel_tuksoal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_sekolah`
--
ALTER TABLE `akun_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mapel_tuksoal`
--
ALTER TABLE `mapel_tuksoal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
