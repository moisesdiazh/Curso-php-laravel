/* EJERCICIO21. OBTENER LOS NOMBRES Y LAS CIUDADES DE LOS CLIENTES CON ENCARGOS 
Y QUE SEA MAYOR O IGUAL A 3 UNIDADES*/


select nombre, ciudad from clientes where id IN 
(SELECT cliente_id from encargos where cantidad >= 3);




/* EJERCICIO22. MOSTRAR LISTADO DE CLIENTES (NUMERO DE CLIENTE Y NOMBRE) 
TAMBIEN MOSTRAR NUMERO DE VENDEDOR Y NOMBRE*/

select c.nombre, c.id, CONCAT(ven.nombre, ' ', ven.apellidos) AS 'NOMBRE Y APELLIDO', ven.id 
from clientes c, vendedores ven
WHERE c.vendedor_id = ven.id;



/* EJERCICIO23. LISTAR TODOS LOS ENCARGOS REALIZADOS CON LA MARCA DEL COCHE 
Y EL NOMBRE DEL CLIENTE*/

SELECT e.id, co.marca, c.nombre from encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id;



/* EJERCICIO24. LISTAR LOS ENCARGOS CON EL NOMBRE DEL COCHE, EL NOMBRE DEL CLIENTE 
Y EL NOMBRE DE LA CIUDAD PERO UNICAMENTE QUE SEAN DE SANTIAGO*/

select e.id, co.modelo, c.nombre, c.ciudad FROM coches co
INNER JOIN encargos e ON e.coche_id = co.id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE c.ciudad = 'Santiago';


/* EJERCICIO25. OBTENER UNA LISTA DE LOS NOMBRES DE 
LOS CLIENTES CON EL IMPORTE DE SUS CARGOS ACUMULADO*/

SELECT c.nombre, SUM(precio*cantidad) AS 'IMPORTE'
FROM clientes c
INNER JOIN encargos e ON e.cliente_id = c.id
INNER JOIN coches co ON co.id = e.coche_id
GROUP BY c.nombre
ORDER BY 2 DESC;


/* EJERCICIO26. SACAR VENDEDORES QUE TIENEN JEFE Y SACAR NOMBRE DEL JEFE*/

SELECT v1.nombre AS 'VENDEDOR', v2.nombre AS 'JEFE' FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id;



/* EJERCICIO27. visualizar los nombres de los clientes y la cantidad de encargos realizados,
incluyendo los que no han realizado encargos*/

select c.nombre, count(e.id) AS 'CANTIDAD DE PEDIDOS' from clientes c
LEFT JOIN encargos e ON e.cliente_id = c.id
GROUP BY 1;


/* EJERCICIO28. MOSTRAR TODOS LOS VENDEDORES TENGAN O NO CLIENTES 
Y MOSTRAR EL NUMERO DE CLIENTES*/

SELECT v.nombre, v.apellidos, count(c.id) AS 'NUMERO DE CLIENTES' from vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id;



/* EJERCICIO29. CREAR UNA VISTA LLAMADA VENDEDORES A QUE INCLUIRA 
TODOS LOS VENDEDORES DEL GRUPO QUE SE LLAME VENDODRES A*/

CREATE VIEW vendedoresA AS
select * from vendedores where grupo_id IN 
(select id from grupos where nombre = 'VENDEDORES A' );


/* EJERCICIO30. MOSTRAR LOS DATOS DEL VENDEDOR CON MAS ANTIGUEDAD DEL CONSESIONARIO*/

SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;


/* EJERCICIO31. OBTENER LOS COCHES CON MAS UNIDADES VENDIDAS*/

SELECT * from coches where id IN 
(SELECT coche_id from encargos where cantidad 
IN (SELECT MAX(cantidad) from encargos));



