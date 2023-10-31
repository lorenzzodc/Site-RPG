-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Out-2023 às 21:10
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rpg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `monstros`
--

CREATE TABLE `monstros` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pv` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `resistencias` varchar(255) NOT NULL,
  `imunidades` varchar(255) NOT NULL,
  `fraquezas` varchar(255) DEFAULT NULL,
  `loot` varchar(255) NOT NULL,
  `nome_imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `monstros`
--

INSERT INTO `monstros` (`id`, `nome`, `pv`, `ac`, `resistencias`, `imunidades`, `fraquezas`, `loot`, `nome_imagem`) VALUES
(9, 'Katakan', 135, 13, 'necrótico', 'veneno', 'Radiante', 'presas de vampiro', '../public/7e5cb0f94cd7c21b1841b91da60db14f.jpg'),
(10, 'Nazistão do Senac', 420, 69, 'petistas', 'choro de queima rosca', 'ordem da mulher', 'dividas no cartão de crédito', '../public/08776705b889b1ec5d0bf6af9e700567.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `npc`
--

CREATE TABLE `npc` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ac` int(11) NOT NULL,
  `pv` int(11) NOT NULL,
  `raça` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `npc`
--

INSERT INTO `npc` (`id`, `nome`, `ac`, `pv`, `raça`, `descricao`) VALUES
(2, 'Olrlof', 13, 255, 'Gigante de gelo', 'Gigante de 15 m de altura, cabelos brancos, barba branca, usa um porete'),
(3, 'Jahlyn Rabei', 13, 40, 'Homem Lagarto', ' Este Paladino é um campeão do Deus da Guerra, dedicado a proteger os fracos, promover a justiça e liderar exércitos em batalha. Ele jurou sua vida ao serviço do seu deus e segue um código de conduta rigoroso que enfatiza a honra e a lealdade. O Paladino é frequentemente visto liderando exércitos em campanhas militares, lutando contra as forças das trevas e defendendo os inocentes.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(5, '1', 'GM@gm.com.br', 'c4d0e354ff1b28034f036dab412b64d2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `monstros`
--
ALTER TABLE `monstros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `npc`
--
ALTER TABLE `npc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `monstros`
--
ALTER TABLE `monstros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `npc`
--
ALTER TABLE `npc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
