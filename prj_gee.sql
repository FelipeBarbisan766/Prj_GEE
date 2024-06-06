-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/06/2024 às 00:30
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
-- Banco de dados: `prj_gee`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `cat_cod` int(11) NOT NULL,
  `cat_nome` varchar(25) NOT NULL,
  `cat_IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`cat_cod`, `cat_nome`, `cat_IsActive`) VALUES
(6, 'ESCRITORIO', b'1'),
(7, 'HIGIENE', b'1'),
(8, 'PEDAGóGICO ', b'1'),
(9, 'MURILO', b'1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `fun_cod` int(11) NOT NULL,
  `fun_nome` varchar(50) NOT NULL,
  `fun_senha` varchar(10) NOT NULL,
  `fun_cargo` varchar(20) NOT NULL,
  `fun_IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`fun_cod`, `fun_nome`, `fun_senha`, `fun_cargo`, `fun_IsActive`) VALUES
(1, 'TESTE', '123', 'ADM', b'1'),
(2, 'LETICIA', '07', 'AGENTE', b'1'),
(3, 'LINIKER', '79', 'AGENTE', b'1'),
(4, 'MURILO', '69', 'AGENTE', b'1'),
(5, 'RAFAEL', '124', 'AGENTE', b'1'),
(6, 'LUCIANO', '123', 'AGENTE', b'1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `pro_cod` int(11) NOT NULL,
  `pro_nome` varchar(20) NOT NULL,
  `pro_quant` int(11) NOT NULL,
  `pro_descricao` varchar(100) DEFAULT NULL,
  `pro_cor` varchar(30) DEFAULT NULL,
  `pro_limite` int(11) DEFAULT 20,
  `pro_IsActive` bit(1) NOT NULL,
  `cat_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`pro_cod`, `pro_nome`, `pro_quant`, `pro_descricao`, `pro_cor`, `pro_limite`, `pro_IsActive`, `cat_cod`) VALUES
(26, 'CANETA', 110, 'CANETA ESFEROGRAFICA', 'AZUL', 20, b'1', 6),
(27, 'PAPEL', 140, 'PAPEL A4', 'BRANCO', 20, b'1', 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro`
--

CREATE TABLE `registro` (
  `reg_num` int(11) NOT NULL,
  `fun_cod` int(11) NOT NULL,
  `pro_cod` int(11) NOT NULL,
  `reg_data` datetime NOT NULL,
  `reg_quant` int(11) NOT NULL,
  `reg_tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `registro`
--

INSERT INTO `registro` (`reg_num`, `fun_cod`, `pro_cod`, `reg_data`, `reg_quant`, `reg_tipo`) VALUES
(38, 1, 26, '2024-05-25 02:07:51', 20, 'Retirada'),
(39, 1, 26, '2024-06-04 00:51:36', 30, 'Retirada'),
(40, 1, 26, '2024-06-04 00:55:04', 7, 'Retirada'),
(41, 1, 26, '2024-06-03 19:58:00', 5, 'Retirada'),
(42, 1, 26, '2024-06-03 20:19:00', 15, 'Retirada'),
(43, 1, 26, '2024-06-03 20:22:00', 7, 'Retirada'),
(44, 1, 27, '2024-06-03 21:10:00', 40, 'Retirado'),
(45, 6, 27, '2024-06-03 21:12:00', 20, 'Retirado'),
(46, 3, 26, '2024-06-03 21:45:00', 0, 'Retirado'),
(47, 3, 26, '2024-06-03 21:45:00', 0, 'Retirado'),
(48, 3, 26, '2024-06-03 21:49:00', 20, 'Retirado'),
(49, 3, 26, '2024-06-03 21:52:00', 20, 'Retirado'),
(50, 3, 26, '2024-06-03 21:52:00', 20, 'Adicionado');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_cod`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`fun_cod`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`pro_cod`),
  ADD KEY `cat_cod` (`cat_cod`);

--
-- Índices de tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`reg_num`),
  ADD KEY `fun_cod` (`fun_cod`),
  ADD KEY `pro_cod` (`pro_cod`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `fun_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `pro_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `reg_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`cat_cod`) REFERENCES `categoria` (`cat_cod`);

--
-- Restrições para tabelas `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`fun_cod`) REFERENCES `funcionario` (`fun_cod`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`pro_cod`) REFERENCES `produto` (`pro_cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
