-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2014 at 09:39 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mercadovirtual`
--
CREATE DATABASE IF NOT EXISTS `mercadovirtual` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mercadovirtual`;

-- --------------------------------------------------------

--
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
CREATE TABLE IF NOT EXISTS `cidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `Estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Cidade_Estado_idx` (`Estado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `Pais_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Estado_Pais1_idx` (`Pais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `filial`
--

DROP TABLE IF EXISTS `filial`;
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
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mercado`
--

DROP TABLE IF EXISTS `mercado`;
CREATE TABLE IF NOT EXISTS `mercado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `Cidade_id` int(11) NOT NULL,
  `latitude` int(11) DEFAULT NULL,
  `longitude` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Mercado_Cidade1_idx` (`Cidade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `pais_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `preco`
--

DROP TABLE IF EXISTS `preco`;
CREATE TABLE IF NOT EXISTS `preco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` double DEFAULT NULL,
  `Mercado_id` int(11) NOT NULL,
  `produto_has_marca_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Preco_Mercado1_idx` (`Mercado_id`),
  KEY `produto_has_marca_id` (`produto_has_marca_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  `Quantidade_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `Setor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Produto_Quantidade1_idx` (`Quantidade_id`),
  KEY `fk_Produto_Setor1_idx` (`Setor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `produto_has_marca`
--

DROP TABLE IF EXISTS `produto_has_marca`;
CREATE TABLE IF NOT EXISTS `produto_has_marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Produto_id` int(11) NOT NULL,
  `Marca_id` int(11) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Produto_has_Marca_Marca1_idx` (`Marca_id`),
  KEY `fk_Produto_has_Marca_Produto1_idx` (`Produto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quantidade`
--

DROP TABLE IF EXISTS `quantidade`;
CREATE TABLE IF NOT EXISTS `quantidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peso` double DEFAULT NULL,
  `unidade` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `setor`
--

DROP TABLE IF EXISTS `setor`;
CREATE TABLE IF NOT EXISTS `setor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
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
-- Constraints for table `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_Cidade_Estado` FOREIGN KEY (`Estado_id`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `fk_Estado_Pais1` FOREIGN KEY (`Pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `filial`
--
ALTER TABLE `filial`
  ADD CONSTRAINT `fk_Filial_Cidade1` FOREIGN KEY (`Cidade_id`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Filial_Mercado1` FOREIGN KEY (`Mercado_id`) REFERENCES `mercado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mercado`
--
ALTER TABLE `mercado`
  ADD CONSTRAINT `fk_Mercado_Cidade1` FOREIGN KEY (`Cidade_id`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `preco`
--
ALTER TABLE `preco`
  ADD CONSTRAINT `fk_Preco_Mercado1` FOREIGN KEY (`Mercado_id`) REFERENCES `mercado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `preco_ibfk_1` FOREIGN KEY (`produto_has_marca_id`) REFERENCES `produto_has_marca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_Produto_Quantidade1` FOREIGN KEY (`Quantidade_id`) REFERENCES `quantidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Produto_Setor1` FOREIGN KEY (`Setor_id`) REFERENCES `setor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produto_has_marca`
--
ALTER TABLE `produto_has_marca`
  ADD CONSTRAINT `fk_Produto_has_Marca_Marca1` FOREIGN KEY (`Marca_id`) REFERENCES `marca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Produto_has_Marca_Produto1` FOREIGN KEY (`Produto_id`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_mercado_id` FOREIGN KEY (`mercado_id`) REFERENCES `mercado` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
