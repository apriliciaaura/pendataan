-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2021 at 10:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendakian`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, '2021-07-08', 'Judulnya', 'Isinya nih blablabla', '2021-07-07 22:48:31', '2021-07-07 22:48:31'),
(2, '2021-07-07', 'asdas', 'Puncak Batu Tulis Gunung Kawi berada pada ketinggian 2603 mdpl. Rute Pendakian dilakukan dari Dusun Precet, Desa Sumbersuko, Kecamatan Wagir, Kabupaten Malang Untuk Menuju Basecamp menggunakan google map menuju Precet Forest Park. Lokasi basecamp berada kira-kira 5 rumah sebelum wisata tersebut, ciri rumahnya banyak tempelan stiker-stiker komunitas pecinta alam, atau bisa ditanyakan ke warga rumah Pak Basuki Perhutani', '2021-07-08 00:17:51', '2021-07-08 00:17:51'),
(3, '2021-07-07', 'asdas', 'Puncak Batu Tulis Gunung Kawi berada pada ketinggian 2603 mdpl. Rute Pendakian dilakukan dari Dusun Precet, Desa Sumbersuko, Kecamatan Wagir, Kabupaten Malang Untuk Menuju Basecamp menggunakan google map menuju Precet Forest Park. Lokasi basecamp berada kira-kira 5 rumah sebelum wisata tersebut, ciri rumahnya banyak tempelan stiker-stiker komunitas pecinta alam, atau bisa ditanyakan ke warga rumah Pak Basuki Perhutani', '2021-07-08 00:17:51', '2021-07-08 00:17:51'),
(4, '2021-07-07', 'asdas', 'Puncak Batu Tulis Gunung Kawi berada pada ketinggian 2603 mdpl. Rute Pendakian dilakukan dari Dusun Precet, Desa Sumbersuko, Kecamatan Wagir, Kabupaten Malang Untuk Menuju Basecamp menggunakan google map menuju Precet Forest Park. Lokasi basecamp berada kira-kira 5 rumah sebelum wisata tersebut, ciri rumahnya banyak tempelan stiker-stiker komunitas pecinta alam, atau bisa ditanyakan ke warga rumah Pak Basuki Perhutani', '2021-07-08 00:17:51', '2021-07-08 00:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'team-logo5.png-1625724751-png', 'asds', '2021-07-07 23:12:31', '2021-07-07 23:12:31'),
(2, 'team-logo4.png-1625728996-png', 'Badak', '2021-07-08 00:23:16', '2021-07-08 00:23:16'),
(3, 'team-logo3.png-1625729069-png', 'Kobra', '2021-07-08 00:24:29', '2021-07-08 00:24:29'),
(4, 'team-logo2.png-1625729080-png', 'Babi Hutan', '2021-07-08 00:24:40', '2021-07-08 00:24:40'),
(5, 'team-logo1.png-1625729093-png', 'Elang', '2021-07-08 00:24:53', '2021-07-08 00:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `gunung`
--

CREATE TABLE `gunung` (
  `id_gunung` bigint(20) UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gunung`
--

INSERT INTO `gunung` (`id_gunung`, `isi`, `created_at`, `updated_at`) VALUES
(1, '<p>Puncak Batu Tulis Gunung Kawi berada pada ketinggian 2603 mdpl. Rute Pendakian dilakukan dari Dusun Precet, Desa Sumbersuko, Kecamatan Wagir, Kabupaten Malang Untuk Menuju Basecamp menggunakan google map menuju Precet Forest Park. Lokasi basecamp berada kira-kira 5 rumah sebelum wisata tersebut, ciri rumahnya banyak tempelan stiker-stiker komunitas pecinta alam, atau bisa ditanyakan ke warga rumah Pak Basuki Perhutani</p>', NULL, '2021-07-08 00:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi_user`
--

CREATE TABLE `konfigurasi_user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi_web`
--

CREATE TABLE `konfigurasi_web` (
  `id_web` bigint(20) UNSIGNED NOT NULL,
  `nama_web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_halaman_web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_09_071233_create_gunung', 1),
(5, '2021_06_10_075855_create_pengumuman', 1),
(6, '2021_06_15_045139_create_berita', 1),
(7, '2021_07_01_100308_create_galeri', 1),
(8, '2021_07_01_123322_create_peraturan', 1),
(9, '2021_07_05_052556_create_konfigurasi_web', 1),
(10, '2021_07_05_062158_create_pendaki', 1),
(11, '2021_07_07_230808_create_konfigurasi_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaki`
--

CREATE TABLE `pendaki` (
  `id_pendaki` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaki`
--

INSERT INTO `pendaki` (`id_pendaki`, `nama`, `jenis_kelamin`, `jenis_identitas`, `no_identitas`, `alamat`, `no_hp`, `email`, `tanggal_berangkat`, `tanggal_kembali`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Reza N', 'Reza N', 'KTP', '007', 'Tangerang', '0812', 'reza@gmail.com', '2021-07-08', '2021-07-15', 'Awal', '2021-07-08 01:01:26', '2021-07-08 01:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `tanggal`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, '2021-07-08', 'Judulnya', 'Puncak Batu Tulis Gunung Kawi berada pada ketinggian 2603 mdpl. Rute Pendakian dilakukan dari Dusun Precet, Desa Sumbersuko, Kecamatan Wagir, Kabupaten Malang Untuk Menuju Basecamp menggunakan google map menuju Precet Forest Park. Lokasi basecamp berada kira-kira 5 rumah sebelum wisata tersebut, ciri rumahnya banyak tempelan stiker-stiker komunitas pecinta alam, atau bisa ditanyakan ke warga rumah Pak Basuki Perhutani', '2021-07-08 00:12:05', '2021-07-08 00:12:05'),
(2, '2021-07-08', 'Judulnya', 'Puncak Batu Tulis Gunung Kawi berada pada ketinggian 2603 mdpl. Rute Pendakian dilakukan dari Dusun Precet, Desa Sumbersuko, Kecamatan Wagir, Kabupaten Malang Untuk Menuju Basecamp menggunakan google map menuju Precet Forest Park. Lokasi basecamp berada kira-kira 5 rumah sebelum wisata tersebut, ciri rumahnya banyak tempelan stiker-stiker komunitas pecinta alam, atau bisa ditanyakan ke warga rumah Pak Basuki Perhutani', '2021-07-08 00:12:05', '2021-07-08 00:12:05'),
(3, '2021-07-08', 'Judulnya', 'Puncak Batu Tulis Gunung Kawi berada pada ketinggian 2603 mdpl. Rute Pendakian dilakukan dari Dusun Precet, Desa Sumbersuko, Kecamatan Wagir, Kabupaten Malang Untuk Menuju Basecamp menggunakan google map menuju Precet Forest Park. Lokasi basecamp berada kira-kira 5 rumah sebelum wisata tersebut, ciri rumahnya banyak tempelan stiker-stiker komunitas pecinta alam, atau bisa ditanyakan ke warga rumah Pak Basuki Perhutani', '2021-07-08 00:12:05', '2021-07-08 00:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `peraturan`
--

CREATE TABLE `peraturan` (
  `id_peraturan` bigint(20) UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peraturan`
--

INSERT INTO `peraturan` (`id_peraturan`, `isi`, `created_at`, `updated_at`) VALUES
(1, '<p>Puncak Batu Tulis Gunung Kawi berada pada ketinggian 2603 mdpl. Rute Pendakian dilakukan dari Dusun Precet, Desa Sumbersuko, Kecamatan Wagir, Kabupaten Malang Untuk Menuju Basecamp menggunakan google map menuju Precet Forest Park. Lokasi basecamp berada kira-kira 5 rumah sebelum wisata tersebut, ciri rumahnya banyak tempelan stiker-stiker komunitas pecinta alam, atau bisa ditanyakan ke warga rumah Pak Basuki Perhutani</p>', NULL, '2021-07-08 00:10:38');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `gunung`
--
ALTER TABLE `gunung`
  ADD PRIMARY KEY (`id_gunung`);

--
-- Indexes for table `konfigurasi_user`
--
ALTER TABLE `konfigurasi_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  ADD PRIMARY KEY (`id_web`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaki`
--
ALTER TABLE `pendaki`
  ADD PRIMARY KEY (`id_pendaki`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `peraturan`
--
ALTER TABLE `peraturan`
  ADD PRIMARY KEY (`id_peraturan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gunung`
--
ALTER TABLE `gunung`
  MODIFY `id_gunung` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konfigurasi_user`
--
ALTER TABLE `konfigurasi_user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  MODIFY `id_web` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pendaki`
--
ALTER TABLE `pendaki`
  MODIFY `id_pendaki` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peraturan`
--
ALTER TABLE `peraturan`
  MODIFY `id_peraturan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
