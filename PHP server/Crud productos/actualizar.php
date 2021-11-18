<?php
$mysqli = include_once "conexion.php";
session_start();
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];

$sentencia = $mysqli->prepare("UPDATE productos SET
nombre = '".$nombre."',
descripcion = '".$descripcion."',
precio = '".$precio."',
cantidad= '".$cantidad."',
categoria = '".$categoria."'
WHERE id = '".$id."'");
$sentencia->bind_param("ssi", $nombre, $descripcion, $precio, $cantidad, $categoria, $id);
$sentencia->execute();
header("Location: listar.php");
?>