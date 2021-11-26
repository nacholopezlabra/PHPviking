<?php
$mysqli = include_once "conexion.php";
session_start();
$resultado = $mysqli->query("SELECT id, nombre, descripcion,precio,cantidad,categoria FROM productos");
$productos = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="custom.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <title>listado Productos</title>
</head>

<body>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxs-shield'></i>
        <span class="logo_name">AdminPanel</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="../admin.php" class="active">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../Crud usuarios/listarU.php">
            <i class='bx bx-user'></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip"></span>
        </li>
        <li>
          <a href="../Crud productos/listar.php">
            <i class='bx bx-coin-stack'></i>
            <span class="links_name">Shop Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog'></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search...">
          <i class='bx bx-search'></i>
        </div>
      </nav>

      <table class="table">

        <div class="tittle">Manage Products</div>
        
        <td>ID</td>
        <td>Nombre</td>
        <td>Descripción</td>
        <td>Precio</td>
        <td>Cantidad</td>
        <td>Categoria</td>
        <td><a href="formulario.php"><i class='bx bx-plus'></i></a></td>
       

        
         
            <?php foreach ($productos as $producto) { ?>
              <tr class="row">
                <td><?php echo $producto["id"] ?></td>
                <td><?php echo $producto["nombre"] ?></td>
                <td><?php echo $producto["descripcion"] ?></td>
                <td><?php echo $producto["precio"] ?></td>
                <td><?php echo $producto["cantidad"] ?> </td>
                <td><?php echo $producto["categoria"] ?></td>
                <td><a href="editar.php?id=<?php echo $producto["id"] ?>"><i class='bx bxs-pencil'></i></a>
                <a href="eliminar.php?id=<?php echo $producto["id"] ?>"><i class='bx bxs-trash-alt'></i></a></td>
              <?php } ?>
              </tr>
       
      </table>











</html>
<script>
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if (sidebar.classList.contains("active")) {
      sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    } else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
</script>