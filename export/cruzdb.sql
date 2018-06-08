-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 04:21 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruz`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `pid` int(11) NOT NULL,
  `productoNombre` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `productoPrecio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`pid`, `productoNombre`, `productoPrecio`) VALUES
(4, 'SET DE 3 PINZAS -universal - de punta -corte- ', 77),
(5, 'SET DE DESTORNILLADORES DE 6 UNI PLANO-PHILIPS-', 50),
(6, 'SET DE LLAVES AISLADAS PARA ELECTRICISTA DE 12 PIEZAS', 35),
(10, 'chan', 666),
(11, 'probando', 43),
(12, 'ANDAMIO. (EL JUEGO INCLUYE LO SIGUIENTE) 2 columnas y 4 travesaños, caños de 2,5" x 2,5 mm y 1" x 1,6 mm, largo 2,5 mts, ancho 1,35 mts, alto 1,90 mts,  2 tablones  de chapa de 2 mm agujereada y rayada antideslizante, largo 2,5 mts, ancho 29 cm. (Medidas Aproximadas)\r\n', 55),
(13, 'ATORNILLADOR INALAMBRICO 14.4v (13mm) 31/2", torque 230lbsBaterias de laga duracion,  velocidad variable y reversible, incluye maletin, cargador, dos bateria y punta doble. Mandril autoajustable, 18 posiciones de torque como minimo. Garantia minima de 6 meses. Deberá cumplir y ser presentado con constancia y/o certificados del cumplimiento de las normas IRAM o IEC aplicables, como lo estipula la Resolución 92/98 de la Secretaría de Industria, Comercio y Minería.\r\n', 6669);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
