<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
session_start();
$mysqli = include_once "conexion.php";

$id = $_GET["id"];
$sentencia = $mysqli->prepare("DELETE FROM productos WHERE id = '".$id."'");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: /Crud productos/listar.php");
?>