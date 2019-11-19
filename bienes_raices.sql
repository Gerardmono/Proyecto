-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2019 a las 07:38:36
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bienes_raices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `editado` datetime NOT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`, `editado`, `nivel`) VALUES
(1, 'mono', 'mono', '$2y$12$xLWiKfIgMsL3FpdLWox9h.h2E/Tll/1tY4jpF4hhXo/Cvbysjh0nC', '2019-09-12 18:50:30', 1),
(3, 'mono1', 'mono1', '$2y$12$5A3NuQlUx4Mso21K50XucO2GJJeaD/xEW1PTl.wTqQLXueN.ioH4e', '0000-00-00 00:00:00', 0),
(10, 'admin', 'admin', '$2y$12$oWY0dkt0yLYg9ei8hS0wHuhiuOmlOhtlXzLKbVhRRmoZKFqedgGzO', '0000-00-00 00:00:00', 1),
(12, '', '', '$2y$12$Ox63HCjo8Xar/UpJiKsHHeQrmREdaXCQRxUd1OV1g0v3HMiBg1E2u', '0000-00-00 00:00:00', 0),
(18, 'mayte', 'Mayte', '$2y$12$ignbGII9G.SBPrcwPZ/mlu0KTLny3SEVWS0RiUUh2tlLTzBqFGprS', '2019-09-13 15:56:37', 0),
(19, 'karla', 'karla', '$2y$12$rC1Q8S95iM8dOXkIdv/V9OWSZGLBHRomhgWKJIqeAHu4ciYQdBb3O', '2019-09-13 15:56:47', 0),
(23, '1', '1', '$2y$12$VyG4YT89PuSs/YzqnV8UOOMTDhaZ6eWxGR1YJRswgf16ijsi/INrC', '0000-00-00 00:00:00', 0),
(26, 'csd', 'scd', '$2y$12$hL2yxug6PfeZiVFR2wt2EOLiRPY3HqZAESfAteZ2r/I4meNAdvsYy', '0000-00-00 00:00:00', 0),
(27, 'qwq', 'qw', '$2y$12$5EeyEgD4M1Rbeev3mwexDOlkGEBePZx3pKpVvUwKfaRjDn2jjJ.fq', '0000-00-00 00:00:00', 0),
(28, 'mosdf', 'ssd', '$2y$12$P.7Ngyv5TY6zz.7TQyJ3Se9RxHQ5y7lq4cHSsF7YHTb46iXOxQOp2', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id_Entrada` int(11) NOT NULL,
  `autor` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id_Entrada`, `autor`, `titulo`, `texto`, `url_imagen`, `fecha`) VALUES
(3, 3, 'Consejos para tener una alberca en tu casa sin gas', '                                                                                                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam sunt perferendis. Illo similique totam ratione harum odio velit qui sint veritatis beatae, sit dolorem saepe tempore doloribus. Quia, amet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis aperiam quas aspernatur placeat. Atque expedita corrupti quam, facere sint dignissimos aperiam aliquam in nobis voluptates, quae similique repellendus, incidunt fuga!                  d                                                                                            ', 'anuncio3.jpg', '2019-11-17 20:25:30'),
(4, 3, 'Guia para la decoracion de tu hogar', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam sunt perferendis. Illo similique totam ratione harum odio velit qui sint veritatis beatae, sit dolorem saepe tempore doloribus. Quia, amet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis aperiam quas aspernatur placeat. Atque expedita corrupti quam, facere sint dignissimos aperiam aliquam in nobis voluptates, quae similique repellendus, incidunt fuga!', 'blog2.jpg', '2019-11-17 21:12:16'),
(5, 3, 'Guia para la decoracion de tu hogar', '                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam sunt perferendis. Illo similique totam ratione harum odio velit qui sint veritatis beatae, sit dolorem saepe tempore doloribus. Quia, amet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis aperiam quas aspernatur placeat. Atque expedita corrupti quam, facere sint dignissimos aperiam aliquam in nobis voluptates, quae similique repellendus, incidunt fuga!                      ', 'blog3.jpg', '2019-11-17 21:14:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id_Propiedad` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `eslogan` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `recamaras` tinyint(3) UNSIGNED NOT NULL,
  `banios` tinyint(3) UNSIGNED NOT NULL,
  `cajones` tinyint(3) UNSIGNED NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id_Propiedad`, `nombre`, `precio`, `eslogan`, `descripcion`, `recamaras`, `banios`, `cajones`, `imagen`) VALUES
(1, 'Casa de lujo en el lago', '$3,000,000', 'Casa en el lago con excelente vista, acabados de lujo a un excelente precio', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam sunt perferendis. Illo similique totam ratione harum odio velit qui sint veritatis beatae, sit dolorem saepe tempore doloribus. Quia, amet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis aperiam quas aspernatur placeat. Atque expedita corrupti quam, facere sint dignissimos aperiam aliquam in nobis voluptates, quae similique repellendus, incidunt fuga!', 3, 3, 3, 'anuncio1.jpg'),
(2, 'Casa terminados de lujo', '2000000', 'Casa en el lago con excelente vista, acabados de lujo a un excelente precio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid sed doloremque, minima officiis sint, vero deserunt molestias quis maiores nisi cum perferendis dolores praesentium nostrum rem itaque alias tempora dolorem.', 3, 2, 1, 'anuncio2.jpg'),
(11, 'Casa con alberca', '3000000', 'Casa en el lago con excelente vista, acabados de lujo a un excelente precio', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam sunt perferendis. Illo similique totam ratione harum odio velit qui sint veritatis beatae, sit dolorem saepe tempore doloribus. Quia, amet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis aperiam quas aspernatur placeat. Atque expedita corrupti quam, facere sint dignissimos aperiam aliquam in nobis voluptates, quae similique repellendus, incidunt fuga!', 1, 1, 0, 'anuncio3.jpg'),
(12, 'Casa fuera de la ciudad', '2200000', 'Casa en el lago con excelente vista, acabados de lujo fuera de la ciudad a un excelente precio', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam sunt perferendis. Illo similique totam ratione harum odio velit qui sint veritatis beatae, sit dolorem saepe tempore doloribus. Quia, amet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis aperiam quas aspernatur placeat. Atque expedita corrupti quam, facere sint dignissimos aperiam aliquam in nobis voluptates, quae similique repellendus, incidunt fuga!', 2, 2, 2, 'anuncio4.jpg'),
(13, 'Casa frente al bosque', '3500000', 'Casa frente a un hermoso bosque con excelente vista, acabados de lujo a un excelente precio', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam sunt perferendis. Illo similique totam ratione harum odio velit qui sint veritatis beatae, sit dolorem saepe tempore doloribus. Quia, amet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis aperiam quas aspernatur placeat. Atque expedita corrupti quam, facere sint dignissimos aperiam aliquam in nobis voluptates, quae similique repellendus, incidunt fuga!', 3, 1, 2, 'anuncio5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimoniales`
--

CREATE TABLE `testimoniales` (
  `Texto` text NOT NULL,
  `Autor` varchar(40) NOT NULL,
  `id_Testimonial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `testimoniales`
--

INSERT INTO `testimoniales` (`Texto`, `Autor`, `id_Testimonial`) VALUES
('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere accusamus non fugit ut harum libero. Optio a deleniti, qui ratione itaque, soluta, modi aperiam id atque fugit nam repudiandae dicta!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Autem similique fugit cum quo excepturi tempore dicta dignissimos natus exercitationem debitis soluta adipisci molestiae accusantium, sit vitae quidem vel pariatur quisquam?', 'Usuario1', 1),
('Casa frente a un hermoso bosque con excelente vista, acabados de lujo a un excelente precio', 'Usuario2', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id_Entrada`),
  ADD KEY `autor` (`autor`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id_Propiedad`);

--
-- Indices de la tabla `testimoniales`
--
ALTER TABLE `testimoniales`
  ADD PRIMARY KEY (`id_Testimonial`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id_Entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id_Propiedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `testimoniales`
--
ALTER TABLE `testimoniales`
  MODIFY `id_Testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `entradas_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `admins` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
