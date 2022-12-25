-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-12-2022 a las 07:09:59
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redcom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `idnosotros` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `contacto` varchar(45) NOT NULL,
  `subNombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`idnosotros`, `nombres`, `apellidos`, `contacto`, `subNombre`) VALUES
(1, 'Alejandro Kaleb', 'Leyte Garcia', 'aklg.itics.2001@gmail.com', 'Kal Leyte'),
(2, 'Miguel Alejandro ', 'Rodríguez Bárcenas ', 'alexmirod@gmail.com', 'alejandroBR'),
(3, 'Jacqueline Iveth', 'Hernández Bautista', 'jihb.itics.2000@gmail.com', 'Iveth HB'),
(4, 'Angelica Naomi', 'Juárez Bautista ', 'anjb.itics.2002@gmail.com', 'Angiie Bautista');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
