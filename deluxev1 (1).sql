-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2015 a las 03:03:41
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `deluxev1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `idDatos` int(4) NOT NULL,
  `fkIdTIpoDatos` int(4) DEFAULT NULL,
  `fkIdUsuarios` int(4) DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `idEstado` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadohs`
--

CREATE TABLE IF NOT EXISTS `estadohs` (
  `idEestadoHS` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE IF NOT EXISTS `habitacion` (
  `idHabitacion` int(4) NOT NULL,
  `fkIdTipoHabitacion` int(4) DEFAULT NULL,
  `codigoHabitacion` varchar(20) DEFAULT NULL,
  `fkIdTipoEstado` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacionservicio`
--

CREATE TABLE IF NOT EXISTS `habitacionservicio` (
  `idHabitacionServicio` int(11) NOT NULL,
  `fkIdHabitacion` int(4) DEFAULT NULL,
  `fkIdServicio` int(4) DEFAULT NULL,
  `fkIdEstadoHS` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE IF NOT EXISTS `ofertas` (
  `idOferta` int(4) NOT NULL,
  `fechaInicioOferta` date DEFAULT NULL,
  `fechaFinOferta` date DEFAULT NULL,
  `fkIdTipoOferta` int(4) DEFAULT NULL,
  `nombreOferta` varchar(20) DEFAULT NULL,
  `fkIdTipoHabitacion` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `idReserva` int(4) NOT NULL,
  `fkIdUsuario` int(4) DEFAULT NULL,
  `fkIdHabitacion` int(4) DEFAULT NULL,
  `precioFinal` int(20) DEFAULT NULL,
  `fkIdEstado` int(4) DEFAULT NULL,
  `fechaInicioReserva` date DEFAULT NULL,
  `fechaFinReserva` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

CREATE TABLE IF NOT EXISTS `rolusuario` (
  `idRolUsuario` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `idServicio` int(4) NOT NULL,
  `nombreServicio` varchar(20) DEFAULT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `precioServicio` int(20) DEFAULT NULL,
  `fkTipoServicio` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodatos`
--

CREATE TABLE IF NOT EXISTS `tipodatos` (
  `idTipoDatos` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoestado`
--

CREATE TABLE IF NOT EXISTS `tipoestado` (
  `idTipoEstado` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

CREATE TABLE IF NOT EXISTS `tipohabitacion` (
  `idTipoHabitacion` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `precio` int(15) DEFAULT NULL,
  `cantHuespedes` int(4) DEFAULT NULL,
  `tamaño` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipooferta`
--

CREATE TABLE IF NOT EXISTS `tipooferta` (
  `idTipoOferta` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposervicio`
--

CREATE TABLE IF NOT EXISTS `tiposervicio` (
  `idTipoServicio` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cedula` int(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fkIdRolUsuario` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoroferta`
--

CREATE TABLE IF NOT EXISTS `valoroferta` (
  `idValorOferta` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `fkIdOferta` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`idDatos`), ADD KEY `fkIdUsuarios` (`fkIdUsuarios`), ADD KEY `fkIdTIpoDatos` (`fkIdTIpoDatos`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `estadohs`
--
ALTER TABLE `estadohs`
  ADD PRIMARY KEY (`idEestadoHS`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`idHabitacion`), ADD KEY `fkIdTipoHabitacion` (`fkIdTipoHabitacion`), ADD KEY `fkIdTipoEstado` (`fkIdTipoEstado`);

--
-- Indices de la tabla `habitacionservicio`
--
ALTER TABLE `habitacionservicio`
  ADD PRIMARY KEY (`idHabitacionServicio`), ADD KEY `fkIdHabitacion` (`fkIdHabitacion`), ADD KEY `fkIdEstadoHS` (`fkIdEstadoHS`), ADD KEY `fkIdServicio` (`fkIdServicio`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`idOferta`), ADD KEY `fkIdTipoHabitacion` (`fkIdTipoHabitacion`), ADD KEY `fkIdTipoOferta` (`fkIdTipoOferta`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReserva`), ADD KEY `fkIdHabitacion` (`fkIdHabitacion`), ADD KEY `fkIdUsuario` (`fkIdUsuario`), ADD KEY `fkIdEstado` (`fkIdEstado`);

--
-- Indices de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  ADD PRIMARY KEY (`idRolUsuario`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`), ADD KEY `fkTipoServicio` (`fkTipoServicio`);

--
-- Indices de la tabla `tipodatos`
--
ALTER TABLE `tipodatos`
  ADD PRIMARY KEY (`idTipoDatos`);

--
-- Indices de la tabla `tipoestado`
--
ALTER TABLE `tipoestado`
  ADD PRIMARY KEY (`idTipoEstado`);

--
-- Indices de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  ADD PRIMARY KEY (`idTipoHabitacion`);

--
-- Indices de la tabla `tipooferta`
--
ALTER TABLE `tipooferta`
  ADD PRIMARY KEY (`idTipoOferta`);

--
-- Indices de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  ADD PRIMARY KEY (`idTipoServicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`), ADD KEY `fkIdRolUsuario` (`fkIdRolUsuario`);

--
-- Indices de la tabla `valoroferta`
--
ALTER TABLE `valoroferta`
  ADD PRIMARY KEY (`idValorOferta`), ADD KEY `fkIdOferta` (`fkIdOferta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `idDatos` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estadohs`
--
ALTER TABLE `estadohs`
  MODIFY `idEestadoHS` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `idHabitacion` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `habitacionservicio`
--
ALTER TABLE `habitacionservicio`
  MODIFY `idHabitacionServicio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `idOferta` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idReserva` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  MODIFY `idRolUsuario` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipodatos`
--
ALTER TABLE `tipodatos`
  MODIFY `idTipoDatos` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoestado`
--
ALTER TABLE `tipoestado`
  MODIFY `idTipoEstado` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  MODIFY `idTipoHabitacion` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipooferta`
--
ALTER TABLE `tipooferta`
  MODIFY `idTipoOferta` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  MODIFY `idTipoServicio` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `valoroferta`
--
ALTER TABLE `valoroferta`
  MODIFY `idValorOferta` int(4) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos`
--
ALTER TABLE `datos`
ADD CONSTRAINT `datos_ibfk_1` FOREIGN KEY (`fkIdUsuarios`) REFERENCES `usuario` (`idUsuario`),
ADD CONSTRAINT `datos_ibfk_2` FOREIGN KEY (`fkIdTIpoDatos`) REFERENCES `tipodatos` (`idTipoDatos`);

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`fkIdTipoHabitacion`) REFERENCES `tipohabitacion` (`idTipoHabitacion`),
ADD CONSTRAINT `habitacion_ibfk_2` FOREIGN KEY (`fkIdTipoEstado`) REFERENCES `tipoestado` (`idTipoEstado`);

--
-- Filtros para la tabla `habitacionservicio`
--
ALTER TABLE `habitacionservicio`
ADD CONSTRAINT `habitacionservicio_ibfk_1` FOREIGN KEY (`fkIdHabitacion`) REFERENCES `habitacion` (`idHabitacion`),
ADD CONSTRAINT `habitacionservicio_ibfk_2` FOREIGN KEY (`fkIdEstadoHS`) REFERENCES `estadohs` (`idEestadoHS`),
ADD CONSTRAINT `habitacionservicio_ibfk_3` FOREIGN KEY (`fkIdServicio`) REFERENCES `servicio` (`idServicio`);

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
ADD CONSTRAINT `ofertas_ibfk_1` FOREIGN KEY (`fkIdTipoHabitacion`) REFERENCES `tipohabitacion` (`idTipoHabitacion`),
ADD CONSTRAINT `ofertas_ibfk_2` FOREIGN KEY (`fkIdTipoOferta`) REFERENCES `tipooferta` (`idTipoOferta`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`fkIdHabitacion`) REFERENCES `habitacion` (`idHabitacion`),
ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`fkIdUsuario`) REFERENCES `usuario` (`idUsuario`),
ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`fkIdEstado`) REFERENCES `estado` (`idEstado`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`fkTipoServicio`) REFERENCES `tiposervicio` (`idTipoServicio`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fkIdRolUsuario`) REFERENCES `rolusuario` (`idRolUsuario`);

--
-- Filtros para la tabla `valoroferta`
--
ALTER TABLE `valoroferta`
ADD CONSTRAINT `valoroferta_ibfk_1` FOREIGN KEY (`fkIdOferta`) REFERENCES `ofertas` (`idOferta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
