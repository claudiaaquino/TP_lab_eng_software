-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2016 at 02:56 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_abasteceagora`
--

-- --------------------------------------------------------

--
-- Table structure for table `fuels`
--

CREATE TABLE `fuels` (
  `id` int(10) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuels`
--

INSERT INTO `fuels` (`id`, `descricao`, `dt_cadastro`, `dt_modificado`, `status`) VALUES
(1, 'Gasolina', '2016-10-13 04:05:28', '2016-10-13 04:05:28', 1),
(2, 'Diesel', '2016-10-13 04:05:38', '2016-10-13 04:05:38', 1),
(3, 'Alcool ', '2016-10-13 04:05:48', '2016-10-13 04:05:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `historico_abastecimentos`
--

CREATE TABLE `historico_abastecimentos` (
  `id` int(10) NOT NULL,
  `veiculo_id` int(10) NOT NULL,
  `historico_preco_id` int(10) NOT NULL,
  `litros` float NOT NULL,
  `valor_total` float NOT NULL,
  `km_atual` int(10) DEFAULT NULL,
  `consumo_ult_abastecimento` float DEFAULT NULL,
  `avaliacao_posto` int(2) DEFAULT NULL,
  `dt_abastecimento` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historico_abastecimentos`
--

INSERT INTO `historico_abastecimentos` (`id`, `veiculo_id`, `historico_preco_id`, `litros`, `valor_total`, `km_atual`, `consumo_ult_abastecimento`, `avaliacao_posto`, `dt_abastecimento`, `status`) VALUES
(1, 1, 1, 15, 15, NULL, NULL, NULL, '2016-10-13 04:16:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `historico_precos`
--

CREATE TABLE `historico_precos` (
  `id` int(10) NOT NULL,
  `posto_id` int(10) NOT NULL,
  `fuel_id` int(10) NOT NULL,
  `preco_litro` double NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historico_precos`
--

INSERT INTO `historico_precos` (`id`, `posto_id`, `fuel_id`, `preco_litro`, `dt_cadastro`, `status`) VALUES
(1, 1, 1, 3.25, '2016-10-13 04:12:50', 1),
(2, 1, 1, 3.27, '2016-10-13 04:13:06', 1),
(3, 1, 2, 2.5, '2016-10-13 04:13:16', 1),
(4, 1, 3, 2.8, '2016-10-13 04:13:24', 1),
(5, 2, 1, 3.3, '2016-10-13 04:13:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modelos`
--

CREATE TABLE `modelos` (
  `id` int(10) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modelos`
--

INSERT INTO `modelos` (`id`, `descricao`, `dt_cadastro`, `dt_modificado`, `status`) VALUES
(1, 'Novo Pálio', '2016-10-13 04:02:14', '2016-10-13 04:02:14', 1),
(2, 'Smart', '2016-10-13 04:02:43', '2016-10-13 04:02:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pagamento_formas`
--

CREATE TABLE `pagamento_formas` (
  `id` int(10) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `postos`
--

CREATE TABLE `postos` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `dt_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postos`
--

INSERT INTO `postos` (`id`, `nome`, `endereco`, `dt_cadastro`, `dt_modificado`, `status`) VALUES
(1, 'Posto 1', 'qualquer endereço para cadastrar', '2016-10-13 04:10:48', '2016-10-13 04:10:48', 1),
(2, 'Posto 2', 'algum endereço qualquer', '2016-10-13 04:11:05', '2016-10-13 04:11:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posto_fuels`
--

CREATE TABLE `posto_fuels` (
  `id` int(10) NOT NULL,
  `posto_id` int(10) NOT NULL,
  `fuel_id` int(10) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posto_fuels`
--

INSERT INTO `posto_fuels` (`id`, `posto_id`, `fuel_id`, `dt_cadastro`, `status`) VALUES
(1, 1, 1, NULL, 1),
(2, 1, 2, NULL, 1),
(3, 1, 3, NULL, 1),
(4, 2, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posto_pagamento_formas`
--

CREATE TABLE `posto_pagamento_formas` (
  `id` int(10) NOT NULL,
  `posto_id` int(10) NOT NULL,
  `pagamento_forma_id` int(10) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `dt_nascimento`, `email`, `last_login`, `last_update`, `status`) VALUES
(1, 'claudia', '$2y$10$AJptMLF/Yv2sUEbFuQm8G..OT.CbsJ1vhuiNdXgEF8brUNwQDkj5.', '1992-04-02', 'claudiavieiraaquino@hotmail.com', NULL, '2016-10-13 02:58:33', 1),
(2, 'larissa', '$2y$10$F9uDYmRLcV1e.VuTnsrMYuTB3zzzrLpPTX18aJatptGq3cLAaDuAa', '2016-10-13', 'larissa@teste.com', NULL, '2016-10-13 03:37:32', 1),
(3, 'liberio', '$2y$10$1JWDztX.ouL8PhKXlE7IWuHXYXJLLn99ZMLtYnSZjwCxbeEwsDbtm', '2016-10-13', 'liberio@teste.com', NULL, '2016-10-13 03:38:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `modelo_id` int(10) NOT NULL,
  `ano` int(4) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `veiculos`
--

INSERT INTO `veiculos` (`id`, `user_id`, `modelo_id`, `ano`, `placa`, `dt_cadastro`, `dt_modificado`, `status`) VALUES
(1, 1, 1, 2013, 'hgf-1354', '2016-10-13 04:03:21', '2016-10-13 04:03:21', 1),
(2, 1, 2, 2016, 'cau-0225', '2016-10-13 04:03:53', '2016-10-13 04:03:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `veiculo_fuels`
--

CREATE TABLE `veiculo_fuels` (
  `id` int(10) NOT NULL,
  `veiculo_id` int(10) NOT NULL,
  `fuel_id` int(10) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `veiculo_fuels`
--

INSERT INTO `veiculo_fuels` (`id`, `veiculo_id`, `fuel_id`, `dt_cadastro`, `status`) VALUES
(1, 1, 1, '2016-10-13 04:08:02', 1),
(2, 1, 2, '2016-10-13 04:08:09', 1),
(3, 2, 1, '2016-10-13 04:08:55', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historico_abastecimentos`
--
ALTER TABLE `historico_abastecimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historico_precos`
--
ALTER TABLE `historico_precos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagamento_formas`
--
ALTER TABLE `pagamento_formas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postos`
--
ALTER TABLE `postos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posto_fuels`
--
ALTER TABLE `posto_fuels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posto_pagamento_formas`
--
ALTER TABLE `posto_pagamento_formas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veiculo_fuels`
--
ALTER TABLE `veiculo_fuels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `historico_abastecimentos`
--
ALTER TABLE `historico_abastecimentos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `historico_precos`
--
ALTER TABLE `historico_precos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pagamento_formas`
--
ALTER TABLE `pagamento_formas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postos`
--
ALTER TABLE `postos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posto_fuels`
--
ALTER TABLE `posto_fuels`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posto_pagamento_formas`
--
ALTER TABLE `posto_pagamento_formas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `veiculo_fuels`
--
ALTER TABLE `veiculo_fuels`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
