<?php 

$mysqli = new mysqli('127.0.0.1', 'root', '', 'actividad');

$db = mysqli_connect('127.0.0.1', 'root', '', 'actividad');

$nombre = $_POST['nombre'];



$querys="INSERT INTO `pozo`( `nombre`) VALUES ('$nombre')";


mysqli_query($db, $querys);
header("location: add_registro.php");
?>