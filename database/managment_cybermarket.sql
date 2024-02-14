-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Fev-2024 às 13:42
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `managment_cybermarket`
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
(30, 'App\\Models\\User', 16, 'MyAuthApp', '20bc476779adbeb36358aa38eb6d956777bba16258a3785b4865ec12af1080ff', '[\"*\"]', NULL, NULL, '2024-02-11 01:09:02', '2024-02-11 01:09:02'),
(31, 'App\\Models\\User', 16, 'MyAuthApp', 'aecd7df05df6788c53e0da9a5ba6139204e0cc7210433a82d5d24e65fc5bb55e', '[\"*\"]', NULL, NULL, '2024-02-11 18:38:39', '2024-02-11 18:38:39'),
(32, 'App\\Models\\User', 16, 'MyAuthApp', '768c88a350f05092e686d9a03a639112ac781a95bbad0da64074068f9a457a3e', '[\"*\"]', NULL, NULL, '2024-02-11 18:39:33', '2024-02-11 18:39:33'),
(33, 'App\\Models\\User', 16, 'MyAuthApp', '03d2939826d7ffbb8f67a37cd9ac45e7e4c4fc827ccd6028cb2fcee852265d67', '[\"*\"]', NULL, NULL, '2024-02-11 20:39:51', '2024-02-11 20:39:51'),
(34, 'App\\Models\\User', 16, 'MyAuthApp', '706d264229592b6b5b6ab518eed4b6a18d503cc6019c635b33f22f415bb01bf9', '[\"*\"]', NULL, NULL, '2024-02-11 20:41:17', '2024-02-11 20:41:17'),
(35, 'App\\Models\\User', 16, 'MyAuthApp', 'd1a5edde8e2011220fd088d6171f57b3582b57fb9e0f7aa6ad4b4e27ebe98919', '[\"*\"]', NULL, NULL, '2024-02-11 20:42:15', '2024-02-11 20:42:15'),
(36, 'App\\Models\\User', 16, 'MyAuthApp', 'b1991ba7c6a68f87d23f32ecf20e6f1e4f26bfcf29d80b0c3ec1314acf921b09', '[\"*\"]', NULL, NULL, '2024-02-11 23:59:48', '2024-02-11 23:59:48'),
(37, 'App\\Models\\User', 16, 'MyAuthApp', 'a0fb538e3f54afecf5730a434e70069c62c90d66b33715955a1ee1fcf14c578c', '[\"*\"]', NULL, NULL, '2024-02-12 00:00:08', '2024-02-12 00:00:08'),
(38, 'App\\Models\\User', 1, 'MyAuthApp', 'efbf708cf0958689bb2a93ddb4c9e3dea26f18f155c2890829011ffc642ce6cc', '[\"*\"]', NULL, NULL, '2024-02-12 00:49:36', '2024-02-12 00:49:36'),
(39, 'App\\Models\\User', 16, 'MyAuthApp', 'e6f3903d66e23075864ea7aee7bd85d56566ce2efca8bc7b8ecd47e65542859c', '[\"*\"]', NULL, NULL, '2024-02-12 02:01:03', '2024-02-12 02:01:03'),
(40, 'App\\Models\\User', 16, 'MyAuthApp', '6058f12a500c2fd42bb6d9d9445672e828b77327408b342557d1829d5a5464cd', '[\"*\"]', NULL, NULL, '2024-02-12 02:07:37', '2024-02-12 02:07:37'),
(41, 'App\\Models\\User', 16, 'MyAuthApp', '122b7cdcaeec425641f3f9d2c3424a50c157673c21eec592ed1ef295a352bebd', '[\"*\"]', NULL, NULL, '2024-02-12 02:17:33', '2024-02-12 02:17:33'),
(42, 'App\\Models\\User', 16, 'MyAuthApp', 'f26f749eaf08f864a5b544c8ef9b5628ddf2e8baa97873ca0263fc0dca1512cb', '[\"*\"]', NULL, NULL, '2024-02-12 02:18:24', '2024-02-12 02:18:24'),
(43, 'App\\Models\\User', 16, 'MyAuthApp', '2702ade3b0311210b6865ad8236dc2d319aad0a478d4c7dfa66615ffe9004983', '[\"*\"]', NULL, NULL, '2024-02-12 02:40:57', '2024-02-12 02:40:57'),
(44, 'App\\Models\\User', 16, 'MyAuthApp', '34d00bdbc7e81096e16da1baa74c083d4f2935373f942ff2986ac6d1b46ca91a', '[\"*\"]', NULL, NULL, '2024-02-12 02:43:08', '2024-02-12 02:43:08'),
(45, 'App\\Models\\User', 16, 'MyAuthApp', 'e8e0cad84a6b6c7f68812430a0d2dd8ef0ce43296fc5d0a0d359b622055d23aa', '[\"*\"]', NULL, NULL, '2024-02-12 02:43:09', '2024-02-12 02:43:09'),
(46, 'App\\Models\\User', 16, 'MyAuthApp', '9791c70a9a07629fcdfe7ed49e26b10befcc94a332b6b8b2912defbdaee20f2e', '[\"*\"]', NULL, NULL, '2024-02-12 02:45:43', '2024-02-12 02:45:43'),
(47, 'App\\Models\\User', 16, 'MyAuthApp', 'c11c050f3f91d038c20c121a16bfcb65aee2a0337098e0f7eb11148ca97f3a2a', '[\"*\"]', NULL, NULL, '2024-02-12 02:46:27', '2024-02-12 02:46:27'),
(48, 'App\\Models\\User', 1, 'MyAuthApp', 'e8d647d7b702f423006990097ac404ad12eda577fda8681d3d83d623f5a82c63', '[\"*\"]', NULL, NULL, '2024-02-12 02:48:18', '2024-02-12 02:48:18'),
(49, 'App\\Models\\User', 1, 'MyAuthApp', '05acf27b099821a509f74bc7bc2951e7d4e5a7e951a226bb56e35a49e0c1e312', '[\"*\"]', NULL, NULL, '2024-02-12 02:50:51', '2024-02-12 02:50:51'),
(50, 'App\\Models\\User', 1, 'MyAuthApp', '24d28d57c2b748b4c3eda4998d0b075ac341e6433774472206f12f41bdee8c73', '[\"*\"]', NULL, NULL, '2024-02-12 02:50:51', '2024-02-12 02:50:51'),
(51, 'App\\Models\\User', 1, 'MyAuthApp', '1bb07c145c8ea6b7f08d7d4d02c974447c20aac1cf64020aa4912d03e12c3873', '[\"*\"]', NULL, NULL, '2024-02-12 02:50:52', '2024-02-12 02:50:52'),
(52, 'App\\Models\\User', 1, 'MyAuthApp', '591cbeb45fb8dfc7693ea1b3e1eb7b5dc358487f8a02005f46bc3365f4c0cbbb', '[\"*\"]', NULL, NULL, '2024-02-12 02:50:52', '2024-02-12 02:50:52'),
(53, 'App\\Models\\User', 1, 'MyAuthApp', '53157ca61648a1c3369a13ba1e60fa65ecccee860b25941502a84f328f6b97d7', '[\"*\"]', NULL, NULL, '2024-02-12 02:50:53', '2024-02-12 02:50:53'),
(54, 'App\\Models\\User', 1, 'MyAuthApp', 'dd907f08a7a73e55ff40844815ea54c330d22043b341a725de052f342d647041', '[\"*\"]', NULL, NULL, '2024-02-12 02:50:54', '2024-02-12 02:50:54'),
(55, 'App\\Models\\User', 16, 'MyAuthApp', 'acbab762cb8d56f4c47989b86092fe886f0e8103ab9099825660a1480e769859', '[\"*\"]', NULL, NULL, '2024-02-12 02:50:58', '2024-02-12 02:50:58'),
(56, 'App\\Models\\User', 1, 'MyAuthApp', '365c9eba5a95c34f76b67836060f36651e68db97a2523a470aeacfe13ca5851a', '[\"*\"]', NULL, NULL, '2024-02-12 11:55:55', '2024-02-12 11:55:55'),
(57, 'App\\Models\\User', 1, 'MyAuthApp', '0d8ef93c7a9b8200ee60510f86d829796ac98b297f54558926e7b9ce6bc11464', '[\"*\"]', NULL, NULL, '2024-02-12 11:58:35', '2024-02-12 11:58:35'),
(58, 'App\\Models\\User', 1, 'MyAuthApp', 'd29b3272589723c3d4ee5ce0e81a9a1e62dec88855a8f28000793a8e6c281577', '[\"*\"]', NULL, NULL, '2024-02-12 11:59:43', '2024-02-12 11:59:43'),
(59, 'App\\Models\\User', 16, 'MyAuthApp', '4dc9443efce0ec61dd2b4603ac082548be3a8650cf75d32ca6b6d73056d78639', '[\"*\"]', NULL, NULL, '2024-02-12 12:01:09', '2024-02-12 12:01:09'),
(60, 'App\\Models\\User', 16, 'MyAuthApp', 'd9510f679405ca0cf858df1f71ad4e8c290a4e2c69420badd72a992715617df0', '[\"*\"]', NULL, NULL, '2024-02-12 12:09:07', '2024-02-12 12:09:07'),
(61, 'App\\Models\\User', 16, 'MyAuthApp', 'ad35b885610173c796bc2fa8c885d5d0a6e52b60b48d42fd76decf899908881b', '[\"*\"]', NULL, NULL, '2024-02-12 12:10:44', '2024-02-12 12:10:44'),
(62, 'App\\Models\\User', 1, 'MyAuthApp', '7e4790ac76cee06a482833dd9bee242c068b12fc8b99ec92397c501893c91cff', '[\"*\"]', NULL, NULL, '2024-02-12 12:18:31', '2024-02-12 12:18:31'),
(63, 'App\\Models\\User', 1, 'MyAuthApp', '7b6cbbe3c4eabb6c4c4ae796ba64d8ac2cfa803315d0671b69f676d26c0fca92', '[\"*\"]', NULL, NULL, '2024-02-12 12:19:10', '2024-02-12 12:19:10'),
(64, 'App\\Models\\User', 1, 'MyAuthApp', '9e5ac2908831c339df3660109c8f9a1b6d90dd5b810ec176a49824645eff8f90', '[\"*\"]', NULL, NULL, '2024-02-12 12:32:20', '2024-02-12 12:32:20'),
(65, 'App\\Models\\User', 1, 'MyAuthApp', 'b41c9a99c798302190deb54703768fdd1d32f830ceb8704514c47e9e0c58116c', '[\"*\"]', NULL, NULL, '2024-02-12 12:34:18', '2024-02-12 12:34:18'),
(66, 'App\\Models\\User', 1, 'MyAuthApp', 'c0b7107f2b9d6b78c4494aa643e82c36365f697b74449e9637e50a857859d1c8', '[\"*\"]', NULL, NULL, '2024-02-12 12:46:05', '2024-02-12 12:46:05'),
(67, 'App\\Models\\User', 1, 'MyAuthApp', '3a516dab01fae75d297ac6e88200095019c0c5a7b54ef69f132903d98e8c459e', '[\"*\"]', NULL, NULL, '2024-02-12 12:53:24', '2024-02-12 12:53:24'),
(68, 'App\\Models\\User', 1, 'MyAuthApp', '6e8f1ae82a834bb0b6952945abbe3968dc92f95bf3262dd78fc964759637bb8a', '[\"*\"]', NULL, NULL, '2024-02-12 13:01:46', '2024-02-12 13:01:46'),
(69, 'App\\Models\\User', 1, 'MyAuthApp', 'e0c99a168b73918afe86cbe9697d839b3702fcb14bb49b0631286f5681791f18', '[\"*\"]', NULL, NULL, '2024-02-12 13:04:32', '2024-02-12 13:04:32'),
(70, 'App\\Models\\User', 1, 'MyAuthApp', '44ca0eca22fa5122df839d417ac9f8dc7a62c100ad2e795ad777b71240c0a733', '[\"*\"]', NULL, NULL, '2024-02-12 13:12:29', '2024-02-12 13:12:29'),
(71, 'App\\Models\\User', 16, 'MyAuthApp', '0cab0ea5f392abaf69a8028ba666bcf0cbb02b4e065fe8bd144c6e12b6a7d004', '[\"*\"]', NULL, NULL, '2024-02-12 13:19:48', '2024-02-12 13:19:48'),
(72, 'App\\Models\\User', 16, 'MyAuthApp', '09e52c51035c05bd646bdad1d81b499144da4f68ac8389a1816a8db773f9f663', '[\"*\"]', NULL, NULL, '2024-02-12 13:20:59', '2024-02-12 13:20:59'),
(73, 'App\\Models\\User', 16, 'MyAuthApp', '47864dbd1b25e69acbefcd178302b222f02ad6eff2d4d0631268c7bca0832c1b', '[\"*\"]', NULL, NULL, '2024-02-12 13:21:49', '2024-02-12 13:21:49'),
(74, 'App\\Models\\User', 16, 'MyAuthApp', '6a36a72f66d23c51bde974349a78a66fca48c5f8a5b69ce2c490cffd952ce96b', '[\"*\"]', NULL, NULL, '2024-02-12 13:29:15', '2024-02-12 13:29:15'),
(75, 'App\\Models\\User', 16, 'MyAuthApp', '383a2e982a88963821f3fbffab44ae1f7f37dc0bace31a60f159b41a782985ee', '[\"*\"]', NULL, NULL, '2024-02-12 13:31:20', '2024-02-12 13:31:20'),
(76, 'App\\Models\\User', 16, 'MyAuthApp', '72d8c958407a6fd40dd3e2af6ea232ef18ea8e58e166635b89ced2d4c88b09c4', '[\"*\"]', NULL, NULL, '2024-02-12 13:32:06', '2024-02-12 13:32:06'),
(77, 'App\\Models\\User', 16, 'MyAuthApp', 'e72563e91049add366b0ab96e141df82286d10b0256cfc0ebcac16ed9ee84a8a', '[\"*\"]', NULL, NULL, '2024-02-12 13:32:26', '2024-02-12 13:32:26'),
(78, 'App\\Models\\User', 16, 'MyAuthApp', 'b7d02287628eeb5bb162b5833e45780e0d8dfd2eee95298af13ba92224ba9aca', '[\"*\"]', NULL, NULL, '2024-02-12 13:33:36', '2024-02-12 13:33:36'),
(79, 'App\\Models\\User', 16, 'MyAuthApp', 'de7b6eaf1a01e2d2bf3f9443c6ba1dcee5cab235e004f8e7480ebc69ab675079', '[\"*\"]', NULL, NULL, '2024-02-12 13:35:41', '2024-02-12 13:35:41'),
(80, 'App\\Models\\User', 16, 'MyAuthApp', '19bd093fc78531fa0b36d32f5c5e620f633a4d4302bd0e98fcdc31a1e634c565', '[\"*\"]', NULL, NULL, '2024-02-12 13:35:51', '2024-02-12 13:35:51'),
(81, 'App\\Models\\User', 16, 'MyAuthApp', 'b1c03899b45dd4752f516360e8beb17d82b332abab19a16b2d227339c1970f3b', '[\"*\"]', NULL, NULL, '2024-02-12 13:36:19', '2024-02-12 13:36:19'),
(82, 'App\\Models\\User', 16, 'MyAuthApp', 'ccda53a28a308c8a3fe365fb7b9ab3e477bcf3a63d1d65d8fea28bad5a59d266', '[\"*\"]', NULL, NULL, '2024-02-12 13:40:03', '2024-02-12 13:40:03'),
(83, 'App\\Models\\User', 16, 'MyAuthApp', '0477014fb2523edd1ee241425bfced120f7c4a608b0856293d96b29cdfc5ee15', '[\"*\"]', NULL, NULL, '2024-02-12 13:46:27', '2024-02-12 13:46:27'),
(84, 'App\\Models\\User', 16, 'MyAuthApp', '064d4c89208c9401b2f16597ee2c996997fdba6026906212c4e29cc7d7255552', '[\"*\"]', NULL, NULL, '2024-02-12 13:47:06', '2024-02-12 13:47:06'),
(85, 'App\\Models\\User', 1, 'MyAuthApp', '584b0f252aa27d5e6854a10eb17f0e8f484e2404406b598cfb6b063ff9fa39f9', '[\"*\"]', NULL, NULL, '2024-02-12 13:48:18', '2024-02-12 13:48:18'),
(86, 'App\\Models\\User', 1, 'MyAuthApp', '59f638048edcd20c2214f51428c6259201a1e00cd06a6deb254b461eb8712374', '[\"*\"]', NULL, NULL, '2024-02-12 13:48:20', '2024-02-12 13:48:20'),
(87, 'App\\Models\\User', 1, 'MyAuthApp', '231b3c4ab5714ec172b8a1aa03d397863c7ebf4204364c9bcc6abe8f3e8c32af', '[\"*\"]', NULL, NULL, '2024-02-12 13:48:39', '2024-02-12 13:48:39'),
(88, 'App\\Models\\User', 1, 'MyAuthApp', 'e653be31a0cf000c3762250ef25dc135bf40b229fd8061487a8e7953ac9368bb', '[\"*\"]', NULL, NULL, '2024-02-12 13:49:35', '2024-02-12 13:49:35'),
(89, 'App\\Models\\User', 16, 'MyAuthApp', 'fe87fcbf8d956d0f8418e576f83d89da282984f6d258b0e62181ed6932d61883', '[\"*\"]', NULL, NULL, '2024-02-12 13:51:04', '2024-02-12 13:51:04'),
(90, 'App\\Models\\User', 16, 'MyAuthApp', '7bf55105a87d208aa660d03a6d538bcdb63c1bd517ca5d11a80361982acd2c52', '[\"*\"]', NULL, NULL, '2024-02-12 13:56:06', '2024-02-12 13:56:06'),
(91, 'App\\Models\\User', 16, 'MyAuthApp', '42c74cc7c628006186a6fe0a53efc98b40d6eecdbda3fa576df8ac0f26a1e786', '[\"*\"]', NULL, NULL, '2024-02-12 14:09:38', '2024-02-12 14:09:38'),
(92, 'App\\Models\\User', 16, 'MyAuthApp', '4d9c97b35e82ed3aa3df8ae7a4859e3ef6ce954047afca558a4c39c74382b3f2', '[\"*\"]', NULL, NULL, '2024-02-12 14:12:26', '2024-02-12 14:12:26'),
(93, 'App\\Models\\User', 16, 'MyAuthApp', 'a5cd3aab3e4ab58ddfb8b6d12acb2fd1551f300a7b28147acfd5e023d5d7a1d0', '[\"*\"]', NULL, NULL, '2024-02-12 14:13:08', '2024-02-12 14:13:08'),
(94, 'App\\Models\\User', 1, 'MyAuthApp', 'd7f51b36edeec66b6ff0dccff6a2e5e7b41e320b857500607e8b29a2c5c48faa', '[\"*\"]', NULL, NULL, '2024-02-12 14:13:34', '2024-02-12 14:13:34'),
(95, 'App\\Models\\User', 1, 'MyAuthApp', 'cf30f3158133bb6836695cc1238085f6b3fe22f8ab09773726fd8b9e2798ac9e', '[\"*\"]', NULL, NULL, '2024-02-12 14:26:30', '2024-02-12 14:26:30'),
(96, 'App\\Models\\User', 16, 'MyAuthApp', 'b22dc24c49100ddf59b468ff4e5d5d0a3a239fa4bb56982b8b5239fcb8fad2ab', '[\"*\"]', NULL, NULL, '2024-02-12 15:57:23', '2024-02-12 15:57:23'),
(97, 'App\\Models\\User', 16, 'MyAuthApp', '39c343250cb4439e8b919098bac853dbdbc591d2707185007fd5f3e3c67dc528', '[\"*\"]', NULL, NULL, '2024-02-12 16:16:53', '2024-02-12 16:16:53'),
(98, 'App\\Models\\User', 1, 'MyAuthApp', '5a553d96b6a832e2ffaba6da896672c9b2580e8b48c6e9d0ea96da68d78a2d3f', '[\"*\"]', NULL, NULL, '2024-02-12 16:20:31', '2024-02-12 16:20:31'),
(99, 'App\\Models\\User', 1, 'MyAuthApp', '0f9f6567e2d3dcab799798cd6f954cd720a3a326b2442428bbb15c3ec55c356a', '[\"*\"]', NULL, NULL, '2024-02-12 17:02:46', '2024-02-12 17:02:46'),
(100, 'App\\Models\\User', 16, 'MyAuthApp', '8e688a7e8899767e2c2ebc1438b8d0483b04f1bb60c706d2be3d9d0f620a80ad', '[\"*\"]', NULL, NULL, '2024-02-12 18:49:39', '2024-02-12 18:49:39'),
(101, 'App\\Models\\User', 1, 'MyAuthApp', 'c4aa845a180c617bf67f84c7bf369a854c1f742e7000093e1e997dfbfad0a8d1', '[\"*\"]', NULL, NULL, '2024-02-12 18:50:03', '2024-02-12 18:50:03'),
(102, 'App\\Models\\User', 16, 'MyAuthApp', '31a55e7e2beb593c05e3f0a714991e8227cb27d3958acbf76e3fa9e7ee4e9ea3', '[\"*\"]', NULL, NULL, '2024-02-12 19:05:08', '2024-02-12 19:05:08'),
(103, 'App\\Models\\User', 1, 'MyAuthApp', 'bf85d31298c8fa2247e23906eb7ee2db67f106f64cb9dc3fdb234a49d9c14546', '[\"*\"]', NULL, NULL, '2024-02-12 19:05:18', '2024-02-12 19:05:18'),
(104, 'App\\Models\\User', 1, 'MyAuthApp', '8a40346696d2e6de3bf07635b8b5afc5dcfd4b8b5e6fffcbbb340848555cbbf4', '[\"*\"]', NULL, NULL, '2024-02-12 19:05:58', '2024-02-12 19:05:58'),
(105, 'App\\Models\\User', 1, 'MyAuthApp', '36e635e30d7459c4f20583548a73e4e854c9a112483346263b3f7fadcb244797', '[\"*\"]', NULL, NULL, '2024-02-12 19:06:55', '2024-02-12 19:06:55'),
(106, 'App\\Models\\User', 16, 'MyAuthApp', '33eede66860f7c6a71c83b88a6c48a3d9abfa376ff5eab3e5ebcdc907ef102d7', '[\"*\"]', NULL, NULL, '2024-02-12 19:25:48', '2024-02-12 19:25:48'),
(107, 'App\\Models\\User', 1, 'MyAuthApp', 'a5f72cb29bfb9d61676cae463ea08aee4eb91ad198c4b4873cf334e0a4f76e67', '[\"*\"]', NULL, NULL, '2024-02-12 19:29:13', '2024-02-12 19:29:13'),
(108, 'App\\Models\\User', 1, 'MyAuthApp', '53cb09e65c7be9725a58b8db0fe0e361ca80c08f75d015c7e285b2e08642664f', '[\"*\"]', NULL, NULL, '2024-02-12 19:29:29', '2024-02-12 19:29:29'),
(109, 'App\\Models\\User', 1, 'MyAuthApp', 'a1213632295788dafb80b88c2b591563411b05b79696aa7f16b64f947a25e60e', '[\"*\"]', NULL, NULL, '2024-02-12 19:29:37', '2024-02-12 19:29:37'),
(110, 'App\\Models\\User', 1, 'MyAuthApp', '2d663cf90ca152456c3d72439dc5c73c425558f741a76799ee96b1d76a3445ea', '[\"*\"]', NULL, NULL, '2024-02-12 19:33:24', '2024-02-12 19:33:24'),
(111, 'App\\Models\\User', 1, 'MyAuthApp', '3f5ff46bbb33e19629491b79452d20248b4b4ec3db01760e0b17aca2c9e927b2', '[\"*\"]', NULL, NULL, '2024-02-12 19:53:02', '2024-02-12 19:53:02'),
(112, 'App\\Models\\User', 1, 'MyAuthApp', '6915b99420fc8efcab2664fb791a1ef64e08f6e3e17873e9c531cd05360168b9', '[\"*\"]', NULL, NULL, '2024-02-12 19:53:23', '2024-02-12 19:53:23'),
(113, 'App\\Models\\User', 1, 'MyAuthApp', '1689d51cc15236e85fcb317fdd58f46ee73271fefb3b3e926a4e8036bdea238b', '[\"*\"]', NULL, NULL, '2024-02-12 19:53:40', '2024-02-12 19:53:40'),
(114, 'App\\Models\\User', 1, 'MyAuthApp', '9ba97d60012b996576db612a9926763fc0fd6f85f959b83c64c97f323a30cd1e', '[\"*\"]', NULL, NULL, '2024-02-12 19:54:51', '2024-02-12 19:54:51'),
(115, 'App\\Models\\User', 1, 'MyAuthApp', 'f7e526b1863df16cd1930eb415d754b9adf49336ae92873704f1a49f64f914ab', '[\"*\"]', NULL, NULL, '2024-02-12 19:55:11', '2024-02-12 19:55:11'),
(116, 'App\\Models\\User', 1, 'MyAuthApp', 'f77d5c88f513549450522dcaf18f41db9a1b086dcdffa010b769a731331a9667', '[\"*\"]', NULL, NULL, '2024-02-12 19:56:01', '2024-02-12 19:56:01'),
(117, 'App\\Models\\User', 16, 'MyAuthApp', 'abbc9600f9f35ba9a57d7fd778fc9a62ea7cc43f0e2c87da206df8772cd6503b', '[\"*\"]', NULL, NULL, '2024-02-12 19:56:38', '2024-02-12 19:56:38'),
(118, 'App\\Models\\User', 1, 'MyAuthApp', '977808b2587ef36cc00540effcbe1ba6fa0785a9bcb95355aa0e2f0eddf628d0', '[\"*\"]', NULL, NULL, '2024-02-12 19:56:48', '2024-02-12 19:56:48'),
(119, 'App\\Models\\User', 9, 'MyAuthApp', 'eb0549f99963b02b918d1a4dbdbfccf455a6408c8d16174d67f5ff8dcea5dbe6', '[\"*\"]', NULL, NULL, '2024-02-12 19:59:49', '2024-02-12 19:59:49'),
(120, 'App\\Models\\User', 3, 'MyAuthApp', '72b587e342c32ad7d0ca7f87a417fe79049fb48241cf1a0a2ca3d8c654031a7e', '[\"*\"]', NULL, NULL, '2024-02-12 21:35:04', '2024-02-12 21:35:04'),
(121, 'App\\Models\\User', 3, 'MyAuthApp', 'ba46db57fc532f55f7206529ab0a4f6de46f524ba7e3cf7ba5e293435c5c667b', '[\"*\"]', NULL, NULL, '2024-02-12 21:39:58', '2024-02-12 21:39:58'),
(122, 'App\\Models\\User', 3, 'MyAuthApp', '8c50ea387b475da7ec0d962e6b4dfe2800277b20357143e4cc45f5c5d7e0a30b', '[\"*\"]', NULL, NULL, '2024-02-12 21:40:03', '2024-02-12 21:40:03'),
(123, 'App\\Models\\User', 3, 'MyAuthApp', 'cb9b5a46b915d4ded23d0a7c59e8b13bc9f04d63d586d12a1816179c31a2be78', '[\"*\"]', NULL, NULL, '2024-02-12 21:40:05', '2024-02-12 21:40:05'),
(124, 'App\\Models\\User', 3, 'MyAuthApp', 'f260b7656015cca3dd20e6722b93f623e892e0c77fd162ea3931edcf35836fd7', '[\"*\"]', NULL, NULL, '2024-02-12 21:40:08', '2024-02-12 21:40:08'),
(125, 'App\\Models\\User', 1, 'MyAuthApp', 'a202f85310ea29eba9d4e18a8daf49c71a32c9b148d946fbdaa84a55d0909562', '[\"*\"]', NULL, NULL, '2024-02-12 21:40:11', '2024-02-12 21:40:11'),
(126, 'App\\Models\\User', 1, 'MyAuthApp', 'b3ba7571126a38945e607950ece9c30cfa5003270b1c6a0b47fb11597f1d1cbd', '[\"*\"]', NULL, NULL, '2024-02-12 21:40:13', '2024-02-12 21:40:13'),
(127, 'App\\Models\\User', 16, 'MyAuthApp', '0e778a381ede8cc0c95bb1f749a176173c1c471c82666616d1aa2f0b013f9668', '[\"*\"]', NULL, NULL, '2024-02-13 11:58:36', '2024-02-13 11:58:36'),
(128, 'App\\Models\\User', 1, 'MyAuthApp', '0a086ba0611b46f34c424b8e1cfedf709673dab09586f296bb77533ecf28eeb2', '[\"*\"]', NULL, NULL, '2024-02-13 12:01:18', '2024-02-13 12:01:18'),
(129, 'App\\Models\\User', 1, 'MyAuthApp', 'd660bf5dad64c906561eeacfea25dc5a385e4a1f0ca0059ca3c592a2862a12e3', '[\"*\"]', NULL, NULL, '2024-02-13 19:51:07', '2024-02-13 19:51:07'),
(130, 'App\\Models\\User', 1, 'MyAuthApp', '44d9ee471615eeb414536cb5cbb04d969ec1775ec111c9a2e7bd5d78e1a4dc92', '[\"*\"]', NULL, NULL, '2024-02-13 20:05:01', '2024-02-13 20:05:01'),
(131, 'App\\Models\\User', 16, 'MyAuthApp', '35fe2e2db4333b005225ad8ec903749ad18edcb5d0b15e7f6d6e3f7071ad2695', '[\"*\"]', NULL, NULL, '2024-02-13 21:03:46', '2024-02-13 21:03:46'),
(132, 'App\\Models\\User', 1, 'MyAuthApp', 'a28c39d58e0bb013a3df795d906c7a85959f570b923083b25c531b74026292ef', '[\"*\"]', NULL, NULL, '2024-02-13 21:03:55', '2024-02-13 21:03:55'),
(133, 'App\\Models\\User', 1, 'MyAuthApp', 'a4ea20fc84e8b5719367dced10986b5f174f5f5530750ecc25098f4bd29744c6', '[\"*\"]', NULL, NULL, '2024-02-13 21:04:44', '2024-02-13 21:04:44'),
(134, 'App\\Models\\User', 1, 'MyAuthApp', '8907c7c0fa50a0ea8aa9fd3b2079856779f9e05e08a4c17359c95e036edd8515', '[\"*\"]', NULL, NULL, '2024-02-13 21:12:58', '2024-02-13 21:12:58'),
(135, 'App\\Models\\User', 1, 'MyAuthApp', '9a47ac3e07e953450c2a4a587d20827e642b09961a6ae0287f0160330fbf527e', '[\"*\"]', NULL, NULL, '2024-02-13 21:27:05', '2024-02-13 21:27:05'),
(136, 'App\\Models\\User', 1, 'MyAuthApp', '14c8746a996dba5575fa008c329238721da6fb79499e8d479be7fc54850adee8', '[\"*\"]', NULL, NULL, '2024-02-13 21:44:36', '2024-02-13 21:44:36'),
(137, 'App\\Models\\User', 1, 'MyAuthApp', '4eae0eea07a4d1f091abbb6f97277e2da9eca266ff01407c71479f59bd941638', '[\"*\"]', NULL, NULL, '2024-02-13 21:51:20', '2024-02-13 21:51:20'),
(138, 'App\\Models\\User', 16, 'MyAuthApp', '245f08f45d4112c17fd316fcb1cb623447ae0635f359b39780cc0c4e90bb4ab5', '[\"*\"]', NULL, NULL, '2024-02-13 21:51:29', '2024-02-13 21:51:29'),
(139, 'App\\Models\\User', 1, 'MyAuthApp', '27903583665f44ade6c41ff75b813ef938c1ddfd2960868ef1112c98cce723e2', '[\"*\"]', NULL, NULL, '2024-02-13 22:00:36', '2024-02-13 22:00:36'),
(140, 'App\\Models\\User', 1, 'MyAuthApp', '52d31f8daa357d119c05c7c62002a5d5b6f957ec93398e15a417a6c7512e01d1', '[\"*\"]', NULL, NULL, '2024-02-13 22:11:27', '2024-02-13 22:11:27'),
(141, 'App\\Models\\User', 1, 'MyAuthApp', '131864a95b6379c3dc231d1bc8b4aaaeb778a0f0ade55580a81769840a862b94', '[\"*\"]', NULL, NULL, '2024-02-13 22:11:54', '2024-02-13 22:11:54'),
(142, 'App\\Models\\User', 1, 'MyAuthApp', '96c40635e7286808b2f222ad607623d818e80edd2f1613c0f31fd4ec4b8742bf', '[\"*\"]', NULL, NULL, '2024-02-13 22:12:05', '2024-02-13 22:12:05'),
(143, 'App\\Models\\User', 1, 'MyAuthApp', '3a11e2027e51aff3b9757753e6894673c80dfab34340457678aeee16d5503c33', '[\"*\"]', NULL, NULL, '2024-02-13 22:12:37', '2024-02-13 22:12:37'),
(144, 'App\\Models\\User', 1, 'MyAuthApp', 'a6e1e2fe872dec956b91b8abf285184c95068d88638d7098526eb0b9a635f137', '[\"*\"]', NULL, NULL, '2024-02-13 22:13:31', '2024-02-13 22:13:31'),
(145, 'App\\Models\\User', 1, 'MyAuthApp', 'd0827eba01fd6e6d7bb7eec6e1e1cfc3c7e8c19f71fed99335b435395bafe880', '[\"*\"]', NULL, NULL, '2024-02-13 22:14:19', '2024-02-13 22:14:19'),
(146, 'App\\Models\\User', 16, 'MyAuthApp', 'b6a7e15079f2c31832ed47bdb21cea2a6dff73acb0b4ba25eebd5c864361b605', '[\"*\"]', NULL, NULL, '2024-02-13 22:16:31', '2024-02-13 22:16:31'),
(147, 'App\\Models\\User', 16, 'MyAuthApp', 'cbc87af8d8e6cb1760ef2f9b7bb6488a9bb260d0c0440c0021939b26dea7d1f9', '[\"*\"]', NULL, NULL, '2024-02-13 22:20:43', '2024-02-13 22:20:43'),
(148, 'App\\Models\\User', 1, 'MyAuthApp', '4d123152b72b9178c5211c853dd26a95246d3820603219de322158f9fc62cd82', '[\"*\"]', NULL, NULL, '2024-02-13 22:20:51', '2024-02-13 22:20:51'),
(149, 'App\\Models\\User', 1, 'MyAuthApp', '8c3db970b329b1739352170fd9870dacb1a4caceabc412523c748f3acb7eb3af', '[\"*\"]', NULL, NULL, '2024-02-13 22:25:26', '2024-02-13 22:25:26'),
(150, 'App\\Models\\User', 1, 'MyAuthApp', '8a7a5680aab1802a446b409c0cd81e715dfef178ad2587b3805d698ea8c9e032', '[\"*\"]', NULL, NULL, '2024-02-13 22:26:44', '2024-02-13 22:26:44'),
(151, 'App\\Models\\User', 16, 'MyAuthApp', 'fe1308d5b73d699ee6b8637415992cc684cbd94eca4823025124c0b779d574b9', '[\"*\"]', NULL, NULL, '2024-02-13 22:26:50', '2024-02-13 22:26:50'),
(152, 'App\\Models\\User', 16, 'MyAuthApp', 'fb74b681359e4f444980bc42a117009fb8191d03f85e6e84423eb799257c88d5', '[\"*\"]', NULL, NULL, '2024-02-13 23:01:22', '2024-02-13 23:01:22'),
(153, 'App\\Models\\User', 16, 'MyAuthApp', '11408c0ff7a154ad9dbeead50020efa2e959bf9594829365999d00798c0a133f', '[\"*\"]', NULL, NULL, '2024-02-13 23:05:00', '2024-02-13 23:05:00'),
(154, 'App\\Models\\User', 16, 'MyAuthApp', '43f88923611fa4ae698b5c58320b1381118e0c61769d81f98b74991a665a1f50', '[\"*\"]', NULL, NULL, '2024-02-13 23:05:30', '2024-02-13 23:05:30'),
(155, 'App\\Models\\User', 16, 'MyAuthApp', '125f53d3478339bcd99931bdabd4245b315e836182d7143a4c537f3b18eca903', '[\"*\"]', NULL, NULL, '2024-02-13 23:06:28', '2024-02-13 23:06:28'),
(156, 'App\\Models\\User', 16, 'MyAuthApp', '3ee1cccb72258a33a70a29b8fbbd58682438c079bb9c61917b49da4fc43291ed', '[\"*\"]', NULL, NULL, '2024-02-13 23:06:49', '2024-02-13 23:06:49'),
(157, 'App\\Models\\User', 16, 'MyAuthApp', 'd95fbf528688fd14d9b22a3df77c87f85979c222d20bbf40c90f9a750ecdd586', '[\"*\"]', NULL, NULL, '2024-02-13 23:06:55', '2024-02-13 23:06:55'),
(158, 'App\\Models\\User', 1, 'MyAuthApp', '99bc0fcc08364a32fdb9b308812d20db10596ddb75e9da8534b92a26f20fc7bc', '[\"*\"]', NULL, NULL, '2024-02-13 23:07:00', '2024-02-13 23:07:00'),
(159, 'App\\Models\\User', 1, 'MyAuthApp', 'd8e82510d82aa00c988fe258d67be553968aa7c15d8503cbfd0f44615dab64f8', '[\"*\"]', NULL, NULL, '2024-02-13 23:07:58', '2024-02-13 23:07:58'),
(160, 'App\\Models\\User', 1, 'MyAuthApp', 'dc402792473b69a2a6a4fc499d8a09e1788b77ce10c6c234a1758455390d3eec', '[\"*\"]', NULL, NULL, '2024-02-13 23:08:08', '2024-02-13 23:08:08'),
(161, 'App\\Models\\User', 16, 'MyAuthApp', '7076715522332d98d4a00e51a03f3fa307049685ad6f8f99ab0719a1a5bb0e80', '[\"*\"]', NULL, NULL, '2024-02-13 23:08:13', '2024-02-13 23:08:13'),
(162, 'App\\Models\\User', 1, 'MyAuthApp', 'a560f87e7e9bb8dcbfc4691fe5a61aabdd1cba45e5dd955d5d6e456cde91c286', '[\"*\"]', NULL, NULL, '2024-02-13 23:08:36', '2024-02-13 23:08:36'),
(163, 'App\\Models\\User', 16, 'MyAuthApp', 'f45c51432cb0049d3f02c73d563b027b6fa86e833b090a4987c455b28c54d7b9', '[\"*\"]', NULL, NULL, '2024-02-13 23:19:18', '2024-02-13 23:19:18'),
(164, 'App\\Models\\User', 16, 'MyAuthApp', 'f85d0112bc834ff1f07926c483c709e562553a7d548bb268b4ee0b012945549e', '[\"*\"]', NULL, NULL, '2024-02-13 23:21:08', '2024-02-13 23:21:08'),
(165, 'App\\Models\\User', 16, 'MyAuthApp', '14a187149452779a6a63779140dd2519ee4aea10b35195e580f54a8862a6e22f', '[\"*\"]', NULL, NULL, '2024-02-13 23:28:25', '2024-02-13 23:28:25'),
(166, 'App\\Models\\User', 16, 'MyAuthApp', '7c28f49ba35d80cbafd94cd572b51327d55d507cd367f492a6ebc819ab330b99', '[\"*\"]', NULL, NULL, '2024-02-13 23:38:52', '2024-02-13 23:38:52'),
(167, 'App\\Models\\User', 1, 'MyAuthApp', 'b571c713d9ffdb6c08b699dc28c6ac0ba2dcbc80c8bf9b04052371e036f041bf', '[\"*\"]', NULL, NULL, '2024-02-13 23:39:39', '2024-02-13 23:39:39'),
(168, 'App\\Models\\User', 16, 'MyAuthApp', '3210a7a2078cf342d6a7077180a1761d5b312b5e3743e020f40ac485d117d8d9', '[\"*\"]', NULL, NULL, '2024-02-13 23:40:40', '2024-02-13 23:40:40'),
(169, 'App\\Models\\User', 16, 'MyAuthApp', '56f7e6ecf9ae2df795719822ed17a806ecd0e8b27380c66fcfd5ce786bb30cc8', '[\"*\"]', NULL, NULL, '2024-02-13 23:41:04', '2024-02-13 23:41:04'),
(170, 'App\\Models\\User', 16, 'MyAuthApp', '604380709a98b820c7a26c50db77fbeda9098f0bb4625772d78fce09408083ae', '[\"*\"]', NULL, NULL, '2024-02-13 23:43:07', '2024-02-13 23:43:07'),
(171, 'App\\Models\\User', 16, 'MyAuthApp', 'cf7ae004f704edad6d7b51cf9eff83ca7d8734b3ff84c8329d27e0cf3fbea326', '[\"*\"]', NULL, NULL, '2024-02-13 23:44:46', '2024-02-13 23:44:46'),
(172, 'App\\Models\\User', 16, 'MyAuthApp', 'e986f8181473e8f9b2717d5a0d45aa2c5e36cca53c5fe1daa9338ef5d9090602', '[\"*\"]', NULL, NULL, '2024-02-13 23:45:12', '2024-02-13 23:45:12'),
(173, 'App\\Models\\User', 3, 'MyAuthApp', 'e01cb0901b1b0da275794eb4fc2ed656a88bb1d07eba3d6f93932c662df2ab03', '[\"*\"]', NULL, NULL, '2024-02-14 00:51:01', '2024-02-14 00:51:01'),
(174, 'App\\Models\\User', 1, 'MyAuthApp', '4649189eaf5bafed9988230a269aa4201b7e5d520c913a392428ddeac68d6f1b', '[\"*\"]', NULL, NULL, '2024-02-14 00:51:15', '2024-02-14 00:51:15'),
(175, 'App\\Models\\User', 1, 'MyAuthApp', '016018ade85c7a694e0ca8e4b1899709ae82f9559f54f7b713ddf57696cf6e7e', '[\"*\"]', NULL, NULL, '2024-02-14 00:57:51', '2024-02-14 00:57:51'),
(176, 'App\\Models\\User', 1, 'MyAuthApp', '5f65adeaad367c84260cef9be00fded195659eee72bcdcaab72d24f68a96d2b0', '[\"*\"]', NULL, NULL, '2024-02-14 01:10:50', '2024-02-14 01:10:50'),
(177, 'App\\Models\\User', 16, 'MyAuthApp', '4d5ef928be5f764a23a519484f0f1e0dff108482cdf6fd6a09682f5df3a64829', '[\"*\"]', NULL, NULL, '2024-02-14 10:43:20', '2024-02-14 10:43:20'),
(178, 'App\\Models\\User', 1, 'MyAuthApp', 'effb9c85dcd75f47806ab400e314bcd297cea7ec1ff7a9ff70a40ed3b0f2e05e', '[\"*\"]', NULL, NULL, '2024-02-14 10:43:27', '2024-02-14 10:43:27'),
(179, 'App\\Models\\User', 1, 'MyAuthApp', 'f29cb7560ef0cfc15691c9ab8073f726d0877875727e3f588f6911bfe70090d8', '[\"*\"]', NULL, NULL, '2024-02-14 11:49:51', '2024-02-14 11:49:51'),
(180, 'App\\Models\\User', 16, 'MyAuthApp', '6b0d7ec7a7584c33ae9ebfb935afb687dfcb5db5500f0a61f2daabc0df10e946', '[\"*\"]', NULL, NULL, '2024-02-14 11:50:10', '2024-02-14 11:50:10'),
(181, 'App\\Models\\User', 1, 'MyAuthApp', 'fb61799d264ab0ba7047f246e7c011227c2749525e821b5ae94a8edd0fb009e6', '[\"*\"]', NULL, NULL, '2024-02-14 11:54:03', '2024-02-14 11:54:03');

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
(1, 'Tiago Francisco', 'tiago@gmail.com', NULL, '$2y$12$x19zeGWR981DvV9VblbbpeKAzKvNbyjaQCbWtBNlwRvwHKP5keRty', NULL, 2, '2024-02-10 21:19:49', '2024-02-10 21:19:49'),
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
(16, 'José Mourinho', 'jm@gmail.com', NULL, '$2y$12$he1dM5wXXrqLXkeA5OTaRu5jhb2zBIjBLIXYCVeC6mMAaSoOc7OwK', NULL, 1, '2024-02-11 00:26:38', '2024-02-11 00:26:38'),
(17, 'Seta', 'seta@gmail.com', NULL, '$2y$12$FFCRsVGs3FfbjfFrRLdyb.kSgPhIcXgZumhAno/ccjhr2s8Eacdre', NULL, 1, '2024-02-14 00:17:18', '2024-02-14 00:17:18'),
(19, 'Seta Grande', 'st@gmail.com', NULL, '$2y$12$ZWNz33nHrwasZrqdaNo/QO74zcHuDiqlBNQhsptcuPAX3.Ln3uY0G', NULL, 1, '2024-02-14 00:23:41', '2024-02-14 00:23:41');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT de tabela `tipo_utilizador`
--
ALTER TABLE `tipo_utilizador`
  MODIFY `tipo_utilizador_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
