-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 11:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_content`
--

CREATE TABLE `basic_content` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basic_content`
--

INSERT INTO `basic_content` (`id`, `tittle`, `description`) VALUES
(1, 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus sapien. Integer id purus tempor, tincidunt mauris et, accumsan leo. Curabitur efficitur tortor a felis sagittis facilisis. Fusce vitae auctor massa, vitae pharetra ante. Mauris nec nunc eu elit dapibus scelerisque. Cras sit amet tellus vitae odio posuere tempor id ac nisl. Aliquam luctus vitae felis nec varius. Suspendisse porta efficitur elit, eu auctor elit tempus a. Donec eget feugiat sem, sed cursus libero. Maecenas sed augue diam. Integer sed urna non augue finibus egestas eu pretium mi. In pellentesque arcu in tellus imperdiet, ut facilisis odio interdum. Aliquam vel malesuada nisl, eu sagittis elit. Nunc gravida condimentum rutrum. Aliquam pulvinar tortor odio, a pellentesque tortor sagittis eget. Cras non mi ac dui bibendum ultricies.');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `comentarios` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `descripcion`, `precio`, `comentarios`, `imagen`) VALUES
(1, 'SUPER TRACTION DUPLEX', 100, 'Versatilidad y valor en un neumático para servicio medio', 'SuperAllTracDuplex_full_320x480.png'),
(2, 'INDUSTRIAL SPECIAL', 200, 'Rendimiento y durabilidad probados en un neumático no direccional', 'Industrial_Special_full_320x480.png'),
(3, 'SUPER TRACTION LOADER', 300, 'Larga duración y una gran tracción en un neumático de servicio mediano.', 'SuperTractionLoaderI3_full_320x480.png'),
(4, 'FS820', 400, 'Neumático radial para todas las posiciones recomendado para ejes de dirección, tracción y remolque en servicios de carretera y fuera de ella.', 'FS_TBR_FS820_full_1080x1800.png'),
(5, 'T831', 500, 'Neumático de dirección para servicio severo para aplicaciones en carretera y fuera de ella.', 'FS_TBR_T831_full_1080x1800.png'),
(6, 'T839', 600, 'Neumático radial de base amplia para todas las posiciones recomendado para ejes de dirección, tracción y remolque en servicios de carretera y fuera de ella.', 'T839_full_320x480.png'),
(7, 'FORESTRY TRACTION LUG', 700, 'Ángulo de barra de banda de rodadura de 23º para obtener excelente tracción en todo tipo de suelo', 'ForstTractionLug_full_320x480.png'),
(8, 'RADIAL 9000 EVOLUTION', 800, 'Diseñado para ofrecer rendimiento y durabilidad máximos.', 'Rad-9000_full_320x480.png'),
(10, 'RADIAL 7000', 900, 'Profundidad de banda de rodadura R-1W y barras de banda de rodadura de 45º para obtener mayor tracción en condiciones húmedas.', 'Radial7000_full_320x480.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `tittle`, `description`, `price`, `img`) VALUES
(1, 'Rim Repair', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae magna justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed a pellentesque justo. Sed semper quam sem, a sagittis nisi feugiat at. Donec nec ante at nisl auctor accumsan sit amet sit amet eros. Aenean semper volutpat massa, nec consectetur ex placerat iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 55, 'rim_repair.jpg'),
(2, 'Tire Repair', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae magna justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed a pellentesque justo. Sed semper quam sem, a sagittis nisi feugiat at. Donec ne', 30, 'tire_repair.jpg'),
(3, 'Refinishing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus sapien. Integer id purus tempor, tincidunt mauris et, accumsan leo. Curabitur efficitur tortor a felis sagittis facilisis. Fusce vitae auctor massa, vitae pharetra ante. Mauris nec nunc eu elit dapibus scelerisque. Cras sit amet tellus vitae odio posuere tempor id ac nisl. Aliquam luctus vitae felis nec varius. Suspendisse porta efficitur elit, eu auctor elit tempus a. Donec eget feugiat sem, sed cursus libero. ', 75, 'refinishing_rim.png');

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart`
--

CREATE TABLE `temp_cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Yasdani Brenes', 'yasdani.brenes@ulatina.net', '123'),
(2, 'Kevin Lethman', 'kevin.lethman@ulatina.net', '123'),
(3, 'Rodrigo Brenes', 'rodrigo.brenes1@ulatina.net', '123'),
(4, 'Jorge Wray Muñoz', 'wray.93@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_content`
--
ALTER TABLE `basic_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_cart`
--
ALTER TABLE `temp_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_content`
--
ALTER TABLE `basic_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
