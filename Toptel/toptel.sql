-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Set-2017 às 01:19
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toptel`
--
CREATE DATABASE IF NOT EXISTS `toptel` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `toptel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `CPF` varchar(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Senha` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CPF` varchar(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Telefone` int(12) DEFAULT NULL,
  `Senha` varchar(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`CPF`, `Nome`, `Email`, `Telefone`, `Senha`) VALUES
('12345678912', 'bruno', 'gmail', 123456789, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quartos`
--

CREATE TABLE `quartos` (
  `NumeroQuarto` int(4) NOT NULL,
  `Tamanho` int(2) NOT NULL,
  `Ramal` int(4) NOT NULL,
  `ValorDiaria` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `CPF` varchar(11) NOT NULL,
  `NumeroQuarto` int(4) NOT NULL,
  `DataDeEntrada` date NOT NULL,
  `DataDeSaida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `quartos`
--
ALTER TABLE `quartos`
  ADD PRIMARY KEY (`NumeroQuarto`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD KEY `NumeroQuarto` (`NumeroQuarto`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`NumeroQuarto`) REFERENCES `quartos` (`NumeroQuarto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
