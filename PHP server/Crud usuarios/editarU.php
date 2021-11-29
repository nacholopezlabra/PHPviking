<?php
include_once "conexionU.php";
session_start();
$editar = "SELECT * FROM users ORDER BY id ASC";
$query = mysqli_query($mysqli, $editar);

?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar usuarios</h1>
        <form action="editcontrol.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="username">username</label>
                <input value="<?php echo $editar["username"] ?>" placeholder="username" class="form-control" type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?php echo $editar["email"] ?>" placeholder="email" class="form-control" type="text" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input value="<?php echo $editar["password"] ?>" placeholder="password" class="form-control" type="text" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="rol_id">rol_id</label>
                <input value="<?php echo $editar["rol_id"] ?>" placeholder="rol_id" class="form-control" type="int" name="rol_id" id="rol_id" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listarU.php">Volver</a>
            </div>
        </form>
    </div>
</div>
