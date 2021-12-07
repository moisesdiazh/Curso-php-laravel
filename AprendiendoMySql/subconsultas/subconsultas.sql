/* SUBCONSULTAS */

/* ejemplo */


SELECT * FROM usuarios where id IN (select usuario_id from entradas);


/* sacar usuarios que tengan en comun gta */

SELECT nombre, apellidos FROM usuarios where id 
IN (select usuario_id from entradas where descripcion like '%GTA%');


/* sacar todas las entradas de la categoria accion utilizando su nombre */

SELECT titulo from entradas where categoria_id 
IN (SELECT id from categorias where nombre = 'Accion');


/* mostrar las categorias con mas de 3 o mas entradas */

SELECT nombre from categorias where id 
IN(select categoria_id from entradas GROUP BY 
categoria_id HAVING COUNT(categoria_id)>= 3);


/* mostrar usuarios que crearon entrada un martes */

SELECT nombre from usuarios where id 
in (SELECT usuario_id from entradas where DAYOFWEEK(fecha) = 3 );


/* usuario con mas entradas */


SELECT * from usuarios where id = (SELECT usuario_id from entradas 
GROUP BY usuario_id ORDER BY COUNT(id) LIMIT 1);

/*MOSTRAR LAS CATEGORIAS CON ENTRADAS */

SELECT * from categorias WHERE id in(select categoria_id from entradas);







