-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2019 a las 17:27:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.28

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
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_Estado` int(10) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `descripcion_Estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_Estado`, `estado`, `descripcion_Estado`) VALUES
(1, 'Buen estado', 'Este artículo está en buen estado.'),
(2, 'Gastado', 'Este artículo está gastado.'),
(3, 'Estropeado', 'Este artículo está estropeado.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_Inventario` int(10) NOT NULL,
  `nombre_Inventario` varchar(35) NOT NULL,
  `tipo_Inventario` varchar(20) NOT NULL,
  `descripcion_Inventario` varchar(50) NOT NULL,
  `estado_Inventario` int(10) NOT NULL,
  `reservado_Inventario` int(10) NOT NULL,
  `descripcion_estado_inventario` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_Inventario`, `nombre_Inventario`, `tipo_Inventario`, `descripcion_Inventario`, `estado_Inventario`, `reservado_Inventario`, `descripcion_estado_inventario`) VALUES
(1, 'SalaMultidisciplinar1', 'Sala', 'Sala multidisciplinar planta 0', 3, 2, 'wqed'),
(2, 'SalaMultidisciplinar2', 'Sala', 'Sala multidisciplinar planta 1', 3, 2, 'se ha fundido la luz.'),
(3, 'SalaMultidisciplinar3', 'Sala', 'Sala multidisciplinar planta 2', 1, 2, NULL),
(4, 'SalaMultidisciplinar4', 'Sala', 'Sala multidisciplinar planta 3', 1, 2, NULL),
(5, 'SalaInformatica1', 'Sala', 'Sala informática principal', 3, 2, NULL),
(6, 'SalaInformatica2', 'Sala', 'Sala informática planta 2', 1, 2, NULL),
(7, 'TallerCocina', 'Sala', 'Taller de cocina', 2, 2, NULL),
(8, 'DespachoEntrevistas1', 'Sala', 'Despacho para entrevistas principal', 1, 2, NULL),
(9, 'DespachoEntrevistas2', 'Sala', 'Despacho para entrevistas planta 1', 1, 2, NULL),
(10, 'SalonDeActos', 'Sala', 'Salon de actos', 1, 2, NULL),
(11, 'SalaDeReuniones', 'Sala', 'Sala de reuniones', 3, 2, NULL),
(12, 'Proyector1', 'Proyector', 'Proyector blanco', 1, 2, NULL),
(13, 'Proyector2', 'Proyector', 'Proyector negro', 1, 2, NULL),
(14, 'Portatil1', 'Portatil', 'Portatil marca HP', 3, 2, 'La bateria dura muy poco'),
(15, 'Portatil2', 'Portatil', 'Portatil marca Asus', 3, 2, NULL),
(16, 'Portatil3', 'Portatil', 'Portatil marca Lenovo', 1, 2, NULL),
(17, 'Móvil1', 'Móvil', 'Teléfono móvil IOS', 1, 2, NULL),
(18, 'Móvil2', 'Móvil', 'Teléfono móvil Android', 3, 2, 'la pantalla parpadea');

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
  `inventario_Pedidos` int(10) NOT NULL,
  `personal_Pedidos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_Personal` int(10) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_Reserva` int(10) NOT NULL,
  `estado_Reserva` varchar(2) NOT NULL,
  `descripcion_Estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_Reserva`, `estado_Reserva`, `descripcion_Estado`) VALUES
(1, 'Si', 'Este artículo está reservado.'),
(2, 'No', 'Este artículo no está reservado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_Estado`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_Inventario`),
  ADD KEY `estado_Inventario` (`estado_Inventario`),
  ADD KEY `reservado_Inventario` (`reservado_Inventario`);

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
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_Reserva`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_Estado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_Inventario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_Pedidos` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_Personal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_Reserva` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`estado_Inventario`) REFERENCES `estado` (`id_Estado`),
  ADD CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`reservado_Inventario`) REFERENCES `reserva` (`id_Reserva`);

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
