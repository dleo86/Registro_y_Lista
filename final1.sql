-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2019 a las 21:35:47
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `final1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(80) NOT NULL,
  `visible` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `denominacion`, `visible`) VALUES
(1, 'Administracion', 1),
(2, 'Recursos Humanos', 1),
(3, 'Cobranzas', 2),
(4, 'Atencion al cliente', 1),
(5, 'Logistica', 2),
(6, 'Gerencia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE IF NOT EXISTS `incidencias` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `area` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `email`, `nombre`, `apellido`, `area`, `observaciones`, `fecha`, `estado`) VALUES
(0, 'mleo@gmail.com', 'leandro', 'molina', 2, 'No funciona la red de la oficina de computos', '2019-07-10', 2),
(1, 'mleo@gmail.com', 'leandro', 'molina', 2, 'Problemas en la red de la oficina de civil, no anda internet ', '2019-07-01', 1),
(2, 'smaria@gmail.com', 'maria', 'sosa', 1, 'No funcionan dos computadoras de la oficina central', '2019-07-03', 2),
(3, 'lmario@gmial.com', 'mario', 'lopez', 3, 'La computadora del salon de ensayos funciona mal', '2019-07-09', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
