-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2016 a las 03:18:39
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bddenunciasmujer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `idCues` int(11) NOT NULL,
  `institucion` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `pregunta1` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r1` int(11) NOT NULL,
  `pregunta2` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r2` int(11) NOT NULL,
  `pregunta3` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r3` int(11) NOT NULL,
  `pregunta4` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r4` int(11) NOT NULL,
  `pregunta5` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r5` int(11) NOT NULL,
  `pregunta6` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r6` int(11) NOT NULL,
  `preugnta7` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r7` int(11) NOT NULL,
  `pregunta8` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r8` int(11) NOT NULL,
  `pregunta9` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r9` int(11) NOT NULL,
  `pregunta10` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `r10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `idInstitucion` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `horarioAtencion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `url` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `iframeDir` varchar(800) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idInstitucion`, `nombre`, `descripcion`, `direccion`, `horarioAtencion`, `telefono`, `url`, `img`, `iframeDir`) VALUES
(1, 'Centro de Informacion y Desarrollo de la Mujer', 'Es un Centro de informacion y desarrollo de la mujer, especialmente de las que son de escasos recursos.', 'C/ BoquerÃ³n 598 A, esq. Almirante Grau, edif. El Carmen 2, Mz., Zona San Pedro', 'lunes a viernes de 8:30 a 17:00', '249 0313 o 249 0358', 'http://www.cidem.org.bo/', 'https://lh3.googleusercontent.com/-PH3S8p_v-AA/Vi9Xp5mxqnI/AAAAAAAAJwc/5NmynJzhekQ/s448-Ic42/cidem-bolivia-informa-2015-reyqui.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.784298170178!2d-68.05785468464796!3d-38.9517558795624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x960a33d1136cbaa1%3A0xde999796172daf5c!2sCIDEM!5e0!3m2!1ses!2sbo!4v1466866323855" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(2, 'Fundacion La Paz', 'Se basa en el apoyo al desarrollo del criterio polÃ­tico de las mujeres ampliando sus conocimientos y prÃ¡cticas en temÃ¡ticas que les permitan ejercitar sus derechos.', 'Av. Tito Yupanqui 1205, esq. Fray BartolomÃ© de las Casas, Villa Copacabana', 'lunes a viernes de 8:30 a 16:30', '223 2276', 'http://www.coordinadoradelamujer.org.bo/web/index.php/afiliadas/mostrar/id/17', 'http://museoak.bizkaia.eus/fitxategiak/irudiak/22_5_2015__9_12_46_Museo%20Paz-5%20(Ajustados).jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.667943688653!2d-68.11968598499885!3d-16.492343144901536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2041b4b7dfe9%3A0x58efc5877daa2012!2sTito+Yupanqui+%26+Fray+Bartolome+de+las+Casas%2C+La+Paz%2C+Bolivia!5e0!3m2!1ses!2s!4v1466867230101" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(3, 'Sartasim Warmi', 'La Mision de las hermanas El Buen Pastor crean este con el objetivo de brindar asilo temporal, asistencial, espiritual y profesional a mujeres vÃ­ctimas de violencia intrafamiliar.', 'C/ Colombia 561, esq. BoquerÃ³n', 'lunes a viernes de 9:00 a 17:00', '705 45707', 'http://levantatemujer.org/construccion/index.php?option=com_content&view=article&id=3&Itemid=20', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.4393346585057!2d-68.13964648499855!3d-16.5039034452019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2079f46b4a29%3A0xd5ccbadf5b7ab98d!2sColombia+%26+Boqueron%2C+La+Paz%2C+Bolivia!5e0!3m2!1ses!2s!4v1466867335246" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(4, 'Centro de Promocion de Salud Integral (CEPROSI)', 'Es una organizaciÃ³n que trabaja con el compromiso social de promocionar la Salud Integral en las zonas periurbanas de la ciudad de La Paz.', 'C/ Colombia 561, esq. BoquerÃ³n, casilla 9352', 'lunes a viernes de 9:30 a 12:00 y de 15:30 a 18:00', '284 9200', 'http://www.ceprosi.org/', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.4411458342493!2d-68.13940308513583!3d-16.503811888613722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2079f7d9a22d%3A0x4e758f66dea68039!2sCEPROSI+(Centro+de+Promoci%C3%B3n+y+Salud+Integral)!5e0!3m2!1ses!2s!4v1466867394507" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(5, 'Comai Pachamama', 'Es un Colectivo de la mujer Indigena,Andina, Amazonica y Oriente que ayuda a fortalecer  el ejercicio de ciudadanÃ­a con derechos humanos, cÃ­vicos, sociales, polÃ­ticos, econÃ³micos y culturales que respondan a una plena participaciÃ³n ciudadana con derechos y deberes.', 'C/ Luis Braille 1714, cruce de Villa Copacabana', 'lunes a viernes de 8:30 a 17:00', '223 32 96 o 71905181', 'http://www.aipe.org.bo/sac/public/mostrar_plugin.php?symbolic_name=LST_AFILIADAS&id_plugin=11&lang=es&id_afiliada=27', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1912.7997874303517!2d-68.11775964376517!3d-16.495801244991352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f204233d4ddf9%3A0x7d7769caec9fe826!2sCruce+Villa+Copacabana!5e0!3m2!1ses!2s!4v1466867545315" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(6, 'DefensorÃ­a del Pueblo', 'Es  una instituciÃ³n pÃºblica al servicio del pueblo boliviano, referente de derechos humanos que contribuye a la construcciÃ³n del estado plurinacionalâ€ misiÃ³n. â€œconciencia comprometida por los derechos humanosâ€.', 'C/ Colombia 440 entre Gral. GonzÃ¡lez y Zoilo Flores, Zona San Pedro', 'lunes a viernes de 9:00 a 17 :00', '249 0044 o 249 0033', 'http://www.defensoria.gob.bo/', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.4654490990306!2d-68.13836438513584!3d-16.502583288614403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2070a76b5cfd%3A0x84ea753d269335e6!2sDefensor%C3%ADa+del+Pueblo!5e0!3m2!1ses!2s!4v1466867594944" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(7, 'Coordinadora de la Mujer', 'Es una red conformada por 21 organizaciones no gubernamentales con cobertura a nivel nacional,  genera procesos de interaprendizaje,Â  investigaciÃ³n y comunicaciÃ³n, orientados a desarrollar estrategias de incidencia polÃ­tica, para promover acciones de movilizaciÃ³n pÃºblica, control social, exigibilidad y justiciabilidad que influyan en un cambio de las condiciones de vida de las mujeres, en el ejercicio de sus derechos y en la generaciÃ³n de propuestas que incidan en el marco normativo yÂ  en las polÃ­ticas pÃºblicas.', 'Av. Arce 2132, edif. Illampu, piso 1, oficina A', 'lunes a viernes de 8:30 a 17:00', '244 4923', 'http://www.coordinadoradelamujer.org.bo/web/', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.2617098199134!2d-68.12309988499842!3d-16.51288014543517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f208a976c16d3%3A0xfebbb7638c34a621!2sAv.+Arce+2132%2C+La+Paz%2C+Bolivia!5e0!3m2!1ses!2s!4v1466868313906" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(8, 'SubalcaldÃ­a - Centro', 'Unidad de Desarrollo Humano y Cultura Ciudadana.', 'C/ Colombia esq. Av. Mariscal Santa Cruz', 'lunes a viernes de 8:30 a 12:00 y de 14:30 a 19:00', '233 6546', 'http://www.lapaz.bo/index.php?option=com_content&view=category&id=225&Itemid=586', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239.09440310474073!2d-68.13418639518578!3d-16.500308145108445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2070586ea0c7%3A0xc8d523ffa8b14c24!2sCasco+Urbano+Central%2C+La+Paz%2C+Bolivia!5e0!3m2!1ses!2s!4v1466867107867" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(9, 'SubalcaldÃ­a - Cotahuma', 'Unidad de Desarrollo Humano y Cultura Ciudadana.', 'Av. Jaime Freyre esq. Jaime ZudaÃ±es', ' lunes a viernes de 8:30 A 17:00', '2419674 â€“ 2651050', 'http://www.lapaz.bo/index.php?option=com_content&view=category&id=224&Itemid=586', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.304268822287!2d-68.14006307080774!3d-16.515135113510716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20808c2a8361%3A0xc03625c4432ae299!2sJaimes+Freyre+%26+Jaime+Zuda%C3%B1es%2C+La+Paz%2C+Bolivia!5e0!3m2!1ses!2s!4v1466869772275" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(10, 'Subalcaldia- Hampaturi', 'Unidad de Desarrollo Humano y Cultura Ciudadana.', 'Av. las AmÃ©ricas 709 Villa FÃ¡tima', 'lunes a viernes, de 8:30 a 16:30 (horario continuado)', '2213587', 'http://www.lapaz.bo/index.php?option=com_content&view=category&id=220&Itemid=586', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.805306307308!2d-74.12030978517234!3d4.6287969435655585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f997f068909f3%3A0x489c6fcdf51d1229!2sAv.+de+Las+Am%C3%A9ricas%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses!2s!4v1466870005220" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(11, 'Subalcaldia- Mallasa', 'Unidad de Desarrollo Humano y Cultura Ciudadana.', 'Avenida HernÃ¡n Siles, esquina calle Nro. 7 de Mallasa', 'lunes a viernes de 8:30 a 12:00 y de 14:30 a 19:00', '2745156', 'http://www.lapaz.bo/index.php?option=com_content&view=category&id=221&Itemid=586', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.0063622554944!2d-68.11116298499815!3d-16.525776445770646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20ef14852673%3A0x622d799beb34d525!2sObrajes%2C+La+Paz%2C+Bolivia!5e0!3m2!1ses!2s!4v1466870249244" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(12, 'Subalcaldia- Max Paredes', 'Unidad de Desarrollo Humano y Cultura Ciudadana.', 'Av. Buenos Aires, esq. Av. Max Paredes', 'lunes a viernes de 8:30 a 12:00 y de 14:30 a 19:00', '245 4553', 'http://www.lapaz.bo/index.php?option=com_content&view=category&id=223&Itemid=586', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.5861746691917!2d-68.14663398499866!3d-16.496478945008985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf8a6b1029c1%3A0xb210018fc77ad421!2sAv.+Buenos+Aires+%26+Max+Paredes%2C+La+Paz+Zona+9%2C+Bolivia!5e0!3m2!1ses!2s!4v1466870462055" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(13, 'Subalcaldia- Periferica', 'Unidad de Desarrollo Humano y Cultura Ciudadana.', 'Avenida Montes esquina Calle Uruguay â€“ Edificio Nardin Rivas', 'lunes a viernes, de 8:30 a 12:00 y de 14:30 a 19:00', '2461312', 'http://www.lapaz.bo/index.php?option=com_content&view=category&id=218&Itemid=586', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.4227295639004!2d-68.13991619250278!3d-16.491180931443175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x58d7038d2a6d0abd!2sDistribuidor+DURALIT!5e0!3m2!1ses!2s!4v1466871399290" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(14, 'Subalcaldia- San Antonio', 'Unidad de Desarrollo Humano y Cultura Ciudadana.', 'Alto San Antonio, Av. Josefa Mujia, una cuadra antes de llegar a la Parada del Micro Q', ' lunes a viernes de 8:30 a 12:00 y de 14:30 a 19:00', '2232084', 'http://www.lapaz.bo/index.php?option=com_content&view=category&id=217&Itemid=586', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.5119183101256!2d-68.11016388513589!3d-16.50023388861587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f205aaf77cbe9%3A0x86b0f169f19a6341!2sSub+alcaldia+San+Antonio!5e0!3m2!1ses!2s!4v1466871520623" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(15, 'Subalcaldia- Zona Sur', 'Unidad de Desarrollo Humano y Cultura Ciudadana.', 'Sub. Sur, Avenida Hernando Siles NÂº 4678, entre calles 11 y 12 de Obrajes', 'lunes a viernes de 8:30 a 12:00 y de 14:30 a 19:00', '2783631', 'http://www.lapaz.bo/index.php?option=com_content&view=category&id=222&Itemid=586', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.9790099943916!2d-68.10746238513553!3d-16.527157288599426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20e677cd712b%3A0xba5c2470907b5b10!2sSubAlcaldia+Zona+Sur!5e0!3m2!1ses!2s!4v1466871599963" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(16, 'Brigada de Proteccion a la Faminia', 'Es una Unidad especializada encargada de la prevension, proteccion,auxilio e investigaciÃ³n de los casos de violencia familiar o domÃ©stica que pueden constituir faltas, contravenciones o delitos conexos a otras formas delictivas tipificadas en las leyes que establecen la Base Legal y otras normas relacionadas  con la familia, niÃ±os, adolescentes, discapacitados y adultos mayores. ', 'Av. Sucre esq. Calle BolÃ­var, edif. F.E.L.C.C.', 'las 24 horas.', '228 5495 â€“ 228 221', 'http://www.bivica.org/upload/brigada-proteccion-familia.pdf', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.631193790064!2d-68.13423488499868!3d-16.494202044949855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f207263501635%3A0x55ef41ab8656867a!2sSucre+%26+C.Bolivar%2C+La+Paz+Zona+2%2C+Bolivia!5e0!3m2!1ses!2s!4v1466872791196" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(17, 'Mujeres Creando', 'Mujeres Creando es un movimiento feminista anarquista boliviano, que actÃºa desde la creatividad como un espacio de lucha. Se oponen al sistema patriarcal.', 'Calle 20 de Octubre # 2060 (entre Aspiazu y J.J. PÃ©rez)', 'lunes a viernes de 8:30 a 18:00', '2413764', 'http://www.mujerescreando.org/', 'http://www.mujerescreando.org/img/mc-a_01.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1912.6908429248772!2d-68.13113745236096!3d-16.506817387179492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2064a3184da5%3A0x7649841720aec7bd!2sVirgen+de+los+Deseos+(La+casa+de+Mujeres+Creando)!5e0!3m2!1ses!2s!4v1466865650306" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `review`
--

CREATE TABLE `review` (
  `idReview` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `historia` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `Institucion` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `review`
--

INSERT INTO `review` (`idReview`, `titulo`, `historia`, `puntuacion`, `Institucion`, `usuario`, `fecha`) VALUES
(1, 'ab', 'cd', 3, 1, 5, '2016-06-26 00:42:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdeservicio`
--

CREATE TABLE `tiposdeservicio` (
  `institucion` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tiposdeservicio`
--

INSERT INTO `tiposdeservicio` (`institucion`, `idServicio`, `tipo`, `fecha`) VALUES
(1, 1, 'legal', '2016-06-26 02:00:34'),
(1, 2, 'psicologico', '2016-06-26 02:00:34'),
(1, 3, 'social', '2016-06-26 02:01:01'),
(2, 4, 'legal', '2016-06-26 02:02:04'),
(2, 5, 'psicologico', '2016-06-26 02:02:04'),
(2, 6, 'social', '2016-06-26 02:02:18'),
(3, 7, 'legal', '2016-06-26 02:09:26'),
(3, 8, 'psicologico', '2016-06-26 02:09:26'),
(3, 9, 'social', '2016-06-26 02:09:40'),
(4, 10, 'legal', '2016-06-26 02:10:27'),
(4, 11, 'psicologico', '2016-06-26 02:10:27'),
(5, 12, 'legal', '2016-06-26 02:11:24'),
(5, 13, 'psicologico', '2016-06-26 02:11:24'),
(6, 14, 'legal', '2016-06-26 02:11:58'),
(7, 15, 'legal', '2016-06-26 02:14:15'),
(7, 16, 'social', '2016-06-26 02:14:15'),
(8, 19, 'legal', '2016-06-26 02:24:59'),
(8, 20, 'social', '2016-06-26 02:24:59'),
(9, 21, 'legal', '2016-06-26 02:25:30'),
(9, 22, 'social', '2016-06-26 02:25:30'),
(10, 23, 'legal', '2016-06-26 02:26:03'),
(10, 24, 'social', '2016-06-26 02:26:03'),
(11, 25, 'legal', '2016-06-26 02:27:16'),
(11, 26, 'social', '2016-06-26 02:27:16'),
(12, 27, 'legal', '2016-06-26 02:27:43'),
(12, 28, 'social', '2016-06-26 02:27:43'),
(13, 30, 'legal', '2016-06-26 02:33:44'),
(13, 31, 'social', '2016-06-26 02:33:44'),
(14, 32, 'legal', '2016-06-26 02:34:16'),
(14, 33, 'social', '2016-06-26 02:34:16'),
(15, 34, 'legal', '2016-06-26 02:34:43'),
(15, 35, 'social', '2016-06-26 02:34:43'),
(16, 36, 'legal', '2016-06-26 02:36:56'),
(16, 37, 'social', '2016-06-26 02:36:56'),
(16, 38, 'psicologico', '2016-06-26 02:37:13'),
(17, 39, 'legal', '2016-06-26 02:38:41'),
(17, 40, 'psicologico', '2016-06-26 02:38:41'),
(17, 41, 'social', '2016-06-26 02:38:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `contrasenia` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaCr` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rol` varchar(3) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `contrasenia`, `username`, `fechaCr`, `nombre`, `correo`, `rol`) VALUES
(1, 'yttyyfg', 'eqwew', '2016-06-25 17:24:04', '', '', 'U'),
(2, 'dsfdafas', '1234', '2016-06-25 17:24:45', 'dasdasfas', 'EWQ@SFASFASD.CASDAS', 'U'),
(3, '21312', '21321', '2016-06-25 17:26:58', '32132', '', 'U'),
(4, 'ewqeqw', 'ewqe', '2016-06-25 17:28:26', 'ewqe', '', 'U'),
(5, 'a', 'b', '2016-06-25 18:04:20', 'c', 'w92091229@yahoo.es', 'U'),
(6, 'X', 'Y', '2016-06-25 18:15:42', 'Z', 'EWQE@SAFAS.CS', 'U'),
(7, 'X', 'y', '2016-06-25 21:47:50', '', '', 'U');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`idCues`),
  ADD KEY `institucion` (`institucion`,`usuario`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`idInstitucion`);

--
-- Indices de la tabla `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`idReview`),
  ADD KEY `Institucion` (`Institucion`,`usuario`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `tiposdeservicio`
--
ALTER TABLE `tiposdeservicio`
  ADD PRIMARY KEY (`idServicio`),
  ADD KEY `institucion` (`institucion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `idCues` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `idInstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `review`
--
ALTER TABLE `review`
  MODIFY `idReview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tiposdeservicio`
--
ALTER TABLE `tiposdeservicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD CONSTRAINT `cuestionario_ibfk_1` FOREIGN KEY (`institucion`) REFERENCES `institucion` (`idInstitucion`),
  ADD CONSTRAINT `cuestionario_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`Institucion`) REFERENCES `institucion` (`idInstitucion`);

--
-- Filtros para la tabla `tiposdeservicio`
--
ALTER TABLE `tiposdeservicio`
  ADD CONSTRAINT `tiposdeservicio_ibfk_1` FOREIGN KEY (`institucion`) REFERENCES `institucion` (`idInstitucion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
