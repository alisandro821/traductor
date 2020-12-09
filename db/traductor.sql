-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2019 a las 05:22:10
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `traductor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id_color` int(5) NOT NULL,
  `color_e` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `color_n` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `audio` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id_color`, `color_e`, `color_n`, `audio`) VALUES
(1, 'amarillo', 'coztic', '../media/audios/colores/coztic.mp3'),
(2, 'azul', 'azultic', '../media/audios/colores/azultic.mp3'),
(3, 'beige', 'chocoxtic', '../media/audios/colores/chocoxtic.mp3'),
(4, 'blanco', 'chipahuac', '../media/audios/colores/chipahuac.mp3'),
(5, 'cafe', 'cafentic', '../media/audios/colores/cafentic.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numero`
--

CREATE TABLE `numero` (
  `id_numero` int(5) NOT NULL,
  `numero_e` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `numero_n` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `audio_numero` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numero`
--

INSERT INTO `numero` (`id_numero`, `numero_e`, `numero_n`, `audio_numero`) VALUES
(1, 'uno', 'ce', '../media/audios/numeros/ce.mp3'),
(2, 'dos', 'ome', '../media/audios/numeros/ome.mp3'),
(3, 'tres', 'eyi', '../media/audios/numeros/eyi.mp3'),
(4, 'cuatro', 'nahui', '../media/audios/numeros/nahui.mp3'),
(5, 'cinco', 'macuilli', '../media/audios/numeros/macuilli.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabra`
--

CREATE TABLE `palabra` (
  `id_palabra` int(5) NOT NULL,
  `palabra_e` varchar(20) NOT NULL,
  `palabra_n` varchar(20) NOT NULL,
  `audio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `palabra`
--

INSERT INTO `palabra` (`id_palabra`, `palabra_e`, `palabra_n`, `audio`) VALUES
(1, 'conejo', 'cuatochin', 'media/audios/palabra/cuatochin.mp3'),
(2, 'ayer', 'yalhuaya', 'media/audios/palabra/yalhuaya.mp3'),
(3, 'agua', 'atl', 'media/audios/palabra/atl.mp3'),
(4, 'fuego', 'tlitl', 'media/audios/palabra/tlitl.mp3'),
(5, 'mesa', 'cuamezah', 'media/audios/palabra/cuamezah.mp3'),
(6, 'servilleta', 'tlaxcalyoyomitl', 'media/audios/palabra/tlaxcalyoyomitl.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabra_e`
--

CREATE TABLE `palabra_e` (
  `id_e` int(5) NOT NULL,
  `nombre_e` varchar(20) NOT NULL,
  `audio_e` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `palabra_e`
--

INSERT INTO `palabra_e` (`id_e`, `nombre_e`, `audio_e`) VALUES
(1, 'agua', NULL),
(2, 'escudo', NULL),
(3, 'frijol', NULL),
(4, 'viento', NULL),
(5, 'dia', NULL),
(6, 'obsidian', NULL),
(7, 'olla', NULL),
(8, 'flecha', NULL),
(9, 'oreja', NULL),
(10, 'camino', NULL),
(11, 'bandera', NULL),
(12, 'estrella', NULL),
(13, 'flor', NULL),
(14, 'piedra', NULL),
(15, 'diente', NULL),
(16, 'cabello', NULL),
(17, 'espina', NULL),
(18, 'nariz', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabra_n`
--

CREATE TABLE `palabra_n` (
  `id_n` int(5) NOT NULL,
  `nombre_n` varchar(50) NOT NULL,
  `audio_n` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `palabra_n`
--

INSERT INTO `palabra_n` (`id_n`, `nombre_n`, `audio_n`) VALUES
(1, 'alt', NULL),
(2, 'chimali', NULL),
(3, 'etl', NULL),
(4, 'ehekatl', NULL),
(5, 'ilwitl', NULL),
(6, 'itstli', NULL),
(7, 'komitl', NULL),
(8, 'mitl', NULL),
(9, 'nakastli', NULL),
(10, 'ohtli', NULL),
(11, 'pantli', NULL),
(12, 'sitlali', NULL),
(13, 'shochitl', NULL),
(14, 'tetl', NULL),
(15, 'tantli', NULL),
(16, 'tsontli', NULL),
(17, 'witstli', NULL),
(18, 'yakatl', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traductor`
--

CREATE TABLE `traductor` (
  `id_traductor` int(3) NOT NULL,
  `id_ve` int(3) NOT NULL,
  `id_vn` int(3) NOT NULL,
  `id_ce` int(3) NOT NULL,
  `id_cn` int(3) NOT NULL,
  `id_ne` int(3) NOT NULL,
  `id_nn` int(3) NOT NULL,
  `id_abce` int(3) NOT NULL,
  `id_abcn` int(3) NOT NULL,
  `id usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=MEMORY DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `contrasena`, `foto`) VALUES
(1, 'Yuossef', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verbo`
--

CREATE TABLE `verbo` (
  `id_verbo` int(5) NOT NULL,
  `verbo_e` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `verbo_n` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `audio_verbo` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `verbo`
--

INSERT INTO `verbo` (`id_verbo`, `verbo_e`, `verbo_n`, `audio_verbo`) VALUES
(1, 'acomodar', 'tlacuahtlalia', '../media/audios/verbos/tlacuahtlalia.mp3'),
(2, 'ba&ntilde;ar ', 'maltia', '../media/audios/verbos/maltia.mp3'),
(3, 'caminar', 'nehnemi', '../media/audios/verbos/nehnemi.mp3'),
(4, 'decir', 'illia', '../media/audios/verbos/illia.mp3'),
(5, 'entregar', 'mactilia', '../media/audios/verbos/mactilia.mp3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD UNIQUE KEY `id_color` (`id_color`);

--
-- Indices de la tabla `numero`
--
ALTER TABLE `numero`
  ADD UNIQUE KEY `id_numero` (`id_numero`);

--
-- Indices de la tabla `palabra`
--
ALTER TABLE `palabra`
  ADD UNIQUE KEY `id_palabra` (`id_palabra`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `id` (`id_usuario`);

--
-- Indices de la tabla `verbo`
--
ALTER TABLE `verbo`
  ADD UNIQUE KEY `id_verbo` (`id_verbo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
