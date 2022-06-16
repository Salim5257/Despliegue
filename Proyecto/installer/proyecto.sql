-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-06-2022 a las 01:40:35
-- Versión del servidor: 8.0.28
-- Versión de PHP: 8.0.16

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
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int NOT NULL,
  `id_usuario` int NOT NULL,
  `correo` varchar(50) NOT NULL,
  `mensaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Truncar tablas antes de insertar `contacto`
--

TRUNCATE TABLE `contacto`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_producto` int NOT NULL,
  `producto_imagen` varchar(50) NOT NULL,
  `producto_nombre` varchar(50) NOT NULL,
  `producto_desc` text NOT NULL,
  `producto_precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Truncar tablas antes de insertar `favoritos`
--

TRUNCATE TABLE `favoritos`;
--
-- Volcado de datos para la tabla `favoritos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int NOT NULL,
  `producto_marca` varchar(50) NOT NULL,
  `producto_imagen` varchar(50) DEFAULT NULL,
  `producto_nombre` varchar(50) NOT NULL,
  `producto_desc` text NOT NULL,
  `producto_precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Truncar tablas antes de insertar `producto`
--

TRUNCATE TABLE `producto`;
--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `producto_marca`, `producto_imagen`, `producto_nombre`, `producto_desc`, `producto_precio`) VALUES
(1, 'adidas', 'adidas1.png', '4D Fusio', 'Parte superior textil. Suela de goma. Color del artículo: Legacy Indigo / Turbo / Sky Rush', '159.95'),
(2, 'adidas', 'adidas3.png', 'Ultraboost 22', 'Horma clásica. Ajuste suave en el talón. Color del artículo: Flash Orange / Core Black / Cloud White', '189.95'),
(3, 'adidas', 'adidas4.png', 'Advantage', 'Forro textil. Tacto suave. Color del artículo: Cloud White / Cloud White / Green', '69.95'),
(4, 'adidas', 'adidas5.png', 'Racer TR21', 'Parte superior textil. Mediasuela Cloudfoam. Color del artículo: Cloud White / Grey Two / Solar Red', '27.95'),
(5, 'nike', 'nike1.png', 'Zoom X Vaporfly ', 'Cápsula de espuma interna en el talón para ofrecer amortiguación adicional. Puntera más ancha para ofrecer un ajuste más holgado', '249.95'),
(6, 'nike', 'nike3.png', 'Air Force 1', 'Perfil bajo para un look impecable y estilizado. Zona del tobillo acolchada, suave y cómoda', '109.95'),
(7, 'nike', 'nike4.png', 'Air Max Bolt', 'Zona del tobillo acolchada y de perfil bajo para ofrecer un look elegante y cómodo. El material sintético y el tejido proporcionan una durabilidad ligera para el día a día', '99.95'),
(8, 'nike', 'nike5.png', 'Air Max 270', 'Unidad Max Air 270 para proporcionar una comodidad sin igual durante todo el día. Funda interior elástica y confección de botín para crear un ajuste personalizable', '149.95'),
(9, 'puma', 'puma2.png', 'CA Pro Classic', 'Empeine de piel. Formstrip PUMA en los laterales. Cierre con cordones para un ajuste ceñido', '89.95'),
(10, 'puma', 'puma3.png', 'Mirage Sport Tech', 'MEVA: material de PUMA para una sensación cómoda y ligera. Exterior de malla técnica con capas de piel sintética y termoselladas superpuestas', '99.95'),
(11, 'puma', 'puma4.png', 'Graviton', 'Caña baja. Talón con un refuerzo inspirado en un estilo modular que evoca el 2021. Formstrip PUMA en el lateral', '66.95'),
(12, 'puma', 'puma5.png', 'Wild Embroidered', 'Exterior de nailon mate con capas de ante superpuestas en la puntera, el talón y los ojales. Refuerzo del talón de nobuk Soho y presilla para los cordones en la lengüeta', '79.95'),
(13, 'jordan', 'jordan2.png', 'Jordan One Take 3', 'Suela exterior de goma dividida en dos secciones (frontal y trasera) para reducir el peso total de las zapatillas y permitir transiciones suaves. Contratacón externo', '99.95'),
(14, 'jordan', 'jordan3.png', 'Air Jordan 1 Mid SE', 'Piel texturizada para ofrecer durabilidad y sujeción, así como un estilo premium, fuera de la cancha. Confección cupsole para añadir estabilidad y durabilidad', '129.95'),
(15, 'jordan', 'jordan4.png', 'Jordan 6 Rings', 'Unidades Zoom Air en el talón y el antepié para ofrecer una amortiguación ligera y reactiva. Suela exterior de goma para proporcionar durabilidad y tracción', '169.95'),
(16, 'jordan', 'jordan5.png', 'Air Jordan 1 Retro', 'Logotipo Wings en el lateral. Etiqueta Nike Air en la lengüeta. Perforaciones en la puntera. Esta versión de las Retro High OG se presenta con piel premium', '179.95'),
(17, 'reebok', 'reebok1.png', 'Royal Glide', 'Tejido exterior de material sintético. Cierre de cordones. Suela de caucho de alta resistencia al desgaste', '59.95'),
(18, 'reebok', 'reebok2.png', 'Gl1000', 'Ajuste clásico. Mediasuela FuelFoam. Plantilla espuma Memory Foam para ajuste perfecto', '54.95'),
(19, 'reebok', 'reebok3.png', 'Rewind', 'Revestimientos de ante. Forro de tela. Propiedades transpirables', '49.95'),
(20, 'reebok', 'reebok4.png', 'Nano X2', 'Parte superior de tela tejida Flexweave®. Clip de apoyo en el talón. Floatride Energy Foam', '119.95'),
(21, 'reebok', 'reebok5.png', 'Royal Comple', 'Upper de piel sintética. Plantilla EVA. Mediasuela ofrece una pisada suave', '29.95'),
(22, 'fila', 'fila1.png', 'Renno 13', 'Cuentan con un cierre de cordones con una correa de velcro y un collar de tobillo acolchado para un ajuste ceñido y seguro. Parte superior de cuero y tela/suela sintética', '84.95'),
(23, 'fila', 'fila2.png', 'Oakmont Mid', 'Zona del tobillo acolchada, suave y cómoda. Revestimientos de ante. Forro de tela', '74.95'),
(24, 'fila', 'fila3.png', 'Ray Tracer Tr 2', 'Tejido exterior de material sintético. Cierre de cordones. Exterior de malla técnica con capas de piel sintética y termoselladas superpuestas ', '69.95'),
(25, 'fila', 'fila4.png', 'Vulc Reverse Flag', 'Zona del tobillo acolchada, suave y cómoda. Ajuste clásico. Mediasuela FuelFoam ', '49.95'),
(26, 'fila', 'fila5.png', 'Sandenal', 'Revestimientos de ante. Forro de tela. Cierre con cordones para un ajuste ceñido', '89.95'),
(27, 'vans', 'vans2.png', 'OG Style 31 LX', 'Cierre de cordones. Suela de goma. Talón acolchado', '119.95'),
(28, 'vans', 'vans3.png', 'Authentic 44 DX', 'Plantillas de amortiguación. Suela de goma, Suela waffle. Ojales metálicos', '54.95'),
(29, 'vans', 'vans4.png', 'Old Skool 36 DX', 'Parte superior de piel. Cierre de cordones. Forro de piel', '94.95'),
(30, 'vans', 'vans5.png', 'Slip-On', 'Parte superior de piel. Paneles elásticos. Plantillas de espuma. Tobillo acolchado', '49.95'),
(31, 'vans', 'vans1.png', 'Old Skool VR3', 'Parte superior de piel. Forro textil. Suela waffle. Una plantilla especial que no sólo proporciona un tacto cómodo y suave, sino que además está fabricada con al menos un 25% de materiales sostenibles de origen vegetal. Mantiene la forma, es transpirable y tiene una lista infinita de sus cualidades positivas', '99.95'),
(32, 'puma', 'puma1.png', 'RS-Fast Limiter', 'Running System: la cómoda tecnología de amortiguación de PUMA que celebra la reinvención de un momento y movimiento únicos en la cultura. Entresuela de PU: entresuela de PU de PUMA que te ofrece una zancada más suave, cómoda y de un aspecto futurista. Capas superpuestas de piel sintética en la puntera y el talón', '119.95'),
(33, 'nike', 'nike2.png', 'Air Max Plus', 'Parte superior de tela ligera y amortiguación Max Air en el talón y el antepié combinadas para proporcionar la cantidad adecuada de comodidad y sujeción. Diseños Swoosh a capas para crear un efecto visual moderno. Puntera de plástico para más durabilidad y brillo', '179.95'),
(34, 'adidas', 'adidas2.png', 'Gazelle', 'Suela de goma; forro sintético. Esta zapatilla rinde homenaje a la Gazelle de 1991 y recupera las texturas y materiales del modelo original. Presenta una parte superior de ante con detalles en contraste inspirados en los diseños de los 90', '94.95'),
(35, 'jordan', 'jordan1.png', 'Air Jordan 1 Mid', 'Unidad Air-Sole para una amortiguación ligera. Suela exterior de goma lisa para ofrecer tracción en diferentes tipos de superficies. Lengüeta de tela para ofrecer suavidad y comodidad. Piel sintética y auténtica en la parte superior para ofrecer durabilidad y estructura', '119.95');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseña`
--

CREATE TABLE `reseña` (
  `id` int NOT NULL,
  `id_usuario` int NOT NULL,
  `reseña_comentario` varchar(255) NOT NULL,
  `reseña_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Truncar tablas antes de insertar `reseña`
--

TRUNCATE TABLE `reseña`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `id_rol` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Truncar tablas antes de insertar `usuario`
--

TRUNCATE TABLE `usuario`;
--
-- Volcado de datos para la tabla `usuario`
--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usuario` (`id_usuario`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reseña`
--
ALTER TABLE `reseña`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usuario_reseña` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `reseña`
--
ALTER TABLE `reseña`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `FK_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reseña`
--
ALTER TABLE `reseña`
  ADD CONSTRAINT `FK_usuario_reseña` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
