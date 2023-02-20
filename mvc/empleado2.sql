-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-02-2023 a las 04:16:59
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleado2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `PK_departamento` int(11) NOT NULL,
  `nombre_departamento` varchar(60) NOT NULL,
  `activo` int(11) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`PK_departamento`, `nombre_departamento`, `activo`, `hora`, `fecha`) VALUES
(56, 'raul', 1, '10:29:33', '2023-02-15'),
(57, 'raul', 1, '10:29:33', '2023-02-15'),
(58, 'raul', 1, '10:29:33', '2023-02-15'),
(59, 'xxddxdddddd', 1, '10:30:06', '2023-02-15'),
(60, 'jajajajaj', 1, '10:30:40', '2023-02-15'),
(61, 'jajajajaj', 1, '10:30:40', '2023-02-15'),
(62, 'zzzzzzzz', 1, '10:30:57', '2023-02-15'),
(63, 'zzzzzzzz', 1, '10:30:57', '2023-02-15'),
(64, 'zzzzzzzz', 1, '10:30:57', '2023-02-15'),
(65, 'jwgyuewqgfuqweundbuiygcqny', 1, '10:31:24', '2023-02-15'),
(66, 'jwgyuewqgfuqweundbuiygcqny', 1, '10:31:24', '2023-02-15'),
(67, 'hphpphphp', 1, '10:32:04', '2023-02-15'),
(68, 'hphpphphp', 1, '10:32:04', '2023-02-15'),
(69, 'raul', 1, '10:35:41', '2023-02-15'),
(70, 'alexis', 1, '10:36:11', '2023-02-15'),
(71, 'kkkkkkk', 1, '10:54:56', '2023-02-15'),
(72, 'peijdiwoqde', 1, '11:10:59', '2023-02-15'),
(73, 'qwertyuiop', 1, '11:12:03', '2023-02-15'),
(74, 'raul', 1, '11:12:33', '2023-02-15'),
(75, '3kjuquieiqweuhw', 1, '11:15:08', '2023-02-15'),
(76, 'ppppppp', 1, '11:16:43', '2023-02-15'),
(77, 'marco', 1, '11:17:45', '2023-02-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `pk_empleado` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `primer_apellido` varchar(40) NOT NULL,
  `segundo_apellido` varchar(40) NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_puesto` int(11) NOT NULL,
  `activo` int(11) NOT NULL,
  `latitud` varchar(50) DEFAULT NULL,
  `longitud` varchar(50) DEFAULT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`pk_empleado`, `nombres`, `primer_apellido`, `segundo_apellido`, `edad`, `fecha_nac`, `telefono`, `correo`, `clave`, `foto`, `fk_puesto`, `activo`, `latitud`, `longitud`, `fecha`, `hora`) VALUES
(3, 'asdasdas', 'asdasd', 'asdasd', 28, '0012-03-12', '1287319371', 'adia9wwdq@asidjooa.com', '092173970231', 'vistas/imagenesCaptura de Pantalla 2022-06-13 a la(s) 13.16.43.png', 2, 1, '019283973128', '1892379128', '2023-02-13', '12:08:21'),
(4, 'adsasda', 'sadasd', 'sdada', 29, '0123-03-12', '9013820307', '1987398127@alsjdas.com', '13908120381298', 'vistas/imagenesCaptura de Pantalla 2022-09-07 a la(s) 8.43.40.png', 1, 1, '10927312372189', '1823712893', '2023-02-13', '12:09:31'),
(5, 'hadowudhiuhauh', 'aiwdhawiudhiu', 'iuhwadhdwaui', 28, '1830-09-13', '1302398129', '1231mkwonwq@aoisdj.com', '13298732891398', 'vistas/imagenes/Captura de Pantalla 2022-09-07 a la(s) 8.43.40.png', 2, 1, '9083123978', '-19287312983', '2023-02-13', '12:13:16'),
(6, 'asdaskjdh', 'asdkjhasdkj', 'akdjhaskjd', 27, '7931-02-18', '8712938127', 'jiowadja@asd.com', 'p1iu38291732981', 'vistas/imagenes/Captura de Pantalla 2022-09-07 a la(s) 8.43.40.png', 1, 1, '128372179837', '819273981273', '2023-02-13', '12:20:50'),
(7, 'duheduw', 'hduudhu', 'dyede', 19, '2023-02-13', '3231041480', 'pAvi@gmail.com', 'neuxne3', 'vistas/imagenes/29bea4762c52b19c54c867322e54a094-diseno-de-fondo-azul-abstracto.jpeg', 2, 1, '32432432', '32432423', '2023-02-13', '13:43:09'),
(8, 'Giovanni ', 'Machuca', 'Pereida', 38, '2023-02-14', '3113424342', 'cdscs@gmail.com', 'wfwe4234', 'vistas/imagenes/Captura de Pantalla 2022-09-07 a la(s) 8.43.40.png', 1, 1, '2324324', '342423', '2023-02-14', '17:30:50'),
(9, 'Cesar', 'POnche', 'Huerta', 23, '2023-02-15', '3231041480', 'udhuwe@gmail.com', 'hd7283q78e', 'vistas/imagenes/29bea4762c52b19c54c867322e54a094-diseno-de-fondo-azul-abstracto.jpeg', 5, 1, '73286432', '4234234', '2023-02-15', '17:15:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `pk_material` int(11) NOT NULL,
  `codigo` varchar(35) NOT NULL,
  `nombre_material` varchar(35) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `imagen_codigo` varchar(60) NOT NULL,
  `cantidad_inventario` int(11) NOT NULL,
  `costo` decimal(8,2) DEFAULT NULL,
  `fecha_adquisicion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `pk_prestamo` int(11) NOT NULL,
  `fk_empleado` int(11) NOT NULL,
  `fk_material` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `pk_puesto` int(11) NOT NULL,
  `nombre_puesto` varchar(50) NOT NULL,
  `salario` decimal(8,2) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `habilitado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`pk_puesto`, `nombre_puesto`, `salario`, `hora`, `fecha`, `habilitado`) VALUES
(1, 'intendencia', '3500.00', '09:58:20', '2023-02-09', 1),
(2, 'Gerencia', '26000.00', '13:46:11', '2023-02-10', 1),
(3, 'Maestro', '383424.00', '17:32:37', '2023-02-14', 1),
(4, 'Profesor', '23332.00', '17:37:52', '2023-02-14', 1),
(5, 'Futbolista', '20000.00', '17:40:46', '2023-02-14', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`PK_departamento`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`pk_empleado`),
  ADD KEY `fk_puesto` (`fk_puesto`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`pk_material`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD KEY `fk_empleado` (`fk_empleado`),
  ADD KEY `fk_material` (`fk_material`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`pk_puesto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `PK_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `pk_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `pk_material` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `pk_puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`fk_puesto`) REFERENCES `puesto` (`pk_puesto`);

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`fk_empleado`) REFERENCES `empleado` (`pk_empleado`),
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`fk_material`) REFERENCES `materiales` (`pk_material`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
