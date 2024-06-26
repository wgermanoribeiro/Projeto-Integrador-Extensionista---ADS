-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2024 às 03:57
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoads`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastrogames`
--

CREATE TABLE `cadastrogames` (
  `idJogo` int(11) NOT NULL,
  `nomeJogo` varchar(45) DEFAULT NULL,
  `produtora` varchar(45) DEFAULT NULL,
  `anoLancamento` varchar(45) DEFAULT NULL,
  `generoJogo` varchar(45) DEFAULT NULL,
  `consolesDisponiveis` varchar(45) DEFAULT NULL,
  `jogadoresSimultaneos` varchar(45) DEFAULT NULL,
  `finalizado` varchar(45) DEFAULT NULL,
  `imagem` longblob DEFAULT NULL,
  `linkVideo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastrogames`
--

INSERT INTO `cadastrogames` (`idJogo`, `nomeJogo`, `produtora`, `anoLancamento`, `generoJogo`, `consolesDisponiveis`, `jogadoresSimultaneos`, `finalizado`, `imagem`, `linkVideo`) VALUES
(11, 'Super Mario Bros', 'Nintendo', '1985', 'Aventura', 'Nintendinho', '1 Jogador', 'Sim', NULL, 'https://www.youtube.com/watch?v=hrNaaV64phk');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastrogames`
--
ALTER TABLE `cadastrogames`
  ADD PRIMARY KEY (`idJogo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrogames`
--
ALTER TABLE `cadastrogames`
  MODIFY `idJogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
