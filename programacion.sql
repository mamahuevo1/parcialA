-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2020 a las 00:00:00
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `Id_clase` int(11) NOT NULL,
  `nombre_clase` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`Id_clase`, `nombre_clase`) VALUES
(1, 'Historia'),
(2, 'Matematicas'),
(3, 'Programacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `Id_dependencia` int(11) NOT NULL,
  `nombre_dependencia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`Id_dependencia`, `nombre_dependencia`) VALUES
(1, 'Juridico'),
(2, 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario-clase`
--

CREATE TABLE `usuario-clase` (
  `Id_usuario_clase` int(11) NOT NULL,
  `Id_usaurio` int(11) NOT NULL,
  `Id_clase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario-clase`
--

INSERT INTO `usuario-clase` (`Id_usuario_clase`, `Id_usaurio`, `Id_clase`) VALUES
(3, 1, 1),
(5, 1, 3),
(6, 1, 3),
(7, 1, 3),
(8, 1, 3),
(9, 1, 3),
(10, 1, 3),
(11, 1, 2),
(12, 1, 2),
(13, 7, 3),
(14, 7, 2),
(15, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `apellidos_usuario` varchar(20) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tipo_documento` char(3) NOT NULL,
  `numero_documento` int(11) NOT NULL,
  `Id_dependencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `nombre_usuario`, `apellidos_usuario`, `pass`, `fecha_nacimiento`, `tipo_documento`, `numero_documento`, `Id_dependencia`) VALUES
(1, 'kevin', 'rincon', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', '2020-04-02', 'ti', 1232, 1),
(7, 'andres ', 'calamaro', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', '1998-12-12', 'ti', 123, 1),
(9, 'edna', 'Rincon Jimenez', '1574bddb75c78a6fd2251d61e2993b5146201319', '1993-01-12', 'cc', 12345, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`Id_clase`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`Id_dependencia`);

--
-- Indices de la tabla `usuario-clase`
--
ALTER TABLE `usuario-clase`
  ADD PRIMARY KEY (`Id_usuario_clase`),
  ADD KEY `Id_clase` (`Id_clase`),
  ADD KEY `id` (`Id_usaurio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD KEY `Id_dependencia` (`Id_dependencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `Id_dependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario-clase`
--
ALTER TABLE `usuario-clase`
  MODIFY `Id_usuario_clase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario-clase`
--
ALTER TABLE `usuario-clase`
  ADD CONSTRAINT `usuario-clase_ibfk_1` FOREIGN KEY (`Id_usaurio`) REFERENCES `usuarios` (`Id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario-clase_ibfk_2` FOREIGN KEY (`Id_clase`) REFERENCES `clases` (`Id_clase`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_dependencia`) REFERENCES `dependencias` (`Id_dependencia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
