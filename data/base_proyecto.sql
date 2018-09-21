-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-09-2018 a las 15:42:20
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `id127413_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fraccionamiento`
--

CREATE TABLE IF NOT EXISTS `fraccionamiento` (
  `NoCasa` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `nombreP` varchar(60) NOT NULL,
  `Adeudo` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `fraccionamiento`
--

INSERT INTO `fraccionamiento` (`NoCasa`, `Password`, `nombreP`, `Adeudo`) VALUES
('adm', '1274', 'Luis', '100');
