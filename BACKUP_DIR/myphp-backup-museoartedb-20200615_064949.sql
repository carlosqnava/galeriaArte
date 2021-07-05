CREATE DATABASE IF NOT EXISTS `museoartedb`;

USE `museoartedb`;

SET foreign_key_checks = 0;

DROP TABLE IF EXISTS `artista`;

CREATE TABLE `artista` (
  `idobj` int(11) NOT NULL,
  `nomArt` varchar(25) DEFAULT NULL,
  `fechNacArt` date DEFAULT NULL,
  `epocArt` varchar(25) DEFAULT NULL,
  `fechDefArt` date DEFAULT NULL,
  `estArt` varchar(30) DEFAULT NULL,
  `paisArt` varchar(25) DEFAULT NULL,
  KEY `fk_art_obj` (`idobj`),
  CONSTRAINT `fk_art_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `artista` VALUES (1,"Miguel Cervantes","1547-09-29","Clasica","1616-04-22","Colonial","España"),
(2,"Leonardo Da Vinci","1452-04-15","Renacimiento","1519-05-02","barroco","Italia"),
(3,"Antonio Machado","1875-07-26","Actual","1939-02-22","Moderno","España"),
(6,"Leonardo Da Vinci","1452-04-15","Renacimiento","1519-05-02","renacentista","italia");


DROP TABLE IF EXISTS `bitacora`;

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operacion` varchar(10) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `host` varchar(30) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  `tabla` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;

INSERT INTO `bitacora` VALUES (1,"Insertar","root","localhost","2020-06-11 22:45:05","Objeto Arte"),
(2,"Insertar","root","localhost","2020-06-11 23:26:15","Objeto Arte"),
(3,"Insertar","root","localhost","2020-06-11 23:27:35","Objeto Arte"),
(4,"Insertar","root","localhost","2020-06-11 23:38:59","Objeto Arte"),
(5,"Insertar","root","localhost","2020-06-12 00:00:39","Objeto Arte"),
(6,"Insertar","root","localhost","2020-06-12 00:02:49","Objeto Arte"),
(7,"Insertar","root","localhost","2020-06-12 07:21:06","Objeto Arte"),
(8,"Insertar","root","localhost","2020-06-12 07:55:25","Coleccion Permanente"),
(9,"Insertar","root","localhost","2020-06-12 07:56:32","Coleccion Permanente"),
(10,"Insertar","root","localhost","2020-06-12 08:03:52","Coleccion Prestamo"),
(11,"Insertar","root","localhost","2020-06-12 08:58:48","Escultura"),
(12,"Insertar","root","localhost","2020-06-12 08:59:49","Escultura"),
(13,"Insertar","root","localhost","2020-06-12 09:04:11","Estatua"),
(14,"Insertar","root","localhost","2020-06-12 09:04:48","Estatua"),
(15,"Insertar","root","localhost","2020-06-12 09:15:44","Exhibicion"),
(16,"Insertar","root","localhost","2020-06-12 09:16:10","Exhibicion"),
(17,"Insertar","root","localhost","2020-06-12 09:41:54","Pintura"),
(18,"Insertar","root","localhost","2020-06-12 09:45:36","Otro"),
(19,"Insertar","root","localhost","2020-06-12 09:54:04","Pintura"),
(20,"Insertar","root","localhost","2020-06-12 10:01:42","Objeto Arte"),
(21,"Insertar","root","localhost","2020-06-12 10:07:02","Exhibicion"),
(22,"Insertar","root","localhost","2020-06-12 10:08:42","Estatua"),
(23,"Insertar","root","localhost","2020-06-12 10:12:47","Escultura"),
(24,"Insertar","root","localhost","2020-06-12 10:16:20","Coleccion Prestamo"),
(25,"Insertar","root","localhost","2020-06-12 10:20:26","Coleccion Permanente"),
(26,"Eliminacio","root","localhost","2020-06-13 19:05:02","Artista"),
(27,"Eliminacio","root","localhost","2020-06-14 22:47:34","Objeto Arte"),
(28,"Eliminacio","root","localhost","2020-06-14 22:47:36","Objeto Arte"),
(29,"Eliminacio","root","localhost","2020-06-14 22:47:39","Objeto Arte"),
(30,"Eliminacio","root","localhost","2020-06-14 22:47:41","Objeto Arte"),
(31,"Eliminacio","root","localhost","2020-06-14 22:47:43","Objeto Arte"),
(32,"Eliminacio","root","localhost","2020-06-14 22:47:45","Objeto Arte"),
(33,"Eliminacio","root","localhost","2020-06-14 22:47:47","Objeto Arte"),
(34,"Eliminacio","root","localhost","2020-06-14 22:47:50","Objeto Arte"),
(35,"Eliminacio","root","localhost","2020-06-14 22:48:08","Exhibicion"),
(36,"Eliminacio","root","localhost","2020-06-14 22:48:11","Exhibicion"),
(37,"Eliminacio","root","localhost","2020-06-14 22:48:12","Exhibicion"),
(38,"Insertar","root","localhost","2020-06-14 22:53:54","Objeto Arte"),
(39,"Eliminacio","root","localhost","2020-06-14 22:55:02","Objeto Arte"),
(40,"Insertar","root","localhost","2020-06-14 22:57:08","Objeto Arte"),
(41,"Insertar","root","localhost","2020-06-14 22:57:59","Objeto Arte"),
(42,"Insertar","root","localhost","2020-06-14 23:00:03","Objeto Arte"),
(43,"Insertar","root","localhost","2020-06-14 23:31:47","Objeto Arte"),
(44,"Insertar","root","localhost","2020-06-14 23:33:17","Objeto Arte"),
(45,"Insertar","root","localhost","2020-06-14 23:34:29","Objeto Arte"),
(46,"Eliminacio","root","localhost","2020-06-14 23:38:49","Artista"),
(47,"Eliminacio","root","localhost","2020-06-14 23:38:49","Artista");


DROP TABLE IF EXISTS `colpermanente`;

CREATE TABLE `colpermanente` (
  `idobj` int(11) NOT NULL,
  `fechAdq` date DEFAULT NULL,
  `estado` varchar(35) DEFAULT NULL,
  `costo` double DEFAULT NULL,
  KEY `fk_colP_obj` (`idobj`),
  CONSTRAINT `fk_colP_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `colprestamo`;

CREATE TABLE `colprestamo` (
  `idobj` int(11) NOT NULL,
  `infPrest` varchar(60) DEFAULT NULL,
  `fechPet` date DEFAULT NULL,
  `fechDev` date DEFAULT NULL,
  KEY `fk_colPre_obj` (`idobj`),
  CONSTRAINT `fk_colPre_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `escultura`;

CREATE TABLE `escultura` (
  `idobj` int(11) NOT NULL,
  `estilEscul` varchar(35) DEFAULT NULL,
  `materialEscul` varchar(35) DEFAULT NULL,
  `alturaEscul` double DEFAULT NULL,
  `pesoEscul` double DEFAULT NULL,
  KEY `fk_esc_obj` (`idobj`),
  CONSTRAINT `fk_esc_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `estatua`;

CREATE TABLE `estatua` (
  `idobj` int(11) NOT NULL,
  `materialEst` varchar(30) DEFAULT NULL,
  KEY `fk_est_obj` (`idobj`),
  CONSTRAINT `fk_est_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `exhibicion`;

CREATE TABLE `exhibicion` (
  `idExhib` int(11) NOT NULL,
  `nomExhib` varchar(35) DEFAULT NULL,
  `fechComienzo` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  PRIMARY KEY (`idExhib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `exhibicion2`;

CREATE TABLE `exhibicion2` (
  `idEx` int(11) DEFAULT NULL,
  `lugar` varchar(40) DEFAULT NULL,
  `fechaEx` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `objetoarte`;

CREATE TABLE `objetoarte` (
  `idobj` int(11) NOT NULL,
  `titObj` varchar(30) DEFAULT NULL,
  `descObj` varchar(80) DEFAULT NULL,
  `anioObj` date DEFAULT NULL,
  `paisObj` varchar(35) DEFAULT NULL,
  `epocaObj` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idobj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `objetoarte` VALUES (1,"Don Quijote","Una obra clasica","2019-08-09","Mexico","Clasica"),
(2,"Mona Lisa","La mujer mas bella","2016-08-09","Italia","Romana"),
(3,"Soledades","Esta solo","2002-09-18","Peru","Renacista"),
(6,"La ultima cena","La ultima cena antes de la traicino","1495-03-26","Italia","Renacista"),
(7,"La noche estrellada","Obra maestra de vicent","1889-08-19","Estados Unidos","moderna"),
(8,"El grito","Obra maestra de much","1893-12-23","Noruega","Moderna");


DROP TABLE IF EXISTS `objexhib`;

CREATE TABLE `objexhib` (
  `idobj` int(11) NOT NULL,
  `idExhib` int(11) NOT NULL,
  KEY `fk_objE_obj` (`idobj`),
  KEY `fk_objE_exh` (`idExhib`),
  CONSTRAINT `fk_objE_exh` FOREIGN KEY (`idExhib`) REFERENCES `exhibicion` (`idExhib`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_objE_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `otro`;

CREATE TABLE `otro` (
  `idobj` int(11) NOT NULL,
  `tipoOtro` varchar(35) DEFAULT NULL,
  `estilOtro` varchar(35) DEFAULT NULL,
  KEY `fk_otro_obj` (`idobj`),
  CONSTRAINT `fk_otro_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `pintura`;

CREATE TABLE `pintura` (
  `idobj` int(11) NOT NULL,
  `tipoPint` varchar(35) DEFAULT NULL,
  `estilPint` varchar(35) DEFAULT NULL,
  `materialPint` varchar(35) DEFAULT NULL,
  KEY `fk_pin_obj` (`idobj`),
  CONSTRAINT `fk_pin_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



SET foreign_key_checks = 1;
