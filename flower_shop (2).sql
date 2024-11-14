Create database  flower_shop

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `idv` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `categoria` (
  `idcat` int(11) NOT NULL,
  `nomcat` text NOT NULL,
  `estado` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;





INSERT INTO `categoria` (`idcat`, `nomcat`, `estado`, `fere`) VALUES
(1, 'bebes', '1', '2023-11-26 04:28:54'),
(2, 'Cumpleaños', '1', '2023-11-26 04:28:44'),
(3, 'Boxes', '1', '2023-11-26 04:25:34'),
(4, 'condolencias', '1', '2023-11-26 04:25:10');



CREATE TABLE `clientes` (
  `idclie` int(11) NOT NULL,
  `nomclie` text NOT NULL,
  `apeclie` text NOT NULL,
  `sexclie` text NOT NULL,
  `telclie` text NOT NULL,
  `correo` text NOT NULL,
  `clave` text NOT NULL,
  `rol` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `configuracion` (
  `idconfi` int(11) NOT NULL,
  `nomemp` text NOT NULL,
  `direcc` text NOT NULL,
  `rucem` text NOT NULL,
  `teleem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `configuracion` (`idconfi`, `nomemp`, `direcc`, `rucem`, `teleem`) VALUES
(1, 'Floreria Doña Beatriz Online', 'av larco 2517', '12548757858757', '996598757');



CREATE TABLE `orders` (
  `idord` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_cli` int(11) NOT NULL,
  `method` text NOT NULL,
  `total_products` text NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `placed_on` text NOT NULL,
  `payment_status` text NOT NULL,
  `tipc` text NOT NULL,
  `ourentre` text NOT NULL,
  `tiemp` text NOT NULL,
  `distri` text NOT NULL,
  `direcenvio` text NOT NULL,
  `refer` text NOT NULL,
  `deen` text NOT NULL,
  `paren` text NOT NULL,
  `mendedi` text NOT NULL,
  `idsit` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `productos` (
  `idpro` int(11) NOT NULL,
  `codpro` text NOT NULL,
  `nompro` text NOT NULL,
  `detpro` text NOT NULL,
  `stock` char(3) NOT NULL,
  `idcat` int(11) NOT NULL,
  `prec1` decimal(10,2) NOT NULL,
  `prec2` decimal(10,2) NOT NULL,
  `foto` text NOT NULL,
  `estado` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `productos` (`idpro`, `codpro`, `nompro`, `detpro`, `stock`, `idcat`, `prec1`, `prec2`, `foto`, `estado`, `fere`) VALUES
(1, 'f6TgqCHs2Qcj', 'CANASTA DE ROSAS Y MARGARITAS', 'Canasta de 9 rosas, margaritas y flores variadas.', '95', 2, 150.00, 100.00, '392708.png', '1', '2024-02-27 00:22:40'),
(2, 'y59Ygiec9Xjv', 'producto02', 'detalle09', '95', 2, 150.00, 200.00, '299494.png', '1', '2024-02-27 05:02:34'),
(3, 'zg7TmTQ3KiP7', 'producto999', 'ejemplo0099', '99', 4, 100.00, 120.00, '668281.png', '1', '2024-02-27 05:02:34');


CREATE TABLE `sitios` (
  `idsit` int(11) NOT NULL,
  `nomsi` text NOT NULL,
  `detsi` text NOT NULL,
  `precsiti` decimal(10,2) NOT NULL,
  `estado` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `slider` (
  `idsli` int(11) NOT NULL,
  `nomsl` text NOT NULL,
  `detas` text NOT NULL,
  `foto` text NOT NULL,
  `estado` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `slider` (`idsli`, `nomsl`, `detas`, `foto`, `estado`, `fere`) VALUES
(1, 'Bienvenido a Floreria Doña Beatriz Online', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '647244.png', '1', '2023-11-26 13:47:52'),
(2, 'Black friday', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '760364.png', '1', '2023-11-26 14:00:33'),
(3, 'Un dia especial comienza con girasoles', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '841459.png', '1', '2023-11-26 13:50:01');



CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `clave` text NOT NULL,
  `rol` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `correo`, `clave`, `rol`, `estado`, `fere`) VALUES
(1, 'admin012', 'administrador', 'admin01@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 1, '1', '2024-11-26 12:53:38');



--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idv`),
  ADD KEY `idpro` (`idpro`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcat`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idclie`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`idconfi`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idord`),
  ADD KEY `user_cli` (`user_cli`),
  ADD KEY `idsit` (`idsit`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idpro`),
  ADD KEY `idcat` (`idcat`);

--
-- Indices de la tabla `sitios`
--
ALTER TABLE `sitios`
  ADD PRIMARY KEY (`idsit`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`idsli`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idclie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `idconfi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `idord` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sitios`
--
ALTER TABLE `sitios`
  MODIFY `idsit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `idsli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `productos` (`idpro`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_cli`) REFERENCES `clientes` (`idclie`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`idsit`) REFERENCES `sitios` (`idsit`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `categoria` (`idcat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
