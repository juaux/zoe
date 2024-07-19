-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 17/07/2024 às 01:39
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `zoe`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_alunos`
--

CREATE TABLE `cad_alunos` (
  `id` int NOT NULL,
  `curso` text NOT NULL,
  `data` text NOT NULL,
  `nome` text NOT NULL,
  `data_nasc` text NOT NULL,
  `idade` text NOT NULL,
  `rg` text NOT NULL,
  `cpf` text NOT NULL,
  `cep` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `endereco` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bairro` text NOT NULL,
  `cidade` text NOT NULL,
  `uf` text NOT NULL,
  `telefone` text NOT NULL,
  `email` text NOT NULL,
  `nome_pai` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nome_mae` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `responsavel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `responsavel_tel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senha` text NOT NULL,
  `senha_rec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `cad_alunos`
--

INSERT INTO `cad_alunos` (`id`, `curso`, `data`, `nome`, `data_nasc`, `idade`, `rg`, `cpf`, `cep`, `endereco`, `bairro`, `cidade`, `uf`, `telefone`, `email`, `nome_pai`, `nome_mae`, `responsavel`, `responsavel_tel`, `senha`, `senha_rec`) VALUES
(12, 'Informatica', '18061970', 'juauxis@gmail.com', '', '', '', '', '41310-160', 'Rua Martacênia, 106E', '', 'Salvador', '', '7187291834', 'juauxis@gmail.com', 'João de Sousa Castro Junior', 'João de Sousa Castro Junior', 'João de Sousa Castro Junior', '7187291834', 'd41d8cd98f00b204e9800998ecf8427e', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cad_alunos`
--
ALTER TABLE `cad_alunos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_alunos`
--
ALTER TABLE `cad_alunos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
