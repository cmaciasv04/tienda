-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2020 at 02:26 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `datoscita`
--

DROP TABLE IF EXISTS `datoscita`;
CREATE TABLE IF NOT EXISTS `datoscita` (
  `idcita` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nom_doc` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `comentario` varchar(50) NOT NULL,
  PRIMARY KEY (`fecha`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datoscita`
--

INSERT INTO `datoscita` (`idcita`, `cedula`, `nombre`, `apellido`, `nom_doc`, `especialidad`, `fecha`, `hora`, `comentario`) VALUES
('cmaciasv', '0988878', 'Carlos', 'Macias', 'Macias', 'Masajes de cajon', '2020-07-24', '10:00 A.M-10:20 A.M', 'n/a'),
('user', '0998876', 'user', 'user', 'Mendoza', 'Quiropractico', '2016-07-12', '10:00 A.M-10:20 A.M', 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `datosdoctor`
--

DROP TABLE IF EXISTS `datosdoctor`;
CREATE TABLE IF NOT EXISTS `datosdoctor` (
  `iddoctor` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `cita` int(11) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datosdoctor`
--

INSERT INTO `datosdoctor` (`iddoctor`, `cedula`, `nombre`, `apellido`, `direccion`, `correo`, `telefono`, `especialidad`, `sexo`, `cita`) VALUES
('elsa', '09887654677', 'Dra.eslsa', 'Macias', 'centro', 'elsa@outlook.com', '0987767467', 'Masajes de cajon', 'Femenino', 0),
('Dr.Daniel', '0987666544', 'Daniel', 'Mendoza', 'Sur oeste', 'Daniel@outlook.com', '343224432', 'Quiropractico', 'Masculino', 0),
('mdavid', '0988776', 'Dr.David', 'Mora', 'norte', 'mdavidad@gmail.com', '2310000', 'Masajes', 'Masculino', 0);

-- --------------------------------------------------------

--
-- Table structure for table `datosusuario`
--

DROP TABLE IF EXISTS `datosusuario`;
CREATE TABLE IF NOT EXISTS `datosusuario` (
  `idusuario` varchar(30) COLLATE utf8_bin NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(30) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(30) COLLATE utf8_bin NOT NULL,
  `correo` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(30) COLLATE utf8_bin NOT NULL,
  `fecha` varchar(30) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(30) COLLATE utf8_bin NOT NULL,
  `cita` int(11) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `datosusuario`
--

INSERT INTO `datosusuario` (`idusuario`, `cedula`, `nombre`, `apellido`, `direccion`, `correo`, `telefono`, `fecha`, `sexo`, `cita`) VALUES
('lmora', 9987766, 'Luis', 'Mora', 'sur', 'lmora@outlook.com', '234567', '2016-06-17', 'Masculino', 0),
('user', 11111111, 'user', 'user', 'n', 'user@outlook.com', '2310000', '2011-08-11', 'Masculino', 0),
('cmaciasv', 987654321, 'Carlos', 'Macias', 'norte', 'm@outlook.com', '2345678', '2019-06-14', 'Masculino', 0);

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
CREATE TABLE IF NOT EXISTS `horarios` (
  `horas` varchar(20) NOT NULL,
  PRIMARY KEY (`horas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horarios`
--

INSERT INTO `horarios` (`horas`) VALUES
('10:00 A.M-10:20 A.M'),
('11:00 A.M-11:30 A.M'),
('11:00 AM - 11:30 AM'),
('12:00 PM - 12:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `password`, `tipo`) VALUES
('Dr.Daniel', '1', 'doctor'),
('carlos', '1', 'admin'),
('cmaciasv', '1', 'usuario'),
('elsa', '1', 'doctor'),
('lmora', '1', 'usuario'),
('mdavid', '1', 'doctor'),
('pedro', '1', 'admin'),
('user', '1', 'usuario');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
