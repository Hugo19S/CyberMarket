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
(1, 'Laptops', '2024-02-10 20:36:18', '2024-02-10 20:36:18'),
(2, 'Desktops', '2024-02-10 20:36:19', '2024-02-10 20:36:19'),
(3, 'Impressoras', '2024-02-10 20:36:19', '2024-02-10 20:36:19'),
(4, 'Monitores', '2024-02-10 20:36:19', '2024-02-10 20:36:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `nome_cliente` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nif` int(11) DEFAULT NULL,
  `morada` varchar(255) DEFAULT NULL,
  `telemovel` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nome_cliente`, `email`, `nif`, `morada`, `telemovel`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'tony', 'tony@gmail.com', NULL, NULL, NULL, 7, '2024-02-10 21:29:04', '2024-02-10 21:29:04'),
(2, 'Luis Vato', 'lvato@gmail.com', NULL, NULL, NULL, 8, '2024-02-10 21:31:48', '2024-02-10 21:31:48'),
(3, 'pepe', 'pepe@gmail.com', NULL, NULL, NULL, 9, '2024-02-10 22:47:12', '2024-02-10 22:47:12'),
(4, 'jardas', 'jardas@gmail.com', NULL, NULL, NULL, 10, '2024-02-10 22:57:32', '2024-02-10 22:57:32'),
(5, 'jardel', 'jardel@gmail.com', NULL, NULL, NULL, 12, '2024-02-10 23:00:23', '2024-02-10 23:00:23'),
(6, 'falcao', 'falcao@gmail.com', NULL, NULL, NULL, 13, '2024-02-10 23:05:35', '2024-02-10 23:05:35'),
(7, 'ronaldo', 'ronaldo@gmail.com', NULL, NULL, NULL, 14, '2024-02-10 23:06:34', '2024-02-10 23:06:34'),
(8, 'figo', 'figo@gmail.com', NULL, NULL, NULL, 15, '2024-02-10 23:09:00', '2024-02-10 23:09:00'),
(9, 'José Mourinho', 'jm@gmail.com', NULL, NULL, NULL, 16, '2024-02-11 00:26:38', '2024-02-11 00:26:38');

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
(1, 'Lenovo', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(2, 'HP Inc.', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(3, 'Dell Technologies', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(4, 'Apple', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(5, 'Acer', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(6, 'Asus', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(7, 'Toshiba', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(8, 'Microsoft', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(9, 'Fujitsu', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(10, 'Samsung', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(11, 'MSI', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(12, 'Sony', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(13, 'LG', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(14, 'Gigabyte', '2024-02-10 20:36:37', '2024-02-10 20:36:37'),
(15, 'Xiaomi', '2024-02-10 20:36:37', '2024-02-10 20:36:37');

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

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`imagem_id`, `produto_id`, `imagem_url`, `created_at`, `updated_at`) VALUES
(2, 1, '/images/products/p_1.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(3, 2, '/images/products/p_2.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(4, 3, '/images/products/p_3.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(5, 4, '/images/products/p_4.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(6, 5, '/images/products/p_5.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(7, 6, '/images/products/p_6.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(8, 7, '/images/products/p_7.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(9, 8, '/images/products/p_8.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(10, 9, '/images/products/p_9.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(11, 10, '/images/products/p_10.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(12, 11, '/images/products/p_11.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(13, 12, '/images/products/p_12.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(14, 13, '/images/products/p_13.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(15, 14, '/images/products/p_14.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(16, 15, '/images/products/p_15.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(17, 16, '/images/products/p_16.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(18, 17, '/images/products/p_17.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(19, 18, '/images/products/p_18.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(20, 19, '/images/products/p_19.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33'),
(21, 20, '/images/products/p_20.jpg', '2024-02-10 20:37:33', '2024-02-10 20:37:33');

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
(1, '2023_12_09_230905_create_fabricante', 1),
(2, '2023_12_09_230927_create_categoria', 1),
(3, '2023_12_09_232931_create_tipo_produto', 1),
(4, '2023_12_09_233154_create_tipo_pagamento', 1),
(5, '2023_12_09_233249_create_cliente', 1),
(6, '2023_12_09_233523_create_pedido', 1),
(7, '2023_12_09_233821_create_pagamento', 1),
(8, '2023_12_09_234128_create_produto', 1),
(9, '2023_12_09_234757_create_imagem', 1),
(10, '2023_12_09_235021_create_pedido_produto', 1);

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
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `produto_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_produto_id` bigint(20) UNSIGNED NOT NULL,
  `fabricante_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `produto` (`produto_id`, `tipo_produto_id`, `fabricante_id`, `admin_id`, `nome_produto`, `sku`, `descricao`, `preco`, `vendedor`, `quantidade`, `data_criacao`, `modelo`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 'Desktop Gamer Extreme', 'SKU123', 'Potente desktop para jogos de última geração', 1999.99, 'Loja de Tecnologia', 50, '2023-12-11 18:00:00', 'ModeloXYZ', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(2, 2, 2, 1, 'Desktop para Uso Doméstico', 'SKU456', 'Desktop ideal para uso diário em casa', 799.99, 'Loja de Eletrônicos', 30, '2023-12-11 18:05:00', 'ModeloABC', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(3, 1, 3, 1, 'Notebook Profissional Lenovo', 'SKU789', 'Notebook potente para uso profissional', 1499.99, 'Loja de Informática', 20, '2023-12-11 18:10:00', 'Modelo123', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(4, 3, 4, 1, 'Desktop Design Gráfico Dell', 'SKU101', 'Desktop otimizado para design gráfico', 1699.99, 'Loja de Computadores', 25, '2023-12-11 18:15:00', 'Modelo456', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(5, 4, 5, 1, 'Desktop Econômico Acer', 'SKU202', 'Desktop acessível para uso diário', 599.99, 'Loja de Tecnologia', 40, '2023-12-11 18:20:00', 'Modelo789', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(6, 6, 6, 2, 'Notebook Conversível Asus', 'SKU303', 'Notebook versátil com tela conversível', 1299.99, 'Loja de Eletrônicos', 15, '2023-12-11 18:25:00', 'Modelo101', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(7, 7, 7, 2, 'Impressora Laser Monocromática Toshiba', 'SKU404', 'Impressora monocromática de alta qualidade', 299.99, 'Loja de Impressoras', 10, '2023-12-11 18:30:00', 'Modelo202', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(8, 9, 8, 2, 'Impressora Multifuncional Wi-Fi Microsoft', 'SKU505', 'Impressora multifuncional com conectividade sem fio', 349.99, 'Loja de Tecnologia', 18, '2023-12-11 18:35:00', 'Modelo303', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(9, 13, 9, 2, 'Monitor LED Full HD Fujitsu', 'SKU606', 'Monitor de alta definição para experiência visual excepcional', 249.99, 'Loja de Monitores', 22, '2023-12-11 18:40:00', 'Modelo404', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(10, 14, 10, 2, 'Monitor Ultrawide Curvo Samsung', 'SKU707', 'Monitor ultrawide com design curvo para imersão total', 799.99, 'Loja de Tecnologia', 12, '2023-12-11 18:45:00', 'Modelo505', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(11, 5, 11, 2, 'Notebook Leve Sony', 'SKU808', 'Notebook leve e portátil da Sony', 1199.99, 'Loja de Eletrônicos', 25, '2023-12-11 19:00:00', 'Modelo606', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(12, 6, 12, 3, 'Notebook Conversível LG', 'SKU909', 'Notebook conversível da LG com design inovador', 1399.99, 'Loja de Tecnologia', 20, '2023-12-11 19:05:00', 'Modelo707', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(13, 8, 13, 3, 'Impressora Jato de Tinta LG', 'SKU1010', 'Impressora jato de tinta colorida da LG', 179.99, 'Loja de Impressoras', 15, '2023-12-11 19:10:00', 'Modelo808', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(14, 10, 14, 3, 'Impressora de Etiquetas Gigabyte', 'SKU1111', 'Impressora de etiquetas para negócios da Gigabyte', 249.99, 'Loja de Tecnologia', 12, '2023-12-11 19:15:00', 'Modelo909', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(15, 11, 15, 3, 'Monitor 4K Xiaomi', 'SKU1212', 'Monitor 4K para edição de vídeo da Xiaomi', 599.99, 'Loja de Monitores', 18, '2023-12-11 19:20:00', 'Modelo1010', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(16, 12, 1, 3, 'Monitor Curvo Lenovo', 'SKU1313', 'Monitor curvo para jogos da Lenovo', 899.99, 'Loja de Tecnologia', 22, '2023-12-11 19:25:00', 'Modelo1111', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(17, 13, 2, 3, 'Monitor Ultrawide HP Inc.', 'SKU1414', 'Monitor ultrawide para produtividade da HP Inc.', 749.99, 'Loja de Monitores', 15, '2023-12-11 19:30:00', 'Modelo1212', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(18, 14, 3, 3, 'Monitor Gaming Dell', 'SKU1515', 'Monitor curvo para jogos da Dell', 1099.99, 'Loja de Tecnologia', 20, '2023-12-11 19:35:00', 'Modelo1313', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(19, 1, 4, 3, 'Notebook Apple Pro', 'SKU1616', 'Notebook profissional da Apple', 2399.99, 'Loja de Eletrônicos', 10, '2023-12-11 19:40:00', 'Modelo1414', '2024-02-10 20:37:26', '2024-02-10 20:37:26'),
(20, 3, 5, 3, 'Desktop para Design Gráfico Acer', 'SKU1717', 'Desktop otimizado para design gráfico da Acer', 1599.99, 'Loja de Computadores', 18, '2023-12-11 19:45:00', 'Modelo1515', '2024-02-10 20:37:26', '2024-02-10 20:37:26');

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
(1, 'Transferência Bancária', '2024-02-10 20:38:31', '2024-02-10 20:38:31'),
(2, 'MB WAY', '2024-02-10 20:38:31', '2024-02-10 20:38:31'),
(3, 'Cartão de Crédito/Débito', '2024-02-10 20:38:31', '2024-02-10 20:38:31');

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
(1, 2, 'Desktop de Alta Performance', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(2, 2, 'Desktop para Uso Doméstico', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(3, 2, 'Desktop para Design Gráfico', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(4, 2, 'Desktop de Baixo Custo', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(5, 1, 'Notebook Leve e Portátil', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(6, 1, 'Notebook Conversível (2 em 1)', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(7, 3, 'Impressora Laser Monocromática', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(8, 3, 'Impressora Jato de Tinta Colorida', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(9, 3, 'Impressora Multifuncional Wi-Fi', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(10, 3, 'Impressora de Etiquetas para Negócios', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(11, 4, 'Monitor LED Full HD', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(12, 4, 'Monitor Ultrawide Curvo', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(13, 4, 'Monitor 4K para Edição de Vídeo', '2024-02-10 20:37:22', '2024-02-10 20:37:22'),
(14, 4, 'Monitor Curvo para Jogos', '2024-02-10 20:37:22', '2024-02-10 20:37:22');

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
  MODIFY `cliente_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `fabricante`
--
ALTER TABLE `fabricante`
  MODIFY `fabricante_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `imagem_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
