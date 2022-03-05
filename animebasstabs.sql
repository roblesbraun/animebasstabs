-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2022 a las 20:12:58
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animebasstabs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `IdArtista` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`IdArtista`, `Nombre`, `Imagen`) VALUES
(7, 'Afterglow', '7-afterglowres.jpg'),
(8, 'Chaba', '8-e23d5cc1f4a143f2a789be73b65d6a.jpg'),
(9, 'Frederic', '9-fredericres-2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `IdCancion` int(11) NOT NULL,
  `IdArtista` int(11) NOT NULL,
  `RutaTab` varchar(500) NOT NULL,
  `Video` varchar(500) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`IdCancion`, `IdArtista`, `RutaTab`, `Video`, `Nombre`) VALUES
(4, 7, '4-tied_to_the_skies.pdf', 'https://www.youtube.com/embed/tOuzRK1p5XQ', 'Tied to the skies!!'),
(5, 8, '5-parade.pdf', 'https://www.youtube.com/watch?v=PvLAK4RdtLw', 'Parade'),
(6, 9, '6-kanashii-ureshii-tab.pdf', 'https://www.youtube.com/watch?v=KtKAPtL9l8I', 'Kanashii Ureshii'),
(10, 7, '10-kanashii-ureshii-tab.pdf', 'https://www.youtube.com/embed/jBor7LUISqo', 'YOLO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipossexos`
--

CREATE TABLE `tipossexos` (
  `IdTipoSexo` int(11) NOT NULL,
  `Descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipossexos`
--

INSERT INTO `tipossexos` (`IdTipoSexo`, `Descripcion`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'NA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposusuario`
--

CREATE TABLE `tiposusuario` (
  `IdTipoUsuario` int(11) NOT NULL,
  `Descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiposusuario`
--

INSERT INTO `tiposusuario` (`IdTipoUsuario`, `Descripcion`) VALUES
(1, 'Administracion'),
(2, 'Regular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `IdSexo` int(11) NOT NULL,
  `IdTipoUsuario` int(11) NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Nombre`, `Correo`, `Contraseña`, `Telefono`, `IdSexo`, `IdTipoUsuario`, `Edad`) VALUES
(1, 'Soy la prueba', 'prueba1@gmail.com', 'prueba', '7225490020', 1, 2, 21),
(2, 'Anime Bass Tabs', 'admin@animebasstabs.com', 'Anime123$', '1234567890', 1, 1, 25);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`IdArtista`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`IdCancion`),
  ADD KEY `IdArtista` (`IdArtista`);

--
-- Indices de la tabla `tipossexos`
--
ALTER TABLE `tipossexos`
  ADD PRIMARY KEY (`IdTipoSexo`);

--
-- Indices de la tabla `tiposusuario`
--
ALTER TABLE `tiposusuario`
  ADD PRIMARY KEY (`IdTipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `IdTipoUsuario` (`IdTipoUsuario`),
  ADD KEY `IdSexo` (`IdSexo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `IdArtista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `IdCancion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipossexos`
--
ALTER TABLE `tipossexos`
  MODIFY `IdTipoSexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tiposusuario`
--
ALTER TABLE `tiposusuario`
  MODIFY `IdTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`IdArtista`) REFERENCES `artistas` (`IdArtista`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdTipoUsuario`) REFERENCES `tiposusuario` (`IdTipoUsuario`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`IdSexo`) REFERENCES `tipossexos` (`IdTipoSexo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
