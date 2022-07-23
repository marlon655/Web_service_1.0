-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jul-2022 às 23:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `web_service_1.0`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `request`
--

INSERT INTO `request` (`id`, `name`, `marca`, `image`) VALUES
(2, 'R8 Coupe V10 performance quattro(2019)', 'Audi', 'http://localhost/Web_service_1.0/images/18470-mid.jpg'),
(3, 'Bolide(2023)', 'Bugatti', 'http://localhost/Web_service_1.0/images/20992-mid.jpg'),
(4, '8C-R Tazio LP(2020)', 'Alfa Romeo', 'http://localhost/Web_service_1.0/images/23800-mid.jpg'),
(48, 'EB110 SS(1992)', 'Bugatti', 'http://localhost/Web_service_1.0/images/16561-mid.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
