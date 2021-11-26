<?php
$mysqli = include_once "conexionU.php";
session_start();
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, username, email, 'password', rol_id, FROM users WHERE id = $id");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
# Obtenemos solo una fila, que será el videojuego a editar
$users = $resultado->fetch_assoc();
if (!$users) {
    exit("No hay resultados para ese ID");
}

?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar usuarios</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $users["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $users["username"] ?>" placeholder="nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?php echo $users["email"] ?>" placeholder="email" class="form-control" type="text" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input value="<?php echo $users["password"] ?>" placeholder="password" class="form-control" type="text" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="rol_id">rol_id</label>
                <input value="<?php echo $users["rol_id"] ?>" placeholder="rol_id" class="form-control" type="int" name="rol_id" id="rol_id" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listarU.php">Volver</a>
            </div>
        </form>
    </div>
</div>
