-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2016 a las 04:48:19
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasenia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `email`, `telefono`, `direccion`, `usuario`, `contrasenia`) VALUES
('Jessica Olivo', 'jessikita.ldu@gmail.com', '2585150', 'Rocafuerte y Quiroga', 'jaop2316', '123'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('Jessica', 'jessikita.ldu@gmail.com', '022585150', 'Rocafuerte y Quiroga', 'jaop231', '1234'),
('Jessica', 'jessikita.ldu@gmail.com', '022585150', 'Rocafuerte y Quiroga', 'jaop2316', '1234'),
('Jessica', 'jessikita.ldu@gmail.com', '022585150', 'Rocafuerte y Quiroga', 'jaop2316', '1234'),
('Lucia Olivo', 'truski100@hotmail.es', '022585150', 'Rocafuerte y Quiroga', 'truski100', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
