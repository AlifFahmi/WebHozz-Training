-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 08:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggalLahir` datetime NOT NULL,
  `usia` int(11) NOT NULL,
  `kelamin` varchar(6) DEFAULT NULL,
  `isMenikah` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id`, `nama`, `tanggalLahir`, `usia`, `kelamin`, `isMenikah`) VALUES
(1, 'Alif Fahmi', '1995-07-08 00:00:00', 27, 'Pria', 1),
(2, 'Sumaryana', '1968-08-22 11:48:31', 52, 'Pria', NULL),
(3, 'M Noor', '1976-08-29 00:00:00', 46, 'Pria', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `ruang` varchar(25) NOT NULL,
  `tanggal` datetime NOT NULL,
  `materi` varchar(50) NOT NULL,
  `id_instruktur` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `ruang`, `tanggal`, `materi`, `id_instruktur`, `id_peserta`) VALUES
(12, 'MR 3', '2022-08-25 00:00:00', 'Python', 1, 10),
(20, 'MR 6', '2022-08-25 00:00:00', '5S', 1, 26),
(21, 'MR 5', '2022-09-08 00:00:00', 'Python', 1, 1),
(22, 'MR 9', '2022-08-25 00:00:00', 'Web Development', 1, 2),
(23, 'MR 6', '2022-09-06 00:00:00', 'TVP', 3, 3),
(26, 'MR 9', '2022-11-03 00:00:00', 'Industrial Engginering', 2, 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pelatihan_view`
-- (See below for the actual view)
--
CREATE TABLE `pelatihan_view` (
`id_pelatihan` int(11)
,`ruang` varchar(25)
,`tanggal` datetime
,`materi` varchar(50)
,`murid` varchar(50)
,`guru` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggalLahir` datetime NOT NULL,
  `usia` int(11) NOT NULL DEFAULT 17,
  `kelamin` varchar(6) NOT NULL,
  `isMenikah` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `tanggalLahir`, `usia`, `kelamin`, `isMenikah`) VALUES
(1, 'Adi', '1982-06-20 00:00:00', 40, 'Pria', 0),
(2, 'Budi', '1977-06-23 00:00:00', 45, 'Pria', 0),
(3, 'Dodi', '1972-01-05 00:00:00', 50, 'Pria', 1),
(4, 'Wati', '1987-03-15 00:00:00', 35, 'Wanita', 0),
(5, 'Ani', '1995-04-25 00:00:00', 27, 'Wanita', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewpelatihan`
-- (See below for the actual view)
--
CREATE TABLE `viewpelatihan` (
`id_pelatihan` int(11)
,`tanggal` datetime
,`materi` varchar(50)
,`murid` varchar(50)
,`guru` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewulangtahun`
-- (See below for the actual view)
--
CREATE TABLE `viewulangtahun` (
`nama` varchar(50)
,`tanggalLahir` datetime
,`umur` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure for view `pelatihan_view`
--
DROP TABLE IF EXISTS `pelatihan_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pelatihan_view`  AS SELECT `latih`.`id_pelatihan` AS `id_pelatihan`, `latih`.`ruang` AS `ruang`, `latih`.`tanggal` AS `tanggal`, `latih`.`materi` AS `materi`, `serta`.`nama` AS `murid`, `struktur`.`nama` AS `guru` FROM ((`pelatihan` `latih` join `peserta` `serta`) left join `instruktur` `struktur` on(`struktur`.`id` = `latih`.`id_instruktur`)) WHERE `serta`.`id` = `latih`.`id_peserta``id_peserta`  ;

-- --------------------------------------------------------

--
-- Structure for view `viewpelatihan`
--
DROP TABLE IF EXISTS `viewpelatihan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewpelatihan`  AS SELECT `latih`.`id_pelatihan` AS `id_pelatihan`, `latih`.`tanggal` AS `tanggal`, `latih`.`materi` AS `materi`, `serta`.`nama` AS `murid`, `struktur`.`nama` AS `guru` FROM ((`pelatihan` `latih` join `peserta` `serta` on(`latih`.`id_peserta` = `serta`.`id`)) left join `instruktur` `struktur` on(`latih`.`id_instruktur` = `struktur`.`id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `viewulangtahun`
--
DROP TABLE IF EXISTS `viewulangtahun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewulangtahun`  AS SELECT `peserta`.`nama` AS `nama`, `peserta`.`tanggalLahir` AS `tanggalLahir`, timestampdiff(YEAR,`peserta`.`tanggalLahir`,curdate()) AS `umur` FROM `peserta``peserta`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
