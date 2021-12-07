CREATE DATABASE notas_master;
use notas_master;

CREATE TABLE usuarios (

id int(255) auto_increment not null,
nombre VARCHAR(100) not null,
apellido VARCHAR(100) not null,
email VARCHAR(100) not null,
contraseña VARCHAR(200) not null, 
fecha date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;


CREATE TABLE notas (

id int(255) AUTO_INCREMENT not null,
usuario_id int(100) not null,
titulo VARCHAR(100) not null,
descripcion MEDIUMTEXT not null,
contraseña VARCHAR(100), 
fecha date not null,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entradas_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;


