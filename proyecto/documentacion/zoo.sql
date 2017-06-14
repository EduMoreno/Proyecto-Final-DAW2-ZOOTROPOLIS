
CREATE TABLE IF NOT EXISTS cuidadores (
  idcuidador int(11) NOT NULL,
  nombre varchar(150) NOT NULL,
  apellidos CHAR(50),
  fecha_nac DATE,
  localidad CHAR (60),
  PRIMARY KEY (idcuidador)
) ENGINE=InnoDB charset=utf8;


INSERT INTO cuidadores (idcuidador, nombre, apellidos, fecha_nac, localidad) VALUES
(1, 'Jesus', 'Sanchez Olmedo', '1958/05/21', 'Malaga'),
(2, 'Antonio', 'Dominguez Garcia', '1968/05/10', 'Malaga'),
(3, 'Isabel', 'Garcia Fernandez', '1975/12/18', 'Malaga'),
(4, 'Jennifer', 'Fernandez Florido', '1988/08/07', 'Malaga');


CREATE TABLE animal (
  idanimal int(11) NOT NULL,
  nombre CHAR(10) NOT NULL,
  fecha  date NOT NULL,
  genero varchar(150) NOT NULL,
  edad int(11) NOT NULL,
  provincia varchar(30)  NOT NULL,
  idtipo int(11) NOT NULL,
  idcuidador int(11) NOT NULL,
  PRIMARY KEY (idanimal)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE animal
  ADD KEY idtipo (idtipo),
  ADD KEY idcuidador (idcuidador);
  
ALTER TABLE animal
  MODIFY idanimal int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
INSERT INTO animal (idanimal, fecha, genero, edad, provincia, idtipo, idcuidador) VALUES
(1, '2017-01-04', 'Macho', 2 , 'Almeria', 1 , 1),
(2, '2017-01-03', 'Hembra', 5 , 'Malaga', 3, 2);


CREATE TABLE tipo (
  idtipo int(11) NOT NULL,
  nombre varchar(150) NOT NULL,
  PRIMARY KEY (idtipo)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO tipo (idtipo, nombre) VALUES
(1, 'Gorila'),
(2, 'Tigre'),
(3, 'Leon'),
(4, 'Serpiente');

CREATE TABLE IF NOT EXISTS usuarios (
  cod_usuario CHAR(5) NOT NULL,
  nombre CHAR(50) NOT NULL,
  clave CHAR(20) NOT NULL,
  PRIMARY KEY (cod_usuario)
) ENGINE=InnoDB charset=utf8;

create table user(
	id int not null auto_increment primary key,
	fullname varchar(500) not null,
	username varchar(100) not null unique,
    role varchar(20),
	email varchar(255) not null unique,
	password varchar(255) not null,
	created_at datetime not null
);

INSERT INTO usuarios (cod_usuario, nombre, clave) VALUES
('001', 'Administrador', 'admin'),
('002', 'Jesus', 'jesus'),
('003', 'Antonio', 'antonio'),
('004', 'Isabel', 'isabel'),
('005', 'Jennifer', 'jennifer');


CREATE TABLE IF NOT EXISTS eventos (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  body text COLLATE utf8_spanish_ci NOT NULL,
  url varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  class varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'event-important',
  start varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  end varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  inicio_normal varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  final_normal varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

