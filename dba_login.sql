-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2022 a las 01:09:25
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dba_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(10) NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ultima_sesion` datetime DEFAULT NULL,
  `activacion` int(1) NOT NULL DEFAULT 0,
  `token` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `token_password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password_request` int(11) DEFAULT 0,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`usuario`, `password`, `nombre`, `celular`, `correo`, `ultima_sesion`, `activacion`, `token`, `token_password`, `password_request`, `fecha_registro`) VALUES
('admin', '$2y$10$wndMVxh9xDabzRVtqKk7UO8F4XujAokomM.rmfLCl1QX.zQQSyXhe', 'Diego Gutiérrez', 2147483647, 'dygutierrez96@misena.edu.co', '2022-05-22 18:06:58', 1, '07c21606ec358fd86a74606bf4ebb42d', '', 1, '2022-05-16 22:20:12'),
('asder', '$2y$10$rJPE6/tH8ZmufNsbwclx1ON1w7I4l620FmtggJH/iPn/lIKPVvePC', 'David Porras', 2147483647, 'dlporras@ucundinamarca.edu.co', NULL, 0, '45108cc79ea73d0b1050facbb83fefbb', NULL, 0, '2022-05-22 08:41:42'),
('estebanArd', '$2y$10$0ee3xkA215Qv0MypQW2YHeqVPimw5KdUUauJGNyOt/bd00PcOKsUu', 'Esteban Ardilla', 1234567800, 'jestebanardila@ucundinamarca.e', NULL, 0, '2e3d85abf0151b90fb28f522665989f1', '', 1, '2022-05-22 14:16:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
