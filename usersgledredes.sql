-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2022 a las 16:53:12
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gled`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersgledredes`
--

CREATE TABLE `usersgledredes` (
  `id` int(11) NOT NULL,
  `perfil` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usersgledredes`
--

INSERT INTO `usersgledredes` (`id`, `perfil`, `name`, `lastname`, `user`, `password`, `status`) VALUES
(1, 'superadmin', 'gled', 'redes', 'superadmin', '81dc9bdb52d04dc20036dbd8313ed055', 'activo'),
(2, 'usermx', 'gledmx', 'mexico', 'gledredesmx', '927d58a527ad17de9f08cc3eb8ff858d', 'activo'),
(3, 'userch', 'gledch', 'chile', 'gledredesch', 'ff349b08aa2c477c52435b9686a21670', 'activo'),
(4, 'userec', 'gledec', 'ecuador', 'gledredesec', '46105853048fe6610642d366536ecedb', 'activo'),
(5, 'userltm', 'gledltm', 'latam', 'gledredesltm', '302021b20b272051ece696417f8b9709', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usersgledredes`
--
ALTER TABLE `usersgledredes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usersgledredes`
--
ALTER TABLE `usersgledredes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
