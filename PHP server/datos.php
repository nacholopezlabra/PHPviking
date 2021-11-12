<?php
$username =$_POST['username'];
$Nombre =$_POST['Nombre'];
$Edad =$_POST['Edad'];
$Apellidos =$_POST['Apellidos'];
$password =$_POST['password'];
echo " El nombre es ".$Nombre." la edad es ".$Edad." y los apellidos son ".$Apellidos." y su usuario es ".$username." y su contraseña es".$password;
 
$servidor="localhost";
$usuario="root";
$password="usbw";
$bd="test";
 
$con=mysqli_connect($servidor,$usuario,$password,$bd);
 
if(!$con){
die("No se ha podido realizar la conexion_".mysqli_connect_error($servidor,$usuario,$password,$bd));
}else{
    mysqli_set_charset($con,"utf8");
    echo "Se ha conectado correctamente a la db";
 
    $sql = "INSERT INTO `test`.`alumnos` (`id`,`username`, `Nombre`, `Apellidos`, `edad`,`password`) VALUES (NULL, '$username','$Nombre', '$Apellidos', '$Edad','$password')";
 
$consulta=mysqli_query($con,$sql);
 
if(!$consulta){
    die("No se ha podido realizar el insert");
}else{
    echo "El insert se ha realizado exitosamente";
}
?>
}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<table>
<?php 
$sql2="SELECT * FROM `alumnos` WHERE 1";
$consulta=mysqli_query($con,$sql2);
while($fila=$consulta->fetch_assoc()){
echo"<tr>";
echo"<td>".$fila["id"]."</td>";
echo"<td>".$fila["Nombre"]."</td>";
echo"<td>".$fila["Apellidos"]."</td>";
echo"<td>".$fila["edad"]."</td>";
echo"</td>";
}  
?>
</table>

</body>
</html>
<?php
}
?>
