<?php
$host = "localhost";
$usuario = "root";
$contrasenia = "usbw";
$base_de_datos = "test";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
?>