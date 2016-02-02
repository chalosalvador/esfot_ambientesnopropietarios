-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 08:09 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examen2`
--
CREATE DATABASE IF NOT EXISTS `examen2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `examen2`;

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `id_carrera` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre`) VALUES
(1, 'Análisis de Sistemas Informáticos');

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `nombres`, `apellidos`, `email`, `contrasena`) VALUES
(1, 'Andrés David', 'Pérez Andrade', 'andrés.perez@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Juan José', 'Flores Espejo', 'juan.flores@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `estudiante_x_materia`
--

CREATE TABLE IF NOT EXISTS `estudiante_x_materia` (
  `id_estudiante` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `profesor` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre`, `id_nivel`, `profesor`) VALUES
(1, 'INFORMÁTICA BÁSICA', 1, 'Andrés Durán'),
(2, 'PROGRAMACIÓN ESTRUCTURADA', 1, 'Iván Grijalva'),
(3, 'MATEMÁTICAS DISCRETAS', 1, 'Iván Grijalva'),
(4, 'CÁLCULO DIFERENCIAL E INTEGRAL', 1, 'Santiago Guerra'),
(5, 'PROGRAMACION ORIENTADA A OBJETOS', 2, 'Ivonne Maldonado'),
(6, 'SISTEMAS OPERATIVOS I', 2, 'Edwin Salvador'),
(7, 'ARQUITECTURA COMPUTADORES II', 2, 'Edwin Salvador'),
(8, 'ESTADÍSTICA', 2, 'Stefanie Vásquez'),
(9, 'CONTABILIDAD GENERAL', 2, 'Esthela Moscoso'),
(10, 'PROGRAMACIÓN AVANZADA', 3, 'Iván Grijalva'),
(11, 'SISTEMAS OPERATIVOS II', 3, 'Ivonne Maldonado'),
(12, 'ALGORITMOS FUNDAMENTALES', 3, 'Eddie Yánez'),
(13, 'CONTABILIDAD DE COSTOS', 3, 'Esthela Moscoso'),
(14, 'ECOLOGÍA Y MEDIO AMBIENTE', 3, 'Gloria Erazo'),
(15, 'TÉCNICAS DE ANÁLISIS Y DISEÑO DE SISTEMAS INFORMÁTICOS', 4, 'Ivonne Maldonado'),
(25, 'REDES DE COMPUTADORES I', 4, 'Cesar Gallardo'),
(26, 'INVESTIGACIÓN DE OPERACIONES', 4, 'Luis Ponce'),
(27, 'ARQUITECTURA WEB', 4, 'Andrés Durán'),
(28, 'BASE DE DATOS MULTIDIMENSIONALES', 5, 'Iván Grijalva'),
(29, 'DESARROLLO DE SISTEMAS DE INFORMACION', 5, 'Luis Almeida'),
(30, 'REDES DE COMPUTADORES II', 5, 'Cesar Gallardo'),
(31, 'ADMINISTRACION DE REDES TCP/IP', 5, 'Cesar Gallardo'),
(32, 'AMBIENTES NO PROPIETARIOS', 5, 'Edwin Salvador'),
(33, 'ARQUITECTURA ORIENTADA A SERVICIOS', 6, 'Ivonne Maldonado'),
(34, 'SEGURIDAD EN REDES', 6, 'Cesar Gallardo'),
(35, 'REDES DE AREA LOCAL INALAMBRICA', 6, 'Cesar Gallardo'),
(36, 'SERVICIOS SOBRE REDES', 6, 'Cesar Gallardo'),
(37, 'APLICACIONES DISTRIBUIDAS', 6, 'Edwin Salvador');

-- --------------------------------------------------------

--
-- Table structure for table `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `id_nivel` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `numero`, `nombre`, `id_carrera`) VALUES
(1, 1, 'Primero', 1),
(2, 2, 'Segundo', 1),
(3, 3, 'Tercero', 1),
(4, 4, 'Cuarto', 1),
(5, 5, 'Quinto', 1),
(6, 6, 'Sexto', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `estudiante_x_materia`
--
ALTER TABLE `estudiante_x_materia`
  ADD UNIQUE KEY `id` (`id_estudiante`,`id_materia`),
  ADD KEY `id_materia` (`id_materia`);

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
  ADD UNIQUE KEY `numero` (`numero`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
--
-- Constraints for dumped tables
--

--
-- Constraints for table `estudiante_x_materia`
--
ALTER TABLE `estudiante_x_materia`
  ADD CONSTRAINT `id_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`),
  ADD CONSTRAINT `id_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Constraints for table `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `id_nivel` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`);

--
-- Constraints for table `nivel`
--
ALTER TABLE `nivel`
  ADD CONSTRAINT `id_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
