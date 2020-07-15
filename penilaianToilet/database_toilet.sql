-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 11:56 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_toilet`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id_auth` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id_auth`, `role`, `nama`) VALUES
(1, 'admin', 'Hanifah');

-- --------------------------------------------------------

--
-- Table structure for table `daop`
--

CREATE TABLE `daop` (
  `id_daop` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `singkatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daop`
--

INSERT INTO `daop` (`id_daop`, `nama`, `singkatan`) VALUES
(3, 'Bandung', 'DAOP 2');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `waktu_awal` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `id_toilet` int(11) NOT NULL,
  `id_kantor` int(11) DEFAULT NULL,
  `id_station` int(11) DEFAULT NULL,
  `id_kereta` int(11) DEFAULT NULL,
  `id_daop` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `waktu_awal`, `waktu_akhir`, `id_toilet`, `id_kantor`, `id_station`, `id_kereta`, `id_daop`, `id`) VALUES
(1, 'Senin', '06:00:00', '18:00:00', 1, NULL, 1, NULL, 3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `kantor`
--

CREATE TABLE `kantor` (
  `id_kantor` int(11) NOT NULL,
  `kantor_city` varchar(50) NOT NULL,
  `kantor_code` varchar(50) NOT NULL,
  `kantor_name` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL,
  `id_daop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantor`
--

INSERT INTO `kantor` (`id_kantor`, `kantor_city`, `kantor_code`, `kantor_name`, `gedung`, `id_daop`) VALUES
(3, 'Bandung', '002', 'Kantor Pusat', 'Gedung IT', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `id_kereta` int(11) NOT NULL,
  `kereta_code` varchar(50) NOT NULL,
  `kereta_name` varchar(50) NOT NULL,
  `gerbong` varchar(50) NOT NULL,
  `id_station` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `kereta_code`, `kereta_name`, `gerbong`, `id_station`) VALUES
(1, '343', 'KA Lokal Bandung Raya', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ketidakpuasan`
--

CREATE TABLE `ketidakpuasan` (
  `id_ketidakpuasan` int(11) NOT NULL,
  `nama_ketidakpuasan` varchar(100) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `id_respon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1560701085),
('m130524_201442_init', 1560701112),
('m190124_110200_add_verification_token_column_to_user_table', 1560701113);

-- --------------------------------------------------------

--
-- Table structure for table `rekap`
--

CREATE TABLE `rekap` (
  `id_rekap` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `id_daop` int(11) NOT NULL,
  `id_kantor` int(11) NOT NULL,
  `id_station` int(11) NOT NULL,
  `id_kereta` int(11) NOT NULL,
  `id_toilet` int(11) NOT NULL,
  `id_respon` int(11) NOT NULL,
  `id_ketidakpuasan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `respon`
--

CREATE TABLE `respon` (
  `id_respon` int(11) NOT NULL,
  `nama_respon` varchar(50) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `respon`
--

INSERT INTO `respon` (`id_respon`, `nama_respon`, `gambar`) VALUES
(1, 'Puas', ''),
(2, 'Cukup', ''),
(3, 'Tidak Puas', '');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id_station` int(11) NOT NULL,
  `station_code` varchar(50) NOT NULL,
  `station_name` varchar(50) NOT NULL,
  `station_city` varchar(50) NOT NULL,
  `id_daop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id_station`, `station_code`, `station_name`, `station_city`, `id_daop`) VALUES
(1, '001', 'Stasiun Bandung Utara', 'Bandung', 3);

-- --------------------------------------------------------

--
-- Table structure for table `toilet`
--

CREATE TABLE `toilet` (
  `id_toilet` int(11) NOT NULL,
  `nama_toilet` varchar(50) NOT NULL,
  `id_kantor` int(11) DEFAULT NULL,
  `id_station` int(11) DEFAULT NULL,
  `id_kereta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toilet`
--

INSERT INTO `toilet` (`id_toilet`, `nama_toilet`, `id_kantor`, `id_station`, `id_kereta`) VALUES
(1, 'Toilet Perempuan Utara ', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(13, 'hanip', 'a122Yi2Jt4I5eymXCwy-6tWzootDr1FF', '$2y$13$GNYY0wedL0g5P0UWTqnHI.8sGPQanzWWmGjU30g3athcM7JtiQf/K', NULL, 'Ipeh@gmail.com', 10, 1561610863, 1561610863, NULL),
(17, 'Honhai', 'WFgWnDMZIZZM1qUc1V6eqMh9CXikYYDb', '$2y$13$FLVZnB338UqrUIwN7xF1uuq1bfYhi1/qStKdga8t39nIsd4myc9Ki', NULL, '', 10, 1561696114, 1561696114, NULL),
(25, 'Hanifah', 'QcoIKMjlcfBCqbAgsjuP4xXEVEt6_LET', '$2y$13$8e7IyGy/f8ZeDvi76U3KJOjL4r7sd0BAi3ySIh7597MkxW5ZVNIFG', NULL, 'hai@gmail.com', 9, 1561710660, 1561710660, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id_login` int(11) NOT NULL,
  `snd` varchar(35) NOT NULL,
  `status` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_stasiun` int(11) NOT NULL,
  `id_kantor` int(11) NOT NULL,
  `id_kereta` int(11) NOT NULL,
  `id_toilet` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_auth`);

--
-- Indexes for table `daop`
--
ALTER TABLE `daop`
  ADD PRIMARY KEY (`id_daop`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_daop` (`id_daop`),
  ADD KEY `id_kantor` (`id_kantor`),
  ADD KEY `jadwal_ibfk_3` (`id_station`),
  ADD KEY `id_kereta` (`id_kereta`),
  ADD KEY `id_toilet` (`id_toilet`),
  ADD KEY `id_user` (`id`);

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id_kantor`),
  ADD KEY `id_daop` (`id_daop`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id_kereta`),
  ADD KEY `id_station` (`id_station`);

--
-- Indexes for table `ketidakpuasan`
--
ALTER TABLE `ketidakpuasan`
  ADD PRIMARY KEY (`id_ketidakpuasan`),
  ADD KEY `id_respon` (`id_respon`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`id_rekap`),
  ADD KEY `id_daop` (`id_daop`),
  ADD KEY `id_kantor` (`id_kantor`),
  ADD KEY `id_kereta` (`id_kereta`),
  ADD KEY `rekap_ibfk_4` (`id_station`),
  ADD KEY `id_toilet` (`id_toilet`),
  ADD KEY `id_respon` (`id_respon`),
  ADD KEY `id_ketidakpuasan` (`id_ketidakpuasan`);

--
-- Indexes for table `respon`
--
ALTER TABLE `respon`
  ADD PRIMARY KEY (`id_respon`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id_station`),
  ADD KEY `id_daop` (`id_daop`);

--
-- Indexes for table `toilet`
--
ALTER TABLE `toilet`
  ADD PRIMARY KEY (`id_toilet`),
  ADD KEY `id_kantor` (`id_kantor`),
  ADD KEY `id_kereta` (`id_kereta`),
  ADD KEY `id_station` (`id_station`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_auth` (`id_auth`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id_auth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daop`
--
ALTER TABLE `daop`
  MODIFY `id_daop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id_kantor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kereta`
--
ALTER TABLE `kereta`
  MODIFY `id_kereta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ketidakpuasan`
--
ALTER TABLE `ketidakpuasan`
  MODIFY `id_ketidakpuasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekap`
--
ALTER TABLE `rekap`
  MODIFY `id_rekap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `respon`
--
ALTER TABLE `respon`
  MODIFY `id_respon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id_station` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `toilet`
--
ALTER TABLE `toilet`
  MODIFY `id_toilet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_daop`) REFERENCES `daop` (`id_daop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_kantor`) REFERENCES `kantor` (`id_kantor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_station`) REFERENCES `station` (`id_station`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_5` FOREIGN KEY (`id_toilet`) REFERENCES `toilet` (`id_toilet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_6` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kantor`
--
ALTER TABLE `kantor`
  ADD CONSTRAINT `kantor_ibfk_1` FOREIGN KEY (`id_daop`) REFERENCES `daop` (`id_daop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kereta`
--
ALTER TABLE `kereta`
  ADD CONSTRAINT `kereta_ibfk_1` FOREIGN KEY (`id_station`) REFERENCES `station` (`id_station`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ketidakpuasan`
--
ALTER TABLE `ketidakpuasan`
  ADD CONSTRAINT `ketidakpuasan_ibfk_1` FOREIGN KEY (`id_respon`) REFERENCES `respon` (`id_respon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekap`
--
ALTER TABLE `rekap`
  ADD CONSTRAINT `rekap_ibfk_1` FOREIGN KEY (`id_daop`) REFERENCES `daop` (`id_daop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekap_ibfk_2` FOREIGN KEY (`id_kantor`) REFERENCES `kantor` (`id_kantor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekap_ibfk_3` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekap_ibfk_4` FOREIGN KEY (`id_station`) REFERENCES `station` (`id_station`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekap_ibfk_5` FOREIGN KEY (`id_toilet`) REFERENCES `toilet` (`id_toilet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekap_ibfk_6` FOREIGN KEY (`id_respon`) REFERENCES `respon` (`id_respon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekap_ibfk_7` FOREIGN KEY (`id_ketidakpuasan`) REFERENCES `ketidakpuasan` (`id_ketidakpuasan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `station`
--
ALTER TABLE `station`
  ADD CONSTRAINT `station_ibfk_1` FOREIGN KEY (`id_daop`) REFERENCES `daop` (`id_daop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `toilet`
--
ALTER TABLE `toilet`
  ADD CONSTRAINT `toilet_ibfk_1` FOREIGN KEY (`id_kantor`) REFERENCES `kantor` (`id_kantor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `toilet_ibfk_2` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `toilet_ibfk_3` FOREIGN KEY (`id_station`) REFERENCES `station` (`id_station`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD CONSTRAINT `userlogin_ibfk_1` FOREIGN KEY (`id_auth`) REFERENCES `auth` (`id_auth`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
