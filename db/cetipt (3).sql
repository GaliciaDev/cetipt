-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2023 a las 02:25:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cetipt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidop` varchar(255) DEFAULT NULL,
  `apellidom` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombres`, `apellidop`, `apellidom`, `correo`, `contrasena`) VALUES
(21323, 'juan ramon', 'bravo', 'lopez', 'juan@ceti.mx', '$2y$10$DLJRXQamLJ08DB6u6J5jauhXEpof4utJgo3O9NkQcFcJGlFT6S2ui');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidop` varchar(255) DEFAULT NULL,
  `apellidom` varchar(255) DEFAULT NULL,
  `grupo` varchar(255) DEFAULT NULL,
  `carrera` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombres`, `apellidop`, `apellidom`, `grupo`, `carrera`, `correo`, `contrasena`) VALUES
(19300426, 'ian alberto', 'iñiguez', 'balvaneda', '8C1', 'desarrollo de software', 'a19300426@ceti.mx', '$2y$10$gwEZPnq6VoOwNVZAj5qX5esXnn7PlTviWPTPSSlS/JIYYlzW2obHu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluadores`
--

CREATE TABLE `evaluadores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidop` varchar(255) DEFAULT NULL,
  `apellidom` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(11) DEFAULT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidop` varchar(255) DEFAULT NULL,
  `apellidom` varchar(255) DEFAULT NULL,
  `grupo` varchar(255) DEFAULT NULL,
  `softwares` varchar(255) DEFAULT NULL,
  `mesas` int(11) DEFAULT NULL,
  `sillas` int(11) DEFAULT NULL,
  `mamparas` int(11) DEFAULT NULL,
  `computadoras` int(11) DEFAULT NULL,
  `otrosmateriales` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombres`, `apellidop`, `apellidom`, `grupo`, `softwares`, `mesas`, `sillas`, `mamparas`, `computadoras`, `otrosmateriales`) VALUES
(19300426, 'ian alberto', 'iñiguez', 'balvaneda', '8C1', 'unity', 1, 2, 1, 2, 'a ti bb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `usuario_id` int(11) DEFAULT NULL,
  `tabla` varchar(255) DEFAULT NULL,
  `lectura` tinyint(1) DEFAULT NULL,
  `escritura` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidop` varchar(255) DEFAULT NULL,
  `apellidom` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombres`, `apellidop`, `apellidom`, `correo`, `contrasena`) VALUES
(27367218, 'alejandro', 'moreno', 'hernadez', 'moreno@ceti.mx', '$2y$10$sbiCyv62zfNTdNeyr1McIeiXVP18kH7.BzLjWI6.3xZp/HzP1WM1S'),
(39789332, 'carmen', 'moreno', 'cervantes', 'carmen@ceti.mx', '$2y$10$i.hnkgPAbVU6NoJwPn.AdeJbRQ1CMCtOTI0excAOBRYdgy7Yjp52W');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) DEFAULT NULL,
  `nproyecto` varchar(255) DEFAULT NULL,
  `ncproyecto` varchar(255) DEFAULT NULL,
  `tproyecto` varchar(255) DEFAULT NULL,
  `asesort` varchar(255) DEFAULT NULL,
  `asesorm` varchar(255) DEFAULT NULL,
  `problematica` text DEFAULT NULL,
  `solucion` text DEFAULT NULL,
  `justificacion` text DEFAULT NULL,
  `objetivog` text DEFAULT NULL,
  `objetivoses` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nproyecto`, `ncproyecto`, `tproyecto`, `asesort`, `asesorm`, `problematica`, `solucion`, `justificacion`, `objetivog`, `objetivoses`) VALUES
(19300426, 'sistema de control y administracion de proyectos de titulacion', 'CETI PT', 'sitio web', 'juan ramon', 'jorge alberto chamorro', 'en desarrollo', 'haciendose', 'por que si', 'ninguno', 'tampoco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluadores`
--
ALTER TABLE `evaluadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD KEY `id` (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `administradores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `profesores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permisos_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `evaluadores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permisos_ibfk_4` FOREIGN KEY (`usuario_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `alumnos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
