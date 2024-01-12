<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "formulario";

$conexion = new mysqli($server, $user, $pass, $db);

if($conexion -> connect_errno){
    die("Conexión fallida" . $conexion -> connect_errno);
} else {
    echo "Conexión Exitosa";
}

?>