-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2021_09_08_032912_create_murabbi_tables',	1),
(6,	'2021_09_16_032008_create_mutabaah_tables',	1);

DROP TABLE IF EXISTS `murabbi_tables`;
CREATE TABLE `murabbi_tables` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ibadah_yang_masih_harus_diperbaiki` json DEFAULT NULL,
  `birrul_walidain` json DEFAULT NULL,
  `tanggung_jawab_terhadap_matapelajaran` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `murabbi_tables` (`id`, `tanggal`, `nama`, `ibadah_yang_masih_harus_diperbaiki`, `birrul_walidain`, `tanggung_jawab_terhadap_matapelajaran`, `created_at`, `updated_at`) VALUES
(1,	'2022-01-17',	'Pak Nashrullah',	'[\"Siswa tidak mengisi mutabaah\"]',	'[\"Berkomunikasi atau bertukar-pikiran dengan orang tua\"]',	'[\"PJOK (Pendidikan Jasmani, Olah Raga dan Kesehatan)\"]',	'2022-01-16 21:13:18',	'2022-01-16 21:13:18');

DROP TABLE IF EXISTS `mutabaah_tables`;
CREATE TABLE `mutabaah_tables` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menjaga_menyempurnakan_wudhu` enum('0','8') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sholat_subuh` enum('100','86','72','58','44','30','16','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sholat_dzuhur` enum('100','86','72','58','44','30','16','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sholat_ashar` enum('100','86','72','58','44','30','16','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sholat_maghrib` enum('100','86','72','58','44','30','16','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sholat_isya` enum('100','86','72','58','44','30','16','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rawatib_subuh` enum('100','40','70','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rawatib_dzuhur` enum('100','40','60','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rawatib_ashar` enum('30','60','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rawatib_maghrib` enum('120','20','80','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rawatib_isya` enum('120','20','80','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `dhuha` enum('4','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahajud` enum('4','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `witir` enum('4','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarawih` enum('4','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sholat_sunnah_lainnya` enum('4','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaum_senin_kamis` enum('0','100') COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaum_dawud` enum('0','100') COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaum_ramadhan` enum('0','100') COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaum_lainnya` enum('0','100') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tilawah_quran` enum('10','8.4','6.8','5.2','3.6','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `juz_terakhir_yang_dibaca` int(11) NOT NULL,
  `tadabbur_ayat` enum('10','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `infaq_shadaqah` enum('4','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `al_matsurat` enum('3','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `dzikir_lainnya` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jamaah_prayer_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciting_understanding_quran_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_talk_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcoming_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offering_help_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `having_dinner_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_service_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `mutabaah_tables` (`id`, `tanggal`, `nama`, `menjaga_menyempurnakan_wudhu`, `sholat_subuh`, `sholat_dzuhur`, `sholat_ashar`, `sholat_maghrib`, `sholat_isya`, `rawatib_subuh`, `rawatib_dzuhur`, `rawatib_ashar`, `rawatib_maghrib`, `rawatib_isya`, `dhuha`, `tahajud`, `witir`, `tarawih`, `sholat_sunnah_lainnya`, `shaum_senin_kamis`, `shaum_dawud`, `shaum_ramadhan`, `shaum_lainnya`, `tilawah_quran`, `juz_terakhir_yang_dibaca`, `tadabbur_ayat`, `infaq_shadaqah`, `al_matsurat`, `dzikir_lainnya`, `jamaah_prayer_parent`, `reciting_understanding_quran_parent`, `small_talk_parent`, `welcoming_parent`, `offering_help_parent`, `having_dinner_parent`, `personal_service_parent`, `created_at`, `updated_at`) VALUES
(1,	'2022-01-17',	'Pak Nashrullah',	'8',	'100',	'86',	'100',	'100',	'100',	'100',	'100',	'30',	'80',	'80',	'4',	'4',	'4',	'4',	'4',	'100',	'100',	'100',	'100',	'10',	13,	'10',	'4',	'3',	'1',	'Tidak',	'Ya',	'Ya',	'Ya',	'Tidak',	'Tidak',	'Tidak',	'2022-01-16 21:11:59',	'2022-01-16 21:11:59');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siswa',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `username`, `angkatan`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2,	'Khosy',	'admin',	1,	'mochamad.khosy@cendekiamuda.sch.id',	NULL,	'$2y$10$xqjKFUso4QztnJM/f4jZMe0k3aUEgD32CDTYfsT7sgVFqyvQeLWta',	'admin',	NULL,	'2022-01-16 19:21:15',	'2022-01-16 19:21:15'),
(3,	'Pak Nashrullah',	'paknash',	1,	'paknashrullah@cendekiamuda.sch.id',	NULL,	'$2y$10$qtK3.ACIDXfupMw2fFofquImY4kB2HptZ2fiZBsO3ATLevKPRJ4pa',	'siswa',	NULL,	'2022-01-16 20:15:27',	'2022-01-16 20:15:27');

-- 2022-01-17 06:08:39
