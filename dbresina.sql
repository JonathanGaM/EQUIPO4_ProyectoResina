/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - bdresina
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdresina` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `bdresina`;

/*Table structure for table `tblcategoria` */

DROP TABLE IF EXISTS `tblcategoria`;

CREATE TABLE `tblcategoria` (
  `idCategoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(120) DEFAULT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblcategoria` */

insert  into `tblcategoria`(`idCategoria`,`categoria`,`imagen`) values 
(23,'Fundas','txtimagen64bfe9f928fbd.jpg'),
(24,'Joyeria','txtimagen64bfea178bf64.jpeg'),
(25,'Marcos','txtimagen64bfea5a96b9b.jpg'),
(26,'Llaveros','txtimagen64bfea6800184.jpeg'),
(27,'Marcos','txtimagen64c022115052a.jpg'),
(28,'Funda2','txtimagen64c022b3c2383.jpg');

/*Table structure for table `tblcliente` */

DROP TABLE IF EXISTS `tblcliente`;

CREATE TABLE `tblcliente` (
  `idCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(120) DEFAULT NULL,
  `Apaterno` varchar(120) DEFAULT NULL,
  `Amaterno` varchar(120) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `telefono` (`telefono`),
  KEY `idUsuario` (`idUsuario`),
  CONSTRAINT `tblcliente_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tblusuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblcliente` */

insert  into `tblcliente`(`idCliente`,`Nombre`,`Apaterno`,`Amaterno`,`telefono`,`idUsuario`) values 
(5,'Natalia','vite ','hernandez','7711213344',6);

/*Table structure for table `tblcolonia` */

DROP TABLE IF EXISTS `tblcolonia`;

CREATE TABLE `tblcolonia` (
  `idColonia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `colonia` varchar(120) DEFAULT NULL,
  `idLocalidad` int(10) unsigned NOT NULL,
  `costo` float unsigned DEFAULT NULL,
  PRIMARY KEY (`idColonia`),
  KEY `idLocalidad` (`idLocalidad`),
  CONSTRAINT `tblcolonia_ibfk_1` FOREIGN KEY (`idLocalidad`) REFERENCES `tbllocalidad` (`idLocalidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblcolonia` */

/*Table structure for table `tblcolores` */

DROP TABLE IF EXISTS `tblcolores`;

CREATE TABLE `tblcolores` (
  `idColores` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `colores` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`idColores`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblcolores` */

insert  into `tblcolores`(`idColores`,`colores`) values 
(12,'Azul'),
(13,'Amarillo'),
(14,'Verde'),
(15,'Rojo');

/*Table structure for table `tbldireccion` */

DROP TABLE IF EXISTS `tbldireccion`;

CREATE TABLE `tbldireccion` (
  `idDireccion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero` int(10) unsigned DEFAULT NULL,
  `calle` varchar(120) DEFAULT NULL,
  `idColonia` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idDireccion`),
  KEY `idColonia` (`idColonia`),
  CONSTRAINT `tbldireccion_ibfk_1` FOREIGN KEY (`idColonia`) REFERENCES `tblcolonia` (`idColonia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbldireccion` */

/*Table structure for table `tbldiseños` */

DROP TABLE IF EXISTS `tbldiseños`;

CREATE TABLE `tbldiseños` (
  `idDiseño` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `formas` varchar(120) DEFAULT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idDiseño`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbldiseños` */

insert  into `tbldiseños`(`idDiseño`,`formas`,`imagen`) values 
(12,'Cuadrada','txtimagen64bffb8b776cc.png'),
(13,'Rectangulo','txtimagen64bffb9a3dda2.png'),
(14,'Letra A','txtimagen64bffc086d192.png'),
(15,'Letra M','txtimagen64bffc15723cf.png'),
(16,'Letra I','txtimagen64bffc25853bf.png'),
(17,'Letra D','txtimagen64bffc3006105.png'),
(18,'Gota','txtimagen64bffea09f97e.png'),
(19,'Estrella','txtimagen64bfff31872c7.jpg');

/*Table structure for table `tblempleado` */

DROP TABLE IF EXISTS `tblempleado`;

CREATE TABLE `tblempleado` (
  `idEmpleado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(120) DEFAULT NULL,
  `Apaterno` varchar(120) DEFAULT NULL,
  `Amaterno` varchar(120) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  `rfc` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`),
  UNIQUE KEY `idUsuario` (`idUsuario`),
  UNIQUE KEY `rfc` (`rfc`),
  CONSTRAINT `tblempleado_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tblusuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblempleado` */

insert  into `tblempleado`(`idEmpleado`,`Nombre`,`Apaterno`,`Amaterno`,`telefono`,`idUsuario`,`rfc`) values 
(1,'Emmanuel','Rodriguez','Martinez','7711215357',5,'ROME041117'),
(2,'Edwin','Guerrero','Cortez','5545870007',16,'EDWIN12345'),
(3,'Emmanuel','Guerrero','Martinez','7711213344',19,'ROME041117HDF');

/*Table structure for table `tblfotos` */

DROP TABLE IF EXISTS `tblfotos`;

CREATE TABLE `tblfotos` (
  `idFoto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(150) DEFAULT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idFoto`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `tblfotos_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `tblproductos` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblfotos` */

insert  into `tblfotos`(`idFoto`,`foto`,`idProducto`) values 
(11,'txtimagen64bffc4c73f1d.jpeg',17),
(12,'txtimagen64bffc7f8ed58.jpeg',17),
(13,'txtimagen64c021cf90118.jpeg',18);

/*Table structure for table `tblinsumos` */

DROP TABLE IF EXISTS `tblinsumos`;

CREATE TABLE `tblinsumos` (
  `idInsumo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(120) DEFAULT NULL,
  `precio_compra` float DEFAULT NULL,
  `idProveedor` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idInsumo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblinsumos` */

/*Table structure for table `tbllocalidad` */

DROP TABLE IF EXISTS `tbllocalidad`;

CREATE TABLE `tbllocalidad` (
  `idLocalidad` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `localidad` varchar(120) DEFAULT NULL,
  `costo` float unsigned NOT NULL,
  PRIMARY KEY (`idLocalidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbllocalidad` */

/*Table structure for table `tblpedido` */

DROP TABLE IF EXISTS `tblpedido`;

CREATE TABLE `tblpedido` (
  `idPedido` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idEncargado` int(10) unsigned NOT NULL,
  `total` float unsigned DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `idCliente` int(10) unsigned NOT NULL,
  `idDireccion` int(10) unsigned NOT NULL,
  `costoEnvio` float DEFAULT NULL,
  `totalPago` float DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `idCliente` (`idCliente`),
  KEY `idDireccion` (`idDireccion`),
  KEY `idEncargado` (`idEncargado`),
  CONSTRAINT `tblpedido_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tblcliente` (`idCliente`),
  CONSTRAINT `tblpedido_ibfk_2` FOREIGN KEY (`idDireccion`) REFERENCES `tbldireccion` (`idDireccion`),
  CONSTRAINT `tblpedido_ibfk_3` FOREIGN KEY (`idEncargado`) REFERENCES `tblempleado` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblpedido` */

/*Table structure for table `tblpedidodetalle` */

DROP TABLE IF EXISTS `tblpedidodetalle`;

CREATE TABLE `tblpedidodetalle` (
  `idPD` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idPedido` int(10) unsigned NOT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  `precio` float unsigned DEFAULT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  `subtotal` float unsigned DEFAULT NULL,
  PRIMARY KEY (`idPD`),
  KEY `idPedido` (`idPedido`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `tblpedidodetalle_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `tblpedido` (`idPedido`),
  CONSTRAINT `tblpedidodetalle_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `tblproductos` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblpedidodetalle` */

/*Table structure for table `tblproductos` */

DROP TABLE IF EXISTS `tblproductos`;

CREATE TABLE `tblproductos` (
  `idProducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(120) DEFAULT NULL,
  `idCategoria` int(10) unsigned NOT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `idCategoria` (`idCategoria`),
  CONSTRAINT `tblproductos_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tblcategoria` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblproductos` */

insert  into `tblproductos`(`idProducto`,`Nombre`,`idCategoria`,`imagen`,`precio`,`descripcion`) values 
(17,'Iphone X',23,'txtimagen64bfecc99d168.jpeg',100,'Funda con protector lateral'),
(18,'Funda Samsung Galaxy S23',23,'txtimagen64bfefecd773e.jpg',250,'Funda de telefono de resina transparente con ventana deslizante'),
(19,'Samsung S6',23,'txtimagen64bff0dcccf86.jpg',100,'Funda de resina, diseño de flores rosas'),
(20,'Collar',24,'txtimagen64bff18268cf6.jpg',50,'Collar con resina, con detalles de oceano'),
(21,'Anillo',24,'txtimagen64bff3e4e8622.jpg',50,'Anillo unitalla de resina y flores moradas '),
(22,'Llavero',26,'txtimagen64bff74b42f61.jpg',20,'Llavero de resina con estilo de playa'),
(23,'Llavero pareja',26,'txtimagen64bff79344afe.jpg',60,'Llavero de resina con arcoiris'),
(24,'Marco ',25,'txtimagen64bff934537e7.jpg',150,'Marco con resina, estilo inspirado en la playa'),
(25,'Marco',27,'txtimagen64c0226415ba3.jpg',40,'Marco hecha en chililico'),
(26,'Funda',28,'txtimagen64c022e185d2d.jpeg',100,'Funda hecha en chililico');

/*Table structure for table `tblproductosxcolor` */

DROP TABLE IF EXISTS `tblproductosxcolor`;

CREATE TABLE `tblproductosxcolor` (
  `idPC` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProducto` int(10) unsigned NOT NULL,
  `idColor` int(10) unsigned NOT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  `precio` float unsigned DEFAULT NULL,
  PRIMARY KEY (`idPC`),
  KEY `idProducto` (`idProducto`),
  KEY `idColor` (`idColor`),
  CONSTRAINT `tblproductosxcolor_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `tblproductos` (`idProducto`),
  CONSTRAINT `tblproductosxcolor_ibfk_2` FOREIGN KEY (`idColor`) REFERENCES `tblcolores` (`idColores`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblproductosxcolor` */

insert  into `tblproductosxcolor`(`idPC`,`idProducto`,`idColor`,`imagen`,`precio`) values 
(11,17,12,'txtimagen64bffb006ee70.png',15),
(12,17,15,'txtimagen64bffb0bc6a17.png',15),
(13,18,13,'txtimagen64bffb18e8974.png',20),
(14,18,14,'txtimagen64bffb255ac9f.png',20),
(15,19,12,'txtimagen64bffb34affbe.png',15),
(16,19,15,'txtimagen64bffb479765f.png',10),
(17,21,12,'txtimagen64bffee0615d6.png',15),
(18,26,12,'txtimagen64c0232802bc5.png',10),
(19,26,13,'txtimagen64c023436f9e2.png',10);

/*Table structure for table `tblproductosxdiseño` */

DROP TABLE IF EXISTS `tblproductosxdiseño`;

CREATE TABLE `tblproductosxdiseño` (
  `idPD` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProducto` int(10) unsigned NOT NULL,
  `idDiseño` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idPD`),
  KEY `idProducto` (`idProducto`),
  KEY `idDiseño` (`idDiseño`),
  CONSTRAINT `tblproductosxdiseño_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `tblproductos` (`idProducto`),
  CONSTRAINT `tblproductosxdiseño_ibfk_2` FOREIGN KEY (`idDiseño`) REFERENCES `tbldiseños` (`idDiseño`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblproductosxdiseño` */

insert  into `tblproductosxdiseño`(`idPD`,`idProducto`,`idDiseño`) values 
(17,24,12),
(18,24,13),
(19,20,18),
(20,22,19),
(21,23,12);

/*Table structure for table `tblusuario` */

DROP TABLE IF EXISTS `tblusuario`;

CREATE TABLE `tblusuario` (
  `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(120) DEFAULT NULL,
  `pasword` varchar(150) DEFAULT NULL,
  `tipo` enum('cliente','empleado','administrador') DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `Usuario` (`Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblusuario` */

insert  into `tblusuario`(`idUsuario`,`Usuario`,`pasword`,`tipo`) values 
(5,'emma123','1f050242921954f2c734eec74ce2ecb6','administrador'),
(6,'nati123','503d9241ba528e515298917beb3b45e4','cliente'),
(16,'edwin123','c5e98f6c6e5b134c267d913b4b5fbd95','empleado'),
(19,'emma1234','b964e183e33538b187f4d2639adef60b','empleado');

/* Procedure structure for procedure `Sp_actializarcolor` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_actializarcolor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_actializarcolor`(in cod int, in col varchar(120))
BEGIN
    update tblcolores set colores=col where idColores=cod;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_actualizarempleado` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_actualizarempleado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_actualizarempleado`(in i int,IN nom VARCHAR(120),IN AP VARCHAR(120),IN AM VARCHAR(120),IN tel VARCHAR(10),IN rf VARCHAR(13))
BEGIN
    update tblempleado set Nombre=nom,Apaterno=AP,Amaterno=AM,telefono=tel,rfc=rf WHERE idEmpleado=i;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_AgregarCategoria` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_AgregarCategoria` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_AgregarCategoria`(IN categ VARCHAR(100), IN img VARCHAR(150))
BEGIN
INSERT INTO `tblcategoria`(categoria,imagen)
VALUES(categ,img);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_agregarcliente` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_agregarcliente` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_agregarcliente`(in nom varchar(120),in AP varchar(120),in AM varchar(120),in tel varchar(10),IN us VARCHAR(120), IN pas VARCHAR(120), IN tip ENUM('cliente','administrador'))
BEGIN
    DECLARE IDUS INT;
    insert into tblusuario(Usuario,pasword,tipo) values(us,md5(pas),tip);
    set IDUS=(select max(tblusuario.`idUsuario`) from tblusuario);
	insert into tblcliente(Nombre,Apaterno,Amaterno,telefono,idUsuario) values (nom,AP,AM,tel,IDUS);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_agregarcolores` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_agregarcolores` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_agregarcolores`(in col varchar(120))
BEGIN
    insert into tblcolores(colores)values(col);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_agregarempleado` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_agregarempleado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_agregarempleado`(IN nom VARCHAR(120),IN AP VARCHAR(120), IN AM VARCHAR(120),IN rf VARCHAR(13), IN IDUS INT)
BEGIN
	INSERT INTO tblempleado(Nombre,Apaterno,Amaterno,RFC,idUsuario)VALUES(nom,AP,AM,rf,IDUS);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_buscarclientes` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_buscarclientes` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_buscarclientes`(IN usu VARCHAR(120),IN passw VARCHAR(120))
BEGIN
        SELECT Usuario,pasword,tipo FROM tblusuario
        WHERE usuario=usu AND pasword=MD5(passw);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_buscarusuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_buscarusuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_buscarusuario`(IN usu VARCHAR(120),IN passw VARCHAR(120))
BEGIN
        SELECT Usuario,pasword,tipo FROM tblusuario
        WHERE usuario=usu AND pasword=MD5(passw);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_ConsultaCategoria` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_ConsultaCategoria` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ConsultaCategoria`()
BEGIN
	SELECT *FROM `tblcategoria`;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_ConsultaColor` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_ConsultaColor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ConsultaColor`()
BEGIN
	select *from `tblcolores`;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_consultacolores` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_consultacolores` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_consultacolores`()
BEGIN
	select *from tblcolores;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_ConsultaDetallesProd` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_ConsultaDetallesProd` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ConsultaDetallesProd`(in $NombrePrd varchar(100))
BEGIN
	SELECT *FROM consulta_productos WHERE Nombre = $NombrePrd;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_ConsultaDiseño` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_ConsultaDiseño` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ConsultaDiseño`()
BEGIN
	SELECT *FROM `tbldiseños`;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_consultaempleado` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_consultaempleado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_consultaempleado`()
BEGIN
    select * from tblempleado;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_ConsultaFotos` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_ConsultaFotos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ConsultaFotos`()
BEGIN
	SELECT *FROM `tblfotos`;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_ConsultaprodCateg` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_ConsultaprodCateg` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ConsultaprodCateg`()
BEGIN
	SELECT tblproductos.`Nombre`,tblcategoria.`categoria`
    FROM tblproductos,tblcategoria
    WHERE tblproductos.`idCategoria`=tblcategoria.`idCategoria`   
    ;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_ConsultaProductos` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_ConsultaProductos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ConsultaProductos`(IN catg VARCHAR (100))
BEGIN
	SELECT tblproductos.`Nombre`, tblproductos.`precio`, tblproductos.`descripcion`, tblproductos.`imagen`
	FROM tblproductos, tblcategoria
	WHERE tblproductos.`idCategoria`= tblcategoria.`idCategoria`
	AND tblcategoria.`categoria` = catg;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_ConsultaProdXCOlor` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_ConsultaProdXCOlor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ConsultaProdXCOlor`()
BEGIN
SELECT p.Nombre, p.descripcion, c.colores
    FROM tblproductos p
    LEFT JOIN tblfotos f ON p.idProducto = f.idProducto
    LEFT JOIN tblproductosxdiseño pd ON p.idProducto = pd.idProducto
    LEFT JOIN tbldiseños d ON pd.idDiseño = d.idDiseño
    LEFT JOIN tblproductosxcolor pc ON p.idProducto = pc.idProducto
    LEFT JOIN tblcolores c ON pc.idColor = c.idColores
    LEFT JOIN tblcategoria z ON p.idCategoria = z.idCategoria
    WHERE z.categoria = 'Fundas'
    ;
    	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_consultausuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_consultausuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_consultausuario`()
BEGIN
    select * from tblempleado;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_crearempleados` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_crearempleados` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_crearempleados`(IN nom VARCHAR(120),IN AP VARCHAR(120),IN AM VARCHAR(120),IN tel VARCHAR(10),in rf varchar(13),IN us VARCHAR(120), IN pas VARCHAR(120), IN tip ENUM('cliente','empleado','administrador'))
BEGIN
    DECLARE IDUS INT;
    INSERT INTO tblusuario(Usuario,pasword,tipo) VALUES(us,MD5(pas),tip);
    SET IDUS=(SELECT MAX(tblusuario.`idUsuario`) FROM tblusuario);
    INSERT INTO tblempleado(Nombre,Apaterno,Amaterno,telefono,idUsuario,rfc) VALUES (nom,AP,AM,tel,IDUS,rf);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_DetallesProducto` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_DetallesProducto` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_DetallesProducto`(in $Prod varchar(100))
BEGIN
    SELECT p.Nombre, p.descripcion, p.imagen, f.foto, p.precio, d.formas, c.colores, pc.precio
    FROM tblproductos p
    LEFT JOIN tblfotos f ON p.idProducto = f.idProducto
    LEFT JOIN tblproductosxdiseño pd ON p.idProducto = pd.idProducto
    LEFT JOIN tbldiseños d ON pd.idDiseño = d.idDiseño
    LEFT JOIN tblproductosxcolor pc ON p.idProducto = pc.idProducto
    LEFT JOIN tblcolores c ON pc.idColor = c.idColores
    WHERE p.Nombre =$Prod;
END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_eliminarcolor` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_eliminarcolor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_eliminarcolor`(in cod int)
BEGIN
	DELETE FROm tblcolores WHERE idColores=cod;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_eliminarempleado` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_eliminarempleado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_eliminarempleado`(in i int)
BEGIN
    delete from tblempleado where idEmpleado=i;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_insertarcolonia` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_insertarcolonia` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_insertarcolonia`(in col varchar(120),in IDLOCA int,in cost float)
BEGIN
    insert into tblcolonia(colonia,idColonia,costo) values (col, IDLOCA, cost);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_InsertarColores` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_InsertarColores` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_InsertarColores`(in $Color varchar (100))
BEGIN
	INSERT INTO `tblcolores`(colores) VALUES($Color);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_insertardireccion` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_insertardireccion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_insertardireccion`(in num int,in cll varchar(120),in IDCOL int)
BEGIN
     Insert into tbldireccion (numero,calle,idColonia)values (num,cll,IDCOL);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_InsertarDiseño` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_InsertarDiseño` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_InsertarDiseño`(IN $formas VARCHAR(100),IN $img VARCHAR(150))
BEGIN
	INSERT INTO `tbldiseños`(formas,imagen) VALUE($formas,$img);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_InsertarFotos` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_InsertarFotos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_InsertarFotos`(IN $img VARCHAR(150),IN $idProd INT)
BEGIN
	INSERT INTO tblfotos(foto,idProducto) VALUES ($img,$idProd);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_insertarlocalidad` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_insertarlocalidad` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_insertarlocalidad`(in loca varchar(120), in cost float )
BEGIN
	insert into tbllocalidad(localidad,costo) values (loca,cost);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_InsertarProductos` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_InsertarProductos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_InsertarProductos`(IN $Nom VARCHAR(100),IN $idCat INT,IN $img VARCHAR(150),IN $precio INT,IN $descp VARCHAR(150))
BEGIN
	INSERT INTO `tblproductos`(Nombre, idCategoria, imagen, precio, descripcion) VALUES($Nom,$idCat,$img,$precio,$descp);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_InsertProdColor` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_InsertProdColor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_InsertProdColor`(IN $idprod INT,IN $idcol INT,IN $img VARCHAR(150),IN $prec INT)
BEGIN
	INSERT INTO `tblproductosxcolor`(idproducto,idcolor,imagen,precio) VALUES($idprod,$idcol,$img,$prec);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_Productos` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_Productos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_Productos`()
BEGIN
	select *from `tblproductos`;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_ProductoxDiseño` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_ProductoxDiseño` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ProductoxDiseño`(IN $idProd INT,IN $idDis INT)
BEGIN
	INSERT INTO `tblproductosxdiseño`(idProducto,idDiseño) VALUE($idProd,$idDis);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Sp_TodosLosProductos` */

/*!50003 DROP PROCEDURE IF EXISTS  `Sp_TodosLosProductos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_TodosLosProductos`()
BEGIN
	SELECT *FROM `tblcategoria`;
	END */$$
DELIMITER ;

/*Table structure for table `consulta_productos` */

DROP TABLE IF EXISTS `consulta_productos`;

/*!50001 DROP VIEW IF EXISTS `consulta_productos` */;
/*!50001 DROP TABLE IF EXISTS `consulta_productos` */;

/*!50001 CREATE TABLE  `consulta_productos`(
 `Nombre` varchar(120) ,
 `descripcion` varchar(200) ,
 `precio` float ,
 `imagen` varchar(150) ,
 `colores` mediumtext ,
 `diseños` mediumtext 
)*/;

/*View structure for view consulta_productos */

/*!50001 DROP TABLE IF EXISTS `consulta_productos` */;
/*!50001 DROP VIEW IF EXISTS `consulta_productos` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `consulta_productos` AS select `p`.`Nombre` AS `Nombre`,`p`.`descripcion` AS `descripcion`,`p`.`precio` AS `precio`,`p`.`imagen` AS `imagen`,group_concat(`c`.`colores` separator ',') AS `colores`,group_concat(`d`.`formas` separator ',') AS `diseños` from ((((`tblproductos` `p` left join `tblproductosxcolor` `pc` on(`p`.`idProducto` = `pc`.`idProducto`)) left join `tblcolores` `c` on(`pc`.`idColor` = `c`.`idColores`)) left join `tblproductosxdiseño` `pd` on(`p`.`idProducto` = `pd`.`idProducto`)) left join `tbldiseños` `d` on(`pd`.`idDiseño` = `d`.`idDiseño`)) group by `p`.`idProducto` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
