-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2022 a las 20:30:44
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
CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) NOT NULL,
  `mensaje` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `correo`, `mensaje`) VALUES
(12, 'salim@gmail.com', 'gwagwa'),
(18, 'santiago@hotmail.com', 'gwaga'),
(22, 'salim123@gmail.com', 'gwagag'),
(25, 'salim@gmail.com', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_marca` varchar(50) NOT NULL,
  `producto_imagen` varchar(50) DEFAULT NULL,
  `producto_nombre` varchar(50) NOT NULL,
  `producto_desc` text NOT NULL,
  `producto_precio` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `producto_marca`, `producto_imagen`, `producto_nombre`, `producto_desc`, `producto_precio`) VALUES
(22, 'adidas', 'adidas1.png', '4D Fusio', 'Parte superior textil. Suela de goma. Color del artículo: Legacy Indigo / Turbo / Sky Rush', '159.95'),
(24, 'adidas', 'adidas3.png', 'Ultraboost 22', 'Horma clásica. Ajuste suave en el talón. Color del artículo: Flash Orange / Core Black / Cloud White', '189.95'),
(25, 'adidas', 'adidas4.png', 'Advantage', 'Forro textil. Tacto suave. Color del artículo: Cloud White / Cloud White / Green', '69.95'),
(26, 'adidas', 'adidas5.png', 'Racer TR21', 'Parte superior textil. Mediasuela Cloudfoam. Color del artículo: Cloud White / Grey Two / Solar Red', '27.95'),
(27, 'nike', 'nike1.png', 'Zoom X Vaporfly ', 'Cápsula de espuma interna en el talón para ofrecer amortiguación adicional. Puntera más ancha para ofrecer un ajuste más holgado', '249.95'),
(29, 'nike', 'nike3.png', 'Air Force 1', 'Perfil bajo para un look impecable y estilizado. Zona del tobillo acolchada, suave y cómoda', '109.95'),
(30, 'nike', 'nike4.png', 'Air Max Bolt', 'Zona del tobillo acolchada y de perfil bajo para ofrecer un look elegante y cómodo. El material sintético y el tejido proporcionan una durabilidad ligera para el día a día', '99.95'),
(31, 'nike', 'nike5.png', 'Air Max 270', 'Unidad Max Air 270 para proporcionar una comodidad sin igual durante todo el día. Funda interior elástica y confección de botín para crear un ajuste personalizable', '149.95'),
(33, 'puma', 'puma2.png', 'CA Pro Classic', 'Empeine de piel. Formstrip PUMA en los laterales. Cierre con cordones para un ajuste ceñido', '89.95'),
(34, 'puma', 'puma3.png', 'Mirage Sport Tech', 'MEVA: material de PUMA para una sensación cómoda y ligera. Exterior de malla técnica con capas de piel sintética y termoselladas superpuestas', '99.95'),
(35, 'puma', 'puma4.png', 'Graviton', 'Caña baja. Talón con un refuerzo inspirado en un estilo modular que evoca el 2021. Formstrip PUMA en el lateral', '66.95'),
(36, 'puma', 'puma5.png', 'Wild Embroidered', 'Exterior de nailon mate con capas de ante superpuestas en la puntera, el talón y los ojales. Refuerzo del talón de nobuk Soho y presilla para los cordones en la lengüeta', '79.95'),
(38, 'jordan', 'jordan2.png', 'Jordan One Take 3', 'Suela exterior de goma dividida en dos secciones (frontal y trasera) para reducir el peso total de las zapatillas y permitir transiciones suaves. Contratacón externo', '99.95'),
(39, 'jordan', 'jordan3.png', 'Air Jordan 1 Mid SE', 'Piel texturizada para ofrecer durabilidad y sujeción, así como un estilo premium, fuera de la cancha. Confección cupsole para añadir estabilidad y durabilidad', '129.95'),
(40, 'jordan', 'jordan4.png', 'Jordan 6 Rings', 'Unidades Zoom Air en el talón y el antepié para ofrecer una amortiguación ligera y reactiva. Suela exterior de goma para proporcionar durabilidad y tracción', '169.95'),
(41, 'jordan', 'jordan5.png', 'Air Jordan 1 Retro', 'Logotipo Wings en el lateral. Etiqueta Nike Air en la lengüeta. Perforaciones en la puntera. Esta versión de las Retro High OG se presenta con piel premium', '179.95'),
(42, 'reebok', 'reebok1.png', 'Royal Glide', 'Tejido exterior de material sintético. Cierre de cordones. Suela de caucho de alta resistencia al desgaste', '59.95'),
(43, 'reebok', 'reebok2.png', 'Gl1000', 'Ajuste clásico. Mediasuela FuelFoam. Plantilla espuma Memory Foam para ajuste perfecto', '54.95'),
(44, 'reebok', 'reebok3.png', 'Rewind', 'Revestimientos de ante. Forro de tela. Propiedades transpirables', '49.95'),
(45, 'reebok', 'reebok4.png', 'Nano X2', 'Parte superior de tela tejida Flexweave®. Clip de apoyo en el talón. Floatride Energy Foam', '119.95'),
(46, 'reebok', 'reebok5.png', 'Royal Comple', 'Upper de piel sintética. Plantilla EVA. Mediasuela ofrece una pisada suave', '29.95'),
(47, 'fila', 'fila1.png', 'Renno 13', 'Cuentan con un cierre de cordones con una correa de velcro y un collar de tobillo acolchado para un ajuste ceñido y seguro. Parte superior de cuero y tela/suela sintética', '84.95'),
(48, 'fila', 'fila2.png', 'Oakmont Mid', 'Zona del tobillo acolchada, suave y cómoda. Revestimientos de ante. Forro de tela', '74.95'),
(49, 'fila', 'fila3.png', 'Ray Tracer Tr 2', 'Tejido exterior de material sintético. Cierre de cordones. Exterior de malla técnica con capas de piel sintética y termoselladas superpuestas ', '69.95'),
(50, 'fila', 'fila4.png', 'Vulc Reverse Flag', 'Zona del tobillo acolchada, suave y cómoda. Ajuste clásico. Mediasuela FuelFoam ', '49.95'),
(51, 'fila', 'fila5.png', 'Sandenal', 'Revestimientos de ante. Forro de tela. Cierre con cordones para un ajuste ceñido', '89.95'),
(53, 'vans', 'vans2.png', 'OG Style 31 LX', 'Cierre de cordones. Suela de goma. Talón acolchado', '119.95'),
(54, 'vans', 'vans3.png', 'Authentic 44 DX', 'Plantillas de amortiguación. Suela de goma, Suela waffle. Ojales metálicos', '54.95'),
(55, 'vans', 'vans4.png', 'Old Skool 36 DX', 'Parte superior de piel. Cierre de cordones. Forro de piel', '94.95'),
(56, 'vans', 'vans5.png', 'Slip-On', 'Parte superior de piel. Paneles elásticos. Plantillas de espuma. Tobillo acolchado', '49.95'),
(57, 'vans', 'vans1.png', 'Old Skool VR3', 'Parte superior de piel. Forro textil. Suela waffle. Una plantilla especial que no sólo proporciona un tacto cómodo y suave, sino que además está fabricada con al menos un 25% de materiales sostenibles de origen vegetal. Mantiene la forma, es transpirable y tiene una lista infinita de sus cualidades positivas', '99.95'),
(58, 'puma', 'puma1.png', 'RS-Fast Limiter', 'Running System: la cómoda tecnología de amortiguación de PUMA que celebra la reinvención de un momento y movimiento únicos en la cultura. Entresuela de PU: entresuela de PU de PUMA que te ofrece una zancada más suave, cómoda y de un aspecto futurista. Capas superpuestas de piel sintética en la puntera y el talón', '119.95'),
(59, 'nike', 'nike2.png', 'Air Max Plus', 'Parte superior de tela ligera y amortiguación Max Air en el talón y el antepié combinadas para proporcionar la cantidad adecuada de comodidad y sujeción. Diseños Swoosh a capas para crear un efecto visual moderno. Puntera de plástico para más durabilidad y brillo', '179.95'),
(60, 'adidas', 'adidas2.png', 'Gazelle', 'Suela de goma; forro sintético. Esta zapatilla rinde homenaje a la Gazelle de 1991 y recupera las texturas y materiales del modelo original. Presenta una parte superior de ante con detalles en contraste inspirados en los diseños de los 90', '94.95'),
(61, 'jordan', 'jordan1.png', 'Air Jordan 1 Mid', 'Unidad Air-Sole para una amortiguación ligera. Suela exterior de goma lisa para ofrecer tracción en diferentes tipos de superficies. Lengüeta de tela para ofrecer suavidad y comodidad. Piel sintética y auténtica en la parte superior para ofrecer durabilidad y estructura', '119.95');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseña`
--

CREATE TABLE IF NOT EXISTS `reseña` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reseña_comentario` varchar(255) NOT NULL,
  `reseña_nombre` varchar(50) NOT NULL,
  `reseña_imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reseña`
--

INSERT INTO `reseña` (`id`, `reseña_comentario`, `reseña_nombre`, `reseña_imagen`) VALUES
(1, 'Hace una semana pedí un par de zapatillas que me gustaron, a mi sorpresa            los recibí muy pronto y además me están perfectas.', 'Ferrán', 'pic1.png'),
(6, 'Hace una semana pedí un par de zapatillas que me gustaron, a mi sorpresa            los recibí muy pronto y además me están perfectas.', 'Yusef', 'pic2.png');

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
