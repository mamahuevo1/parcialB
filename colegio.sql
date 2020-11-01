-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2020 a las 23:44:32
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(50) NOT NULL,
  `Carrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `Carrera`) VALUES
(1, 'Ingenieria De Sistemas'),
(2, 'Ingenieria Civil'),
(3, 'Ingenieria Industrial'),
(4, 'Ingenieria Electronica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_estudiante`
--

CREATE TABLE `datos_estudiante` (
  `id` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `FN` varchar(50) NOT NULL,
  `Cedula` varchar(50) NOT NULL,
  `Carrera` varchar(50) NOT NULL,
  `Semestre` varchar(50) NOT NULL,
  `Nombre_Padre` varchar(50) NOT NULL,
  `Nombre_Madre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_estudiante`
--

INSERT INTO `datos_estudiante` (`id`, `Nombre`, `Apellido`, `FN`, `Cedula`, `Carrera`, `Semestre`, `Nombre_Padre`, `Nombre_Madre`) VALUES
(6, 'Diego', 'Gomez', '2/1/1999', '123456789', '3', '2', 'Jorge Gomez', 'Laura nievez'),
(7, 'Sandra', 'Perez', '1/2/2001', '789456123', '1', '3', 'Juan perez', 'Sofia Nieto'),
(8, 'Cristian', 'Perez', '1/1/1998', '754895314', '2', '4', 'Cristian perez', 'Victoria Alvares'),
(9, 'Laura', 'Rofriguez', '13/8/1994', '123564875', '4', '6', 'Juan Rodriguez', 'Natalia Jimenez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Cedula` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `Foto` varchar(50) NOT NULL,
  `FR` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `Nombre`, `Apellido`, `Correo`, `Cedula`, `Clave`, `Foto`, `FR`) VALUES
(1, 'mateo', 'fonseca', 'ma@gmail.com', '1001814647', '25f9e794323b453885f5181f1b624d0b', 'Publicas/Perfil/mbappe1.jpg', '2020-10-31 02:37:36'),
(2, 'Andres', 'Villafañes', 'andres@gmail.com', '1001715698', '25f9e794323b453885f5181f1b624d0b', 'Publicas/Perfil/asdasdasd.PNG', '2020-10-30 23:01:49'),
(3, 'Sergio', 'Rodriguez', 'sergio@gmail.com', '32862421', '25f9e794323b453885f5181f1b624d0b', 'Publicas/Perfil/mbappe1.jpg', '2020-10-31 02:24:30'),
(4, 'Santiago', 'Jimenez', 'Jimenez@gmail.com', '123458794', '25f9e794323b453885f5181f1b624d0b', 'Publicas/perfil/default.jpg', '2020-10-31 02:26:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_estudiante`
--
ALTER TABLE `datos_estudiante`
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
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `datos_estudiante`
--
ALTER TABLE `datos_estudiante`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
