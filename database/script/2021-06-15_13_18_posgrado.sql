-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2021 a las 18:17:29
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.2.34-1+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `posgrado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `periodo` varchar(45) DEFAULT NULL,
  `etapas_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adquiridos`
--

CREATE TABLE `adquiridos` (
  `id` int NOT NULL,
  `que` varchar(45) DEFAULT NULL,
  `cuantos_prog` int DEFAULT NULL,
  `etapas_id` int NOT NULL,
  `cuantos_cumplidos` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adscripciones`
--

CREATE TABLE `adscripciones` (
  `id` int NOT NULL,
  `pes_id` int NOT NULL,
  `docentes_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adscripciones`
--

INSERT INTO `adscripciones` (`id`, `pes_id`, `docentes_id`) VALUES
(1, 2, 4),
(2, 2, 5),
(4, 3, 7),
(5, 3, 8),
(7, 4, 9),
(8, 4, 10),
(9, 4, 6),
(10, 5, 12),
(11, 5, 11),
(12, 5, 13),
(13, 5, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comite`
--

CREATE TABLE `comite` (
  `id` int NOT NULL,
  `descripcion` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comite`
--

INSERT INTO `comite` (`id`, `descripcion`) VALUES
(1, 'Comite no asignado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromisos`
--

CREATE TABLE `compromisos` (
  `id` int NOT NULL,
  `titulo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compromisos`
--

INSERT INTO `compromisos` (`id`, `titulo`) VALUES
(1, 'Articulos JCR sometidos'),
(2, 'Articulos JCR Aceptados o Publicados'),
(3, 'Modelo de utilidad o patente'),
(4, 'Conferencias Nacionales'),
(5, 'Conferencias Internacionales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterios`
--

CREATE TABLE `criterios` (
  `id` int NOT NULL,
  `Rubricas_id` int NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `correo`, `password`) VALUES
(1, 'César Gabriel', 'docente@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(2, 'Rosa Perez', 'keyla@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(3, 'Julio Cesar', 'julio@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(4, 'BJmena', 'bjimena@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(5, 'BArturo', 'barturo@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(6, 'Paola Monserrath', 'paola@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(7, 'mClaudia Utrilla', 'claudia@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(8, 'mZoila Utrilla', 'zoila@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(9, 'aCarlos Ortega', 'carlos@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(10, 'aGraciela Perez', 'graciela@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(11, 'iGeovany Ortega', 'geovany@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(12, 'iEsperanza Utrilla', 'esperanza@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(13, 'iMaria Utrilla', 'maria@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pes_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `correo`, `password`, `pes_id`) VALUES
(2, 'Cesar Gabriel', 'estudiante@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 5),
(3, 'Vanessa del Carmen', 'estudiante2@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 3),
(4, 'Juan Perez', 'e3@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE `etapas` (
  `id` int NOT NULL,
  `Proyectos_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` int NOT NULL,
  `etapas_id` int NOT NULL,
  `calificion` varchar(45) DEFAULT NULL,
  `reporte` varchar(45) DEFAULT NULL,
  `revisiones_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias`
--

CREATE TABLE `evidencias` (
  `id` int NOT NULL,
  `adquiridos_id` int NOT NULL,
  `archivo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generaciones`
--

CREATE TABLE `generaciones` (
  `id` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generaciones`
--

INSERT INTO `generaciones` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Primero periodo', NULL),
(3, 'Primero periodo', NULL),
(4, 'Primero s', NULL),
(5, 'sexto periodo', 'Sexto periodo'),
(6, 'Noveno Periodo', 'Noveno periodo'),
(7, 'Alumnos que entraron durante la pandemia', 'Alumnos que entran durante la pandemia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--

CREATE TABLE `integrantes` (
  `id` int NOT NULL,
  `quien` int NOT NULL,
  `puesto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `integrantes`
--

INSERT INTO `integrantes` (`id`, `quien`, `puesto`) VALUES
(1, 1, 'prueba'),
(2, 2, 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `estado` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `rubrica` int NOT NULL,
  `generacion_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `nombre`, `fechaInicio`, `fechaFin`, `estado`, `rubrica`, `generacion_id`) VALUES
(1, '', NULL, NULL, 'Activo', 1, 0),
(2, '1er semestre', '2021-06-14', '2021-06-16', NULL, 1, 0),
(3, '2do semestre', '2021-06-28', '2021-06-25', NULL, 1, 0),
(4, '3er semestre', '2021-06-02', '2021-07-16', NULL, 1, 0),
(5, '3er semestre', '2021-06-02', '2021-07-16', NULL, 1, 0),
(6, '4to semestre', '2021-06-26', '2021-07-23', NULL, 1, 0),
(7, '7mo semestre', '2021-07-01', '2021-07-10', NULL, 1, 0),
(8, 'Agosto-Diembre 2020', '2021-08-09', '2021-12-17', NULL, 1, 7),
(9, 'Agosto-Diembre 2020', '2021-08-09', '2021-12-17', NULL, 1, 7),
(10, 'Agosto-Diembre 2020', '2021-06-15', '2021-06-06', NULL, 1, 7),
(11, 'Agosto-Diembre 2020', '2021-06-15', '2021-06-06', NULL, 1, 7),
(12, 'Agosto-Diembre 2020', '2021-06-15', '2021-06-06', NULL, 1, 7),
(13, 'Agosto-Diembre 2020', '2021-06-15', '2021-06-06', NULL, 1, 7),
(14, 'Agosto-Diembre 2020', '2021-06-15', '2021-06-06', NULL, 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pes`
--

CREATE TABLE `pes` (
  `id` int NOT NULL,
  `coordinador` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pes`
--

INSERT INTO `pes` (`id`, `coordinador`, `correo`, `password`, `nombre`) VALUES
(1, 'Coordinador 1', 'cordinador@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Programa educativo 1'),
(2, 'Keyla Esmeralda', 'keyla@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Maestría en Ingeniería Bioquímica '),
(3, 'César Gabriel', 'cesar@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Maestría en Ciencias de Ingeniería Mecatrónica '),
(4, 'Jose Perez', 'jose@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Doctorado en Ciencias de los Alimentos y Biotecnología '),
(5, 'Vanessa del Carmen', 'vanessa@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Doctorado en Ciencias de la Ingeniería ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hipotesis` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `objetivos` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `objetivose` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `reporte` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `proyectoscol` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `comite` int NOT NULL DEFAULT '1',
  `avance` float DEFAULT NULL,
  `estudiante_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `titulo`, `hipotesis`, `objetivos`, `objetivose`, `reporte`, `proyectoscol`, `comite`, `avance`, `estudiante_id`) VALUES
(2, 'Titulo del proyecto', 'Hipotesis x', 'Objetivo del proyecto', 'especificos', NULL, NULL, 1, NULL, 2),
(3, 'proyecto est2', 'hip2', 'ob2', 'oe2', NULL, NULL, 1, NULL, 3),
(4, 'Nuevo Titulo', 'Nueva Hipotesis', 'Nuevo Objetivo General', 'Nuevos Especificos', NULL, NULL, 1, NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

CREATE TABLE `revisiones` (
  `id` int NOT NULL,
  `revisor` varchar(45) DEFAULT NULL,
  `criterio_calificado` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubricas`
--

CREATE TABLE `rubricas` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` enum('Numerica','Alfanumerica') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rubricas`
--

INSERT INTO `rubricas` (`id`, `nombre`, `tipo`) VALUES
(1, 'Rubrica de prueba', 'Numerica'),
(2, 'Rubrica de prueba 2', 'Alfanumerica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_actividades_etapas1_idx` (`etapas_id`);

--
-- Indices de la tabla `adquiridos`
--
ALTER TABLE `adquiridos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_adquiridos_etapas1_idx` (`etapas_id`);

--
-- Indices de la tabla `adscripciones`
--
ALTER TABLE `adscripciones`
  ADD PRIMARY KEY (`id`,`docentes_id`),
  ADD KEY `fk_adscripciones_pes1_idx` (`pes_id`),
  ADD KEY `fk_adscripciones_docentes1_idx` (`docentes_id`);

--
-- Indices de la tabla `comite`
--
ALTER TABLE `comite`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compromisos`
--
ALTER TABLE `compromisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD PRIMARY KEY (`id`,`Rubricas_id`),
  ADD KEY `fk_Criterios_Rubricas1_idx` (`Rubricas_id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`,`pes_id`),
  ADD KEY `fk_estudiantes_pes1_idx` (`pes_id`);

--
-- Indices de la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_etapas_Proyectos1_idx` (`Proyectos_id`);

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_evaluaciones_etapas1_idx` (`etapas_id`),
  ADD KEY `fk_evaluaciones_revisiones1_idx` (`revisiones_id`);

--
-- Indices de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_evidencias_adquiridos1_idx` (`adquiridos_id`);

--
-- Indices de la tabla `generaciones`
--
ALTER TABLE `generaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`id`,`quien`),
  ADD KEY `fk_comite_docentes1_idx` (`quien`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`,`rubrica`,`generacion_id`),
  ADD KEY `fk_Periodos_Rubricas1_idx` (`rubrica`),
  ADD KEY `fk_periodos_generaciones1_idx` (`generacion_id`);

--
-- Indices de la tabla `pes`
--
ALTER TABLE `pes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`,`comite`,`estudiante_id`),
  ADD KEY `fk_Proyectos_comite1_idx` (`comite`),
  ADD KEY `fk_Proyectos_estudiantes1_idx` (`estudiante_id`);

--
-- Indices de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rubricas`
--
ALTER TABLE `rubricas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `adquiridos`
--
ALTER TABLE `adquiridos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `adscripciones`
--
ALTER TABLE `adscripciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `comite`
--
ALTER TABLE `comite`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `compromisos`
--
ALTER TABLE `compromisos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `criterios`
--
ALTER TABLE `criterios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `etapas`
--
ALTER TABLE `etapas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generaciones`
--
ALTER TABLE `generaciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pes`
--
ALTER TABLE `pes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rubricas`
--
ALTER TABLE `rubricas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_actividades_etapas1` FOREIGN KEY (`etapas_id`) REFERENCES `etapas` (`id`);

--
-- Filtros para la tabla `adquiridos`
--
ALTER TABLE `adquiridos`
  ADD CONSTRAINT `fk_adquiridos_etapas1` FOREIGN KEY (`etapas_id`) REFERENCES `etapas` (`id`);

--
-- Filtros para la tabla `adscripciones`
--
ALTER TABLE `adscripciones`
  ADD CONSTRAINT `fk_adscripciones_docentes1` FOREIGN KEY (`docentes_id`) REFERENCES `docentes` (`id`),
  ADD CONSTRAINT `fk_adscripciones_pes1` FOREIGN KEY (`pes_id`) REFERENCES `pes` (`id`);

--
-- Filtros para la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD CONSTRAINT `fk_Criterios_Rubricas1` FOREIGN KEY (`Rubricas_id`) REFERENCES `rubricas` (`id`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_estudiantes_pes1` FOREIGN KEY (`pes_id`) REFERENCES `pes` (`id`);

--
-- Filtros para la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD CONSTRAINT `fk_etapas_Proyectos1` FOREIGN KEY (`Proyectos_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD CONSTRAINT `fk_evaluaciones_etapas1` FOREIGN KEY (`etapas_id`) REFERENCES `etapas` (`id`),
  ADD CONSTRAINT `fk_evaluaciones_revisiones1` FOREIGN KEY (`revisiones_id`) REFERENCES `revisiones` (`id`);

--
-- Filtros para la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD CONSTRAINT `fk_evidencias_adquiridos1` FOREIGN KEY (`adquiridos_id`) REFERENCES `adquiridos` (`id`);

--
-- Filtros para la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD CONSTRAINT `fk_comite_docentes1` FOREIGN KEY (`quien`) REFERENCES `docentes` (`id`);

--
-- Filtros para la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD CONSTRAINT `fk_periodos_generaciones1` FOREIGN KEY (`generacion_id`) REFERENCES `generaciones` (`id`),
  ADD CONSTRAINT `fk_Periodos_Rubricas1` FOREIGN KEY (`rubrica`) REFERENCES `rubricas` (`id`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `fk_Proyectos_comite1` FOREIGN KEY (`comite`) REFERENCES `integrantes` (`id`),
  ADD CONSTRAINT `fk_Proyectos_estudiantes1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
