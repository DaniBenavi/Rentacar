-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220511.c3fb567b13
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2022 a las 12:16:14
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rentacar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `matricula` varchar(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `TipoVehiculo` varchar(20) NOT NULL,
  `precio` decimal(18,0) NOT NULL,
  `nombre_cliente` varchar(60) NOT NULL,
  `telefono_cliente` varchar(15) NOT NULL,
  `rentador` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`matricula`, `marca`, `modelo`, `TipoVehiculo`, `precio`, `nombre_cliente`, `telefono_cliente`, `rentador`) VALUES
('c-12452', 'Toyota', 'Hilux', 'pickup', '14000', 'Daniel florencio Benavides sorto', '+5003 7412-2356', 'delmar'),
('c-124523', 'nissann', 'gtr, color amarillo', 'sedan deportivo', '1700', 'Lic Delmar ', '+50370077880', 'dani');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `email`) VALUES
(0, 'dani', '$2y$10$HDwAITFzfdG9mriLTpjweuRZRNk0NQmVwxTsfJO28OFFOorT73ZOe', 'danibenavi1907@gmail.com'),
(0, 'delmar', '$2y$10$H5o/T0yqjp331Sk2rdLZpu/KBnKMtqyLWPh2mQ0PTsXpX589qmJCW', 'delmar@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



