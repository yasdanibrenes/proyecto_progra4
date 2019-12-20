-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2019 a las 18:38:32
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `comentarios` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `descripcion`, `precio`, `comentarios`, `imagen`) VALUES
(1, 'SUPER TRACTION DUPLEX', 100, 'Versatilidad y valor en un neumático para servicio medio', 'SuperAllTracDuplex_full_320x480.png'),
(2, 'INDUSTRIAL SPECIAL', 200, 'Rendimiento y durabilidad probados en un neumático no direccional', 'Industrial_Special_full_320x480.png'),
(3, 'SUPER TRACTION LOADER', 300, 'Larga duración y una gran tracción en un neumático de servicio mediano.', 'SuperTractionLoaderI3_full_320x480.png'),
(4, 'FS820', 400, 'Neumático radial para todas las posiciones recomendado para ejes de dirección, tracción y remolque en servicios de carretera y fuera de ella.', 'FS_TBR_FS820_full_1080x1800.png'),
(5, 'T831', 500, 'Neumático de dirección para servicio severo para aplicaciones en carretera y fuera de ella.', 'FS_TBR_T831_full_1080x1800.png'),
(6, 'T839', 600, 'Neumático radial de base amplia para todas las posiciones recomendado para ejes de dirección, tracción y remolque en servicios de carretera y fuera de ella.', 'T839_full_320x480.png'),
(7, 'FORESTRY TRACTION LUG', 700, 'Ángulo de barra de banda de rodadura de 23º para obtener excelente tracción en todo tipo de suelo', 'ForstTractionLug_full_320x480.png'),
(8, 'RADIAL 9000 EVOLUTION', 800, 'Diseñado para ofrecer rendimiento y durabilidad máximos.', 'Rad-9000_full_320x480.png'),
(10, 'RADIAL 7000', 900, 'Profundidad de banda de rodadura R-1W y barras de banda de rodadura de 45º para obtener mayor tracción en condiciones húmedas.', 'Radial7000_full_320x480.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Yasdani Brenes', 'yasdani.brenes@ulatina.net', '123'),
(2, 'Kevin Lethman', 'kevin.lethman@ulatina.net', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
