-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Mar-2014 às 03:46
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siels`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chapa`
--

CREATE TABLE IF NOT EXISTS `chapa` (
  `id_chapa` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_idusuario` int(10) unsigned NOT NULL,
  `nome_chapa` varchar(45) DEFAULT NULL,
  `numero_chapa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_chapa`),
  KEY `chapa_FKIndex1` (`usuario_idusuario`),
  KEY `usuario_idusuario` (`usuario_idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `chapa`
--

INSERT INTO `chapa` (`id_chapa`, `usuario_idusuario`, `nome_chapa`, `numero_chapa`) VALUES
(1, 2, 'vamos', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eleitor`
--

CREATE TABLE IF NOT EXISTS `eleitor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_idusuario` int(10) unsigned NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `rg` int(10) unsigned DEFAULT NULL,
  `cpf` varchar(17) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`usuario_idusuario`),
  KEY `eleitor_FKIndex1` (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_idusuario` int(10) unsigned NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`,`usuario_idusuario`),
  KEY `login_FKIndex1` (`usuario_idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `usuario_idusuario`, `usuario`, `senha`, `status`) VALUES
(1, 8, 'ruana.tamir', '123', 2),
(2, 2, 'sales.jefferson', '123', 1),
(4, 8, 'eu', '123', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado`
--

CREATE TABLE IF NOT EXISTS `resultado` (
  `idresu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chapa_id_chapa` int(10) unsigned NOT NULL,
  `chapa_usuario_idusuario` int(10) unsigned NOT NULL,
  `voto_Nulo` int(10) unsigned DEFAULT NULL,
  `voto_Branco` int(10) unsigned DEFAULT NULL,
  `voto_Total` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idresu`,`chapa_id_chapa`,`chapa_usuario_idusuario`),
  KEY `resultado_FKIndex1` (`chapa_id_chapa`,`chapa_usuario_idusuario`),
  KEY `chapa_usuario_idusuario` (`chapa_usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `rg` int(10) unsigned DEFAULT NULL,
  `cpf` varchar(17) DEFAULT NULL,
  `perfil` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `rg`, `cpf`, `perfil`) VALUES
(2, 'jefferson', 0, '00000000', 2),
(8, 'tamires', 12662304, '807.234.381-53', 1),
(9, 'jefferson', 0, '037.005.391-50', 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `chapa`
--
ALTER TABLE `chapa`
  ADD CONSTRAINT `chapa_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `eleitor`
--
ALTER TABLE `eleitor`
  ADD CONSTRAINT `eleitor_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `resultado_ibfk_1` FOREIGN KEY (`chapa_id_chapa`) REFERENCES `chapa` (`id_chapa`),
  ADD CONSTRAINT `resultado_ibfk_2` FOREIGN KEY (`chapa_usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
