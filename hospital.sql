-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2016 a las 05:05:49
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `hospital`
--
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET utf32 COLLATE utf32_spanish_ci;
USE `hospital`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

DROP TABLE IF EXISTS `consultas`;
CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `feocu` datetime NOT NULL,
  `grupo` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `enfermedad` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `resultado` enum('Dado de alta','Hospitalizado') COLLATE utf32_spanish_ci NOT NULL DEFAULT 'Dado de alta',
  `semana` int(2) NOT NULL,
  `mes` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `id_paciente`, `nombre_usuario`, `feocu`, `grupo`, `enfermedad`, `resultado`, `semana`, `mes`, `year`) VALUES
(1, 18, 'Maria Angelica Jordan', '2015-11-07 19:40:12', 'TRANSMISION SEXUAL', 'INFECCION GONOCOCICA (A54.-)', 'Dado de alta', 45, 11, 2015),
(2, 18, 'Maria Angelica Jordan', '2015-11-07 07:43:05', 'TRANSMISION SEXUAL', 'INFECCION ASINTOMATICA VIH (Z21)', 'Dado de alta', 45, 11, 2015),
(3, 19, 'Maria Angelica Jordan', '2015-11-07 07:50:03', 'TRANSMITIDAS POR VECTORES', 'FIEBRE DENGUE (A90)', 'Hospitalizado', 45, 11, 2015),
(4, 20, 'Maria Angelica Jordan', '2015-11-09 06:55:38', 'ENFERM. DEL SISTEMA RESPIRATORIO', 'INFECCION RESPIRATORIA AGUDA GRAVE', 'Hospitalizado', 46, 11, 2015),
(5, 22, 'Maria Angelica Jordan', '2015-11-09 18:04:33', 'TRANSMISION HIDRICA Y ALIMENTOS', 'DIARREAS (A08-A09)', 'Dado de alta', 46, 11, 2015),
(6, 22, 'Maria Angelica Jordan', '2015-11-09 18:15:18', 'TRANSMISION HIDRICA Y ALIMENTOS', 'ETA (CASO ASOCIADO A BROTE)', 'Hospitalizado', 46, 11, 2015),
(7, 23, 'Maria Angelica Jordan', '2015-11-16 21:35:46', 'TRANSMISION AEREA', 'INFLUENZA (J10-J11)', 'Hospitalizado', 47, 11, 2015),
(8, 22, 'Maria Angelica Jordan', '2015-11-16 21:36:27', 'TRANSMISION HIDRICA Y ALIMENTOS', 'DIARREAS (A08-A09)', 'Hospitalizado', 47, 11, 2015),
(9, 19, 'Maria Angelica Jordan', '2015-11-16 21:37:34', 'TRANSMISION HIDRICA Y ALIMENTOS', 'DIARREAS (A08-A09)', 'Dado de alta', 47, 11, 2015),
(10, 20, 'Maria Angelica Jordan', '2015-11-16 21:38:12', 'OTRAS ENF. TRANSMISIBLES', 'VARICELA (B01.-)', 'Dado de alta', 47, 11, 2015),
(11, 20, 'Maria Angelica Jordan', '2015-11-16 21:46:12', 'OTRAS ENF. TRANSMISIBLES', 'VARICELA (B01.-)', 'Hospitalizado', 47, 11, 2015),
(12, 19, 'Maria Angelica Jordan', '2015-11-16 21:46:47', 'OTRAS ENF. TRANSMISIBLES', 'VARICELA (B01.-)', 'Hospitalizado', 47, 11, 2015),
(13, 24, 'Maria Angelica Jordan', '2015-12-03 17:47:06', 'PREVENIBLES POR VACUNAS', 'SARAMPION (B05.-)', 'Hospitalizado', 49, 12, 2015);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mortalidad`
--

DROP TABLE IF EXISTS `mortalidad`;
CREATE TABLE `mortalidad` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `tipo` enum('Materna','Neonatal','Postneonatal','Infantil','Regular') COLLATE utf32_spanish_ci NOT NULL,
  `feocu` datetime NOT NULL,
  `ocurrencia` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `sitio` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `caudir` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `caubas` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `periodo` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `peso` float NOT NULL,
  `edadgest` int(2) NOT NULL,
  `nutri` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `estancia` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `consultas` int(2) NOT NULL,
  `ocupacion` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `semana` int(2) NOT NULL,
  `mes` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `mortalidad`
--

INSERT INTO `mortalidad` (`id`, `id_paciente`, `nombre_usuario`, `tipo`, `feocu`, `ocurrencia`, `sitio`, `caudir`, `caubas`, `periodo`, `peso`, `edadgest`, `nutri`, `estancia`, `consultas`, `ocupacion`, `semana`, `mes`, `year`) VALUES
(1, 18, 'Maria Angelica Jordan', 'Regular', '2015-11-07 08:01:26', 'Atures', 'HOSP. JGH', 'Politraumatismo Pulmonar', 'Politraumatismo', 'N/A', 0, 0, 'N/A', 'N/A', 0, 'N/A', 45, 11, 2015),
(2, 21, 'Maria Angelica Jordan', 'Materna', '2015-11-09 18:10:31', 'Atures', 'HOSP. JGH', 'Desangramiento', 'Desangramiento', 'Postparto', 0, 8, 'N/A', 'N/A', 5, 'Ama de Casa', 46, 11, 2015);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `nac` enum('V','E') COLLATE utf32_spanish_ci NOT NULL,
  `cedula` varchar(9) COLLATE utf32_spanish_ci NOT NULL,
  `sexo` enum('F','M') COLLATE utf32_spanish_ci NOT NULL,
  `fenac` date NOT NULL,
  `indigena` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `parroquia` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `feing` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre_usuario`, `nombre`, `nac`, `cedula`, `sexo`, `fenac`, `indigena`, `municipio`, `parroquia`, `feing`) VALUES
(18, 'Maria Angelica Jordan', 'Martin Daniel Ribas Carrizales', 'V', '12345678', 'M', '1986-03-12', 'Jiwi', 'Alto Orinoco', 'La Esmeralda', '2015-11-07 07:33:27'),
(19, 'Maria Angelica Jordan', 'Ramon Jose Fuentes Lares', 'V', '10833329', 'M', '1970-05-23', 'Ignorado', 'Autana', 'Isla de Ratón', '2015-11-07 07:49:10'),
(20, 'Maria Angelica Jordan', 'Ramona Daniela Jimenez Garcia', 'V', '24797729', 'F', '1989-07-12', 'Guarequen', 'Manapiare', 'Medio Ventuari', '2015-11-07 07:53:47'),
(21, 'Newman Monagas', 'Maricarmen Guzman Contreras', 'V', '21212122', 'F', '1995-08-19', 'Piapoco', 'Atabapo', 'Caname', '2015-11-07 08:06:02'),
(22, 'Maria Angelica Jordan', 'Palomino Vergara', 'V', '14222444', 'M', '1960-10-29', 'Yanomami', 'Atabapo', 'Ucata', '2015-11-09 17:54:50'),
(23, 'Maria Angelica Jordan', 'Henrique Moron', 'V', '9887556', 'M', '1959-03-31', 'Puinave', 'Manapiare', 'Alto Ventuari', '2015-11-16 21:34:09'),
(24, 'Maria Angelica Jordan', 'Paloma Del Valle Quiroz Bragansa', 'V', '26544770', 'F', '1999-03-10', 'Ignorado', 'Maroa', 'Comunidad', '2015-12-03 17:46:36'),
(25, 'Maria Angelica Jordan', 'Alberto Cardenas', 'V', '12312345', 'M', '1991-10-28', 'Sanema', 'Maroa', 'Comunidad', '2015-12-10 15:52:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partos`
--

DROP TABLE IF EXISTS `partos`;
CREATE TABLE `partos` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `sexo_bebe` enum('F','M') COLLATE utf32_spanish_ci NOT NULL,
  `resultado` enum('Vivo','Muerto') COLLATE utf32_spanish_ci NOT NULL,
  `feocu` datetime NOT NULL,
  `semana` int(2) NOT NULL,
  `mes` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `partos`
--

INSERT INTO `partos` (`id`, `id_paciente`, `nombre_usuario`, `sexo_bebe`, `resultado`, `feocu`, `semana`, `mes`, `year`) VALUES
(1, 20, 'Maria Angelica Jordan', 'M', 'Vivo', '2015-11-07 07:54:11', 45, 11, 2015),
(2, 21, 'Maria Angelica Jordan', 'F', 'Vivo', '2015-11-09 18:05:13', 46, 11, 2015);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `tipo` enum('Administrador','Usuario') COLLATE utf32_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `clave` varchar(12) COLLATE utf32_spanish_ci NOT NULL,
  `pregunta` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `respuesta` varchar(100) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `tipo`, `usuario`, `clave`, `pregunta`, `respuesta`) VALUES
(1, 'Maria Angelica Jordan', 'maria@mail.com', 'Administrador', 'mariangelica', 'abcd1234', 'Postre o Comida preferida', 'Torta'),
(2, 'Newman Monagas', 'newman@mail.com', 'Usuario', 'newmanmonagas', '12qwaszx', 'Lugar donde mas le gusta estar', 'Durmiendo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `nombre_usuario` (`nombre_usuario`);

--
-- Indices de la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_paciente` (`id_paciente`),
  ADD KEY `nombre_usuario` (`nombre_usuario`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre_usuario` (`nombre_usuario`);

--
-- Indices de la tabla `partos`
--
ALTER TABLE `partos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `nombre_usuario` (`nombre_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `partos`
--
ALTER TABLE `partos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultas_ibfk_2` FOREIGN KEY (`nombre_usuario`) REFERENCES `usuarios` (`nombre`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  ADD CONSTRAINT `mortalidad_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mortalidad_ibfk_2` FOREIGN KEY (`nombre_usuario`) REFERENCES `usuarios` (`nombre`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`nombre_usuario`) REFERENCES `usuarios` (`nombre`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `partos`
--
ALTER TABLE `partos`
  ADD CONSTRAINT `partos_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `partos_ibfk_2` FOREIGN KEY (`nombre_usuario`) REFERENCES `usuarios` (`nombre`) ON DELETE NO ACTION ON UPDATE CASCADE;
