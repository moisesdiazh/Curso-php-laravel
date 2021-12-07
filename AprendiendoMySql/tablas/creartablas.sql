/*
para ingresar a mysql en cmd buscar en el wamp 
la consola en mysql


show databases; es para ver las tablas que tienes

use blog; es para usar 
la database que quieres modificar en especial

describe usuarios; para describir la tabla

drop table usuarios; para eliminar la tabla

create table usuarios; crear tabla



int (n cifras) entero
integer (n caracteres) entero
varchar (n caracteres) STRING / ALPHA NUMERICO
char (n caracteres) STRING / ALPHA NUMERICO
float (n cifras, n de decimales) Numeros decimales
date (fechas), time, timestamp

//string mas grandes

text 65535 caracteres
MEDIUMTEXT 16 MILLONES DE CARACTERES
LONGTEXT 4 BILLONES DE CARACTERES

//enteros mas grande
mediumint
bigint


id int(11) auto_increment not null
El id por lo general se deja con auto incremento 
y se deja como primary key


CONSTRAINT pk_usuarios PRIMARY KEY(id)
para crear una primary key




*/


CREATE TABLE usuarios(
id          int(11) auto_increment not null,
nombre      varchar(100) not null,
apellido   varchar(255) default 'qlq',
email       varchar(100) not null,
contraseña  varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);   



