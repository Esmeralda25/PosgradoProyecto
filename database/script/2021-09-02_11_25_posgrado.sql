-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-09-2021 a las 16:24:44
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
(15, 'ENERO- Junio 2021', '2021-01-01', '2021-06-30', 'Concluido', 1, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`,`rubrica`,`generacion_id`),
  ADD KEY `fk_Periodos_Rubricas1_idx` (`rubrica`),
  ADD KEY `fk_periodos_generaciones1_idx` (`generacion_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD CONSTRAINT `fk_periodos_generaciones1` FOREIGN KEY (`generacion_id`) REFERENCES `generaciones` (`id`),
  ADD CONSTRAINT `fk_Periodos_Rubricas1` FOREIGN KEY (`rubrica`) REFERENCES `rubricas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
