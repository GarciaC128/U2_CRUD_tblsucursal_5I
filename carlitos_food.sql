-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2023 a las 18:50:31
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carlitos_food`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `Id_sucursal` varchar(4) NOT NULL,
  `nombre_sucursal` varchar(50) NOT NULL,
  `direccion_sucursal` varchar(200) NOT NULL,
  `horario` varchar(90) NOT NULL,
  `calificacion` decimal(10,2) NOT NULL,
  `capacidad` varchar(50) NOT NULL,
  `servicios` varchar(150) NOT NULL,
  `telefono_sucursal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`Id_sucursal`, `nombre_sucursal`, `direccion_sucursal`, `horario`, `calificacion`, `capacidad`, `servicios`, `telefono_sucursal`) VALUES
('S01', 'Carlitos Las Torres', 'Av. de las Torres y Palacio de Mitla', 'Lun-Dom 10 a.m. a 7 p.m.', '0.00', '100 personas', 'Mesas, Recoger Pedidos, Entrega a domicilio', '656 747 2130'),
('S02', 'Carlitos Centro', 'Av. 16 de Septiembre 309', ' Cerrado temporalmente', '6.00', '30 personas', 'Fuera de servicio', '656 681 0225'),
('S03', 'Carlitos Tecnologico', ' Av. Tecnológico ·1595', 'Lun-Dom 9 a.m. a 5 p.m.', '7.00', '50 personas', 'Mesas', '656 747 1761'),
('S04', 'Carlitos Rio Grande', 'Av. López Mateos 290-A', ' Lun-Dom 10 a.m. a 7 p.m.', '8.00', '20 personas', 'Recoger Pedidos, Entrega a domicilio', '656 747 2130'),
('S05', 'Carlitos Las Misiones', 'Int. CC Las Misiones', 'cerrado temporalmente', '5.00', '50 personas', 'Fuera de servicio', '656 648 2455');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`Id_sucursal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
