-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-09-2021 a las 18:58:19
-- Versión del servidor: 8.0.25-0ubuntu0.20.04.1
-- Versión de PHP: 8.0.5

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
  `proyectos_id` int NOT NULL,
  `periodos_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `nombre`, `periodo`, `proyectos_id`, `periodos_id`) VALUES
(1, 'Revision', 'Enero-Septiembre', 2, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adquiridos`
--

CREATE TABLE `adquiridos` (
  `id` int NOT NULL,
  `que` varchar(45) DEFAULT NULL,
  `cuantos_prog` int DEFAULT NULL,
  `cuantos_cumplidos` int DEFAULT NULL,
  `proyectos_id` int NOT NULL,
  `periodos_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `adquiridos`
--

INSERT INTO `adquiridos` (`id`, `que`, `cuantos_prog`, `cuantos_cumplidos`, `proyectos_id`, `periodos_id`) VALUES
(1, 'conferencias', 3, NULL, 2, 15),
(2, 'Articulos JCR Aceptados o Publicados', 1, NULL, 2, 15),
(3, 'Conferencias Internacionales.', 3, NULL, 2, 15),
(4, 'Modelo de utilidad o patente', 2, NULL, 2, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adscripciones`
--

CREATE TABLE `adscripciones` (
  `id` int NOT NULL,
  `pes_id` int NOT NULL,
  `docentes_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `adscripciones`
--

INSERT INTO `adscripciones` (`id`, `pes_id`, `docentes_id`) VALUES
(1, 2, 1),
(2, 2, 5),
(4, 3, 7),
(5, 3, 8),
(7, 4, 9),
(8, 4, 10),
(9, 4, 6),
(10, 5, 12),
(11, 5, 11),
(12, 5, 13),
(13, 5, 6),
(14, 2, 6),
(15, 2, 14),
(16, 1, 16),
(17, 1, 17),
(18, 1, 18),
(19, 2, 20),
(20, 3, 24),
(21, 3, 21),
(22, 3, 23),
(23, 4, 19),
(24, 1, 26),
(25, 1, 27),
(26, 4, 25),
(27, 5, 28),
(28, 2, 29),
(29, 2, 30),
(30, 2, 31),
(31, 6, 32),
(32, 6, 33),
(33, 6, 34),
(39, 6, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comites`
--

CREATE TABLE `comites` (
  `id` int NOT NULL,
  `asesor` int NOT NULL,
  `revisor1` int NOT NULL,
  `revisor2` int NOT NULL,
  `revisor3` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `comites`
--

INSERT INTO `comites` (`id`, `asesor`, `revisor1`, `revisor2`, `revisor3`) VALUES
(1, 1, 4, 6, 14),
(3, 4, 4, 4, 4),
(4, 4, 4, 5, 6),
(5, 14, 1, 5, 14),
(6, 12, 11, 13, 12),
(7, 11, 13, 6, 28),
(8, 32, 33, 34, 12),
(9, 32, 33, 34, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromisos`
--

CREATE TABLE `compromisos` (
  `id` int NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `pes_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `compromisos`
--

INSERT INTO `compromisos` (`id`, `titulo`, `pes_id`) VALUES
(1, 'Articulos JCR sometidos', 2),
(2, 'Articulos JCR Aceptados o Publicados', 5),
(3, 'Modelo de utilidad o patente', NULL),
(4, 'Conferencias Nacionales', 2),
(5, 'Conferencias Internacionales.', 5),
(9, 'Compromiso 2p', 6),
(10, 'Compromiso 1p', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterios`
--

CREATE TABLE `criterios` (
  `id` int NOT NULL,
  `Rubricas_id` int NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `criterios`
--

INSERT INTO `criterios` (`id`, `Rubricas_id`, `descripcion`) VALUES
(1, 3, 'Identifica el problema'),
(2, 3, 'Propone solución'),
(3, 1, 'Criterio1'),
(4, 1, 'Criterio 2'),
(5, 1, 'Criterio 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desgloce_evaluacion`
--

CREATE TABLE `desgloce_evaluacion` (
  `id` int NOT NULL,
  `evaluaciones_id` int DEFAULT NULL,
  `docentes_id` int DEFAULT NULL,
  `concepto` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacion` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `correo`, `password`) VALUES
(1, 'César Gabriel', 'docente@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(2, 'Rosa Perez', 'keyla@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(3, 'Julio Cesar', 'julio@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(4, 'BJmena', 'bjimena@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(5, 'Bruno Lopez', 'barturo@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(6, 'Paola Monserrath', 'paola@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(7, 'mClaudia Utrilla', 'claudia@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(8, 'mZoila Utrilla', 'zoila@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(9, 'aCarlos Ortega', 'carlos@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(10, 'aGraciela Perez', 'graciela@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(11, 'iGeovany Ortega', 'geovany@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(12, 'iEsperanza Utrilla', 'esperanza@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(13, 'iMaria Utrilla', 'maria@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(14, 'Ruben Grajales Coutiño', 'ruben.gc@tuxtla.tecnm.mx', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(16, 'Kenia Rodriguez', 'kenia@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(17, 'Oliver Sanchez', 'Oliver@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(18, 'Marisol Bermudez', 'marisol@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(19, 'Rubi Ramirez', 'rubi@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(20, 'Anahi Gonzalez', 'anahi@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(21, 'Carmen Espinoza', 'carmen@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(22, 'Gabriel Gutierrez', 'gabriel@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(23, 'Mateo Salazar', 'mateo@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(24, 'Andrea Gomez', 'andrea@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(25, 'Nicolas Rodriguez', 'nicolas@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(26, 'Edwin Coronel', 'edwin@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(27, 'Joseline Yong', 'joseline@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(28, 'Patricia Ramirez', 'patricia@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.'),
(29, 'Pablo Hernandez', 'pablo@gmail.com', '$2y$10$t6UB4ECRfSEWPlNwIZ6KPuTzVnsAfqfcY.TV6z.8ic5vE4yxyCcyK'),
(30, 'Filemon Ramirez', 'filemon@gmail.com', '$2y$10$afHoX41H3U0Py0MPkeAWJOXGjUN2fHXDuvuKDRrtj/ueXXyACnisS'),
(31, 'Nuevo docente', 'nuevodocente@gmail.com', '$2y$10$H8nMzR4AXTTQArQABMGC6.DbXCS0yU6TRpV4M7FWAU45wFulS5zNG'),
(32, 'PdPedro', 'pdpedro@gmail.com', '$2y$10$/DAClrxESTAsdosBuEUbh.Vc90G677S2Ud4ohUMaEwgehFjey2GiW'),
(33, 'PdPablo', 'pdpablo@gmail.com', '$2y$10$a/T4HixO7P4J98ADxP4x3.RQ0SUD3KVSG7mMB8ofItYTCeV7enwjO'),
(34, 'PdPaco', 'pdpaco@gmail.com', '$2y$10$T99AAuoUXWkpw5DAi4WBgubgFHPHXJsJViBH5hIvA4WG2b.2QjQqe'),
(36, 'pdw', 'pdw@gmail.com', '$2y$10$aqQqMC1Sb8JlZZbzXF6gd.EitOkOKYCMUEuAJdSnWXqC5ra42Udz6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pes_id` int NOT NULL,
  `periodos_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `correo`, `password`, `pes_id`, `periodos_id`) VALUES
(2, 'Cesar Gabriel', 'estudiante@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 5, 15),
(3, 'Vanessa del Carmen', 'estudiante2@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 3, 15),
(4, 'Alberto Rojas', 'beto@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 2, 15),
(5, 'Juan Perez', 'jperez@tuxtla.tecnm.mx', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 5, 0),
(6, 'Javier Perez', 'javier@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 1, 0),
(7, 'Jacobo Lopez', 'jacobo@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 1, 0),
(8, 'Marina Espinoza', 'marina@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 1, 0),
(9, 'Antonieta Sanchez', 'antonieta@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 1, 0),
(10, 'Yael Gomez', 'yael@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 2, 0),
(11, 'Natalia Oseguera', 'natalia@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 2, 0),
(12, 'Yesenia Vera', 'yesenia@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 2, 0),
(13, 'Armando Gutierrez', 'armando@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 2, 0),
(14, 'Rosi Dominguez', 'rosi@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 3, 0),
(15, 'Guadalupe Ruiz', 'guadalupe@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 3, 0),
(16, 'Jesus Gomez', 'jesus@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 4, 0),
(17, 'Yahir Gomez', 'yahir@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 4, 0),
(18, 'Sofia Garcia', 'sofia@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 5, 0),
(19, 'Aurora', 'aurora@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 5, 0),
(20, 'PeHugo', 'pehugo@gmail.com', '$2y$10$axH/x7aD2bUP2iRT8aQ2Teh5UMz7vEJusLWLAhiAvnbSfMZ8r/wLm', 6, 15),
(21, 'PeLuis', 'peluis@gmail.com', '$2y$10$XRyMuEkkQdbuLJLmc8hRC.IfxaGMdcsoCp2DblTYi1Xvtvl4Bpc5O', 6, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` int NOT NULL,
  `proyectos_id` int NOT NULL,
  `calificacion` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `observaciones` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias`
--

CREATE TABLE `evidencias` (
  `id` int NOT NULL,
  `adquiridos_id` int NOT NULL,
  `archivo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generaciones`
--

CREATE TABLE `generaciones` (
  `id` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `pes_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `generaciones`
--

INSERT INTO `generaciones` (`id`, `nombre`, `descripcion`, `pes_id`) VALUES
(5, 'Primer Genacion Maes', 'Sexto periodo', 2),
(6, 'Segunda Genacion Periodo Doc', 'Noveno periodo', 2),
(7, '2020 - 2022', 'Alumnos que entran durante la pandemia', 5),
(8, '2021 - 2023', 'Alumnos que entran durante la pandemia 21', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--

CREATE TABLE `integrantes` (
  `id` int NOT NULL,
  `quien` int NOT NULL,
  `puesto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `estado` enum('Inicio','Comienzo','Comprometerse','Seguimiento','Reportar','Evaluacion','Concluido') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `rubrica` int NOT NULL,
  `generacion_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `nombre`, `fechaInicio`, `fechaFin`, `estado`, `rubrica`, `generacion_id`) VALUES
(2, '1er semestre', '2021-06-14', '2021-06-16', 'Evaluacion', 1, 5),
(3, '2do semestre', '2021-06-28', '2021-06-25', 'Concluido', 1, 5),
(4, '1er semestre', '2021-06-02', '2021-07-16', NULL, 1, 6),
(5, '2do semestre', '2021-06-02', '2021-07-16', NULL, 1, 6),
(6, '3er semestre', '2021-06-26', '2021-07-23', NULL, 1, 6),
(8, 'Agosto-Diembre 2020', '2021-08-09', '2021-12-17', NULL, 1, 5),
(9, 'Agosto-Diembre 2020', '2021-08-09', '2021-12-17', NULL, 1, 7),
(10, 'Enero -junio 2021', '2021-06-15', '2021-06-06', NULL, 1, 7),
(15, 'ENERO- Junio 2021', '2021-01-01', '2021-06-30', 'Inicio', 1, 8);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `pes`
--

INSERT INTO `pes` (`id`, `coordinador`, `correo`, `password`, `nombre`) VALUES
(1, 'Coordinador 1', 'xyz@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Programa educativo 1'),
(2, 'Keyla Esmeralda', 'keyla@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Maestría en Ingeniería Bioquímica '),
(3, 'César Gabriel', 'cesar@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Maestría en Ciencias de Ingeniería Mecatrónica '),
(4, 'Jose Perez', 'jose@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Doctorado en Ciencias de los Alimentos y Biotecnología '),
(5, 'Vanessa del Carmen', 'vanessa@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Doctorado en Ciencias de la Ingeniería '),
(6, 'Coordinador de prueba', 'coordinador@gmail.com', '$2y$10$PxczttwKzPuvvKMlu2a.juzdIZss3e2ItfdMO8stg65K0LN9W.tr.', 'Programa educativo de prueba'),
(7, 'prueba2', 'prueba2@gmail.com', '$2y$10$/0iErm7T6CD/04TllmvNrOwJdaq/fGthcNFoUKq/Rx3gR2g2BgyU.', 'prueba2');

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
  `avance` float DEFAULT NULL,
  `estudiante_id` int DEFAULT NULL,
  `comite` int DEFAULT NULL,
  `periodo_id` int DEFAULT NULL,
  `compromiso` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `titulo`, `hipotesis`, `objetivos`, `objetivose`, `reporte`, `avance`, `estudiante_id`, `comite`, `periodo_id`, `compromiso`) VALUES
(2, 'Proyecto de Cesar', 'Hipotesis x', 'Objetivo del proyecto', 'especificos', NULL, NULL, 2, 6, NULL, 0),
(4, 'Proyecto Yael', 'Nueva Hipotesis', 'Nuevo Objetivo General', 'Nuevos Especificos', NULL, NULL, 10, 1, 2, 0),
(5, 'Proyecto de Alberto', 'Hipotesis de Alberto', 'O general de Alberto', 'O espcifico de Alberto', NULL, NULL, 4, 5, 3, 0),
(6, 'Proyecto de Luis', 'peluishipotesis', 'peluisobjg', 'peluisoe', NULL, NULL, 21, NULL, NULL, NULL),
(7, 'Proyecto de Hugo', 'hiptesis de hugo', 'obj general de hugo', 'o especificos de hugo', NULL, NULL, 20, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubricas`
--

CREATE TABLE `rubricas` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` enum('Numerica','Alfanumerica') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `rubricas`
--

INSERT INTO `rubricas` (`id`, `nombre`, `tipo`) VALUES
(1, 'Rubirca Para Evaluar', 'Numerica'),
(2, 'Rubrica de prueba 2', 'Alfanumerica'),
(3, 'Rubica para Aprobar', 'Alfanumerica'),
(4, 'Rubrica de evaluacion', 'Numerica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_actividades_proyectos1_idx` (`proyectos_id`),
  ADD KEY `fk_actividades_periodos1_idx` (`periodos_id`);

--
-- Indices de la tabla `adquiridos`
--
ALTER TABLE `adquiridos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_adquiridos_proyectos1_idx` (`proyectos_id`),
  ADD KEY `fk_adquiridos_periodos1_idx` (`periodos_id`);

--
-- Indices de la tabla `adscripciones`
--
ALTER TABLE `adscripciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_adscripciones_pes1_idx` (`pes_id`),
  ADD KEY `fk_adscripciones_docentes1_idx` (`docentes_id`);

--
-- Indices de la tabla `comites`
--
ALTER TABLE `comites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comite_docentes2_idx` (`asesor`),
  ADD KEY `fk_comite_docentes3_idx` (`revisor1`),
  ADD KEY `fk_comite_docentes4_idx` (`revisor2`),
  ADD KEY `fk_comite_docentes5_idx` (`revisor3`);

--
-- Indices de la tabla `compromisos`
--
ALTER TABLE `compromisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_compromisos_pes1_idx` (`pes_id`);

--
-- Indices de la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Criterios_Rubricas1_idx` (`Rubricas_id`);

--
-- Indices de la tabla `desgloce_evaluacion`
--
ALTER TABLE `desgloce_evaluacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desgloce_evaluacion_docentes1_idx` (`docentes_id`),
  ADD KEY `fk_desgloce_evaluacion_evaluaciones1` (`evaluaciones_id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estudiantes_pes1_idx` (`pes_id`),
  ADD KEY `fk_estudiantes_periodos1_idx` (`periodos_id`);

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_evaluaciones_proyectos1_idx` (`proyectos_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_generaciones_pes1_idx` (`pes_id`);

--
-- Indices de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comite_docentes1_idx` (`quien`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`),
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comite_UNIQUE` (`comite`),
  ADD KEY `fk_Proyectos_estudiantes1_idx` (`estudiante_id`),
  ADD KEY `fk_proyectos_comite1_idx` (`comite`),
  ADD KEY `fk_proyectos_periodos1_idx` (`periodo_id`),
  ADD KEY `compromiso` (`compromiso`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `adquiridos`
--
ALTER TABLE `adquiridos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `adscripciones`
--
ALTER TABLE `adscripciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `comites`
--
ALTER TABLE `comites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `compromisos`
--
ALTER TABLE `compromisos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `criterios`
--
ALTER TABLE `criterios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `desgloce_evaluacion`
--
ALTER TABLE `desgloce_evaluacion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pes`
--
ALTER TABLE `pes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rubricas`
--
ALTER TABLE `rubricas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_actividades_periodos1` FOREIGN KEY (`periodos_id`) REFERENCES `periodos` (`id`),
  ADD CONSTRAINT `fk_actividades_proyectos1` FOREIGN KEY (`proyectos_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `adquiridos`
--
ALTER TABLE `adquiridos`
  ADD CONSTRAINT `fk_adquiridos_periodos1` FOREIGN KEY (`periodos_id`) REFERENCES `periodos` (`id`),
  ADD CONSTRAINT `fk_adquiridos_proyectos1` FOREIGN KEY (`proyectos_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `adscripciones`
--
ALTER TABLE `adscripciones`
  ADD CONSTRAINT `fk_adscripciones_docentes1` FOREIGN KEY (`docentes_id`) REFERENCES `docentes` (`id`),
  ADD CONSTRAINT `fk_adscripciones_pes1` FOREIGN KEY (`pes_id`) REFERENCES `pes` (`id`);

--
-- Filtros para la tabla `comites`
--
ALTER TABLE `comites`
  ADD CONSTRAINT `fk_comites_docentes_asesor` FOREIGN KEY (`asesor`) REFERENCES `docentes` (`id`),
  ADD CONSTRAINT `fk_comites_docentes_revisor1` FOREIGN KEY (`revisor1`) REFERENCES `docentes` (`id`),
  ADD CONSTRAINT `fk_comites_docentes_revisor2` FOREIGN KEY (`revisor2`) REFERENCES `docentes` (`id`),
  ADD CONSTRAINT `fk_comites_docentes_revisor3` FOREIGN KEY (`revisor3`) REFERENCES `docentes` (`id`);

--
-- Filtros para la tabla `compromisos`
--
ALTER TABLE `compromisos`
  ADD CONSTRAINT `fk_compromisos_pes1` FOREIGN KEY (`pes_id`) REFERENCES `pes` (`id`);

--
-- Filtros para la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD CONSTRAINT `fk_Criterios_Rubricas1` FOREIGN KEY (`Rubricas_id`) REFERENCES `rubricas` (`id`);

--
-- Filtros para la tabla `desgloce_evaluacion`
--
ALTER TABLE `desgloce_evaluacion`
  ADD CONSTRAINT `fk_desgloce_evaluacion_docentes1` FOREIGN KEY (`docentes_id`) REFERENCES `docentes` (`id`),
  ADD CONSTRAINT `fk_desgloce_evaluacion_evaluaciones1` FOREIGN KEY (`evaluaciones_id`) REFERENCES `evaluaciones` (`id`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_estudiantes_periodos1` FOREIGN KEY (`periodos_id`) REFERENCES `periodos` (`id`),
  ADD CONSTRAINT `fk_estudiantes_pes1` FOREIGN KEY (`pes_id`) REFERENCES `pes` (`id`);

--
-- Filtros para la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD CONSTRAINT `fk_evidencias_adquiridos1` FOREIGN KEY (`adquiridos_id`) REFERENCES `adquiridos` (`id`);

--
-- Filtros para la tabla `generaciones`
--
ALTER TABLE `generaciones`
  ADD CONSTRAINT `fk_generaciones_pes1` FOREIGN KEY (`pes_id`) REFERENCES `pes` (`id`);

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
  ADD CONSTRAINT `fk_Proyectos_comites` FOREIGN KEY (`comite`) REFERENCES `comites` (`id`),
  ADD CONSTRAINT `fk_Proyectos_estudiantes1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id`),
  ADD CONSTRAINT `fk_proyectos_periodos1` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
