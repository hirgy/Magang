-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 05:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
  `NoKK` bigint(30) DEFAULT NULL,
  `NIK` bigint(30) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `LingkarKepala` varchar(50) DEFAULT NULL,
  `LingkarLengan` varchar(50) DEFAULT NULL,
  `BeratBadan` varchar(50) DEFAULT NULL,
  `TinggiBadan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bantuansosial`
--

CREATE TABLE `bantuansosial` (
  `NoKK` bigint(30) NOT NULL,
  `NIK` bigint(30) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `BLTPusat` varchar(15) DEFAULT NULL,
  `BLTDesa` varchar(15) DEFAULT NULL,
  `BPNT` varchar(15) DEFAULT NULL,
  `BPUM` varchar(15) DEFAULT NULL,
  `BST` varchar(15) DEFAULT NULL,
  `PKH` varchar(15) DEFAULT NULL,
  `Sembako` varchar(15) DEFAULT NULL,
  `KIP` varchar(15) DEFAULT NULL,
  `KIS` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bantuansosial`
--

INSERT INTO `bantuansosial` (`NoKK`, `NIK`, `Nama`, `BLTPusat`, `BLTDesa`, `BPNT`, `BPUM`, `BST`, `PKH`, `Sembako`, `KIP`, `KIS`) VALUES
(123123123, 0, '', '1', '1', '0', '1', '0', '1', '0', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `dataaset`
--

CREATE TABLE `dataaset` (
  `NoKK` bigint(30) NOT NULL,
  `NIK` bigint(30) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `MemilikiTeleponSeluler` varchar(15) DEFAULT NULL,
  `MemilikiFasilitasInternet` varchar(15) DEFAULT NULL,
  `MemilikiPerangkatKomputer` varchar(15) DEFAULT NULL,
  `MemilikiKendaraanBerodaDua` varchar(15) DEFAULT NULL,
  `MemilikiKendaraanBerodaEmpat` varchar(15) DEFAULT NULL,
  `MemilikiKendaraanLainnya` varchar(15) DEFAULT NULL,
  `MemilikiKendaraanListrik` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataaset`
--

INSERT INTO `dataaset` (`NoKK`, `NIK`, `Nama`, `MemilikiTeleponSeluler`, `MemilikiFasilitasInternet`, `MemilikiPerangkatKomputer`, `MemilikiKendaraanBerodaDua`, `MemilikiKendaraanBerodaEmpat`, `MemilikiKendaraanLainnya`, `MemilikiKendaraanListrik`) VALUES
(123123123, 0, '', '1', '1', '1', '0', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `dataibuhamil`
--

CREATE TABLE `dataibuhamil` (
  `NoKK` bigint(30) NOT NULL,
  `NIK` bigint(30) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Hamil` varchar(50) NOT NULL,
  `HPHT` varchar(100) NOT NULL,
  `UsiaKehamilan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataibuhamil`
--

INSERT INTO `dataibuhamil` (`NoKK`, `NIK`, `Nama`, `Hamil`, `HPHT`, `UsiaKehamilan`) VALUES
(123123123, 0, '', '', '', 0),
(3217012905200005, 3217011212830030, 'DEVI NOVELIA', 'Ya', '#########', 2);

-- --------------------------------------------------------

--
-- Table structure for table `datakepalakeluarga`
--

CREATE TABLE `datakepalakeluarga` (
  `NoKK` bigint(30) NOT NULL,
  `NIK` bigint(30) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datakepalakeluarga`
--

INSERT INTO `datakepalakeluarga` (`NoKK`, `NIK`, `Nama`) VALUES
(123123123, 123123123, 'budi');

-- --------------------------------------------------------

--
-- Table structure for table `datalogin`
--

CREATE TABLE `datalogin` (
  `id` bigint(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datalogin`
--

INSERT INTO `datalogin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'john_doe', '$2y$10$3kZxR1wA8XztmNrytnsCv.8MScb0ZfzDHEF8WEpE1WvBwnr4TWu7a', '2023-11-26 21:58:15', '2023-11-26 21:58:15'),
(2, 'jane_smith', '$2y$10$3kZxR1wA8XztmNrytnsCv.8MScb0ZfzDHEF8WEpE1WvBwnr4TWu7a', '2023-11-26 21:58:15', '2023-11-26 21:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `datapinjaman`
--

CREATE TABLE `datapinjaman` (
  `NoKK` bigint(30) NOT NULL,
  `NIK` bigint(30) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `MemilikiPinjamanPerbankan` varchar(15) DEFAULT NULL,
  `MemilikiPinjamanKoperasi` varchar(15) DEFAULT NULL,
  `SimpanPinjam` varchar(15) DEFAULT NULL,
  `TerjeratPinjol` varchar(15) DEFAULT NULL,
  `TerjeratRentenir` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapinjaman`
--

INSERT INTO `datapinjaman` (`NoKK`, `NIK`, `Nama`, `MemilikiPinjamanPerbankan`, `MemilikiPinjamanKoperasi`, `SimpanPinjam`, `TerjeratPinjol`, `TerjeratRentenir`) VALUES
(123123123, 0, '', '1', '0', '1', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `datawarga`
--

CREATE TABLE `datawarga` (
  `NoKK` bigint(30) NOT NULL,
  `NIK` bigint(30) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `TempatLahir` varchar(255) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `TanggalMeninggal` date DEFAULT NULL,
  `Tahun` bigint(30) DEFAULT NULL,
  `Bulan` bigint(30) DEFAULT NULL,
  `Hari` bigint(30) DEFAULT NULL,
  `JenisKelamin` varchar(10) DEFAULT NULL,
  `HubunganDenganKepalaKeluarga` varchar(50) DEFAULT NULL,
  `Agama` varchar(50) DEFAULT NULL,
  `Kewarganegaraan` varchar(50) DEFAULT NULL,
  `StatusKawin` varchar(20) DEFAULT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `GolonganDarah` varchar(5) DEFAULT NULL,
  `Pekerjaan` varchar(50) DEFAULT NULL,
  `KelainanFisik` varchar(15) DEFAULT NULL,
  `Cacat` varchar(15) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `RW` bigint(30) DEFAULT NULL,
  `RT` bigint(30) DEFAULT NULL,
  `Desa` varchar(50) DEFAULT NULL,
  `Kecamatan` varchar(50) DEFAULT NULL,
  `AktaLahir` varchar(15) DEFAULT NULL,
  `NoAktaLahir` varchar(20) DEFAULT NULL,
  `SuratKeteranganKematian` varchar(15) DEFAULT NULL,
  `NoSuratKeteranganKematian` varchar(20) DEFAULT NULL,
  `NIKAyah` bigint(30) DEFAULT NULL,
  `NIKIbu` bigint(30) DEFAULT NULL,
  `NoAktaNikah` varchar(20) DEFAULT NULL,
  `TanggalNikah` date DEFAULT NULL,
  `NoAktaCerai` varchar(20) DEFAULT NULL,
  `TanggalCerai` date DEFAULT NULL,
  `PendapatanPerBulan` varchar(255) DEFAULT NULL,
  `AsuransiKesehatan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datawarga`
--

INSERT INTO `datawarga` (`NoKK`, `NIK`, `Nama`, `TempatLahir`, `TanggalLahir`, `TanggalMeninggal`, `Tahun`, `Bulan`, `Hari`, `JenisKelamin`, `HubunganDenganKepalaKeluarga`, `Agama`, `Kewarganegaraan`, `StatusKawin`, `Pendidikan`, `GolonganDarah`, `Pekerjaan`, `KelainanFisik`, `Cacat`, `Alamat`, `RW`, `RT`, `Desa`, `Kecamatan`, `AktaLahir`, `NoAktaLahir`, `SuratKeteranganKematian`, `NoSuratKeteranganKematian`, `NIKAyah`, `NIKIbu`, `NoAktaNikah`, `TanggalNikah`, `NoAktaCerai`, `TanggalCerai`, `PendapatanPerBulan`, `AsuransiKesehatan`) VALUES
(123123123, 123123123, 'budi', 'jakarta', '2023-11-14', '2023-11-08', 2023, 2, 2, 'laki', 'kepala keluarga', 'islam', 'indonesia', 'kawin', 's2', 'A', 'dokter', '0', '0', 'kp jakarta', 1, 2, 'sinisini', 'sinisini', '1', '0', '0', '12312', 1233123, 12332112, '123321', '2023-11-14', 'tidak', '2023-11-15', '0.00', '0'),
(3217012905200000, 3217011212830030, 'YADI CAHYADI', 'BANDUNG', '2023-11-01', '2023-11-02', 39, 11, 2, 'L', 'Kepala Keluarga', 'Islam', 'Indonesia', 'Kawin', 'S2', 'A', 'Dokter', '0', '0', 'KP. PONDOK ROSA', 2, 1, 'JAYAGIRI', 'Lembang', '1', '12222345', '0', '-', 3217011212830031, 3217011212830032, '12222345', '2023-11-02', '112312311', '0000-00-00', '0.00', '0'),
(3217012905200005, 3217011212830038, 'DEVI NOVELIA', 'JAKARTA', '2023-11-03', '2023-11-02', 49, 0, 18, 'P', 'Istri', 'Islam', 'WNI', 'Kawin', 'S1', 'B', 'PNS', '0', '0', 'KP. PONDOK ROSA', 2, 1, 'JAYAGIRI', 'LEMBANG', '0', '-', '0', '-', 3217011212830033, 3217011212830034, '12222345', '2023-11-04', '-', '0000-00-00', '3.500.000-7.000.000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_15_201257_create_datawarga_table', 2),
(6, '2023_11_17_211140_create_data_users_table', 3),
(8, '2023_11_17_215750_drop_data_user_table', 4),
(10, '2023_11_20_222854_create_data_login_table', 5),
(13, '2023_11_26_220849_create_users_table', 6),
(16, '2023_11_26_223423_create_users_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'santuy', 'santuypars22@gmail.com', NULL, '$2y$12$6hf78SQ5044HWgrRu8uAMu7kElTStHvd5MlFM5jFc1ZF7W65aMNrm', NULL, '2023-11-26 16:37:44', '2023-11-26 16:37:44'),
(2, 'gilar', 'gilarwahibul@gmail.com', NULL, '$2y$12$zaeZ8ke9bot9xBXgtJxN2OkcLZ3OKecwb8tarPRL8SiiALzDn5cP6', NULL, '2023-11-26 16:41:36', '2023-11-26 16:41:36'),
(3, 'hirgy', 'hirgy9@gmail.com', NULL, '$2y$12$YbDxGz1Bj/ItBX.xQZIGy.3xysU9oMtnkiPupChUWq2xreTf2f2Nq', NULL, '2023-11-28 09:52:57', '2023-11-28 09:52:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `NoKK` (`NoKK`);

--
-- Indexes for table `bantuansosial`
--
ALTER TABLE `bantuansosial`
  ADD PRIMARY KEY (`NoKK`);

--
-- Indexes for table `dataaset`
--
ALTER TABLE `dataaset`
  ADD PRIMARY KEY (`NoKK`);

--
-- Indexes for table `dataibuhamil`
--
ALTER TABLE `dataibuhamil`
  ADD PRIMARY KEY (`NoKK`);

--
-- Indexes for table `datakepalakeluarga`
--
ALTER TABLE `datakepalakeluarga`
  ADD PRIMARY KEY (`NoKK`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indexes for table `datalogin`
--
ALTER TABLE `datalogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapinjaman`
--
ALTER TABLE `datapinjaman`
  ADD PRIMARY KEY (`NoKK`);

--
-- Indexes for table `datawarga`
--
ALTER TABLE `datawarga`
  ADD PRIMARY KEY (`NoKK`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_user_username_unique` (`username`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `datalogin`
--
ALTER TABLE `datalogin`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balita`
--
ALTER TABLE `balita`
  ADD CONSTRAINT `balita_ibfk_1` FOREIGN KEY (`NoKK`) REFERENCES `datawarga` (`NoKK`);

--
-- Constraints for table `bantuansosial`
--
ALTER TABLE `bantuansosial`
  ADD CONSTRAINT `bantuansosial_ibfk_1` FOREIGN KEY (`NoKK`) REFERENCES `datawarga` (`NoKK`);

--
-- Constraints for table `dataaset`
--
ALTER TABLE `dataaset`
  ADD CONSTRAINT `dataaset_ibfk_1` FOREIGN KEY (`NoKK`) REFERENCES `datawarga` (`NoKK`);

--
-- Constraints for table `dataibuhamil`
--
ALTER TABLE `dataibuhamil`
  ADD CONSTRAINT `dataibuhamil_ibfk_1` FOREIGN KEY (`NoKK`) REFERENCES `datawarga` (`NoKK`);

--
-- Constraints for table `datapinjaman`
--
ALTER TABLE `datapinjaman`
  ADD CONSTRAINT `datapinjaman_ibfk_1` FOREIGN KEY (`NoKK`) REFERENCES `datawarga` (`NoKK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
