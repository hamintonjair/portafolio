-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2025 a las 15:22:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portafolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `git` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `youtube` varchar(200) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `frase` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `titulo`, `descripcion`, `imagen`, `facebook`, `git`, `linkedin`, `instagram`, `youtube`, `telefono`, `correo`, `frase`) VALUES
(1, 'Ingeniero de Sistemas y Desarrollador PHP', '<p data-start=\"0\" data-end=\"354\"><em>&iexcl;Hola! Mi nombre es<strong> Haminton Mena</strong>, soy Ingeniero de Sistemas y Desarrollador de Software con m&aacute;s de 10 a&ntilde;os de experiencia en el &aacute;mbito tecnol&oacute;gico. Tengo un amplio conocimiento en PHP y el framework CodeIgniter, adem&aacute;s de experiencia en herramientas como Inteligencia Artificial, Python, Angular, GitHub, Ajax y JavaScript etc.</em></p>\r\n<p data-start=\"356\" data-end=\"644\" data-is-last-node=\"\"><em>Me especializo en desarrollo de software, soporte t&eacute;cnico, ciberseguridad y gesti&oacute;n de proyectos. Soy una persona resolutiva, din&aacute;mica y anal&iacute;tica, con gran capacidad para diagnosticar y solucionar problemas t&eacute;cnicos, dise&ntilde;ar interfaces intuitivas y escribir c&oacute;digo eficient</em>e.</p>\r\n<p style=\"text-align: justify;\"><em>He trabajado en roles como Desarrollador de Software, Soporte T&eacute;cnico, L&iacute;der de Apoyo Local y Docente de Inform&aacute;tica, lo que me ha permitido desarrollar habilidades t&eacute;cnicas y blandas como el trabajo en equipo, la comunicaci&oacute;n efectiva y la adaptabilidad a entornos desafiantes. Adem&aacute;s, cuento con formaci&oacute;n complementaria en Inteligencia Artificial, Ciberseguridad, Marketing Digital y Data Science, lo que me permite abordar proyectos desde una perspectiva integral e innovadora.</em></p>\r\n<p style=\"text-align: justify;\"><em>Mi objetivo es seguir creciendo profesionalmente en el campo de la programaci&oacute;n y la tecnolog&iacute;a, aplicando soluciones innovadoras que contribuyan al &eacute;xito de las organizaciones. Busco un puesto que me permita seguir desarrollando mis habilidades t&eacute;cnicas y de liderazgo, aportando valor a trav&eacute;s de mi experiencia y pasi&oacute;n por la tecnolog&iacute;a.</em></p>\r\n<p><strong>Habilidades Clave</strong><br><strong><em>Desarrollo de Software: </em></strong>Experiencia en PHP, Python, Java, Angular, Inteligencia Artificial y AWS.<br><em><strong>Soporte T&eacute;cnico:</strong></em> Montaje de sistemas operativos, mantenimiento preventivo y correctivo, redes y configuraci&oacute;n de aplicativos.<br><strong><em>Ciberseguridad: </em></strong>Conocimientos en an&aacute;lisis de vulnerabilidades, hacking &eacute;tico y derecho en ciberseguridad.<br><strong><em>Inteligencia Artificial:</em></strong> Manejo de herramientas y frameworks para Data Science, incluyendo Python, pandas, numpy y matplotlib.<br><strong><em>Marketing Digital:</em></strong> Estrategias de contenido, SEO, Google Ads y automatizaci&oacute;n con ChatGPT.<br><strong><em>Habilidades Blandas: </em></strong>Trabajo en equipo, comunicaci&oacute;n efectiva, resoluci&oacute;n de problemas y adaptabilidad.</p>\r\n<p><strong>Formaci&oacute;n Complementaria</strong><br>Bootcamp en Inteligencia Artificial (Cymetria, 2024)<br>Fundamentos de Ciberseguridad (Google, 2024)<br>Desarrollo de Aplicaciones en Python y AWS (Coursera, 2024)<br>Data Science e Inteligencia Artificial (Universidad de Antioquia, 2023)<br>Marketing Digital (Universidad de Antioquia, 2023)<br>Ciberseguridad (Universidad de Antioquia, 2023)<br>Programaci&oacute;n Web (Universidad de Antioquia, 2023)</p>\r\n<p style=\"text-align: justify;\"><strong>Objetivo Profesional</strong><br><em>Busco un puesto desafiante en el &aacute;rea de desarrollo de software, ciberseguridad o inteligencia artificial, donde pueda aplicar mis conocimientos t&eacute;cnicos y habilidades de liderazgo para contribuir al crecimiento de la organizaci&oacute;n. Mi enfoque est&aacute; en la innovaci&oacute;n, la mejora continua y el trabajo colaborativo para alcanzar resultados de alto impacto. 😊</em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>', 'foto.jpg', 'https://www.facebook.com/DeveloperJojama?mibextid=ZbWKwL', 'https://github.com/hamintonjair?tab=repositories', 'https://www.linkedin.com/in/haminton-mena-mena-haminton', 'https://www.instagram.com/the_beautifull_pretty?igsh=M3BpcDRkbWN3d3I4', 'https://youtube.com/@DeveloperJojama?si=8wAxBa3_dBBgwj4E', '3124943527', 'ing.haminton@outlook.com', 'Intenta hacer pequeños logros todos los días. Si lo haces así, imagínate lo que lograrás en un mes... en un año... en una vida...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `url_demo` varchar(255) NOT NULL,
  `anio_desarrollo` int(11) NOT NULL,
  `tipo_proyecto` varchar(100) NOT NULL,
  `tecnologias` text NOT NULL,
  `url_repo` varchar(200) NOT NULL,
  `url_youtube` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `titulo`, `descripcion`, `imagen`, `url_demo`, `anio_desarrollo`, `tipo_proyecto`, `tecnologias`, `url_repo`, `url_youtube`) VALUES
(1, 'BookApp Example', 'Este proyecto recrea la experiencia de una aplicación de libros electrónicos utilizando React Native. Es una opción cómoda para disfrutar de la lectura en dispositivos móviles.', '1.png', 'https://efi-conta.soybeneficiario.org/', 2021, 'Web', 'PHP, CODEIGNITER 3, AJAX, JAVASCRIPT, HTML, BOTSTRAP, CSS', 'https://github.com/hamintonjair/Pos_venta', ''),
(2, 'The MovieDB App', 'Esta aplicación permite buscar y explorar películas utilizando el API de TheMovieDB. Proporciona detalles completos sobre el elenco, la trama y las críticas, todo desde la comodidad del dispositivo móvil.\r\nEsta aplicación permite buscar y explorar películas utilizando el API de TheMovieDB. Proporciona detalles completos sobre el elenco, la trama y las críticas, todo desde la comodidad del dispositivo móvil.\r\nEsta aplicación permite buscar y explorar películas utilizando el API de TheMovieDB. Proporciona detalles completos sobre el elenco, la trama y las críticas, todo desde la comodidad del dispositivo móvil.\r\nEsta aplicación permite buscar y explorar películas utilizando el API de TheMovieDB. Proporciona detalles completos sobre el elenco, la trama y las críticas, todo desde la comodidad del dispositivo móvil.', '1739641145_c28f7dfc59fe37dd228c.png', 'https://efi-conta.soybeneficiario.org', 2021, 'Web', 'PHP, CODEIGNITER 3, AJAX, JAVASCRIPT, HTML, BOTSTRAP, CSS', 'https://github.com/hamintonjair/Pos_venta', ''),
(6, 'The MovieDB App', 'prueba', '1739637639_fd0efcdd90daa5e3308d.jpg', 'https://efi-conta.soybeneficiario.org', 2021, 'Web', 'PHP, CODEIGNITER 3, AJAX, JAVASCRIPT, HTML, BOTSTRAP, CSS', 'https://github.com/hamintonjair/Pos_venta', ''),
(7, 'The MovieDB', 'prueba', '1739637685_4657d485e062915099e5.avif', 'https://efi-conta.soybeneficiario.org', 2021, 'Web', 'PHP, CODEIGNITER 3, AJAX, JAVASCRIPT, HTML, BOTSTRAP, CSS', 'https://github.com/hamintonjair/Pos_venta', 'https://youtu.be/vr-OIhnTtmc?si=Y3sBUlnQ18xPWvp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$hgYewTiSR0y.qoh68.RW6OEwUcEHpkmVr0quoM6avkgW6nW6XEu12', '2025-02-14 20:30:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
