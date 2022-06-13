-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2022 a las 01:10:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `dni`, `telefono`, `correo`, `contrasena`) VALUES
(5, 'Natividad', 'Barbaro', '42134142T', '34-343433311', 'santiago@hotmail.com', 'aquesisisisi'),
(8, 'Salim', 'Ahmed', '45318122A', '34-622668888', 'salim@gmail.com', 'salim123'),
(30, 'prueba', 'prueba', '45383838Y', '34-611611611', 'prueba@gmail.com', 'prueba123'),
(31, 'Salim', 'prueba', '34565666T', '34-666678788', 'salim123@gmail.com', 'salim12345'),
(32, 'peter', 'griffin', '45312823Y', '34-366677887', 'peter@gmail.com', 'peter123'),
(33, 'pablito', 'clavo', '45318679Y', '34-777777755', 'pablitoclavito@gmail.com', 'pablito213'),
(34, 'mort', 'ples', '34333333Y', '34-666666666', 'ples@gmail.com', 'ples123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
