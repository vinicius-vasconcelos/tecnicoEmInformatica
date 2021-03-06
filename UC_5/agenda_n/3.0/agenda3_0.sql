-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Ago-2019 às 03:30
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda3.0`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `idagendamentos` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `hora` varchar(30) NOT NULL,
  `local` varchar(80) NOT NULL,
  `endereco` varchar(90) NOT NULL,
  `obs` text NOT NULL,
  `concluido` enum('0','1') NOT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`idagendamentos`, `titulo`, `data`, `hora`, `local`, `endereco`, `obs`, `concluido`, `users_idusers`) VALUES
(6, 'Fut pesadão', '2019-08-10', '17:00', 'PQP', 'rua loka', 'Vai ser locura, vai cola o pelé, mané, josé e o Thierry', '0', 2),
(7, 'Aula top', '2019-08-27', '20:30', 'Senac', 'Rua senac', 'aula top', '1', 1),
(8, 'Aula de hospedagem', '2019-08-14', '19:00', 'senac', 'rua senac', 'A aula vai ser lokura catioro, falta não !', '0', 1),
(9, 'Baile da lokura total', '2019-08-27', '22:00', 'ali na lokura vile', 'rua muito top', 'Só vai ter catiora de qualidade monstra !', '0', 2),
(10, 'Viajem da doideira', '2019-08-31', '10:00', 'ali perto', 'rua pertinho', 'porra vai ser doideira memo ', '1', 3),
(11, 'Fut mais pesado das catioras monstras', '2019-08-13', '23:00', 'parque do fut monstro', 'rua de qualidade monstra', 'Vai ser pesado de mais, vai ter só bagulho doido, qualidade total e de excelência sem igual.', '0', 2),
(12, 'Estudos Hard', '2019-08-27', '23:00', 'Em casa ', 'Rua dos Manés', 'vai ser doideira !', '0', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `idcontatos` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `email` varchar(90) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`idcontatos`, `nome`, `tel`, `email`, `foto`, `users_idusers`) VALUES
(2, 'carlos', '18997601159', 'carlos2@hotmail.com', '076922d2b8be534ee14c5413868884abc.jpg', 1),
(4, 'josé', '189979666321', 'jose@hotmail.com', '0ee07ae5b551ed7db560cfc90c81c1a02.jpg', 4),
(12, 'Hermilio', '6518478498', 'nilão@gmail.cão', '06b31b333f3be352cf0618254006b1d2c.jpg', 1),
(13, 'danilo', '44984', 'dan@hotmail.com', '0c376926371b5d4d9575209c34c0a5bdb.jpg', 1),
(14, 'anderson', '511651', 'an@gmail.com', '0f664cd64c2f028f3ef14316f804e564b.png', 1),
(15, 'Eduardo', '654984984', 'edu@edu.edu', '0d92d8beaf5ac52d4c170d78d1a5dbb85.jpg', 1),
(16, 'pele', '516516', 'pele@xuxa.com', '07b9b76ffaa784882dac79034791f5523.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nivel` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idusers`, `nome`, `login`, `senha`, `nivel`) VALUES
(1, 'Hermilo', 'nilo', '202cb962ac59075b964b07152d234b70', '0'),
(2, 'Vinisão o TOPGOD', 'vinicius', '202cb962ac59075b964b07152d234b70', '0'),
(3, 'Andershow', 'anderson', '202cb962ac59075b964b07152d234b70', '1'),
(4, 'Dan', 'danilo', '202cb962ac59075b964b07152d234b70', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`idagendamentos`),
  ADD KEY `fk_agendamentos_users_idx` (`users_idusers`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`idcontatos`),
  ADD KEY `fk_contatos_users1_idx` (`users_idusers`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `idagendamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `idcontatos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `fk_agendamentos_users` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `fk_contatos_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
