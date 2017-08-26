-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-08-2017 a las 02:33:28
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pappcorn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Account`
--

CREATE TABLE `Account` (
  `type` varchar(45) DEFAULT NULL,
  `owner` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Account`
--




-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Bank`
--

CREATE TABLE `Bank` (
  `code` int(11) NOT NULL,
  `address` varchar(45) NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Bank`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Customer`
--

CREATE TABLE `Customer` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `Bank_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Customer`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DebitCard`
--

CREATE TABLE `DebitCard` (
  `cardno` int(11) NOT NULL,
  `ownedby` varchar(45) DEFAULT NULL,
  `Customer_id` int(11) NOT NULL,
  `Bank_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `Account_id` int(11) NOT NULL,
  `balance` decimal(14,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `DebitCard`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `value` decimal(14,3) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `DebitCard_cardno` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `transactions`
--



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Account_Customer1_idx` (`Customer_id`);

--
-- Indices de la tabla `Bank`
--
ALTER TABLE `Bank`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_UNIQUE` (`code`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Customer_Bank1_idx` (`Bank_id`);

--
-- Indices de la tabla `DebitCard`
--
ALTER TABLE `DebitCard`
  ADD PRIMARY KEY (`cardno`),
  ADD KEY `fk_DebitCard_Customer1_idx` (`Customer_id`),
  ADD KEY `fk_DebitCard_Bank1_idx` (`Bank_id`),
  ADD KEY `fk_DebitCard_Account1_idx` (`Account_id`);

--
-- Indices de la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transactions_Customer1_idx` (`Customer_id`),
  ADD KEY `fk_transactions_DebitCard1_idx` (`DebitCard_cardno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Account`
--
ALTER TABLE `Account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `Bank`
--
ALTER TABLE `Bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Account`
--
ALTER TABLE `Account`
  ADD CONSTRAINT `fk_Account_Customer1` FOREIGN KEY (`Customer_id`) REFERENCES `Customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Customer`
--
ALTER TABLE `Customer`
  ADD CONSTRAINT `fk_Customer_Bank1` FOREIGN KEY (`Bank_id`) REFERENCES `Bank` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `DebitCard`
--
ALTER TABLE `DebitCard`
  ADD CONSTRAINT `fk_DebitCard_Account1` FOREIGN KEY (`Account_id`) REFERENCES `Account` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DebitCard_Bank1` FOREIGN KEY (`Bank_id`) REFERENCES `Bank` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DebitCard_Customer1` FOREIGN KEY (`Customer_id`) REFERENCES `Customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_transactions_Customer1` FOREIGN KEY (`Customer_id`) REFERENCES `Customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transactions_DebitCard1` FOREIGN KEY (`DebitCard_cardno`) REFERENCES `DebitCard` (`cardno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
