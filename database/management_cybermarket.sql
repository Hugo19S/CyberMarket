-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Fev-2024 às 14:39
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `management_cybermarket`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_02_10_193952_create_tipo_utilizador', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
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

--
-- Extraindo dados da tabela `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 7, 'MyAuthApp', '549a0c8efe98bdfd5ae41ab887fa296e03eb2e64cac5365eccacae2dfa0b83d3', '[\"*\"]', NULL, NULL, '2024-02-10 21:29:05', '2024-02-10 21:29:05'),
(2, 'App\\Models\\User', 7, 'MyAuthApp', '12967e2f62bed50044ca77363685cfdc2c620e8a310acc63d9d4ebd5f46035a7', '[\"*\"]', NULL, NULL, '2024-02-10 21:30:56', '2024-02-10 21:30:56'),
(3, 'App\\Models\\User', 8, 'MyAuthApp', 'df2b67a9e8cdbe5bd4022fe37b831746d2242eb72172d39fcb396717da426091', '[\"*\"]', NULL, NULL, '2024-02-10 21:31:48', '2024-02-10 21:31:48'),
(4, 'App\\Models\\User', 9, 'MyAuthApp', '4e8116166bd13415e11d5f2f0169c5d95130c0d9be340dec7bbd519e695f05d2', '[\"*\"]', NULL, NULL, '2024-02-10 22:47:12', '2024-02-10 22:47:12'),
(5, 'App\\Models\\User', 9, 'MyAuthApp', 'f10d0aa32cdb2470a72a0b562651da77888f37cb6d2664c014f75bd29e0c864b', '[\"*\"]', NULL, NULL, '2024-02-10 22:50:31', '2024-02-10 22:50:31'),
(6, 'App\\Models\\User', 10, 'MyAuthApp', 'cc51b28deda78f1e37516e6d6783af8175bc2c6e7d10911ff531731aad4fcd37', '[\"*\"]', NULL, NULL, '2024-02-10 22:57:32', '2024-02-10 22:57:32'),
(7, 'App\\Models\\User', 12, 'MyAuthApp', '9788e1f9c11e3e5799dfe532a34246b47985e8c167f6cfa72426faa4c900cfe9', '[\"*\"]', NULL, NULL, '2024-02-10 23:00:23', '2024-02-10 23:00:23'),
(8, 'App\\Models\\User', 9, 'MyAuthApp', 'a2fc21b7d69edf9a965cea3f7c6032c7648e704d0bd7965463c079568922fad4', '[\"*\"]', NULL, NULL, '2024-02-10 23:11:20', '2024-02-10 23:11:20'),
(9, 'App\\Models\\User', 9, 'MyAuthApp', '5d8c87a0b05643882a0a6bad1ebc622d7e2d6ed28eccf6dd067c15ff7f7bdb96', '[\"*\"]', NULL, NULL, '2024-02-10 23:29:21', '2024-02-10 23:29:21'),
(10, 'App\\Models\\User', 9, 'MyAuthApp', 'b03b533aca93e40f341220ee670d1905194154a719b95f36459339801f19dac7', '[\"*\"]', NULL, NULL, '2024-02-10 23:29:40', '2024-02-10 23:29:40'),
(11, 'App\\Models\\User', 9, 'MyAuthApp', 'a12a08bd365556d66de5a3d21fcd98191fc5536220d0ffed3a99ab32d0ea1d6b', '[\"*\"]', NULL, NULL, '2024-02-10 23:31:51', '2024-02-10 23:31:51'),
(12, 'App\\Models\\User', 9, 'MyAuthApp', 'ff8a99c933a3b915b1b8df51cc411b06d877cb09f77339a269eeb1f863c03c08', '[\"*\"]', NULL, NULL, '2024-02-10 23:33:52', '2024-02-10 23:33:52'),
(13, 'App\\Models\\User', 9, 'MyAuthApp', '588a47fbb2cef161e3721bc8d6ebd9a75b9d6ce87e5303fdbd11dc2b451a64cc', '[\"*\"]', NULL, NULL, '2024-02-11 00:06:31', '2024-02-11 00:06:31'),
(14, 'App\\Models\\User', 9, 'MyAuthApp', 'f56f2433c345616bf8f9a3114ed6f44f6f8d99415a172c85b1180ce47a579001', '[\"*\"]', NULL, NULL, '2024-02-11 00:07:34', '2024-02-11 00:07:34'),
(15, 'App\\Models\\User', 9, 'MyAuthApp', '9b39e2151f26894a420bcfe26ee9ac33462d4bb752a1eeb362b14c5e6b24c189', '[\"*\"]', NULL, NULL, '2024-02-11 00:12:01', '2024-02-11 00:12:01'),
(16, 'App\\Models\\User', 9, 'MyAuthApp', '77df92ced9e545529d44be0185150f2436b833c21920e2d8d2810dd9e2322c93', '[\"*\"]', NULL, NULL, '2024-02-11 00:13:20', '2024-02-11 00:13:20'),
(17, 'App\\Models\\User', 9, 'MyAuthApp', 'a0fdea364d3d3794c29192814d8315be09e902d308b424c46df61dcdc8df3fa9', '[\"*\"]', NULL, NULL, '2024-02-11 00:14:02', '2024-02-11 00:14:02'),
(18, 'App\\Models\\User', 9, 'MyAuthApp', 'e024f70d01f9b05f6cc48b85fe8208c0aa6803ef1f9a0bc9b2a3c0d9334273bf', '[\"*\"]', NULL, NULL, '2024-02-11 00:15:21', '2024-02-11 00:15:21'),
(19, 'App\\Models\\User', 9, 'MyAuthApp', '388d51001c5eef4ed1ae9aac389e38430eb79182723ab55da803e6787158eb7e', '[\"*\"]', NULL, NULL, '2024-02-11 00:18:23', '2024-02-11 00:18:23'),
(20, 'App\\Models\\User', 9, 'MyAuthApp', '634f12aa5928f3922687be03cc8bb4c2a4e239787a99c9751c01aeb9895c22ff', '[\"*\"]', NULL, NULL, '2024-02-11 00:20:24', '2024-02-11 00:20:24'),
(21, 'App\\Models\\User', 9, 'MyAuthApp', '429ab9cc1fe12b0b6a000d898cb29c35392b9b1b01d288769579697169e244c8', '[\"*\"]', NULL, NULL, '2024-02-11 00:22:50', '2024-02-11 00:22:50'),
(22, 'App\\Models\\User', 9, 'MyAuthApp', 'f8b4f1441125b94e42fd3ebf7100f6f6a9e8d5ad06e27fe0d24402b23aa7a33a', '[\"*\"]', NULL, NULL, '2024-02-11 00:25:16', '2024-02-11 00:25:16'),
(23, 'App\\Models\\User', 16, 'MyAuthApp', '8c4161e5844d4fb9e867dcf8e9944ed93485689c60263eabe386182887030b9f', '[\"*\"]', NULL, NULL, '2024-02-11 00:36:29', '2024-02-11 00:36:29'),
(24, 'App\\Models\\User', 9, 'MyAuthApp', 'af6c43efcc069a945cb29113f37237c7cf8817faed720a6d3436799749bd87ef', '[\"*\"]', NULL, NULL, '2024-02-11 00:36:51', '2024-02-11 00:36:51'),
(25, 'App\\Models\\User', 9, 'MyAuthApp', '3340074b6e9cc091de86c989d6754429fb30f1ee06f0dbf0c5d6ce4165d3c05a', '[\"*\"]', NULL, NULL, '2024-02-11 00:37:20', '2024-02-11 00:37:20'),
(26, 'App\\Models\\User', 9, 'MyAuthApp', '079d22e568d5fab0ef3d76df354e02b3169d4c505525cdea1d4e960e38d9228f', '[\"*\"]', NULL, NULL, '2024-02-11 00:46:49', '2024-02-11 00:46:49'),
(27, 'App\\Models\\User', 9, 'MyAuthApp', '388178d2635a1f5813a40f1b997a91480c31efc18ae253f0a784fc8d8502232f', '[\"*\"]', NULL, NULL, '2024-02-11 00:49:42', '2024-02-11 00:49:42'),
(28, 'App\\Models\\User', 9, 'MyAuthApp', '37ac4a5fc3c90771f977ca6690a4961be6dcc0a5fe73dc8f7539af06c62e4225', '[\"*\"]', NULL, NULL, '2024-02-11 01:06:50', '2024-02-11 01:06:50'),
(29, 'App\\Models\\User', 16, 'MyAuthApp', 'cf438fbf8ddf3b3f0e50b7b9ff2b0ea661c58ea5e72cf0422f7e398ccc02ee47', '[\"*\"]', NULL, NULL, '2024-02-11 01:07:09', '2024-02-11 01:07:09'),
(30, 'App\\Models\\User', 16, 'MyAuthApp', '20bc476779adbeb36358aa38eb6d956777bba16258a3785b4865ec12af1080ff', '[\"*\"]', NULL, NULL, '2024-02-11 01:09:02', '2024-02-11 01:09:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_utilizador`
--

CREATE TABLE `tipo_utilizador` (
  `tipo_utilizador_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_utilizador` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipo_utilizador`
--

INSERT INTO `tipo_utilizador` (`tipo_utilizador_id`, `tipo_utilizador`, `created_at`, `updated_at`) VALUES
(1, 'cliente', '2024-02-10 20:35:33', '2024-02-10 20:35:33'),
(2, 'administrador', '2024-02-10 20:35:33', '2024-02-10 20:35:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `tipo_utilizador_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `tipo_utilizador_id`, `created_at`, `updated_at`) VALUES
(1, 'Tiago Francisco', 'tiago@gmail.com', NULL, '$2y$12$x19zeGWR981DvV9VblbbpeKAzKvNbyjaQCbWtBNlwRvwHKP5keRty', NULL, 1, '2024-02-10 21:19:49', '2024-02-10 21:19:49'),
(3, 'joao', 'joao@gmail.com', NULL, '$2y$12$VGgcJ/5LGbW5vtKFoJbXE.g1ImXAmiTns8gVUkYm9t1bUUsKlp2Dq', NULL, 1, '2024-02-10 21:22:56', '2024-02-10 21:22:56'),
(5, 'ze', 'ze@gmail.com', NULL, '$2y$12$Gk54y2yi87K38h1hsef4XuAW4Uek1KyeaAsYU31NKEh.5rTUHeU3C', NULL, 1, '2024-02-10 21:24:16', '2024-02-10 21:24:16'),
(6, 'maria', 'maria@gmail.com', NULL, '$2y$12$LJQuHpxoCt13XFTmoewrA.UWmCG7byayoPUzI5m0v0nq66v6kKXLa', NULL, 1, '2024-02-10 21:26:35', '2024-02-10 21:26:35'),
(7, 'tony', 'tony@gmail.com', NULL, '$2y$12$lbQQ6YYe0tbegi8Cboq.XOYFTCpdp88bqMjFaRqTX8peqUSK8pCme', NULL, 1, '2024-02-10 21:29:04', '2024-02-10 21:29:04'),
(8, 'Luis Vato', 'lvato@gmail.com', NULL, '$2y$12$BXl0A8cy1vwbB7kPFrWxKeO7KCNxLNxTpuOKQR6Of5PcVw7dc/npK', NULL, 1, '2024-02-10 21:31:48', '2024-02-10 21:31:48'),
(9, 'pepe', 'pepe@gmail.com', NULL, '$2y$12$2N6z6UWmEsZNw8wYYZ4FfuVEXDNqV5UHPHClRRqxdb42hDuiRBL7y', NULL, 1, '2024-02-10 22:47:12', '2024-02-10 22:47:12'),
(10, 'jardas', 'jardas@gmail.com', NULL, '$2y$12$hzIbXqA4vzMvqNTKGLIUlecYENpkGpCb2J8Mc6aweYjbVnu3yu8gy', NULL, 1, '2024-02-10 22:57:32', '2024-02-10 22:57:32'),
(12, 'jardel', 'jardel@gmail.com', NULL, '$2y$12$/07YS3rqpYuGZG0grglDfuk5/4R9q2mEtddvOfkyRlHdEdFnmSIFO', NULL, 1, '2024-02-10 23:00:23', '2024-02-10 23:00:23'),
(13, 'falcao', 'falcao@gmail.com', NULL, '$2y$12$9ahnyh0N3NMQD2my.LmHY.YD87U0dAg02FNoE9knLCydh8ogIMIwG', NULL, 1, '2024-02-10 23:05:35', '2024-02-10 23:05:35'),
(14, 'ronaldo', 'ronaldo@gmail.com', NULL, '$2y$12$R2RAzkIf2nnKv011M4CAo.GsL1G.suPAm/bYP8YC0muJvkSJK5N/S', NULL, 1, '2024-02-10 23:06:34', '2024-02-10 23:06:34'),
(15, 'figo', 'figo@gmail.com', NULL, '$2y$12$tm11L2nd07PldKZDmGlU4eIk8r3FZ4m4dXhLFCOun4tJ.HC1Zdh/a', NULL, 1, '2024-02-10 23:09:00', '2024-02-10 23:09:00'),
(16, 'José Mourinho', 'jm@gmail.com', NULL, '$2y$12$he1dM5wXXrqLXkeA5OTaRu5jhb2zBIjBLIXYCVeC6mMAaSoOc7OwK', NULL, 1, '2024-02-11 00:26:38', '2024-02-11 00:26:38');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `tipo_utilizador`
--
ALTER TABLE `tipo_utilizador`
  ADD PRIMARY KEY (`tipo_utilizador_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_tipo_utilizador_id_foreign` (`tipo_utilizador_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tipo_utilizador`
--
ALTER TABLE `tipo_utilizador`
  MODIFY `tipo_utilizador_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_tipo_utilizador_id_foreign` FOREIGN KEY (`tipo_utilizador_id`) REFERENCES `tipo_utilizador` (`tipo_utilizador_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
