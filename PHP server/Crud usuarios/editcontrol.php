<?php
include_once "conexionU.php";
session_start();
# Actualizar fichero.
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$rol_id = $_POST["rol_id"];
$id= $_POST["id"];

if(isset($_POST["username"])){
    $username = $_POST["username"];

}
if(isset($_POST["email"])){
    $email = $_POST["email"];

}
if(isset($_POST["password"])){
    $password = $_POST["password"];

}
if(isset($_POST["rol_id"])){
    $rol_id = $_POST["rol_id"];

}
if(isset($_POST["id"])){
    $id = $_POST["id"];

}

$actualizar = "UPDATE users SET username ='$username',email ='$email', password='".md5('$password')."',rol_id='$rol_id' WHERE id ='$id'";
echo  $actualizar;
if($mysqli->query($actualizar)) {
    header("Location: /Crud usuarios/listarU.php");
}
?>