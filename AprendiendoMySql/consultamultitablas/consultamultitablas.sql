/* consultas multitablas */


/* para mostrar las entradas con el nombre del autor y el nombre de la categoria */


SELECT a.id, a.titulo, b.nombre AS "AUTOR", c.nombre AS "CATEGORIAS" 
FROM entradas a, usuarios b, categorias c 
WHERE a.usuario_id = b.id AND a.categoria_id = c.id;

/* mostrar el nombre de las categorias y al lado cuantas entradas tienen */

SELECT a.nombre, count(b.id) AS 'CATEGORIAS CON MAYOR ENTRADA' 
from categorias a, entradas b 
WHERE b.categoria_id = a.id GROUP BY b.categoria_id;

/* MOSTRAR EL EMAIL de los usuarios y al lado cuantas entradas tienen */

SELECT a.email, count(titulo) AS 'NUMERO DE ENTRADAS' from usuarios a, entradas b 
where b.usuario_id = a.id GROUP BY b.usuario_id;
