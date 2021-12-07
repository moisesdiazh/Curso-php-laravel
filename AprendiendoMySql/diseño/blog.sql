CREATE TABLE usuarios(

id int(255) AUTO_INCREMENT not null,
nombre varchar(100) not null,
apellidos varchar(255) not null,
email varchar(100) not null,
contraseña varchar(255) not null,
fecha date not null,
CONSTRAINT pk_usuarios PRIMARY  KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;


CREATE TABLE entradas(

id int(255) AUTO_INCREMENT not null,
usuario_id int(255) not null,
categoria_id int(255) not null,
titulo varchar(100) not null,
descripcion MEDIUMTEXT,
fecha date not null,
CONSTRAINT pk_entradas PRIMARY  KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;


CREATE TABLE categorias(

id int(255) AUTO_INCREMENT not null,
nombre varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY  KEY(id)
)ENGINE=InnoDb;