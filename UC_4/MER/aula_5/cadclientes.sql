-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2019 às 00:16
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
-- Database: `cadclientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id_cadcliente` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(90) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `dt_nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id_cadcliente`, `nome`, `email`, `telefone`, `dt_nasc`) VALUES
(1, 'Nilo', 'nilouchat@msn.com', '18181818181', '0000-00-00'),
(2, 'gabriel', '', '12121212121', '2011-05-15'),
(3, 'Danilo', 'nilouchat@msn.com', '1818181818', '1983-08-18'),
(4, 'Lucas', 'lucas@msn.com', '21212121', '2078-05-09'),
(5, 'Karol', 'karol@msn.com', '1818181818', '1988-08-03'),
(6, 'Gilberto', 'gilberto@msn.com', '1717171717', '1975-05-09'),
(7, 'Karol', 'karol@msn.com', '1818181818', '1988-08-03'),
(8, 'João', 'joao@iepe.com.br', '1212121221', '2001-05-02'),
(9, 'Karoline', 'karoline@msn.com', '1818181818', '1988-08-03'),
(10, 'Tais', 'tais@pires.com.br', '233232323', '1999-05-02'),
(11, 'vinicius', 'vini@zulu.com', '1818181818', '1988-08-03'),
(12, 'Lucas', 'lucas@msn.com', '2323232323', '2010-05-01'),
(13, 'Nilo', 'nilouchat@msn.com', '18181818181', '0000-00-00'),
(14, 'gabriel', '', '12121212121', '2011-05-15'),
(15, 'Danilo', 'nilouchat@msn.com', '1818181818', '1983-08-18'),
(16, 'Lucas', 'lucas@msn.com', '21212121', '2078-05-09'),
(17, 'Karol', 'karol@msn.com', '1818181818', '1988-08-03'),
(18, 'Gilberto', 'gilberto@msn.com', '1717171717', '1975-05-09'),
(19, 'Karol', 'karol@msn.com', '1818181818', '1988-08-03'),
(20, 'João', 'joao@iepe.com.br', '1212121221', '2001-05-02'),
(21, 'Karoline', 'karoline@msn.com', '1818181818', '1988-08-03'),
(22, 'Tais', 'tais@pires.com.br', '233232323', '1999-05-02'),
(23, 'vinicius', 'vini@zulu.com', '1818181818', '1988-08-03'),
(24, 'Lucas', 'lucas@msn.com', '2323232323', '2010-05-01');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id_cadcliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id_cadcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
