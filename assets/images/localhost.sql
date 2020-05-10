-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-05-2020 a las 19:43:39
-- Versión del servidor: 10.2.31-MariaDB-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `venatici_db`
--
CREATE DATABASE IF NOT EXISTS `venatici_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `venatici_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `about_us` text COLLATE utf8_spanish_ci NOT NULL,
  `mission` text COLLATE utf8_spanish_ci NOT NULL,
  `vision` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `about`
--

INSERT INTO `about` (`id_about`, `about_us`, `mission`, `vision`) VALUES
(1, 'Somos una compañía dedicada a contribuir en el desarrollo de emprendimientos tempranos y empresas que necesitan lograr su consolidación en la industria, aportando con servicios dedicados a las distintas etapas del ciclo de vida, comenzando con su constitución y formalización hasta la inteligencia comercial por medio de herramientas de marketing. Para esto contamos con un equipo de profesionales capacitados para entregar un servicio óptimo y dedicado a cada uno de nuestros clientes, acompañándolos y resolviendo todas sus necesidades.', 'Contribuir al desarrollo empresarial y de emprendimiento a través de la asesoría y soporte técnico que requieran para su crecimiento.', 'Queremos ser la mejor opción para aquellos emprendedores y empresarios que necesitan una mejora en marketing y posicionamiento a nivel nacional.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `address` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `phone_1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `phone_2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_maps` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_facebook` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_instagram` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id_contact`, `description`, `address`, `email_1`, `email_2`, `phone_1`, `phone_2`, `url_maps`, `url_facebook`, `url_instagram`) VALUES
(1, 'Mantente en contacto con nosotros, si deseas más información sobre alguno de nuestros servicios puedes ocupar nuestros canales de comunicación que tenemos a tu disposición y te responderemos a la brevedad.', 'Talca, Región del Maule - Chile', 'asesorias@venatici.cl', NULL, '+56 9 7358 6517', '+56 9 9911 1915', 'https://maps.google.com/maps?q=-35.4266305,-71.6661153&ie=UTF8&t=&z=15&iwloc=A&output=embed', 'https://www.facebook.com/venatici/', 'https://www.instagram.com/venaticiasesorias/?hl=es-la');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `details`
--

CREATE TABLE `details` (
  `id_details` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `check` tinyint(1) DEFAULT NULL,
  `id_plans_details` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `details`
--

INSERT INTO `details` (`id_details`, `description`, `check`, `id_plans_details`) VALUES
(1, 'Preparación de escrituras', 1, 1),
(2, 'Obtención de rut', 1, 1),
(3, 'Inicio de actividades', 1, 2),
(4, 'Obtención de clave', 1, 2),
(5, 'Instalación de certificado para facturación electrónica', 1, 2),
(6, 'Acreditación de domicilio y actividad', 1, 2),
(7, 'Proyectos Sociales - $150.000', 1, 3),
(8, 'Proyectos Corfo - $100.000', 1, 3),
(9, 'Imagen', 1, 4),
(10, 'Logotipo', 1, 4),
(11, 'Manejo de redes sociales', 1, 5),
(12, 'Publicaciones', 1, 5),
(13, 'Diseño Grafico', 1, 5),
(14, 'Google Ads', 0, 5),
(15, 'Fotografia', 0, 5),
(16, 'Seo', 0, 5),
(17, 'Community Manager', 0, 5),
(18, 'Manejo de redes sociales', 1, 6),
(19, 'Publicaciones', 1, 6),
(20, 'Diseño Grafico', 1, 6),
(21, 'Google Ads', 1, 6),
(22, 'Fotografia', 1, 6),
(23, 'Seo', 0, 6),
(24, 'Community Manager', 0, 6),
(25, 'Manejo de redes sociales', 1, 7),
(26, 'Publicaciones', 1, 7),
(27, 'Diseño Grafico', 1, 7),
(28, 'Google Ads', 1, 7),
(29, 'Fotografia', 1, 7),
(30, 'Seo', 1, 7),
(31, 'Community Manager', 1, 7),
(32, 'One Page - hasta 4 Secciones', 1, 8),
(33, '1 Banners Principales Animados', 1, 8),
(34, 'Adaptable a Cualquier Dispositivo', 1, 8),
(35, 'Enlace a Redes Sociales', 1, 8),
(36, 'Formulario de Contacto', 1, 8),
(37, 'Ubicación en Google Maps', 1, 8),
(38, 'Sitio Optimizado SEO para Google', 1, 8),
(39, 'Home + 5 Páginas Interiores', 1, 9),
(40, 'Galería de Imágenes', 1, 9),
(41, '2 Banners Principales Animados', 1, 9),
(42, 'Adaptable a Cualquier Dispositivo', 1, 9),
(43, 'Autoadministrable', 1, 9),
(44, 'Enlace a Redes Sociales', 1, 9),
(45, '1 Formularios de Contacto', 1, 9),
(46, 'Ubicación en Google Maps	', 1, 9),
(47, 'Mapa del Sitio Web', 1, 9),
(48, 'Sitio Optimizado SEO para Google', 1, 9),
(49, 'Home + 10 Páginas Interiores', 1, 10),
(50, 'Galería de Imágenes', 1, 10),
(51, '3 Banners Principales Animados', 1, 10),
(52, 'Adaptable a Cualquier Dispositivo', 1, 10),
(53, 'Autoadministrable 100%', 1, 10),
(54, 'Enlace a Redes Sociales', 1, 10),
(55, '2 Formularios de Contacto', 1, 10),
(56, 'Ubicación en Google Maps	', 1, 10),
(57, 'Mapa del Sitio Web', 1, 10),
(58, 'Sitio Optimizado SEO para Google', 1, 10),
(59, 'Capacitación Ingreso Contenido', 1, 10),
(60, 'Home + 15 Páginas Interiores', 1, 11),
(61, 'Galería de Imágenes', 1, 11),
(62, '3 Banners Principales Animados', 1, 11),
(63, 'Adaptable a Cualquier Dispositivo	', 1, 11),
(64, 'Autoadministrable 100%', 1, 11),
(65, 'Enlace a Redes Sociales', 1, 11),
(66, '4 Formularios de Contacto', 1, 11),
(67, 'Habilitación de Chat vía Web', 1, 11),
(68, 'Capacitación Ingreso Contenido', 1, 11),
(69, 'Ubicación en Google Maps', 1, 11),
(70, 'Mapa del Sitio Web', 1, 11),
(71, 'Sitio Optimizado SEO para Google', 1, 11),
(72, 'Configuración de 20 productos', 1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img`
--

CREATE TABLE `img` (
  `id_img` int(11) NOT NULL,
  `path` text COLLATE utf8_spanish_ci NOT NULL,
  `url` text COLLATE utf8_spanish_ci NOT NULL,
  `title` text COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `img`
--

INSERT INTO `img` (`id_img`, `path`, `url`, `title`, `description`, `status`) VALUES
(2, 'img-carousel-1.jpg', 'formaliza-tu-emprendimiento', 'Formaliza tu Emprendimiento', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus soluta minus vel fugit corrupti, labore dicta odit nostrum non, voluptates dignissimos commodi neque! Ipsam sapiente quasi asperiores reprehenderit, ut unde in autem incidunt quia consectetur tempora, voluptatum impedit distinctio molestias omnis laborum eveniet. Quisquam dicta tenetur velit laboriosam exercitationem harum molestias repellat animi est a voluptatem, at odio quas, autem possimus praesentium, laudantium aliquam natus. Modi, mollitia! Iste earum assumenda voluptatum ipsa culpa, reprehenderit eligendi alias nulla ex a, vel aliquam eius distinctio maiores et. Ducimus libero aperiam rerum, quam mollitia similique. Necessitatibus debitis vero aspernatur illum recusandae accusantium, aut ex, deleniti quibusdam ut, consequuntur magni enim ipsa veritatis commodi distinctio sit fugiat molestiae officiis quo modi accusamus. Nulla veniam, natus, repellat blanditiis nostrum alias cupiditate sunt officiis magni tempore soluta animi voluptas consequatur, sequi expedita molestias beatae facere dolorem iste odit nesciunt repudiandae? Natus porro et consequuntur rerum! Nulla.', 1),
(4, 'Emprende.png', 'atrevete-a-emprende', 'Atrévete a Emprender', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus soluta minus vel fugit corrupti, labore dicta odit nostrum non, voluptates dignissimos commodi neque! Ipsam sapiente quasi asperiores reprehenderit, ut unde in autem incidunt quia consectetur tempora, voluptatum impedit distinctio molestias omnis laborum eveniet. Quisquam dicta tenetur velit laboriosam exercitationem harum molestias repellat animi est a voluptatem, at odio quas, autem possimus praesentium, laudantium aliquam natus. Modi, mollitia! Iste earum assumenda voluptatum ipsa culpa, reprehenderit eligendi alias nulla ex a, vel aliquam eius distinctio maiores et. Ducimus libero aperiam rerum, quam mollitia similique. Necessitatibus debitis vero aspernatur illum recusandae accusantium, aut ex, deleniti quibusdam ut, consequuntur magni enim ipsa veritatis commodi distinctio sit fugiat molestiae officiis quo modi accusamus. Nulla veniam, natus, repellat blanditiis nostrum alias cupiditate sunt officiis magni tempore soluta animi voluptas consequatur, sequi expedita molestias beatae facere dolorem iste odit nesciunt repudiandae? Natus porro et consequuntur rerum! Nulla.', 1),
(5, 'Marketing.png', 'marketing-digital', 'Marketing Digital', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus soluta minus vel fugit corrupti, labore dicta odit nostrum non, voluptates dignissimos commodi neque! Ipsam sapiente quasi asperiores reprehenderit, ut unde in autem incidunt quia consectetur tempora, voluptatum impedit distinctio molestias omnis laborum eveniet. Quisquam dicta tenetur velit laboriosam exercitationem harum molestias repellat animi est a voluptatem, at odio quas, autem possimus praesentium, laudantium aliquam natus. Modi, mollitia! Iste earum assumenda voluptatum ipsa culpa, reprehenderit eligendi alias nulla ex a, vel aliquam eius distinctio maiores et. Ducimus libero aperiam rerum, quam mollitia similique. Necessitatibus debitis vero aspernatur illum recusandae accusantium, aut ex, deleniti quibusdam ut, consequuntur magni enim ipsa veritatis commodi distinctio sit fugiat molestiae officiis quo modi accusamus. Nulla veniam, natus, repellat blanditiis nostrum alias cupiditate sunt officiis magni tempore soluta animi voluptas consequatur, sequi expedita molestias beatae facere dolorem iste odit nesciunt repudiandae? Natus porro et consequuntur rerum! Nulla.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plans`
--

CREATE TABLE `plans` (
  `id_plans` int(11) NOT NULL,
  `title` text COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `cost` text COLLATE utf8_spanish_ci NOT NULL,
  `id_services_plans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plans`
--

INSERT INTO `plans` (`id_plans`, `title`, `description`, `cost`, `id_services_plans`) VALUES
(1, 'PLAN 1', 'SIN DESCRIPCIÓN', '$35.000', 1),
(2, 'PLAN 2', 'SIN DESCRIPCIÓN', '$50.000', 1),
(3, 'PLAN 3', 'SIN DESCRIPCIÓN', 'Asesorías', 1),
(4, 'PLAN 4', 'SIN DESCRIPCIÓN', 'Precio por convenir', 1),
(5, 'BÁSICO', 'SIN DESCRIPCIÓN', '$100.000', 2),
(6, 'MEDIO', 'SIN DESCRIPCIÓN', '$200.000', 2),
(7, 'FULL', 'SIN DESCRIPCIÓN', '$300.000', 2),
(8, 'BÁSICO', 'SIN DESCRIPCIÓN', 'desde $100.000', 3),
(9, 'MEDIO', 'SIN DESCRIPCIÓN', 'desde $200.000', 3),
(10, 'AVANZADO', 'SIN DESCRIPCIÓN', 'desde $270.000', 3),
(11, 'FULL AVANZADO', 'SIN DESCRIPCIÓN', 'desde $360.000', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programs`
--

CREATE TABLE `programs` (
  `id_programs` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `programs`
--

INSERT INTO `programs` (`id_programs`, `description`) VALUES
(1, 'Si buscas emprender o mejorar tu empresa, te asesoramos en la búsqueda y postulación de fondos concursables públicos o privados. Si lo tuyo es el desarrollo social te ayudamos a encontrar la forma de financiar tus proyectos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id_service` int(11) NOT NULL,
  `title` text COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `icon` text COLLATE utf8_spanish_ci NOT NULL,
  `path` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id_service`, `title`, `description`, `icon`, `path`) VALUES
(1, 'Inicio Emprende', 'Formalizamos tu empresa con la preparación de escritura y obtención de Rut, además de habilitarla ante el servicio de impuestos internos junto con la instalación de certificado digital para facturas y boletas.', 'fas fa-hands-helping fa-stack-1x fa-inverse', 'emprende'),
(2, 'Marketing Digital', 'Con esta herramienta posicionaremos su marca en redes sociales y en la web. Por medio de un servicio comunicacional integral desde la creación de su sitio hasta la gestión de sus redes sociales y el diseño de campañas.', 'fas fa-chart-bar fa-stack-1x fa-inverse', 'marketing'),
(3, 'Páginas Web', 'Consigue nuevos clientes desde internet y haz crecer tu negocio. Es el momento de tener tu propia página web. De calidad, orientada a tu público objetivo, con un diseño atractivo y con la información que tus clientes valoren.', 'fas fa-laptop-code fa-stack-1x fa-inverse', 'web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `mail`, `password`) VALUES
(1, 'soporte@coffeekode.cl', '8f6f291a41e76b9b3fb0e39f761c69dd'),
(2, 'contacto@coffeekode.cl', '8dfe5631dd17106a2ee4722ea06f8077'),
(3, 'venatici.asesorias@gmail.com', 'e67a87702771b50240a6403429f3d4e6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indices de la tabla `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id_details`),
  ADD KEY `fk_id_plans_details` (`id_plans_details`);

--
-- Indices de la tabla `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id_plans`),
  ADD KEY `fk_id_services_plans` (`id_services_plans`);

--
-- Indices de la tabla `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id_programs`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_service`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `details`
--
ALTER TABLE `details`
  MODIFY `id_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `img`
--
ALTER TABLE `img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `plans`
--
ALTER TABLE `plans`
  MODIFY `id_plans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `programs`
--
ALTER TABLE `programs`
  MODIFY `id_programs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `fk_id_plans_details` FOREIGN KEY (`id_plans_details`) REFERENCES `plans` (`id_plans`);

--
-- Filtros para la tabla `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `fk_id_services_plans` FOREIGN KEY (`id_services_plans`) REFERENCES `services` (`id_service`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
