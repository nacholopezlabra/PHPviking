<?php
$mysqli = include_once "conexionU.php";
session_start();
$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$rol_id = $_POST["rol_id"];


$sentencia = $mysqli->prepare("UPDATE users SET
username = '".$username."',
email = '".$email."',
password = '".$password."',
rol_id= '".$rol_id."',
WHERE id = '".$id."'");
$sentencia->bind_param("ssi", $username, $email, $password, $rol_id, $id);
$sentencia->execute();
header("Location: listarU.php");
?>