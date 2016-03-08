-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2016 a las 20:56:11
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sapesys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfgtemas`
--

CREATE TABLE IF NOT EXISTS `cfgtemas` (
`id` int(10) unsigned NOT NULL,
  `tema_id` varchar(128) DEFAULT NULL,
  `cfg_name` varchar(128) DEFAULT NULL,
  `cfg_value` longtext
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cfgtemas`
--

INSERT INTO `cfgtemas` (`id`, `tema_id`, `cfg_name`, `cfg_value`) VALUES
(1, '0', 'page_about', 'Sobre nosotros'),
(2, '0', 'about_title', 'Sobre nosotros...'),
(3, '0', 'about_subtitle', 'Just an incredibly simple responsive site\r\ntemplate freebie by HTML5 UP.'),
(4, '0', 'about_content', 'Faucibus sed lobortis aliquam lorem blandit. Lorem eu nunc metus col. Commodo id in arcu ante lorem ipsum sed accumsan erarfyrtytryt prae'),
(5, '0', 'news_title', 'Noticias'),
(6, '0', 'news_content', 'Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum i'),
(7, '0', 'news_maxposts', '3'),
(8, '0', 'contact_title', 'Contacto'),
(9, '0', 'contact_content', 'Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum i'),
(10, '0', 'contact_email', 'asdasd@as.com'),
(11, '0', 'page_news', 'Noticias'),
(12, '0', 'page_contact', 'Contacto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE IF NOT EXISTS `config` (
`id` int(10) unsigned NOT NULL,
  `cfg_name` varchar(128) DEFAULT NULL,
  `cfg_value` longtext
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`id`, `cfg_name`, `cfg_value`) VALUES
(1, 'titulo', 'Oxigen'),
(2, 'descripcion', 'Diseño Gráfico'),
(3, 'nombre', 'Oxigen'),
(4, 'logo', '20'),
(5, 'tema', '0'),
(6, 'registro', '1'),
(7, 'url', 'http://localhost/poo/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
`id` int(10) unsigned NOT NULL,
  `url` varchar(512) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `url`) VALUES
(2, 'contenido/imagenes/7dfca4ccc7d7469197fa60558dfb45920300f2ad.jpg'),
(20, 'contenido/imagenes/a4370067dff1e286e853ce37af19136514d9a792.png'),
(31, 'contenido/imagenes/d6a993001b33310117890c49b1a639b711843d07.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
`id` int(10) unsigned NOT NULL,
  `titulo` varchar(128) DEFAULT NULL,
  `contenido` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(10) unsigned NOT NULL,
  `titulo` varchar(128) DEFAULT NULL,
  `contenido` text,
  `autor` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `img` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `contenido`, `autor`, `fecha`, `tags`, `img`) VALUES
(8, 'Ar3qrwq3er', 's&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd s&lt;fagwe4tg alksdj aslkdj a8sud aoisdj &ntilde;alksd ao8sd ', 1, '2016-03-06', '', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secadm`
--

CREATE TABLE IF NOT EXISTS `secadm` (
`id` int(10) unsigned NOT NULL,
  `titulo` varchar(128) DEFAULT NULL,
  `archivo` varchar(128) DEFAULT NULL,
  `padre` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `secadm`
--

INSERT INTO `secadm` (`id`, `titulo`, `archivo`, `padre`) VALUES
(1, 'Inicio', 'inicio.php', 1),
(2, 'Posts', NULL, 1),
(3, 'Listado', 'posts.php', 0),
(4, 'Agregar Post', 'addpost.php', 0),
(5, 'Usuarios', 'users.php', 1),
(6, 'Paginas', NULL, 1),
(7, 'Listado', 'pages.php', 0),
(8, 'Agregar Pagina', 'addpage.php', 0),
(9, 'Temas', NULL, 1),
(10, 'Cambiar Tema', 'temas.php', 0),
(11, 'Config. del Tema', 'temacfg.php', 0),
(12, 'Configuracion', 'cfg.php', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
`id` int(10) unsigned NOT NULL,
  `titulo` varchar(128) DEFAULT NULL,
  `descripcion` varchar(128) DEFAULT NULL,
  `autor` varchar(128) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `carpeta` varchar(64) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id`, `titulo`, `descripcion`, `autor`, `fecha`, `carpeta`) VALUES
(0, 'Readonly', NULL, '', '2016-02-26', 'readonly'),
(1, 'Oxigen', 'Tema de prueba para el sistema', 'Losotro pa''', '2016-03-30', 'oxigen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(10) unsigned NOT NULL,
  `usuario` varchar(14) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `img` int(11) DEFAULT NULL,
  `nombre` varchar(64) DEFAULT NULL,
  `apellido` varchar(64) DEFAULT NULL,
  `privilegio` int(11) DEFAULT NULL,
  `activo` int(11) NOT NULL,
  `bloqueado` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `email`, `img`, `nombre`, `apellido`, `privilegio`, `activo`, `bloqueado`) VALUES
(1, 'admin', 'admin', 'wacho@wacho.wacho', 2, 'Tu', 'Mama', 1, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cfgtemas`
--
ALTER TABLE `cfgtemas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secadm`
--
ALTER TABLE `secadm`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cfgtemas`
--
ALTER TABLE `cfgtemas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `config`
--
ALTER TABLE `config`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `paginas`
--
ALTER TABLE `paginas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `secadm`
--
ALTER TABLE `secadm`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
