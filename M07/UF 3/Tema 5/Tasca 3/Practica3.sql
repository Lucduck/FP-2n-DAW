-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2017 at 07:45 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Practica3`
--

-- --------------------------------------------------------

--
-- Table structure for table `Departaments`
--

CREATE TABLE `Departaments` (
  `codi` decimal(4,0) NOT NULL,
  `nom` varchar(59) NOT NULL,
  `pressupost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Departaments`
--

INSERT INTO `Departaments` (`codi`, `nom`, `pressupost`) VALUES
('701', 'Arquitectura de Computadors', 16140),
('702', 'Ciència dels Materials i Enginyeria Metal·lúrgica', 6715),
('703', 'Composició Arquitectònica', 15735),
('704', 'Construccions Arquitectòniques I', 7357),
('705', 'Construccions Arquitectòniques II', 19987),
('706', 'Enginyeria de la Construcció', 5182),
('707', 'Enginyeria de Sistemes, Automàtica i Informàtica Industrial', 14979),
('708', 'Enginyeria del Terreny, Cartogràfica i Geofísica', 15069),
('709', 'Enginyeria Elèctrica', 15615),
('710', 'Enginyeria Electrònica', 8240),
('711', 'Enginyeria Hidràulica, Marítima i Ambiental', 9313),
('712', 'Enginyeria Mecànica', 8995),
('713', 'Enginyeria Química', 9991),
('714', 'Enginyeria Tèxtil i Paperera', 18887),
('715', 'Estadística i Investigació Operativa', 7685),
('716', 'Estructures a l\'Arquitectura', 8069),
('717', 'Expressió Gràfica a l\'Enginyeria', 3499),
('718', 'Expressió Gràfica Arquitectònica I', 4610),
('719', 'Expressió Gràfica Arquitectònica II', 16305),
('720', 'Física Aplicada', 12669),
('721', 'Física i Enginyeria Nuclear', 6060),
('722', 'Infraestructura del Transport i del Territori', 14349),
('723', 'Llenguatges i Sistemes Informàtics', 15566),
('724', 'Màquines i Motors Tèrmics', 17325),
('725', 'Matemàtica Aplicada I', 9011),
('726', 'Matemàtica Aplicada II', 10561),
('727', 'Matemàtica Aplicada III', 5036),
('729', 'Mecànica de Fluids', 4914),
('731', 'Òptica i Optometria', 11142),
('732', 'Organització d\'Empreses', 11758),
('735', 'Projectes Arquitectònics', 8578),
('736', 'Projectes d\'Enginyeria', 7282),
('737', 'Resistència de Materials i Estructures a l\'Enginyeria', 15473),
('739', 'Teoria del Senyal i Comunicacions', 4312),
('740', 'Urbanisme i Ordenació del Territori', 11639),
('741', 'Enginyeria Minera i Recursos Naturals', 12065),
('742', 'Ciència i Enginyeria Nàutiques', 19469),
('743', 'Matemàtica Aplicada IV', 19791),
('744', 'Enginyeria Telemàtica', 5904),
('745', 'Enginyeria Agroalimentària i Biotecnologia', 19216),
('746', 'Enginyeria de Disseny i Programació de Sistemes Electrònics', 14653),
('747', 'Enginyeria de Serveis i Sistemes d\'Informació', 11517);

-- --------------------------------------------------------

--
-- Table structure for table `Empleats`
--

CREATE TABLE `Empleats` (
  `dni` varchar(9) NOT NULL,
  `nom` varchar(13) NOT NULL,
  `cognom1` varchar(10) NOT NULL,
  `cognom2` varchar(10) NOT NULL,
  `departament` int(11) NOT NULL,
  `Salari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Empleats`
--

INSERT INTO `Empleats` (`dni`, `nom`, `cognom1`, `cognom2`, `departament`, `Salari`) VALUES
('07977747J', 'PEDRO VTE', 'SÁNCHEZ', 'MARTÍNEZ', 700, 1031),
('13171339K', 'LAURA', 'MATEU', 'CARBONERES', 721, 2514),
('16283098H', 'VIRMA', 'CHENOLL', 'RUBIO', 703, 11260),
('1931252B', 'ENCARNACIÓN', 'BOU', 'GRAU', 727, 4030),
('20473005S', 'JESSICA', 'PINA', 'ALEGRE', 720, 7556),
('24383183D', 'JOAN FRANCESC', 'BAEZA', 'SORIA', 726, 1689),
('25416158P', 'LOURDES', 'SANZ', 'SANCHEZ', 740, 6019),
('2650711F', 'ESTHER', 'CERVERA', 'BUENO', 739, 10366),
('2657947K', 'PAU', 'BUENO', 'VILA', 721, 3542),
('29133618R', 'PAU', 'BOU', 'GRAU', 714, 5583),
('29205865M', 'JOAN FRANCESC', 'BAEZA', 'SORIA', 733, 8034),
('29486167Y', 'JORDI', 'SALES', 'BAEZA', 726, 11362),
('30974888Y', 'ENCARNACIÓN', 'RUBIO', 'RUBIO', 722, 5838),
('36173128', 'PEDRO VTE', 'CISCAR', 'CUÑA', 730, 11407),
('38506578R', 'ANTONIO', 'MORENO', 'DOÑATE', 711, 1650),
('43682334K', 'JESSICA', 'MICÓ', 'LANCERO', 735, 7830),
('44508273F', 'MARIA ISABEL', 'PARDO', 'BALDOVI', 702, 3700),
('44587749H', 'JORDI', 'SOLER', 'CAMPINS', 737, 8657),
('44591376B', 'JOAN FRANCESC', 'BAEZA', 'SORIA', 735, 3063),
('44717954C', 'CARLOS', 'BOIX', 'MARTINEZ', 719, 7662),
('44837411S', 'GEMMA', 'PINA', 'ALEGRE', 728, 11406),
('44914440V', 'JORGE', 'RUBIO', 'PERIS', 721, 9474),
('45643630S', 'LAURA', 'GIMENO', 'VERDU', 700, 9757),
('45687655H', 'NURIA', 'MANZANO', 'HOYO', 733, 3979),
('46961565G', 'JAVIER', 'CISCAR', 'CUÑA', 733, 6182),
('47085576E', 'SERGIO', 'MARTINEZ', 'SANZ', 713, 5590),
('47807773L', 'ISIDRO', 'CHISVERT', 'MATEU', 738, 8135),
('48922126E', 'MARIA ISABEL', 'CLEMENTE', 'RUBIO', 711, 5168),
('52365765D', 'MARIA ISABEL', 'TORREGROSA', 'CLEMENTE', 717, 7115),
('52414479D', 'ISIDRO', 'MATEU', 'CARBONERES', 721, 11197),
('52654158M', 'JOAN FRANCESC', 'GRAU', 'BADAL', 735, 6483),
('52765416N', 'ROBERTO', 'HOYO', 'GIMENO', 728, 9678),
('53182941H', 'AMPARO', 'TÁRREGA', 'MOLLÁ', 722, 7315),
('53187168J', 'PATRICIA', 'SORIA', 'SÁNCHEZ', 713, 7773),
('53276024C', 'PILAR', 'SANCHEZ', 'GARCIA', 717, 2082),
('5346814F', 'CONSUELO', 'MIRAVET', 'BOIX', 701, 3815),
('70254375R', 'JORGE', 'TALENS', 'SALES', 709, 2947),
('71151866D', 'VIRMA', 'TALENS', 'SALES', 732, 2011),
('71292960K', 'LOURDES', 'MARTINEZ', 'SANZ', 700, 10923),
('71437195', 'ANTONIO', 'MORENO', 'DOÑATE', 733, 8943),
('71447730R', 'CONSUELO', 'OLIVER', 'MIRAVET', 726, 9769),
('71644057', 'ESTHER', 'HERVAS', 'TRESCOLI', 706, 8904),
('71651900', 'PAU', 'CUÑA', 'BOIX', 735, 6556),
('71889629R', 'PATRICIA', 'VALLES', 'CHENOLL', 719, 3646),
('71950651G', 'MAURO', 'TORREGROSA', 'CLEMENTE', 715, 9058),
('72484302D', 'JESSICA', 'ALEGRE', 'TÁRREGA', 708, 8583),
('72985365V', 'LAURA', 'MORENO', 'DOÑATE', 707, 3844),
('72986056H', 'LOURDES', 'SARRION', 'SARRIO', 727, 6995),
('74005177D', 'ROBERTO', 'FERRANDO', 'BOIX', 702, 11758),
('74657572D', 'TERESA', 'FERRANDIS', 'COMBRES', 713, 8414),
('74882847E', 'SALVIA', 'FERRANDO', 'BOIX', 716, 7901),
('75149161L', 'NURIA', 'MANZANO', 'HOYO', 735, 3462),
('75766795', 'JAVIER', 'OLIVER', 'MIRAVET', 703, 8407),
('75959001Y', 'CONSUELO', 'GUNA', 'RODRIGUEZ', 721, 8992),
('76023312D', 'SALVIA', 'BADAL', 'FENOLLAR', 719, 5775),
('78712657D', 'SANDRA', 'BOIX', 'TORMOS', 726, 10952),
('78930167D', 'LAURA', 'DOÑATE', 'MORENO', 721, 4118),
('7983256W', 'ESTHER', 'OLMOS', 'CERVERA', 720, 3095),
('80153775V', 'MIREIA', 'OLMOS', 'CERVERA', 734, 9929),
('8873162S', 'JAVIER', 'BOIX', 'CHISVERT', 712, 5161),
('9809005B', 'SANDRA', 'MANZANO', 'HOYO', 711, 5182),
('9814648L', 'PILAR', 'VALLES', 'CHENOLL', 737, 4372);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Departaments`
--
ALTER TABLE `Departaments`
  ADD PRIMARY KEY (`codi`);

--
-- Indexes for table `Empleats`
--
ALTER TABLE `Empleats`
  ADD PRIMARY KEY (`dni`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
