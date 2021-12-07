/*INSERTAR NUEVOS REGISTROS */

INSERT INTO usuarios VALUES(null, 'moise', 'diaz', 'moi@gmail.com', '123456', '2020-2020-26');
INSERT INTO usuarios VALUES(null, 'jonathan', 'diaz', 'jonathan@gmail.com', '213312', '2020-2020-26');
INSERT INTO usuarios VALUES(null, 'gabo', 'diaz', 'gabo@gmail.com', '32321', '2020-2020-26');

/*INSERTAR NUEVOS REGISTROS 
pero a ciertas columnas */


INSERT INTO usuarios(nombre, apellidos)VALUES('chamito', 'loco');


/*mostrar todos los registros 
/ filas de una tabla  */

SELECT email, nombre, apellidos from usuarios;

/* OPERADORES ARITMETICOS  */

SELECT email, (4/7) AS 'OPERACION' from usuarios;

/* FUNCIONES MATEMATICAS  */

/* VALOR ABSOLUTO  */
SELECT ABS (7) AS 'OPERACION' from usuarios;

/* REDONDEO   */
SELECT CEIL (7.34) AS 'OPERACION' from usuarios;

/* NUMERO RANDOM   */
SELECT RAND () AS 'OPERACION' from usuarios;

/* RAIZ CUADRADA   */
SELECT SQRT (7.91) AS 'OPERACION' from usuarios;

/* funciones para caracteres  */


/* colocar en mayuscula lo que quieras buscar  */

SELECT UPPER(nombre) from usuarios;

/* colocar en minuscula lo que quieras buscar  */

SELECT LOWER(nombre) from usuarios;

/* CONCATENAR UNA COLUMNA CON OTRA  */

SELECT CONCAT(nombre, ' ', apellidos) from usuarios;

/* se puede utilizar una funcion con otra  */

SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'IRGA' from usuarios;

/* LENGTH es para medir la longitud */
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'IRGA' from usuarios;

/* TRIM ES PARA BORRAR ESPACIOS EN LA cadena*/
SELECT TRIM(CONCAT(nombre, ' ', apellidos)) AS 'IRGA' from usuarios;

/* FUNCIONES PARA FECHAS */

/* fecha actual CURDATE */

SELECT email, fecha, CURDATE() AS 'FECHA ACTUAL' from usuarios;

/* fecha actual DATEDIFF PARA QUE INDIQUE
 LOS DIAS DE DIFERENCIA */

SELECT email, DATEDIFF(fecha, CURDATE()) AS 'FECHA ACTUAL' from usuarios;


/* NOMBRE DEL DIA */

SELECT email, DAYNAME(fecha) AS 'FECHA ACTUAL' from usuarios;

/* NUMERO DEL MES */

SELECT email, DAYOFMONTH(fecha) AS 'FECHA ACTUAL' from usuarios;

/* NUMERO DEL DIA DE LA SEMANA */

SELECT email, DAYOFWEEK(fecha) AS 'FECHA ACTUAL' from usuarios;

/* NUMERO DEL DIA DEL AÑO */

SELECT email, DAYOFYEAR(fecha) AS 'FECHA ACTUAL' from usuarios;

/* NUMERO DEL MES */

SELECT email, MONTH(fecha) AS 'FECHA ACTUAL' from usuarios;

/* EL AÑO */

SELECT email, YEAR(fecha) AS 'FECHA ACTUAL' from usuarios;


/* EL DIA DEL MES */

SELECT email, DAY(fecha) AS 'FECHA ACTUAL' from usuarios;

/* HORA */

SELECT email, HOUR(fecha) AS 'FECHA ACTUAL' from usuarios;


/* HORA ACTUAL*/

SELECT email, CURTIME() AS 'FECHA ACTUAL' from usuarios;

/* HORA Y FECHA DEL SISTEMA OPERATIVO*/

SELECT email, SYSDATE() AS 'FECHA ACTUAL' from usuarios;

/* PARA ACOMODAR EL FORMATO DE LA FECHA EN CONSULTAS*/

SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') AS 'FECHA ACTUAL' from usuarios;


/* funciones generales */

SELECT email, ISNULL(apellidos) from usuarios;


/* para distinguir si 2 valores son iguales o no */

SELECT email, STRCMP('HOLA', 'HOLA') from usuarios;

/* para VER LA VERSION DE MYSQL */

SELECT VERSION() from usuarios;

/* USUARIO QUE NO SE REPITE */

SELECT DISTINCT USER() from usuarios;

/* USUARIO EN MYSQL */

SELECT DISTINCT DATABASE() from usuarios;

/* PARA VERIFICAR QUE CAMPO ESTA VACIO Y COLOCAR UN MENSAJE */

SELECT IFNULL(apellidos, 'qlq mano') from usuarios;




