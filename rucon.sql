-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-07-2021 a las 09:02:54
-- Versión del servidor: 10.3.29-MariaDB-0+deb10u1
-- Versión de PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rucon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) NOT NULL,
  `token` char(8) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `architecture` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `specs` text DEFAULT NULL,
  `start` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `cover` text NOT NULL,
  `gallery` longtext NOT NULL,
  `featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `token`, `name`, `description`, `architecture`, `location`, `specs`, `start`, `website`, `cover`, `gallery`, `featured`) VALUES
(1, 'bhk8d27e', 'Nave Industrial', '{\"es\":\"Realización de obra para giro industrial en San Pedro Noh Pat. Planeación de obra y construcción.\",\"en\":\"Execution of work for industrial turn in San Pedro Noh Pat. Work and construction planning.\"}', NULL, 'San Pedro Noh Pat, Mérida, Yucatán', NULL, '2019', NULL, 'project_1_1.png', '[\"project_1_2.png\",\"project_1_2.png\",\"project_1_2.png\"]', 1),
(2, 'jhy789k2', 'Fraccionamiento Bicentenario', '{\"es\":\"Desarrollo de vivienda en Fraccionamiento Bicentenario. Planeación de obra, construcción, acabados y pavimentación.\",\"en\":\"Housing development in Fraccionamiento Bicentenario. Planning of work, construction, finishes and paving.\"}', NULL, 'Mérida, Yucatán', NULL, '2020', NULL, 'project_2_1.png', '[\"project_2_2.png\",\"project_2_3.png\",\"project_2_4.png\"]', 1),
(3, 'jh76d92h', 'Fraccionamiento Diamante - Paseos de Opichén', '{\"es\":\"Desarrollo de vivienda en Paseos de Opichén. Planeación de obra, construcción, acabados y pavimentación.\",\"en\":\"Housing development in Paseos de Opichén. Planning of work, construction, finishes and paving.\"}', NULL, 'Mérida, Yucatán', NULL, '2020', NULL, 'project_3_1.png', '[\"project_3_2.png\",\"project_3_3.png\",\"project_3_4.png\"]', 1),
(9, 'klou78e2', 'Pavimentación Gran San Pedro Cholul - Nueva etapa', '{\"es\":\" Pavimentación y urbanización de nueva etapa en Residencial Gran San Pedro Cholul.\",\"en\":\"Paving and urbanization of a new stage in Residencial Gran San Pedro Cholul.\"}', NULL, 'Mérida, Yucatán', NULL, '2020', NULL, 'project_4_1.png', '[\"project_4_2.png\",\"project_4_3.png\",\"project_4_3.png\"]', 0),
(10, '234hujmb', 'Fraccionamiento Diamante - Paseos de Opichén', '{\"es\":\"Desarrollo de vivienda en Paseos de Opichén. Planeación de obra, construcción, acabados y pavimentación.\",\"en\":\"Housing development in Paseos de Opichén. Planning of work, construction, finishes and paving.\"}', NULL, 'Mérida, Yucatán.', NULL, '2020', NULL, 'project_5_1.png', '[\"project_5_2.png\",\"project_5_3.png\",\"project_5_4.png\"]', 0),
(11, 'h75jk92w', ' Plaza San Pedro Cholul', '{\"es\":\"Planeación de obra, construcción y acabados de plaza comercial en Gran San Pedro Cholul.\",\"en\":\"Planning of work, construction and finishes of a shopping plaza in Gran San Pedro Cholul.\"}', NULL, 'Mérida, Yucatán.', NULL, '2020', NULL, 'project_6_1.png', '[\"project_6_2.png\",\"project_6_3.png\",\"project_6_3.png\"]', 0),
(12, 'jhy7rdk4', 'Acabados Primaselva - Cabo Norte', '{\"es\":\"Aplicación de acabados interiores y exteriores en edificio de departamentos Primaselva.\",\"en\":\"Application of interior and exterior finishes in Primaselva apartment building.\"}', NULL, 'Mérida, Yucatán.', NULL, '2021', NULL, 'project_7_1.png', '[\"project_7_2.png\",\"project_7_3.png\",\"project_7_4.png\"]', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
