-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2016 a las 00:19:55
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lean`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

CREATE TABLE `participante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `educacion_musical` int(11) NOT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `vecindario` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tiempo` bigint(20) NOT NULL,
  `vol_1` bigint(20) NOT NULL,
  `vol_2` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` int(11) NOT NULL,
  `participante` int(11) NOT NULL,
  `video` int(11) NOT NULL,
  `agrado_sonoro` int(11) NOT NULL,
  `animacion` int(11) NOT NULL,
  `intensidad_sonora_global` int(11) NOT NULL,
  `intensidad_sonora_de_las_motocicletas` int(11) NOT NULL,
  `intensidad_sonora_de_los_vehiculos_livianos` int(11) NOT NULL,
  `intensidad_sonora_de_los_vehiculos_pesados` int(11) NOT NULL,
  `tiempo_de_presencia_de_los_vehiculos` int(11) NOT NULL,
  `tiempo_de_presencia_de_las_voces` int(11) NOT NULL,
  `tiempo_de_presencia_de_los_pasos` int(11) NOT NULL,
  `tiempo_de_presencia_de_los_pajaros` int(11) NOT NULL,
  `agrado_visual` int(11) NOT NULL,
  `familiaridad_del_sonido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `participante`
--
ALTER TABLE `participante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
