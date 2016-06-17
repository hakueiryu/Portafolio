
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2015 a las 19:27:27
-- Versión del servidor: 5.1.66
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u483376584_redi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_cgec`
--

CREATE TABLE IF NOT EXISTS `auditoria_cgec` (
  `fk_codigo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `inspeccion` int(5) NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutado` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `estatus` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `action` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `avance` int(5) NOT NULL,
  `diains` int(2) NOT NULL,
  `mesins` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `anioins` int(4) NOT NULL,
  KEY `fk_codigo` (`fk_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `auditoria_cgec`
--

INSERT INTO `auditoria_cgec` (`fk_codigo`, `nombre`, `inspeccion`, `razon`, `t_ejecutado`, `t_ejecutar`, `t_ejecucion`, `inspector`, `telefi`, `telefonoi`, `estatus`, `action`, `avance`, `diains`, `mesins`, `anioins`) VALUES
('ID-2797', 'RESTAURACIÓN DE LA IGLESIA DE RUBIO', 2, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 50, 11, 'Junio', 2014),
('ID-2797', 'RESTAURACIÓN DE LA IGLESIA DE RUBIO', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 48, 14, 'Abril', 2014),
('ID-2763', 'CONSTRUCCIÓN DE AGENCIA DEL BANCO DE VENEZUELA EN LA FRÍA, TÁCHIRA', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 30, 14, 'Julio', 2014),
('ID-2763', 'CONSTRUCCIÓN DE AGENCIA DEL BANCO DE VENEZUELA EN LA FRÍA, TÁCHIRA', 2, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 60, 27, 'Agosto', 2014),
('ID-2763', 'CONSTRUCCIÓN DE AGENCIA DEL BANCO DE VENEZUELA EN LA FRÍA, TÁCHIRA', 3, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 80, 17, 'Octubre', 2014),
('ID-2762', 'CONSTRUCCIÓN DE AGENCIA DEL BANCO DE VENEZUELA EN TÁRIBA, TÁCHIRA', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 0, 21, 'Julio', 2014),
('ID-2762', 'CONSTRUCCIÓN DE AGENCIA DEL BANCO DE VENEZUELA EN TÁRIBA, TÁCHIRA', 2, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 25, 9, 'Octubre', 2014),
('ID-2762', 'CONSTRUCCIÓN DE AGENCIA DEL BANCO DE VENEZUELA EN TÁRIBA, TÁCHIRA', 3, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 70, 26, 'Noviembre', 2014),
('ID-2731', 'CULMINACIÓN DEL COMPLEJO PARA PROCESIONES DEL SANTO CRISTO DE LA GRITA', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 98, 4, 'Julio', 2014),
('ID-3583', 'ASIGNAR LOS EQUIPOS A LA UNIDAD DE PRODUCCIÓN DE CONTENIDOS DEL SISTEMA TACHIRENSE DE COMUNICACIÓN P', 1, '', '', '', '', '', 0, 0, 'Sin Iniciar', 'update', 0, 9, 'Octubre', 2014),
('ID-2770', 'LA FUNDACIÓN DE EDIFICACIONES Y DOTACIONES EDUCATIVAS (F.E.D.E.) REALIZARÁ UNA (01) INSPECCIÓN EN LA', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 10, 16, 'Abril', 2014),
('ID-2770', 'LA FUNDACIÓN DE EDIFICACIONES Y DOTACIONES EDUCATIVAS (F.E.D.E.) REALIZARÁ UNA (01) INSPECCIÓN EN LA', 2, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 10, 28, 'Febrero', 2015),
('ID-3660', 'IMPLEMENTACIÓN DE LA GRAN MISIÓN BARRIO NUEVO, BARRIO TRICOLOR, EN EL BARRIO LAS MARGARITAS, EN LA P', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 0, 14, 'Abril', 2014),
('ID-3393', 'CONSTRUCCION DEL SUPER PDVAL SAN CRISTOBAL', 1, '', '', 'a.-INSTALACIÓN DE ASCENSOR DE CARGA.', '', '', 0, 0, 'En Ejecución', 'update', 95, 5, 'Diciembre', 2014),
('ID-2777', 'PLANTACION DE UN MILLON (1.000.000) DE ARBOLES CORRESPONDIENTE A 900 HECTAREAS APROXIMADAMENTE EN EL', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 60, 7, 'Noviembre', 2014),
('ID-2722', 'CONSTRUCCIÓN DE PUENTE COLGANTE SOBRE LA QUEBRADA POTOSÍ, VÍA MACANILLO - LA FLORIDA', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 15, 7, 'Noviembre', 2014);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_envergadura`
--

CREATE TABLE IF NOT EXISTS `auditoria_envergadura` (
  `fk_codigo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `inspeccion` int(5) NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutado` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `estatus` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `action` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `avance` int(5) NOT NULL,
  `diains` int(2) NOT NULL,
  `mesins` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `anioins` int(4) NOT NULL,
  KEY `fk_codigo` (`fk_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_espeaten`
--

CREATE TABLE IF NOT EXISTS `auditoria_espeaten` (
  `fk_codigo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `inspeccion` int(5) NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutado` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `estatus` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `action` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `avance` int(5) NOT NULL,
  `diains` int(2) NOT NULL,
  `mesins` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `anioins` int(4) NOT NULL,
  KEY `fk_codigo` (`fk_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_gobernacion`
--

CREATE TABLE IF NOT EXISTS `auditoria_gobernacion` (
  `fk_codigo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `inspeccion` int(5) NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutado` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `estatus` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `action` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `avance` int(5) NOT NULL,
  `diains` int(2) NOT NULL,
  `mesins` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `anioins` int(4) NOT NULL,
  KEY `fk_codigo` (`fk_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_inversion`
--

CREATE TABLE IF NOT EXISTS `auditoria_inversion` (
  `fk_codigo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `inspeccion` int(5) NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutado` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `estatus` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `action` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `avance` int(5) NOT NULL,
  `diains` int(2) NOT NULL,
  `mesins` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `anioins` int(4) NOT NULL,
  KEY `fk_codigo` (`fk_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_ministerio`
--

CREATE TABLE IF NOT EXISTS `auditoria_ministerio` (
  `fk_codigo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `inspeccion` int(5) NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutado` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `estatus` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `action` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `avance` int(5) NOT NULL,
  `diains` int(2) NOT NULL,
  `mesins` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `anioins` int(4) NOT NULL,
  KEY `fk_codigo` (`fk_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `auditoria_ministerio`
--

INSERT INTO `auditoria_ministerio` (`fk_codigo`, `nombre`, `inspeccion`, `razon`, `t_ejecutado`, `t_ejecutar`, `t_ejecucion`, `inspector`, `telefi`, `telefonoi`, `estatus`, `action`, `avance`, `diains`, `mesins`, `anioins`) VALUES
('min-2015-005', 'REHABILITACION DEL PUENTE URIBANTE', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 50, 12, 'Enero', 2015);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_planagua`
--

CREATE TABLE IF NOT EXISTS `auditoria_planagua` (
  `fk_codigo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `inspeccion` int(5) NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutado` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `t_ejecucion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `estatus` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `action` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `avance` int(5) NOT NULL,
  `diains` int(2) NOT NULL,
  `mesins` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `anioins` int(4) NOT NULL,
  KEY `fk_codigo` (`fk_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `auditoria_planagua`
--

INSERT INTO `auditoria_planagua` (`fk_codigo`, `nombre`, `inspeccion`, `razon`, `t_ejecutado`, `t_ejecutar`, `t_ejecucion`, `inspector`, `telefi`, `telefonoi`, `estatus`, `action`, `avance`, `diains`, `mesins`, `anioins`) VALUES
('pna-2014-007', 'CONSTRUCCION DEL SISTEMA DE ACUEDUCTO PARA EL SECTOR HUGO CHAVEZ', 1, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 5, 21, 'Abril', 2014),
('pna-2014-007', 'CONSTRUCCION DEL SISTEMA DE ACUEDUCTO PARA EL SECTOR HUGO CHAVEZ', 2, '', '', '', '', '', 0, 0, 'En Ejecución', 'update', 65, 14, 'Octubre', 2014),
('pna-2014-001', 'CONSTRUCCION DE ESTANQUE DE ALMACENAMIENTO  DE 500 M3', 1, '', '', '', '', '', 0, 0, 'Sin Iniciar', 'update', 0, 12, 'Agosto', 2014);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_cgec`
--

CREATE TABLE IF NOT EXISTS `proyecto_cgec` (
  `nro` int(5) DEFAULT NULL,
  `codigo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `nombre` varchar(350) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `entrevistado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telef` int(4) DEFAULT NULL,
  `telefono` int(7) DEFAULT NULL,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ente` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inspeccion` int(5) DEFAULT NULL,
  `estatus` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `razon` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `diains` int(2) DEFAULT NULL,
  `mesins` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `anioins` int(4) DEFAULT NULL,
  `t_ejecutado` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parroquia` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inversion` decimal(10,2) DEFAULT NULL,
  `coordnorte` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `coordeste` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rif` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieror` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civr` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieroi` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civi` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `avance` int(5) DEFAULT NULL,
  `diai` int(2) DEFAULT NULL,
  `mesi` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioi` int(4) DEFAULT NULL,
  `valla` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `diac` int(2) DEFAULT NULL,
  `mesc` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioc` int(4) DEFAULT NULL,
  `beneficiados` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto_cgec`
--

INSERT INTO `proyecto_cgec` (`nro`, `codigo`, `nombre`, `entrevistado`, `telef`, `telefono`, `cargo`, `ente`, `anio`, `descripcion`, `inspeccion`, `estatus`, `razon`, `diains`, `mesins`, `anioins`, `t_ejecutado`, `t_ejecutar`, `t_ejecucion`, `inspector`, `telefi`, `telefonoi`, `municipio`, `parroquia`, `sector`, `inversion`, `coordnorte`, `coordeste`, `empresa`, `rif`, `ingenieror`, `civr`, `ingenieroi`, `civi`, `avance`, `diai`, `mesi`, `anioi`, `valla`, `diac`, `mesc`, `anioc`, `beneficiados`) VALUES
(1, 'ID-2797', 'RESTAURACIÓN DE LA IGLESIA DE RUBIO', 'LILIANA', 0, 0, '', 'CONSEJO FEDERAL DE GOBIERNO', 2014, 'PINTURA, REPARACIÓN DE REJAS PROTECTORAS, VITRALES Y FACHADA.', 3, 'En Ejecución', '', 25, 'Septiembre', 2014, '', '', '', '', 0, 0, 'Junín', 'RUBIO', 'EL CENTRO', '2157951.00', '', '', '', '', '', '', '', '', 80, 0, 'Vacio', 0, 'Sí', 1, 'Vacio', 2013, ''),
(2, 'ID-2730', 'CULMINACIÓN DE LA PLAZA DE SANTA BÁRBARA EN EL MUNICIPIO JUNÍN DEL ESTADO TÁCHIRA. CON UNA INVERSIÓN DE BS. 785.000 PROVENIENTES DEL CONSEJO FEDERAL DE ', 'LILIANA', 0, 0, '', 'CONSEJO FEDERAL DE GOBIERNO', 2013, 'construccion de sistemas electricos y accesorios, acabados de jardineria y construccion e calles, ac', 1, 'Culminado', '', 14, 'Abril', 2014, '', '', '', '', 0, 0, 'Junín', 'RUBIO', 'EL CENTRO', '785000.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(3, 'ID-2763', 'CONSTRUCCIÓN DE AGENCIA DEL BANCO DE VENEZUELA EN LA FRÍA, TÁCHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR DE ECONOMÍA, FINANZAS', 2014, 'CONSTRUCCION D SEDE DEL BANCO DE VENEZUELA', 4, 'En Ejecución', '', 18, 'Marzo', 2015, '', '', '', '', 0, 0, 'García de Hevia', 'LA FRIA', '', '7995746.00', '', '', '', '', '', '', '', '', 80, 1, 'Abril', 2014, 'Sí', 1, 'Mayo', 2015, ''),
(4, 'ID-2762', 'CONSTRUCCIÓN DE AGENCIA DEL BANCO DE VENEZUELA EN TÁRIBA, TÁCHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR DE ECONOMÍA, FINANZAS', 2014, 'CONSTRUCCION Y REHABILITACION DE LA AGENCIA DEL BANCO DE VENEZUELA QUE FUNCIONA EN EL MUNICIPIO CARD', 4, 'En Ejecución', '', 16, 'Enero', 2015, '', '', '', '', 0, 0, 'Cárdenas', 'TARIBA', '', '0.00', '', '', '', '', '', '', '', '', 80, 1, 'Agosto', 2014, 'Sí', 0, 'Vacio', 0, ''),
(5, 'ID-2741', 'ELABORACIÓN DE ESTUDIO PARA LA REGULARIZACIÓN Y ABSORCIÓN DE TRABAJADORES TERCERIZADOS QUE PRESTAN SERVICIOS EN LAS INSTITUCIONES Y/O ENTES ADSCRITOS AL MINISTERIO DEL PODER POPULAR EL AMBIENTE EN EL ESTADO TÁCHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'ESTUDIO PARA LA REGULARIZACIÓN Y ABSORCIÓN DE TRABAJADORES TERCERIZADOS QUE PRESTAN SERVICIOS EN LAS', 1, 'En Ejecución', '', 15, 'Diciembre', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 5, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(6, 'ID-2786', 'RECONSTRUCCIÓN DE PUENTE TUBO LÍNEA 54? Y 42? PASO QUEBRADA LA CHIVATA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'RECONSTRUCCIÓN DE PUENTE TUBO LÍNEA 54? Y 42? ', 1, 'Culminado', '', 2, 'Septiembre', 2014, '', '', '', '', 0, 0, 'Cárdenas', 'PASO QUEBRADA LA CHIVATA', '', '40000000.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(7, 'ID-2801', 'SISTEMA DE ADUCCIÓN Y POTABILIZACIÓN TETEO-NARANJALES', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'SISTEMA DE ADUCCIÓN Y POTABILIZACIÓN TETEO-NARANJALES', 1, 'En Ejecución', '', 15, 'Septiembre', 2014, '', '', '', '', 0, 0, 'Fernández Feo', 'TETEO-NARANJALES', '', '29700137.00', '', '', '', '', '', '', '', '', 12, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(8, 'ID-2739', 'EJECUCIÓN DEL PROYECTO DE MODERNIZACIÓN DE LA PLANTA POTABILIZADORA "LA BERMEJA"', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'JECUCIÓN DEL PROYECTO DE MODERNIZACIÓN DE LA PLANTA POTABILIZADORA "LA BERMEJA"', 1, 'Sin Iniciar', '', 5, 'Diciembre', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'LA BERMEJA', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, '30000'),
(9, 'ID-2725', 'CONSTRUCCIÓN DE SISTEMA DE ACUEDUCTO PARA EL SECTOR HUGO CHÁVEZ FRÍAS, MUNICIPIO TORBES.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'CONSTRUCCIÓN DE SISTEMA DE ACUEDUCTO PARA EL SECTOR HUGO CHÁVEZ FRÍAS, MUNICIPIO TORBES.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Torbes', 'SAN JOSECITO', 'HUGO CHÁVEZ FRÍAS', '4343880.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(10, 'ID-2742', 'ELABORACIÓN DE PROYECTOS ENMARCADOS EN EL PROCESO DE RECOLECCIÓN DE DESECHOS SÓLIDOS EN COLABORACIÓN INTERINSTITUCIONAL CON LAS DISTINTAS ALCALDÍAS DEL ESTADO TÁCHIRA A FIN DE OPTIMIZAR EL SISTEMA DE SERVICIOS PRESTADOS', 'LILIANA', 0, 0, '', 'MINSITERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'ELABORACIÓN DE PROYECTOS ENMARCADOS EN EL PROCESO DE RECOLECCIÓN DE DESECHOS SÓLIDOS', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Torbes', 'PARA TODO EL TACHIRA', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(11, 'ID-2727', 'CONSTRUCCIÓN SISTEMA DE ACUEDUCTO DEL SUR EL MILAGRO', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'CONSTRUCCIÓN SISTEMA DE ACUEDUCTO DEL SUR EL MILAGRO, MUNICIPIO LIBERTADOR', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Libertador', 'EL MILAGRO', '', '16600000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(12, 'ID-2726', 'CONSTRUCCIÓN DEL ACUEDUCTOS DE LA QUEBRADA LA LEGIA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'CONSTRUCCIÓN DEL ACUEDUCTOS DE LA QUEBRADA LA LEGIA, MUNICIPIO JUNIN', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Junín', 'LA LEGIA', '', '11404000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(13, 'ID-2729', 'CONTINUACIÓN Y PUESTA EN MARCHA DEL ACUEDUCTO DEL SUR', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'CONTINUACIÓN Y PUESTA EN MARCHA DEL ACUEDUCTO DEL SUR, EL MILAGRO, MUNICIPIO LIBERTADOR.', 1, 'Sin Iniciar', '', 16, 'Octubre', 2014, '', '', '', '', 0, 0, 'Libertador', 'EL MILAGRO', '', '783032.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(14, 'ID-2806', 'TRANSFERENCIA A HIDROSUROESTE DE RECURSOS POR BS. 45.677.390,40, PARA LA EJECUCIÓN DE LA OBRA REUBICACIÓN DE LA LÍNEA DE ADUCCIÓN SAN JOSECITO', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'EJECUCIÓN DE LA OBRA REUBICACIÓN DE LA LÍNEA DE ADUCCIÓN SAN JOSECITO, TRAMO II ? AV ROTARIA ? LA CHUCURÍ, DEL MUNICIPIO SAN CRISTÓBAL.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Torbes', 'SAN JOSECITO', '', '45677390.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(15, 'ID-3595', 'ALIANZA UNES-MPPSP EN EL ESTADO TACHIRA PARA CONVIVIR DE MUTUO ACUERDO LA ENTIDAD DE ATENCION SAN CRISTOBAL (V) DONDE SE ENCUENTRAN LOS ADOLESCENTES DE EN CONFLICTO CON LA LEY PENAL CONJUNTAMENTE CON LA UNIVERSIDAD NACIONAL EXPERIMENTAL DE LA SEGURIDAD (UNES)', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL SERVICIO PENI', 2014, 'ALIANZA UNES-MPPSP EN EL ESTADO TACHIRA PARA CONVIVIR DE MUTUO ACUERDO LA ENTIDAD DE ATENCION SAN CRISTOBAL (V) DONDE SE ENCUENTRAN LOS ADOLESCENTES DE EN CONFLICTO CON LA LEY PENAL CONJUNTAMENTE CON LA UNIVERSIDAD NACIONAL EXPERIMENTAL DE LA SEGURIDAD (UNES) QUE COEXISTEN DENTRO DE LOS MISMOS ESPACIOS.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(16, 'ID-2715', 'ADECUAR CENTROS DE FORMACION PARA ADOLESCENTES EN CONFLICTO CON LA LEY PENAL, CONJUNTAMENTE CON EL MINISTERIO DEL PODER POPULAR RELACIONES ', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL SERVICIO PENI', 2014, 'ADECUAR CENTROS DE FORMACION PARA ADOLESCENTES EN CONFLICTO CON LA LEY PENAL, CONJUNTAMENTE CON EL MINISTERIO DEL PODER POPULAR RELACIONES ', 1, 'Culminado', '', 5, 'Diciembre', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(17, 'ID-2743', 'ELABORACIÓN DEL PROYECTO DEL "CRISTO DE LA MONTAÑA"', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL TURISMO', 2014, 'ELABORACIÓN DEL PROYECTO DEL "CRISTO DE LA MONTAÑA" EN EL MUNICIPIO JÁUREGUI DEL ESTADO TÁCHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Jáuregui', 'LA GRITA', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(18, 'ID-2731', 'CULMINACIÓN DEL COMPLEJO PARA PROCESIONES DEL SANTO CRISTO DE LA GRITA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL TURISMO', 2014, 'CULMINACIÓN DEL COMPLEJO PARA PROCESIONES DEL SANTO CRISTO DE LA GRITA EN EL MUNICIPIO JÁUREGUI DEL ESTADO TÁCHIRA', 2, 'En Ejecución', '', 24, 'Noviembre', 2014, '', '', '', '', 0, 0, 'Jáuregui', 'LA GRITA', '', '93461995.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(19, 'ID-2787', 'REHABILITACIÓN DE LA PLAZA Y LA IGLESIA DE RUBIO ', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL TURISMO', 2014, 'REHABILITACIÓN DE LA PLAZA Y LA IGLESIA DE RUBIO EN EL MUNICIPIO DE JUNÍN DEL ESTADO TÁCHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Junín', 'RUBIO', '', '2930146.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(20, 'ID-2765', 'INSTALACIÓN DE TAQUILLA ÚNICA DE TRÁMITES DE LA PRODUCCIÓN EN SAN CRISTÓBAL', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA INDUSTRIAS', 2014, 'INSTALACIÓN DE TAQUILLA ÚNICA DE TRÁMITES DE LA PRODUCCIÓN EN SAN CRISTÓBAL EN EL MUNICIPIO SAN CRISTÓBAL DEL ESTADO TÁCHIRA', 1, 'Culminado', '', 4, 'Julio', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(21, 'ID-2707', 'CONFORMACIÓN DE 02 ZONAS ECONÓMICAS ESPECIALES PARA IMPULSAR LA ECONOMÍA Y DERROTAR EL CONTRABANDO DE LA FRONTERA FRONTERA DEL ESTADO TÁCHIRA CON COLOMBIA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA INDUSTRIAS', 2014, 'CONFORMACIÓN DE 02 ZONAS ECONÓMICAS ESPECIALES PARA IMPULSAR LA ECONOMÍA Y DERROTAR EL CONTRABANDO DE LA FRONTERA FRONTERA DEL ESTADO TÁCHIRA ', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Pedro María Ureña', 'UREÑA', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(22, 'ID-2710', 'CONFORMACIÓN DEL ENCUENTRO BINACIONAL ECONÓMICO PRODUCTIVO ENTRE COLOMBIA Y VENEZUELA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA INDUSTRIAS', 2014, 'CONFORMACIÓN DEL ENCUENTRO BINACIONAL ECONÓMICO PRODUCTIVO ENTRE COLOMBIA Y VENEZUELA A EFECTUARSE EN LA CIUDAD DE SAN ANTONIO DEL TÁCHIRA EN EL MUNICIPIO BOLÍVAR DEL ESTADO TÁCHIRA, AFECTO DE GENERAR 01 PLAN CONJUNTO DE LA ZONA ECONÓMICA PRODUCTIVA DE LA FAJA FRONTERIZA. ESTA ACTIVIDAD SERÁ COORDINADA POR EL CANCILLER Y VICEPRESIDENTE POLÍTICO DE GOBIERNO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Bolívar', 'SAN ANTONIO', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(23, 'ID-2709', 'CONFORMACIÓN DE LA ZONA FUNCIONAL DE LA FRÍA EN EL MUNICIPIO GARCÍA DE HEVIA DEL ESTADO TÁCHIRA, COMO ZONA ESPECIAL DE DESARROLLO ECONÓMICO. ', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA INDUSTRIAS', 2014, 'CONFORMACIÓN DE LA ZONA FUNCIONAL DE LA FRÍA EN EL MUNICIPIO GARCÍA DE HEVIA DEL ESTADO TÁCHIRA, COMO ZONA ESPECIAL DE DESARROLLO ECONÓMICO. MEDIANTE DECRETO PRESIDENCIAL CON LA ESPECIALIZACIÓN ECONÓMICA Y RÉGIMEN ESPECIAL DEL ÁREA. CONTANDO CON 01 PLAN ESPECIAL DE VIALIDAD Y ACONDICIONAMIENTO DEL AEROPUERTO DE LA FRÍA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'García de Hevia', 'LA FRIA', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(24, 'ID-2749', 'EVALUACIÓN DEL PROYECTO PLAN DE REACTIVACIÓN DE LOS FOSFATOS (UTILIZADO COMO FERTILIZANTE PARA LA PRODUCCIÓN AGRÍCOLA) DEL YACIMIENTO DE MONTE FRESCO', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA AGRICULTURA Y', 2014, 'EVALUACIÓN DEL PROYECTO PLAN DE REACTIVACIÓN DE LOS FOSFATOS (UTILIZADO COMO FERTILIZANTE PARA LA PRODUCCIÓN AGRÍCOLA) DEL YACIMIENTO DE MONTE FRESCO, UBICADO EN LAS ALDEAS LA POPA, HELECHALE, QUEBRADITA, MONTE FRESCO, LOS PALMARES Y EL PERONILO EN EL MUNICIPIO AYACUCHO DEL ESTADO TÁCHIRA. LA INVERSIÓN REQUERIDA ES DE 159 MILLONES DE BOLÍVARES. EL PROYECTO ESTARÁ BAJO LA RESPONSABILIDAD DE CORPOANDES', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Ayacucho', 'MONTE FRESCO', '', '99999999.99', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(25, 'ID-3583', 'ASIGNAR LOS EQUIPOS A LA UNIDAD DE PRODUCCIÓN DE CONTENIDOS DEL SISTEMA TACHIRENSE DE COMUNICACIÓN POPULAR QUE FUNCIONARÁ EN LA SEDE DE RADIO CONCORDIA.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA COMUNICACIÓN ', 2014, 'ASIGNACIÓN DE LOS EQUIPOS A LA UNIDAD DE PRODUCCIÓN DE CONTENIDOS DEL SISTEMA TACHIRENSE DE COMUNICACIÓN POPULAR QUE FUNCIONARÁ EN LA SEDE DE RADIO CONCORDIA.', 2, 'Sin Iniciar', '', 9, 'Enero', 2015, '', '', '', '', 0, 0, 'San Cristóbal', 'LA CONCORDIA', '', '1158171.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(26, 'ID-2750', 'EVALUAR EL PROYECTO PARA LA INSTALACIÓN DE 01 UNIDAD DE PRODUCCIÓN AUDIOVISUAL Y 01 CABINA DE RADIO MINISTERIO DEL PODER POPULAR PARA LA CULTURA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA CULTURA', 2014, 'EVALUACIÓN DEL PROYECTO PARA LA INSTALACIÓN DE 01 UNIDAD DE PRODUCCIÓN AUDIOVISUAL Y 01 CABINA DE RADIO MINISTERIO DEL PODER POPULAR PARA LA CULTURA', 1, 'Sin Iniciar', '', 15, 'Agosto', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(27, 'ID-2751', 'EVALUAR LA PETICIÓN DEL GABINETE REGIONAL QUIENES SOLICITAN QUE LA LIBRERÍA DEL SUR ', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA CULTURA', 2014, 'EVALUACIÓN LA PETICIÓN DEL GABINETE REGIONAL QUIENES SOLICITAN QUE LA LIBRERÍA DEL SUR UBICADA EN LA CALLE 10 DE BARRIO OBRERO PASE A FUNCIONAR EN LA CASA STEINVORTH', 1, 'Sin Iniciar', '', 29, 'Abril', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'BARRIO OBRERO', 'CALLE 10 DE BARRIO OBRERO', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(28, 'ID-3504', 'CONSTRUCCIÓN DE UN (01) DORMITORIO PARA EL PERSONAL DE TROPA DEL PRIMER PELOTÓN DEL DESTACAMENTO FRONTERIZO N° 13.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA DEFENSA', 2014, 'CONSTRUCCIÓN DE UN (01) DORMITORIO PARA EL PERSONAL DE TROPA DEL PRIMER PELOTÓN DEL DESTACAMENTO FRONTERIZO N° 13.', 1, 'En Ejecución', '', 23, 'Julio', 2014, '', '', '', '', 0, 0, 'Ayacucho', 'AYACUCHO', '', '711475.00', '', '', '', '', '', '', '', '', 90, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(29, 'ID-3505', 'CONSTRUCCIÓN DE UN DORMITORIO PARA EL PERSONAL DE TROPA PROFESIONAL FEMENINO DEL DESTACAMENTO FRONTERIZO N° 13.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA DEFENSA', 2014, 'CONSTRUCCIÓN DE UN DORMITORIO PARA EL PERSONAL DE TROPA PROFESIONAL FEMENINO DEL DESTACAMENTO FRONTERIZO N° 13', 1, 'En Ejecución', '', 23, 'Julio', 2014, '', '', '', '', 0, 0, 'Ayacucho', 'AYACUCHO', '', '711475.00', '', '', '', '', '', '', '', '', 90, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(30, 'ID-3503', 'SUSTITUCIÓN DE TECHO DEL DEPARTAMENTO DE PROCESADOS MILITARES OCCIDENTE', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA DEFENSA', 2014, 'SUSTITUCIÓN DE TECHO DEL DEPARTAMENTO DE PROCESADOS MILITARES OCCIDENTE', 1, 'Culminado', '', 8, 'Julio', 2014, '', '', '', '', 0, 0, 'Córdoba', 'CORDOBA', '', '0.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(31, 'ID-3535', 'DOTACIÓN CON IMPLEMENTOS DE COCINA, AL LICEO BOLIVARIANO FRANCISCO ALVARADO DEL ESTADO TÁCHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA EDUCACION', 2014, 'DOTACIÓN CON IMPLEMENTOS DE COCINA, AL LICEO BOLIVARIANO FRANCISCO ALVARADO DEL ESTADO TÁCHIRA', 1, 'Culminado', '', 6, 'Noviembre', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '530468.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(32, 'ID-2768', 'LA FUNDACIÓN BOLIVARIANA DE INFORMÁTICA Y TELEMÁTICA ADSCRITA AL MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÓN REALIZARÁ UNA (01) REVISIÓN DE INTERCONEXIÓN A LA UNIDAD EDUCATIVA NACIONAL GONZALO MÉNDEZ CON LA FINALIDAD DE RESOLVER LA PROBLEMÁTICA QUE PRESENTA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA EDUCACION', 2014, 'LA FUNDACIÓN BOLIVARIANA DE INFORMÁTICA Y TELEMÁTICA ADSCRITA AL MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÓN REALIZARÁ UNA (01) REVISIÓN DE INTERCONEXIÓN A LA UNIDAD EDUCATIVA NACIONAL GONZALO MÉNDEZ CON LA FINALIDAD DE RESOLVER LA PROBLEMÁTICA QUE PRESENTA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '2187.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(33, 'ID-3564', 'DOTACIÓN CON EQUIPOS DEPORTIVOS Y MUSICALES, AL LICEO BOLIVARIANO FRANCISCO ALVARADO DEL ESTADO TÁCHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA EDUCACION', 2014, 'DOTACIÓN CON EQUIPOS DEPORTIVOS Y MUSICALES, AL LICEO BOLIVARIANO FRANCISCO ALVARADO DEL ESTADO TÁCHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '3683.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(34, 'ID-2770', 'LA FUNDACIÓN DE EDIFICACIONES Y DOTACIONES EDUCATIVAS (F.E.D.E.) REALIZARÁ UNA (01) INSPECCIÓN EN LA UNIDAD EDUCATIVA NACIONAL GONZALO MÉNDEZ, A FIN DE INCORPORAR LO RELATIVO A LAS AGUAS SERVIDAS Y LAS RAMPLAS DEL PLANTEL', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA EDUCACION', 2014, 'REHABILITACION Y ADECUACION DE LA UNIDAD EDUCATIVA NACIONAL GONZALO MENDEZ', 3, 'En Ejecución', '', 20, 'Marzo', 2015, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '9250325.00', '', '', '', '', '', '', '', '', 10, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(35, 'ID-3698', 'SE REALIZARÁ 01 EVALUACIÓN EN EL L.B FRANCISCO ALVARADO PARA PROCEDER A LA DOTACIÓN DE ÁREAS PARA LABORATORIO Y UN CENTRO BOLIVARIANO DE INFORMÁTICA Y TELEMÁTICA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA EDUCACION', 2014, 'SE REALIZARÁ 01 EVALUACIÓN EN EL L.B FRANCISCO ALVARADO PARA PROCEDER A LA DOTACIÓN DE ÁREAS PARA LABORATORIO Y UN CENTRO BOLIVARIANO DE INFORMÁTICA Y TELEMÁTICA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '505893.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(36, 'ID-2705', 'CON LA UNEFA SE PLANTEA LA CONSTRUCCIÓN DE UNA PLATAFORMA CIENTÍFICA -TECNOLÓGICA APALANCANDO DIFERENTES LÍNEAS DE INVESTIGACIÓN. TRANSFERENCIA DE LAS HERRAMIENTAS A LA UNEFA, A LA UBV Y LAS INSTITUCIONES DEL ESTADO.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÓN UNI', 2014, 'CON LA UNEFA SE PLANTEA LA CONSTRUCCIÓN DE UNA PLATAFORMA CIENTÍFICA -TECNOLÓGICA APALANCANDO DIFERENTES LÍNEAS DE INVESTIGACIÓN. TRANSFERENCIA DE LAS HERRAMIENTAS A LA UNEFA, A LA UBV Y LAS INSTITUCIONES DEL ESTADO.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(37, 'ID-2773', 'PCP CONSERVACIÓN Y MEJORAMIENTO DEL CIRCUITO SAN CRISTÓBAL 11 MUNICIPIO SAN CRISTOBAL.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'PCP CONSERVACIÓN Y MEJORAMIENTO DEL CIRCUITO SAN CRISTÓBAL 11 MUNICIPIO SAN CRISTOBAL', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(38, 'ID-2704', 'CAMBIO DE CONDUCTOR CIRCUITO 13,8KV ENLACE SAN CRISTÓBAL 11 CON RÓMULO GALLEGOS, TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'CAMBIO DE CONDUCTOR CIRCUITO 13,8KV ENLACE SAN CRISTÓBAL 11 CON RÓMULO GALLEGOS, TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '225000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(39, 'ID-2716', 'CONSTRUCCIÓN DE ENLACE CIRCUITOS CONCORDIA II Y CENTRO; TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'CONSTRUCCIÓN DE ENLACE CIRCUITOS CONCORDIA II Y CENTRO; TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'LA CONCORDIA', '', '150000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(40, 'ID-2776', 'PCP CONSERVACIÓN Y MEJORAMIENTO DEL CIRCUITO. SANTA RITA MUNICIPIO INDEPENDENCIA.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'PCP CONSERVACIÓN Y MEJORAMIENTO DEL CIRCUITO. SANTA RITA MUNICIPIO INDEPENDENCIA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Capacho Nuevo', 'SANTA RITA', '', '1500000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(41, 'ID-2775', 'PCP CONSERVACIÓN Y MEJORAMIENTO DEL CIRCUITO SANTA RITA MUNICIPIO LIBERTADOR', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'PCP CONSERVACIÓN Y MEJORAMIENTO DEL CIRCUITO SANTA RITA MUNICIPIO LIBERTADOR', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Libertador', 'LIBERTADOR', '', '260000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(42, 'ID-2798', 'REUBICACIÓN DE TORRE PERTENECIENTE AL CIRCUITO RUBIO 34,5KV, TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'REUBICACIÓN DE TORRE PERTENECIENTE AL CIRCUITO RUBIO 34,5KV, TACHIRA', 1, 'Sin Iniciar', '', 25, 'Septiembre', 2014, '', '', '', '', 0, 0, 'Junín', 'RUBIO', '', '520000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(43, 'ID-2795', 'REMODELACIÓN DEL CIRCUITO INOS II 34,5KV MUNICIPIO CÓRDOBA, TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'REMODELACIÓN DEL CIRCUITO INOS II 34,5KV MUNICIPIO CÓRDOBA, TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Córdoba', 'CORDOBA', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(44, 'ID-2774', 'PCP CONSERVACIÓN Y MEJORAMIENTO DEL CIRCUITO SANTA ANA MUNICIPIO CÓRDOBA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'PCP CONSERVACIÓN Y MEJORAMIENTO DEL CIRCUITO SANTA ANA MUNICIPIO CÓRDOBA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Córdoba', 'SANTA ANA', '', '900000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(45, 'ID-2723', 'CONSTRUCCIÓN DE SEGURIDAD BAHÍA S/E CAPACHO 34,5/13,8KV, TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'CONSTRUCCIÓN DE SEGURIDAD BAHÍA S/E CAPACHO 34,5/13,8KV, TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Capacho Nuevo', 'CAPACHO NUEVO', '', '4050000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(46, 'ID-2712', 'CONSTRUCCIÓN DE 02 CIRCUITOS 13,8 KV (CONCORDIA V Y IV), SAN CRISTÓBAL, TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'CONSTRUCCIÓN DE 02 CIRCUITOS 13,8 KV (CONCORDIA V Y IV), SAN CRISTÓBAL, TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '1600000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(47, 'ID-2718', 'CONSTRUCCIÓN ENLACES ENTRE CIRCUITOS EL VALLE Y CAMPO C, TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'CONSTRUCCIÓN ENLACE ENTRE CIRCUITOS MADRE JUANA Y CENTRO, TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAMPO C', '', '702000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(48, 'ID-2724', 'CONSTRUCCIÓN DE SEGURIDAD BAHÍA EN LA SUBESTACIÓN SANTA ANA 34,5/13,8KV MUNICIPIO CÓRDOBA, TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'CONSTRUCCIÓN DE SEGURIDAD BAHÍA EN LA SUBESTACIÓN SANTA ANA 34,5/13,8KV MUNICIPIO CÓRDOBA, TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Córdoba', 'SANTA ANA', '', '6075000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(49, 'ID-2717', 'CONSTRUCCIÓN ENLACE ENTRE CIRCUITOS MADRE JUANA Y CENTRO, TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCT', 2014, 'CONSTRUCCIÓN ENLACE ENTRE CIRCUITOS MADRE JUANA Y CENTRO, TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'MADRE JUANA', '', '525000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(50, 'ID-2702', 'ARTICULACIÓN CON LA FUNDACIÓN DE EDIFICACIONES Y DOTACIONES EDUCATIVAS (FEDE) PARA LA REPARACIÓN DE LAS CANCHAS DE LOS LICEOS NACIONAL MONSEÑOR BERNABÉ Y EL LICEO NACIONAL TÁCHIRA, EN EL MUNICIPIO CÓRDOBA Y SAN CRISTOBAL DEL ESTADO TÁCHIRA.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA JUVENTUD', 2014, 'ARTICULACIÓN CON LA FUNDACIÓN DE EDIFICACIONES Y DOTACIONES EDUCATIVAS (FEDE) PARA LA REPARACIÓN DE LAS CANCHAS DE LOS LICEOS NACIONAL MONSEÑOR BERNABÉ Y EL LICEO NACIONAL TÁCHIRA, EN EL MUNICIPIO CÓRDOBA Y SAN CRISTOBAL DEL ESTADO TÁCHIRA.', 1, 'Sin Iniciar', '', 23, 'Julio', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(51, 'ID-2744', 'EN EL LICEO NACIONAL MONSEÑOR BERNABÉ DEL ESTADO TÁCHIRA SE EVALUARÁ CON LA FUNDACIÓN DE EDIFICACIONES Y DOTACIONES EDUCATIVAS (FEDE) LA POSIBILIDAD DE AMPLIAR EL COMEDOR ESTUDIANTIL; Y SE SOLICITARA A FUNDACIÓN BOLIVARIANA DE INFORMÁTICA Y TELEMÁTICA LA INSTALACIÓN DE LA CONEXIÓN A INTERNET PARA EL LABORATORIO DE INFORMÁTICA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA JUVENTUD', 2014, 'EN EL LICEO NACIONAL MONSEÑOR BERNABÉ DEL ESTADO TÁCHIRA SE EVALUARÁ CON LA FUNDACIÓN DE EDIFICACIONES Y DOTACIONES EDUCATIVAS (FEDE) LA POSIBILIDAD DE AMPLIAR EL COMEDOR ESTUDIANTIL; Y SE SOLICITARA A FUNDACIÓN BOLIVARIANA DE INFORMÁTICA Y TELEMÁTICA LA INSTALACIÓN DE LA CONEXIÓN A INTERNET PARA EL LABORATORIO DE INFORMÁTICA', 1, 'Sin Iniciar', '', 26, 'Noviembre', 2014, '', '', '', '', 0, 0, 'Córdoba', 'CORDOBA', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(52, 'ID-2735', 'DESARROLLO DEL CONCURSO  ARTE JOVEN EN EL LICEO NACIONAL MONSEÑOR BERNABÉ Y EL LICEO NACIONAL TÁCHIRA, DEL ESTADO TÁCHIRA.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA JUVENTUD', 2014, 'DESARROLLO DEL CONCURSO  ARTE JOVEN EN EL LICEO NACIONAL MONSEÑOR BERNABÉ Y EL LICEO NACIONAL TÁCHIRA, DEL ESTADO TÁCHIRA.', 1, 'Culminado', '', 14, 'Abril', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '20000.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(53, 'ID-2701', 'ARTICULACIÓN CON EL MINISTERIO DEL PODER POPULAR DE EDUCACIÓN A FIN DE INCORPORAR EL LICEO NACIONAL MONSEÑOR BERNABÉ COMO PARTE DEL PROGRAMA ?UNA GOTA DE AMOR PARA MI ESCUELA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA JUVENTUD', 2014, 'ARTICULACIÓN CON EL MINISTERIO DEL PODER POPULAR DE EDUCACIÓN A FIN DE INCORPORAR EL LICEO NACIONAL MONSEÑOR BERNABÉ COMO PARTE DEL PROGRAMA ?UNA GOTA DE AMOR PARA MI ESCUELA?, EN EL MUNICIPIO CÓRDOBA DEL ESTADO TÁCHIRA.', 1, 'Sin Iniciar', '', 26, 'Noviembre', 2014, '', '', '', '', 0, 0, 'Córdoba', 'CORDOBA', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(54, 'ID-2805', 'SUSTITUCIÓN DE LOS AIRES ACONDICIONADOS DE LOS QUIRÓFANOS DEL HOSPITAL DE TÁRIBA,EN CONJUNTO CON LA GOBERNACIÓN DE LA ENTIDAD', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA SALUD', 2014, 'SUSTITUCIÓN DE LOS AIRES ACONDICIONADOS DE LOS QUIRÓFANOS DEL HOSPITAL DE TÁRIBA,EN CONJUNTO CON LA GOBERNACIÓN DE LA ENTIDAD', 1, 'Culminado', '', 4, 'Julio', 2014, '', '', '', '', 0, 0, 'Cárdenas', 'TARIBA', '', '235000.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(55, 'ID-2802', 'SOLICITAR A CORPOELEC EL ESTUDIO DE LA SITUACIÓN DEL SUMINISTRO ELÉCTRICO DEL HOSPITAL UNIVERSITARIO JOSÉ MARÍA VARGAS DE SAN CRISTÓBAL.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA SALUD', 2014, 'SOLICITAR A CORPOELEC EL ESTUDIO DE LA SITUACIÓN DEL SUMINISTRO ELÉCTRICO DEL HOSPITAL UNIVERSITARIO JOSÉ MARÍA VARGAS DE SAN CRISTÓBAL.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(56, 'ID-2804', 'ARTICULACION CON LOS ORGANISMOS DE SEGURIDAD DEL ESTADO TACHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS Y LO', 2014, 'ARTICULACION CON LOS ORGANISMOS DE SEGURIDAD DEL ESTADO TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(57, 'ID-2771', 'ARTICULACIÓN CON EL ÓRGANO SUPERIOR DE LA VIVIENDA Y LA GOBERNACIÓN DEL ESTADO', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS Y LO', 2014, 'ARTICULACIÓN CON EL ÓRGANO SUPERIOR DE LA VIVIENDA Y LA GOBERNACIÓN DEL ESTADO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(58, 'ID-2780', 'ACOMPAÑAMIENTO TÉCNICO PARA LA ELABORACIÓN DEL PROYECTO DE VIVIENDA EN PARAMILLOS II', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS Y LO', 2014, 'ACOMPAÑAMIENTO TÉCNICO PARA LA ELABORACIÓN DEL PROYECTO DE VIVIENDA EN PARAMILLOS II', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(59, 'ID-2753', 'ACOMPAÑAMIENTO TÉCNICO PARA EL PLAN URBANÍSTICO EN PARAMILLO II', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS Y LO', 2014, 'ACOMPAÑAMIENTO TÉCNICO PARA EL PLAN URBANÍSTICO EN PARAMILLO II', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(60, 'ID-2764', 'DOTACIÓN GPS TÁCHIRA', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA RELACIONES INTER', 2014, 'DOTAR CON GPS TÁCHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(61, 'ID-2793', 'REHABILITACIÓN INTEGRAL DEL AEROPUERTO JUAN VICENTE GOMEZ.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE ACUÁT', 2014, 'REHABILITACIÓN INTEGRAL DEL AEROPUERTO JUAN VICENTE GOMEZ.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Bolívar', 'BOLIVAR', '', '9693970.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(62, 'ID-2794', 'REHABILITACIÓN INTEGRAL DEL AEROPUERTO INTERNACIONAL FRANCISCO GARCIA DE HEVIA.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE ACUÁT', 2014, 'REHABILITACIÓN INTEGRAL DEL AEROPUERTO INTERNACIONAL FRANCISCO GARCIA DE HEVIA.', 1, 'Culminado', '', 4, 'Julio', 2014, '', '', '', '', 0, 0, 'García de Hevia', 'LA FRIA', '', '24709239.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(63, 'ID-2779', 'OBRAS DE EMERGENCIA MEDIANTE CONSTRUCCIÓN DE OBRAS DE DEFENSA Y RECONSTRUCCIÓN DEL ÁREA DE PROTECCIÓN, LADO DERECHO DE LA PLATAFORMA VIAL DE LA AUTOPISTA ANTONIO JOSÉ DE SUCRE, MUNICIPIO SAN CRISTÓBAL Y CÁRDENAS.', 'LILIANA', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'OBRAS DE EMERGENCIA MEDIANTE CONSTRUCCIÓN DE OBRAS DE DEFENSA Y RECONSTRUCCIÓN DEL ÁREA DE PROTECCIÓN, LADO DERECHO DE LA PLATAFORMA VIAL DE LA AUTOPISTA ANTONIO JOSÉ DE SUCRE, MUNICIPIO SAN CRISTÓBAL Y CÁRDENAS.', 1, 'Culminado', '', 4, 'Agosto', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN CRISTÓBAL', '', '30191304.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(64, 'ID-2790', 'REHABILITACIÓN DE LA TO01, SAN CRISTÓBAL ? LA FRÍA, 65 KM, EN EL ESTADO TÁCHIRA.', 'NO SE ENCONTRO INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'REHABILITACIÓN DE LA TO01, SAN CRISTÓBAL ? LA FRÍA, 65 KM, EN EL ESTADO TÁCHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'García de Hevia', 'LA FRIA', '', '30191304.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(65, 'ID-2719', 'CONSTRUCCIÓN DE LA AVENIDA HUGO RAFAEL CHÁVEZ FRÍAS PARALELA VÍA UREÑA A SAN ANTONIO DEL TÁCHIRA (VÍA ALTERNA)', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'SE ESTA CONSTRUYENDO LA AVENIDA HUGO RAFAEL CHÁVEZ FRÍAS PARALELA VÍA UREÑA A SAN ANTONIO DEL TÁCHIRA (VÍA ALTERNA)', 1, 'Sin Iniciar', '', 11, 'Julio', 2013, '', '', '', '', 0, 0, 'Pedro María Ureña', 'UREÑA', '', '4137073.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(66, 'ID-2720', 'CONSTRUCCIÓN DE LA AVENIDA INDUSTRIAL PARA EL MUNICIPIO PEDRO MARÍA UREÑA', 'NO SE ENCONTRO INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'CONSTRUCCIÓN DE LA AVENIDA INDUSTRIAL PARA EL MUNICIPIO PEDRO MARÍA UREÑA', 1, 'Sin Iniciar', '', 5, 'Mayo', 2014, '', '', '', '', 0, 0, 'Pedro María Ureña', 'UREÑA', '', '10307499.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(67, 'ID-2791', 'REHABILITACIÓN DE LA TO07, VÍA SAN PEDRO DEL RÍO ? EL VALLADO ? UREÑA, EN EL ESTADO TÁCHIRA.', 'NO SE ENCONTRO INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'REHABILITACIÓN DE LA TO07, VÍA SAN PEDRO DEL RÍO ? EL VALLADO ? UREÑA, EN EL ESTADO TÁCHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Pedro María Ureña', 'UREÑA', '', '77912878.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(68, 'ID-2788', 'REHABILITACIÓN DE LA RO19, TRAMO PERACAL ? LAS DANTAS ?RUBIO, PROG. 0+000 HASTA LA PROG. 21+770, EN LOS MUNICIPIOS BOLÍVAR Y JUNÍN, DEL ESTADO TÁCHIRA.', 'NO SE ENCONTRO INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'REHABILITACIÓN DE LA RO19, TRAMO PERACAL ? LAS DANTAS ?RUBIO, PROG. 0+000 HASTA LA PROG. 21+770, EN LOS MUNICIPIOS BOLÍVAR Y JUNÍN, DEL ESTADO TÁCHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Bolívar', 'CAPITAL', '', '35000000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(70, 'ID-2728', 'CONSTRUCCIÓN Y AMPLIACIÓN DE LAS CARRERAS 3 Y 4 DEL CENTRO DE UREÑA', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'CONSTRUCCIÓN Y AMPLIACIÓN DE LAS CARRERAS 3 Y 4 DEL CENTRO DE UREÑA', 1, 'Sin Iniciar', '', 24, 'Noviembre', 2014, '', '', '', '', 0, 0, 'Pedro María Ureña', 'CAPITAL', '', '7879557.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(71, 'ID-2792', 'REHABILITACIÓN DE LA VÍA MIRADOR ? PERACAL, TO01 (PROG. 897+970 HASTA LA PROG. 919+890) Y TO05 (PROG. 633+280 HASTA LA PROG. 672+880) EN LOS MUNICIPIOS SAN CRISTÓBAL, INDEPENDENCIA, LIBERTAD Y BOLÍVAR, , EN EL ESTADO TÁCHIRA.', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'REHABILITACIÓN DE LA VÍA MIRADOR ? PERACAL, TO01 (PROG. 897+970 HASTA LA PROG. 919+890) Y TO05 (PROG. 633+280 HASTA LA PROG. 672+880) EN LOS MUNICIPIOS SAN CRISTÓBAL, INDEPENDENCIA, LIBERTAD Y BOLÍVAR, , EN EL ESTADO TÁCHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Bolívar', 'CAPITAL', '', '38000000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(72, 'ID-2752', 'FIESTA DEL ASFALTO', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'IMPLEMENTACION DE LA FIESTA DEL ASFALTO', 1, 'Sin Iniciar', '', 3, 'Octubre', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '50000000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(73, 'ID-2789', 'REHABILITACIÓN DE LA TO01, LA FRÍA  LA PALMITA, PROG. 39+600 HASTA 21+920, EN EL MUNICIPIO SAMUEL DARÍO MALDONADO, DEL ESTADO TÁCHIRA.', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRE', 2014, 'REHABILITACIÓN DE LA TO01, LA FRÍA  LA PALMITA, PROG. 39+600 HASTA 21+920, EN EL MUNICIPIO SAMUEL DARÍO MALDONADO, DEL ESTADO TÁCHIRA.', 1, 'Culminado', '', 24, 'Noviembre', 2014, '', '', '', '', 0, 0, 'Samuel Darío Maldonado', 'CAPITAL', '', '29217391.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(74, 'ID-3661', 'SE REALIZARAN LOS ESTUDIOS CORRESPONDIENTES EN EL TERRENO DE PARAMILLO', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA VIVIENDA Y HABIT', 2014, 'SE REALIZARAN LOS ESTUDIOS CORRESPONDIENTES EN EL TERRENO DE PARAMILLO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(75, 'ID-3662', 'PRESENTACIÓN DE PROYECTO INTEGRAL DE VIVIENDAS Y EQUIPAMIENTO URBANO PARA EL TERRENO A VIVIR PARAMILLO', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA VIVIENDA Y HABIT', 2014, 'PRESENTACIÓN DE PROYECTO INTEGRAL DE VIVIENDAS Y EQUIPAMIENTO URBANO PARA EL TERRENO A VIVIR PARAMILLO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(76, 'ID-3664', 'CONSTITUCIÓN DE UNA COMISIÓN DE PLANIFICAIÓN PARTICIPATIVA DE VIVIENDA Y HÁBITAT PARA ELABORAR EL PLAN URBANÍSTICO', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA VIVIENDA Y HABIT', 2014, 'CONSTITUCIÓN DE UNA COMISIÓN DE PLANIFICAIÓN PARTICIPATIVA DE VIVIENDA Y HÁBITAT PARA ELABORAR EL PLAN URBANÍSTICO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(77, 'ID-3659', 'CONSTRUCCION DE 11.306 VIVIENDAS PARA EL 2013 EN EL MARCO DE LA GRAN MISIÓN VIVIENDA', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA VIVIENDA Y HABIT', 2014, 'EJECUCIÓN DE 11.306 VIVIENDAS PARA EL 2013 EN EL MARCO DE LA GRAN MISIÓN VIVIENDA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '99999999.99', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(78, 'ID-3663', 'ESTABLECER EN EL TERRENO DECLARADO A VIVIR UNA UNIDAD MILITAR DE RESGUARDO Y CUSTODIA DEL MISMO POR PARTE DE LA FUERZA ARMADA NACIONAL BOLIVARIANA', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA VIVIENDA Y HABIT', 2014, 'ESTABLECER EN EL TERRENO DECLARADO A VIVIR UNA UNIDAD MILITAR DE RESGUARDO Y CUSTODIA DEL MISMO POR PARTE DE LA FUERZA ARMADA NACIONAL BOLIVARIANA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(79, 'ID-3660', 'IMPLEMENTACIÓN DE LA GRAN MISIÓN BARRIO NUEVO, BARRIO TRICOLOR, EN EL BARRIO LAS MARGARITAS, EN LA PARROQUIA LA CONCORDIA, MUNICIPIO SAN CRISTOBAL, EN EL ESTADO TACHIRA', 'NILDA ROJAS', 426, 5114115, 'JEFE DE PRODUCCIÓN DEL MINISTERIO', 'MINISTERIO DEL PODER POPULAR PARA VIVIENDA Y HABIT', 2014, 'SUSTITUCION DE TECHOS Y COLOCACION DE PINTURA EN VIVIENDAS; REHABILITACION DE ESCUELA; COMPRA DE EQUIPOS MEDICOS Y REHABILITACION DEL (C.D.I) REPARAACION DEL SIMONSITO COMUNITARIO Y CASA COMUNAL', 2, 'En Ejecución', '', 6, 'Febrero', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 30, 0, 'Vacio', 0, '', 1, 'Septiembre', 2015, ''),
(80, 'ID-3393', 'CONSTRUCCION DEL SUPER PDVAL SAN CRISTOBAL', 'GADIEL AREVALO', 414, 9777651, 'PERSONAL DE SEGURIDAD', 'MINISTERIO DEL PODER POPULAR PARA LA ALIMENTACION', 2014, 'CONSISTE EN LA CONSTRUCCION DE LAS INSTALACIONES DE UN MIL QUINIENTOS METROS CUADRADOS, CON AREAS PARA PANADERIA, CAFETERIA, CHARCUTERIA,PESCADERIA,VENTA DE VIVERES Y HORTALIZAS', 1, 'En Ejecución', '', 5, 'Diciembre', 2014, 'INSTALACIÓN DE ASCENSOR DE CARGA, CONSTRUCCIÓN DE DEPOSITOS, CONSTRUCCION DE COMEDOR PARA TRABAJADORES, ADECUACION DE ESTACIONAMIENTO, CONSTRUCCION DE ÁREA DE CARGA Y DESCARGA, CONSTRUCCIÓN DE TRES CUARTOS FRIOS.', 'ORGANIZACIÓN ESPACIOS EN ÁREA DE VENTAS, INSTALACIÓN DE LUMINARIAS, ACABADOS INTERNOS Y EXTERNOS', '', '', 0, 0, 'San Cristóbal', 'SAN SEBASTEAN', 'BARRIO GUZMAN', '22612400.00', '', '', 'PROFESIONALES INVERSIONISTAS (PROFEL)C.A', 'J-30180485-6', '', '', 'ARQ. KARINA VARGAS', '', 95, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(81, 'ID-2803', 'REHABILITACION DE LOS ASCENSORES DEL HOSPITAL UNIVERSITARIO. DR JOSE MARIA VARGAS POR PARTE DE LA EMPRESA SERVAS ARGENTINA', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA SALUD', 2014, 'REHABILITACIION DE LOS ASCENSORES DEL HOSPITAL DR JOSE MARIA VARGAS', 1, 'Paralizado', 'EMPRESA EJECUTORA SE ENUENTRA INHABILITADA PARA CONTRATAR', 28, 'Febrero', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'LA CONCORDIA', 'AV. LUCIO OQUENDO', '17068.00', '', '', '', '', '', '', '', '', 15, 1, 'Julio', 2014, '', 0, 'Vacio', 0, ''),
(82, 'ID-2756', 'FINANCIAMIENTO DE PROYECTO DE BAJO COSTO Y ALTO IMPACTO PARA LA REHABILITACION INTEGRAL DE LA UNIDAD EDUCATIVA ESTADAL PREBISTERO VICTOR M VALECILLOS ESTADO TACHIRA', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS Y LO', 2014, 'FINANCIAMIENTO DE PROYECTO DE BAJO COSTO Y ALTO IMPACTO PARA LA REHABILITACION INTEGRAL DE LA UNIDAD EDUCATIVA ESTADAL PREBISTERO VICTOR M VALECILLOS', 1, 'En Ejecución', '', 6, 'Noviembre', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '8445691.00', '', '', '', '', '', '', '', '', 10, 0, 'Vacio', 0, '', 30, 'Mayo', 2015, ''),
(83, 'ID-2777', 'PLANTACION DE UN MILLON (1.000.000) DE ARBOLES CORRESPONDIENTE A 900 HECTAREAS APROXIMADAMENTE EN EL MARCO DE LA MISION ARBOL. REFORESTACION PRIORITARIA DE LAS CUENCAS QUE PRODUCEN LA MAYOR CANTIDAD DE AGUA PARA EL ESTADO TACHIRA.', 'SIN INFORMACION', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'PLANTACION DE UN MILLON (1.000.000) DE ARBOLES CORRESPONDIENTE A 900 HECTAREAS APROXIMADAMENTE EN EL MARCO DE LA MISION ARBOL. REFORESTACION PRIORITARIA DE LAS CUENCAS QUE PRODUCEN LA MAYOR CANTIDAD DE AGUA PARA EL ESTADO TACHIRA.', 1, 'Seleccione...', '', 7, 'Noviembre', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 60, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(103, 'ID-2759', 'TRANSFERENCIA DE COMPETENCIA EN EL ÁMBITO DE VERTEDEROS DE DESECHOS SOLIDOS A LA GOBERNACION DEL ESTADO TACHIRA.', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL ECOSOCIALISMO', 2014, 'INCORPORAR EN LA AGENDA DE ACCIONES ENMARCADAS EN EL PLAN NACIONAL SOBRE EL MANEJO DE DESACHOS SÓLIDOS A LA GOBERNACIÓN DEL ESTADO TÁCHIRA EN EL MARCO DE TRANSFERENCIA DE COMPETENCIA EN EL ÁMBITO DE VERTEDEROS.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Torbes', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(85, 'ID-2782', 'ELABORACIÓN DE PROPUESTA DE DECRETO PRESIDENCIAL PARA LAS ACTIVIDADES DE EXPLORACIÓN Y EXPLOTACIÓN DEL MINERAL ROCA FOSFÁTICA EN EL SECTOR LOS MONOS - EL TOMATE POR PARTE DE PEQUIVEN', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR DE PETRÓLEO Y MINERÍA', 2014, 'ELABORACIÓN DE PROPUESTA DE DECRETO PRESIDENCIAL PARA LAS ACTIVIDADES DE EXPLORACIÓN Y EXPLOTACIÓN DEL MINERAL ROCA FOSFÁTICA EN EL SECTOR LOS MONOS - EL TOMATE POR PARTE DE PEQUIVEN', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Libertador', 'ABEJALES', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(86, 'ID-2699-01', 'APERTURA DE 06 CENTROS DE COMUNICACIÓN COMUNAL EN EL ESTADO TÁCHIRA', 'MARINA ISABEL ROBLES', 426, 8775987, 'VOCERO DEL CONSEJO COMUNAL', 'MINISTERIO DEL PODER POPULAR PARA EDUCACION UNIVER', 2014, 'CONSTRUCCIÓN DE CENTRO DE COMUNICACIÓN COMUNA', 1, 'Culminado', '', 30, 'Julio', 2014, '', '', '', '', 0, 0, 'Seboruco', 'CAPITAL', '', '326371.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(87, 'ID-2699-03', 'APERTURA DE 06 CENTROS DE COMUNICACIÓN COMUNAL EN EL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EDUCACION UNIVER', 2014, 'CONSTRUCCIÓN CENTRO DE COMUNICACIÓN COMUNAL ', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Fernández Feo', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(88, 'ID-2699-02', 'APERTURA DE 06 CENTROS DE COMUNICACIÓN COMUNAL EN EL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EDUCACION UNIVER', 2014, 'CONSTRUCCIÓN DE CENTRO DE COMUNICACIÓN COMUNAL ', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Córdoba', 'Capital', '', '326371.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(89, 'ID-2699-04', 'APERTURA DE 06 CENTROS DE COMUNICACIÓN COMUNAL EN EL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EDUCACION UNIVER', 2014, 'CONSTRUCCIÓN DE CENTRO DE COMUNICACIÓN COMUNAL ', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Junín', 'CAPITAL', '', '326371.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(90, 'ID-2699-05', 'APERTURA DE 06 CENTROS DE COMUNICACIÓN COMUNAL EN EL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'CONSTRUCCIÓN DE CENTRO DE COMUNICACIÓN COMUNAL ', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Bolívar', 'CAPITAL', '', '326371.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(91, 'ID-2699-06', 'APERTURA DE 06 CENTROS DE COMUNICACIÓN COMUNAL EN EL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EDUCACION UNIVER', 2014, 'CONSTRUCCIÓN DE CENTRO DE COMUNICACIÓN COMUNAL', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Michelena', 'CAPITAL', '', '326371.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(92, 'ID-2746', 'ENTREGA DE COMPUTADORAS PORTÁTILES CANAIMAS A ESTUDIANTES DE BACHILLERATO EN EL ESTADO TÁCHIRA', '', 0, 0, '', 'ENTREGA DE COMPUTADORAS PORTÁTILES CANAIMAS A ESTU', 2014, 'ENTREGA DE COMPUTADORAS PORTÁTILES CANAIMAS A ESTUDIANTES DE BACHILLERATO EN EL ESTADO TÁCHIRA', 0, 'Culminado', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '31759320.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(93, 'ID-2772', 'MODERNIZACIÓN DE 03 NODOS DE NUEVA GENERACIÓN (NGN) QUE ACTUALMENTE SÓLO PRESTAN SERVICIO DE VOZ Y PERMITIRÁN LLEVAR SERVICIO DE INTERNET A 2.100 HOGARES DEL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'MODERNIZACIÓN DE 03 NODOS DE NUEVA GENERACIÓN (NGN) QUE ACTUALMENTE SÓLO PRESTAN SERVICIO DE VOZ Y PERMITIRÁN LLEVAR SERVICIO DE INTERNET A 2.100 HOGARES DEL ESTADO TÁCHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Torbes', 'PALMAR DE LA COPE', '', '2526373.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(94, 'ID-2714-01', 'CONSTRUCCIÓN DE NUEVAS RADIO BASES UMTS UBICADAS EN EL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '3308800.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(95, 'ID-2714-02', 'CONSTRUCCIÓN DE  NUEVA RADIO BASES UMTS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'CONSTRUCCIÓN DE  NUEVA RADIO BASES UMTS EN JUNIN', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Junín', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, '');
INSERT INTO `proyecto_cgec` (`nro`, `codigo`, `nombre`, `entrevistado`, `telef`, `telefono`, `cargo`, `ente`, `anio`, `descripcion`, `inspeccion`, `estatus`, `razon`, `diains`, `mesins`, `anioins`, `t_ejecutado`, `t_ejecutar`, `t_ejecucion`, `inspector`, `telefi`, `telefonoi`, `municipio`, `parroquia`, `sector`, `inversion`, `coordnorte`, `coordeste`, `empresa`, `rif`, `ingenieror`, `civr`, `ingenieroi`, `civi`, `avance`, `diai`, `mesi`, `anioi`, `valla`, `diac`, `mesc`, `anioc`, `beneficiados`) VALUES
(96, 'ID-2714-03', 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS EN TORBES', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Torbes', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(97, 'ID-2714-04', 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS EN CÀRDENAS', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Cárdenas', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(98, 'ID-2714-05', 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS EN LA FRIA ', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'García de Hevia', 'CAPITAL', '', '3308800.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(99, 'ID-2714-06', 'CONSTRUCCIÓN DE  NUEVA RADIO BASES UMTS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'CONSTRUCCIÓN DE  NUEVA RADIO BASES UMTS EN SAMUEL DARIO MALDONADO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Samuel Darío Maldonado', 'CAPITAL', '', '3308800.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(100, 'ID-2714-07', 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS EN EL MUNICIPIO LIBERTADOR', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Libertador', 'CAPITAL', '', '3308800.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(101, 'ID-2714-08', 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA CIENCIA, TECNOLO', 2014, 'CONSTRUCCIÓN DE NUEVA RADIO BASES UMTS EBN ANDRES BELLO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Andrés Bello', 'CAPITAL', 'EMETERIO OCHOA', '3308800.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(102, 'ID-2698', 'ACUEDUCTO EL MESÓN, MUNICIPIO BOLÍVAR, ESTADO TACHIRA.', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'CAPTACIÓN Y DESARENADOR Y BOMBEO, POBLACIÓN DE SAN ANTONIO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Bolívar', 'Santa Ana', '', '27023477.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(104, 'ID-2721', 'CONSTRUCCIÓN DE PLANTA DE POTABILIZACIÓN UMUQUENA, MUNICIPIO SAN JUDAS TADEO, POBLACIÓN BENEFICIADA 10.000 HABITANTES', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'CONSTRUCCIÓN DE PLANTA DE POTABILIZACIÓN UMUQUENA, MUNICIPIO SAN JUDAS TADEO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Judas Tadeo', 'UMUQUENA', '', '20000000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, '10000'),
(105, 'ID-2738-01', 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTESDSD', 2014, 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS ESTADO TACHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Capacho Nuevo', 'CAPITAL', '', '6294456.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(106, 'ID-2738-02', 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS ESTADO TACHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '6294456.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(107, 'ID-2738-03', 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS ESTADO TACHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Ayacucho', 'CAPITAL', '', '6294456.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(108, 'ID-2738-04', 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS ESTADO TACHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'García de Hevia', 'CAPITAL', '', '6294456.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(109, 'ID-2738-05', 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'DOTACIÓN DE COMPACTADORAS DE DESECHOS SÓLIDOS ESTADO TACHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Cárdenas', 'CAPITAL', '', '6294456.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(110, 'ID-2781', 'PROTECCIÓN DE LAS MÁRGENES EN LAS ADYACENCIAS DEL RÍO ESCALANTE', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL AMBIENTE', 2014, 'PROTECCIÓN DE LAS MÁRGENES EN LAS ADYACENCIAS DEL RÍO ESCALANTE', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Simón Rodríguez', 'CAPITAL', '', '1500000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(111, 'ID-2748', 'ESTUDIO DEL SECTOR EXPORTADOR DEL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL COMERCIO', 0, 'ESTUDIO DEL SECTOR EXPORTADOR EN TODO EL ESTADO TÁCHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(112, 'ID-2760', 'IMPLEMENTACION DE PLAN DEL PODER POPULAR PARA EL CONTROL SOCIAL A FIN DE GARANTIZAR EL ACCESO A LOS BIENES Y SERVICIOS ESTADO TACHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL COMERCIO', 2014, 'INICIO PLAN PARA EL CONTROL SOCIAL, A FIN DE GARANTIZAR EL ACCESO A LOS BIENES Y SERVICIOS EN EL ESTADO TÁCHIRA.', 1, 'Culminado', '', 8, 'Agosto', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'La Concordia', 'CENTRO', '0.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(113, 'ID-2722', 'CONSTRUCCIÓN DE PUENTE COLGANTE SOBRE LA QUEBRADA POTOSÍ, VÍA MACANILLO - LA FLORIDA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA TRANSPORTE TERRESTRE', 2014, 'CONSTRUCCIÓN DE PUENTE COLGANTE SOBRE LA QUEBRADA POTOSÍ, VÍA MACANILLO - LA FLORIDA', 1, 'En Ejecución', '', 15, 'Noviembre', 2014, '', '', '', '', 0, 0, 'Cárdenas', 'LA FLORIDA', '', '18500000.00', '', '', '', '', '', '', '', '', 15, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(114, 'ID-2703', 'ASIGNACIÓN DE LICENCIAS DE IMPORTACIÓN DE UNIDADES DE TRANSPORTE PÚBLICO INTERURBANO EN EL ESTADO TÁCHIRA.', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL COMERCIO', 2014, 'CONSTITUYE JORNADAS TECNICAS E INFORMATIVAS, PARA LA ORIENTACION DE EMPRESAS CON DOMICILIO LEGAL, CON LOS FINES DE AGILIZAR LOS MECANISMOS PARA LA IMPORTACION DE UNIDADES DE TRASNPORTE PUBLICO, QUE MEJOREN Y MODERNICEN EL SERVICIO INTER URBANO, FECHA DE REALIZACION 07/06/2013', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(115, 'ID-2732', 'IMPLEMENTACION DE PROGRAMAS DE SUMISTROS DE CARNE BOVINA EN EL ESTADO TÁCHIRA.', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL COMERCIO', 2014, 'IMPLEMENTACION DE PROGRAMAS DE SUMINISTROS DE CARNE BOVINA EN TODO EL ESTADO TACHIRA', 1, 'Culminado', '', 8, 'Agosto', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '69212.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(116, 'ID-2799', 'ASIGNACIÓN DE LICENCIAS DE IMPORTACIÓN DE CHASIS PARA UNIDADES DE TRANSPORTE PÚBLICO, EN EL ESTADO TÁCHIRA.', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL COMERCIO', 2014, 'ASIGNACIÓN DE LICENCIAS DE IMPORTACIÓN DE CHASIS PARA UNIDADES DE TRANSPORTE PÚBLICO, EN EL ESTADO TÁCHIRA.', 1, 'Culminado', '', 8, 'Agosto', 2014, '', '', '', '', 0, 0, 'Pedro María Ureña', 'CAPITAL', 'CENTRO', '0.00', '', '', '', '', '', '', '', '', 100, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(117, 'ID-2695', 'OPTIMIZACIÓN DEL SISTEMA VENEZOLANO DE REPUESTOS E INSUMOS PARA EL SECTOR TTRANSPORTE TERRESTRE.(SIVERIST)', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL COMERCIO', 2014, 'OPTIMIZACIÓN DEL SISTEMA VENEZOLANO DE REPUESTOS E INSUMOS PARA EL SECTOR TTRANSPORTE TERRESTRE.(SIVERIST)', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Torbes', 'SAN JOSECITO', 'SAN JOSECITO', '506091.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(118, 'ID-2734', 'DESARROLLO DE TALLERES INFORMATIVOS SOBRE LAS "VÍAS DE FINANCIAMIENTO" DEL FONDO NACIONAL DEL DEPORTE EN EL ESTADO TÁCHIRA.', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA EL DEPORTE', 2014, 'PARTICIPANTES EN LOS TALLERES, FINANCIAMIENTOS TRAMITADOS A RAIZ DE LA FACILITACION DE LOS TALLERES POR LAS DIFERENTES VIAS, FACILITACION DE TALLERES INFORMATIVOS.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(119, 'ID-2706', 'CONFORMACIÓN DE EMPRESA MIXTA DE PRODUCCIÓN Y DISTRIBUCIÓN DE HORTALIZAS ESTADO TACHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA AGRICULTURA Y TIERRAS', 2014, 'CONFORMACION DE EMPRESAS MIXTAS DE PRODUCCION Y DISTRIBUCION DE HORTALIZAS, LA EMPRESA CONTARA CON 100 CASAS DE CULTIVO PROTEGIDO, Y ESTARA BAJO LA RESPONSABILIDAD DE LA GOBERNACION DEL ESTADO TACHIRA, EL MPPAT Y LA EMPRESA KELLY', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'José María Vargas', 'CAPITAL', '', '15000000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(120, 'ID-0807', 'TRANSFERENCIA A LA GOBERNACIÓN DE LA PLANTA DE ALIMENTOS BALANCEADOS PARA ANIMALES ?SANTÍSIMA TRINIDAD (ADMINISTRADA POR LA CORPORACIÓN VENEZOLANA DE ALIMENTOS), UBICADA EN LA FRÍA EN EL MUNICIPIO GARCÍA DE HEVIA DEL ESTADO TÁCHIRA. CON UNA INVERSIÓN DEL BS. 16.695.000 PARA LA AMPLIACIÓN Y CONSOLIDACIÓN DE LA PLANTA DE ALIMENTOS BALANCEADOS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA AGRICULTURA Y TIERRAS', 2014, 'TRANSFERENCIA A LA GOBERNACIÓN DE LA PLANTA DE ALIMENTOS BALANCEADOS PARA ANIMALES ?SANTÍSIMA TRINIDAD (ADMINISTRADA POR LA CORPORACIÓN VENEZOLANA DE ALIMENTOS), UBICADA EN LA FRÍA EN EL MUNICIPIO GARCÍA DE HEVIA DEL ESTADO TÁCHIRA. CON UNA INVERSIÓN DEL BS. 16.695.000 PARA LA AMPLIACIÓN Y CONSOLIDACIÓN DE LA PLANTA DE ALIMENTOS BALANCEADOS', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'García de Hevia', 'LA FRIA', '', '16695000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(121, 'ID-3586', 'REALIZACION DE ASAMBLEA CON LOS MEDIOS ALTERNATIVOS Y COMUNITARIOS DEL ESTADO TÁCHIRA.', '', 0, 0, '', 'MINISTERIO DELPODER POPULAR PARA LA COMUNICACIÓN Y LA INFORMACIÓN', 2014, 'REALIZACION DE ASAMBLEA CON LOS MEDIOS ALTERNATIVOS Y COMUNITARIOS DEL ESTADO TÁCHIRA.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '10000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(122, 'ID-2711', 'CONFORMACIÓN DEL ESTADO MAYOR DE VIALIDAD AGRÍCOLA EN EL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA AGRICULTURA Y TIERRAS', 2014, 'CONFORMACIÓN DEL ESTADO MAYOR DE VIALIDAD AGRÍCOLA EN EL ESTADO TÁCHIRA, INTEGRADO POR LOS REPRESENTANTES DEL SERVICIO AUTÓNOMO DE VIALIDAD AGRÍCOLA (MTT), LA EMPRESA SOCIALISTA PEDRO CAMEJO, EL INSTITUTO NACIONAL DE DESARROLLO RURAL (MAT) Y LA GOBERNACIÓN', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(123, 'ID-3585', 'EVALUACIÓN DE CONDICIONES TÉCNICAS Y NECESIDADES DE MEDIOS ', '', 0, 0, '', 'MINISTERIO DELPODER POPULAR PARA LA COMUNICACIÓN Y LA INFORMACIÓN', 2014, 'VISITA A MEDIOS RADIALES Y TELEVISIVOS ALTERNATIVOS Y COMUNITARIOS DEL ESTADO TÁCHIRA. (ACOMPAÑAMIENTO E INSPECCIÓN PARA EVALUAR LAS CONDICIONES TÉCNICAS Y NECESIDADES DE LOS MAC). EN TODO EL ESTADO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '30000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(124, 'ID-2758', 'ESTRATEGIA COMUNICACIONAL PARA DIFUNDIR LA VIDA Y OBRA DE CÉSAR RENGIFO.', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA COMUNICACIÓN Y LA INFORMACIÓN', 2014, 'ESTRATEGIA COMUNICACIONAL PARA DIFUNDIR LA VIDA Y OBRA DE CÉSAR RENGIFO.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '10000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(125, 'ID-3584', 'EL MPPCI APOYARÁ CON LA ADECUACIÓN DE UN CAMIÓN 350 QUE SERÁ UNA RADIO MÓVIL DEL SISTEMA TACHIRENSE DE COMUNICACIÓN POPULAR.', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA COMUNICACIÓN Y LA INFORMACIÓN', 2014, 'ESTRATEGIA COMUNICACIONAL PARA DIFUNDIR LA VIDA Y OBRA DE CÉSAR RENGIFO.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(126, 'ID-2745', 'DIVULGACION DE LAS OBRAS CESAR RENGIFO AQUILES NAZOA ALI PRIMERA Y RODOLFO SANTANA ESTADO TACHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA CULTURA', 2014, 'ENLACE CON LA MISIÓN CULTURA CORAZÓN ADENTRO Y ARTISTAS', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'La Concordia', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(127, 'ID-2766', 'ARTICULACION CON AUTORIDADES REGIONALES Y MUNICIPALES, A LOS FINES DE EVITAR LA PRESENCIA DE ECONOMIA INFORMAL EN LAS INMEDIACIONES DE LA CASA STEINBORTH', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA CULTURA', 2014, 'INSTAR JURÍDICAMENTE A LA ALCALDESA DE SAN CRISTÓBAL A HACER LAS LABORES CORRESPONDIENTES', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN JUAN BAUTISTA', 'CORREDOR CHUCHO CORRALES', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(128, 'ID-2769', 'REHABILITACION INTEGRAL DEL LICEO BOLIVARIANO FRANCISCO ALVARADO, MUNICIPIO SAN CRISTOBAL ESTADO TACHRIA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA EDUCACION', 2014, 'EL PROYECTO CONTEMPLA REFUERZO ESTRUCTURAL IMPERMEABILIZACION, REHABILITACION DEL SISTEMA ELECTRICO, REHABILITACION DEL SISTEMA SANITARIO, ADECUACION DE COCINA TIPO III, SUSTITUCION DE 2 CANCHAS DEPORTIVAS CON MURO Y REHABILITACION DE AREAS INTERNAS', 1, 'En Ejecución', '', 9, 'Octubre', 2014, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN JUAN BAUTISTA', 'SANTA INES', '28000000.00', '', '', '', '', '', '', '', '', 60, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(129, 'ID-2783', ' REHABILITACIÓN DE LOS CENTROS EDUCATIVOS DE TODO EL ESTADO TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODE POPULAR PARA LA EDUCACIÓN', 2014, 'ESTE PROYECTO ESTA DIRIGIDO A TODO EL ESTADO TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '70000000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(130, 'ID-2696', 'ACTIVACION DE NUCLEO PARA FORMACION DE PERSONAS CON DISCAPACIDAD, EN EL CENTRO DE APOYO TECNOLOGICO E INTEGRACION, EDUCATIVO, SOCIAL Y PRODUCTIVO, MUNICIPIO GARCIA DE HEVIA, ESTADO TACHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA EDUCACION UNIVERSITARIA', 2014, 'ACTIVACION DE NUCLEO PARA FORMACION DE PERSONAS CON DISCAPACIDAD, EN EL CENTRO DE APOYO TECNOLOGICO E INTEGRACION, EDUCATIVO, SOCIAL Y PRODUCTIVO', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'García de Hevia', 'BOCA DE GRITA', 'ZONA INDUSTRIAL', '2500000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(131, 'ID-2713', 'CONSTRUCCIÓN DE 03 CIRCUITOS 13,8KV EN UN TRAMO DE 8 KMS, TACHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA ENERGÍA ELÉCTRICA', 2014, 'CONSTRUCCIÓN DE 03 CIRCUITOS 13,8KV EN UN TRAMO DE 8 KMS, CULMINACION DE CIRCUITOS ELECTRICOS: SC-17, SC-19 Y SC-20 E INSTALACION DE 11 ESTACIONES RADIO BASE UMTS', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '3200000.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(132, 'ID-2757', 'IMPLEMENTACIÓN DEL PLAN DE CAPACITACIÓN DE INSTRUCTORES Y PLAN ESPECIAL DE ACOMPAÑAMIENTO DE MEDICINA INTEGRAL COMUNITARIA (MIC), CON JORNADAS ACADÉMICAS EN 04 MÓDULOS: TERAPÉUTICA RAZONADA, SALUD SEXUAL Y REPRODUCTIVA, EMERGENCIAS MÉDICO ? QUIRÚRGICAS Y EPIDEMIOLÓGICAS, Y REANIMACIÓN CARDIOPULMONAR EN EL ESTADO TÁCHIRA.', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LA SALUD', 2014, 'ESTE PROYECTO VA DIRIGIDO A TODO EL ESTADO TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(133, 'ID-2740', 'IMPLEMENTACION DE PLAN ESTRATÉGICO COMUNICACIONAL PARA LA SISTEMATIZACIÓN DE LAS EXPERIENCIAS DE TRABAJO DE LOS PIONEROS', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS Y LOS MOVIMIENTOS SOCIALES', 2014, 'PRESENTACION, DIVULGACION Y DISCUSIÓN DE LOS DOCUMENTOS Y LAS EXPERIENCIAS COMUNICACIONAL DE LOS PIONEROS.', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'La Concordia', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(134, 'ID-2700', 'FINANCIAMIENTO DE PROYECTOS DE BAJO COSTO Y ALTO IMPACTO PARA ATENCIÓN DE OBRA DE INFRAESTRUCTURAS MENORES', '', 0, 0, '', 'ONSEJO FEDERAL DE GOBIERNO', 2014, 'FINANCIAMIENTO DE PROYECTOS DE BAJO COSTO Y ALTO IMPACTO PARA ATENCIÓN DE OBRA DE INFRAESTRUCTURAS MENORES', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN JUAN BAUTISTA', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(135, 'ID-2767', 'ARTICULACION CON NOTARIAS Y REGISTROS PUBLICOS PARA EVITAR LA COMPRA-VENTA DE LOS LOTES DE TERRENOS AVIVIR PARAMILLOS 2, MUNICIPIO SAN CRISTOBAL ESTADO TACHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS Y LOS MOVIMIENTOS SOCIALES', 2014, 'ARTICULACION CON LOS NOTARIOS Y REGISTRADORES DEL ESTADO TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'SAN JUAN BAUTISTA', 'PARRAMILLO II', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(136, 'ID-2761', 'EVALUACION DE PROYECTOS DE INFRAESTRUCTURA INCONCLUSOS EN LA COMUNIDAD COLINAS DEL TORBES, MUNICIPIO SAN CRISTOBAL, ESTADO TACHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA LAS COMUNAS Y LOS MOVIMIENTOS SOCIALES', 2014, 'ACOMPAÑAMIENTO TÉCNICO PARA LA OBRAS INCONCLUSAS', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'La Concordia', 'COLINAS DEL TORBES', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(137, 'ID-2785', 'AUDITORÍA DE NOTARÍAS ADSCRITAS AL SAREN', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA RELACIONES INTERIORES,JUSTICIA Y PAZ', 2014, 'ESTE PROYECTO ESTA DIRIGIDO A TODO EL ESTADO TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(138, 'ID-2736', 'DESPLIEGUE PLAN PATRIA SEGURA TÁCHIRA', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA RELACIONES INTERIORES,JUSTICIA Y PAZ', 2014, 'ESTE PROYECTO VA DIRIGIDO A TODO EL ESTADO TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(139, 'ID-2754', 'IMPLANTACIÓN DE UN SISTEMA DE COMUNICACIÓN EN EL MARCO DE LA PROTECCIÓN Y SEGURIDAD DEL PUEBLO EN DIVERSAS COMUNIDADES', '', 0, 0, '', 'MINISTERIO DEL PODER POPULAR PARA RELACIONES INTERIORES,JUSTICIA Y PAZ', 0, 'IMPLANTACIÓN DE UN SISTEMA DE COMUNICACIÓN EN EL MARCO DE LA PROTECCIÓN Y SEGURIDAD DEL PUEBLO EN DIVERSAS COMUNIDADES. DIRIGIDO A TODO EL ESTADO TACHIRA', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'CAPITAL', '', '965720.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, '', 0, 'Vacio', 0, ''),
(140, 'ID-2784-001', 'CONSTRUCCION DE VIALIDAD AGRICOLA SECTOR SINARAL Y MATA REDONDA', 'FELIX ORLANDO CONTERAS ARIAS', 416, 8797194, 'VOCERO DE LA COMUNIDAD', 'MINISTERIO DEL PODER POPULAR PARA LA AGRICULTURA Y TIERRAS', 2014, 'COLOCACION DE 500 METROS LINEALES DE PAVIMENTO Y CONSTRUCCION DE CUNETAS', 1, 'En Ejecución', '', 26, 'Noviembre', 2014, '', '400 METROS DE PAVIMENTO RIGIDO', '', '', 0, 0, 'Andrés Bello', 'CAPITAL', '', '2269999.00', '', '', 'GLOBALCO C.A ', ' J-40040393-6', '', '', '', '', 70, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, '');

--
-- Disparadores `proyecto_cgec`
--
DROP TRIGGER IF EXISTS `antes_update_cgec`;
DELIMITER //
CREATE TRIGGER `antes_update_cgec` BEFORE UPDATE ON `proyecto_cgec`
 FOR EACH ROW begin
insert into auditoria_cgec
set action = 'update',
fk_codigo = old.codigo,
nombre = old.nombre,
inspeccion = old.inspeccion,
estatus = old.estatus,
avance = old.avance,
diains = old.diains,
mesins = old.mesins,
anioins = old.anioins,
inspector = old.inspector,
telefi = old.telefi,
telefonoi = old.telefonoi;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_envergadura`
--

CREATE TABLE IF NOT EXISTS `proyecto_envergadura` (
  `nro` int(5) DEFAULT NULL,
  `codigo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `nombre` varchar(350) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `entrevistado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telef` int(4) DEFAULT NULL,
  `telefono` int(7) DEFAULT NULL,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ente` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inspeccion` int(5) DEFAULT NULL,
  `estatus` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `razon` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `diains` int(2) DEFAULT NULL,
  `mesins` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioins` int(4) DEFAULT NULL,
  `t_ejecutado` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parroquia` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inversion` decimal(10,2) DEFAULT NULL,
  `coordnorte` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `coordeste` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rif` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieror` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civr` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieroi` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civi` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `avance` int(5) DEFAULT NULL,
  `diai` int(2) DEFAULT NULL,
  `mesi` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioi` int(4) DEFAULT NULL,
  `valla` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `diac` int(2) DEFAULT NULL,
  `mesc` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioc` int(4) DEFAULT NULL,
  `beneficiados` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Disparadores `proyecto_envergadura`
--
DROP TRIGGER IF EXISTS `antes_update_envergadura`;
DELIMITER //
CREATE TRIGGER `antes_update_envergadura` BEFORE UPDATE ON `proyecto_envergadura`
 FOR EACH ROW begin
insert into auditoria_envergadura
set action = 'update',
fk_codigo = old.codigo,
nombre = old.nombre,
inspeccion = old.inspeccion,
estatus = old.estatus,
avance = old.avance,
diains = old.diains,
mesins = old.mesins,
anioins = old.anioins,
inspector = old.inspector,
telefi = old.telefi,
telefonoi = old.telefonoi;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_espeaten`
--

CREATE TABLE IF NOT EXISTS `proyecto_espeaten` (
  `nro` int(5) DEFAULT NULL,
  `codigo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `nombre` varchar(350) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `entrevistado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telef` int(4) DEFAULT NULL,
  `telefono` int(7) DEFAULT NULL,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ente` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inspeccion` int(5) DEFAULT NULL,
  `estatus` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `razon` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `diains` int(2) DEFAULT NULL,
  `mesins` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioins` int(4) DEFAULT NULL,
  `t_ejecutado` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parroquia` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inversion` decimal(10,2) DEFAULT NULL,
  `coordnorte` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `coordeste` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rif` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieror` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civr` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieroi` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civi` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `avance` int(5) DEFAULT NULL,
  `diai` int(2) DEFAULT NULL,
  `mesi` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioi` int(4) DEFAULT NULL,
  `valla` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `diac` int(2) DEFAULT NULL,
  `mesc` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioc` int(4) DEFAULT NULL,
  `beneficiados` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Disparadores `proyecto_espeaten`
--
DROP TRIGGER IF EXISTS `antes_update_espeaten`;
DELIMITER //
CREATE TRIGGER `antes_update_espeaten` BEFORE UPDATE ON `proyecto_espeaten`
 FOR EACH ROW begin
insert into auditoria_espeaten
set action = 'update',
fk_codigo = old.codigo,
nombre = old.nombre,
inspeccion = old.inspeccion,
estatus = old.estatus,
avance = old.avance,
diains = old.diains,
mesins = old.mesins,
anioins = old.anioins,
inspector = old.inspector,
telefi = old.telefi,
telefonoi = old.telefonoi;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_gobernacion`
--

CREATE TABLE IF NOT EXISTS `proyecto_gobernacion` (
  `nro` int(5) DEFAULT NULL,
  `codigo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `nombre` varchar(350) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `entrevistado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telef` int(4) DEFAULT NULL,
  `telefono` int(7) DEFAULT NULL,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ente` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inspeccion` int(5) DEFAULT NULL,
  `estatus` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `razon` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `diains` int(2) DEFAULT NULL,
  `mesins` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioins` int(4) DEFAULT NULL,
  `t_ejecutado` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parroquia` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inversion` decimal(10,2) DEFAULT NULL,
  `coordnorte` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `coordeste` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rif` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieror` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civr` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieroi` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civi` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `avance` int(5) DEFAULT NULL,
  `diai` int(2) DEFAULT NULL,
  `mesi` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioi` int(4) DEFAULT NULL,
  `valla` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `diac` int(2) DEFAULT NULL,
  `mesc` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioc` int(4) DEFAULT NULL,
  `beneficiados` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Disparadores `proyecto_gobernacion`
--
DROP TRIGGER IF EXISTS `antes_update_gobernacion`;
DELIMITER //
CREATE TRIGGER `antes_update_gobernacion` BEFORE UPDATE ON `proyecto_gobernacion`
 FOR EACH ROW begin
insert into auditoria_gobernacion
set action = 'update',
fk_codigo = old.codigo,
nombre = old.nombre,
inspeccion = old.inspeccion,
estatus = old.estatus,
avance = old.avance,
diains = old.diains,
mesins = old.mesins,
anioins = old.anioins,
inspector = old.inspector,
telefi = old.telefi,
telefonoi = old.telefonoi;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_inversion`
--

CREATE TABLE IF NOT EXISTS `proyecto_inversion` (
  `nro` int(5) DEFAULT NULL,
  `codigo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `nombre` varchar(350) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `entrevistado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telef` int(4) DEFAULT NULL,
  `telefono` int(7) DEFAULT NULL,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ente` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inspeccion` int(5) DEFAULT NULL,
  `estatus` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `razon` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `diains` int(2) DEFAULT NULL,
  `mesins` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioins` int(4) DEFAULT NULL,
  `t_ejecutado` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parroquia` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inversion` decimal(10,2) DEFAULT NULL,
  `coordnorte` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `coordeste` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rif` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieror` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civr` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieroi` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civi` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `avance` int(5) DEFAULT NULL,
  `diai` int(2) DEFAULT NULL,
  `mesi` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioi` int(4) DEFAULT NULL,
  `valla` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `diac` int(2) DEFAULT NULL,
  `mesc` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioc` int(4) DEFAULT NULL,
  `beneficiados` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Disparadores `proyecto_inversion`
--
DROP TRIGGER IF EXISTS `antes_update_inversion`;
DELIMITER //
CREATE TRIGGER `antes_update_inversion` BEFORE UPDATE ON `proyecto_inversion`
 FOR EACH ROW begin
insert into auditoria_inversion
set action = 'update',
fk_codigo = old.codigo,
nombre = old.nombre,
inspeccion = old.inspeccion,
estatus = old.estatus,
avance = old.avance,
diains = old.diains,
mesins = old.mesins,
anioins = old.anioins,
inspector = old.inspector,
telefi = old.telefi,
telefonoi = old.telefonoi;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_ministerio`
--

CREATE TABLE IF NOT EXISTS `proyecto_ministerio` (
  `nro` int(5) DEFAULT NULL,
  `codigo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `nombre` varchar(350) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `entrevistado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telef` int(4) DEFAULT NULL,
  `telefono` int(7) DEFAULT NULL,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ente` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inspeccion` int(5) DEFAULT NULL,
  `estatus` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `razon` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `diains` int(2) DEFAULT NULL,
  `mesins` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioins` int(4) DEFAULT NULL,
  `t_ejecutado` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parroquia` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inversion` decimal(10,2) DEFAULT NULL,
  `coordnorte` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `coordeste` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rif` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieror` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civr` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieroi` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civi` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `avance` int(5) DEFAULT NULL,
  `diai` int(2) DEFAULT NULL,
  `mesi` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioi` int(4) DEFAULT NULL,
  `valla` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `diac` int(2) DEFAULT NULL,
  `mesc` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioc` int(4) DEFAULT NULL,
  `beneficiados` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto_ministerio`
--

INSERT INTO `proyecto_ministerio` (`nro`, `codigo`, `nombre`, `entrevistado`, `telef`, `telefono`, `cargo`, `ente`, `anio`, `descripcion`, `inspeccion`, `estatus`, `razon`, `diains`, `mesins`, `anioins`, `t_ejecutado`, `t_ejecutar`, `t_ejecucion`, `inspector`, `telefi`, `telefonoi`, `municipio`, `parroquia`, `sector`, `inversion`, `coordnorte`, `coordeste`, `empresa`, `rif`, `ingenieror`, `civr`, `ingenieroi`, `civi`, `avance`, `diai`, `mesi`, `anioi`, `valla`, `diac`, `mesc`, `anioc`, `beneficiados`) VALUES
(1, 'min-2015-001', 'CONSTRUCCION DEL DISTRIBUIDOR PUENTE REAL', 'li', 0, 0, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'CONSTRUCCION DE PUENTE VEHICULAR,COLOCACION DE ASFALTO CALIENTE, DEMARCACION Y AMPLIACION DE ACCESOS  A LA CIUDAD DE SAN CRISTOBAL', 1, 'En Ejecución', '', 6, 'Marzo', 2015, '', '', '', '', 0, 0, 'San Cristóbal', 'Pedro María Morantes ', 'Zona Industrial Puente Real', '0.00', '', '', 'ALFI CONSTRUCCTORA 18662  C.A .', ' J-30552315-0', 'NANCY HINOJOSA', '', 'FRANKLIN DUQUE', '', 95, 4, 'Octubre', 2014, 'Sí', 0, 'Febrero', 2015, '1500'),
(2, 'min-2015-002', 'SUSTITUCION DE ALCANTARILLA SECTOR LA TERMOELECTRICA', 'Liliana', 0, 0, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'SUSTITUCION DEL SISTEMA DE ALCANTARILLADO EMPLEANDO TUBERIA CORRUGADA DE 1 METRO DE DIAMETRO, 2,5 CENTIMETROS DE ESPESOR POR 16 METORS DE LONGITUD, COLOCACION DE CAPA ASFALTICA EN AREA DE CORTE', 1, 'En Ejecución', '', 18, 'Marzo', 2015, '', '', '', '', 0, 0, 'García de Hevia', 'José Antonio Páez ', 'LA TERMOELÉCTRICA  ', '1000000.00', '', '', 'INFRASUR C.A.', '', 'CATHERINE RICO', '', 'SANTIAGO REY', '214.032', 98, 4, 'Septiembre', 2014, 'Sí', 0, 'Febrero', 2015, '2000'),
(3, 'min-2015-003', 'OBRAS DE MEJORAMIENTO DE PASEO AUTOPISTA ANTONIO JOSE DE SUCRE', 'Liliana', 0, 0, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'COLOCACION DE BOLSACRETO EN LOS MARGENES DEL RIO TORBES', 1, 'En Ejecución', '', 6, 'Marzo', 2015, '', '', '', '', 0, 0, 'San Cristóbal', 'Pedro María Morantes ', '', '0.00', '', '', 'ALFI CONSTRUCTORA 186612 C.A', 'J-30552315-0', 'JESUS REY', '150.141', 'CAROLINA NUNEZ', '', 40, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(4, 'min-2015-004', 'CONSTRUCCION DE PUENTE CAJON', 'LUIS LAGOS', 424, 7583054, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'Se construye un nuevo puente', 1, 'En Ejecución', '', 2, 'Febrero', 2015, '', '', '', '', 0, 0, 'Ayacucho', 'Ayacucho', 'La Victoria', '0.00', '', '', 'TALLER CHAMA C.A.', 'J-07004601-5', 'LUIS LAGOS', 'CIV 221.184', 'JESUS REY', '150.141', 95, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, '2000'),
(5, 'min-2015-005', 'REHABILITACION DEL PUENTE URIBANTE', 'DANIEL SANTIAGO', 414, 1758440, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'REHABILITACION Y MANTENIMIENTO DEL PUENTE URIBANTE', 2, 'En Ejecución', '', 17, 'Marzo', 2015, '', '', '', '', 0, 0, 'Fernández Feo', 'Capital Fernández Feo', '', '0.00', '', '', 'ALFI CONSTRUCCTORA 18662  C.A .', 'j-30552315-0', 'DANIEL SANTIAGO', '', 'MARIA LOPEZ', '', 90, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(6, 'min-2015-006', 'REHABILITACION DEL PUENTE PISCURI', 'DANIEL SANTIAGO', 414, 1758440, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'Rehabilitación del puente piscuri', 1, 'En Ejecución', '', 12, 'Enero', 2015, '', '', '', '', 0, 0, 'Libertador', 'Capital Libertador', '', '0.00', '', '', 'C.A. CONSTRUCTORA ESFEGA', 'j-07000478-9', 'DANIEL SANTIAGO', '', 'SANTIAGO REY', '214.032', 60, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, '2000'),
(7, 'min-2015-007', 'CONSTRUCCIONES DE PROTECCIONES HIDRAULICAS DEL PUENTE SAN  MATEO', 'JHONNY COLMENARES', 424, 7549288, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'CANALIZACION DE 1200 METROS CUBICOS DE RIO, Y PROTECCION DE ESTRIBO NORTE CON 130 BOLSA CRETO DE 8 TONELADAS', 1, 'En Ejecución', '', 24, 'Marzo', 2015, '', '', '', '', 0, 0, 'Ayacucho', 'Ayacucho', '', '5800000.00', '', '', 'CONSTRUCTORA MORRACHON C.A.', '', 'JOSE', '', 'JHONNY COLMENARES', '', 55, 14, 'Agosto', 2014, 'Sí', 0, 'Vacio', 0, ''),
(8, 'min-2015-008', 'CONSTRUCCION DE PROTECCIONES HIDRAULICAS PUENTE CARIRA', 'RAFAEL MONSALVE', 416, 5025488, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'García de Hevia', 'Capital García de Hevia', '', '0.00', '', '', 'CONSTRUCTORA MORRACHON C.A.', '', 'JOSE', '', 'RAFAEL MONSALVE', '214.852', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(9, 'min-2015-009', 'REHABILITACION Y MEJORAMIENTO DE LA TRONCAL 05, DESDE PISCURI HASTA LA PEDRERA', 'MARIA LOPEZ', 424, 1364938, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Fernández Feo', 'Capital Fernández Feo', '', '0.00', '', '', 'C.A. CONSTRUCTORA ESFEGA', '', 'KLAUS LENDEWIG', '', 'MARIA LOPEZ', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(10, 'min-2015-010', 'REHABILITACION Y MEJORAMIENTO DE LA TRONCAL 07, TRAMO LIMITROFE TACHIRA- MERIDA. KM 626,7', 'MICHELSON MORALES', 416, 5804526, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Jáuregui', 'Capital Jáuregui', '', '0.00', '', '', 'ALFI CONSTRUCCTORA 18662  C.A .', 'j-30552315-0', 'ANNY MONCADA', '', 'MICHELSON MORALES', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(11, 'min-2015-011', 'NIVELACION DE LA AUTOPISTA SAN CRISTOBAL - LA FRIA TRAMIO I', 'MARIA LOPEZ', 424, 1364938, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'San Juan Bautista', '', '0.00', '', '', 'C.A. CONSTRUCTORA ESFEGA', '', 'ANDREINA MENESES', '', 'MARIA LOPEZ', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(12, 'min-2015-012', 'REHABILITACIÓN DE LA VÍA TRONCAL 5, CONSTRUCCIÓN DE MURO DE CONCRETO ARMADO EN EL KM. 622,7, SUSTITUCIÓN DE ALCANTARILLA EN EL KM. 622,4.', 'PABLO PEREZ', 414, 9760248, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'Se rehabilito la via troncal 5, se construyo un muro de concreto', 1, 'Culminado', '', 12, 'Enero', 2015, '', '', '', '', 0, 0, 'Fernández Feo', 'Capital Fernández Feo', 'Los Estoraques ', '0.00', '', '', 'TALLER CHAMA C.A.', 'j-30083118-3', 'EDECIO JIMENEZ', '54.133', 'PABLO PEREZ', '153.933', 100, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, '2000'),
(13, 'min-2015-013', 'REHABILITACION TO01 DESDE CAPACHO HASTA SAN ANTONIO. MUNICIPIO LIBERTAD Y BOLIVAR.', 'JHONNY COLMENARES', 424, 7549288, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Capacho Viejo', 'Libertad', '', '0.00', '', '', 'CONSORCIO LOS ALPES', '', 'CARLOS GARCIA', '', 'JHONNY COLMENARES', '236.022', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(14, 'min-2015-014', 'REHABILITACION DEL PUENTE SAN PEDRO DEL RIO', 'MANUEL REY', 424, 7499195, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'CONSTRUCCION DE PROTECCIÓN HIDRAULICA A BASE DE BOLSAS DE CONCRETO', 1, 'En Ejecución', '', 2, 'Enero', 2015, '', '', '', '', 0, 0, 'Ayacucho', 'Capital Ayacucho', '', '9720418.00', '', '', 'CONSTRUCTORA EL MORRACHON', 'j-30746298-1', 'MANUEL ARROYO', '208.243', 'MANUEL REY', '214.033', 25, 8, 'Agosto', 2014, 'Sí', 0, 'Marzo', 2015, ''),
(15, 'min-2015-015', 'REHABILITACION TO19 DESDE LA PEDRERA HASTA LIMITE APURE', 'PABLO PEREZ', 414, 9760248, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'Rehabilitación del camino desde la Pedrera hasta el limite con el Edo. Apure', 1, 'En Ejecución', '', 12, 'Enero', 2015, '', '', '', '', 0, 0, 'Libertador', 'Capital Libertador', '', '0.00', '', '', 'VINCCLER C.A. ', '', '', '', 'PABLO PEREZ', '153.933', 65, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(16, 'min-2015-016', 'CONSTRUCCION DE PROTECCIONES HIDRAULICAS EN AV.  ANTONIO JOSE DE SUCRE', 'JESUS REY', 424, 7261106, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'San Cristóbal', 'San Juan Bautista', '', '0.00', '', '', 'ALFI CONSTRUCCTORA 18662  C.A', '', 'CAROLINA NUÑEZ(FLOR)', '', 'JESUS REY', '150.141', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(17, 'min-2015-017', 'REHABILITACION DEL PUENTE DORADAS', 'MICHELSON MORALES ', 416, 5804526, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 1, 'Sin Iniciar', '', 12, 'Enero', 2015, '', '', '', '', 0, 0, 'Fernández Feo', 'Capital Fernández Feo', '', '0.00', '', '', 'CONSORCIO METROLLANO.', '', '', '', 'MICHELSON MORALES', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(18, 'min-2015-018', 'REHABILITACION DEL PUENTE NAVAY', 'PABLO PEREZ', 414, 9760248, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el Proyecto', 1, 'Sin Iniciar', '', 12, 'Enero', 2015, '', '', '', '', 0, 0, 'Libertador', 'Don Emeterio Ochoa ', 'La Pedrera', '0.00', '', '', 'CONSORCIO METROLLANO.', '', '', '', 'PABLO PEREZ', '153.933', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(19, 'min-2015-019', 'REHABILITACION PUENTE CAPARO', 'FRANKLIN DUQUE', 414, 7128597, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Libertador', 'Capital Libertador', '', '0.00', '', '', 'REHABILITACION PUENTE CAPARO', '', '', '', 'FRANKLIN DUQUE', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(20, 'min-2015-020', 'CONSTRUCCION DE PROTECCIONES HIDRAULICAS Y CANALIZACION EN EL PUENTE LA CORDERA', 'MANUEL REY', 424, 7499195, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 1, 'Sin Iniciar', '', 16, 'Enero', 2015, '', '', '', '', 0, 0, 'Andrés Bello', 'Capital Andrés Bello', '', '0.00', '', '', 'CONSTRUCTORA GARCIA - GUERRA', '', '', '', 'MANUEL REY', '214.033', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(21, 'min-2015-021', 'REFORZAMIENTO ESTRUCTURAL Y CONSTRUCCIONES DE PROTECCIONES HIDRAULICAS PUENTE BOCONO', 'JHONNY COLMENARES', 424, 7549288, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'CONSTRUCCION DE PROTECCIONES HIDRAULICAS CON BOLSA CRETO, SUSTITUCION DE LOSA Y CONSTRUCCION DE VIA ALTERNA', 1, 'Sin Iniciar', '', 24, 'Marzo', 2015, '', '', '', '', 0, 0, 'Samuel Darío Maldonado', 'Boconó', '', '0.00', '', '', 'CONSTRUCTORA MORRACHON C.A.', '', '', '', 'JHONNY COLMENARES', '236.022', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(22, 'min-2015-022', 'REPARACIÓN DE PUENTE SOBRE QUEBRADA LA JABONOSA VÍA AGRÍCOLA MACANILLO - LA FLORIDA', 'FRANKLIN DUQUE', 414, 7128597, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Cárdenas', 'Capital Cárdenas', '', '0.00', '', '', 'ESMERGUAR, C.A.', '', '', '', 'FRANKLIN DUQUE', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(23, 'min-2015-023', 'SEGUNDA ETAPA DE REPARACIÓN DEL  PUENTE SOBRE QUEBRADA LA GÓMEZ, VÍA MACANILLO', 'FRANKLIN DUQUE', 414, 7128597, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Cárdenas', 'La Florida', '', '0.00', '', '', 'ESMERGUAR, C.A.', '', '', '', 'FRANKLIN DUQUE', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(24, 'min-2015-024', 'REPARACION DE LA T005, SECTOR EL ZIG ZAG CARRETERA SANTO DOMINGO - SAN CRISTOBAL', 'PABLO PEREZ', 414, 9760248, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'CONSTRUCCION DE SISTEMA DE SUB DRENAJES DE LONGIUD 150 METROS DE LA VIA EXISTENTE', 1, 'En Ejecución', '', 17, 'Marzo', 2015, '', '', '', '', 0, 0, 'Fernández Feo', 'Capital Fernández Feo', '', '19500000.00', '', '', 'TALLER CHAMA C.A.', '', 'EDECIO JIMENEZ', '54.133', 'PABLO PEREZ', '153.933', 10, 4, 'Noviembre', 2014, 'Sí', 0, 'Mayo', 2015, '5000'),
(25, 'min-2015-025', 'REPAVIMENTACION DE LA CARRETERA T006', 'RAFAEL MONSALVE', 416, 5025488, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'García de Hevia', 'Capital García de Hevia', '', '0.00', '', '', 'ALFI CONSTRUCCTORA 18662  C.A ', '', 'DANIELA CHACON', '', 'RAFAEL MONSALVE', '214.852', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(26, 'min-2015-026', 'I ETAPA MEJORAS Y REHABILITACION DE LA VIALIDAD AGRICOLA', 'MANUEL REY', 424, 7499195, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'Se rehabilitara la vialidad agricola', 1, 'En Ejecución', '', 16, 'Enero', 2015, '', '', '', '', 0, 0, 'Andrés Bello', 'Capital Andrés Bello', 'Pan de Azúcar ', '0.00', '', '', 'TALLER CHAMA C.A.', '', 'LUIS LAGOS', '221.184', 'MANUEL REY', '214.033', 80, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, '2000'),
(27, 'min-2015-027', 'REHABILITACION TO01 DESDE COPA DE ORO HASTA COLONCITO', 'MARIA LOPEZ', 424, 1364938, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'García de Hevia', 'Capital García de Hevia', '', '0.00', '', '', 'VINCCLER C.A.', '', '', '', 'MARIA LOPEZ', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(28, 'min-2015-028', 'REHABILITACION Y REPARACION DE FALLA DE BORDE DE LA VIA RO14, TRAMO SAN CRISTOBAL - LOMA DEL VIENTO, PROG. KM 5+000', 'PABLO PEREZ', 414, 9760248, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'CONSTRUCCION DE TERRAPLEN Y REESTABLECIMIENTO DEL PASO', 1, 'Paralizado', 'EN ESPERA DE ESTABLECER LA CONTRATACION', 6, 'Febrero', 2015, '', '', '', '', 0, 0, 'San Cristóbal', 'Pedro María Morantes ', 'Barrio Loma del Viento', '0.00', '', '', 'CONSORCIO LOS ALPES', '', 'CARLOS GARCIA', '', 'PABLO PEREZ', '153.933', 10, 4, 'Mayo', 2014, 'No', 0, 'Vacio', 0, '1000'),
(29, 'min-2015-029', 'CONSTRUCCION DE LA AMPLIACION EN LA TO05 - VIA EL COROZO.', 'FRANKLIN DUQUE', 414, 7128597, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 0, 'Sin Iniciar', '', 0, 'Vacio', 0, '', '', '', '', 0, 0, 'Torbes', 'Capital Torbes', '', '0.00', '', '', '', '', 'CARLOS GARCIA', '', 'FRANKLIN DUQUE', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(30, 'min-2015-030', 'REHABILITACION PUENTE CHURURU', 'PABLO PEREZ', 414, 9760248, '', 'MINISTERIO DE TRANSPORTE Y TRANSITO TERRESTE', 2014, 'No se ha iniciado el proyecto', 1, 'Sin Iniciar', '', 17, 'Marzo', 2015, '', '', '', '', 0, 0, 'Fernández Feo', 'Capital Fernández Feo', '', '0.00', '', '', '', '', '', '', 'PABLO PEREZ', '153.933', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, '');

--
-- Disparadores `proyecto_ministerio`
--
DROP TRIGGER IF EXISTS `antes_update_ministerio`;
DELIMITER //
CREATE TRIGGER `antes_update_ministerio` BEFORE UPDATE ON `proyecto_ministerio`
 FOR EACH ROW begin
insert into auditoria_ministerio
set action = 'update',
fk_codigo = old.codigo,
nombre = old.nombre,
inspeccion = old.inspeccion,
estatus = old.estatus,
avance = old.avance,
diains = old.diains,
mesins = old.mesins,
anioins = old.anioins,
inspector = old.inspector,
telefi = old.telefi,
telefonoi = old.telefonoi;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_planagua`
--

CREATE TABLE IF NOT EXISTS `proyecto_planagua` (
  `nro` int(5) DEFAULT NULL,
  `codigo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `nombre` varchar(350) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `entrevistado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telef` int(4) DEFAULT NULL,
  `telefono` int(7) DEFAULT NULL,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ente` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inspeccion` int(5) DEFAULT NULL,
  `estatus` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `razon` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `diains` int(2) DEFAULT NULL,
  `mesins` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioins` int(4) DEFAULT NULL,
  `t_ejecutado` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecutar` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `t_ejecucion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `inspector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefi` int(4) NOT NULL,
  `telefonoi` int(7) NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parroquia` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sector` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inversion` decimal(10,2) DEFAULT NULL,
  `coordnorte` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `coordeste` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rif` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieror` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civr` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ingenieroi` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `civi` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `avance` int(5) DEFAULT NULL,
  `diai` int(2) DEFAULT NULL,
  `mesi` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioi` int(4) DEFAULT NULL,
  `valla` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `diac` int(2) DEFAULT NULL,
  `mesc` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anioc` int(4) DEFAULT NULL,
  `beneficiados` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto_planagua`
--

INSERT INTO `proyecto_planagua` (`nro`, `codigo`, `nombre`, `entrevistado`, `telef`, `telefono`, `cargo`, `ente`, `anio`, `descripcion`, `inspeccion`, `estatus`, `razon`, `diains`, `mesins`, `anioins`, `t_ejecutado`, `t_ejecutar`, `t_ejecucion`, `inspector`, `telefi`, `telefonoi`, `municipio`, `parroquia`, `sector`, `inversion`, `coordnorte`, `coordeste`, `empresa`, `rif`, `ingenieror`, `civr`, `ingenieroi`, `civi`, `avance`, `diai`, `mesi`, `anioi`, `valla`, `diac`, `mesc`, `anioc`, `beneficiados`) VALUES
(7, 'pna-2014-007', 'CONSTRUCCION DEL SISTEMA DE ACUEDUCTO PARA EL SECTOR HUGO CHAVEZ', 'Liliana', 0, 0, '', 'HIDROSUROESTE', 2014, 'Se construye un sistema de acueducto completo', 3, 'En Ejecución', '', 5, 'Enero', 2015, '', '', '', '', 0, 0, 'Torbes', 'Capital Torbes', 'Hugo Chávez ', '0.00', '', '', '', '', '', '', '', '', 95, 0, 'Vacio', 0, 'Sí', 1, 'Vacio', 2013, ''),
(6, 'pna-2014-006', 'RECUPERACION Y PROTECCION DE DIQUE DE CANAL DE CONSTRUCCION RIO CHIQUITO', 'Liliana', 0, 0, '', 'GOBERNACION DEL TACHIRA (HIDROSUROESTE)', 2014, 'se recuperara el dique de rio chiquito', 1, 'Sin Iniciar', '', 18, 'Julio', 2014, '', '', '', '', 0, 0, 'Junín', 'Capital Junín', 'Providencia', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(5, 'pna-2014-005', 'RECUPERACION Y ALIMENTACION DE ESTANQUE DE ALMACENAMIENTO DE CONCRETO ARMADO EXISTENTE DE CAPACIDAD 200.000 LTS DE AGUA', 'Liliana', 0, 0, '', 'HIDROSUROESTE', 0, 'Se recuperara un tanque almacenamiento de 200.000 Litros', 1, 'Vacio', '', 14, 'Octubre', 2014, '', '', '', '', 0, 0, 'Guásimos', 'Capital Guásimos ', 'Palmira', '0.00', '', '', '', '', '', '', '', '', 60, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(4, 'pna-2014-004', 'REUBICACION DE LINEAS DE DISTRIBUCION CORDERO-SAN CRISTOBAL, DIAMETRO 54" Y CORDERO-SAN ANTONIO DIAMETRO 42"', 'Liliana', 0, 0, '', 'MINAMB', 2014, 'Se re-ubicaran las lineas de distribución entre San Cristóbal, San Antonio y Cordero', 1, 'En Ejecución', '', 14, 'Octubre', 2014, '', '', '', '', 0, 0, 'Cárdenas', 'Capital Cárdenas', 'QUEBRADA LA CHIVATA', '0.00', '', '', '', '', '', '', '', '', 30, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(2, 'pna-2014-002', 'CONSTRUCCION DE ESTANQUE DE CONCRETO ARMADO DE CAPACIDAD DE 100.000 LITROS PARA ESTACION DE BOMBEO DE AGUA', 'Liliana', 0, 0, '', 'GOBERNACION DEL TACHIRA', 2014, 'Se construirá un tanque de agua de 100.000 Litros', 1, 'Sin Iniciar', '', 14, 'Octubre', 2014, '', '', '', '', 0, 0, 'Bolívar', 'Capital Bolívar', 'San Antonio', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 0, 'Vacio', 0, ''),
(3, 'pna-2014-003', 'AMPLIACION DE LA ESTACION DE BOMBEO HELECHALES, INCLUYE CONSTRUCCION DE ESTANQUE DE BOMBEO, TANQUE DE ALMACENAMIENTO DE 500 M3 Y LINEA DE INTERCONEXION DESDE ART Y REDES DE DISTRIBUCION', 'Liliana', 0, 0, '', 'GOBERNACION DEL TACHIRA', 2014, 'Se esta ampliando la estación de bomberos, construyendo un tanque de 500M3 y una linea de interconex', 1, 'En Ejecución', '', 2, 'Septiembre', 2014, '', '', '', '', 0, 0, 'Cárdenas', 'Capital Cárdenas', 'Táriba', '0.00', '', '', '', '', '', '', '', '', 5, 0, 'Vacio', 0, 'Sí', 0, 'Vacio', 0, ''),
(1, 'pna-2014-001', 'CONSTRUCCION DE ESTANQUE DE ALMACENAMIENTO  DE 500 M3', 'Liliana', 0, 0, '', 'GOBERNACION DEL TACHIRA-CORPOINTA', 2014, 'Se construirá un tanque de agua de 500M3', 2, 'Sin Iniciar', '', 14, 'Octubre', 2014, '', '', '', '', 0, 0, 'Bolívar', 'Capital Bolívar', 'San Antonio', '0.00', '', '', '', '', '', '', '', '', 0, 0, 'Vacio', 0, 'No', 1, 'Vacio', 2013, '');

--
-- Disparadores `proyecto_planagua`
--
DROP TRIGGER IF EXISTS `antes_update_planagua`;
DELIMITER //
CREATE TRIGGER `antes_update_planagua` BEFORE UPDATE ON `proyecto_planagua`
 FOR EACH ROW begin
insert into auditoria_planagua
set action = 'update',
fk_codigo = old.codigo,
nombre = old.nombre,
inspeccion = old.inspeccion,
estatus = old.estatus,
avance = old.avance,
diains = old.diains,
mesins = old.mesins,
anioins = old.anioins,
inspector = old.inspector,
telefi = old.telefi,
telefonoi = old.telefonoi;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `login` varchar(12) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `clave` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `nivel` char(1) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` char(1) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `clave`, `nivel`, `estatus`) VALUES
('ale', 'e10adc3949ba59abbe56e057f20f883e', 'A', 'A'),
('carlos', '827ccb0eea8a706c4c34a16891f84e7b', 'I', 'A'),
('Invitado_M', '202cb962ac59075b964b07152d234b70', 'I', 'A'),
('frank', '5b25b686cdb35a9d944d703d79578348', 'A', 'A'),
('admin_2', '202cb962ac59075b964b07152d234b70', 'A', 'A'),
('jose', 'c8ffe9a587b126f152ed3d89a146b445', 'A', 'I'),
('juan', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'A'),
('manuel', '202cb962ac59075b964b07152d234b70', 'A', 'I'),
('yohan', '202cb962ac59075b964b07152d234b70', 'A', 'A'),
('hector', '202cb962ac59075b964b07152d234b70', 'A', 'A'),
('anagabriela', '202cb962ac59075b964b07152d234b70', 'A', 'A'),
('redi_i', '81dc9bdb52d04dc20036dbd8313ed055', 'I', 'A'),
('redila', '81dc9bdb52d04dc20036dbd8313ed055', 'I', 'A'),
('invitado_2', '202cb962ac59075b964b07152d234b70', 'A', 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
