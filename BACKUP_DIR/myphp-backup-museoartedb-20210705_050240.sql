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

INSERT INTO `artista` VALUES (25,"AAAAAAAAAaa","2021-08-16","Siglo 21","2021-08-17","Renacentista","México");


DROP TABLE IF EXISTS `bitacora`;

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operacion` varchar(40) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `host` varchar(30) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  `tabla` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

INSERT INTO `bitacora` VALUES (1,"Insertar","Luis Segovia","localhost","2004-07-21 11:27:04","objetoarte"),
(2,"Insertar","Luis Segovia","localhost","2004-07-21 11:31:08","objetoarte"),
(3,"Insertar","Luis Segovia","localhost","2004-07-21 11:48:42","objetoarte"),
(4,"Modificar","Luis Segovia","localhost","2005-07-21 12:00:10","objetoarte"),
(5,"Modificar","Luis Segovia","localhost","2005-07-21 02:24:47","objetoarte"),
(6,"Modificar","Luis Segovia","localhost","2005-07-21 03:51:57","objetoarte"),
(7,"Agregar","Luis Segovia","localhost","2005-07-21 03:53:50","artista"),
(8,"Modificar","Luis Segovia","localhost","2005-07-21 03:54:14","artista"),
(9,"Eliminar","Luis Segovia","localhost","2005-07-21 04:22:12","artista"),
(10,"Eliminar","Luis Segovia","localhost","2005-07-21 04:24:54","objetoarte"),
(11,"Agregar","Luis Segovia","localhost","2005-07-21 04:25:13","artista"),
(12,"Agregar","Luis Segovia","localhost","2005-07-21 04:30:15","artista"),
(13,"Agregar","Luis Segovia","localhost","2005-07-21 04:32:38","artista"),
(14,"Agregar","Luis Segovia","localhost","2005-07-21 04:32:48","artista"),
(15,"","Luis Segovia","localhost","2005-07-21 04:34:55","artista"),
(16,"Agregar","Luis Segovia","localhost","2005-07-21 04:35:07","artista"),
(17,"Modificar","Luis Segovia","localhost","2005-07-21 04:35:20","artista"),
(18,"Agregar","Luis Segovia","localhost","2005-07-21 04:35:47","artista"),
(19,"Agregar","Luis Segovia","localhost","2005-07-21 04:37:28","artista"),
(20,"Agregar","Luis Segovia","localhost","2005-07-21 04:40:12","artista"),
(21,"Agregar","Luis Segovia","localhost","2005-07-21 04:41:46","artista"),
(22,"Agregar","Luis Segovia","localhost","2005-07-21 04:42:04","artista"),
(23,"Agregar","Luis Segovia","localhost","2005-07-21 04:42:29","artista"),
(24,"Agregar","Luis Segovia","localhost","2005-07-21 04:43:20","artista"),
(25,"Eliminar","Luis Segovia","localhost","2005-07-21 04:43:28","artista"),
(26,"Agregar","Luis Segovia","localhost","2005-07-21 04:43:47","artista"),
(27,"Agregar","Luis Segovia","localhost","2005-07-21 04:46:20","artista"),
(28,"Agregar","Luis Segovia","localhost","2005-07-21 04:47:14","objetoarte"),
(29,"Agregar","Luis Segovia","localhost","2005-07-21 04:49:42","artista"),
(30,"Agregar","Luis Segovia","localhost","2005-07-21 04:54:36","artista"),
(31,"Agregar","Luis Segovia","localhost","2005-07-21 04:55:26","artista"),
(32,"Agregar","Luis Segovia","localhost","2005-07-21 04:58:05","artista");


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

INSERT INTO `exhibicion` VALUES (2,"nombre2","1234-11-11","4321-11-11"),
(3,"nombre3","1234-11-11","1234-11-11");


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

INSERT INTO `objetoarte` VALUES (25,"Ángel Caído","Escultura de Ricardo Bellver","1885-07-12","España","aaaa"),
(26,"Noche estrellada","Pintura de vincent van gog","1988-07-07","México",987),
(111,11,"Escultura de Ricardo Bellver","1885-07-12","España","w"),
(122,"Ángel Caído Modificado","adasd","1999-07-16","México","w");


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
