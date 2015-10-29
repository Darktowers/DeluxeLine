-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2015 a las 20:07:21
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

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
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
`idEstado` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `descripcion`) VALUES
(1, 'Por Confirmar'),
(2, 'Confirmada'),
(3, 'Finalizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadohs`
--

CREATE TABLE IF NOT EXISTS `estadohs` (
`idEestadoHS` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadohs`
--

INSERT INTO `estadohs` (`idEestadoHS`, `descripcion`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE IF NOT EXISTS `habitacion` (
`idHabitacion` int(4) NOT NULL,
  `fkIdTipoHabitacion` int(4) DEFAULT NULL,
  `codigoHabitacion` varchar(20) DEFAULT NULL,
  `fkIdTipoEstado` int(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`idHabitacion`, `fkIdTipoHabitacion`, `codigoHabitacion`, `fkIdTipoEstado`) VALUES
(1, 1, '201', 3),
(2, 1, '202', 1),
(3, 1, '203', 1),
(4, 1, '204', 1),
(5, 1, '205', 1),
(6, 2, '301', 3),
(7, 2, '302', 1),
(8, 2, '303', 1),
(9, 2, '304', 1),
(10, 2, '305', 1),
(11, 3, '401', 3),
(12, 3, '402', 1),
(13, 3, '403', 1),
(14, 3, '404', 1),
(15, 3, '405', 1),
(16, 4, '501', 3),
(17, 4, '502', 1),
(18, 4, '503', 1),
(19, 4, '504', 1),
(20, 4, '505', 1),
(21, 5, '601', 1),
(22, 5, '602', 1),
(23, 5, '603', 1),
(24, 5, '604', 1),
(25, 5, '605', 1),
(26, 6, '701', 2),
(27, 6, '702', 3),
(28, 6, '703', 3),
(29, 6, '704', 3),
(30, 6, '705', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacionservicio`
--

CREATE TABLE IF NOT EXISTS `habitacionservicio` (
`idHabitacionServicio` int(11) NOT NULL,
  `fkIdHabitacion` int(4) DEFAULT NULL,
  `fkIdServicio` int(4) DEFAULT NULL,
  `fkIdEstadoHS` int(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitacionservicio`
--

INSERT INTO `habitacionservicio` (`idHabitacionServicio`, `fkIdHabitacion`, `fkIdServicio`, `fkIdEstadoHS`) VALUES
(57, 1, 1, 1),
(58, 1, 2, 1),
(59, 1, 3, 1),
(60, 1, 4, 1),
(61, 1, 6, 1),
(62, 1, 16, 1),
(63, 2, 1, 1),
(64, 2, 2, 1),
(65, 2, 3, 1),
(66, 2, 4, 1),
(67, 2, 5, 1),
(68, 2, 6, 1),
(69, 2, 16, 1),
(70, 3, 1, 1),
(71, 3, 2, 1),
(72, 3, 5, 1),
(73, 3, 3, 1),
(74, 3, 4, 1),
(75, 3, 6, 1),
(76, 3, 7, 1),
(77, 3, 8, 1),
(78, 3, 16, 1),
(79, 4, 1, 1),
(80, 4, 2, 1),
(81, 4, 5, 1),
(82, 4, 9, 1),
(83, 4, 4, 1),
(84, 4, 6, 1),
(85, 4, 7, 1),
(86, 4, 8, 1),
(87, 4, 16, 1),
(88, 5, 1, 1),
(89, 5, 2, 1),
(90, 5, 5, 1),
(91, 5, 9, 1),
(92, 5, 10, 1),
(93, 5, 6, 1),
(94, 5, 7, 1),
(95, 5, 8, 1),
(96, 5, 11, 1),
(97, 5, 16, 1),
(98, 6, 1, 1),
(99, 6, 2, 1),
(100, 6, 5, 1),
(101, 6, 12, 1),
(102, 6, 9, 1),
(103, 6, 13, 1),
(104, 6, 6, 1),
(105, 6, 7, 1),
(106, 6, 8, 1),
(107, 6, 14, 1),
(108, 6, 15, 1),
(109, 3, 20, 1),
(110, 4, 20, 1),
(111, 5, 19, 1),
(112, 6, 19, 1),
(113, 6, 16, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imageneshabitacion`
--

CREATE TABLE IF NOT EXISTS `imageneshabitacion` (
`idImagenesHabitacion` int(4) NOT NULL,
  `fkIdHabitacion` int(4) DEFAULT NULL,
  `urlImagenHabitacion` varchar(9999) DEFAULT NULL
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
  `nombreOferta` varchar(200) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idReserva`, `fkIdUsuario`, `fkIdHabitacion`, `precioFinal`, `fkIdEstado`, `fechaInicioReserva`, `fechaFinReserva`) VALUES
(2, 30, 26, 1106204, 2, '2015-10-29', '2015-10-30'),
(3, 30, 27, 1106204, 1, '2015-10-30', '2015-11-02'),
(4, 8, 28, 1106204, 2, '2015-10-29', '2015-11-05'),
(5, 8, 29, 1106204, 2, '2015-10-29', '2015-11-01'),
(6, 8, 30, 1106204, 2, '2015-10-29', '2015-11-04'),
(7, 8, 6, 483529, 2, '2015-10-29', '2015-10-31'),
(8, 31, 16, 775734, 2, '2015-10-29', '2015-10-31'),
(9, 32, 11, 528751, 1, '2015-10-31', '2015-11-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaservicio`
--

CREATE TABLE IF NOT EXISTS `reservaservicio` (
`idReservaServicio` int(4) NOT NULL,
  `fkIdServicio` int(4) DEFAULT NULL,
  `fkIdReserva` int(4) DEFAULT NULL,
  `precio` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

CREATE TABLE IF NOT EXISTS `rolusuario` (
`idRolUsuario` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rolusuario`
--

INSERT INTO `rolusuario` (`idRolUsuario`, `descripcion`) VALUES
(1, 'Cliente'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
`idServicio` int(4) NOT NULL,
  `nombreServicio` varchar(120) DEFAULT NULL,
  `urlImgServicio` varchar(9999) NOT NULL,
  `fkTipoServicio` int(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `nombreServicio`, `urlImgServicio`, `fkTipoServicio`) VALUES
(1, 'Aire Acondicionado', 'img/icon/1.png', 1),
(2, 'Internet', 'img/icon/2.png', 1),
(3, 'Cama Doble', 'img/icon/3.png', 1),
(4, 'Baño + Tina', 'img/icon/4.png', 1),
(5, 'Televisor LCD + Cable', 'img/icon/5.png', 2),
(6, 'Todo para preparar cafe', 'img/icon/6.png', 1),
(7, 'Sala', 'img/icon/7.png', 2),
(8, 'Mesa para Portatil', 'img/icon/8.png', 2),
(9, '2 Camas Dobles', 'img/icon/9.png', 3),
(10, 'Baño Grande + Tina', 'img/icon/10.png', 2),
(11, 'Parqueadero', 'img/icon/11.png', 3),
(12, 'Reproductor de DVD', 'img/icon/12.png', 3),
(13, '2 Baños + Tina', 'img/icon/13.png', 3),
(14, 'Parqueadero Doble', 'img/icon/14.png', 3),
(15, 'Frutas Frescas', 'img/icon/15.png', 3),
(16, 'Telefono', 'img/icon/16.png', 1),
(17, 'Bebidas', 'img/icon/17.png', 4),
(18, 'Alimentos', 'img/icon/18.png', 4),
(19, 'Bar', 'img/icon/19.png', 3),
(20, 'Mini Bar', 'img/icon/20.png', 2),
(21, 'Plus', 'img/icon/21.png', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicioconcosto`
--

CREATE TABLE IF NOT EXISTS `servicioconcosto` (
`idServicioConCosto` int(4) NOT NULL,
  `fkIdServicio` int(4) DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL,
  `precio` int(50) DEFAULT NULL,
  `imgServicioCC` varchar(9999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodatos`
--

CREATE TABLE IF NOT EXISTS `tipodatos` (
`idTipoDatos` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodatos`
--

INSERT INTO `tipodatos` (`idTipoDatos`, `descripcion`) VALUES
(1, 'Email'),
(2, 'TelefonoContato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoestado`
--

CREATE TABLE IF NOT EXISTS `tipoestado` (
`idTipoEstado` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoestado`
--

INSERT INTO `tipoestado` (`idTipoEstado`, `descripcion`) VALUES
(1, 'Vacia'),
(2, 'Ocupada'),
(3, 'Reservada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

CREATE TABLE IF NOT EXISTS `tipohabitacion` (
`idTipoHabitacion` int(4) NOT NULL,
  `nombreHabitacion` varchar(20) DEFAULT NULL,
  `descripcionHabitacion` varchar(9999) NOT NULL DEFAULT '',
  `precio` int(15) DEFAULT NULL,
  `cantHuespedes` int(4) DEFAULT NULL,
  `tamaño` int(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipohabitacion`
--

INSERT INTO `tipohabitacion` (`idTipoHabitacion`, `nombreHabitacion`, `descripcionHabitacion`, `precio`, `cantHuespedes`, `tamaño`) VALUES
(1, 'Business Room', 'cogedora y confortable es el alojamiento perfecto para personas en viaje de negocios, equipadas con los mejores servicios tecnológicos, conexión gratuita a internet de alta velocidad, minibar, caja fuerte, teléfono con linea directa desde la habitación TV LCD de pantalla plana. La habitación individual pone a su disposición una cama grande estilo francés y si lo desea es posible solicitar la habitación doble para uso individual.', 483529, 2, 20),
(2, 'Standard Room', 'Acogedora y confortable es el alojamiento perfecto para personas en viaje de negocios, equipadas con los mejores servicios tecnológicos, conexión gratuita a internet de alta velocidad, minibar, caja fuerte, teléfono con linea directa desde la habitación TV LCD de pantalla plana. La habitación individual pone a su disposición una cama grande estilo francés y si lo desea es posible solicitar la habitación doble para uso individual.', 483529, 2, 20),
(3, 'Comfort Room', 'Acogedora y confortable es el alojamiento perfecto para personas en viaje de negocios, equipadas con los mejores servicios tecnológicos, conexión gratuita a internet de alta velocidad, minibar, caja fuerte, teléfono con linea directa desde la habitación TV LCD de pantalla plana. La habitación individual pone a su disposición una cama grande estilo francés y si lo desea es posible solicitar la habitación doble para uso individual.', 528751, 3, 26),
(4, 'Supeior Room', 'Acogedora y confortable es el alojamiento perfecto para personas en viaje de negocios, equipadas con los mejores servicios tecnológicos, conexión gratuita a internet de alta velocidad, minibar, caja fuerte, teléfono con linea directa desde la habitación TV LCD de pantalla plana. La habitación individual pone a su disposición una cama grande estilo francés y si lo desea es posible solicitar la habitación doble para uso individual.', 775734, 3, 36),
(5, 'Junior Suite', 'Acogedora y confortable es el alojamiento perfecto para personas en viaje de negocios, equipadas con los mejores servicios tecnológicos, conexión gratuita a internet de alta velocidad, minibar, caja fuerte, teléfono con linea directa desde la habitación TV LCD de pantalla plana. La habitación individual pone a su disposición una cama grande estilo francés y si lo desea es posible solicitar la habitación doble para uso individual.', 967058, 4, 50),
(6, 'Suite', 'Acogedora y confortable es el alojamiento perfecto para personas en viaje de negocios, equipadas con los mejores servicios tecnológicos, conexión gratuita a internet de alta velocidad, minibar, caja fuerte, teléfono con linea directa desde la habitación TV LCD de pantalla plana. La habitación individual pone a su disposición una cama grande estilo francés y si lo desea es posible solicitar la habitación doble para uso individual.', 1106204, 4, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipooferta`
--

CREATE TABLE IF NOT EXISTS `tipooferta` (
`idTipoOferta` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipooferta`
--

INSERT INTO `tipooferta` (`idTipoOferta`, `descripcion`) VALUES
(1, 'Porcentaje'),
(2, 'Servicios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposervicio`
--

CREATE TABLE IF NOT EXISTS `tiposervicio` (
`idTipoServicio` int(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiposervicio`
--

INSERT INTO `tiposervicio` (`idTipoServicio`, `descripcion`) VALUES
(1, 'Basicos'),
(2, 'Medios'),
(3, 'Altos'),
(4, 'Extras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idUsuario` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `cedula` int(15) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `fkIdRolUsuario` int(4) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `cedula`, `password`, `fkIdRolUsuario`, `email`) VALUES
(8, 'William', 1013658776, 'e31c6f3f16cc0a094e0716fb201caf02', 1, 'wbernal@ultimateboost.com'),
(9, 'William', 1013658776, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'wbernal@lala.com'),
(10, 'nuevo', 123456789, '827ccb0eea8a706c4c34a16891f84e7b', 1, 'nuevo@h.com'),
(11, 'pruebaInicio', 1231, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'prueba@inicio.com'),
(12, 'otro', 12222, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'otro@putostodos.com'),
(13, 'otro2', 1234123, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'otro2@otraves.com'),
(14, 'otro3', 1234123, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'otro2@ootraves.com'),
(15, 'otro4', 1234123, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'otro4@ootraves.com'),
(16, 'otroooo', 111111, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'otroooo@kdkd.com'),
(17, 'qqwqw', 123122, 'f190ce9ac8445d249747cab7be43f7d5', 1, 'qqq@aqq.om'),
(18, 'qwqeqw', 123412, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'qweqeqw@qweqwe.dc'),
(19, 'qqqqq', 111111, '81dc9bdb52d04dc20036dbd8313ed055', 1, '1qqqq@ddd.com'),
(20, 'ewe', 212341, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'mamada@ultimateboost.com'),
(21, 'ewe', 212341, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'mamada2@ultimateboost.com'),
(22, 'lol', 1234, '9cdfb439c7876e703e307864c9167a15', 1, 'lol@lol.com'),
(23, 'lelelee', 123412, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'l3l3@lele.com'),
(24, 'valaabuela', 1234, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'valaabuela@ksk.com'),
(25, 'lol', 212, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'lolol@lololo.com'),
(26, 'valeverga', 1234, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'valeverga@lsls.com'),
(27, 'puta', 123412, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'puta@puta.com'),
(28, 'puta', 123412, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'puta2@puta.com'),
(29, 'tomalo', 12341, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'tomalo@lalal.com'),
(30, 'pruebaregistro', 1234, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'pR@h.com'),
(31, 'Will', 1234, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'w@w.com'),
(32, 'prueba1111', 111111, '81dc9bdb52d04dc20036dbd8313ed055', 1, 'prpr@l.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoroferta`
--

CREATE TABLE IF NOT EXISTS `valoroferta` (
`idValorOferta` int(4) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
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
-- Indices de la tabla `imageneshabitacion`
--
ALTER TABLE `imageneshabitacion`
 ADD PRIMARY KEY (`idImagenesHabitacion`), ADD KEY `fkIdHabitacion` (`fkIdHabitacion`);

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
-- Indices de la tabla `reservaservicio`
--
ALTER TABLE `reservaservicio`
 ADD PRIMARY KEY (`idReservaServicio`), ADD KEY `fkIdServicio` (`fkIdServicio`), ADD KEY `fkIdReserva` (`fkIdReserva`);

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
-- Indices de la tabla `servicioconcosto`
--
ALTER TABLE `servicioconcosto`
 ADD PRIMARY KEY (`idServicioConCosto`), ADD KEY `fkIdServicio` (`fkIdServicio`);

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
MODIFY `idEstado` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estadohs`
--
ALTER TABLE `estadohs`
MODIFY `idEestadoHS` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
MODIFY `idHabitacion` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `habitacionservicio`
--
ALTER TABLE `habitacionservicio`
MODIFY `idHabitacionServicio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT de la tabla `imageneshabitacion`
--
ALTER TABLE `imageneshabitacion`
MODIFY `idImagenesHabitacion` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
MODIFY `idOferta` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
MODIFY `idReserva` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `reservaservicio`
--
ALTER TABLE `reservaservicio`
MODIFY `idReservaServicio` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
MODIFY `idRolUsuario` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
MODIFY `idServicio` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `servicioconcosto`
--
ALTER TABLE `servicioconcosto`
MODIFY `idServicioConCosto` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipodatos`
--
ALTER TABLE `tipodatos`
MODIFY `idTipoDatos` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipoestado`
--
ALTER TABLE `tipoestado`
MODIFY `idTipoEstado` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
MODIFY `idTipoHabitacion` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipooferta`
--
ALTER TABLE `tipooferta`
MODIFY `idTipoOferta` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
MODIFY `idTipoServicio` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
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
ADD CONSTRAINT `habitacionservicio_ibfk_1` FOREIGN KEY (`fkIdHabitacion`) REFERENCES `tipohabitacion` (`idTipoHabitacion`),
ADD CONSTRAINT `habitacionservicio_ibfk_2` FOREIGN KEY (`fkIdEstadoHS`) REFERENCES `estadohs` (`idEestadoHS`),
ADD CONSTRAINT `habitacionservicio_ibfk_3` FOREIGN KEY (`fkIdServicio`) REFERENCES `servicio` (`idServicio`);

--
-- Filtros para la tabla `imageneshabitacion`
--
ALTER TABLE `imageneshabitacion`
ADD CONSTRAINT `imageneshabitacion_ibfk_1` FOREIGN KEY (`fkIdHabitacion`) REFERENCES `habitacion` (`idHabitacion`);

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
-- Filtros para la tabla `reservaservicio`
--
ALTER TABLE `reservaservicio`
ADD CONSTRAINT `reservaservicio_ibfk_1` FOREIGN KEY (`fkIdServicio`) REFERENCES `servicio` (`idServicio`),
ADD CONSTRAINT `reservaservicio_ibfk_2` FOREIGN KEY (`fkIdReserva`) REFERENCES `reserva` (`idReserva`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`fkTipoServicio`) REFERENCES `tiposervicio` (`idTipoServicio`);

--
-- Filtros para la tabla `servicioconcosto`
--
ALTER TABLE `servicioconcosto`
ADD CONSTRAINT `servicioconcosto_ibfk_1` FOREIGN KEY (`fkIdServicio`) REFERENCES `servicio` (`idServicio`);

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
