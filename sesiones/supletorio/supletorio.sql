-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2016 at 04:50 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supletorio`
--
CREATE DATABASE IF NOT EXISTS `supletorio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `supletorio`;

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `id_nivel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre`, `id_nivel`) VALUES
(1, 'INFORMÁTICA BÁSICA', 0),
(2, 'PROGRAMACIÓN ESTRUCTURADA', 0),
(3, 'MATEMÁTICAS DISCRETAS', 0),
(4, 'CÁLCULO DIFERENCIAL E INTEGRAL', 0),
(5, 'PROGRAMACION ORIENTADA A OBJETOS', 0),
(6, 'SISTEMAS OPERATIVOS I', 0),
(7, 'ARQUITECTURA COMPUTADORES II', 0),
(8, 'ESTADÍSTICA', 0),
(9, 'CONTABILIDAD GENERAL', 0),
(10, 'PROGRAMACIÓN AVANZADA', 0),
(11, 'SISTEMAS OPERATIVOS II', 0),
(12, 'ALGORITMOS FUNDAMENTALES', 0),
(13, 'CONTABILIDAD DE COSTOS', 0),
(14, 'ECOLOGÍA Y MEDIO AMBIENTE', 0),
(15, 'TÉCNICAS DE ANÁLISIS Y DISEÑO DE SISTEMAS INFORMÁTICOS', 0),
(25, 'REDES DE COMPUTADORES I', 0),
(26, 'INVESTIGACIÓN DE OPERACIONES', 0),
(27, 'ARQUITECTURA WEB', 0),
(28, 'BASE DE DATOS MULTIDIMENSIONALES', 0),
(29, 'DESARROLLO DE SISTEMAS DE INFORMACION', 0),
(30, 'REDES DE COMPUTADORES II', 0),
(31, 'ADMINISTRACION DE REDES TCP/IP', 0),
(32, 'AMBIENTES NO PROPIETARIOS', 0),
(33, 'ARQUITECTURA ORIENTADA A SERVICIOS', 0),
(34, 'SEGURIDAD EN REDES', 0),
(35, 'REDES DE AREA LOCAL INALAMBRICA', 0),
(36, 'SERVICIOS SOBRE REDES', 0),
(37, 'APLICACIONES DISTRIBUIDAS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `id_nivel` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nombre`) VALUES
(4, 'Cuarto'),
(1, 'Primero'),
(5, 'Quinto'),
(2, 'Segundo'),
(6, 'Sexto'),
(3, 'Tercero');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id_nivel` (`id_nivel`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
