/*consulta con condiciones */

/*WHERE = MIENTRAS QUE */


SELECT * from usuarios WHERE email = 'gabo@gmail.com';

/* operadores

igual           =
distinto       !=
menor           < 
mayor           >
menor igual    <=
mayor igual    =>
entre        between a and b
En           in  
Es nulo      is null
No nulo      not null  
como         like
no es como   not like  

*/

/*apellido y nombre de los que se registraron en esa fecha*/

SELECT nombre, apellidos from usuarios WHERE year(fecha) = 2020;

/*apellido y nombre de los que se registraron distinto a esa fecha*/

SELECT nombre, apellidos from usuarios WHERE year(fecha) != 2020;


/* consulta del correo por apellidos con az y la clave tenga 23 */

SELECT email from usuarios WHERE apellidos like '%az%' and contraseña like '%23%';

/* consulta de todos los datos pero donde el año sea par */

SELECT * from usuarios where (YEAR(fecha)%2 = 0);

/* consulta de todos los datos pero donde el año sea IMpar */

SELECT * from usuarios where (YEAR(fecha)%2 != 0);

/* sacar datos de los registros de la tabla cuyo nombre
tenga mas de 5 letras y que hayan sido registrado 
antes del 2020 y mostrar nombre en mayus */

SELECT UPPER(nombre), apellidos from usuarios where LENGTH(nombre) >5 and YEAR(fecha) <2020;