-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jan-2023 às 15:26
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `super-trunfo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartas`
--

CREATE TABLE `cartas` (
  `id` int(50) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `nome` text NOT NULL,
  `partidas-disputadas` int(50) NOT NULL,
  `vitorias` int(50) NOT NULL,
  `gols-marcados` int(50) NOT NULL,
  `ano-de-nascimento` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cartas`
--

INSERT INTO `cartas` (`id`, `foto`, `nome`, `partidas-disputadas`, `vitorias`, `gols-marcados`, `ano-de-nascimento`) VALUES
(2, 'https://www.paraeles.pt/wp-content/uploads/2020/04/ronaldinho.png', 'dentuço', 500, 450, 500, 1972),
(4, 'https://th.bing.com/th/id/OIP.NeqLWjLKnxFuuBMdsE9R6QHaJQ?pid=ImgDet&rs=1', 'Cristiano Ronaldo', 400, 300, 790, 1985),
(5, 'https://th.bing.com/th/id/R.06a1cf5149af89a5ab16be1e1d7ef4cd?rik=FJtYyTKTfk3%2bWA&riu=http%3a%2f%2fwww.jogadores.pt%2fwp-content%2fuploads%2f2016%2f08%2f000_C34TX.jpg&ehk=DRz311CAD54jA5TLDyJTvSlpJqEwiJB9tYfaspxLpVs%3d&risl=&pid=ImgRaw&r=0', 'Lionel Messi', 500, 290, 700, 1986),
(6, 'https://i.ytimg.com/vi/40fXWuh2JBY/maxresdefault.jpg', 'Ronaldo Fenômeno', 700, 690, 800, 1980),
(25, 'https://3.bp.blogspot.com/_pb8Eavz0394/TL7JARehGDI/AAAAAAAAAxU/rEtKtR0qg4c/s1600/pele.jpg', 'pele', 1500, 900, 1000, 1940),
(26, 'https://th.bing.com/th/id/R.d9f03cba0ef240a476590fd7d42af9b0?rik=RPdj2%2bRYu%2fRrJw&riu=http%3a%2f%2fimg.bleacherreport.net%2fimg%2fimages%2fphotos%2f002%2f108%2f222%2f2618112_crop_exact.jpg%3fw%3d1500%26h%3d1500%26q%3d85&ehk=hWue%2bBi4VZon7cNovARAT3GNMRfstM%2b1fMYB1FX%2b8BQ%3d&risl=&pid=ImgRaw&r=0', 'Rivaldo', 250, 245, 200, 1980);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
