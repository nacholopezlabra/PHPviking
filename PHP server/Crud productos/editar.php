<?php
$mysqli = include_once "conexion.php";
session_start();
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, nombre, descripcion, precio, cantidad, categoria FROM productos WHERE id = $id");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
# Obtenemos solo una fila, que será el videojuego a editar
$productos = $resultado->fetch_assoc();
if (!$productos) {
    exit("No hay resultados para ese ID");
}

?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar videojuego</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $productos["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $productos["nombre"] ?>" placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required><?php echo $productos["descripcion"] ?></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input value="<?php echo $productos["precio"] ?>" placeholder="precio" class="form-control" type="int" name="precio" id="precio" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input value="<?php echo $productos["cantidad"] ?>" placeholder="cantidad" class="form-control" type="int" name="cantidad" id="cantidad" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input value="<?php echo $productos["categoria"] ?>" placeholder="categoria" class="form-control" type="text" name="categoria" id="categoria" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listar.php">Volver</a>
            </div>
        </form>
    </div>
</div>
