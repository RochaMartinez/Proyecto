-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2022 at 09:21 AM
-- Server version: 8.0.0-dmr-log
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escuela`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE `alumno` (
  `idAlumno` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Domicilio` text NOT NULL,
  `Tel` bigint(20) NOT NULL,
  `Carrera` varchar(45) NOT NULL,
  `idMateria` int(11) NOT NULL,
  `Calificacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `Nombre`, `Apellido`, `Domicilio`, `Tel`, `Carrera`, `idMateria`, `Calificacion`) VALUES
(1, 'Perla', 'Rocha', 'Gustavo Diaz Ordaz #1966', 4621583845, 'Sistemas Computacionales', 3, '80'),
(3, 'Teresa', 'Martinez', 'Los Reyes', 4621789089, 'Informática', 5, '78'),
(4, 'Victor', 'Quezada', 'Abasolo #674', 4621556899, 'Sistemas Automotrices', 8, '98');

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `idMateria` int(11) NOT NULL,
  `NombreMateria` varchar(45) NOT NULL,
  `Dia` text NOT NULL,
  `Hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`idMateria`, `NombreMateria`, `Dia`, `Hora`) VALUES
(1, 'Matematicas', 'Lunes', '12:00:00'),
(3, 'Fisica', 'Miercoles', '07:00:00'),
(4, 'Ingles', 'Lunes', '02:00:00'),
(5, 'Programacion', 'Miercoles', '03:00:00'),
(6, 'Frances', 'Viernes', '08:00:00'),
(7, 'Historia', 'Jueves', '13:00:00'),
(8, 'Desarrollo web', 'Viernes', '14:00:00'),
(9, 'Ciencias', 'Lunes', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE `profesor` (
  `idProfesor` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Domicilio` text NOT NULL,
  `Tel` bigint(20) NOT NULL,
  `IdMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`idProfesor`, `Nombre`, `Apellido`, `Domicilio`, `Tel`, `IdMateria`) VALUES
(1, 'Juan', 'Perez', 'Nicolas #122', 46213452345, 1),
(2, 'Julian', 'Chavez', 'Las Reynas', 4621562678, 4),
(4, 'Diana', 'Mosqueda', 'Barrio Nuevo #567', 2456781245, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlumno`),
  ADD KEY `idMateria_idx` (`idMateria`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idMateria`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idProfesor`),
  ADD KEY `idMateria_idx` (`IdMateria`),
  ADD KEY `idMat_idx` (`IdMateria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `idMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
  MODIFY `idProfesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `idMateria` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`);

--
-- Constraints for table `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `idMat` FOREIGN KEY (`IdMateria`) REFERENCES `materia` (`idMateria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
