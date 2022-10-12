-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 12-10-2022 a las 19:58:25
-- Versión del servidor: 10.8.2-MariaDB-1:10.8.2+maria~focal
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciados`
--

CREATE TABLE `iniciados` (
  `usuario` varchar(30) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `apellido1` varchar(30) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `iniciados`
--

INSERT INTO `iniciados` (`usuario`, `nombre`, `email`, `apellido`, `apellido1`, `telefono`, `fecha`, `dni`, `password`) VALUES
('mikel', 'aquiles', 'adminadmin@gmail.com', 'agamenon', 'patroclo', 655860404, '1942-01-01', '12345678-Z', '12345'),
('admin1', 'jogfdgedf', 'adminadmin@gmail.com', 'asdas', 'asdasd', 123131233, '1111-22-33', '12345678-Z', '11111'),
('admin2', 'adminator', 'admin2admin2@hotmail.es', 'terminator', 'joncameron', 987654321, '2222-33-44', '12345678-Z', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `todo`
--

CREATE TABLE `todo` (
  `id` int(100) UNSIGNED NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `autor` varchar(40) DEFAULT NULL,
  `editorial` varchar(40) DEFAULT NULL,
  `genero` varchar(40) DEFAULT NULL,
  `publicacion` varchar(40) DEFAULT NULL,
  `formato` varchar(40) DEFAULT NULL,
  `descarga` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `todo`
--

INSERT INTO `todo` (`id`, `nombre`, `autor`, `editorial`, `genero`, `publicacion`, `formato`, `descarga`) VALUES
(2, '86-batman', 'James Tynion IV', 'DC', 'accion,peleas,suspense', '8-enero-2020', 'CBR', 'https://mega.nz/file/WERiWCrY#H6gLeJG6pUjDIOf6RlfDLsO-BAcQJE64mYKGdHXeUGo'),
(3, '87-batman', 'James Tynion IV', 'DC', 'accion,peleas,suspense', '\r\n22 de enero de 2020', 'CBR', 'https://mega.nz/file/XEJmUASA#U4j9RcUOAeqsnIhslVoJ6JU0Fg5Kosb4vloeJLU8J44'),
(4, '88-batman', 'James Tynion IV', 'DC', 'accion,peleas,suspense', '\r\n5 de febrero de 2020', 'CBR', 'https://mega.nz/file/XV4HCCyb#OjdIIUjBexvg3pTls5R0Vtzblk-KlKpA1BhwJr1Av5s'),
(5, '89-batman', 'James Tynion IV', 'DC', 'accion,peleas,suspense', '\r\n19 de febrero de 2020', 'CBR', 'https://mega.nz/file/GERQ2DoB#wJJyoPuF4goBo3_SPZbjO8ZBcWcExam2gnQeyTvyKJs'),
(6, 'Batman #0', 'Scott Snyder and Greg Capullo', 'DC', 'accion,peleas,suspense', '\r\n12 de septiembre de 2012', 'CBR', 'https://mega.nz/file/PZh1CQpB#8qtZjZN8AFBysvi_0apM-vLIVcddOj6qMJT2bd-Z6Yk'),
(7, 'Batman #1', 'Scott Snyder and Greg Capullo', 'DC', 'accion,peleas,suspense', '\r\n21 de septiembre de 2011', 'CBR', 'https://mega.nz/file/eMR3hAab#gqmSqhTZMu4b20d1wPnxvJ_52lFqDrDeu6IyqwjnnkY'),
(8, 'Batman #2', 'Scott Snyder and Greg Capullo', 'DC', 'accion,peleas,suspense', '\r\nEnero de 2012', 'CBR', 'https://mega.nz/file/nIZ0wQCD#d7pWNXIaf-t1NVmTGxY3i3E3jQhnxgjLpSB-NCF_gjU'),
(9, 'Batman #3', 'Scott Snyder and Greg Capullo', 'DC', 'accion,peleas,suspense', '\r\nFebrero de 2012', 'CBR', 'https://mega.nz/file/iBIyGQ4Z#8HdzHnAfoT3cN32VISQl4SKbuLKgY7ot-fAkAZFVWD8'),
(10, '1. Dune', 'Frank Herbert', 'Acervo', 'novela, ciencia ficcion, politica', '\r\n1965', 'EPUB', 'https://mega.nz/file/LUIVmYha#Tg9ryh5w7yjwU-EO7bG-Iw8oZFVIJRjeGmLXXI5zWqg'),
(11, '2. Dune', 'Frank Herbert', 'Acervo', 'novela, ciencia ficcion, politica', '\r\n1969', 'EPUB', 'https://mega.nz/file/3N50wATb#z53LjwliPsAXIKvia_zHFmTCO7EzS0cSXVhmQsElgxA'),
(12, '3. Dune', 'Frank Herbert', 'Acervo', 'novela, ciencia ficcion, politica', '\r\n1976', 'EPUB', 'https://mega.nz/file/uRRkEYbK#lD-0-EeQhteD7Asg4Rd-k7OAXsvkFu3Go_6RxSYMz0c'),
(13, '(Shingeki)Ataque a los titanes 137', 'Hajime Isayama', 'Kōdansha', 'manga,violencia', '\r\n9 de septiembre de 2009', 'PDF', 'https://mega.nz/file/PIRAjCQa#JJXNuMx8WKvdamg1vQmaeJFmNf7GeE9Eby7DLLJpFfY'),
(14, '(Shingeki)Ataque a los titanes 138 FINAL', 'Hajime Isayama', 'Kōdansha', 'manga,violencia', '\r\n9 de abril de 2021', 'PDF', 'https://mega.nz/file/WJICUTaR#Tf3wuXk5NCNWGWP7tfrZTTIxMWzHdn-SSoeRg2hfa2I');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
