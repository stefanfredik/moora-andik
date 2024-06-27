-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 03:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sandri`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Admin'),
(2, 'kepala-sekolah', 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin', NULL, '2024-05-21 13:20:23', 0),
(2, '::1', 'admin', NULL, '2024-05-21 13:20:24', 0),
(3, '::1', 'admin', NULL, '2024-06-12 11:14:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(32) NOT NULL,
  `nama_siswa` varchar(32) NOT NULL,
  `jenis_kelamin` varchar(64) NOT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `kelas` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `nisn`, `nama_siswa`, `jenis_kelamin`, `alamat`, `kelas`) VALUES
(2, '0073524420', 'Claudia Arima Jesika', 'Perempuan', 'Watu Langkas', 'XII'),
(3, '0039503836', ' Halifa Safitri ', 'Perempuan', 'Watu Langkas', 'X'),
(4, '0095368831', 'Hajami Ratni', 'Perempuan', 'Kaper', 'X'),
(5, '0068522804', 'Widyastuti  Hardyanti', 'Perempuan', 'Nggorang', 'XI'),
(6, '0051642640', 'Oktaviani Nestri ', 'Perempuan', 'meleng', 'X'),
(7, '0084436291', 'Margareta Sanda  Putri', 'Perempuan', 'Mbehal', 'XI'),
(8, '00375434210', 'Yohanes Stone Saniputra', 'Laki-Laki', 'Mbuhung', 'XI'),
(9, '0079458597', 'Yuliana Yaya Minu', 'Perempuan', 'Boleng', 'X'),
(10, '0056018466', 'Klaudius Edi Burga', 'Laki-laki', 'Watu Langkas', 'X'),
(11, '0052067123', 'Listadirna Herlin', 'Perempuan', 'werang', 'XI'),
(12, '0085826114', 'Evantari Sastri Indrawati', 'Perempuan', 'Melo', 'XI'),
(13, '00679254049', 'Agustina Merlin', 'Perempuan', 'Mbehal', 'X'),
(14, '0071465371', 'Maria Yenita Lestari', 'Perempuan', 'meleng', 'X'),
(15, '0055311757', 'Felisitas Juita', 'Perempuan', 'Paku', 'XI'),
(16, '0082537088', 'Rosalina Sartika Ambut', 'Perempuan', 'Mejer', 'XI'),
(17, '0078526114', 'Merlita Suju', 'Perempuan', 'Nggorang', 'XI'),
(18, '0076182511', 'Pilipus Hibur', 'Laki-laki', 'Mbehal', 'X'),
(19, '0088951620', 'Yohanes Evensi', 'Laki-Laki', 'Watu Langkas', 'X'),
(20, '0069902728', 'Rusli Bambang', 'Laki-Laki', 'werang', 'X'),
(21, '0062343509', 'Marduanus Reinardo Jerno', 'Laki-Laki', 'Nggorang', 'XII'),
(22, '0082541145', 'Blasius Tulbini', 'Laki-Laki', 'Roang', 'XI'),
(23, '00617561345', 'Adrianus Yofianto', 'Laki-Laki', 'Rekas', 'X'),
(24, '0071621438', 'Plasidus Ovandi Manto', 'Laki-Laki', 'Merombok', 'X'),
(25, '0051547761', 'Klarista Deflamir Sartipilka', 'Perempuan', 'Kumbuk', 'X'),
(26, '0084751164', 'Valencia Cenalia Laju', 'Perempuan', 'meleng', 'XI'),
(27, '0076145517', 'Hansratun', 'Laki-Laki', 'Terang', 'XI'),
(28, '0082343509', 'Eufrosina Else', 'Perempuan', 'Wangkung', 'X'),
(29, '0085007659', 'Lidia Sindi Adu', 'Perempuan', 'meleng', 'XI'),
(30, '0089274163', 'Ermilinda Sinarti', 'Perempuan', 'Watu Langkas', 'XI'),
(31, '0056656685', 'Silastina Diu', 'Perempuan', 'werang', 'XI'),
(32, '0068181719', 'Rosvita ERtisa', 'Perempuan', 'meleng', 'X'),
(33, '0071817653', 'Yuliana Saina', 'Perempuan', 'Pungkang', 'X'),
(34, '0068932621', 'Yasinta Merlin', 'Perempuan', 'Mbehal', 'X'),
(35, '0076521178', 'Maria Kamelia Putriyani', 'Perempuan', 'Nunang', 'XI'),
(36, '0075237462', 'Yulita Ija', 'Perempuan', 'Nunang', 'X'),
(37, '0083561846', 'Maria Elviati Narti', 'Perempuan', 'Nggorang', 'XI');

-- --------------------------------------------------------

--
-- Table structure for table `kelayakan`
--

CREATE TABLE `kelayakan` (
  `id` int(11) NOT NULL,
  `nilai` float NOT NULL DEFAULT 0,
  `keterangan` enum('Layak','Cukup Layak','Tidak Layak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(32) NOT NULL,
  `keterangan` varchar(64) NOT NULL,
  `nilai` float NOT NULL,
  `type` enum('cost','benefit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kriteria`, `keterangan`, `nilai`, `type`) VALUES
(1, 'Penghasilan Orang Tua', 'C1', 5, 'benefit'),
(2, 'Jumlah Tanggungan ', 'C2', 5, 'benefit'),
(3, 'Yatim Piatu', 'C3', 4, 'cost'),
(4, 'Nilai Raport', 'C4', 4, 'cost');

-- --------------------------------------------------------

--
-- Table structure for table `kuota`
--

CREATE TABLE `kuota` (
  `id` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `periode` varchar(64) NOT NULL,
  `jumlah_kuota` int(11) NOT NULL,
  `tanggal_daftar_mulai` date NOT NULL,
  `tanggal_daftar_selesai` date NOT NULL,
  `tanggal_seleksi_mulai` date NOT NULL,
  `tanggal_seleksi_selesai` date NOT NULL,
  `tanggal_terima_mulai` date NOT NULL,
  `tanggal_terima_selesai` date NOT NULL,
  `keterangan` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kuota`
--

INSERT INTO `kuota` (`id`, `tahun`, `periode`, `jumlah_kuota`, `tanggal_daftar_mulai`, `tanggal_daftar_selesai`, `tanggal_seleksi_mulai`, `tanggal_seleksi_selesai`, `tanggal_terima_mulai`, `tanggal_terima_selesai`, `keterangan`) VALUES
(3, 2022, '1', 5, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', ''),
(4, 2022, '2', 5, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Tahap Kedua');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'App', 1716296904, 1),
(2, '2023-02-24-035618', 'App\\Database\\Migrations\\Kriteria', 'default', 'App', 1716296905, 1),
(3, '2023-03-25-082231', 'App\\Database\\Migrations\\Subkriteria', 'default', 'App', 1716296905, 1),
(4, '2023-04-10-142726', 'App\\Database\\Migrations\\Peserta', 'default', 'App', 1716296905, 1),
(5, '2023-04-11-002753', 'App\\Database\\Migrations\\Datapenduduk', 'default', 'App', 1716296906, 1),
(6, '2023-04-11-105452', 'App\\Database\\Migrations\\Kelayakan', 'default', 'App', 1716296906, 1),
(7, '2023-05-04-020355', 'App\\Database\\Migrations\\Kuota', 'default', 'App', 1716296906, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `k_1` int(11) DEFAULT NULL,
  `k_2` int(11) DEFAULT NULL,
  `k_3` int(11) DEFAULT NULL,
  `k_4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `id_siswa`, `tahun`, `k_1`, `k_2`, `k_3`, `k_4`) VALUES
(1, 2, 2022, 1, 20, 23, 28),
(2, 3, 2022, 2, 18, 23, 28),
(3, 4, 2022, 4, 20, 26, 29),
(4, 5, 2022, 2, 20, 23, 30),
(5, 10, 2022, 2, 20, 24, 28),
(6, 7, 2022, 4, 19, 26, 29),
(7, 8, 2022, 1, 22, 23, 30),
(8, 6, 2022, 2, 21, 24, 27),
(9, 9, 2022, 2, 18, 25, 28),
(10, 23, 2022, 1, 19, 25, 29),
(11, 35, 2022, 1, 21, 26, 31);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `subkriteria` varchar(32) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `id_kriteria`, `subkriteria`, `nilai`) VALUES
(1, 1, '900.000', 5),
(2, 1, '1000.000>1.500.000', 4),
(4, 1, '1.500.000>2000.000', 3),
(16, 1, '2000.000>2.500.000', 2),
(17, 1, '≥ 2.500.000', 1),
(18, 2, '<5 anak', 5),
(19, 2, '4', 4),
(20, 2, '3', 3),
(21, 2, '2', 2),
(22, 2, '1', 1),
(23, 3, 'lengkap', 1),
(24, 3, 'piatu', 3),
(25, 3, 'yatim', 4),
(26, 3, 'yatim piatu', 5),
(27, 4, '>90', 5),
(28, 4, '80-90', 4),
(29, 4, '70-80', 3),
(30, 4, '60-70', 2),
(31, 4, '>50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_user` varchar(64) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_user`, `email`, `username`, `last_login`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Admin', NULL, 'admin', NULL, '$2y$10$do0mQcdWJvWvmmQMo0ht1uH3OjnouufVoRM05Pkva7uqkXc8dFVee', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-05-21 13:21:27', '2024-05-21 13:21:27', NULL),
(5, 'Kepala Sekolah', NULL, 'kepalasekolah', NULL, '$2y$10$JS24U/dTqfLNKfgK8L/NHebt7.h51M2dPXbm9goQP.YLBDqYzALRe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-06-12 11:21:55', '2024-06-12 11:21:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelayakan`
--
ALTER TABLE `kelayakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuota`
--
ALTER TABLE `kuota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `kelayakan`
--
ALTER TABLE `kelayakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kuota`
--
ALTER TABLE `kuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
