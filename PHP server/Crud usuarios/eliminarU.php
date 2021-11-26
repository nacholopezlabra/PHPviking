<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
session_start();
$mysqli = include_once "conexionU.php";

$id = $_GET["id"];
$sentencia = $mysqli->prepare("DELETE FROM users WHERE id = '".$id."'");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: /Crud usuarios/listarU.php");
?>