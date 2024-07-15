-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13/07/2024 às 02:28
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
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int NOT NULL,
  `curso` int NOT NULL,
  `data` int NOT NULL,
  `nome` int NOT NULL,
  `datanasc` int NOT NULL,
  `idade` int NOT NULL,
  `rg` int NOT NULL,
  `cpf` int NOT NULL,
  `cp` int NOT NULL,
  `end` int NOT NULL,
  `bairro` int NOT NULL,
  `cidade` int NOT NULL,
  `uf` int NOT NULL,
  `telefone` int NOT NULL,
  `email` int NOT NULL,
  `nomepai` int NOT NULL,
  `nomemae` int NOT NULL,
  `resp` int NOT NULL,
  `telresp` int NOT NULL,
  `senha` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
