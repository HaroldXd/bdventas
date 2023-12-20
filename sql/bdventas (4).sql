-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2023 a las 17:04:20
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabeceraventas`
--

CREATE TABLE `cabeceraventas` (
  `venta_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `nrodoc` varchar(12) NOT NULL,
  `total` float NOT NULL,
  `subtotal` float NOT NULL,
  `igv` float NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cabeceraventas`
--

INSERT INTO `cabeceraventas` (`venta_id`, `cliente_id`, `fecha_venta`, `tipo_id`, `nrodoc`, `total`, `subtotal`, `igv`, `estado`) VALUES
(34, 1, '2023-12-20', 2, '00200001', 12, 0, 0, 1),
(35, 2, '2023-12-20', 2, '00200001', 12, 0, 0, 1),
(36, 1, '2023-12-20', 2, '00200001', 48, 0, 0, 1),
(37, 1, '2023-12-20', 2, '00200001', 60, 0, 0, 1),
(38, 1, '2023-12-20', 1, '00100001', 12, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `descripcion`, `estado`) VALUES
(1, 'aa', 0),
(2, 'Non dicta.', 1),
(3, 'Et.', 1),
(4, 'Ut.', 1),
(5, 'Aut necessitatibus.', 1),
(6, 'Tempora.', 1),
(7, 'Dolorem non.', 1),
(8, 'Praesentium voluptatum.', 1),
(9, 'Numquam.', 1),
(10, 'Voluptas.', 1),
(11, 'Enim illum.', 1),
(12, 'Id quo.', 1),
(13, 'Sequi sunt.', 1),
(14, 'Aspernatur sed.', 1),
(15, 'Omnis qui.', 1),
(16, 'Quasi voluptate.', 1),
(17, 'Sint corporis.', 1),
(18, 'Atque.', 1),
(19, 'Voluptas est.', 1),
(20, 'Quia quia.', 1),
(21, '5124', 1),
(22, 'Ullam deserunt.', 1),
(23, 'Labore facilis.', 1),
(24, 'Autem.', 1),
(25, 'Mollitia.', 1),
(26, 'Aspernatur perspiciatis.', 1),
(27, 'Alias praesentium.', 1),
(28, 'Dolorum.', 1),
(29, 'Ipsum recusandae.', 1),
(30, 'Provident.', 1),
(31, 'Minima.', 1),
(32, 'Itaque veritatis.', 1),
(33, 'Eveniet.', 1),
(34, 'Voluptatibus exercitationem.', 1),
(35, 'Velit.', 1),
(36, 'Et minima.', 1),
(37, 'Autem.', 1),
(38, 'Facere.', 1),
(39, 'Autem.', 1),
(40, 'Enim.', 1),
(41, 'Quo ea.', 1),
(42, 'Accusantium.', 1),
(43, 'Quo rerum.', 1),
(44, 'Neque odit.', 1),
(45, 'Tenetur quia.', 1),
(46, 'Ut optio.', 1),
(47, 'Provident sint.', 1),
(48, 'Et.', 1),
(49, 'Odit.', 1),
(50, 'Impedit earum.', 1),
(51, 'Iste rerum.', 1),
(52, 'Voluptas.', 1),
(53, 'Quis omnis.', 1),
(54, 'Nisi.', 1),
(55, 'Voluptas.', 1),
(56, 'Ducimus est.', 1),
(57, 'At.', 1),
(58, 'In.', 1),
(59, 'Quis et.', 1),
(60, 'Ad.', 1),
(61, 'Architecto.', 1),
(62, 'Nuevo', 1),
(63, 'Usado', 1),
(64, 'Automovil', 1),
(65, 'Ban', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cliente_id` int(11) NOT NULL,
  `ruc_dni` varchar(11) NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cliente_id`, `ruc_dni`, `nombres`, `email`, `direccion`) VALUES
(1, '12345678', 'Jorge Campos', 'jcampos@hotmail.com', 'Los portales'),
(2, '87654321', 'Carlos Vasquez', 'cvasquez@gmail.com', 'Geranios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `id` int(11) NOT NULL,
  `venta_id` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalleventas`
--

INSERT INTO `detalleventas` (`id`, `venta_id`, `idproducto`, `precio`, `cantidad`) VALUES
(32, 34, 1, 12, 1),
(33, 35, 1, 12, 1),
(34, 36, 1, 12, 4),
(35, 37, 1, 12, 1),
(36, 37, 2, 12, 4),
(37, 38, 1, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_producto`
--

CREATE TABLE `detalle_producto` (
  `id_detalle` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `llantas` varchar(20) DEFAULT NULL,
  `garantia` varchar(50) DEFAULT NULL,
  `detalle` varchar(50) DEFAULT NULL,
  `idcolores` int(11) DEFAULT NULL,
  `idgaleria` int(11) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_producto`
--

INSERT INTO `detalle_producto` (`id_detalle`, `idproducto`, `llantas`, `garantia`, `detalle`, `idcolores`, `idgaleria`, `estado`) VALUES
(14, 14, 'asdaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', NULL, 14, 1),
(15, 15, 'asd', 'asd', 'asd', NULL, 15, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `iddistrito` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `idprovincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`iddistrito`, `nombre`, `idprovincia`) VALUES
(1, 'Ate', 1),
(2, 'Callao', 1),
(3, 'Moche', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `idgaleria` int(11) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `idgaleria`, `imagen`, `estado`) VALUES
(20, 14, 'images/featureds/1702532382-SC6443P4-M2WS1T-PE_Blanco (1).png', 0),
(22, 12, 'images/featureds/1702532533-SC6443P4-M2WS1T-PE_Blanco (1).png', 0),
(25, 14, 'images/featureds/1702533410-SC6443P4-M2WS1T-PE_Blanco (1).png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `tipo_id` int(11) NOT NULL,
  `numeracion` varchar(15) NOT NULL,
  `serie` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`tipo_id`, `numeracion`, `serie`) VALUES
(1, '00001', '001'),
(2, '00001', '002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  `idunidad` int(11) NOT NULL,
  `stock` float NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `descripcion`, `imagen`, `idcategoria`, `estado`, `idunidad`, `stock`, `precio`) VALUES
(13, 'aaaaaaaaaaaaa', 'images/featureds/1702476505-1699393143-2022-05-31 03_14_59-UNI_T_BLANCO (2).png', 2, '0', 3, 12, 121),
(14, 'GRAND SUPERVAN', 'images/featureds/1702538835-SC6443P4-M2WS1T-PE_Blanco (1) (1).png', 65, '1', 6, 13, 46.162),
(15, 'NEW CS15', 'images/featureds/1702478595-1699384523-2022-05-31 03_14_59-UNI_T_BLANCO (2).png', 64, '1', 6, 7, 48.087),
(16, 'UNIT-T', 'images/featureds/1702478756-1699384768-2022-05-31 03_16_03-UNI_T_GRIS_universo (1).png', 64, '1', 6, 9, 84.662),
(17, 'asasa', 'images/featureds/1702482491-SC6443P4-M2WS1T-PE_Blanco (1).png', 5, '0', 6, 12, 121),
(18, 'asasa', 'images/featureds/1702482617-SC6443P4-M2WS1T-PE_Blanco (1).png', 5, '0', 6, 12, 121),
(19, 'asasa', 'images/featureds/1702482631-SC6443P4-M2WS1T-PE_Blanco (1).png', 5, '0', 6, 12, 121),
(20, 'asasa', 'images/featureds/1702482733-SC6443P4-M2WS1T-PE_Blanco (1).png', 5, '0', 6, 12, 121),
(21, 'sasasasa', 'images/featureds/1702482933-SC6443P4-M2WS1T-PE_Blanco (1).png', 6, '0', 6, 12, 12),
(22, 'CARRO1', 'images/featureds/1702573385-SC6443P4-M2WS1T-PE_Blanco (1) (1).png', 64, '1', 6, 0, 12212),
(23, 'AUTO', 'images/featureds/1702573454-SC6443P4-M2WS1T-PE_Blanco (1).png', 5, '0', 6, 12, 1212210),
(24, 'asd', 'images/featureds/1702573934-SC6443P4-M2WS1T-PE_Blanco (1).png', 2, '0', 6, 0, 0),
(25, 'asd', 'images/featureds/1702574549-SC6443P4-M2WS1T-PE_Blanco (1).png', 2, '0', 6, 0, 0),
(26, 'SAasS', 'images/featureds/1702574561-SC6443P4-M2WS1T-PE_Blanco (1).png', 2, '0', 6, 0, 0),
(27, 'lubricante', 'images/featureds/1703004522-Captura de pantalla 2023-12-17 045013.png', 8, '0', 6, 12, 120),
(28, 'asdasd', 'images/featureds/1703004631-Captura de pantalla 2023-12-17 044907.png', 2, '0', 6, 12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos1`
--

CREATE TABLE `productos1` (
  `idproducto` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `idunidad` int(11) NOT NULL,
  `stock` float NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos1`
--

INSERT INTO `productos1` (`idproducto`, `descripcion`, `imagen`, `idcategoria`, `estado`, `idunidad`, `stock`, `precio`) VALUES
(1, 'asd', 'images/featureds/1703004686-Captura de pantalla 2023-12-17 045013.png', 2, 1, 6, 5, 12),
(2, 'asdasdasd', 'images/featureds/1703050716-Captura de pantalla 2023-12-17 044907.png', 2, 1, 6, 8, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `idprovincia` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`idprovincia`, `nombre`) VALUES
(1, 'Lima'),
(2, 'Trujillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idservicio` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `iddistrito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idservicio`, `nombre`, `iddistrito`) VALUES
(1, 'venta', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `idsucursal` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `idprovincia` int(11) NOT NULL,
  `iddistrito` int(11) NOT NULL,
  `idservicio` varchar(50) NOT NULL,
  `idhorario` varchar(50) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`idsucursal`, `descripcion`, `direccion`, `idprovincia`, `iddistrito`, `idservicio`, `idhorario`, `ubicacion`, `estado`) VALUES
(1, 'as', 'as', 2, 3, 'Ventas Servicio Tecnico', 'El he', '-8.0642048,-79.0528', 1),
(2, 'as', 'as', 1, 2, '\"Ventas\" \"Servicio Tecnico\"', 'assssssssssss', '-8.0642048,-79.0528', 1),
(3, 'a', 'a', 1, 2, '\"Ventas\" \"Servicio Tecnico\"', 'sasasa', '-8.069728589080214,-79.04228574066163', 1),
(4, 'La casa de la vieja', 'Av tu mama', 2, 3, '\"Ventas\" \"Servicio Tecnico\"', 'Lunes a viernes cuando se me de la regalada gana', '-8.080080266278713,-79.03579314843691', 1),
(5, 'asas', 'asasasasa', 1, 1, 'Ventas', 'sdsd', '34.435794212004,35.84571889769922', 1),
(6, 'asdasd', 'asdads', 1, 1, 'Servicio Tecnico', 'sdasda', '34.43466528763109,35.84424094117174', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `tipo_id` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`tipo_id`, `descripcion`) VALUES
(1, 'FACTURA'),
(2, 'BOLETA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `idunidad` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`idunidad`, `descripcion`, `estado`) VALUES
(1, 'paquete', 0),
(2, 'holaaa', 0),
(3, 'KG', 0),
(4, 'Capacidad', 0),
(5, '11 pasajeros', 0),
(6, 'Nuevo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'xbrekke@example.net', '2023-11-16 23:16:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BexbjP6qMedj0tPPXkORVmwnol4DdcphFgU9FafRZY1eagwAcjp83XryiVMD', '2023-11-16 23:16:16', '2023-11-16 23:16:16', 0),
(2, 'Davion Cormier', 'senger.rhianna@example.com', '2023-11-16 23:17:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6RF9af5T0y', '2023-11-16 23:17:23', '2023-11-16 23:17:23', 0),
(3, 'user', 'strosin.vidal@example.net', '2023-12-13 05:31:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XeKLa9JVMzSfPrSiJ5BMa0w8T8u9ldYMZAg5MzUhhhaay07CGFC8LgGpDur6', '2023-12-13 05:31:21', '2023-12-13 05:31:21', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabeceraventas`
--
ALTER TABLE `cabeceraventas`
  ADD PRIMARY KEY (`venta_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_producto`
--
ALTER TABLE `detalle_producto`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`iddistrito`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `productos1`
--
ALTER TABLE `productos1`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`idprovincia`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idservicio`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`idsucursal`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`idunidad`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cabeceraventas`
--
ALTER TABLE `cabeceraventas`
  MODIFY `venta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `detalle_producto`
--
ALTER TABLE `detalle_producto`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `iddistrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `parametros`
--
ALTER TABLE `parametros`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `productos1`
--
ALTER TABLE `productos1`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `idprovincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idservicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `idsucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `idunidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
