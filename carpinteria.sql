-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2022 a las 20:28:05
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carpinteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `encargo` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nombre`, `apellidos`, `telefono`, `direccion`, `encargo`, `fecha`) VALUES
('Alejandra', 'Alvarez Rodriguez', 637304589, 'calle la tosca n5', 'mueble para el salon', '2007-04-20'),
('Ana Isabel', 'Rodriguez Suarez', 650474255, 'Avd del llano n7', 'pintar cocina y salon', '2012-10-08'),
('Jorge', 'Ferrero Muriel', 985143986, 'calle llanes 7 s/n', 'cambiar el suelo de parquet y pintar habitación', '2017-09-16'),
('Aida', 'torres santirso', 678942536, 'C/barandandian n23 2D', 'armario empotrado habitación principal', '2009-02-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
