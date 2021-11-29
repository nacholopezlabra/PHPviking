<?php
 include_once "conexionU.php";
session_start();

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$rol_id = $_POST["rol_id"];
$sentencia ="INSERT INTO users
(username, email,password,rol_id)
VALUES
('" .$username."', '" .$email."','" .md5($password)."','" .$rol_id."')";



if($mysqli -> query($sentencia)){
    header("Location: listarU.php");
}else{
    echo "error";
    echo $username, $email, $password, $rol_id;
}


