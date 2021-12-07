/* EJERCICIO11. VISUALIZAR TODOS LOS CARGOS Y 
EL NUMERO DE VENDEDORES QUE HAY EN CADA CARGO*/

select cargo, COUNT(id) AS 'EMPLEADOS EN EL CARGO' 
from vendedores GROUP BY cargo ORDER BY COUNT(id) DESC;


/* EJERCICIO12. CONSEGUIR LA MASA SALARIAL DEL CONSESIONARIO ANUAL*/

SELECT SUM(sueldo) AS 'SUELDO TOTAL ANUAL' from vendedores; 



/* EJERCICIO13. la media de sueldo de todos los vendedores por grupo*/

select grupo_id, AVG(sueldo) AS 'PROMEDIO DE SUELDOS' 
FROM vendedores GROUP BY grupo_id ORDER BY AVG(sueldo) DESC;





/*ejercicio14. visualizar las unidades totales vendidas de cada coche a cada cliente 
mostrando el nombre del producto, el nombre del cliente y la suma de unidades*/


select b.modelo, c.nombre, SUM(a.cantidad) AS 'COCHES ENCARGADOS' from encargos a
INNER JOIN coches b ON b.id = a.coche_id
INNER JOIN clientes c ON c.id = a.cliente_id
GROUP BY a.coche_id, a.cliente_id;


/* EJERCICIO15. mostrar los clientes que mas pedidos 
han realizado y mostrar cuantos hicieron*/

SELECT c.nombre, COUNT(e.id) FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;


/* EJERCICIO16. obtener listado de clientes atendidos por el vendedor david LOPEZ */

select * from clientes where vendedor_id IN
(SELECT id from vendedores where nombre = 'David' AND apellidos = 'Lopez');



/* EJERCICIO17. obtener un listado con los encargos realizados por los clientes por bagi SA*/

select * from encargos where cliente_id IN 
(select id from clientes where nombre = 'Bagi SA');

#otra forma

SELECT e.id AS 'Numeros de encargos', cantidad, c.nombre, co.modelo, e.fecha
FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN (SELECT id FROM clientes WHERE nombre = 'Bagi SA');


/* EJERCICIO18. LISTAR LOS CLIENTES QUE HAN REALIZADO ENCARGOS POR EL COCHE KIA SNAKE*/

Select * from clientes where id IN 
(SELECT cliente_id from encargos where coche_id 
IN (select id from coches where modelo LIKE '%KIA SNAKE%'));

/* EJERCICIO19. obtener los vendedores con 2 o mas clientes*/

SELECT * FROM vendedores where id
IN (SELECT vendedor_id from clientes GROUP BY vendedor_id HAVING COUNT(id)>=2 );


/* EJERCICIO20. SELECCIONAR EL GRUPO EN DONDE TRABAJA 
EL VENDEDOR CON MAYOR SALARIO, VISUALIZANDO EL NOMBRE DEL GRUPO*/

select * from grupos WHERE id IN 
(SELECT grupo_id from vendedores where sueldo = (select MAX(sueldo) from vendedores));