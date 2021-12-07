/* EJERCICIO2. MODIFICAR LA COMISION DE LOS VENDEDORES Y PONERLA AL 0.5% CUANDO GANAN MAS DE 50000 */

UPDATE usuarios SET fecha=CURDATE() WHERE id = 4;


UPDATE vendedores SET comision = 0.5 WHERE sueldo >= 50000;


/* EJERCICIO3. INCREMENTAR LOS PRECIOS DE LOS COCHES EN UN 5% */


UPDATE coches SET precio = precio*1.05;

/* EJERCICIO4. SACAR A TODOS LOS VENDEDORES CUYA FECHA DE ALTA SEA POSTERIOR AL 1 DE JULIO DE 2018 */

select * from vendedores where fecha >= '2018-07-01';


/* EJERCICIO5.  mostrar todos los vendedores con su nombre 
y el numero de dias que llevan en el consesionario*/


select nombre, DATEDIFF(CURDATE(), fecha) AS 'DIAS TRABAJADOS' from vendedores;

/* EJERCICIO6. visualizar el nombre y los apellidos de los vendedores en una misma columna 
y su fecha de registro y que dia de la semana se registraron*/

select CONCAT(nombre, ' ',apellidos) AS 'Nombre y apellido', fecha, DAYNAME(fecha) 
from vendedores; 

/* EJERCICIO7. mostrar el nombre y el salario de 
los vendedores con cargos responsables de tienda*/

select nombre, sueldo, cargo from vendedores where cargo = 'Responsable de tienda';

/* EJERCICIO8. VISUALIZAR TODOS LOS COCHES EN CUYO MARCA EXISTA LA LETRA I
Y CUYO MODELO EMPIECE POR K*/

select * from coches where marca like '%I%' AND modelo like 'K%';

/* EJERCICIO9. MOSTRAR TODOS LOS VENDEDORES DEL GRUPO NUMERO 2 ORDENADOS 
POR SALARIO DE MAYOR A MENOR*/

select * from vendedores where grupo_id = 2 ORDER BY sueldo DESC;


/* EJERCICIO10. VISUALIZAR LOS APELLIDOS DE LOS VENDEDORES, 
SU FECHA DE ALTA Y NUMERO DE GRUPO, ORDENADOS POR SU FECHA DE ALTA, mostrar 4 ultimos*/


select apellidos, fecha, grupo_id from vendedores ORDER BY fecha DESC LIMIT 4;