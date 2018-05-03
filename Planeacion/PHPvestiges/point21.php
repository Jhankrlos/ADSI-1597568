<?php

/**
 * $_SERVER: es un array que contiene información, tales como cabeceras,
 *  rutas y ubicaciones de script. Las entradas de este array son creadas
 *  por el servidor web. No hay garantía que cada servidor web proporcione
 *  alguna de estas entradas, existen servidores que pueden omitir algunas
 *  o proporcionar otras no recogidas aquí. 
 */


/**
 * $_REQUEST: Un array asociativo que por defecto contiene el contenido de
 *  $_GET, $_POST y $_COOKIE. Las variables en $_REQUEST se proporcionan al 
 * script a través de los mecanismos de entrada GET, POST, y COOKIE y por 
 * lo tanto pueden ser manipulados por el usuario remoto y no debe confiar 
 * en el contenido.
 */


/**
 * $_POST: Un array asociativo de variables pasadas al script actual a través
 *  del método POST de HTTP cuando se emplea application/x-www-form-urlencoded
 *  o multipart/form-data como Content-Type de HTTP en la petición.
 */


/**
 * $_GET: Un array asociativo de variables pasado al script actual vía
 *  parámetros URL.
 */


/**
 * $_COOKIE: Una variable tipo array asociativo de variables pasadas al
 *  script actual a través de Cookies HTTP.
 */