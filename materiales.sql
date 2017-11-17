-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2017 a las 06:05:14
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `materiales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `modulo_elastico` varchar(45) DEFAULT NULL,
  `coeficiente_poisson` varchar(45) DEFAULT NULL,
  `densidad_masa` varchar(45) DEFAULT NULL,
  `limite_traccion` varchar(45) DEFAULT NULL,
  `limite_elastico` varchar(45) DEFAULT NULL,
  `modulo_tangente` varchar(45) DEFAULT NULL,
  `coeficiente_expansion_termica` varchar(45) DEFAULT NULL,
  `factor_endurecimiento` varchar(45) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`, `modulo_elastico`, `coeficiente_poisson`, `densidad_masa`, `limite_traccion`, `limite_elastico`, `modulo_tangente`, `coeficiente_expansion_termica`, `factor_endurecimiento`, `categoria`) VALUES
(1, 'Hierro ductil', '120000 N/mm^2', '0.31 N/D', '7100 kg/m^3', '77000 N/mm^2', '861.7 N/mm^2', NULL, '0.000011 /K', NULL, 'metal'),
(7, 'Fundicion gris', '66178.1 N/mm^2', '0.27 N/D', '0 N/mm^2', '50000 N/mm^2', '572.17 N/mm^2', '', '0.000012 /K', '', 'aluminio'),
(8, 'Fundicion maleable', '190000 N/mm^2', '0.27 N/D', '7300 kg/m^3', '413.61 N/mm^2', '0 N/mm^2', '', '0.000012 /K', '', 'acero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `tipo_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `tipo_usuario`) VALUES
(1, 'admin', '123', 'administrador'),
(2, 'usuario', '123', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
