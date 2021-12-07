/* consultas de agrupamiento */

SELECT COUNT(titulo) AS 'NUMERO DE TITULOS', categoria_id from entradas group by categoria_id;

/* consultas de agrupamiento con condicion

SE USA HAVING QUE ES COMO WHERE
 */


SELECT COUNT(titulo) AS 'NUMERO DE TITULOS', categoria_id from 
entradas group by categoria_id HAVING COUNT(titulo) >= 2;


/* FUNCIONES EN consultas de agrupamiento */

/* 
AVG       SACAR MEDIA
COUNT     PARA CONTAR
MAX       PARA SACAR EL VALOR MAXIMO
MIN       PARA SACAR EL VALOR MINIMO 
SUM       SUMA TODO AQUEL CONTENIDO DEL GRUPO
 */


SELECT AVG(id) AS 'MEDIA DE ENTRADAS' from entradas;

SELECT MAX(id) AS 'MAX DE LAS ENTRADAS', titulo from entradas;

SELECT MIN(id) AS 'MIN DE LAS ENTRADAS', titulo from entradas;

SELECT SUM(id) AS 'MIN DE LAS ENTRADAS', titulo from entradas;

