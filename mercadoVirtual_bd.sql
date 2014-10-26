-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Out-2014 às 00:04
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `mercadovirtual`
--
CREATE DATABASE IF NOT EXISTS `mercadovirtual` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mercadovirtual`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `Estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Cidade_Estado_idx` (`Estado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`, `Estado_id`) VALUES
(1, 'São Paulo', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `Pais_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Estado_Pais1_idx` (`Pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id`, `nome`, `Pais_id`) VALUES
(1, 'São Paulo', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filial`
--

CREATE TABLE IF NOT EXISTS `filial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `Cidade_id` int(11) NOT NULL,
  `Mercado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Filial_Cidade1_idx` (`Cidade_id`),
  KEY `fk_Filial_Mercado1_idx` (`Mercado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`id`, `descricao`) VALUES
(1, 'Ype'),
(2, 'Turma da Mônica'),
(3, 'João'),
(4, 'Danone'),
(5, 'Toddy'),
(6, 'Coca Cola'),
(7, 'Big Bom'),
(8, 'Assim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercado`
--

CREATE TABLE IF NOT EXISTS `mercado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `Cidade_id` int(11) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Mercado_Cidade1_idx` (`Cidade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `mercado`
--

INSERT INTO `mercado` (`id`, `nome`, `endereco`, `Cidade_id`, `latitude`, `longitude`) VALUES
(1, 'Big Bom Supermercado', 'Avenida Brasília, 1950 - Vila Zanetti', 1, '-21.9799920', '-46.7853860'),
(2, 'Sempre Vale Supermercados', 'Avenida Rodrigues Alves, 606 - Rosário', 1, '-21.9618050', '-46.7985630'),
(3, 'Supermercado Ideal', 'Rua Capitão Joaquim Rabelo de Andrade, 225 - Santa Terezinha', 1, '-21.7074010', '-46.8170370'),
(4, 'Supermercado Guimarães Teixeira', 'Rua Família Romano, 319 - Jardim América', 1, '-21.7647610', '-47.0918740');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `pais_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`id`, `nome`, `pais_name`) VALUES
(1, 'Brasil', 'Brazil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `preco`
--

CREATE TABLE IF NOT EXISTS `preco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` double DEFAULT NULL,
  `Mercado_id` int(11) NOT NULL,
  `produto_has_marca_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Preco_Mercado1_idx` (`Mercado_id`),
  KEY `produto_has_marca_id` (`produto_has_marca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `preco`
--

INSERT INTO `preco` (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES
(1, 4.99, 1, 3),
(2, 5.99, 1, 1),
(3, 0.99, 1, 4),
(4, 8, 1, 2),
(5, 4.89, 2, 3),
(6, 6.09, 2, 1),
(7, 0.88, 2, 4),
(8, 7, 2, 2),
(9, 4.69, 3, 3),
(10, 5.09, 3, 1),
(11, 1.88, 3, 4),
(12, 8, 3, 2),
(13, 2.69, 4, 3),
(14, 1.09, 4, 1),
(15, 3.88, 4, 4),
(16, 9, 4, 2),
(17, 3.99, 2, 5),
(18, 4.79, 2, 6),
(19, 4.98, 1, 7),
(20, 3.67, 1, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  `Quantidade_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `Setor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Produto_Quantidade1_idx` (`Quantidade_id`),
  KEY `fk_Produto_Setor1_idx` (`Setor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `descricao`, `Quantidade_id`, `status`, `Setor_id`) VALUES
(1, 'Arroz', 1, 1, 1),
(2, 'Detergente', 4, 1, 2),
(3, 'Iorgute', 3, 0, 3),
(4, 'Maça', 2, 1, 1),
(5, 'Achocolatado em pó', 5, 0, 1),
(6, 'Refrigerante', 6, 0, 1),
(7, 'Café', 7, 0, 1),
(8, 'Sabão em pó', 1, 0, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_has_marca`
--

CREATE TABLE IF NOT EXISTS `produto_has_marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Produto_id` int(11) NOT NULL,
  `Marca_id` int(11) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Produto_has_Marca_Marca1_idx` (`Marca_id`),
  KEY `fk_Produto_has_Marca_Produto1_idx` (`Produto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `produto_has_marca`
--

INSERT INTO `produto_has_marca` (`id`, `Produto_id`, `Marca_id`, `img`) VALUES
(1, 1, 3, NULL),
(2, 2, 1, NULL),
(3, 3, 4, NULL),
(4, 4, 2, NULL),
(5, 5, 5, NULL),
(6, 6, 6, NULL),
(7, 7, 7, NULL),
(8, 8, 8, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quantidade`
--

CREATE TABLE IF NOT EXISTS `quantidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peso` double DEFAULT NULL,
  `unidade` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `quantidade`
--

INSERT INTO `quantidade` (`id`, `peso`, `unidade`) VALUES
(1, 1, 'Kg'),
(2, 100, 'g'),
(3, 1, 'L'),
(4, 100, 'mL'),
(5, 400, 'g'),
(6, 2, 'L'),
(7, 500, 'g');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE IF NOT EXISTS `setor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id`, `descricao`) VALUES
(1, 'Alimentício'),
(2, 'Limpezas em Geral'),
(3, 'Congelados'),
(4, 'HortiFruti');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `mercado_id` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  KEY `mercado_id` (`mercado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_Cidade_Estado` FOREIGN KEY (`Estado_id`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `fk_Estado_Pais1` FOREIGN KEY (`Pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `filial`
--
ALTER TABLE `filial`
  ADD CONSTRAINT `fk_Filial_Cidade1` FOREIGN KEY (`Cidade_id`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Filial_Mercado1` FOREIGN KEY (`Mercado_id`) REFERENCES `mercado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `mercado`
--
ALTER TABLE `mercado`
  ADD CONSTRAINT `fk_Mercado_Cidade1` FOREIGN KEY (`Cidade_id`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `preco`
--
ALTER TABLE `preco`
  ADD CONSTRAINT `fk_Preco_Mercado1` FOREIGN KEY (`Mercado_id`) REFERENCES `mercado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `preco_ibfk_1` FOREIGN KEY (`produto_has_marca_id`) REFERENCES `produto_has_marca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_Produto_Quantidade1` FOREIGN KEY (`Quantidade_id`) REFERENCES `quantidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Produto_Setor1` FOREIGN KEY (`Setor_id`) REFERENCES `setor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto_has_marca`
--
ALTER TABLE `produto_has_marca`
  ADD CONSTRAINT `fk_Produto_has_Marca_Marca1` FOREIGN KEY (`Marca_id`) REFERENCES `marca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Produto_has_Marca_Produto1` FOREIGN KEY (`Produto_id`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_mercado_id` FOREIGN KEY (`mercado_id`) REFERENCES `mercado` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
