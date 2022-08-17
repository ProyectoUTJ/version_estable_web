-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2022 a las 00:43:01
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flotilla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminempresa`
--

CREATE TABLE `adminempresa` (
  `id_adminE` int(11) NOT NULL,
  `nombre_admem` varchar(255) DEFAULT NULL,
  `apellidoM` varchar(255) DEFAULT NULL,
  `apellidoP` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `empresa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adminempresa`
--

INSERT INTO `adminempresa` (`id_adminE`, `nombre_admem`, `apellidoM`, `apellidoP`, `usuario`, `password`, `telefono`, `empresa`) VALUES
(1, 'Kayllie', 'Allende', 'Ramirez', 'kay@gmail.com', '1q2w3e4r', '21387129837', 1),
(2, 'Fabian', 'Torres', 'Rodriguez', 'frabian@gmail.com', '1q2w3e4r', '2371238217', 2),
(3, 'Vicente', 'Cobarrubias', 'Gonzales', 'vicente@gmail.com', '123456', '32423423423', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminsistema`
--

CREATE TABLE `adminsistema` (
  `id_admin` int(11) NOT NULL,
  `nombre_adm` varchar(255) DEFAULT NULL,
  `apellidoM` varchar(255) DEFAULT NULL,
  `apellidoP` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adminsistema`
--

INSERT INTO `adminsistema` (`id_admin`, `nombre_adm`, `apellidoM`, `apellidoP`, `telefono`, `correo`, `password`) VALUES
(1, 'Torivio', 'Gonzalez', 'Forte', '331265693432', 'tgf@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id_conductor` int(11) NOT NULL,
  `nombre_cond` varchar(255) DEFAULT NULL,
  `apellidoP` varchar(255) DEFAULT NULL,
  `apellidoM` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `empresa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id_conductor`, `nombre_cond`, `apellidoP`, `apellidoM`, `telefono`, `usuario`, `password`, `empresa`) VALUES
(1, 'Ioan', 'Villa', 'Alva', '32984713', 'ioan@gmial.com', '123456', 1),
(2, 'Najat', 'Cortes', 'Aguilar', '324234321', 'nat@gmail.com', '123456', 1),
(3, 'Susana', 'Ayala', 'Martinez', '324234234', 'susan@gmail.com', '123456', 1),
(4, 'Tomas', 'Fajardo', 'Fuentes', '235265765', 'tom@gmail.com', '123456', 2),
(5, 'Toreto', 'Oconer', 'Catalan', '3435654623', 'tor@gmail.com', '154432', 2),
(6, 'Maria', 'Urbano', 'Burgos', '8723288877', 'mari@gmail.com', '123234', 2),
(7, 'Iria', 'Valdivia', 'Aliaga', '8723642837', 'iria@gmail.com', '1234567', 3),
(8, 'Alfonso', 'Ilustre', 'Zavala', '674556334', 'alfon@gmail.com', '123456', 3),
(9, 'humberto', 'Chang', 'Martinez', '564453322', 'chang@gmail.com', '23113213', 3),
(10, 'Graciela', 'Vela', 'Valera', '84372384', 'vela@gmail.com', '123456', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumo`
--

CREATE TABLE `consumo` (
  `id_consumo` int(11) NOT NULL,
  `Cargcombus` int(11) DEFAULT NULL,
  `consumo` double NOT NULL,
  `costo` double NOT NULL,
  `vehiculo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consumo`
--

INSERT INTO `consumo` (`id_consumo`, `Cargcombus`, `consumo`, `costo`, `vehiculo`) VALUES
(1, 30, 0, 21.19, 1),
(2, 40, 10, 22.12, 2),
(3, 30, 7, 21, 3),
(4, 25, 0, 23.5, 2),
(5, 12, 0, 21.99, 8),
(6, 12, 0, 21.19, 6),
(7, 1, 0, 23, 6),
(8, 1, 0, 23, 6),
(21, 25, 16, 21.19, 7),
(22, 60, 5, 21.19, 8),
(23, 30, 10, 21.19, 2),
(24, 28, 10.714285714285714, 20, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre_em` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `rfc` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre_em`, `direccion`, `telefono`, `rfc`, `password`, `correo`, `tipo`) VALUES
(1, 'Flecha amarilla', 'oro #3423 ', '32124135466', 'rtf12345', '123456', 'flecha@gmail.com', 'A'),
(2, 'frammex', 'carteros #1063', '323546345542', 'rtf1234ed', '1q2w3e4r', 'frammex@gmail.com', 'B'),
(3, 'dar', 'cruz #2012', '4234234234', 'rtf12se4', '1q2w3e4r5t', 'dar@gmail.con', 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manual_mantenimiento`
--

CREATE TABLE `manual_mantenimiento` (
  `id_mantenimiento` int(11) NOT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `ageInc` int(11) DEFAULT NULL,
  `ageFin` int(11) DEFAULT NULL,
  `kilometraje` int(11) DEFAULT NULL,
  `detalle` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `manual_mantenimiento`
--

INSERT INTO `manual_mantenimiento` (`id_mantenimiento`, `marca`, `ageInc`, `ageFin`, `kilometraje`, `detalle`) VALUES
(1, 'volkswagen', 2020, 2023, 5000, 'cambio de aceite \r\ncambio de filtro de aceite\r\narandela\r\nproteccion de terminal\r\nnanobiocida ind 50ml'),
(2, 'chevrolet', 2018, 2023, 5000, 'cambio de aceite \r\ncambio de filtro de aceite \r\nreajustar suspension');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_vehiculo`
--

CREATE TABLE `status_vehiculo` (
  `id_status` int(11) NOT NULL,
  `vehiculo` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status_vehiculo`
--

INSERT INTO `status_vehiculo` (`id_status`, `vehiculo`, `estado`) VALUES
(1, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `placas` varchar(255) DEFAULT NULL,
  `Capcombustible` int(11) DEFAULT NULL,
  `Tipcombustible` varchar(255) DEFAULT NULL,
  `Tipvehiculo` varchar(255) DEFAULT NULL,
  `kilometraje` int(255) DEFAULT NULL,
  `codigoQR` varchar(255) DEFAULT NULL,
  `empresa` int(11) NOT NULL,
  `conductor` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_vehiculo`, `marca`, `age`, `nombre`, `placas`, `Capcombustible`, `Tipcombustible`, `Tipvehiculo`, `kilometraje`, `codigoQR`, `empresa`, `conductor`) VALUES
(1, 'nissan', '2018', 'versa', 'aj43a', 43, 'gasolina', 'ligero', 300, NULL, 1, 1),
(7, 'Ford', '2022', 'F-350', 'ad34fs', 50, 'dicel', 'pesado', 400, 'v_v_f4eefc55c3ebbd1fa200d9f990d69dad.png', 2, NULL),
(2, 'Chevrolet', '2019', 'Aveo', 'aj764r', 45, 'gasolina', 'ligero', 400, 'v_v_f9f26ad82fc1e9509ce028d8e0040f3b.png', 2, NULL),
(6, 'nissan', '2019', 'march', 'aj5s3', 50, 'gasolina', 'lijero', 600, NULL, 3, 9),
(8, 'Honda', '2020', 'Cargo 150', '4F4NB', 15, 'gasolina', 'motocicleta', 400, 'v_v_a9b89447cd5b11fdfb5cc42d9ac3cf29.png', 2, NULL),
(3, 'dogde', '2018', 'attitude', 'wc23fv4v', 50, 'gasolina', 'ligero', 300, 'v_v_406045081f2eabaa0ffdc788515aee81.png', 2, NULL),
(10, 'BMW', '2019', 'SERI3', 'JV44XX2', 50, 'gasolina', 'ligero', 400, 'v_v_5ce4dc174f27f5d6b19b99860c6b08a8.png', 2, NULL),
(4, 'Volkswagen', '2022', 'Vento', 'af4239d', 40, 'gasolina', 'ligero', 4500, 'v_v_a22223628a101dc0769f65691932830a.png', 2, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adminempresa`
--
ALTER TABLE `adminempresa`
  ADD PRIMARY KEY (`id_adminE`),
  ADD KEY `empresa` (`empresa`);

--
-- Indices de la tabla `adminsistema`
--
ALTER TABLE `adminsistema`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id_conductor`),
  ADD KEY `empresa` (`empresa`);

--
-- Indices de la tabla `consumo`
--
ALTER TABLE `consumo`
  ADD PRIMARY KEY (`id_consumo`),
  ADD KEY `vehiculo` (`vehiculo`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `manual_mantenimiento`
--
ALTER TABLE `manual_mantenimiento`
  ADD PRIMARY KEY (`id_mantenimiento`);

--
-- Indices de la tabla `status_vehiculo`
--
ALTER TABLE `status_vehiculo`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `vehiculo` (`vehiculo`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `empresa` (`empresa`),
  ADD KEY `conductor` (`conductor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adminempresa`
--
ALTER TABLE `adminempresa`
  MODIFY `id_adminE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `adminsistema`
--
ALTER TABLE `adminsistema`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id_conductor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `consumo`
--
ALTER TABLE `consumo`
  MODIFY `id_consumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `manual_mantenimiento`
--
ALTER TABLE `manual_mantenimiento`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `status_vehiculo`
--
ALTER TABLE `status_vehiculo`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
