-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2014 at 11:21 PM
-- Server version: 5.5.40
-- PHP Version: 5.4.4-14+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siges`
--

-- --------------------------------------------------------

--
-- Table structure for table `gerencia`
--

CREATE TABLE IF NOT EXISTS `gerencia` (
  `cod_setorg` int(255) NOT NULL,
  `id_sala` int(255) NOT NULL,
  KEY `cod_setorg` (`cod_setorg`),
  KEY `id_sala` (`id_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modera`
--

CREATE TABLE IF NOT EXISTS `modera` (
  `cpf_usuario` varchar(100) NOT NULL,
  `cod_setor` int(255) NOT NULL,
  PRIMARY KEY (`cpf_usuario`),
  KEY `cod_setor` (`cod_setor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modera`
--

INSERT INTO `modera` (`cpf_usuario`, `cod_setor`) VALUES
('22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `moderador`
--

CREATE TABLE IF NOT EXISTS `moderador` (
  `cpf_mod` varchar(255) NOT NULL,
  `cpf_adm` varchar(100) NOT NULL,
  PRIMARY KEY (`cpf_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderador`
--

INSERT INTO `moderador` (`cpf_mod`, `cpf_adm`) VALUES
('22', ''),
('33', ''),
('44', '22');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `cod_depto` varchar(250) NOT NULL,
  `siap` varchar(100) NOT NULL,
  `cpf_prof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`cod_depto`, `siap`, `cpf_prof`) VALUES
('1', '20', ''),
('1', '30', ''),
('2', '40', ''),
('2', '50', ''),
('3', '60', ''),
('1', '1', '1'),
('015615616', '21313', '213123');

-- --------------------------------------------------------

--
-- Table structure for table `recurso`
--

CREATE TABLE IF NOT EXISTS `recurso` (
  `codigo` int(255) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `situacao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recurso`
--

INSERT INTO `recurso` (`codigo`, `nome`, `categoria`, `situacao`) VALUES
(1, 'Retro-projetor', 'Philips', 'OK'),
(2, 'Retro-projetor', 'Samsung', 'OK'),
(3, 'Computador', 'HP', 'OK'),
(4, 'Computador', 'HP', 'OK'),
(5, 'Televisor', 'LG', 'OK'),
(6, 'Retro-projetor', 'Phillips', 'OK'),
(69, 'Putaria', 'Sexo', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `data_reserva` varchar(255) NOT NULL,
  `horario_inicio` date NOT NULL,
  `horario_fim` date NOT NULL,
  `cpf_usr` varchar(100) NOT NULL,
  `num_sala` int(50) NOT NULL,
  `moderacao` tinyint(1) NOT NULL,
  KEY `cpf_usr` (`cpf_usr`),
  KEY `num_sala` (`num_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserva`
--

INSERT INTO `reserva` (`data_reserva`, `horario_inicio`, `horario_fim`, `cpf_usr`, `num_sala`, `moderacao`) VALUES
('18/10/2014', '0000-00-00', '0000-00-00', '60', 5, 0),
('20/10/2014', '0000-00-00', '0000-00-00', '40', 7, 0),
('21/10/2014', '0000-00-00', '0000-00-00', '60', 9, 0),
('25/10/2014', '0000-00-00', '0000-00-00', '44', 2, 0),
('29/10/2014', '0000-00-00', '0000-00-00', '33', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `nr_sala` int(255) NOT NULL,
  `capacidade` varchar(100) NOT NULL,
  `id_tipo_sala` int(11) NOT NULL,
  PRIMARY KEY (`nr_sala`),
  KEY `id_tipo_sala` (`id_tipo_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sala`
--

INSERT INTO `sala` (`nr_sala`, `capacidade`, `id_tipo_sala`) VALUES
(1, '100', 1),
(2, '50', 2),
(3, '60', 2),
(4, '90', 2),
(5, '50', 2),
(6, '10', 1),
(7, '80', 1),
(8, '120', 3),
(9, '100', 2),
(10, '20', 3),
(147, '50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setor`
--

CREATE TABLE IF NOT EXISTS `setor` (
  `cod_setor` int(255) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `horario_abertura` varchar(50) NOT NULL,
  `horario_encerramento` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_setor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setor`
--

INSERT INTO `setor` (`cod_setor`, `nome`, `horario_abertura`, `horario_encerramento`) VALUES
(1, 'Graduação', '08:00', '21:00'),
(2, 'Pós-Graduação', '08:00', '21:00'),
(3, 'Geral', '07:00', '23:00');

-- --------------------------------------------------------

--
-- Table structure for table `tipos_de_sala`
--

CREATE TABLE IF NOT EXISTS `tipos_de_sala` (
  `id` int(255) NOT NULL,
  `desc` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipos_de_sala`
--

INSERT INTO `tipos_de_sala` (`id`, `desc`) VALUES
(1, 'Laboratório'),
(2, 'Sala de aula'),
(3, 'Auditório'),
(4, 'va tomar no cu porra');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cpf` varchar(255) NOT NULL,
  `pnome` varchar(100) NOT NULL,
  `unome` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`cpf`, `pnome`, `unome`, `senha`, `email`) VALUES
('015615616', 'Arley', 'Prates', '1q23', 'arleyprates@gmail.com'),
('1', 'a', 'a', 'a', 'a'),
('11111111111', 'Bruno ', 'Ramos', 'blabla', 'brunao@gmail.com'),
('12345678', 'Madson', 'Araujo', 'souviadinho', 'madsonra@dcc.ufba.br'),
('20', 'Daniela', 'Claro', '123', 'aaa'),
('22', 'Mario', 'Augusto', 'asdf', 'asdf'),
('30', 'Eduardo', 'Almeida', 'aaa', 'aaa'),
('33', 'Raimundo', 'Leite', 'asdf', 'asdf'),
('40', 'Rita', 'Suzana', 'ssffd', 'aaa'),
('44', 'Jamal', 'Castro', '1234', 'aaasa'),
('50', 'Fred', 'Durao', '123', 'aaa'),
('555555555555', 'Arley', 'prates', 'programar', 'AAA@gmail.com'),
('60', 'Claudio', 'Santana', 'aaaa', 'aaaa'),
('696969696969', 'Marcio', 'Leitinho', 'aaaa', 'viadinho@dcc.ufba.br'),
('87654321', 'Jean', 'Carvalho', 'jfcarvalho', 'jfcarvalho@dcc.ufba.br');

-- --------------------------------------------------------

--
-- Table structure for table `utiliza`
--

CREATE TABLE IF NOT EXISTS `utiliza` (
  `codigo_recurso` int(11) NOT NULL,
  `nr_sala` int(11) NOT NULL,
  KEY `codigo_recurso` (`codigo_recurso`),
  KEY `nr_sala` (`nr_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gerencia`
--
ALTER TABLE `gerencia`
  ADD CONSTRAINT `cod_setorg` FOREIGN KEY (`cod_setorg`) REFERENCES `setor` (`cod_setor`),
  ADD CONSTRAINT `id_sala` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`nr_sala`);

--
-- Constraints for table `modera`
--
ALTER TABLE `modera`
  ADD CONSTRAINT `cod_setor` FOREIGN KEY (`cod_setor`) REFERENCES `setor` (`cod_setor`);

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `cpf_usr` FOREIGN KEY (`cpf_usr`) REFERENCES `usuario` (`cpf`),
  ADD CONSTRAINT `num_sala` FOREIGN KEY (`num_sala`) REFERENCES `sala` (`nr_sala`);

--
-- Constraints for table `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `id_tipo_sala` FOREIGN KEY (`id_tipo_sala`) REFERENCES `tipos_de_sala` (`id`);

--
-- Constraints for table `utiliza`
--
ALTER TABLE `utiliza`
  ADD CONSTRAINT `codigo_recurso` FOREIGN KEY (`codigo_recurso`) REFERENCES `recurso` (`codigo`),
  ADD CONSTRAINT `nr_sala` FOREIGN KEY (`nr_sala`) REFERENCES `sala` (`nr_sala`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
