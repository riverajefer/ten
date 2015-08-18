-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2015 a las 06:26:51
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ten`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_08_07_180536_create_registros_table', 1),
('2015_08_10_004013_create_table_sectores', 2),
('2015_08_10_205934_create_registros_table', 3),
('2015_08_18_001145_create_table_planes', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) unsigned NOT NULL,
  `plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detalles` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `plan`, `detalles`, `created_at`, `updated_at`) VALUES
(4, 'Web Plan Básico', '', '2015-08-18 05:54:39', '2015-08-18 05:54:39'),
(5, 'Web Plan Intermedio', '', '2015-08-18 05:54:59', '2015-08-18 05:54:59'),
(6, 'Web Plan Tienda Virtual', '', '2015-08-18 05:55:19', '2015-08-18 05:55:19'),
(7, 'Web Plan a la Medida', '', '2015-08-18 05:55:36', '2015-08-18 05:55:36'),
(8, 'Web Micrositio', '', '2015-08-18 05:55:54', '2015-08-18 05:55:54'),
(9, 'Aplicación Móbil', '', '2015-08-18 05:56:15', '2015-08-18 05:56:15'),
(10, 'Posicionamiento', '', '2015-08-18 05:56:26', '2015-08-18 05:56:26'),
(11, 'Vídeo', '', '2015-08-18 05:56:37', '2015-08-18 05:56:37'),
(12, 'Animación', '', '2015-08-18 05:56:42', '2015-08-18 05:56:42'),
(13, 'Diseño', '', '2015-08-18 05:56:51', '2015-08-18 05:56:51'),
(14, 'Promocionales', '', '2015-08-18 05:56:56', '2015-08-18 05:56:56'),
(15, 'Redes Sociales', '', '2015-08-18 05:57:08', '2015-08-18 05:57:08'),
(16, 'Animación 3D', '', '2015-08-18 06:19:37', '2015-08-18 06:19:37'),
(17, 'Aplicación Web', '', '2015-08-18 06:30:04', '2015-08-18 06:30:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(10) unsigned NOT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sector_id` int(11) NOT NULL,
  `encargado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `barrio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nivel_interes` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `servicio_interes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `empresa`, `email`, `sector_id`, `encargado`, `cargo`, `localidad`, `barrio`, `direccion`, `celular`, `telefono`, `extension`, `nivel_interes`, `mensaje`, `servicio_interes`, `observaciones`, `updated_at`, `created_at`) VALUES
(5, 'Muebles Junior', 'jefersonpatino@yahoo.es', 19, 'Maria', 'Empleada', 'Bosa', 'Marly', 'Calle Falsa 123', '3121212', '878787', '133', 'Alto', 'Envíar portafolio por correo', '4', 'Se mostró muy interesada', '2015-08-18 07:44:05', '2015-08-18 06:02:11'),
(6, 'OdontoFamily', 'angelitacas08@gmail.com', 21, 'Claudia', 'Comercial', 'Engativad', 'Vivero', 'Calle Falsa 123', '3121212', '878787', '123', 'Alto', 'Envíar portafolio por correo', '4', 'Observaciones', '2015-08-18 09:15:34', '2015-08-18 06:19:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE IF NOT EXISTS `sectores` (
  `id` int(10) unsigned NOT NULL,
  `sector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`id`, `sector`, `created_at`, `updated_at`) VALUES
(1, 'Ropa', '2015-08-10 07:16:38', '2015-08-10 07:16:38'),
(16, 'Calzado', '2015-08-10 23:35:01', '2015-08-10 23:35:29'),
(19, 'Muebles', '2015-08-18 05:57:38', '2015-08-18 05:57:38'),
(20, 'Bares', '2015-08-18 05:57:42', '2015-08-18 05:57:42'),
(21, 'Odontología', '2015-08-18 05:58:04', '2015-08-18 05:58:04'),
(22, 'Veterinaria', '2015-08-18 05:58:15', '2015-08-18 05:58:15'),
(23, 'Centro Médico', '2015-08-18 06:17:41', '2015-08-18 06:17:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `sectores`
--
ALTER TABLE `sectores`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
