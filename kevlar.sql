-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2017 às 19:19
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kevlar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nomec` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `emailc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `userc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `senha` int(200) NOT NULL,
  `cpfc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nomec`, `emailc`, `endereco`, `userc`, `senha`, `cpfc`) VALUES
(1, 'carla gabriela', 'carlagabi@gmail.com', 'avenida sao joao, sumare, caragua, sp', 'carlagabi', 123456, 1111111111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nomeforn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefoneforn` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `emailforn` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nomeforn`, `telefoneforn`, `emailforn`) VALUES
(1, 'ligia', '123456789', 'ligiaforn@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nomef` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` int(11) NOT NULL,
  `funcaof` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `usuariof` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nomef`, `cpf`, `funcaof`, `usuariof`, `senha`) VALUES
(1, 'kallani', 111111111, 'gerente', 'kallanif', '123456'),
(2, 'Victoria', 222222222, 'gerente', 'victoriak', '123456'),
(2, 'Victoria', 222222222, 'gerente', 'victoriak', '123456'),
(3, 'samira', 333333333, 'gerente', 'samirar', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nomep` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `descp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `valoruni` float NOT NULL,
  `quantip` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nomep`, `descp`, `valoruni`, `quantip`) VALUES
(1, 'Faca com Pederneira Kampy - Guepardo', 'A Faca com Pederneira Kampy é fabricada pela Guepardo, marca referência em inovação e qualidade.\r\n Excelente para os adeptos de pesca e camping, a faca que conta com apito de emergência pode ser essencial em situações adversas. ', 122, 22),
(2, 'Faca Full Tang Tática Hunter - Guepardo', 'Faca Full Tang produzida no aço mais rígido, afiação aliada a resistência com maior retenção de corte e Lâmina integral de alta resistência e robustez', 230, 30),
(3, 'Colar Militar 1', 'Colar de aço e plástico', 20, 15),
(4, 'Colar Militar 2', 'Colar de aço', 20, 20),
(5, 'Colar Militar 3', 'Colar de aço com detalhe preto', 25, 30),
(6, 'Moletom Militar', 'Moletom de algodão com estampa militar', 60, 120),
(7, 'Jaqueta Slim Militar', 'Jaqueta Slim com estampa militar', 70, 100),
(8, 'Jaqueta Boom Militar', 'Jaqueta Militar 100% algodão', 122, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
