<?php
/*

Credenciales de la base de datos, asumiendo que se este corriendo un servidor MySQL con los valores por defecto (usuario root sin contraseña) */
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('CONTRASENA', '');
define('BDD', 'actividad');
 
/*Intento de conectar a la base de datos */
$link = mysqli_connect(SERVIDOR, USUARIO, CONTRASENA, BDD);
 
// Chequear conexión
if($link === false){
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}
?>