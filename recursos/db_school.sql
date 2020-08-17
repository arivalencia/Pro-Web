-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2020 a las 01:38:04
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_school`
--

DROP DATABASE IF EXISTS `db_school`;
CREATE DATABASE IF NOT EXISTS `db_school` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_school`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `NoCuenta` int(14) NOT NULL,
  `estatus` varchar(15) DEFAULT NULL,
  `promanterior` float DEFAULT NULL,
  `numficha` varchar(14) DEFAULT NULL,
  `trabaja` tinyint(1) DEFAULT NULL,
  `ocupacion` varchar(40) DEFAULT NULL,
  `nombre_padre` varchar(110) DEFAULT NULL,
  `ocupacion_padre` varchar(50) DEFAULT NULL,
  `nombre_madre` varchar(110) DEFAULT NULL,
  `ocupacion_madre` varchar(50) DEFAULT NULL,
  `propedeutico` varchar(30) DEFAULT NULL,
  `ano_bachiderato` year(4) DEFAULT NULL,
  `promedio_bachi` float DEFAULT NULL,
  `carrera_ut` varchar(50) DEFAULT NULL,
  `ut_procedencia` varchar(50) DEFAULT NULL,
  `num_imss` varchar(18) DEFAULT NULL,
  `areincripcion` tinyint(1) DEFAULT NULL,
  `folio_pronabes` varchar(20) DEFAULT NULL,
  `IdEscuela_proc` int(7) DEFAULT NULL,
  `IdPlan_Estudios` int(3) NOT NULL,
  `Id_Personas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirante`
--

CREATE TABLE `aspirante` (
  `Id_Aspirante` int(11) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Apaterno` varchar(80) NOT NULL,
  `Amaterno` varchar(80) NOT NULL,
  `adeudo` tinyint(1) NOT NULL,
  `numadeudo` int(11) NOT NULL,
  `padecimiento` tinyint(1) NOT NULL,
  `tipopadecimiento` text NOT NULL,
  `alergias` tinyint(1) NOT NULL,
  `tipoalergias` text NOT NULL,
  `ansiedad` tinyint(1) NOT NULL,
  `estres` tinyint(1) NOT NULL,
  `depresion` tinyint(1) NOT NULL,
  `rechazo` tinyint(1) NOT NULL,
  `adaptacion` tinyint(1) NOT NULL,
  `extra` mediumtext NOT NULL,
  `actanacimiento` mediumtext NOT NULL,
  `curp` mediumtext NOT NULL,
  `comprobante_domicilio` mediumtext NOT NULL,
  `comprobante_estudio` mediumtext NOT NULL,
  `ficha_admision` mediumtext NOT NULL,
  `formato_inscripcion` mediumtext NOT NULL,
  `fotografia_aspirante` mediumtext NOT NULL,
  `correo` varchar(45) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Id_Carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `aspirante`
--
DELIMITER $$
CREATE TRIGGER `persona` AFTER UPDATE ON `aspirante` FOR EACH ROW BEGIN 

INSERT INTO persona(nombre, apellidopat, apellidomat,Id_Carrera) SELECT Nombre, Apaterno, Amaterno,Id_Carrera FROM aspirante WHERE NOT EXISTS
(SELECT nombre,apellidopat,apellidomat FROM persona  WHERE persona.nombre = aspirante.nombre AND persona.apellidopat=aspirante.Apaterno AND persona.apellidomat=aspirante.Amaterno);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `Id_Grupo` int(7) NOT NULL,
  `folio` varchar(20) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `clave` varchar(120) NOT NULL,
  `tipo` varchar(5) NOT NULL,
  `cupo` int(2) NOT NULL,
  `facta` int(12) NOT NULL,
  `Id_Profesor` int(4) NOT NULL,
  `Id_Materia` int(5) NOT NULL,
  `Id_Periodo` varchar(4) NOT NULL,
  `IdPlan_Estudios` int(3) NOT NULL,
  `IdRango_Horario` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcial`
--

CREATE TABLE `parcial` (
  `Id_Parcial` int(12) NOT NULL,
  `num_eval` int(1) NOT NULL,
  `calificacion` int(10) DEFAULT NULL,
  `fecha_asigno` datetime NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `porcentaje` int(3) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `Id_Resultado` int(7) DEFAULT NULL,
  `Id_Personas` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Id_Personas` int(7) NOT NULL,
  `nomestado_v` varchar(30) DEFAULT NULL,
  `nom_municipio_v` varchar(30) DEFAULT NULL,
  `nomestado_n` varchar(30) DEFAULT NULL,
  `nom_municipio_n` varchar(30) DEFAULT NULL,
  `apellidopat` varchar(30) NOT NULL,
  `apellidomat` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fechanaci` date DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  `callenum` varchar(50) DEFAULT NULL,
  `colonia_v` varchar(50) DEFAULT NULL,
  `codigopostal_v` int(5) DEFAULT NULL,
  `pais` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono1` varchar(20) DEFAULT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `telefono3` varchar(20) DEFAULT NULL,
  `alumno` tinyint(1) DEFAULT NULL,
  `alumno_activo` tinyint(1) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `admin_activo` tinyint(1) DEFAULT NULL,
  `profesor` tinyint(3) DEFAULT NULL,
  `profesor_activo` tinyint(1) DEFAULT NULL,
  `operativo` tinyint(1) DEFAULT NULL,
  `operativo_activo` tinyint(1) DEFAULT NULL,
  `externo` tinyint(1) DEFAULT NULL,
  `externo_activo` tinyint(1) DEFAULT NULL,
  `padre` tinyint(1) DEFAULT NULL,
  `imagen` blob DEFAULT NULL,
  `password` varchar(512) DEFAULT NULL,
  `x` int(5) DEFAULT NULL,
  `y` int(5) DEFAULT NULL,
  `num_exterior` varchar(45) DEFAULT NULL,
  `num_interior` varchar(45) DEFAULT NULL,
  `idgrupo_sanguineo` int(1) DEFAULT NULL,
  `googlemail` varchar(50) DEFAULT NULL,
  `uppmail` varchar(50) DEFAULT NULL,
  `numnomina` int(8) DEFAULT NULL,
  `Id_Carrera` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `persona`
--
DELIMITER $$
CREATE TRIGGER `alumno` AFTER INSERT ON `persona` FOR EACH ROW BEGIN 

INSERT INTO alumno(IdPlan_Estudios,Id_Personas) SELECT Id_Carrera,Id_Personas FROM persona WHERE NOT EXISTS (SELECT Id_Personas FROM alumno where alumno.Id_Personas=persona.Id_Personas);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_estudios`
--

CREATE TABLE `plan_estudios` (
  `IdPlan_Estudios` int(3) NOT NULL,
  `noperiodos` tinyint(1) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_aut` date NOT NULL,
  `nocreditos` int(3) NOT NULL,
  `fechainiv` date NOT NULL,
  `fechafinv` date NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `materias_comunes` int(2) NOT NULL,
  `materias_enfasis` int(2) NOT NULL,
  `Id_Curso` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `Id_Resultado` int(8) NOT NULL,
  `noceunta` varchar(14) NOT NULL,
  `calificacion` int(3) NOT NULL,
  `asistencia` float NOT NULL,
  `estatus` varchar(10) NOT NULL,
  `tipo_res` varchar(5) NOT NULL,
  `fechareg` date NOT NULL,
  `tipo_ex` varchar(5) NOT NULL,
  `autoriza` char(2) NOT NULL,
  `calif_t1` int(2) NOT NULL,
  `calif_t2` int(2) NOT NULL,
  `enhistorial` tinyint(1) NOT NULL,
  `cal_real` int(3) DEFAULT NULL,
  `Id_Materia` int(5) NOT NULL,
  `Id_Profesor` int(4) NOT NULL,
  `Id_Grupo` int(7) NOT NULL,
  `Id_Curso` int(2) NOT NULL,
  `IdPlan_Estudios` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`NoCuenta`),
  ADD KEY `Id_Personas` (`Id_Personas`);

--
-- Indices de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  ADD PRIMARY KEY (`Id_Aspirante`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Id_Grupo`);

--
-- Indices de la tabla `parcial`
--
ALTER TABLE `parcial`
  ADD PRIMARY KEY (`Id_Parcial`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`Id_Personas`);

--
-- Indices de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  ADD PRIMARY KEY (`IdPlan_Estudios`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`Id_Resultado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `NoCuenta` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  MODIFY `Id_Aspirante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `Id_Grupo` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parcial`
--
ALTER TABLE `parcial`
  MODIFY `Id_Parcial` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `Id_Personas` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  MODIFY `IdPlan_Estudios` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `Id_Resultado` int(8) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Id_Personas`) REFERENCES `persona` (`Id_Personas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
