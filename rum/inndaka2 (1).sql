-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2024 a las 17:10:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inndaka2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alexas`
--

CREATE TABLE `alexas` (
  `ID` int(11) NOT NULL,
  `Sku` varchar(255) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Piso` varchar(255) NOT NULL,
  `Detalles` varchar(255) NOT NULL,
  `Red_Wifi` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alexas`
--

INSERT INTO `alexas` (`ID`, `Sku`, `Departamento`, `Piso`, `Detalles`, `Red_Wifi`, `Ubicacion`) VALUES
(1, 'echo001', 'Recursos Humanos', 'RH', 'Ninguno', 'RRHH', 'Oteros'),
(2, 'echo002', 'Nutrición', 'Cocina', 'Ninguno', 'A50', 'Oteros'),
(3, 'echo003', 'Sistemas', 'Piso1', 'Mancha en la parte superior', 'INVITADO_ARSOL', 'Oteros'),
(4, 'echo004', 'Compras', 'Piso2', 'Ninguno', 'INVITADO_ARSOL', 'Oteros'),
(5, 'echo005', 'Tesorería', 'Piso3', 'Ninguno', 'INVITADO_ARSOL', 'Oteros'),
(6, 'echo006', 'Gerencia', 'Piso4', 'Ninguno', 'INVITADO_ARSOL', 'Oteros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capturas`
--

CREATE TABLE `capturas` (
  `id` int(11) NOT NULL,
  `imagen` longblob DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `capturas`
--

INSERT INTO `capturas` (`id`, `imagen`, `fecha_hora`, `ubicacion`) VALUES
(224, 0x323032342d30312d33305f32332d31342d32332e706e67, '2024-01-30 23:14:23', 'imagen'),
(225, 0x323032342d30312d33305f32332d31352d32342e706e67, '2024-01-30 23:15:24', 'imagen'),
(226, 0x323032342d30312d33305f32332d32312d32312e706e67, '2024-01-30 23:21:21', 'imagen'),
(227, 0x323032342d30312d33305f32332d32322d31332e706e67, '2024-01-30 23:22:13', 'imagen'),
(228, 0x323032342d30312d33305f32332d33342d34372e706e67, '2024-01-30 23:34:47', 'imagen'),
(229, 0x323032342d30312d33305f32332d33352d34332e706e67, '2024-01-30 23:35:43', 'imagen'),
(230, 0x323032342d30312d33305f32332d33392d31332e706e67, '2024-01-30 23:39:13', 'imagen'),
(231, 0x323032342d30312d33305f32332d35322d35392e706e67, '2024-01-30 23:52:59', 'imagen'),
(232, 0x323032342d30312d33305f32332d35332d30342e706e67, '2024-01-30 23:53:04', 'imagen'),
(233, 0x323032342d30312d33315f30302d30312d32342e706e67, '2024-01-31 00:01:24', 'imagen'),
(234, 0x323032342d30312d33315f30302d30312d32392e706e67, '2024-01-31 00:01:29', 'imagen'),
(235, 0x323032342d30312d33315f30302d31312d32372e706e67, '2024-01-31 00:11:27', 'imagen'),
(236, 0x323032342d30312d33315f30302d31312d33342e706e67, '2024-01-31 00:11:34', 'imagen'),
(237, 0x323032342d30312d33315f31362d31332d33302e706e67, '2024-01-31 16:13:30', 'imagen'),
(238, 0x323032342d30312d33315f31362d31342d32362e706e67, '2024-01-31 16:14:26', 'imagen'),
(239, 0x323032342d30312d33315f31362d32332d31302e706e67, '2024-01-31 16:23:10', 'imagen'),
(240, 0x323032342d30312d33315f31362d35372d31372e706e67, '2024-01-31 16:57:17', 'imagen'),
(241, 0x323032342d30312d33315f31362d35382d34382e706e67, '2024-01-31 16:58:48', 'imagen'),
(242, 0x323032342d30312d33315f31372d30372d33382e706e67, '2024-01-31 17:07:38', 'imagen'),
(243, 0x323032342d30312d33315f31372d30372d35382e706e67, '2024-01-31 17:07:58', 'imagen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capturas_formulario`
--

CREATE TABLE `capturas_formulario` (
  `id_formulario` int(11) NOT NULL,
  `id_captura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `descripcion`) VALUES
(1, 'Recursos Humanos'),
(2, 'Logistica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celulares`
--

CREATE TABLE `celulares` (
  `ID` int(11) NOT NULL,
  `Sku` varchar(255) NOT NULL,
  `Responsable` varchar(255) NOT NULL,
  `Responsable_Anterior` varchar(255) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Marca` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Ram` varchar(255) NOT NULL,
  `Almacenamiento` varchar(255) NOT NULL,
  `Imei` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Detalles` varchar(255) NOT NULL,
  `Extras` varchar(255) NOT NULL,
  `Empresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `celulares`
--

INSERT INTO `celulares` (`ID`, `Sku`, `Responsable`, `Responsable_Anterior`, `Departamento`, `Marca`, `Modelo`, `Color`, `Ram`, `Almacenamiento`, `Imei`, `Ubicacion`, `Detalles`, `Extras`, `Empresa`) VALUES
(1, 'CEL001', 'Sistemas', 'Luis Enrique', 'Sistemas', ' Redmi Note', 'M2103K19G', 'Azul', '2.00GB', '128.00 GB', '862533063436403', 'Oteros', 'Ninguno', 'NA', 'Arsol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `profesion` varchar(50) DEFAULT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `curp` varchar(20) NOT NULL,
  `rfc` varchar(20) NOT NULL,
  `nss` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `hijos` enum('Si','No') NOT NULL,
  `no_cuenta` varchar(50) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `licencia_conducir` enum('A','B','C','D') NOT NULL,
  `certificado_medico` enum('Si','No') NOT NULL,
  `sexo` enum('Masculino','Femenino') NOT NULL,
  `tipo_sangre` varchar(10) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `calle_numero` varchar(100) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `fecha_firma_inicial` date NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `telefono_empresarial` varchar(20) NOT NULL,
  `correo_empresarial` varchar(100) NOT NULL,
  `salario_mensual` decimal(10,2) NOT NULL,
  `base` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `fecha_firma_final` date NOT NULL,
  `motivo_baja` varchar(100) NOT NULL,
  `archivo` longblob DEFAULT NULL,
  `no_infonavit` int(11) DEFAULT 0,
  `nota` varchar(255) DEFAULT '',
  `estado_registro` enum('activo','inactivo') DEFAULT 'activo',
  `fecha_Firma_Salario` date NOT NULL,
  `estado_contratacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`id`, `titulo`, `profesion`, `nombres`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `curp`, `rfc`, `nss`, `telefono`, `correo`, `hijos`, `no_cuenta`, `estado_civil`, `licencia_conducir`, `certificado_medico`, `sexo`, `tipo_sangre`, `cp`, `calle_numero`, `colonia`, `ciudad`, `estado`, `fecha_firma_inicial`, `puesto`, `empresa`, `telefono_empresarial`, `correo_empresarial`, `salario_mensual`, `base`, `ubicacion`, `fecha_firma_final`, `motivo_baja`, `archivo`, `no_infonavit`, `nota`, `estado_registro`, `fecha_Firma_Salario`, `estado_contratacion`) VALUES
(19, 'Ingeniero', 'Desarrollador de software', 'Jorge Adrian', 'Gallegos', 'Mata', '2001-01-13', 'GAMJ010113GTLTRA7', 'GAMJ010113EWC', '--------------------', '4641665590', 'AdrianGaMa13@hotmail.com', 'No', '1234567891234567', 'Soltero', 'D', 'Si', 'Masculino', 'o+', '36790', 'Tlatelolco 116', 'Santa Elena de la Cruz', 'Salamanca', 'Guanajuato', '2023-08-10', 'Diseñador Digital', 'Arsol', '4641231212', 'correo@gmail.com', 6000.00, 'SISTEMAS', 'Salamanca', '1970-01-01', 'a', 0x2f494e4e44414b412f436f6c61626f7261646f7265732f6172636869766f735f73756269646f732f55534552303736362d72656d6f766562672d707265766965772e706e67, 0, 'a', 'activo', '2024-01-23', 'a'),
(20, 'Ingeniero', 'Desarrollador de software', 'Jorge Adrian', 'Gallegos', 'Mata', '2001-01-13', 'GAMJ010113GTLTRA7', 'GAMJ010113EWC', '--------------------', '4641665590', 'AdrianGaMa13@hotmail.com', 'No', '1234567891234567', 'Soltero', 'D', 'Si', 'Masculino', 'o+', '36790', 'Tlatelolco 116', 'Santa Elena de la Cruz', 'Salamanca', 'Guanajuato', '2023-08-10', 'Diseñador Digital', 'Arsol', '4641231212', 'correo@gmail.com', 6000.00, 'SISTEMAS', 'Salamanca', '1970-01-01', 'a', 0x2f494e4e44414b412f436f6c61626f7261646f7265732f6172636869766f735f73756269646f732f65366437643263326330396266633562316161646265646266646662653433352e6a7067, 0, 'a', 'activo', '2024-01-23', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `ID` int(11) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Responsable` varchar(255) NOT NULL,
  `Responsable_Anterior` varchar(255) NOT NULL,
  `Sku` varchar(255) NOT NULL,
  `Equipo` varchar(255) NOT NULL,
  `Marca` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `SO` varchar(255) NOT NULL,
  `Arquitectura` varchar(255) NOT NULL,
  `Procesador` varchar(255) NOT NULL,
  `Ram` varchar(255) NOT NULL,
  `Almacenamiento` varchar(255) NOT NULL,
  `Dispositivo` varchar(255) NOT NULL,
  `Producto` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Detalles` varchar(255) NOT NULL,
  `Aditamentos` varchar(255) NOT NULL,
  `Empresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`ID`, `Departamento`, `Responsable`, `Responsable_Anterior`, `Sku`, `Equipo`, `Marca`, `Modelo`, `Color`, `SO`, `Arquitectura`, `Procesador`, `Ram`, `Almacenamiento`, `Dispositivo`, `Producto`, `Ubicacion`, `Detalles`, `Aditamentos`, `Empresa`) VALUES
(3, 'Sistemas', 'Jorge Adrian Gallegos Mata', 'Salvador Solis', 'LAP003', 'Laptop', 'XPG', 'Xenia 15G', 'Negra', 'Windows 11', '64Bits', 'Core i7', '32GB', '1 Tera', 'CC1CDF67-BA29-4ACF-9E71-6E05F2E5FE39', '00327-60000-00000-AA405', 'Oteros', 'Ninguno', 'Ventilador y cargador', 'Arsol'),
(4, 'Comercial', 'Fabiola Cardenas Limas ', 'Cassandra', 'LAP004', 'Laptop', 'Lenovo', 'Legion', 'Azul', 'Windows 11', '64Bits', 'Core i5', '32GB', '1 Tera', 'BB10144D-E643-4049-A61B-3ECACB14AA42', '00342-43263-99826-AAOEM', 'Oteros', 'Ninguno', 'Cargador', 'Arsol'),
(5, 'RH', 'MARTHA CABALLERO', 'KARLA PACHECO', 'LAP019', 'Laptop', 'HP ', 'GemiBook Pro', 'Blanco', 'Windows 11 Home', '64 Bits', 'Intel Core i5-8250U CPU 1.60GHz 1.60GHz', '32 GB', '111 GB - HDD', 'DBA8DD75-EE2F-4323-A26B-3DBA0D2CE9FE', '00330-51452-61796-AAOEM', 'Oteros', 'El equipo se encuentra en buenas condiciones.', 'Posee entrada de discos', 'Arsol'),
(6, 'FINANZAS', 'JAVIER VASQUEZ ROCHA', 'KARLA PACHECO', 'LAP020', 'ALL IN ONE', 'MSI', 'Sword 15 A12UC', 'Blanco', 'Windows 11 Home', '64 Bits', 'Intel Core i5-8250U CPU 1.60GHz 1.60GHz', '32 GB', '512GB', 'DBA8DD75-EE2F-4323-A26B-3DBA0D2CE9FE', '00330-51452-61796-AAOEM', 'Oteros', 'Equipo en buenas condiciones y funcionando correctamente.', 'Posee entrada de discos', 'Arsol'),
(7, 'FINANZAS', 'MARTHA CABALLERO', 'JUAN ALEJANDRO GALLARDO CRESPO', 'AIO007', 'Laptop', 'HP ', 'Sword 15 A12UC', 'Blanco', 'Windows 11 Home', '64 Bits', 'Intel Core i5-8250U CPU 1.60GHz 1.60GHz', '8 GB', '237 GB - SSD', 'DBA8DD75-EE2F-4323-A26B-3DBA0D2CE9FE', '00330-51452-61796-AAOEM', 'Oteros', 'El equipo se encuentra en buenas condiciones.', 'Posee entrada de discos', 'Arsol'),
(8, 'FINANZAS', 'Carla', 'JUAN ALEJANDRO GALLARDO CRESPO', 'AIO007', 'Laptop', 'HP ', 'Sword 15 A12UC', 'Blanco', 'Windows 11 Home', '64 Bits', 'Intel Core i5-8250U CPU 1.60GHz 1.60GHz', '32 GB', '237 GB - SSD', 'DBA8DD75-EE2F-4323-A26B-3DBA0D2CE9FE', '00330-51452-61796-AAOEM', 'Oteros', 'El equipo se encuentra en buenas condiciones.', 'Posee entrada de discos', 'Arsol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `firmas`
--

CREATE TABLE `firmas` (
  `id` int(11) NOT NULL,
  `firmaOperador` text DEFAULT NULL,
  `firmaLider` text DEFAULT NULL,
  `firmaCliente` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `firmas`
--

INSERT INTO `firmas` (`id`, `firmaOperador`, `firmaLider`, `firmaCliente`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulariodatos`
--

CREATE TABLE `formulariodatos` (
  `id` int(11) NOT NULL,
  `nombre_operador` varchar(255) DEFAULT NULL,
  `no_empleado` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `rum_economico` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `modelo` varchar(250) DEFAULT NULL,
  `llegada_operador` time DEFAULT NULL,
  `salida_operador` time DEFAULT NULL,
  `encendido_maquina` time DEFAULT NULL,
  `apagado_maquina` time DEFAULT NULL,
  `id_captura` int(11) DEFAULT NULL,
  `rum_tramo` varchar(50) DEFAULT NULL,
  `rum_subtramo` varchar(50) DEFAULT NULL,
  `margen` varchar(50) DEFAULT NULL,
  `valor_porcentaje` int(11) DEFAULT NULL,
  `causa` varchar(250) DEFAULT NULL,
  `firma_operador` varchar(255) DEFAULT NULL,
  `firma_lider_proyecto` varchar(255) DEFAULT NULL,
  `rum_actividad` int(11) DEFAULT NULL,
  `rum_descripcion` varchar(255) DEFAULT NULL,
  `rum_hora_inicio` varchar(250) DEFAULT NULL,
  `rum_hora_termino` varchar(250) DEFAULT NULL,
  `rum_horas_efectivas` varchar(50) DEFAULT NULL,
  `rum_observaciones` text DEFAULT NULL,
  `rum_combustible` longblob DEFAULT NULL,
  `rum_actividad_1` varchar(255) DEFAULT NULL,
  `rum_descripcion_1` varchar(255) DEFAULT NULL,
  `rum_hora_inicio_1` varchar(250) DEFAULT NULL,
  `rum_hora_termino_1` varchar(250) DEFAULT NULL,
  `rum_horas_efectivas_1` varchar(255) DEFAULT NULL,
  `rum_observaciones_1` varchar(255) DEFAULT NULL,
  `rum_combustible_1` longblob DEFAULT NULL,
  `rum_actividad_2` varchar(255) DEFAULT NULL,
  `rum_descripcion_2` varchar(255) DEFAULT NULL,
  `rum_hora_inicio_2` varchar(10) DEFAULT NULL,
  `rum_hora_termino_2` varchar(10) DEFAULT NULL,
  `rum_horas_efectivas_2` varchar(10) DEFAULT NULL,
  `rum_observaciones_2` text DEFAULT NULL,
  `rum_combustible_2` longblob DEFAULT NULL,
  `id_formulario` int(11) DEFAULT NULL,
  `rum_camara1` longblob DEFAULT NULL,
  `rum_fecha_hora_camara1` datetime DEFAULT NULL,
  `rum_ubicacion_camara1` varchar(255) DEFAULT NULL,
  `rum_camara2` longblob DEFAULT NULL,
  `rum_fecha_hora_camara2` datetime DEFAULT NULL,
  `rum_ubicacion_camara2` varchar(255) DEFAULT NULL,
  `rum_fecha_1` datetime DEFAULT NULL,
  `rum_ubicacion_1` varchar(255) DEFAULT NULL,
  `rum_fecha_2` datetime DEFAULT NULL,
  `rum_ubicacion_2` varchar(255) DEFAULT NULL,
  `rum_firma` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulariodatos`
--

INSERT INTO `formulariodatos` (`id`, `nombre_operador`, `no_empleado`, `fecha`, `rum_economico`, `tipo`, `modelo`, `llegada_operador`, `salida_operador`, `encendido_maquina`, `apagado_maquina`, `id_captura`, `rum_tramo`, `rum_subtramo`, `margen`, `valor_porcentaje`, `causa`, `firma_operador`, `firma_lider_proyecto`, `rum_actividad`, `rum_descripcion`, `rum_hora_inicio`, `rum_hora_termino`, `rum_horas_efectivas`, `rum_observaciones`, `rum_combustible`, `rum_actividad_1`, `rum_descripcion_1`, `rum_hora_inicio_1`, `rum_hora_termino_1`, `rum_horas_efectivas_1`, `rum_observaciones_1`, `rum_combustible_1`, `rum_actividad_2`, `rum_descripcion_2`, `rum_hora_inicio_2`, `rum_hora_termino_2`, `rum_horas_efectivas_2`, `rum_observaciones_2`, `rum_combustible_2`, `id_formulario`, `rum_camara1`, `rum_fecha_hora_camara1`, `rum_ubicacion_camara1`, `rum_camara2`, `rum_fecha_hora_camara2`, `rum_ubicacion_camara2`, `rum_fecha_1`, `rum_ubicacion_1`, `rum_fecha_2`, `rum_ubicacion_2`, `rum_firma`) VALUES
(101, 'JOSE EDUARDO OROPEZA ALFARO', '121212', '2024-03-15', 'EQ-305', 'GRUA', 'DEWE', NULL, NULL, NULL, NULL, NULL, 'Salamanca', 'SALAMANCA', 'Salamanaca', NULL, NULL, NULL, NULL, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(102, 'JOSE FERNANDO ORTEGA TISCAREÑO', '121212', '2024-03-19', 'EQ-305', 'GRUA', 'FEFEFE', NULL, NULL, NULL, NULL, NULL, 'SALAMANCA ', 'CDMX', NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `nombre_operador` varchar(255) NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `nombre_operador`, `imagen`) VALUES
(1, '', 0x89504e470d0a1a0a0000000d494844520000012c000000960806000000645bb5d2000000017352474200aece1ce90000046249444154785eedd4010900000c02c1d9bff4723cdc12c839dc39020408440416c92926010204ce60790202043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa129400810756310097e325bda30000000049454e44ae426082),
(2, '', 0x89504e470d0a1a0a0000000d494844520000012c000000960806000000645bb5d2000000017352474200aece1ce90000046249444154785eedd4010900000c02c1d9bff4723cdc12c839dc39020408440416c92926010204ce60790202043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa129400810756310097e325bda30000000049454e44ae426082),
(3, '', 0x89504e470d0a1a0a0000000d494844520000012c000000960806000000645bb5d2000000017352474200aece1ce90000046249444154785eedd4010900000c02c1d9bff4723cdc12c839dc39020408440416c92926010204ce60790202043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa1294000183e5070810c80818ac4c5582122060b0fc00010219018395a94a5002040c961f2040202360b03255094a8080c1f203040864040c56a62a41091030587e8000818c80c1ca542528010206cb0f10209011305899aa042540c060f90102043202062b5395a00408182c3f40804046c06065aa129400810756310097e325bda30000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresora`
--

CREATE TABLE `impresora` (
  `ID` int(11) NOT NULL,
  `Sku` varchar(255) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Marca` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Cable_Wifi` varchar(255) NOT NULL,
  `Ip` varchar(255) NOT NULL,
  `Tipo` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitores`
--

CREATE TABLE `monitores` (
  `ID` int(11) NOT NULL,
  `Sku` varchar(255) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Responsable` varchar(255) NOT NULL,
  `Responsable_Anterior` varchar(255) NOT NULL,
  `Marca` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Detalles` varchar(255) NOT NULL,
  `Extras` varchar(255) NOT NULL,
  `Empresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `monitores`
--

INSERT INTO `monitores` (`ID`, `Sku`, `Departamento`, `Responsable`, `Responsable_Anterior`, `Marca`, `Modelo`, `Color`, `Ubicacion`, `Detalles`, `Extras`, `Empresa`) VALUES
(0, 'LAP002', 'FINANZAS', 'Maria', 'JUAN ALEJANDRO GALLARDO CRESPO', 'HP ', 'Sword 15 A12UC', 'Blanco', 'Oteros', 'El equipo se encuentra en buenas condiciones.', 'Ninguno', 'Arsol'),
(5, 'MON001', 'Sistemas', 'Alan Michel Soto Razo', 'NA', 'BENQ', 'C27R500FHL', 'Negro', 'Oteros', 'Nuevo', 'HDMI', 'Arsol'),
(6, 'MON002', 'Sistemas', 'Jose Eduardo Oropeza Alfaro', 'Luis Enrique Garcia Mendoza', 'Samsung', 'C27R500FHL', 'Negro/Gris', 'Oteros', 'Ninguno', 'HDMI', 'Arsol'),
(7, 'MON003', 'Sistemas', 'Jorge Adrian Gallegos Mata', 'NA', 'Samsung', 'C27R500FHL', 'Negro/Gris', 'Oteros', 'Ninguno', 'HDMI', 'Arsol'),
(8, 'MON004', 'Comercial', 'Fabiola Cardenas Limas', 'Shaila ', 'Hisense', '32H5500E', 'Negro', 'Oteros', 'Ninguno', 'HDMI', 'Arsol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mouses`
--

CREATE TABLE `mouses` (
  `ID` int(11) NOT NULL,
  `Sku` varchar(255) NOT NULL,
  `Responsable` varchar(255) NOT NULL,
  `Responsable_Anterior` varchar(255) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Marca` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Detalles` varchar(255) NOT NULL,
  `Extras` varchar(255) NOT NULL,
  `Empresa` varchar(255) NOT NULL,
  `Funcional` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mouses`
--

INSERT INTO `mouses` (`ID`, `Sku`, `Responsable`, `Responsable_Anterior`, `Departamento`, `Marca`, `Modelo`, `Color`, `Ubicacion`, `Detalles`, `Extras`, `Empresa`, `Funcional`) VALUES
(0, 'LAP002', 'MARTHA CABALLERO', '', 'Sistemas', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radios`
--

CREATE TABLE `radios` (
  `ID` int(11) NOT NULL,
  `Responsable` varchar(255) NOT NULL,
  `Sku` varchar(255) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Marca` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Detalles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsivas`
--

CREATE TABLE `responsivas` (
  `ID` int(11) NOT NULL,
  `Estatus` varchar(255) NOT NULL,
  `Folio` varchar(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Puesto` varchar(255) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Dispositivo1` varchar(255) NOT NULL,
  `Marca1` varchar(255) NOT NULL,
  `Modelo1` varchar(255) NOT NULL,
  `Ime1` varchar(255) NOT NULL,
  `Sku1` varchar(255) NOT NULL,
  `Condiciones_Fisicas1` varchar(255) NOT NULL,
  `Dispositivo2` varchar(255) NOT NULL,
  `Marca2` varchar(255) NOT NULL,
  `Modelo2` varchar(255) NOT NULL,
  `Ime2` varchar(255) NOT NULL,
  `Sku2` varchar(255) NOT NULL,
  `Condiciones_Fisicas2` varchar(255) NOT NULL,
  `Dispositivo3` varchar(255) NOT NULL,
  `Marca3` varchar(255) NOT NULL,
  `Modelo3` varchar(255) NOT NULL,
  `Ime3` varchar(255) NOT NULL,
  `Sku3` varchar(255) NOT NULL,
  `Condiciones_Fisicas3` varchar(255) NOT NULL,
  `Dispositivo4` varchar(255) NOT NULL,
  `Marca4` varchar(255) NOT NULL,
  `Modelo4` varchar(255) NOT NULL,
  `Ime4` varchar(255) NOT NULL,
  `Sku4` varchar(255) NOT NULL,
  `Condiciones_Fisicas4` varchar(255) NOT NULL,
  `Dispositivo5` varchar(255) NOT NULL,
  `Marca5` varchar(255) NOT NULL,
  `Modelo5` varchar(255) NOT NULL,
  `Ime5` varchar(255) NOT NULL,
  `Sku5` varchar(255) NOT NULL,
  `Condiciones_Fisicas5` varchar(255) NOT NULL,
  `Observaciones` varchar(255) NOT NULL,
  `Notas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `responsivas`
--

INSERT INTO `responsivas` (`ID`, `Estatus`, `Folio`, `Fecha`, `Nombre`, `Puesto`, `Departamento`, `Telefono`, `Dispositivo1`, `Marca1`, `Modelo1`, `Ime1`, `Sku1`, `Condiciones_Fisicas1`, `Dispositivo2`, `Marca2`, `Modelo2`, `Ime2`, `Sku2`, `Condiciones_Fisicas2`, `Dispositivo3`, `Marca3`, `Modelo3`, `Ime3`, `Sku3`, `Condiciones_Fisicas3`, `Dispositivo4`, `Marca4`, `Modelo4`, `Ime4`, `Sku4`, `Condiciones_Fisicas4`, `Dispositivo5`, `Marca5`, `Modelo5`, `Ime5`, `Sku5`, `Condiciones_Fisicas5`, `Observaciones`, `Notas`) VALUES
(1, 'dede', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'eeee', 'eeee', 'eeee', 'eeee', 'eeee', 'eeee', 'eeee', 'eeee', 'eeeeeeee', 'eeeeeeeeeeee', 'eeee', 'eeee', 'eeee', 'eeee', 'eeeeeeee', 'eeeeeeee', 'eeee', 'eeee', 'eeeeeeee', 'eeee', '', 'eeee', 'eeee', 'eeee', 'eeeeeeee', 'eeeeeeee', 'eeee', 'eeee', 'eeee', 'eeeeeeee', 'eeee', 'eeeeeeee', 'eeeeeeee', 'eeee', 'eeee', 'eeee', 'eeeeeeee', 'eeeeeeeeeeee', 'eeeeeeeeeeee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teclados`
--

CREATE TABLE `teclados` (
  `ID` int(11) NOT NULL,
  `Sku` varchar(255) NOT NULL,
  `Responsable` varchar(255) NOT NULL,
  `Responsable_Anterior` varchar(255) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Marca` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Detalles` varchar(255) NOT NULL,
  `Extras` varchar(255) NOT NULL,
  `Empresa` varchar(255) NOT NULL,
  `Funcional` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_id`
--

CREATE TABLE `user_id` (
  `actividad_id` int(11) NOT NULL,
  `descripcion_actividad` varchar(255) NOT NULL,
  `inicio_trabajo` datetime NOT NULL,
  `fin_trabajo` datetime NOT NULL,
  `combustible` varchar(50) NOT NULL,
  `horas_efectivas` datetime NOT NULL,
  `observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_id`
--

INSERT INTO `user_id` (`actividad_id`, `descripcion_actividad`, `inicio_trabajo`, `fin_trabajo`, `combustible`, `horas_efectivas`, `observaciones`) VALUES
(13, 'MANIOBRA', '2024-01-15 17:40:26', '2024-01-16 17:40:26', '200 L', '2024-01-17 17:40:26', 'TRABAJO CORRECTAMENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `username`, `password`, `nombre`, `email`, `id_cargo`) VALUES
(1, 'EDUARDO', '1234', 'ED', 'Lalo@gmail.com', 1),
(2, 'RH', 'a', 'Recursos Humanos', 'rh@gmail.com', 1),
(3, 'Logi', 'a', 'Logistica', 'logistica@gmail.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alexas`
--
ALTER TABLE `alexas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `capturas`
--
ALTER TABLE `capturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `capturas_formulario`
--
ALTER TABLE `capturas_formulario`
  ADD PRIMARY KEY (`id_formulario`,`id_captura`),
  ADD KEY `id_captura` (`id_captura`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `firmas`
--
ALTER TABLE `firmas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formulariodatos`
--
ALTER TABLE `formulariodatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagen_1` (`id_captura`),
  ADD KEY `id_formulario` (`id_formulario`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `impresora`
--
ALTER TABLE `impresora`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `monitores`
--
ALTER TABLE `monitores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `mouses`
--
ALTER TABLE `mouses`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `user_id`
--
ALTER TABLE `user_id`
  ADD PRIMARY KEY (`actividad_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capturas`
--
ALTER TABLE `capturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `firmas`
--
ALTER TABLE `firmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `formulariodatos`
--
ALTER TABLE `formulariodatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_id`
--
ALTER TABLE `user_id`
  MODIFY `actividad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `capturas_formulario`
--
ALTER TABLE `capturas_formulario`
  ADD CONSTRAINT `capturas_formulario_ibfk_1` FOREIGN KEY (`id_captura`) REFERENCES `capturas` (`id`),
  ADD CONSTRAINT `capturas_formulario_ibfk_2` FOREIGN KEY (`id_formulario`) REFERENCES `formulariodatos` (`id`),
  ADD CONSTRAINT `capturas_formulario_ibfk_3` FOREIGN KEY (`id_captura`) REFERENCES `capturas` (`id`);

--
-- Filtros para la tabla `formulariodatos`
--
ALTER TABLE `formulariodatos`
  ADD CONSTRAINT `formulariodatos_ibfk_1` FOREIGN KEY (`id_captura`) REFERENCES `capturas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulariodatos_ibfk_2` FOREIGN KEY (`id_formulario`) REFERENCES `capturas_formulario` (`id_formulario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
