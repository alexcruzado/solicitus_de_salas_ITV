-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2019 a las 03:37:25
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solicitud_salas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `contrasena` varchar(8) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `apellidos` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAlumno` int(11) NOT NULL,
  `numero_control` varchar(9) NOT NULL,
  `contrasena` varchar(8) NOT NULL,
  `nombre` varchar(32) DEFAULT NULL,
  `apellidos` varchar(64) DEFAULT NULL,
  `carrera` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `numero_control`, `contrasena`, `nombre`, `apellidos`, `carrera`) VALUES
(1, 'E15020524', '12345678', 'Cristobal', 'Perez RamÃ­rez', 'sistemas'),
(2, 'E15020565', '12345678', 'Alejandro', 'Cruzado Rosas', NULL),
(3, 'E15020688', '12345678', 'Alejandro', 'Cruzado Duran', 'sistemas'),
(4, 'E15020530', '12345678', 'Alejandro', 'Perez Cruz', 'administracion'),
(5, 'E17021524', '12345678', 'Ramses', 'Meza Rodriguez', 'mecanica'),
(6, 'E15020589', '12345678', 'Diana', 'Cruzado Rosas', 'administracion'),
(7, 'E15020529', '12345678', NULL, NULL, 'administracion'),
(8, 'E18190565', '12345678', 'Pedro', 'Vargas Rosas', 'administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_has_auditorio`
--

CREATE TABLE `alumno_has_auditorio` (
  `idSolicitud` int(11) NOT NULL,
  `Alumno_idAlumno` int(11) DEFAULT NULL,
  `Maestro_idMaestro` int(11) DEFAULT NULL,
  `Auditorio_idAuditorio` int(11) NOT NULL,
  `Secretario_idSecretario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(11) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_has_auditorio`
--

INSERT INTO `alumno_has_auditorio` (`idSolicitud`, `Alumno_idAlumno`, `Maestro_idMaestro`, `Auditorio_idAuditorio`, `Secretario_idSecretario`, `fecha`, `hora`, `estado`, `comentario`) VALUES
(1, NULL, 1, 1, 1, '2019-12-23', '10:00:00', 'cancelado', NULL),
(2, NULL, 1, 6, 1, '2019-08-13', '10:00:00', 'rechazado', 'porque me caes mal loco xdxdxd'),
(3, NULL, 1, 7, 1, '2019-05-30', '15:00:00', 'cancelado', NULL),
(4, NULL, 1, 3, 1, '2019-11-25', '12:00:00', 'pendiente', NULL),
(5, NULL, 5, 6, 1, '2020-03-25', '15:00:00', 'cancelado', NULL),
(6, NULL, 1, 3, 1, '2019-07-25', '15:00:00', 'pendiente', NULL),
(7, NULL, 5, 1, 1, '2019-05-29', '10:00:00', 'cancelado', NULL),
(8, 1, NULL, 6, 1, '2019-05-31', '10:00:00', 'cancelado', NULL),
(9, 7, NULL, 6, 1, '2019-05-29', '15:00:00', 'aprobado', NULL),
(10, 1, NULL, 1, 1, '2019-07-24', '10:00:00', 'cancelado', NULL),
(11, 1, NULL, 4, 1, '2019-09-09', '10:00:00', 'cancelado', NULL),
(12, 1, NULL, 5, 1, '2019-05-29', '10:00:00', 'cancelado', NULL),
(13, 1, NULL, 4, 1, '2019-09-02', '10:00:00', 'cancelado', NULL),
(14, 1, NULL, 2, 1, '2019-09-02', '10:00:00', 'cancelado', NULL),
(15, NULL, 5, 3, 1, '2019-09-03', '10:00:00', 'cancelado', NULL),
(16, NULL, 5, 7, 1, '2019-08-28', '15:00:00', 'cancelado', NULL),
(17, 1, NULL, 4, 1, '2019-08-13', '10:00:00', 'aprobado', NULL),
(18, 1, NULL, 7, 1, '2019-05-22', '10:00:00', 'rechazado', 'porque me caes mal xdxdxdxd'),
(19, 1, NULL, 2, 1, '2019-05-22', '12:00:00', 'pendiente', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditorio`
--

CREATE TABLE `auditorio` (
  `idAuditorio` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `edificio` varchar(10) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `sala` varchar(4) DEFAULT NULL,
  `auditorio` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auditorio`
--

INSERT INTO `auditorio` (`idAuditorio`, `nombre`, `edificio`, `capacidad`, `sala`, `auditorio`) VALUES
(1, 'Fermin Carrillo', 'E', 200, 'sala', NULL),
(2, 'Raul Limon', 'O', 160, 'sala', NULL),
(3, 'unida', 'T', 98856, 'sala', NULL),
(4, 'Fermin', 'N', 65, NULL, 'auditorio'),
(5, 'Fermin Ramirez', 'N', 98, 'sala', NULL),
(6, 'SALA BENITO JUAREZ', 'K', 30, 'sala', NULL),
(7, 'Miguel Hidalgo', 'A', 1234, 'sala', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `idhistorial` int(11) NOT NULL,
  `Alumno_has_Auditorio_idSolicitud` int(11) NOT NULL,
  `Alumno_idAlumno` int(11) DEFAULT NULL,
  `Maestro_idMaestro` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(11) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `idMaestro` int(11) NOT NULL,
  `numero_control` varchar(9) NOT NULL,
  `contrasena` varchar(8) NOT NULL,
  `nombre` varchar(32) DEFAULT NULL,
  `apellidos` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`idMaestro`, `numero_control`, `contrasena`, `nombre`, `apellidos`) VALUES
(1, 'P15020524', '12345678', 'Rafael', 'Rivera Lopez'),
(2, 'P15020523', '12345678', 'Alejandro', 'Cruzado Rosas'),
(3, 'P78020298', '12345678', NULL, NULL),
(4, 'P12345678', '12345678', 'Jose', 'Torres'),
(5, 'P15151515', '12345678', 'Pepe', 'Pecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretario`
--

CREATE TABLE `secretario` (
  `idSecretario` int(11) NOT NULL,
  `numero_control` varchar(8) DEFAULT NULL,
  `contrasena` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `secretario`
--

INSERT INTO `secretario` (`idSecretario`, `numero_control`, `contrasena`) VALUES
(1, 'S1502052', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlumno`);

--
-- Indices de la tabla `alumno_has_auditorio`
--
ALTER TABLE `alumno_has_auditorio`
  ADD PRIMARY KEY (`idSolicitud`,`Auditorio_idAuditorio`,`Secretario_idSecretario`),
  ADD KEY `fk_Alumno_has_Auditorio_Auditorio1_idx` (`Auditorio_idAuditorio`),
  ADD KEY `fk_Alumno_has_Auditorio_Alumno_idx` (`Alumno_idAlumno`),
  ADD KEY `fk_Alumno_has_Auditorio_Secretario1_idx` (`Secretario_idSecretario`),
  ADD KEY `fk_Alumno_has_Auditorio_Maestro1_idx` (`Maestro_idMaestro`);

--
-- Indices de la tabla `auditorio`
--
ALTER TABLE `auditorio`
  ADD PRIMARY KEY (`idAuditorio`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`idhistorial`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`idMaestro`);

--
-- Indices de la tabla `secretario`
--
ALTER TABLE `secretario`
  ADD PRIMARY KEY (`idSecretario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `alumno_has_auditorio`
--
ALTER TABLE `alumno_has_auditorio`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `auditorio`
--
ALTER TABLE `auditorio`
  MODIFY `idAuditorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `idhistorial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `idMaestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `secretario`
--
ALTER TABLE `secretario`
  MODIFY `idSecretario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_has_auditorio`
--
ALTER TABLE `alumno_has_auditorio`
  ADD CONSTRAINT `fk_Alumno_has_Auditorio_Alumno` FOREIGN KEY (`Alumno_idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumno_has_Auditorio_Auditorio1` FOREIGN KEY (`Auditorio_idAuditorio`) REFERENCES `auditorio` (`idAuditorio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumno_has_Auditorio_Maestro1` FOREIGN KEY (`Maestro_idMaestro`) REFERENCES `maestro` (`idMaestro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumno_has_Auditorio_Secretario1` FOREIGN KEY (`Secretario_idSecretario`) REFERENCES `secretario` (`idSecretario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
