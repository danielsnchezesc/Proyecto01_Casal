-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2019 a las 19:58:54
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_casal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id_Incidencia` int(10) NOT NULL,
  `fecha_inicio_Incidencia` date NOT NULL,
  `fecha_fin_Incidencia` date NOT NULL,
  `hora_inicio_Incidencia` varchar(5) NOT NULL,
  `hora_fin_Incidencia` varchar(5) NOT NULL,
  `descripcion_Incidencia` text NOT NULL,
  `objeto_Incidencia` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_Inventario` int(2) NOT NULL,
  `nombre_Inventario` varchar(35) NOT NULL,
  `tipo_Inventario` varchar(20) NOT NULL,
  `descripcion_Inventario` varchar(50) NOT NULL,
  `estado_Inventario` int(1) NOT NULL,
  `reservado_Inventario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_Inventario`, `nombre_Inventario`, `tipo_Inventario`, `descripcion_Inventario`, `estado_Inventario`, `reservado_Inventario`) VALUES
(1, 'SalaMultidisciplinar1', 'Sala', 'Sala multidisciplinar planta 0', 3, 2),
(2, 'SalaMultidisciplinar2', 'Sala', 'Sala multidisciplinar planta 1', 1, 2),
(3, 'SalaMultidisciplinar3', 'Sala', 'Sala multidisciplinar planta 2', 3, 2),
(4, 'SalaMultidisciplinar4', 'Sala', 'Sala multidisciplinar planta 3', 1, 2),
(5, 'SalaInformatica1', 'Sala', 'Sala informática principal', 1, 2),
(6, 'SalaInformatica2', 'Sala', 'Sala informática planta 2', 3, 2),
(7, 'TallerCocina', 'Sala', 'Taller de cocina', 1, 2),
(8, 'DespachoEntrevistas1', 'Sala', 'Despacho para entrevistas principal', 1, 1),
(9, 'DespachoEntrevistas2', 'Sala', 'Despacho para entrevistas planta 1', 1, 2),
(10, 'SalonDeActos', 'Sala', 'Salon de actos', 3, 2),
(11, 'SalaDeReuniones', 'Sala', 'Sala de reuniones', 1, 2),
(12, 'Proyector1', 'Proyector', 'Proyector blanco', 3, 2),
(13, 'Proyector2', 'Proyector', 'Proyector negro', 2, 2),
(14, 'Portatil1', 'Portatil', 'Portatil marca HP', 1, 2),
(15, 'Portatil2', 'Portatil', 'Portatil marca Asus', 2, 2),
(16, 'Portatil3', 'Portatil', 'Portatil marca Lenovo', 3, 2),
(17, 'Móvil1', 'Móvil', 'Teléfono móvil IOS', 1, 2),
(18, 'Móvil2', 'Móvil', 'Teléfono móvil Android', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_Pedidos` int(10) NOT NULL,
  `nombre_Pedidos` varchar(25) NOT NULL,
  `fecha_inicio_Pedidos` date NOT NULL,
  `hora_inicio_Pedidos` varchar(5) NOT NULL,
  `fecha_final_Pedidos` date DEFAULT NULL,
  `hora_final_Pedidos` varchar(5) DEFAULT NULL,
  `inventario_Pedidos` int(2) NOT NULL,
  `personal_Pedidos` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_Pedidos`, `nombre_Pedidos`, `fecha_inicio_Pedidos`, `hora_inicio_Pedidos`, `fecha_final_Pedidos`, `hora_final_Pedidos`, `inventario_Pedidos`, `personal_Pedidos`) VALUES
(10, 'Portatil1', '2019-11-06', '18:08', '2019-11-06', '18:17', 14, 1),
(11, 'Portatil1', '2019-11-06', '18:08', '2019-11-06', '18:17', 14, 1),
(12, 'Portatil2', '2019-11-06', '18:08', '2019-11-06', '18:34', 15, 1),
(13, 'Portatil3', '2019-11-06', '18:08', NULL, NULL, 16, 1),
(14, 'DespachoEntrevistas1', '2019-11-06', '18:12', '2019-11-06', '18:18', 8, 1),
(15, 'SalaInformatica1', '2019-11-06', '18:12', NULL, NULL, 5, 1),
(16, 'SalaMultidisciplinar4', '2019-11-06', '18:12', '2019-11-06', '18:34', 4, 1),
(17, 'Proyector2', '2019-11-06', '18:17', '2019-11-06', '18:18', 13, 1),
(22, 'SalaMultidisciplinar4', '2019-11-06', '18:34', '2019-11-06', '18:34', 4, 1),
(23, 'SalaInformatica2', '2019-11-06', '18:34', NULL, NULL, 6, 1),
(24, 'SalaMultidisciplinar1', '2019-11-06', '19:36', '2019-11-06', '19:36', 1, 1),
(25, 'DespachoEntrevistas1', '2019-11-06', '19:36', NULL, NULL, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_Personal` int(1) NOT NULL,
  `usuario_Personal` varchar(20) NOT NULL,
  `contrasena_Personal` varchar(250) NOT NULL,
  `nombre_Personal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_Personal`, `usuario_Personal`, `contrasena_Personal`, `nombre_Personal`) VALUES
(1, 'superusuario', '2e6862d634f970e7970460d7bbd10529', 'Servicios Informáticos'),
(2, 'juanma', '6b45be7910410293e64def2272ff6cd7', 'Juanma'),
(3, 'carlos', '9ad48828b0955513f7cf0f7f6510c8f8', 'Carlos Muñoz'),
(4, 'dani', '6e7a0c9b49cadd9228f1170dbf7dff94', 'Daniel Sánchez'),
(5, 'jose', '90e528618534d005b1a7e7b7a367813f', 'José Antonio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id_Incidencia`),
  ADD KEY `objeto_Incidencia` (`objeto_Incidencia`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_Inventario`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_Pedidos`),
  ADD KEY `inventario_Pedido` (`inventario_Pedidos`),
  ADD KEY `personal_Pedidos` (`personal_Pedidos`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_Personal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id_Incidencia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_Inventario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_Pedidos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_Personal` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `incidencias_ibfk_1` FOREIGN KEY (`objeto_Incidencia`) REFERENCES `inventario` (`id_Inventario`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`inventario_Pedidos`) REFERENCES `inventario` (`id_Inventario`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`personal_Pedidos`) REFERENCES `personal` (`id_Personal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
