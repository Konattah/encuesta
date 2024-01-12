<?php

// Datos de la base en xampp
$server = "localhost";
$user = "root";
$pass = "";
$db = "formulario";

// Establecer conexión
$conexion = new mysqli($server, $user, $pass, $db);

// Manejar errores
if($conexion -> connect_errno){
    die("Conexión fallida" . $conexion -> connect_errno);
} 
?>