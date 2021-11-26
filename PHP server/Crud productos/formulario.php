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
        <h1>Registrar producto</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="nombre">precio</label>
                <input placeholder="precio" class="form-control" type="int" name="precio" id="precio" required>
            </div>
            <div class="form-group">
                <label for="nombre">cantidad</label>
                <input placeholder="cantidad" class="form-control" type="int" name="cantidad" id="cantidad" required>
            </div>
            <div class="form-group">
                <label for="nombre">categoria</label>
                <input placeholder="categoria" class="form-control" type="text" name="categoria" id="categoria" required>
            </div>
            <div class="form-group"><button class="btn btn-success">Guardar</button></div>
        </form>
    </div>
</div>
</body>
</html>