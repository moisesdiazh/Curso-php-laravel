
/* para renombrar una tabla */
ALTER TABLE usuarios RENAME TO usuarios_renom;

/* para renombrar una columna */
ALTER TABLE usuarios_renom CHANGE apellido apellidos varchar(100) null;

/* para modificar una columna */
ALTER TABLE usuarios_renom MODIFY apellidos char(40) not null;

/* para añadir una columna */
ALTER TABLE usuarios_renom ADD website varchar(100) null;

/* para añadir restricciones a una columna, 
UQ_EMAIL UNIQUE ES PARA QUE SEA UNICO */
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE (email);

/* para borrar una columna */
ALTER TABLE usuarios_renom DROP website;

