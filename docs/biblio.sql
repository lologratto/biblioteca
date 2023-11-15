-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2023 a las 14:19:13
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
-- Base de datos: `biblio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autor` int(11) NOT NULL,
  `nombrea` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nombrea`) VALUES
(1, 'jose'),
(2, 'maxi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombrec` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `DNI` varchar(50) COLLATE utf8_bin NOT NULL,
  `domicilio` varchar(50) COLLATE utf8_bin NOT NULL,
  `poblacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `provincia` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha_nac` varchar(50) COLLATE utf8_bin NOT NULL,
  `estadoc` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombrec`, `apellido`, `DNI`, `domicilio`, `poblacion`, `provincia`, `fecha_nac`, `estadoc`) VALUES
(1, 'valentino', 'premio', '46101714', 'virrey vertiz 890', 'rojas', 'buenos aires', '2005-01-23', 'A'),
(4, 'jose', 'lucero', '45092543', 'diego trillo 1200', 'rojas', 'buenos aires', '2004-05-07', 'A'),
(5, 'leo', 'messi', '1018122022', 'country Kentucky en Funes', 'rosario', 'santa fe', '1987-06-24', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `id_cuota` int(11) NOT NULL,
  `importe` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `estado` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha_pago` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha_vto` varchar(50) COLLATE utf8_bin NOT NULL,
  `año` varchar(50) COLLATE utf8_bin NOT NULL,
  `mes` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cuotas`
--

INSERT INTO `cuotas` (`id_cuota`, `importe`, `id_cliente`, `estado`, `fecha_pago`, `fecha_vto`, `año`, `mes`) VALUES
(2, '500', 1, 'P', '2023/1/10', '2023/1/10', '2023', '1'),
(3, '500', 1, 'S', '2023/2/10', '2023/2/10', '2023', '2'),
(4, '500', 1, 'S', '2023/3/10', '2023/3/10', '2023', '3'),
(5, '500', 1, 'S', '2023/4/10', '2023/4/10', '2023', '4'),
(6, '500', 1, 'S', '2023/5/10', '2023/5/10', '2023', '5'),
(7, '500', 1, 'S', '2023/6/10', '2023/6/10', '2023', '6'),
(8, '500', 1, 'S', '2023/7/10', '2023/7/10', '2023', '7'),
(9, '500', 1, 'S', '2023/8/10', '2023/8/10', '2023', '8'),
(10, '500', 1, 'S', '2023/9/10', '2023/9/10', '2023', '9'),
(11, '500', 1, 'S', '2023/10/10', '2023/10/10', '2023', '10'),
(12, '500', 1, 'S', '2023/11/10', '2023/11/10', '2023', '11'),
(13, '500', 1, 'S', '2023/12/10', '2023/12/10', '2023', '12'),
(14, '600', 4, 'P', '2023/1/10', '2023/1/10', '2023', '1'),
(15, '600', 4, 'S', '2023/2/10', '2023/2/10', '2023', '2'),
(16, '600', 4, 'S', '2023/3/10', '2023/3/10', '2023', '3'),
(17, '500', 5, 'S', '2023/1/10', '2023/1/10', '2023', '1'),
(18, '500', 5, 'S', '2023/2/10', '2023/2/10', '2023', '2'),
(19, '500', 5, 'S', '2023/3/10', '2023/3/10', '2023', '3'),
(20, '500', 5, 'S', '2023/4/10', '2023/4/10', '2023', '4'),
(21, '500', 5, 'S', '2023/5/10', '2023/5/10', '2023', '5'),
(22, '500', 5, 'S', '2024/1/10', '2024/1/10', '2024', '1'),
(23, '500', 5, 'S', '2024/2/10', '2024/2/10', '2024', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id_editorial` int(11) NOT NULL,
  `nombree` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`id_editorial`, `nombree`) VALUES
(1, 'pepito'),
(2, 'intel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nombreg` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `nombrel` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_editorial` int(150) NOT NULL,
  `id_autor` int(50) NOT NULL,
  `genero` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_pais` int(50) NOT NULL,
  `n_pagina` varchar(50) COLLATE utf8_bin NOT NULL,
  `año_edicion` varchar(50) COLLATE utf8_bin NOT NULL,
  `precio_libro` varchar(50) COLLATE utf8_bin NOT NULL,
  `estado` varchar(50) COLLATE utf8_bin NOT NULL,
  `cant_disponible` varchar(50) COLLATE utf8_bin NOT NULL,
  `cant_lib_prestado` varchar(50) COLLATE utf8_bin NOT NULL,
  `idioma` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `nombrel`, `id_editorial`, `id_autor`, `genero`, `id_pais`, `n_pagina`, `año_edicion`, `precio_libro`, `estado`, `cant_disponible`, `cant_lib_prestado`, `idioma`) VALUES
(31, 'jeremias', 2, 1, 'terror', 1, '168', '2023-08-01', '2000', 'bueno', '7', '7', 'español'),
(32, 'Lorenzo ', 1, 2, 'comedia', 2, '255', '2023-08-20', '5000', 'bueno', '10', '5', 'español');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paisautor`
--

CREATE TABLE `paisautor` (
  `id_pais` int(11) NOT NULL,
  `nombrep` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `paisautor`
--

INSERT INTO `paisautor` (`id_pais`, `nombrep`) VALUES
(1, 'argentina'),
(2, 'chile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `numero_pedido` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_libro` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_salida` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha_devolucion` varchar(50) COLLATE utf8_bin NOT NULL,
  `estado_dev` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `numero_pedido`, `id_libro`, `id_cliente`, `fecha_salida`, `fecha_devolucion`, `estado_dev`) VALUES
(1, '1', 1, 1, '2023-08-01', '2023-08-30', ''),
(5, '1', 32, 1, '2023-08-10', '2023-08-20', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombreu` varchar(50) COLLATE utf8_bin NOT NULL,
  `contraseña` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombreu`, `contraseña`) VALUES
(1, 'lolo', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD PRIMARY KEY (`id_cuota`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `paisautor`
--
ALTER TABLE `paisautor`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  MODIFY `id_cuota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `id_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `paisautor`
--
ALTER TABLE `paisautor`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
