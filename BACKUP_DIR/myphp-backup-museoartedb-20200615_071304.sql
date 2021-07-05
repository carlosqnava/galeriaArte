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

INSERT INTO `artista` VALUES (2,"artista2","2020-06-03","epoca2","2020-06-09","estilo2","pais2"),
(5,"nombre5","1234-11-11","epoca5","1234-11-11","estilo5",""),
(7,"artista7","1234-11-11","epoca7","1234-11-11","estilo7","pais7"),
(8,"nombre8","1234-11-11","epoca8","1234-11-12","estilo8","pais8");


DROP TABLE IF EXISTS `bitacora`;

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operacion` varchar(40) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `host` varchar(30) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  `tabla` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

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
(26,"Eliminacion","root","localhost","2020-06-14 10:47:40","Objeto Arte"),
(27,"Eliminacion","root","localhost","2020-06-14 10:48:19","Objeto Arte"),
(28,"Eliminacion","root","localhost","2020-06-14 10:49:32","Objeto Arte"),
(29,"Eliminacion","root","localhost","2020-06-14 10:49:37","Objeto Arte"),
(30,"Insertar","root","localhost","2020-06-14 10:55:09","Pintura"),
(31,"Eliminacion","root","localhost","2020-06-14 10:55:28","Pintura"),
(32,"Eliminacion","root","localhost","2020-06-14 10:55:28","Pintura"),
(33,"Insertar","root","localhost","2020-06-14 10:56:17","Objeto Arte"),
(34,"Insertar","root","localhost","2020-06-14 10:56:32","Pintura"),
(35,"Insertar","root","localhost","2020-06-14 11:00:11","Otro"),
(36,"Insertar","root","localhost","2020-06-14 11:00:19","Otro"),
(37,"Eliminacion","root","localhost","2020-06-14 11:00:28","Otro"),
(38,"Eliminacion","root","localhost","2020-06-14 11:09:21","Exhibicion"),
(39,"Insertar","root","localhost","2020-06-14 11:12:27","Estatua"),
(40,"Insertar","root","localhost","2020-06-14 11:12:41","Estatua"),
(41,"Eliminacion","root","localhost","2020-06-14 11:12:58","Estatua"),
(42,"Insertar","root","localhost","2020-06-14 11:17:26","Escultura"),
(43,"Eliminacion","root","localhost","2020-06-14 11:18:47","Escultura"),
(44,"Insertar","root","localhost","2020-06-14 11:22:23","Coleccion Permanente"),
(45,"Insertar","root","localhost","2020-06-14 11:23:00","Objeto Arte"),
(46,"Insertar","root","localhost","2020-06-14 11:23:15","Objeto Arte"),
(47,"Insertar","root","localhost","2020-06-14 11:23:41","Objeto Arte"),
(48,"Eliminacion","root","localhost","2020-06-14 11:23:47","Coleccion Permanente"),
(49,"Eliminacion","root","localhost","2020-06-14 11:26:28","Coleccion Prestamo"),
(50,"Insertar","root","localhost","2020-06-14 11:26:44","Coleccion Prestamo"),
(51,"Insertar","root","localhost","2020-06-14 11:26:54","Coleccion Prestamo"),
(52,"Insertar","root","localhost","2020-06-14 19:21:47","Objeto Arte");


DROP TABLE IF EXISTS `colpermanente`;

CREATE TABLE `colpermanente` (
  `idobj` int(11) NOT NULL,
  `fechAdq` date DEFAULT NULL,
  `estado` varchar(35) DEFAULT NULL,
  `costo` double DEFAULT NULL,
  KEY `fk_colP_obj` (`idobj`),
  CONSTRAINT `fk_colP_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `colpermanente` VALUES (2,"1234-11-11","estado1",123455);


DROP TABLE IF EXISTS `colprestamo`;

CREATE TABLE `colprestamo` (
  `idobj` int(11) NOT NULL,
  `infPrest` varchar(60) DEFAULT NULL,
  `fechPet` date DEFAULT NULL,
  `fechDev` date DEFAULT NULL,
  KEY `fk_colPre_obj` (`idobj`),
  CONSTRAINT `fk_colPre_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `colprestamo` VALUES (1,"informacion1","1234-11-11","1234-11-11"),
(2,"informacion2","1234-11-11","1234-11-11");


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

INSERT INTO `escultura` VALUES (2,"estilo2","meterial2",180,300);


DROP TABLE IF EXISTS `estatua`;

CREATE TABLE `estatua` (
  `idobj` int(11) NOT NULL,
  `materialEst` varchar(30) DEFAULT NULL,
  KEY `fk_est_obj` (`idobj`),
  CONSTRAINT `fk_est_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `estatua` VALUES (1,"material1"),
(5,"material5");


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

INSERT INTO `objetoarte` VALUES (1,"titulo1","descripcion1","1234-11-11","pais1","epoca1"),
(2,"titulo2","descripcion2","1995-01-29","pais2","epoca2"),
(3,"titulo3","descripcion3","1234-11-11","pais3","epoca3"),
(4,"titulo4","descripcion4","1234-11-11","pais4","epoca4"),
(5,"titulo5","descripcion5","1234-12-12","pais5","epoca5"),
(6,"titulo6","descripcion6","1234-11-11","pais6","epoca6"),
(7,"titulo7","descripcion7","1200-10-27","pais7","epoca7"),
(8,"titulo8","descripcion8","1234-11-11","pais8","epoca8"),
(9,"titulo9","descripcion9","1234-11-11","pais9","epoca9");


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

INSERT INTO `otro` VALUES (2,"tipo2","estilo2");


DROP TABLE IF EXISTS `pintura`;

CREATE TABLE `pintura` (
  `idobj` int(11) NOT NULL,
  `tipoPint` varchar(35) DEFAULT NULL,
  `estilPint` varchar(35) DEFAULT NULL,
  `materialPint` varchar(35) DEFAULT NULL,
  KEY `fk_pin_obj` (`idobj`),
  CONSTRAINT `fk_pin_obj` FOREIGN KEY (`idobj`) REFERENCES `objetoarte` (`idobj`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pintura` VALUES (1,"tipo1","estilo1","material1");


SET foreign_key_checks = 1;
