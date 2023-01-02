-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jan-2023 às 00:34
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produtos_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_tb`
--

CREATE TABLE `produtos_tb` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und_produto` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_produto` int(11) NOT NULL,
  `codigo_produto` int(11) NOT NULL,
  `localizacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos_tb`
--

INSERT INTO `produtos_tb` (`id_produto`, `nome_produto`, `und_produto`, `qtd_produto`, `codigo_produto`, `localizacao`) VALUES
(10, 'produto', 'pct', 10, 123456, 20),
(11, 'produto', 'pct', 10, 123, 35),
(12, 'zzzzz', 'zzzzz', 10, 123456, 132);

-- --------------------------------------------------------

--
-- Estrutura da tabela `retirada_tb`
--

CREATE TABLE `retirada_tb` (
  `id_retirada` int(11) NOT NULL,
  `nome_produto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und_produto` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_produto` int(11) NOT NULL,
  `codigo_produto` int(11) NOT NULL,
  `centroCusto` int(11) NOT NULL,
  `data` date NOT NULL,
  `numeroRequisicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos_tb`
--
ALTER TABLE `produtos_tb`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `retirada_tb`
--
ALTER TABLE `retirada_tb`
  ADD PRIMARY KEY (`id_retirada`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos_tb`
--
ALTER TABLE `produtos_tb`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `retirada_tb`
--
ALTER TABLE `retirada_tb`
  MODIFY `id_retirada` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
