-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 01:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

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
  `NoKK` int(11) DEFAULT NULL,
  `NIK` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `TempatLahir` varchar(255) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `TanggalMeninggal` date DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Bulan` int(11) DEFAULT NULL,
  `Hari` int(11) DEFAULT NULL,
  `JenisKelamin` varchar(10) DEFAULT NULL,
  `HubunganDenganKepalaKeluarga` varchar(50) DEFAULT NULL,
  `LingkarKepala` decimal(5,2) DEFAULT NULL,
  `LingkarLengan` decimal(5,2) DEFAULT NULL,
  `BeratBadan` decimal(5,2) DEFAULT NULL,
  `TinggiBadan` decimal(5,2) DEFAULT NULL,
  `Agama` varchar(50) DEFAULT NULL,
  `Kewarganegaraan` varchar(50) DEFAULT NULL,
  `StatusKawin` varchar(20) DEFAULT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `GolonganDarah` varchar(5) DEFAULT NULL,
  `Pekerjaan` varchar(50) DEFAULT NULL,
  `KelainanFisik` tinyint(1) DEFAULT NULL,
  `Cacat` tinyint(1) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `RW` int(11) DEFAULT NULL,
  `RT` int(11) DEFAULT NULL,
  `Desa` varchar(50) DEFAULT NULL,
  `Kecamatan` varchar(50) DEFAULT NULL,
  `AktaLahir` tinyint(1) DEFAULT NULL,
  `NoAktaLahir` varchar(20) DEFAULT NULL,
  `SuratKeteranganKematian` tinyint(1) DEFAULT NULL,
  `NoSuratKeteranganKematian` varchar(20) DEFAULT NULL,
  `NIKAyah` int(11) DEFAULT NULL,
  `NIKIbu` int(11) DEFAULT NULL,
  `NoAktaNikah` varchar(20) DEFAULT NULL,
  `TanggalNikah` date DEFAULT NULL,
  `NoAktaCerai` varchar(20) DEFAULT NULL,
  `TanggalCerai` date DEFAULT NULL,
  `PendapatanPerBulan` decimal(10,2) DEFAULT NULL,
  `AsuransiKesehatan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `balita`
--
INSERT INTO `databalita` (`NoKK`, `NIK`, `Nama`, `TempatLahir`, `TanggalLahir`, `TanggalMeninggal`, `Tahun`, `Bulan`, `Hari`, `JenisKelamin`, `HubunganDenganKepalaKeluarga`, `LingkarKepala`, `LingkarLengan`, `BeratBadan`, `TinggiBadan`, `Agama`, `Kewarganegaraan`, `StatusKawin`, `Pendidikan`, `GolonganDarah`, `Pekerjaan`, `KelainanFisik`, `Cacat`, `Alamat`, `RW`, `RT`, `Desa`, `Kecamatan`, `AktaLahir`, `NoAktaLahir`, `SuratKeteranganKematian`, `NoSuratKeteranganKematian`, `NIKAyah`, `NIKIbu`, `NoAktaNikah`, `TanggalNikah`, `NoAktaCerai`, `TanggalCerai`, `PendapatanPerBulan`, `AsuransiKesehatan`) VALUES
(123123123, 123123123, 'budi', 'jakarta', '2023-11-14', '2023-11-08', 2023, 2, 2, 'laki', 'kepala keluarga', 0, 0, 3, 2, 'islam', 'indonesia', 'kawin', 's2', 'A', 'dokter', 0, 0, 'kp jakarta', 1, 2, 'sinisini', 'sinisini', 1, '0', 0, '12312', 1233123, 12332112, '123321', '2023-11-14', 'tidak', '2023-11-15', 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bantuansosial`
--

CREATE TABLE `bantuansosial` (
  `NoKK` int(11) NOT NULL,
  `BLTPusat` tinyint(1) DEFAULT NULL,
  `BLTDesa` tinyint(1) DEFAULT NULL,
  `BPNT` tinyint(1) DEFAULT NULL,
  `BPUM` tinyint(1) DEFAULT NULL,
  `BST` tinyint(1) DEFAULT NULL,
  `PKH` tinyint(1) DEFAULT NULL,
  `Sembako` tinyint(1) DEFAULT NULL,
  `KIP` tinyint(1) DEFAULT NULL,
  `KIS` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bantuansosial`
--

INSERT INTO `bantuansosial` (`NoKK`, `BLTPusat`, `BLTDesa`, `BPNT`, `BPUM`, `BST`, `PKH`, `Sembako`, `KIP`, `KIS`) VALUES
(123123123, 1, 1, 0, 1, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dataaset`
--

CREATE TABLE `dataaset` (
  `NoKK` int(11) NOT NULL,
  `MemilikiTeleponSeluler` tinyint(1) DEFAULT NULL,
  `MemilikiFasilitasInternet` tinyint(1) DEFAULT NULL,
  `MemilikiPerangkatKomputer` tinyint(1) DEFAULT NULL,
  `MemilikiKendaraanBerodaDua` tinyint(1) DEFAULT NULL,
  `MemilikiKendaraanBerodaEmpat` tinyint(1) DEFAULT NULL,
  `MemilikiKendaraanLainnya` tinyint(1) DEFAULT NULL,
  `MemilikiKendaraanListrik` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataaset`
--

INSERT INTO `dataaset` (`NoKK`, `MemilikiTeleponSeluler`, `MemilikiFasilitasInternet`, `MemilikiPerangkatKomputer`, `MemilikiKendaraanBerodaDua`, `MemilikiKendaraanBerodaEmpat`, `MemilikiKendaraanLainnya`, `MemilikiKendaraanListrik`) VALUES
(123123123, 1, 1, 1, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dataibuhamil`
--

CREATE TABLE `dataibuhamil` (
  `NoKK` int(11) NOT NULL,
  `NIK` int(11) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `TempatLahir` varchar(255) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `TanggalMeninggal` date DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Bulan` int(11) DEFAULT NULL,
  `Hari` int(11) DEFAULT NULL,
  `JenisKelamin` varchar(10) DEFAULT NULL,
  `HubunganDenganKepalaKeluarga` varchar(50) DEFAULT NULL,
  `Hamil` tinyint(1) DEFAULT NULL,
  `HPHT` date DEFAULT NULL,
  `UsiaKehamilan` int(11) DEFAULT NULL,
  `Agama` varchar(50) DEFAULT NULL,
  `Kewarganegaraan` varchar(50) DEFAULT NULL,
  `StatusKawin` varchar(20) DEFAULT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `GolonganDarah` varchar(5) DEFAULT NULL,
  `Pekerjaan` varchar(50) DEFAULT NULL,
  `KelainanFisik` tinyint(1) DEFAULT NULL,
  `Cacat` tinyint(1) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `RW` int(11) DEFAULT NULL,
  `RT` int(11) DEFAULT NULL,
  `Desa` varchar(50) DEFAULT NULL,
  `Kecamatan` varchar(50) DEFAULT NULL,
  `AktaLahir` tinyint(1) DEFAULT NULL,
  `NoAktaLahir` varchar(20) DEFAULT NULL,
  `SuratKeteranganKematian` tinyint(1) DEFAULT NULL,
  `NoSuratKeteranganKematian` varchar(20) DEFAULT NULL,
  `NIKAyah` int(11) DEFAULT NULL,
  `NIKIbu` int(11) DEFAULT NULL,
  `NoAktaNikah` varchar(20) DEFAULT NULL,
  `TanggalNikah` date DEFAULT NULL,
  `NoAktaCerai` varchar(20) DEFAULT NULL,
  `TanggalCerai` date DEFAULT NULL,
  `PendapatanPerBulan` decimal(10,2) DEFAULT NULL,
  `AsuransiKesehatan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataibuhamil`
--

INSERT INTO `dataibuhamil` (`NoKK`, `NIK`, `Nama`, `TempatLahir`, `TanggalLahir`, `TanggalMeninggal`, `Tahun`, `Bulan`, `Hari`, `JenisKelamin`, `HubunganDenganKepalaKeluarga`, `Hamil`, `HPHT`, `UsiaKehamilan`, `Agama`, `Kewarganegaraan`, `StatusKawin`, `Pendidikan`, `GolonganDarah`, `Pekerjaan`, `KelainanFisik`, `Cacat`, `Alamat`, `RW`, `RT`, `Desa`, `Kecamatan`, `AktaLahir`, `NoAktaLahir`, `SuratKeteranganKematian`, `NoSuratKeteranganKematian`, `NIKAyah`, `NIKIbu`, `NoAktaNikah`, `TanggalNikah`, `NoAktaCerai`, `TanggalCerai`, `PendapatanPerBulan`, `AsuransiKesehatan`) VALUES
(123123123, 123123123, 'budi', 'jakarta', '2023-11-14', '2023-11-08', 2023, 2, 2, 'laki', 'kepala keluarga', 0, '2023-11-07', 2, 'islam', 'indonesia', 'kawin', 's2', 'A', 'dokter', 0, 0, 'kp jakarta', 1, 2, 'sinisini', 'sinisini', 1, '0', 0, '12312', 1233123, 12332112, '123321', '2023-11-14', 'tidak', '2023-11-15', 0.00, 0);


-- --------------------------------------------------------

--
-- Table structure for table `datakepalakeluarga`
--

CREATE TABLE `datakepalakeluarga` (
  `NoKK` int(11) NOT NULL,
  `NIK` int(11) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `TempatLahir` varchar(255) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `TanggalMeninggal` date DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Bulan` int(11) DEFAULT NULL,
  `Hari` int(11) DEFAULT NULL,
  `JenisKelamin` varchar(10) DEFAULT NULL,
  `HubunganDenganKepalaKeluarga` varchar(50) DEFAULT NULL,
  `Agama` varchar(50) DEFAULT NULL,
  `Kewarganegaraan` varchar(50) DEFAULT NULL,
  `StatusKawin` varchar(20) DEFAULT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `GolonganDarah` varchar(5) DEFAULT NULL,
  `Pekerjaan` varchar(50) DEFAULT NULL,
  `KelainanFisik` tinyint(1) DEFAULT NULL,
  `Cacat` tinyint(1) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `RW` int(11) DEFAULT NULL,
  `RT` int(11) DEFAULT NULL,
  `Desa` varchar(50) DEFAULT NULL,
  `Kecamatan` varchar(50) DEFAULT NULL,
  `AktaLahir` tinyint(1) DEFAULT NULL,
  `NoAktaLahir` varchar(20) DEFAULT NULL,
  `SuratKeteranganKematian` tinyint(1) DEFAULT NULL,
  `NoSuratKeteranganKematian` varchar(20) DEFAULT NULL,
  `NIKAyah` int(11) DEFAULT NULL,
  `NIKIbu` int(11) DEFAULT NULL,
  `NoAktaNikah` varchar(20) DEFAULT NULL,
  `TanggalNikah` date DEFAULT NULL,
  `NoAktaCerai` varchar(20) DEFAULT NULL,
  `TanggalCerai` date DEFAULT NULL,
  `PendapatanPerBulan` decimal(10,2) DEFAULT NULL,
  `AsuransiKesehatan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datakepalakeluarga`
--

INSERT INTO `datakepalakeluarga` (`NoKK`, `NIK`, `Nama`, `TempatLahir`, `TanggalLahir`, `TanggalMeninggal`, `Tahun`, `Bulan`, `Hari`, `JenisKelamin`, `HubunganDenganKepalaKeluarga`, `Agama`, `Kewarganegaraan`, `StatusKawin`, `Pendidikan`, `GolonganDarah`, `Pekerjaan`, `KelainanFisik`, `Cacat`, `Alamat`, `RW`, `RT`, `Desa`, `Kecamatan`, `AktaLahir`, `NoAktaLahir`, `SuratKeteranganKematian`, `NoSuratKeteranganKematian`, `NIKAyah`, `NIKIbu`, `NoAktaNikah`, `TanggalNikah`, `NoAktaCerai`, `TanggalCerai`, `PendapatanPerBulan`, `AsuransiKesehatan`) VALUES
(123123123, 123123123, 'budi', 'jakarta', '2023-11-14', '2023-11-08', 2023, 2, 2, 'laki', 'kepala keluarga', 'islam', 'indonesia', 'kawin', 's2', 'A', 'dokter', 0, 0, 'kp jakarta', 1, 2, 'sinisini', 'sinisini', 1, '0', 0, '12312', 1233123, 12332112, '123321', '2023-11-14', 'tidak', '2023-11-15', 0.00, 0);


-- --------------------------------------------------------

--
-- Table structure for table `datapinjaman`
--

CREATE TABLE `datapinjaman` (
  `NoKK` int(11) NOT NULL,
  `MemilikiPinjamanPerbankan` tinyint(1) DEFAULT NULL,
  `MemilikiPinjamanKoperasi` tinyint(1) DEFAULT NULL,
  `SimpanPinjam` tinyint(1) DEFAULT NULL,
  `TerjeratPinjol` tinyint(1) DEFAULT NULL,
  `TerjeratRentenir` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapinjaman`
--

INSERT INTO `datapinjaman` (`NoKK`, `MemilikiPinjamanPerbankan`, `MemilikiPinjamanKoperasi`, `SimpanPinjam`, `TerjeratPinjol`, `TerjeratRentenir`) VALUES
(123123123, 1, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `datawarga`
--

CREATE TABLE `datawarga` (
  `NoKK` int(11) NOT NULL,
  `NIK` int(11) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `TempatLahir` varchar(255) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `JenisKelamin` varchar(10) DEFAULT NULL,
  `Agama` varchar(50) DEFAULT NULL,
  `Kewarganegaraan` varchar(50) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datawarga`
--

INSERT INTO `datawarga` (`NoKK`, `NIK`, `Nama`, `TempatLahir`, `TanggalLahir`, `TanggalMeninggal`, `Tahun`, `Bulan`, `Hari`, `JenisKelamin`, `HubunganDenganKepalaKeluarga`, `Hamil`, `HPHT`, `UsiaKehamilan`, `Agama`, `Kewarganegaraan`, `StatusKawin`, `Pendidikan`, `GolonganDarah`, `Pekerjaan`, `KelainanFisik`, `Cacat`, `Alamat`, `RW`, `RT`, `Desa`, `Kecamatan`, `AktaLahir`, `NoAktaLahir`, `SuratKeteranganKematian`, `NoSuratKeteranganKematian`, `NIKAyah`, `NIKIbu`, `NoAktaNikah`, `TanggalNikah`, `NoAktaCerai`, `TanggalCerai`, `PendapatanPerBulan`, `AsuransiKesehatan`) VALUES
(123123123, 123123123, 'budi', 'jakarta', '2023-11-14', '2023-11-08', 2023, 2, 2, 'laki', 'kepala keluarga', 'islam', 'indonesia', 'kawin', 's2', 'A', 'dokter', 0, 0, 'kp jakarta', 1, 2, 'sinisini', 'sinisini', 1, '0', 0, '12312', 1233123, 12332112, '123321', '2023-11-14', 'tidak', '2023-11-15', 0.00, 0);

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
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_15_201257_create_datawarga_table', 2);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
