<?php
$mysqli = include_once "conexionU.php";
session_start();
$id=$_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$rol_id = $_POST["rol_id"];
$sentencia = $mysqli->prepare("INSERT INTO users
(username, email,'password',rol_id)
VALUES
('" .$username."', '" .$email."','" .$password."','" .$rol_id."')");
$sentencia->bind_param($id, $username, $email,$password,$rol_id);
$sentencia->execute();
header("Location: listarU.php");
