-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 06:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `email`, `prodi_id`, `pendidikan_terakhir`, `foto`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 121212, 'Topek, M.Kom', 'Garut', '2021-10-03', 'pria', '121212', 'topek@gmail', 1, 'UI', 'ijo.png-1633703027.png', 1, '2021-10-08 07:23:47', '2021-10-08 07:23:47'),
(2, 9888, 'Muti', 'Jogja', '2021-10-03', 'wanita', '121212', 'muti@com', 6, 'UMJ', 'logika.png-1633709289.png', 1, '2021-10-08 09:08:09', '2021-10-08 09:08:09'),
(3, 22222, 'Angga, Mhaha', 'Bogor', '2021-10-01', 'pria', '121212', 'angga@ga', 2, 'BINUS', 'logika.png-1633713733.png', 1, '2021-10-08 10:22:13', '2021-10-08 10:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `nama_fakultas` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama_fakultas`, `created_at`, `updated_at`) VALUES
(1, 'Teknik', '2021-09-20 12:05:54', '2021-09-20 12:05:54'),
(7, 'Kesehatan', '2021-09-21 23:47:22', '2021-09-21 23:47:22'),
(11, 'Hukum', '2021-09-22 00:42:06', '2021-09-23 06:59:53'),
(12, 'Pendidikan', '2021-09-23 06:59:41', '2021-09-23 06:59:41'),
(13, 'Ekonomi', '2021-10-08 09:28:20', '2021-10-08 09:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `kelompok_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `kelompok_id`, `created_at`, `updated_at`) VALUES
(1, 'Bikin Puisi', 2, '2021-10-08 07:29:12', '2021-10-08 07:29:12'),
(2, 'Ngabisin makanan yg ada di cudo hahahaha', 4, '2021-10-08 07:57:17', '2021-10-08 07:57:17'),
(3, 'mantap jiwa raga budaya bangsa', 3, '2021-10-08 07:58:25', '2021-10-08 07:58:25'),
(4, 'senja di atas kantor cudo', 2, '2021-10-08 08:33:24', '2021-10-08 08:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id` int(11) NOT NULL,
  `nama_kelompok` varchar(255) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `nama_kelompok`, `dosen_id`, `lokasi_id`, `created_at`, `updated_at`) VALUES
(2, 'Penikmat Senja CudoCom', 2, 5, '2021-10-08 07:28:42', '2021-10-08 10:18:55'),
(3, 'Mantap jiwa', 1, 4, '2021-10-08 07:34:57', '2021-10-08 10:19:04'),
(4, 'Penikmat Snack Cudo', 1, 5, '2021-10-08 07:43:56', '2021-10-08 07:43:56'),
(8, 'Ufuk Timur', 3, 4, '2021-10-08 10:22:38', '2021-10-08 10:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `created_at`, `updated_at`) VALUES
(4, 'Cikupa', 'Cikupa', 'Kab, Tangerang', 'Banten', '2021-10-01 06:26:43', '2021-10-01 06:26:43'),
(5, 'Pasir Gadung', 'Cikupa', 'Kab, Tangerang', 'Banten', '2021-10-01 06:27:03', '2021-10-01 06:27:03'),
(6, 'Pasir Nangka', 'Tigaraksa', 'Kab, Tangerang', 'Banten', '2021-10-01 06:27:33', '2021-10-01 06:27:33'),
(7, 'Pasir Bolang', 'Tigaraksa', 'Kab, Tangerang', 'Banten', '2021-10-01 07:08:23', '2021-10-01 07:08:23'),
(8, 'Pagedangan', 'Pagedangan', 'Tangerang', 'Banten', '2021-10-08 10:23:04', '2021-10-08 10:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kelompok_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama_lengkap`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `email`, `prodi_id`, `foto`, `kelompok_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Agam', 31212, 'Tebet', '2021-10-05', 'pria', '121111', 'gams@cudo', 2, 'logika.png-1633703391.png', 2, 2, '2021-10-08 07:29:51', '2021-10-08 07:29:51'),
(2, 'Akbar', 121111, 'Serpong', '2021-10-17', 'pria', '1111111', 'akbar@gmail', 5, 'ungu.png-1633708309.png', 2, 2, '2021-10-08 08:51:49', '2021-10-08 08:51:49'),
(3, 'Mega', 121212, 'Bumi Indah', '2021-10-01', 'wanita', '11112222', 'mega@gmail', 3, 'ijo.png-1633708384.png', 3, 2, '2021-10-08 08:53:04', '2021-10-08 08:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama_prodi`, `fakultas_id`, `created_at`, `updated_at`) VALUES
(1, 'Mesin', 1, '2021-09-21 04:11:32', '2021-09-21 04:11:32'),
(2, 'Elektro', 1, '2021-09-21 04:13:43', '2021-09-21 04:13:43'),
(3, 'Keperawatan', 7, '2021-09-21 23:59:07', '2021-09-21 23:59:07'),
(5, 'Industri', 1, '2021-09-22 00:42:42', '2021-09-23 07:03:44'),
(6, 'Bahasa Inggris', 12, '2021-09-23 07:00:30', '2021-09-23 07:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lusiana Anggun Dianita', 'anggun95lad.dianita06@gmail.com', NULL, '$2y$10$HVwS/3Qn7jYdVjhF2CXaLOKOSB.5QSIufvUaLjCLI8DMGqS4cNKr6', 'l6WLd0FyO3NmoGk44Y6UfXvvkpwtAIdD9n6n2JwoXLlDxKte4kNmFWj0I22O', '2021-09-25 11:05:42', '2021-09-25 11:05:42'),
(2, 'Kurniawan Eko Prasetyo', 'kurniawaneko104@gmail.com', NULL, '$2y$10$bvDZ50p3rX3drMHs8p0OIezyou5zFvw.gfEPnhlgPCQ1kjNLc8oDq', '4jfBkzTq6IvE7MZqQ73FBlPSVo2osvVC3KCZgIkhbeSkLgla3Teiv0tEZtbE', '2021-09-25 11:07:43', '2021-09-25 11:07:43'),
(3, 'Test', 'test@test.com', NULL, '$2y$10$kabBxkriZweAufkkM7Meqe2PZaMoz6MuT1eztFaG//r0471tydGfG', NULL, '2021-10-05 16:26:49', '2021-10-05 16:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_name`) VALUES
(1, 'Dosen'),
(2, 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIDN` (`nidn`),
  ADD KEY `prodi` (`prodi_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelompok_id` (`kelompok_id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Dosen` (`dosen_id`),
  ADD KEY `Lokasi` (`lokasi_id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIK` (`nik`),
  ADD KEY `PRODI` (`prodi_id`),
  ADD KEY `kelompok_id` (`kelompok_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fakultas` (`fakultas_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`kelompok_id`) REFERENCES `kelompok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD CONSTRAINT `kelompok_ibfk_1` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelompok_ibfk_2` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`kelompok_id`) REFERENCES `kelompok` (`id`),
  ADD CONSTRAINT `mahasiswa_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
