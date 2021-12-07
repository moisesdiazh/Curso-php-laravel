/* para mostrar las entradas con el nombre del autor y el nombre de la categoria */


/*POR INNER JOIN    // SE USA PARA AGRUPAR 2 TABLAS Y LO QUE BUSCAMOS*/

SELECT a.id, a.titulo, b.nombre  AS 'AUTOR', c.nombre AS 'CATEGORIA'
FROM entradas a
INNER JOIN usuarios b ON a.usuario_id = b.id
INNER JOIN categorias c ON a.categoria_id = c.id



/* mostrar el nombre de las categorias y al lado cuantas entradas tienen */

SELECT a.nombre, count(b.id) AS 'CATEGORIAS CON MAYOR ENTRADA'
FROM categorias a
INNER JOIN entradas b ON b.categoria_id = a.id GROUP BY b.categoria_id


/* TAMBIEN TENEMOS LEFT JOIN QUE ES PARA MOSTRAR LA AGRUPACION DE
 LAS TABLAS ASI NO TENGAN CONTENIDO EN LA TABLA DE LA IZQUIERDA*/

SELECT a.nombre, count(b.id) AS 'CATEGORIAS CON MAYOR ENTRADA'
FROM categorias a
LEFT JOIN entradas b ON b.categoria_id = a.id GROUP BY b.categoria_id

/* TAMBIEN TENEMOS RIGHT JOIN QUE ES PARA MOSTRAR LA AGRUPACION DE
 LAS TABLAS ASI NO TENGAN CONTENIDO EN LA TABLA DE LA DERECHA*/



/* COMO CREAR LAS VISTAS EN MYSQL //
 es como una function la cual te guarda un codigo completo */

CREATE VIEW entradas_con_nombre AS
SELECT a.id, a.titulo, b.nombre  AS 'AUTHOR', c.nombre AS 'CATEGORIA'
FROM entradas a
INNER JOIN usuarios b ON a.usuario_id = b.id
INNER JOIN categorias c ON a.categoria_id = c.id


/* para ejecutarla */

SELECT * from entradas_con_nombre



