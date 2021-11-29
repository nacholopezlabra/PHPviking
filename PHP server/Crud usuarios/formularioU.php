<?php
session_start();
require_once "conexionU.php";
$username =$_SESSION=['username'];
$sql_fetch_all = "SELECT * FROM users ORDER BY id ASC";
$query= mysqli_query($mysqli, $sql_fetch_all)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    <title>Formulario</title>
</head>
<body>
    

<div class="row">
    <div class="col-12">
        <h1>Registrar usuario</h1>
        <form action="registrarU.php" method="POST">
            <div class="form-group">
                <label for="nombre">nombre</label>
                <input placeholder="username" class="form-control" type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="descripcion">email</label>
                <input placeholder="email" class="form-control" type="text" name="email" id="email" required>
            </div>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input placeholder="password" class="form-control" type="text" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="rol_id">rol_id</label>
                <input placeholder="rol_id" class="form-control" type="int" name="rol_id" id="rol_id" required>
            </div>
            <div class="form-group"><button class="btn btn-success">Guardar</button></div>
        </form>
    </div>
</div>
</body>
</html>