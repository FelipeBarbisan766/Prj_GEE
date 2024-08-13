-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/06/2024 às 01:46
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
(8, 'PEDAGÓGICO ', b'1'),
(10, 'LIMPEZA', b'1');

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
(7, 'FELIPE BARBISAN', '123', 'ADM', b'1'),
(8, 'LINIKER TELLES', '007', 'AGENTE', b'1'),
(9, 'LETÍCIA FIGUEIREDO', '01', 'ADM', b'1'),
(11, 'LAISY', '09', 'AGENTE', b'0'),
(12, 'CARMEN SUZANA BARBISAN', '2106', 'AGENTE', b'1'),
(13, 'RAFAEL JOSÉ CASTRO', '123', 'AGENTE', b'1'),
(14, 'FELIPE GALATI', '69', 'ADM', b'0');

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
(158, 'CADERNO', 48, 'CADERNO UNIVERSITÁRIO 100 FOLHAS', 'AZUL', 10, b'0', 6),
(159, 'CANETA', 143, 'CANETA ESFEROGRÁFICA AZUL', 'AZUL', 20, b'1', 6),
(160, 'LÁPIS', 36, 'LÁPIS DE ESCREVER N° 2', 'PRETO', 50, b'1', 6),
(161, 'BORRACHA', 150, 'BORRACHA BRANCA', 'BRANCO', 30, b'1', 6),
(162, 'RÉGUA', 12, 'RÉGUA DE 30 CM', 'TRANSPARENTE', 15, b'1', 6),
(163, 'TESOURA', 57, 'TESOURA SEM PONTA', 'VERMELHO', 10, b'1', 6),
(164, 'COLA', 22, 'COLA BRANCA 90G', 'BRANCO', 25, b'1', 6),
(165, 'APONTADOR', 95, 'APONTADOR SIMPLES', 'VERDE', 20, b'1', 6),
(166, 'TESOURA SEM PONTA', 10, 'TESOURA DO GOVERNOS SEM PONTA ', 'PRETO', 5, b'1', 6),
(167, 'ESTOJO', 90, 'ESTOJO ESCOLAR', 'AZUL', 15, b'1', 6),
(168, 'LAPISEIRA', 70, 'LAPISEIRA 0.7MM', 'PRETO', 20, b'1', 6),
(169, 'CORRETIVO', 50, 'CORRETIVO LÍQUIDO', 'BRANCO', 10, b'1', 6),
(170, 'GIZ DE CERA', 100, 'GIZ DE CERA 12 CORES', 'MULTICOLORIDO', 25, b'1', 6),
(171, 'PAPEL SULFITE', 200, 'PAPEL SULFITE A4', 'BRANCO', 50, b'1', 6),
(172, 'PASTA', 9, 'PASTA CATÁLOGO', 'VERMELHO', 10, b'1', 6),
(173, 'CALCULADORA', 0, 'CALCULADORA BÁSICA', 'PRETO', 8, b'1', 6),
(174, 'TRANSFERIDOR', 14, 'TRANSFERIDOR 180°', 'TRANSPARENTE', 15, b'1', 6),
(175, 'COMPASSO', 7, 'COMPASSO ESCOLAR', 'PRATA', 10, b'1', 6),
(176, 'BLOCO DE ANOTAÇÕES', 100, 'BLOCO DE ANOTAÇÕES ADESIVAS', 'AMARELO', 20, b'1', 6),
(177, 'PINCEL', 70, 'PINCEL ESCOLAR', 'MARROM', 15, b'0', 6),
(178, 'TINTA GUACHE', 0, 'TINTA GUACHE 12 CORES', 'MULTICOLORIDO', 18, b'1', 6),
(179, 'CLIPS', 200, 'CLIPS DE PAPEL', 'PRATA', 50, b'1', 6),
(180, 'GRAMPEADOR', 40, 'GRAMPEADOR PEQUENO', 'PRETO', 8, b'1', 6),
(181, 'GRAMPO', 455, 'GRAMPO 26/6', 'PRATA', 100, b'1', 6),
(182, 'PAPEL CONTACT', 0, 'PAPEL CONTACT TRANSPARENTE', 'TRANSPARENTE', 10, b'1', 6),
(183, 'CADERNO DE DESENHO', 30, 'CADERNO DE DESENHO 96 FOLHAS', 'BRANCO', 6, b'1', 6),
(184, 'MARCADOR', 70, 'MARCADOR PERMANENTE', 'PRETO', 15, b'1', 6),
(185, 'CANETINHA', 100, 'CANETINHA HIDROCOR 12 CORES', 'MULTICOLORIDO', 20, b'1', 6),
(186, 'ENVELOPE', 0, 'ENVELOPE A4', 'AMARELO', 50, b'1', 6),
(187, 'PAPEL CARTÃO', 50, 'PAPEL CARTÃO COLORIDO', 'MULTICOLORIDO', 10, b'1', 6),
(188, 'ÁLCOOL EM GEL', 100, 'ÁLCOOL EM GEL 70%', 'TRANSPARENTE', 20, b'1', 7),
(189, 'SABONETE LÍQUIDO', 80, 'SABONETE LÍQUIDO ANTIBACTERIANO', 'BRANCO', 15, b'1', 7),
(190, 'TOALHAS UMEDECIDAS', 120, 'TOALHAS UMEDECIDAS INFANTIS', 'BRANCO', 30, b'1', 7),
(191, 'PAPEL HIGIÊNICO', 192, 'PAPEL HIGIÊNICO FOLHA DUPLA', 'BRANCO', 50, b'1', 7),
(192, 'LENÇOS DE PAPEL', 120, 'LENÇOS DE PAPEL CAIXA', 'BRANCO', 25, b'1', 7),
(193, 'ALFABETO MÓVEL', 50, 'ALFABETO MÓVEL EM MADEIRA', 'MULTICOLORIDO', 10, b'1', 8),
(194, 'NÚMEROS MÓVEIS', 50, 'NÚMEROS MÓVEIS EM MADEIRA', 'MULTICOLORIDO', 10, b'1', 8),
(195, 'PAINEL PEDAGÓGICO', 20, 'PAINEL PEDAGÓGICO PARA CONTAR HISTÓRIAS', 'COLORIDO', 5, b'1', 8),
(196, 'JOGO DA MEMÓRIA', 0, 'JOGO DA MEMÓRIA INFANTIL', 'MULTICOLORIDO', 15, b'0', 8),
(197, 'QUEBRA-CABEÇA', 60, 'QUEBRA-CABEÇA EDUCATIVO', 'MULTICOLORIDO', 10, b'1', 8),
(198, 'DOMINÓ PEDAGÓGICO', 80, 'DOMINÓ DE LETRAS E NÚMEROS', 'BRANCO E PRETO', 20, b'1', 8),
(199, 'FLASHCARDS', 90, 'FLASHCARDS EDUCATIVOS', 'MULTICOLORIDO', 18, b'0', 8),
(200, 'LIVRO DIDÁTICO', 40, 'LIVRO DIDÁTICO INFANTIL', 'COLORIDO', 8, b'1', 8),
(201, 'ATLAS ESCOLAR', 30, 'ATLAS ESCOLAR GEOGRÁFICO', 'COLORIDO', 5, b'1', 8),
(202, 'POSTER EDUCATIVO', 100, 'POSTER EDUCATIVO INFANTIL', 'MULTICOLORIDO', 25, b'1', 8),
(203, 'LÁPIS', 5, '', 'ROSA', 0, b'1', 6),
(206, 'GIZ (CAIXA)', 4, 'CAIXA DE GIZ DE LOUSA', 'BRANCO', 4, b'1', 6);

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
(96, 7, 159, '2024-06-20 20:41:00', 20, 'Retirado'),
(97, 7, 165, '2024-06-20 20:41:00', 5, 'Retirado'),
(98, 7, 160, '2024-06-21 07:53:00', 25, 'Adicionado'),
(99, 7, 160, '2024-06-21 07:53:00', 20, 'Retirado'),
(101, 7, 159, '2024-06-21 09:58:00', 10, 'Adicionado'),
(102, 8, 160, '2024-06-21 16:34:00', 20, 'Retirado'),
(103, 9, 181, '2024-06-21 16:34:00', 40, 'Retirado'),
(104, 9, 190, '2024-06-21 16:35:00', 30, 'Retirado'),
(105, 9, 163, '2024-06-21 16:35:00', 3, 'Retirado'),
(106, 13, 206, '2024-06-21 16:35:00', 3, 'Retirado'),
(107, 13, 191, '2024-06-21 16:36:00', 8, 'Retirado'),
(108, 13, 173, '2024-06-21 16:36:00', 7, 'Retirado');

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
  MODIFY `cat_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `fun_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `pro_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `reg_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

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
