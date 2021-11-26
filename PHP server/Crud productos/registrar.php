<?php
$mysqli = include_once "conexion.php";
session_start();
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];
$sentencia = $mysqli->prepare("INSERT INTO productos
(nombre, descripcion,precio,cantidad,categoria)
VALUES
('" .$nombre."', '" .$descripcion."','" .$precio."','" .$cantidad."','" .$categoria."')");
$sentencia->bind_param("ss", $nombre, $descripcion,$precio,$cantidad,$categoria);
$sentencia->execute();
header("Location: listar.php");
