/* BASE DE DATOS DE UN CONSESIONARIO */


CREATE TABLE coches(
id           int(10) AUTO_INCREMENT not null,
modelo       varchar(100) not null,
marca        varchar(50),
precio       int(20) not null,
stock        int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE grupos(
id          int(10) AUTO_INCREMENT not null,
nombre      varchar(100) not null,
ciudad      varchar(100) not null,
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE vendedores(
id          int(10) AUTO_INCREMENT not null,
grupo_id    int(10) not null,
jefe        int(10),
nombre      varchar(100) not null,
apellidos   varchar(100),
cargo       varchar(100),
fecha       date,
sueldo      float(20,2),
comision    float(10,2) not null,
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
id            int(10) AUTO_INCREMENT not null,
vendedor_id   int(10) not null,
nombre        varchar(100) not null,
ciudad        varchar(100) not null,
gastado       float(50,2),
fecha         date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;


CREATE TABLE encargos(
id            int(10) AUTO_INCREMENT not null,
cliente_id    int(10) not null,
coche_id      int(10) not null,
cantidad      int(100),
fecha         date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;



/*llenando las tablas */ 



/*COCHES */

INSERT INTO coches VALUES(NULL, 'KIA KIPER', 'KIA', 12000, 13); 
INSERT INTO coches VALUES(NULL, 'CHEVROLET VOL', 'CHEVROLET', 15000, 11); 
INSERT INTO coches VALUES(NULL, 'KIA SNAKE', 'KIA', 8000, 15); 
INSERT INTO coches VALUES(NULL, 'RENAULT KLIO', 'RENAULT', 12670, 13); 
INSERT INTO coches VALUES(NULL, 'KIA FOR', 'KIA', 19000, 3); 
INSERT INTO coches VALUES(NULL, 'KIA DOCE', 'KIA', 14500, 8); 
INSERT INTO coches VALUES(NULL, 'HYUNDAI BODY', 'HYUNDAI', 9660, 5); 


/* GRUPOS */

INSERT INTO grupos VALUES(NULL, 'VENDEDORES A', 'Madrid'); 
INSERT INTO grupos VALUES(NULL, 'VENDEDORES B', 'Madrid'); 
INSERT INTO grupos VALUES(NULL, 'VENDEDORES C', 'Madrid'); 
INSERT INTO grupos VALUES(NULL, 'Directores mecanicos', 'Madrid'); 
INSERT INTO grupos VALUES(NULL, 'VENDEDORES B', 'Barcelona'); 
INSERT INTO grupos VALUES(NULL, 'VENDEDORES B', 'Barcelona'); 
INSERT INTO grupos VALUES(NULL, 'VENDEDORES C', 'Caracas'); 
INSERT INTO grupos VALUES(NULL, 'VENDEDORES C', 'Bilbao'); 
INSERT INTO grupos VALUES(NULL, 'VENDEDORES A', 'Vargas'); 


/* VENDEDORES */
INSERT INTO vendedores VALUES(NULL, 1, NULL,'David', 'Lopez', 'Responsable de tienda', CURDATE(), '30000', '4'); 
INSERT INTO vendedores VALUES(NULL, 2, 1,'Luis', 'Lopez', 'Ayudante en tienda', CURDATE(), '44000', '5'); 
INSERT INTO vendedores VALUES(NULL, 2, NULL,'Moises', 'Diaz', 'El presi', CURDATE(), '433000', '30'); 
INSERT INTO vendedores VALUES(NULL, 4, 3,'Jonathan', 'Hernandez', 'El capo', CURDATE(), '222203', '20'); 
INSERT INTO vendedores VALUES(NULL, 3, NULL,'Gabriel', 'Brisas', 'Mecanico en tienda', CURDATE(), '40000', '5'); 
INSERT INTO vendedores VALUES(NULL, 2, NULL,'Wendell', 'Cabello', 'Responsable de tienda', CURDATE(), '23234', '6'); 
INSERT INTO vendedores VALUES(NULL, 1, NULL,'Alfredo', 'Wielg', 'Ejecutivo de cuentas', CURDATE(), '43000', '7'); 
INSERT INTO vendedores VALUES(NULL, 6, NULL,'Juan', 'Caballero', 'Responsable de tienda', CURDATE(), '35000', '8'); 
INSERT INTO vendedores VALUES(NULL, 5, 8,'Carlos', 'Perez', 'Responsable de tienda', CURDATE(), '36000', '6'); 

/* Clientes */

INSERT INTO clientes VALUES(NULL, 1,'Diaz Hernandez SA', 'Caracas', 32000, CURDATE()); 
INSERT INTO clientes VALUES(NULL, 2,'Bagi SA', 'Santiago', 15000, CURDATE()); 
INSERT INTO clientes VALUES(NULL, 3,'Begin SA', 'Santiago', 22000, CURDATE()); 
INSERT INTO clientes VALUES(NULL, 6,'Caracas SA', 'Viña del mar', 12000, CURDATE()); 
INSERT INTO clientes VALUES(NULL, 5,'Fernandez SA', 'Vargas', 32000, CURDATE()); 
INSERT INTO clientes VALUES(NULL, 4,'Lider SA', 'Miranda', 24000, CURDATE()); 
INSERT INTO clientes VALUES(NULL, 3,'Claro SA', 'Antofagasta', 18000, CURDATE()); 
INSERT INTO clientes VALUES(NULL, 5,'Belfort SA', 'Santiago', 15000, CURDATE()); 
INSERT INTO clientes VALUES(NULL, 2,'Solsi SA', 'Viña del mar', 26000, CURDATE()); 


/* Encargos */

INSERT INTO encargos VALUES(NULL, 1, 1, 2, CURDATE()); 
INSERT INTO encargos VALUES(NULL, 2, 2, 4, CURDATE()); 
INSERT INTO encargos VALUES(NULL, 3, 3, 1, CURDATE()); 
INSERT INTO encargos VALUES(NULL, 4, 3, 3, CURDATE()); 
INSERT INTO encargos VALUES(NULL, 5, 5, 1, CURDATE()); 
INSERT INTO encargos VALUES(NULL, 6, 6, 1, CURDATE()); 






