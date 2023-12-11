-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2023 às 23:56
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
-- Banco de dados: `cybermarket`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` bigint(20) UNSIGNED NOT NULL,
  `nome_categoria` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `nome_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Laptops', '2023-12-11 17:30:06', '2023-12-11 17:30:06'),
(2, 'Desktops', '2023-12-11 17:30:06', '2023-12-11 17:30:06'),
(3, 'Impressoras', '2023-12-11 17:30:06', '2023-12-11 17:30:06'),
(4, 'Monitores', '2023-12-11 17:30:06', '2023-12-11 17:30:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nif` int(11) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `telemovel` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nome_cliente`, `email`, `nif`, `morada`, `telemovel`, `created_at`, `updated_at`) VALUES
(1, 'Natalia Prosacco', 'vicky62@example.com', 535338895, '80357 Herman Throughway Suite 176\nEast Montana, IN 32915-8798', 980710479, '2023-12-11 21:57:18', '2023-12-11 21:57:18'),
(2, 'Prof. Adrain Hoppe PhD', 'dorothy.romaguera@example.net', 971880795, '545 Carli Place\nPort Cathybury, NJ 57013', 957655904, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(3, 'Prof. Nikolas Wunsch MD', 'achamplin@example.com', 286416745, '45348 Strosin Brooks\nWest Jameson, LA 70792', 909588709, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(4, 'Griffin Medhurst', 'kristin.upton@example.org', 891811733, '9036 Bogan Port\nBillstad, UT 87455-8954', 949350051, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(5, 'Anabelle Witting', 'carter.brisa@example.org', 393420914, '98776 Kris Road Apt. 818\nLake Lowellborough, SC 72174', 911531858, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(6, 'Delmer Herman', 'hazel.smitham@example.net', 650628811, '372 Georgette Ford\nWiegandshire, SD 44435', 995580672, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(7, 'Briana Lind', 'juwan.franecki@example.com', 262086516, '5161 Gerlach Cape Suite 762\nYessenialand, TX 18446-5559', 956813291, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(8, 'Reta Huels', 'skylar.cronin@example.com', 332625565, '10668 Frank Shoals\nFeestbury, NH 04067-2003', 984253315, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(9, 'Morris Howell', 'alyce.nikolaus@example.net', 107368168, '447 Adriel Crescent\nLarsonbury, OK 13135', 942470231, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(10, 'Cleveland Mertz', 'nicolas.evalyn@example.com', 619558378, '1695 Kaitlin Hills\nWest Delphiaberg, MT 77623-6514', 909300287, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(11, 'Jarrod Konopelski', 'josianne.crist@example.com', 353388007, '12963 Isaac Walk Apt. 566\nAntonioberg, MA 03159', 942172464, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(12, 'Zane Mills', 'michelle66@example.org', 872063845, '941 Marcelino Landing Suite 167\nKatelinland, MD 34734', 928448823, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(13, 'Jessie Heathcote', 'ellsworth33@example.com', 146683536, '3975 Adeline Valley\nStanstad, ID 78927-5608', 946987161, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(14, 'Armando Towne', 'orn.hilario@example.org', 435200705, '54175 Steuber Crest\nGladysside, DE 47114', 976435849, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(15, 'Miss Maude Ratke IV', 'xbailey@example.com', 686991792, '6931 Zander Fort\nMacejkovicland, UT 09204', 919652697, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(16, 'Winnifred Nolan', 'hyatt.cheyenne@example.org', 780825504, '398 Lane Springs\nCarissaburgh, ID 63480', 996412294, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(17, 'Alessandro Reinger', 'selmer.purdy@example.net', 561334995, '88274 Johnston Coves\nWest Leoneport, WV 00926', 986002099, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(18, 'Mr. Anibal Ryan', 'wstracke@example.com', 965494396, '8625 Leffler Trail\nNorth Wilber, SD 88797', 967070463, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(19, 'Dr. Johnpaul Langworth Jr.', 'kassandra74@example.com', 186426246, '49031 Gussie Isle\nNew Rosa, OH 43348', 921106016, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(20, 'Ibrahim Windler', 'grayson.schiller@example.com', 634309367, '8971 Conn Stream\nPort Jany, DE 03949', 908100780, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(21, 'Hershel Effertz', 'nayeli81@example.net', 333119097, '465 Alejandrin Fort\nSouth Amya, FL 41696', 941503208, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(22, 'Augustine Kulas', 'nicholas30@example.com', 522609041, '29589 Marcus Glen\nEast Wilma, MA 32050-9054', 910695131, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(23, 'Zoe Mosciski', 'hegmann.manley@example.net', 813665509, '689 Lockman Harbors Suite 644\nLake Orinborough, AK 26070', 948182665, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(24, 'Ms. Eda Bogan II', 'antonina.zemlak@example.com', 399830669, '5373 Lavada Point\nSouth Williamberg, FL 21732', 946370774, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(25, 'Jalon Prosacco Sr.', 'osbaldo.doyle@example.org', 600172760, '313 Senger Cape Suite 533\nJudahland, MN 14855', 991024951, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(26, 'Prof. Grant Casper', 'alisha.hamill@example.net', 854772327, '8167 Saige Center\nSouth Penelopeshire, OK 86898-7529', 947461872, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(27, 'Sterling Ward', 'qhessel@example.net', 186535542, '5544 Romaguera Lock Apt. 045\nJanetfurt, AL 74218-3361', 988367625, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(28, 'Howell Berge', 'amber.welch@example.com', 861593108, '3453 Jacobson Grove Suite 513\nJedidiahfurt, TX 33005-9164', 926836122, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(29, 'Prof. Rhiannon Franecki V', 'hammes.theresia@example.net', 352029465, '389 Karina Coves\nLake Richie, LA 18292', 966596287, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(30, 'Peyton Robel', 'cassin.jairo@example.net', 165937148, '50365 Will Union Apt. 519\nWest Prudence, AL 12678', 934718814, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(31, 'Jesse Wisoky', 'kveum@example.com', 834323459, '782 Clifton Terrace\nSouth Alphonso, MT 37763-8900', 952741978, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(32, 'Titus Bruen', 'cormier.matt@example.net', 140002075, '4293 Reinger Cove\nGulgowskiville, SD 22330-1276', 959105548, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(33, 'Christ Schneider', 'dina.crona@example.org', 386978574, '84626 Gerhard Tunnel\nBeahanview, GA 20046-2161', 916795385, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(34, 'Perry Wiegand', 'runolfsson.eliza@example.net', 775228706, '6068 Emelia Ways Apt. 065\nHeidenreichshire, WA 21174-4917', 904270694, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(35, 'Emily Stokes', 'kyler.farrell@example.net', 340766792, '59563 Royce Ports\nAbelchester, SD 92523-3259', 917504747, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(36, 'Bridget Rolfson', 'brodriguez@example.com', 299274249, '5618 Fritsch Run Apt. 531\nKaleshire, DE 50161', 980607405, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(37, 'Mr. Rogelio Baumbach V', 'bmarquardt@example.net', 794409502, '71923 Hailie Plains\nNew Domenick, MS 38166-2989', 963543974, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(38, 'Dr. Brianne Zemlak', 'domenic78@example.org', 143472735, '609 Harris Isle Apt. 780\nWest Alycia, FL 12661', 976044059, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(39, 'Alfreda Dooley', 'tracey.hills@example.net', 193300093, '670 Santos Ramp Apt. 598\nWest Libbymouth, CT 61091-8054', 923441345, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(40, 'Alfredo Mayer', 'elarson@example.org', 231201674, '208 Maybelle Roads Apt. 470\nEast Mossieton, MA 47445', 966663191, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(41, 'Ms. Kaelyn Ratke II', 'claude.schinner@example.com', 879477807, '10554 Neha Road Apt. 426\nToreybury, NY 81779', 934210719, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(42, 'Ila Skiles', 'krunolfsdottir@example.net', 186261960, '2934 Abigayle Ford\nNorth Andreanne, SC 35812', 971282853, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(43, 'Madyson Kuhic', 'cornelius44@example.com', 156259651, '732 Hirthe Motorway\nSouth Matteo, MN 05522-5730', 963275317, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(44, 'Hudson McDermott', 'lorenzo16@example.org', 525715069, '60019 Muller Loaf Apt. 730\nElyseport, TX 91083', 920602001, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(45, 'Karlee Aufderhar', 'tara.kassulke@example.org', 635956674, '8305 Harold Island\nWest Kellieland, NC 38738', 904403133, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(46, 'Zackary Gleichner', 'ronaldo49@example.net', 421689424, '806 Mohr Ridges Suite 243\nWest Casey, NV 67991', 922402227, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(47, 'Murphy McDermott', 'icummerata@example.net', 883265693, '325 Christopher Trace\nLake Benjamin, NE 89538-5623', 992660844, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(48, 'Thelma Hegmann DVM', 'wdach@example.com', 577472058, '221 Ayla Court Apt. 952\nLake Maymiefurt, OH 65489-0671', 997630728, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(49, 'Dasia Ferry', 'nhegmann@example.net', 814300322, '27222 Windler Ports\nPort Ladarius, OR 01122', 942005000, '2023-12-11 21:57:19', '2023-12-11 21:57:19'),
(50, 'Lauryn Breitenberg', 'jerde.milo@example.com', 892145688, '811 Hauck Land Suite 397\nNorth Chazberg, MT 56284-2852', 951480506, '2023-12-11 21:57:19', '2023-12-11 21:57:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE `fabricante` (
  `fabricante_id` bigint(20) UNSIGNED NOT NULL,
  `nome_fabricante` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `fabricante`
--

INSERT INTO `fabricante` (`fabricante_id`, `nome_fabricante`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(2, 'HP Inc.', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(3, 'Dell Technologies', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(4, 'Apple', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(5, 'Acer', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(6, 'Asus', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(7, 'Toshiba', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(8, 'Microsoft', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(9, 'Fujitsu', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(10, 'Samsung', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(11, 'MSI', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(12, 'Sony', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(13, 'LG', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(14, 'Gigabyte', '2023-12-11 17:38:05', '2023-12-11 17:38:05'),
(15, 'Xiaomi', '2023-12-11 17:38:05', '2023-12-11 17:38:05');

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
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `imagem_id` bigint(20) UNSIGNED NOT NULL,
  `produto_id` bigint(20) UNSIGNED NOT NULL,
  `imagem_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_30_225301_create_produtos_table', 1),
(6, '2023_12_09_230905_create_fabricante', 1),
(7, '2023_12_09_230927_create_categoria', 1),
(8, '2023_12_09_232931_create_tipo_produto', 1),
(9, '2023_12_09_233154_create_tipo_pagamento', 1),
(10, '2023_12_09_233249_create_cliente', 1),
(11, '2023_12_09_233523_create_pedido', 1),
(12, '2023_12_09_233821_create_pagamento', 1),
(13, '2023_12_09_234128_create_produto', 1),
(14, '2023_12_09_234757_create_imagem', 1),
(15, '2023_12_09_235021_create_pedido_produto', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `pagamento_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_pagamento_id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data_pagamento` datetime NOT NULL,
  `quantidade` int(11) NOT NULL,
  `status_pagamento` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `data_pedido` datetime NOT NULL,
  `preco_total` double(8,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_produto`
--

CREATE TABLE `pedido_produto` (
  `pedido_produto_id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `produto_id` bigint(20) UNSIGNED NOT NULL,
  `quantidade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `produto_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_produto_id` bigint(20) UNSIGNED NOT NULL,
  `fabricante_id` bigint(20) UNSIGNED NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` double(8,2) NOT NULL,
  `vendedor` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`produto_id`, `tipo_produto_id`, `fabricante_id`, `nome_produto`, `sku`, `descricao`, `preco`, `vendedor`, `quantidade`, `data_criacao`, `modelo`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Desktop Gamer Extreme', 'SKU123', 'Potente desktop para jogos de última geração', 1999.99, 'Loja de Tecnologia', 50, '2023-12-11 18:00:00', 'ModeloXYZ', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(2, 2, 2, 'Desktop para Uso Doméstico', 'SKU456', 'Desktop ideal para uso diário em casa', 799.99, 'Loja de Eletrônicos', 30, '2023-12-11 18:05:00', 'ModeloABC', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(3, 1, 3, 'Notebook Profissional Lenovo', 'SKU789', 'Notebook potente para uso profissional', 1499.99, 'Loja de Informática', 20, '2023-12-11 18:10:00', 'Modelo123', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(4, 3, 4, 'Desktop Design Gráfico Dell', 'SKU101', 'Desktop otimizado para design gráfico', 1699.99, 'Loja de Computadores', 25, '2023-12-11 18:15:00', 'Modelo456', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(5, 4, 5, 'Desktop Econômico Acer', 'SKU202', 'Desktop acessível para uso diário', 599.99, 'Loja de Tecnologia', 40, '2023-12-11 18:20:00', 'Modelo789', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(6, 6, 6, 'Notebook Conversível Asus', 'SKU303', 'Notebook versátil com tela conversível', 1299.99, 'Loja de Eletrônicos', 15, '2023-12-11 18:25:00', 'Modelo101', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(7, 7, 7, 'Impressora Laser Monocromática Toshiba', 'SKU404', 'Impressora monocromática de alta qualidade', 299.99, 'Loja de Impressoras', 10, '2023-12-11 18:30:00', 'Modelo202', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(8, 9, 8, 'Impressora Multifuncional Wi-Fi Microsoft', 'SKU505', 'Impressora multifuncional com conectividade sem fio', 349.99, 'Loja de Tecnologia', 18, '2023-12-11 18:35:00', 'Modelo303', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(9, 13, 9, 'Monitor LED Full HD Fujitsu', 'SKU606', 'Monitor de alta definição para experiência visual excepcional', 249.99, 'Loja de Monitores', 22, '2023-12-11 18:40:00', 'Modelo404', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(10, 14, 10, 'Monitor Ultrawide Curvo Samsung', 'SKU707', 'Monitor ultrawide com design curvo para imersão total', 799.99, 'Loja de Tecnologia', 12, '2023-12-11 18:45:00', 'Modelo505', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(11, 5, 11, 'Notebook Leve Sony', 'SKU808', 'Notebook leve e portátil da Sony', 1199.99, 'Loja de Eletrônicos', 25, '2023-12-11 19:00:00', 'Modelo606', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(12, 6, 12, 'Notebook Conversível LG', 'SKU909', 'Notebook conversível da LG com design inovador', 1399.99, 'Loja de Tecnologia', 20, '2023-12-11 19:05:00', 'Modelo707', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(13, 8, 13, 'Impressora Jato de Tinta LG', 'SKU1010', 'Impressora jato de tinta colorida da LG', 179.99, 'Loja de Impressoras', 15, '2023-12-11 19:10:00', 'Modelo808', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(14, 10, 14, 'Impressora de Etiquetas Gigabyte', 'SKU1111', 'Impressora de etiquetas para negócios da Gigabyte', 249.99, 'Loja de Tecnologia', 12, '2023-12-11 19:15:00', 'Modelo909', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(15, 11, 15, 'Monitor 4K Xiaomi', 'SKU1212', 'Monitor 4K para edição de vídeo da Xiaomi', 599.99, 'Loja de Monitores', 18, '2023-12-11 19:20:00', 'Modelo1010', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(16, 12, 1, 'Monitor Curvo Lenovo', 'SKU1313', 'Monitor curvo para jogos da Lenovo', 899.99, 'Loja de Tecnologia', 22, '2023-12-11 19:25:00', 'Modelo1111', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(17, 13, 2, 'Monitor Ultrawide HP Inc.', 'SKU1414', 'Monitor ultrawide para produtividade da HP Inc.', 749.99, 'Loja de Monitores', 15, '2023-12-11 19:30:00', 'Modelo1212', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(18, 14, 3, 'Monitor Gaming Dell', 'SKU1515', 'Monitor curvo para jogos da Dell', 1099.99, 'Loja de Tecnologia', 20, '2023-12-11 19:35:00', 'Modelo1313', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(19, 1, 4, 'Notebook Apple Pro', 'SKU1616', 'Notebook profissional da Apple', 2399.99, 'Loja de Eletrônicos', 10, '2023-12-11 19:40:00', 'Modelo1414', '2023-12-11 22:20:14', '2023-12-11 22:20:14'),
(20, 3, 5, 'Desktop para Design Gráfico Acer', 'SKU1717', 'Desktop otimizado para design gráfico da Acer', 1599.99, 'Loja de Computadores', 18, '2023-12-11 19:45:00', 'Modelo1515', '2023-12-11 22:20:14', '2023-12-11 22:20:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_pagamento`
--

CREATE TABLE `tipo_pagamento` (
  `tipo_pagamento_id` bigint(20) UNSIGNED NOT NULL,
  `nome_tipo_pagamento` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipo_pagamento`
--

INSERT INTO `tipo_pagamento` (`tipo_pagamento_id`, `nome_tipo_pagamento`, `created_at`, `updated_at`) VALUES
(1, 'Transferência Bancária', '2023-12-11 17:45:06', '2023-12-11 17:45:06'),
(2, 'MB WAY', '2023-12-11 17:45:06', '2023-12-11 17:45:06'),
(3, 'Cartão de Crédito/Débito', '2023-12-11 17:45:06', '2023-12-11 17:45:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `tipo_produto_id` bigint(20) UNSIGNED NOT NULL,
  `categoria_id` bigint(20) UNSIGNED NOT NULL,
  `nome_tipo_produto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`tipo_produto_id`, `categoria_id`, `nome_tipo_produto`, `created_at`, `updated_at`) VALUES
(1, 2, 'Desktop de Alta Performance', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(2, 2, 'Desktop para Uso Doméstico', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(3, 2, 'Desktop para Design Gráfico', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(4, 2, 'Desktop de Baixo Custo', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(5, 1, 'Notebook Leve e Portátil', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(6, 1, 'Notebook Conversível (2 em 1)', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(7, 3, 'Impressora Laser Monocromática', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(8, 3, 'Impressora Jato de Tinta Colorida', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(9, 3, 'Impressora Multifuncional Wi-Fi', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(10, 3, 'Impressora de Etiquetas para Negócios', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(11, 4, 'Monitor LED Full HD', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(12, 4, 'Monitor Ultrawide Curvo', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(13, 4, 'Monitor 4K para Edição de Vídeo', '2023-12-11 17:57:14', '2023-12-11 17:57:14'),
(14, 4, 'Monitor Curvo para Jogos', '2023-12-11 17:57:14', '2023-12-11 17:57:14');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Índices para tabela `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`fabricante_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`imagem_id`),
  ADD KEY `imagem_produto_id_foreign` (`produto_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`pagamento_id`),
  ADD KEY `pagamento_tipo_pagamento_id_foreign` (`tipo_pagamento_id`),
  ADD KEY `pagamento_pedido_id_foreign` (`pedido_id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `pedido_cliente_id_foreign` (`cliente_id`);

--
-- Índices para tabela `pedido_produto`
--
ALTER TABLE `pedido_produto`
  ADD PRIMARY KEY (`pedido_produto_id`),
  ADD KEY `pedido_produto_pedido_id_foreign` (`pedido_id`),
  ADD KEY `pedido_produto_produto_id_foreign` (`produto_id`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`),
  ADD KEY `produto_tipo_produto_id_foreign` (`tipo_produto_id`),
  ADD KEY `produto_fabricante_id_foreign` (`fabricante_id`);

--
-- Índices para tabela `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  ADD PRIMARY KEY (`tipo_pagamento_id`);

--
-- Índices para tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`tipo_produto_id`),
  ADD KEY `tipo_produto_categoria_id_foreign` (`categoria_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `fabricante`
--
ALTER TABLE `fabricante`
  MODIFY `fabricante_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `imagem_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `pagamento_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `pedido_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido_produto`
--
ALTER TABLE `pedido_produto`
  MODIFY `pedido_produto_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `produto_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  MODIFY `tipo_pagamento_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `tipo_produto_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `imagem_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`produto_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`pedido_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pagamento_tipo_pagamento_id_foreign` FOREIGN KEY (`tipo_pagamento_id`) REFERENCES `tipo_pagamento` (`tipo_pagamento_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pedido_produto`
--
ALTER TABLE `pedido_produto`
  ADD CONSTRAINT `pedido_produto_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`pedido_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_produto_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`produto_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_fabricante_id_foreign` FOREIGN KEY (`fabricante_id`) REFERENCES `fabricante` (`fabricante_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produto_tipo_produto_id_foreign` FOREIGN KEY (`tipo_produto_id`) REFERENCES `tipo_produto` (`tipo_produto_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD CONSTRAINT `tipo_produto_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
